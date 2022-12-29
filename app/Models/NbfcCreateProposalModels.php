<?php namespace App\Models;
use CodeIgniter\Model;
class NbfcCreateProposalModels extends Model{
     
    protected $table= 'indicative_proposals';
    protected $allowedFields = ['rfq_id','customer_id','proposal_title','pre_tax','tenure','min_investment','requirementamount','proposal_logo','proposal_images','proposal_documents','proposal_tag','proposal_slector','proposal_date','proposal_details','proposal_tag_title','proposal_tags_description','NBFC_publish','investor_publish'];


    public function saverproposal($cust_id,$rfq_id,$proposaltitle,$proposaltrr,$tenure,$miniinvestment,$requirementamount,$proposallogo,$proposalimg,$proposaldoc,$proposaltags,$proposalsector,$proposaldate,$otherdetails)
    {	date_default_timezone_set('Asia/Kolkata');
        $resource="Website";
		$date=date("Y-m-d h:i:sa");
        $data=array('customer_id' => $cust_id,
        'rfq_id' =>$rfq_id,
        'proposal_title' =>$proposaltitle,
        'pre_tax'=> $proposaltrr,
        'tenure'=>$tenure,
        'min_investment'=>$miniinvestment,
        'requirementamount'=>$requirementamount,
        'proposal_logo'=>$proposallogo,
        'proposal_images'=>$proposalimg,
        'proposal_documents'=>$proposaldoc,
        'proposal_tag'=>$proposaltags,
        'proposal_slector'=>$proposalsector,
        'proposal_date'=>$proposaldate,
        'proposal_details'=>$otherdetails,
        'created_at'=>$date,
        'updated_at'=>$date);
         // $this->db->query("insert into rfq (rfqtitlte, subject,expiry_date,additional_details,total_cost,resource,created_at,updated_at) values ('$rfqtitle', '$rfqsub','$expirydate','$additionaldetails','$totalcost','$resource','$date','$date')");
        $this->db->table('indicative_proposals')->insert($data);
        $rfq_id=$this->db->insertID();
        return $rfq_id;
    }
    public function saveproposaldetails($cust_id,$rfq_id,$proposaltagtitle,$proposaldes)
    {	date_default_timezone_set('Asia/Kolkata');
		$date=date("Y-m-d h:i:sa");
        $query="insert into indicative_proposals_details (customer_id,proposal_id, proposal_tag_title, proposal_tags_description, created_at,updated_at) values ";
        
        $i=0;
        foreach ($proposaltagtitle as $desc) {
            $query.="('$cust_id','$rfq_id','$desc', '$proposaldes[$i]','$date','$date'),";
            $i++;
        }
        $query=rtrim($query, ",");
        // print_r($query);
        $this->db->query($query);
    }
    public function deleteproposaldetails($proposalbid_id){
        $this->db->query("delete from proposal_bid where proposalbid_id='$proposalbid_id'");
      }

      public function updateproposal($proposaltitle,$proposaltrr,$tenure,$miniinvestment,$requirementamount,$proposallogo,$proposalimg,$proposaldoc,$proposaltags,$proposalsector,$proposaldate,$otherdetails,$proposalid)
      {	
        // print($proposallogo);
        // print($proposalimg);
        // print($proposaldoc);
        $e_proposaldoc='';
        $e_proposalimg='';
        $e_proposallogo='';
        $proposal=$this->db
        ->table('indicative_proposals')
        ->where(["proposal_id" => $proposalid])
        ->get()
        ->getRow();
       
        if($proposallogo==""){
           $proposallogo=$proposal->proposal_logo;
        }
        
        if($proposalimg==""){
            $proposalimg=$proposal->proposal_images;
        }
        
        if($proposaldoc==""){
            $proposaldoc=$proposal->proposal_documents;
        }
        //print_r($proposallogo);die();
          date_default_timezone_set('Asia/Kolkata');
          $resource="Website";
          $date=date("Y-m-d h:i:sa");
          $data=array(
          'proposal_title' =>$proposaltitle,
          'pre_tax'=> $proposaltrr,
          'tenure'=>$tenure,
          'min_investment'=>$miniinvestment,
          'requirementamount'=>$requirementamount,
          'proposal_images'=>$proposalimg,
          'proposal_documents'=>$proposaldoc,
          'proposal_logo'=>$proposallogo,
          'proposal_tag'=>$proposaltags,
          'proposal_slector'=>$proposalsector,
          'proposal_date'=>$proposaldate,
          'proposal_details'=>$otherdetails,
          'created_at'=>$date,
          'updated_at'=>$date);
          // print_r($proposalid);
           // $this->db->query("insert into rfq (rfqtitlte, subject,expiry_date,additional_details,total_cost,resource,created_at,updated_at) values ('$rfqtitle', '$rfqsub','$expirydate','$additionaldetails','$totalcost','$resource','$date','$date')");
          $this->db->table('indicative_proposals')
                          ->where(["proposal_id" => $proposalid])
                          ->set($data)
                          ->update();
          $rfq_id=$proposalid;
//print_r($rfq_id);
          return $rfq_id;
      }
      public function updateproposaldetails($cust_id,$proposalid,$proposaltagtitle,$proposaldes)
      {	
          date_default_timezone_set('Asia/Kolkata');
          $date=date("Y-m-d h:i:sa");
          $this->db->query("Delete from indicative_proposals_details where proposal_id='$proposalid'");
          $query="insert into indicative_proposals_details (customer_id, proposal_id, proposal_tag_title, proposal_tags_description, created_at,updated_at) values ";
          
          $i=0;
          foreach ($proposaltagtitle as $desc) {
              $query.="('$cust_id','$proposalid','$desc','$proposaldes[$i]','$date','$date'),";
           $i++;
          }
          $query=rtrim($query, ",");
       
          $this->db->query($query);
      }
  
    
}
?>
