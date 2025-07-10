<?php
declare(strict_types=1);

namespace PersonalityTest\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Questions Model
 *
 * @method \PersonalityTest\Model\Entity\Question newEmptyEntity()
 * @method \PersonalityTest\Model\Entity\Question newEntity(array $data, array $options = [])
 * @method array<\PersonalityTest\Model\Entity\Question> newEntities(array $data, array $options = [])
 * @method \PersonalityTest\Model\Entity\Question get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \PersonalityTest\Model\Entity\Question findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \PersonalityTest\Model\Entity\Question patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\PersonalityTest\Model\Entity\Question> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \PersonalityTest\Model\Entity\Question|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \PersonalityTest\Model\Entity\Question saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\Question>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\Question>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\Question>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\Question> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\Question>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\Question>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\Question>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\Question> deleteManyOrFail(iterable $entities, array $options = [])
 */
class QuestionsTable extends Table
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

        $this->setTable('questions');
        $this->setDisplayField('Question_Text');
        $this->setPrimaryKey('id');

        $this->hasMany('QuestionTranslations', [
            'foreignKey' => 'question_id',
            'className' => 'PersonalityTest.QuestionTranslations',
        ]);
        $this->hasMany('Responses', [
            'foreignKey' => 'question_id',
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
            ->scalar('Question_Text')
            ->maxLength('Question_Text', 500)
            ->requirePresence('Question_Text', 'create')
            ->notEmptyString('Question_Text');

        return $validator;
    }
}
