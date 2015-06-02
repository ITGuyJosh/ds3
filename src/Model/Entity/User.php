<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'email' => true,
        'company' => true,
        'password' => true,
        'role_id' => true,
        'group_id' => true,
        'role' => true,
        'group' => true,
        'user_documents' => true,
    ];
}
