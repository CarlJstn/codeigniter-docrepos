<?php
	class User_model extends CI_Model{
		public function get_users(){
			$query = $this->db->get('users');
			return $query->result_array();
		}

		// log user in
		public function login($username,$password){
			//validate
			$this->db->where('username',$username);
			$this->db->where('password',$password);

			$result= $this->db->get('users');

			if ($result->num_rows() == 1) {
				return $result->row(0)->id;
			} else{
				return false;
			}
		}

		public function get_name($username){
			$this->db->select('name')->from('users')->where('username',$username);

		    $query = $this->db->get();

		    if ($query->num_rows() > 0) {
		        return $query->row()->name;
		    }
		}

		public function get_username($id){
			$this->db->select('username')->from('users')->where('id',$id);

		    $query = $this->db->get();

		    if ($query->num_rows() > 0) {
		        return $query->row()->username;
		    }
		}

		public function get_account_type($user_id){
			$this->db->select('type')->from('users')->where('id',$user_id);

		    $query = $this->db->get();

		    if ($query->num_rows() > 0) {
		        return $query->row()->type;
		    }
		}

		public function get_status($user_id){
			$this->db->select('status')->from('users')->where('id',$user_id);

		    $query = $this->db->get();

		    if ($query->num_rows() > 0) {
		        return $query->row()->status;
		    }
		}

		public function create_user($post_image){
			$data = array(
				'type' => $this->input->post('usertype'),
				'name' => $this->input->post('fullname'),
				'status' => "active",
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'contact' => $this->input->post('contact'),
				'email' => $this->input->post('email'),
				'image' => $post_image
			);
				return $this->db->insert('users',$data);
		}

		public function block_user($user_id){
			$data = array(
				'status' => "blocked"
			);
			$this->db->where('id',$user_id);
			return $this->db->update('users',$data);
		}

		public function unblock_user($user_id){
			$data = array(
				'status' => "active"
			);
			$this->db->where('id',$user_id);
			return $this->db->update('users',$data);
		}

		public function update_user($post_image){
			$data = array(
				'type' => $this->input->post('usertype'),
				'name' => $this->input->post('fullname'),
				'contact' => $this->input->post('contact'),
				'email' => $this->input->post('email'),
				'image' => $post_image
			);
			$this->db->where('id',$this->input->post('userId'));
			return $this->db->update('users',$data);
		}

	}	