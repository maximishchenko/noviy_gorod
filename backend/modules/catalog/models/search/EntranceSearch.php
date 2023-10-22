<?php

namespace backend\modules\catalog\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\catalog\models\Entrance;

class EntranceSearch extends Entrance
{
    public function rules()
    {
        return [
            [['id', 'number', 'house_id', 'count_foors', 'sort', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['number', 'comment'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Entrance::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['id'=>SORT_DESC]],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'house_id' => $this->house_id,
            'number' => $this->number,
            'count_foors' => $this->count_foors,
            'sort' => $this->sort,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
