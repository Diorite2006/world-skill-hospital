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

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Ws_Hospital</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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