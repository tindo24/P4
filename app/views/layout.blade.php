<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chebosi High School</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <!-- slidorion css-->
   
     <link rel="stylesheet" href="css/slidorion.css" />
     

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	 @if(Session::get('flash_message'))
        <div class='flash-message'>{{ Session::get('flash_message') }}</div>
    @endif

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Links to the School
                    </a>
                </li>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/facility">School Facilities</a>
                </li>
                <li>
                    <a href="/staff">Current Staff</a>
                </li>
                <li>
                    <a href="/alumni">Alumnni Portal</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Programs</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Welcome To Chebosi High School</h1>
                        <p> Keep track of you forme class mates and whats happening curently in chebosi</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
             
             
             <!-- sidorion test ground-->
      <div id="slidorion" class="slidorion">

		<div class="slider">
			<div class="slide"><img src="images/boxing.jpg"/></div>
			<div class="slide"><img src="images/athletics.jpg"/></div>
			<div class="slide"><img src="images/basketball.jpg"/></div>
			<div class="slide"><img src="images/athletics.jpg"/></div>
		</div>

		<div class="accordion">
			<div class="header">Muhammad Ali</div>
			<div class="content">
				<p>Muhammad Ali (born Cassius Marcellus Clay, Jr.) is an American former professional boxer, philanthropist and social activist. Nicknamed "The Greatest", and widely considered the best heavyweight of all-time, Ali was involved in several historic boxing matches.</p>
				<p>Ali become the first and only three-time lineal World Heavyweight Champion.</p>
			</div>
			<div class="header">Usain Bolt</div>
			<div class="content">
				<p>Usain Bolt is a Jamaican sprinter widely regarded as the fastest person ever. He is the first man to hold both the 100 and 200 metres world records since automatic time measurements became mandatory in 1977.</p>
				<p>His achievements have earned him the media nickname "Lightning Bolt", and awards including the IAAF World Athlete of the Year and Track &amp; Field Athlete of the Year</p>
			</div>
			<div class="header">Michael Jordan</div>
			<div class="content">
				<p>Michael Jeffrey Jordan (MJ), is an American former professional basketball player, entrepreneur, and majority owner and chairman of the Charlotte Bobcats.</p>
				<p>MJ's individual accolades and accomplishments include five MVP awards, fourteen NBA All-Star Game appearances and many more. He was inducted into the Basketball Hall of Fame in 2009.</p>
			</div>
			<div class="header">MT Kenya wildlife pool</div>
			<div class="content">
			<p> Enjoy swimming at the peak of mount kenya.
				
			</div>
		</div>
	</div>

	<div id="container" style="text-align:center">
		<h3></h3>
	</div>

	<script src="http://slidorion.com/dist/jquery.min.js"></script>
	<script src="http://slidorion.com/js/jquery.easing.js"></script>
    <script src="http://slidorion.com/dist/jquery.slidorion.min.js"></script>

    <script>
	$(function() {
		$('#slidorion').slidorion({
			interval: 5000,
			effect: 'random'
		});
	});
	</script>
             
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
