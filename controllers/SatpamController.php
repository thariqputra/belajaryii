<?php

namespace app\controllers;

use app\models\Satpam;
use app\models\SatpamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SatpamController implements the CRUD actions for Satpam model.
 */
class SatpamController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Satpam models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SatpamSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Satpam model.
     * @param int $id_satpam Id Satpam
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_satpam)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_satpam),
        ]);
    }

    /**
     * Creates a new Satpam model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Satpam();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_satpam' => $model->id_satpam]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Satpam model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_satpam Id Satpam
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_satpam)
    {
        $model = $this->findModel($id_satpam);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_satpam' => $model->id_satpam]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Satpam model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_satpam Id Satpam
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_satpam)
    {
        $this->findModel($id_satpam)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Satpam model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_satpam Id Satpam
     * @return Satpam the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_satpam)
    {
        if (($model = Satpam::findOne(['id_satpam' => $id_satpam])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
