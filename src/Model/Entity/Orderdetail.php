<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Orderdetail Entity
 *
 * @property int $id
 * @property int $proc_id
 * @property int $qty
 * @property float $tt_price
 *
 * @property \App\Model\Entity\Product $product
 */
class Orderdetail extends Entity
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
        'qty' => true,
        'tt_price' => true,
        'product' => true
    ];
}
