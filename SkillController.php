

<?php


require_once 'SkillDaoImpl.php';

require_once 'EmpSkillsDaoImpl.php';

require_once 'EmployeeNotFoundException.php';



$results = array();
$exp="";
$message='';
$join="";

if ( isset($_POST['exp']))
try{
     $exp= $_POST['exp'];
     if(isset($_POST['join']))
     $join=$_POST['join'];
   
     if ( isset($_POST['skills']))
     {
          $skillCodes= $_POST['skills'];

          $skillDao = new SkillDaoImpl();
   
        $langs=$skillDao->searchSkill($skillCodes);
       
        $_POST['lang']=$langs;
        
       $empskillsDao=new EmpSkillsDaoImpl();
             $results=$empskillsDao->searchEmpId($skillCodes,$exp,$join);
    } 
   }
   catch(EmployeeNotFoundException $enfe) 
{
$message="no such employees with these skills found";
}

   $_POST['message']=$message;

$_POST['results'] = $results;

  
include 'SkillMVC.php';
?>










   

    
   
   
