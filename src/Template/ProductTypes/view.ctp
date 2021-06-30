<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductType $productType
 */
?>
<div class="productTypes view large-9 medium-8 columns content">
    <h3><?= h($productType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($productType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($productType->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productType->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Products') ?></h4>
        <?php if (!empty($productType->products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Type Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Qty') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($productType->products as $products): ?>
            <tr>
                <td><?= h($products->id) ?></td>
                <td><?= h($products->product_type_id) ?></td>
                <td><?= h($products->name) ?></td>
                <td><?= h($products->description) ?></td>
                <td><?= h($products->qty) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Stock By Type') ?></h4>
        <?php if (!empty($productType->stock_by_type)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Type Id') ?></th>
                <th scope="col"><?= __('Qty') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($productType->stock_by_type as $stockByType): ?>
            <tr>
                <td><?= h($stockByType->id) ?></td>
                <td><?= h($stockByType->product_type_id) ?></td>
                <td><?= h($stockByType->qty) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'StockByType', 'action' => 'view', $stockByType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'StockByType', 'action' => 'edit', $stockByType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'StockByType', 'action' => 'delete', $stockByType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockByType->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
