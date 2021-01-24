<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*
    Step1: Use a pre-built math function here and echo it - also called internal functions
	Step 2:  Use a pre-built string function here and echo it
	Step 3:  Use a pre-built Array function here and echo it
 */
    // built-in math function
    $number = 11.54376;
    $roundedNumber = round($number); // Math.round() is in JS!!!!

    echo "$roundedNumber";
    echo "<br>";

    // built-in string function
    $string = "This is a string in reverse";
    $reversedString = strrev($string);

    echo "$reversedString";
    echo "<br>";

    // built-in array function
    $beatles = ["John", "Paul", "George", "Ringo"];

    echo "The Beatles has " . sizeof($beatles) . " members.";

?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>