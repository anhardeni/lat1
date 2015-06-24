<?php

namespace backend\controllers;

use Yii;
use backend\models\Tmaster;
use backend\models\TmasterSearch;
use backend\models\Kapal;
use backend\models\Tagen;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;
$connection = \Yii::$app->db;

/**
 * TmasterController implements the CRUD actions for Tmaster model.
 */
class TmasterController extends Controller
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
     * Lists all Tmaster models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TmasterSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tmaster model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Tmaster model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tmaster();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Tmaster model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tmaster model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

   public function actionCetakWord($id)
    {
       
        $tmaster = Tmaster::findOne($id);
             
        $kapal = Kapal::find() 
              ->where (['kapal_id'=>$tmaster->idkapal])->all();
        
        $agen = Tagen::find()
               ->where (['id'=>$tmaster->idagen])->all();
        
        
        // Initalize the TBS instance
        $OpenTBS = new \hscstudio\export\OpenTBS; // new instance of TBS
        // Change with Your template kaka
	$template = Yii::getAlias('@hscstudio/export').'/templates/opentbs/lhpspword1.docx';
        $OpenTBS->LoadTemplate($template); // Also merge some [onload] automatic fields (depends of the type of document).
        $OpenTBS->VarRef['xnolhpsp']= $tmaster -> nolphsp;
         $OpenTBS->VarRef['xtgllhpsp']= $tmaster -> tgllhpsp;
         $OpenTBS->VarRef['xvoy']= $tmaster -> voy;
         $OpenTBS->VarRef['xtglpeldatang']= $tmaster -> tglpeldatang;
         $OpenTBS->VarRef['xjumlahkemasan']= $tmaster -> jumlahkemasan;
         $OpenTBS->VarRef['xsatuan']= $tmaster -> satuan;
         $OpenTBS->VarRef['xvolume']= $tmaster ->volume;
         $OpenTBS->VarRef['xberat']= $tmaster ->berat;
         $OpenTBS->VarRef['xbc11']= $tmaster -> bc11;
         $OpenTBS->VarRef['xtglbc11']= $tmaster -> tglbc11;
       
        $data = [];
        foreach($kapal as $kapals){
            $data[] = [
                'kapal_nama'=> $kapals->kapal_nama,
                'kapal_neg'=>$kapals->kapal_neg,
                    ];
        }
         
         $OpenTBS->MergeBlock('data' ,$data);
         
          $b1 = [];
          foreach($agen as $agens){
            $b1[] = [
             'namaagen'=>$agens->namaagen
                    ];
                  }
       
         $OpenTBS->MergeBlock('b1' ,$b1);
         
    
        
        // Output the result as a file on the server. You can change output file
       
        $OpenTBS->Show(OPENTBS_DOWNLOAD, 'export.docx'); // Also merges all [onshow] automatic fields.			
        exit;
    } 
    /**
     * Finds the Tmaster model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tmaster the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tmaster::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
