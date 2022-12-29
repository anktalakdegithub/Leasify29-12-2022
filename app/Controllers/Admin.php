<?php

namespace App\Controllers;
use App\Models\NbfcCreateProposalModels;
use App\Models\CustomerRFQModels;
use App\Models\Indicativeproposal_model;
use App\Models\Nbfc_model;
use App\Models\Investor_model;
use App\Models\Customer_model;
use App\Models\PaymentRFQModels;
use App\Models\WalletPaymentRFQModels;
use App\Models\KycDetailsModles;
use App\Models\LoginModles;
$session = session();
class Admin extends BaseController
{
    public function index()
    {   $session = session();
        if($session->get('isadminlogin')){
        return view('admin/index');
            }
            else{
                return view('admin/login');
                // return redirect()->to('login');
            }
    }
    public function create_project()
    {
        $session = session();
        if($session->get('isadminlogin')){
        return view('admin/create_project');
        }
        else{
            return view('admin/login');
        }
    }
    public function customer()
    {    $session = session();
        if($session->get('isadminlogin')){
            $is_delete=0;
    //    $customer= new Customer_model();
       $customer= new LoginModles();
       $kyc= new KycDetailsModles();
    //    $data['customerlist']=$customer->list();
    $userrole="customer";
    //    $data['customerlist']=$customer->where('user_role',$userrole)->paginate(5);
    $data = [
        'customerlist' => $customer->where('user_role',$userrole)->where('is_delete',$is_delete)->join('kycdetails', 'users.user_id = kycdetails.user_id', 'left')->select('users.*,kycdetails.*,users.user_id as id')->paginate(10),
        //'kycdetails' =>  $kyc->join('users', 'users.user_id = kycdetails.user_id')->findAll(),
     'pager' => $customer->pager
 ];

    //    $data = [
    //     'customerlist' => $customer->where('user_role',$userrole)->where('is_delete',$is_delete)->paginate(5),
    //     'kycdetails' =>  $kyc->join('users', 'users.user_id = kycdetails.user_id')->findAll(),
    //     'pager' => $customer->pager
    // ];

        return view('admin/customer', $data);
            }
            else{
                return view('admin/login');
            }
    }
    public function logout(){
        $session = session();
        $session->destroy();
        return view('admin/login');
    }
    public function rfq()
    {    
        $session = session();
        if($session->get('isadminlogin')){
            $is_delete=0;
       $customer= new CustomerRFQModels();
    //    $data['customerlist']=$customer->findAll();
       
       $data = [
        'customerlist' => $customer->where('is_delete',$is_delete)->paginate(5),
        'pager' => $customer->pager
    ];

        return view('admin/rfq', $data);
        }
        else{
            return view('admin/login');
        }
    }
    public function approvedcustomer()
    {   
        $session = session();
        if($session->get('isadminlogin')){ 
         $member= new CustomerRFQModels();
        $mem_id=$this->request->getPost('mem_id');
        
        $is_check=$this->request->getPost('is_check');
       
        $data=$member->updatecustomerdetails($mem_id,$is_check);
        //   print_r($data);die();
        $data = ['status'=>'Customer Updated Successfully','msg'=>'Customer Updated Successfully'];
            return $this->response->setJSON($data);
        //     $data = array('code' => 200, 'data'=> $cust_data, 'msg'=>"Data updated Successfully.");
            
        //  echo json_encode($cust_data);
        }
        else{
            return view('admin/login');
        }
       
    }

