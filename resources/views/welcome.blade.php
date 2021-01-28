<!DOCTYPE HTML>

<html>
	<head>
		<title>{{config('app.Name','Portoflio')}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="{{ URL::asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" >


		<noscript>
			<link href="{{ URL::asset('assets/css/noscript.css') }}" rel="stylesheet" type="text/css" >
		</noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<span class="avatar"><img src="images/avatar.jpg" alt="" /></span>
							<h1>Curriculum Vitae</h1>
							<p>Create your Own Portoflio</p>
						</header>
				
						<hr />
						<h2>Extra Stuff!</h2>
						<div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <a type="button" href="\login" class="btn btn-primary">
                                    Sign In |
								</a>
								
								<a type="button" href="\register" class="btn btn-primary">
                                    Sign Up 
								</a>
                                
                            </div>
                        </div>
						<hr />
					
						<footer>
							<ul class="icons">
								<li><a href="#" class="fa-twitter">Twitter</a></li>
								<li><a href="#" class="fa-instagram">Instagram</a></li>
								<li><a href="#" class="fa-facebook">Facebook</a></li>
							</ul>
						</footer>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Badr Mohammed</li>
						</ul>
					</footer>

			</div>

	
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html>