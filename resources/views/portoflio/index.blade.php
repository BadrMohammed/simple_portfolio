<!DOCTYPE HTML>

<html>
	<head>
		<title>{{config('app.Name','Portoflio')}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" type="text/css" >
		

		<link href="{{ URL::asset('side/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >


		<link rel="shortcut icon" type="image/x-icon" href="images/pic00.jpg" />

	
	</head>
	<body>
			
			



		

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
						<li><a href="#top">Summary</a></li>
						<li><a href="#work">Personal Information</a></li>
						<li><a href="#portfolio">Education</a></li>
						<li><a href="#contact">Work Skills</a></li>
						<li><a href="#top">Personal Skills</a></li>
						<li><a href="#work">Experince</a></li>
						<li><a href="#portfolio">Projects</a></li>
						<li><a href="#contact">Certificates</a></li>
						<li><a href="/portoflio/create">create Portfolio</a></li>

						<li><a href="logout">Log out</a></li>

					
				</ul>

			</nav>


		<!-- Home -->
			<div class="wrapper style1 first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u 12u(mobile)">
							<span class="image fit"><img src="images/pic00.jpg" alt="" /></span>
						</div>
						<div class="8u 12u(mobile)">
							<header>
								<h1>Hi. I'm <strong>{{auth::user()->name}}</strong></h1>
							</header>
							<p>And this is <strong>Miniport</strong>, a free, fully responsive HTML5 site template designed by <a href="http://twitter.com/ajlkn">AJ</a> for <a href="http://html5up.net">HTML5 UP</a> &amp; released under the <a href="http://html5up.net/license">CCA license</a>.</p>
							<a href="#work" class="button big scrolly">Learn about what I do</a>
						</div>
					</div>
				</article>
			</div>

		<!-- Work -->
			<div class="wrapper style2">
				<article id="work">
					<header>
						<h2>Here's all the stuff I do.</h2>
						<p>Odio turpis amet sed consequat eget posuere consequat.</p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-comments-o"></span>
									<h3>Consequat lorem</h3>
									<p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-camera-retro"></span>
									<h3>Lorem dolor tempus</h3>
									<p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
								</section>
							</div>
							<div class="4u 12u(mobile)">
								<section class="box style1">
									<span class="icon featured fa-thumbs-o-up"></span>
									<h3>Feugiat posuere</h3>
									<p>Ornare nulla proin odio consequat sapien vestibulum ipsum primis sed amet consequat lorem dolore.</p>
								</section>
							</div>
						</div>
					</div>
					<footer>
						<p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
						<a href="#portfolio" class="button big scrolly">See some of my recent work</a>
					</footer>
				</article>
			</div>

		<!-- Portfolio -->
			<div class="wrapper style3">
				<article id="portfolio">
					<header>
						<h2>Here’s some stuff I made recently.</h2>
						<p>Proin odio consequat  sapien vestibulum consequat lorem dolore feugiat lorem ipsum dolore.</p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
									<h3><a href="#">Magna feugiat</a></h3>
									<p>Ornare nulla proin odio consequat.</p>
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
									<h3><a href="#">Veroeros primis</a></h3>
									<p>Ornare nulla proin odio consequat.</p>
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
									<h3><a href="#">Lorem ipsum</a></h3>
									<p>Ornare nulla proin odio consequat.</p>
								</article>
							</div>
						</div>
						<div class="row">
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
									<h3><a href="#">Tempus dolore</a></h3>
									<p>Ornare nulla proin odio consequat.</p>
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
									<h3><a href="#">Feugiat aliquam</a></h3>
									<p>Ornare nulla proin odio consequat.</p>
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style2">
									<a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
									<h3><a href="#">Sed amet ornare</a></h3>
									<p>Ornare nulla proin odio consequat.</p>
								</article>
							</div>
						</div>
					</div>
					<footer>
						<p>Lorem ipsum dolor sit sapien vestibulum ipsum primis?</p>
						<a href="#contact" class="button big scrolly">Get in touch with me</a>
					</footer>
				</article>
			</div>

		<!-- Contact -->
			<div class="wrapper style4">
				<article id="contact" class="container 75%">
					<header>
						<h2>Have me make stuff for you.</h2>
						<p>Ornare nulla proin odio consequat sapien vestibulum ipsum sed lorem.</p>
					</header>
					<div>
						<div class="row">
							<div class="12u">
								<form method="post" action="#">
									<div>
										<div class="row">
											<div class="6u 12u(mobile)">
												<input type="text" name="name" id="name" placeholder="Name" />
											</div>
											<div class="6u 12u(mobile)">
												<input type="text" name="email" id="email" placeholder="Email" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="text" name="subject" id="subject" placeholder="Subject" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="row 200%">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Send Message" /></li>
													<li><input type="reset" value="Clear Form" class="alt" /></li>
												</ul>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<hr />
								<h3>Find me on ...</h3>
								<ul class="social">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
									<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
									<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
								
								</ul>
								<hr />
							</div>
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; Untitled. All rights reserved.</li><li>By: <a href="https://www.linkedin.com/in/badr-mohamed-521bb4145/">Badr Mohammed</a></li>
						</ul>
					</footer>
				</article>
			</div>

		<!-- Scripts -->
            <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/skel.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/skel-viewport.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

			<script>
					$("#menu-toggle").click(function(e) {
					  e.preventDefault();
					  $("#wrapper").toggleClass("toggled");
					});
				  </script>
	</body>
</html>