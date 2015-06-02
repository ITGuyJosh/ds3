<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Group Document'), ['action' => 'edit', $groupDocument->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Group Document'), ['action' => 'delete', $groupDocument->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupDocument->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Group Documents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group Document'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="groupDocuments view large-10 medium-9 columns">
    <h2><?= h($groupDocument->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Group') ?></h6>
            <p><?= $groupDocument->has('group') ? $this->Html->link($groupDocument->group->name, ['controller' => 'Groups', 'action' => 'view', $groupDocument->group->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Document') ?></h6>
            <p><?= $groupDocument->has('document') ? $this->Html->link($groupDocument->document->name, ['controller' => 'Documents', 'action' => 'view', $groupDocument->document->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($groupDocument->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($groupDocument->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($groupDocument->modified) ?></p>
        </div>
    </div>
</div>
