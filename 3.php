<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a for loop  that displays 10 numbers


	Step 3 : Make a switch Statement that test against one condition with 5 cases

 */
    $option1 = 11;
    $option2 = 20;
    $option3 = 34;

    $option4 = "Bonjour!";


    if ($option2 % 2 === 1) { // this is false
        echo "this is a test!";
    } elseif ($option1 % 2 === 1) { //second condition is true and is displayed
        echo "I love PHP!";
    } else { // goes here in case both are false
        echo "Whatever!";
    }

        //switch statement


	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>