<?php
$title = (isset($_GET['ArticleSN']) ? '編輯' : '新增') . '標籤';
$layout = './layout/layout.php';

require '../arranger.php';
include find('./component/sidebar.php');

if (!empty($_GET['ArticleSN'])) {
	$statement = connect()->prepare("SELECT * FROM ArticleTag WHERE ArticleSN=?");
	$statement->execute([$_GET['ArticleSN']]);
	$row = $statement->fetch(PDO::FETCH_ASSOC);
};



?>

<div class="body-wrapper">
	<?php include find('./component/header.php') ?>

	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title fw-semibold mb-4"><?= $title ?></h5>
				<form name="form1" action="<?= isset($_GET['ArticleSN']) ? 'edit-api.php?ArticleSN=' . $_GET['ArticleSN'] : 'add-api.php' ?>" method="POST">
					<div class="mb-3">
						<label for="ArticleSN" class="form-label">文章序號</label>
						<input type="text" class="form-control" id="ArticleSN" name="ArticleSN" value='<?= isset($_GET['ArticleSN']) ? $row['ArticleSN'] : "" ?>'>
					</div>
					<div class="mb-3">
						<label for="TagSN" class="form-label">標籤序號</label>
						<input type="text" class="form-control" id="TagSN" name="TagSN" value='<?= isset($_GET['ArticleSN']) ? $row['TagSN'] : "" ?>'>
					</div>

					<button type="submit" class="btn btn-primary">提交表單</button>
				</form>
			</div>
		</div>
	</div>
</div>
