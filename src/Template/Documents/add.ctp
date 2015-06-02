<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Documents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Document Tags'), ['controller' => 'DocumentTags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Document Tag'), ['controller' => 'DocumentTags', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="documents form large-10 medium-9 columns">
    <?= $this->Form->create($document) ?>
    <fieldset>
        <legend><?= __('Add Document') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('dir');
            echo $this->Form->input('ver');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
