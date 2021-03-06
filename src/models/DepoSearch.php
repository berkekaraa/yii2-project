<?php

namespace berkekaraa\project\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use berkekaraa\project\models\Depo;

/**
 * DepoSearch represents the model behind the search form of `berkekaraa\project\models\Depo`.
 */
class DepoSearch extends Depo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['isim'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Depo::find();

        $this->load($params);

        if (!$this->validate()) {
            return $query;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'isim', $this->isim]);

        return $query;
    }
}
