  <?php
  // defined('BASEPATH') OR exit('No direct script access allowed');

  class Login extends CI_Controller {

  //   public function __construct(){

  //    parent::__construct();

  //    $this->load->model('Log_reg');
  // }

  	public function index()
  	{
      $this->load->model('Log_reg');

      if($this->session->userdata('username'))
        {
          redirect('login/profile');
        }
       
      $data = array(
              'record' => $this->Log_reg->get_emp_details()
          );
      $this->load->view('./Home.php',$data);
    }

    public function register()
    {
       $this->load->model('Log_reg');

       if($this->session->userdata('username'))
        {
          redirect('login/profile');
        }
       
      $data = array(
              'record' => $this->Log_reg->get_country()
          );
      $this->load->view('./register.php',$data);
    }

    public function profile()
    {
     
        if(empty($this->session->userdata('username')))
        {
          redirect('login/');
        }
       $this->load->model('Log_reg');

       $username = $this->session->userdata('username');
         
        $data = array(
                'record' => $this->Log_reg->get_per_emp_details($username)
            );
        $this->load->view('./profile.php',$data);  
    }

    public function profile_update()
    {
      if(empty($this->session->userdata('username')))
        {
          redirect('login/');
        }
       $this->load->model('Log_reg');

       $username = $this->session->userdata('username');
         
        $data = array(
                'record' => $this->Log_reg->get_per_emp_details($username)
            );
        $this->load->view('./profile_update.php',$data); 
    }

    public function e_login()
    {
      if($this->session->userdata('username'))
        {
          redirect('login/profile');
        }
      $this->load->view('./login.php');
    }

    public function getstate()
      {
        $country = $this->input->post('country');
        $this->load->model('Log_reg');
        echo $profiledetails=$this->Log_reg->getstate($country);
      }

      public function getcity()
      {
        $state = $this->input->post('state');
        $this->load->model('Log_reg');
        echo $profiledetails=$this->Log_reg->getcity($state);
      }

      public function emp_reg()
      {
          $this->load->model('Log_reg');


          if (count($this->input->post()) > 0) {
        
        $config['upload_path']=$this->config->item('user_data');
            $config['allowed_types'] = 'gif|jpg|png';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            if($this->upload->do_upload("emp_photo")){
            $data = $this->upload->data();
            $emp_photo= $data['file_name'];
            }else{
              $emp_photo= "";
              // $error = array('error' => $this->upload->display_errors());
            }
        
              $emp_name = $this->input->post('emp_name');
              $username = $this->input->post('emp_username');
              $emp_password = $this->input->post('emp_password');
              $emp_password =  base64_encode($emp_password);
              $emp_phone = $this->input->post('emp_phone');
              $country = $this->input->post('country');
              $state = $this->input->post('state');
              $city = $this->input->post('city');
              $pin = $this->input->post('emp_pin');

              $result= $this->Log_reg->emp_reg($emp_name,$username,$emp_password,$emp_phone,$country,$state,$city,$pin,$emp_photo);

              echo  json_encode(
                array(
                  'isCredValid' => $result
                )
              );
            }else{
              redirect('login/register');
            }

      }

      public function emp_reg_update()
      {

            $this->load->model('Log_reg');

            if (count($this->input->post()) > 0) {

            $config['upload_path']=$this->config->item('user_data');
            $config['allowed_types'] = 'gif|jpg|png';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            if($this->upload->do_upload("emp_photo")){
            $data = $this->upload->data();
            $emp_photo= $data['file_name'];
            }else{
              $emp_photo= "";
              // $error = array('error' => $this->upload->display_errors());
            }

              $emp_id = $this->input->post('emp_id');
              $emp_name = $this->input->post('emp_name');
              $username = $this->input->post('emp_username');
              $emp_password = $this->input->post('emp_password');
              $emp_password =  base64_encode($emp_password);
              $emp_phone = $this->input->post('emp_phone');
              $country = $this->input->post('country');
              $state = $this->input->post('state');
              $city = $this->input->post('city');
              $pin = $this->input->post('emp_pin');
              $emp_status = $this->input->post('emp_status');

              $result= $this->Log_reg->emp_reg_update($emp_id,$emp_name,$username,$emp_password,$emp_phone,$country,$state,$city,$pin,$emp_status,$emp_photo);

              echo  json_encode(
                array(
                  'isCredValid' => $result
                )
              ); 

              }else{
                if(empty($this->session->userdata('username')))
                  redirect('login/register');
                else
                  redirect('login/profile');
            }
      }

      public function check_email()
      {
              $this->load->model('Log_reg');
                $check_emailid = $this->input->post('check_emailid');
                $data = $this->Log_reg->check_email($check_emailid);

              echo  json_encode(
                  array(
                    'isCredValid' => $data
                  )
                );
      }

       public function emp_login()
        {
                  $this->load->model('Log_reg');

                  if (count($this->input->post()) > 0) {
            
                  $emp_username = $this->input->post('emp_username');
                  $emp_password = $this->input->post('emp_password');
                  $emp_password = base64_encode($emp_password);

                  $result= $this->Log_reg->emp_login($emp_username,$emp_password);
                  echo  json_encode(
                    array(
                      'isCredValid' => $result
                    )
                  );

                   }else{
                if(empty($this->session->userdata('username')))
                  redirect('login/e_login');
                else
                  redirect('login/profile');
            }
        }

         public function logout()
        {

          if(session_destroy())
          {
          $this->session->unset_userdata('session_firstname');
          $this->session->unset_userdata('session_lastname');
          $this->session->unset_userdata('session_email');
          $this->session->unset_userdata('emp_name');
          $this->session->unset_userdata('username');
          redirect('login/');
          }
        }

  }

  ?>