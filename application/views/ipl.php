<link href="<?php echo base_url('assets/css/bcci-ipl.css'); ?>" rel="stylesheet" type="text/css">
<header>
	<div class="container ipl-header" >
		<div class="row">
			<div class="span3 ipl-logo">
				<!--<div class="ipl-logo-inner1">
					<a href="http://bcci.com/"><div class="ipl-logo1"></div></a>
				</div>-->
				<div class="ipl-logo-inner2">
					<a href="http://bcci.com/"><div class="ipl-logo2"></div></a>
				</div>
				
			</div>
			<div class="span6 ipl-scoreboard" id="liveScore">
				<div >
					<h4 class="ipl-matchState" id="ipl_matchstate"></h4>
				</div>
				<div class="row-fluid ipl-sb-team">
					
						<div class="row-fluid"> 
						<div class="span5">
							<div class="span6 ipl-sb-flag">
								<div >
									<h3 id="ipl_team1" class="centerFix">CSK</h3>
								</div>
								 
								<div id="ipl_team1_image" class="ipl-CSK clearBoth centerFix leftFix">
								</div>
							</div>
							<div class="span6 ipl-sb-score">
								
									<h3 id="ipl_team1_score">128/4</h3>
									<h4 id="ipl_team1_over">15.1 Overs</h4>
									<div class="ipl-sb-rr">
									<h5 id="rrr">Req. RR:</h5>	
									<h5 id="crr">Cur. RR:</h5>	
									</div>
							</div>
						</div>
						<div class="span7">
							<div class="span6 ipl-sb-striker ">
								<div class="ipl-batsman">

								</div>
								<div class="ipl-sb-inner">
									<h3 id="ipl_striker">MS DHONI</h3>
									<h4 id="ipl_striker_run">46(25)</h4>
									<div CLASS="ipl-sb-striker-SET">
										<!-- <div class="ipl-sb-striker-inner">
											<h5>4s</h5>	
											
											<h6>5</h6>
										</div>
										<div class="ipl-sb-striker-inner">
											<h5>6s</h5>
											
											<h6>2</h6>
										</div> -->
										<div class="ipl-sb-striker-inner">
											 <h5>s/r</h5>
											 
											<h6 id="ipl_striker_sr">48.21</h6>
										</div>
									</div>
								</div>
									
							</div>
							<div class="span6 ipl-sb-runner">
								<div class="ipl-runner">

								</div>
								<div class="ipl-sb-inner">
									<h3 id="ipl_nonStriker">MS DHONI</h3>
									<h4 id="ipl_nonStriker_run">46(25)</h4>
									<div CLASS="ipl-sb-striker-SET">
										<!-- <div class="ipl-sb-striker-inner">
											<h5>4s</h5>	
											
											<h6>5</h6>
										</div>
										<div class="ipl-sb-striker-inner">
											<h5>6s</h5>
											
											<h6>2</h6>
										</div> -->
										<div class="ipl-sb-striker-inner">
											 <h5>s/r</h5>
											 
											<h6 id="ipl_striker_sr">48.21</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						</div>
					
				</div>
				
				<div class="row-fluid ipl-sb-team2">
					
						<div class="span5">
							<div class="span6 ipl-sb-flag">
								<p style="margin-top:-25px; color:#f4f4f4; background-color:#282828; width:20px; height:20px; margin-left:44px;">Vs</p>
								<h3 id="ipl_team2" class="centerFix">MI</h3>
								<div id="ipl_team2_image" class="ipl-MI clearBoth centerFix leftFix">
								</div>

							</div>
							<div class="span6 ipl-sb-score top40">
									<h3 id="ipl_team2_score">128/4</h3>
									<h4 id="ipl_team2_over">15.1 Overs</h4>
							</div>
						</div>
						<div class="span7">
							<div class="span4 ipl-sb-striker">
									<div class="ipl-bowler">

								</div>
								<div class="ipl-sb-inner-bowler">
									<h3 id="ipl_strikerbowler">TENDULKAR</h3>
									<h4>46(25)</h4>
									
								</div>
							</div>
							<div class="span8 ipl-sb-bowler">
									<div CLASS="ipl-sb-bowler-SET" >
									<div class="ipl-sb-bowler-inner" >
										<h5>O</h5>	
										
										<h6 id="ipl_strikerbowler_overs">2</h6>
									</div>
									<div class="ipl-sb-bowler-inner">
										<h5>M</h5>
										
										<h6 id="ipl_strikerbowler_maidens">0</h6>
									</div>
									<div class="ipl-sb-bowler-inner">
										 <h5>R</h5>
										 
										<h6 id="ipl_strikerbowler_runs">25</h6>
									</div>
									<div class="ipl-sb-bowler-inner">
										 <h5>W</h5>
										 
										<h6 id="ipl_strikerbowler_wickets">1</h6>
									</div>
									</div>
									<div class="clearBoth ipl-bowler-lname">
										<h5 id="strikers_lname"></h5>		
									</div>
							</div>
							
						</div>
					
			</div>
			</div>
			<div class="span3 ipl-header3">
				<div class="ipl-pts">
					<table border="1">
					<thead>
						<tr>
						<th>Team</th>
						<th>Pld</th>
						<th>NRR</th>
						<th>Pts</th>
					</tr>
					</thead>
					<tbody>
				<?php
				$pointCount=1;
				foreach($points as $single_point)
				{ 
					if($pointCount==1)
					{
						$pointCount=0;
						$pointClass="ipl-table-c1";
					}
					else
					{
						$pointCount=1;
						$pointClass="ipl-table-c2";
					}
					?>
					<tr class="<?=$pointClass?>">
						<td><?php echo $single_point->abbreviation; ?></td>
						<td><?php echo $single_point->played; ?></td>
						<td><?php echo $single_point->netRunRate; ?></td>
						<td><?php echo $single_point->points; ?></td>					
					</tr>
				<? }
							?>
				</tbody>
					<!-- <tr class="ipl-table-c2">
						<td>DD</td>
						<td>0</td>
						<td>+0.0000</td>
						<td>0</td>					
					</tr>
					<tr class="ipl-table-c1">
						<td>KKR</td>
						<td>0</td>
						<td>+0.0000</td>
						<td>0</td>					
					</tr>
					<tr class="ipl-table-c2">
						<td>KXIP</td>
						<td>0</td>
						<td>+0.0000</td>
						<td>0</td>					
					</tr>
					<tr class="ipl-table-c1">
						<td>MI</td>
						<td>0</td>
						<td>+0.0000</td>
						<td>0</td>					
					</tr>
					<tr class="ipl-table-c2">
						<td>PWI</td>
						<td>0</td>
						<td>+0.0000</td>
						<td>0</td>					
					</tr>
					<tr class="ipl-table-c1">
						<td>PCB</td>
						<td>0</td>
						<td>+0.0000</td>
						<td>0</td>					
					</tr>
					<tr class="ipl-table-c2">
						<td>RR</td>
						<td>0</td>
						<td>+0.0000</td>
						<td>0</td>					
					</tr>
					<tr class="ipl-table-c1">
						<td>SH</td>
						<td>0</td>
						<td>+0.0000</td>
						<td>0</td>					
					</tr> -->
					</table>
					<a href="<?=base_url('ipl/points')?>">View full table</a>
				</div>

				<ul class="ipl-teams">
					<li style="height:200px; width:20px; float:left; ">
						<div class="ipl-arrow">

						</div>
					</li>
					<?php
							foreach($points as $single_point)
							{
								echo "<li class='ipl-".$single_point->abbreviation." floatLeft'>";
								echo "<div class='ipl-teams-badge'>";
								echo "<p>".$single_point->points."</p>";
								echo "</div>";
								echo "</li>";
								/*echo "<div> fullName: ".$single_point->fullName."</div>";
								echo "<div> abbreviation: ".$single_point->abbreviation."</div>";
								echo "<div> primaryColor: ".$single_point->primaryColor."</div>";
								echo "<div> points: ".$single_point->points."</div>";
								echo "<div> played: ".$single_point->played."</div>";
								echo "<div> position: ".$single_point->position."</div>";
								echo "<div> netRunRate: ".$single_point->netRunRate."</div>";
								echo "<div> won: ".$single_point->won."</div>";
								echo "<div> lost: ".$single_point->lost."</div>";
								echo "<div> tied: ".$single_point->tied."</div>";
								echo "<div> noResult: ".$single_point->noResult."</div>";*/
								
							}
							?>
					
					<!-- <li class="ipl-csk">
						<div class="ipl-teams-badge">
							<p>1</p>
						</div>
					</li>
					<li class="ipl-kkr">
						<div class="ipl-teams-badge">
							<p>2</p>
						</div>
					</li>
					<li class="ipl-rcb">
						<div class="ipl-teams-badge">
							<p>3</p>
						</div>
					</li>
					<li class="ipl-mi">
						<div class="ipl-teams-badge">
							<p>4</p>
						</div>
					</li>
					<li class="ipl-dd">
						<div class="ipl-teams-badge">
							<p>5</p>
						</div>
					</li>
					<li class="ipl-kxip">
						<div class="ipl-teams-badge">
							<p>6</p>
						</div>
					</li>
					<li class="ipl-pwi">
						<div class="ipl-teams-badge">
							<p>7</p>
						</div>
					</li>
					<li class="ipl-rr">
						<div class="ipl-teams-badge">
							<p>8</p>
						</div>
					</li>
					<li class="ipl-sh">
						<div class="ipl-teams-badge">
							<p>9</p>
						</div>
					</li> -->
				</ul>

			</div>
		</div>
	</div>

