<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php 
    // Start the session
    // if($_SESSION['login'])
    // {
?>
<?php
    //require "../../controller/controller_notice/PriceDisplay.php"
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/noticeANDprice.css">
    <link rel="stylesheet" href="../assets/css/hoivien.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css">
</head>

<body>

    <div class="tab-bar" style="top: 20px; bottom:20px;">
        <button class="fix tab-button active">Thông báo</button>
        <button class="tab-button">Giá cả</button>
        <button class="tab-button">Giá cả</button>
        <button class="tab-button">Giá cả</button>
        <button class="tab-button">Giá cả</button>

    </div>

    <div class="tab-content">
        <div class="tab-pane active">

        <div class="chart-container" style="left:50px; top:50px; position: relative; height:60vh; width:80%">
            <canvas id="myChart"></canvas>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                  const ctx = document.getElementById('myChart');

                new Chart(ctx, {
                  type: 'line',
                  data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                      label: '# of Votes',
                      data: [12, 19, 3, 5, 2, 3],
                      borderWidth: 1
                    }]
                  },
                  options: {
                    scales: {
                      y: {
                        beginAtZero: true
                      }
                    }
                  }
                });
                </script>

            </div>
            <div class=" tab-pane" style="top 20px">

                  haha
            </div>
        </div>
        
        
        

    

</body>

</html>




<script>
const tabButtons = document.querySelectorAll('.tab-button');
const tabPanes = document.querySelectorAll('.tab-pane');

tabButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        tabButtons.forEach(button => button.classList.remove('active'));
        tabPanes.forEach(pane => pane.classList.remove('active'));

        button.classList.add('active');
        tabPanes[index].classList.add('active');
    });
});
</script>

<?php 
    // }
    // else{
    //     header("Location: dang_nhap.php");
    // }
?>

