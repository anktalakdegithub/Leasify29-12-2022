<?php namespace App\Models;
use CodeIgniter\Model;
class NBFCLoginModles extends Model{
     
    protected $table= 'nbfc_login';
    protected $allowedFields = ['username','password'];

    // public function shownbfc(){
    //     $sql = "SELECT  * FROM indicative_proposals left join proposal_bid on indicative_proposals.proposal_id=proposal_bid.proposal_id left join users on indicative_proposals.customer_id=users.user_id";
    //     $data=$this->db->query($sql);
    //     return $data;
    //     // $query=$this->db->query("SELECT  * FROM indicative_proposals left join proposal_bid on indicative_proposals.proposal_id=proposal_bid.proposal_id left join users on indicative_proposals.customer_id=users.user_id");
      
	//     // $result= $query->result();
	//     // return $result;
    // }
}
?>