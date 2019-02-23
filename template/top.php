<?php
$userlevel = -1;
$userlevel = $_SESSION['userlevel']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Penmen Pride Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="/css/sga.css<?php //echo "?".date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet" type="text/css">
	<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111454242-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111454242-1');
</script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="document.newformtorevertback.submit()">

<nav class="navbar navbar-default navbar-fixed-top no-print">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="/images/penmenpridelogo.png" style="width:50px"></a>


	</div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	  <?php if($userlevel>=1){ ?><li><a href="/">HOME</a></li>
		<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">EVENTS
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <?php if($userlevel>=4){ ?> <li><a href="/events/newevent.php">NEW EVENT INFORMATION</a></li> <?php } ?>
            <?php if($userlevel>=4){ ?> <li><a href="/events/upload.php">EVENT UPLOAD</a></li> <?php } ?>
            <?php if($userlevel>=4){ ?> <li><a href="/events/chooseeventtoedit.php">EDIT AN EVENT</a></li> <?php } ?>
            <?php if($userlevel>=4){ ?> <li><a href="/events/uploadcsv.php">EVENT CSV UPLOAD</a></li> <?php } ?>
            <?php if($userlevel>=3){ ?> <li><a href="/events/fulleventlisting.php">EVENT LISTING</a></li> <?php } ?>
            <?php if($userlevel>=1){ ?> <li><a href="/events/chooseeventtoscanat.php">SCAN AN EVENT</a></li> <?php } ?>
        </ul>
      </li><?php } ?>
		<?php if($userlevel>=3){ ?><li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">EXPORTS
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <?php if($userlevel>=3){ ?><li><a href="/exports/attendanceexport.php">EVENT ATTENDANCE INFORMATION</a></li><?php } ?>
		        <?php if($userlevel>=3){ ?><li><a href="/exports/attendanceexportwithid.php">EVENT ATTENDANCE INFORMATION WITH STUDENT IDS</a></li><?php } ?>
		        <?php if($userlevel>=3){ ?><li><a href="#">EVENT ATTENDANCE NUMBERS</a></li><?php } ?>
            <?php if($userlevel>=3){ ?><li><a href="/exports/OSIExport.php">OSI DATA CONVERSION</a></li><?php } ?>
            <?php if($userlevel>=3){ ?><li><a href="/exports/fulltermpoints.php">TERM POINTS</a></li> </li><?php } ?>
            <?php if($userlevel>=3){ ?><li><a href="/exports/setupprizesheet.php">PRIZE SHEETS</a></li><?php } ?>

        </ul>
      </li>
      <?php } ?>
          <?php if($userlevel>=2){ ?>
            <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MISC
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <?php if($userlevel>=2){ ?><li><a href="/misc/prizegiveaway.php">PRIZE GIVEAWAY</a></li><?php } ?>
		        <?php if($userlevel>=4){ ?><li><a href="/uploadpeople.php">IMPORT STUDENTS</a></li><?php } ?>
            <?php if($userlevel>=3){ ?><li><a href="/trigger/duplicates.php">DUPLICATE ELIMINATION</a></li><?php } ?>
            <?php if($userlevel>=3){ ?><li><a href="/trigger/studentidtolisting.php">SCANNERLINK STUDENT LISTING</a></li><?php } ?>
            <?php if($userlevel>=3){ ?><li><a href="/trigger/year.php">UPDATE SEMESTERS/YEARS</a></li><?php } ?>
            <?php if($userlevel>=3){ ?><li><a href="/trigger/dates.php">UPDATE DATES</a></li><?php } ?>
            <?php if($userlevel>=3){ ?><li><a href="/trigger/tallypoints.php">TALLY POINTS</a></li><?php } ?>
            <?php if($userlevel>=5){ ?><li><a href="/trigger/randomkeygenerator.php">RANDOM KEY GENERATOR</a></li><?php } ?>
            <?php if($userlevel>=5){ ?><li><a href="/emailsystem/mailtextentry.php">SEND NEW PENMEN PRIDE EMAIL</a></li><?php } ?>
            <?php if($userlevel>=5){ ?><li><a href="/emailsystem/viewpendingemails.php">PENDING EMAILS</a></li>  <?php } ?>
            <?php if($userlevel>=3){ ?><li><a href="/misc/publiclinks.php">PUBLIC LINKS</a></li> <?php } ?>
        </ul>
      </li>
      <?php } ?>
  <li class="dropdown">
  <a class="dropdown-toggle" data-toggle="dropdown" href="#">HOWDY, <?php echo strtoupper($_SESSION['first']); ?>
  <span class="caret"></span></a>
  <ul class="dropdown-menu">
            <?php if($userlevel>=1){ ?><li><a href="/admin/profile.php">EDIT MY PROFILE</a></li> <?php } ?>
            <?php if($userlevel>=6){ ?><li><a href="/admin/listusers.php">LIST USERS AND PRIVILEGES</a></li><?php } ?>
            <?php if($userlevel>=6){ ?><li><a href="/admin/changepermissions.php">CHANGE USER PRIVILEGES</a></li><?php } ?>
            <?php if($userlevel>=6){ ?><li><a href="/admin/changepassword.php">CHANGE USER PASSWORD</a></li><?php } ?>
            <?php if($userlevel>=6){ ?><li><a href="/admin/deleteuser.php">DELETE USER</a></li><?php } ?>
  <li><a href="/login/logout.php">LOGOUT</a></li>
  </ul>
  </li>
      </ul>
    </div>
  </div>
</nav>