    public function rfqdetails()
    {
        $session = session();
        if($session->get('isadminlogin')){
        $id=$this->request->getGet('id');
        $CustomerRFQModels = new CustomerRFQModels();
        $data=$CustomerRFQModels->details($id);
        
        return view('admin/rfqdetails',$data);
        }
        else{
            return view('admin/login');
        }
    }
    public function edit_cust()
    {    $session = session();
        if($session->get('isadminlogin')){
        $id=$this->request->getGet('id');
        $customer = new Customer_model();
        $data['customer']=$customer->editcustomer( $id);
        
        return view('admin/edit_cust',$data);
            }
            else{
                return view('admin/login');
            }
    }
    public function update_user()
    { $session = session();
        if($session->get('isadminlogin')){
            
        $id=$this->request->getPost('user_id');
        $firstname   =$this->request->getPost('firstname');
        $lastname   =$this->request->getPost('lastname');
        $emailid   =$this->request->getPost('emailid');
        $mobile_number   =$this->request->getPost('mobile_number');
        $password   =$this->request->getPost('password');
        $customer = new Customer_model();
        $nbfc= new LoginModles();
        $data['customer']=$customer->editcustomer($id);
            $rules = [
                'firstname' => 'required|min_length[3]',
                'lastname' => 'required|min_length[3]',
                'emailid' => 'required|valid_email',
                'mobile_number' => 'required|numeric|exact_length[10]',
            ];
            if($firstname == ''){
                $data['allowed'] = 'Please Enter FirstName';
            }
            else if($lastname == ''){
                $data['allowed'] = 'Please Enter LastName';
            }
            else if($emailid == ''){
                $data['allowed'] = 'Please Enter Email Id';
            }
            else if($mobile_number == ''){
                $data['allowed'] = 'Please Enter Email Id';
            }
            else if($password == ''){
                $data['allowed'] = 'Please Enter password';
            }
            else if(!$this->validate($rules)) {
                    $data['validation'] = $this->validator;
                    
            }
            else{
            $data1 = [
                'firstname'		=> $firstname,
                'lastname'		=> $lastname,
                'emailid'		=> $emailid,
                'mobile_number'		=> $mobile_number,
                'password'		=> $password
            ];
          
            $data['update']=$customer->updatecustomer($data1,$id);
            return redirect()->route('admin/indicativeproposal');
            // return view('admin/nbfc',$data);
            } 
                
            return view('admin/edit_cust',$data);
        }
        else{
            return view('admin/login');
        }
    }
    public function edit_rfq()
    { $session = session();
        if($session->get('isadminlogin')){
        $id=$this->request->getGet('id');
        $rfq = new CustomerRFQModels();
        $data=$rfq->editrfq( $id);
       
        return view('admin/edit_rfq',$data);
        }
        else{
            return view('admin/login');
        }
    } 
    public function update_rfq()
    {  $session = session();
        if($session->get('isadminlogin')){
        $rfqtitlte   =$this->request->getPost('rfqtitlte');
        $rfq_id   =$this->request->getPost('rfq_id');
        $subject   =$this->request->getPost('subject');
        $expiry_date   =$this->request->getPost('expiry_date');
        $additional_details   =$this->request->getPost('additional_details');
        $requiremnet_details   =$this->request->getPost('requiremnet_details');
        $quantity   =$this->request->getPost('quantity');
        $cost   =$this->request->getPost('cost');
        $totalcost   =$this->request->getPost('totalcost');
        $data = [
			'rfqtitlte'		=> $rfqtitlte,
			'subject'		=> $subject,
			'expiry_date'		=> $expiry_date,
			'additional_details'		=> $additional_details,
            'total_cost' => $totalcost
		];
        $rfq = new CustomerRFQModels();

        $data=$rfq->updaterfq($data,$rfq_id,$requiremnet_details,$quantity,$cost);
        // print_r($data);
        // die;
        // return view('admin/edit_rfq',$data);
        return redirect()->route('admin/rfq');
        }
        else{
            return view('admin/login');
        }

    }
    public function edit_proposal()
    {
        $session = session();
        if($session->get('isadminlogin')){
        $id=$this->request->getGet('id');
        $indicativeproposel = new Indicativeproposal_model();
        $data['proposal']=$indicativeproposel->editproposel($id);
            $data['details']=$indicativeproposel->getproposeldetails($id);
        
        return view('admin/edit_proposal',$data);
        }
        else{
            return view('admin/login');
        }
    }
    public function investor_details()
    { 
        $session = session();
        if($session->get('isadminlogin')){
        return view('admin/investor_details');
        }
        else{
            return view('admin/login');
        }
    }
    public function investor_bid_detail()
    {
        $session = session();
        if($session->get('isadminlogin')){
        return view('admin/investor_bid_detail');
        }
        else{
            return view('admin/login');
        }
    }
    public function investor()
    {
        
        $session = session();
        if($session->get('isadminlogin')){
            $is_delete=0;
         //    $customer= new Customer_model();
            $customer= new LoginModles();
            $kyc= new KycDetailsModles();
         //    $data['customerlist']=$customer->list();
         $userrole="investor";
         //    $data['customerlist']=$customer->where('user_role',$userrole)->paginate(5);
            $data = [
                'investor' => $customer->where('user_role',$userrole)->where('is_delete',$is_delete)->join('kycdetails', 'users.user_id = kycdetails.user_id', 'left')->select('users.*,kycdetails.*,users.user_id as id')->paginate(10),
                //'kycdetails' =>  $kyc->join('users', 'users.user_id = kycdetails.user_id')->findAll(),
             'pager' => $customer->pager
         ];

             return view('admin/investor', $data);
         }
         else{
             return view('admin/login');
         }
    }
    public function isverified()
    { $session = session();
        if($session->get('isadminlogin')){
            $verified=$this->request->getPost('verified');
            $isverifyid=$this->request->getPost('isverifyid');
            $customer = new LoginModles();
                
            // print_r($uwallet);die();
            $data=$customer->update_verficationstatus($verified,$isverifyid);
            $data=['code'=>'200','msg'=>'Verification Done Succefully'];
            return $this->response->setJSON($data);
        }
        else{
            return view('admin/login');
        }
    }
    public function login()
    {
        return view('admin/login');
    }
    public function login_process()
    {
        $loginModel = new LoginModles();
        $this->session 	= \Config\Services::session();
        $email      = $this->request->getPost('email');
        $password   = $this->request->getPost('password');
          
        $result     = $loginModel->clientLogin($email, md5($password));
        if($result) {
            $this->session->set('isadminlogin', true);

            $this->session->set($result);
            return redirect()->to('admin/indicativeproposal');
        } else {
            return redirect()->to('admin/login');
        }
    }
    public function nbfc_details()
    { 
        $session = session();
        if($session->get('isadminlogin')){
        return view('admin/nbfc_details');
        }
        else{
            return view('admin/login');
        }
    }
    public function nbfc_bid_detail()
    {
        $session = session();
        if($session->get('isadminlogin')){
        return view('admin/nbfc_bid_detail');
        }
        else{
            return view('admin/login');
        }
    }
    public function nbfc()
    {
        $session = session();
        if($session->get('isadminlogin')){
         //    $customer= new Customer_model();
            $customer= new LoginModles();
            $kyc= new KycDetailsModles();
         //    $data['customerlist']=$customer->list();
         $userrole="nbfc";
         $delete=0;
         //    $data['customerlist']=$customer->where('user_role',$userrole)->paginate(5);
         $data = [
            'nbfc' => $customer->where('user_role',$userrole)->where('is_delete',$delete)->join('kycdetails', 'users.user_id = kycdetails.user_id', 'left')->select('users.*,kycdetails.*,users.user_id as id')->paginate(10),
            //'kycdetails' =>  $kyc->join('users', 'users.user_id = kycdetails.user_id')->findAll(),
         'pager' => $customer->pager
     ];

        //     $data = [
        //      'nbfc' => $customer->where('user_role',$userrole)->where('is_delete',$delete)->paginate(8),
        //      'kycdetails' =>  $kyc->join('users', 'users.user_id = kycdetails.user_id')->findAll(),
        //      'pager' => $customer->pager
        //  ];

             return view('admin/nbfc', $data);
         }
         else{
             return view('admin/login');
         }
    }
    public function new_cust()
    {
        $session = session();
        if($session->get('isadminlogin')){
        return view('admin/new_cust');
        }
        else{
            return view('admin/login');
        }
    }
    public function new_rfq()
    {
        $session = session();
        if($session->get('isadminlogin')){
        return view('admin/new_rfq');
        }
        else{
            return view('admin/login');
        }
    }
    public function new_rfqs()
    {
        $session = session();
        if($session->get('isadminlogin')){
        return view('admin/new_rfqs');
        }
        else{
            return view('admin/login');
        }
    }
    public function payment()
    {  
        $session = session();
        if($session->get('isadminlogin')){
        $nbfc = new PaymentRFQModels();
        $user = new LoginModles();
        $user = new Indicativeproposal_model();
       
        // $data['nbfc']=$nbfc->list();
       $demo=$nbfc->join('users', 'users.user_id = customer_payment.customer_id','left')->join('indicative_proposals', 'indicative_proposals.proposal_id = customer_payment.proposal_id','left')->paginate(5);
    //    print_r("<pre>");
    //    print_r($demo);die();
       $data['pager']=$nbfc->pager;
       $data['payment']= $demo;
  
        // $data['payment']=$nbfc->paymentlist();
        //   echo '<pre>';
        // print_r($data);die;
        return view('admin/payment',$data);
        }
        else{
            return view('admin/login');
        }
    }
    public function withdrawmoney()
    {  
        $session = session();
        if($session->get('isadminlogin')){
        $nbfc = new PaymentRFQModels();
        $user = new LoginModles();
        $indicativeproposel = new Indicativeproposal_model();
        $wallet = new WalletPaymentRFQModels();
       $is_money=0;
    //    $is_money="Withdraw";
    $reason="BID";
        // $data['nbfc']=$nbfc->list();
    //    $demo=$wallet->join('users', 'users.user_id = user_wallet.user_id')->where('reason', $is_money)->paginate(5);
       $demo=$wallet->join('users', 'users.user_id = user_wallet.user_id')->where('is_money', $is_money)->paginate(5);
    //     print_r("<pre>");
    //    print_r($demo);die();
       $data['pager']=$wallet->pager;
       $data['withdrawpayment']= $demo;
  
        // $data['payment']=$nbfc->paymentlist();
        //   echo '<pre>';
        // print_r($data);die;
        return view('admin/withdrawmoney',$data);
        }
        else{
            return view('admin/login');
        }
    }

