<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('EmployeeModel');
        $this->load->library('pagination');
        $this->load->helper('url');
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
        echo $employee['companyid'];
        $id = $this->EmployeeModel->insertEmployee($employee);
        $result = $this->EmployeeModel->addTechnology($technology, $id);
        $this->load->view('Employee/view');
    }

    public function search(){
        $this->load->view('Employee/view');
    }

    public function getEmployee() {
        $data = $this->input->get('firstname');
        $details['details'] = $this->EmployeeModel->searchEmployee($data);
        $this->load->view('Employee/view', $details);
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
            $details = array(
                'first_name' => $this->input->post('firstname'),
                'last_name' => $this->input->post('lastname'),
                'date_of_birth' => $this->input->post('dateofbirth'),
                'gender' => $this->input->post('gender'),
                'emailid' => $this->input->post('emailid'),
                'contact_number' => $this->input->post('contactnumber'),
                'date_of_joining' => $this->input->post('joiningdate'),
                'designation' => $this->input->post('destination'),
                'current_address' => $this->input->post('currentaddress'),
                'experience' => $this->input->post('experience'),
                'permament_address' => $this->input->post('permanentaddress'),
                'blood_group' => $this->input->post('bloodgroup'),
                'qualification' => $this->input->post('qualification'),
                'emergency_number' => $this->input->post('emergencynumber'),
                'picture' => $this->input->post('profilephoto'),
                'companyid' => $this->input->post('companyid')
            );
            $this->EmployeeModel->updateEMployee($details,$id);
            echo "Employee details sucessfully updated";
        }
    }

    public function updateEmployee($id){
        $this->EmployeeModel->updateEmployee('employee', $id);
    }

    public function delete(){
        $id = $_GET['delete'];
        $details = $this->EmployeeModel->deleteEmployee($id);
        if($details){
            echo '<script type = "text/javascript">';
            echo 'alert("Employee details deleted successfully")';
            echo '</script>';
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