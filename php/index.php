<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>PHPフィリピン！！</title>
</head>
<body>

	<p>
	<!--  http://192.168.33.10/?name=山田&age=20 とうつとブラウザに表示される-->

	<!--
		ようこそ
		<?php echo $_REQUEST['name']; ?>
		さん！！
		あなたは
		<?php echo $_REQUEST['age']; ?>
		歳ですね。
		<?php $total = $REQUEST['age'] + $_REQUEST['plus'];
		echo $total;
		?>
		</p>

		<p>
		 <?php echo 5+7; ?>

		ヒアドキュメント
		<?php
$var = <<<EOT
はるはあけぼのやうやうとしろくなりぬるやまぎはすこしあかりてむらさきだちたるくものほぞくたなびきたる
なつはよるつきのころはさらなりやみもなほほたるのおほくとびちがひたるただひとつふたつなどほのかにうちひかりてゆくもおかし
EOT;
		echo $var;
		 ?>
		 <?php echo $_SERVER; ?>

		</p>

<form action="" method="post"></form>
	<input type="text" value="名前">
	<input type="button" value="送信">
 -->

	<?php
	$array = array('apple', 'banaba','orange');
	?>
	<pre><!--preのなかにかくとすべて改行される-->
	あいうえお
	かきくけこ
	<?php print_r($array);
	echo $array[1];
	 ?>
	 <?php
	 $array = array('red' => 'apple', 'yellow'=>'banana',
	 	'orange'=> 'orange');
	 print_r($array);
	 ?>
	 <?php
	 $array = array('red' => array('apple','cherry'),
	 	'yellow' => array('banana','mango'),
	 	'orange' => 'orange');
	 	print_r($array);
	 	echo $array['yellow'][1];
	 	echo $array['yellow'][1];echo $array['red'][0],

	 ?>
	</pre>
</body>
</html>