<?php $title="Contact";
$keywords="Computer science, Architecture, Java, Linux";
		$description="News and Discutions about Computer science" ?>
<?php include "header.php";
		$page_title="Contactez nous"; ?>


<?php include "leftIndex.php"?>

<h2>Send us an email</h2>
<?php
// display form if user has not clicked submit
if (!isset($_POST["submit"]))
{
	?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
	From: <input type="text" name="from"><br> Subject: <input type="text"
		name="subject"><br> Message:
	<textarea rows="10" cols="40" name="message"></textarea>
	<br> <input type="submit" name="submit" value="Submit Feedback">
</form>
<?php
}
else
{
	include './listener/mailPost.php';
}
?>

<?php include "bottom.php"?>