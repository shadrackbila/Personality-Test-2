<?php
declare(strict_types=1);

namespace PersonalityTest\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Responses Model
 *
 * @property \PersonalityTest\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \PersonalityTest\Model\Table\QuestionsTable&\Cake\ORM\Association\BelongsTo $Questions
 * @property \PersonalityTest\Model\Table\AnswersTable&\Cake\ORM\Association\BelongsTo $Answers
 *
 * @method \PersonalityTest\Model\Entity\Response newEmptyEntity()
 * @method \PersonalityTest\Model\Entity\Response newEntity(array $data, array $options = [])
 * @method array<\PersonalityTest\Model\Entity\Response> newEntities(array $data, array $options = [])
 * @method \PersonalityTest\Model\Entity\Response get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \PersonalityTest\Model\Entity\Response findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \PersonalityTest\Model\Entity\Response patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\PersonalityTest\Model\Entity\Response> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \PersonalityTest\Model\Entity\Response|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \PersonalityTest\Model\Entity\Response saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\Response>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\Response>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\Response>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\Response> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\Response>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\Response>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\Response>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\Response> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ResponsesTable extends Table
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

        $this->setTable('responses');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
            'className' => 'PersonalityTest.Users',
        ]);
        $this->belongsTo('Questions', [
            'foreignKey' => 'question_id',
            'joinType' => 'INNER',
            'className' => 'PersonalityTest.Questions',
        ]);
        $this->belongsTo('Answers', [
            'foreignKey' => 'answer_id',
            'joinType' => 'INNER',
            'className' => 'PersonalityTest.Answers',
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
            ->integer('question_id')
            ->notEmptyString('question_id');

        $validator
            ->integer('answer_id')
            ->notEmptyString('answer_id');

        $validator
            ->dateTime('answered_on')
            ->notEmptyDateTime('answered_on');

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
        $rules->add($rules->existsIn(['question_id'], 'Questions'), ['errorField' => 'question_id']);
        $rules->add($rules->existsIn(['answer_id'], 'Answers'), ['errorField' => 'answer_id']);

        return $rules;
    }


}
