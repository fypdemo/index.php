<?php
	$conn=mysqli_connect('localhost','root','','studyspace');
?>	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootshop online Shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="../themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="../themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="../themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="../themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="../themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="../text/css" id="enject"></style>
  </head>
<body>
<!-- Header End====================================================================== -->
<div id="mainBody">
<div class="container">
<header>
	<div class="container">
	<!-- Navbar
    ================================================== -->
<section id="navbar">
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><a href="#">Dashboard</a></li>
            <li><a href="topic.php">Upload Videos</a></li>
            <li><a href="sub_topic.php">Upload Sub Topics</a></li>    
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
</section>
    </div>	 
	</header>
<section id="form">
  <div class="page-header">
    <h3>Course Details</h3>
  </div>
  <div class="row-fluid">
    <div class="span6">
		<form class="well form-inline" method="post" action="">
		    <div class="control-group">
            <label class="control-label" for="input12">Apptitude Test Name</label>
            <div class="controls">
              <input type="text" name="app_name" class="input-medium" placeholder="Enter apptitude test name" id="input12" >
            </div>
          </div>
		  <div class="control-group">
            <label class="control-label" for="input12">University Name</label>
            <div class="controls">
              <input type="text" name="uni_name" class="input-medium" placeholder="University name" id="input12" >
            </div>
          </div>
		  <div class="control-group">
            <label class="control-label" for="input12">University Image</label>
            <div class="controls">
              <input type="text" name="uni_image" class="input-medium" placeholder="University image" id="input12"
			  >
            </div>
          </div>
		  <div class="control-group">
            <label class="control-label" for="input12">University Description</label>
            <div class="controls">
              <textarea  cols="4" name="uni_des" rows="2"class="input-medium" placeholder="University descriptio"></textarea>
            </div>
			</div>
			<div class="control-group">
            <label class="control-label" for="input12">Course Name</label>
            <div class="controls">
              <input type="text" name="c_name" class="input-medium" placeholder="Enter course name" id="input12">
            </div>
          </div>	
		  <div class="control-group">
            <label class="control-label" for="input12">Course Image</label>
            <div class="controls">
              <input type="text" name="c_image" class="input-medium" placeholder="Enter course image name" id="input12" >
            </div>
          </div>
		   <div class="control-group">
            <label class="control-label" for="input12">Course Duration</label>
            <div class="controls">
                      <input type="text" name="c_duration" class="input-medium" placeholder="Enter course duration" id="input12">
            </div>
          </div>
		  <div class="control-group">
            <label class="control-label" for="input12">Course Description</label>
            <div class="controls">
              <textarea  cols="4" name="c_des" rows="2"class="input-medium" placeholder="Enter course image name"></textarea>
            </div>
          </div>
		   <div class="control-group">
            <div class="controls">
              <input type="submit" name="submit" class="input-medium" id="input12">
            </div>
          </div>
		</form>       
          </div>
	</div>
  </div><!--/row-->
</section>
</div>
</div>
</div>
<?php
 if(isset($_POST['submit']))
{
	$cat_name=$conn->real_escape_string($_POST['app_name']);
	$uni_name=$conn->real_escape_string($_POST['uni_name']);
	$uni_image=$conn->real_escape_string($_POST['uni_image']);
	$uni_des=$conn->real_escape_string($_POST['uni_des']);
	$c_name=$conn->real_escape_string($_POST['c_name']);
	$c_image=$conn->real_escape_string($_POST['c_image']);
	$c_duration=$conn->real_escape_string($_POST['c_duration']);
	$c_des=$conn->real_escape_string($_POST['c_des']);
	$reg="/[A-Z][a-zA-Z][^#&<>\"~;$^%{}?()[0-9]{1,30}$/";
        if(empty($cat_name) or empty($uni_name) or empty($uni_image) or empty($uni_des) or empty($c_name) or empty($c_image) or empty($c_duration) or empty($c_des))
		{
	     	echo "<script>alert('ALL (*) feilds are Required')</script>";   
	    }
		  elseif(!preg_match($reg,$cat_name))
		  {
			echo "Apptitude test name start with capital letters";
		  }
		  elseif(!preg_match($reg,$uni_name))
		  {
			echo "Uiversity name start with capital letter";
		  }
		  elseif(!preg_match($reg,$uni_image))
		  {
			 echo "University image name start with capital letter";
		  }
		  elseif(!preg_match($reg,$uni_des))
		  {
			echo "Description start with capital letter";
		  }
		  elseif(!preg_match($reg,$c_name))
		  {
			echo "Course start with capital letter";
		  }
		  elseif(!preg_match($reg,$c_image))
		  {
			echo "Course image name start with capital letter";
		  }
		  elseif(!preg_match($reg,$c_des))
		  {
			echo "Course description start with capital letter";
		  }
		 else	
			{
			$que="INSERT INTO `category`(`category_id`, `category_name`) VALUES ('','$cat_name')";
			$run = mysqli_query($conn,$que);
			if($run)
			{
				$id= $conn->insert_id;
		
					$subque="INSERT INTO `sub_category`(`sub_category_id`, `sub_category_name`, `sub_category_image`, `sub_category_description`, `category_id`) VALUES ('','$uni_name','$uni_image','$uni_des','$id')";
					$runs = mysqli_query($conn,$subque);
					
				if($runs)
				{
					$s_id = $conn->insert_id;
					$cque="INSERT INTO `course`(`c_id`, `c_name`, `c_duration`, `c_image_name`, `c_description`, `sub_category_id`) VALUES ('','$c_name','$c_duration','$c_image','$c_des','$s_id')"; 
				if($conn->multi_query($cque))
					echo "Record save";
				else
					echo "Details saved to failed";  
			}
				else 
				 echo "sub_category details saved to failed"; 
			}
			else
			{
				echo "category details saved to failed";
			}
		}
}
?>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<a href="login.html">YOUR ACCOUNT</a>
				<a href="login.html">PERSONAL INFORMATION</a> 
				<a href="login.html">ADDRESSES</a> 
				<a href="login.html">DISCOUNT</a>  
				<a href="login.html">ORDER HISTORY</a>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.html">CONTACT</a>  
				<a href="register.html">REGISTRATION</a>  
				<a href="legal_notice.html">LEGAL NOTICE</a>  
				<a href="tac.html">TERMS AND CONDITIONS</a> 
				<a href="faq.html">FAQ</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="special_offer.html">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
				<a href="#">SUPPLIERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="../themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="../themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="../themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; Bootshop</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="../themes/js/jquery.js" type="text/javascript"></script>
	<script src="../themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../themes/js/google-code-prettify/prettify.js"></script>	
	<script src="../themes/js/bootshop.js"></script>
    <script src="../themes/js/jquery.lightbox-0.5.js"></script>	
</body>
</html>
