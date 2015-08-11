<?php

namespace backend\controllers;

use Yii;
use backend\models\Tmaster;
use backend\models\TmasterSearch;
use backend\models\Kapal;
use backend\models\Tagen;
use backend\models\Tnegpelabuhan;
use backend\models\Pegawai;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
// use yii\db\Query;
//$connection = \Yii::$app->db;

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

        if ($model->load(Yii::$app->request->post())){
            $model->datecreated = date('Y-m -d');
            //$models->tgllhpsp = x1 ;
           // $models->tglbc11 = x2 ;
           // if x1>x2 
            if( $model -> validate() and $model->save()) {
        }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->renderAjax('create', [
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
        
         $negpelabuhan = Tnegpelabuhan::find()
               ->where (['idpel'=>$tmaster->idpelasal])->all();
         
          $nippemeriksa = Pegawai::find()
               ->where (['nip'=>$tmaster->nippemeriksa])->all();
          
           $nipatasan1 = Pegawai::find()
               ->where (['nip'=>$tmaster->nipatasan1])->all();
             $nipatasan2 = Pegawai::find()
               ->where (['nip'=>$tmaster->nipatasan2])->all();
         
        
        
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
           $OpenTBS->VarRef['xbc12']= $tmaster -> bc12;
         $OpenTBS->VarRef['xtglbc12']= $tmaster -> tglbc12;
           $OpenTBS->VarRef['xbc13']= $tmaster -> bc13;
         $OpenTBS->VarRef['xtglbc13']= $tmaster -> tglbc13;
         $OpenTBS->VarRef['xlhpsp']= $tmaster -> lhpsp;
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
         
         $b2 = [];
          foreach($negpelabuhan as $negpelabuhans){
            $b2[] = [
             'negarapelabuhan'=>$negpelabuhans->negarapelabuhan
                    ];
                  }
       
         $OpenTBS->MergeBlock('b2' ,$b2);
         
          $b5 = [];
          foreach($nippemeriksa as $nippemeriksas){
            $b5[] = [
             'nip'=>$nippemeriksas->nip,
                'nama'=>$nippemeriksas->nama
                    ];
                  }
       
         $OpenTBS->MergeBlock('b3' ,$b5);
         
      $b5 = [];
          foreach($nipatasan1 as $nipatasan1s){
            $b5[] = [
             'nip'=>$nipatasan1s->nip,
                'nama'=>$nipatasan1s->nama
                    ];
                  }
       
         $OpenTBS->MergeBlock('b4' ,$b5);
         
           $b5 = [];
          foreach($nipatasan2 as $nipatasan2s){
            $b5[] = [
             'nip'=>$nipatasan2s->nip,
                'nama'=>$nipatasan2s->nama
                    ];
                  }
       
         $OpenTBS->MergeBlock('b5' ,$b5);
        
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
