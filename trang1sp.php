<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->

<!-- Mirrored from html.willgroup.net/golfcity/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jan 2018 13:52:59 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Chi tiết sản phẩm</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">
	
	<!-- CSS
	============================================ -->	
	<link rel="stylesheet" href="css/bootstrap.min.css">	
	<link rel="stylesheet" href="css/font-awesome.min.css">		
	<link rel="stylesheet" href="css/fancybox.css">	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.skinHTML5.css">
	<link rel="stylesheet" href="css/daterangepicker.css">
	<link rel="stylesheet" href="css/style.css">
	
	<!-- JS
	============================================ -->
	<script src="js/jquery-1.11.3.min.js" defer></script>
	<script src="js/tether.min.js" defer></script>
	<script src="js/bootstrap.min.js" defer></script>
	<script src="js/fancybox.js" defer></script>
	<script src="js/owl.carousel.min.js" defer></script>
	<script src="js/bootstrap-rating.min.js" defer></script>
	<script src="js/ion.rangeSlider.min.js" defer></script>
	<script src="js/moment.min.js" defer></script>
	<script src="js/daterangepicker.js" defer></script>
	<script src="js/site.js" defer></script>
</head>
<body data-spy="scroll" data-target="#scrollspy">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<?php
        include './connect_db.php';
        $result = mysqli_query($con, "SELECT * FROM `product` WHERE `id` = " . $_GET['id']);
        $product = mysqli_fetch_assoc($result);
        $imgLibrary = mysqli_query($con, "SELECT * FROM `image_library` WHERE `product_id` = " . $_GET['id']);
        $product['images'] = mysqli_fetch_all($imgLibrary, MYSQLI_ASSOC);
		?>
	<?php include("include/inc_header.php");?>
	
	<div class="container">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item"><a href="index.php">Gậy Golf</a></li>
		</ul>
		
		<div class="row">
			<div class="col-xs-12 col-lg-9">
				<div class="single-product">
					<div class="row">
						<div class="col-xs-12 col-md-6">
							<div class="single-product-images owl-carousel">
								<div class="item"><a class="fancybox" href="images/gay-driver-1.jpg" rel="res-gallery" style="background-image: url(images/gay-driver-1.jpg)"></a></div>
								<div class="item"><a class="fancybox" href="images/gay-driver-2.jpg" rel="res-gallery" style="background-image: url(images/gay-driver-2.jpg)"></a></div>
								<div class="item"><a class="fancybox" href="images/gay-driver-3.jpg" rel="res-gallery" style="background-image: url(images/gay-driver-3.jpg)"></a></div>
								<div class="item"><a class="fancybox" href="images/gay-driver-4.jpg" rel="res-gallery" style="background-image: url(images/gay-driver-4.jpg)"></a></div>
								<div class="item"><a class="fancybox" href="images/gay-driver-5.jpg" rel="res-gallery" style="background-image: url(images/gay-driver-5.jpg)"></a></div>
							</div>
							<div class="single-product-thumbs owl-carousel">
								<div class="item"><a href="javascript:void(0);"><img src="images/gay-driver-1.jpg" alt="Gậy driver"/></a></div>
								<div class="item"><a href="javascript:void(0);"><img src="images/gay-driver-2.jpg" alt="Gậy driver"/></a></div>
								<div class="item"><a href="javascript:void(0);"><img src="images/gay-driver-3.jpg" alt="Gậy driver"/></a></div>
								<div class="item"><a href="javascript:void(0);"><img src="images/gay-driver-4.jpg" alt="Gậy driver"/></a></div>
								<div class="item"><a href="javascript:void(0);"><img src="images/gay-driver-5.jpg" alt="Gậy driver"/></a></div>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<div class="single-product-summary">
								<h1 class="single-product-title"></h1>
								<div class="separator"></div>
								
								<div class="single-product-price">Giá:<ins>16.065.000<span class="symbol">đ</span></ins><del>17.850.000<span class="symbol">đ</span></del></div>
								<div class="separator"></div>
								
								<div class="single-product-excerpt">
									Gậy Driver Titleist 917 D2 Red 50 được thiết kế nhằm tối ưu hóa độ êm và khoảng cách trong từng cú đánh nhờ vào thiết kế đầu gậy 440cc giúp người chơi có cú đánh tự tin hơn. 
								</div>
								<div class="separator"></div>
								
								<div class="delivery">
									<i class="icon-shipping"></i>
									<p class="text">TP.Hồ Chí Minh giao hàng trước <strong>20 giờ</strong> hôm nay <a href="#">Xem</a></p>
								</div>
								<ul class="policy">
									<li>
										<p><strong>Đổi trả sản phẩm lỗi miễn phí trong 7 ngày</strong> <a href="#">(Xem)</a></p>
									</li>
									<li>
										<p><strong>Bảo hành chính hãng 12 tháng</strong> <a href="#">(Xem điểm bảo hành)</a></p>
										<p>Phát hiện hàng giả, hàng nhái, bạn trả hàng và nhận thêm <mark>100% giá trị đơn hàng</mark></p>
									</li>
									<li>
										<p><strong>Giao hàng đúng hẹn:</strong></p>
										<p>Nếu trễ, tặng phiếu mua hàng giá trị <mark>100.000đ</mark></p>
									</li>
								</ul>
								<form class="form-add-to-cart" method="POST" action="#">
									<button class="btn btn-quick-buy" type="submit">Mua ngay</button>
									<button class="btn btn-add-to-cart" type="submit">Thêm vào giỏ hàng</button>
								</form>
							</div>
						</div>
					</div>
				</div><!-- single product -->	
				
				<article class="entry">
					<h5 class="entry-title">Thông số kỹ thuật</h5>
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>Đối tượng sử dụng</td>
								<td>Nam</td>
							</tr>
							<tr>
								<td>Loại gậy</td>
								<td>Driver</td>
							</tr>
							<tr>
								<td>Tay</td>
								<td>Tay phải</td>
							</tr>
							<tr>
								<td>Chất liệu</td>
								<td>Graphite</td>
							</tr>
							<tr>
								<td>Góc nghiêng</td>
								<td>9.5º - 10.5º</td>
							</tr>
							<tr>
								<td>Bao bọc đầu gậy</td>
								<td>Có</td>
							</tr>
							<tr>
								<td>Xuất xứ</td>
								<td>Thương hiệu Mỹ</td>
							</tr>
						</tbody>
					</table>
					<hr>
					<h5 class="entry-title">Mô tả</h5>
					<div class="entry-content">
						<p><strong>Gậy Driver Titleist 917 D2 Red 50</strong> cho độ êm và khoảng cách tối ưu</p>
						<p><strong>Gậy Driver Titleist 917 D2 Red 50</strong> được thiết kế nhằm tối ưu hóa độ êm và khoảng cách trong từng cú đánh nhờ vào thiết kế đầu gậy 440cc giúp người chơi có cú đánh tự tin hơn. Với sản phẩm Titleist 917 D2, tốc độ bóng trở nên nhanh hơn với thiết kế điểm phát bóng ở vị trí trung tâm làm tăng tối đa khoảng cách và độ êm khi người chơi phát bóng. Hơn thế nữa, sản phẩm này được thiết kế bằng chất liệu đặc biệt giúp tăng khả năng truyền âm thanh và tạo cảm giác mới lạ cho người chơi. Bên cạnh đó, sản phẩm còn giúp người chơi có thể điều chỉnh linh hoạt quỹ đạo bóng.</p>
						<p>Nếu có nhu cầu mua gậy sử dụng tay trái quý khách vui lòng liên hệ <span style="color: #FE7500;"><strong>(04) 7777 7777</strong></span> (24/7) để được tư vấn và đặt hàng.</p>
						<figure class="wp-caption aligncenter" style="width: 500px">
							<img src="images/gay-driver-1.jpg" alt="">
							<figcaption class="wp-caption-text">Gậy Driver Titleist 917 D2 Red 50 cho độ êm và khoảng cách tối ưu</figcaption>
						</figure>
						<figure class="wp-caption aligncenter" style="width: 500px">
							<img src="images/gay-driver-2.jpg" alt="">
							<figcaption class="wp-caption-text">Gậy Driver Titleist 917 D2 Red 50 cho độ êm và khoảng cách tối ưu</figcaption>
						</figure>
						<figure class="wp-caption aligncenter" style="width: 500px">
							<img src="images/gay-driver-3.jpg" alt="">
							<figcaption class="wp-caption-text">Gậy Driver Titleist 917 D2 Red 50 cho độ êm và khoảng cách tối ưu</figcaption>
						</figure>
					</div>
				</article><!-- entry -->
				
				<div class="fastbuy">
					<h3 class="title">Mua hàng nhanh</h3>
					<ul class="info clearfix">
						<li class="name">
							<a href="#"><img src="images/golf-1.jpg">Gậy Driver Titleist 917 D2 Red 50</a>
						</li>
						<li class="quantity">
							<label>Số lượng</label>
							<input class="form-control" name="quantity" value="1" type="text">
						</li>
						<li class="price">
							<label>Giá</label>
							<ins>16.065.000<span class="symbol">đ</span></ins>
							<del>17.850.000<span class="symbol">đ</span></del>
						</li>
						<li class="shipfee">
							<label>Phí giao hàng</label>
							<span>Chưa bao gồm phí giao hàng</span>
						</li>
						<li class="total">
							<label>Thành tiền</label>
							<span>17.946.000₫</span>
						</li>
					</ul>
					<div class="contact">
						<div class="row">
							<div class="col-xs-12 col-md-5 col1">
								<label>Thông tin liên hệ:</label>
								<label class="custom-control custom-radio">
									<input id="radio1" name="radio" type="radio" class="custom-control-input">
									<span class="custom-control-indicator"></span>
									<span class="custom-control-description">Anh</span>
								</label>
								<label class="custom-control custom-radio">
									<input id="radio2" name="radio" type="radio" class="custom-control-input">
									<span class="custom-control-indicator"></span>
									<span class="custom-control-description">Chị</span>
								</label>
							</div>
							<div class="col-xs-12 col-md-7 col2">
								<div class="row">
									<div class="col-xs-12 col-sm-6 form-group">
										<input class="form-control" type="text" placeholder="Họ và tên">
									</div>
									<div class="col-xs-12 col-sm-6 form-group">
										<input class="form-control" type="text" placeholder="Số điện thoại">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6 form-group">
										<button class="btn btn-quick-buy" type="button">Mua ngay</button>
									</div>
									<div class="col-xs-12 col-sm-6 form-group">
										<button class="btn btn-add-to-cart" type="button">Thêm vào giỏ hàng</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- fastbuy -->
				
				<div class="module-comment">
					<h6 class="title">Thảo luận về Gậy Driver Titleist 917 D2 Red 50</h6>
					
					<ul class="comments">
						<li class="comment clearfix">
							<img class="avatar" src="images/avatar.jpg" alt="binhngo">
							<strong class="name">binhngo</strong> - <span class="time">1 giờ trước</span>
							<a class="reply" href="javascript:void(0)"><i class="fa fa-reply icon"></i>Trả lời</a>
							<p class="content">Mỗi người có cách tập và tính riêng. Em thì dùng cán gậy làm thước đo. Trong vòng một cán gậy tính là độ 1, 2 cán gậy tính làm độ 2. Lên dốc, xuống dốc, nghiêng trái, nghiêng phải, cỏ dày, mỏng, cát nhiều ít, có sương buổi sớm.... đều phải tính cả để tăng hoặc giảm lực. Hiện nay em gạt trong vòng 1 cán gậy được khoảng 80%. Trong vòng 2-3 cán gậy cố gắng đảm bảo 2 gạt bóng holed. ngoài ra thì không thể tổng kết được.</p>
						</li>	
						<li class="comment clearfix">
							<img class="avatar" src="images/avatar.jpg" alt="quốc tuấn">
							<strong class="name">quốc tuấn</strong> - <span class="time">2 giờ trước</span>
							<a class="reply" href="javascript:void(0)"><i class="fa fa-reply icon"></i>Trả lời</a>
							<p class="content">Các bác lưu ý nhé, xem mặt green có nước hay không nhất là buổi sáng sớm green hay có sương đọng lại nên lực cản bóng sẽ lớn hơn.</p>
						</li>
						<li class="comment clearfix">
							<img class="avatar" src="images/avatar.jpg" alt="Tuấn">
							<strong class="name">Tuấn</strong> - <span class="time">3 giờ trước</span>
							<a class="reply" href="javascript:void(0)"><i class="fa fa-reply icon"></i>Trả lời</a>
							<p class="content">Bác Phan Thế Hải viết bài này hay sao thế.</p>
						</li>
						<ul class="comments child-comments">
							<li class="comment clearfix">
								<img class="avatar" src="images/avatar.jpg" alt="quốc tuấn">
								<strong class="name">quốc tuấn</strong> - <span class="time">4 giờ trước</span>
								<a class="reply" href="javascript:void(0)"><i class="fa fa-reply icon"></i>Trả lời</a>
								<p class="content">Mỗi người đều có một sở trường, một sở thích riêng: Người thích hay giỏi đánh gậy sắt ngắn, người thích dài, người thích dùng mid iron để đánh lên green... Do vậy, ngay từ second shot (đối với Par 4), hoặc third shot (đối với par 5 hoặc những lỗ hình dog-leg), túm lại là từ khi bắt đầu nhìn thấy green/cờ từ fairway đã phải tính điểm rơi của bóng và quan sát green.</p>
							</li>
							<li class="comment clearfix">
								<img class="avatar" src="images/avatar.jpg" alt="quốc tuấn">
								<strong class="name">quốc tuấn</strong> - <span class="time">5 giờ trước</span>
								<a class="reply" href="javascript:void(0)"><i class="fa fa-reply icon"></i>Trả lời</a>
								<p class="content">Các bác lưu ý nhé, xem mặt green có nước hay không nhất là buổi sáng sớm green hay có sương đọng lại nên lực cản bóng sẽ lớn hơn.</p>
							</li>
						</ul>
					</ul>
				</div><!-- comment -->
				
				
			</div>
			<div class="col-xs-12 col-lg-3">
				<section class="module aside-module">
					<header class="module-header">
						<h2 class="module-title">Sản phẩm liên quan</h2>
					</header>
					<div class="module-content">
						<div class="products">
							<div class="product aside-product">
								<div class="inner">
									<a class="image" href="#">
										<img src="images/golf-1.jpg" alt=""/>
										<span class="btn btn-primary">Xem ngay</span>
										<span class="sale">Sale 20%</span>
									</a>
									<div class="info">
										<h3 class="name"><a href="#">TaylorMade - Driver M2 2017 - Gaucher</a></h3>
										<p class="price">
											<ins>7,999,000<span class="symbol">đ</span></ins>
											<del>9,999,000<span class="symbol">đ</span></del>
										</p>
									</div>
								</div>
							</div>
							<div class="product aside-product">
								<div class="inner">
									<a class="image" href="#">
										<img src="images/golf-2.jpg" alt=""/>
										<span class="btn btn-primary">Xem ngay</span>
									</a>
									<div class="info">
										<h3 class="name"><a href="#">TaylorMade - Série de Fers M2 Graphite</a></h3>
										<p class="price">
											<ins>5,999,000<span class="symbol">đ</span></ins>
										</p>
									</div>
								</div>
							</div>
							<div class="product aside-product">
								<div class="inner">
									<a class="image" href="#">
										<img src="images/golf-3.jpg" alt=""/>
										<span class="btn btn-primary">Xem ngay</span>
										<span class="sale">Sale 30%</span>
									</a>
									<div class="info">
										<h3 class="name"><a href="#">TaylorMade - Driver M2 2017 - Gaucher</a></h3>
										<p class="price">
											<ins>7,999,000<span class="symbol">đ</span></ins>
											<del>9,999,000<span class="symbol">đ</span></del>
										</p>
									</div>
								</div>
							</div>
							<div class="product aside-product">
								<div class="inner">
									<a class="image" href="#">
										<img src="images/golf-4.jpg" alt=""/>
										<span class="btn btn-primary">Xem ngay</span>
										<span class="sale">Sale 20%</span>
									</a>
									<div class="info">
										<h3 class="name"><a href="#">TaylorMade - Driver M2 2017 - Gaucher</a></h3>
										<p class="price">
											<ins>7,999,000<span class="symbol">đ</span></ins>
											<del>9,999,000<span class="symbol">đ</span></del>
										</p>
									</div>
								</div>
							</div>
							<div class="product aside-product">
								<div class="inner">
									<a class="image" href="#">
										<img src="images/golf-5.jpg" alt=""/>
										<span class="btn btn-primary">Xem ngay</span>
									</a>
									<div class="info">
										<h3 class="name"><a href="#">TaylorMade - Série de Fers M2 Graphite</a></h3>
										<p class="price">
											<ins>5,999,000<span class="symbol">đ</span></ins>
										</p>
									</div>
								</div>
							</div>
							<div class="product aside-product">
								<div class="inner">
									<a class="image" href="#">
										<img src="images/golf-1.jpg" alt=""/>
										<span class="btn btn-primary">Xem ngay</span>
										<span class="sale">Sale 20%</span>
									</a>
									<div class="info">
										<h3 class="name"><a href="#">TaylorMade - Driver M2 2017 - Gaucher</a></h3>
										<p class="price">
											<ins>7,999,000<span class="symbol">đ</span></ins>
											<del>9,999,000<span class="symbol">đ</span></del>
										</p>
									</div>
								</div>
							</div>
							<div class="product aside-product">
								<div class="inner">
									<a class="image" href="#">
										<img src="images/golf-2.jpg" alt=""/>
										<span class="btn btn-primary">Xem ngay</span>
									</a>
									<div class="info">
										<h3 class="name"><a href="#">TaylorMade - Série de Fers M2 Graphite</a></h3>
										<p class="price">
											<ins>5,999,000<span class="symbol">đ</span></ins>
										</p>
									</div>
								</div>
							</div>
							<div class="product aside-product">
								<div class="inner">
									<a class="image" href="#">
										<img src="images/golf-3.jpg" alt=""/>
										<span class="btn btn-primary">Xem ngay</span>
										<span class="sale">Sale 30%</span>
									</a>
									<div class="info">
										<h3 class="name"><a href="#">TaylorMade - Driver M2 2017 - Gaucher</a></h3>
										<p class="price">
											<ins>7,999,000<span class="symbol">đ</span></ins>
											<del>9,999,000<span class="symbol">đ</span></del>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		
		<section class="module">
			<header class="module-header">
				<h2 class="module-title">Sản phẩm đã xem</h2>
			</header>
			<div class="module-content">
				<div class="row products">
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
						<div class="inner">
							<a class="image" href="#">
								<img src="images/golf-1.jpg" alt=""/>
								<span class="btn btn-primary">Xem ngay</span>
								<span class="sale">Sale 20%</span>
							</a>
							<div class="info">
								<h3 class="name"><a href="#">TaylorMade - Driver M2 2017 - Gaucher</a></h3>
								<p class="price">
									<ins>7,999,000<span class="symbol">đ</span></ins>
									<del>9,999,000<span class="symbol">đ</span></del>
								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
						<div class="inner">
							<a class="image" href="#">
								<img src="images/golf-2.jpg" alt=""/>
								<span class="btn btn-primary">Xem ngay</span>
							</a>
							<div class="info">
								<h3 class="name"><a href="#">TaylorMade - Série de Fers M2 Graphite</a></h3>
								<p class="price">
									<ins>5,999,000<span class="symbol">đ</span></ins>
								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
						<div class="inner">
							<a class="image" href="#">
								<img src="images/golf-3.jpg" alt=""/>
								<span class="btn btn-primary">Xem ngay</span>
								<span class="sale">Sale 30%</span>
							</a>
							<div class="info">
								<h3 class="name"><a href="#">TaylorMade - Driver M2 2017 - Gaucher</a></h3>
								<p class="price">
									<ins>7,999,000<span class="symbol">đ</span></ins>
									<del>9,999,000<span class="symbol">đ</span></del>
								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
						<div class="inner">
							<a class="image" href="#">
								<img src="images/golf-4.jpg" alt=""/>
								<span class="btn btn-primary">Xem ngay</span>
							</a>
							<div class="info">
								<h3 class="name"><a href="#">Wilson - Driver D200 - Droitier </a></h3>
								<p class="price">
									<ins>10,999,000<span class="symbol">đ</span></ins>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- Sản phẩm đã xem -->
	</div>
	
	<<?php include("include/inc_footer.php");?>
	<a class="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
</body>


</html>