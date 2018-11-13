<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property string $images
 * @property float $price
 * @property string $procDimen
 * @property string $color
 * @property string $descr
 * @property string $status
 * @property int $voteStar
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $cate_id
 *
 * @property \App\Model\Entity\Category $category
 */
class Product extends Entity
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
        'name' => true,
        'images' => true,
        'price' => true,
        'procDimen' => true,
        'color' => true,
        'descr' => true,
        'status' => true,
        'voteStar' => true,
        'created' => true,
        'modified' => true,
        'cate_id' => true,
        'category' => true
    ];
}
