<?php require "../login/loginheader.php"; ?>
<?php require "../login/permissions/level6.php"; ?>
<?php

ini_set('max_execution_time', 300);
                    require '../mysqlkeys.php';
                    $conn = new mysqli($host, $user, $password, $dbname);
                         if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




if (isset($_POST["import"])) {

    $fileName = $_FILES["file"]["tmp_name"];

    if ($_FILES["file"]["size"] > 0) {

        $file = fopen($fileName, "r");

        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {


            $stmt = $conn->prepare("INSERT INTO `ppv0008003`.`scannerlinkinner` (`Email`, `ScannerLinkAddress`) VALUES (?, ?);");
            $stmt->bind_param("ss", $field1, $field2);
            $field1=$column[0];
            $field2=$column[1];
            $stmt->execute();


        }
        echo "Successfully Imported";
    }
}
?>

<?php include "../template/top.php"; ?>
<!-- NOTE: This file requires the www-data group folder to have chown NOT chgrp permissions on the uploads folder. Also,  set permissions to chmod 755-->
<script type="text/javascript">
$(document).ready(function() {
    $("#frmCSVImport").on("submit", function () {

	    $("#response").attr("class", "");
        $("#response").html("");
        var fileType = ".csv";
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
        if (!regex.test($("#file").val().toLowerCase())) {
        	    $("#response").addClass("error");
        	    $("#response").addClass("display-block");
            $("#response").html("Invalid File. Upload : <b>" + fileType + "</b> Files.");
            return false;
        }
        return true;
    });
});
</script>
<div id="about" class="container-fluid">
      <div class="row">
          <div class="col-sm-2">
          </div>
    <div class="col-sm-8">
<?php

?>

      <h2>Penmen Pride Student Listing File Uploader</h2>
      <p><a href="/misc/StudentTest.csv">Example File to Upload</a></p>
      <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    <div class="outer-scontainer">
        <div class="row">

            <form class="form-horizontal" action="" method="post"
                name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
                <div class="input-row">
                    <label class="col-md-4 control-label">Choose CSV
                        File</label> <input type="file" name="file"
                        id="file" accept=".csv">
                    <button type="submit" id="submit" name="import"
                        class="btn-submit">Import</button>
                    <br />

                </div>

            </form>

        </div>
        </div>
        <div class="col-sm-2">
          </div>
            </div>
</div>
      <?php include "../template/bottom.php" ?>
