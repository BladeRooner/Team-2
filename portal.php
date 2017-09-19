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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="styles.css" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.js"></script>

        <title>Dashboard</title>
    </head>
    <body>

        <?php $currentPage = "portal"; include "header.php";?>

        <div class="container-fluid">
            <div class="row">

                <main class="col-md-12 pt-3" role="main">
                    <h1>Dashboard</h1>

                    <section class="row text-center">
                        <div class="col-md-6">
                            <div class="mx-auto" style="width: 25rem; padding-bottom: 20px;">
                                <div class="card card-portal">

                                    <h4 class="card-header text-center">Total Sales</h4>

                                    <div class="card-body card-body-portal">
                                        <div class="tab-content">

                                            <p class="card-text">28/08/2017 – 03/09/2017</p>
                                            <hr>

                                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-expanded="false">
                                                <div class="circle-widget circle-left">£20,420</div>
                                                <p class="card-text ticker-widget">⬆5%</p>
                                            </div>
                                            <div class="tab-pane fade" id="chart" role="tabpanel" aria-expanded="true">
                                                <canvas class="portal-chart" id="myChart"></canvas>
                                            </div>
                                            <div class="tab-pane fade" id="list" role="tabpanel" aria-expanded="true">
                                                <table class="table table-widget">
                                                        <thead>
                                                            <tr>
                                                                <th style="border-top: none;">Venue</th>
                                                                <th style="border-top: none;">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Mono</td>
                                                                <td>£5,329</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Liar</td>
                                                                <td>£4,874</td>
                                                            </tr>
                                                            <tr class="table-primary">
                                                                <td>Air Bar</td>
                                                                <td>£4,329</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Floor 5</td>
                                                                <td>£3,102</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Entertainments</td>
                                                                <td>£2,533</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Entertainments</td>
                                                                <td>£2,533</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Entertainments</td>
                                                                <td>£2,533</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Entertainments</td>
                                                                <td>£2,533</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Entertainments</td>
                                                                <td>£2,533</td>
                                                            </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <ul class="nav nav-pills card-header-pills nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#overview" data-toggle="tab"><i class="fa fa-eye" aria-hidden="true"></i> Overview</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#chart" data-toggle="tab"><i class="fa fa-pie-chart" aria-hidden="true"></i>
                                                     Chart</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#list" data-toggle="tab"><i class="fa fa-list" aria-hidden="true"></i>
                                                     List</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mx-auto" style="width: 25rem; padding-bottom: 20px;">
                                <div class="card card-portal">
                                    <h4 class="card-header text-center">New Consumers</h4>

                                    <div class="card-body card-body-portal">
                                        <div class="tab-content">

                                            <p class="card-text">28/08/2017 – 03/09/2017</p>
                                            <hr>

                                            <div class="tab-pane fade show active" id="overview2" role="tabpanel" aria-expanded="false">
                                                <div class="circle-widget circle-right">526</div>
                                                <p class="card-text ticker-widget">⬇2%</p>
                                            </div>
                                            <div class="tab-pane fade" id="chart2" role="tabpanel" aria-expanded="true">
                                                <canvas class="portal-chart" id="myChart2"></canvas>
                                            </div>
                                            <div class="tab-pane fade" id="list2" role="tabpanel" aria-expanded="true">
                                                <table class="table table-widget">
                                                    <thead>
                                                    <tr>
                                                        <th style="border-top: none;">Venue</th>
                                                        <th style="border-top: none;">Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Mono</td>
                                                        <td>99</td>
                                                    </tr>
                                                    <tr class="table-primary">
                                                        <td>Air Bar</td>
                                                        <td>10</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Liar</td>
                                                        <td>3</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Floor 5</td>
                                                        <td>2</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <ul class="nav nav-pills card-header-pills nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#overview2" data-toggle="tab"><i class="fa fa-eye" aria-hidden="true"></i> Overview</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#chart2" data-toggle="tab"><i class="fa fa-pie-chart" aria-hidden="true"></i> Chart</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#list2" data-toggle="tab" ><i class="fa fa-list" aria-hidden="true"></i> List</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
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
                animation: false
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
                animation: false
            }
        });

    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    </body>
</html>