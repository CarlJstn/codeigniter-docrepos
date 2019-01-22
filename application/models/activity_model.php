<?php
	class activity_model extends CI_Model{

		public function get_activities(){
			$this->db->order_by('activities.id','DESC');
			$query = $this->db->get('activities',15);
			return $query->result_array();
		}

		public function add($title,$type){
			
			$data = array(
				'title' => $title,
				'type' => $type
			);
				return $this->db->insert('activities',$data);
		}

		public function delete_old(){
			$where = "date < TIMESTAMP(DATE_SUB(NOW(), INTERVAL 15 DAY))";
			$this->db->where($where);
			$this->db->delete('activities');
		}
	}