<html>
  <head>
    
  </head>
  <body>
  <div id="columnchart_material" style="width: 100%; min-width: 25%; height: 500px;"></div>
</body>
</html>
<?php
$SemI=80;
$SemIs=0;
$SemII	=80;
$SemIIs=80;
$SemIII	=80;
$SemIIIs	=80;
$SemIV	=80;
$SemIVs	=80;
$SemV	=80;
$SemVs	=80;
$SemVI	=80;
$SemVIs	=80;
$SemVII	=80;
$SemVIIs	=80;
$SemVIII	=80;
$SemVIIIs=80;

$src="https://www.gstatic.com/charts/loader.js";
echo "<script type='text/javascript' src=$src></script>";
echo "<script type='text/javascript'>";
echo " google.charts.load('current', {'packages':['bar']});";
echo " google.charts.setOnLoadCallback(drawChart);";

echo "  function drawChart() {";
echo "    var data = google.visualization.arrayToDataTable([";
  echo "     ['Semister','department'],";
  echo "    ['Operating System',$SemI],";
  echo "  ['Networking',$SemII],";
  echo "   ['C programming',$SemIII],";
  echo "  ['Java',$SemIV],";
          echo " ]);";
  echo " var options = {";
    echo "  chart: {";
      echo "   title: 'Student Performance',";
      echo "  subtitle: 'Student percentage and subject'";
      echo "}";
      echo "};";

      echo "var chart = new google.charts.Bar(document.getElementById('columnchart_material'));";
      echo "  chart.draw(data, google.charts.Bar.convertOptions(options));";
      echo "}";
      echo " </script>";

?>