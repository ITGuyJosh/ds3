<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
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
        'role' => true,
        'group_id' => true,
        'group' => true,
        'user_documents' => true,
    ];
    
    protected function _setPassword($value){
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }
    
}
