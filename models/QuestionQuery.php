<?php
namespace artkost\qa\models;

use yii\db\ActiveQuery;

class QuestionQuery extends ActiveQuery implements QuestionQueryInterface
{

    /**
     * @param $limit
     * @return static
     */
    public function views($limit)
    {
        return $this->andWhere('views > :views', [':views' => $limit]);
    }

    /**
     * @return static
     */
    public function published()
    {
        return $this->andWhere(['status' => QuestionInterface::STATUS_PUBLISHED]);
    }

    /**
     * @return static
     */
    public function draft()
    {
        return $this->andWhere(['status' => QuestionInterface::STATUS_DRAFT]);
    }
}
