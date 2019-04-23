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
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/styleAccount.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/stylehome.css">
	<link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/favicon-black.ico">
</head>
<body>
<!-- -------------------------------------------------------------BAG 1--------------------------------------------------------------------------- -->
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
                        <li><a href="#">Licence</a></li>
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
    <!-- -------BAWAH CSS-------- -->
	<div class="_1EkxQ _8-qoZ fixed-top" style="margin-top:55px; box-shadow: none; background-color: white;">
		<div>
			<ul class="_2ZZrD">
				<li class="_3ABqA">
					<a class="SI2Kz _1CBrG xLon9 _2OOtd" aria-current="page" href="/">Editorial</a>
				</li>
				<li class="_3ABqA">
					<a class="SI2Kz _1CBrG xLon9" href="#">Following</a>
				</li>
			</ul>
		</div>
		<div class="_3Zuj5"></div>
		<div class="_2Ru_P" style="height:55px">
			<div class="_3b4NQ">
				<div>
					<ul class="_2ZZrD">
						<li class="_3ABqA _3exYo">
							<a class="SI2Kz _1CBrG xLon9" href="#">Wallpapers</a>
						</li>
						<li class="_3ABqA _3exYo">
							<a class="SI2Kz _1CBrG xLon9" href="#">Textures &amp; Patterns</a>
						</li>
						<li class="_3ABqA _3exYo">
							<a class="SI2Kz _1CBrG xLon9" href="#">Nature</a>
						</li>
						<li class="_3ABqA _3exYo">
							<a class="SI2Kz _1CBrG xLon9" href="#">Current Events</a>
						</li>
						<li class="_3ABqA _3exYo">
							<a class="SI2Kz _1CBrG xLon9" href="#">Architecture</a>
						</li>
						<li class="_3ABqA _3exYo">
							<a class="SI2Kz _1CBrG xLon9" href="#">Business &amp; Work</a>
						</li>
						<li class="_3ABqA _3exYo">
							<a class="SI2Kz _1CBrG xLon9" href="#">Animals</a>
						</li>
						<li class="_3ABqA _3exYo">
							<a class="SI2Kz _1CBrG xLon9" href="#">Travel</a>
						</li>
						<li class="_3ABqA _3exYo">
							<a class="SI2Kz _1CBrG xLon9" href="#">Fashion</a>
						</li>
						<li class="_3ABqA _3exYo">
							<a class="SI2Kz _1CBrG xLon9" href="#">Food &amp; Drink</a>
						</li>
						<li class="_3ABqA _3exYo">
							<a class="SI2Kz _1CBrG xLon9" href="#">Spirituality</a>
						</li>
						<li class="_3ABqA _3exYo">
							<a class="SI2Kz _1CBrG xLon9" href="#">Experimental</a>
						</li>
						<li class="_3ABqA _3exYo">
							<a class="SI2Kz _1CBrG xLon9" href="#">People</a>
						</li>
						<li class="_3ABqA _3exYo">
							<a class="SI2Kz _1CBrG xLon9" href="#">Health</a>
						</li>
						<li class="_3ABqA _3exYo">
							<a class="SI2Kz _1CBrG xLon9" href="#">Arts &amp; Culture</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="TS3xq"></div>
