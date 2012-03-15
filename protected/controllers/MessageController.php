<?php

class MessageController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public Function actionLog() {
		$this->render('log');
	}

	public function actionDate() {
		$theTime = date("D.M.j G:i:s T Y");
		$test = array(1,2,3,"asdf", "23qwdasda");
		$this->render('date', array('time' => $theTime, 'data' => $test));
	}
	
	public function actionBye() {
		$this->render('bye');
	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}