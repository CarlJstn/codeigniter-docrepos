<?php
	class users extends CI_controller{
		//login user
		public function login(){
 			$data['title'] = 'Sign In';

		    $this->form_validation->set_rules('username','Username','required');
		    $this->form_validation->set_rules('password','Password','required');
		    

		    if($this->form_validation->run() == FALSE){
				//$this->load->view('templates/header');
		    	$this->load->view('users/login',$data);
		    	//$this->load->view('templates/footer');
		    } else{
		    	//get username

				$username = $this->input->post('username');

				//get and decrpyt password
				$password = md5($this->input->post('password'));


				//login user
				$user_id = $this->user_model->login($username,$password);

				if ($user_id) {

					$status = $this->user_model->get_status($user_id);

					if($status != "active"){

						$this->session->set_flashdata('account_blocked','Account is blocked.');
						redirect('users/login');
					}

					$account_type = $this->user_model->get_account_type($user_id);

					//create session
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'type' => $account_type,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					// message
			    	$this->session->set_flashdata('login_success','You are now logged in.');

					//delete old activities older than 15 days
            		$this->activity_model->delete_old();

			    	$url=$this->session->userdata('url');
               		redirect($url, 'refresh');
			    	//redirect($_SERVER['HTTP_REFERER']);

				} else{
					// message
			    	$this->session->set_flashdata('login_failed','Login Invalid.');

					redirect('users/login');
				}
		    }
		}

		public function logout(){
			//unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');

			$this->session->set_flashdata('user_loggedout','You are now logged out.');

			$url=$this->session->userdata('url');
            redirect($url, 'refresh');
		}
		
		public function index(){
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

			$data['title'] = 'List of Users';
            
			$data['users'] = $this->user_model->get_users();

           	$data['colcount'] = $this->college_model->get_col_count();
           	$data['rescount'] = $this->research_model->get_res_count();
           	$data['visits'] = $this->page_model->pageviews();
           	
            $this->load->view('templates/header',$data);
            $this->load->view('users/index',$data);
            $this->load->view('templates/footer',$data);
		}

		public function create(){
			if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }

            // Upload Image
            $config['upload_path'] = './assets/images/users_image';
            $config['allowed_types'] = 'gif|jpg|png|ico';
            $config['max_size'] = '0';

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload()){
                $errors = array('error' => $this->upload->display_errors());
                $post_image = 'default.jpg';
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = str_replace(" ", "_", $_FILES['userfile']['name']);
            }

            //create user
            $this->user_model->create_user($post_image);

            $this->session->set_flashdata('user_created','New user successfully added.');

			$title = "New user added: ".$this->input->post('username');

            $this->activity_model->add($title,$type="user");


            redirect('users');
		}

		public function block(){
			if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }

			$user_id = $this->input->post('userId');

			$this->user_model->block_user($user_id);

			$this->session->set_flashdata('user_blocked','User blocked. He/She cannot sign in anymore.');

			$title = "User information updated: ".$this->user_model->get_username($user_id);
            $this->activity_model->add($title,$type="user");

            redirect('users');
		}

		public function unblock(){
			if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }

			$user_id = $this->input->post('userId');

			$this->user_model->unblock_user($user_id);

			$this->session->set_flashdata('user_unblocked','User unblocked.');

			$title = "User information updated: ".$this->user_model->get_username($user_id);
            $this->activity_model->add($title,$type="user");

            redirect('users');
		}

		public function update(){
			if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }

            // Upload Image
            $config['upload_path'] = './assets/images/users_image';
            $config['allowed_types'] = 'gif|jpg|png|ico';
            $config['max_size'] = '0';

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload()){
                $errors = array('error' => $this->upload->display_errors());
                $post_image =  $this->input->post('oldImage');
                $this->session->set_flashdata('user_image_invalid',"Unable to upload image. Make sure the image is below 2mb and either of this formats: gif, jpg, png, ico.");
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = str_replace(" ", "_", $_FILES['userfile']['name']);
            }

            $this->user_model->update_user($post_image);

            $this->session->set_flashdata('user_updated','User successfully updated.');

			$title = "User information updated: ".$this->user_model->get_username($this->input->post('userId'));
            $this->activity_model->add($title,$type="user");

			redirect('users');
        }
	}