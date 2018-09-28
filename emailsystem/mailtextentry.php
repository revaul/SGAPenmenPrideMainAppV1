<?php require "../login/loginheader.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
<h2>Send Penmen Pride Email</h2>
    <form action="../phpmailer/sendmail.php" method="post">
<p> <label> Email Subject: </label> <input type="text" name="subject"/> </p>
    <textarea class="tinymce" name="message"><img src="https://static.wixstatic.com/media/656490_ce6f44b9c3a44569af13f1cfaf31f5cf~mv2_d_2000_2000_s_2.png" alt="SNHU SGA Logo" style="height:220px;">
    <img src="https://static.wixstatic.com/media/656490_c26adc909bd0401f8ca0132172b02b59~mv2.png" alt="SNHU SGA Penmen Pride Logo" style="height:220px;">
    <p style="color: #152C59;"><b>Dear [[First Name]],</b></p>
    <p style="color: #F3B329;"><b>So far, this semester YOU HAVE EARNED [[Points]] PENMEN PRIDE POINTS!</b></p>
    <p>Not sure what Penmen Pride points are? You have earned these points this past semester by attending on-campus events. At the end of the semester, all points are tallied and the top 300 students with the highest point amounts will receive prizes just for attending on-campus events! <b style="color: #152C59">The top 300 students will receive their prizes on Thursday, April 27th and Friday, April 28th.</b></p>
    <p style="color: #152C59;"><b><u>Prize Pickup will begin in the Student Center Lobby at 9 am on Thursday (4/27/17) until 3 pm and recommence at 9 am on Friday (4/28/17) until 3 pm.</u></b></p>
    <p>Want to check your points at anytime? Want to see what events you've attended or compare your point totals against other semesters? Click the button below to view your personal Penmen Pride Portal!</p>

      <table border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td bgcolor="#152C59" style="padding: 12px 18px 12px 18px; border-radius:3px; text-align: center" align="center"><a href="[[Portal Link]]" target="_blank" style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #ffffff; text-decoration: none; display: inline-block;">Personal Penmen Pride Portal</a></td>
        </tr>
      </table>

    <p>To further explain prize eligibility, we have divided the winners into three specific tiers and have listed the prizes below. Tier 1 consists of the top 5 students with the largest amounts of points. Tier 2 consists of the top 50 students with the largest amounts of points. Finally, Tier 3 consists of the top 250 students with the largest amount of points. In addition, the student with the most points will additionally have their name engraved on a trophy in the Student Center.</p>
    <p style="color: #F3B329;"><b>Currently, your Tier status is: [[Tier]]</b></p>

    <p><b>Curious as to what the prizes are? Spring Semester Prizes are as follows:</b></p>
    <ul>
        <li style="color:#152C59;"><b>Tier 1 (Top 5 Point Earners)</b>
            <ul>
                <li style="color:#000000;">Jan Sport Backpack, Penmen Pride Hat, Penmen Pride Water Bottle</li>
            </ul>
        </li>
        <li style="color:#152C59;"><b>Tier 2 (Top 50 Point Earners)</b>
            <ul>
                <li style="color:#000000;">Penmen Pride Hat</li>
            </ul>
        </li>
        <li style="color:#152C59;"><b>Tier 3 (Top 250 Point Earners)</b>
            <ul>
                <li style="color:#000000;">Penmen Pride Water Bottle</li>
            </ul>
        </li>
    </ul>
    <p>We are also especially excited to share with you that the individual with the highest amount of points for the semester is <span style="color: #F3B329">Shannon Conway</span>, finishing off the semester with <span style="color: #F3B329">84</span> points. Shannon will have her name placed on the Penmen Pride Trophy in the Student Center!</p>
    <p><b>We appreciate your time and look forward to seeing you at the Prize Giveaway, Thursday, April 27th and Friday, April 28th!</b></p>

    <p> Thank you again! <br>Penmen Pride Committee <br>SNHU Student Government Association <br>2500 North River Road, Manchester, NH 03106</p>

    <p style="font-size: 0.5em;">Disclaimer: All Points expire at 3:00:00 PM (EST) on 4/28/17. Points may be used only once and may not be duplicated. Points must be exchanged for prizes in person at the SNHU Student Government Association Prize Pickup Location. No cash value, credit or change will be given in exchange for points. Student’s points may not be combined with other students. The SNHU Student Government Association is not responsible for any Points not redeemed by any expiration date hereon. Failure to use Points by any expiration date hereon shall result in the forfeiture of such Points. No rain checks issued. The SNHU Student Government Association reserves the right to remove, add or change items in the prize collection without prior notice. Cannot be applied to past prizes. Prize items available while supplies last. Other restrictions may apply.</p></textarea>
    <p> <input type="submit" /> </p>
    </form>



		<!-- javascript -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="plugin/tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src="plugin/tinymce/init-tinymce.js"></script>
  </div>
  <div class="col-sm-1">
  </div>
</div>
</div>
<?php include "../template/bottom.php" ?>
