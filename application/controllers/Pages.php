<?php
    class Pages extends CI_Controller{
        public function view($page = 'home'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }
            $data['title'] = ucfirst($page);
            $data['colleges'] = $this->college_model->get_colleges();
            $data['colcount'] = $this->college_model->get_col_count();
            $data['activities'] = $this->activity_model->get_activities();
            $data['rescount'] = $this->research_model->get_res_count();
            if($page == "home"){
                $data['visits'] = $this->page_model->update_pageviews();
            } else{
                $data['visits'] = $this->page_model->pageviews();
            }
            $data['months'] = $this->page_model->get_visit_months();
            $data['monthViews'] = $this->page_model->get_months_views();

            //reset visit every year
            $this->page_model->reset_visits();

            $this->load->view('templates/header',$data);
            $this->load->view('pages/'.$page,$data);
            $this->load->view('templates/footer',$data);

            /*Previous URL*/
            $refering_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $this->session->set_userdata('url', $refering_url);
        }

        public function activities(){
            $data['activities'] = $this->activity_model->get_activities();

            $this->load->view('pages/activities',$data);
        }

        public function totalViews(){
            $data['visits'] = $this->page_model->pageviews();

            $this->load->view('pages/totalViews',$data);
        }
    }