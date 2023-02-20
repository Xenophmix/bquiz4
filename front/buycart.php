<?php
if (empty($_SESSION['cart'])) {
  echo "<h2 class='ct'>未選購任何商品</h2>";
}

if (isset($_GET['id'])) {
  $_SESSION['cart'][$_GET['id']] = $_GET['qt'];
}

if (!isset($_SESSION['mem'])) {
  to("?do=login");
}


// dd($_SESSION['cart']);





?>

<h2 class="ct"><?= $_SESSION['mem'] ?>的購物車</h2>

<table class="all">
  <tr class="tt ct">
    <td>編號</td>
    <td>商品名稱</td>
    <td>數量</td>
    <td>庫存量</td>
    <td>單價</td>
    <td>小計</td>
    <td>刪除</td>
  </tr>
  <?php
  foreach ($_SESSION['cart'] as $id => $qt)
    $goods = $Goods->find($id);
  ?>
  <tr class="pp ct">
    <td><?= $goods['no']; ?></td>
    <td><?= $goods['name']; ?></td>
    <td><?= $qt; ?></td>
    <td><?= $goods['stock']; ?></td>
    <td><?= $goods['price']; ?></td>
    <!--將商品單價乘上購買的數量成為小計-->
    <td><?= $goods['price'] * $qt; ?></td>
    <td>
      <!--建立刪除商品的點擊函式-->
      <img src="icon/0415.jpg" onclick="delCart(<?= $goods['id']; ?>)">
    </td>
  </tr>
</table>