<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserDocument Entity.
 */
class UserDocument extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'name' => true,
        'dir' => true,
        'ver' => true,
        'document_id' => true,
        'user' => true,
        'document' => true,
        'user_document_tags' => true,
    ];
}
