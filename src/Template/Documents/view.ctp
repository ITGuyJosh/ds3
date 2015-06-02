<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Document'), ['action' => 'edit', $document->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Document'), ['action' => 'delete', $document->id], ['confirm' => __('Are you sure you want to delete # {0}?', $document->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Documents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Document Tags'), ['controller' => 'DocumentTags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document Tag'), ['controller' => 'DocumentTags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="documents view large-10 medium-9 columns">
    <h2><?= h($document->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($document->name) ?></p>
            <h6 class="subheader"><?= __('Dir') ?></h6>
            <p><?= h($document->dir) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($document->id) ?></p>
            <h6 class="subheader"><?= __('Ver') ?></h6>
            <p><?= $this->Number->format($document->ver) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($document->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($document->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related DocumentTags') ?></h4>
    <?php if (!empty($document->document_tags)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Document Id') ?></th>
            <th><?= __('Tag Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($document->document_tags as $documentTags): ?>
        <tr>
            <td><?= h($documentTags->id) ?></td>
            <td><?= h($documentTags->document_id) ?></td>
            <td><?= h($documentTags->tag_id) ?></td>
            <td><?= h($documentTags->created) ?></td>
            <td><?= h($documentTags->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'DocumentTags', 'action' => 'view', $documentTags->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'DocumentTags', 'action' => 'edit', $documentTags->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'DocumentTags', 'action' => 'delete', $documentTags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documentTags->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
