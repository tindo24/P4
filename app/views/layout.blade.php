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
    width: 94.4%;
   background-color: #E7DFC9;
   list-style:none

}
.Newsfeed{
	
	margin-right: 1em;
	margin-left: 1em;
}

h3{
	background-color: #E17128;
	color:white;
}


#content2  {
    position: absolute;
    top: 0px;
    right: 0px;
}
    
    ></style>
    
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
                    <a href="/login">
                      Login
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
                    	<div id="content1">
                    		
                        <h1>Welcome To Chebosi High School</h1>
                        <p> Keep track of you forme class mates and whats happening curently in chebosi</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Hide the  Menu</a>
                      <p>
                      	
                      </p>
                      
                        <p>
                        	
                        	<img src="images/chebosi.jpg" title="Chebosi High School">
                        	
                        	<div class="Newsfeed">
                        	<h3>About Chebosi</h3>
                        	<p>Chebosi High  school is  situated in Vihiga county along Kakamega Kisumu road. Started in the early 1950s the school continued to narture students that have gone to play a major role in the development of our country and the world at large. Under the leadership if Mr. Indimuli Kahi, we've grown to
                        		 be a leader in Kenya both academically and in sports, drama, music and other extra curriculum activities.</p>
                        		
                        		
                        	</div>
                        	<div class="Newsfeed">
                        	<h3>Enrollment</h3>
                        	<p>The school is a six streamed school in form one to four, a total of 24 classes. With the Ministry's
                        		 stipulated enrolment of 45 students per class, the total student population should therefore be 1080</p>
                        		
                        	 <p>However the present population is slightly higher at 1198 due to high demand. The school admits children from various religious and ethnic groups after
                        		 	 an eight-year primary cycle ending with the Kenya Certificate of Primary Education (KCPE) examination.</p>
                        	<p>Most of the students came from within and around Municipality. The school is a day school with a private boarding
                        		 wing catering for very few students and there is need for expansion.</p>
                        		
                        		
                        	</div>
                        	<div class="Newsfeed">
                        	<h3>Establishment</h3>
                        	<p>The total establishment is 106.There are 64 teachers and 30 auxiliary staff. 
                        		Only three of the sixty four teachers stay within the compound. All the teachers are Kenyan Nationals.</p>
                        		
                        		
                        	</div>
                        
                        	
                        </p>
                        </div>
                        
                    </div>
                </div>
            </div>
             
             <p></p><br/>
             <!-- sidorion test ground-->
      
				
			</div>
		</div>
	</div>

	<div id="container" style="text-align:center">
		<h3></h3>
	</div>

	<script src="http://slidorion.com/dist/jquery.min.js"></script>
	<script src="http://slidorion.com/js/jquery.easing.js"></script>
    <script src="http://slidorion.com/dist/jquery.slidorion.min.js"></script>

    <!--slidorion query -->
    <script>
    $(document).ready(function(){
	$('#slidorion').slidorion({
		speed: 1000,
		interval: 4000,
		effect: 'slideLeft'
	});
});
    </script>
    
    
   <script>
 function
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
