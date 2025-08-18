<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Graphiques PHP SQL JS</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart(){
      <?php
      $db_host = 'localhost';
      $db_user = 'root';
      $pwd = 'coolfyfer';
      $db_name = 'gestion_students';
      $conn = new mysqli($db_host, $db_user, $pwd, $db_name);

      if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT subjects.name AS subject , AVG(students.grade) AS average_grade  FROM students INNER JOIN subjects ON students.subject_id = subject_id
           GROUP BY subjects.name;";

      $result = $conn->query($sql);

      $data = array();
      $data[] = array('Matière', 'Moyenne des notes');
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $data[] = array($row["subject"], floatval($row["average_grade"]));
        }
      }
      $conn->close();
      // Génère le tableau JS
      echo "var data = google.visualization.arrayToDataTable(" . json_encode($data) . ");";
      ?>

          var options = {
            title: 'Moyenne des notes par matière',
            fontName: 'Poppins'
          };

          var chart1 = new google.visualization.PieChart(document.getElementById('chart_div1'));
          chart1.draw(data, options);

          var chart2 = new google.visualization.BarChart(document.getElementById('chart_div2'));
          chart2.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="chart_div1"></div>
    <div id="chart_div2"></div>
</body>
</html>