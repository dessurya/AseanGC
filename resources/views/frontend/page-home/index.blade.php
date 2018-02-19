@extends('frontend._layout.basic')

@section('title')
	<title>ASEAN FEDERATION OF GLASS MANUFACTURERS</title>
@endsection

@section('meta')
	<meta name="title" content="">
	<meta name="description" content="">
	<meta name="keywords" content=""/>
@endsection

@section('include_css')
	<link rel="stylesheet" type="text/css" href="{{ asset('porthole.co/vendor/owl-carousel/owl.carousel.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('porthole.co/vendor/owl-carousel/owl.theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('porthole.co/vendor/owl-carousel/owl.transitions.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('porthole.co/vendor/jquery-flipster-master/jquery.flipster.min.css') }}"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

	<link rel="stylesheet" type="text/css" href="{{ asset('porthole.co/asset/css/home.css') }}">
@endsection

@section('body')
	<div id="banner">
		<div id="regis-box" class="text-center">
			<h2>"Hi There"</h2>
			<h3>You Must Register for the event</h3>
			<a class="btn blue" href="">
				Register Now
			</a>
		</div>
	</div>

	<div id="entrance">
		<img id="wave" src="{{ asset('porthole.co/picture/base/wave-one.png') }}">
		<div class="wrapper medium text-center">
			<img id="greeting" src="{{ asset('porthole.co/picture/base/logo.png') }}">
			<div id="greeting">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus commodo dui at fringilla tincidunt. Mauris orci risus, viverra at gravida hendrerit, aliquet ut sapien. Quisque augue sapien, egestas nec faucibus quis, fermentum in mauris. Nullam finibus sagittis tempus. Donec ut felis sit amet libero auctor mattis non
				</p>
			</div>

			<h3 id="schedule">
				Conference Schedule
				<div class="back-icon text-center">
					<img src="{{ asset('porthole.co/picture/base/icon.png') }}">
				</div>
			</h3>

			@for($a=0; $a<=1; $a++)
			<div class="schedule">
				@for($b=0; $b<=2; $b++)
				<div class="bar">
					<div id="content">
						<img id="icon" src="{{ asset('porthole.co/picture/base/icon.png') }}">
						<h4>Day ----</h4>
						<p>09:00</p>
						<p><strong>Grand Opening</strong></p>
						<hr>
						<p>10:30</p>
						<p><strong>Group Photo Session</strong></p>
						<hr>
						<p>11:30 - 14:00</p>
						<p><strong>Buffet Lunch</strong></p>
						<hr>
						<p>14:00 - 16:30</p>
						<p><strong>AFGM Plenary Meeting</strong></p>
						<div id="space">
							<a class="btn {{ $a == 0 ? 'green' : 'red' }}" href="">More Detail</a>
						</div>
					</div>
				</div>
				@endfor
			</div>
			@endfor
		</div>
	</div>

	<div id="time" style="background-image: url('{{ asset('porthole.co/picture/base/bg-time.png') }}');">
		<div class="wrapper medium text-center">
			<div id="content">
				<h2 id="title" class="title">STAY TUNED</h2>
				
				<div id="greeting">
					<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus commodo dui at fringilla tincidunt</strong></p>
				</div>

				<div id="count">
					<div class="shell">
						<div id="days" class="times">
							<div id="tab">
								<div id="midle">
									<h3>0</h3>
									<h4>DAYS</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="shell">
						<div id="hours" class="times">
							<div id="tab">
								<div id="midle">
									<h3>0</h3>
									<h4>HOURS</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="shell">
						<div id="minutes" class="times">
							<div id="tab">
								<div id="midle">
									<h3>0</h3>
									<h4>MINUTES</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="shell">
						<div id="seconds" class="times">
							<div id="tab">
								<div id="midle">
									<h3>0</h3>
									<h4>SECONDS</h4>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div id="faq">
		<img class="wave left" src="{{ asset('porthole.co/picture/base/wave-left.png') }}">
		<img class="wave right" src="{{ asset('porthole.co/picture/base/wave-right.png') }}">

		<div class="wrapper medium">
			<h2 class="title faq text-center">
				FAQ
				<div class="back-icon text-center">
					<img src="{{ asset('porthole.co/picture/base/icon.png') }}">
				</div>
			</h2>
			
			<div class="text-center">
				@for($a=0; $a<=3; $a++)
				<div class="bar faq">
					<h3>
						<label>
							<img src="{{ asset('porthole.co/picture/base/icon.png') }}"> Can I update my registration form ?
						</label>
					</h3>
					<p>
						You can update your registration within 24 hour, then if there is any ather change neede, please send us an email to : aseanglass41@gmail.com
					</p>
				</div>
				@endfor
			</div>

			<h3 class="note faq text-center">If you have any further question, please send us an email to : aseanglass41@gmail.com</h3>

			<h2 class="title msg text-center">
				Message
				<div class="back-icon text-center">
					<img src="{{ asset('porthole.co/picture/base/icon.png') }}">
				</div>
			</h2>

			@for($a=0; $a<=1; $a++)
			<div class="bar msg">
				<h3>Mr. Richo Agustian</h3>
				<h4>Manager Marketing</h4>
				<div id="content">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus commodo dui at fringilla tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus commodo dui at fringilla tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus commodo dui at fringilla tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus commodo dui at fringilla tincidunt. 
					</p>
				</div>
				<div class="text-center">
					<a href=""><strong>Read More</strong></a>
				</div>
			</div>
			@endfor
		</div>
	</div>

	<div id="commite">
		<img id="top" class="img" src="{{ asset('porthole.co/picture/base/bg-commite.jpg') }}">
		<img id="bottom" class="img" src="{{ asset('porthole.co/picture/base/bg-commite-bt.png') }}">
		<div class="wrapper medium">
			<h2 class="title text-center">Our Commite</h2>
			<div id="list-commite">
				<ul>
					@for($a=0; $a<=5; $a++)
					<li>
						<div class="item">
							<div class="shell text-center">
								<div class="center">
									<div class="circle" style="background-image: url('{{ asset('porthole.co/picture/banner/bann.jpg') }}');">
										<div id="bottom">
											<div id="content" class="text-center">
												<h3>Name {{ $a }}</h3>
												<h4>Advisor</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					@endfor
				</ul>
			</div>
		</div>
	</div>

	<div id="gallery">
		<img class="img" src="{{ asset('porthole.co/picture/base/bg-gallery.png') }}">
		<div class="wrapper medium">
			<h2 class="title text-center">
				Gallery
			</h2>

			<div id="list-gallery" class="list text-center">
				@for($b=0; $b<=8; $b++)
				<div class="bar">
					<a class="lightbox" href="{{ asset('porthole.co/picture/banner/bann.jpg') }}">
						<div id="content" style="background-image: url('{{ asset('porthole.co/picture/banner/bann.jpg') }}');"></div>
					</a>
				</div>
				@endfor
			</div>

			<div id="more" class="text-center">
				<a class="btn red" href="">View More</a>
			</div>
				
		</div>
	</div>

	<div id="partner">
		<div class="wrapper medium">
			<h2 class="title faq text-center">
				Our Partner
				<div class="back-icon text-center">
					<img src="{{ asset('porthole.co/picture/base/icon.png') }}">
				</div>
			</h2>

			<img id="logo" class="text-center" src="{{ asset('porthole.co/picture/base/partner-logo.png') }}">
		</div>
	</div>

