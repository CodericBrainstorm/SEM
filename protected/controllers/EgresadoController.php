<?php

class EgresadoController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Egresado'),
		));
	}

	public function actionCreate() {
		$model = new Egresado;


		if (isset($_POST['Egresado'])) {
			$model->setAttributes($_POST['Egresado']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->ID));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Egresado');


		if (isset($_POST['Egresado'])) {
			$model->setAttributes($_POST['Egresado']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->ID));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Egresado')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Egresado');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin($codsede) {
                Controller::scriptBasico();
		$model = new Egresado('search');
		$model->unsetAttributes();
                $model->CODIGO_DANE_SEDE=$codsede;
		if (isset($_GET['Egresado']))
			$model->setAttributes($_GET['Egresado']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}