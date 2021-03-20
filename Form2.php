<form action="Form2.php" method="post">
 NAME: <br/>
 <input type="text" name="name" /><br/>
 SURNAME: <br/>
 <input type="text" name="surname" /><br/>
 <input type="submit" value="SUBMIT" />
</form><br><br>

Name:
<?php
echo $_POST['name'];
?><br>
Surname:
<?php
echo $_POST['surname'];
?>