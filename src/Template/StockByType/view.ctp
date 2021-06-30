<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StockByType $stockByType
 */
?>
<div class="stockByType view large-9 medium-8 columns content">
    <h3><?= h($stockByType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product Type') ?></th>
            <td><?= $stockByType->has('product_type') ? $this->Html->link($stockByType->product_type->name, ['controller' => 'ProductTypes', 'action' => 'view', $stockByType->product_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($stockByType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qty') ?></th>
            <td><?= $this->Number->format($stockByType->qty) ?></td>
        </tr>
    </table>
</div>
