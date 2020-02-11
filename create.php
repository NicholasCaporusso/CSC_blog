<?php
require_once('json.php');
writeJSON('blog.json',$_POST,'a');

?>
<html>
<form action="create.php" method="POST">
Author
<input name="author" type="text"><br />
Title
<input name="title" type="text"><br />
Text
<textarea name="content"></textarea><br />
<button type="submit">Submit</button>
</form>
</html>