<?php
namespace frontend\controllers;
use yii\web\Controller;

class AdminController extends Controller {
    public function actionIndex() {
        $this->layout = 'admin';
        return $this->render('patient');
    }
    public function actionLogin() {
        return $this->render('login');
    }
    public function actionPatient()
    {
        $this->layout = 'admin';
        return $this->render('patient');
    }
    public function actionDoctor()
    {
        $this->layout = 'admin';
        return $this->render('doctor');
    }
}