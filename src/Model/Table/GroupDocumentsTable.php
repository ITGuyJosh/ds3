<?php
namespace App\Model\Table;

use App\Model\Entity\GroupDocument;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GroupDocuments Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Groups
 * @property \Cake\ORM\Association\HasMany $GroupDocumentTags
 */
class GroupDocumentsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('group_documents');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Groups', [
            'foreignKey' => 'group_id'
        ]);
        $this->hasMany('GroupDocumentTags', [
            'foreignKey' => 'group_document_id'
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
            
        $validator
            ->allowEmpty('name');
            
        $validator
            ->allowEmpty('dir');
            
        $validator
            ->add('ver', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ver');

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
        $rules->add($rules->existsIn(['group_id'], 'Groups'));
        return $rules;
    }
}
