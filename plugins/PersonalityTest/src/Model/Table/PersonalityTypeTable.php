<?php
declare(strict_types=1);

namespace PersonalityTest\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PersonalityType Model
 *
 * @method \PersonalityTest\Model\Entity\PersonalityType newEmptyEntity()
 * @method \PersonalityTest\Model\Entity\PersonalityType newEntity(array $data, array $options = [])
 * @method array<\PersonalityTest\Model\Entity\PersonalityType> newEntities(array $data, array $options = [])
 * @method \PersonalityTest\Model\Entity\PersonalityType get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \PersonalityTest\Model\Entity\PersonalityType findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \PersonalityTest\Model\Entity\PersonalityType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\PersonalityTest\Model\Entity\PersonalityType> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \PersonalityTest\Model\Entity\PersonalityType|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \PersonalityTest\Model\Entity\PersonalityType saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\PersonalityType>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\PersonalityType>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\PersonalityType>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\PersonalityType> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\PersonalityType>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\PersonalityType>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\PersonalityTest\Model\Entity\PersonalityType>|\Cake\Datasource\ResultSetInterface<\PersonalityTest\Model\Entity\PersonalityType> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PersonalityTypeTable extends Table
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

        $this->setTable('personality_type');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }
}
