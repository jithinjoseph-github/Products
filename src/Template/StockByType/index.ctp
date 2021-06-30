<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StockByType[]|\Cake\Collection\CollectionInterface $stockByType
 */
?>
<div class="stockByType index large-9 medium-8 columns content">
    <h3><?= __('Stock By Type') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qty') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stockByType as $stockByType): ?>
            <tr>
                <td><?= $this->Number->format($stockByType->id) ?></td>
                <td><?= $stockByType->has('product_type') ? $this->Html->link($stockByType->product_type->name, ['controller' => 'ProductTypes', 'action' => 'view', $stockByType->product_type->id]) : '' ?></td>
                <td><?= $this->Number->format($stockByType->qty) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $stockByType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stockByType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stockByType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockByType->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
