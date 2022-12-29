<?php namespace App\Models;
use CodeIgniter\Model;
class LoginModles extends Model{
     
    protected $table= 'users';
    protected $allowedFields = ['firstname','lastname','emailid','mobile_number','user_role','wallet_amount'];


    public function savereg($fname,$lname,$mobilenum,$email,$user_role) {
        date_default_timezone_set('Asia/Kolkata');
		$date=date("Y-m-d h:i:sa");
        $this->db->query("insert into users(firstname, lastname,emailid,mobile_number,user_role,created_at,updated_at) values ('$fname', '$lname','$email','$mobilenum','$user_role','$date','$date')");

    }
    public function savesignup($fname,$lname,$email,$phone,$user_type,$password) {
        date_default_timezone_set('Asia/Kolkata');
		$date=date("Y-m-d h:i:sa");
        $this->db->query("insert into users(firstname, lastname,emailid,mobile_number,password,user_role,created_at,updated_at) values ('$fname', '$lname','$email','$phone','$password','$user_type','$date','$date')");

    }
 
    public function clientLogin($email, $password) {
        $result = $this->db
                        ->table('users')
                        ->where(["user_role" => "admin", "emailid" => $email, "password" => $password])
                        ->get()
                        ->getRow();
        if($result) {
            $data = [
                'login_id'          => $result->user_id,
                'login_name'        => $result->firstname,
                'login_email'       => $result->emailid,
                'login_status'      => TRUE,
            ];
            return $data;
        } else {
            return 0;
        }
        
    }
    public function savechangepassword($email,$pass){
        date_default_timezone_set('Asia/Kolkata');
        $date=date("Y-m-d h:i:sa");
        $pass=$pass;
        $query=$this->db->query("update users SET password='$pass', updated_at='$date' where emailid='".$email."'");
    }
    
    public function checktoken($token){
        
        return $this->db
        ->table('password_reset_temp')
        ->where(["token" => $token])
        ->get()
        ->getRow();
    }
    
    public function update_verficationstatus($verified,$isverifyid){
        // print_r($paid);die();
      
        $demo=$this->db->query("update users set is_verify='".$verified."' where user_id='".$isverifyid."'");
   
    }
    
}
?>