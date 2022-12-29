<?php 
namespace App\Models;

use CodeIgniter\Model;
// use CodeIgniter\Database\ConnectionInterface;

class Indicativeproposal_model extends Model {
	
	protected $db;
    protected $table= 'indicative_proposals';
    protected $allowedFields = ['rfq_id','customer_id','proposal_title','pre_tax','tenure','min_investment','proposal_logo','proposal_images','proposal_documents','proposal_tag','proposal_slector','proposal_date','proposal_details','proposal_tag_title','proposal_tags_description','NBFC_publish','investor_publish'];

	// public function __construct(ConnectionInterface &$db) {
	// 	$this->db =& $db;
	// }

	// function addrank($data) {
	// 	return $this->db
    //                     ->table('indicative_proposals')
    //                     ->insert($data);
	// }
    public function list() {
		return $this->db
                        ->table('indicative_proposals')
                        ->get()
                        ->getResult();
	}
    public function editproposel($id) {
		return $this->db
                        ->table('indicative_proposals')
                        ->where(["proposal_id" => $id])
                        ->get()
                        ->getRow();
	}
    public function getproposeldetails($id) {
        return $this->db
                ->table('indicative_proposals_details')
                ->where(["proposal_id" => $id])
                ->get()
                ->getResult();
    }
	public function updateproposel($data,$id) {
		return $this->db
                        ->table('indicative_proposals')
                        ->where(["proposal_id" => $id])
                        ->set($data)
                        ->update();
	}
    public function delete_proposal($id) {
		                $this->db
                        ->table('indicative_proposals')
                        ->where(["proposal_id" => $id])
                        ->delete();
                        $this->db
                        ->table('customer_payment')
                        ->join('users', 'users.user_id = customer_payment.customer_id','left')
                        ->join('indicative_proposals', 'indicative_proposals.proposal_id = customer_payment.proposal_id','left')
                        ->delete();
	}
    public function update_bid($id) {
		return $this->db
                        ->table('proposal_bid')
                        ->where(["proposalbid_id" => $id])
                        ->set([
                            'status'		=> 1,
                        ])
                        ->update();
    }
    public function publish_proposal($id,$nbfc,$investor) {
		return $this->db
                        ->table('indicative_proposals')
                        ->where(["proposal_id" => $id])
                        ->set([
                            'NBFC_publish'		=> $nbfc,
                            'investor_publish'		=> $investor,
                        ])
                        ->update();
    }
    public function details($id) {
		
            $result = array();
            $proposel = $this->db
                            ->table('indicative_proposals')
                            ->join('users','users.user_id=indicative_proposals.customer_id')
                            ->where(["proposal_id" => $id])
                            ->get()
                            ->getRow();
                            //  print_r($question);
            $result['proposal']=$proposel;
            
            $result['bid'] = $this->db
                ->table('proposal_bid')
                ->where(["proposal_id" => $proposel->proposal_id])
                ->get()
                ->getResult(); 
            $result['payment'] = $this->db
                ->table('customer_payment')
                ->join('users','users.user_id=customer_payment.investor_id','left')
                ->where(["proposal_id" => $proposel->proposal_id])
                ->get()
                ->getResult(); 
            $result['documents'] = $this->db
                ->table('indicative_proposals')
                ->where(["proposal_id" => $id])
                ->get()
                ->getResult();
                
            return $result;
	}
    function addpayment($data) {
		return $this->db
                        ->table('customer_payment')
                        ->insert($data);
	}
}
