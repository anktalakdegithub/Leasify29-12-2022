<?php

namespace App\Controllers;
use App\Models\NBFCLoginModles;
use App\Models\LoginModles;
use App\Models\NbfcCreateProposalModels;
use App\Models\InvestorCreateProposalModels;
use App\Models\WalletPaymentRFQModels;
use App\Models\PaymentRFQModels;
use App\Models\ProposalDetailsModels;
use App\Models\NbfcBidModels;
use App\Models\ResetPasswordModles;
use App\Models\Customer_model;
use App\Models\KycDetailsModles;
use CodeIgniter\Database\Query;


class Nbfc extends BaseController
{
    public function index()
    { 
        $session = session();
        if($session->get('isnbfclogin')){
        return view('nbfc/index');
        }
        else{
            return view('nbfc/login');
            // return redirect()->to('login');
        }
    }
    public function edit_rfq()
    {
        return view('nbfc/edit_rfq');
    }
    public function investor()
    {
        return view('nbfc/investor');
    }
    public function login()
    {
        return view('nbfc/login');
    }
    public function money()
    {
        $session = session();
        if($session->get('isnbfclogin')){
        return view('nbfc/money');
        }
        else{
            return view('nbfc/login');
            // return redirect()->to('login');
        }
    }
    public function my_vault()
    {
        $session = session();
        if($session->get('isnbfclogin')){
            $rfq= new WalletPaymentRFQModels();
            $nbfc_id=$session->get('user_id');
            $mon=1;
            // print_r($nbfc_id);die();
            // $data['walletdetails']=$rfq->where('user_id',$nbfc_id)->findAll();
            $data['walletdetails']=$rfq->where('user_id',$nbfc_id)->paginate(5);

            $data['walletdetails']=$rfq->where('user_id',$nbfc_id)->paginate(5);
            // $result = $rfq->where('user_id',$nbfc_id)->select('sum(Amount) as sumamt')->first();
            $result = $rfq->where('user_id',$nbfc_id)->where('is_money',$mon)->select('sum(Amount) as sumamt')->first();
		    $data['sumdemo'] = $result['sumamt'];

        $rfq->updateuser($data['sumdemo'],$nbfc_id);
            $data['pager']=$rfq->pager;
           
        return view('nbfc/my_vault',$data);
            }
            else{
                return view('nbfc/login');
                // return redirect()->to('login');
            }
    }
    public function new_rfq()
    {
        return view('nbfc/new_rfq');
    }
    public function thanks()
    {
        return view('nbfc/thanks');
    }
    public function verification()
    {
        return view('nbfc/verification');
    }
    public function newproposallist()
    {
        return view('nbfc/newproposallist');
    }
    public function newproposalsingle()
    {
        return view('nbfc/newproposalsingle');
    }
 
    public function newrfq2()
    {  
        $session = session();
        if($session->get('isnbfclogin')){
        return view('nbfc/newrfq2');
            }
            else{
                return view('nbfc/login');
                // return redirect()->to('login');
            }
    }
    public function order()
    { 
        $session = session();
        if($session->get('isnbfclogin')){
            $nbfc=new NbfcCreateProposalModels();
            $bid=new NbfcBidModels();
            $pay = new Customer_model();
            $nbfc_id=$session->get('user_id');
          //  echo $nbfc_id;
            $user_role=$session->get('$user_role');
            $db = db_connect();
//$data=$db->query("Select * from proposal_bid join indicative_proposals on indicative_proposals.proposal_id=proposal.proposal_id where investor_id='$nbfc_id'")->getResult();
//  print_r($data);die();
$demo= $nbfc->join('proposal_bid', 'proposal_bid.proposal_id = indicative_proposals.proposal_id')->where('investor_id', $nbfc_id)->where('proposal_bid.status', '1')->paginate(5);
           

            $data['payment']=$pay->paymentlist($nbfc_id);
            // print_r("<pre>");      
            // print_r($demo);die();
            $data['pager']=$nbfc->pager;
            $data['all_nbfc_active']= $demo;
          

        return view('nbfc/order',$data);
        }
        else{
            return view('nbfc/login');
            // return redirect()->to('login');
        }
    }
    // public function payment()
    // {  
    //     $session = session();
    //     if($session->get('isadminlogin')){
    //         $user_id=$session->get('user_id');
    //     $payment= new PaymentRFQModels();
    //     $data['paymentlist']=$payment->findAll();

