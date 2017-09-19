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
        <link href="assets/styles.css" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.js"></script>

        <title>Overview | Graphs</title>

    </head>
    <body>

        <?php $currentPage = "graph"; include "header.php";?>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-sm-block bg-light sidebar">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="graph-overview.php">Overview<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="graph-consumers.php">Consumers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="graph-outlets.php">Outlets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="graph-transactions.php">Transactions</a>
                        </li>
                    </ul>

                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Export</a>
                        </li>
                    </ul>
                </nav>

                <main class="ml-sm-auto col-md-10 pt-3" role="main">
                    <h1 id="overview">Overview</h1>

                    <section class="row">
                        <div class="col-md-3 left">

                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Year</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>2017</option>
                                        <option>2016</option>
                                        <option>2015</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Timescale</label>
                                    <select class="form-control" id="exampleFormControlSelect2">
                                        <option>Week</option>
                                        <option>Month</option>
                                        <option>Quarter</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect3">Outlet</label>
                                    <select multiple class="form-control" id="exampleFormControlSelect3">
                                        <option>Mono</option>
                                        <option>Liar</option>
                                        <option>Air Bar</option>
                                        <option>Floor 5</option>
                                        <option>Entertainments</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-check-label" style="float: left;">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Compare To
                                    </label>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect2">
                                        <option>2017</option>
                                        <option>2016</option>
                                        <option>2015</option>
                                    </select>
                                </div>
                            </form>

                        </div>
                        <div class="col-md-9 right">
                            <canvas id="line-chart"></canvas>
                        </div>
                    </section>
                </main>

            </div>
        </div>

    <script>

        new Chart(document.getElementById("line-chart"), {
            type: 'line',
            data: {
                labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
                datasets: [{
                    data: [86,114,106,106,107,111,133,221,783,2478],
                    label: "Mono",
                    borderColor: "#3e95cd",
                    fill: false
                }, {
                    data: [282,350,411,502,635,809,947,1402,3700,5267],
                    label: "Liar",
                    borderColor: "#8e5ea2",
                    fill: false
                }, {
                    data: [168,170,178,190,203,276,408,547,675,734],
                    label: "Air Bar",
                    borderColor: "#3cba9f",
                    fill: false
                }, {
                    data: [40,20,10,16,24,38,74,167,508,784],
                    label: "Floor 5",
                    borderColor: "#e8c3b9",
                    fill: false
                }, {
                    data: [6,3,2,2,7,26,82,172,312,433],
                    label: "Entertainments",
                    borderColor: "#c45850",
                    fill: false
                }
                ]
            },
            options: {
                title: {
                    display: false,
                    text: 'World population per region (in millions)'
                },
                scales: {
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Total (£)'
                        }
                    }]
                }
            }
        });


    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    </body>
</html>