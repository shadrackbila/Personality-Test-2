<?php
declare(strict_types=1);

namespace PersonalityTest\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \PersonalityTest\Model\Table\ResponsesTable&\Cake\ORM\Association\HasMany $Responses
 * @property \PersonalityTest\Model\Table\ResultsTable&\Cake\ORM\Association\HasMany $Results
 *
 * @method \PersonalityTest\Model\Entity\User newEmptyEntity()
 * @method \PersonalityTest\Model\Entity\User newEntity(array $data, array $options = [])
 * @method array<\PersonalityTest\Model\Entity\User> newEntities(array $data, array $options = [])
 * @method \PersonalityTest\Model\Entity\User get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \PersonalityTest\Model\Entity\User findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \PersonalityTest\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\PersonalityTest\Model\Entity\User> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \PersonalityTest\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \PersonalityTest\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\User>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\User> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\User>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\User>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\User> deleteManyOrFail(iterable $entities, array $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('Username');
        $this->setPrimaryKey('id');

        $this->hasMany('Responses', [
            'foreignKey' => 'user_id',
            'className' => 'PersonalityTest.Responses',
        ]);
        $this->hasMany('Results', [
            'foreignKey' => 'user_id',
            'className' => 'PersonalityTest.Results',
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
            ->scalar('Username')
            ->maxLength('Username', 100)
            ->requirePresence('Username', 'create')
            ->notEmptyString('Username');

        return $validator;
    }
}
