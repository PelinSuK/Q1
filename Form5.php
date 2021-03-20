<form action="Form5.php" method="post">
    What would you like to eat?<br>
    <input type="checkbox" name="a" value = "Cake"/>Cake<br />
	<input type="checkbox" name="a" value = "Muffin"/>Muffin<br />
	<input type="checkbox" name="a" value = "Cookie"/>Cookie<br />
    <input type="submit" value="Submit!" />
</form>
<br>
Your Choise:
<?php
echo $_POST['a'];
?>
