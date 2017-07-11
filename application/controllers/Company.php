<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {


		public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('form');
				$this->load->model('CompanyModel');
                $this->load->library('pagination');
        }
    
		public function index()
		{
				$this->load->view('header');
				$this->load->view('company-create');
				$this->load->view('footer');
		}
		public function ViewCompany()
		{
			$config = array();
            $config["base_url"] = base_url() . "company/ViewCompany";
            $config["total_rows"] = $this->CompanyModel->record_count();
            $config["per_page"] = 10;
            $config["uri_segment"] = 3;
			
			//config for bootstrap pagination class integration
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = false;
			$config['last_link'] = false;
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['next_link'] = '&raquo';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';


            $this->pagination->initialize($config);

            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data["results"] = $this->CompanyModel->fetch_company($config["per_page"], $page);
            $data["links"] = $this->pagination->create_links();
			
            $this->load->view('header');
            $this->load->view('company-view',$data);
            $this->load->view('footer');

		}
        
        public function SaveCompany()
        {
			
            $this->CompanyModel->InsertCompany();
            // $result = $this->CompanyModel->GetAllCompany();
            
            return true;
            //echo json_encode($result);
            // $this->load->view('header');
            // $this->load->view('company-view');
            // $this->load->view('footer');
        }
		
		public function ReloadCompany()
        {

           //  $result = $this->CompanyModel->GetAllCompany();
           //  echo json_encode($result);
        }
		
	
        public function DeleteCompany($id)
        {
            $this->CompanyModel->DeleteCompanyData($id);

            redirect('company/ViewCompany');

        }
		
		
		public function EditCompany($id)
		{
			$data['companyData'] = $this->CompanyModel->GetCompanyData($id);
			
			
			$this->load->view('header');
            $this->load->view('company-edit',$data);
            $this->load->view('footer');
		}
		
		public function SaveEditCompany($id)
		{
			$this->CompanyModel->SaveEditCompanyData($id);
			
			redirect('company/ViewCompany');
			
		}


	
		
		
		
}
