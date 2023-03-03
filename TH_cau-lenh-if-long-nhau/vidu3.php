<?php
$product_id = 123;
if ($result = $mysqli->query("SELECT * FROM products WHERE id = '$product_id'")) {
    if ($result->num_rows == 1) {
        if ($row['quantity'] > 0) {
        } else {
            echo "Sản phẩm này đã hết hàng.";
        }
    } else {
        echo "Không tìm thấy sản phẩm này.";
    }
    $result->close();
} else {
    echo "Lỗi: " . $mysqli->orror;
}
