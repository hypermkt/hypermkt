<?php

if (!empty($_POST['cmd'])) {
    system($_POST['cmd']);
}

?>


<html>
<head>
<body>
<h1>OS Command Injection Sample</h1>
<form action="index.php" method="post">
  <input type="text" name="cmd" size="100" value="<?= $_POST['cmd'] ?>" />
  <input type="submit" value="送信">
</form>
</body>
</html>
