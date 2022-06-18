
@extends('layouts.master')



@section('pagetitle','Chilo -درباره ما')



	<section class="page">
		<!-- ***** Page Top Start ***** -->

@section('head')
<h1> درباره ما</h1>

        @endsection

        @section('text')

                <li class="active">درباره ما</li>

        @endsection
		<!-- ***** Page Top End ***** -->

		<!-- ***** Page Content Start ***** -->
        @section('content')
		<div class="page-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="about">
							<div class="row">
								<div class="col-lg-6 col-md-12 col-sm-12 align-self-center">
									<div class="about-image">
										<img src="images/1_3.jpg" alt>
										<a href="#" class="play">
											<i class="fa fa-play"></i>
										</a>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
									<h2>درباره شرکت ما</h2>
									<h3>ارائه دهنده خدمات طراحی و توسعه وب</h3>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز است.</p>
									<div class="count">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12">
												<strong>96</strong>
												<span>کاربر فعال</span>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12">
												<strong>190</strong>
												<span>گروه فعال</span>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12">
												<strong>12</strong>
												<span>کارمند فعال</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ***** Page Content End ***** -->
	</section>


	<!-- ***** Parallax Start ***** -->
@include('layouts.particals.Parallax')
	<!-- ***** Parallax End ***** -->


	<!-- ***** Features Small Start ***** -->
	<section class="section about-fix" id="features">
		<div class="container">
			<div class="row">
				<!-- ***** Features Small Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
					<div class="features-small-item">
						<div class="icon">
							<i class="fa fa-flag-o"></i>
						</div>
						<h5 class="features-title">ماموریت ما</h5>
						<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
						<a href="#" class="dark-btn">ادامه مطلب</a>
					</div>
				</div>
				<!-- ***** Features Small Item End ***** -->

				<!-- ***** Features Small Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
					<div class="features-small-item">
						<div class="icon">
							<i class="fa fa-paper-plane-o"></i>
						</div>
						<h5 class="features-title">درباره ما</h5>
						<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
						<a href="#" class="dark-btn">ادامه مطلب</a>
					</div>
				</div>
				<!-- ***** Features Small Item End ***** -->

				<!-- ***** Features Small Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
					<div class="features-small-item">
						<div class="icon">
							<i class="fa fa-crosshairs"></i>
						</div>
						<h5 class="features-title">استراتژی ما</h5>
						<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
						<a href="#" class="dark-btn">ادامه مطلب</a>
					</div>
				</div>
				<!-- ***** Features Small Item End ***** -->
			</div>

		</div>
	</section>
	<!-- ***** Features Small End ***** -->


	<!-- ***** Testimonials Start ***** -->
	<section class="section white" id="testimonials">
		<div class="container">
			<!-- ***** Section Title Start ***** -->
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">دیدگاه مشتریان</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.</p>
					</div>
				</div>
			</div>
			<!-- ***** Section Title End ***** -->

			<div class="row testimonials-wrapper">
				<!-- ***** Testimonials Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="testimonials-item">
						<div class="profile">
							<img src="images/1.jpg" alt>
						</div>
						<div class="testimonials-content">
							<h3 class="user-name">پارسا آریایی</h3>
							<span>طراح سایت</span>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
							</ul>
							<p>طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید. </p>
						</div>
					</div>
				</div>
				<!-- ***** Testimonials Item End ***** -->

				<!-- ***** Testimonials Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="testimonials-item active">
						<div class="profile">
							<img src="images/2.jpg" alt>
						</div>
						<div class="testimonials-content">
							<h3 class="user-name">باران مزدک</h3>
							<span>گرافیست</span>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
							</ul>
							<p>طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید. </p>
						</div>
					</div>
				</div>
				<!-- ***** Testimonials Item End ***** -->

				<!-- ***** Testimonials Item Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="testimonials-item">
						<div class="profile">
							<img src="images/3.jpg" alt>
						</div>
						<div class="testimonials-content">
							<h3 class="user-name">شیرین دیوان سالار</h3>
							<span>وب مستر</span>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
							</ul>
							<p>طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید. </p>
						</div>
					</div>
				</div>
				<!-- ***** Testimonials Item End ***** -->
			</div>
		</div>
	</section>
	<!-- ***** Testimonials End ***** -->

@section('Sidbar')

@endsection

	<!-- ***** Footer Start ***** -->

	<!-- ***** Footer End ***** -->



	<!-- jQuery -->

@endsection
