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
    	table {
       width: 100%;
       border-collapse: collapse;
}
table td {
       border: thin solid black;
}
    </style>
   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- building javascript for tabls-->
   

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
                        <h1>Staff and Teachers </h1>
                        <p> Keep track of you forme class mates and whats happening curently in chebosi</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                        
                        <table style="width:70%">
  <tr>
    <th>first Name</th>
    <th>Last Name</th>		
    <th>Subject</th>
  </tr>
  <tr>
    <td>Francis</td>
    <td>Jackson</td>		
    <td>Maths</td>
  </tr>
  <tr>
    <td>Patrick</td>
    <td>Onyango</td>		
    <td>Chemistry</td>
  </tr>
  <tr>
    <td>James</td>
    <td>Wanyama</td>		
    <td>Biology</td>
  </tr>
  <tr>
    <td>Michael</td>
    <td>Wafula</td>		
    <td>History</td>
  </tr>
  <tr>
    <td>Stephen</td>
    <td>Ombere</td>		
    <td>Chemistry</td>
  </tr>
  <tr>
    <td>Rachelle</td>
    <td>Wambalaba</td>		
    <td>Geography</td>
  </tr>
  <tr>
    <td>Patrick</td>
    <td>Onyango</td>		
    <td>Chemistry</td>
  </tr>
  <tr>
    <td>Patrick</td>
    <td>Onyango</td>		
    <td>Chemistry</td>
  </tr>
  <tr>
    <td>Patrick</td>
    <td>Onyango</td>		
    <td>Chemistry</td>
  </tr>
</table>

             
     
                        
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
