<div class = "container">
  <div class = "row">
    <div class = "span8">

      <!--Page Heading-->
      <div class = "row">
        <div class = "span8">
          <div class = "page-header">
              <h3>IPL Series</h3>
          </div>
        </div>
      </div>

      <!--Table-->
      <div class = "row">
      	<div class = "span8 margint10">
          <!--<p><h4>Schedule</h4></p>-->
          <table class="table table-bordered table-striped">
            <colgroup>
              <col class="span3">
              <col class="span2">
              <col class="span2">
              <col class="span2">
            </colgroup>
            <thead>
              <tr>
                <th>Teams</th>
                <th>Venue</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
				<?php
        //make IST time zone
                date_default_timezone_set('Asia/Kolkata');
                if(count($content['upcoming']))
                {
				foreach($content['upcoming'] as $row)
				{ ?>
              <tr>
                <td>
					<?php echo $row->description; ?>
                </td>
                <td>
                  <?php echo $row->mt_vnu; ?>
                </td>
                <td><p><?php echo date("M d, Y H:i",strtotime($row->sdate." ".$row->time." GMT")); if($row->sdate != $row->edate) echo "<span style='color:#a82e0f'> to </span>".date("Y-m-d",strtotime($row->edate)); ?></p></td>
              </tr>
              <?php
				} }?>
            </tbody>
        </table>
        </div>
      </div>

      <!--PAGINATION-->
      <div class = "row">
        <div class = "span8 margint-20">
          <div class = "container">
            <div class="pagination">
              <ul>
                <!--<li><a href="#">Prev</a></li>
                <li class = "active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#">10</a></li>
                <li><a href="#">11</a></li>
                <li><a href="#">12</a></li>
                <li><a href="#">Next</a></li>-->
                <?php echo $links; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="span4 margint20">
        <div class="row" style="margin-top:30px;">
          <div class="span4">
            <div class="ads-336X280 pull-right">
              <script type="text/javascript"><!--
		google_ad_client = "ca-pub-1444369114752839";
		/* 336x280, created 6/2/10 */
		google_ad_slot = "3029230199";
		google_ad_width = 336;
		google_ad_height = 280;
		//-->
		</script>
		<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
            </div>
          </div>
        </div>
    </div>

    <!--Side NAV-->
<!--     <div class = "span3 margint10">
      <div id="sidebar" class="sidebar-nav">
        <ul class="nav nav-tabs nav-stacked">
          <li class="menu-heading">HEADING</li>
          <li class="nav-menu"><a href="#" class = "active">Fixtures</a></li>
          <li class="nav-menu"><a href="#">Series Archive</a></li>
          <li class="nav-menu"><a href="#">Current Series</a></li>
          <li class="nav-menu"><a href="#">Past Series</a></li>
          <li class="nav-menu"><a href="#">Upcoming Series</a></li>
          <li class="nav-menu"><a href="#">Rankings</a></li>
          <li class="nav-menu"><a href="#">Records</a></li>
          <li class="nav-menu"><a href="#">Teams</a></li>

          <!--Search Box-->
          <!-- <li class="nav-menu menu-box">
            <div class = "row">
              <div class = "span3">
                <div class = "padding10">
                  <div class = "page-header">
                    <h4>Search</h4>
                  </div>
                  <div class="input-append">
                    <input class="span2 wired" id="appendedInputButton" type="text">
                    <button class="btn btn-primary" type="button"><i class="icon-search icon-white"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div> -->
  </div>
</div>
<script src="<?php echo base_url('assets/js/schedule.js');?>"></script>
