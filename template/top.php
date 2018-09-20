<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Penmen Pride Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="/css/sga.css?version=7" rel="stylesheet" type="text/css">
	<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111454242-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111454242-1');
</script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top no-print">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img src="/images/PenmenPrideLogo.png" style="width:50px"></a>

    
	</div>
	
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	  <li><a href="/index.php">DASHBOARD</a></li>
		<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">EVENTS
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/events/newevent.php">NEW EVENT INFORMATION</a></li>
          <li><a href="/upload.php">EVENT UPLOAD</a></li>
		  <li><a href="/events/fulleventlisting.php">EVENT LISTING</a></li>
        </ul>
      </li>
		<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">EXPORTS
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/exports/attendanceexport.php">EVENT ATTENDANCE INFORMATION</a></li>
		<li><a href="/exports/attendanceexportwithid.php">EVENT ATTENDANCE INFORMATION WITH STUDENT IDS</a></li>
		  <li><a href="#">EVENT ATTENDANCE NUMBERS</a></li>
          <li><a href="/exports/OSIExport.php">OSI DATA CONVERSION</a></li>
            <li><a href="exports/fulltermpoints.php">TERM POINTS</a></li>
            <li><a href="exports/prizesheet.php">PRIZE SHEETS</a></li>
		  
        </ul>
      </li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">TRIGGER
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/backendsystemapplications/duplicates.php">DUPLICATE ELIMINATION</a></li>
            <li><a href="/backendsystemapplications/studentidtolisting.php">SCANNERLINK STUDENT LISTING</a></li>
            <li><a href="/backendsystemapplications/year.php">UPDATE SEMESTERS/YEARS</a></li>
            <li><a href="/backendsystemapplications/dates.php">UPDATE DATES</a></li>
			<li><a href="/backendsystemapplications/tallypoints.php">TALLY POINTS</a></li>
		<li><a href="/backendsystemapplications/randomkeygenerator.php">RANDOM KEY GENERATOR</a></li>
        </ul>
      </li>
          <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MISC
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/prizegiveaway.php">PRIZE GIVEAWAY</a></li>
		  <li><a href="/uploadpeople.php">IMPORT STUDENTS</a></li>
		<li><a href="/misc/publiclinks.php">PUBLIC LINKS</a></li>
        </ul>
      </li>
        <li><a href="/adminsystem/index.php">ADMIN</a></li>
		
		<li><a href="/login/logout.php">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
