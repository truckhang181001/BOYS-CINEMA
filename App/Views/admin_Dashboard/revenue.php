<div class="chart-container d-flex justify-content-center">
    <div id="myPlot" style="width:100%;max-width:700px"></div>
</div>
<script>
    var xArray = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
    var yArray = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

    // Define Data
    var data = [{
        x: xArray,
        y: yArray,
        mode: "lines"
    }];

    // Define Layout
    var layout = {
        xaxis: {
            range: [40, 160],
            title: "DOANH THU (TRIỆU)"
        },
        yaxis: {
            range: [5, 16],
            title: "THỜI GIAN"
        },
        title: "TỔNG DOANH THU"
    };

    // Display using Plotly
    Plotly.newPlot("myPlot", data, layout);
</script>