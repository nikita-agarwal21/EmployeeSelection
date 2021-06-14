

<?php
  class Skill
  {  
     private $skill_code;
     private $lang;
    
   

     public function __construct($skill_code,$lang)
     {
       $this->skill_code= $skill_code;
       $this->lang = $lang;
     }

     public function getSkillCode()
     {
        return $this->skill_code;
     }

     public function setSkillCode($skill_code)
     {
        $this->skill_code = $skill_code;
     }

    public function getLang()
     {
        return $this->lang;
     }

     public function setLang($lang)
     {
        $this->lang = $lang;
     }

  
  } 
?>

 




 
