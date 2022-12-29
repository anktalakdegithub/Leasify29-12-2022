<?php namespace App\Models;
use CodeIgniter\Model;
class CustomerRFQDetailsModels extends Model{
     
    protected $table= 'rfq_requirement';
    protected $allowedFields = ['requiremnet_details','cost','quantity'];

  
}
?>