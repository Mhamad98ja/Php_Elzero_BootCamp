
<?php
if($_SERVER["REQUEST_METHOD"] === "POST"): ?>
<?php $username=@$_POST['user'];
echo "The Request Method Is Post And Username Is $username";
$admins = ["Osama", "Ahmed", "Sayed"];
foreach($admins as $admin){
    if($admin =="$username"){
        echo "This Username $username Is Admin";
    }
}
?>
    <form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
    </form>

    <?php endif ?>
