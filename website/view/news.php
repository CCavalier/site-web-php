
<?php $title="Articles";
		$keywords="Computer science, Architecture, Java, Linux";
		$description="News and Discutions about Computer science" ?>
<?php include "header.php";
		$page_title="C là qu'on parle aussi bien des Pythons que des Perl"; ?>

		
<?php include "leftIndex.php"?>
<?php include "../control/tryconnect.php"?>
<?php 
	$id = $_GET["art_id"];
	$object = new tryconnect();
	$article=$object->getArticleById($id);
?>
					<div class="box">
						<h2>
							<?php echo $article->News_title; ?>
						</h2>
						<img src="images/News.jpg" width="150" height="150" alt="" class="left" />
						<p>
							<?php echo $article->News_content; ?>
						</p>
					</div>

<?php include "bottom.php"?>