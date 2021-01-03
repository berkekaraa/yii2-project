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
            [['id', 'depo_sorumlusu_id'], 'integer'],
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

        // add conditions that should always apply here

     /*   $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);*/

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $query;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'depo_sorumlusu_id' => $this->depo_sorumlusu_id,
        ]);

        $query->andFilterWhere(['like', 'isim', $this->isim]);

        return $query;
    }
}