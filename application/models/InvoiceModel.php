
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class InvoiceModel extends CI_Model{
	
	
	public function __construct()
	{
		
		parent::__construct();
		
	}

	public function loadCompany()
	{
		$query = $this->db->query("select CompanyName from companytable");
		
		return $query->result();
	}
	
	public function VerifyPOData($po)
	{
		$query = $this->db->query("select * from potable where PO_number = '".$po."' and CompanyName='".$_POST['txtCompanyName']."'");
		
		return $query->num_rows();
		
	}

	public function getLastInvoice()
	{
		$queryResult = $this->db->query("select Invoice_no from tableInvoice order by Invoice_no desc limit 1");

		$rowQuery = $queryResult->row();
		
		if(isset($rowQuery))
		{
			return $rowQuery->Invoice_no;
		}
		else
		{
			return false;
		}

	}
	
	public function saveDataPO($txtCompanyName)
	{
		$result = $this->db->query("select * from companytable where CompanyName = '".$txtCompanyName."'");
		$data = $result->row();

		$downpaymentAmount = $_POST["txtPOAmount"] * ($data->CompanyDownpaymentPercent/100);
		$progressAmount = $_POST["txtPOAmount"] * ($data->CompanyProgressPercent/100);
		$finalAmount = $_POST["txtPOAmount"] * ($data->CompanyFinalPercent/100);
		$retAmount = $_POST["txtPOAmount"] * ($data->CompanyRetentionPercent/100);

		$billingsummarytable = array(
			
			"CompanyName" => $_POST["txtCompanyName"],
			"PO_number" => $_POST["txtPO"],
			"PO_amount" => $_POST["txtPOAmount"],
			"Site_code" => $_POST["txtSiteCode"],
			"Site" => $_POST["txtSite"],
			"Nature_of_work" => $_POST["txtNatureOfWork"],
			"PO_dp" => $downpaymentAmount,
			"PO_pb" => $progressAmount,
			"PO_fb" => $finalAmount,
			"PO_ret" => $retAmount,
			"PO_input_date" => $_POST["txtDate"]
		
		);
		$this->db->insert('potable',$billingsummarytable);
		
	}

	public function loadPo($po)
	{
		$data = $this->db->query("select * from potable where PO_number='".$po."'");

		return $data->result();

	}

	public function loadInvoice($po)
	{
		$data = $this->db->query("select * from tableinvoice where po_no='".$po."'");

		return $data->result();

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
	
	
}