<?php
	class College_model extends CI_Model{
		public function get_colleges(){
			$query = $this->db->get('colleges');
			return $query->result_array();
		}

		public function get_col_info($college_initials = FALSE , $limit = FALSE , $offset = FALSE){

			if ($limit) {
				$this->db->limit($limit , $offset);
			}

			if($college_initials === FALSE){
				$query = $this->db->get('colleges');
				return $query->result_array();
			}

			$query = $this->db->get_where('colleges',array('college_initials' => $college_initials));
			return $query->row_array();
		}

		public function get_col_initials($college_id){
			$this->db->select('college_initials')->from('colleges')->where('college_id',$college_id);

		    $query = $this->db->get();

		    if ($query->num_rows() > 0) {
		        return $query->row()->college_initials;
		    }
		}

		public function get_col_count(){
			$query = $this->db->query("SELECT * FROM colleges;");
			$total = 0;

			foreach ($query->result() as $college)
			{
			        if($college->status == "ACTIVE"){
			        	$total++;
			        }
			}
			return $total;
		}

		public function create_college($post_image,$name){
			$color = sprintf("#%06x",rand(0,16777215));
			
			$data = array(
				'college_name' => trim($this->input->post('name')),
				'college_initials' => trim($this->input->post('initials')),
				'college_librarian' => $name,
				'username' => $this->input->post('username'),
				'course_total' => 0,
				'status' => "ACTIVE",
				'image' => $post_image,
				'research_total' => 0,
				'journal_total' => 0,
				'color' => $color

			);
				return $this->db->insert('colleges',$data);
		}

		public function update_college($name,$initials,$librarian,$username,$block,$post_image){

			if($block == "on"){
				$status = "BLOCKED";
			} else{
				$status = "ACTIVE";
			}

			$data = array(
				'college_name' => trim($name),
				'college_initials' => trim($initials),
				'college_librarian' => $librarian,
				'username' => $username,
				'status' => $status,
				'image' => $post_image
			);
			$this->db->where('college_id',$this->input->post('collegeNumber'));
			return $this->db->update('colleges',$data);
		}

		public function unblock_college($college_id){
			$data = array(
				'status' => "ACTIVE"
			);
			$this->db->where('college_id',$college_id);
			return $this->db->update('colleges',$data);
		}

		public function update_research_total($collegeName){
			$this->db->select('research_total')->from('colleges')->where('college_name',$collegeName);

		    $query = $this->db->get();

		    if ($query->num_rows() > 0) {
		        $researchtotal = $query->row()->research_total;
		    }

		    $researchtotal++;

			$this->db->set('research_total', $researchtotal); //value that used to update column  
			$this->db->where('college_name', $collegeName); //which row want to upgrade  
			$this->db->update('colleges');  //table name
		}
	}