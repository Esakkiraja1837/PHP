<?php
class EmployeeModel extends CI_Model{
    function __construct(){
      parent::__construct();
      $this->load->database();
    }

    public function recordCount(){
      $this->db->where('isdelete', TRUE);
      $this->db->from('employee');
      $count = $this->db->count_all_results();
      return $count;
    }

    public function insertEmployee($employee)
    {
        $this->db->insert('employee', $employee);
        $id = $this->db->insert_id();
        return $id;
    }

    public function addTechnology($technology, $id){
      for($index = 0; $index < sizeof($technology); $index++) {
        $employeeTechnology = $technology[$index];
        $data = array('employee_id'=>$id, 'technology_id'=>$employeeTechnology);
        $result = $this->db->insert('employee_technology', $data); 
      }
      return $result;
    }

    public function getAllEmployee($order, $limit, $start){
        if ($order=='first_name'){
          $this->db->limit($limit, $start);
          $this->db->from('employee');
          $this->db->order_by('first_name asc');
          $employeedetails = $this->db->where('isdelete', TRUE)->get();  
        } 
        
        if ($order=='experience'){
          $this->db->limit($limit, $start);
          $this->db->from('employee');
          $this->db->order_by('experience desc');
          $employeedetails = $this->db->where('isdelete', TRUE)->get();
        }

        if($order == ""){
          $this->db->from('employee');
          $this->db->where('isdelete', TRUE);
          $this->db->limit($limit, $start);
          $employeedetails = $this->db->get();
        }
        return $employeedetails->result();
    }

    public function getAllEmployeeDetails($id){
      $this->db->select('*');
      $this->db->from('employee');
      $this->db->join('company', 'employee.companyid = company.cmp_id');
       $this->db->where('id', $id);
       $query = $this->db->get();
      return $query->result();
    }

    public function searchEmployee($data){
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->like('first_name', $data);
        $this->db->or_like('last_name', $data);
        $this->db->or_like('emailid', $data);
        $query = $this->db->where('isdelete', TRUE)->get();
        return $query->result();
    }

    public function isavailable($id){
      $this->db->select('*');
      $this->db->from('employee');
      $query = $this->db->where('id', $id)->get();
      return $query->result();
    }

    public function updateEmployee($employee, $id){
        $query = $this->db->where('id', $id);
        $this->db->update('employee', $employee);
        return $query;
    }

    public function deleteEmployee($id){
        $query = $this->db->query("update employee SET isdelete = false where id='".$id."'");
        return $query;
    }

    public function employeebyTechnology($id){
      $this->db->select('*');
      $this->db->from('employee');
      $this->db->join('employee_technology','employee_technology.employee_id = employee.id');
      $this->db->where("technology_id", $id);
      $query = $this->db->where('isdelete', TRUE)->get();
      return $query->result();
    }
}
?>