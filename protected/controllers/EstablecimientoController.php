<?php

class EstablecimientoController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Establecimiento'),
		));
	}

	public function actionCreate() {
                /*Controller::scriptBasico();*/
		$model = new Establecimiento;


		if (isset($_POST['Establecimiento'])) {
			$model->setAttributes($_POST['Establecimiento']);

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
		$model = $this->loadModel($id, 'Establecimiento');
                Controller::scriptBasico(2);
		if (isset($_POST['Establecimiento'])) {
			$model->setAttributes($_POST['Establecimiento']);
                        
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
			$this->loadModel($id, 'Establecimiento')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
                
                Controller::scriptBasico();
		$dataProvider = new CActiveDataProvider('Establecimiento');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
                Controller::scriptBasico();
		$model = new Establecimiento('search');
		$model->unsetAttributes();

		if (isset($_GET['Establecimiento']))
			$model->setAttributes($_GET['Establecimiento']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
        
        public function actionMunicipios($id) {
            
            $data = Municipio::model()->findAll(array('order'=>'codigo','condition'=>'departamento_id='.$id));
            $data = CHtml::listData($data,'idmunicipio','nombre');
            if (!empty($data)) { echo '<option value="">Seleccione...</option>'; }
            foreach($data as $value=>$name) {
                echo CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
            }
	}
        
        public function actionSecretarias($id) {
            
            $ciudad = Municipio::model()->findAll(array('order'=>'nombre', 'condition'=>'idmunicipio='.$id));
            //echo $ciudad->nombre; exit;
            $data = Secretaria::model()->findAll(array('order'=>'codigo','condition'=>'departamento_id='.$ciudad->nombre));
            $data = CHtml::listData($data,'idmunicipio','nombre');
            echo $data; exit;
            if (!empty($data)) { echo '<option value="">Seleccione...</option>'; }
            foreach($data as $value=>$name) {
                echo CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
            }
	}
        
        public function actionAdminByUser($user, $rol){
            
            Controller::scriptBasico();
            $model = new Establecimiento('search');
            $model->unsetAttributes();
            if($rol == 'rector'){
              $model->nombre_rector = $user;  
            }
            if($rol == 'secretaria'){
                $model->secretaria = $user;  
            }
            if (isset($_GET['Sede']))
			$model->setAttributes($_GET['Sede']);

		$this->render('admin', array(
			'model' => $model,
		));
        }

}