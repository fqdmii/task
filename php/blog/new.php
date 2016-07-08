<?php require 'utils.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Newarticle</title>
		<link rel="stylesheet" href="css/newsstyle.css">
</head>
<body>
<div id="wrap">
	<header>
		<h1>今日、何があった？</h1>
	</header>
	<div id="contents">
		<article>
			<div class="form">
				<form action="post.php" method="post" name="form" enctype="multipart/form-data">
					<div>
						<label for="title">Title
							<input class="articletitle" type="text" name="title">
						</label>
					</div>
					<div>
						<label for="contents">
							<span class="tart">Article</span>
							<textarea name="contents" id="" cols="80" rows="20">
							</textarea>
						</label>
					</div>
					<div>
						<label class="labelimg" for="image">
							Image
							<input type="file" name="image">
						</label>
					</div>
					<div>
						<input class="send" type="submit" value="投稿する">
					</div>
				</form>
			</div>
		</article>
	</div>
</div>
<footer>MizukiFukuda allright reserved@2016</footer>
</body>
</html>