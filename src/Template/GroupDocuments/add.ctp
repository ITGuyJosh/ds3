<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Group Documents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Group Document Tags'), ['controller' => 'GroupDocumentTags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group Document Tag'), ['controller' => 'GroupDocumentTags', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="groupDocuments form large-10 medium-9 columns">
    <?= $this->Form->create($groupDocument) ?>
    <fieldset>
        <legend><?= __('Add Group Document') ?></legend>
        <?php
            echo $this->Form->input('group_id', ['options' => $groups, 'empty' => true]);
            echo $this->Form->input('name');
            echo $this->Form->input('dir');
            echo $this->Form->input('ver');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
