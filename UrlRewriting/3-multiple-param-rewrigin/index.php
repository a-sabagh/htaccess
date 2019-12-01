<?php
$post_id = $_GET['post_id'] ?? null;
$category_id = $_GET['category_id'] ?? null;
echo (isset($post_id))? "Post id : {$post_id}<br>" : "No Post!<br>";
echo (isset($category_id))? "Category id : {$category_id}" : "No Category!";