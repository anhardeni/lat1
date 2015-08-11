<?php

namespace backend\controllers;

use Yii;
use backend\models\Timportir;
use backend\models\TimportirSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TimportirController implements the CRUD actions for Timportir model.
 */
class TimportirController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Timportir models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TimportirSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Timportir model.
     * @param integer $idtimp
     * @param integer $tdafimportir_id
     * @return mixed
     */
    public function actionView($idtimp, $tdafimportir_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($idtimp, $tdafimportir_id),
        ]);
    }

    /**
     * Creates a new Timportir model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Timportir();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idtimp' => $model->idtimp, 'tdafimportir_id' => $model->tdafimportir_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Timportir model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idtimp
     * @param integer $tdafimportir_id
     * @return mixed
     */
    public function actionUpdate($idtimp, $tdafimportir_id)
    {
        $model = $this->findModel($idtimp, $tdafimportir_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idtimp' => $model->idtimp, 'tdafimportir_id' => $model->tdafimportir_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Timportir model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idtimp
     * @param integer $tdafimportir_id
     * @return mixed
     */
    public function actionDelete($idtimp, $tdafimportir_id)
    {
        $this->findModel($idtimp, $tdafimportir_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Timportir model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idtimp
     * @param integer $tdafimportir_id
     * @return Timportir the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idtimp, $tdafimportir_id)
    {
        if (($model = Timportir::findOne(['idtimp' => $idtimp, 'tdafimportir_id' => $tdafimportir_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
