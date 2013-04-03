<?php

class AdminController extends Controller
{
	public function actionAddDepartment()
	{
		$this->render('addDepartment');
	}

	public function actionAddUser()
	{
		$this->render('addUser');
	}

	public function actionDropUser()
	{
		$this->render('dropUser');
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionShowCases()
	{
		$this->render('showCases');
	}

	public function actionUsers()
	{
		$this->render('users');
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