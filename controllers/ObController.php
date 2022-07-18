<?php

namespace app\controllers;

use app\models\Ob;
use app\models\ObSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ObController implements the CRUD actions for Ob model.
 */
class ObController extends Controller
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
     * Lists all Ob models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ObSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ob model.
     * @param int $id_ob Id Ob
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_ob)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_ob),
        ]);
    }

    /**
     * Creates a new Ob model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Ob();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_ob' => $model->id_ob]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Ob model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_ob Id Ob
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_ob)
    {
        $model = $this->findModel($id_ob);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_ob' => $model->id_ob]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Ob model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_ob Id Ob
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_ob)
    {
        $this->findModel($id_ob)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ob model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_ob Id Ob
     * @return Ob the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_ob)
    {
        if (($model = Ob::findOne(['id_ob' => $id_ob])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
