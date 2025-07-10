<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $answer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Answers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="answers form content">
            <?= $this->Form->create($answer) ?>
            <fieldset>
                <legend><?= __('Add Answer') ?></legend>
                <?php
                    echo $this->Form->control('text');
                    echo $this->Form->control('points');
                    echo $this->Form->control('traits');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