    public function ismoneyadded()
    { $session = session();
        if($session->get('isadminlogin')){
            $paid=$this->request->getPost('paid');
            $uwallet=$this->request->getPost('uwallet');
            $wallet = new WalletPaymentRFQModels();
        
            // print_r($uwallet);die();
            $data=$wallet->update_money($paid,$uwallet);
            $data=['code'=>'200','msg'=>'Status Change Succefully'];
            return $this->response->setJSON($data);
        }
        else{
            return view('admin/login');
        }
    }
  
    public function Register()
    {

        return view('admin/Register');
    }
    // public function rfq_details()
    // {
    //     $id=$this->request->getGet('id');
    //     $indicativeproposel = new Indicativeproposal_model();
    //     $data=$indicativeproposel->details( $id);
        
    //     return view('admin/rfq_details',$data);
    // }
    public function proposal_details()
    {  $session = session();
        if($session->get('isadminlogin')){
        $id=$this->request->getGet('id');
        $indicativeproposel = new Indicativeproposal_model();
        // $data=$indicativeproposel->details( $id);
        $data=$indicativeproposel->details( $id);

        return view('admin/proposal_details',$data);
        }
        else{
            return view('admin/login');
        }
    }
    public function add_payment()
    {   
        $session = session();
        if($session->get('isadminlogin')){
        $amount   =$this->request->getPost('amount');
        $bidamount   =-($this->request->getPost('amount'));
        $pay_date   =$this->request->getPost('pay_date');
        $paymentmethod="Cash";
        $paymentstatus="Success";
        $ismoney=0;
        $reason="BID";

        $customer_id   =$this->request->getPost('customer_id');
        $investor_id   =$this->request->getPost('investor_id');
        $proposal_id   =$this->request->getPost('proposal_id');
        $data = [
			'amount'		=> $amount,
			'pay_date'		=> $pay_date,
			'customer_id'		=> $customer_id,
			'investor_id'		=> $investor_id,
			'proposal_id'		=> $proposal_id,
		];

        
        $indicativeproposel = new Indicativeproposal_model();
        $data=$indicativeproposel->addpayment($data);

        $wallet=new WalletPaymentRFQModels;
        $wallet->addbidpayment($bidamount,$pay_date,$paymentmethod,$paymentstatus,$ismoney,$reason,$customer_id);
// print_r($data);die();
        // echo '<pre>';
        // print_r($data);die;
        // return redirect()->route('admin/indicativeproposal');
        
        //   return view('admin/indicativeproposal',$data);
        $data=['code'=>'200','msg'=>'Payment Schedule Added Successfully'];
        return $this->response->setJSON($data);
        }
        else{
            return view('admin/login');
        }
    }
     
