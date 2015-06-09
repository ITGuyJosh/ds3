<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Group Document Tag'), ['action' => 'edit', $groupDocumentTag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Group Document Tag'), ['action' => 'delete', $groupDocumentTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupDocumentTag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Group Document Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group Document Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Group Documents'), ['controller' => 'GroupDocuments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group Document'), ['controller' => 'GroupDocuments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="groupDocumentTags view large-10 medium-9 columns">
    <h2><?= h($groupDocumentTag->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Group Document') ?></h6>
            <p><?= $groupDocumentTag->has('group_document') ? $this->Html->link($groupDocumentTag->group_document->name, ['controller' => 'GroupDocuments', 'action' => 'view', $groupDocumentTag->group_document->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Tag') ?></h6>
            <p><?= $groupDocumentTag->has('tag') ? $this->Html->link($groupDocumentTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $groupDocumentTag->tag->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($groupDocumentTag->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($groupDocumentTag->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($groupDocumentTag->modified) ?></p>
        </div>
    </div>
</div>
