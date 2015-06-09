<?php
namespace App\Model\Table;

use App\Model\Entity\GroupDocumentTag;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GroupDocumentTags Model
 *
 * @property \Cake\ORM\Association\BelongsTo $GroupDocuments
 * @property \Cake\ORM\Association\BelongsTo $Tags
 */
class GroupDocumentTagsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('group_document_tags');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('GroupDocuments', [
            'foreignKey' => 'group_document_id'
        ]);
        $this->belongsTo('Tags', [
            'foreignKey' => 'tag_id'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

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
        $rules->add($rules->existsIn(['group_document_id'], 'GroupDocuments'));
        $rules->add($rules->existsIn(['tag_id'], 'Tags'));
        return $rules;
    }
}
