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
    <link rel="stylesheet" href="/css/instructors.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link href="http://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
  </head>
  <body>
<?php
        $a=date("N");
        $b=date("G");
      $c=0;
      if (($a==5) && ($b>15) && ($b<17)):
      $c=1;
      endif;
      $s1n="Sky Pillows";
      $s1r="Ryan";
      
      $s2n="Kirby";
      $s2r="Julianne";
      
      $s3n="Jeeves";
      $s3r="Jeremy";
      
      $s4n="Zero";
      $s4r="Chase";
      
      $s5n="Link";
      $s5r="Ethan";
      
      $s6n="Bread";
      $s6r="James";
      
      $s7n="Expo";
      $s7r="Spencer";
      
      if ($c==1):
      $s1n=$s1r;
      $s2n=$s2r;
      $s3n=$s3r;
      $s4n=$s4r;
      $s5n=$s5r;
      $s6n=$s6r;
      $s7n=$s7r;
      endif;
      
      ?>
<div id="container">
  
        
        <div class="row">
    
    <div class="col-sm-6"><div class="sub_box">
        <a href="/"><img src="/images/logo.png" alt="iD Tech Logo" id="iD_Tech_Logo"></a>
        <h1>Sky Pillows' Productivity Portal</h1>
        <div class="link_button"><a href="/">
        <h2 class="h2_button">Back to Home<i class="fa fa-arrow-right"></i> </h2>
        </a></div>
        </div></div>
            <div class="col-sm-6"><div class="sub_box">
                <div class="link_button">
        <h2 class="h2_button">Click on any of the instructors for more info! </h2>
        </div>
        <div class="link_button">
            <img src="/images/person.png" class="instructor_photo" alt="Picture of <?php echo $s3n; ?>">
        <h2 class="h2_button"><?php echo $s3n; ?> <i class="fa fa-arrow-right"></i> </h2>
            <h3 class="instructor_title">Director</h3>
            <p><?php echo $s3n; ?> is a graduate of Edinboro University of Pennsylvania with a Master's Degree in Middle and Secondary Instruction as well as receiving his certification in Secondary Mathematics. He received his Bachelor's Degree in Computer Engineering from Penn State Erie, The Behrend College. <?php echo $s3n; ?> has been a mathematics and computer science teacher for ten years. In his spare time outside of work, <?php echo $s3n; ?> loves skiing and running Tough Mudder obstacle course races.</p>
                </div></div></div></div>
            <div class="row">
                <div class="col-sm-6"><div class="sub_box">
        <div class="link_button">
            <img src="/images/person.png" class="instructor_photo" alt="Picture of <?php echo $s1n; ?>">
        <h2 class="h2_button"><?php echo $s1n; ?> <i class="fa fa-arrow-right"></i> </h2>
            <h3 class="instructor_title">Lead Instructor</h3>
            <p><?php echo $s1n; ?> is no stranger to iD Tech; previously <?php echo $s1n; ?> has not only taught at iD Tech before but he also attended iD Tech as a student. Currently, <?php echo $s1n; ?> is a senior at Southern New Hampshire University studying Information Technology with a second major in Mathematics. <?php echo $s1n; ?> is an active member in the SNHU community; his involvement includes being Business Manager of the Penmen Press, our prestigious school newspaper. As well as a senator in Student Government and the Treasurer of the Computer and Technology Club. <?php echo $s1n; ?> has also been an RA on campus for three years, most recently in Tuckerman Hall.</p>
        </div>
                    </div></div>
        <div class="col-sm-6"><div class="sub_box">
        <div class="link_button">
            <img src="/images/person.png" class="instructor_photo" alt="Picture of <?php echo $s2n; ?>">
        <h2 class="h2_button"><?php echo $s2n; ?> <i class="fa fa-arrow-right"></i> </h2>
            <h3 class="instructor_title">Instructor</h3>
            <p><?php echo $s2n; ?> has been studying the field of Game Design for three years now. She attended the Manchester School of Technology for two years in High School, enrolled in the Graphic and Game Design program. Her love for Game Design grew here and she decided to take a programming course over the summer before her Senior year in High School. She received her High School Diploma from Bedford High School in 2017.She now attends Sheridan College in Oakville, Ontario, enrolled in the Honors Bachelor of Game Design Program. She was briefly part of a competitive video gaming team at her school, but had to drop to stay focused on school work.</p>
        </div>
                    </div></div>
                </div>
                <div class="row">
            <div class="col-sm-6"><div class="sub_box">
        
                <div class="link_button">
            <img src="/images/person.png" class="instructor_photo" alt="Picture of <?php echo $s4n; ?>">
        <h2 class="h2_button"><?php echo $s4n; ?> <i class="fa fa-arrow-right"></i> </h2>
                    <h3 class="instructor_title">Instructor</h3>
            <p><?php echo $s4n; ?> is excited to return to iD Tech Camps and as Instructor for a second year! <?php echo $s4n; ?> just finished his second year at the Rochester Institute of Technology, going for a degree in Game Design and Development, and is pumped to share what he has learned with his campers. <?php echo $s4n; ?> has a passion for graphics and game-play programming, as well as creating cool interactive experiences through games. Outside of programming <?php echo $s4n; ?> can often be found playing bass or drums, or doing some sort of music related activity.</p>
        </div>
                </div></div>
                    <div class="col-sm-6"><div class="sub_box">
                <div class="link_button">
            <img src="/images/person.png" class="instructor_photo" alt="Picture of <?php echo $s5n; ?>">
        <h2 class="h2_button"><?php echo $s5n; ?> <i class="fa fa-arrow-right"></i> </h2>
                    <h3 class="instructor_title">Instructor</h3>
            <p><?php echo $s5n; ?> is not a stranger to iD Tech Camps, having been a student as a child and having already taught iD tech student for one summer already. A junior at WPI, he has a passion for computer science and technology and is excited to pass on that love to his students. <?php echo $s5n; ?> is currently also pursuing work towards a teaching credentials and work in the psychology field. In his spare time, <?php echo $s5n; ?> loves to play video games in competitive settings and find times to socialize with his friends.</p>
        </div>
                    </div></div>
  </div>
    <div class="row">
            <div class="col-sm-6"><div class="sub_box">
        
                <div class="link_button">
            <img src="/images/person.png" class="instructor_photo" alt="Picture of <?php echo $s6n; ?>">
        <h2 class="h2_button"><?php echo $s6n; ?> <i class="fa fa-arrow-right"></i> </h2>
                    <h3 class="instructor_title">Instructor</h3>
            <p><?php echo $s6n; ?> is no stranger to camp life, having spent two summers in high school leading a group of 10-13 campers around to their various activities; <?php echo $s6n; ?> understands what it means to keep kids safe while having the most fun possible. <?php echo $s6n; ?> has been passionate about the art and process of filmmaking since the fourth grade. As a rising senior at Emerson College, he has been exposed to some of the most cutting edge technology the industry has to offer. <?php echo $s6n; ?> just recently ended his job at a portrait photography studio in Cambridge in which interacting with families and children was commonplace. <?php echo $s6n; ?> is the one to call for great photos and an excellent teammate in Fortnite.</p>
        </div>
                </div></div>
                    
  </div>
            <div id="footer">
     <div class="link_button"><a href="http://skypillows.me">
        <h2 class="h2_button">Site Made By Sky Pillows</h2>
        </a></div></div>
      </div>
      
  </body>
  </html>
