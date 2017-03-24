<?php

namespace frontend\controllers;

use Milo\Github;
use app\models\UserActivity;
use Yii;

class ApiController extends \yii\web\Controller
{
	 public function actionIndex()
    {
    	if(isset($_POST['name'])){
    	$username = $_POST['name'];
    	$api = new Github\Api;
    	$response = $api->get('/users/' . $username . '/repos/');
    	$data = $api->decode($response);
    	$user_current= Yii::$app->user->identity->username;
    	$user_activity = new UserActivity;
    	$user_activity->user_id = Yii::$app->user->id;
    	$user_activity->date_created = time();
    	$user_activity->action = $user_current . ' ' . 'search list of the repositories '  .  ' ' . 'of user ' . $username ;
    	$user_activity->save();
        return $this->render('index', [
        		'data'=>$data,
        	]);
    	}else{
    		 return $this->render('index');
    	}
    }

    public function actionContents()
     {
		$values = [];
		foreach ($_POST as $key => $value) {
			$values[] .= $key;
		}
    	if(isset($_POST)){
    	$api = new Github\Api;
    	$response = $api->get('/repos/' . $values[0] ."/". $values[1].'/contents/');
    	$data = $api->decode($response);
    	$username = Yii::$app->user->identity->username;
    	$user_activity = new UserActivity;
    	$user_activity->user_id = Yii::$app->user->id;
    	$user_activity->date_created = time();
    	$user_activity->action = $username . ' ' . 'opened files of the repository '  . $values[1] .  ' ' . 'of user ' . $values[0] ;
    	$user_activity->save();
        return $this->render('contents', [
        		'data'=>$data,
        	]);
    	}else{
    		 return $this->render('contents');
    	}
    }



     public function actionFile()
     {
		$values = [];
		foreach ($_POST as $key => $value) {
			$values[] .= $key;
		}
     	$repl = preg_replace('/_/', '.', $values[0]);
    	if(isset($_POST)){
    	$api = new Github\Api;
    	$response = $api->get($repl);
    	$data = $api->decode($response);
    	$user_current= Yii::$app->user->identity->username;
    	$user_activity = new UserActivity;
    	$user_activity->user_id = Yii::$app->user->id;
    	$user_activity->date_created = time();
    	$user_activity->action = $user_current . ' ' . 'opened file' . ' ' . $values[0] . ' ' . 'of the repository';
    	$user_activity->save();
        return $this->render('file', [
        		'data'=>$data,
        	]);

    	}else{
    		 return $this->render('file');
    	}
    }

      public function actionDir()
     {
		$values = [];
		foreach ($_POST as $key => $value) {
			$values[] .= $key;
		}
     	$repl = preg_replace('/_/', '.', $values[0]);
    	if(isset($_POST)){
    	$api = new Github\Api;
    	$response = $api->get($repl);
    	$data = $api->decode($response);
    	$user_current= Yii::$app->user->identity->username;
    	$user_activity = new UserActivity;
    	$user_activity->user_id = Yii::$app->user->id;
    	$user_activity->date_created = time();
    	$user_activity->action = $user_current . ' ' . 'opened folder' . ' ' . $values[0] . ' ' . 'of the repository';
    	$user_activity->save();
        return $this->render('dir', [
        		'data'=>$data,
        	]);

    	}else{
    		 return $this->render('dir');
    	}
    }

     public function actionTree()
     {
		$values = [];
		foreach ($_POST as $key => $value) {
			$values[] .= $key;
		}
     	$repl = preg_replace('/_/', '.', $values[0]);
    	if(isset($_POST)){
    	$api = new Github\Api;
    	$response = $api->get($repl);
    	$data = $api->decode($response);
    	$user_current= Yii::$app->user->identity->username;
    	$user_activity = new UserActivity;
    	$user_activity->user_id = Yii::$app->user->id;
    	$user_activity->date_created = time();
    	$user_activity->action = $user_current . ' ' . 'opened folder' . ' ' . $values[0] . ' ' . 'of the repository';
    	$user_activity->save();
        return $this->render('tree', [
        		'data'=>$data,
        	]);

    	}else{
    		 return $this->render('tree');
    	}
    }

    public $enableCsrfValidation = false;

}
