<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;
use Cake\ORM\Locator\TableLocator;

/**
 * StockByType behavior
 */
class StockByTypeBehavior extends Behavior
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    /**
     * Update the Stock By Type
     */
    public function updateStockByType($product_type)
    {
        // New Product Table instance
        $Products = (new TableLocator)->get('Products');
        // Find the sum Product quantity for the given Product type
        $productStock = $Products->find();
        $typestock = $productStock
            ->select(['sum' => $productStock->func()->sum('Products.qty')])
            ->where(['Products.product_type_id' => $product_type])
            ->toArray();
        
        // New StockByType Table instance
        $StockByType = (new TableLocator)->get('StockByType');
        // Find whether any record exist with given Product type
        $StockByTypeData = $StockByType->find()
            ->where(['StockByType.product_type_id' => $product_type]);

        if ($StockByTypeData->count()!=0) {
            // Update the StockByType record with new quantity
            $StockByTypeData->update()
            ->set(['qty' => $typestock[0]['sum']])
            ->where(['product_type_id' => $product_type])
            ->execute();
        } else {
            // Insert new StockByType record
            $StockByTypeData->insert(['product_type_id', 'qty'])
            ->values([
                'product_type_id' => $product_type,
                'qty' => $typestock[0]['sum']
            ])
            ->execute();
        }
    }
}
