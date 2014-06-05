<?php
/*
 * 用户身份验证类，实现了基类的授权方法来验证提供的信息能否定义一个用户，比如用户名和密码。
 */
class UserIdentity extends CUserIdentity{
    const ERROR_PASSWORD_LOCKOUT = 3;
    private $_id;
    private $_hash = NULL;

    //该方法必须实现，来验证用户身份
    public function authenticate($ignoreLockout = 0)
    {
        $record = Users::model()->findByAttributes(array('email'=>$this->username));
        if($record === NULL)
        {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
            return !$this->errorCode;
        }
        $meta = UserMetadata::model()->findbyAttributes(array('user_id' => $record->id, 'key' => 'passwordAttempts'));
        if($meta === NULL)
        {
            $meta = new UserMetadata;
            $meta->user_id  = $record->id;    
            $meta->key      = 'passwordAttempts';
            $meta->value    = 0;
        }
        if(!$ignoreLockout)
        {
            if($meta->value >= self::ERROR_PASSWORD_LOCKOUT)
            {
                $this->errorCode = self::ERROR_PASSWORD_LOCKOUT;
                return !$this->errorCode;
            }
        }

        $this->_hash = Users::model()->encryptHash($this->username,$this->password,Yii::app()->params['encryptionKey']);
        if($record->password != $this->_hash)
        {
            $meta->value = min($meta->value + 1, self::ERROR_PASSWORD_LOCKOUT);
            $meta->save();
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
            return !$this->errorCode;
        }else if($record->status == Users::BANNED || $record->status == Users::INACTIVE || $record->status == Users::PENDING_INVITATION)
        {
            $this->errorCode=self::ERROR_UNKNOWN_IDENTITY;
        }

        if(!$meta->isNewRecord)
            $meta->delete();
        $this->_id                    = $record->id;
        $this->setState('userInfo',        serialize($record));
        //$this->setState('email',        $record->email);
        //$this->setState('nickname',  $record->nickname);
        //$this->setState('status',       $record->status);
        //$this->setState('role',         $record->user_role);
        $this->errorCode=self::ERROR_NONE;
        return !$this->errorCode;
    }
    /*
     * 产生一个新密码
     * @param  string $email The email we want to change
     * @param  string $password The password we want to set to
     * @return string           bcrypt hash
     */
    public function updatePassword($email,$password)
    {
        $hash = Users::model()->encryptHash($email, $password, Yii::app()->params['encryptionKey']);
        return $hash;
    }


    /*
     * 通过Yii::app()->user->id获取用户id、
     * @return int 用户id
     */
    public function getId()
    {
        return $this->_id;
    }
}
