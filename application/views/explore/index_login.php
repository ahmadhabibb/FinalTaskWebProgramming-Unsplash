<!DOCTYPE html>
<html>
<head>
    <title>Beautiful Free Images & Pictures</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/styleAccount.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/styleExplore.css">
	<link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/favicon-black.ico">
</head>
<div class="container">
        <div class="row">
            <div class="col-md-12 fixed-top" style="display: -webkit-inline-box; padding-top: 10px; background-color: white;">
                <a href="<?php echo base_url();?>Welcome"><img class="logo-header" src="<?php echo base_url(); ?>/assets/img/logo-black.svg" alt="logo" style="padding-top:5px;"/></a>
                <div class="col-lg-8">
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
                </form>
                </div>
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
    <!-- end navbar -->
<div class="container">
	<div class="etop" style="margin-top: 70px;">
		<!-- atas -->
		<div style="width: 100%;">
		<h1 class="ket1"style="font-family: Helvetica; font-size: 46px; font-weight: 800; letter-spacing: 2px;">Explore</h1>
        <h2>Beautiful, free pictures.</h2>
		<h2>Explore these popular picture categories on Unsplash. All photos are free to </h2>
		<h2>download and use under the <a href="<?= site_url('c_explorer/license')?>" class="lisensi">Unsplash License</a>.</h2>
	</div>
	</div>
	<!-- bagian isi -->
	
<?php foreach ($foto as $f) { ?>
	<!-- foto -->
	<div class="efoto1">
		<div class="efoto2">
    		<a style="cursor: zoom-in;" >
    			<div class="efoto3">
    				<img class="efoto4" src="<?= base_url('assets/photoUser/') . $f['photo']?>">
    			</div> 
    		</a>
            <br>
            <div class="but2">
                <a class="but3" href="/search/photos/office">
                <?= $f['keyword']?>
            </a>
            </div>
    	</div>
    </div>
<?php }?>


       <!--  <div class="efoto1">
            <div class="efoto2">
                <a style="cursor: zoom-in;" >
                    <div class="efoto3">
                        <img class="efoto4" src="">
                    </div>
                </a>
            </div>
        </div>
        <div class="efoto1">
            <div class="efoto2">
                <a style="cursor: zoom-in;" >
                    <div class="efoto3">
                        <img class="efoto4" src="78161.jpg">
                    </div>
                </a>
            </div>
        </div> -->
    	

    	<!-- batas foto -->
    	<!-- bagian button -->
        <!-- ----------------------- MODAL PHOTO ----------------------- -->
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
                                            <img style="wi" src="<?php echo base_url(); ?>/assets/img/img-upload.png" class="_2zEKz">
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
      
</div>
