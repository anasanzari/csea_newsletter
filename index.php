<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>The Turing Machine</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
		<script src="js/modernizr.custom.79639.js"></script>
	</head>
	<body>
		<div id="container" class="containerl">
			<div class="menu-panel">
				<h3>Table of Contents</h3>
				<ul id="menu-toc" class="menu-toc">
					<li class="menu-toc-current"><a href="#item1">Home</a></li>
					<li><a href="#item2">Solving Problems</a></li>
					<li><a href="#item3">Internships and Beyond</a></li>
					<li><a href="#item4">CSEA Updates</a></li>
					<li><a href="#item5">Opportunities Galore</a></li>
					<li><a href="#item6">Upcoming Coding Contests</a></li>
					<li><a href="#item7">Gadget Gizmo</a></li>
					<li><a href="#item8">FOSSBytes</a></li>
					<li><a href="#item9">The Little Grey cells Attack</a></li>
					<li><a href="#item10">FUNtastic</a></li>
				</ul>
			</div>

			<div class="bb-custom-wrapper">
				<div id="bb-bookblock" class="bb-bookblock">
					<!-- Front Page -->
					<?php include_once 'items/item1.php'; ?>
					<!-- Solving Problems Article -->
					<?php include_once 'items/item2.php'; ?>
					<!-- Internships and Beyond Article -->
					<?php include_once 'items/item3.php'; ?>
					<!-- CSEA Updates -->
					<?php include_once 'items/item4.php'; ?>
					<!-- OP Galore -->
					<?php include_once 'items/item5.php'; ?>
					<!-- Coding Contests -->
					<?php include_once 'items/item6.php'; ?>
					<!-- Gadget Gizmo -->
					<?php include_once 'items/item7.php'; ?>
					<!-- FossBytes -->
					<?php include_once 'items/item8.php'; ?>
					<!-- Puzzles -->
					<?php include_once 'items/item9.php'; ?>
					<!-- Comics -->
					<?php include_once 'items/item10.php'; ?>
				</div>
				<div>
					<nav>
						<span id="bb-nav-prev">&larr;</span>
						<span id="bb-nav-next">&rarr;</span>
					</nav>
					<span id="tblcontents" class="menu-button">Table of Contents</span>
			 	</div>
			</div>

		</div><!-- /container -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.mousewheel.js"></script>
		<script src="js/jquery.jscrollpane.min.js"></script>
		<script src="js/jquerypp.custom.js"></script>
		<script src="js/jquery.bookblock.js"></script>
		<script src="js/page.js"></script>
		<script>
			$(function() {

				Page.init();

			});
		</script>
	</body>
</html>
