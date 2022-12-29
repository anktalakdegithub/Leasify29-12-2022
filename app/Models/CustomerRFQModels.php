<?php namespace App\Models;
use CodeIgniter\Model;
class CustomerRFQModels extends Model{
     
    protected $table= 'rfq';
    protected $allowedFields = ['rfqtitlte','subject','rfqupload','expiry_date','additional_details','total_cost','is_delete'];


    public function saverfq($cust_id,$rfqtitle,$rfqsub,$expirydate,$additionaldetails,$totalcost,$file)
    {	date_default_timezone_set('Asia/Kolkata');
        $resource="Website";
		$date=date("Y-m-d h:i:sa");
        $data=array('customer_id' => $cust_id,
        'rfqtitlte' =>$rfqtitle,
        'subject'=> $rfqsub,
        'rfqupload'=> $file,
        'expiry_date'=>$expirydate,
        'additional_details'=>$additionaldetails,
        'total_cost'=>$totalcost,
        'resource'=>$resource,
        'created_at'=>$date,
        'updated_at'=>$date);
         // $this->db->query("insert into rfq (rfqtitlte, subject,expiry_date,additional_details,total_cost,resource,created_at,updated_at) values ('$rfqtitle', '$rfqsub','$expirydate','$additionaldetails','$totalcost','$resource','$date','$date')");
        $this->db->table('rfq')->insert($data);
        $rfq_id=$this->db->insertID();
        return $rfq_id;
    }
    public function saverfqreq($cust_id,$rfq_id,$description,$cost,$quantity)
    {	date_default_timezone_set('Asia/Kolkata');
		$date=date("Y-m-d h:i:sa");
        $query="insert into rfq_requirement (customer_id, rfq_id, requiremnet_details, cost, quantity,created_at,updated_at) values ";
        
        $i=0;
        foreach ($description as $desc) {
            $query.="('$cust_id','$rfq_id','$desc', '$cost[$i]','$quantity[$i]','$date','$date'),";
            $i++;
        }
        $query=rtrim($query, ",");
        // print_r($query);
        $this->db->query($query);
    }
    public function updaterfq($data,$rfq_id,$requiremnet_details,$quantity,$cost) {
        // print_r($rfq_id);die();
        $dmo=$this->db
                       ->table('rfq')
                       ->where(["rfq_id" => $rfq_id])
                       ->set($data)
                       ->update();
       
       date_default_timezone_set('Asia/Kolkata');
       $date=date("Y-m-d h:i:sa");
       $this->db->query("delete from rfq_requirement where rfq_id='$rfq_id'");
       $query="insert into rfq_requirement (rfq_id, requiremnet_details, cost, quantity,created_at,updated_at) values ";
       
       $i=0;
       foreach ($requiremnet_details as $desc) {
           $query.="('$rfq_id','$desc', '$cost[$i]','$quantity[$i]','$date','$date'),";
           $i++;
       }
       $query=rtrim($query, ",");
    //  print_r($query);die();
       $this->db->query($query);
   }
   public function editrfq($id) {
       $result = array();
       $result['rfq'] = $this->db
               ->table('rfq')
               ->where(["rfq_id" => $id])
               ->get()
               ->getRow();
                    //  print_r($question);
       // $result['rfq']=$rfq;

       $result['rfq_requirment'] = $this->db
           ->table('rfq_requirement')
           ->where(["rfq_id" => $id])
           ->get()
           ->getResult();
           return $result;
   }
   public function details($id) {
       
       $result = array();
       $result['rfq'] = $this->db
               ->table('rfq')
               ->join('users','users.user_id=rfq.customer_id')
               ->where(["rfq_id" => $id])
               ->get()
               ->getRow();
                    //  print_r($question);
       // $result['rfq']=$rfq;

       $result['rfq_requirment'] = $this->db
           ->table('rfq_requirement')
        //    ->join('users','users.user_id=rfq_requirement.customer_id')
           ->where(["rfq_requirement.rfq_id" => $id])
           ->get()
           ->getResult();
        //    print_r($result['rfq_requirment']);die();
       return $result;
   }

    public function updatecustomerdetails($mem_id,$is_check){
        date_default_timezone_set('Asia/Kolkata');
		$date=date("Y-m-d h:i:sa");
        $query= $this->db->query("update rfq set is_approved='$is_check',created_at='$date',updated_at='$date' where rfq_id='$mem_id'");
        // print_r($query);die();
      
    }
    public function delete_rfq($id,$is_delete) {
        // print_r('hi');die();

       $this->db->query("update rfq set is_delete='".$is_delete."' where rfq_id='".$id."'");
       $this->db->query("update rfq_requirement set is_delete='".$is_delete."' where rfq_id='".$id."'");
     
        // $this->db
        //         ->table('rfq')
        //         ->where(["rfq_id" => $id])
        //         ->delete();
        // $this->db
        //         ->table('rfq_requirement')
        //         ->where(["rfq_id" => $id])
        //         ->delete();
    }
}
?>