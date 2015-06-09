<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GroupDocument Entity.
 */
class GroupDocument extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'group_id' => true,
        'name' => true,
        'dir' => true,
        'ver' => true,
        'group' => true,
        'group_document_tags' => true,
    ];
}
