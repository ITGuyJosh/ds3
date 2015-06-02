<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User Document'), ['action' => 'edit', $userDocument->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Document'), ['action' => 'delete', $userDocument->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userDocument->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Documents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Document'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="userDocuments view large-10 medium-9 columns">
    <h2><?= h($userDocument->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $userDocument->has('user') ? $this->Html->link($userDocument->user->id, ['controller' => 'Users', 'action' => 'view', $userDocument->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Document') ?></h6>
            <p><?= $userDocument->has('document') ? $this->Html->link($userDocument->document->name, ['controller' => 'Documents', 'action' => 'view', $userDocument->document->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($userDocument->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($userDocument->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($userDocument->modified) ?></p>
        </div>
    </div>
</div>
