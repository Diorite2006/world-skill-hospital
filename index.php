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
            while ($row = $result->fetch_array()) {
            ?>
                <div class="col-md-2 text-center my-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="index.php?id=<?php echo $row['id'] ?>" class="text-normal"><?php echo $row['date'] ?></a>
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </div>
        <hr>

        <?php
        $date_id = isset($_GET['id']) ? $_GET['id'] : null;
        if ($date_id) {
            $sql = "SELECT * FROM `times` WHERE date_id = '$date_id'";
            $result = $conn->query($sql);
            while ($row = $result->fetch_array()) {
        ?>
                <a href="form.php?time_id=<?php echo $row['id']; ?>" class="text-normal">
                    <div class="card my-2 card-hover">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4><?php echo $row['time']; ?></h4>
                                    <h6 class="text-muted">Ws_Hospital</h6>
                                </div>
                                <div class="col-md-6 my-auto">
                                    <h4 class="float-end">status</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php }
        } else { ?>
            <div class="alert alert-primary text-center" role="alert">
                - กรุณาเลือกวันที่ ที่ต้องการ -
            </div>
        <?php } ?>

    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>