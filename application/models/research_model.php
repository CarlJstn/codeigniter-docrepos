<?php
	class Research_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_researches(){
			$query = $this->db->get('researches');
			return $query->result_array();
		}

		public function get_research_info($college_initials = FALSE , $limit = FALSE , $offset = FALSE){

			if ($limit) {
				$this->db->limit($limit , $offset);
			}

			if($college_initials === FALSE){
				$query = $this->db->get('researches');
				return $query->result_array();
			}

			$query = $this->db->get_where('researches',array('titleNoSpace' => $college_initials));
			return $query->row_array();
		}

		public function get_docu_authors($document_id){
			$query = $this->db->get_where('authors' , array('document_id' => $document_id));
			return $query->result_array();
		}

		public function get_docu_images($document_id){
			$query = $this->db->get_where('docuimages' , array('document_id' => $document_id));
			return $query->result_array();
		}

		public function create_research($titleNoSpace){
			$data = array(
				'course' => $this->input->post('course'),
				'college_name' => $this->input->post('college'),
				'title' => $this->input->post('title'),
				'type' => $this->input->post('type'),
				'titleNoSpace' => $titleNoSpace,
				'abstract' => $this->input->post('abstract'),
				'pages' => $this->input->post('pages'),
				'year' => date("Y")
			);

			$this->db->insert('researches',$data);

			return $this->db->insert_id();
		}

		public function get_res_count(){
			$query = $this->db->query("SELECT * FROM researches;");
			$total = 0;

			foreach ($query->result() as $research)
			{
				$total++;
			}
			return $total;
		}

		public function add_author($author,$research_id){
			$data = array(
				'document_id' => $research_id,
				'name' => $author
			);

			$this->db->insert('authors',$data);
		}

		public function add_image($imageName,$research_id){
			$data = array(
				'document_id' => $research_id,
				'name' => $imageName
			);

			$this->db->insert('docuimages',$data);
		}

		public function add_file($id,$file){
			$data = array(
				'file' => $file
			);
			$this->db->where('id',$id);
			return $this->db->update('researches',$data);
		}

		public function update_author($id){
			$this->db->where('document_id', $id);
			$this->db->delete('authors');

            if($this->input->post("existAuthor")){
                foreach($this->input->post("existAuthor") as $author){
                	if(!$author == ""){
	                    $data = array(
	                    		'document_id' => $id,
						        'name' => $author
						);

						$this->db->insert('authors', $data);
					}
                }
            }

            foreach($this->input->post("authors") as $author){
            	if(!$author == ""){
            		$data = array(
							'document_id' => $id,
					        'name' => $author
					);

					$this->db->insert('authors', $data);
            	}
            }
		}

		public function update_research($id,$titleNoSpace){
			$data = array(
				'course' => $this->input->post('course'),
				'college_name' => $this->input->post('college'),
				'title' => $this->input->post('title'),
				'type' => $this->input->post('type'),
				'titleNoSpace' => $titleNoSpace,
				'abstract' => $this->input->post('abstract'),
				'pages' => $this->input->post('pages'),

			);
			$this->db->where('id',$id);
			return $this->db->update('researches',$data);
		}

		public function remove_image($id){
			$this->db->where('id', $id);
			return $this->db->delete('docuimages');
		}
	}