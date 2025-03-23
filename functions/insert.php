<?php
include('../include/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date_id = $_POST['date_id'];
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $telephone = $_POST['telephone'];
    $user_id = $_POST['user_id'];

    $sql = "INSERT INTO `reservations` (`f_name`, `l_name`, `telephone`, `user_id`, `date_id`) VALUES ('$date_id', '$f_name', '$l_name', '$telephone', '$user_id')";
    $query = $conn->query($sql);

    if ($query) {
        header('Location: queue_code.php');
        exit;
    } else {
        echo "<script>
            alert('กรุณาลองใหม่อีกครั้ง');
            history.back();
        </script>";
    }

    $conn->close();
}
?>