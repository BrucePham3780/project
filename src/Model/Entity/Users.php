<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;


/**
 * User Entity
 *
 * @property int $id
 * @property string $images
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $address
 * @property string $phoneNum
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $role_id
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Cart[] $cart
 * @property \App\Model\Entity\Order[] $order
 * @property \App\Model\Entity\Shipping[] $shipping
 */
class Users extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'images' => true,
        'name' => true,
        'email' => true,
        'password' => true,
        'address' => true,
        'phoneNum' => true,
        'created' => true,
        'modified' => true,
        'role_id' => true,
        'role' => true,
        'cart' => true,
        'order' => true,
        'shipping' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
    // protected function _setPassword($password){
    //     // return (new DefaultPasswordHasher)->hash($password);
    // }
}
