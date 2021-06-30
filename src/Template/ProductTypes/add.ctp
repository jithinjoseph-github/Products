<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductType $productType
 */
?>
<div class="productTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($productType) ?>
    <fieldset>
        <legend><?= __('Add Product Type') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
