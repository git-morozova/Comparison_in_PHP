<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11.7. Введение в PHP - Практика</title>
    <link href="./style.css" rel="stylesheet">
</head>
<body>

<!-- Актуально для PHP версии 8.1 -->
<div class="container">
  <div class ="header">
    <b>Таблица истинности PHP</b>
  </div>
  <table>
    <thead>
      <tr>
        <th>A</th>
        <th>B</th>
        <th>!A</th>
        <th>A || B</th>
        <th>A && B</th>
        <th>A xor B</th>
      </tr>
    </thead>
    <tbody>    

<?php 
$a = 0;
$b = 0;
?>
      <tr>
        <td><?= $a ?></td>
        <td><?= $b ?></td>
        <td><?= (int)!$a ?></td>
        <td><?= (int)($a || $b) ?></td>
        <td><?= (int)($a && $b) ?></td>
        <td><?= (int)($a xor $b) ?></td>
      </tr>

<?php 
$a = 0;
$b = 1;
?>

      <tr>
        <td><?= $a ?></td>
        <td><?= $b ?></td>
        <td><?= (int)!$a ?></td>
        <td><?= (int)($a || $b) ?></td>
        <td><?= (int)($a && $b) ?></td>
        <td><?= (int)($a xor $b) ?></td>
      </tr>
      
<?php 
$a = 1;
$b = 0;
?>

      <tr>
        <td><?= $a ?></td>
        <td><?= $b ?></td>
        <td><?= (int)!$a ?></td>
        <td><?= (int)($a || $b) ?></td>
        <td><?= (int)($a && $b) ?></td>
        <td><?= (int)($a xor $b) ?></td>
      </tr>
      
