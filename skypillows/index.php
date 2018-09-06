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
  <link rel="stylesheet" href="/css/main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link rel="stylesheet" href="/css/portal.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link href="http://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
  </head>
  <body>
<?php
        $a=date("N");
      $b=$a;
          $c=0;
      if ($a==7):

 $subtracted_timestamp = strtotime('+1 day', time());

 $m = date('m.d.Y', $subtracted_timestamp);
      $a=date('N', $subtracted_timestamp);
      endif;
        $c=$a-1;

 $subtracted_timestamp = strtotime('-'.$c.' day', time());

 $d = date('m.d.Y', $subtracted_timestamp);
      
      
      $f='06.25.2018';
      $g='07.02.2018';
      $h='07.09.2018';
      $i='07.16.2018';
      $j='07.23.2018';
      $k='07.30.2018';
      $l='blah';
      $n=0;
      if (($d==$f)&&($n==0)):
      $l="/June25June292018/";
      $n=1;
      endif;
      if (($d==$g)&&($n==0)):
      $l="/July02July062018/";
      $n=1;
      endif;
      if (($d==$h)&&($n==0)):
      $l="/July09July132018/";
      $n=1;
      endif;
      if (($d==$i)&&($n==0)):
      $l="/July16July202018/";
      $n=1;
      endif;
      if (($d==$j)&&($n==0)):
      $l="/July23July272018/";
      $n=1;
      endif;
      if (($d==$k)&&($n==0)):
      $l="/July30August032018/";
      $n=1;
      endif;
      if($n==0):
      $l="/";
      $n=1;
      endif;
      
      $o="https://photos.idtech.com/IDTC/SNHU/2018".$l;
      ?>