    public function update_bid()
    {
        $session = session();
        if($session->get('isadminlogin')){
        $id=$this->request->getPost('bid_id');
        $indicativeproposel = new Indicativeproposal_model();
        $data=$indicativeproposel->update_bid($id);

        // print_r($data);
        // echo '<pre>';
        // print_r($data);die;
        return redirect()->route('admin/indicativeproposal');
        
        // return view('admin/proposal_details',$data);
        }
        else{
            return view('admin/login');
        }
    } 
    public function delete_proposal()
    {
        $id=$this->request->getPost('id');
        $indicativeproposel = new Indicativeproposal_model();
        $data=$indicativeproposel->delete_proposal($id);

        // print_r($data);
        // echo '<pre>';
        // print_r($data);die;
        
        // return view('admin/proposal_details',$data);
    }  
    public function delete_rfq()
    {
        $id=$this->request->getPost('id');
        $is_delete=$this->request->getPost('is_delete');
        $CustomerRFQModels = new CustomerRFQModels();
        $data=$CustomerRFQModels->delete_rfq($id,$is_delete);
        
        // print_r($data);
        // echo '<pre>';
        // print_r($data);die;
        
        // return view('admin/proposal_details',$data);
    } 
    public function delete_cust()
    {
        
        $id=$this->request->getPost('id');
        $is_delete=$this->request->getPost('is_delete');
        
        $Customer_model = new Customer_model();
        $data=$Customer_model->delete_cust($id,$is_delete);

        // print_r($data);
        // echo '<pre>';
        // print_r($data);die;
        
        // return view('admin/proposal_details',$data);
    } 
    public function publish_proposal()
    {
        $session = session();
        if($session->get('isadminlogin')){
        $id=$this->request->getPost('proposal_id');
        $nbfc=$this->request->getPost('nbfc');
        if(!empty($nbfc)){
            $nbfc = 1;
        }else{
            $nbfc = 0;
        }
        // if($nbfc == 'yes'){
        //     $nbfc = 1;
        // }else{
        //     $nbfc = 0;
        // }
        $investor=$this->request->getPost('investor');
        if(!empty($investor)){
            $investor = 1;
        }else{
            $investor = 0;
        }
        $indicativeproposel = new Indicativeproposal_model();
        $data=$indicativeproposel->publish_proposal($id,$nbfc,$investor);

        // print_r($data);
        // echo '<pre>';
        // print_r($data);die;
        return redirect()->route('admin/indicativeproposal');
        // return view('admin/proposal_details',$data);
        }
        else{
            return view('admin/login');
        }
    }
    public function rfq_bid_detail()
    {
        return view('admin/rfq_bid_detail');
    }
    public function indicativeproposal()
    {
        $session = session();
        if($session->get('isadminlogin')){
        $indicativeproposel = new Indicativeproposal_model();
        $user = new LoginModles();
        $data = [
            'inductive_list' => $indicativeproposel->join('users', 'users.user_id = indicative_proposals.customer_id')->paginate(5),
            'pager' => $indicativeproposel->pager
        ];
        // print_r($data);die();
        // $data['inductive_list']=$indicativeproposel->list();
        return view('admin/indicativeproposal',$data);
        }
        else{
            return view('admin/login');
        }
    }
    public function searchindicative(){
        $session = session();
        if($session->get('isadminlogin')){
            $indicativeproposel=new Indicativeproposal_model();
            $user= new LoginModles();
        $search=$this->request->getPost('search');
        $fromdate=$this->request->getPost('fromdate');
        $todate=$this->request->getPost('todate');
      
        // $indicativeproposel->join('users', 'users.user_id = indicative_proposals.customer_id')->where('indicative_proposals.customer_id', $session->get('user_id'));
      $indicativeproposel->join('users', 'users.user_id = indicative_proposals.customer_id');
       
        if($search!=''){
           $indicativeproposel->like('indicative_proposals.proposal_title',$search);
           
        }
        if($fromdate!='' && $todate!=''){
           $indicativeproposel->where('proposal_date BETWEEN "'.$fromdate.'" and "'.$todate.'"');
        }
        // $data['indicativedetails']=$indicativeproposel->orderBy('proposal_id ', 'ASC')->findAll();
        $data['indicativedetails']=$indicativeproposel->findAll();
        // print_r($data['indicativedetails']);die();
        $output='<div class="card">
        <div class="card-body">';
        if(count($data['indicativedetails'])>0){
        foreach($data['indicativedetails'] as $indicative){ 
            $output.=' <div class="row">
            <div class="col-2 text-center">
                <img class="card-img-top" src="'.$indicative['proposal_logo'].'" alt="" style="width:50%;">
            </div>
            <div class="col-8">

                <div class="row">
                    <div class="col-md-9">
                        <a href="proposal_details?id='. $indicative['proposal_id'].'">
                            <h5><i class="bx bx-user"></i>'. $indicative['proposal_title'].'<span
                                    class="badge bg-label-warning me-1">Pending</span></h5>
                              
                        </a>
                        <p class="m-0">Date: '. $indicative['proposal_date'].'</p>
                        <div class="row">
                            <div class="col-md-5">
                                <p class="mb-0">Mobile No. +91 '. $indicative['mobile_number'].'</p>
                            </div>
                            <div class="col-md-7">
                                <p class="py-0">Email Id:'. $indicative['emailid'].'</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <h6>Requirement Amount</h6>
                        <h6><i class="bx bx-rupee"></i> '. $indicative['min_investment'].'</h6>
                    </div>

                </div>
            </div>
            <div class="col-2 text-center">

                <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                        data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item"
                            href="edit_proposal?id='. $indicative['proposal_id'].'"><i
                                class="bx bx-edit-alt me-1"></i>
                            Edit</a>
                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                            data-bs-target="#basicModal_'. $indicative['proposal_id'].'"><i
                                class="bx bx-trash me-1"></i> Delete</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#exampleModal_'. $indicative['proposal_id'].'">
                            Publish Proposal
                        </button>

                        <!-- Modal -->

                    </div>
                </div>
            </div>
        </div>
        <hr>';
             } 
            }else{
                $output.=' <div class="row">
                <div class="col-12 text-center text-danger">No Data Found</div>
                </div>';
            }
         $output.='</div>
     </div>';
 echo $output;
     }
     else{
         return view('admin/login');
         // return redirect()->to('login');
     }
    }
    //
    public function searchpayment()
    {  
        $session = session();
        if($session->get('isadminlogin')){
        $nbfc = new PaymentRFQModels();
        $user = new LoginModles();
        $user = new Indicativeproposal_model();
        $search=$this->request->getPost('search');
        $fromdate=$this->request->getPost('fromdate');
        $todate=$this->request->getPost('todate');
        $nbfc->join('users', 'users.user_id = customer_payment.customer_id','left')->join('indicative_proposals', 'indicative_proposals.proposal_id = customer_payment.proposal_id','left');
        if($search!=''){
            $nbfc->like('proposal_title',$search);
            
         }
         if($fromdate!='' && $todate!=''){
            $nbfc->where('pay_date BETWEEN "'.$fromdate.'" and "'.$todate.'"');
         }
         $data['paydetails']=$nbfc->findAll();
        //  print_r($data['paydetails']);die();
         $output=' <table class="table table-hover">
         <thead class="table-dark">
             <tr>
                 <td>#</td>
                 <td>Proposal</td>
                 <td>Customer</td>
                 <td>Investor</td>
                 <td>Amount</td>
                 <td>Payment Date</td>
                 <td>Status</td>
             </tr>
         </thead>
         <tbody class="table-border-bottom-0">';
       $i = 1;if(count($data['paydetails'])>0){
       foreach($data['paydetails'] as $pay){
        $output.='
             <tr>
                 <td>'.$i++.'</td>
                 <td>'.$pay['proposal_title'].'</td>
                 <td>'.$pay['firstname'].' '.$pay['lastname'].'</td>
                 <td>'.$pay['firstname'].' '.$pay['lastname'].'</td>
                 <td><i class="bx bx-rupee"></i> '.$pay['amount'].'</td>
                 <td> '.$pay['pay_date'].'</td>
                 <td><span class="badge bg-label-danger me-1">Pending</span></td>
           

             </tr>';
            }  
        }else{
            $output.='  <tr class="text-center">
            <td colspan="6">
          <p class="text-center">No Data Found</p>
          </td>
          </tr>';
        }
       $output.='</tbody>
     </table>';
     echo $output;
        }
        else{
            return view('admin/login');
        }
    }
    //
    public function searcrfq(){
        $session = session();
        if($session->get('isadminlogin')){
            $customer= new CustomerRFQModels();
        $search=$this->request->getPost('search');
        $fromdate=$this->request->getPost('fromdate');
        $todate=$this->request->getPost('todate');
       $customer;
       
        if($search!=''){
           $customer->like('rfqtitlte',$search);
           
        }
        if($fromdate!='' && $todate!=''){
           $customer->where('expiry_date BETWEEN "'.$fromdate.'" and "'.$todate.'"');
        }
        // $data['indicativedetails']=$indicativeproposel->orderBy('proposal_id ', 'ASC')->findAll();
        $data['custdetails']=$customer->findAll();
        // print_r($data['custdetails']);die();
        $output='<div class="card">
        <div class="card-body">';
        if(count($data['custdetails'])>0){
        foreach($data['custdetails'] as $customer){ 
            $output.=' <div class="row">
            <div class="col-2 text-center">
                <img class="card-img-top" src="/public/assets/img/user.png" alt=""
                style="width:50%;">
            </div>
            <div class="col-8">
                    <a href="rfqdetails?id='. $customer['rfq_id'].'"
                    <h5><i class="bx bx-user"></i> '. $customer['rfqtitlte'].' </h5>
                </a>
                <div class="row">
                    <div class="col-3">
                        <p class="mb-1"><i class="bx bxs-calendar"></i>'. $customer['expiry_date'].'</p>
                    </div>
                    <div class="col-4">
                        <p class="mb-1"> <i class="bx bx-border-all"></i> Oreder Resource:'. $customer['resource'].'</p>
                    </div>
                    <div class="col-3">
                        <b class="mb-1">
                            <i class="bx bx-wallet-alt"></i> <i class="bx bx-rupee"></i>'. $customer['total_cost'].'
                        </b>
                    </div>


                </div>
                
            </div>
            <div class="col-2 text-center">
            <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="edit_rfq?id='. $customer['rfq_id'].'"><i
                        class="bx bx-edit-alt me-1"></i>
                    Edit</a>
                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                    data-bs-target="#basicModal_'. $customer['rfq_id'].'"><i
                        class="bx bx-trash me-1"></i> Delete</a>
            </div>
        </div>
            </div>
        </div>
        <hr>';
             } 
            }else{
                $output.=' <div class="row">
                <div class="col-12 text-center text-danger">No Data Found</div>
                </div>';
            }
         $output.='</div>
     </div>';
 echo $output;
     }
     else{
         return view('admin/login');
         // return redirect()->to('login');
     }
    }
    
