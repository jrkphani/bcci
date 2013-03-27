<!doctype html>
<html>
<head>
<link rel="icon" type="image/png" href="<?php echo base_url('assets/Images/favicon.png'); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="BCCI,Live Scores,Live,Scores,Cricket, India, News, Cricket Photos, Cricket Videos" />
<meta name="keywords" content="BCCI,Cricket Live Scores,Cricket Live,Cricket Scores,Scores Cricket,Cricket Photo, Cricket Video" />
<meta name="description" content="bcci.com is in no way or form related to The BCCI or BCCI or The Board for Control of Cricket in India and is a standalone portal for cricketing enthusiasts from the world over. We provide live scores, series fixtures, latest news feeds, articles by eminent cricket writers and articles by enthusiasts, cricket statistics, records, current rankings, opinion polls and a public message board. " />
<title>BCCI | Live Scores | Latest Cricket News </title>
<link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/mystyles.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/bcci-home.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/menu.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/hoverfx.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/hoverfx_common.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/live_score_icon.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/country_flag.css'); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.lightbox-0.5.css'); ?>" media="screen" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.fancybox.css'); ?>" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url('assets/css/Ads.css'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/countdown.css'); ?>" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.8.3.min.js'); ?>"></script>
<script type="text/javascript">
  var baseurl = "<?php print base_url(); ?>";
</script>
<style>
.errorMessage, .errorMessage p
{
  color:#A82E0F;"
}
</style>
<!--[if gte IE 9]> 
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

</head>
<body>
<!-- ######## HEADER ######### -->
<div class="red-bg"></div>
<!--LOGO and SEARCH-->
<div class = "container">
  <div class = "row">
    <div class = "span3 margint20"> <a href="<?php echo base_url();?>"><div class="logo"></div></a></div>
    <div class = "span4 offset5 hidden-phone">
      <div class = "row">
       <!--  <div class = "span4 margint20"> <img class = "pull-right" src="<?php echo base_url('assets/Images/soci-icons_03.png'); ?>"> </div> -->
      </div>
      <div class = "row">
        <div class = "span4  margint20">
          <div class="input-append search-box pull-right">
            <!-- <input class="span2 search-icon" id="appendedInputButton" type="text" placeholder= "Search the site">
            <button class="btn btn-primary" type="button"><i class="icon-search icon-white"></i></button>-->
          </div>
          <div class = "clearfix"></div>
        </div>
      </div>
    </div>
     <!-- timer -->
      <div id="ipltimer" class="pull-right">
              <h4 class="titleTextCT">IPL Starts in . . .</h4>
              <span id="defaultCountdown" class="countdown"></span>
      </div>
      <!-- timer end-->
  </div>
</div>

