<div id="chart" class="section techwix-service-section-04 section-padding">
    <div class="section-title text-center">

        <h2 class="title">chiffre d'affaire</h2>
    </div>
    <div class="container">
        <div class="service-wrap">
            <!-- Service Top Start -->
            <div class="service-top">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <!-- Experience Wrap Start -->
                        <!-- Circular Chart Section -->

                        <!-- Add your circular chart canvas here -->
                        <canvas id="lineChart"></canvas>


                        <!-- Experience Wrap End -->
                    </div>

                </div>
            </div>
            <!-- Service Top End -->
        </div>
    </div>
</div>



<!-- Include Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- JavaScript code to initialize and populate the charts -->
<script>
    // Circular Chart


    // Line Chart
    var lineChartCanvas = document.getElementById('lineChart').getContext('2d');
    var lineChart = new Chart(lineChartCanvas, {
        type: 'bar',
        data: {
            labels: [2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019,
                2020, 2021, 2022,
            ],
            datasets: [{
                label: 'chiffre d\'affaire',
                data: [151226, 161389, 127610, 107994, 181191, 392972, 260221, 632226,
                    478355, 263059, 659600, 1188054, 1328064, 1174208, 1640000,
                ],
                borderColor: '#086ad8',
                borderWidth: 2,
                fill: false
            }]
        }
    });
</script>