    //     if($session->get('isnbfclogin')){
    //     return view('nbfc/payment',$data);
    // }
    // else{
    //     return view('nbfc/login');
    // }
    // }
    public function payment()
    {
        $session = session();
        if($session->get('isnbfclogin')){
            $user_id=$session->get('user_id');
            $user_role=$session->get('$user_role');
        //    $payment= new PaymentRFQModels();
        //    $data['paymentlist']=$payment->findAll();
        $pay = new Customer_model();
        $data['payment']=$pay->paymentlist($user_id);
        //    $data['paymentlist']=$pay->paginate(5);
           $data['pager']=$pay->pager;
            return view('nbfc/payment',$data);
        }
        else{
            return view('nbfc/login');
            // return redirect()->to('login');
        }
    }
    // public function rfq_details($id)
    // {
    //     $session = session();
    //     if($session->get('isnbfclogin')){
    //         $nbfc= new NbfcCreateProposalModels();
    //     $data['proposaldetails']= $nbfc->find($id);
    //     return view('nbfc/rfq_details',$data);
    // }
    // else{
    //     return view('nbfc/login');
    //     // return redirect()->to('login');
    // }

    // }
    // public function nbfcproposaldetails($id)
    public function nbfcproposaldetails($id)
    {  
        // echo "lkbuj".$id;
        $session = session();
        if($session->get('isnbfclogin')){
            $nbfc= new NbfcCreateProposalModels();
            $proposal= new ProposalDetailsModels();
            // $createproposal= new CreatedProposalDetailsModels();
            // print_r($nbfc);die();
        // $data['proposaldetails']= $nbfc->find($id);
        $data['proposaldetails']= $nbfc->where('proposal_id',$id)->find();
        //  print_r($data['proposaldetails']);die();
        $data['proposalsingledetails']= $proposal->where('proposal_id',$id)->find();
        //  print_r($data['proposalsingledetails']);die();
        // $data['proposalcreatedetails']= $createproposal->where('proposal_id',$id)->find();
        return view('nbfc/nbfcproposaldetails',$data);
    }
    else{
        return view('nbfc/login');
        // return redirect()->to('login');
    }

    }
    public function rfqlist()
    {
        $session = session();
        if($session->get('isnbfclogin')){
            $rfq=new NbfcCreateProposalModels();
            $nbfc_id=$session->get('user_id');
            $user_role=$session->get('$user_role');
           if($user_role=='nbfc'){
            $nbfc=1;
            $data['rfqlists']=$rfq->where('rfq_id',$nbfc_id)->where('NBFC_publish',$nbfc)->findAll();
           }
           else{
            $investor=1;
            $data['rfqlists']=$rfq->where('rfq_id',$nbfc_id)->where('investor_publish',$investor)->findAll();
           }
        //    print_r("<pre>");
        //      print_r($data['rfqlists']);die();
        return view('nbfc/rfqlist',$data);
    }
    else{
        return view('nbfc/login');
        // return redirect()->to('login');
    }

    }
    public function rfqs()
    {   
        $session = session();
        if($session->get('isnbfclogin')){

            $nbfc=new NbfcCreateProposalModels();
            $bid=new NbfcBidModels();
            $nbfc_id=$session->get('user_id');
            $user_role=$session->get('user_role');
            // print_r($user_role);die();   
           
            $demo= $nbfc->join('proposal_bid', 'proposal_bid.proposal_id = indicative_proposals.proposal_id')->where('proposal_bid.investor_id',$nbfc_id)->where('proposal_bid.status', '0')->paginate(5);
       
        //             print_r("<pre>");
        //    print_r($demo);die();
        $data['pager']=$nbfc->pager;
            $data['all_nbfc']= $demo;
       
        return view('nbfc/rfqs',$data);
    }
    else{
        return view('nbfc/login');
        // return redirect()->to('login');
    }

    }
    public function deleteproposal(){


        // $nbfc=new NbfcCreateProposalModels();
        // $proposal_bid=$this->request->getPost('proposal_bid');
        // if($proposal_bid!=''){
        //     $proposal_data=$nbfc->deleteproposaldetails($proposal_bid);
        //     print_r($proposal_data);die();
        //     }
        // $nbfcdetails=$nbfc->where('proposal_bid', $proposal_bid)->first();
        //  $data = array('code' => 200, 'data'=> $nbfcdetails, 'msg'=>"NBFC Proposal Data deleted Successfully.");
        // // print_r($data);
        //   echo json_encode($data);



          $nbfc= new NbfcCreateProposalModels();
          $bid=new NbfcBidModels();
          $proposalbid_id=$this->request->getPost('proposalbid_id');
        //   print_r($proposalbid_id);die();   
          if($proposalbid_id!=''){
              $nbfc_data=$nbfc->deleteproposaldetails($proposalbid_id);
            //   print_r($nbfc_data);die();
          }
          $nbfcdetails=$bid->where('proposalbid_id', $proposalbid_id)->first();
           $data = array('code' => 200, 'data'=> $nbfcdetails, 'msg'=>"NBFC Proposal Data deleted Successfully.");
          // print_r($data);
            echo json_encode($data);
       
    }
    
