<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Log_reg extends CI_Model
    {

		public function get_country()
		{
				$data=[]; 

		            $this->db->select("*");
		            $this->db->from("countries");
		            $query = $this->db->get();

		            if($query->num_rows() > 0){
		                $data['countries']=$query->result_array();
		                $query->free_result();
		            }

		            return $data;
		}

		public function get_emp_details()
		{
				$data=[]; 

		            $this->db->select("*");
		            $this->db->from("emp_details");
		            $query = $this->db->get();

		            if($query->num_rows() > 0){
		                $data['emp_details']=$query->result_array();
		                $query->free_result();
		            }

		            return $data;
		}

		public function get_per_emp_details($username)
		{
				$data=[]; 

		            $this->db->select("emp_details.*,countries.name as country_name,states.name as state_name,cities.city as city_name");
		            $this->db->from("emp_details");
		            $this->db->where('emp_details.username', $username);
		            $this->db->join('countries', 'emp_details.country = countries.id');
		            $this->db->join('states', 'emp_details.state = states.id');
		            $this->db->join('cities', 'emp_details.city = cities.id');
		            $query = $this->db->get();

		            if($query->num_rows() > 0){
		                $data['emp_details']=$query->result_array();
		                $query->free_result();
		            }

		            $this->db->select("*");
		            $this->db->from("countries");
		            $query = $this->db->get();

		            if($query->num_rows() > 0){
		                $data['countries']=$query->result_array();
		                $query->free_result();
		            }

		              $this->db->select("*");
		            $this->db->from("states");
		            $query = $this->db->get();

		            if($query->num_rows() > 0){
		                $data['states']=$query->result_array();
		                $query->free_result();
		            }

		              $this->db->select("*");
		            $this->db->from("cities");
		            $query = $this->db->get();

		            if($query->num_rows() > 0){
		                $data['cities']=$query->result_array();
		                $query->free_result();
		            }

		            return $data;
		}

		public function check_email($check_emailid)
		{
		   $this->db->where('username',$check_emailid);
		   $query = $this->db->get('emp_details');
			   if($query->num_rows() >=1){
			    return TRUE;
				}else{
				    return FALSE;
				}
		}

		 public function getstate($country)
        {
            $output="";
            $this->db->where('country_id', $country);
            $this->db->order_by('id', 'ASC');
            $query = $this->db->get('states');
            $output = '<option value="">Select State</option>';
            foreach($query->result() as $row)
            {
             $output .= '<option value="'.$row->id.'" id="'.$row->id.'">'.$row->name.'</option>';
            }
            return $output;
        }

         public function getcity($state)
        {
            $output="";
            $this->db->where('state_id', $state);
            $this->db->order_by('id', 'ASC');
            $query = $this->db->get('cities');
            $output = '<option value="">Select City</option>';
            foreach($query->result() as $row)
            {
             $output .= '<option value="'.$row->id.'" id="'.$row->id.'">'.$row->city.'</option>';
            }
            return $output;
        }

        public function emp_reg($emp_name,$username,$emp_password,$emp_phone,$country,$state,$city,$pin,$emp_photo)
        {

        	if($emp_photo=="")
        	{
        		$emp_photo = "blank_profile.jpg";
        	}
		        	$data=array(
				       'emp_name'=>$emp_name,
				       'username'=>$username,
				       'emp_password'=>$emp_password,
				       'emp_phone'=>$emp_phone,
				       'country'=>$country,
				       'state'=>$state,
				       'city'=>$city,
				       'pin'=>$pin,
				       'emp_photo'=>$emp_photo,
				       'emp_status'=>'1'
				   );

		    $sql_query=$this->db->insert('emp_details',$data);
		    if($sql_query){
		        return TRUE;
		    }
		    else{
		        return FALSE;
		    }
        }

        public function emp_reg_update($emp_id,$emp_name,$username,$emp_password,$emp_phone,$country,$state,$city,$pin,$emp_status,$emp_photo)
        {
        	if($emp_photo=="")
        	{
        		$data=array(
				       'emp_name'=>$emp_name,
				       'username'=>$username,
				       'emp_password'=>$emp_password,
				       'emp_phone'=>$emp_phone,
				       'country'=>$country,
				       'state'=>$state,
				       'city'=>$city,
				       'pin'=>$pin,
				       'emp_status'=>$emp_status
				   );
        	}else{
        			$data=array(
				       'emp_name'=>$emp_name,
				       'username'=>$username,
				       'emp_password'=>$emp_password,
				       'emp_phone'=>$emp_phone,
				       'country'=>$country,
				       'state'=>$state,
				       'city'=>$city,
				       'pin'=>$pin,
				       'emp_photo'=>$emp_photo,
				       'emp_status'=>$emp_status
				   );
        	}


		    $this->db->where('id', $emp_id);
                if($this->db->update('emp_details', $data))
                {
                	$data = array(
		                'emp_name'=> $emp_name,
		                'username'=> $username
		            );
		        $this->session->set_userdata($data);
		        return TRUE;
		    }
		    else{
		        return FALSE;
		    }
        }

        public function emp_login($emp_username,$emp_password)
		{

			 $this->db->select("emp_name,username");
		    $this->db->from("emp_details");
		    $this->db->where('username',$emp_username);
		    $this->db->where('emp_password',$emp_password);
		    $this->db->where('emp_status','1');
		    $query = $this->db->get();
		    if($query->num_rows()==1){
		        foreach ($query->result_array() as $row){
		            $data = array(
		                'emp_name'=> $row['emp_name'],
		                'username'=> $row['username']
		            );
		        }
		        $this->session->set_userdata($data);

		        return TRUE;
		    }else{

				$this->db->where('username',$emp_username);
			    $this->db->where('emp_password',$emp_password);
			    $this->db->where('emp_status','0');
			    $query1 = $this->db->get('emp_details');
			    if($query1->num_rows()==1){
			        return "Account Block";
			    }
			    $this->db->where('username',$emp_username);
			    $query = $this->db->get('emp_details');
			    if($query->num_rows()==1){
			        return "Wrong Password";
			    }
			    else{
			        return "Wrong credentials";
			    }
			}
		}

	}

?>