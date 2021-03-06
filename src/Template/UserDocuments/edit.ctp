<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userDocument->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userDocument->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Documents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Document Tags'), ['controller' => 'UserDocumentTags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Document Tag'), ['controller' => 'UserDocumentTags', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="userDocuments form large-10 medium-9 columns">
    <?= $this->Form->create($userDocument) ?>
    <fieldset>
        <legend><?= __('Edit User Document') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->input('name');
            echo $this->Form->input('dir');
            echo $this->Form->input('ver');
            echo $this->Form->input('document_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
