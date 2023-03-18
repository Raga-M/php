<form action="form.php" method="post">
    <label for="name">Name</label><br>
    <input type="text" name="name" required><br>
    <label for="mail">Mail</label><br>
    <input type="mail" id="mail" name="email" required><br>
    <label for="password" >Password</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="submit">

</form>
<?php
$n=$_POST['name'];
$m=$_POST['email'];
$p=$_POST['password'];
echo "Name:$n <br> MailId:$m <br> Password:$p <br>"

?>