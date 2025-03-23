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
        <div class="row mt-5">
        <?php
            $sql = "select * from dates";
            $result = $conn->query($sql);
            while($row = $result->fetch_array()) {
        ?>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <a href="index.php?time=<?php echo $row['id']?>"><?php echo $row['date']?></a>
                    </div>
                </div>
            </div>
        <?php
            };
        ?>
        </div>
        <hr>

        <?php
            $sql = "";
            $result = $conn->query($sql);
            while($row = $result->fetch_array()) {
        ?>
        <a href="">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5><></h5>
                        </div>
                        <div class="col-md-6">status</div>
                    </div>
                </div>
            </div>
        </a>
        <?php
            };
        ?>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>