<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserDocumentTag Entity.
 */
class UserDocumentTag extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_document_id' => true,
        'tag_id' => true,
        'user_document' => true,
        'tag' => true,
    ];
}
