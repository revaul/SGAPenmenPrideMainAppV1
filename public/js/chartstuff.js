$(document).ready(function(){
  $.ajax({
	  <?php 
	  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
 
$url = $protocol . $_SERVER['HTTP_HOST'];
	  ?>
    url : "<?php echo $url; ?>/public/chart1data.php?id=<?php echo $idclean; ?>",
    type : "GET",
    success : function(data){
      console.log(data);
      var PubSemester = [];
      var totpoints = [];
      for(var i in data) {
        PubSemester.push(data[i].PubSemester);
        totpoints.push(data[i].totpoints);
      }
      var chartdata = {
        labels: PubSemester,
        datasets: [
          {
            label: "totpoints",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(0, 30, 96, 1)",
            //borderColor: "rgba(59, 89, 152, 1)",
		  borderColor: "rgba(255, 255, 255, 1)",
            pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
            pointHoverBorderColor: "rgba(59, 89, 152, 1)",
            data: totpoints
          }
          
        ]
      };
      var ctx = $("#mycanvas1");
      var LineGraph = new Chart(ctx, {
        type: 'doughnut',
        data: chartdata
      });
    },
    error : function(data) {
    }
  });
});
