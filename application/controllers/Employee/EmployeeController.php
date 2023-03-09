<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('EmployeeModel');
        $this->load->library('pagination');
        // $this->load->helper('url');
        $this->load->helper(['url', 'form']);
    }

    public function employeeDetails(){
        $details['details'] = $this->EmployeeModel->getAllDetails('first_name');
        $this->load->view('Employee/EmployeeDetails', $details);
    }

    public function index()
    {
        $config = array();
        $config["base_url"] = base_url() . "/index.php/Employee/EmployeeController/index";
        $total_row = $this->EmployeeModel->recordCount();
        $config["total_rows"] = $total_row;
        $config["per_page"] = 5;
        $config['num_links'] = $total_row;
        $config['uri_segment'] = 4;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $this->pagination->initialize($config);
        $page = $this->uri->segment(4);
        $str_links = $this->pagination->create_links();
        $details['details'] = $this->EmployeeModel->getAllEmployee("", $config["per_page"], $page);
        $details["links"] = explode('&nbsp;', $str_links );
        $this->load->view('Employee/view', $details);
    }

    public function orderbyName(){
        $config = array();
        $config["base_url"] = base_url() . "/index.php/Employee/EmployeeController/index";
        $total_row = $this->EmployeeModel->recordCount();
        $config["uri_segment"] = 3;
        $config["total_rows"] = $total_row;
        $config["per_page"] = 5;
        $config['num_links'] = $total_row;
        $config['uri_segment'] = 4;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $this->pagination->initialize($config);
        $page = $this->uri->segment(4);
        $str_link = $this->pagination->create_links();
        $details["links"] = explode('&nbsp;', $str_link );
        $details['details'] = $this->EmployeeModel->getAllEmployee('first_name', $config["per_page"], $page);
        $this->load->view('Employee/view', $details);
    }

    public function orderbyExperience(){
        $config = array();
        $config["base_url"] = base_url() . "/index.php/Employee/EmployeeController/index";
        $total_row = $this->EmployeeModel->recordCount();
        $config["uri_segment"] = 3;
        $config["total_rows"] = $total_row;
        $config["per_page"] = 5;
        $config['num_links'] = $total_row;
        $config['uri_segment'] = 4;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $this->pagination->initialize($config);
        $page = $this->uri->segment(4);
        $str_link = $this->pagination->create_links();
        $details["links"] = explode('&nbsp;', $str_link );
        $details['details'] = $this->EmployeeModel->getAllEmployee('experience', $config["per_page"], $page);
        $this->load->view('Employee/view', $details);
    }

    public function create()
    {
		$this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('dateofbirth', 'Date-of-birth', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('emailid', 'Emailid', 'required');
        $this->form_validation->set_rules('contactnumber', 'Contactnumber', 'required');
		$this->form_validation->set_rules('joiningdate', 'Date-of-joining', 'required');
        $this->form_validation->set_rules('designation', 'Designation', 'required');
        $this->form_validation->set_rules('currentaddress', 'Current_Address', 'required');
        $this->form_validation->set_rules('experience', 'Experience', 'required');
		$this->form_validation->set_rules('permamentaddress', 'Permanent_Address', 'required');
        $this->form_validation->set_rules('bloodgroup', 'Blood_group', 'required');
        $this->form_validation->set_rules('qualification', 'Qualification', 'required');
        $this->form_validation->set_rules('emergencynumber', 'Emergencynumber', 'required');
        $this->form_validation->set_rules('profilephoto', 'ProfilePicture', 'required');

		if ($this->form_validation->run() == false)
		{
			$this->load->view('Employee/create');
		}
    }

    public function insert(){
        $employee['first_name'] = $this->input->post('firstname');
        $employee['last_name' ]= $this->input->post('lastname');
        $employee['date_of_birth' ]= $this->input->post('dateofbirth');
        $employee['gender' ]= $this->input->post('gender');
        $employee['emailid' ]= $this->input->post('emailid');
        $employee['contact_number'] = $this->input->post('contactnumber');
        $employee['date_of_joining'] = $this->input->post('joiningdate');
        $employee['designation'] = $this->input->post('destination');
        $employee['current_address'] = $this->input->post('currentaddress');
        $employee['experience' ]= $this->input->post('experience');
        $employee['permament_address'] = $this->input->post('permanentaddress');
        $employee['blood_group' ]= $this->input->post('bloodgroup');
        $employee['qualification'] = $this->input->post('qualification');
        $employee['emergency_number'] = $this->input->post('emergencynumber');
        $employee['picture' ]= $this->input->post('profilephoto');
        $technology = $this->input->post('technology');
        $employee['companyid'] = $this->input->post('companyid');
        $id = $this->EmployeeModel->insertEmployee($employee);
        $result = $this->EmployeeModel->addTechnology($technology, $id);

        if($id){
            echo "<script type = 'text/javascript'>alert('Employee details created successfully');location = 'index';</script>";
        } else {
            $this->load->view('Employee/create');
        }
    }

    public function search(){
        $this->load->view('Employee/view');
    }

    public function getEmployee() {
        $data = $this->input->get('firstname');
        $details['details'] = $this->EmployeeModel->searchEmployee($data);
        if($details) {
            $this->load->view('Employee/view', $details);
        } else {
            echo "<script type = 'text/javascript'>alert('Employee doesn't exits');location = 'index';</script>";
            echo "$data";
        }
        
    }

    public function getAllDetails(){
        $id = $_GET['view'];
        $result['result']= $this->EmployeeModel->getAllEmployeeDetails($id);
        $this->load->view('Employee/EmployeeDetails',$result);
    }

    public function showbytechnolgies()
    {
      $this->load->view('Employee/technology');
    }

    public function update(){
        $id = $_GET['update'];
        $result['details'] = $this->EmployeeModel->isavailable($id);
        $this->load->view('Employee/update', $result);
        if($this->input->post('submit')){
            $employee['first_name'] = $this->input->post('firstname');
            $employee['last_name' ]= $this->input->post('lastname');
            $employee['date_of_birth' ]= $this->input->post('dateofbirth');
            $employee['gender' ]= $this->input->post('gender');
            $employee['emailid' ]= $this->input->post('emailid');
            $employee['contact_number'] = $this->input->post('contactnumber');
            $employee['date_of_joining'] = $this->input->post('joiningdate');
            $employee['designation'] = $this->input->post('destination');
            $employee['current_address'] = $this->input->post('currentaddress');
            $employee['experience' ]= $this->input->post('experience');
            $employee['permament_address'] = $this->input->post('permanentaddress');
            $employee['blood_group' ]= $this->input->post('bloodgroup');
            $employee['qualification'] = $this->input->post('qualification');
            $employee['emergency_number'] = $this->input->post('emergencynumber');
            $employee['picture' ]= $this->input->post('profilephoto');
            $technology = $this->input->post('technology');
            $employee['companyid'] = $this->input->post('companyid');
            $data = $this->EmployeeModel->updateEmployee($employee,$id);
            $result = $this->EmployeeModel->addTechnology($technology, $id);
        }
    }

    public function updateEmployee($id){
        $this->EmployeeModel->updateEmployee('employee', $id);
    }

    public function delete(){
        $id = $_GET['delete'];
        $details = $this->EmployeeModel->deleteEmployee($id);
        if($details){
            echo "<script type = 'text/javascript'>alert('Employee details deleted successfully');location = 'index';</script>";
            echo "$id";
        } else {
            $this->load->view('failed');
        }
    }

    public function employeebytechnology(){
        $id = $this->input->POST('technology');
        $details['details'] = $this->EmployeeModel->employeebyTechnology($id);
        $this->load->view('Employee/view', $details);
    }
}
?>