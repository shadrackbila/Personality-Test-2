<?php
declare(strict_types=1);

namespace PersonalityTest\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Results Model
 *
 * @property \PersonalityTest\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \PersonalityTest\Model\Entity\Result newEmptyEntity()
 * @method \PersonalityTest\Model\Entity\Result newEntity(array $data, array $options = [])
 * @method array<\PersonalityTest\Model\Entity\Result> newEntities(array $data, array $options = [])
 * @method \PersonalityTest\Model\Entity\Result get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \PersonalityTest\Model\Entity\Result findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \PersonalityTest\Model\Entity\Result patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\PersonalityTest\Model\Entity\Result> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \PersonalityTest\Model\Entity\Result|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \PersonalityTest\Model\Entity\Result saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\Result>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\Result>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\Result>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\Result> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\Result>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\Result>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\Result>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\Result> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ResultsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('results');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
            'className' => 'PersonalityTest.Users',
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
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->scalar('score_summary')
            ->requirePresence('score_summary', 'create')
            ->notEmptyString('score_summary');

        $validator
            ->dateTime('results_on')
            ->notEmptyDateTime('results_on');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
