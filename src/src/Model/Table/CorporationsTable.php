<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Corporations Model
 *
 * @property \App\Model\Table\ClientsTable&\Cake\ORM\Association\HasMany $Clients
 *
 * @method \App\Model\Entity\Corporation newEmptyEntity()
 * @method \App\Model\Entity\Corporation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Corporation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Corporation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Corporation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Corporation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Corporation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Corporation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Corporation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Corporation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Corporation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Corporation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Corporation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CorporationsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('corporations');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Clients', [
            'foreignKey' => 'corporation_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('name_kana')
            ->maxLength('name_kana', 50)
            ->allowEmptyString('name_kana');

        $validator
            ->scalar('postal_code')
            ->maxLength('postal_code', 10)
            ->allowEmptyString('postal_code');

        $validator
            ->scalar('address1')
            ->maxLength('address1', 100)
            ->allowEmptyString('address1');

        $validator
            ->scalar('address2')
            ->maxLength('address2', 100)
            ->allowEmptyString('address2');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 20)
            ->allowEmptyString('phone');

        $validator
            ->scalar('fax')
            ->maxLength('fax', 20)
            ->allowEmptyString('fax');

        $validator
            ->scalar('email1')
            ->maxLength('email1', 100)
            ->allowEmptyString('email1');

        $validator
            ->scalar('email2')
            ->maxLength('email2', 100)
            ->allowEmptyString('email2');

        $validator
            ->scalar('url')
            ->maxLength('url', 255)
            ->allowEmptyString('url');

        return $validator;
    }
}
