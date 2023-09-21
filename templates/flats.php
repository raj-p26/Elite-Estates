<?php
session_start();
include '../db.php';
$result = $conn->query('SELECT * FROM flats');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flats</title>
    <link rel="stylesheet" href="../styles/flat.css" />
    <link rel="stylesheet" href="../styles/navbars.css" />
    <link rel="stylesheet" href="../styles/contact-form.css" />
    <link rel="stylesheet" href="../styles/footers.css" />
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <script defer src="../scripts/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <?php include '../components/navbars.php' ?>
    <div class="flat-lists container">
        <div class="grid-container">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="card">
                    <div class="image">
                        <img src="../images/property-images/<?php echo $row['flat_image_1'] ?>" alt="_" />
                    </div>
                    <div class="caption">
                        <p class="property-name"><?php echo $row['flat_name'] ?></p>
                        <p class="property-sqft"><?php echo $row['flat_sqft'] ?> sq-ft</p>
                        <p class="property-rent"><?php echo $row['flat_monthly_rent'] ?> Rs.</p>
                    </div>
                    <a href="../view/view-flat.php?flat_id=<?php echo $row['flat_id'] ?>">View Property</a>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php include '../components/contact-form.php' ?>
    <?php include '../components/footer.php' ?>
</body>
<script src="../scripts/jquery.js"></script>
</html>