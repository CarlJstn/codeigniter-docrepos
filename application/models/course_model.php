<?php 
	class course_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_all_course(){
			$query = $this->db->get('courses');
			return $query->result_array();
		}

		public function create_course($collegeNumber){
			$data = array(
				'course_name' => trim($this->input->post('name')),
				'course_initials' => trim($this->input->post('initials')),
				'college_id' => $collegeNumber
			);

			return $this->db->insert('courses' , $data);
		}

		public function update_course_total($collegeNumber){
			$this->db->select('course_total')->from('colleges')->where('college_id',$collegeNumber);

		    $query = $this->db->get();

		    if ($query->num_rows() > 0) {
		        $coursetotal = $query->row()->course_total;
		    }

		    $coursetotal++;

			$this->db->set('course_total', $coursetotal); //value that used to update column  
			$this->db->where('college_id', $collegeNumber); //which row want to upgrade  
			$this->db->update('colleges');  //table name
		}

		public function update_course_total_dec($collegeNumber){
			$this->db->select('course_total')->from('colleges')->where('college_id',$collegeNumber);

		    $query = $this->db->get();

		    if ($query->num_rows() > 0) {
		        $coursetotal = $query->row()->course_total;
		    }

		    $coursetotal--;

			$this->db->set('course_total', $coursetotal); //value that used to update column  
			$this->db->where('college_id', $collegeNumber); //which row want to upgrade  
			$this->db->update('colleges');  //table name
		}

		public function delete_course($courseId){
			$this->db->where('id',$courseId);
			$this->db->delete('courses');
			return true;
		}

		public function get_courses($college_id){
			$query = $this->db->get_where('courses' , array('college_id' => $college_id));
			return $query->result_array();
		}

		public function get_course_initials($id){
			$this->db->select('course_initials')->from('courses')->where('id',$id);

		    $query = $this->db->get();

		    if ($query->num_rows() > 0) {
		        return $query->row()->course_initials;
		    }
		}

		public function update_course(){
			$data = array(
				'course_name' => trim($this->input->post('name')),
				'course_initials' => trim($this->input->post('initials'))
			);

			$this->db->where('id', $this->input->post('courseId'));
			return $this->db->update('courses',$data);
		}
	}