    //  
    // 
    public function searchcust(){
        $session = session();
        if($session->get('isadminlogin')){
       $customer= new LoginModles();
       $search=$this->request->getPost('search');
       $fromdate=$this->request->getPost('fromdate');
       $todate=$this->request->getPost('todate');
    $userrole="customer";
             $customer->where('user_role',$userrole);
             if($search!=''){
                $customer->like('firstname',$search);
                
             }
            //  if($fromdate!='' && $todate!=''){
            //     $customer->where('expiry_date BETWEEN "'.$fromdate.'" and "'.$todate.'"');
            //  }
             $data['custdetails']=$customer->findAll();
            //  print_r($data['custdetails']);die();
             $output='  <table class="table table-hover">
             <thead class="table-dark">
                 <tr>
                     <td>ID</td>
                     <td>Name</td>
                     <td>Phone Number</td>
                     <td>Email</td>
                     <td>Action</td>
                 </tr>
             </thead>
             <tbody class="table-border-bottom-0">';
                 
            $i=1; if(count($data['custdetails'])>0){
             
                    foreach($data['custdetails'] as $nb){ 
                        $output.='
                 <tr>
                     <td>'. $i++.'</td>
                     <td>'. $nb['firstname'].'</td>
                     <td>'. $nb['mobile_number'].'</td>
                     <td>'. $nb['emailid'].'</td>

                     <td>
                         <!-- <div class="col-2 text-center"> -->

                         <div class="dropdown">
                             <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                 data-bs-toggle="dropdown">
                                 <i class="bx bx-dots-vertical-rounded"></i>
                             </button>
                             <div class="dropdown-menu">
                                 <a class="dropdown-item" href="edit_cust?id='. $nb['user_id'].'<i
                                         class="bx bx-edit-alt me-1"></i>
                                     Edit</a>
                                 <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                     data-bs-target="#basicModal_'. $nb['user_id'].'"><i
                                         class="bx bx-trash me-1"></i> Delete</a>
                             </div>
                         </div>
                        
                     </td>


                 </tr>';
                      }  
                    }else{
                        $output.='  <tr class="text-center">
                        <td colspan="6">
                      <p class="text-center">No Data Found</p>
                      </td>
                      </tr>';
                    }
                 $output.='
             </tbody>
         </table>';
         echo $output;
        }
        else{
            return view('admin/login');
            // return redirect()->to('login');
        }
}
public function searchinvestor(){
    $session = session();
    if($session->get('isadminlogin')){
    $investorss = new Investor_model();
     $user = new LoginModles();
    $nbfcs='investor';
    $search=$this->request->getPost('search');

   $user->where('users.user_role',$nbfcs);

   if($search!=''){
      $user->like('users.firstname',$search);
      
   }
  //  if($fromdate!='' && $todate!=''){
  //     $customer->where('expiry_date BETWEEN "'.$fromdate.'" and "'.$todate.'"');
  //  }

   $data['investdetails']=$user->findAll();
        // print_r($data['investdetails']);die();
   $output='<table class="table table-hover">
   <thead class="table-dark">
       <tr>
           <td>ID</td>
           <td>Name</td>
           <td>Phone Number</td>
           <td>Email</td>
           <td>Action</td>
       </tr>
   </thead>
   <tbody class="table-border-bottom-0">';

      $i=1; if(count($data['investdetails'])>0){
       foreach($data['investdetails'] as $nb){
         $output.='
       <tr>
           <td>'. $i++.'</td>
           <td>'. $nb['firstname'].'</td>
           <td>'. $nb['mobile_number'].'</td>
           <td>'. $nb['emailid'].'</td>
           <td>
               <!-- <div class="col-2 text-center"> -->

               <div class="dropdown">
                   <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                       data-bs-toggle="dropdown">
                       <i class="bx bx-dots-vertical-rounded"></i>
                   </button>
                   <div class="dropdown-menu">
                       <a class="dropdown-item" href="edit_cust?id='. $nb['user_id'].'"><i
                               class="bx bx-edit-alt me-1"></i>
                           Edit</a>
                       <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                           data-bs-target="#basicModal_'. $nb['user_id'].'"><i
                               class="bx bx-trash me-1"></i> Delete</a>
                   </div>
               </div>
           </td>

       </tr>';
    }  
  }else{
      $output.='<tr class="text-center">
      <td colspan="6">
    <p class="text-center">No Data Found</p>
    </td>
    </tr>';
  }
$output.='
</tbody>
</table>';
echo $output;
}
else{
    return view('admin/login');
    // return redirect()->to('login');
}
    
}
    // 
    public function searchnbfc(){
        $session = session();
        if($session->get('isadminlogin')){
            $nbfc = new Nbfc_model();
            $user = new LoginModles();
            $nbfcs='nbfc';
          
        $search=$this->request->getPost('search');
    //  print_r($search);die();
    //   $indicativeproposel->join('users', 'users.user_id = indicative_proposals.customer_id');
         $nbfcs='nbfc';
         $user->where('users.user_role', $nbfcs);
        if($search!=''){
           $user->like('users.firstname',$search);
       
           
        }
        $data['nbfcdetail']=$user->findAll();
//  print_r($data['nbfcdetail']);die();
  
    $output='';
    $output.='<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Phone Number</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody class="table-border-bottom-0">';
    //  print_r('hi');die();
    $i=1;
    
    if(count($data['nbfcdetail'])>0){
  
    foreach($data['nbfcdetail'] as $nb){ 
  $output.='<tr>
        <td>'. $i++.'</td>
        <td>'. $nb['firstname'].' </td>
        <td>'. $nb['mobile_number'].' </td>
        <td>'. $nb['emailid'].'</td>

        <td>
            <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                    data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="edit_cust?id='. $nb['user_id'].'"><i
                            class="bx bx-edit-alt me-1"></i>
                        Edit</a>
                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                        data-bs-target="#basicModal_'. $nb['user_id'].'"><i
                            class="bx bx-trash me-1"></i> Delete</a>
                </div>
            </div>
        </td>

    </tr>';
    
    }}else{
        $output.='
        <tr class="text-center">
          <td colspan="6">
        <p class="text-center">No Data Found</p>
        </td>
        </tr>';
    } 
        $output.='
</tbody>  </table>';
    echo $output;
    }else{
        return view('admin/login');
        // return redirect()->to('login');
        }
}
    // 
    public function indicativeproposals()
    {
        return view('admin/indicativeproposals');
    }

