<?php namespace App\Models;
use CodeIgniter\Model;
class WalletPaymentRFQModels extends Model{
     
    protected $table= 'user_wallet';
    protected $allowedFields = ['user_id','Amount','payment_method','paymnet_status','is_money','reason','pay_date'];


    // savemoney($nbfc_id,$money,$paymentmethod,$paymentstatus)
    
    public function updateuser($avamoney, $user_id){
        
        // print_r($avamoney);die();
        $demo=$this->db->query("update users set wallet_amount='".$avamoney."' where user_id='".$user_id."'");
        
        
      
    }
    public function addbidpayment($bidamount,$pay_date,$paymentmethod,$paymentstatus,$ismoney,$reason,$customer_id){
        date_default_timezone_set('Asia/Kolkata');
		$date=date("Y-m-d h:i:sa");
        $this->db->query("insert into user_wallet (Amount,user_id,payment_method,paymnet_status,is_money,reason,pay_date,created_at,updated_at) values('$bidamount','$customer_id','$paymentmethod','$paymentstatus','$ismoney','$reason','$pay_date','$date','$date')");
    }
    public function update_money($paid,$uwallet){
        // print_r($paid);die();
      
        $demo=$this->db->query("update user_wallet set is_money='".$paid."' where uwallet_id='".$uwallet."'");
        
        
      
    }
}
?>