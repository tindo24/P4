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
     #content1{
    margin: 0 auto;
    width: auto;
   background-color: #E7DFC9;
   list-style:none

}
    	table {
       width: auto;
       border-collapse: collapse;
}
table td {
       border: thin solid black;
}

#content2  {
    position: absolute;
    top: 0px;
    right: 0px;
}
    </style>
   
<!-- java script for tabs-->
<link href="css/tabs/jquery-ui.css" rel="stylesheet">



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
                    	<div id= "content1">
                        <h1>Staff and Teachers </h1>
                        <p>List of teachers currently in school.</p>
                        
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                        
                        <table style="width:70%">
  <tr>
    <th>First Name</th>
    <th>Last Name</th>		
    <th>Subject</th>
    <th>Years In School</th>
  </tr>
  <tr>
    <td>Francis</td>
    <td>Jackson</td>		
    <td>Maths</td>
    <td>3</td>
  </tr>
  <tr>
    <td>Patrick</td>
    <td>Onyango</td>		
    <td>Chemistry</td>
    <td>2</td>
  </tr>
  <tr>
    <td>James</td>
    <td>Wanyama</td>		
    <td>Biology</td>
     <td>5</td>
  </tr>
  <tr>
    <td>Michael</td>
    <td>Wafula</td>		
    <td>History</td>
     <td>7</td>
  </tr>
  <tr>
    <td>Stephen</td>
    <td>Ombere</td>		
    <td>Chemistry</td>
     <td>3</td>
  </tr>
  <tr>
    <td>Rachelle</td>
    <td>Wambalaba</td>		
    <td>Geography</td>
     <td>5</td>
  </tr>
  <tr>
    <td>Kamau</td>
    <td>Njoroge</td>		
    <td>Chemistry</td>
     <td>6</td>
  </tr>
  <tr>
    <td>Philip</td>
    <td>Otieno</td>		
    <td>Kiswahili</td>
     <td>1</td>
  </tr>
  <tr>
    <td>Wafula</td>
    <td>Wanyonyi</td>		
    <td>CRE</td>
     <td>4</td>
  </tr>
</table>
 <!-- add accordion-->
 
 
<!-- Tabs -->
<h2 class="demoHeaders">Tabs</h2>
<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Principal Info</a></li>
		<li><a href="#tabs-2">Custodians</a></li>
		<li><a href="#tabs-3">Administrators</a></li>
	</ul>
	<div id="tabs-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
	<div id="tabs-2">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.</div>
	<div id="tabs-3">Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.</div>
</div>
    
   <script src="js/jquery.js"></script> 
  <script src="js/jtabs/jquery-ui.min.js"></script>  
   <script>


$( "#tabs" ).tabs();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>


  
    </div>          
     
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    

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
