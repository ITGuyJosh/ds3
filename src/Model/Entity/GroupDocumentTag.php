<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GroupDocumentTag Entity.
 */
class GroupDocumentTag extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'group_document_id' => true,
        'tag_id' => true,
        'group_document' => true,
        'tag' => true,
    ];
}
