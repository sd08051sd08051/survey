<?php
//1.  DB接続します
// 他のファイルにもこれを使いたい時は一個ファイル作ってあげる他のページから呼び出す
//これをレファクタリングという

require_once('funcs.php');


try {
    //ID:'root', Password: xamppは 空白 ''
    $pdo = new PDO('mysql:dbname=User_Survey;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DBConnectError:' . $e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .="<p>";
    $view .= h($result['sex']).h($result['Occupation']).h($result['Age']).h($result['Waittime']).h($result['Price']).h($result['Reason1']).h($result['Reason2']).h($result['Reason3']);
  $view .="</p>";
  }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User調査表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>

  </nav>
    <div>
  <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRsMhqKPrubru6txZDJOyhf2sSBQAkKnCadlj2JvkD1_e3ASA3w-qiN1dcWviZw48l4h-mHXxMiWGbr/pubchart?oid=1565244691&amp;format=interactive"></iframe>
  <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRsMhqKPrubru6txZDJOyhf2sSBQAkKnCadlj2JvkD1_e3ASA3w-qiN1dcWviZw48l4h-mHXxMiWGbr/pubchart?oid=406247588&amp;format=interactive"></iframe>
  </div>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?= $view ?></div>
<iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRsMhqKPrubru6txZDJOyhf2sSBQAkKnCadlj2JvkD1_e3ASA3w-qiN1dcWviZw48l4h-mHXxMiWGbr/pubchart?oid=561435017&amp;format=interactive"></iframe>
<iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRsMhqKPrubru6txZDJOyhf2sSBQAkKnCadlj2JvkD1_e3ASA3w-qiN1dcWviZw48l4h-mHXxMiWGbr/pubchart?oid=1606187042&amp;format=interactive"></iframe>
    </div>
<!-- Main[End] -->

</body>
</html>
