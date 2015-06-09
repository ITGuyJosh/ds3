<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User Document Tag'), ['action' => 'edit', $userDocumentTag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Document Tag'), ['action' => 'delete', $userDocumentTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userDocumentTag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Document Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Document Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Documents'), ['controller' => 'UserDocuments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Document'), ['controller' => 'UserDocuments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="userDocumentTags view large-10 medium-9 columns">
    <h2><?= h($userDocumentTag->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User Document') ?></h6>
            <p><?= $userDocumentTag->has('user_document') ? $this->Html->link($userDocumentTag->user_document->name, ['controller' => 'UserDocuments', 'action' => 'view', $userDocumentTag->user_document->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Tag') ?></h6>
            <p><?= $userDocumentTag->has('tag') ? $this->Html->link($userDocumentTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $userDocumentTag->tag->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($userDocumentTag->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($userDocumentTag->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($userDocumentTag->modified) ?></p>
        </div>
    </div>
</div>
