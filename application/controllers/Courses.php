<?php
	class Courses extends CI_controller{

		public function create(){
			if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }
            
			$data['title'] = 'Create Course';

			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('initials','Initials','required');

			$collegeNumber = $this->input->post('collegeNumber');

			$collegeInitials = $this->college_model->get_col_initials($collegeNumber);

			
			// if($this->form_validation->run() === FALSE){
			// 	$this->load->view('templates/header');
			// 	$this->load->view('categories/create',$data);
			// 	$this->load->view('templates/footer');
			// } else {

			$this->course_model->create_course($collegeNumber);

			$this->course_model->update_course_total($collegeNumber);

			$this->session->set_flashdata('course_created','New course successfully added.');

			$title = "New course created: ".$this->input->post('initials');
            $this->activity_model->add($title,$type="bookmark");


			redirect('colleges/'.$collegeInitials);
			//}
		}

		public function delete(){
			if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }

			$courseId = $this->input->post('courseId');

			$title = "Course deleted: ".$this->course_model->get_course_initials($courseId);
            $this->activity_model->add($title,$type="bookmark");

			$this->course_model->delete_course($courseId);

			$this->session->set_flashdata('course_deleted','Course successfully deleted.');

			$collegeNumber = $this->input->post('collegeNumber');
			$collegeInitials = $this->college_model->get_col_initials($collegeNumber);

			$this->course_model->update_course_total_dec($collegeNumber);

			redirect('colleges/'.$collegeInitials);
		}

		public function update(){
			if (!$this->session->userdata('logged_in')) {
                $this->session->set_flashdata('need_login','You need to login first.');
                $url=$this->session->userdata('url');
                redirect($url, 'refresh');
            }

            $this->course_model->update_course($courseId);

			$this->session->set_flashdata('course_updated','Course: '.$this->input->post('name').' updated.');

			$title = "Course updated: ".$this->input->post('initials');
            $this->activity_model->add($title,$type="bookmark");

			$collegeNumber = $this->input->post('collegeNumber');
			$collegeInitials = $this->college_model->get_col_initials($collegeNumber);
			redirect('colleges/'.$collegeInitials);
		}

	}