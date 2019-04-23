<!DOCTYPE html>
<html>
<head>
	<title>Beautiful Free Images & Pictures | Unsplash</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/license.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/styleAccount.css">
	<link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/favicon-black.ico">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12 fixed-top" style="display: -webkit-inline-box; padding-top: 10px; background-color: white;">
                    <a href="<?php echo base_url();?>Welcome"><img class="logo-header" src="<?php echo base_url(); ?>/assets/img/logo-black.svg" alt="logo" style="padding-top:5px;"/></a>
                <div class="col-lg-8">
					<!-- <i class="far fa-search"></i> -->
				<form action="search" method="POST">	
                    <input type="text" placeholder="Search free high-resolution photos" class="form-control" name="search"
                    style=" padding-left:30px; 
                            margin: 0; 
                            padding-top: 10px;
                            padding-bottom: 10px; 
                            padding-right: 0; 
                            border-radius:25px;
                            font-size: 14px;
                            height: 40px;
                            width: 1270px;">
				</div>
				</form>
                <div class="col-sm-2" style="margin:0; padding:0; max-width: 350px;">
                    <ul style="padding-left:15px; display: inline-flex;" class="menu">
                        <li><a href="<?php echo base_url();?>Welcome">Home</a></li>
                        <li><a href="<?php base_url(); ?>collection">Collections</a></li>
                        <li><a href="<?php base_url(); ?>explore">Explore</a></li>
                    </ul>
                    <button class="fas fa-ellipsis-h btn" type="button" data-toggle="dropdown" style="margin-left:10px;"></button>
                    <ul class="dropdown-menu" style="background-color: black;">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Wallpapers</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Made with Unsplash</a></li>
                        <li><a href="#">API/Developers</a></li>
                        <li><a href="#">Hiring</a></li>
                        <li><a href="<?php base_url(); ?>licence">Licence</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
                <div class="col-lg-2" style="display: inline;">
                    <button style="margin-left:10px;" class="submitPhoto btn btn-light" type="submit" data-toggle="modal" data-target="#exampleModalCenter">Submit a Photo</button>
                    <button style="margin-left:10px;" class="fas fa-bell btn" style="color: #ADADAD;"></button>
                    <?php foreach($userPhoto as $photo) { ?>
                        <a href="<?php base_url(); ?>account"><img src="<?php echo base_url('assets/photoProfile/') . $photo['photo']; ?>" width="40px" style="border-radius:25px;"></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<!-- end navbar -->
<div class="app" style="margin-top: 100px;">
	<div class="app2">
		<div class="app3">
			<!-- bagian kiri -->
			<div class="kiri1">
				<ul class="listkiri">
					<h3 class="isikiri1"> Unsplash</h3>
					<li class="isikiri2">
						<a href="" > License</a>
					</li>
					<li class="isikiri2">
						<a href="" > Manifesto</a>
					</li>
					<li class="isikiri2">
						<a href="" > Privacy Policy</a>
					</li>
					<li class="isikiri2">
						<a href="" > Terms and Condition</a>
					</li>
					<li class="isikiri2">
						<a href="" > Api Terms</a>
					</li>
				</ul>
			</div>
			<!-- end kiri -->
			<!-- bagian isi -->
			<div class="isi1">
				<h1 class="isikiri1">License</h1>
				<div>
					<span>
						<p>
							All photos published on Unsplash can be used for free. You can use them for commercial and noncommercial purposes. You do not need to ask permission from or provide credit to the photographer or Unsplash, although it is appreciated when possible.
						</p>
						<p>
							More precisely, Unsplash grants you an irrevocable, nonexclusive, worldwide copyright license to download, copy, modify, distribute, perform, and use photos from Unsplash for free, including for commercial purposes, without permission from or attributing the photographer or Unsplash. This license does not include the right to compile photos from Unsplash to replicate a similar or competing service.
						</p>
						<p>Questions? <a href="#">Read our FAQ</a>.</p>
					</span>
				</div>
				<!-- end isi -->
				<!-- kotak -->
				<div class="boxbawah">
					<h2>Tip: How to give credit 🎁</h2>
					<p>Even though credit isn't required, Unsplash photographers appreciate a credit as it provides exposure to their work and encourages them to continue sharing. A credit can be as simple as adding their name with a link to their profile or photo.</p>
				</div>
				<!-- end kotak -->
			</div>
		</div>
	</div>
	<footer class="kaki">
		<div class="kaki2">
			<div class="kakikiri">
				<h6 class="isikakikiri1">Unsplash</h6>
				<p class="isikakikiri2">
					Beautiful, free images gifted by the world’s most generous community of photographers. Better than any 	royalty free or stock photos.
				</p>
				<ul class="listkakikiri">
					<li class="isilistkakikiri"><a class="linkkaki" href="/about">About</a></li>
					<li class="isilistkakikiri"><a class="linkkaki" href="/about">Blog</a></li>
					<li class="isilistkakikiri"><a class="linkkaki" href="/about">Hiring</a></li>
					<li class="isilistkakikiri"><a class="linkkaki" href="/about">Developers/API</a></li>
					<li class="isilistkakikiri"><a class="linkkaki" href="/about">Press</a></li>
					<li class="isilistkakikiri"><a class="linkkaki" href="/about">Help Center</a></li>
				</ul>
			</div>
			<div class="blankkaki"></div>

			<div class="isikakikanan1">

				<div class="isikakikanan2">
					<h6 class="isikakikiri1">Product</h6>
					<ul class="listkakikiri">
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Explore</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Collection</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Unsplash for iOS</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Unsplash Wallpapers for macOS</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Unsplash Instant for Chrome</a></li>
					</ul>
				</div>
				<div class="isikakikanan2">
					<h6 class="isikakikiri1">Popular</h6>
					<ul class="listkakikiri">
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Public domain images</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Free stock photos</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Creative Commons images</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">PNG images</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Free images</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Beach pictures</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Love pictures</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Backgrounds</a></li>
					</ul>
				</div>

				<div class="isikakikanan2">
					<h6 class="isikakikiri1">Wallpapers</h6>
					<ul class="listkakikiri">
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Browse Wallpapers</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Cool Wallpapers</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Cute Wallpapers</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">iPhone Wallpaper</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">HD Wallpapers</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Christmas Wallpaper</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Tumblr Wallpaper</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Black Wallpapers</a></li>
						<li class="isilistkakikiri"><a class="linkkaki" href="/about">Galaxy Wallpapers</a></li>
					</ul>
				</div>
			</div>

		</div>

		<div class="bagianbawah">
			<div class="kiribawah">
				<ul class="listkiribawah">
					<li class="isilistkiribawah">
						<a class="linkkaki" href="#">Privacy Policy</a>
					</li>
					<li class="isilistkiribawah">
						<a class="linkkaki" href="#">Terms</a>
					</li>
					<li class="isilistkiribawah">
						<a class="linkkaki" href="#">Security</a>
					</li>
				</ul>
			</div>
			<div class="kananbawah">
				<div class="isikananbawah">
					<ul class="listkananbawah">
						
					</ul>
				</div>
			</div>
		</div>
	</footer>
</div>