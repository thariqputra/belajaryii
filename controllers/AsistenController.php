<?php

namespace app\controllers;

use app\models\Asisten;
use app\models\AsistenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AsistenController implements the CRUD actions for Asisten model.
 */
class AsistenController extends Controller
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
     * Lists all Asisten models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AsistenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Asisten model.
     * @param int $id_asisten Id Asisten
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_asisten)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_asisten),
        ]);
    }

    /**
     * Creates a new Asisten model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Asisten();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_asisten' => $model->id_asisten]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Asisten model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_asisten Id Asisten
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_asisten)
    {
        $model = $this->findModel($id_asisten);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_asisten' => $model->id_asisten]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Asisten model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_asisten Id Asisten
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_asisten)
    {
        $this->findModel($id_asisten)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Asisten model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_asisten Id Asisten
     * @return Asisten the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_asisten)
    {
        if (($model = Asisten::findOne(['id_asisten' => $id_asisten])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
