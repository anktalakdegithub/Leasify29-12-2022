<?php
namespace App\Controllers;
// defined('BASEPATH') OR exit('No direct script access allowed');
//require 'vendor/autoload.php';
require_once(APPPATH."Libraries/config_paytm.php");
require_once(APPPATH."Libraries/encdec_paytm.php");


class Addmoney extends BaseController {
 
	public function index()
	{
    // $this->load->library('session'); 
    // $userdata = $this->session->get('userdata');
  //  print_r($userdata['contact']);
  // echo 'hello';
  // die;
  // echo "okay";
  // die();
  
      $session=session();
      $paramList["MID"] = PAYTM_MERCHANT_MID;
      // $paramList["ORDER_ID"] = $userdata['user_id'].uniqid();     
      // $paramList["CUST_ID"] = $userdata['user_id'];   /// according to your logic
      $paramList["ORDER_ID"] = date('Ymdhis');     
      $paramList["CUST_ID"] = $session->get('user_id');   /// according to your logic
      $paramList["INDUSTRY_TYPE_ID"] = 'Retail';
      $paramList["CHANNEL_ID"] = 'WEB';
      $paramList["TXN_AMOUNT"] = $this->request->getPost('money');
      $paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;

      $paramList["CALLBACK_URL"] = base_url()."/payment_response?user_id=".$session->get("user_id");
      $paramList["MSISDN"] =$session->get("mobile_number");
      $paramList["EMAIL"] =$session->get("emailid");
      $paramList["VERIFIED_BY"] = "EMAIL"; //
      $paramList["IS_USER_VERIFIED"] = "YES"; //
      //  print_r($paramList);
        $checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

         $output='<form id="myForm" action="'.PAYTM_TXN_URL.'" method="post">';
         
         foreach ($paramList as $a => $b) {
        $output.='<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
       }
       
            $output.='<input type="hidden" name="CHECKSUMHASH" value="'.$checkSum.'">
        </form>
        <script type="text/javascript">
            document.getElementById("myForm").submit();
         </script>';
       echo $output;
	}

	public function payment_response(){
    $wallet=new \App\Models\WalletPaymentRFQModels;
    $Login=new \App\Models\LoginModles;
   
    $user_id=$this->request->getGet('user_id');
    
    // $user_id=$session->get('user_id');
 
		// $user_id=$this->request->getGet('user_id');
		// $user=$this->Deal_model->get_user_data($user_id);
    // $userdata = $this->session->get('userdata');
 
	    	$paytmChecksum = "";
        $paramList = array();
        $isValidChecksum = "FALSE";
        $paramList = $_POST;
      //  print_r($paramList);
       
      //  if($paramList!=""){
        // if(empty($paramList['TXNAMOUNT'])){
        //   $data=['code'=>'404','msg'=>'Please Enter Name'];
        // }
      //  print_r($paramList);
        if($paramList['STATUS']=="TXN_SUCCESS"){
          
         $amt=$paramList['TXNAMOUNT'];
         
         $paymentmethod=$paramList['PAYMENTMODE'];
         $pay_date=$paramList['TXNDATE'];
         $ismoney=1;
          $addmoney=$Login->where('user_id', $user_id)->findAll();
    //die();
    $firstname =$addmoney[0]['firstname'];
    $mobilenumber =$addmoney[0]['mobile_number'];
    $emailid =$addmoney[0]['emailid'];
    $session=session();
    $session_data = array(  
      'emailid' => $emailid
  );  
  
  $session->set('isnbfclogin', true);
  $session->set('nbfcdata', $session_data);
    $session->set('user_id',$user_id);
    $session->set('emailid',$emailid);
    $session->set('mobile_number',$mobilenumber);
    $session->set('firstname',$firstname);
        	 $deal_data = [
            'payment_status'		=> 'paid',
            'Amount' =>$amt,
            'payment_method' =>$paymentmethod,
            'pay_date' =>$pay_date,
            'is_money' => $ismoney,
                'user_id' => $user_id   
          ];
  // print_r($deal_data);die();
          $demo=$wallet->save($deal_data);
          // $data=['code'=>'200','msg'=>'Details Submitted Successfully'];
          $demo=$wallet->where('user_id',$user_id)->select('sum(Amount) as sumamt')->first();
          $totalamt= $demo['sumamt'];
          
        if($totalamt!=""){
          $wallet->updateuser(($totalamt+$amt), $user_id);
        }else{
          $wallet->updateuser($amt, $user_id);
        }
        	// $course_id=1;
        //	$this->User_Model->update_payment($user_id,$deal_data);

// echo "okay";
return redirect()->route('user/thanks');
        }
        else{
        	//redirect('checkout');
        //	redirect('students');
return redirect()->route('user/my_vault');
        }
	}
	public function scholarship()
	{
		$scholarship_id=$this->session->userdata('scholarship_id');
		//echo $scholarship_id;
		$paramList["MID"] = PAYTM_MERCHANT_MID;
        $paramList["ORDER_ID"] = $scholarship_id.rand();     
        $paramList["CUST_ID"] = $scholarship_id;   /// according to your logic
        $paramList["INDUSTRY_TYPE_ID"] = 'Retail';
        $paramList["CHANNEL_ID"] = 'WEB';
        $paramList["TXN_AMOUNT"] = 1000;
        $paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
   
        $paramList["CALLBACK_URL"] = base_url().'checkout/scholarship_response?scholarship_id='.$scholarship_id;
        $paramList["MSISDN"] = ""; //Mobile number of customer
        $paramList["EMAIL"] ='';
        $paramList["VERIFIED_BY"] = "EMAIL"; //
        $paramList["IS_USER_VERIFIED"] = "YES"; //
      //  print_r($paramList);
        $checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

        ?>

        <!--submit form to payment gateway OR in api environment you can pass this form data-->
   
        <form id="scholarship_form" action="<?php echo PAYTM_TXN_URL ?>" method="post">
        <?php
         foreach ($paramList as $a => $b) {
        	echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
       	}
       ?>
            <input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
	        </form>
	        <script type="text/javascript">
	          document.getElementById('scholarship_form').submit();
	         </script>
	 
		<?php
	}
	public function scholarship_response(){
		$scholarship_id=$this->input->get('scholarship_id');
		$paytmChecksum = "";
        $paramList = array();
        $isValidChecksum = "FALSE";
        $paramList = $_POST;
        if($paramList['STATUS']=="TXN_SUCCESS"){
        	$course_id=1;
        	$this->User_Model->update_scholarship_status($scholarship_id);
        	redirect('thankyou');
        }
        else{
        	$student_id=$this->session->userdata('user_id');
        	redirect('checkout/scholarship');
        }
	}
	
}
