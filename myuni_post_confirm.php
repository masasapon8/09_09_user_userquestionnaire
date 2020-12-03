<?php
var_dump($_POST);
$gender1 = $_POST['gender1'];
$gender2 = $_POST['gender2'];
$brand = $_POST['brand'];
$favorite = $_POST['favorite'];
$design = $_POST['design'];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todo表示画面（POST）</title>
</head>

<body>
  <!-- formにはaction, method, nameを設定！ -->
  <form action="myuni_post_confirm.php" method="post">
    <fieldset>
      <legend>todo登録画面（POST）</legend>
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

      <!-- <div>
        todo: <input type="text" name="todo">
      </div>
      <div>
        deadline: <input type="date" name="deadline">
      </div> -->
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>
</body>

</html>