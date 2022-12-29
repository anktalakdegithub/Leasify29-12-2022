<?php

namespace App\Controllers;
class Welcome extends BaseController
{
    public function index()
    {
        $header=array('htitle' => 'Leasify - Lease Better, Finance Cheaper','hkeywords' => 'Inventory Financing, Credit, Lease Payment, NBFC, COrporate , Finances, Management, Interest, Tender Financing, Invoice Discounting, Investors, Corporates, Investment Bank, DSA, lease, Residual Value,Leasify','hdescription' => "Building a portfolio of High-Yield, Asset Backed to earn Non-Market Linked Returns across tenures is now just a click away. Schedule a call to speak to us now!");
		 return view('index',$header);
    }
    public function lease()
    {
        $header=array('htitle' => 'Live Deals-Leasify','hkeywords' => 'Investment, Tenure, Investors, Corporates, Investment Bank, DSA, lease, Residual Value,Leasify','hdescription' => "Building a portfolio of High-Yield, Asset Backed to earn Non-Market Linked Returns across tenures is now just a click away. Schedule a call to speak to us now!");

      
        return view('lease', $header);
    }
    public function about()
    {
        $header=array('htitle' => 'About Us-Leasify','hkeywords' => 'Expenditures, Capital works, Cash, Investors, Corporates, Investment Bank, DSA, lease, Residual Value,Leasify','hdescription' => "Leasify is a tech driven, tech enabled asset leasing platform that provides capital on a click to firms that require to spend various movable assets including heavy plant and machinery!");
		
        return view('about',$header);
    }
    public function thankyou()
    {
        $header=array('htitle' => 'Thank You-Leasify','hkeywords' => 'Investors, Corporates, Investment Bank, DSA, lease, Residual Value,Leasify','hdescription' => "Building a portfolio of High-Yield, Asset Backed to earn Non-Market Linked Returns across tenures is now just a click away. Schedule a call to speak to us now!");

      
        return view('thankyou', $header);
    }
  
    public function contact()
    {   
        $header=array('htitle' => 'Contact Us-Leasify','hkeywords' => 'Contact, Contact Us-Leasify, Investors, Corporates, Investment Bank, DSA, lease, Residual Value,Leasify','hdescription' => "Building a portfolio of High-Yield, Asset Backed to earn Non-Market Linked Returns across tenures is now just a click away. Schedule a call to speak to us now!");

        return view('contact', $header);
    }
  
    public function login()
    {
        $header=array('htitle' => 'Login-Leasify','hkeywords' => 'Investors, Corporates, Investment Bank, DSA, lease, Residual Value,Leasify','hdescription' => "Building a portfolio of High-Yield, Asset Backed to earn Non-Market Linked Returns across tenures is now just a click away. Schedule a call to speak to us now!");
        return view('login', $header);
    }
    public function signup()
    {   
         $header=array('htitle' => 'Sign Up-Leasify','hkeywords' => 'Investors, Corporates, Investment Bank, DSA, lease, Residual Value,Leasify','hdescription' => "Building a portfolio of High-Yield, Asset Backed to earn Non-Market Linked Returns across tenures is now just a click away. Schedule a call to speak to us now!");
           return view('signup', $header);
    }
    public function notfound()
    {
        $header=array('htitle' => '404-Leasify','hkeywords' => 'Investors, Corporates, Investment Bank, DSA, lease, Residual Value,Leasify','hdescription' => "Building a portfolio of High-Yield, Asset Backed to earn Non-Market Linked Returns across tenures is now just a click away. Schedule a call to speak to us now!");
        // echo 'k';
        return view('notfound', $header);
    }
    public function policy()
    {
        $header=array('htitle' => 'Policy-Leasify','hkeywords' => 'Payment,Demographic information, Privacy, Investors, Corporates, Investment Bank, DSA, lease, Residual Value,Leasify','hdescription' => "Building a portfolio of High-Yield, Asset Backed to earn Non-Market Linked Returns across tenures is now just a click away. Schedule a call to speak to us now!");
         return view('policy', $header);
    }
    public function terms()
    {
        $header=array('htitle' => 'Terms-Leasify','hkeywords' => 'Terms, Jurisdiction, condition, Investors, Corporates, Investment Bank, DSA, lease, Residual Value,Leasify','hdescription' => "Building a portfolio of High-Yield, Asset Backed to earn Non-Market Linked Returns across tenures is now just a click away. Schedule a call to speak to us now!");
        return view('term', $header);
    }
    public function savecondata(){
        $name=$this->request->getPost('name');
        $email=$this->request->getPost('email');
        $selectoption=$this->request->getPost('selectoption');
        $phone=$this->request->getPost('phone');
        $message=$this->request->getPost('message');
    
                    $to='leasifytech@gmail.com';
                    $subject="Leasify Contact Details";
                    $message="Name :".$name."<br/>Email ID: ".$email."<br/> Option: ".$selectoption." <br/>Contact Number:".$phone."<br/>Message: ". $message;
                    $email = \Config\Services::email();  
                    $email->setTo($to);
                    $email->setFrom('leasifytech@gmail.com','Contact Form');
                    $email->setSubject($subject);
                    $email->setMessage($message);
                    if($email->send()){
                        $data=['code'=>'200','msg'=>'Contact Details Submitted Successfully'];
                        return $this->response->setJSON($data);
        
                    }
                    else{
                    $data =$email->printDebugger(['headers']);
                    print_r($data);
                    }
         

    }
    public function loginfront()
    {   

        $btninvest=$this->request->getPost('btninvest');
        $btncorporate=$this->request->getPost('btncorporate');
        $btnnbfc=$this->request->getPost('btnnbfc');
        // print_r($btninvest);die();
        $data['btninvest']="Investor";
        $data['btncorporate']="Corporate";
        $data['btnnbfc']="NBFC";
        echo json_encode($data);
       
    }


}    