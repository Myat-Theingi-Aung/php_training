
<?php
require_once "conn.php";
$sql = "SELECT * FROM student";
$query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($query)){
    $name[] = $row['name'];
    $age[] = $row['age'];
?>
<script src="js/Chart.min.js"></script>
<canvas id="myChart" style="width:100%;max-width:800px"></canvas>
<script>
var barColors = "green";

new Chart("myChart", {
  type: "bar",
  data: {
    labels: <?php echo json_encode($name) ?>,
    datasets: [{
      backgroundColor: barColors,
      data: <?php echo json_encode($age) ?>,
    }]
  },
  options: {
    legend: {display: false,position : 'bottom'},
    title: {
      display: true,
      text: "Student Age",
    }
  }
});
</script>
<?php } ?>