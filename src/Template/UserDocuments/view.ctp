<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User Document'), ['action' => 'edit', $userDocument->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Document'), ['action' => 'delete', $userDocument->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userDocument->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Documents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Document'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Document Tags'), ['controller' => 'UserDocumentTags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Document Tag'), ['controller' => 'UserDocumentTags', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="userDocuments view large-10 medium-9 columns">
    <h2><?= h($userDocument->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $userDocument->has('user') ? $this->Html->link($userDocument->user->id, ['controller' => 'Users', 'action' => 'view', $userDocument->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($userDocument->name) ?></p>
            <h6 class="subheader"><?= __('Dir') ?></h6>
            <p><?= h($userDocument->dir) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($userDocument->id) ?></p>
            <h6 class="subheader"><?= __('Ver') ?></h6>
            <p><?= $this->Number->format($userDocument->ver) ?></p>
            <h6 class="subheader"><?= __('Document Id') ?></h6>
            <p><?= $this->Number->format($userDocument->document_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($userDocument->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($userDocument->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related UserDocumentTags') ?></h4>
    <?php if (!empty($userDocument->user_document_tags)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Document Id') ?></th>
            <th><?= __('Tag Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($userDocument->user_document_tags as $userDocumentTags): ?>
        <tr>
            <td><?= h($userDocumentTags->id) ?></td>
            <td><?= h($userDocumentTags->user_document_id) ?></td>
            <td><?= h($userDocumentTags->tag_id) ?></td>
            <td><?= h($userDocumentTags->created) ?></td>
            <td><?= h($userDocumentTags->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'UserDocumentTags', 'action' => 'view', $userDocumentTags->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'UserDocumentTags', 'action' => 'edit', $userDocumentTags->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserDocumentTags', 'action' => 'delete', $userDocumentTags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userDocumentTags->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
