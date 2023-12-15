<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>飲食店待ち時間に関するユーザー調査</legend>
                <label>性別
                    <input type="radio" name="sex" value="男性" checked>男性
                    <input type="radio" name="sex" value="女性">女性
                </label><br>
                 <label>職業:
                    <select name="Occupation">
                        <option value="会社員（正社員）">会社員（正社員）</option>
                        <option value="専業主婦（夫）">専業主婦（夫）</option>
                        <option value="パート・アルバイト">パート・アルバイト</option>
                        <option value="自営業・自由業">自営業・自由業</option>
                        <option value="学生">学生</option>
                        <option value="会社役員・経営者">会社役員・経営者</option>
                        <option value="公務員">公務員</option>
                        <option value="会社員（契約社員）">会社員（契約社員）</option>
                        <option value="会社員（派遣社員）">会社員（派遣社員）</option>
                        <option value="無職">無職</option>
                        <option value="その他">その他</option>
                    </select>
                </label><br>
                <label>年齢<input type="text" name="Age"></label><br>
                <label>待ち時間（分）<input type="text" name="Waittime"></label><br>
                <label>支払える価格<input type="text" name="Price"></label><br>
                
                <legend>行列に並べる店の条件</legend>
                <label>理由1
                    <select name="Reason1">
                        <option value="味が美味しい（過去来店）">味が美味しい（過去来店）</option>
                        <option value="待ち時間がわかる">待ち時間がわかる</option>
                        <option value="回転率が早い">回転率が早い</option>
                        <option value="旅行先ご当地グルメ（時間を掛けて到着した）">旅行先ご当地グルメ（時間を掛けて到着した）</option>
                        <option value="評価に信頼（ミシュラン、有名店、TV放送）">評価に信頼（ミシュラン、有名店、TV放送）</option>
                        <option value="並ぶ環境が良い（Wifi、椅子、気温）">並ぶ環境が良い（Wifi、椅子、気温）</option>
                        <option value="待ちも楽しめる世界観（ディズニー的な、店が作るゲーム）">待ちも楽しめる世界観（ディズニー的な、店が作るゲーム）</option>
                        <option value="予約受付無し">予約受付無し</option>
                        <option value="複数人で来店">複数人で来店</option>
                        <option value="時間に余裕">時間に余裕</option>
                        <option value="お腹減っていない">お腹減っていない</option>
                        <option value="列を離れてて大丈夫">列を離れてて大丈夫</option>
                        <option value="限定感（コラボ、割引、Youtuber）">限定感（コラボ、割引、Youtuber）</option>
                        <option value="第三者の意向">第三者の意向</option>
                        <option value="近隣に食べたいのがない">近隣に食べたいのがない</option>
                        
                    </select>
                </label><br>
                <label>理由2（あれば）<select name="Reason2">
                        <option value="">なし</option>
                        <option value="味が美味しい（過去来店）">味が美味しい（過去来店）</option>
                        <option value="待ち時間がわかる">待ち時間がわかる</option>
                        <option value="回転率が早い">回転率が早い</option>
                    
                        <option value="旅行先ご当地グルメ（時間を掛けて到着した）">旅行先ご当地グルメ（時間を掛けて到着した）</option>
                        <option value="評価に信頼（ミシュラン、有名店、TV放送）">評価に信頼（ミシュラン、有名店、TV放送）</option>
                        <option value="並ぶ環境が良い（Wifi、椅子、気温）">並ぶ環境が良い（Wifi、椅子、気温）</option>
                        <option value="待ちも楽しめる世界観（ディズニー的な、店が作るゲーム）">待ちも楽しめる世界観（ディズニー的な、店が作るゲーム）</option>
                        <option value="予約受付無し">予約受付無し</option>
                        <option value="複数人で来店">複数人で来店</option>
                        <option value="時間に余裕">時間に余裕</option>
                        <option value="お腹減っていない">お腹減っていない</option>
                        <option value="列を離れてて大丈夫">列を離れてて大丈夫</option>
                        <option value="限定感（コラボ、割引、Youtuber）">限定感（コラボ、割引、Youtuber）</option>
                        <option value="第三者の意向">第三者の意向</option>
                        <option value="近隣に食べたいのがない">近隣に食べたいのがない</option>
                        
                    </select></label><br>
                <label>理由3（あれば）<select name="Reason3">
                        <option value="">なし</option>
                        <option value="味が美味しい（過去来店）">味が美味しい（過去来店）</option>
                        <option value="待ち時間がわかる">待ち時間がわかる</option>
                        <option value="回転率が早い">回転率が早い</option>
                        <option value="旅行先ご当地グルメ（時間を掛けて到着した）">旅行先ご当地グルメ（時間を掛けて到着した）</option>

                        
                        <option value="評価に信頼（ミシュラン、有名店、TV放送）">評価に信頼（ミシュラン、有名店、TV放送）</option>
                        <option value="並ぶ環境が良い（Wifi、椅子、気温）">並ぶ環境が良い（Wifi、椅子、気温）</option>
                        <option value="待ちも楽しめる世界観（ディズニー的な、店が作るゲーム）">待ちも楽しめる世界観（ディズニー的な、店が作るゲーム）</option>
                        <option value="予約受付無し">予約受付無し</option>
                        <option value="複数人で来店">複数人で来店</option>
                        <option value="時間に余裕">時間に余裕</option>
                        <option value="お腹減っていない">お腹減っていない</option>
                        <option value="列を離れてて大丈夫">列を離れてて大丈夫</option>
                        <option value="限定感（コラボ、割引、Youtuber）">限定感（コラボ、割引、Youtuber）</option>
                        <option value="第三者の意向">第三者の意向</option>
                        <option value="近隣に食べたいのがない">近隣に食べたいのがない</option>
                        </label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>
