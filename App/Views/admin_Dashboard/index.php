<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<section class="dashboard">
    <div class="revenue row">
        
    </div>
    <div id="revenueChart" style="width:100%;max-width:700px"></div>    
</section>

<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script>
var xArray = [50,60,70,80,90,100,110,120,130,140,150];
var yArray = [7,8,8,9,9,9,10,11,14,14,15];

// Define Data
var data = [{
  x: xArray,
  y: yArray,
  mode:"lines"
}];

// Define Layout
var layout = {
  xaxis: {range: [40, 160], title: "Square Meters"},
  yaxis: {range: [5, 16], title: "Price in Millions"},  
  title: "House Prices vs. Size"
};

// Display using Plotly
Plotly.newPlot("revenueChart", data, layout);
</script>