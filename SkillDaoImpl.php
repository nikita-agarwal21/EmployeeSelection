<?php

require_once 'Skill.php';
require_once 'SkillDao.php';
require_once 'DatabaseUtilities.php';



class SkillDaoImpl implements SkillDao
{
 

public function searchSkill($skillCodes)
    {
//    

$flag=false;
$sql='select * from skill where ';
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




$langs=array();
$skillCodes=array();
$connection=DatabaseUtilities::getConnection('companyy');


$resultSet=$connection->query($sql);

if ($resultSet->num_rows > 0)
{
    while($row=$resultSet->fetch_assoc())
    {
        $skillCode=new Skill($row['skill_code'],$row['lang']);

        $skillCodes[]=$skillCode->getLang();

    }
}


$resultSet->close();
$connection->close();
return $skillCodes;

    }
   
}

    ?>