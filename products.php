<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Explore our products | Clothesmania</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="canonical" href="https://My-first-webssite/products">
</head>
<body>
<!--TODO: Add folded nav and filters on mobiles-->
<?php include "partial/header.html"?>
<h1 id="catalogue">Product Catalogue</h1>
<aside class="filters">
	<form action="#" onsubmit="" id="filters">
		<label id="size" class="catname">Size:</label>
		<div class="category" role="group" aria-labelledby="size">

			<div class="container size">
				<input type="checkbox" class="cb" name="size_xxl" id="size_xxl" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="size_xxl" class="cat">XXL</label>
			</div>
			<div class="container size">
				<input type="checkbox" class="cb" name="size_xl" id="size_xl" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="size_xl" class="cat">XL</label>
			</div>
			<div class="container size">
				<input type="checkbox" class="cb" name="size_l" id="size_l" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="size_l" class="cat">L</label>
			</div>
			<div class="container size">
				<input type="checkbox" class="cb" name="size_m" id="size_m" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="size_m" class="cat">M</label>
			</div>
			<div class="container size">
				<input type="checkbox" class="cb" name="size_s" id="size_s" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="size_s" class="cat">S</label>
			</div>
			<div class="container size">
				<input type="checkbox" class="cb" name="size_xs" id="size_xs" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="size_xs" class="cat">XS</label>
			</div>
		</div>
		<hr class="filter-break"/>
		<label id="color" class="catname">Color:</label>
		<div class="category" role="group" aria-labelledby="color">
			<div class="container  color">
				<input type="checkbox" class="cb" name="color_red" id="color_red" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="color_red" class="cat">Red</label>
				<div class="color_icon red"></div>
			</div>
			<div class="container  color">
				<input type="checkbox" class="cb" name="color_orange" id="color_orange" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="color_orange" class="cat">Orange</label>
				<div class="color_icon orange"></div>
			</div>
			<div class="container  color">
				<input type="checkbox" class="cb" name="color_yellow" id="color_yellow" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="color_yellow" class="cat">Yellow</label>
				<div class="color_icon yellow"></div>
			</div>
			<div class="container  color">
				<input type="checkbox" class="cb" name="color_blue" id="color_blue" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="color_blue" class="cat">Blue</label>
				<div class="color_icon blue"></div>
			</div>
			<div class="container  color">
				<input type="checkbox" class="cb" name="color_green" id="color_green" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="color_green" class="cat">Green</label>
				<div class="color_icon green"></div>
			</div>
			<div class="container  color">
				<input type="checkbox" class="cb" name="color_gray" id="color_gray" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="color_gray" class="cat">Gray</label>
				<div class="color_icon gray"></div>
			</div>
		</div>
		<hr class="filter-break"/>
		<label id="type" class="catname">Type:</label>
		<div class="category" role="group" aria-labelledby="type">
			<div class="container type">
				<input type="checkbox" class="cb" name="type_hoodies" id="type_hoodies" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="type_hoodies" class="cat">Hoodies</label>
			</div>
			<div class="container type">
				<input type="checkbox" class="cb" name="type_tshirts" id="type_tshirts" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="type_tshirts" class="cat">T-shirts</label>
			</div>
			<div class="container type">
				<input type="checkbox" class="cb" name="type_trousers" id="type_trousers" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="type_trousers" class="cat">Trousers</label>
			</div>
			<div class="container type">
				<input type="checkbox" class="cb" name="type_shoes" id="type_shoes" checked tabindex="0" aria-checked="true">
				<span class="checkmark" tabindex="1" role="checkbox"></span>
				<label for="type_shoes" class="cat">Shoes</label>
			</div>
		</div>
	</form>
</aside>
<div class="flex-container product-search" id="results">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>
<script src="lib/filters.js"></script>
</body>
</html>