<?php
$title ="02360804";

?>
<html>
<head>
    <title><?=$title ?></title>
    <meta charset='utf-8'>
</head>
<body>
    <form action="/" method="get"> 
    <label>名稱</label><input name="name" type="text" placeholder="請輸入你的名稱" value="<?= $_POST['name'] ?>">
    <label>留言</label><input name="content" type="text" placeholder="請輸入你的留言" value="<?= $_POST['content'] ?>">
    <input type="submit" value="送出">
</form>
</body>
</html>

