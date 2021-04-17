<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AuthController extends CI_Controller {
    public $Message = null;
	public function __construct() {
		parent::__construct();

        $this->load->helper('form');
        $this->load->model('AuthModel');
        $this->load->library('form_validation');
        $this->load->library('App/Message');
        $this->load->library('App/DBDriver');
        $this->Message = new Message();
        $this->DBDriver = new DBDriver();

	}
	public function index()
    {
        //$this->data["empl_code"]=array();
        $this->data['empl_code'] = $this->AuthModel->ViewPrimaryId('EMPL_CODE');
        $this->data['empl_rec'] = $this->AuthModel->EmployeeRecord();
        $this->load->view('employees_form',$this->data);
    }
    public function CreateEmployeesForm(){
        $response = $this->AuthModel->CreateEmployeesForm();
        $this->session->set_flashdata('flash_message', json_encode($response));
        redirect('/', 'refresh');
    }

}