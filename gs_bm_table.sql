-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 12 月 15 日 00:33
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `User_Survey`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `Occupation` varchar(50) NOT NULL,
  `Age` int(10) NOT NULL,
  `Waittime` int(10) NOT NULL,
  `Price` int(10) NOT NULL,
  `Reason1` varchar(128) NOT NULL,
  `Reason2` varchar(128) DEFAULT NULL,
  `Reason3` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `sex`, `Occupation`, `Age`, `Waittime`, `Price`, `Reason1`, `Reason2`, `Reason3`) VALUES
(7, '女性', '会社員（正社員）', 39, 10, 1000, '味が美味しい（過去来店）', '旅行先ご当地グルメ（時間を掛けて到着した）', ''),
(8, '女性', '専業主婦（夫）', 35, 0, 300, '待ち時間がわかる', '', ''),
(9, '男性', '会社員（正社員）', 40, 15, 500, '回転率が早い', '評価に信頼（ミシュラン、有名店、TV放送）', ''),
(10, '男性', 'その他', 34, 25, 380, '並ぶ環境が良い（Wifi、椅子、気温）', '', ''),
(11, '男性', 'パート・アルバイト', 28, 30, 1000, '味が美味しい（過去来店）', '', ''),
(12, '女性', '自営業・自由業', 52, 5, 0, '味が美味しい（過去来店）', '', ''),
(13, '女性', '会社員（正社員）', 30, 20, 1000, '待ち時間がわかる', '', ''),
(14, '男性', '会社員（正社員）', 53, 10, 0, '評価に信頼（ミシュラン、有名店、TV放送）', '', ''),
(15, '男性', '学生', 22, 60, 300, '評価に信頼（ミシュラン、有名店、TV放送）', '並ぶ環境が良い（Wifi、椅子、気温）', ''),
(16, '男性', '会社役員・経営者', 34, 30, 1000, '旅行先ご当地グルメ（時間を掛けて到着した）', '待ち時間がわかる', ''),
(17, '男性', '公務員', 56, 20, 200, '並ぶ環境が良い（Wifi、椅子、気温）', '', '');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
