
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Blank :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{URL :: asset ('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{URL :: asset ('css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{URL :: asset ('css/font-awesome.css')}}" rel="stylesheet"> 
<script src="{{URL :: asset ('js/jquery.min.js')}}"> </script>
<script src="{{URL :: asset ('js/bootstrap.min.js')}}"> </script>
  
<!-- Mainly scripts -->
<script src="{{URL :: asset ('js/jquery.metisMenu.js')}}"></script>
<script src="{{URL :: asset ('js/jquery.slimscroll.min.js')}}"></script>
<!-- Custom and plugin javascript -->
<link href="{{URL :: asset ('css/custom.css')}}" rel="stylesheet">
<script src="{{URL :: asset ('js/custom.js')}}"></script>
<script src="{{URL :: asset ('js/screenfull.js')}}"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>



</head>
<body>
<div id="wrapper">
       <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> 
               <h1> <a class="navbar-brand" href="index.html">Esdeath.co</a></h1>         
			   </div>
@include('admin.section.header')
			<div class="clearfix">
       
     </div>
	  @include('admin.section.sidebar')		    
        </nav>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Blank</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@include('template.utils.notif')
			</div>
		</div>
	</div>
	@yield('content')
	      
	        </div>
	       </div>
	<!--//faq-->
		<!---->
@include('admin.section.footer')
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

