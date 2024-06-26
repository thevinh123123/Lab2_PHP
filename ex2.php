<!DOCTYPE html>
<html>
<body>
<?php
// Đặt múi giờ về Việt Nam
date_default_timezone_set('Asia/Ho_Chi_Minh');

// Lấy giờ hiện tại của máy chủ (giờ Việt Nam)
$t = date("H");
echo "<p>The hour (in Vietnam) is " . $t;
echo ", and will give the following message:</p>";

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>
</body>
</html>