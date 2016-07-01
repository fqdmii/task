<?php require 'utils.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Newarticle</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>

</header>
	<div id="contents">
		<article>
			<form action="post.php" method="post" name="form">
				<div>
					<label for="title">タイトル
						<input type="text" name="title">
					</label>
				</div>
				<div>
					<label for="contents">内容
						<textarea name="contents" id="" cols="30" rows="10">
						</textarea>
					</label>
				</div>
				<div>
					<input type="submit" value="送信">
				</div>
			</form>
		</article>
	</div>
</body>
</html>