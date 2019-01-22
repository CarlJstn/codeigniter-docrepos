<?php
    class check extends CI_Controller{
    	public function local(){
             if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }

            $data['title'] = 'Local Checking';

           /* $data['colleges'] = $this->college_model->get_colleges();*/
            $data['colcount'] = $this->college_model->get_col_count();
            $data['rescount'] = $this->research_model->get_res_count();
            $data['visits'] = $this->page_model->pageviews();

            $this->load->view('templates/header',$data);
            $this->load->view('check/local',$data);
            $this->load->view('templates/footer', $data);
        }

        public function online(){
             if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }
            
            $data['title'] = 'Online Checking';
            
            $data['colcount'] = $this->college_model->get_col_count();
            $data['rescount'] = $this->research_model->get_res_count();
            $data['visits'] = $this->page_model->pageviews();
            
            $this->load->view('templates/header',$data);
            $this->load->view('check/online',$data);
            $this->load->view('templates/footer');
        }
}