<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New User Document Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Documents'), ['controller' => 'UserDocuments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Document'), ['controller' => 'UserDocuments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="userDocumentTags index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('user_document_id') ?></th>
            <th><?= $this->Paginator->sort('tag_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($userDocumentTags as $userDocumentTag): ?>
        <tr>
            <td><?= $this->Number->format($userDocumentTag->id) ?></td>
            <td>
                <?= $userDocumentTag->has('user_document') ? $this->Html->link($userDocumentTag->user_document->name, ['controller' => 'UserDocuments', 'action' => 'view', $userDocumentTag->user_document->id]) : '' ?>
            </td>
            <td>
                <?= $userDocumentTag->has('tag') ? $this->Html->link($userDocumentTag->tag->name, ['controller' => 'Tags', 'action' => 'view', $userDocumentTag->tag->id]) : '' ?>
            </td>
            <td><?= h($userDocumentTag->created) ?></td>
            <td><?= h($userDocumentTag->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $userDocumentTag->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userDocumentTag->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userDocumentTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userDocumentTag->id)]) ?>
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
