<?php
session_start();
if (!isset($_GET['flat_id'])) {
    die('<h1>Not possible</h1>');
}
include '../db.php';
$result = $conn->query('SELECT * FROM flats WHERE flat_id=' . $_GET['flat_id'])->fetch_array();
$is_admin = false;
if (isset($_SESSION['isAdmin'])) {
    $is_admin = $_SESSION['isAdmin'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $result['flat_name'] ?></title>
    <link rel="stylesheet" href="../styles/navbars.css" />
    <link rel="stylesheet" href="../styles/contact-form.css" />
    <link rel="stylesheet" href="../styles/footers.css" />
    <link rel="stylesheet" href="../styles/view.css" />
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <script defer src="../scripts/ajaxs.js"></script>
    <script defer src="../scripts/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script defer>
        $(document).ready(function() {
            $('.contact-agent-btn').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "../contact-for-property.php",
                    data: {
                        propId: '<?php echo $result["flat_id"] ?>',
                        propType: 'flat'
                    },
                    dataType: "JSON",
                    success: function(response) {
                        if (response['success']) {
                            alert('You have registered for a flat, You will receive an email from our agent/dealer regarding updates.')
                        } else {
                            console.log(response);
                        }
                    }
                });
            });
        });
    </script>
</head>

<body>
    <?php include '../components/navbars.php' ?>
    <div class="container" style="margin-top: 100px;">
        <div class="carousel-container">
            <button class="carousel-left-btn" style="background-color: transparent; border: none;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" width="30" height="30" stroke="currentColor" class="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>
            <div class="carousel-item active">
                <img src="../images/property-images/<?php echo $result['flat_image_1'] ?>" alt="flat image 1" />
            </div>
            <div class="carousel-item">
                <img src="../images/property-images/<?php echo $result['flat_image_2'] ?>" alt="flat image 2" />
            </div>
            <div class="carousel-item">
                <img src="../images/property-images/<?php echo $result['flat_image_3'] ?>" alt="flat image 3" />
            </div>
            <button class="carousel-right-btn" style="background-color: transparent; border: none;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" height="30" width="30" stroke="currentColor" class="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>
        <div class="property-info">
            <h2>More Details</h2>
            <table class="details">
                <tbody>
                    <tr>
                        <td>Flat Name:</td>
                        <td><?php echo $result['flat_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Flat Location:</td>
                        <td><?php echo $result['flat_location'] ?></td>
                    </tr>
                    <tr>
                        <td>Flat bhk:</td>
                        <td><?php echo $result['flat_bhk'] ?></td>
                    </tr>
                    <tr>
                        <td>Square Feet:</td>
                        <td><?php echo $result['flat_sqft'] ?> sqft</td>
                    </tr>
                    <tr>
                        <td>Floor Level:</td>
                        <td><?php echo $result['flat_floor_level'] ?></td>
                    </tr>
                    <tr>
                        <td>Monthly Rent:</td>
                        <td><?php echo $result['flat_monthly_rent'] ?> Rs.</td>
                    </tr>
                    <tr>
                        <td>Age of Construction:</td>
                        <td><?php echo $result['flat_age_of_construction'] ?> Years</td>
                    </tr>
                    <tr>
                        <td>Water Availability:</td>
                        <td><?php echo $result['flat_water_availability'] ?></td>
                    </tr>
                    <tr>
                        <td>Electricity Status:</td>
                        <td><?php echo $result['flat_electricity_status'] ?></td>
                    </tr>
                    <tr>
                        <td>Publicity Date:</td>
                        <td><?php echo $result['flat_ad_date'] ?></td>
                    </tr>
                </tbody>
            </table>
            <button class="contact-agent-btn" style="width: 80%; padding: 10px 0; margin: 0 auto;display: block;margin-bottom: 30px;" <?php if (!isset($_SESSION['username']) && !$is_admin) echo 'disabled' ?>>Contact Agent</button>
        </div>
    </div>
    <?php include '../components/contact-form.php' ?>
    <?php include '../components/footer.php' ?>
</body>
<script src="../scripts/jquery.js"></script>
</html>