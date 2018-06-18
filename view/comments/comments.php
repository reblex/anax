<?php
$comments = $app->commentController->getAllPosts();
?>
Här finns det kommentarer eller nåt.
<br>
<?= var_dump($comments) ?> 
