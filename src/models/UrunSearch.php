<?php

namespace berkekaraa\project\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use berkekaraa\project\models\Urun;

/**
 * UrunSearch represents the model behind the search form of `berkekaraa\project\models\Urun`.
 */
class UrunSearch extends Urun
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'stok_adedi'], 'integer'],
            [['isim', 'bulunduğu_depo_id'], 'safe'],
            [['fiyat'], 'number'],


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
        $query = Urun::find();


        $this->load($params);

        if (!$this->validate()) {
            return $query;
        }

        $query->andFilterWhere([
            'bulunduğu_depo_id' => $this->id,
            'fiyat' => $this->fiyat,
            'stok_adedi' => $this->stok_adedi,
        ]);

        $query->andFilterWhere(['like', 'isim', $this->isim])
            ->andFilterWhere(['like', 'bulunduğu_depo_id', $this->bulunduğu_depo_id]);
        return $query;
    }
}