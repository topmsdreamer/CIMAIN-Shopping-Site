<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<body>
<header class="header">
    <?= $this->include('includes/headtop') ?>
	<div class="headmenu" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-lg-4">
					<a href="index.html" class="logo" title="PCUBE BLOG || HOME PAGE"><img src="assets/images/logo.png" alt="logo"></a>
				</div>
				<div class="col-xs-12 col-sm-9 col-lg-8 text-right">
                    <?= $this->include('includes/menu') ?>
				</div>
			</div>
		</div>
	</div>
</header>
<!--============ Sidebar ==============-->
<?= $this->include('includes/sidebar') ?>
<!--============ /Sidebar ==============-->
<!--============ Slider ============-->
<section class="inslide">
	<div class="mainslide owl-carousel">
		<div class="item">
			<img src="assets/images/1800x779.png" alt="slide1">
			<div class="carousel-caption">
				<h4>Blog Detail</h4>
				<ul>
					<li><a href="index.html" title="home | page">Home</a></li>
					<li><i class="icofont icofont-simple-right"></i></li>
					<li>Blog Detail</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!--============ /Slider ============-->
<!--============ Blog ============-->
<div class="blog blog_two">
	<div class="container">
		<div class="row">
			<!--============ Blog-Left ============-->
			<div class="col-sm-12 col-lg-12 text-left">
				<div class="white_box bloddetail">
					<div class="weekday">
						<div class="excerpt_data">
							<a href="javascript:void(0)" class="border"><img src="assets/images/800x534.png" class="img-responsive" alt="blog"></a>
							<article>
								<p class="category_name"><i class="fa fa-briefcase"></i>In <a href="javascript:void(0)"> Business</a></p>
								<p class="category_name"><i class="fa fa-user"></i>By <a href="javascript:void(0)"> dummy</a></p>
								<ul class="social">
									<li><a href="javascript:void(0)">12 April</a></li>
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
									<li><a href=""><i class="fa fa-twitter"></i></a></li>
									<li><a href=""><i class="fa fa-instagram"></i></a></li>
									<li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
									<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus"></i></a></li>
								</ul>
								<hr>
								<h6><a href="javascript:void(0)">How The Cloud Can Improve Business</a></h6>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</article>
						</div>
					</div>
					<div class="related_post margin">
						<h6 class="margin"><i class="fa fa-pencil"></i> Related Post</h6>
						<div class="owl-carousel artslide">
							<div class="item">
								<div class="weekday">
									<div class="excerpt_data">
										<a href="#"><img alt="blog" class="img-responsive" src="assets/images/800x534.png"></a>
										<h6><a href="#">How The Cloud Can Improve Business</a></h6>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="weekday">
									<div class="excerpt_data">
										<a href="#"><img alt="blog" class="img-responsive" src="assets/images/800x534.png"></a>
										<h6><a href="#">How The Cloud Can Improve Business</a></h6>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="weekday">
									<div class="excerpt_data">
										<a href="#"><img alt="blog" class="img-responsive" src="assets/images/800x534.png"></a>
										<h6><a href="#">How The Cloud Can Improve Business</a></h6>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="weekday">
									<div class="excerpt_data">
										<a href="#"><img alt="blog" class="img-responsive" src="assets/images/800x534.png"></a>
										<h6><a href="#">How The Cloud Can Improve Business</a></h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="leave">
					<h6 class="margin"><i class="fa fa-comment"></i> Leave a Reply</h6>
					<form>
						<input type="text" placeholder="Your Name*">
						<input type="email" placeholder="Your Email*">
						<input type="text" placeholder="Subject">
						<textarea rows="5" placeholder="Your Message"></textarea>
						<button class="button"><i class="fa fa-comments-o"></i> Post Comment</button>
					</form>
				</div>
			</div>
			<!--============ /Blog-Left ============-->
		</div>
	</div>
</div>
<!--============ /Blog ============-->
<!--=========== Articles ==========-->
<section class="articles">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h6><i class="fa fa-newspaper-o"></i>Most Liked Articles</h6>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="owl-carousel artslide">
					<div class="item">
						<div class="weekday">
							<div class="excerpt_data">
								<a class="border" href="#"><img alt="blog" class="img-responsive" src="assets/images/800x534.png"></a>
								<p class="category_name">In <a href=""> Business</a></p>
								<h6><a href="#">How The Cloud Can Improve Business</a></h6>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<p class="category_name">12 April | By <a href=""> dummy</a></p>
								<a class="button" href="">Read More</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="weekday">
							<div class="excerpt_data">
								<a class="border" href="#"><img alt="blog" class="img-responsive" src="assets/images/800x534.png"></a>
								<p class="category_name">In <a href=""> Business</a></p>
								<h6><a href="#">How The Cloud Can Improve Business</a></h6>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<p class="category_name">12 April | By <a href=""> dummy</a></p>
								<a class="button" href="">Read More</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="weekday">
							<div class="excerpt_data">
								<a class="border" href="#"><img alt="blog" class="img-responsive" src="assets/images/800x534.png"></a>
								<p class="category_name">In <a href=""> Business</a></p>
								<h6><a href="#">How The Cloud Can Improve Business</a></h6>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<p class="category_name">12 April | By <a href=""> dummy</a></p>
								<a class="button" href="">Read More</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="weekday">
							<div class="excerpt_data">
								<a class="border" href="#"><img alt="blog" class="img-responsive" src="assets/images/800x534.png"></a>
								<p class="category_name">In <a href=""> Business</a></p>
								<h6><a href="#">How The Cloud Can Improve Business</a></h6>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<p class="category_name">12 April | By <a href=""> dummy</a></p>
								<a class="button" href="">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--=========== /Articles ==========-->
<!--=========== Instagram ==========-->
<div class="insta">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h6><i class="fa fa-instagram"></i>Follow on Instagram</h6>
			</div>
		</div>
	</div>
	<div class="owl-carousel instaslide">
		<a class="item" href="#" target="_blank">
			<img src="assets/images/640x800.png" alt="blog">
		</a>
		<a class="item" href="#" target="_blank">
			<img src="assets/images/640x800.png" alt="blog">
		</a>
		<a class="item" href="#" target="_blank">
			<img src="assets/images/640x800.png" alt="blog">
		</a>
		<a class="item" href="#" target="_blank">
			<img src="assets/images/640x800.png" alt="blog">
		</a>
		<a class="item" href="#" target="_blank">
			<img src="assets/images/640x800.png" alt="blog">
		</a>
	</div>
</div>
<!--=========== /Instagram ==========-->
<!--=========== Footer ==========-->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<a href="index.html" title="Blog Site Template"><img src="assets/images/footlogo.png" alt="Logo"></a>
				<ul class="social">
					<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				</ul>
				<ul class="fmenu">
					<li><a href="index.html" title="Home">Home</a></li>
					<li><a href="about.html" title="About">About</a></li>
					<li><a href="all-post.html" title="Blog">Blog</a></li>
					<li><a href="spost.html" title="Features">Features</a></li>
					<li><a href="contact.html" title="Contact">Contact</a></li>
					<li><a href="#" title="Buy Theme">Buy Theme</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<p>Copyright © 2018 Pcube Blog Theme</p>
			</div>
		</div>
	</div>
</div>
<!--=========== /Footer ==========-->
<?= $this->endSection() ?>