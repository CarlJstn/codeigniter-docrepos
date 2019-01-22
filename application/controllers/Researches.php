<?php
    class Researches extends CI_Controller{
        public function index(){
            $data['title'] = 'List of Researches';

            $data['colleges'] = $this->college_model->get_colleges();
            $data['courses'] = $this->course_model->get_all_course();
            
            $data['researches'] = $this->research_model->get_researches();

            $data['colcount'] = $this->college_model->get_col_count();
            $data['rescount'] = $this->research_model->get_res_count();
            $data['visits'] = $this->page_model->pageviews();

            $this->load->view('templates/header',$data);
            $this->load->view('researches/index',$data);
            $this->load->view('templates/footer',$data);

            /*Previous URL*/
            $refering_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $this->session->set_userdata('url', $refering_url);
        }

        public function view($college_initials =  NULL){
            $data['research'] = $this->research_model->get_research_info($college_initials);
            $id = $data['research']['id'];
            $data['authors'] = $this->research_model->get_docu_authors($id);
            $data['images'] = $this->research_model->get_docu_images($id);
            $data['users'] = $this->user_model->get_users();
            $data['colleges'] = $this->college_model->get_colleges();
            $data['courses'] = $this->course_model->get_all_course();

            if(empty($data['research'])){
                show_404();
            }

            $data['colcount'] = $this->college_model->get_col_count();
            $data['rescount'] = $this->research_model->get_res_count();
            $data['visits'] = $this->page_model->pageviews();
            
            $this->load->view('templates/header',$data);
            $this->load->view('researches/view',$data);
            $this->load->view('templates/footer',$data);

            /*Previous URL*/
            $refering_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $this->session->set_userdata('url', $refering_url);
        }

        public function create(){
            if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }

            $titleNoSpace = preg_replace('/\s+/','',$this->input->post('title'))."-".date("Y")."-".preg_replace('/\s+/','',$this->input->post('college'));
            
            $research_id = $this->research_model->create_research($titleNoSpace);
           
            foreach($this->input->post("authors") as $author){
                if(!$author == ""){
                    $this->research_model->add_author($author,$research_id);
                }
            }

            $data = array();
                $filesCount = count($_FILES['images']['name']);
                for($i = 0; $i < $filesCount; $i++){
                    $_FILES['file']['name']     = $_FILES['images']['name'][$i];
                    $_FILES['file']['type']     = $_FILES['images']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                    $_FILES['file']['error']     = $_FILES['images']['error'][$i];
                    $_FILES['file']['size']     = $_FILES['images']['size'][$i];
                    
                    // File upload configuration
                    $uploadPath = './assets/images/docu';
                    $config['upload_path'] = $uploadPath;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    
                    // Load and initialize upload library
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    
                    // Upload file to server
                    if($this->upload->do_upload('file')){
                        // Uploaded file data
                        $fileData = $this->upload->data();
                        $uploadData[$i]['file_name'] = $fileData['file_name'];
                        $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");

                        $imageName =  $fileData['file_name'];

                        $this->research_model->add_image($imageName,$research_id);
                    }
                }
            
            $this->college_model->update_research_total($collegeName = $this->input->post('college'));

            $title = "New research added";
            $this->activity_model->add($title,$type="book");

            $this->session->set_flashdata('research_created','Research successfully added.');
            redirect('researches');
        }

        public function addFile(){
            if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }

            $id = $this->input->post('researchId');

             // Upload Image
            $config['upload_path'] = './assets/documents';
            $config['allowed_types'] = 'pdf';

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload()){
                $errors = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error_file_upload',"Invalid file.");

                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            } else {
                $data = array('upload_data' => $this->upload->data());
                $file = str_replace(" ", "_", $_FILES['userfile']['name']);

                $this->research_model->add_file($id,$file);

                $this->session->set_flashdata('success_file_upload',"File: ".$file." successfully added");

                $title = "Research updated";
                $this->activity_model->add($title,$type="book");

                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }
        }

        public function update(){
            if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }

            $titleNoSpace = preg_replace('/\s+/','',$this->input->post('title'))."-".date("Y")."-".preg_replace('/\s+/','',$this->input->post('college'));

            $this->research_model->update_research($id = $this->input->post('researchId'),$titleNoSpace);
            $this->research_model->update_author($id = $this->input->post('researchId'));

            $this->session->set_flashdata('updated',"Research successfully updated");

            $title = "Research updated";
            $this->activity_model->add($title,$type="book");

            redirect('researches/'.$titleNoSpace);
        }

        public function removeImage(){
            if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }

            $del = $this->research_model->remove_image($id = $this->input->post('imageId'));

            if(!$this->input->post('imageId') == ""){
                $this->session->set_flashdata('image_deleted','Image successfully removed.');
            }

            $url=$this->session->userdata('url');
            redirect($url, 'refresh');
        }

        public function addImage(){
            if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }

            $research_id =  $this->input->post('researchId');
            $flag = 0;
            $data = array();
                $filesCount = count($_FILES['images']['name']);
                for($i = 0; $i < $filesCount; $i++){
                    $_FILES['file']['name']     = $_FILES['images']['name'][$i];
                    $_FILES['file']['type']     = $_FILES['images']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                    $_FILES['file']['error']     = $_FILES['images']['error'][$i];
                    $_FILES['file']['size']     = $_FILES['images']['size'][$i];
                    
                    // File upload configuration
                    $uploadPath = './assets/images/docu';
                    $config['upload_path'] = $uploadPath;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    
                    // Load and initialize upload library
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    
                    // Upload file to server
                    if($this->upload->do_upload('file')){
                        // Uploaded file data
                        $fileData = $this->upload->data();
                        $uploadData[$i]['file_name'] = $fileData['file_name'];
                        $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");

                        $imageName =  $fileData['file_name'];
                        $this->research_model->add_image($imageName,$research_id);
                        $flag = 1;
                    }
                }

            if($flag == 1){
                $this->session->set_flashdata('image_added','Image/s successfully added.');
            } else{
                $this->session->set_flashdata('no_image_added','No Image is added.');
            }

            $url=$this->session->userdata('url');
            redirect($url, 'refresh');
        }
    }