<style>
table {
	border-collapse: collapse;
}
td {
	border: solid 1px;
	padding: 0.5em;
}
</style>
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
<table>
  <?php
  foreach ($seat as $keyr => $row) {
    ?>
    <tr>
    <?php
    foreach ($row as $keyc => $col) {
      ?>
      <td>
      <?php
      echo $col+1;
      ?>
    </td>
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

generateSeat(3, 5);

 ?>
