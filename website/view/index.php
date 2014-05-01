
<?php $title="index";
$keywords="Computer science, Architecture, Java, Linux";
		$description="Website of computer sciences news and articles" ?>
<?php include "header.php";
		$page_title="C là qu'on parle aussi bien des Pythons que des Perl"; ?>
<?php include "control/ArticleControls.php";?>
<?php $object=new ArticleControls();
			$navigation=new navigationControls();?>


<div id="banner">
	<div class="captions">
		<h2>
			<?php echo $page_title?>
		</h2>
	</div>
	<img src="images/banner.jpg" alt="" />
</div>
<div id="main">


	<div class="box">
		
			<?php 
				$list=$object->getFiveLast();
				foreach($list as $article){ 
					echo "<div class='index'>";
					echo "<h3>".$article->News_title." - ".$object->dateReducted($article->News_date)."</h3>";
					echo "<h4> Author : ".$article->News_author."</h4>";
					echo "<p>".$article->News_sumup."</p>";
					echo "</div>";
					}
				?>





			<?php include "bottom.php"?>