<?php
    class Colleges extends CI_Controller{

        public function create(){
            if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }

            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('inititals','Inittials','required');

            // Upload Image
            $config['upload_path'] = './assets/images/college_logos';
            $config['allowed_types'] = 'gif|jpg|png|ico';
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload()){
                $errors = array('error' => $this->upload->display_errors());
                $post_image = 'noimage.png';
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = str_replace(" ", "_", $_FILES['userfile']['name']);
            }

            //get name of user
            $username = $this->input->post('username');

            $name = $this->user_model->get_name($username);

            //create college
            $this->college_model->create_college($post_image,$name);

            $this->session->set_flashdata('college_created','New college successfully added.');

            $colinit = $this->input->post('initials');
            $title = "New college added: ".$colinit;

            $this->activity_model->add($title,$type="graduation-cap");

            redirect('colleges');
        }

        public function update(){
             if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }

            $name = $this->input->post('name');
            $initials = $this->input->post('initials');
            $block = $this->input->post('block');
            //get librarian
            $librarian = $this->input->post('librarian');
            $usernameChr = strrchr($librarian,"[");
            $username = trim($usernameChr, "[]");
            $librarian = trim($librarian, $usernameChr);
            $librarian = trim($librarian);


            // Upload Image
            $config['upload_path'] = './assets/images/college_logos';
            $config['allowed_types'] = 'gif|jpg|png|ico';
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload()){
                $errors = array('error' => $this->upload->display_errors());
                $post_image =  $this->input->post('oldImage');
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = str_replace(" ", "_", $_FILES['userfile']['name']);
            }

            $this->college_model->update_college($name,$initials,$librarian,$username,$block,$post_image);

            $this->session->set_flashdata('college_updated','College successfully updated.');

            $collegeNumber = $this->input->post('collegeNumber');

            $collegeInitials = $this->college_model->get_col_initials($collegeNumber);

            $title = "College Updated: ".$initials;

            $this->activity_model->add($title,$type="graduation-cap");

            if($block == "on"){
                redirect('colleges');
            } else{
                redirect('colleges/'.$collegeInitials);
            }

        }

        public function index(){
            $data['title'] = 'List of Colleges';
            
            $data['colleges'] = $this->college_model->get_colleges();

            $data['colcount'] = $this->college_model->get_col_count();
            $data['rescount'] = $this->research_model->get_res_count();
            $data['visits'] = $this->page_model->pageviews();

            $this->load->view('templates/header',$data);
            $this->load->view('colleges/index',$data);
            $this->load->view('templates/footer',$data);

            /*Previous URL*/
            $refering_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $this->session->set_userdata('url', $refering_url);
        }

        public function blocked(){
            if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }

            if ($this->session->userdata('type') == "LIBRARIAN") {
                $this->session->set_flashdata('need_login','Admin is required to view this content.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }

            $data['title'] = 'List of Blocked Colleges';
            
            $data['colleges'] = $this->college_model->get_colleges();
            
            $data['colcount'] = $this->college_model->get_col_count();
            $data['rescount'] = $this->research_model->get_res_count();
            $data['visits'] = $this->page_model->pageviews();

            $this->load->view('templates/header',$data);
            $this->load->view('colleges/blocked',$data);
            $this->load->view('templates/footer');
        }

        public function unblock(){
             if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }
            
            $college_id = $this->input->post('collegeNumber');

            $this->college_model->unblock_college($college_id);


            $colinit = $this->college_model->get_col_initials($college_id);
            $title = "College Updated: ".$colinit;

            $this->activity_model->add($title,$type="graduation-cap");

            redirect('colleges/blocked');
        }

        public function view($college_initials =  NULL){
            $data['college'] = $this->college_model->get_col_info($college_initials);
            $college_id = $data['college']['college_id'];
            $data['courses'] = $this->course_model->get_courses($college_id);
            $data['users'] = $this->user_model->get_users();

            if(empty($data['college'])){
                show_404();
            }

            //$data['title'] = $data['college']['title'];
            $data['colcount'] = $this->college_model->get_col_count();
            $data['rescount'] = $this->research_model->get_res_count();
            $data['colleges'] = $this->college_model->get_colleges();
            $data['visits'] = $this->page_model->pageviews();
            
            $this->load->view('templates/header',$data);
            $this->load->view('colleges/view',$data);
            $this->load->view('templates/footer',$data);

            /*Previous URL*/
            $refering_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $this->session->set_userdata('url', $refering_url);
        }


    }