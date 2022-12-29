<?php 
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class Deal_model extends Model {
	
	protected $db;
	public function __construct(ConnectionInterface &$db) {
		$this->db =& $db;
	}

	function adddeal($deal_data) {
		return $this->db
                        ->table('live_deals')
                        ->insert($deal_data);
                        $user_id = $this->db->insertID();
	}
  //   public function list() {
	// 	return $this->db
  //                       ->table('rank_tbl')
  //                       ->get()
  //                       ->getResult();
	// }
	public function update_payment($user_id,$deal_data) {
		return $this->db
                        ->table('live_deals')
                        ->where(["deal_id" => $user_id])
                        ->set($deal_data)
                        ->update();
	}
  // public function deleterank($id) {
	// 	return $this->db
  //                       ->table('rank_tbl')
  //                       ->where(["id" => $id])
  //                       ->delete();
	// } 
  public function get_user_data($id) {
		return $this->db
                        ->table('live_deals')
                        ->where(["deal_id" => $id])
                        ->delete();
	}
}
