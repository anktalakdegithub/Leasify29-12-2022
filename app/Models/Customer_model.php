<?php 
namespace App\Models;

use CodeIgniter\Model;
// use CodeIgniter\Database\ConnectionInterface;

class Customer_model extends Model {
	
	protected $db;
  
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
                        ->table('users')
                        // ->join('users', 'users.user_id = indicative_proposals.customer_id')
                        ->where(["user_role" => 'customer'])
                        ->get()
                        ->getResult();
	}
    public function editcustomer($id) {
		return $this->db
                        ->table('users')
                        ->where(["user_id" => $id])
                        ->get()
                        ->getRow();
	}
	public function updatecustomer($data,$id) {
		return $this->db
                        ->table('users')
                        ->where(["user_id" => $id])
                        ->set($data)
                        ->update();
	}

  public function delete_cust($id,$is_delete) {

		// return $this->db
    //                     ->table('users')
    //                     ->where(["user_id" => $id])
    //                     ->delete();
    return $this->db->query("update users set is_delete='".$is_delete."' where user_id='".$id."'");
        
	}
  
    public function paymentlist($user_id) {
		return $this->db
                        ->table('customer_payment')
                        ->join('users', 'users.user_id = customer_payment.customer_id','left')
                        ->join('indicative_proposals', 'indicative_proposals.proposal_id = customer_payment.proposal_id','left')
                        ->where(['investor_id' => $user_id])
                        ->get()
                        ->getResult();
	}
}
