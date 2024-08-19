<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>JoJo Stand Visualizer</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" />

    <iframe src="data/theme.mp3" type="audio/mp3" allow="autoplay" id="audio" style="display:none"></iframe>
    <audio id="myAudio" loop controls>
        <source src="data/theme.mp3" type="audio/mp3">
    </audio>

    <style>
      body {
          background-image: url('data/wallpaper.jpg');
          background-size: cover;
          background-repeat: no-repeat;
          background-attachment: fixed;
      }
    </style>

</head>
<body>
    <div class="wrapper">
        <h1>Stand-Visualizer By Anis</h1>
        <div id="container">
            <div class="row">
                <div class="col">
                    <!-- Scatterplot in Bootstrap Card -->
                    <div class="card mb-3">
                        <div class="card-header">
                            Scatterplot
                        </div>
                        <div class="card-body">
                            <svg class="jojoChart" id="scatterplot"></svg>
                        </div>
                    </div>
                </div>

                <div class="col">
                <!-- Radar Chart in Bootstrap Card -->
                    <div class="card mb-3">
                        <div class="card-header">
                            Radar Chart
                        </div>
                        <div class="card-body">
                            <div id="stand-chart">No Selected Stand</div>
                            <div id="radarChart">
                                <div id="stand-bg"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <!-- Piechart in Bootstrap Card -->
                    <div class="card mb-3">
                        <div class="card-header">
                            Piechart
                        </div>
                        <div class="card-body" style="overflow-x: auto;">
                            <svg class="jojoChart" id="barchart"></svg>
                        </div>
                        <!-- Legend for the Pie Chart -->
                        <div class="card-footer">
                            <div id="pie-legend">
                                <div id="legend">
                                    <div class="legend-item">
                                        <div class="legend-color" style="background-color: #FDB813;"></div>
                                        <div class="legend-label">Part 3: Stardust Crusaders</div>
                                    </div>
                                    <div class="legend-item">
                                        <div class="legend-color" style="background-color: #0080C9;"></div>
                                        <div class="legend-label">Part 4: Diamond is Unbreakable</div>
                                    </div>
                                    <!-- Add more legend items for other parts as needed -->
                                    <div class="legend-item">
                                        <div class="legend-color" style="background-color: #FF6F61;"></div>
                                        <div class="legend-label">Part 5: Vento Aureo</div>
                                    </div>
                                    <div class="legend-item">
                                        <div class="legend-color" style="background-color: #87CEEB;"></div>
                                        <div class="legend-label">Part 6: Stone Ocean</div>
                                    </div>
                                    <!-- Add more legend items for other parts as needed -->
                                    <div class="legend-item">
                                        <div class="legend-color" style="background-color: #4CAF50;"></div>
                                        <div class="legend-label">Part 7: Steel Ball Run</div>
                                    </div>
                                    <div class="legend-item">
                                        <div class="legend-color" style="background-color: #DA70AF;"></div>
                                        <div class="legend-label">Part 8: JoJolion</div>
                                    </div>
                                    <!-- Add more legend items for other parts as needed -->
                                    <div class="legend-item">
                                        <div class="legend-color" style="background-color: #800080;"></div>
                                        <div class="legend-label">Light Novel: Purple Haze Feedback</div>
                                    </div>
                                    <div class="legend-item">
                                        <div class="legend-color" style="background-color: #FFD700;"></div>
                                        <div class="legend-label">Featured</div>
                                    </div>
                                    <!-- Add more legend items for other parts as needed -->
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header">
                        Stand 3D rendering
                    </div>
                    <div class="card-body" style="width: 700px; height: 350px;">
                        <div id="3dmodel"></div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-3">
                    <div class="card-header">
                        Heatmap for all stands.
                    </div>
                    <div class="card-body" style="width: 1100px; height: 550px;">
                        <div id="heatmap_viz"></div>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card mb-3">
                    <div class="card-header">
                        Comparative stand powers barchart in each season.
                    </div>
                    <div class="card-body" style="width:1100px; height: 550px;">
                        <div id="stacked_bar_chart"></div>
                    </div>
                </div>
            </div>


        </div>
            <!-- Tooltips -->
            <div id="tooltip"></div>
            <div id="barchartTooltip"></div>
            <div id="select-stand-popup"></div>
        </div>
    </div>
  </div>

    <!-- Scripts -->
    <script src="js/d3.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/87/three.min.js"></script>
    <script src="data/3D/assets/OrbitControls.js"></script>
    <script src="data/3D/assets/OBJLoader.js"></script>
    <script src="data/3D/assets/MTLLoader.js"></script>

    <script src="js/main_jojo.js"></script>
    <script src="js/scatterplotJoJo.js"></script>
    <script src="js/piechartJojo.js"></script>
    <script src="js/3D.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>
    <script src="js/heatmap_new.js"></script>
    <script src="js/stacked_bar_chart.js"></script>





</body>
</html>