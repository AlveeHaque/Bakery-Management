<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{asset('frontend/img/favicon.png')}}" type="image/png">
	<title>Chocolates & Sweets</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/css/lightgallery.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/nice-select/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/animate-css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/popup/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/swiper/css/swiper.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/scroll/jquery.mCustomScrollbar.css')}}">
	  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

	<!-- main css -->
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="/">
						<img class="logo-1" src="{{asset('frontend/img/logo.png')}}" alt="">
						<img class="logo-2" src="{{asset('frontend/img/logo-2.png')}}" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="/">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="/about-us">About</a></li>
							<li class="nav-item"><a class="nav-link" href="/fast-food">Fast Food</a></li>
							<li class="nav-item"><a class="nav-link" href="/cakes">Cake</a></li>
							<li class="nav-item active"><a class="nav-link" href="/chocolates&sweets">Chocolates & Sweets</a></li>
							<li class="nav-item"><a class="nav-link" href="/cart">Cart</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================ Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h1>Chocolates and Sweets</h1>
					<div class="page_link">
						<a href="/">Home</a>
						<a href="/fast-food">Chocolates and Sweets</a>
					</div>
				</div>
			</div>
			<div class="shape shape1"></div>
			<div class="shape shape2"></div>
			<div class="shape shape3"></div>
			<div class="shape shape4"></div>
			<div class="shape shape5"></div>
			<div class="shape shape6"></div>
			<div class="shape shape7"></div>
		</div>
	</section>
	<!--================End Banner Area =================-->

	<!--================ Menu Area =================-->
	<section class="menu_area white">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title position-relative">
						<h1>Our Favourite Menu</h1>
						<hr>
						<div class="round-planet planet">
							<div class="round-planet planet2">
								<div class="shape shape1"></div>
								<div class="shape shape2"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Chocolates and Sweets</h4>
                  <p class="card-category">Menu</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>

                        <th>
                          Name
                        </th>
                        <th>
                          Price
                        </th>
                        <th>
                          Quantity
                        </th>
                        <th>
                          Image
                        </th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                      	@foreach($sweets as $key=>$sweet)
                      	<tr>
                          <td>{{ $key+1 }}</td>
                      		<td>{{$sweet->Sweet_name}}</td>
                      		<td>{{$sweet->Price}}</td>
                            <td>{{$sweet->Quantity}}</td>
                      		<td><img class="img-responsive img-thumbnail" src="{{asset('uploads/sweet/'. $sweet->image)}}" style="height:100px; width:100px"></td>
                          <td>
                              <a href="{{ route('sweet.edit',$sweet->id) }}" class="btn btn-info btn-big"><i class="material-icons">add_shopping_cart</i></a>
                      	</tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
		</div>
	</section>
	<!--================End Menu Area =================-->

	<!--================Book Table Area =================-->

	<!--================End Book Table Area =================-->

	<!--================ start footer Area  =================-->
	<footer class="footer-area p_120">
		<div class="container">
			<div class="row">
				<div class="col-lg-2  col-md-6 col-sm-6">
					<div class="single-footer-widget tp_widgets">
						<h6 class="footer_title">Top Products</h6>
						<ul class="list">
							<li>
								<a href="#">Managed Website</a>
							</li>
							<li>
								<a href="#">Manage Reputation</a>
							</li>
							<li>
								<a href="#">Power Tools</a>
							</li>
							<li>
								<a href="#">Marketing Service</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2  col-md-6 col-sm-6">
					<div class="single-footer-widget tp_widgets">
						<h6 class="footer_title">Quick Links</h6>
						<ul class="list">
							<li>
								<a href="#">Jobs</a>
							</li>
							<li>
								<a href="#">Brand Assets</a>
							</li>
							<li>
								<a href="#">Investor Relations</a>
							</li>
							<li>
								<a href="#">Terms of Service</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2  col-md-6 col-sm-6">
					<div class="single-footer-widget tp_widgets">
						<h6 class="footer_title">Features</h6>
						<ul class="list">
							<li>
								<a href="#">Jobs</a>
							</li>
							<li>
								<a href="#">Brand Assets</a>
							</li>
							<li>
								<a href="#">Investor Relations</a>
							</li>
							<li>
								<a href="#">Terms of Service</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2  col-md-6 col-sm-6">
					<div class="single-footer-widget tp_widgets">
						<h6 class="footer_title">Resources</h6>
						<ul class="list">
							<li>
								<a href="#">Guides</a>
							</li>
							<li>
								<a href="#">Research</a>
							</li>
							<li>
								<a href="#">Experts</a>
							</li>
							<li>
								<a href="#">Agencies</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<aside class="f_widget news_widget">
						<div class="f_title">
							<h3 class="footer_title">Newsletter</h3>
						</div>
						<p>Stay updated with our latest trends</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<button class="btn sub-btn">
										<span class="lnr lnr-arrow-right"></span>
									</button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</aside>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
				<div class="col-lg-4 col-md-4 footer-social">
					<a href="#">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="#">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="#">
						<i class="fa fa-dribbble"></i>
					</a>
					<a href="#">
						<i class="fa fa-behance"></i>
					</a>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->





	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('frontend/js/popper.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/stellar.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.lightbox.js')}}"></script>
	<script src="{{asset('frontend/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/isotope/isotope-min.js')}}"></script>
	<script src="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/counter-up/jquery.counterup.js')}}"></script>
	<script src="{{asset('frontend/js/mail-script.js')}}"></script>
	<script src="{{asset('frontend/vendors/popup/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/swiper/js/swiper.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/scroll/jquery.mCustomScrollbar.js')}}"></script>
	<script src="{{asset('frontend/js/theme.js')}}"></script>
</body>

</html>