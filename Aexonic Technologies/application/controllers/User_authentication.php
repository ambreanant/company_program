<?php

error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class User_authentication extends CI_Controller
{
    function __construct()
     {
  	  	parent::__construct();
  		  $this->load->library('facebook');		//load facebook library
     }

   //facebook authentication -------------------
    public function index() 
    {
  		  $userData = array();
    		if($this->facebook->is_authenticated())
    		{
  			      // Get user facebook profile details
        	    $userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,picture');
              // print_r($userProfile);exit();
              $userData['register_with'] = 'facebook';
              $userData['firstname'] = $userProfile['first_name'];
              $userData['lastname'] = $userProfile['last_name'];
              $userData['email'] = $userProfile['email'];
              
                  
              $userData = array(
                                  'session_firstname'=>$userProfile['first_name'],
                                  'session_lastname'=>$userProfile['last_name'],
                                  'session_email'=>$userProfile['email']
                                );
              $this->session->set_userdata($userData);
              redirect('login/register');
    		}
    		else
  		   {
             $fbuser = '';
             $data['authUrl'] =  $this->facebook->login_url();
             $url=$data['authUrl'];
             redirect($url);
         }
    }

}