@endsection

@section('include_js')
	<script type="text/javascript" src="{{ asset('porthole.co/vendor/jquery-bgswitcher/jquery.bgswitcher.js') }}"></script>
	<script type="text/javascript">
		$('#banner').bgswitcher({
			images: [
				"{{ asset('porthole.co/picture/banner/ban.jpg') }} ",
				"{{ asset('porthole.co/picture/banner/bann.jpg') }} ",
				"{{ asset('porthole.co/picture/banner/bannn.jpg') }} ",
				"{{ asset('porthole.co/picture/banner/bannnn.jpg') }} ",
				"{{ asset('porthole.co/picture/banner/bannnnn.jpg') }} ",
			],
			effect: "fade",
			interval: 3000
		});
	</script>

	<script type="text/javascript">
		// Set the date we're counting down to
		var countDownDate = new Date("November 7, 2019 10:00:00").getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

		// Get todays date and time
		var now = new Date().getTime();

		// Find the distance between now an the count down date
		var distance = countDownDate - now;

		// Time calculations for days, hours, minutes and seconds
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		// Output the result in an element with id="demo"
		$("#time #days h3").text(days);
		$("#time #hours h3").text(hours);
		$("#time #minutes h3").text(minutes);
		$("#time #seconds h3").text(seconds);

		// If the count down is over, write some text 
		if (distance < 0) {
			clearInterval(x);
			$("#time #days h3").text('0');
			$("#time #hours h3").text('0');
			$("#time #minutes h3").text('0');
			$("#time #seconds h3").text('0');
			}
		}, 1000);
	</script>

	<script type="text/javascript" src="{{ asset('porthole.co/vendor/owl-carousel/owl.carousel.min.js') }}"></script>	
	<script src="{{ asset('porthole.co/vendor/jquery-flipster-master/jquery.flipster.min.js') }}"></script>
	<script type="text/javascript">
		// flipster
			var myFlipster = $("#list-commite").flipster({
				style: 'carousel',
				keyboard: true,
				touch: true,
				loop: true,
				scrollwheel: false,
				spacing: -0.1,
				nav: false,
				autoplay: false,
				buttons:   true,
				start: 'center',
				// buttonPrev: "<img src='{{ asset('assets/images-base/chevron-left.png') }}'>",
				// buttonNext: "<img src='{{ asset('assets/images-base/chevron-right.png') }}'>",
				autoplay: 5000,
			});

			$('button.flipster__button.flipster__button--prev').html("<img src='{{ asset('porthole.co/picture/base/chevron-left.png') }}'>");
			$('button.flipster__button.flipster__button--next').html("<img src='{{ asset('porthole.co/picture/base/chevron-right.png') }}'>");

		// flipster
		// owl
			// $("#commite #list").owlCarousel({
			// 	navigation : true,
			// 	items: 3,
			// 	// itemsMobile: 1,
			// 	center: true,
			// 	loop: true,
			// 	singleItem:false,
			// 	pagination:false,
			// 	autoPlay: true,
			//     stopOnHover:false,
			//     afterAction: function(el){
			// 	//remove class active
			// 	this
			// 	.$owlItems
			// 	.removeClass('active')
			// 	//add class active
			// 	this
			// 	.$owlItems //owl internal $ object containing items
			// 	.eq(this.currentItem + 1)
			// 	.addClass('active')    
			// 	},
			// 	navigationText : [
			// 		"<img src='{{ asset('porthole.co/picture/base/chevron-left.png') }}'>",
			// 		"<img src='{{ asset('porthole.co/picture/base/chevron-right.png') }}'>"
			// 	]
			// });
		// owl
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	<script type="text/javascript">
		baguetteBox.run('#list-gallery');
	</script>
@endsection
