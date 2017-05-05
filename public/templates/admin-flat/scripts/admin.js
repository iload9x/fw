$(document).ready(function() {
    var globalOptions = {
        responsive: true,
        legend: {
            labels: {
                fontColor: "#90969D"
            }
        },
        scales: {
            xAxes: [{
                ticks: {
                    fontColor: "#90969D"
                },
                gridLines: {
                    color: "#37393F"
                }
            }],
            yAxes: [{
                ticks: {
                    fontColor: "#90969D"
                },
                gridLines: {
                    color: "#37393F"
                }
            }]
        }
    };

    var lineData = {
        labels: labelsDataThisMonth,
        datasets: [

            {
                label: "Tháng này",
                backgroundColor: 'transparent',
                borderColor: "#f6a821",
                pointBorderWidth: 0,
                pointRadius: 2,
                pointBorderColor: '#f6a821',
                borderWidth: 1,
                data: postDataThisMonth
            }, {
                label: "Tháng trước",
                backgroundColor: 'transparent',
                borderColor: "#676B73",
                pointBorderWidth: 0,
                pointRadius: 2,
                pointBorderColor: '#676B73',
                borderWidth: 1,
                data: postDataLastMonth
            }
        ]
    };

    var c1 = document.getElementById("lineOptions").getContext("2d");
    new Chart(c1, { type: 'line', data: lineData, options: globalOptions });



    /**
     * Data for Bar chart
     */
    var barData = {
        labels: labelsDataThisMonth,
        datasets: [{
            label: "Tháng này",
            backgroundColor: 'transparent',
            borderColor: "#f6a821",
            borderWidth: 1,
            data: viewDataThisMonth
        }, {
            label: "Tháng trước",
            backgroundColor: 'transparent',
            borderColor: "#676B73",
            borderWidth: 1,
            data: viewDataLastMonth
        }]
    };

    var c3 = document.getElementById("barOptions").getContext("2d");
    new Chart(c3, { type: 'bar', data: barData, options: globalOptions });
});
