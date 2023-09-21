<?php
session_start();
if ($_SESSION['isAdmin'] == false) header('location: index.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Elite Estates</title>
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="./styles/admin.css" />
</head>

<body>
    <div class="page-container">
        <div class="flex-shrink-0 p-3" style="width: 25%; border: 1px solid black; height: 100vh; position: relative;">
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <button class="btn border btn-toggle w-100 d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse">
                        <b>List</b>
                    </button>
                    <div class="collapse" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="list-flats link-body-emphasis ps-4 d-inline-flex text-decoration-none rounded">Flats</a></li>
                            <li><a href="#" class="list-rtmi link-body-emphasis ps-4 d-inline-flex text-decoration-none rounded">Ready-to-move-ins</a></li>
                            <li><a href="#" class="list-cp link-body-emphasis ps-4 d-inline-flex text-decoration-none rounded">Commercial Properties</a></li>
                            <li><a href="#" class="list-up link-body-emphasis ps-4 d-inline-flex text-decoration-none rounded">Upcoming Projects</a></li>
                            <li><a href="#" class="list-users link-body-emphasis ps-4 d-inline-flex text-decoration-none rounded">Users</a></li>
                            <li><a href="#" class="list-agents link-body-emphasis ps-4 d-inline-flex text-decoration-none rounded">Agents</a></li>
                            <li><a href="#" class="list-user-feedbacks link-body-emphasis ps-4 d-inline-flex text-decoration-none rounded">User Feedbacks</a></li>
                            <li><a href="#" class="list-temp link-body-emphasis ps-4 d-inline-flex text-decoration-none rounded">Temp</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn border btn-toggle w-100 d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse">
                        <b>Add</b>
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-body-emphasis ps-4 d-inline-flex text-decoration-none rounded" data-bs-toggle="modal" data-bs-target="#flatStaticBackdrop">Flat</a></li>
                            <li><a href="#" class="link-body-emphasis ps-4 d-inline-flex text-decoration-none rounded" data-bs-toggle="modal" data-bs-target="#rtmiStaticBackdrop">Ready-to-move-in</a></li>
                            <li><a href="#" class="link-body-emphasis ps-4 d-inline-flex text-decoration-none rounded" data-bs-toggle="modal" data-bs-target="#cpStaticBackdrop">Commercial Property</a></li>
                            <li><a href="#" class="link-body-emphasis ps-4 d-inline-flex text-decoration-none rounded" data-bs-toggle="modal" data-bs-target="#upStaticBackdrop">Upcoming Project</a></li>
                            <li><a href="#" class="link-body-emphasis ps-4 d-inline-flex text-decoration-none rounded" data-bs-toggle="modal" data-bs-target="#agentStaticBackdrop">Agent</a></li>
                        </ul>
                    </div>
                </li>
                <div class="separate">
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="index.php" target="_blank" class="link-body-emphasis d-inline-flex text-decoration-none rounded">See Changes</a></li>
                        </ul>
                    </li>
                </div>
            </ul>
        </div>

        <!-- flat Modal -->
        <?php include './components/flat-modal.php' ?>

        <!-- cp Modal -->
        <?php include './components/commercial-property-modal.php' ?>

        <!-- rtmi Modal -->
        <?php include './components/ready-to-move-in-modal.php' ?>

        <!-- up Modal -->
        <?php include './components/upcoming-project-modal.php' ?>

        <!-- agent Modal -->
        <?php include './components/agent-modal.php' ?>

        <div class="main-section pt-3" style="width: 75%; height: 100vh; border: 1px solid black">
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="./scripts/ajaxs.js"></script>
<script src="./scripts/jquery.js"></script>
</html>