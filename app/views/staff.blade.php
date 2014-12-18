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
    </style>
   
<!-- java script for accordion-->

<link rel="stylesheet"
          href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/hot-sneaks/jquery-ui.css"
          type="text/css" media="all" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"
            type="text/javascript"></script>
    <script
            src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"
            type="text/javascript"></script>
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
    <div id= "accordion">

<script type="text/javascript">
        $(function() {
            $( "#accordion" ).accordion();
        });
    </script>
<h2>About Me</h2>
      <div>
<p>  I'm a data analyst by profession. My interest are in
    <li>Business Intelligence</li>
    <li>Data analytics </li>
    <li>big data.</li>
</p>
    <p>We  just moved to Boston in August. I'm looking into applying for a masters in Information Management in the spring semester. I enjoy playing basketball and Biking.
    One of my goals is to run the Boston Marathon in the next two years.</p></div>
<h2>Why I'm taking this course ?</h2>
    <div><p> I have interest in web programming and web development.
    I'm hoping to gain a deeper understanding of the MVC framework in relation to PHP </p></div>


<h2>Previous Experience with Programming</h2>
    <div><p>Microsoft VB. <br> Microsoft SQL Server  </p></div>

    <h2>Computer that I'm working on</h2>

    <div> <p>Mac</p></div>

</div>
   
  
    </div>          
     
                        
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
