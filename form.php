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

    <div class="container py-5">
        <div class="rounded shadow-sm p-3 bg-white">
            <h1 class="text-center">FROM</h1>
            <div class="d-flex justify-content-center">
                <form action="" method="post" class="w-75">
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