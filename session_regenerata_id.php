<?php
// sessionをスタートしてidを再生成しよう．
// 旧idと新idを表示しよう．
// セッションの開始
session_start();
$old_id = session_id();
session_regenerate_id(true);
$new_id = session_id();

var_dump($old_id);
var_dump($new_id);
exit();