    public function createproject(){
        $session = session();
        if($session->get('isadminlogin')){
                    // $session = session();
                    // $cust_id=$session->get('user_id');
                    // print_r($this->request->getPost);die;
                    $file = $this->request->getFile('proposallogo');
                
                    $imgName='';
                    if(!empty($file)){
                    if ($file->isValid() && ! $file->hasMoved()) {
                        $imgName = $file->getRandomName();
                        $file->move('./public/proposal/', $imgName);
                    }
                    }
                    // $file = $this->request->getFile('proposallogo');
                    //    $imglogo='';
                    //    if(!empty($file)){
                    //       if ($file->isValid() && ! $file->hasMoved()) {
                    //        $imglogo = $file->getRandomName();
                    //        $ext = $file->getClientExtension();
                    //        $file->move(WRITEPATH . 'proposal');
                    //       }
                    //    }
                    $file = $this->request->getFile('proposalimg');
                
                    $imgfile='';
                    if(!empty($file)){
                    if ($file->isValid() && ! $file->hasMoved()) {
                        $imgfile = $file->getRandomName();
                        $file->move('./public/proposal/', $imgfile);
                    }
                    }
                    // $files = $this->request->getFile('proposalimg');
                    //    $imgName='';
                    //     if(!empty($files)){
                    //       if ($files->isValid() && ! $files->hasMoved()) {
                    //        $imgName = $files->getRandomName();
                    //        $ext = $files->getClientExtension();
                    //        $files->move(WRITEPATH . 'proposalimg');
                    //       }
                    //     }
                    $file = $this->request->getFile('proposaldoc');
                
                    $imgdoc='';
                    if(!empty($file)){
                    if ($file->isValid() && ! $file->hasMoved()) {
                        $imgdoc = $file->getRandomName();
                        $file->move('./public/proposal/', $imgdoc);
                    }
                    }
                    // $docs = $this->request->getFile('proposaldoc');
                    //    $imgDoc='';
                    //    if(!empty($docs)){
                    //       if ($docs->isValid() && ! $docs->hasMoved()) {
                    //        $imgDoc = $docs->getRandomName();
                    //        $ext = $docs->getClientExtension();
                    //        $docs->move(WRITEPATH . 'proposaldoc');
                    //       }
                    //    }

                $proposal= new NbfcCreateProposalModels();
                $proposaltitle=$this->request->getPost('proposaltitle');
                $proposaltrr=$this->request->getPost('proposaltrr');
                $tenure=$this->request->getPost('tenure');
                $miniinvestment=$this->request->getPost('miniinvestment');
                $requirementamount=$this->request->getPost('requirementamount');
                $proposallogo='/public/proposal/'.$imgName;
                // $proposallogo='/public/proposal_logo/'.$imglogo;
                $proposalimg='/public/proposal/'.$imgfile;
                // print_r();die();
                $proposaldoc='/public/proposal/'.$imgdoc;
                // $proposaldoc=$this->request->getPost('proposaldoc');
                $proposaltags=$this->request->getPost('proposaltags');
                $proposalsector=$this->request->getPost('proposalsector');
                $proposaldate=$this->request->getPost('proposaldate');
                $otherdetails=$this->request->getPost('otherdetails');
                $cust_id=$this->request->getPost('customer_id');
                $rfq_id=$this->request->getPost('rfq_id');
                $proposaltagtitle=json_decode($this->request->getPost('proposaltagtitle'));
                $proposaldes=json_decode($this->request->getPost('proposaldes'));
                //  print_r($cust_id);die();
       
                //    die($totalcost);
        
            if(empty($proposaltitle)){
                $data=['code'=>'404','msg'=>'Please Enter proposal title'];
            }else if(empty($tenure)){
             
                $data=['code'=>'404','msg'=>'Please Enter tenure'];
            }else if(empty($miniinvestment)){
                        
                $data=['code'=>'404','msg'=>'Please Enter minimun investment'];
            }else if(empty($proposallogo)){
                    
                $data=['code'=>'404','msg'=>'Please upload Logo'];
            }else{
      
           $rfq_id=$proposal->saverproposal($cust_id,$rfq_id,$proposaltitle,$proposaltrr,$tenure,$miniinvestment,$requirementamount,$proposallogo,$proposalimg,$proposaldoc,$proposaltags,$proposalsector,$proposaldate,$otherdetails);
          
       
            $proposal->saveproposaldetails($cust_id,$rfq_id,$proposaltagtitle,$proposaldes);
            $data = ['code'=>'200','msg'=>'Proposal data added Successfully'];
           }
       
            echo json_encode($data);
          }
        else{
        
          $data = ['code'=>'404','msg'=>'Please check the data.'];
            echo json_encode($data);
        }
   
    }
  
