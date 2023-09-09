<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statics</title>
    <link href="styles.css" rel="stylesheet">

    <style>
/* Reset some default browser styles */
body, h1 {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

.flex-wrapper {
    display: flex;
    flex-flow: row nowrap;
}

.single-chart {
    width: 33%;
    justify-content: space-around;
}

.circular-chart {
    display: block;
    margin: 10px auto;
    max-width: 80%;
    max-height: 250px;
}

.circle-bg {
    fill: none;
    stroke: #eee;
    stroke-width: 3.8;
}

.circle {
    fill: none;
    stroke-width: 2.8;
    stroke-linecap: round;
    animation: progress 1s ease-out forwards;
}

@keyframes progress {
    0% {
        stroke-dasharray: 0 100;
    }
}

.circular-chart.orange .circle {
    stroke: #ff9f00;
}

.circular-chart.green .circle {
    stroke: #4CC790;
}

.circular-chart.blue .circle {
    stroke: #3c9ee5;
}

.percentage {
    fill: #666;
    font-family: sans-serif;
    font-size: 0.5em;
    text-anchor: middle;
}

/* Add more CSS styles as needed */

        
    </style>
</head>
<body>
    <div class="flex-wrapper">
        <div class="single-chart">
            <svg viewBox="0 0 36 36" class="circular-chart orange">
                <path class="circle-bg"
                    d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                <path id="percent1" class="circle"
                    d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                <text id="firstPercent" x="18" y="20.35" class="percentage">40</text>
            </svg>
        </div>

        <div class="single-chart">
            <svg viewBox="0 0 36 36" class="circular-chart green">
                <path class="circle-bg"
                    d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                <path id="percent2" class="circle"
                    d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                <text id="secPercent" x="18" y="20.35" class="percentage">20</text>
            </svg>
        </div>

        <div class="single-chart">
            <svg viewBox="0 0 36 36" class="circular-chart blue">
                <path class="circle-bg"
                    d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                <path id="percent3" class="circle"
                    d="M18 2.0845
          a 15.9155 15.9155 0 0 1 0 31.831
          a 15.9155 15.9155 0 0 1 0 -31.831" />
                <text id="thirdPercent" x="18" y="20.35" class="percentage">18</text>
            </svg>
        </div>
    </div>
    <div style="display: flex; justify-content: space-around; width: 100%;">
        <h4>Number of Volunteers</h4>
        <h4>Number of Donations</h4>
        <h4>Donations of </h4>
    </div>
    <br />
    <br />
    <br />
    <br />

    <div style="display: flex; justify-content: space-evenly; width: 100%;">
        <div style="font-size: 25px">
            <span style="font-size: 55px; color: #FF9F29;">8</span>
            Donations
        </div>
        <div style="font-size: 25px">
            <span style="font-size: 55px; color: #FF9F29;">7</span>
            Beneficiary
        </div>
    </div>
    <script>
        // Assuming you have an array of percentage values
var percentageValues = [40, 20, 18];

// Loop through the percentage values and set the stroke-dasharray for each chart
for (var i = 0; i < percentageValues.length; i++) {
    var pathElement = document.getElementById("percent" + (i + 1));
    var percentageValue = percentageValues[i];

    // Calculate the stroke-dasharray value based on the percentage (e.g., from 0 to 100)
    var strokeDashValue = percentageValue;

    // Ensure the strokeDashValue doesn't exceed 100 or go below 0
    strokeDashValue = Math.max(0, Math.min(100, strokeDashValue));

    // Set the stroke-dasharray attribute of the path element
    pathElement.setAttribute("stroke-dasharray", strokeDashValue + " 100");
}

    </script>
</body>
</html>
