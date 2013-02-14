
<!--MAIN CONTENT
===================================================================  -->

<div class = "container margint10">
  <div class = "row">
    <div class = "span8 margint10">
      <div id="myCarousel" class="carousel slide" style="z-index:0">
        <!-- Carousel items -->
        <div class="carousel-inner" id="bannerslide">
          <!-- banner img from my.js-->
        </div>
        <!-- Carousel nav -->
        <!--<a class="carousel-control left" href="#myCarousel" data-slide="prev" >&lsaquo;</a> <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>--> </div>
    </div>

        <!--Live SCore-->
 <div id="liveScore" class="span4 margint10 livescore_bg">
     <div class="row-fluid">
         <div class="padding20">
          <div class="span12">
            <div id="no_matches" class="row-fluid">
             <h5 id="series_title" class="white pull-left"></h5>
              <div class="dropdown pull-right">
                <select class="dropdown-select" name="one" id="livescore_dd">
                  <!--<option class="red-btn" value="1">Live Matches</option>
                  <option value="2">Australia vs England</option>
                  <option value="2">South Africa vs Sri Lanka</option>-->
                </select>
              </div>
            </div>
            <div style="text-align:center" id="team_images" class="row-fluid margint20">
              <div class="span5"><!--TeamA-->
                <!-- <div class="team_icon">
                 <img src="Images/csk_icon.png">
                 <span id="team1_image"></span>
                </div> -->
                <h5 id="team1" class="team_name"></h5>
                <h4 id="team1_score" class="yellow"></h4>
                <h5 id="team1_over" class="white"></h5>
              </div>
              <div class="span2">
               <h3 style="margin-top:42px" class="white">vs</h3>
               </div>
              <div class="span5"><!--TeamB-->
              <!-- <div class="team_icon">
                 <img src="Images/MI_icon.png">
                 <span id="team2_image"></span>
                </div> -->
                <h5 id="team2" class="team_name"></h5>
                <h4 id="team2_score" class="yellow yellow-dull"></h4>
                <h5 id="team2_over" class="white"></h5>
              </div>
              <div style="text-align:left" class="span12"><!--Required Runs-->
                  <h6 class="yellow"><!--<span id="status">CSK Needs 46 Runs to win</span>-->
                  <span id="rrr" class="marginl20 yellow"></span>
                   <span id="crr" class="marginl20 yellow"></span>
                  </h6>
              </div>
            </div>
            <div style="text-align:center" class="row-fluid margint10" id="playerstate"><!--Player Stats-->
              <div style="border-right:1px dotted #b33310; padding-right:20px" class="span6">
                <h5 id="striker" class="white team_name"></h5><!--Player-->
                <h5 id="striker_run" class="yellow"></h5><!--Player Score-->
                <!--Stats-->

                <div class="row-fluid">
                  <div class="span4">
                    <h6 class="yellow"></h6>
                    <h6 class="white"></h6>
                  </div>
                  <div class="span4">
                    <h6 class="yellow">s/r</h6>
                    <h6 id="striker_sr" class="white"></h6>
                  </div>
                  <div class="span4">
                    <h6 class="yellow"></h6>
                    <h6 class="white"></h6>
                  </div>

                </div>

            </div>
              <div class="span6">
                <h5 id="nonStriker" class="white team_name"></h5><!--Player-->
                <h5 id="nonStriker_run" class="yellow"></h5><!--Player Score-->

                <div class="row-fluid">
                  <div class="span4">
                    <h6 class="yellow"></h6>
                    <h6 class="white"></h6>
                  </div>
                  <div class="span4">
                    <h6 class="yellow">s/r</h6>
                    <h6 id="nonStriker_sr" class="white"></h6>
                  </div>
                  <div class="span4">
                    <h6 class="yellow"></h6>
                    <h6 class="white"></h6>
                  </div>

                </div>

            </div>
             <div class="span12 margint10">
                <!--<h6 class="yellow"><strong>This Over:</strong> 0 1 4 3 1 <span class="marginl20"><strong>Extras:</strong> 6</span></h6>-->
              </div>
          </div>
          <span id="matchstate"></span>
            <div class="row-fluid" id="bowlerstate"><!--Bowling-->
              <div class="span6">
                  <h6 id="strikerbowler" class="yellow"></h6>
                  <!--<h6 class="white">6 Runs this over</h6>-->
                </div>
              <div class="span1"><!--Overs-->
                  <h6 class="yellow">O</h6>
                  <h6 id="strikerbowler_overs" class="white"></h6>
              </div>
              <div class="span1"><!--Maidens-->
                  <h6 class="yellow">M</h6>
                  <h6 id="strikerbowler_maidens" class="white"></h6>
              </div>
              <div class="span1"><!--Runs-->
                  <h6 class="yellow">R</h6>
                  <h6 id="strikerbowler_runs" class="white"></h6>
              </div>
              <div class="span1"><!--Wickets-->
                  <h6 class="yellow">W</h6>
                  <h6 id="strikerbowler_wickets" class="white"></h6>
              </div>
              <!--<div class="span2"><!--Wickets-->
              <!--    <h6 class="yellow">Econ</h6>
                  <h6 class="white">3.27</h6>
              </div>-->
              <div style="text-align:center" class="span12"><!--Wickets-->
                  <h5 class="yellow"><span id="strikers_lname"></span></h5>
              </div>
            </div>
          </div>
         </div>
     </div>
