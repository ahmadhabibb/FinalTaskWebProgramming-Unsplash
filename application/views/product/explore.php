<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/explore.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/styleAccount.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<div class="container">

    <!-- navbar -->
    <div class="row">
            <div class="col-md-12 fixed-top" style="display: -webkit-inline-box; padding-top: 10px; background-color: white;">
                    <img class="logo-header" src="<?php echo base_url(); ?>/assets/img/logo-black.svg" alt="logo" style="padding-top:5px;"/>
                <div class="col-lg-8">
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
                <div class="col-sm-2" style="margin:0; padding:0; max-width: 350px;">
                    <ul style="padding-left:15px; display: inline-flex;" class="menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="<?= site_url('c_explorer/collection')?>">Collections</a></li>
                        <li><a href="<?= site_url('c_explorer/index')?>">Explore</a></li>
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
            </div>
        </div>
    <!-- end navbar -->
<div class="container">
	<div class="etop">
		<!-- atas -->
		<div style="width: 50%;">
		<h1 class="ket1">Explore</h1>
        <h2 class="ket2"> Beautiful, free pictures.</h2>
		<h2 class="ket2">Explore the most popular topics on Unsplash. All photos are free to use under the Unsplash License. <a class="link" href="<?= site_url('c_explorer/license')?>">Unsplash License</a>.</h2>
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
      
</div>
