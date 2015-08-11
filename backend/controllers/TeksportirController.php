<?php

namespace backend\controllers;

use Yii;
use backend\models\Teksportir;
use backend\models\TeksportirSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TeksportirController implements the CRUD actions for Teksportir model.
 */
class TeksportirController extends Controller
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
     * Lists all Teksportir models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TeksportirSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Teksportir model.
     * @param integer $ideksp
     * @param integer $tdafeksportir_id
     * @return mixed
     */
    public function actionView($ideksp, $tdafeksportir_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($ideksp, $tdafeksportir_id),
        ]);
    }

    /**
     * Creates a new Teksportir model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Teksportir();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ideksp' => $model->ideksp, 'tdafeksportir_id' => $model->tdafeksportir_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Teksportir model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $ideksp
     * @param integer $tdafeksportir_id
     * @return mixed
     */
    public function actionUpdate($ideksp, $tdafeksportir_id)
    {
        $model = $this->findModel($ideksp, $tdafeksportir_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ideksp' => $model->ideksp, 'tdafeksportir_id' => $model->tdafeksportir_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Teksportir model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $ideksp
     * @param integer $tdafeksportir_id
     * @return mixed
     */
    public function actionDelete($ideksp, $tdafeksportir_id)
    {
        $this->findModel($ideksp, $tdafeksportir_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Teksportir model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $ideksp
     * @param integer $tdafeksportir_id
     * @return Teksportir the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ideksp, $tdafeksportir_id)
    {
        if (($model = Teksportir::findOne(['ideksp' => $ideksp, 'tdafeksportir_id' => $tdafeksportir_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