    public function updateproject(){
    
        
        $session = session();
        //$cust_id=$session->get('user_id');
        $file = $this->request->getFile('proposallogo');
      
        $imgName='';
        if(!empty($file)){
           if ($file->isValid() && ! $file->hasMoved()) {
            $imgName = $file->getRandomName();
            $file->move('./public/proposal/', $imgName);
           }
        }
        
        $files = $this->request->getFile('proposalimg');
      
        $imgfile='';
        if(!empty($files)){
           if ($files->isValid() && ! $files->hasMoved()) {
        //    if (! $files->hasMoved()) {
            $imgfile = $files->getRandomName();
            $files->move('./public/proposal/', $imgfile);
           }
        }
        $filedoc = $this->request->getFile('proposaldoc');
      
        $imgdoc='';
        if(!empty($filedoc)){
           if ($filedoc->isValid() && ! $filedoc->hasMoved()) {
            $imgdoc = $filedoc->getRandomName();
            $filedoc->move('./public/proposal/', $imgdoc);
           }
        }

        $proposal= new NbfcCreateProposalModels();
        $proposaltitle=$this->request->getPost('proposaltitle');
        // print_r($proposaltitle);die();
        $proposalid=$this->request->getPost('proposalid');
        $proposaltrr=$this->request->getPost('proposaltrr');
        $tenure=$this->request->getPost('tenure');
        $miniinvestment=$this->request->getPost('miniinvestment');
        $requirementamount=$this->request->getPost('requirementamount');
        $proposallogo='';
        $proposalimg='';
        $proposaldoc='';
        // print($imgfile);
        // print($imgName);
        // print($imgdoc);
        // die();
        if($imgName!=""){

            $proposallogo='/public/proposal/'.$imgName;
        }
        if($imgfile!=""){

            $proposalimg='/public/proposal/'.$imgfile;
        }
        if($imgdoc!=""){

            $proposaldoc='/public/proposal/'.$imgdoc;
        }
        // print_r($proposalimg);die();
        // $proposaldoc=$this->request->getPost('proposaldoc');
        $proposaltags=$this->request->getPost('proposaltags');
        $proposalsector=$this->request->getPost('proposalsector');
        $proposaldate=$this->request->getPost('proposaldate');
        $otherdetails=$this->request->getPost('otherdetails');
        $cust_id=$this->request->getPost('customer_id');
        $rfq_id=$this->request->getPost('rfq_id');
        $proposaltagtitle=json_decode($this->request->getPost('proposaltagtitle'));
        $proposaldes=json_decode($this->request->getPost('proposaldes'));
    // print_r($proposaldes);die();
       
         //    die($totalcost);
        
 
         if(empty($proposaltitle)){
            $data=['code'=>'404','msg'=>'Please Enter proposal title'];
        }else if(empty($tenure)){
         
            $data=['code'=>'404','msg'=>'Please Enter tenure'];
        }else if(empty($miniinvestment)){
                    
            $data=['code'=>'404','msg'=>'Please Enter minimun investment'];
        }else{
      
            $proposal->updateproposal($proposaltitle,$proposaltrr,$tenure,$miniinvestment,$requirementamount,$proposallogo,$proposalimg,$proposaldoc,$proposaltags,$proposalsector,$proposaldate,$otherdetails,$proposalid);
            //   print_r($rfq_id);
            // $rfq_id=1;
            
            $proposal->updateproposaldetails($cust_id,$proposalid,$proposaltagtitle,$proposaldes);

           
          
        $data = ['code'=>'200','msg'=>'Proposal data updated Successfully'];
        }
          echo json_encode($data);
        //   return $this->response->setJSON($data);
   
    }  
      
}
