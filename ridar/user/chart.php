<?php
    $connect = mysqli_connect('localhost', 'root', '', 'kp');
   // $data_penjualan = mysqli_query($connect, "SELECT tanggal, SUM(total) AS total FROM penjualan GROUP BY tanggal");
    $query = mysqli_query($connect,"SELECT area_id, area_name, count(site_id) as hitung  FROM site LEFT JOIN area USING(area_id) GROUP BY area_id");
    $nama = array();
    $total = array();

    while ($data = mysqli_fetch_array($query)) {
      $nama[] = $data['area_name']; // Memasukan tanggal ke dalam array
      $total[] = $data['hitung']; // Memasukan total ke dalam array
    }
    ?>

    <!DOCTYPE html>
    <html>
    <head>
      
      <style>
        .container {
          width: 100%;
          margin: 15px 10px;
        }

        .chart {
          width: 60%;
          
          text-align: center;
        }
      </style>
      <script type="text/javascript" src="Chart.bundle.min.js"></script>
    </head>
    <body>
      
        <div class="chart">
          <h2></h2>
          <canvas id="line-chart"></canvas>
        </div>
      </div>

      <script>
        var linechart = document.getElementById('line-chart');
        var chart = new Chart(linechart, {
          type: 'line',
          data: {
            labels: <?php echo json_encode($nama) ?>, // Merubah data nama menjadi format JSON
            datasets: [{
              label: 'Jumlah Site',
              data: <?php echo json_encode($total) ?>,
              borderColor: 'rgba(31,144,212)',
              backgroundColor: 'transparent',
              borderWidth: 2
            }]
          }
        });
      </script>
    </body>
    </html>