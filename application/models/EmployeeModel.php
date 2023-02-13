<?php
class EmployeeModel extends CI_Model{

    protected  $table = 'employee';
    function __construct(){
      parent::__construct();
      $this->load->database();
    }

    public function insertEmployee()
    {
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
        $result = $this->db->insert('employee', $details);
        return $result;
    }

    public function getAllEmployee($order){

        if ($order=='first_name'){
          $this->db->from('employee');
          $this->db->order_by('first_name asc');
          $employeedetails = $this->db->get();  
        } 
        
        if ($order=='experience'){
          $this->db->from('employee');
          $this->db->order_by('experience desc');
          $employeedetails = $this->db->get();
        }

        if($order == ""){
          $employeedetails = $this->db->get('employee'); 
        }
        return $employeedetails->result();
    }

    public function searchEmployee($data){
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('first_name', $data);
        $query = $this->db->get();
        return $query->result();
    }

    public function isavailable($id){
        $query = $this->db->query("select * from employee where id='".$id."'");
        $query->result();
        echo "welcome"."$id";
    }

    public function updateEmployee($details,$id){
        $query = $this->db->where('id', $id);
        $this->db->update('employee',$details);
        return $query;
    }

    public function deleteEmployee($id){
        $query = $this->db->query("update employee SET isdelete = false where id='".$id."'");
        if($query == true){
            echo "Employee id = ".$id."successfully deleted";
        } else {
            echo "Failed to delete";
        }
    }
}
?>