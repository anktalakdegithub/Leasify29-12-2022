<?php

namespace App\Controllers;
use App\Models\CustomerRFQModels;
use App\Models\CustomerRFQDetailsModels;
use App\Models\PaymentRFQModels;
use App\Models\LoginModles;
use App\Models\Customer_model;
use App\Models\KycDetailsModles;
class Home extends BaseController
{
    public function index()
    {
        $session = session();
        if($session->get('isadminlogin')){
            $user_id=$session->get('user_id');
            $firstname=$session->get('firstname');
            return view('home/index');
        }
        else{
            return view('home/login');
        }
    }
    public function customer()
    {
        return view('home/customer');
    }
    public function customerdetails()
    {

        // $customer= new CustomerRFQModels();
        // $data['custmoerlist']=$member->findAll();
        // return view('home/customerdetails',$data);
        return view('home/customerdetails');
    }
    public function edit_rfq()
    {
        return view('home/edit_rfq');
    }
    public function investor()
    {
        return view('home/investor');
    }
    public function nbfc()
    {
        return view('home/nbfc');
    }
    public function new_rfq()
    {
        $session = session();
        if($session->get('isadminlogin')){
            $user_id=$session->get('user_id');
            $kyc= new KycDetailsModles();
            $data['kycdeatils']=$kyc->where('user_id',$user_id)->find();
            if(count($data['kycdeatils']) > 0){
           return view('home/new_rfq');
            }else{
                return redirect('customer/profile');
            }
        }
        else{
            return view('home/login');
            // return redirect()->to('login');
        }
    }
    public function newrfq2()
    {
        return view('home/newrfq2');
    }
    public function payment()
    {
        $session = session();
        if($session->get('isadminlogin')){
            $user_id=$session->get('user_id');
        // $payment= new PaymentRFQModels();
        // $data['paymentlist']=$payment->findAll();
        $nbfc = new Customer_model();
        $data['payment']=$nbfc->paymentlist($user_id);
        return view('home/payment',$data);
        }
        else{
            return view('home/login');
            // return redirect()->to('login');
        }
    }
    public function quote()
    {
        return view('home/quote');
    }
    // public function rfq_details($id)
    // {
    //     $customer= new CustomerRFQModels();
          
