<?php
$dns = 'mysql:host=localhost;dbname=customer';
$username = 'root';
$password = '';
$connect = new PDO($dns,$username,$password);
?>
<form method="POST">
    <input type="text" name="name">
    <input type="text" name="email">
    <input type="text" name="address">
    <input type="submit" value="Insert" name="sub">
</form>
<?php
    $connect->query("INSERT INTO list_customer values ('','".$_POST['name']."', '".$_POST['email']."', '".$_POST['address']."')");
?>
