<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produit $produit
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $produit->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $produit->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Produits'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="produits form content">
            <?= $this->Form->create($produit) ?>
            <fieldset>
                <legend><?= __('Edit Produit') ?></legend>
                <?php
                    echo $this->Form->control('user_id');
                    echo $this->Form->control('nom');
                    echo $this->Form->control('image');
                    echo $this->Form->control('prix');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
