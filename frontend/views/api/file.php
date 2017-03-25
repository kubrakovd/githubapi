<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\filters\VerbFilter;
/* @var $this yii\web\View */


	// Create view of the file
	if (isset($data)) {
        ?>
        <div class="row">
        	<div class="col-xs-offset-1 col-xs-2">
        		<div class="panel panel-primary">
        			<div class="panel-heading text-center">Name of file </div>
        		</div>
        	</div>
        	<!-- /.col-xs-offset-1 col-xs-2-->
        	<div class="col-xs-3">
        		<div class="panel panel-primary">
        			<div class="panel-heading text-center">Size </div>
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
        			<div class="panel-heading text-center">encoding</div>
        		</div>
        	</div>
        	<!-- /.col-xs-3 -->
        </div>
        <!-- /.row -->

		<div class="row">
			<div class="col-xs-offset-1 col-xs-2">
				<div class="panel panel-success">
					<div class="panel-heading text-center">
						<?= $data->name?>
					</div>
				</div>
			</div>
			<!-- /.col-xs-offset-1 col-xs-2-->
			<div class="col-xs-3">
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<?=$data->size . ' byte' ?>
					</div>
				</div>
			</div>
			<!-- /.col-xs-4-->
			<div class="col-xs-3">
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<?=$data->type?>
					</div>
				</div>
			</div>
			<!-- /.col-xs-4-->
			<div class="col-xs-3">
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<?=$data->encoding?>
					</div>
				</div>
			</div>
			<!-- /.col-xs-4-->
		</div>
		<!-- /.row -->
<?php
	}
 ?>
