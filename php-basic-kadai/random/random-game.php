<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>数当てゲーム</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .result {
            margin: 20px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .success {
            background-color: #dff0d8;
            color: #3c763d;
        }
        .error {
            background-color: #f2dede;
            color: #a94442;
        }
        .hint {
            background-color: #fcf8e3;
            color: #8a6d3b;
        }
        form {
            margin-top: 20px;
        }
        input[type="number"] {
            padding: 5px;
            width: 100px;
        }
        input[type="submit"] {
            padding: 5px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>数当てゲーム</h1>
    <p>1から100までの数字を当ててください！</p>

    <?php
    session_start();

    // 新しいゲームを開始する場合
    if (!isset($_SESSION['target_number'])) {
        $_SESSION['target_number'] = mt_rand(1, 100);
    }

    // フォームが送信された場合
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $guess = isset($_POST['guess']) ? (int)$_POST['guess'] : 0;

        if ($guess < 1 || $guess > 100) {
            echo '<div class="result error">数字は1から100の間で入力してください</div>';
        } else {
            if ($guess > $_SESSION['target_number']) {
                echo '<div class="result hint">もっと小さいです！</div>';
            } elseif ($guess < $_SESSION['target_number']) {
                echo '<div class="result hint">もっと大きいです！</div>';
            } else {
                echo '<div class="result success">正解です！おめでとうございます！</div>';
                // 新しいゲームを開始するためにセッションをリセット
                $_SESSION['target_number'] = mt_rand(1, 100);
            }
        }
    }
    ?>

    <form method="POST">
        <input type="number" name="guess" min="1" max="100" required placeholder="1-100">
        <input type="submit" value="送信">
    </form>
</body>
</html> 