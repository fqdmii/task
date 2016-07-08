<?php
	require 'utils.php';
	$id = $_GET['id'];
	$post = get_post($id);
	// print_r($post);
	if (empty($post['file_type'])){
		$file_type = "image/png";
	}else{
		$file_type = $post['file_type'];
	}
	$content_type = "Content-type: ${file_type}";
	header($content_type);//pngのときはpngに変える
	readfile($post['image_path']);
?>