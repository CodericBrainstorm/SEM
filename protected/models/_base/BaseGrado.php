<?php

/**
 * This is the model base class for the table "inst_grado".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Grado".
 *
 * Columns in table "inst_grado" available as properties of the model,
 * followed by relations of table "inst_grado" available as properties of the model.
 *
 * @property integer $id
 * @property string $grado
 *
 * @property InstGradoEstablecimiento[] $instGradoEstablecimientos
 */
abstract class BaseGrado extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'inst_grado';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Grado|Grados', $n);
	}

	public static function representingColumn() {
		return 'grado';
	}

	public function rules() {
		return array(
			array('grado', 'required'),
			array('grado', 'length', 'max'=>2),
			array('id, grado', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'instGradoEstablecimientos' => array(self::HAS_MANY, 'InstGradoEstablecimiento', 'gradoID'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'grado' => Yii::t('app', 'Grado'),
			'instGradoEstablecimientos' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('grado', $this->grado, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}