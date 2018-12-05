<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cart Entity
 *
 * @property int $id
 * @property int $proc_id
 * @property int $user_id
 * @property int $qty
 * @property float $tt_price
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\User $user
 */
class Cart extends Entity
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
        'proc_id' => true,
        'user_id' => true,
        'num-product' => true,
        'tt_price' => true,
        'created' => true,
        'modified' => true,
        'product' => true,
        'user' => true
    ];
}
