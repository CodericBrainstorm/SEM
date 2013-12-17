<?php

class HistoricolaboralController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Historicolaboral'),
		));
	}

	public function actionCreate($idegresado) {
                Controller::scriptBasico();
		$model = new Historicolaboral;

                
		if (isset($_POST['Historicolaboral'])) {
			$model->setAttributes($_POST['Historicolaboral']);
                        $model->egresadoID = $idegresado;
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
                 Controller::scriptBasico();
		$model = $this->loadModel($id, 'Historicolaboral');


		if (isset($_POST['Historicolaboral'])) {
			$model->setAttributes($_POST['Historicolaboral']);

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
			$this->loadModel($id, 'Historicolaboral')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Historicolaboral');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin($idegresado) {
                Controller::scriptBasico();
		$model = new Historicolaboral('search');
		$model->unsetAttributes();
                $model->egresadoID=$idegresado;
		if (isset($_GET['Historicolaboral']))
			$model->setAttributes($_GET['Historicolaboral']);
                
		$this->render('admin', array(
			'model' => $model,
		));
	}

}