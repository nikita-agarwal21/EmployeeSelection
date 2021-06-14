
<!DOCTYPE html>

<?php
    require_once 'SkillHelper.php';    
    $skillHelper = new SkillHelper();

    $results = false;
    $message=false;
    if ( isset($_POST['results']))
         $results = $_POST['results'];
    if ( isset($_POST['message']))
         $message = $_POST['message'];

?>

<html>
  <head>
    
  </head>

  <body >
    <br>
    <br>
    <form name="skillForm" method="post" action="SkillController.php" >
       Skills : 
       <input type="checkbox" name="skills[]" value="10" <?php echo $skillHelper->isSkillChecked('10'); ?> />java full stack
       <input type="checkbox" name="skills[]" value="11" <?php echo $skillHelper->isSkillChecked('11'); ?> />mern
       <input type="checkbox" name="skills[]" value="12" <?php echo $skillHelper->isSkillChecked('12'); ?> />mean
       <input type="checkbox" name="skills[]" value="13" <?php echo $skillHelper->isSkillChecked('13'); ?> />andriod
       <input type="checkbox" name="skills[]" value="14" <?php echo $skillHelper->isSkillChecked('14'); ?> />ios
       <br>
       <br>
       experience:
      <input type='text' name='exp' size="10" value='<?php echo $skillHelper->isExp() ;?>'/>years 
      <br>
       <br>
       jointime:
     <input type='text' name='join' size="10" value='<?php echo $skillHelper->isJoin() ;?>'/>days


<br><br>
       <input type="submit" value="Submit" />
       <br>
       <br>
       <?php
    
          if($results)
 
          {

             
?>
  <br><br>
        <table border='1'>
         <tr><th>empid</th><th>name</th><th>gender</th><th>qualification</th><th>relocation</th><th>experience</th><th>join time</th></tr>
<?php
          foreach($results as $result)
          {

 
?>

        <tr><td><?php echo $result->getEmpid(); ?></td>
        <td><?php echo $result->getName();?></td>
        <td><?php echo $result->getGender();?></td>
        <td><?php echo $result->getQualification();?></td>
        <td><?php echo $result->getRelocation();?></td>
        <td><?php echo $result->getExperience();?></td>

        <td><?php echo $result->getJoinTime();?></td>
  
<?php
          }


          }
        else 
         echo $message;
   ?>  
   
      </tr></table>             
    </form>
   
  </body>

</html>




 