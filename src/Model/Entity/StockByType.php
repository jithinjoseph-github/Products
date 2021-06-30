<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StockByType Entity
 *
 * @property int $id
 * @property int $product_type_id
 * @property int $qty
 *
 * @property \App\Model\Entity\ProductType $product_type
 */
class StockByType extends Entity
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
        'product_type_id' => true,
        'qty' => true,
        'product_type' => true,
    ];
}
