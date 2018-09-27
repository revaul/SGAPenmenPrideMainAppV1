<?php require "login/loginheader.php"; ?>
<?php include "template/top.php"; ?>
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
    <form action="../actions/actionnewevent.php" method="post">
    <p> <label> Event Name:   </label> <input type="text" name="name"/> </p>
    <p><label>Host:   </label>
    <select name="host">
    <option value="">Select Event Host</option>
    <?php
    require '../mysqlkeys.php';
    $con=mysqli_connect($host , $user , $password , $dbname );

    if (mysqli_connect_errno()){
    	echo "Failed to connect:".mysqli_connect_errno();
    	}
    $query = "select * from eventhosts order by HostName;";
    $results=mysqli_query($con, $query);

    foreach ($results as $HostName){

    ?>
    <option value="<?php echo $HostName["HostID"]; ?>"><?php echo $HostName["HostName"]; ?></option>
    <?php
    }
    ?>
    </select></p>

    <p> <label>Who is this email going to?   </label><select name="doublepoints">
    <option value="1">All participants this semester (Recommended)</option>
    <option value="0">All known participants ever (Not Recommended)</option>
    </select></p>

    <p><label>Send Date Month:   </label>
    <select name="sendmonth">
    <option value="1">1-January</option>
        <option value="2">2-February</option>
        <option value="3">3-March</option>
        <option value="4">4-April</option>
        <option value="5">5-May</option>
        <option value="6">6-June</option>
        <option value="7">7-July</option>
        <option value="8">8-August</option>
        <option value="9">9-September</option>
        <option value="10">10-October</option>
        <option value="11">11-November</option>
        <option value="12">12-December</option>
    </select></p>
    <p><label>Send Date Day:   </label>
    <select name="sendday">
    <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
    </select></p>
    <p><label>Send Date Year:   </label>
    <select name="sendyear">
    <option value="1">1-January</option>
        <option value="2">2-February</option>
        <option value="3">3-March</option>
        <option value="4">4-April</option>
        <option value="5">5-May</option>
        <option value="6">6-June</option>
        <option value="7">7-July</option>
        <option value="8">8-August</option>
        <option value="9">9-September</option>
        <option value="10">10-October</option>
        <option value="11">11-November</option>
        <option value="12">12-December</option>
    </select></p>
    <p> <input type="submit" /> </p>
    </form>

		<textarea class="tinymce"><img src="https://static.wixstatic.com/media/656490_ce6f44b9c3a44569af13f1cfaf31f5cf~mv2_d_2000_2000_s_2.png" alt="SNHU SGA Logo" style="height:220px;">
    <img src="https://static.wixstatic.com/media/656490_c26adc909bd0401f8ca0132172b02b59~mv2.png" alt="SNHU SGA Penmen Pride Logo" style="height:220px;">
    <p style="color: #152C59; font-family: Arial, Helvetica, sans-serif;"><b>Dear [[First Name]],</b></p>
    <p style="color: #F3B329; font-family: Arial, Helvetica, sans-serif;"><b>So far, this semester YOU HAVE EARNED [[Points]] PENMEN PRIDE POINTS!</b></p>
    <p style="font-family: Arial, Helvetica, sans-serif;">Not sure what Penmen Pride points are? You have earned these points this past semester by attending on-campus events. At the end of the semester, all points are tallied and the top 300 students with the highest point amounts will receive prizes just for attending on-campus events! <b style="color: #152C59">The top 300 students will receive their prizes on Thursday, April 27th and Friday, April 28th.</b></p>
    <p style="color: #152C59; text-decoration: underline;; font-family: Arial, Helvetica, sans-serif;"><b>Prize Pickup will begin in the Student Center Lobby at 9 am on Thursday (4/27/17) until 3 pm and recommence at 9 am on Friday (4/28/17) until 3 pm.</b></p>
    <p style="font-family: Arial, Helvetica, sans-serif;">To further explain prize eligibility, we have divided the winners into three specific tiers and have listed the prizes below. Tier 1 consists of the top 5 students with the largest amounts of points. Tier 2 consists of the top 50 students with the largest amounts of points. Finally, Tier 3 consists of the top 250 students with the largest amount of points. In addition, the student with the most points will additionally have their name engraved on a trophy in the Student Center.</p>
    <p style="color: #F3B329; font-family: Arial, Helvetica, sans-serif;"><b>Currently, your Tier status is: [[Tier]]</b></p>

    <p style="font-family: Arial, Helvetica, sans-serif;"><b>Curious as to what the prizes are? Spring Semester Prizes are as follows:</b></p>
    <ul>
        <li style="color:#152C59; font-family: Arial, Helvetica, sans-serif;"><b>Tier 1 (Top 5 Point Earners)</b>
            <ul>
                <li style="color:#000000; font-family: Arial, Helvetica, sans-serif;">Jan Sport Backpack, Penmen Pride Hat, Penmen Pride Water Bottle</li>
            </ul>
        </li>
        <li style="color:#152C59; font-family: Arial, Helvetica, sans-serif;"><b>Tier 2 (Top 50 Point Earners)</b>
            <ul>
                <li style="color:#000000; font-family: Arial, Helvetica, sans-serif;">Penmen Pride Hat</li>
            </ul>
        </li>
        <li style="color:#152C59; font-family: Arial, Helvetica, sans-serif;"><b>Tier 3 (Top 250 Point Earners)</b>
            <ul>
                <li style="color:#000000; font-family: Arial, Helvetica, sans-serif;">Penmen Pride Water Bottle</li>
            </ul>
        </li>
    </ul>
    <p style="font-family: Arial, Helvetica, sans-serif;">We are also especially excited to share with you that the individual with the highest amount of points for the semester is <span style="color: #F3B329">Shannon Conway</span>, finishing off the semester with <span style="color: #F3B329">84</span> points. Shannon will have her name placed on the Penmen Pride Trophy in the Student Center!</p>
    <p><b>We appreciate your time and look forward to seeing you at the Prize Giveaway, Thursday, April 27th and Friday, April 28th!</b></p>

    <p style="font-family: Arial, Helvetica, sans-serif;"> Thank you again! <br>Penmen Pride Committee <br>SNHU Student Government Association <br>2500 North River Road, Manchester, NH 03106</p>

    <p style="font-size: 0.5em; font-family: Arial, Helvetica, sans-serif;">Disclaimer: All Points expire at 3:00:00 PM (EST) on 4/28/17. Points may be used only once and may not be duplicated. Points must be exchanged for prizes in person at the SNHU Student Government Association Prize Pickup Location. No cash value, credit or change will be given in exchange for points. Student’s points may not be combined with other students. The SNHU Student Government Association is not responsible for any Points not redeemed by any expiration date hereon. Failure to use Points by any expiration date hereon shall result in the forfeiture of such Points. No rain checks issued. The SNHU Student Government Association reserves the right to remove, add or change items in the prize collection without prior notice. Cannot be applied to past prizes. Prize items available while supplies last. Other restrictions may apply.</p></textarea>

		<!-- javascript -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="plugin/tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src="plugin/tinymce/init-tinymce.js"></script>
  </div>
  <div class="col-sm-4">
    <span class="glyphicon glyphicon-signal logo"></span>
  </div>
</div>
</div>
<?php include "template/bottom.php" ?>
