

<?php
  class Employee
  {  
     private $empid;
     private $name;
     private $gender;
     private $qualification;
     private $experience;
     private $relocation;
     private $jointime;
   

     public function __construct($empid, $name, $gender,$qualification,$experience,$relocation,$jointime)
     {
       $this->empid= $empid;
       $this->name = $name;
       $this->gender = $gender;
       $this->qualification = $qualification;
       $this->experience = $experience; 
       $this->relocation = $relocation; 
       $this->jointime = $jointime;
      
     }

     public function getEmpid()
     {
        return $this->empid;
     }

     public function setEmpid($empid)
     {
        $this->empid = $empid;
     }

     public function getName()
     {
        return $this->name;
     }

     public function setName($name)
     {
        $this->name = $name;
     }

     public function getGender()
     {
        return $this->gender;
     }

     public function setGender($gender)
     {
        $this->gender = $gender;
     }

     public function getQualification()
     {
        return $this->qualification;
     }

     public function setQualification($qualification)
     {
        $this->qualification= $qualification;
     }


     public function getExperience()
     {
        return $this->experience;
     }

     public function setExperience($experience)
     {
        $this->experience = $experience;
     }

     public function getRelocation()
     {
        return $this->relocation;
     }

     public function setRelocation($relocation)
     {
        $this->relocation = $relocation;
     }
     
     public function getJoinTime()
     {
        return $this->jointime;
     }

     public function setJoinTime($jointime)
     {
        $this->jointime= $jointime;
     }
  } 
?>

 




 
