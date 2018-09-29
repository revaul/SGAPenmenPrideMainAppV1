<?php require "../login/loginheader.php"; ?>
<?php include "../template/top.php"; ?>

<div id="about" class="container-fluid">
      <div class="row">
          <div class="col-sm-2">
          </div>
    <div class="col-sm-8">
    <h2>Setup Prize Sheet</h2>
<form action="prizesheet.php" method="post">
<p> <label> Tier 1 Cost:   </label> <input type="text" name="tier1cost"/> </p>
<p> <label> Tier 1 Description:   </label> <input type="text" name="tier1desc"/> </p>
<p> <label> Tier 2 Cost:   </label> <input type="text" name="tier2cost"/> </p>
<p> <label> Tier 2 Description:   </label> <input type="text" name="tier2desc"/> </p>
<p> <label> Tier 3 Cost:   </label> <input type="text" name="tier3cost"/> </p>
<p> <label> Tier 3 Description:   </label> <input type="text" name="tier3desc"/> </p>

<p><label>Year:   </label>
<select name="dateyear">
  <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
</select></p>
<p><label>Month:   </label>
<select name="datemonth">
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
<p><label>Day:   </label>
<select name="dateday">
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
<p> <input type="submit" /> </p>
</form>
</div>
          <div class="col-sm-2">
    </div>
  </div>
</div>
<?php include "../template/bottom.php" ?>
