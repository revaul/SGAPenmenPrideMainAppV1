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
      
      $s3n="Jeremy";
      $s3r="Jeremy";
      
      $s4n="Zero";
      $s4r="Chase";
      
      $s5n="Ethan";
      $s5r="Ethan";
      
      if ($c==1):
      $s1n=$s1r;
      $s2n=$s2r;
      $s3n=$s3r;
      $s4n=$s4r;
      $s5n=$s5r;
      endif;
      
      ?>
<div id="container">
  
        
        <div class="row">
    
    <div class="col-sm-6"><div class="sub_box">
        <a href="/"><img src="/images/logo.png" alt="iD Tech Logo" id="iD_Tech_Logo"></a>
        <h1>Sky Pillows' Productivity Portal</h1>
        <div class="link_button"><a href="/instructors">
        <h2 class="h2_button">Back to Instructors<i class="fa fa-arrow-right"></i> </h2>
        </a></div>
        </div></div>
            <div class="col-sm-6"><div class="sub_box">
         <div class="link_button">
            <img src="/images/person.png" class="instructor_photo" alt="Picture of <?php echo $s1n; ?>">
        <h2 class="h2_button"><?php echo $s1n; ?> </h2>
            <h3 class="instructor_title">Lead Instructor</h3>
            <p><?php echo $s1n; ?> is no stranger to iD Tech; previously <?php echo $s1n; ?> has not only taught at iD Tech before but he also attended iD Tech as a student. Currently, <?php echo $s1n; ?> is a senior at Southern New Hampshire University studying Information Technology with a second major in Mathematics. <?php echo $s1n; ?> is an active member in the SNHU community; his involvement includes being Business Manager of the Penmen Press, our prestigious school newspaper. As well as a senator in Student Government and the Treasurer of the Computer and Technology Club. <?php echo $s1n; ?> has also been an RA on campus for three years, most recently in Tuckerman Hall.</p>
        </div>
                </div></div></div>
    <div class="row">
    
    <div class="col-sm-6"><div class="sub_box">
        <div class="link_button">
        <h2 class="h2_button courses"><?php echo $s1n; ?> Favorites</h2>
            <p><strong>Where am I from?:</strong> Topsfield, MA</p>
            <p><strong>Job/Career/Course of Study:</strong> Business Studies in Information Technology with a Second Major in Mathematics</p>
            <p><strong>Have I worked for or attended iD before:</strong> I have attended as a student and also taught as an instructor last year at SNHU.</p>
            <p><strong>Favorite Movie:</strong> Love Simon</p>
            <p><strong>Favorite TV Show:</strong> Westworld</p>
            <p><strong>Favorite Music:</strong> The Bleachers</p>
            <p><strong>When I'm stressed out, I like to:</strong> Code and hang out with friends.</p>
            <p><strong>My favorite snacks and drinks are:</strong> Goldfish and Diet Coke</p> 
            <p><strong>Favorite vacation spot:</strong> Lake Winniepesaukee.</p>
            <p><strong>My goal for camp:</strong> I want to incorporate more theme days and bring in some fun activities.
            <p><strong>Fun Fact:</strong> I will be studying abroad in Florence, Italy this fall!</p>
        </div>
        </div></div>
            <div class="col-sm-6"><div class="sub_box">
         <div class="link_button">
        <h2 class="h2_button courses"><?php echo $s1n; ?>'s Courses</h2>
            <p class="courses"><strong>June 25th - June 29th</strong><br>Coding 101 &amp; Coding and Engineering 101</p>
             <p class="courses"><strong>July 2nd - July 6th</strong><br>Roblox Entrepreneur: Create, Code, Publish Games</p>
             <p class="courses"><strong>July 9th - July 13th</strong><br>Code Apps with Java &amp; Code and Develop Games with Java</p>
             <p class="courses"><strong>July 16th - July 20th</strong><br>Java Coding: Build Mods with Minecraft</p>
             <p class="courses"><strong>July 23rd - July 27th</strong><br>Java Coding: Build Mods with Minecraft</p>
             <p class="courses"><strong>July 30th - July 3rd</strong><br>Java Coding: Build Mods with Minecraft</p>
        </div>
                </div></div></div>
            
                    
            <div id="footer">
     <div class="link_button"><a href="http://skypillows.me">
        <h2 class="h2_button">Site Made By Sky Pillows</h2>
        </a></div></div>
      </div>
      
  </body>
  </html>
