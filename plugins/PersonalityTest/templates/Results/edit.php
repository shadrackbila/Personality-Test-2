<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $result
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $result->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $result->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Results'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="results form content">
            <?= $this->Form->create($result) ?>
            <fieldset>
                <legend><?= __('Edit Result') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('score_summary');
                    echo $this->Form->control('results_on');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
