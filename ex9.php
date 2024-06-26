<!DOCTYPE html>
<html>
<body>
<?php
// Hàm kiểm tra xem chuỗi có phải toàn bộ là chữ thường hay không
function is_str_lowercase($str1) {
    $sc = 0; // Khởi tạo biến đếm
    while ($sc < strlen($str1)) { // Lặp qua từng ký tự trong chuỗi
        // Kiểm tra nếu ký tự hiện tại là chữ hoa
        if (ord($str1[$sc]) >= ord('A') && ord($str1[$sc]) <= ord('Z')) {
            return false; // Trả về false nếu có ít nhất một ký tự là chữ hoa
        }
        $sc++; // Tăng biến đếm lên
    }
    return true; // Trả về true nếu tất cả ký tự đều là chữ thường
}

// Chuỗi cần kiểm tra
$input_string = "Hello World!";

if (is_str_lowercase($input_string)) {
    echo "$input_string toàn bộ là chữ thường.";
} else {
    echo "$input_string có chứa ký tự chữ hoa.";
}
?>
</body>
</html>