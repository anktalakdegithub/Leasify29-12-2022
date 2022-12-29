<?php namespace App\Models;
use CodeIgniter\Model;
class NbfcBidModels extends Model{
    protected $table= 'proposal_bid';
    protected $allowedFields = ['proposalbid_id','customer_id','proposal_id','proposal_bid','proposalfiles'];
  
    public function savebis($nbfc_id,$nbfcbid,$propid, $customer_id)
    {	date_default_timezone_set('Asia/Kolkata');
        $resource="Website";
		$date=date("Y-m-d h:i:sa");
        $data=array('customer_id'=>  $customer_id,'investor_id' => $nbfc_id,
        'proposal_bid' =>$nbfcbid,
        'proposal_id'=>$propid,
        'created_at'=>$date,
        'updated_at'=>$date);
         // $this->db->query("insert into rfq (rfqtitlte, subject,expiry_date,additional_details,total_cost,resource,created_at,updated_at) values ('$rfqtitle', '$rfqsub','$expirydate','$additionaldetails','$totalcost','$resource','$date','$date')");
        $data=$this->db->table('proposal_bid')->insert($data);
    //   print_r($data);die();
        $rfq_id=$this->db->insertID();
        return $rfq_id;
    }
    public function updatebid($nbfc_id,$nbfcbid,$propid){
        $is_proposal=1;
        // $this->db->query("");
        $query=
            $this->db->set('users.wallet_amount',$nbfcbid);

            $this->db->where('users.user_id',$nbfc_id);
            $this->db->where('proposal_bid.is_poroposal',$is_proposal);
            $this->db->update('users JOIN proposal_bid ON users.user_id= proposal_bid.customer_id');
        // $this->db->query("update users u inner join proposal_bid s on u.'$nbfc_id' = s.customer_id set u.wallet_amount = s.'$nbfcbid'");
        // $this->db->query("update users set wallet_amount='$nbfcbid' where user_id='$nbfc_id'");
        return $query;  
    }
}
?>






