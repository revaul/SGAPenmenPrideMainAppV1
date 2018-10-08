<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level3.php"; ?>
<?php include "../template/top.php"; ?>
<div id="about" class="container-fluid">
      <div class="row">
              <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
      <h2>Penmen Pride Edit Event Information</h2>
      <form action="actionediteventinformation.php" method="post">
<?php
// TODO: Post Field Verification
$eventname= $_POST["event"];
if (is_numeric($eventname)) {
    require '../mysqlkeys.php';
    // Create connection
    $conn = new mysqli($host, $user, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM ppv0008003.eventnames join eventhosts on eventnames.hostid=eventhosts.hostid where eventid=".$eventname.";";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            ?> <input type="hidden" name="eventid" value="<?php echo $eventname; ?>">
            <table class="table table-striped">
         <tr>
<th rowspan="2">Event Name</th>
           <td><input type="radio" name="checkeventname" value="0" checked> No Change</td>
           <td><label>The event name is currently listed as: &nbsp;&nbsp;</label><?php echo $row["EventName"]; ?> </td>
           </tr>
           <tr>
             <td><input type="radio" name="checkeventname" value="1"> Change</td>
            <td><label> New Event Name:   </label> <input type="text" name="eventname"/>
      </td>
    </tr>
    <tr>
      <th rowspan="2">Event Date</th>
      <td><input type="radio" name="checkeventdate" value="0" checked> No Change</td>
      <td><label>The event date is currently listed as: &nbsp;&nbsp;</label><?php echo $row["EventDate"]; ?> </td>
    </tr>
    <tr>
      <td><input type="radio" name="checkeventdate" value="1"> Change</td>
     <td><label> New Event Date:   </label> <input type="text" id="datepicker" name="eventdate"></td>
     </tr>
     <tr>
      <th rowspan="2">Event Points</th>
      <td><input type="radio" name="checkpointvalue" value="0" checked> No Change</td>
      <td><label>The event point value is currently listed as: &nbsp;&nbsp;</label><?php echo $row["PointValue"]; ?> point(s)</td>
    </tr>
    <tr>
      <td><input type="radio" name="checkpointvalue" value="1"> Change</td>
      <td><label> New Point Value:   </label> <select name="pointvalue">
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
       <option value="51">51</option>
       <option value="52">52</option>
       <option value="53">53</option>
       <option value="54">54</option>
       <option value="55">55</option>
       <option value="56">56</option>
       <option value="57">57</option>
       <option value="58">58</option>
       <option value="59">59</option>
       <option value="60">60</option>
       <option value="61">61</option>
       <option value="62">62</option>
       <option value="63">63</option>
       <option value="64">64</option>
       <option value="65">65</option>
       <option value="66">66</option>
       <option value="67">67</option>
       <option value="68">68</option>
       <option value="69">69</option>
       <option value="70">70</option>
       <option value="71">71</option>
       <option value="72">72</option>
       <option value="73">73</option>
       <option value="74">74</option>
       <option value="75">75</option>
       <option value="76">76</option>
       <option value="77">77</option>
       <option value="78">78</option>
       <option value="79">79</option>
       <option value="80">80</option>
       <option value="81">81</option>
       <option value="82">82</option>
       <option value="83">83</option>
       <option value="84">84</option>
       <option value="85">85</option>
       <option value="86">86</option>
       <option value="87">87</option>
       <option value="88">88</option>
       <option value="89">89</option>
       <option value="90">90</option>
       <option value="91">91</option>
       <option value="92">92</option>
       <option value="93">93</option>
       <option value="94">94</option>
       <option value="95">95</option>
       <option value="96">96</option>
       <option value="97">97</option>
       <option value="98">98</option>
       <option value="99">99</option>
       <option value="100">100</option>
       <option value="1000">1000</option>
     </select></td>
   </tr>
   <tr>
     <th rowspan="2">Event Double Points</th>
     <td><input type="radio" name="checkdoublepoints" value="0" checked> No Change</td>
     <td><label>The event double points toggle is currently listed as: &nbsp;&nbsp;</label><?php  if ($row["DoublePoints"]==0) {
                echo "Not Double Points";
            } else {
                echo "Double Points";
            } ?> </td>
     </tr>
     <tr>
       <td><input type="radio" name="checkdoublepoints" value="1"> Change</td>
      <td><label>New Double Points Marker:   </label> <select name="doublepoints">
       <option value="0">Not Double Points</option>
       <option value="1">Double Points</option>
       </select>
     </td>
   </tr>
   <tr>
     <th rowspan="2">Semester Giveaway</th>
     <td><input type="radio" name="checkgiveaway" value="0" checked> No Change</td>
     <td><label>The event semester giveaway toggle is currently listed as: &nbsp;&nbsp;</label><?php  if ($row["SemesterGiveaway"]==0) {
                echo "Not Semester Giveaway (Normal Event)";
            } else {
                echo "Semester Giveaway";
            } ?> </td>
          </tr>
          <tr>
            <td><input type="radio" name="checkgiveaway" value="1"> Change</td>
            <td><label>New Semester Giveaway Marker:   </label> <select name="semestergiveaway">
       <option value="0">Not Semester Giveaway</option>
       <option value="1">Semester Giveaway</option>
     </select> </td>
   </tr>
   <tr><th rowspan="2">Do Not Total</th>
   <td><input type="radio" name="checkdonottotal" value="0" checked> No Change</td>
   <td><label>The event do not total toggle is currently listed as: &nbsp;&nbsp;</label><?php  if ($row["DoNotTotal"]==0) {
                echo "Normal Totaling (Normal Event)";
            } else {
                echo "Do Not Total";
            } ?> </td>
          </tr>
          <tr>
            <td><input type="radio" name="checkdonottotal" value="1"> Change</td>
            <td><label>New Do Not Total Marker:   </label> <select name="donottotal">
       <option value="0">Normal Totaling</option>
       <option value="1">Do Not Total</option>
     </select></td>
   </tr>
   <tr>
    <th rowspan="2">Event Host</th>
     <td><input type="radio" name="checkeventhost" value="0" checked> No Change</td>
     <td><label>The event host is currently listed as: &nbsp;&nbsp;</label> <?php echo $row["HostName"]; ?> </td>
     </tr>
     <tr>
       <td><input type="radio" name="checkeventhost" value="1"> Change</td>
       <td><label>New Event Host:   </label>
       <select name="hostname">
       <?php

       $query = "select * from eventhosts order by HostName;";
            $results=mysqli_query($conn, $query);

            foreach ($results as $HostName) {
                ?>
       <option value="<?php echo $HostName["HostID"]; ?>"><?php echo $HostName["HostName"]; ?></option>
       <?php
            } ?>
       </select> </td>
     </tr>
   </table>
       <script>
 $( function() {
   $( "#datepicker" ).datepicker();
 } );
 </script>
     <?php  // echo $row["HostID"];
        }
    } else {
    }
    $conn->close();
}
?>
<p> <input type="submit" /> </p>
</form>
</div>
    <div class="col-sm-1">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
