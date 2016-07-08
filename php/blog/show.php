<?php require 'utils.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>詳細</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
<img id="titlelogo" src="images/FMagazine.png" alt="title" width="700px" height="250px" />
</header>
	<?php
		$db = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	?>
	<div id="contents">
		<article>
			<?php
			if (isset($_GET['id'])){
				$id = $_GET['id'];
				$stmt = $db->query("select * from posts where id=${id}");
				if ($stmt->rowCount() ==0){
					echo "指定された記事がありません";
				}else{
					foreach ($stmt as $row){
						$post = $row;
					}
				}
			} else {
				echo "idが指定されていません";
			}
			?>
			<?php if (isset($post)){ ?>
			<h2><?php echo $post['title']; ?></h2>
			<p><?php echo $post['created']; ?></p>
			<p><?php echo $post['updated']; ?></p>
			<p><?php echo $post['contents']; ?></p>
			<img src="image.php?id=<?php echo $post['id']; ?>" >
			<?php } ?>
		</article>
	</div>
<footer>
	<?php include 'parts/footer.php'; ?>
</footer>
</body>
</html>