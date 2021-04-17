<?php
class AuthModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
    public function ViewPrimaryId($no_id) {
		$sql 	  = $this->db->query("SELECT no_value FROM employees.numbersetup WHERE no_id='$no_id'");
		$no_value = $sql->row()->no_value;
		return $no_value;
	}
    public function GetPrimaryId($no_id) {
		$sql 	  = $this->db->query("SELECT no_value FROM employees.numbersetup WHERE no_id='$no_id' FOR UPDATE");
		$no_value = $sql->row()->no_value;
		return $no_value;
	}
    public function UpdatePrimaryId($no_value, $no_id, $is_incremented=false) {
		$new_string = $is_incremented ?  $no_value : $this->AutoIncrement($no_value);
		if(!empty($new_string))
		{
			$this->db->query("UPDATE employees.numbersetup SET no_value='$new_string' WHERE no_id='$no_id'");
		}
	}
	private function AutoIncrement($no_value) {
		$sLen=strlen($no_value);
		$string = preg_replace("([^A-Z,^a-z])", "",$no_value);
		$number=preg_replace("([^0-9])", "",$no_value);
		$number=$number+1;
		$new_string=$string.$number;
		$sLenNew=strlen($new_string);
		if ($sLenNew < $sLen)
		{
			$Zero= str_repeat('0',($sLen-$sLenNew));
			$new_string=$string.$Zero.$number;
		}
		return $new_string;
	}
    //Global method to check duplicate exists
    public function IsDuplicate($tbl_name, $tbl_condition = FALSE) {
        return $this->db->query("SELECT EXISTS(SELECT 1 FROM ".$tbl_name." WHERE ".$tbl_condition." LIMIT 1) AS exist")->row()->exist;
    }

    public function CreateEmployeesForm()
	{
		$data = array();
		$empl_name = strtoupper($this->input->post('emp_name'));
		$empl_dpt = $this->input->post('dpt');
		$empl_id = $this->input->post('emp_code');
		$empl_age = $this->input->post('age');
		$empl_exp = $this->input->post('exp');

		if(is_numeric($empl_age) == true && is_numeric($empl_exp) == true){
            $condition = " employee_name = '".$empl_name."' AND employee_code != '".$empl_id."' AND employee_dpt = '".$empl_dpt."'";
			if($this->IsDuplicate('employees.employee_details',$condition))
            {
                $this->Message->status=400;
                $this->Message->text="Already Exists!";
            }else{
                $no_id = 'EMPL_CODE';
                $empl_code = $this->GetPrimaryId($no_id);
                $data= array("employee_code"=>$empl_code,
                            "employee_name"=>$empl_name,
                            "employee_age"=>$empl_age,
                            "employee_dpt"=>$empl_dpt,
                            "employee_experience"=>$empl_exp);
                $this->db->trans_begin();
                $this->db->insert('employees.employee_details',$data);
                $this->UpdatePrimaryId($empl_code, $no_id);
                if($this->db->trans_status() === TRUE)
                {
                    $this->db->trans_commit();
                    $this->Message->status=200;
                    $this->Message->text= "'added Succesfully'";
                }
                else
                {
                    $this->db->trans_rollback();
                    $this->Message->status=400;
                    $this->Message->text=$this->text('All fields are mandatory!');
                }

            }
        }else{
            $this->db->trans_rollback();
            $this->Message->status=400;
            $this->Message->text=$this->text('Please select a number in experienced and age field! ');
        }
        return $this->Message;

        }
    public function EmployeeRecord(){
        $qry = "SELECT
                    employee_code,
                    employee_name,
                    employee_age,
                    employee_dpt,
                    employee_experience
                FROM
                    employees.employee_details";
       return $this->db->query($qry)->result();
    }
}