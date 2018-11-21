<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Catedetail Model
 *
 * @property \App\Model\Table\CategoryTable|\Cake\ORM\Association\BelongsTo $Category
 *
 * @method \App\Model\Entity\Catedetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\Catedetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Catedetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Catedetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Catedetail|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Catedetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Catedetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Catedetail findOrCreate($search, callable $callback = null, $options = [])
 */
class CatedetailTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('catedetail');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Category', [
            'foreignKey' => 'cate_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmpty('name');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['cate_id'], 'Category'));

        return $rules;
    }
}
