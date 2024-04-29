<?php
    $username = 'Jungwon';
    $password = 'YangYang';
?>

<?php
if (isset($_POST['newUser'])) {
    if (($_POST['username'] == $username) && ($_POST['Password'] == $password)) {
        $_SESSION['username'] = $username;
        $_SESSION['Active'] = true;
        header("location:index.php");
        exit;
    } else
        echo 'Incorrect Username or Password';
}
?>