    public function nbfc_login(){
        
         $login=new LoginModles();
        $username=$this->request->getPost('username');
   
         $password=$this->request->getPost('password');
         $is_verify=1;
        //  $user_role='nbfc';
        //  $user_role='investor';
    //   $result= $login->where('firstname', $username)->where('user_role', $user_role)->first();
    if(empty($username)){
        $data=['code'=>'404','msg'=>'Please Enter Email'];
      }
      else if(empty($password)){
           
        $data=['code'=>'404','msg'=>'Please Enter password'];
    }else{
      $result= $login->where('emailid', $username)->first();
    // print_r($result);die();
      $data=array();
      
        //  if(count($result)>0){
         if($result!=''){
            // print_r('ho');die();
            // if($is_verify==$result['is_verify']){
                    if($password==$result['password']){
                        $login_id =$result['user_id'];
                        $user_role =$result['user_role'];
                        $firstname =$result['firstname'];
                        $session = session();
                        $session_data = array(  
                            'emailid' => $username,
                            'password' => $password
                        );  
                        
                        $session->set('isnbfclogin', true);
                        $session->set('nbfcdata', $session_data);
                        $session->set('user_id',$login_id);
                        $session->set('user_role',$user_role);
                        $session->set('firstname',$firstname);
                        
                        $data=['code'=>'200','msg'=>'Login Successfully.'];      

                    //    $data = array('code' => 200, 'data'=> array('firstname' => $result['emailid'], 'password' => $result['password'], 'user_role' => $result['user_role']), 'msg'=>"Login Successfully.");
                    
                    }
                    else{
                        $data=['code'=>'404','msg'=>'Please enter correct Details'];  
                        //  $data = array('code' => 404, 'data'=> array('firstname' => $result['emailid'], 'password' => $result['password'], 'user_role' => $result['user_role']), 'msg'=>"Please enter correct Details");
                        }
            //             $data=['code'=>'200','msg'=>'Verification Done Successfully.'];  
            //     }else{
            //         $data=['code'=>'404','msg'=>'Verification is not done.'];  
            //    }
           
            
            } else{
                $this->session->set_flashdata('error', 'Invalid Username and Password');  
                $data = array('code' => 404, 'data'=> array(), 'msg'=>"Invalid Username and Password.");
            }
}
 echo json_encode($data);
  
 
     }

