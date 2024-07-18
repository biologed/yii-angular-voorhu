<?php

use yii\web\Application;
use yii\web\User;

class Yii {
    /**
     * @var __Application|Application
     */
    public static __Application|Application $app;
}

/**
 * @property yii\rbac\DbManager $authManager 
 * @property __WebUser|User $user
 * 
 */
class __Application {
}

/**
 * @property app\models\Users $identity
 */
class __WebUser {
}
