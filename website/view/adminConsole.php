
<?php $title="admin";?>


<?php include "listener/checkConnect.php"?>

<?php include "header.php";
		$page_title="Welcome ".$_SESSION['USR']." !"; ?>

<?php include "leftIndex.php"?>

<div class="box">
	<h2>Admin console</h2>
	<img src="images/console.png" width="150" height="150" alt=""
		class="left" />
	<p>
		<?php $articleController= new ArticleControls();?>
	
	
	<ul>
		<li>link to new article form</li>
		<li>tab for new comment</li>
	</ul>
	<div class="box">
		<h3>Poster une nouvelle news:</h3>
		<form METHOD="POST">
			Categorie:
			<!--  <select id="categorie">  -->
			<input type=text list=categories name="category">
			<datalist id=categories>
				<?php 
				//echo $articleController->generateCombobox();
				foreach ($articleController->getCategories() as  $value) {
						echo('<option>'.$value[category_name]);
					}
					?>
			</datalist>
			<?php 
			// 			$articleController= new ArticleControls();
			// 			//echo $articleController->generateCombobox();
			// 			foreach ($articleController->getCategories() as  $value) {

// 						echo('<option>'.$value->category_id.'"'.$value->category_name.'/option');
// 					}
// 					?>
			<!--</select>-->
			<br /> Titre: <input type="text" name="title"></input>
			<br /> Votre commentaire:<br />
			<textarea dir="ltr" tabindex="1" name="editor"
				style="display: block; width: 540px; height: 250px" cols="60"
				rows="10"></textarea>
			<input class="button" type="submit" tabindex="1" accesskey="r"
				value="Envoie" name="envoieCom">
			<script>
   			 CKEDITOR.replace( 'editor' );
			</script>
		</form>

		<form name="inscription" method="POST"
			action="listener/AdminLogout.php">
			<input type="submit" value="Log out">
		</form>
	</div>

	</p>
</div>

<?php include "bottom.php"?>