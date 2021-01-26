<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Hello, " . $username . ". ";
    echo "Your password is saved.";
}
?>


<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>

		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
<!-- Step1: Make a form that submits one value to POST super global -->
    <form action="6.php" method="post">
        <input type="text" name="username" placeholder="Enter Username">
        <input type="password" name="password" placeholder="Enter Password">
    <br>
        <input type="submit" name="submit">
    </form>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>