<?php 
$a = 1;
$b = 1;
?>

      <tr>
        <td><?= $a ?></td>
        <td><?= $b ?></td>
        <td><?= (int)!$a ?></td>
        <td><?= (int)($a || $b) ?></td>
        <td><?= (int)($a && $b) ?></td>
        <td><?= (int)($a xor $b) ?></td>
      </tr>     
    </tbody>
  </table>

  <div class ="header">
    <b>Гибкое сравнение в PHP</b> (оператор ==)
  </div>
  <table>
    <thead>
      <tr>
        <th></th>
        <th><?php $a = true; echo 'true'; ?></th>
        <th><?php $b = false; echo 'false'; ?></th>
        <th><?php $c = 1; echo 1; ?></th>
        <th><?php $d = 0; echo 0; ?></th>
        <th><?php $e = -1; echo -1; ?></th>
        <th><?php $f = "1"; echo '"1"'; ?></th>
        <th><?php $g = null; echo 'null'; ?></th>
        <th><?php $h = "php"; echo '"php"'; ?></th>
        <th class="hide_cells" style="display: none"><?php $dop_a = "0"; echo '"0"'; ?></th>
        <th class="hide_cells" style="display: none"><?php $dop_b = "-1"; echo '"-1"'; ?></th>
        <th class="hide_cells" style="display: none"><?php $dop_c = []; /*var_dump($dop_c);*/ echo '[ ]'; ?></th>
        <th class="hide_cells" style="display: none"><?php $dop_d = ""; echo '""'; ?></th>
      </tr>
    </thead>
    <tbody>   
      <tr>
        <th><?= 'true'; ?></th>
        <td><?= (int)($a == $a); ?></td>
        <td><?= (int)($a == $b); ?></td>
        <td><?= (int)($a == $c); ?></td>
        <td><?= (int)($a == $d); ?></td>
        <td><?= (int)($a == $e); ?></td>
        <td><?= (int)($a == $f); ?></td>
        <td><?= (int)($a == $g); ?></td>
        <td><?= (int)($a == $h); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($a == $dop_a); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($a == $dop_b); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($a == $dop_c); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($a == $dop_d); ?></td>
      </tr>
      <tr>
        <th><?= 'false'; ?></th>
        <td><?= (int)($b == $a); ?></td>
        <td><?= (int)($b == $b); ?></td>
        <td><?= (int)($b == $c); ?></td>
        <td><?= (int)($b == $d); ?></td>
        <td><?= (int)($b == $e); ?></td>
        <td><?= (int)($b == $f); ?></td>
        <td><?= (int)($b == $g); ?></td>
        <td><?= (int)($b == $h); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($b == $dop_a); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($b == $dop_b); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($b == $dop_c); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($b == $dop_d); ?></td>
      </tr>
      <tr>
        <th><?= 1; ?></th>
        <td><?= (int)($c == $a); ?></td>
        <td><?= (int)($c == $b); ?></td>
        <td><?= (int)($c == $c); ?></td>
        <td><?= (int)($c == $d); ?></td>
        <td><?= (int)($c == $e); ?></td>
        <td><?= (int)($c == $f); ?></td>
        <td><?= (int)($c == $g); ?></td>
        <td><?= (int)($c == $h); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($c == $dop_a); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($c == $dop_b); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($c == $dop_c); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($c == $dop_d); ?></td>
      </tr> 
      <tr>
        <th><?= 0; ?></th>
        <td><?= (int)($d == $a); ?></td>
        <td><?= (int)($d == $b); ?></td>
        <td><?= (int)($d == $c); ?></td>
        <td><?= (int)($d == $d); ?></td>
        <td><?= (int)($d == $e); ?></td>
        <td><?= (int)($d == $f); ?></td>
        <td><?= (int)($d == $g); ?></td>
        <td><?= (int)($d == $h); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($d == $dop_a); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($d == $dop_b); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($d == $dop_c); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($d == $dop_d); ?></td>
      </tr>
      <tr>
        <th><?= -1; ?></th>
        <td><?= (int)($e == $a); ?></td>
        <td><?= (int)($e == $b); ?></td>
        <td><?= (int)($e == $c); ?></td>
        <td><?= (int)($e == $d); ?></td>
        <td><?= (int)($e == $e); ?></td>
        <td><?= (int)($e == $f); ?></td>
        <td><?= (int)($e == $g); ?></td>
        <td><?= (int)($e == $h); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($e == $dop_a); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($e == $dop_b); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($e == $dop_c); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($e == $dop_d); ?></td>
      </tr>
      <tr>
        <th><?= '"1"'; ?></th>
        <td><?= (int)($f == $a); ?></td>
        <td><?= (int)($f == $b); ?></td>
        <td><?= (int)($f == $c); ?></td>
        <td><?= (int)($f == $d); ?></td>
        <td><?= (int)($f == $e); ?></td>
        <td><?= (int)($f == $f); ?></td>
        <td><?= (int)($f == $g); ?></td>
        <td><?= (int)($f == $h); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($f == $dop_a); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($f == $dop_b); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($f == $dop_c); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($f == $dop_d); ?></td>
      </tr>
      <tr>
        <th><?= 'null'; ?></th>
        <td><?= (int)($g == $a); ?></td>
        <td><?= (int)($g == $b); ?></td>
        <td><?= (int)($g == $c); ?></td>
        <td><?= (int)($g == $d); ?></td>
        <td><?= (int)($g == $e); ?></td>
        <td><?= (int)($g == $f); ?></td>
        <td><?= (int)($g == $g); ?></td>
        <td><?= (int)($g == $h); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($g == $dop_a); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($g == $dop_b); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($g == $dop_c); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($g == $dop_d); ?></td>
      </tr>      
      <tr>
        <th><?= '"php"'; ?></th>
        <td><?= (int)($h == $a); ?></td>
        <td><?= (int)($h == $b); ?></td>
        <td><?= (int)($h == $c); ?></td>
        <td><?= (int)($h == $d); ?></td>
        <td><?= (int)($h == $e); ?></td>
        <td><?= (int)($h == $f); ?></td>
        <td><?= (int)($h == $g); ?></td>
        <td><?= (int)($h == $h); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($h == $dop_a); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($h == $dop_b); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($h == $dop_c); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($h == $dop_d); ?></td>
      </tr>  
      <tr class="hide_cells" style="display: none">
        <th><?= '"0"'; ?></th>
        <td><?= (int)($dop_a == $a); ?></td>
        <td><?= (int)($dop_a == $b); ?></td>
        <td><?= (int)($dop_a == $c); ?></td>
        <td><?= (int)($dop_a == $d); ?></td>
        <td><?= (int)($dop_a == $e); ?></td>
        <td><?= (int)($dop_a == $f); ?></td>
        <td><?= (int)($dop_a == $g); ?></td>
        <td><?= (int)($dop_a == $h); ?></td>
        <td><?= (int)($dop_a == $dop_a); ?></td>
        <td><?= (int)($dop_a == $dop_b); ?></td>
        <td><?= (int)($dop_a == $dop_c); ?></td>
        <td><?= (int)($dop_a == $dop_d); ?></td>
      </tr>  
      <tr class="hide_cells" style="display: none">
        <th><?= '"-1"'; ?></th>
        <td><?= (int)($dop_b == $a); ?></td>
        <td><?= (int)($dop_b == $b); ?></td>
        <td><?= (int)($dop_b == $c); ?></td>
        <td><?= (int)($dop_b == $d); ?></td>
        <td><?= (int)($dop_b == $e); ?></td>
        <td><?= (int)($dop_b == $f); ?></td>
        <td><?= (int)($dop_b == $g); ?></td>
        <td><?= (int)($dop_b == $h); ?></td>
        <td><?= (int)($dop_b == $dop_a); ?></td>
        <td><?= (int)($dop_b == $dop_b); ?></td>
        <td><?= (int)($dop_b == $dop_c); ?></td>
        <td><?= (int)($dop_b == $dop_d); ?></td>
      </tr>
      <tr class="hide_cells" style="display: none">
        <th><?= '[ ]'; ?></th>
        <td><?= (int)($dop_c == $a); ?></td>
        <td><?= (int)($dop_c == $b); ?></td>
        <td><?= (int)($dop_c == $c); ?></td>
        <td><?= (int)($dop_c == $d); ?></td>
        <td><?= (int)($dop_c == $e); ?></td>
        <td><?= (int)($dop_c == $f); ?></td>
        <td><?= (int)($dop_c == $g); ?></td>
        <td><?= (int)($dop_c == $h); ?></td>
        <td><?= (int)($dop_c == $dop_a); ?></td>
        <td><?= (int)($dop_c == $dop_b); ?></td>
        <td><?= (int)($dop_c == $dop_c); ?></td>
        <td><?= (int)($dop_c == $dop_d); ?></td>
      </tr>
      <tr class="hide_cells" style="display: none">
        <th><?= '""'; ?></th>
        <td><?= (int)($dop_d == $a); ?></td>
        <td><?= (int)($dop_d == $b); ?></td>
        <td><?= (int)($dop_d == $c); ?></td>
        <td><?= (int)($dop_d == $d); ?></td>
        <td><?= (int)($dop_d == $e); ?></td>
        <td><?= (int)($dop_d == $f); ?></td>
        <td><?= (int)($dop_d == $g); ?></td>
        <td><?= (int)($dop_d == $h); ?></td>
        <td><?= (int)($dop_d == $dop_a); ?></td>
        <td><?= (int)($dop_d == $dop_b); ?></td>
        <td><?= (int)($dop_d == $dop_c); ?></td>
        <td><?= (int)($dop_d == $dop_d); ?></td>
      </tr>  
    </tbody>
  </table>

  <div class="input_block">
      <span class="input_text">Расширенная версия:</span>
      <input type="checkbox">
  </div>   

  <div class ="header">
    <b>Жесткое сравнение в PHP</b> (оператор ===)
  </div>
  <table>
    <thead>
      <tr>
        <th></th>
        <th><?php $a = true; echo 'true'; ?></th>
        <th><?php $b = false; echo 'false'; ?></th>
        <th><?php $c = 1; echo 1; ?></th>
        <th><?php $d = 0; echo 0; ?></th>
        <th><?php $e = -1; echo -1; ?></th>
        <th><?php $f = "1"; echo '"1"'; ?></th>
        <th><?php $g = null; echo 'null'; ?></th>
        <th><?php $h = "php"; echo '"php"'; ?></th>
        <th class="hide_cells" style="display: none"><?php $dop_a = "0"; echo '"0"'; ?></th>
        <th class="hide_cells" style="display: none"><?php $dop_b = "-1"; echo '"-1"'; ?></th>
        <th class="hide_cells" style="display: none"><?php $dop_c = []; /*var_dump($dop_c);*/ echo '[ ]'; ?></th>
        <th class="hide_cells" style="display: none"><?php $dop_d = ""; echo '""'; ?></th>
      </tr>
    </thead>
    <tbody>   
      <tr>
        <th><?= 'true'; ?></th>
        <td><?= (int)($a === $a); ?></td>
        <td><?= (int)($a === $b); ?></td>
        <td><?= (int)($a === $c); ?></td>
        <td><?= (int)($a === $d); ?></td>
        <td><?= (int)($a === $e); ?></td>
        <td><?= (int)($a === $f); ?></td>
        <td><?= (int)($a === $g); ?></td>
        <td><?= (int)($a === $h); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($a === $dop_a); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($a === $dop_b); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($a === $dop_c); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($a === $dop_d); ?></td>
      </tr>
      <tr>
        <th><?= 'false'; ?></th>
        <td><?= (int)($b === $a); ?></td>
        <td><?= (int)($b === $b); ?></td>
        <td><?= (int)($b === $c); ?></td>
        <td><?= (int)($b === $d); ?></td>
        <td><?= (int)($b === $e); ?></td>
        <td><?= (int)($b === $f); ?></td>
        <td><?= (int)($b === $g); ?></td>
        <td><?= (int)($b === $h); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($b === $dop_a); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($b === $dop_b); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($b === $dop_c); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($b === $dop_d); ?></td>
      </tr>
      <tr>
        <th><?= 1; ?></th>
        <td><?= (int)($c === $a); ?></td>
        <td><?= (int)($c === $b); ?></td>
        <td><?= (int)($c === $c); ?></td>
        <td><?= (int)($c === $d); ?></td>
        <td><?= (int)($c === $e); ?></td>
        <td><?= (int)($c === $f); ?></td>
        <td><?= (int)($c === $g); ?></td>
        <td><?= (int)($c === $h); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($c === $dop_a); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($c === $dop_b); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($c === $dop_c); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($c === $dop_d); ?></td>
      </tr> 
      <tr>
        <th><?= 0; ?></th>
        <td><?= (int)($d === $a); ?></td>
        <td><?= (int)($d === $b); ?></td>
        <td><?= (int)($d === $c); ?></td>
        <td><?= (int)($d === $d); ?></td>
        <td><?= (int)($d === $e); ?></td>
        <td><?= (int)($d === $f); ?></td>
        <td><?= (int)($d === $g); ?></td>
        <td><?= (int)($d === $h); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($d === $dop_a); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($d === $dop_b); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($d === $dop_c); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($d === $dop_d); ?></td>
      </tr>
      <tr>
        <th><?= -1; ?></th>
        <td><?= (int)($e === $a); ?></td>
        <td><?= (int)($e === $b); ?></td>
        <td><?= (int)($e === $c); ?></td>
        <td><?= (int)($e === $d); ?></td>
        <td><?= (int)($e === $e); ?></td>
        <td><?= (int)($e === $f); ?></td>
        <td><?= (int)($e === $g); ?></td>
        <td><?= (int)($e === $h); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($e === $dop_a); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($e === $dop_b); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($e === $dop_c); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($e === $dop_d); ?></td>
      </tr>
      <tr>
        <th><?= '"1"'; ?></th>
        <td><?= (int)($f === $a); ?></td>
        <td><?= (int)($f === $b); ?></td>
        <td><?= (int)($f === $c); ?></td>
        <td><?= (int)($f === $d); ?></td>
        <td><?= (int)($f === $e); ?></td>
        <td><?= (int)($f === $f); ?></td>
        <td><?= (int)($f === $g); ?></td>
        <td><?= (int)($f === $h); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($f === $dop_a); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($f === $dop_b); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($f === $dop_c); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($f === $dop_d); ?></td>
      </tr>
      <tr>
        <th><?= 'null'; ?></th>
        <td><?= (int)($g === $a); ?></td>
        <td><?= (int)($g === $b); ?></td>
        <td><?= (int)($g === $c); ?></td>
        <td><?= (int)($g === $d); ?></td>
        <td><?= (int)($g === $e); ?></td>
        <td><?= (int)($g === $f); ?></td>
        <td><?= (int)($g === $g); ?></td>
        <td><?= (int)($g === $h); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($g === $dop_a); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($g === $dop_b); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($g === $dop_c); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($g === $dop_d); ?></td>
      </tr>      
      <tr>
        <th><?= '"php"'; ?></th>
        <td><?= (int)($h === $a); ?></td>
        <td><?= (int)($h === $b); ?></td>
        <td><?= (int)($h === $c); ?></td>
        <td><?= (int)($h === $d); ?></td>
        <td><?= (int)($h === $e); ?></td>
        <td><?= (int)($h === $f); ?></td>
        <td><?= (int)($h === $g); ?></td>
        <td><?= (int)($h === $h); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($h === $dop_a); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($h === $dop_b); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($h === $dop_c); ?></td>
        <td class="hide_cells" style="display: none"><?= (int)($h === $dop_d); ?></td>
      </tr>  
      <tr class="hide_cells" style="display: none">
        <th><?= '"0"'; ?></th>
        <td><?= (int)($dop_a === $a); ?></td>
        <td><?= (int)($dop_a === $b); ?></td>
        <td><?= (int)($dop_a === $c); ?></td>
        <td><?= (int)($dop_a === $d); ?></td>
        <td><?= (int)($dop_a === $e); ?></td>
        <td><?= (int)($dop_a === $f); ?></td>
        <td><?= (int)($dop_a === $g); ?></td>
        <td><?= (int)($dop_a === $h); ?></td>
        <td><?= (int)($dop_a === $dop_a); ?></td>
        <td><?= (int)($dop_a === $dop_b); ?></td>
        <td><?= (int)($dop_a === $dop_c); ?></td>
        <td><?= (int)($dop_a === $dop_d); ?></td>
      </tr>  
      <tr class="hide_cells" style="display: none">
        <th><?= '"-1"'; ?></th>
        <td><?= (int)($dop_b === $a); ?></td>
        <td><?= (int)($dop_b === $b); ?></td>
        <td><?= (int)($dop_b === $c); ?></td>
        <td><?= (int)($dop_b === $d); ?></td>
        <td><?= (int)($dop_b === $e); ?></td>
        <td><?= (int)($dop_b === $f); ?></td>
        <td><?= (int)($dop_b === $g); ?></td>
        <td><?= (int)($dop_b === $h); ?></td>
        <td><?= (int)($dop_b === $dop_a); ?></td>
        <td><?= (int)($dop_b === $dop_b); ?></td>
        <td><?= (int)($dop_b === $dop_c); ?></td>
        <td><?= (int)($dop_b === $dop_d); ?></td>
      </tr>
      <tr class="hide_cells" style="display: none">
        <th><?= '[ ]'; ?></th>
        <td><?= (int)($dop_c === $a); ?></td>
        <td><?= (int)($dop_c === $b); ?></td>
        <td><?= (int)($dop_c === $c); ?></td>
        <td><?= (int)($dop_c === $d); ?></td>
        <td><?= (int)($dop_c === $e); ?></td>
        <td><?= (int)($dop_c === $f); ?></td>
        <td><?= (int)($dop_c === $g); ?></td>
        <td><?= (int)($dop_c === $h); ?></td>
        <td><?= (int)($dop_c === $dop_a); ?></td>
        <td><?= (int)($dop_c === $dop_b); ?></td>
        <td><?= (int)($dop_c === $dop_c); ?></td>
        <td><?= (int)($dop_c === $dop_d); ?></td>
      </tr>
      <tr class="hide_cells" style="display: none">
        <th><?= '""'; ?></th>
        <td><?= (int)($dop_d === $a); ?></td>
        <td><?= (int)($dop_d === $b); ?></td>
        <td><?= (int)($dop_d === $c); ?></td>
        <td><?= (int)($dop_d === $d); ?></td>
        <td><?= (int)($dop_d === $e); ?></td>
        <td><?= (int)($dop_d === $f); ?></td>
        <td><?= (int)($dop_d === $g); ?></td>
        <td><?= (int)($dop_d === $h); ?></td>
        <td><?= (int)($dop_d === $dop_a); ?></td>
        <td><?= (int)($dop_d === $dop_b); ?></td>
        <td><?= (int)($dop_d === $dop_c); ?></td>
        <td><?= (int)($dop_d === $dop_d); ?></td>
      </tr>  
    </tbody>
  </table>  
</div>

<div class="summary">
  <div class ="header">
      <b>Выводы</b>
  </div>  
  <ol>
    <li>
    При жестком ставнении операнд равен только сам себе. В остальных случаях PHP выдаст false. В этом PHP схож с JS (за исключением сравнения массивов).
    </li>
    <li>
    Гибкое сравнение в PHP выдает другие результаты, нежели JS, если одним из операндов является true, false и многие другие. Совершенно по-разному ведут себя в PHP и в JS null и 0 (например, 0 == null в PHP. В JS 0 !== null).
  Но некоторые ведут себя одинаково:  1,   "1",  "0".
    </li>
    <li>
    При гибком сравнении строковые значения равны аналогичным численным (например, -1 == "-1"). Остальное надо просто запомнить.
    </li>
  </ol>
</div>

<!-- Переключатель для расширенной версии -->
<script>
  document.querySelector('input').addEventListener('click', function (e) {
    let arr = document.querySelectorAll('.hide_cells');
    arr.forEach((cells) => {
      cells.style.display = cells.style.display === 'none' ? '' : 'none';
    })
  })
</script>
<!-- /Переключатель для расширенной версии -->

</body>
</html>