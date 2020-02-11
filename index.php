<?php
require_once('json.php');
$posts=readJSON('blog.json');

?>
<html>
<body>
<?php
$i=0;
foreach($posts as $post){
echo '<a href="detail.php?id='.$i.'">'.$post['title'].'</a><br><a href="modify.php?id='.$i.'">Modify the post</a> <a href="delete.php?id='.$i.'">Delete the post</a><hr>';
$i++;
}
?>
</body>
</html>