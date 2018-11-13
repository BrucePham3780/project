<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Shipping Entity
 *
 * @property int $id
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $ship_method
 * @property int $user_id
 * @property int $order_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Order $order
 */
class Shipping extends Entity
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
        'status' => true,
        'created' => true,
        'modified' => true,
        'ship_method' => true,
        'user_id' => true,
        'order_id' => true,
        'user' => true,
        'order' => true
    ];
}