    //     $data['rfqdetail']=$customer->find($id);
    //     return view('home/rfq_details',$data);
    // }
    public function rfq_details($id)
    {   
        //  print_r($id);die();
        $session = session();
        
        if($session->get('isadminlogin')){
        $refdetail= new CustomerRFQDetailsModels();
        $ref= new CustomerRFQModels();
          
        $data['rfqs']=$ref->where('rfq_id',$id)->findAll();
        // print_r($data['rfqs']);die();
        $data['rfqdetail']=$refdetail->where('rfq_id',$id)->find();
        return view('home/rfq_details',$data);
        }
        else{
            return view('home/login');
            // return redirect()->to('login');
        }
    }
    public function rfq()
    {
        $session = session();
        if($session->get('isadminlogin')){
            $user_id=$session->get('user_id');
        $customer= new CustomerRFQModels();
        $kyc= new KycDetailsModles();
        $data['rfqlist']=$customer->where('customer_id',$user_id)->paginate(5);
        $data['kycdeatils']=$kyc->where('user_id',$user_id)->find();
        // print_r($data['kycdeatils']);die();
        if(count($data['kycdeatils']) > 0){
            $data['pager']=$customer->pager;
        return view('home/rfq',$data);
        }else{
            return redirect('customer/profile');
        }
        // return view('home/rfq');
            }
            else{
                return view('home/login');
                // return redirect()->to('login');
            }
    }
    public function login()
    {
        return view('home/login');
    }
    public function Register()
    {
        return view('home/Register');
    }
    public function signup()
    {
        return view('home/signup');
    }
    public function otpmobile()
    {   
        $userotp=new LoginModles();
        $session = session();
        if($session->get('isadminlogin')){
            // $otp=$session->get('otp');
            $data['otp']=$session->get('otp');
            $user_id=$session->get('user_id');
            $emailid=$session->get('emailid');
              $to=$emailid;
              $subject="OTP Verification";
              $message="Hi, <br/>Your OTP is ". $data['otp'];
              $email = \Config\Services::email();  
              $email->setTo($to);
              $email->setFrom('leasifytech@gmail.com','Otp');
              $email->setSubject($subject);
              $email->setMessage($message);
              if($email->send()){
                
                return view('home/otpmobile',$data);
              }
               else{
                $data =$email->printDebugger(['headers']);
                print_r($data);
            }
        // print_r($otp);
        
        }
        else{
            return view('home/login');
            // return redirect()->to('login');
        }
    }
    public function myaccount()
    { 
        $session = session();
        if($session->get('isadminlogin')){
            $user= new LoginModles();
            $kyc= new KycDetailsModles();
     
            $user_id=$session->get('user_id');

            //  print_r($user_id);die();
            // $data['profiledetails']=$user->where('user_id',$user_id)->findAll();
           
            $data['profiledetails']= $kyc->join('users', 'users.user_id = kycdetails.user_id')->where('kycdetails.user_id', $user_id)->findAll();
         
            //  print_r($data['profiledetails']);die();
             return view('home/myaccount',$data);
        }else{
            return view('home/login');
            // return redirect()->to('login');
        }
    }
    public function addrfq(){
        $session = session();
        $cust_id=$session->get('user_id');
        $member= new CustomerRFQModels();
        $rfqtitle=$this->request->getPost('rfqtitle');
        $rfqsub=$this->request->getPost('rfqsub');
        $expirydate=$this->request->getPost('expirydate');
        $additionaldetails=$this->request->getPost('additionaldetails');
        $description=json_decode($this->request->getPost('description'));
        $cost=json_decode($this->request->getPost('cost'));
        $quantity=json_decode($this->request->getPost('quantity'));
        $totalcost=$this->request->getPost('totalcost');
        $file = $this->request->getFile('rfquploadfile');
        
        $imgName='';
        if(!empty($file)){
            if ($file->isValid() && ! $file->hasMoved()) {
                $imgName = $file->getRandomName();
                $file->move('./public/uploads/', $imgName);
            }
        }
        // print_r($imgName); die();
         //    die($totalcost);
         $file='/public/uploads/'.$file;
         if(empty($rfqtitle)){
                  
            $data=['code'=>'404','msg'=>'Please Enter Title'];
       }
        
         else if(empty($rfqsub)){
                  
            $data=['code'=>'404','msg'=>'Please Enter Subject'];
       }
       else if(empty($expirydate)){
                  
        $data=['code'=>'404','msg'=>'Please Enter Date'];
   }
        else if(empty($additionaldetails)){
                  
            $data=['code'=>'404','msg'=>'Please Enter Additional Details'];
       }
        else if(empty($cost)){
                  
            $data=['code'=>'404','msg'=>'Please Enter Cost'];
       }
        else if(empty($imgName)){
                  
            $data=['code'=>'404','msg'=>'Please Upload File'];
       }
      else{
      
           $rfq_id=$member->saverfq($cust_id,$rfqtitle,$rfqsub,$expirydate,$additionaldetails,$totalcost,$imgName);
          
           // $rfq_id=1;
            //print_r("ok".$cust_id);
            // die($rfq_id);
            $member->saverfqreq($cust_id,$rfq_id,$description,$cost,$quantity);

      
        
          $data = ['codr'=>'200','msg'=>'Customer data added Successfully'];
      }
          return $this->response->setJSON($data);
   
    }
    public function myaccountkyc(){

        $session = session();
        if($session->get('isadminlogin')){
            $kyc= new KycDetailsModles();
            // die('jkb');
       $user_id= $session->get('user_id');
   
       $file = $this->request->getFile('panphoto');
                
       $imgName='';
       if(!empty($file)){
       if ($file->isValid() && ! $file->hasMoved()) {
           $imgName = $file->getRandomName();
           $file->move('./public/proposal/', $imgName);
       }
       }
       $afile = $this->request->getFile('aadharfrontside');
                
       $aadharfrontside='';
       if(!empty($afile)){
       if ($afile->isValid() && ! $afile->hasMoved()) {
           $aadharfrontside = $afile->getRandomName();
           $afile->move('./public/proposal/', $aadharfrontside);
       }
       }
   
       $bfile = $this->request->getFile('aadharbackside');
                
       $aadharbackside='';
       if(!empty($bfile)){
       if ($bfile->isValid() && ! $bfile->hasMoved()) {
           $aadharbackside = $bfile->getRandomName();
           $bfile->move('./public/proposal/', $aadharbackside);
       }
       }
   
     
      
        $address=$this->request->getPost('address');
   
        $occupation=$this->request->getPost('occupation');
        // die($occupation);
        $dinnum=$this->request->getPost('dinnum');
        $aadhaaraddress=$this->request->getPost('aadhaaraddress');
        $nominee=$this->request->getPost('nominee');
        $kycbod=$this->request->getPost('kycbod');
        $panphoto='/public/proposal/'.$imgName;
        //  die($panphoto);
        $residentarea=$this->request->getPost('residentarea');
        $aadhaarname=$this->request->getPost('aadhaarname');
         $aadharfrontside='/public/proposal/'.$aadharfrontside;
        $aadharbackside='/public/proposal/'.$aadharbackside;
        $userid=$this->request->getPost('userid');
        $bankaccounttype=$this->request->getPost('bankaccounttype');
        $accountnum=$this->request->getPost('accountnum');
        $ifsccode=$this->request->getPost('ifsccode');
        $bankname=$this->request->getPost('bankname');
        $accountname=$this->request->getPost('accountname');
       
        if(empty($aadhaaraddress)){
            $data=['code'=>'404','msg'=>'Please Enter Aadhaar Address'];
          }
        else if(empty($panphoto)){
            $data=['code'=>'404','msg'=>'Please Upload Pan Photo'];
          }
          else if(empty($aadhaarname)){
             
            $data=['code'=>'404','msg'=>'Please Enter Aadhaar Name'];
          }else if(empty($aadharfrontside)){
             
            $data=['code'=>'404','msg'=>'Please Upload Aadhaar Front Phot'];
          }
          else if(empty($aadharbackside)){
             
            $data=['code'=>'404','msg'=>'Please Upload Aadhaar Back Photo'];
          }
          else if(empty($accountnum)){
             
            $data=['code'=>'404','msg'=>'Please Enter Account Number'];
          }
          else if(empty($ifsccode)){
             
            $data=['code'=>'404','msg'=>'Please Enter IFSC Code'];
          }
          else if(empty($bankname)){
             
            $data=['code'=>'404','msg'=>'Please Enter Bank Name'];
          }
          else if(empty($accountname)){
             
            $data=['code'=>'404','msg'=>'Please Enter Account Name'];
          }
          else{

            $kyccount=$kyc->where('user_id',$user_id)->findAll();
            if(count($kyccount)>0){
                //  print_r("hi");die();
                // 
                $demo=$kyc->updatekycdetails($address,$occupation,$dinnum,$aadhaaraddress,$nominee,$kycbod,$panphoto,$residentarea,$aadhaarname,$aadharfrontside,$aadharbackside,$userid,$bankaccounttype,$accountnum,$ifsccode,$bankname,$accountname);
                $data = ['status'=>'KYC data Updated Successfully','msg'=>'KYC details Updated Successfully'];
                // 
        }else{
            $demo=$kyc->savekycdetails($address,$occupation,$dinnum,$aadhaaraddress,$nominee,$kycbod,$panphoto,$residentarea,$aadhaarname,$aadharfrontside,$aadharbackside,$userid,$bankaccounttype,$accountnum,$ifsccode,$bankname,$accountname);
     
            // print_r($demo);die();
            //$kyc->updatekycdetails($user_id);
            $demos=$logindetails->where('user_id',$user_id)->find();
            //   print_r($demos);die();
                if($demos!=''){
                    $emailid=$demos[0]['emailid'];
                    $verified=$demos[0]['is_verify'];
                    
                //  print_r($verified);die();
                    if($verified==1){
                        $to=$emailid;
                        $subject="Leasify verification";
                        $message="<p>Hi,</p><p> please email us your PAN & AADHAR (Front & Back) on <a href='mailto:business@leasify.in'>business@leasify.in</a> for verification prior to investing </p><p>We will verify your documents within 1 hour and you can carry on with your investment!</p><br><br><p>Thanks,<p>Leasify Team<p>";
                        $email = \Config\Services::email();  
                        $email->setTo($to);
                        $email->setFrom('leasifytech@gmail.com','Welcome To Leasify');
                        $email->setSubject($subject);
                        $email->setMessage($message);
                        $email->send();    
                        $data=['code'=>'200','msg'=>'Data Added Succefully'];
                    }
                }
                $data = ['status'=>'KYC data added Successfully','msg'=>'KYC details added Successfully'];
        }
        // $kyc->savekycdetails($address,$occupation,$dinnum,$aadhaaraddress,$nominee,$kycbod,$panphoto,$residentarea,$aadhaarname,$aadharfrontside,$aadharbackside,$userid,$bankaccounttype,$accountnum,$ifsccode,$bankname,$accountname);
        //   die($demo);
        //$kyc->updatekycdetails($user_id);
           
        
        //   $data = ['status'=>'KYC data added Successfully','msg'=>'KYC details added Successfully'];
          }
          return $this->response->setJSON($data);
        }
        else{
            return view('home/login');
            // return redirect()->to('login');
        }
   
    }
}