     public function addmoney(){
        $wallet=new \App\Models\WalletPaymentRFQModels;
        $session = session();
        $user_id=$session->get('user_id');
        $avamoney=$this->request->getPost('avamoney');
        // $wallet->updateuser($avamoney,$user_id);
        // $money=$this->request->getPost('money');
        //  print_r($avamoney);die();
      $paymentmethod="Gpay";
      date_default_timezone_set('Asia/Kolkata');
		$date=date("Y-m-d h:i:sa");
      $pay_date=$date;
      $paymentstatus="Success";
      $ismoney=1;
    //   print_r($ismoney);die();
        // $wallet->savemoney($user_id,$money,$paymentmethod,$paymentstatus);
        //   die($demo);
        $amount=$this->request->getPost('money');
        if(empty($amount)){
                  
            $data=['code'=>'404','msg'=>'Please Enter Money'];
       }
      else{
        $data=[
            'Amount' =>$amount,
            'payment_method' =>$paymentmethod,
            'pay_date' =>$pay_date,
                'paymnet_status' =>$paymentstatus,
                'is_money' => $ismoney,
                'user_id' => $user_id   
            ];
           
          
          $wallet->save($data);
         // print_r($wallet);die();
             
          $data = ['code'=>'200','msg'=>'Money Added Successfully'];
            }
          return $this->response->setJSON($data);

     }
     public function withdrawmoney(){
        $wallet=new WalletPaymentRFQModels;
        $session = session();
        $user_id=$session->get('user_id');
        $avamoney=$this->request->getPost('avamoney');
      $paymentmethod="Cash";
      date_default_timezone_set('Asia/Kolkata');
		$date=date("Y-m-d h:i:sa");
      $pay_date=$date;
      $paymentstatus="Success";
      $ismoney=0;
      $reason="Withdraw";
    //    print_r($user_id);die();
        // $wallet->savemoney($user_id,$money,$paymentmethod,$paymentstatus);
        //   die($demo);
        $widreamamt=$this->request->getPost('withdrawmoney');
        if(empty($widreamamt)){
                  
            $data=['code'=>'404','msg'=>'Please Enter Money'];
       }
      else{
        $data=[
            'Amount' =>-($widreamamt),
            'payment_method' =>$paymentmethod,
            'pay_date' =>$pay_date,
                'paymnet_status' =>$paymentstatus,
                'reason' =>$reason,
                'user_id' => $user_id,
                'is_money' => $ismoney
            ];
            // print_r("<pre>");
            // print_r($data);
            // die();
            // if($avamoney>=10000){
         

             $wallet->save($data);
            $wallet->updateuser($avamoney,$user_id);
       
          
           
        
          $data = ['code'=>'200','msg'=>'Withdraw Money Successfully'];
            }
          return $this->response->setJSON($data);

     }
     public function addbid(){
        $nbfc=new NbfcBidModels;
        $login=new LoginModles();
        $session = session();
        $nbfc_id=$session->get('user_id');
        $user_role=$session->get('user_role');
        $is_verify=1; 
      
           $nbfcbid=$this->request->getPost('nbfcbid');
             $customer_id=$this->request->getPost('customer_id');
             $propid=$this->request->getPost('propid');
            //  print_r($nbfcbid);die();
            if(empty($nbfcbid)){
                  
                 $data=['code'=>'404','msg'=>'Please Enter BID'];
            }else{
                        $result= $login->where('user_id', $nbfc_id)->first();
                        // print_r($result);die();
                        $data=array();
                        if($is_verify==$result['is_verify']){
                            //    $nbfcc= $nbfc->savebis($nbfc_id,$nbfcbid,$nbfcfile,$propid,$customer_id);
                            $nbfcc= $nbfc->savebis($nbfc_id,$nbfcbid,$propid,$customer_id);
                            
                                $data=['code'=>'200','msg'=>'BID Added Successfully'];
                                $data=['code'=>'200','msg'=>'Verification Done Successfully.'];  
                        }else{
                            
                   
                            $data=['code'=>'203','msg'=>'BID Added Successfully'];
                            }
            // $data = ['code'=>'200','msg'=>'BID Added Successfully'];
            // return $this->response->setJSON($data);
            }
            return $this->response->setJSON($data);

     }
    //  public function addbid(){
    //     $nbfc=new NbfcBidModels;
    //     $session = session();
    //     $nbfc_id=$session->get('nbfc_id');
    //     $file = $this->request->getFile('nbfcfile');
      
