<?php
var_dump($_GET);
$gender1 = $_GET['gender1'];
$gender2 = $_GET['gender2'];
$brand = $_GET['brand'];
$favorite = $_GET['favorite'];
$design = $_GET['design'];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー情報表示画面（GET）</title>
</head>

<body>
  <!-- formにはaction, method, nameを設定！ -->
  <form action="myuni_get_confirm.php" method="get">
    <fieldset>
      <legend>ユーザー登録画面（GET）</legend>
      <div>
        gender1: <input type="radio" name="gender1" value="男" />
        gender2: <input type="radio" name="gender2" value="女" />
      </div>
      <div>
        brand: <input type="text" name="brand">
      </div>
      <div>
        favorite: <input type="text" name="favorite">
      </div>
      <div>
        design: <input type="text" name="design">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>
</body>

</html>