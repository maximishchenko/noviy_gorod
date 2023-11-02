<?php

namespace frontend\modules\content\models\search;

use yii\data\ActiveDataProvider;
use frontend\modules\content\models\Gallery;

class GallerySearch extends Gallery
{

    public function search($params)
    {
        $query = Gallery::getDb()->cache(function() {
            return Gallery::find()->active()->ordered();
        }, Gallery::getCacheDuration(), Gallery::getCacheDependency());

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['sort'=>SORT_DESC]],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        return $dataProvider;
    }
}
