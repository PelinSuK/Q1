<form action="Form1.php" method="get">
 NAME: <br/>
 <input type="text" name="name" /><br/>
 SURNAME: <br/>
 <input type="text" name="surname" /><br/>
 <input type="submit" value="SUBMIT" />
</form><br><br>

<?php
echo $_GET['name'];
?><br>
<?php
echo $_GET['surname'];
?>