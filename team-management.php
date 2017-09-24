<?php
    $pageTitle = "Overview | Management";
    $currentPage = "management";
    include "header.php";
?>

        <div class="container-fluid">
            <div class="row">

                <nav class="col-md-2 d-none d-sm-block bg-light sidebar">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="team-management.php">Overview<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="team-create.php">Create User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="team-edit.php">Manage User</a>
                        </li>
                    </ul>

                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Example</a>
                        </li>
                    </ul>
                </nav>

                <main class="ml-sm-auto col-md-10 pt-3" role="main">
                    <h1 id="overview">Team Overview</h1>
                </main>

            </div>
        </div>
    </body>
</html>