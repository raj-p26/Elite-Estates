<?php
error_reporting(0);
session_start();
include 'db.php';
$name = $_SESSION['username'];
$new_flats = $conn->query('SELECT * FROM flats ORDER BY flat_id DESC LIMIT 3');
$new_ready_to_move_ins = $conn->query('SELECT * FROM ready_to_move_in ORDER BY property_id DESC LIMIT 3');
$new_commercial_properties = $conn->query('SELECT * FROM commercial_properties ORDER BY commercial_property_id DESC LIMIT 3');
$new_upcoming_projects = $conn->query('SELECT * FROM upcoming_projects ORDER BY upcoming_project_id DESC LIMIT 3');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Elite Estates</title>
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/navbars.css" />
    <link rel="stylesheet" href="./styles/contact-form.css" />
    <link rel="stylesheet" href="./styles/footers.css" />
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <script defer src="scripts/ajaxs.js"></script>
    <script defer src="scripts/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="hero-section">
        <?php include 'components/navbars.php' ?>
        <div class="layout">
            <div class="quote">
                <h1>Let us find the perfect home for you and your family</h1>
                <p>We are greatful to help you out by finding out some of our finest properties by our finest agents. If
                    you are an agent and looking for some services, you can join us.</p>
            </div>
        </div>
    </div>
    <div class="content-box">
        <div class="property-category">
            <h2>What are you looking for?</h2>
            <div class="category-grid">
                <div class="category-item">
                    <img src="images/apartment-img-7.jpeg" alt="upcoming project img" height="200" />
                    <h3>Flats</h3>
                    <a href="./templates/flats.php">see more &rarr;</a>
                </div>
                <div class="category-item">
                    <img src="images/apartment-img-6.jpg" alt="ready-to-move-in" height="200" />
                    <h3>Ready to Move-in</h3>
                    <a href="./templates/ready-to-move-ins.php">see more &rarr;</a>
                </div>
                <div class="category-item">
                    <img src="images/apartment-img-4.jpg" alt="ready-to-move-in" height="200" />
                    <h3>Upcoming Projects</h3>
                    <a href="./templates/upcoming-projects.php">see more &rarr;</a>
                </div>
                <div class="category-item">
                    <img src="images/apartment-img-7.jpeg" alt="ready-to-move-in" height="200" />
                    <h3>Commercial Properties</h3>
                    <a href="./templates/commercial-properties.php">see more &rarr;</a>
                </div>
            </div>
        </div>

        <div class="new-properties">
            <h2>Newly Published Flats</h2>
            <div class="property-grid">
                <?php while ($row = $new_flats->fetch_array()) { ?>
                    <div class="grid-item">
                        <img src="./images/property-images/<?php echo $row['flat_image_1'] ?>" alt="new flat image" height="200" />
                        <h3><?php echo $row['flat_name'] ?></h3>
                        <a href="./view/view-flat.php?flat_id=<?php echo $row['flat_id'] ?>">View Details &rarr;</a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="new-properties">
            <h2>Newly Published Ready to Move Ins</h2>
            <div class="property-grid">
                <?php while ($row = $new_ready_to_move_ins->fetch_array()) { ?>
                    <div class="grid-item">
                        <img src="./images/property-images/<?php echo $row['property_image_1'] ?>" alt="new ready to move in image" height="200" />
                        <h3><?php echo $row['property_name'] ?></h3>
                        <a href="./view/view-rtmi.php?rtmi_id=<?php echo $row['property_id'] ?>">View Details &rarr;</a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="new-properties">
            <h2>New Commercial Properties</h2>
            <div class="property-grid">
                <?php while ($row = $new_commercial_properties->fetch_array()) { ?>
                    <div class="grid-item">
                        <img src="./images/property-images/<?php echo $row['commercial_property_image_1'] ?>" alt="new commercial property image" height="200" />
                        <h3><?php echo $row['commercial_property_name'] ?></h3>
                        <a href="./view/view-cp.php?cp_id=<?php echo $row['commercial_property_id'] ?>">View Details &rarr;</a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="new-properties">
            <h2>Newl Upcoming Projects</h2>
            <div class="property-grid">
                <?php while ($row = $new_upcoming_projects->fetch_array()) { ?>
                    <div class="grid-item">
                        <img src="./images/property-images/<?php echo $row['upcoming_project_image_1'] ?>" alt="new upcoming project image" height="200" />
                        <h3><?php echo $row['upcoming_project_name'] ?></h3>
                        <a href="./view/view-up.php?up_id=<?php echo $row['upcoming_project_id'] ?>">View Details &rarr;</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php include 'components/contact-form.php' ?>
    <?php include 'components/footer.php' ?>
    <script src="./scripts/jquery.js"></script>
</body>
</html>