    //        $imgName='';
    //        if(!empty($file)){
    //           if ($file->isValid() && ! $file->hasMoved()) {
    //            $imgName = $file->getRandomName();
    //            $ext = $file->getClientExtension();
    //             $file->move(WRITEPATH . 'nbfc');
           
    //           }
    //        }
    //        $nbfcbid=$this->request->getPost('nbfcbid');
    //         $nbfcfile=$imgName;
    //         $propid=$this->request->getPost('propid');
    //         $nbfcc=$nbfc->savebis($nbfc_id,$nbfcbid,$nbfcfile,$propid);
    //       $data = ['status'=>'NBFC Bid added Successfully','msg'=>'NBFC Bid added Successfully'];
    //           return $this->response->setJSON($data);
    //         $data = ['status'=>'BID Added Successfully','msg'=>'BID Added Successfully'];
    //       return $this->response->setJSON($data);

    //  }
     public function logout(){
        $session = session();
        $session->destroy();
        return view('nbfc/login');
       }
       public function fetch_category()
       {
           $session = session();
           $output = '';
           $start=$this->request->getPost('start');
           $limit=$this->request->getPost('limit');
         $page=$this->request->getPost('page');
           $skip = $limit*$page;
       
        $rfq=new NbfcCreateProposalModels();
       
        $nbfc_id=$session->get('user_id');
       // print_r($nbfc_id);die();
       //  $datas=$rfq->where('rfq_id',$nbfc_id);
       $dataall=array();
       if($session->get('user_role')=="investor"){
       
           $dataall=$rfq->where('investor_publish', '1')->findAll($limit,$start);
       }
       else if($session->get('user_role')=="nbfc"){
       
           $dataall=$rfq->where('NBFC_publish', '1')->findAll($limit,$start);
       }
        
       //   if($data->countAll() > 0)
       //   {
         //  print_r($data->findAll());
        //   die();
        
          foreach($dataall as $row)
          {
          
               $output .= '<div class="col-lg-3 col-md-6 col-sm-12 my-2">
               <div class="pricingTable">
                           <div class="pricingTable-header">
       
                           </div>
                           <div class="price-value">
                               <div class="row">
                                   <div class="col-3 text-end"> <span class="amount ms-2"><img class="card-img-top"
                                               width="100px" height="45px"
                                               src="'.base_url().''.$row['proposal_logo'].'"
                                               alt="Card image cap" /></span>
                                   </div>
                                   <div class="col-9 ps-0 my-auto">
                                       <!-- <span class="amount-sm text-start">POIJA</span> -->
                                       <h3 class="text-start htitle my-auto">'.$row['proposal_title'].'</h3>
                                   </div>
                               </div>
       
                           </div>
       
                           <div class="px-4 comcolor">
                           <p class="mt-3 text-start proposaldeatail">'.$row['proposal_details'].'</p>
                           <div class="row">
                               <div class="col-6">
                                   <p class="mb-0">XIRR</p>
                                   <h3 class="hweight">'.$row['pre_tax'].' %</h3>
                               </div>
                               <div class="col-6">
                                   <p class="mb-0">Tenure</p>
                                   <h3 class="hweight">'.$row['tenure'].'M</h3>
                               </div>
                               <div class="col-12 text-center pb-md-5">
                                   <p class="mb-0">Minimum Investment</p>
                                   <h3 class="hweight pb-4">₹ '.$row['min_investment'].'</h3>
                               </div>
                               <div class="col-12 investbtn">
                               <center><a href="'.base_url().'/user/nbfcproposaldetails/'.$row['proposal_id'].'" class="text-center btn btn-primary mb-4">Invest Now</a></center>

                               </div>
                             </div>
                       </div>
       
                       </div>
               </div>';
       
       
       
       
       }
       
       // }
       echo $output;
       }
       
