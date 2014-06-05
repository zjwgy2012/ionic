<?php
$basePath = dirname(__FILE__).'/..';
Yii::$classMap = array(
    'Ionic' => $basePath . '/extensions/ionic/utilities/Ionic.php',
    'IonicModel' => $basePath . '/extensions/ionic/models/IonicModel.php',
    'IonicController' => $basePath . '/extensions/ionic/controllers/IonicController.php',
    'UserIdentity' => $basePath . '/components/UserIdentity.php',
    'LoginManager' => $basePath . '/components/LoginManager.php',
    'RegisterManager' => $basePath . '/components/RegisterManager.php',
);
