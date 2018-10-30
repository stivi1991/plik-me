<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PersonalInfo Model
 *
 * @method \App\Model\Entity\PersonalInfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\PersonalInfo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PersonalInfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PersonalInfo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PersonalInfo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PersonalInfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PersonalInfo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PersonalInfo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PersonalInfoTable extends Table
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

        $this->setTable('personal_info');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->belongsTo('Users')
            ->setForeignKey('id')
            ->setJoinType('INNER');
        $this->addBehavior('Timestamp');
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
            ->scalar('name_first')
            ->maxLength('name_first', 50)
            ->allowEmpty('name_first');

        $validator
            ->scalar('name_last')
            ->maxLength('name_last', 50)
            ->allowEmpty('name_last');

        $validator
            ->date('date_of_birth')
            ->allowEmpty('date_of_birth');

        $validator
            ->integer('phone_number')
            ->allowEmpty('phone_number');

        $validator
            ->boolean('verified')
            ->allowEmpty('verified');

        $validator
            ->scalar('role')
            ->maxLength('role', 20)
            ->allowEmpty('role');

        return $validator;
    }
}
