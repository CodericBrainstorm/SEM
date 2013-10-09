<?php

/**
 * This is the model base class for the table "inst_discapacidad_establecimiento".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Discapacidadestablecimiento".
 *
 * Columns in table "inst_discapacidad_establecimiento" available as properties of the model,
 * followed by relations of table "inst_discapacidad_establecimiento" available as properties of the model.
 *
 * @property integer $id
 * @property integer $discapacidadID
 * @property integer $establecimientoID
 *
 * @property InstDiscapacidad $discapacidad
 * @property InstEstablecimiento $establecimiento
 */
abstract class BaseDiscapacidadestablecimiento extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'inst_discapacidad_establecimiento';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Discapacidadestablecimiento|Discapacidadestablecimientos', $n);
	}

	public static function representingColumn() {
		return 'id';
	}

	public function rules() {
		return array(
			array('discapacidadID, establecimientoID', 'numerical', 'integerOnly'=>true),
			array('discapacidadID, establecimientoID', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, discapacidadID, establecimientoID', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'discapacidad' => array(self::BELONGS_TO, 'InstDiscapacidad', 'discapacidadID'),
			'establecimiento' => array(self::BELONGS_TO, 'InstEstablecimiento', 'establecimientoID'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'discapacidadID' => null,
			'establecimientoID' => null,
			'discapacidad' => null,
			'establecimiento' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('discapacidadID', $this->discapacidadID);
		$criteria->compare('establecimientoID', $this->establecimientoID);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}