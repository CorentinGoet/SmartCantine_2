const my_line_graph = document.getElementById("graph").getContext("2d");

Chart.defaults.global.defaultFontSize = 18;

let massPopChart = new Chart(my_line_graph, {
    type: "line", // bar, horizontalBar, pie, line, doughnut, radar, polarArea
    data: {
        labels: graph_labels,
        datasets: [
            {
                label: "niveau de bruit ",
                data: graph_values,
                backgroundColor: "#66CC66",
                hoverBorderWidth: 3,
            },
        ],
    },
    options: {
        title: {
            display: true,
            text: "exemple",
            fontSize: 24,
        },
        legend: {
            display: true,
        },
        // commence a 0
        scales: {
            yAxes: [
                {
                    ticks: {
                        beginAtZero: true,
                    },
                },
            ],
        },
        layout: {
            padding: {
                left: 100,
                right: 100,
                top: 50,
            },
        },
    },
});
