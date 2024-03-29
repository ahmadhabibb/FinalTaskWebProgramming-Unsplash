<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $user['first_name'] ?> <?php echo $user['last_name']; ?>'s Collections (@<?php echo $user['username'] ?>) | Unsplash Photo Community</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/styleAccount.css"> 
	<link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/favicon-black.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="container-fluid">
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
                        <li><a href="<?php base_url();?>Welcome">Home</a></li>
                        <li><a href="#">Collections</a></li>
                        <li><a href="#">Explore</a></li>
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
                        <a href="#"><img src="<?php echo base_url('assets/photoProfile/') . $photo['photo']; ?>" width="35px" style="border-radius:25px;"></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-4 text-right" style="margin-top:200px;">
            <?php foreach($userPhoto as $photo) { ?>
                <img src="<?php echo base_url('assets/photoProfile/') . $photo['photo']; ?>" width="170px" style="border-radius:100px; margin-left:10px;">
            <?php } ?>
            </div>
            <div class="col-sm-8" style="margin-top: 200px;">
                <div class="col-sm-6" style="display: -webkit-inline-box">
                    <h1 style=" font-weight:700;
                                font-family: Helvetica;">
                                <?php echo $user['first_name'] ?> <?php echo $user['last_name']; ?></h1>
                    <a href="<?php echo base_url();?>edit" style="margin-left:40px; margin-top:10px;" class="editProfile btn btn-light">Edit Profile</a>
                    <button class="fas fa-ellipsis-h btn btn-light" type="button" data-toggle="dropdown" style="margin-left:10px; padding:10px; margin-top:10px;"></button>
                    <ul class="dropdown-menu" style="background-color: black;">
                        <li><a href="<?php echo base_url() ?>/edit">Account Setting</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter">Submit a Photo</a></li>
                        <li><a href="<?php echo base_url('Login/logout') ?>">Logout</a></li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <span style="   font-family: Helvetica;
                                    font-size 14px;">
                                    Download free, beautiful high-quality photos curated by <?php echo $user['first_name'] ?></span>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 100px">
            <div class="col-sm-2"></div>
            <div class="col-sm-10 col-md-10">
                <h3 style="
                    font-family: Helvetica;
                    font-size: 17px;
                    font-weight: 600;
                    margin-bottom: 30px;
                    margin-left: 25px;">
                    <?php echo count($dataPhoto); ?> Photos</h3>
                
                    <div class="col-md-12">
                        <?php foreach($dataPhoto as $dataPhotoUser) { ?>
                            <button type="button" name="photoUser" class="btn" style="padding: 0; margin: 0;" data-toggle="modal" onclick="myFunction(this);" data-target="#modal<?php echo $dataPhotoUser['id_photo'];?>"><img src="<?php echo base_url('assets/photoUser/') . $dataPhotoUser['photo'];?>" alt="photoUser" width="400" heigth="277" style="padding-right: 10px; padding-left:10px; margin-bottom: 20px; cursor: zoom-in;"></button>
                        <?php } ?>
                    </div>
                
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 100px;">
            <img src="<?php echo base_url(); ?>/assets/img/logo-black.svg" alt="logo footer">
            <h4 style="
                    font-family: Helvetica;
                    font-size: 15px;
                    font-weight: 300;
                    margin-top: 20px;
                    color: #969696;
                    margin-bottom: 100px;">
                    Make something awesome</h4>
        </div>
    </div>

    <!-- --------------- MODAL SUBMIT A PHOTO --------------- -->
    <!-- Modal -->
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
<?php foreach($dataPhoto as $dataPhotoUser) { ?>
    <div class="modal fade" id="modal<?php echo $dataPhotoUser['id_photo'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 1040px;">
            <div class="modal-content" style="width: auto;">
                <div class="modal-header" style="display: flex;">
                    
                    <?php foreach($userPhoto as $photo) { ?>
                        <a href="#"><img src="<?php echo base_url('assets/photoProfile/') . $photo['photo']; ?>" width="35px" style="border-radius:25px; margin-right: 10px;"></a>
                    <?php } ?>
                    <div class="coba">
                        <h5 style="font-size:15px; font-family: Helvetica; margin-bottom: -10px;"  class="modal-title" id="exampleModalCenterTitle"><?php echo $user['first_name'] ?> <?php echo $user['last_name'] ?></h5>
                        <span style="font-size:11px; font-family: Helvetica;">@<?php echo $user['username'];?></span>
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
</html>
