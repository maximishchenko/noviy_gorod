<?php
declare(strict_types=1);

namespace frontend\modules\content\models;

use backend\modules\content\models\DocumentCategory as backendDocumentCategory;
use common\models\Status;
use frontend\modules\content\models\query\DocumentCategoryQuery;
use yii\db\ActiveQuery;

/**
 *
 * @property-read \yii\db\ActiveQuery $documents
 */
class DocumentCategory extends backendDocumentCategory
{

    public static function find(): DocumentCategoryQuery
    {
        return new DocumentCategoryQuery(get_called_class());
    }

    public function getDocuments(): ActiveQuery
    {
        return $this->hasMany(Document::class, ['category_id' => 'id'])->onCondition([Document::tableName() . '.status' => Status::STATUS_ACTIVE]);
    }
}
