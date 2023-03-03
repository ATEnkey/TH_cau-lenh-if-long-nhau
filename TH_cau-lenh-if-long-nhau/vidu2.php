<?php
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_type'] == 'admin') {
    } else {
    }
} else {
    header('Location: Login.php');
}
?>