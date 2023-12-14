<?php

/**
 * 1. index.phpのフォームの部分がおかしいので、ここを書き換えて、
 * insert.phpにPOSTでデータが飛ぶようにしてください。
 * 2. insert.phpで値を受け取ってください。
 * 3. 受け取ったデータをバインド変数に与えてください。
 * 4. index.phpフォームに書き込み、送信を行ってみて、実際にPhpMyAdminを確認してみてください！
 */

//1. POSTデータ取得
$sex = $_POST['sex'];
$Occupation = $_POST['Occupation'];
$Age = $_POST['Age'];
$Waittime = $_POST['Waittime'];
$Price = $_POST['Price'];
$Reason1 = $_POST['Reason1'];
$Reason2 = $_POST['Reason2'];
$Reason3 = $_POST['Reason3'];



//2. DB接続します
try {
    //ID:'root', Password: xamppは 空白 ''
    $pdo = new PDO('mysql:dbname=User_Survey;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DBConnectError:' . $e->getMessage());
}
//３．データ登録SQL作成

// 1. SQL文を用意
$stmt = $pdo->prepare("
    INSERT INTO
        gs_bm_table(id, sex, Occupation, Age, Waittime, Price, Reason1, Reason2, Reason3)
    VALUES (
        NULL, :sex, :Occupation, :Age, :Waittime,:Price,:Reason1,:Reason2,:Reason3
        )");


//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR);
$stmt->bindValue(':Occupation', $Occupation, PDO::PARAM_STR);
$stmt->bindValue(':Age', $Age, PDO::PARAM_STR);
$stmt->bindValue(':Waittime', $Waittime, PDO::PARAM_STR);
$stmt->bindValue(':Price', $Price, PDO::PARAM_STR);
$stmt->bindValue(':Reason1', $Reason1, PDO::PARAM_STR);
$stmt->bindValue(':Reason2', $Reason2, PDO::PARAM_STR);
$stmt->bindValue(':Reason3', $Reason3, PDO::PARAM_STR);

// //  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit('ErrorMessage:' . $error[2]);
} else {
    //５．index.phpへリダイレクト
    // 成功した場合
    // echo 'test';
    // header(`Location: index.php`);
    header('Location: index.php');
}