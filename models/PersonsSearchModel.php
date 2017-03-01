<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PersonsModel;

/**
 * PersonsSearchModel represents the model behind the search form about `app\models\PersonsModel`.
 */
class PersonsSearchModel extends PersonsModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'boss_id'], 'integer'],
            [['name', 'sername', 'patronymic'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = PersonsModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'boss_id' => $this->boss_id,
        ]);

        //$query->andFilterWhere(['like', 'name', $this->name])
        //    ->andFilterWhere(['like', 'sername', $this->sername])
        //   ->andFilterWhere(['like', 'patronymic', $this->patronymic]);
        $query->orFilterWhere(['like', 'name', $this->name])
            ->orFilterWhere(['like', 'sername', $this->name])
            ->orFilterWhere(['like', 'patronymic', $this->name]);
            
        return $dataProvider;
    }
}
