<?php require 'utils.php'; ?>
<?php
		$page_title = "ブログトップページ";
		$limit = 5;
		$offset = get_offset();//←utilからとってきてる、どこからとってくるか、ここでは４番目からとってくる
			if (isset($_GET['limit']) and !empty($_GET['limit'])){
			$limit = $_GET['limit'];//サイトのURLにlimit=?で指定したら指定した数しかでない相対的にかわるための値
		}

		if (isset($_GET['offset']) and !empty($_GET['offset'])){
			$offset = $_GET['offset'];
		}


		$count = get_posts_count();
		$stmt = get_db()->query("select * from posts order by updated desc limit ${limit} offset ${offset}");//statement

 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Blog top</title>
	<link rel="stylesheet" href="css/style.css">


</head>
<body>

	<header>
		<img id="titlelogo" src="images/FMagazine.png" alt="title" width="700px" height="250px" />
		<p class="first">今日は雨で明日も雨、ときどきくもりとはれ。人間ていいな。今日もお腹が空いたり眠かったりする。</p>
	</header>
		<div id="contents">
			<a class="pager" href="new.php">NewArticle</a>
			<div class="pager">
				<?php if($offset > 0) : ?>
					<a href="/blog/?offset=<?php echo get_prev_offset($limit); ?>">new</a>
				<?php endif; ?>
				<?php if ($offset + $limit < $count) : ?>
					<a href="?offset=<?php echo get_next_offset($limit); ?>">old</a>
				<?php endif; ?>
				<p>総件数：<?php echo $count; ?></p>
			</div>
			<?php foreach($stmt as $row){ ?>
				<?php $id = $row['id']; ?>
				<article>
				<a href="show.php?id=<?php echo $id; ?>" title="">
					<?php echo( $row['id'] . ' ' . $row['title']); ?>
				</a>
				<span><?php echo $row['updated']; ?></span>
				<a href="edit.php?id=<?php echo $id; ?>" >編集</a>
				<a href="delete.php?id=<?php echo $id; ?>" class="delete">削除</a>

				</article>
			<?php } ?>
			</div>

	<footer>
	<?php include 'parts/footer.php'; ?>
	</footer>

	<script>
		var dels = document.getElementsByClassName('delete');
		for(var i=0; i<dels.length; i++){
			dels[i].addEventListener('click', function(e){
				if(confirm('削除してもよろしいですか？')){
						return true;
					}else{
					e.preventDefault();
					return false;
				}
			});
		}
	</script>

</body>
</html>