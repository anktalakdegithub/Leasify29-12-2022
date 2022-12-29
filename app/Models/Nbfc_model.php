<?php 
namespace App\Models;

use CodeIgniter\Model;
// use CodeIgniter\Database\ConnectionInterface;

class Nbfc_model extends Model {
	
	protected $db;
    protected $table= 'indicative_proposals';
    protected $allowedFields = ['customer_id','proposal_title','pre_tax','tenure','min_investment','proposal_logo','proposal_images','proposal_documents','proposal_tag','proposal_slector','proposal_date','proposal_details','proposal_tag_title','proposal_tags_description','NBFC_publish','investor_publish'];

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
                        ->join('users', 'users.user_id = indicative_proposals.customer_id')
                        ->where(["users.user_role" => 'nbfc'])
                        ->get()
                        ->getResult();
	}
    public function editnbfc($id) {
		return $this->db
                        ->table('indicative_proposals')
                        ->where(["proposal_id" => $id])
                        ->get()
                        ->getRow();
	}
	public function updatenbfc($data,$id) {
		return $this->db
                        ->table('indicative_proposals')
                        ->where(["proposal_id" => $id])
                        ->set($data)
                        ->update();
	}
    public function deletenbfc($id) {
		return $this->db
                        ->table('indicative_proposals')
                        ->where(["proposal_id" => $id])
                        ->delete();
	}
    public function details($id) {
		// return $this->db
        //                 ->table('indicative_proposals')
        //                 ->where(["id" => $id])
        //                 ->delete();

                        $result = array();
                        $proposel = $this->db
                                        ->table('indicative_proposals')
                                        ->where(["proposal_id" => $id])
                                        ->get()
                                        ->getRow();
                                     //  print_r($question);
                        $result['proposel']=$proposel;
                        // if($proposel->question_type=="paragraph"){
                
                        $result['bid'] = $this->db
                            ->table('proposal_bid')
                            ->where(["proposal_id" => $proposel->proposal_id])
                            ->get()
                            ->getResult(); 
                        $result['payment'] = $this->db
                            ->table('customer_payment')
                            // ->where(["parent_question_id" => $id])
                            ->get()
                            ->getResult(); 
                        // $result['documents'] = $this->db
                        //     ->table('question_tbl')
                        //     ->where(["parent_question_id" => $id])
                        //     ->get()
                        //     ->getResult();
                            // foreach ($result['pquestions'] as $pquestion) {
                            //     $result['poptions'][] = $this->db
                            // ->table('option_tbl')
                            // ->where(["question_id" => $pquestion->question_id])
                            // ->get()
                            // ->getResult();
                            // }
                        // }
                        // else{
                            
                        //     $result['options'] = $this->db
                        //     ->table('option_tbl')
                        //     ->where(["question_id" => $id])
                        //     ->get()
                        //     ->getResult();
                        // }
                        return $result;
	}
}
