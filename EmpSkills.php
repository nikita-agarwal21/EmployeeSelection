

<?php
  class EmpSkills
  {  
     private $empid;
     private $skill_code;
    
   

     public function __construct($empid,$skill_code)
     {
       $this->empid= $empid;
       $this->skill_code = $skill_code;
      
     }

     public function getEmpid()
     {
        return $this->empid;
     }

     public function setEmpid($empid)
     {
        $this->empid = $empid;
     }

     public function getSkillCode()
     {
        return $this->skill_code;
     }

     public function setSkillCode($skill_code)
     {
        $this->skill_code= $skill_code;
     }

    
  } 
?>

 




 
