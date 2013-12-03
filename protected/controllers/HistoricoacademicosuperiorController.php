<?php

class HistoricoacademicosuperiorController extends GxController {


	public function actionView($id) {
               Controller::scriptBasico();
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Historicoacademicosuperior'),
		));
	}

	public function actionCreate($idegresado) {
            
            Controller::scriptBasico();
		$model = new Historicoacademicosuperior;
                $model = new Historicoacademicosuperior('search');
                $model->unsetAttributes();
                $model->egresadoID = $idegresado;

		if (isset($_POST['Historicoacademicosuperior'])) {
                       
			$model->setAttributes($_POST['Historicoacademicosuperior']);
                        
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
		$model = $this->loadModel($id, 'Historicoacademicosuperior');


		if (isset($_POST['Historicoacademicosuperior'])) {
			$model->setAttributes($_POST['Historicoacademicosuperior']);

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
			$this->loadModel($id, 'Historicoacademicosuperior')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Historicoacademicosuperior');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin($idegresado) {
                Controller::scriptBasico();
		$model = new Historicoacademicosuperior('search');
		$model->unsetAttributes();
                 $model->egresadoID = $idegresado;
		if (isset($_GET['Historicoacademicosuperior']))
			$model->setAttributes($_GET['Historicoacademicosuperior']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}