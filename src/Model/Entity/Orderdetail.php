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
 * @property int $order_id
 *
 * @property \App\Model\Entity\Proc $proc
 * @property \App\Model\Entity\Order $order
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
        'num_product' => true,
        't_price' => true,
        'order_id' => true,
        'proc' => true,
        'order' => true
    ];
}
