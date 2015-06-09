<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Documents'), ['controller' => 'UserDocuments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Document'), ['controller' => 'UserDocuments', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($user->username) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6 class="subheader"><?= __('Company') ?></h6>
            <p><?= h($user->company) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
            <h6 class="subheader"><?= __('Role') ?></h6>
            <p><?= h($user->role) ?></p>
            <h6 class="subheader"><?= __('Group') ?></h6>
            <p><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($user->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($user->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related UserDocuments') ?></h4>
    <?php if (!empty($user->user_documents)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Dir') ?></th>
            <th><?= __('Ver') ?></th>
            <th><?= __('Document Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->user_documents as $userDocuments): ?>
        <tr>
            <td><?= h($userDocuments->id) ?></td>
            <td><?= h($userDocuments->user_id) ?></td>
            <td><?= h($userDocuments->name) ?></td>
            <td><?= h($userDocuments->dir) ?></td>
            <td><?= h($userDocuments->ver) ?></td>
            <td><?= h($userDocuments->document_id) ?></td>
            <td><?= h($userDocuments->created) ?></td>
            <td><?= h($userDocuments->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'UserDocuments', 'action' => 'view', $userDocuments->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'UserDocuments', 'action' => 'edit', $userDocuments->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserDocuments', 'action' => 'delete', $userDocuments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userDocuments->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
