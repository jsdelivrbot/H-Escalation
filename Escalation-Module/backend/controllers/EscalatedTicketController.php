<?php

namespace backend\controllers;

use Yii;
use backend\models\EscalatedTicket;
use backend\models\EscalatedTicketSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EscalatedTicketController implements the CRUD actions for EscalatedTicket model.
 */
class EscalatedTicketController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all EscalatedTicket models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EscalatedTicketSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EscalatedTicket model.
     * @param integer $id
     * @param integer $user_id
     * @param integer $ticket_id
     * @return mixed
     */
    public function actionView($id, $user_id, $ticket_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $user_id, $ticket_id),
        ]);
    }

    /**
     * Creates a new EscalatedTicket model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EscalatedTicket();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'user_id' => $model->user_id, 'ticket_id' => $model->ticket_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing EscalatedTicket model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $user_id
     * @param integer $ticket_id
     * @return mixed
     */
    public function actionUpdate($id, $user_id, $ticket_id)
    {
        $model = $this->findModel($id, $user_id, $ticket_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'user_id' => $model->user_id, 'ticket_id' => $model->ticket_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing EscalatedTicket model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $user_id
     * @param integer $ticket_id
     * @return mixed
     */
    public function actionDelete($id, $user_id, $ticket_id)
    {
        $this->findModel($id, $user_id, $ticket_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EscalatedTicket model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $user_id
     * @param integer $ticket_id
     * @return EscalatedTicket the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $user_id, $ticket_id)
    {
        if (($model = EscalatedTicket::findOne(['id' => $id, 'user_id' => $user_id, 'ticket_id' => $ticket_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
