<?php
require_once('json.php');
$posts=readJSON('blog.json',$_GET['id']);
print_r($posts);
die();
?>
<html>
<body>
<?php
$i=0;
foreach($posts as $post){
echo '<a href="detail.php?id='.$i.'">'.$post['title'].'</a><hr>';
$i++;
}
?>
</body>
</html>