
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Search for all the Pokemon near you in real time">
	<meta property="og:description" content="Search for all the Pokemon near you in real time" />
	<meta name="keywords" content="pokesearch, pokesear.ch, pokemon, go, search, find, vision, hack, cheat, map">
    <link rel="icon" href="../../favicon.ico">

    <title>PokeSearch - Rate Limiter</title>
	<meta property="og:title" content="PokeSearch - Rate Limiter"/>
	
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
	<script src="/css/jquery-2.1.3.min.js"></script>
	<script src="/css/bootstrap.min.js"></script>
 
    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">
	<style>
	.form-group{
		display: block;
	}
	</style>
   
  </head>

<body onload="setHTTPS()">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="https://pokesear.ch">PokeSear.ch</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="https://pokesear.ch">Home</a></li>
            <li><a href="http://pokesear.ch:8080/">Map</a></li>
	    <li><a href="https://pokesear.ch/faq/">FAQ</a></li>
            <li><a href="https://pokesear.ch/contact/">Contact</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>PokeSear.ch</h1>
        <p>Search and track all of the Pokemon near you!</p>
      </div>

	
			<div class="well">
			You're scanning too often!<br>
			
			We limit requests to once every 60 seconds to help ease server stress and minimise abusers.<br>
                        Please don't abuse my resources :( <br>
			
			<button onclick="javascript:window.location.href='https://pokesear.ch'" class="btn btn-primary" type="button">Back home</button>
				
			</div>
	  

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDivi2a77Z-zLbEnETXxXBXjRl7aaSY6Og&callback=init&libraries=places"></script>
		<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
	<script type="text/javascript">
		window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":null,"theme":"dark-bottom"};
	</script>

	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
	<!-- End Cookie Consent plugin -->

	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-42328917-12', 'auto');
	ga('send', 'pageview');
	</script>


  </body>
</html>
