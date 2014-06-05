<?php

class Test extends CActiveRecord {
    private $_criteria;
    public function __construct()
    {
        parent::__construct();
        $this->_criteria = new CDbCriteria;
    }
    public static function model($className=__CLASS__)
	{
		return parent::model($className); 
	}

	public function tableName()
	{
		return 'test';
    }

    public function scopes()
    {
        return array(
            'published'=>array(
                'condition'=>'type=1',
            ),
            'recently'=>array(
                'order'=>'id DESC',
                'limit'=>3,
            )
        );
    }
    public function getList()
    {
        //$this->_criteria = null;
        $this->_criteria->select = '*';
        $this->_criteria->condition = 'type=1';
        $this->_criteria->order = 'id DESC';
        $this->_criteria->limit = 2;
        $objArr = self::model()->findAll($this->_criteria);
        foreach($objArr as $k => $obj){
            $objArr[$k] = $obj->attributes;
        }
        return $objArr;
    }

}
