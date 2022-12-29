<?php namespace App\Models;
use CodeIgniter\Model;
class ResetPasswordModles extends Model{
     
    protected $table= 'password_reset_temp';
    protected $allowedFields = ['email','token','resetdate'];


    public function savepasswordreset($token,$username){
        
        date_default_timezone_set('Asia/Kolkata');
		$date=date("Y-m-d h:i:sa");
        $this->db->query("insert into password_reset_temp (email,resetdate,token) values('$username','$date','$token')");

    }
     
}
?>