<?php 
include('../models/posts.php');
$isValid = 	isset($_POST['title'])
			&& $_POST['title'] != ''
			&& isset($_POST['content'])
			&& $_POST['content'] != '';
if($isValid) {
	$data = [
		'title' => 				$_POST['title'],
		'permalink' => 			$_POST['permalink'],
		'content' => 			$_POST['content'],
		'publish_date' => 		$_POST['publish_date'],
		'uid' => 				$_POST['uid'],
		'image' => 				$_POST['image'],
		'image_thumbnail' => 	$_POST['image_thumbnail'],
	];
	add_blog_post($data);
}
$res = get_blog_posts();
?>
<table border="1" width="80%">
	<tr>
		<th>id</th>
		<th>title</th>
		<th>permalink</th>
		<th>content</th>
		<th>publish date</th>
		<th>uid</th>
		<th>image</th>
		<th>thumbnail</th>
	</tr>
	<?php foreach($res as $row){ ?>
	<tr>
		<td><?=$row['id']?></td>
		<td><?=$row['title']?></td>
		<td><?=$row['permalink']?></td>
		<td><?=$row['content']?></td>
		<td><?=$row['publish_date']?></td>
		<td><?=$row['uid']?></td>
		<td><?=$row['image']?></td>
		<td><?=$row['image_thumbnail']?></td>
	</tr>
	<?php } ?>
</table>