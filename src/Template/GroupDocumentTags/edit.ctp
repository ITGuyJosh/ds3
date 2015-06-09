<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $groupDocumentTag->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $groupDocumentTag->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Group Document Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Group Documents'), ['controller' => 'GroupDocuments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group Document'), ['controller' => 'GroupDocuments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="groupDocumentTags form large-10 medium-9 columns">
    <?= $this->Form->create($groupDocumentTag) ?>
    <fieldset>
        <legend><?= __('Edit Group Document Tag') ?></legend>
        <?php
            echo $this->Form->input('group_document_id', ['options' => $groupDocuments, 'empty' => true]);
            echo $this->Form->input('tag_id', ['options' => $tags, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
