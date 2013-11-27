<?php

class HistoricoegresadoController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Historicoegresado'),
		));
	}

	public function actionCreate() {
		$model = new Historicoegresado;


		if (isset($_POST['Historicoegresado'])) {
			$model->setAttributes($_POST['Historicoegresado']);

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
		$model = $this->loadModel($id, 'Historicoegresado');


		if (isset($_POST['Historicoegresado'])) {
			$model->setAttributes($_POST['Historicoegresado']);

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
			$this->loadModel($id, 'Historicoegresado')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Historicoegresado');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin($idegresado="",$idsede="") {
                Controller::scriptBasico();
		$model = new Historicoegresado('search');
		$model->unsetAttributes();
                $model->egresadoID=$idegresado;
		if (isset($_GET['Historicoegresado']))
			$model->setAttributes($_GET['Historicoegresado']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
        
        public function actionHistorico($codigoestablecimiento) {
                Controller::scriptBasico();
		$model = new Historicoegresado('search');
		$model->unsetAttributes();
                $model->egresadoID=$idegresado;
		if (isset($_GET['Historicoegresado']))
			$model->setAttributes($_GET['Historicoegresado']);

		$this->render('historico', array(
			'model' => $model,
                        'codigoestablecimiento' => $codigoestablecimiento
		));
                
                
	}

}