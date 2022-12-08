
<?php session_start();

if (isset($_SESSION['username']))   // Checking whether the session is already there or not if 
// true then header redirect it to the home page directly 
{
    header("Location:index.php");
}


if (isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * from login WHERE username = '$username' AND password = '$password'";
    $user = mysqli_query($conn, $query);

    if (!$user) {
        die('query Failed' . mysqli_error($conn));
    }

    while ($row = mysqli_fetch_array($user)) {

        $user_id = $row['ID'];
        $user_name = $row['username'];
        $user_password = $row['password'];
    }
    if ($user_name == $username  &&  $user_password == $password) {

        $_SESSION['id'] = $user_id;       // Storing the value in session
        $_SESSION['username'] = $user_name;   // Storing the value in session
        //! Session data can be hijacked. Never store personal data such as password, security pin, credit card numbers other important data in $_SESSION
        header('location: index.php');
    } else {
        header('location: login.php');
    }
}
?>