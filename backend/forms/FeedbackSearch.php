<?php

namespace backend\forms;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\entities\Feedback;

class FeedbackSearch extends Model
{
    public $name;
    public $email;
    public $status;
    public $created_at;

    public function rules()
    {
        return [
            [['name', 'email', 'status', 'created_at'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = Feedback::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['created_at' => SORT_DESC]]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['>=', 'created_at', $this->created_at ? strtotime($this->created_at . ' 00:00:00') : null])
            ->andFilterWhere(['<=', 'created_at', $this->created_at ? strtotime($this->created_at . ' 23:59:59') : null]);
        return $dataProvider;
    }
}