</div>



  <div class = "row">
    <div class = "span12 margint20">
    <!--  <p><strong>Trending :</strong> PepsiCo bags title sponsorship for IPL  |  IPL franchises announce initial squads  |  KKR v CSK Videos  |  Pathan Interview</p> -->
    </div>
  </div>

  <!--Shadow FX-->
  <div class = "row">
    <div class = "shadowfx"> </div>
  </div>

  <!-- Matches Tab-->
  <div class = "row">
    <div class = "span8 margint20">
      <div class = "tab-box-wrapper">
        <ul id="matchestab" class="nav nav-tabs tabs-box gradient">
          <li><a href="#pastMatches" data-toggle="tab">Past Matches</a></li>
          <li class="active"><a href="#presentMatches" data-toggle="tab">Present Matches</a></li>
          <li><a href="#upcomingMatches" data-toggle="tab">Upcoming Matches</a></li>
          <div class="btn-group pull-right red-button">
            <button class="btn red-btn">Schedule</button>
            <button class="btn dropdown-toggle red-btn" data-toggle="dropdown"> <span class="caret"></span> </button>
            <ul class="dropdown-menu red-dropdown">
              <li><a href = "#">Present Matches</a></li>
              <li><a href = "#">Past Matches</a></li>
              <li><a href = "#">Upcoming Matches</a></li>
              <li><a href = "#">Fixtures</a></li>
              <li><a href = "#">Series Archive</a></li>
            </ul>
          </div>
          <div class = "clearfix"></div>
        </ul>
        <!--Matches Tabs COntent-->
        <div id="matchestabContent" class="tab-content" style="height: 280px;">
          <div class="tab-pane fade" id="pastMatches">
            <!--Past matches Table-->
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Match</th>
                  <th>Date & Time</th>
                  <th>Venue</th>
                </tr>
              </thead>
              <tbody>
				  <?php
				  if(count($content['past']))
				  {
                    foreach($content['past'] as $row)
                     {
                    ?>
                <tr>
                    <td><?php echo $row->description; ?></td>
                    <td><p><?php echo $row->date; ?></p></td>
                     <td><?php echo $row->mt_vnu; ?></td>
                </tr>
                 <?php
                     }
				 }
                     ?>
              </tbody>
            </table>
          </div>
          <div class="tab-pane fade in active" id="presentMatches">
            <!--Present matches Table-->
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Match</th>
                  <th>Date & Time</th>
                  <th>Venue</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if(count($content['present']))
				  {
               foreach($content['present'] as $row)
                 {
				?>
					<tr>
                    <td><?php echo $row->description; ?></td>
					<td><p><?php echo $row->date; ?></p></td>
					<td><?php echo $row->mt_vnu; ?></td>
					</tr>
					<?php
				}
			}
				?>
              </tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="upcomingMatches">
            <!--Upcoming matches Table-->
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Match</th>
                  <th>Date & Time</th>
                  <th>Venue</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if(count($content['upcoming']))
                {
                  foreach($content['upcoming'] as $row)
                   {
                   ?>
                  <tr>
                     <td><?php echo $row->description; ?></td>
                     <td><p><?php echo $row->date; ?></p></td>
                     <td><?php echo $row->mt_vnu; ?></td>
                  </tr>
                  <?php
                   }
			   }
                  ?>
                </tbody>
            </table>
            <p class="pull-right"><a href="schedule" class="btn btn-primary">View more</a></p>
          </div>
        </div>
      </div>
    </div>

    <!--Results On the right-->
    <div class = "span4 margint20">
      <div class = "white-block">
        <div class = "heading">
          <h4>Results
          <div class="dropdown">
            <select id="resultmenu" name="one" class="dropdown-select">
              <option value="ODI" class="red-btn">ODI Matches</option>
              <option value="T20">T20 Matches</option>
              <option value="Test">Test Matches</option>
            </select>
          </div>
               <a href = "#">
            <div class = "list-box pull-right"></div>
            </a> </h4>
        </div>
        <div class="accordion" id="accordion2">
			<!--Result list from my.js-->
      </div>
    </div>
  </div>

  <!--Match Shedule and Results-->
  <div class = "row">
    <div class = "span8 margint20">
      <ul id="newstab" class="nav nav-tabs tabs-line">
        <li class="active"><a href="#featuredNews" data-toggle="tab">Featured News</a></li>
        <li><a href="#recentNews" data-toggle="tab">Recent News</a></li>
      </ul>
      <div id="newstabContent" class="tab-content">
        <div class="tab-pane fade in active" id="featuredNews">
			<!-- news from my.js-->
        </div>
        <div class="tab-pane fade" id="recentNews">
        	<div id="recentNewscont" class = "row-fluid">
            <!--recent news from my.js-->
           </div>
           <p class="pull-right"><a href="/news" class="btn btn-primary">View all</a></p>
        </div>
      </div>
    </div>
    <!-------News Tab------->

    <div class = "span4 margint20">
      <div class = "grey-block">
        <p>ADS</p>
      </div>
    </div>
    <!-------Ads------------>
  </div>
  <!------News and Ads---------->

  <div class = "row">
    <div class = "span12 margint20">
      <ul id="rankrecordtab" class="nav nav-tabs tabs-line">
        <li class="active"><a href="#ranking" data-toggle="tab">Rankings</a></li>
       <!-- <li><a href="#records" data-toggle="tab">Records</a></li>-->
      </ul>
      <div id="rankrecordtabContent" class="tab-content">
        <div class="tab-pane fade in active" id="ranking">
          <div class = "span11">
            <div class="tabbable tabs-left">
              <ul id="ranktab" class="nav nav-tabs tabs-line-left">
                <li class="active"><a href="#team" data-toggle="tab">Team</a></li>
                <li><a href="#batsman" data-toggle="tab">Batsman</a></li>
                <li><a href="#bowler" data-toggle="tab">Bowler</a></li>
                <li><a href="#allRounder" data-toggle="tab">All Rounder</a></li>
              </ul>
              <div id="ranktabContent" class="tab-content">
                <div class="tab-pane fade in active" id="team">
                  <div class="row-fluid rankings" id = "rankings">
                  	<div class = "span4">
                        <ul style="list-style:none" id="team-ranking">
                        	<!-- from my.js-->
                        </ul>
                        <!-- <div class = "pull-right"><a href="#">View All</a></div> -->
                    </div>
                    <div class = "span4">
                        <ul style="list-style:none" id="team-ranking01">
                        	<!-- from my.js-->
                        </ul>
                        <!-- <div class = "pull-right"><a href="#">View All</a></div> -->
                    </div>
                    <div class = "span4">
                        <ul style="list-style:none" id="team-ranking02">
                        	<!-- from my.js-->
                        </ul>
                        <!-- <div class = "pull-right"><a href="#">View All</a></div> -->
                    </div>
                  </div>

                </div>
                <div class="tab-pane fade" id="batsman">
                	<div class="row-fluid rankings" id = "rankings">
                  	<div class = "span4">
                        <ul style="list-style:none" id="batsman-ranking">
                        	<!-- from my.js-->
                        </ul>
                        <!-- <div class = "pull-right"><a href="#">View All</a></div> -->
                    </div>
                    <div class = "span4">
                        <ul style="list-style:none" id="batsman-ranking01">
                        	<!-- from my.js-->
                        </ul>
                        <!-- <div class = "pull-right"><a href="#">View All</a></div> -->
                    </div>
                    <div class = "span4">
                        <ul style="list-style:none" id="batsman-ranking02">
                        	<!-- from my.js-->
                        </ul>
                       <!--  <div class = "pull-right"><a href="#">View All</a></div> -->
                    </div>
                  </div>
                 </div>
                <div class="tab-pane fade" id="bowler">
                	<div class="row-fluid rankings" id = "rankings">
                  	<div class = "span4">
                        <ul style="list-style:none" id="bowler-ranking">
                        	<!-- from my.js-->
                        </ul>
                       <!--  <div class = "pull-right"><a href="#">View All</a></div> -->
                    </div>
                    <div class = "span4">
                        <ul style="list-style:none" id="bowler-ranking01">
                        	<!-- from my.js-->
                        </ul>
                        <!-- <div class = "pull-right"><a href="#">View All</a></div> -->
                    </div>
                    <div class = "span4">
                        <ul style="list-style:none" id="bowler-ranking02">
                        <!-- from my.js-->
                        </ul>
                        <!-- <div class = "pull-right"><a href="#">View All</a></div> -->
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="allRounder">
                	<div class="row-fluid rankings" id = "rankings">
                  	<div class = "span4">
                        <ul style="list-style:none" id="allrounder-ranking">
                        	<!-- from my.js-->
                        </ul>
                        <!-- <div class = "pull-right"><a href="#">View All</a></div> -->
                    </div>
                    <div class = "span4">
                        <ul style="list-style:none" id="allrounder-ranking01">
                        	<!-- from my.js-->
                        </ul>
                        <!-- <div class = "pull-right"><a href="#">View All</a></div> -->
                    </div>
                    <div class = "span4">
                        <ul style="list-style:none" id="allrounder-ranking02">
                        	<!-- from my.js-->
                        </ul>
                        <!-- <div class = "pull-right"><a href="#">View All</a></div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--<div class="tab-pane fade" id="records">
          <div class = "span10">
            <div class="tabbable tabs-left">
              <ul id="recordtab" class="nav nav-tabs tabs-line-left">
                <li class="active"><a href="#batting" data-toggle="tab">Batting</a></li>
                <li><a href="#bowling" data-toggle="tab">Bowling</a></li>
                <li><a href="#otherRecords" data-toggle="tab">Other Records</a></li>
              </ul>
              <div id="recordtabContent" class="tab-content">
                <div class="tab-pane fade in active" id="batting"> Batting Records </div>
                <div class="tab-pane fade" id="bowling"> Bowling Records </div>
                <div class="tab-pane fade" id="otherRecords"> Other Records </div>
              </div>
            </div>
          </div>
        </div>-->
      </div>
    </div>
  </div>

  <div class = "row">
    <div class = "span8">
      <div class = "row">
        <div class = "span8 margint20 marginb20">
          <!----Photos and Videos Tab---->
          <ul id = "gallerytab" class = "nav nav-tabs tabs-line">
            <li class = "active"><a href ="#photos" data-toggle = "tab">Photos</a></li>
            <li><a href ="#videos" data-toggle = "tab">Videos</a></li>
          </ul>
          <div id = "gallerytabContent" class = "tab-content">
            <div class = "tab-pane fade in active" id = "photos">
              <div class = "row">
                <div class = "span8">
                    <div class="main" id="photosgrid">
                 <!-- from my.js-->
					</div>
                </div>
                <div class = "span pull-right margint10">
                	<!-- <a href = "#" class="btn btn-primary">View All</a> -->
                </div>
              </div>
            </div>
            <div class = "tab-pane fade" id = "videos">
              <div class = "row">
                <div class = "span8">
                  <div class="main" id="videosgrid">
                 <!-- from my.js-->
					</div>
                </div>
                <div class = "span pull-right margint10">
                	<!-- <a href = "#" class="btn btn-primary">View All</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class = "span8 marginb20 news-thumb">
			 <ul id="articles" class="nav nav-tabs tabs-line">
        <li class="active"><a href="#featuredArticles" data-toggle="tab">Featured Articles</a></li>
        <li><a href="#recentArticles" data-toggle="tab">Recent Articles</a></li>
      </ul>
      <div id="articlestabContent" class="tab-content">
        <div class="tab-pane fade in active" id="featuredArticles">
          <div class = "row-fluid">
            <div class = "span12 news-thumb">
              <p id="farticle">

              </p>
              <div class="pull-right"> <a id="farticlerm" href="#" class="btn btn-primary">Read More</a> </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="recentArticles">
        	<div class = "row-fluid" id="rarticles">

           </div>
           <div class = "span pull-right margint10">
                	<a href = "/article" class="btn btn-primary">View All</a>
                </div>
        </div>
      </div>

        </div>
      </div>
    </div>

<!--     <div class = "span4 margint20">
      <div class = "content-block">
        <div id="sidebar" class="sidebar-nav">
        </div>
        <div class = "content-box">
          <div class = "page-header">
            <h3>Articles Archive</h3>
          </div>
        </div>
        <div class = "content-box">
          <div class = "page-header">
            <h3>Ads</h3>
          </div>
        </div>
      </div>
    </div> -->
  </div>

</div>
</div>
    <script src="<?php echo base_url('assets/js/my.js');?>"></script>
</div>
