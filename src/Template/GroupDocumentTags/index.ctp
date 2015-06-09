<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Group Document Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Group Documents'), ['controller' => 'GroupDocuments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group Document'), ['controller' => 'GroupDocuments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="groupDocumentTags index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('group_document_id') ?></th>
            <th><?= $this->Paginator->sort('tag_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($groupDocumentTags as $groupDocumentTag): ?>
        <tr>
            <td><?= $this->Number->format($groupDocumentTag->id) ?></td>
            <td>
                <?= $groupDocumentTag->has('group_document') ? $this->Html->link($groupDocumentTag->group_document->name, ['controller' => 'GroupDocuments', 'action' => 'view', $groupDocumentTag->group_document->id]) : '' ?>
            </td>
            <td>
                <?= $groupDocumentTag->has('tag') ? $this->Html->link($groupDocumentTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $groupDocumentTag->tag->id]) : '' ?>
            </td>
            <td><?= h($groupDocumentTag->created) ?></td>
            <td><?= h($groupDocumentTag->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $groupDocumentTag->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $groupDocumentTag->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $groupDocumentTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupDocumentTag->id)]) ?>
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
