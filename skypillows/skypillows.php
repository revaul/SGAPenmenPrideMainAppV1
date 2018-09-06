<?php
              $cookie_name = "student";
if(!isset($_COOKIE[$cookie_name])) {
     header("Location: index.php");
die();
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sky Pillows' Productivity Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
  </head>
  <body>

  <div class="row" id="top_bar_height">
      <div class="col-sm-12">
      <div id="top_bar">
      <span id="menu_icon">
<i class="fa fa-bars" style="font-size:25px"></i>
          </span>
          <span id="Student_Name">
          <?php
              $cookie_name = "student";
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo $_COOKIE[$cookie_name];
}
?></span><br>
          <span id="Instructor_Name">
          <?php
              $cookie_name = "instructor";
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo $_COOKIE[$cookie_name] . "'s Class";
}
?></span>
  </div>
          </div>
      </div>
        <div id="container">
        <div class="row">
    
    <div class="col-xs-6"><div class="sub_box">
        <img src="logo.png" alt="iD Tech Logo" id="iD_Tech_Logo">
        <h1>Sky Pillows' Productivity Portal</h1>
        <div class="link_button"><a src="http://drive.google.com">
        <h2 class="h2_button">Sky Pillows' Code <i class="fa fa-arrow-right"></i> </h2>
        </a></div>
        <div class="link_button"><a src="http://drive.google.com">
        <h2 class="h2_button">Tell us how it's going! <i class="fa fa-arrow-right"></i> </h2>
            <p class="p_button">Take a quick survey!</p>
        </a></div>
        <div class="link_button"><a src="http://drive.google.com">
        <h2 class="h2_button">Final Project Check In <i class="fa fa-arrow-right"></i> </h2>
            <p class="p_button">Please let me know where you are!</p>
        </a></div>
        <div class="link_button"><a src="http://drive.google.com">
        <h2 class="h2_button">Friday Lunch Sign Up <i class="fa fa-arrow-right"></i> </h2>
            <p class="p_button">What type of pizza do you like?</p>
        </a></div>
        <div class="link_button"><a src="http://drive.google.com">
        <h2 class="h2_button">iD Game Plan <i class="fa fa-arrow-right"></i> </h2>
        </a></div>
        <div class="link_button"><a src="http://drive.google.com">
        <h2 class="h2_button">iD Tech Photos <i class="fa fa-arrow-right"></i> </h2>
        </a></div>
        <div class="link_button"><a src="http://drive.google.com">
        <h2 class="h2_button">iD Tech Toolkit <i class="fa fa-arrow-right"></i> </h2>
        </a></div>
        <div class="link_button"><a src="http://drive.google.com">
        <h2 class="h2_button">iD Tech - iD Code <i class="fa fa-arrow-right"></i> </h2>
            <p class="p_button">Click here to review the iD Code!</p>
        </a></div>
        </div></div>
                <div class="col-xs-6"><div class="sub_box">
        <?php
        $a=date("N");
                    $a=7;
                    if ($a==7):
                    ?>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Sunday - Overnight Camper Schedule</a>
        </h2>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><p>6:00 PM - 6:30 PM<br />Check In!</p><p>6:30 PM - 7:30 PM<br />Dinner Introductions &amp; Welcome Speech</p><p>7:30 PM - 8:00 PM<br />Emergency Drills</p><p>8:00 PM - 8:30 PM<br />Orientation &amp; Tour</p><p>8:30 PM - 9:00 PM<br />Activities</p><p>9:00 PM - 10:00 PM<br />Relax in Dorms</p><p>10:00 PM<br />Lights Out!</p></div>
      </div>
    </div>

</div>
                    <?php endif;
            if ($a==1):
                    ?>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Monday - Day Camper Schedule</a>
        </h2>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
          <div class="panel-body"><p>8:00 AM - 9:00 AM<br />Checkin &amp; Activities</p><p>9:00 AM - 9:30 AM<br />Director Welcome &amp; Staff Introductions</p><p>9:30 AM - 10:45 AM<br />Software Setup, iD Code, &amp; Instruction</p><p>10:45 AM - 11:15 AM<br />Gaming Break</p><p>11:15 AM - 11:30 AM<br />Emergency Drills</p><p>11:30 AM - 12:30 PM<br />Lunch</p><p>12:30 PM - 2:30 PM<br />Instruction</p><p>2:30 PM - 3:30 PM<br />Outdoor / Off Computer Activity</p><p>3:30 PM - 4:30 PM<br />Instruction</p><p>4:30 PM - 4:45 PM<br />Wrap-Up</p><p>4:45 PM - 5:00 PM<br />Shout Outs</p><p>5:00 PM - 6:00 PM<br />Check Out &amp; Gaming Time</p>
