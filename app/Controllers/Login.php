<?php

namespace App\Controllers;
use App\Models\LoginModles;
class Login extends BaseController
{
    public function registeration(){
      
        $login=new LoginModles();
        $fname=$this->request->getPost('fname');
        $lname=$this->request->getPost('lname'); 
      
        $mobilenum=$this->request->getPost('mobilenum');  
        $email=$this->request->getPost('email'); 
    
        $user_role="customer";
        $login->savereg($fname,$lname,$mobilenum,$email,$user_role);    
      $data = ['status'=>'Registration Done Successfully','msg'=>'Registration Done Successfully'];
      
      return $this->response->setJSON($data);

      
    }


    public function process_otp(){
      $login=new LoginModles();
      $otpv=$this->request->getPost('otpv');
     $session = session();
     $session_otp=$session->get('otp');
      $data=array();
   
      if($otpv==$session_otp){
        $data = array('code' => 200, 'data'=> array(), 'msg'=>"Otp Added Successfully.");
      }
      else{

          $data = array('code' => 404, 'data'=> array(), 'msg'=>"Please enter correct OTP.");
      }
      echo json_encode($data);
  
     
    }
    public function process_login(){
       
         $login=new LoginModles();
        $phone=$this->request->getPost('phone');
        $user_role='customer';

     $result= $login->where('emailid', $phone)->where('user_role',$user_role)->first();
    //  print_r($result);die();
          $data=array();
         if($result!=''){

         if($phone==$result['emailid']){
                // print_r('jkbhj');
                 $user_id =$result['user_id'];
                 $firstname =$result['firstname'];
                 $mobilenumber =$result['mobile_number'];
                 $emailid =$result['emailid'];
                 $otp=mt_rand(2000,9000);

               $session = session();
                 $session_data = array(  
                     'emailid'=> $phone,
                );  

                $session->set('isadminlogin', true);
                $session->set('admindata', $session_data);
                $session->set('user_id',$user_id);
                $session->set('otp',$otp);
                $session->set('emailid',$emailid);
                $session->set('mobile_number',$mobilenumber);
                $session->set('firstname',$firstname);
                
                    $data = array('code' => 200, 'data'=> array('emailid'=> $result['emailid']), 'msg'=>"Login Successfully.");
                    }
                    else{

                        $data = array('code' => 404, 'data'=> array(), 'msg'=>"Please enter correct Details");
                    }
                }
                else{
//die();
                    //$this->session->set_flashdata('error', 'Invalid Mobile Number');  
  
                  $data = array('code' => 404, 'data'=> array(), 'msg'=>"Invalid Email Id.");
                }
                echo json_encode($data);

 
     }

     public function logout(){
        $session = session();
        $session->destroy();
        return view('home/login');
       }

       public function process_signup(){
        $fname=$this->request->getPost('fname');
        $lname=$this->request->getPost('lname');
        $email=$this->request->getPost('email');
        $phone=$this->request->getPost('phone');
        $user_type=$this->request->getPost('user_type');
        $password=$this->request->getPost('password');
        $proposal= new LoginModles();
        // print_r($user_type);die();
        $investor_role='investor';
        $nbfc_role='nbfc';

        if(empty($fname)){
          $data=['code'=>'404','msg'=>'Please Enter Name'];
        }else if(empty($email)){
           
          $data=['code'=>'404','msg'=>'Please Enter email'];
      }else if(empty($phone)){
           
        $data=['code'=>'404','msg'=>'Please Enter Contact Number'];
    }else if(empty($user_type)){
                  
      $data=['code'=>'404','msg'=>'Please Select User Type'];
     }else{
      $query =$proposal->where('emailid', $email)->first();
      // print_r($query);die();
        if($query!=""){
        $data=['code'=>'404','msg'=>'Email Already Exist'];
        }else{
          if($investor_role==$user_type || $nbfc_role==$user_type){
            $login=$proposal->savesignup($fname,$lname,$email,$phone,$user_type,$password);
            $data=['code'=>'200','msg'=>'signup data Successfully'];
            $to=$email;
            $subject="Welcome To Leasify";
            $message="Hi,<br><br>We’re glad to have you join the Leasify family!<br><br>Your Varification is pending<br><br>If you’ve any questions, please reply to this email.  <br> <br><br><img src='https://leasify.in/public/assetsl/images/darklogo.png' alt='Lesify Logo' height='40px'><br>Thank you.  <br>Warm Regards,<br>Team Leasify.";
            $email = \Config\Services::email();  
            $email->setTo($to);
            $email->setFrom('leasifytech@gmail.com','Welcome To Leasify');
            $email->setSubject($subject);
            $email->setMessage($message);
            $email->send(); 
            }else{
             $login=$proposal->savesignup($fname,$lname,$email,$phone,$user_type,$password);
             $data=['code'=>'200','msg'=>'signup data Successfully'];
             $to=$email;
             $subject="Welcome To Leasify";
             $message="Hi,<br><br>We’re glad to have you join the Leasify family!<br><br>We’re happy to share the best of investment opportunities with you. <br><br>If you’ve any questions, please reply to this email.  <br><br> <img src='https://leasify.in/public/assetsl/images/darklogo.png' alt='Lesify Logo' height='40px'><br>Thank you.  <br>Warm Regards,<br>Team Leasify.";
             $email = \Config\Services::email();  
             $email->setTo($to);
             $email->setFrom('leasifytech@gmail.com','Welcome To Leasify');
             $email->setSubject($subject);
             $email->setMessage($message);
             $email->send(); 
            }
        
         
         }
                
      }
      return $this->response->setJSON($data);
        
      }
   
}