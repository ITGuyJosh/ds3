<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Document'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Document Tags'), ['controller' => 'DocumentTags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Document Tag'), ['controller' => 'DocumentTags', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="documents index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('dir') ?></th>
            <th><?= $this->Paginator->sort('ver') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($documents as $document): ?>
        <tr>
            <td><?= $this->Number->format($document->id) ?></td>
            <td><?= h($document->name) ?></td>
            <td><?= h($document->dir) ?></td>
            <td><?= $this->Number->format($document->ver) ?></td>
            <td><?= h($document->created) ?></td>
            <td><?= h($document->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $document->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $document->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $document->id], ['confirm' => __('Are you sure you want to delete # {0}?', $document->id)]) ?>
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
