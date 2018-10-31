<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HashedData Model
 *
 * @method \App\Model\Entity\HashedData get($primaryKey, $options = [])
 * @method \App\Model\Entity\HashedData newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HashedData[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HashedData|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HashedData|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HashedData patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HashedData[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HashedData findOrCreate($search, callable $callback = null, $options = [])
 */
class HashedDataTable extends Table
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

        $this->setTable('hashed_data');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->hasOne('Users', [
          'foreignKey' => 'id'
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
            ->nonNegativeInteger('id')
            ->allowEmpty('id', 'create');

        $validator
                ->email('email')
                ->requirePresence('email', 'create')
                ->notEmpty('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->allowEmpty('password');

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
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }

    public function findAuth(\Cake\ORM\Query $query, array $options)
{
    return
        $this
            ->find()
            ->select([
                'Users.id',
                'Users.role',
                'HashedData.password'
            ])
            ->leftJoinWith('Users')
            ->where([
                'Users.email' => $options['username']
            ]);
}

}
