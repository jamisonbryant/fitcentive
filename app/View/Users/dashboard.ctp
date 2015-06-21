<?php $this->assign('title', 'Dashboard'); ?>

<!-- Scripts -->
<?php echo $this->Html->script('chartjs/Chart'); ?>

<!-- Styles -->
<style>
    canvas {
        width: 100%;
    }
</style>

<!-- Stats -->
<div class="row">
    <div class="col l4">
        <div class="card">
            <div class="card-content">
                <span class="card-title black-text">Steps</span>
                <p class="grey-text">600 / 1000 steps</p>
            </div>
            <div class="card-action">
                <a href="javascript:void(0);">Update</a>
            </div>
        </div>
    </div>
    <div class="col l4">
        <div class="card">
            <div class="card-content">
                <span class="card-title black-text">Food</span>
                <p class="grey-text">350 / 1000 calories</p>
            </div>
            <div class="card-action">
                <a href="javascript:void(0);">Update</a>
            </div>
        </div>
    </div>
    <div class="col l4">
        <div class="card">
            <div class="card-content">
                <span class="card-title black-text">Exercise</span>
                <p class="grey-text">400 / 1000 calories</p>
            </div>
            <div class="card-action">
                <a href="javascript:void(0);">Update</a>
            </div>
        </div>
    </div>
</div>

<!-- Charts -->
<div class="row">
    <div class="col l6">
        <div class="card-panel">
            <script>
                $(document).ready(function() {
                    // Construct data
                    var data = {
                        labels: ['6/7', '6/8', '6/9', '6/10', '6/11', '6/12', '6/13', '6/14', '6/15', '6/16', '6/17', '6/18', '6/19', '6/20'],
                        datasets: [
                            {
                                fillColor: 'rgba(244, 67, 54, 0.2)',
                                strokeColor: 'rgba(239, 83, 80, 1)',
                                pointColor: 'rgba(239, 83, 80, 1)',
                                pointStrokeColor: '#fff',
                                pointHighlightFill: '#fff',
                                pointHighlightStroke: 'rgba(220,220,220,1)',
                                data: [4003, 4388, 3873, 3646, 3743, 3200, 3161, 3371, 4254, 3498, 3852, 3058, 3614, 4297]
                            }
                        ]
                    };

                    // Select options
                    var options = {
                        bezierCurve: false,
                        showTooltips: false
                    };

                    new Chart($('#stepchart').get(0).getContext('2d')).Line(data, options);
                });
            </script>

            <h5 class="center">Daily Steps</h5>
            <canvas id="stepchart"></canvas>
        </div>
    </div>
    <div class="col l6">
        <div class="card-panel">
            <script>
                $(document).ready(function() {
                    // Construct data
                    var data = {
                        labels: ['6/7', '6/8', '6/9', '6/10', '6/11', '6/12', '6/13', '6/14', '6/15', '6/16', '6/17', '6/18', '6/19', '6/20'],
                        datasets: [
                            {
                                fillColor: 'rgba(244, 67, 54, 0.2)',
                                strokeColor: 'rgba(239, 83, 80, 1)',
                                pointColor: 'rgba(239, 83, 80, 1)',
                                pointStrokeColor: '#fff',
                                pointHighlightFill: '#fff',
                                pointHighlightStroke: 'rgba(220,220,220,1)',
                                data: [1640, 1860, 1770, 1680, 1590, 1610, 1540, 1980, 1660, 1540, 2000, 1820, 1950, 1550]
                            }
                        ]
                    };

                    // Select options
                    var options = {
                        bezierCurve: false,
                        showTooltips: false
                    };

                    new Chart($('#calchart').get(0).getContext('2d')).Line(data, options);
                });
            </script>

            <h5 class="center">Daily Calories</h5>
            <canvas id="calchart"></canvas>
        </div>
    </div>
</div>
<div class="row">
    <div class="col l6">
        <div class="card-panel">
            <script>
                $(document).ready(function() {
                    // Construct data
                    var data = [
                        {
                            label: "Walking",
                            value: 800,
                            color: "#F44336"
                        },
                        {
                            label: "Running",
                            value: 500,
                            color: "#EF5350"
                        },
                        {
                            label: "Hiking",
                            value: 300,
                            color: "#E57373"
                        },
                        {
                            label: "Biking",
                            value: 700,
                            color: "#EF9A9A"
                        },
                        {
                            label: "Swimming",
                            value: 200,
                            color: "#FFCDD2"
                        }
                    ];

                    // Select options
                    var options = {
                        animationEasing: "linear",
                        animationSteps: 25,
                        showTooltips: false
                    };

                    var exerchart = new Chart($('#exerchart').get(0).getContext('2d')).Pie(data, options);
                });
            </script>

            <h5 class="center">Exercise Preference</h5>
            <canvas id="exerchart"></canvas>
        </div>
    </div>
    <div class="col l6">
        <div class="card-panel">
            <script>
                $(document).ready(function() {
                    // Construct data
                    var data = {
                        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                        datasets: [
                            {
                                label: "Healthy weight loss",
                                fillColor: 'rgba(244, 67, 54, 0.4)',
                                strokeColor: 'rgba(239, 83, 80, 0.4)',
                                data: [180, 175, 170, 165, 160, 155, 150]
                            },
                            {
                                label: 'Your weight loss',
                                fillColor: 'rgba(255, 152, 0, 0.4)',
                                strokeColor: 'rgba(251, 140, 0, 0.4)',
                                data: [180, 176, 171, 169, 163, 159, 155]
                            }
                        ]
                    };

                    // Select options
                    var options = {
                        showTooltips: false
                    };

                    var weightchart = new Chart($('#weightchart').get(0).getContext('2d')).Bar(data, options);
                });
            </script>

            <h5 class="center">Weight Loss Trend</h5>
            <canvas id="weightchart"></canvas>
        </div>
    </div>
</div>