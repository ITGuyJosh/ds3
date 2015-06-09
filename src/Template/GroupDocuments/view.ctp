<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Group Document'), ['action' => 'edit', $groupDocument->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Group Document'), ['action' => 'delete', $groupDocument->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupDocument->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Group Documents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group Document'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Group Document Tags'), ['controller' => 'GroupDocumentTags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group Document Tag'), ['controller' => 'GroupDocumentTags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="groupDocuments view large-10 medium-9 columns">
    <h2><?= h($groupDocument->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Group') ?></h6>
            <p><?= $groupDocument->has('group') ? $this->Html->link($groupDocument->group->name, ['controller' => 'Groups', 'action' => 'view', $groupDocument->group->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($groupDocument->name) ?></p>
            <h6 class="subheader"><?= __('Dir') ?></h6>
            <p><?= h($groupDocument->dir) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($groupDocument->id) ?></p>
            <h6 class="subheader"><?= __('Ver') ?></h6>
            <p><?= $this->Number->format($groupDocument->ver) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($groupDocument->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($groupDocument->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related GroupDocumentTags') ?></h4>
    <?php if (!empty($groupDocument->group_document_tags)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Group Document Id') ?></th>
            <th><?= __('Tag Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($groupDocument->group_document_tags as $groupDocumentTags): ?>
        <tr>
            <td><?= h($groupDocumentTags->id) ?></td>
            <td><?= h($groupDocumentTags->group_document_id) ?></td>
            <td><?= h($groupDocumentTags->tag_id) ?></td>
            <td><?= h($groupDocumentTags->created) ?></td>
            <td><?= h($groupDocumentTags->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'GroupDocumentTags', 'action' => 'view', $groupDocumentTags->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'GroupDocumentTags', 'action' => 'edit', $groupDocumentTags->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'GroupDocumentTags', 'action' => 'delete', $groupDocumentTags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $groupDocumentTags->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