</header>	 
<div class="container">
	<!--======================================================ADs=======================-->
<div class="row-fluid">
	<div class="span8 ipl-ads">
	</div>
	<div class="span4 ipl-ads">
	</div>
</div>
	<!--=====================================================Content=======================-->
	<div class="row-fluid ipl-content">
		<div class="span7">
			<div class="span4 ipl-cards3">
				<!--=============================================================Forums=======================-->
				<div class="ipl-cards-title ipl-forums">
					<h3>IPL Forums</h3>
				</div>
				<div class="ipl-cards-content ">
					<div class="ipl-cards3-inner">
						<div class="bg-red">

						</div>
					</div>
					
					<div class="ipl-forumIntro">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut bibendum nisi. Donec a tristique dolor.</p>
					</div>
					
					
					<button class="ipl-button2">Join the forums</button>
				</div>
				<div class="ipl-forums-footer">
					<a href="<?=base_url('forum')?>"><div class="ipl-forums-arrow"></div></a>
				</div>
			</div>
			
			<div class="span4 ipl-cards2">
				<!--=============================================================Schedule=======================-->
				<div class="ipl-cards-title ipl-schedule">
					<h3>IPL Schedule</h3>
				</div>
						<?php
						$scheduleCount=1;
							foreach($schedule['upcoming'] as $single_schedule)
							{
								if($scheduleCount==1)
									{
										$scheduleCount=0;
										$scheduleDisplay="";
										$scheduleId="ipl-schedule-front";
									}
									else
									{
										$scheduleDisplay="none";
										$scheduleCount=1;
										$scheduleId="ipl-schedule-back";
									}
								echo "<div class='ipl-cards-content' id='".$scheduleId."' style='display:".$scheduleDisplay."'>";
								echo "<div class='bg-orange'></div>";
								echo "<div class='ipl-cards-content-inner '>";
								echo "<div class='ipl-schedule-title'>";
								$description= explode(',',$single_schedule->description);
								$teams=explode('vs',$description[0]);
								echo "<h4>".$description[1]."</h4></div>";
								echo "<div class='ipl-schedule-content'>";
								echo "<div class='ipl-".trim($teams[0])." floatLeft ipl-schedule-50'></div>";
								echo "<p>Vs</p>";
								echo "<div class='ipl-".trim($teams[1])." floatLeft ipl-schedule-50'></div></div>";

								echo "<div class='ipl-schedule-match'>";
								echo "<p>Kolkata Knight Riders <br/>Vs <br/>Delhi Daredevils</p></div>";
								echo "<div class='ipl-schedule-venue'>";
								echo "<p>".$single_schedule->sdate." <br/>".$single_schedule->time."<br/>".$single_schedule->mt_vnu."</p></div></div></div>";
								}
						?>
				<!-- <div class="ipl-cards-content">
					<div class="bg-orange">
					</div>
					<div class=	"ipl-cards-content-inner">
						<div class="ipl-schedule-title">
							<h4> Match 1 </h4>
						</div>
						<div class="ipl-schedule-content">
							<div class="ipl-csk"></div>
								<p>Vs</p>
							<div class="ipl-mi"></div>
							
						</div>
						<div class="ipl-schedule-match">
							<p>Kolkata Knight Riders <br/>Vs <br/>Delhi Daredevils</p>
						</div>
						<div class="ipl-schedule-venue">
							<p>02 - APR - 2013 <br/>Chepak Stadium, <br/> Chennai</p>
						</div>
						
					</div>
				</div> -->
				<div class="ipl-schedule-footer">
					<a href="<?=base_url('ipl/schedule')?>">
					<div class="ipl-schedule-arrow"></div></a>
				</div>
			</div>
			<div class="span4 ipl-cards4">
					<!--========================================================Photos=======================-->
				<div class="ipl-cards-title ipl-photos">
					<h3>IPL Photos</h3>
				</div>
				<div class="ipl-cards-content">
					<div class="ipl-cards3-inner">
						<div class="bg-pink">
						</div>
					</div>
					<div class="ipl-photo-content">
						<div class='ipl-photo-title'><h4>Day 3 IPL Highlights</h4></div>
						<ul>
							<?php
							foreach($photos as $single_photos)
							{

								echo "<li>";
								echo "<a href=".$single_photos->link." target='_blank'><img src=".$single_photos->icon."></a>";
								echo "</li>";
							}
							?>
							
						</ul>
						<!-- <div class="ipl-photo">

						</div>
						<div class="ipl-photo">

						</div> -->
					</div>
					
				</div>
				<div class="ipl-photos-footer">
					<a href="<?=base_url('photos')?>">
					<div class="ipl-photos-arrow"></div></a>
				</div>
			</div>

		</div>

		
		<div class="span5">
			
			<div class="span6 ipl-cards5">
				<!--==============================================================Polls=======================-->
				<div class="ipl-cards-title ipl-polls">
					<h3>IPL Polls</h3>
				</div>
				<div class="ipl-cards-content">
					<div class="ipl-cards3-inner">
					<!-- <div class="bg-violet">
					</div> -->
				</div>
						
					<div class="ipl-polls-content">
						<p id="poll_question">loading...</p>
						<br/>
						<form id="poll_answer">
							<!-- from ipl.sj -->
            			</form>

            			  <button class="ipl-button" id="ipl-polls-button" style="display:none;">Vote</button>
							
					</div>
				</div>
				<div class="ipl-polls-footer">
					<!-- <div class="ipl-polls-arrow"></div> -->
				</div>
			</div>
			<div class="span6 ipl-cards1">
				<div class="ipl-cards-title ipl-news">
					<h3>IPL News</h3>
				</div>
				<div class="ipl-cards-content ">
					<div class="bg-blue">
					</div>

					<ul>

						<?php
							foreach($news as $single_news)
							{
								echo "<li>";
								echo "<p><a href=".$single_news->link." target='_blank'>".$single_news->title."</a></p>";

								echo "<div class='ipl-news-date'>".$single_news->pubdate."</div>";
								echo "</li>";
							}
						?>
						<!-- <li><p><a href="">Pepsi IPL Opening Ceremony - BUY TICKETS</a></p></li>
						<li><p><a href="">Salt Lake Stadium to host IPL Opening Ceremony</a></p></li>
						<li><p><a href="">The Spin in the tale of Valley</a></p></li> -->
					</ul>
				</div>
				<div class="ipl-news-footer" id="iar1">
					<a href="<?=base_url('news')?>">
					<div class="ipl-news-arrow"></div></a>
				</div>
			</div>
		</div>	
	</div>
</div>
<!--<footer>
	<div class="container">
		<div class="row" >
			<div class="span12 ipl-footer">
				<div class="span8">
					<p>© Copyright IPL, BCCI 2013. All Rights reserved.</p>
				</div>
				<div class="span4">
					<p>Powered by<a><div class="ipl-footer-logo"></div></a></p>
				</div>
			</div>
		</div>
	</div>
	
</footer>-->

<script src="<?php echo base_url('assets/js/ipl.js');?>"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.js"></script>               
 				            