<!--NAV MENU-->
<div class = "container">
  <div class = "row">
    <div class = "span12 margint20">
      <!--MEGA MENU
      -->

      <ul class ="menu"> 
        <li <?php if($view_page=='home') echo 'class="active"';?> ><a href="<?php echo base_url(); ?>" class="drop">Home</a></li>
        <li <?php if($view_page=='schedule') echo 'class="active"';?>><a href="<?php echo base_url('schedule'); ?>" class="drop">Schedule</a><!-- Begin Shedule columns Item -->

          <div class="dropdown_2columns"><!-- Begin 5 columns container -->
            <div class = "col_2">
              <ul id="srs_list" class="greybox">
                <!--<h2>Upcoming Series</h2>
                <li><a href="#">Sri Lanka vs Australia</a></li>
                <li><a href="#">S Africa vs Zimbabwe</a></li>
                <li><a href="#">Australia vs New Zealand</a></li>
                <li><a href="#">India vs Australia</a></li>
                <li><a href="#">Sri Lanka vs Australia</a></li>-->
              </ul>
              <div class = "hline"></div>
              <!-- <ul class="greybox">
                <li><a href="#">Fixtures</a></li>
                <li><a href="#">Series Archive</a></li>
              </ul> -->
            </div>
          </div>
        </li>
        <li <?php if($view_page=='result') echo 'class="active"';?>><a href="<?php echo base_url('result'); ?>" class="drop">Results</a></li>
        <li <?php if($view_page=='team_rank') echo 'class="active"';?>><a class="drop">Rankings</a><!-- Begin 4 columns Item -->
         <div class="dropdown_2columns">
            <div class = "col_2">
              <ul class="greybox">
                <h2>Rankings</h2>
                <li><a href="<?php echo base_url('rank/team'); ?>">Team Rankings</a></li>
                <li><a href="<?php echo base_url('rank/batting'); ?>">Batsman Rankings</a></li>
                <li><a href="<?php echo base_url('rank/bowling'); ?>">Bowler Rankings</a></li>
                <li><a href="<?php echo base_url('rank/allrounder'); ?>">All Rounder Rankings</a></li>
              </ul>
            </div>
            <!--<div class = "col_2">
              <ul class="greybox">
                <h2>Records</h2>
                <li><a href="#">Batting Record</a></li>
                <li><a href="#">Bowling Record</a></li>
                <li><a href="#">All Rounder Record</a></li>
                <li><a href="#">Other Records</a></li>
              </ul>
            </div>-->
          </div>
        </li>
        <li <?php if($view_page=='news') echo 'class="active"';?>><a href="<?php echo base_url('news'); ?>" class="drop">News</a></li>
        <li <?php if($view_page=='articles') echo 'class="active"';?>><a href="<?php echo base_url('article'); ?>" class="drop">Articles</a></li>
        <li <?php if($view_page=='photos') echo 'class="active"';?>><a href="<?php echo base_url('photos');?>" class="drop">Photos</a></li>
        <li <?php if($view_page=='videos') echo 'class="active"';?>><a href="<?php echo base_url('videos');?>" class="drop">Videos</a></li>
				<li style="display:none;" <?php if($view_page=='forum') echo 'class="active"';?>><a href="<?php echo base_url('forum'); ?>" class="drop pulsate">Forum</a></li>
        
       
         <?php if(!$session_data = $this->session->userdata('logged_in'))
        { ?>
        <li class = "dropdown menu_right" style="display:none;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-right:5px">
            	<i class = "icon-lock icon-white" style="margin-right:15px;"></i>Register
            </a>
                <div class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
                  <div class="row">
                  	<div class = "span3">
                  	<div class="padding20" style="text-align:left">
                    	<h4 style = "text-align:left">Registration</h4>
                      <div class="divider"></div>
                      <span id="error_msg1" class="errorMessage"></span>

                      <form class="form-horizontal">
                         <span>First Name: </span><input type="text" class="input-large" name="firstname" id="firstname" placeholder="First name" style="text-align:left">
                         <div class="margint10"></div>
                         <span>Last Name: </span><input type="text" class="input-large" name="lastname" id="lastname" placeholder="Last name" style="text-align:left">
                         <div class="margint10"></div>
                         <span>E-Mail: </span><input type="text" class="input-large" name="email_address" id="inputEmail" placeholder="Email" style="text-align:left">
                         <div class="margint10"></div>
                         <span>Password: </span><input type="password" class="input-large" name="pass_word" id="inputPassword" placeholder="Password" style="text-align:left">
                         <div class="margint20"></div>
                         <a class="btn btn-primary span1 pull-right marginb15" id="signupsubmit">Register</a>
                  		</form>
                      
                    </div>
                  </div>
                  </div>
                </div>
          </li>
          <?php } ?>
        
        
         <?php if($session_data = $this->session->userdata('logged_in'))
        { ?>
        <li class = "menu_right dropdown" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-right:5px">
           <i class = "icon-user icon-white" style="margin-right:15px;"></i><?php echo $session_data['firstname']; ?>
          </a>
          <!-- 
          <div class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
           <div class="row">
              <div class = "span2">
                <div class="padding20" style="text-align:left">
-->                <ul class="dropdown-menu pull-right profile-dropdown">
                    <li><a tabindex="-1" href="#">Profile</a></li>
                    <li><a tabindex="-1" href="#">Settings</a></li>
                    <li><a tabindex="-1" href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
                  </ul>
<!--                </div>
              </div>
            </div>
         </div>
         --> 
        </li>
        
         <?php }
				else
				{ ?>
        <li class = "menu_right dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-right:5px">
         	 <i class = "icon-user icon-white" style="margin-right:15px;"></i>Login
          </a>
          <div class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
            <div class="row">
              <div class = "span3">
                <div class="padding20" style="text-align:left">
                	
                  <h4 style = "text-align:left">Login</h4>
                  <div class="divider"></div><span id="error_msg" class="errorMessage"></span>
                  <form class="form-horizontal">
                  	<span class="login">UserName: </span><input type="text" class="input-large login" placeholder="Email" id="username" name="username" style="text-align:left">
                    <div class="margint10"></div>
                    <span class="login">Password: </span><input type="password" class="input-large login" placeholder="Password" id="passowrd" name="password">
                    <input type="text"  class="forget input-large margint20" placeholder="Email" id="fusername" name="fusername" style="display:none;">
                    <span id="forget" class="pull-right margint10 login" >Forgot Password?</span>
                    <span id="login" class="pull-right margint10 forget" style="display:none;">Back to login</span>
                    <div class="margint20"></div>
                         <a class="btn btn-primary span1 pull-right marginb15 margint10 login" id="loginsubmit">Login</a>
                         <a class="btn btn-primary span1 pull-left marginb15 margint10 forget" id="forgetsubmit" style="display:none;">Submit</a>
                  </form>                  
                  
                </div>
              </div>
            </div>
          </div>
        </li>
        <?php } ?>
      </ul>
  </div>
</div>
</div>