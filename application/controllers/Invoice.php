<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		$this->load->helper('form');
		$this->load->model('InvoiceModel');
		$this->load->library('pagination');
		
	}
	
	
	public function index()
	{
			$data['result'] = $this->InvoiceModel->loadCompany();
			
            $this->load->view('header');
            $this->load->view('invoice-create',$data);
            $this->load->view('footer');
	}
	
	public function VerifyPO($po)
	{
			$result = $this->InvoiceModel->VerifyPOData($po);
			
			if($result > 0)
			{
				$verify = 'suc';
				echo json_encode($verify);
			}
			else
			{
				$verify = 'notexist';
				echo json_encode($verify);
			}
		
		
	}

	// public function createExistInvoice($po)
	// {
		// $data['result']=$this->InvoiceModel->getinvoicerecord($po);

		 // $this->load->view('header');
		 // $this->load->view('invoice-verified-create',$data);
		 // $this->load->view('footer');

	// }
	
	public function createNewInvoice($po)
	{
		
		$last = $this->InvoiceModel->getLastInvoice();
		
		$data = array(

			'Data_PO' => $po,
			'Data_NewInvoice' => $last + 1,
			'companyData' => $this->InvoiceModel->loadCompany()

		);
		
		// $this->load->view('header');
		// $this->load->view('invoice-new-create',$data);
		// $this->load->view('footer');

		$this->load->view('header');
		$this->load->view('po_create',$data);
		$this->load->view('footer');


	}
	
	public function savePO($txtCompanyName)
	{
		$this->InvoiceModel->saveDataPO($txtCompanyName);
	}


	public function viewTransactions($po)
	{
		$data = array (

			'po' => $this->InvoiceModel->loadPo($po),
			'invoice' => $this->InvoiceModel->loadInvoice($po)

		);

		$this->load->view('header');
		$this->load->view("transactions",$data);
		$this->load->view('footer');
	}

	public function addNewInvoice($po)
	{
		
		$last = $this->InvoiceModel->getLastInvoice();
		
		$data = array(

			'Data_PO' => $po,
			'Data_NewInvoice' => $last + 1,
			'companyData' => $this->InvoiceModel->loadCompany()

		);
		
		// $this->load->view('header');
		// $this->load->view('invoice-new-create',$data);
		// $this->load->view('footer');

		$this->load->view('header');
		$this->load->view('invoice-new-create',$data);
		$this->load->view('footer');


	}

	
}