       public function fetch_past()
       {
           $session = session();
           $output = '';
           $start=$this->request->getPost('start');
           $limit=$this->request->getPost('limit');
         $page=$this->request->getPost('page');
           $skip = $limit*$page;
       
        // $rfq=new NbfcCreateProposalModels();
        $nbfc=new NbfcCreateProposalModels();
            $bid=new NbfcBidModels();
            
        // $nbfc_id=$session->get('user_id');
        $nbfc_id=$session->get('user_id');
        $user_role=$session->get('user_role');
        
       // print_r($nbfc_id);die();
       //  $datas=$rfq->where('rfq_id',$nbfc_id);
       $dataall=array();
       $dataall= $nbfc->join('proposal_bid', 'proposal_bid.proposal_id = indicative_proposals.proposal_id')->where('proposal_bid.investor_id',$nbfc_id)->where('proposal_bid.status', '0')->findAll($limit,$start);
 
   

        foreach($dataall as $row)
        {
          
             $output .= '<div class="col-lg-3 col-md-6 col-sm-12 my-2">
             <div class="pricingTable">
                         <div class="pricingTable-header">
     
                         </div>
                         <div class="price-value">
                             <div class="row">
                                 <div class="col-3 text-end"> <span class="amount ms-2"><img class="card-img-top"
                                             width="100px" height="45px"
                                             src="'.base_url().''.$row['proposal_logo'].'"
                                             alt="Card image cap" /></span>
                                 </div>
                                 <div class="col-9 ps-0 my-auto">
                                     <!-- <span class="amount-sm text-start">POIJA</span> -->
                                     <h3 class="text-start htitle my-auto">'.$row['proposal_title'].'</h3>
                                 </div>
                             </div>
     
                         </div>
     
                         <div class="px-4 comcolor">
                         <p class="mb-0 fw-bold">Proposal Detail</p>
                         <p class="mt-3 text-start proposaldeatail">'.$row['proposal_details'].'</p>
                         <div class="row">
                             <div class="col-6">
                                 <p class="mb-0 fw-bold">Quote Value</p>
                                 <h3 class="hweight">'.$row['proposal_bid'].'</h3>
                             </div>
                             <div class="col-6 mb-3">
                                 <p class="mb-0 fw-bold">Delivered By</p>
                                 <h6 class="hweight">'.$row['proposal_date'].'</h6>
                             </div>
                          <br>
                             <div class="col-12  my-4">';

                             if($row['status']==0){
                          $output .='<center><a class="text-center btn btn-primary text-white">Pending</a></center>';
                             }elseif($row['status']==2){
                              $output .='<center><a class="text-center btn btn-primary text-white">Rejected</a></center>';
                          }

                          $output .='  </div>
                           </div>
                     </div>
     
                     </div>
             </div>';
     
     
     
     
     }
       // }
       echo $output;
       }
     
public function forgotpassword(){
    return view("/nbfc/forgotpassword");
 }
 
