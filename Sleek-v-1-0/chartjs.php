<?php
$servername='localhost';
$dbuser = 'root';
$pass = '';
$dbname = 'fashion_ecommerce';
$conn = mysqli_connect($servername,$dbuser,$pass,$dbname);
if(!$conn)
{
    echo "connection failed";
}
$sql = "select * from category";
$result =mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
//echo "total records in the table are : " .$num . "<br>";
//display rows returned by sql query 
if($num>0)
{
    $cat = array();
    $i=0;
    while( $row =  mysqli_fetch_assoc($result))
    {
        // echo "inside loop";
       // echo $row['category_Name']."<br>";
        $cat[$i]=$row['category_Name'];
        $i++;
    }
 //print_r($cat);
//  $_SESSION['cat']=$cat;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>

    <title>Chart.js Charts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&display=swap" rel="stylesheet">
    <style>
    /* .chartjs-size-monitor
    {
        display:inline-block;
        width:50%;

    } */

    </style>
</head>

<body>
    <div class="container">
        <canvas id="myChart" ></canvas>
    </div>
    <div class="container">
        <canvas id="myChart1" ></canvas>
    </div>
</body>
<script src="chartjs.js">

</script>
<script>
//     Chart.plugins.register({
//    beforeDraw: function(c) {
//       var legends = c.legend.legendItems;
//       legends.forEach(function(e) {
//          e.fillStyle = 'brown';
//       });
//    }
// })
    let myChart = document.getElementById('myChart').getContext('2d');
    var cat_js = <?php echo json_encode($cat); ?>;
    //Global Options
    // Chart.defaults.global.defaultFontFamily = 'Baloo 2';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#000';
  
    let massPopChart = new Chart(myChart, {
        type: 'bar', //bar,horizontalbar,pie , line,doughnut,radar,polararea are different types
        data: {
            labels: cat_js,
            datasets: [{
                label: 'Total Products',
                data: [
                    400000,
                    423560,
                    527890,
                    390030,
                    903890
                ],
                // backgroundColor:'green' it will make every label green
                backgroundColor: [
                    'red',
                    'green',
                    'blue',
                    'orange',
                    'gray'
                ],
                borderWidth: 1,
                borderColor: '#777',
                hoverBorderWidth: 3,
                hoverBorderColor: 'black',

            }]
        },
        options: {
            title: {
                display: true,
                text: 'Population Chart ',
                fontSize: 25,

            },
            legend: {
                //legend is used to set the main datasets label
                position: 'right',
                display: true,
                // fillColor: "blue",
                // fillStyle: 'orange',
                // color:blue,
                // backgroundColor: blue,
            },
            layout: {
                padding: {
                    top: 60,
                    bottom: 0,
                    left: 100,
                    right: 100
                }
            },
            tooltips: {
                // enabled:false,
            },
            
        },
        plugins: [{

beforeDraw: function(c) {
var legends = c.legend.legendItems;
  legends.forEach(function(e) {
     e.fillStyle = 'cyan';
  });
}

}]

    })
    
    let myChart1 = document.getElementById('myChart1').getContext('2d');
    var cat_js = <?php echo json_encode($cat); ?>;
    //Global Options
    // Chart.defaults.global.defaultFontFamily = 'Baloo 2';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#000';
  
    let massPopChart1 = new Chart(myChart1, {
        type: 'doughnut', //bar,horizontalbar,pie , line,doughnut,radar,polararea are different types
        data: {
            labels: cat_js,
            datasets: [{
                label: 'Total Products',
                data: [
                    400000,
                    423560,
                    527890,
                    390030,
                    903890
                ],
                // backgroundColor:'green' it will make every label green
                backgroundColor: [
                    'red',
                    'green',
                    'blue',
                    'orange',
                    'gray'
                ],
                borderWidth: 1,
                borderColor: '#777',
                hoverBorderWidth: 3,
                hoverBorderColor: 'black',

            }]
        },
        options: {
            title: {
                display: true,
                text: 'Population Chart ',
                fontSize: 25,

            },
            legend: {
                //legend is used to set the main datasets label
                position: 'right',
                display: true,
                Color: "blue",
                // color:blue,
                // backgroundColor: blue,
            },
            layout: {
                padding: {
                    top: 60,
                    bottom: 0,
                    left: 100,
                    right: 100
                }
            },
            tooltips: {
                // enabled:false,
            }
        }

    })
    
</script>

</html>