<div id="container">
  
        
        <div class="row">
    
    <div class="col-sm-6"><div class="sub_box">
        <a href="/"><img src="/images/logo.png" alt="iD Tech Logo" id="iD_Tech_Logo"></a>
        <h1>Sky Pillows' Productivity Portal</h1>
        <div class="link_button"><a href="/instructors">
        <h2 class="h2_button">Camp Instructors<i class="fa fa-arrow-right"></i> </h2>
        </a></div>
        <?php
        if ($b<6):
        ?>
        <div class="link_button"><a href="https://docs.google.com/document/d/1Xc-bkSySseXuM1Vx07t6CaXT69HCuLzGmlc0ivuXqu0/edit?usp=sharing">
        <h2 class="h2_button">Sky Pillows' Code <i class="fa fa-arrow-right"></i> </h2>
        </a></div>
        <?php
        endif;
        if ($b<5):
        ?>
        <div class="link_button"><a href="https://docs.google.com/forms/d/e/1FAIpQLSfPmTDQ9CdNApSKQgmT3eeSNSaBWWgOc-h0ftfYMqPEPQ7u7Q/viewform?usp=sf_link">
        <h2 class="h2_button">Tell us how it's going! <i class="fa fa-arrow-right"></i> </h2>
            <p class="p_button">Take a quick survey!</p>
        </a></div>
        <?php
        endif;
        if ($b==4):
        ?>
        <div class="link_button"><a href="https://docs.google.com/forms/d/e/1FAIpQLSeMXMI68N8MhTA1yzS0mNc5eP6w7_gj-K1eruxSjk_Ckk73Vg/viewform?usp=sf_link">
        <h2 class="h2_button">Final Project Check In <i class="fa fa-arrow-right"></i> </h2>
            <p class="p_button">Please let me know where you are!</p>
        </a></div>
        <div class="link_button"><a href="https://drive.google.com/open?id=1DMVezAUGfTtxig0oee1rzptgcl8PmjTfUMaG7AANEMg">
        <h2 class="h2_button">Friday Lunch Sign Up <i class="fa fa-arrow-right"></i> </h2>
            <p class="p_button">What type of pizza do you like?</p>
        </a></div>
        <?php endif;
        if ($b<6):
        ?>
        <div class="link_button"><a href="https://idgameplan.com/login">
        <h2 class="h2_button">iD Game Plan <i class="fa fa-arrow-right"></i> </h2>
        </a></div>
        <?php
        endif;
        if (($b>1) && ($b<6)):
        ?>
        <div class="link_button"><a href="<?php echo $o; ?>">
        <h2 class="h2_button">iD Tech Photos <i class="fa fa-arrow-right"></i> </h2>
        </a></div>
        <?php endif;
        if ($b<6):
        ?>
        <div class="link_button"><a href="http://toolkit.idtech.com">
        <h2 class="h2_button">iD Tech Toolkit <i class="fa fa-arrow-right"></i> </h2>
        </a></div>
        <div class="link_button"><a href="http://skypillows.me">
        <h2 class="h2_button">iD Tech - iD Code <i class="fa fa-arrow-right"></i> </h2>
            <p class="p_button">Click here to review the iD Code!</p>
        </a></div>
        <?php 
        endif;
        ?>
        </div></div>
                <div class="col-sm-6"><div class="sub_box">
        <?php
                if ($b==7):
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
            if ($b==1):
                    ?>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Monday - Day Camper Schedule</a>
        </h2>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
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
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><p>7:15 AM - 8:00 AM<br />Wake Up!</p><p>8:00 AM - 8:30 AM<br />Breakfast</p><p>8:30 AM - 9:00 AM<br />Lab Time</p><p>9:00 AM - 9:30 AM<br />Director Welcome &amp; Staff Introductions</p><p>9:30 AM - 10:45 AM<br />Software Setup, iD Code, &amp; Instruction</p><p>10:45 AM - 11:15 AM<br />Gaming Break</p><p>11:15 AM - 11:30 AM<br />Emergency Drills</p><p>11:30 AM - 12:30 PM<br />Lunch</p><p>12:30 PM - 2:30 PM<br />Instruction</p><p>2:30 PM - 3:30 PM<br />Outdoor / Off Computer Activity</p><p>3:30 PM - 4:30 PM<br />Instruction</p><p>4:30 PM - 4:45 PM<br />Wrap-Up</p><p>4:45 PM - 5:00 PM<br />Shout Outs</p><p>5:00 PM - 6:00 PM<br />Gaming Time</p><p>6:00 PM - 7:00 PM<br />Dinner</p><p>7:00 PM - 9:00 PM<br />Evening Activity</p><p>9:00 PM - 10:00 PM<br />Relax in Dorms</p><p>10:00 PM<br />Lights Out!</p></div>
      </div>
    </div>

</div>
                    <?php endif; 
                    if ($b==2):
                    ?>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Tuesday - Day Camper Schedule</a>
        </h2>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
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
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><p>7:15 AM - 8:00 AM<br />Wake Up!</p><p>8:00 AM - 8:30 AM<br />Breakfast</p><p>8:30 AM - 9:00 AM<br />Lab Time</p><p>9:00 AM -&nbsp;10:00 AM<br />Instruction</p><p>10:00 AM - 10:10 AM<br />Gaming Break</p><p>10:10 AM - 11:00 AM<br />Instruction</p><p>11:00 AM - 11:30 AM<br />Gaming Break</p><p>11:30 AM - 12:30 PM<br />Lunch</p><p>12:30 PM - 1:30 PM<br />Instruction</p><p>1:30 PM - 1:40 PM<br />Gaming Break</p><p>1:40 PM - 2:30 PM<br />Instruction</p><p>2:30 PM - 3:30 PM<br />Outdoor / Off Computer Activity</p><p>3:30 PM - 4:30 PM<br />Instruction</p><p>4:30 PM - 4:45 PM<br />Wrap-Up</p><p>4:45 PM - 5:00 PM<br />Shout Outs</p><p>5:00 PM - 6:00 PM<br />Gaming Time</p><p>6:00 PM - 7:00 PM<br />Dinner</p><p>7:00 PM - 9:00 PM<br />Evening Activity</p><p>9:00 PM - 10:00 PM<br />Relax in Dorms</p><p>10:00 PM<br />Lights Out!</p></div>
      </div>
    </div>

