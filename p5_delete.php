<?php

// データ受け取り
    //var_dump($_GET);
    //exit();
  session_start();
  include('functions.php');
  check_session_id();

  $id = $_GET['id'];
  $pdo = connect_to_db();

  $sql = 'DELETE FROM register_list WHERE id=:id';

  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':id', $id, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:p3_read.php");
exit();

// SQL実行
