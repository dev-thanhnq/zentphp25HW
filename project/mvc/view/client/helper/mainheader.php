<!DOCTYPE html>
<html lang="en">
<head>
<title>Mationmy</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="../readit/css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="../readit/css/animate.css">

<link rel="stylesheet" href="../readit/css/owl.carousel.min.css">
<link rel="stylesheet" href="../readit/css/owl.theme.default.min.css">
<link rel="stylesheet" href="../readit/css/magnific-popup.css">

<link rel="stylesheet" href="../readit/css/aos.css">

<link rel="stylesheet" href="../readit/css/ionicons.min.css">

<link rel="stylesheet" href="../readit/css/flaticon.css">
<link rel="stylesheet" href="../readit/css/icomoon.css">
<link rel="stylesheet" href="../readit/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>
<body>
    
	<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      	<a class="navbar-brand" href="?mod=client&c=home&act=index">mation<i>my</i>.</a>
	      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      	</button>

	      	<div class="collapse navbar-collapse" id="ftco-nav">
	        	<ul class="navbar-nav ml-auto">
		          	<li class="nav-item"><a href="?mod=client&c=home&act=index" class="nav-link">Trang chủ</a></li>
		          	<li class="nav-item"><a href="?mod=client&c=home&act=trending" class="nav-link">Bài viết HOT</a></li>
		          	<li class="nav-item dropdown">
		          		<a href="#" class="nav-link">Chủ đề</a>
		          		<div class="dropdown">
						  <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="background-color: #ffba42">
						  	<?php foreach($categoriesMenu as $key => $category) { ?>
						  	<button class="dropdown-item" type="button"><a href="?mod=client&c=home&act=showPostsCategory&id=<?php echo $category['id'] ?>" style="color: black"><?php echo $category['name'] ?></a></button>
						  	<?php } ?>
						  </div>
						</div>
		          	</li>
		          	<li class="nav-item dropdown">
		          		<a class="nav-link">Đăng nhập</a>
		          		<div class="dropdown">
						  <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="background-color: #ffba42">
						  	<button class="dropdown-item" type="button"><a href="" style="color: black">Người dùng</a></button>
						  	<button class="dropdown-item" type="button"><a href="?mod=admin&c=post&act=index" style="color: black">ADMIN</a></button>
						  	<button class="dropdown-item" type="button"><a href="?mod=admin&c=auth&act=logout" style="color: black">Đăng xuất</a></button>
						  </div>
						</div>
		          	</li>
	        	</ul>
	      	</div>
	    </div>
	</nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('../readit/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-12 ftco-animate">
          	<h2 class="subheading">Hello! Welcome to</h2>
          	<h1 class="mb-4 mb-md-0">mationmy</h1>
          	<div class="row">
          		<div class="col-md-9">
          			<div class="text">
          				<p class="display-1">life. learn. love</p>
	          			<p>Cập nhật những thông tin thú vị, Tìm những sự tích cực trong cuộc sống bằng những chia sẻ chân thực nhất của tác giả</p>
	          			<div class="mouse">
							<a href="#" class="mouse-icon">
								<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
							</a>
						</div>
					</div>
          		</div>
          	</div>
          </div>
        </div>
      </div>
    </div>

   	<!-- <section class="ftco-section">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-12"> -->