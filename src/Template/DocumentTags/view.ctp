<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Document Tag'), ['action' => 'edit', $documentTag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Document Tag'), ['action' => 'delete', $documentTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documentTag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Document Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="documentTags view large-10 medium-9 columns">
    <h2><?= h($documentTag->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Document') ?></h6>
            <p><?= $documentTag->has('document') ? $this->Html->link($documentTag->document->name, ['controller' => 'Documents', 'action' => 'view', $documentTag->document->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Tag') ?></h6>
            <p><?= $documentTag->has('tag') ? $this->Html->link($documentTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $documentTag->tag->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($documentTag->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($documentTag->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($documentTag->modified) ?></p>
        </div>
    </div>
</div>
