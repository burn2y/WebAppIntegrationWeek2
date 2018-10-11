<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Website Title</title>
</head>
<body>
<h1>Web Application Week 2 - Object Oriented PHP</h1>
<?php
include("Classes/newClass.php");        // Imports newClass class
include("Classes/User.php");            // Imports User class

// first instance
$newObject = new NewClass();            // New Instance of NewClass created
echo "<p> Value of property before it is set:" . $newObject->get_myProperty() . "</p>";
$newObject->set_myProperty("I have set the property");
echo "<p> Value of property after it is set :" . $newObject->get_myProperty() . "</p>";

// second instance
$secondObject = new NewClass();
$secondObject->set_myProperty("I have set the property of Object 2");
echo "<p> Value of property in Object 2 after it has been set: " . $secondObject->get_myProperty() . "</p>";

$user = new User("burn2y", "STADIUM10", "chrisburn2009@hotmail.co.uk");
?>

<h2>User Details</h2>

<?php
echo "<p> Username: " . $user->get_username() . "</p>";
echo "<p> Password: " . $user->get_password() . "</p>";
echo "<p> Email   : " . $user->get_email()    . "</p>";

$user->set_password("STADIUM10", "passwordChanged");

echo "<h2>User Details after password changed</h2>";
echo "<p>password change to 'newPassword'</p>";
echo "<p> Username: " . $user->get_username() . "</p>";
echo "<p> Password: " . $user->get_password() . "</p>";
echo "<p> Email   : " . $user->get_email()    . "</p>";

?>
</body>
</html>