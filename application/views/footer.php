<!--footer -->
	<footer class="py-lg-5 py-3" style="background-color: #1a0008;">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top-w3layouts">
				<div class="col-lg-4 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Get in touch</h3>
					</div>
					<div class="contact-info">
						<h4>Location :</h4>
						<p>0926k 4th block building, king Avenue, New York City.</p>
						<div class="phone">
							<h4>Contact :</h4>
							<p>Phone : +234 818 358 0564</p>
							<p>Email :
								<a href="mailto:info@example.com">erehka.spice@gmail.com</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Quick Links</h3>
					</div>
					<ul class="links">
						<li>
							<a href="index.html">Return Policy</a>
						</li>
						<li>
							<a href="about.html">About ESC</a>
						</li>
						<li>
							<a href="404.html">FAQ</a>
						</li>
						<li>
							<a href="shop.html">Size Chart</a>
						</li>
						<li>
							<a href="contact.html">Contact Us</a>
						</li>
						<li>
							<a href="contact.html">Shipping and Delivery</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-4 footer-grid-w3ls">
					<div class="footer-title">
						<h3>About Us</h3>
					</div>
					<div class="footer-text">
						<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at
							tellus. Nulla porttitor accumsana tincidunt.</p>
						<ul class="footer-social text-left mt-lg-4 mt-3">

							<li class="mx-2">
								<a href="#">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="https://instagram.com/erehkaspiceclothing?utm_source=ig_profile_share&igshid=15o80umhq8bjq">
									<span class="fab fa-instagram"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-whatsapp"></span>
								</a>
							</li>
							<!-- <li class="mx-2">
								<a href="#">
									<span class="fas fa-rss"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-vk"></span>
								</a>
							</li> -->
						</ul>
					</div>
				</div>

					<!-- /Sign up for offers -->
				<!-- <div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Sign up for your offers</h3>
					</div>
					<div class="footer-text">
						<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
						<form action="#" method="post">
							<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
							<button class="btn1">
								<i class="far fa-envelope" aria-hidden="true"></i>
							</button>
							<div class="clearfix"> </div>
						</form>
					</div>
				</div> -->
					<!-- /Sign up for offers -->

			</div>
			<div class="copyright-w3layouts mt-4">
				<p class="copy-right text-center ">&copy; 2018 Erekha Spice Clothing. All Rights Reserved | Design by
					<a href="http://w3layouts.com/"> Ibhadogiemu </a>
				</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!--jQuery-->
	<script src="<?php echo(base_url()); ?>assets/js/jquery-2.2.3.min.js"></script>
	<!-- newsletter modal -->
	<!-- Modal -->
	<!-- Modal -->
	<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center p-5 mx-auto mw-100">
					<h6>Join our newsletter and get</h6>
					<h3>50% Off for your first Pair of Eye wear</h3>
					<div class="login newsletter">
						<form action="#" method="post">
							<div class="form-group">
								<label class="mb-2">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="" required="">
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Get 50% Off</button>
						</form>
						<p class="text-center">
							<a href="#">No thanks I want to pay full Price</a>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			$("#myModal").modal();
		});
	</script> -->
	<!-- // modal -->

	<!--search jQuery-->
	<script src="<?php echo(base_url()); ?>assets/js/modernizr-2.6.2.min.js"></script>
	<script src="<?php echo(base_url()); ?>assets/js/classie-search.js"></script>
	<script src="<?php echo(base_url()); ?>assets/js/demo1-search.js"></script>
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="<?php echo(base_url()); ?>assets/js/minicart.js"></script>
	<script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});

		// for registration
		$(document).ready(function () {
			$(".button-log1 a").click(function () {
				$(".overlay-login1").fadeToggle(200);
				$(this).toggleClass('btn-open1').toggleClass('btn-close1');
			});
		});
		$('.overlay-close2').on('click', function () {
			$(".overlay-login1").fadeToggle(200);
			$(".button-log1 a").toggleClass('btn-open1').toggleClass('btn-close1');
			open = false;
		});
		// end for registration
	</script>
	<!-- carousel -->
	<!-- Count-down -->
	<script src="<?php echo(base_url()); ?>assets/js/simplyCountdown.js"></script>
	<link href="<?php echo(base_url()); ?>assets/css/simplyCountdown.css" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>
	<!--// Count-down -->
	<script src="<?php echo(base_url()); ?>assets/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					900: {
						items: 3,
						nav: false
					},
					1000: {
						items: 4,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>

	<!-- //end-smooth-scrolling -->


	<!-- dropdown nav -->
		<!-- /shop nav bar drop down  -->
	<!-- <script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script> -->
		<!-- //shop nav bar drop down  -->
	<!-- //dropdown nav -->
  <script src="<?php echo(base_url()); ?>assets/js/move-top.js"></script>
    <script src="<?php echo(base_url()); ?>assets/js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

	<script src="<?php echo(base_url()); ?>assets/js/bootstrap.js"></script>
	<!-- js file -->
</body>

</html>