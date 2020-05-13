<?php
session_start(); // ouvrir une session
$noNavBar = '';
$pagetitle = "Home";
if (isset($_SESSION['username'])) { // si il y'a une session ouvert
    header('location: dashbord.php'); // redirect vers la page dashbord
}

// $include "init.php"; // include init

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // si la methode de la formulaire est POST

    $username = $_POST['user'];
    $password = $_POST['pass'];
    $shapassword = sha1($password);

    $stmt = $db->prepare("SELECT userID, username, password FROM users WHERE username = ? AND password = ? AND groupeID = 1 LIMIT 1");
    $stmt->execute(array($username, $shapassword));
    $row = $stmt->fetch();
    $count = $stmt->rowCount();

    if ($count > 0) {
        $_SESSION['username'] = $username; // SESSION USERNAME
        $_SESSION['id'] = $row['userID']; // SESSION ID
        header('location: dashbord.php'); // REDIRECT VERS PAGE DASHBORD
        exit();
    } else {
        header('location: index.php');
    }
}

?>


<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <h4 class="text-center">Admin Login</h4>
    <input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off">
    <input class="form-control" type="text" name="pass" placeholder="Password" autocomplete="new-password">
    <input type="submit" class="btn btn-primary btn-block" value="login">
</form>


