<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Group Document'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Group Document Tags'), ['controller' => 'GroupDocumentTags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group Document Tag'), ['controller' => 'GroupDocumentTags', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="groupDocuments index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('group_id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('dir') ?></th>
            <th><?= $this->Paginator->sort('ver') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($groupDocuments as $groupDocument): ?>
        <tr>
            <td><?= $this->Number->format($groupDocument->id) ?></td>
            <td>
                <?= $groupDocument->has('group') ? $this->Html->link($groupDocument->group->name, ['controller' => 'Groups', 'action' => 'view', $groupDocument->group->id]) : '' ?>
            </td>
            <td><?= h($groupDocument->name) ?></td>
            <td><?= h($groupDocument->dir) ?></td>
            <td><?= $this->Number->format($groupDocument->ver) ?></td>
            <td><?= h($groupDocument->created) ?></td>
            <td><?= h($groupDocument->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $groupDocument->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $groupDocument->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $groupDocument->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupDocument->id)]) ?>
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
