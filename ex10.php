<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/ex.10.css">
</head>
<body>

<?php
$cameras = [
    [
        "name" => "Máy Ảnh Canon SX730 HS (Hàng Nhập Khẩu)",
        "image" => "img.php/img1.jpg",
        "price" => "7.690.000 đ",
        "old_price" => "9.370.000 đ",
        "discount" => "-18%"
    ],
    [
        "name" => "Máy Ảnh Canon SX720 HS (Hàng Nhập Khẩu)",
        "image" => "img.php/img1.jpg",
        "price" => "6.290.000 đ",
        "old_price" => "7.870.000 đ",
        "discount" => "-20%"
    ],
    [
        "name" => "Máy Ảnh Canon Canon SX 620 HS (Hàng Nhập Khẩu)",
        "image" => "img.php/img1.jpg",
        "price" => "4.890.000 đ",
        "old_price" => "6.240.000 đ",
        "discount" => "-22%"
    ],
    [
        "name" => "Máy Ảnh Canon SX730 HS (Hàng Chính Hãng)",
        "image" => "img.php/img1.jpg",
        "price" => "9.170.000 đ",
        "old_price" => "10.620.000 đ",
        "discount" => "-14%"
    ],
    [
        "name" => "Máy Ảnh Canon Powershot G3X (Lê Bảo Minh)",
        "image" => "img.php/img1.jpg",
        "price" => "16.990.000 đ",
        "old_price" => "22.500.000 đ",
        "discount" => "-24%"
    ],
    [
        "name" => "Máy Ảnh Canon G9X Mark II (Hàng Nhập Khẩu)",
        "image" => "img.php/img1.jpg",
        "price" => "9.490.000 đ",
        "old_price" => "11.990.000 đ",
        "discount" => "-21%"
    ]
];
?>

<div class="camera-container">
    <?php for ($i = 0; $i < count($cameras); $i++): ?>
        <div class="camera-item">
            <img src="<?php echo $cameras[$i]['image']; ?>" alt="<?php echo $cameras[$i]['name']; ?>">
            <h3><?php echo $cameras[$i]['name']; ?></h3>
            <p class="price"><?php echo $cameras[$i]['price']; ?></p>
            <p class="old-price"><?php echo $cameras[$i]['old_price']; ?></p>
            <p class="discount"><?php echo $cameras[$i]['discount']; ?></p>
        </div>
    <?php endfor; ?>
</div>

</body>
</html>