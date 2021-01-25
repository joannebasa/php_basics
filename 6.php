
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
<!--    Step1: Make a form that submits one value to POST super global-->
    <form action="6.php" method="post">
        Name:
        <input type="text" name="name" value="<?php $name ="";
        echo $name;?>"><br>

        E-mail: <input type="text" name="email" value="<?php $email ="";
        echo $email;?>"><br>

        Website: <input type="text" name="website" value="<?php $website ="";
        echo $website;?>"><br>

        Comment: <textarea name="comment" rows="5" cols="40"><?php $comment ="";
        echo $comment;?></textarea><br>

        Gender:
        <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="female") echo "checked";?>
               value="female">Female
        <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="male") echo "checked";?>
               value="male">Male
        <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="other") echo "checked";?>
               value="other">Other
    </form>



</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>