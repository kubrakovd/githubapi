<?php


use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\filters\VerbFilter;
/* @var $this yii\web\View */


	// Create view of the data of folder
	if (isset($data)) {
        ?>
        <div class="row">
        	<div class="col-xs-offset-1 col-xs-1">
        		<div class="panel panel-primary">
        			<div class="panel-heading text-center">№</div>
        		</div>
        	</div>
        	<!-- /.col-xs-offset-1 col-xs-1-->
        	<div class="col-xs-3">
        		<div class="panel panel-primary">
        			<div class="panel-heading text-center">Name of file </div>
        		</div>
        	</div>
        	<!-- /.col-xs-3 -->
        	<div class="col-xs-3">
        		<div class="panel panel-primary">
        			<div class="panel-heading text-center">Type of file</div>
        		</div>
        	</div>
        	<!-- /.col-xs-3 -->
        	<div class="col-xs-3">
        		<div class="panel panel-primary">
        			<div class="panel-heading text-center">Watch inside</div>
        		</div>
        	</div>
        	<!-- /.col-xs-3 -->
        </div>
        <!-- /.row -->
<?php

	$i=1;
	foreach ($data->tree as $item) {
		?>
		<div class="row">
			<div class="col-xs-offset-1 col-xs-1">
				<div class="panel panel-success">
					<div class="panel-heading text-center">
						<?= $i?>
					</div>
				</div>
			</div>
			<!-- /.col-xs-offset-1 col-xs-1-->
			<div class="col-xs-3">
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<?=$item->path ?>
					</div>
				</div>
			</div>
			<!-- /.col-xs-4-->
			<div class="col-xs-3">
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<?=$item->type; ?>
					</div>
				</div>
			</div>
			<!-- /.col-xs-4-->
			<div class="col-xs-3">
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<?php
						switch ($item->type) {
							case 'tree':
							?>
							<form  action="<?= Yii::getAlias('@web')?>/api/tree" method="post">
								<input type="hidden" name='<?= $item->url?>'>
								<input class="btn btn-info" type="submit" value="watch folder ">
							</form>
							<?php
							break;
							default:
							echo "File";
							break;
						}
						?>
					</div>
				</div>
			</div>
			<!-- /.col-xs-4-->
		</div>
		<!-- /.row -->
  <?php
  $i++;
	}
}
 ?>


