<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Explore our products | Clothesmania</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="canonical" href="https://My-first-webssite/products">
</head>
<body>
<?php include "partial/header.html"?>
<h1 id="catalogue">Product Catalogue</h1>
<aside class="filters">
	<form action="#" onsubmit="">
		<div role="group" aria-labelledby="size">
			<label id="size" class="catname">Size:</label>
			<div class="container" id="size">
				<input type="checkbox" class="cb" name="size_xxl" id="size_xxl" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="size_xxl" class="size">XXL</label>
			</div>
			<div class="container">
				<input type="checkbox" class="cb" name="size_xl" id="size_xl" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="size_xl" class="size">XL</label>
			</div>
			<div class="container">
				<input type="checkbox" class="cb" name="size_l" id="size_l" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="size_l" class="size">L</label>
			</div>
			<div class="container">
				<input type="checkbox" class="cb" name="size_m" id="size_m" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="size_m" class="size">M</label>
			</div>
			<div class="container">
				<input type="checkbox" class="cb" name="size_s" id="size_s" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="size_s" class="size">S</label>
			</div>
			<div class="container">
				<input type="checkbox" class="cb" name="size_xs" id="size_xs" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="size_xs" class="size">XS</label>
			</div>
		</div>

	</form>
</aside>
<div class="flex-container product-search">
	<a href="./catalogue/jeans.html" class="item-card">
		<img src="./images/jeans.jpg">
		<h2>jeans title</h2>
		<p>jeans description lorem ipsum dolor sit amet</p>
	</a>
	<a href="" class="item-card">
		<img src="./images/jeans.jpg">
		<h2>jeans title</h2>
		<p>jeans description lorem ipsum dolor sit amet</p>
	</a>
	<a href="" class="item-card">
		<img src="./images/jeans.jpg">
		<h2>jeans title</h2>
		<p>jeans description lorem ipsum dolor sit amet</p>
	</a>
	<a href="" class="item-card">
		<img src="./images/jeans.jpg">
		<h2>jeans title</h2>
		<p>jeans description lorem ipsum dolor sit amet</p>
	</a>
	<a href="" class="item-card">
		<img src="./images/jeans.jpg">
		<h2>jeans title</h2>
		<p>jeans description lorem ipsum dolor sit amet</p>
	</a>
	<a href="" class="item-card">
		<img src="./images/jeans.jpg">
		<h2>jeans title</h2>
		<p>jeans description lorem ipsum dolor sit amet</p>
	</a>
	<a href="" class="item-card">
		<img src="./images/jeans.jpg">
		<h2>jeans title</h2>
		<p>jeans description lorem ipsum dolor sit amet</p>
	</a>
	<a href="" class="item-card">
		<img src="./images/jeans.jpg">
		<h2>jeans title</h2>
		<p>jeans description lorem ipsum dolor sit amet</p>
	</a>
</div>
<?php include "partial/footer.html"?>
<script src="js/filters.js"></script>
</body>
</html>