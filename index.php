<?php
$title = "صفحه اصلی";
include('./includes/header.php');
include('./includes/db_link.php');
$query = "SELECT * FROM `products` ORDER BY `id` DESC";
$request = mysqli_query($link, $query);
?>
<!-- اضافه کردن لینک بوت‌استرپ -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<table class="table table-striped table-bordered" style="width:100%">
    <tr>
        <?php
        $counter = 0;
        while ($row = mysqli_fetch_array($request)) {
            $counter++;
        ?>
            <td class='border p-3' style='vertical-align:top;width:33%;'>
                <div class="card h-100 shadow-sm">
                    <a href="product.php?id=<?= $row["id"]; ?>">
                        <img src='products/<?= $row["image"]; ?>' class="card-img-top" style="width:100%;height:180px;object-fit:cover;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-center text-primary"> <?= $row["name"]; ?> </h5>
                        <p class="card-text">قیمت: <?= toman($row["price"], true); ?></p>
                        <p class="card-text">موجودی: <?= $row["qty"]; ?> </p>
                        <p class="card-text" style="font-size: 14px">توضیحات: <?= details($row['details'], 100) ?> </p>
                        <a href='product.php?id=<?= $row["id"]; ?>' class="btn btn-outline-primary w-100 mt-2">ادامه توضیحات و خرید &leftarrow;</a>
                    </div>
                </div>
            </td>
        <?php
            if ($counter % 3 == 0) {
                echo "</tr><tr>";
            }
        }
        if ($counter % 3 != 0) {
            echo "</tr>";
        }
        ?>
</table>
<?php
include('./includes/footer.php');
?>