<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ws_Hospital</title>
    <?php include('include/header.php'); ?>
    <?php include('include/config.php'); ?>
</head>

<body>
    <?php include('include/navbar.php'); ?>
    <!-- time -->
    <div class="container">
        <div class="row">
     <?php
        $sql = "select * from dates group by date";
        $result = $conn->query($sql);
        while($row = $result->fetch_array()) {
        ?>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h4><?php echo $row['date']?></h4>
                    </div>
                </div>
            </div>
            <?php
            };
            ?>
        </div>
        <hr>

        <a href="">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">time</div>
                        <div class="col-md-6">status</div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>