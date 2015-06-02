<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Document Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="documentTags index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('document_id') ?></th>
            <th><?= $this->Paginator->sort('tag_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($documentTags as $documentTag): ?>
        <tr>
            <td><?= $this->Number->format($documentTag->id) ?></td>
            <td>
                <?= $documentTag->has('document') ? $this->Html->link($documentTag->document->name, ['controller' => 'Documents', 'action' => 'view', $documentTag->document->id]) : '' ?>
            </td>
            <td>
                <?= $documentTag->has('tag') ? $this->Html->link($documentTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $documentTag->tag->id]) : '' ?>
            </td>
            <td><?= h($documentTag->created) ?></td>
            <td><?= h($documentTag->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $documentTag->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $documentTag->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $documentTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documentTag->id)]) ?>
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
