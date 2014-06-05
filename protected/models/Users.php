<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property string $id
 * @property string $email
 * @property string $password
 * @property integer $user_role
 * @property string $nickname
 * @property string $activation_key
 * @property integer $status
 * @property string $created
 * @property string $updated
 *
 * The followings are the available model relations:
 * @property UserMetadata[] $userMetadatas
 * @property UserRoles $userRole
 */
class Users extends IonicModel
{
    const INACTIVE = 0;
    const ACTIVE = 1;
    const BANNED = 2;
    const PENDING_INVITATION = 3;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_role', 'required'),
			array('user_role, status', 'numerical', 'integerOnly'=>true),
			array('email', 'length', 'max'=>100),
			array('password', 'length', 'max'=>64),
			array('nickname, activation_key', 'length', 'max'=>60),
			array('created, updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, email, password, user_role, nickname, activation_key, status, created, updated', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'userMetadatas' => array(self::HAS_MANY, 'UserMetadata', 'user_id'),
			'userRole' => array(self::BELONGS_TO, 'UserRoles', 'user_role'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'email' => 'Email',
			'password' => 'Password',
			'user_role' => 'User Role',
			'nickname' => 'Nickname',
			'activation_key' => 'Activation Key',
			'status' => 'Status',
			'created' => 'Created',
			'updated' => 'Updated',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('user_role',$this->user_role);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('activation_key',$this->activation_key,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
    }
    /*
     * Creates an encrypted hash to be used as a password
     * @param string $email     The user email
     * @param string $password  The password to be encrypted
     * @param string $_dbsalt   The salt value to be used (Yii::app()->params['encryptionKey'])
     * @return 64 character encrypted string
     */
    public function encryptHash($email, $password, $_dbsalt)
    {
        return mb_strimwidth(hash("sha512", hash("sha512", hash("whirlpool", md5($password . md5($email)))) . hash("sha512", md5($password . md5($_dbsalt))) . $_dbsalt), 0, 64);
    }
}
