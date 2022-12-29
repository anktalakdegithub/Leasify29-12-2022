<?php namespace App\Models;
use CodeIgniter\Model;
class ProposalDetailsModels extends Model{
     
    protected $table= 'indicative_proposals_details';
    protected $allowedFields = ['requiremnet_details','cost','quantity'];

  
}
?>