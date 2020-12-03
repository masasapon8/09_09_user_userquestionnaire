<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>textファイル書き込み型todoリスト（入力画面）</title>
</head>

<body>
  <form action="myuni_txt_create.php" method="POST">
    <fieldset>
      <legend>選手情報を登録しよう！（入力画面）</legend>
      <a href=" myuni_txt_read.php">会員データ</a>
      <!-- 20201202:ここから下、変数含めて全てmyuni仕様に名前変えること！ -->
      <div>
        male: <input type="radio" name="gender1" value="男" />
        female: <input type="radio" name="gender2" value="女" />
      </div>
      <div>
        好きなメーカー: <input type="text" name="brand">
      </div>
      <div>
        好きなカラー: <input type="text" name="favorite">
      </div>
      <div>
        好きな柄: <input type="text" name="design">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>