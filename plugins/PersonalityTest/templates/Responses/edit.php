<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $response
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $questions
 * @var string[]|\Cake\Collection\CollectionInterface $answers
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $response->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $response->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Responses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="responses form content">
            <?= $this->Form->create($response) ?>
            <fieldset>
                <legend><?= __('Edit Response') ?></legend>
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