</div>
                    <?php endif;
                    if ($b==3):
                    ?>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Wednesday - Day Camper Schedule</a>
        </h2>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
          <div class="panel-body"><p>8:00 AM - 9:00 AM<br />Checkin &amp; Game Time</p><p>9:00 AM -&nbsp;10:00 AM<br />Instruction</p><p>10:00 AM - 10:10 AM<br />Gaming Break</p><p>10:10 AM - 11:00 AM<br />Instruction</p><p>11:00 AM - 11:30 AM<br />Gaming Break</p><p>11:30 AM - 12:30 PM<br />Lunch</p><p>12:30 PM - 1:30 PM<br />Instruction</p><p>1:30 PM - 1:40 PM<br />Gaming Break</p><p>1:40 PM - 2:30 PM<br />Instruction</p><p>2:30 PM - 3:30 PM<br />Outdoor / Off Computer Activity</p><p>3:30 PM - 4:30 PM<br />Instruction</p><p>4:30 PM - 4:45 PM<br />Wrap-Up</p><p>4:45 PM - 5:00 PM<br />Shout Outs</p><p>5:00 PM - 6:00 PM<br />Check Out &amp; Gaming Time</p>

</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Wednesday - Overnight Camper Schedule</a>
        </h2>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><p>7:15 AM - 8:00 AM<br />Wake Up!</p><p>8:00 AM - 8:30 AM<br />Breakfast</p><p>8:30 AM - 9:00 AM<br />Lab Time</p><p>9:00 AM -&nbsp;10:00 AM<br />Instruction</p><p>10:00 AM - 10:10 AM<br />Gaming Break</p><p>10:10 AM - 11:00 AM<br />Instruction</p><p>11:00 AM - 11:30 AM<br />Gaming Break</p><p>11:30 AM - 12:30 PM<br />Lunch</p><p>12:30 PM - 1:30 PM<br />Instruction</p><p>1:30 PM - 1:40 PM<br />Gaming Break</p><p>1:40 PM - 2:30 PM<br />Instruction</p><p>2:30 PM - 3:30 PM<br />Outdoor / Off Computer Activity</p><p>3:30 PM - 4:30 PM<br />Instruction</p><p>4:30 PM - 4:45 PM<br />Wrap-Up</p><p>4:45 PM - 5:00 PM<br />Shout Outs</p><p>5:00 PM - 6:00 PM<br />Gaming Time</p><p>6:00 PM - 7:00 PM<br />Dinner</p><p>7:00 PM - 9:00 PM<br />Evening Activity</p><p>9:00 PM - 10:00 PM<br />Relax in Dorms</p><p>10:00 PM<br />Lights Out!</p></div>
      </div>
    </div>

</div>
                    <?php endif;
                    if ($b==4):
                    ?>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Thursday - Day Camper Schedule</a>
        </h2>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
          <div class="panel-body"><p>8:00 AM - 9:00 AM<br />Checkin &amp; Game Time</p><p>9:00 AM -&nbsp;10:00 AM<br />Instruction</p><p>10:00 AM - 10:10 AM<br />Gaming Break</p><p>10:10 AM - 11:00 AM<br />Instruction</p><p>11:00 AM - 11:30 AM<br />Gaming Break</p><p>11:30 AM - 12:30 PM<br />Lunch</p><p>12:30 PM - 1:30 PM<br />Instruction</p><p>1:30 PM - 1:40 PM<br />Gaming Break</p><p>1:40 PM - 2:30 PM<br />Instruction</p><p>2:30 PM - 3:30 PM<br />Outdoor / Off Computer Activity</p><p>3:30 PM - 4:30 PM<br />Instruction</p><p>4:30 PM - 4:45 PM<br />Wrap-Up</p><p>4:45 PM - 5:00 PM<br />Shout Outs</p><p>5:00 PM - 6:00 PM<br />Check Out &amp; Gaming Time</p>

