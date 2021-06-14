<?php

require_once 'EmpSkills.php';
require_once 'EmpSkillsDao.php';

require_once 'Employee.php';
require_once 'EmployeeNotFoundException.php';
require_once 'DatabaseUtilities.php';



class EmpSkillsDaoImpl implements EmpSkillsDao
{
    public function searchEmpId($skillCodes,$exp,$join)
    {
 $flag=false;
 $sql='select * from employee where empid in(select empid from empskills where  ';
 foreach($skillCodes as $skillCode)
 {
    if($flag == false)
    {
        $sql=$sql."skill_code = "."'".$skillCode."'";
        $flag=true;
    }
    else 
    $sql=$sql." or skill_code = "."'".$skillCode."'";
 }
$sql=$sql." group by empid having count(*)= ".count($skillCodes)." and experience >= ".$exp." and jointime >= ".$join.")";


 $employees=array();
 
 $connection=DatabaseUtilities::getConnection('companyy');

 $resultSet=$connection->query($sql);

 if (!empty($resultSet) && $resultSet->num_rows >0)
{
    
        while($row=$resultSet->fetch_assoc())
        {
           

         $employee=new Employee($row['empid'], $row['name'], $row['gender'],$row['qualification'],$row['experience'],$row['relocation'],$row['jointime']);
         $employees[]=$employee;    
        }


 }
else
 throw new EmployeeNotFoundException();
$resultSet->close();
$connection->close();


    return $employees;
}

}






?>