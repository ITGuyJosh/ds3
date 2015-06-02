<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Documents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Document Tags'), ['controller' => 'DocumentTags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Document Tag'), ['controller' => 'DocumentTags', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="documents form large-10 medium-9 columns">
    <?= $this->Form->create($document) ?>
    <fieldset>
        <legend><?= __('Add Document') ?></legend>
        <?php
            echo $this->Form->create($document, ["type" => "file"]);
            echo $this->Form->file("submittedfile");
            
            echo $this->Form->label("Select Tags");
            echo $this->Form->Select("tags", $tags, [
                "multiple" => "checkbox",
                "label" => "hi"
                ]);
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<?php
    
?>
