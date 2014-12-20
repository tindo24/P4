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
    <style>
    	
    	#content2  {
    position: absolute;
    top: 0px;
    right: 0px;
}
    </style>

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
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id='content2'>
                	 <p><a href="/login">
                      Login
                    </a><a href="/logout">
                      Logout
                    </a>	</p>
                	</div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Alumni Registration</h1>
                        <p>Please enter information if you want to keep intouch.</p>
                        <!--<p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>-->
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                        <p></p>
                        {{ Form::model($alumni, array('route' => array('alumnieditcommit', $alumni->id))) }}


    							 First Name<br>
    							{{ Form::text('firstname') }}<br><br>
    							Last Name<br>
    							{{ Form::text('lastname') }}<br><br>
    							Graduation Year<br>
    							{{ Form::text('graduation_year') }}<br><br>
    							 Contact Email<br>
    							{{ Form::text('contact_email') }}<br><br>
    							
   						 		{{ Form::submit('Submit') }}

								{{ Form::close() }}
								
                    </div>
                </div>
            </div>
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
