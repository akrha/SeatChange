<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>席替えメーカー</title>
  </head>
  <body>

<?php

 function generateSeat($col = 0, $row = 0)
{
  // 座席番号を生成
  for ($i=0; $i < $col*$row; $i++) {
    $students[] = $i;
  }

  // 席をシャッフル
  shuffle($students);
  // 配列を初期化
  $seatCol = array();
  $seatRow = array();
  for ($i=0; $i < $row; $i++) {
    $seatRow[] = 0;
  }

  // 座席表に番号を割り振る
  $seat = array();
  $count = 0;
  for ($i=0; $i < $col; $i++) {
    for ($j=0; $j < $row; $j++) {
      $seat[$i][$j] = $students[$count];
      $count++;
    }
  }


  // 出力する
  outputSeat($seat);
}

 function outputSeat($seat)
{ ?>
  <h1>席替えの結果</h1>
<table border="1" width="300px">
  <?php
  foreach ($seat as $keyr => $row) {
    ?>
    <tr>
    <?php
    foreach ($row as $keyc => $col) {
      ?>
    <td><?php
      echo $col+1;
      ?></td>
    <?php
    }
    ?>
  </tr>
    <?php
  }
  ?>
</table>
  <?php
}

 function saveSeat()
{

}

// 座席の縦の数, 横の数
if(isset($_GET['col'])&&isset($_GET['row'])){
generateSeat($_GET['col'], $_GET['row']);
}
else {
  ?><p>不正な操作です。</p><?php
}


 ?>
 <button size="200" onclick="history.back()">戻る</button>
 <button size="200" onclick="window.location.reload()">再生成</button>
 </body>
</html>
