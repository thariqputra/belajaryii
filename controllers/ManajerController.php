<?php

namespace app\controllers;

use app\models\Manajer;
use app\models\ManajerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ManajerController implements the CRUD actions for Manajer model.
 */
class ManajerController extends Controller
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
     * Lists all Manajer models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ManajerSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Manajer model.
     * @param int $id_manajer Id Manajer
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_manajer)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_manajer),
        ]);
    }

    /**
     * Creates a new Manajer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Manajer();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_manajer' => $model->id_manajer]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Manajer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_manajer Id Manajer
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_manajer)
    {
        $model = $this->findModel($id_manajer);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_manajer' => $model->id_manajer]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Manajer model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_manajer Id Manajer
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_manajer)
    {
        $this->findModel($id_manajer)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Manajer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_manajer Id Manajer
     * @return Manajer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_manajer)
    {
        if (($model = Manajer::findOne(['id_manajer' => $id_manajer])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
