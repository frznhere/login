 <!-- <?php
 
session_start();

if(!isset($_SESSION['savedin']) || $_SESSION['savedin'] !==true)
{
    header("location: forgot.php");
}

?>
<?php echo "First Task". $_SESSION['first']?>
<?php echo "Second Task". $_SESSION['second']?>
<?php echo "Third Task". $_SESSION['third']?>
<?php echo "Fourth Task". $_SESSION['fourth']?>  -->
<?php
include_once "welcome.php";
?>
<?php echo "First Task". $_SESSION['first']?>
<?php echo "Second Task". $_SESSION['second']?>
<?php echo "Third Task". $_SESSION['third']?>
<?php echo "Fourth Task". $_SESSION['fourth']?>  