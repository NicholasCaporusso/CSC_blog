<?php
require_once('json.php');
$post=readJSON('blog.json',$_GET['id']);

print_r($_POST);
print_r($_GET);
modifyJSON('blog.json',$_POST,$_GET['id']);
?>
<html>
<form action="modify.php?id=<?= $_GET['id'] ?>" method="POST">
Author
<input name="author" type="text" value="<?= $post['author'] ?>"><br />
Title
<input name="title" type="text" value="<?= $post['title'] ?>"><br />
Text
<textarea name="content"><?= $post['content'] ?></textarea><br />
<button type="submit">Submit</button>
</form>
</html>