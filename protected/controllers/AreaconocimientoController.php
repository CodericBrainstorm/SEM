<?php

class AreaconocimientoController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Areaconocimiento'),
		));
	}

	public function actionCreate($idhistegres) {
               
		$model = new Areaconocimiento;


		if (isset($_POST['Areaconocimiento'])) {
			$model->setAttributes($_POST['Areaconocimiento']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Areaconocimiento');


		if (isset($_POST['Areaconocimiento'])) {
			$model->setAttributes($_POST['Areaconocimiento']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Areaconocimiento')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Areaconocimiento');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
                Controller::scriptBasico();
		$model = new Areaconocimiento('search');
		$model->unsetAttributes();

		if (isset($_GET['Areaconocimiento']))
			$model->setAttributes($_GET['Areaconocimiento']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}