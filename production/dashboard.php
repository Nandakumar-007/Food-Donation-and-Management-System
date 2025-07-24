<?php


include("auth.php"); //include auth.php file on all secure pages ?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Food</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	  <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    
  </head>

  <body class="nav-md">
  <?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['p1'])){
        // removes backslashes
	$p1 = stripslashes($_REQUEST['p1']);
        //escapes special characters in a string
	$p1 = mysqli_real_escape_string($con,$p1); 
	$p2 = stripslashes($_REQUEST['p2']);
	$p2 = mysqli_real_escape_string($con,$p2);
	
	$p3 = stripslashes($_REQUEST['p3']);
	$p3 = mysqli_real_escape_string($con,$p3);
	$p4 = stripslashes($_REQUEST['p4']);
	$p4 = mysqli_real_escape_string($con,$p4);
	$p5 = stripslashes($_REQUEST['p5']);
	$p5 = mysqli_real_escape_string($con,$p5);
	$p6 = stripslashes($_REQUEST['p6']);
	$p6 = mysqli_real_escape_string($con,$p6);
	$p7 = stripslashes($_REQUEST['p7']);
	$p7 = mysqli_real_escape_string($con,$p7);

  $p8 = stripslashes($_REQUEST['p8']);
	$p8 = mysqli_real_escape_string($con,$p8);
	$p9 = stripslashes($_REQUEST['p9']);
	$p9 = mysqli_real_escape_string($con,$p9);

        $query = "INSERT into `complaint` (cid,username,name,phone,address,cd,sd,image,latitude,longitude)
VALUES ('','$p1','$p2','$p3', '$p4','$p5','$p6','$p7','$p8','$p9')";
        $result = mysqli_query($con,$query);
        if($result){
           ?>
		<script type="text/javascript">
            window.alert("successfully Updated");
            window.location="dashboard.php";
            </script>
			<?php 
        }
    }
?>

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"> <span>Online Food </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              
              <div class="profile_info">
                <span>Welcome,</span>
				
                <h2> <?php echo $_SESSION['username']; ?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a href="dashboard.php"><i class="fa fa-home"></i> Home </a>
				  <li><a><i class="fa fa-bar-chart-o"></i>Track Request </span></a>
                    <ul class="nav child_menu">
                    <li><a href="viewtrack.php">Track Request</a></li>
                      <li><a href="viewtrack1.php">Track accepted Request</a></li>
                      <li><a href="viewtrack2.php">Track history</a></li>
                    </ul>
                  </li>
                 
                  </li>
				  

				  <li><a href="feedback.php"><i class="fa fa-table"></i> Report / Feedback </a>
                   
                  </li>   
                </ul>
              </div>
            

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
             
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <?php echo $_SESSION['username']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

               
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Enter User Food details</h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="p1" readonly value="<?php echo $_SESSION['username']; ?>"required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name">Your Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="p2" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name">Phone Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="last-name" name="p3" minlength="10" maxlength="10" pattern="[0-9]{10}" required="required" class="form-control col-md-7 col-xs-12"/>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Address  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" id="locationField">
                          <textarea name="p4"  id="autocomplete" placeholder="Enter your address"
             onFocus="geolocate()" type="textrequired="required" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>
			
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Food Details</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="p5"class="form-control col-md-7 col-xs-12" type="text" />
                        </div>
                      </div>
					
					   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Quantity</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="p6" class="form-control col-md-7 col-xs-12"  >
                            <option value="null">Select Quantity</option>
                            <option value="Less">Less</option>
                            <option value="Medium">Medium</option>
                            <option value="Large"> Large </option>
                            
                            
                          </select>
                        </div>
						     </div>
                    <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="p7"class="form-control col-md-7 col-xs-12" type="file" />
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Latitude</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="p8"class="form-control col-md-7 col-xs-12" type="text" required="required" />
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Longitude</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="p9"class="form-control col-md-7 col-xs-12" type="text" required="required" />
                        </div>
                      </div>
					  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <center>
						  <button class="btn btn-warning" type="reset">Reset</button>
						   <input class="btn btn-success" name="submit" type="submit"  value="Submit" /></center>
                        
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
	      
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">

          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
