
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountModel extends CI_Model{
	
	
	public function __construct()
	{
		
		parent::__construct();
		
	}

	public function InsertAccount()
	{
		$this->account_username = $_POST['txtUsername'];
		$this->account_password = $_POST['txtPassword'];
		$this->account_name = $_POST['txtName'];
		
		$this->db->insert('accounttable',$this);
		
	}
	
	public function record_count() 
	{
		return $this->db->count_all("accounttable");
	}
	
	 public function fetch_account($limit, $start) 
	 {
        
		$this->db->limit($limit, $start);
		$query = $this->db->get("accounttable");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
	
	public function DeleteAccountData($id)
	{
		$this->db->query("delete from accounttable where account_id=".$id);
	}
    
}