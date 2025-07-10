<?php
declare(strict_types=1);

namespace PersonalityTest\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Answers Model
 *
 * @property \PersonalityTest\Model\Table\ResponsesTable&\Cake\ORM\Association\HasMany $Responses
 *
 * @method \PersonalityTest\Model\Entity\Answer newEmptyEntity()
 * @method \PersonalityTest\Model\Entity\Answer newEntity(array $data, array $options = [])
 * @method array<\PersonalityTest\Model\Entity\Answer> newEntities(array $data, array $options = [])
 * @method \PersonalityTest\Model\Entity\Answer get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \PersonalityTest\Model\Entity\Answer findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \PersonalityTest\Model\Entity\Answer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\PersonalityTest\Model\Entity\Answer> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \PersonalityTest\Model\Entity\Answer|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \PersonalityTest\Model\Entity\Answer saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\Answer>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\Answer>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\Answer>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\Answer> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\Answer>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\Answer>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\Answer>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\Answer> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AnswersTable extends Table
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

        $this->setTable('answers');
        $this->setDisplayField('text');
        $this->setPrimaryKey('id');

        $this->hasMany('Responses', [
            'foreignKey' => 'answer_id',
            'className' => 'PersonalityTest.Responses',
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
            ->scalar('text')
            ->maxLength('text', 500)
            ->requirePresence('text', 'create')
            ->notEmptyString('text');

        $validator
            ->integer('points')
            ->requirePresence('points', 'create')
            ->notEmptyString('points');

        $validator
            ->scalar('traits')
            ->maxLength('traits', 255)
            ->requirePresence('traits', 'create')
            ->notEmptyString('traits');

        return $validator;
    }
}
