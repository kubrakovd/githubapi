<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\filters\VerbFilter;

?>
<br>
<br>
<br>
<h1 class="text-center"><?=Yii::t('app', 'Choose user which repositories you want to watch') ?></h1>

<div class="panel search">
	<div class="panel-body">
			<form  method="post">
				<div class="row text-center">
					<div class="col-sm-offset-4 col-sm-4">
						<label class='text-center' for='name' >Please write name of the real existed Github user:</label>
						<input class="form-control" type="text" name='name' id='name' value='<?= isset($_POST['name'])?$_POST['name']:'' ?>'>
					</div>
				</div>
				<!-- /.row -->
				<br>
				<div class="row text-center">
					<div class="col-sm-12">
						<input class="btn btn-primary" type="submit" value="Search Repositories">
					</div>
				</div>
				<!-- /.row -->
			</form>
	</div>
</div>
<?php
	if (isset($_POST['name']) && count($data)>0) {
        ?>
        <div class="row">
        	<div class="col-sm-offset-1 col-sm-1">
        		<div class="panel panel-primary">
        			<div class="panel-heading text-center">№</div>
        		</div>
        	</div>
        	<!-- /.col-sm-3 -->
        	<div class="col-sm-4">
        		<div class="panel panel-primary">
        			<div class="panel-heading text-center">User </div>
        		</div>
        	</div>
        	<!-- /.col-sm-4 -->
        	<div class="col-sm-4">
        		<div class="panel panel-primary">
        			<div class="panel-heading text-center">Repository name</div>
        		</div>
        	</div>
        	<!-- /.col-sm-4 -->
        </div>
        <!-- /.row -->
<?php

	$i=1;
	foreach ($data as $item) {
		?>
		<div class="row">
			<div class="col-sm-offset-1 col-sm-1">
				<div class="panel panel-success">
					<div class="panel-heading text-center">
						<?= $i?>
					</div>
				</div>
			</div>
			<!-- /.col-sm-offset-1 col-sm-1-->
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<?=$item->owner->login ?>
					</div>
				</div>
			</div>
			<!-- /.col-sm-4-->
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<form  action="<?= Yii::getAlias('@web')?>/api/contents" method="post">
							<input type="hidden" name='<?=$item->owner->login?>'>
							<input type="hidden" name='<?= $item->name?>'>
							<input id="input" title="Click to see content" class="input btn btn-default" type="submit" value="<?=$item->name?>">
						</form>
					</div>

				</div>
			</div>
			<!-- /.col-sm-4-->
		</div>
		<!-- /.row -->
  <?php
  $i++;
	}
}
 ?>
