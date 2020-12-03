<?php
$str = '';
$file = fopen('data/myuni.csv', 'r');
flock($file, LOCK_EX);
// #3 csvのデータを配列に変換し、HTMLに埋め込んでいる
echo "<table>
        <tr>
            <th>gender</th>
            <th>brand</th>
            <th>favorite</th>
            <th>design</th>c
        </tr>";

// #3 csvのデータを配列に変換し、HTMLに埋め込んでいる
while ($line = fgetcsv($file)) {
  echo "<tr>";
  for ($i = 0; $i < count($line); $i++) {
    echo "<td>" . $line[$i] . "</td>";
  }
  echo "</tr>";
}
echo "</table>";
flock($file, LOCK_UN);
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>textファイル書き込み型todoリスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>textファイル書き込み型todoリスト（一覧画面）</legend>

    <a href="myuni_txt_input.php">入力画面</a>
    <table>
      <thead>
        <?= $str ?>
      </thead>
      <tbody>
      </tbody>
    </table>
  </fieldset>
</body>

</html>