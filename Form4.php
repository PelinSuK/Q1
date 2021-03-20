
<form action="Form4.php" method="post">
    Name:  <input type="text" name="name" /><br />
    Surname: <input type="text" name="surname" /><br />
    Your Dog: <br />
    <select multiple name="dog">
        <option value="golden">Golden Retriever</option>
        <option value="buldog">BulDog</option>
        <option value="rott">Rottweiler</option>
    </select><br />
    <input type="submit" value="Submit!" />
</form>

Name:
<?php
echo $_POST['name'];
?><br>
Surname:
<?php
echo $_POST['surname'];
?>
<br>
Your Dog:
<?php
echo $_POST['dog'];
?>