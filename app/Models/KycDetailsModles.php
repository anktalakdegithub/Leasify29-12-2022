<?php namespace App\Models;
use CodeIgniter\Model;
class KycDetailsModles extends Model{
     
    protected $table= 'kycdetails';
    protected $allowedFields = ['dob','residentarea','aadhaarname','aadhaaraddress','aadhaarfront','aadhaarback','bankaccounttype','accountnum','ifsccode','iskyc'];


    public function savekycdetails($address,$occupation,$dinnum,$aadhaaraddress,$nominee,$kycbod,$panphoto,$residentarea,$aadhaarname,$aadharfrontside,$aadharbackside,$userid,$bankaccounttype,$accountnum,$ifsccode,$bankname,$accountname) {
        date_default_timezone_set('Asia/Kolkata');
		$date=date("Y-m-d h:i:sa");
        $iskyc=1;
        $this->db->query("insert into kycdetails(user_id,dob,residentarea,panphoto,aadhaarname,aadhaaraddress,aadhaarfront,aadhaarback,bankaccounttype,accountnum,ifsccode,bankname,accountname,iskyc,created_at,updated_at) values ('$userid', '$kycbod','$residentarea','$panphoto','$aadhaarname','$aadhaaraddress','$aadharfrontside','$aadharbackside','$bankaccounttype','$accountnum','$ifsccode','$bankname','$accountname','$iskyc','$date','$date')");

    }
    public function updatekycdetails($address,$occupation,$dinnum,$aadhaaraddress,$nominee,$kycbod,$panphoto,$residentarea,$aadhaarname,$aadharfrontside,$aadharbackside,$userid,$bankaccounttype,$accountnum,$ifsccode,$bankname,$accountname) {
        date_default_timezone_set('Asia/Kolkata');
		$date=date("Y-m-d h:i:sa");
        $iskyc=1;
       $this->db->query("update kycdetails set dob='".$kycbod."',residentarea='".$residentarea."',panphoto='".$panphoto."',aadhaarname='".$aadhaarname."',aadhaaraddress='".$aadhaaraddress."',aadhaarfront='".$aadharfrontside."',aadhaarback='".$aadharbackside."',bankaccounttype='".$bankaccounttype."',accountnum='".$accountnum."',ifsccode='".$ifsccode."',bankname='".$bankname."',accountname='".$accountname."',iskyc='".$iskyc."',created_at='".$date."',updated_at='".$date."' where user_id='".$userid."'");
      
    }

    
}
?>