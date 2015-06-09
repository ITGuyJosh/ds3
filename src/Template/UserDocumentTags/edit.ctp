<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userDocumentTag->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userDocumentTag->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Document Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User Documents'), ['controller' => 'UserDocuments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Document'), ['controller' => 'UserDocuments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="userDocumentTags form large-10 medium-9 columns">
    <?= $this->Form->create($userDocumentTag) ?>
    <fieldset>
        <legend><?= __('Edit User Document Tag') ?></legend>
        <?php
            echo $this->Form->input('user_document_id', ['options' => $userDocuments, 'empty' => true]);
            echo $this->Form->input('tag_id', ['options' => $tags, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
