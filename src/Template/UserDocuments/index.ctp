<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New User Document'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="userDocuments index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('document_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($userDocuments as $userDocument): ?>
        <tr>
            <td><?= $this->Number->format($userDocument->id) ?></td>
            <td>
                <?= $userDocument->has('user') ? $this->Html->link($userDocument->user->id, ['controller' => 'Users', 'action' => 'view', $userDocument->user->id]) : '' ?>
            </td>
            <td>
                <?= $userDocument->has('document') ? $this->Html->link($userDocument->document->name, ['controller' => 'Documents', 'action' => 'view', $userDocument->document->id]) : '' ?>
            </td>
            <td><?= h($userDocument->created) ?></td>
            <td><?= h($userDocument->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $userDocument->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userDocument->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userDocument->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userDocument->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
