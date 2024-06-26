<!DOCTYPE html>
<html>
<body>
<?php
// Hàm kiểm tra palindrome
function check_palindrome($string) {
    // Loại bỏ khoảng trắng và chuyển đổi thành chữ thường
    $string = strtolower(str_replace(' ', '', $string));
    // Kiểm tra nếu chuỗi bằng với chuỗi đảo ngược của nó
    if ($string == strrev($string)) {
        return 1; // Chuỗi là palindrome
    } else {
        return 0; // Chuỗi không phải là palindrome
    }
}

// Chuỗi cần kiểm tra
$input_string = "madam";

if (check_palindrome($input_string)) {
    echo "$input_string là một palindrome.";
} else {
    echo "$input_string không phải là một palindrome.";
}
?>
</body>
</html>