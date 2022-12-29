<?php namespace App\Models;
use CodeIgniter\Model;
class CreatedProposalDetailsModels extends Model{
     
    protected $table= 'indicative_proposals';
    protected $allowedFields = ['proposal_title','pre_tax','tenure','min_investment','proposal_logo','proposal_images','proposal_documents','proposal_tag','proposal_slector','	proposal_date','proposal_details','	NBFC_publish','investor_publish'];

  
}
?>