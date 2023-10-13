<!DOCTYPE html>
<html>
<head></head>
<body>

    <h1 class="title">hello</h1>
    <?php
        $mysql = new mysqli($_ENV['DATABASE_HOST'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_ALLOW_EMPTY_PASSWORD'], $_ENV['MYSQL_DATABASE']);
        
        if (!$mysql) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        $sql = "SELECT * FROM hoges";
        $stmt  = $mysql->prepare($sql);
        $stmt->execute();

        // プリペアドステートメントに変数をバインドする
        $stmt->bind_result($id, $created_a);

        // 表示
        while($stmt->fetch()){
            echo $id."/";
            echo $created_a."<br />";
        }
        // 接続を閉じる
        $mysql->close();

    ?>
    </div>
</body>
</html>