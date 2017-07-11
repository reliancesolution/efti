<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyModel extends CI_Model {

      
        
        public function InsertCompany()
        {
            $this->CompanyName = $_POST['companyName'];
            $this->DownpaymentLimitDays = $_POST['dpafter'];
            $this->ProgressLimitDays = $_POST['pbAfter'];
            $this->FinalLimitDays = $_POST['fbAfter'];
            $this->RetentionLimitDays = $_POST['retAfter'];
            $this->CompanyDownpaymentPercent = $_POST['dpPercent'];
            $this->CompanyProgressPercent = $_POST['pbPercent'];
            $this->CompanyFinalPercent = $_POST['fbPercent'];
            $this->CompanyRetentionPercent = $_POST['retPercent'];
            
            
            $this->db->insert('CompanyTable', $this);
            
        }
		
		public function GetAllCompany()
		{
			
			$query = $this->db->get('companyTable');
			
			
			//$query = $this->db->query('CALL GetAllFromCompanyTable()');
			
			if($query->num_rows() > 0)
			{
				return $query->result();
				
			}else
			{
				return false;
			}
			
			
			return $query->result();
		}


        
        public function record_count() {
            return $this->db->count_all("companytable");
        }


        public function DeleteCompanyData($id)
        {
            
            $this->db->query('delete from companytable where CompanyID = '.$id);
            

            return true;
        }


 
        public function fetch_company($limit, $start) {
        
            $this->db->limit($limit, $start);
            $query = $this->db->get("companytable");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
        }
		
		
		public function GetCompanyData($id)
		{
			
			$this->db->where('CompanyId', $id);
            $query = $this->db->get("companytable");
			
			return $query->result();
		}
		
		
		public function SaveEditCompanyData($id)
		{
			$this->CompanyName = $_POST['companyName'];
            $this->DownpaymentLimitDays = $_POST['dpafter'];
            $this->ProgressLimitDays = $_POST['pbAfter'];
            $this->FinalLimitDays = $_POST['fbAfter'];
            $this->RetentionLimitDays = $_POST['retAfter'];
            $this->CompanyDownpaymentPercent = $_POST['dpPercent'];
            $this->CompanyProgressPercent = $_POST['pbPercent'];
            $this->CompanyFinalPercent = $_POST['fbPercent'];
            $this->CompanyRetentionPercent = $_POST['retPercent'];

			$this->db->where('CompanyId', $id);
			$this->db->update('companyTable', $this); 
			 
		}
		
		


}