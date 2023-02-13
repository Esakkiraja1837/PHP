<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller{
    public function index()
    {
        $details['details'] = $this->EmployeeModel->getAllEmployee("");
        $this->load->view('Employee/view', $details);
    }

    public function orderbyName(){
        $details['details'] = $this->EmployeeModel->getAllEmployee('first_name');
        $this->load->view('Employee/view', $details);
    }

    public function orderbyExperience(){
        $details['details'] = $this->EmployeeModel->getAllEmployee('experience');
        $this->load->view('Employee/view', $details);
    }

    public function __construct(){
        parent::__construct();
        $this->load->model('EmployeeModel');
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
        $employeemodel = new EmployeeModel;
        $employeemodel->insertEmployee();
    }

    public function search(){
        $this->load->view('Employee/search');
    }

    public function getEmployee() {
        $data = $this->input->post('firstname'); 
        $details['details'] = $this->EmployeeModel->searchEmployee($data);
        $this->load->view('Employee/view', $details);
    }

    public function update(){
        $id = $_GET['update'];
        $result['data'] = $this->EmployeeModel->isavailable($id);
        $this->load->view('Employee/update',$result);
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
                'picture' => $this->input->post('profilephoto')
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
        $response = $this->EmployeeModel->deleteEmployee($id);
    }
}
?>