 public function password_reset(){
    // print_r('hi');
    //   die();
     $login=new LoginModles();
    $token=$this->request->getGet('token');
    $result=$login->checktoken($token);
    $session=session();
 
    if($result!=""){
      date_default_timezone_set('Asia/Kolkata');
      $idate = strtotime($result->resetdate);
      $cdate=strtotime(date('Y-m-d H:i:s'));
      $datediff =round((strtotime($cdate) - strtotime($idate))/3600, 1);
      if($datediff>3){
       redirect('/nbfc/forgotpassword');
     }
     else{
      
      $session->set('emailid',$result->email);
      return view("/nbfc/password_reset");
     }
   }
   
  
 }
 public function nbfc_fp(){
         
     $login=new LoginModles();
     $password=new ResetPasswordModles();
     // print_r('hi');die();
    $username=$this->request->getPost('email');
 
    if(empty($username)){
        $data=['code'=>'404','msg'=>'Please Enter Email'];
      }else{
 //    print_r($username);die();
  $result= $login->where('emailid', $username)->first();
  $data=array();
     if($result!=""){
         $token=mt_rand(2000,9000);
         $resetmail=$password->savepasswordreset($token,$username);
         $url=base_url().'/user/password_reset?token='.$token;
         $url2=base_url().'/user/forgotpassword';
         $to=$username;
         $subject="Leasify Password Reset";
         $message="<p>We heard that you lost your account password. Sorry about that!</p><p>But don’t worry! You can use the following link to reset your password:</p>'.$url.'<br><br><p>If you don’t use this link within 3 hours, it will expire. To get a new password reset link, visit '.$url2.'</p><br<br><p>Thanks,<p>Leasify Team<p>";
         $email = \Config\Services::email();  
         $email->setTo($to);
         $email->setFrom('leasifytech@gmail.com','Welcome To Leasify');
         $email->setSubject($subject);
         $email->setMessage($message);
         $email->send();    
         $data = array('code' => 200, 'data'=> array(), 'msg'=>"Please Check Your Email Id.");
 }else{
 $this->session->set_flashdata('error', 'Invalid Email Id');  
 $data = array('code' => 404, 'data'=> array(), 'msg'=>"Invalid Email Id.");
 }
}
 echo json_encode($data);
 
 
 }
 public function savenewresetpassword(){
     $login=new LoginModles();
     $session = session();
     $email=$session->get('emailid');
     // print_r($email);die();
     $pass=$this->request->getPost('pass');
    if(empty($pass)){
        $data=['code'=>404,'msg'=>'Please Enter Password'];
      }else{
    
     $login->savechangepassword($email,$pass);
     $data=['code'=>200,'msg'=>'Password Reset Successfully'];
      }
      echo json_encode($data);
 }

 public function myaccount()
 { 
     $session = session();
     if($session->get('isnbfclogin')){
         $user= new LoginModles();
         $kyc= new KycDetailsModles();
  
         $user_id=$session->get('user_id');

         //  print_r($user_id);die();
         $data['profiledetail']=$user->where('user_id',$user_id)->findAll();
        
         $data['profiledetails']= $kyc->join('users', 'users.user_id = kycdetails.user_id')->where('kycdetails.user_id', $user_id)->findAll();
      
        //  print_r($data['profiledetails']);die();
          return view('nbfc/myaccount',$data);

     }else{
        return view('nbfc/login');
     }
 }
 public function myaccountkyc(){

    $session = session();
    if($session->get('isnbfclogin')){
        $kyc= new KycDetailsModles();
        $logindetails= new LoginModles();
        // die('jkb');
   $user_id= $session->get('user_id');

   $file = $this->request->getFile('panphoto');
            
   $imgName='';
   if(!empty($file)){
   if ($file->isValid() && ! $file->hasMoved()) {
       $imgName = $file->getRandomName();
    //    $file->move('./public/uploads/', $imgName);
       $file->move('./public/proposal/', $imgName);
   }
   }
   $afile = $this->request->getFile('aadharfrontside');
            
   $aadharfrontside='';
   if(!empty($afile)){
   if ($afile->isValid() && ! $afile->hasMoved()) {
       $aadharfrontside = $afile->getRandomName();
    //    $afile->move('./public/aadhar/', $aadharfrontside);
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
    // print_r($address);die();
    $dinnum=$this->request->getPost('dinnum');
    $aadhaaraddress=$this->request->getPost('aadhaaraddress');
    $nominee=$this->request->getPost('nominee');
    $kycbod=$this->request->getPost('kycbod');
    $panphoto='/public/proposal/'.$imgName;
    //  die($panphoto);
    $residentarea=$this->request->getPost('residentarea');
   
    $aadhaarname=$this->request->getPost('aadhaarname');
    // print_r($panphoto);die();
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
   
       
    
     
      }
      return $this->response->setJSON($data);
    }
    else{
        return view('nbfc/login');
        // return redirect()->to('login');
    }

}

}
