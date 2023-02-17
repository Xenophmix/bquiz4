<?php
$bigs = $Type->all(['parent' => 0]);
?>
<h2 class="ct">商品分類</h2>
<div class="ct">
  <input type="text" name="big" id="big">
  <button onclick="addType('big')">新增</button>
</div>
<div class="ct">
  新增中分類
  <select name="b" id="b">
    <?php
    foreach ($bigs as $big) {
      echo "<option value='{$big['id']}'>{$big['name']}</option>";
    }
    ?>
  </select>
  <input type="text" name="mid" id="mid">
  <button onclick="addType('mid')">新增</button>
</div>
<table class="all">
  <?php
  foreach ($bigs as $big) :
  ?>
    <tr class="tt">
      <td><?= $big['name'] ?></td>
      <td class="ct">
        <button data-id="<?= $big['id'] ?>">修改</button>
        <button onclick="del('Type',<?= $big['id'] ?>)">刪除</button>
      </td>
    </tr>
  <?php endforeach; ?>
  <tr class="pp ct">
    <td>asd</td>
    <td>
      <button>修改</button>
      <button>刪除</button>
    </td>
  </tr>
</table>
<script>
  function addType(type) {
    let parent = (type == 'big') ? 0 : $("#b").val()
    let name = (type == 'big') ? $("#big").val() : $("#mid").val()
    $.post("./api/add_type.php", {
      parent,
      name,
    }, () => {
      location.reload()
    })
  }

  // $.get("./api/get_bigs.php", (bigs) => {
  //   $("#b").html(bigs);
  // })
</script>