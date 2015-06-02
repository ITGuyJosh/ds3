<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DocumentTag Entity.
 */
class DocumentTag extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'document_id' => true,
        'tag_id' => true,
        'document' => true,
        'tag' => true,
    ];
}
