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