</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Thursday - Overnight Camper Schedule</a>
        </h2>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><p>7:15 AM - 8:00 AM<br />Wake Up!</p><p>8:00 AM - 8:30 AM<br />Breakfast</p><p>8:30 AM - 9:00 AM<br />Lab Time</p><p>9:00 AM -&nbsp;10:00 AM<br />Instruction</p><p>10:00 AM - 10:10 AM<br />Gaming Break</p><p>10:10 AM - 11:00 AM<br />Instruction</p><p>11:00 AM - 11:30 AM<br />Gaming Break</p><p>11:30 AM - 12:30 PM<br />Lunch</p><p>12:30 PM - 1:30 PM<br />Instruction</p><p>1:30 PM - 1:40 PM<br />Gaming Break</p><p>1:40 PM - 2:30 PM<br />Instruction</p><p>2:30 PM - 3:30 PM<br />Outdoor / Off Computer Activity</p><p>3:30 PM - 4:30 PM<br />Instruction</p><p>4:30 PM - 4:45 PM<br />Wrap-Up</p><p>4:45 PM - 5:00 PM<br />Shout Outs</p><p>5:00 PM - 6:00 PM<br />Gaming Time</p><p>6:00 PM - 7:00 PM<br />Dinner</p><p>7:00 PM - 9:00 PM<br />Evening Activity</p><p>9:00 PM - 10:00 PM<br />Relax in Dorms</p><p>10:00 PM<br />Lights Out!</p></div>
      </div>
    </div>

</div>
                    <?php endif;
                    if ($b==5):
                    ?>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Friday - Day Camper Schedule</a>
        </h2>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
          <div class="panel-body"><p>8:00 AM - 9:00 AM<br />Checkin &amp; Game Time</p><p>9:00 AM -&nbsp;10:00 AM<br />Finalize Projects to Gold Standard</p><p>10:00 AM - 10:10 AM<br />Gaming Break</p><p>10:10 AM - 11:00 AM<br />Finalize Projects to Gold Standard</p><p>11:00 AM - 11:30 AM<br />Gaming Break</p><p>11:30 AM - 12:00 PM<br />Finalize Projects to Gold Standard</p><p>12:00 PM - 1:00 PM<br />Lunch</p><p>1:00 PM - 1:45 PM<br />Class Showcase</p><p>1:45 PM - 2:15 PM<br />Raffle</p><p>2:15 PM - 3:00 PM<br />Evaluations &amp; Family Showcase Prep</p><p>3:00 PM - 4:00 PM<br />Family Showcase</p>

</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Friday - Overnight Camper Schedule</a>
        </h2>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><p>7:15 AM - 8:00 AM<br />Wake Up!</p><p>8:00 AM - 8:30 AM<br />Breakfast</p><p>8:30 AM - 9:00 AM<br />Lab Time</p><p>9:00 AM -&nbsp;10:00 AM<br />Finalize Projects to Gold Standard</p><p>10:00 AM - 10:10 AM<br />Gaming Break</p><p>10:10 AM - 11:00 AM<br />Finalize Projects to Gold Standard</p><p>11:00 AM - 11:30 AM<br />Gaming Break</p><p>11:30 AM - 12:00 PM<br />Finalize Projects to Gold Standard</p><p>12:00 PM - 1:00 PM<br />Lunch</p><p>1:00 PM - 1:45 PM<br />Class Showcase</p><p>1:45 PM - 2:15 PM<br />Raffle</p><p>2:15 PM - 3:00 PM<br />Evaluations &amp; Family Showcase Prep</p><p>3:00 PM - 4:00 PM<br />Family Showcase</p></div>
      </div>
    </div>

</div>
                    <?php endif;
                    
                    ?>
                    </div></div>
  </div>
            <div id="footer">
     <div class="link_button"><a href="http://skypillows.me">
        <h2 class="h2_button">Site Made By Sky Pillows</h2>
        </a></div></div>
      </div>
  
  </body>
  </html>
