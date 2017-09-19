<?php
/**
 * Created by IntelliJ IDEA.
 * User: cmckillop
 * Date: 13/09/2017
 * Time: 10:45
 */
?>

<!DOCTYPE HTML>
<html lang="en-GB">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link href="styles.css" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.js"></script>

        <title>Dashboard</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand" href="#">
            <img src="assets/light_logo.png" width="140" height="30" alt="DUSA Logo">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="portal.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="graph-overview.php">Graphs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Import</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Options
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" id="account-dropdown" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

        <div class="container-fluid">
            <div class="row">

                <main class="col-sm-12 ml-sm-auto col-md-12 pt-3" role="main">
                    <h1>Dashboard</h1>

                    <section class="row text-center placeholders year-current">
                        <div class="col-6 col-sm-6 placeholder">
                            <div class="mx-auto" style="width: 22rem;">
                                <div class="card card-portal">
                                    <h4 class="card-header text-center">Yoyo Sales</h4>

                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-expanded="false">
                                                <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="125" height="125" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                                                <div class="text-muted">⬆3%</div>
                                            </div>
                                            <div class="tab-pane fade" id="chart" role="tabpanel" aria-expanded="true">
                                                </canvas><canvas class="portal-chart" id="myChart"></canvas>
                                            </div>
                                            <div class="tab-pane fade" id="list" role="tabpanel" aria-expanded="true">
                                                <p class="card-text">Table here</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <ul class="nav nav-pills card-header-pills nav-fill" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#overview" data-toggle="tab">Overview</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#chart" data-toggle="tab">Chart</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#list" data-toggle="tab" >List</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-sm-6 placeholder">
                            <div class="mx-auto" style="width: 22rem;">
                                <div class="card card-portal">
                                    <h4 class="card-header text-center">Yoyo Sales</h4>

                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="overview2" role="tabpanel" aria-expanded="false">
                                                <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="125" height="125" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                                                <div class="text-muted">⬇5%</div>
                                            </div>
                                            <div class="tab-pane fade" id="chart2" role="tabpanel" aria-expanded="true">
                                                </canvas><canvas class="portal-chart" id="myChart2"></canvas>
                                            </div>
                                            <div class="tab-pane fade" id="list2" role="tabpanel" aria-expanded="true">
                                                <p class="card-text">Table here</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <ul class="nav nav-pills card-header-pills nav-fill" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#overview2" data-toggle="tab">Overview</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#chart2" data-toggle="tab">Chart</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#list2" data-toggle="tab" >List</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <section class="row text-center placeholders year-last">
                    </section>
                </main>
            </div>
        </div>

    <script>

        var ctx = document.getElementById("myChart").getContext('2d');
        var ctx2 = document.getElementById("myChart2").getContext('2d');

        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["M", "T", "W", "T", "F", "S", "S"],
                datasets: [{
                    backgroundColor: [
                        "#2ecc71",
                        "#3498db",
                        "#95a5a6",
                        "#9b59b6",
                        "#f1c40f",
                        "#e74c3c",
                        "#34495e"
                    ],
                    data: [12, 19, 3, 17, 28, 24, 7]
                }]
            },
            options: {
                legend: {
                    display: false
                },
            }
        });

        var myChart2 = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ["M", "T", "W", "T", "F", "S", "S"],
                datasets: [{
                    backgroundColor: [
                        "#2ecc71",
                        "#3498db",
                        "#95a5a6",
                        "#9b59b6",
                        "#f1c40f",
                        "#e74c3c",
                        "#34495e"
                    ],
                    data: [20, 9, 3, 10, 3, 13, 9]
                }]
            },
            options: {
                legend: {
                    display: false
                },
            }
        });

    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    </body>
</html>