<!-- ---------------------------------------------------------------------BAG 2--------------------------------------------------------------------------------------- -->
	<div class="_114h2">
		<div class="_2QgdQ">
			<div class="_1wT8D">
				<picture class="_2XHNB">
					
					</picture>
				</div>
				<div class="_2IASm">
					<div class="_3QkSI _2sCnE PrOBO _1CR66">
						<div class="_24vCv _1pgnK _2HBSG">
							<span class="VkP27 _2RmO0 _2svCU">Unsplash</span>
							<div>
								<h1 class="_9IFIy _27Bp2 _1iWCF">Beautiful, free photos.</h1>
								<p class="_3fk_U _27Bp2 _1iWCF">Gifted by the world’s most generous community of photographers.</p>
								<div class="wqRmt">
									<div class="_3k9pE">
										<div class="_1w02r">
											<form class="_2FayZ mV0BM" data-test="homepage-search-form-form">
												<button title="Search Unsplash" class="_2VoZY DWLeW" data-test="homepage-header-search-form-button">
													<svg class="_2-tlh _1azRR _18QGm" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
														<path d="M31 28.64l-7.57-7.57a12.53 12.53 0 1 0-2.36 2.36l7.57 7.57zm-17.5-6a9.17 9.17 0 1 1 6.5-2.64 9.11 9.11 0 0 1-6.5 2.67z"></path>
													</svg>
													<span class="_3cUBZ _2iX7Z">Search</span>
												</button>
												<div class="_2ZbDJ">
													<input type="search" name="search" placeholder="Search free high-resolution photos" required="" class="zbIrd _3FYu1" data-test="homepage-header-search-form-input" id="SEARCH_FORM_INPUT_homepage-header-small" title="Search Unsplash" autocapitalize="none" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" autocomplete="off" value="">
												</div>
											</form>
										</div>
										<div class="_3PSbf">
											<form class="_2FayZ mV0BM" data-test="homepage-search-form-form">
												<button title="Search Unsplash" class="_2VoZY DWLeW" data-test="homepage-header-search-form-button">
													<svg class="_2-tlh _1azRR _18QGm" version="1.1" viewBox="0 0 32 32" width="32" height="32" aria-hidden="false">
														<path d="M31 28.64l-7.57-7.57a12.53 12.53 0 1 0-2.36 2.36l7.57 7.57zm-17.5-6a9.17 9.17 0 1 1 6.5-2.64 9.11 9.11 0 0 1-6.5 2.67z"></path>
													</svg>
													<span class="_3cUBZ _2iX7Z">Search</span>
												</button>
												<div class="_2ZbDJ">
													<input type="search" name="searchKeyword" placeholder="Search free high-resolution photos" required="" class="zbIrd _3FYu1" data-test="homepage-header-search-form-input" id="SEARCH_FORM_INPUT_homepage-header-big" title="Search Unsplash" autocapitalize="none" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" autocomplete="off" value="">
												</div>
											</form>
										</div>
									</div>
									<div class="_3k9pE">
										<div>
											<span class="SLG9B">Trending searches:</span>
											<ul class="_39Gnz _2Pvqc _1aofb">
												<li class="_3boor">
													<a class="LhP3s" href="/search/photos/flower">Flower</a>
												</li>
												<li class="_3boor">
													<a class="LhP3s" href="/search/photos/wallpaper">Wallpaper</a>
												</li>
												<li class="_3boor">
													<a class="LhP3s" href="/search/photos/background">Background</a>
												</li>
												<li class="_3boor">
													<a class="LhP3s" href="/search/photos/sad">Sad</a>
												</li>
												<li class="_3boor">
													<a class="LhP3s" href="/search/photos/love">Love</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="_2Oa0G _1ReuZ">
						<div class="BcmU7">
							<div class="jGus2 -wAV0 _36V_V">
								<a title="View the photo by eberhard grossgasteiger" class="_2Mc8_ ICezk" href="/photos/YL-wHZmvcLs">Photo of the Day</a>
								&nbsp;by&nbsp;
								<div class="_2tX2R">
									<a class="ICezk" href=""></a>
								</div>
							</div>
							<div class="_2J1eG -wAV0 xZmk-">Read more about the&nbsp;
								<a class="ICezk" href="/license">Unsplash License</a>
							</div>
							<div class="JHj-M -wAV0 _2I80X"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- ----------------------------------------------------------------------BAG 3------------------------------------------------------------------------------------------------------- -->