</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Monday - Overnight Camper Schedule</a>
        </h2>
      </div>
      <div id="collapse2" class="panel-collapse collapse in">
        <div class="panel-body"><p>7:15 AM - 8:00 AM<br />Wake Up!</p><p>8:00 AM - 8:30 AM<br />Breakfast</p><p>8:30 AM - 9:00 AM<br />Lab Time</p><p>9:00 AM - 9:30 AM<br />Director Welcome &amp; Staff Introductions</p><p>9:30 AM - 10:45 AM<br />Software Setup, iD Code, &amp; Instruction</p><p>10:45 AM - 11:15 AM<br />Gaming Break</p><p>11:15 AM - 11:30 AM<br />Emergency Drills</p><p>11:30 AM - 12:30 PM<br />Lunch</p><p>12:30 PM - 2:30 PM<br />Instruction</p><p>2:30 PM - 3:30 PM<br />Outdoor / Off Computer Activity</p><p>3:30 PM - 4:30 PM<br />Instruction</p><p>4:30 PM - 4:45 PM<br />Wrap-Up</p><p>4:45 PM - 5:00 PM<br />Shout Outs</p><p>5:00 PM - 6:00 PM<br />Gaming Time</p><p>6:00 PM - 7:00 PM<br />Dinner</p><p>7:00 PM - 9:00 PM<br />Evening Activity</p><p>9:00 PM - 10:00 PM<br />Relax in Dorms</p><p>10:00 PM<br />Lights Out!</p></div>
      </div>
    </div>

</div>
                    <?php endif; 
                    if ($a==2):
                    ?>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Tuesday - Day Camper Schedule</a>
        </h2>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
          <div class="panel-body"><p>8:00 AM - 9:00 AM<br />Checkin &amp; Game Time</p><p>9:00 AM -&nbsp;10:00 AM<br />Instruction</p><p>10:00 AM - 10:10 AM<br />Gaming Break</p><p>10:10 AM - 11:00 AM<br />Instruction</p><p>11:00 AM - 11:30 AM<br />Gaming Break</p><p>11:30 AM - 12:30 PM<br />Lunch</p><p>12:30 PM - 1:30 PM<br />Instruction</p><p>1:30 PM - 1:40 PM<br />Gaming Break</p><p>1:40 PM - 2:30 PM<br />Instruction</p><p>2:30 PM - 3:30 PM<br />Outdoor / Off Computer Activity</p><p>3:30 PM - 4:30 PM<br />Instruction</p><p>4:30 PM - 4:45 PM<br />Wrap-Up</p><p>4:45 PM - 5:00 PM<br />Shout Outs</p><p>5:00 PM - 6:00 PM<br />Check Out &amp; Gaming Time</p>

</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Tuesday - Overnight Camper Schedule</a>
        </h2>
      </div>
      <div id="collapse2" class="panel-collapse collapse in">
        <div class="panel-body"><p>7:15 AM - 8:00 AM<br />Wake Up!</p><p>8:00 AM - 8:30 AM<br />Breakfast</p><p>8:30 AM - 9:00 AM<br />Lab Time</p><p>9:00 AM -&nbsp;10:00 AM<br />Instruction</p><p>10:00 AM - 10:10 AM<br />Gaming Break</p><p>10:10 AM - 11:00 AM<br />Instruction</p><p>11:00 AM - 11:30 AM<br />Gaming Break</p><p>11:30 AM - 12:30 PM<br />Lunch</p><p>12:30 PM - 1:30 PM<br />Instruction</p><p>1:30 PM - 1:40 PM<br />Gaming Break</p><p>1:40 PM - 2:30 PM<br />Instruction</p><p>2:30 PM - 3:30 PM<br />Outdoor / Off Computer Activity</p><p>3:30 PM - 4:30 PM<br />Instruction</p><p>4:30 PM - 4:45 PM<br />Wrap-Up</p><p>4:45 PM - 5:00 PM<br />Shout Outs</p><p>5:00 PM - 6:00 PM<br />Gaming Time</p><p>6:00 PM - 7:00 PM<br />Dinner</p><p>7:00 PM - 9:00 PM<br />Evening Activity</p><p>9:00 PM - 10:00 PM<br />Relax in Dorms</p><p>10:00 PM<br />Lights Out!</p></div>
      </div>
    </div>

</div>
                    <?php endif;?>
                    </div></div>
  </div>
      </div>
  
  </body>
  </html>