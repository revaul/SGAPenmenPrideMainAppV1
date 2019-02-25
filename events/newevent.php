<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level4.php"; ?>
<?php include "../template/top.php"; ?>

<div id="about" class="container-fluid">
      <div class="row">
          <div class="col-sm-2">
          </div>
    <div class="col-sm-8">
    <h2>Penmen Pride Event Form</h2>
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
<p> <label>Event Points:   </label>
<select name="pointvalue">
<option value="">Select Point Value</option>
<option value="0">0</option>
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
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="100">100</option>
<option value="1000">1000</option>
</select></p>
<p><label>Event Type:   </label>
<select name="eventtype">
<option value="">Select Event Type</option>
<?php
require '../mysqlkeys.php';
$con=mysqli_connect($host , $user , $password , $dbname );

if (mysqli_connect_errno()){
	echo "Failed to connect:".mysqli_connect_errno();
	}
$query = "select * from eventtypes;";
$results=mysqli_query($con, $query);

foreach ($results as $HostName){

?>
<option value="<?php echo $HostName["IDEventTypes"]; ?>"><?php echo $HostName["EventTypeName"]; ?></option>
<?php
}
?>
</select></p>
<p> <label>Double Points:   </label><select name="doublepoints">
<option value="">Yes or No</option>
<option value="1">Yes</option>
<option value="0">No</option>
</select></p>
<p> <label>Test Event:   </label><select name="eventtest">
<option value="">Yes or No</option>
<option value="1">Yes</option>
<option value="0">No</option>
</select></p>
<p><label>Event Date:   </label> <input type="text" id="datepicker" name="eventdate"></p>
<script>
$( function() {
$( "#datepicker" ).datepicker();
} );
</script>
<p> <input type="submit" /> </p>
</form>
</div>
          <div class="col-sm-2">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