<div class="row">
	<div class="col-md-2"></div>
		<div class="col-md-10 col-xl-10">
    		<?php foreach($allPhoto as $dataPhotoUser) { ?>
        		<button type="button" name="photoUser" class="btn" style="padding: 0; margin: 0;" data-toggle="modal" data-target="#modal<?php echo $dataPhotoUser['id_photo'];?>"><img src="<?php echo base_url('assets/photoUser/') . $dataPhotoUser['photo'];?>" alt="photoUser" width="400" heigth="277" style="cursor: zoom-in; padding-right: 10px; padding-left:10px; margin-bottom: 20px;"></button>
    		<?php } ?>
		</div>	
	<div class="col-md-2"></div>
	</div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Select photos for publishing</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <?php echo form_open_multipart('account/upload'); ?>
                <div class="form_modal_upload">
                    <div class="form_upload">
                        <div class="form_modal_">
                            <label class="user data accounts">
                                <div class="modal_upload">
                                    <div class="img_upload" style="width: 150px; height: 93px;">
                                        <div class="image_upload" style="padding-bottom: 62%;">
                                            <img src="<?php echo base_url(); ?>/assets/img/img-upload.png" class="_2zEKz">
                                        </div>
                                    </div>
                                    <div style="font-family: Helvetica;
                                                font-size: 16px;
                                                color: #AAAAAA;
                                                margin-top: 30px;">
                                                Drop your photos here or 
                                        <div class="button style_btn bttn browse" style="background-color: #fff;
                                                                                                    border-color: #ddd;">Browse</div>
                                    </div>
                                </div>
                                <input type="file" multiple="" accept="image/jpeg" class="input_photo" name="image">
                                <div class="textBawah" style="font-family: Helvetica; font-size: 12px; color: #AAAAAA;">You have 9 uploads remaining this week.</div>
                            </label>
                        </div>
                        <!-- <form action="" method="POST"> -->
                            <input type="text" placeholder="Keyword for Photo" class="form-control" name="keyword">
                        <!-- </form> -->
                    </div>
                </div>
            </div>
            
            <div class="modal-footer" style="justify-content: flex-start;">
                <a href="#">Read the Unsplash License</a>
                <button style="margin-left: 180px;" name="publish" type="submit" class="btn btn-primary">Publish Photos</button>
            </div>
            </div>
        </div>
    </div>

<!-- --------------- MODAL DETAIL PHOTO --------------- -->
<!-- Modal -->
<?php foreach($allPhoto as $dataPhotoUser) { ?>
    <div class="modal fade" id="modal<?php echo $dataPhotoUser['id_photo'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 1040px;">
            <div class="modal-content" style="width: auto;">
                <div class="modal-header" style="display: flex;">
                    
                    <a href="#"><img src="<?php echo base_url('assets/photoProfile/') . $dataPhotoUser['photoUser']; ?>" width="35px" style="border-radius:25px; margin-right: 10px;"></a>

                    <div class="coba">
                        <h5 style="font-size:15px; font-family: Helvetica; margin-bottom: -10px;"  class="modal-title" id="exampleModalCenterTitle"><?php echo $dataPhotoUser['first_name'] ?> <?php echo $dataPhotoUser['last_name'] ?></h5>

                        <span style="font-size:11px; font-family: Helvetica;">@<?php echo $user['username'];?></span>

                        <span style="font-size:11px; font-family: Helvetica;">@<?php echo $dataPhotoUser['username'];?></span>
                    </div>
                    <a style="margin-left: 661px;" class="btn btn-light" href="<?php echo base_url('assets/photoUser/'). $dataPhotoUser['photo'];?>" download>Download</a> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <button type="button" class="btn" style="padding: 0; margin: 0;" data-toggle="modal" data-target="#modal<?php echo $dataPhotoUser['id_photo'];?>"><img src="<?php echo base_url('assets/photoUser/') . $dataPhotoUser['photo'];?>" alt="photoUser" width="1000px" style="padding-right: 10px; padding-left:10px; margin-bottom: 20px;"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

</body>
</html>