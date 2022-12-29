<?php namespace App\Models;
use CodeIgniter\Model;
class PaymentRFQModels extends Model{
     
    protected $table= 'customer_payment';
    protected $allowedFields = ['vendor','project','pay_date','amount','status'];


    
    
}
?>