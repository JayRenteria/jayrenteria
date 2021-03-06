<?php
require_once("php/lib/header.php");
?>

<div class="container">

			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images/fullband1.jpg" alt="band photo 1">
					<div class="carousel-caption">
						Warehouse 508
					</div>
				</div>
				<div class="item">
					<img src="images/fullband2.jpg" alt="band photo 2">
					<div class="carousel-caption">
						Duke City Sound
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
				</div>
	</div>

	<div class="container" id="main-page">
		<div class="container">
			<h1 class="h1">Jay Renteria</h1>
		</div>

			<!--Content Below-->
		<div class="container">
			<div class="row2">
				<div id="bottom-left-content" class="col-md-5">
					<p>Developer by day, musician by night.</p>
					<p>My name is Jay, I play in a band called Rogues Beware and make more music on my own.
					<br>
					I also like to build things. I have a few web development projects going on and am always looking to take on more.</p>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-6" id="music-div">
					<a id="music-button" class="btn btn-lg" href="music/index.php">
						<i class="fa fa-headphones fa-2x pull-left"></i> Check Out My Music</a>

				</div>
			</div>
		</div>
	</div>

<?php
require_once("php/lib/footer.php");
?>