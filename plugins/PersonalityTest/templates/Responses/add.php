<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $response
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $questions
 * @var \Cake\Collection\CollectionInterface|string[] $answers
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Responses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="responses form content">
            <?= $this->Form->create($response) ?>
            <fieldset>
                <legend><?= __('Add Response') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('question_id', ['options' => $questions]);
                    echo $this->Form->control('answer_id', ['options' => $answers]);
                    echo $this->Form->control('answered_on');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
