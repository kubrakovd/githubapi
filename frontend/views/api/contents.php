<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
// use kartik\widgets\Typeahead;
// use yii\widgets\LinkPager;
use yii\helpers\Url;
// use kartik\widgets\DatePicker;
// use yii\data\Pagination;
use yii\filters\VerbFilter;
/* @var $this yii\web\View */



	if (isset($data)) {
        ?>
        <div class="row">
        	<div class="col-xs-offset-1 col-xs-1">
        		<div class="panel panel-primary">
        			<div class="panel-heading text-center">№</div>
        		</div>
        	</div>
        	<!-- /.col-xs-3 -->
        	<div class="col-xs-3">
        		<div class="panel panel-primary">
        			<div class="panel-heading text-center">Name of file </div>
        		</div>
        	</div>
        	<!-- /.col-xs-4 -->
        	<div class="col-xs-3">
        		<div class="panel panel-primary">
        			<div class="panel-heading text-center">Type of file</div>
        		</div>
        	</div>
        	<!-- /.col-xs-4 -->
        	<div class="col-xs-3">
        		<div class="panel panel-primary">
        			<div class="panel-heading text-center">Watch inside</div>
        		</div>
        	</div>
        	<!-- /.col-xs-4 -->
        </div>
        <!-- /.row -->
<?php

	$i=1;
	foreach ($data as $item) {
		?>
		 <div class="row">
		 <div class="col-xs-offset-1 col-xs-1">
    				<div class="panel panel-success">
    	        		<div class="panel-heading text-center">
    	        			<?= $i?>
    	        		</div>
    	        	</div>
            </div>
            <!-- /.col-xs-2-->

	        <div class="col-xs-3">
	        	<div class="panel panel-default">
	        		<div class="panel-heading text-center">
	        		<?=$item->name ?>
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
               <!-- /.col-sm-4-->
             <div class="col-xs-3">
	        	<div class="panel panel-default">
	        		<div class="panel-heading text-center">
	        		<?php
	        			switch ($item->type) {
	        				case 'dir':
	        				?>
		        				<form  action="<?= Yii::getAlias('@web')?>/api/dir" method="post">
				        			<input type="hidden" name='<?= $item->git_url?>'>
		        					<input class="btn btn-info" type="submit" value="watch folder ">

		        				</form>
	        				<?php
	        				break;
	        				default:
	        				?>
		        				<form  action="<?= Yii::getAlias('@web')?>/api/file" method="post">
				        			<input type="hidden" name='<?= $item->_links->self?>'>
		        					<input class="btn btn-default" type="submit" value="watch file info">

		        				</form>
	        				<?php
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
