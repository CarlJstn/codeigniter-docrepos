<?php
	class page_model extends CI_Model{
		public function update_pageviews(){
			$date = date('F Y');

			$data = array(
				'date' => $date
			);

			$this->db->insert('visits',$data);

			//get total of visits this month
			$query = $this->db->query("SELECT * FROM visits;");
			$total = 0;

			foreach ($query->result() as $visit)
			{
			        if($visit->date == date('F Y')){
			        	$total++;
			        }
			}
			return $total;
		}

		public function pageviews(){
			$query = $this->db->query("SELECT * FROM visits;");
			$total = 0;

			foreach ($query->result() as $visit)
			{
			        if($visit->date == date('F Y')){
			        	$total++;
			        }
			}
			return $total;
		}

		public function reset_visits(){
			$query = $this->db->query("SELECT * FROM visits;");

			foreach ($query->result() as $visit){
				$year = substr_replace($visit->date,""," ",4);
				$year = trim($year);
				if($year != date('Y')){
					$this->db->empty_table('visits');
				}
			}
		}

		public function get_visit_months(){
			$query = $this->db->query("SELECT * FROM visits;");
			$months = array();

			foreach ($query->result() as $visit){
				$month = substr($visit->date,0,strrpos($visit->date,' '));
				if (!in_array($month, $months)) {
				    array_push($months, $month);
				}
			}
			return $months;
		}

		public function get_months_views(){
			$query = $this->db->query("SELECT * FROM visits;");
			$totals = array();
			$months = array();

			foreach ($query->result() as $visit){
				$month = substr($visit->date,0,strrpos($visit->date,' '));
				if (!in_array($month, $months)) {
				    array_push($months, $month);
				    $this->db->where('date',$visit->date);
					$this->db->from('visits');
					array_push($totals, $this->db->count_all_results());
				}
			}
			return $totals;
		}
		/*public function update_pageviews(){
			$this->db->select('visits')->from('visits');

		    $query = $this->db->get();

		    if ($query->num_rows() > 0) {
		        $total = $query->row()->visits;
		    }

		    $total++;

			$this->db->set('visits', $total); //value that used to update column  
			$this->db->update('visits');  //table name

			return $total;
		}

		public function pageviews(){
			$this->db->select('*');
			$this->db->from('visits');
			$result = $this->db->get();
			if (!$result->num_rows() > 0) {
			    $data = array(
			    	'visits' => 0
			    );

			    $this->db->insert('visits',$data);
			} else{
				$this->db->select('visits')->from('visits');

			    $query = $this->db->get();

			    if ($query->num_rows() > 0) {
			        $total = $query->row()->visits;
			    }

			    return $total;
			}
		}

		public function reset_visits(){
			$where = "date < TIMESTAMP(DATE_SUB(NOW(), INTERVAL 1 DAY))";
			$this->db->where($where);
			$this->db->delete('visits');

		    $this->db->select('*');
			$this->db->from('visits');
			$result = $this->db->get();
			if (!$result->num_rows() > 0) {
			    $data = array(
			    	'visits' => 0
			    );

			    $this->db->insert('visits',$data);
			}
		}*/
	}