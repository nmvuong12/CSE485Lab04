<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Cánh cửa tri thức</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body, html {
    margin: 0;
    padding: 0;
	background: #eeeeee;
}
.form-inline {
	display: inline-block;
}
.navbar-header.col {
	padding: 0 !important;
}
.navbar {		
	background: #fff;
	padding-left: 16px;
	padding-right: 16px;
    padding-top: 0;
	border-bottom: 1px solid #d6d6d6;
	box-shadow: 0 0 4px rgba(0,0,0,.1);
}
.nav-link img {
	border-radius: 50%;
	width: 36px;
	height: 36px;
	margin: -8px 0;
	float: left;
	margin-right: 10px;
}
.navbar .navbar-brand {
	color: #555;
	padding-left: 0;
	padding-right: 50px;
	font-family: 'Merienda One', sans-serif;
}
.navbar .navbar-brand i {
	font-size: 20px;
	margin-right: 5px;
}
.search-box {
	position: relative;
}	
.search-box input {
	box-shadow: none;
	padding-right: 35px;
	border-radius: 3px !important;
}
.search-box .input-group-addon {
	min-width: 35px;
	border: none;
	background: transparent;
	position: absolute;
	right: 0;
	z-index: 9;
	padding: 7px;
	height: 100%;
}
.search-box i {
	color: #a0a5b1;
	font-size: 19px;
}
.navbar .nav-item i {
	font-size: 18px;
}
.navbar .dropdown-item i {
	font-size: 16px;
	min-width: 22px;
}
.navbar .nav-item.open > a {
	background: none !important;
}
.navbar .dropdown-menu {
	border-radius: 1px;
	border-color: #e5e5e5;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .dropdown-menu a {
	color: #777;
	padding: 8px 20px;
	line-height: normal;
}
.navbar .dropdown-menu a:hover, .navbar .dropdown-menu a:active {
	color: #333;
}	
.navbar .dropdown-item .material-icons {
	font-size: 21px;
	line-height: 16px;
	vertical-align: middle;
	margin-top: -2px;
}
.navbar .badge {
	color: #fff;
	background: #f44336;
	font-size: 11px;
	border-radius: 20px;
	position: absolute;
	min-width: 10px;
	padding: 4px 6px 0;
	min-height: 18px;
	top: 5px;
}
.navbar a.notifications, .navbar a.messages {
	position: relative;
	margin-right: 10px;
}
.navbar a.messages {
	margin-right: 20px;
}
.navbar a.notifications .badge {
	margin-left: -8px;
}
.navbar a.messages .badge {
	margin-left: -4px;
}	
.navbar .active a, .navbar .active a:hover, .navbar .active a:focus {
	background: transparent !important;
}
@media (min-width: 1200px){
	.form-inline .input-group {
		width: 300px;
		margin-left: 30px;
	}
}
@media (max-width: 1199px){
	.form-inline {
		display: block;
		margin-bottom: 10px;
	}
	.input-group {
		width: 100%;
	}
}
/* 
 */
.carousel {
	margin: 30px auto 60px;
	padding: 0 80px;
}
.carousel .carousel-item {
	text-align: center;
	overflow: hidden;
}
.carousel .carousel-item h4 {
	font-family: 'Varela Round', sans-serif;
}
.carousel .carousel-item img {
	max-width: 100%;
	display: inline-block;
}
.carousel .carousel-item .btn {
	border-radius: 0;
	font-size: 12px;
	text-transform: uppercase;
	font-weight: bold;
	border: none;
	background: #a177ff;
	padding: 6px 15px;
	margin-top: 5px;
}
.carousel .carousel-item .btn:hover {
	background: #8c5bff;
}
.carousel .carousel-item .btn i {
	font-size: 14px;
	font-weight: bold;
	margin-left: 5px;
}
.carousel .thumb-wrapper {
	margin: 5px;
	text-align: left;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0,0,0,0.1);   
}
.carousel .thumb-content {
	padding: 15px;
	font-size: 13px;
}
.carousel-control-prev, .carousel-control-next {
	height: 44px;
	width: 44px;
	background: none;	
	margin: auto 0;
	border-radius: 50%;
	border: 3px solid rgba(0, 0, 0, 0.8);
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 36px;
	position: absolute;
	top: 50%;
	display: inline-block;
	margin: -19px 0 0 0;
	z-index: 5;
	left: 0;
	right: 0;
	color: rgba(0, 0, 0, 0.8);
	text-shadow: none;
	font-weight: bold;
}
.carousel-control-prev i {
	margin-left: -3px;
}
.carousel-control-next i {
	margin-right: -3px;
}
.carousel-indicators {
	bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	border-radius: 50%;
	margin: 4px;
	border: none;
}
.carousel-indicators li {	
	background: #ababab;
}
.carousel-indicators li.active {	
	background: #555;
}
</style>
</head> 
<body>
<nav class="navbar navbar-expand-xl navbar-light bg-light">
	<a href="#" class="navbar-brand"><i class="fa fa-cube"></i>Cánh cửa<b> tri thức</b></a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href="#" class="nav-item nav-link active">Trang chủ</a>
			<a href="#" class="nav-item nav-link">Giới thiệu</a>
			<div class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Các mục</a>
				<div class="dropdown-menu">
					<a href="#" class="dropdown-item">Thể loại</a>
					<a href="#" class="dropdown-item">Sách</a>
					<a href="#" class="dropdown-item">Tác giả</a>
				</div>
			</div>
		</div>
		<form action="" method="POST" class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Tìm kiếm sách">
				<button type="submit" class="input-group-addon"><i class="material-icons">&#xE8B6;</i></button>
			</div>
		</form>
		<div class="navbar-nav ml-auto">
			<div class="nav-item dropdown">
				<form action="{{ route('logout') }}" method="POST">
					@csrf
					<button type="submit" class="trigger-btn dropdown-item"><i class="fa fa-user-o"></i>>Đăng xuất</button>
				</form>
					<!-- <a href="{{route('logout')}}" class="trigger-btn dropdown-item"><i class="fa fa-user-o"></i>Đăng xuất</a> -->
			</div>
		</div>
	</div>
</nav>
<div class="container-xl">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div id="myCarousel" class="carousel slide">
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="/examples/images/cities/london.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Quản lý sách</h4>
                                        <a href="{{route('books.index')}}" class="btn btn-primary">Đi tới <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="/examples/images/cities/new-york.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Quản lý độc giả</h4>
                                        <a href="{{route('readers.index')}}" class="btn btn-primary">Đi tới <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="/examples/images/cities/paris.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Mượn/Trả sách</h4>
                                        <a href="{{route('borrows.index')}}" class="btn btn-primary">Đi tới <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of carousel -->
            </div>
        </div>
    </div>
</div>

</body>
</html>                            