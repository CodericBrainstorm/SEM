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
        //ACTUALIZACION  POR NUMERO DE DOCUMENTO
        public function actionActualizaXdocumento($nd) {
              
		//$model = $this->loadModel($NUM_OCUMENTO, 'Egresado');
                $model->NRO_OCUMENTO = $nd;
                echo $model->NRO_OCUMENTO;
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

	public function actionAdminxSede($codsede) {
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
        public function actionAdmin() {
                Controller::scriptBasico();
		$model = new Egresado('search');
		$model->unsetAttributes();
                
		if (isset($_GET['Egresado']))
			$model->setAttributes($_GET['Egresado']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
        
        public function actionCreateXsede($idsede) {
		$model = new Egresado;
                $model->CODIGO_DANE_SEDE = $idsede;
                if (isset($_POST['Egresado'])) {
			$model->setAttributes($_POST['Egresado']);
                      if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->ID));
                               
//                                $criteria=new CDbCriteria;
//                                $criteria->select='max(egresadoID) AS maxColumn';
//                                $row = $model->model()->find($criteria);
//                                $somevariable = $row['maxColumn'];
//                                echo '$somevariable:  '. $somevariable; exit;
//                                $modHistoricoEgres = new Historicoegresado();
//                                $modHistoricoEgres->sedeID = $idsede;
//                                
//                                $modHistoricoEgres->egresadoID = 1000;
//                                $orden->insert();
			}
                       echo 'IDSEDE:  '. $idsede; 
                      
		}
                

		$this->render('create', array( 'model' => $model));
	}
        
        public function actionBusqueda(){
            
            $model = new Egresado;
            
            Controller::scriptBasico();
            
            $model->unsetAttributes();
           
            if (isset($_GET['Egresado'])) 
			$model->setAttributes($_GET['Egresado']);
                  
            $this->render('busqueda', array(
			'model' => $model,
		));
        }

}