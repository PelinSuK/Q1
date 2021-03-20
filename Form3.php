
<form action="Form3.php" method="post">
Cat or Dog ? <br>
<input type = "radio" name = "a" checked value = "Dog">Dog
<input type = "radio" name = "a" value = "Cat">Cat
 <input type="submit" value="SUBMIT" />
</form><br><br>

Your Choice: 
<?php
echo $_POST['a'];
?>

