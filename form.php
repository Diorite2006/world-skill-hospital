<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FROM</title>
    <?php include('include/header.php'); ?>
    <?php include('include/config.php'); ?>
</head>
<body>
    <?php include('include/navbar.php'); ?>

    <?php
        $time = $_GET['time_id'];

        $sql = "select * from times as t inner join dates as d on d.id = t.date_id where t.id = ".$time;
        $result = $conn->query($sql);
        $get = $result->fetch_array();
    ?>

    <div class="container py-5">
        <div class="rounded shadow-sm p-3 bg-white">
            <h1 class="text-center">FROM</h1>
            <div class="d-flex justify-content-center">
                <form action="" method="post" class="w-75">
                    <input type="hidden"  class="form-control" name="date_id" value="<?=$get['date_id']?>" required>
                    <div class="time d-flex justify-content-center gap-3">
                        <h4>Date: <?php echo $get['date'] ?></h4>
                        <span>|</span>
                        <h4>Time: <?php echo $get['time'] ?></h4>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">First Name</label>
                        <input type="text"  class="form-control" name="f_name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Last Name</label>
                        <input type="text"  class="form-control" name="l_name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Telephone</label>
                        <input type="text"  class="form-control" name="telephone" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">ID Card</label>
                        <input type="text"  class="form-control" name="user_id" required>
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Reserve</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>