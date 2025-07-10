<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $response
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Response'), ['action' => 'edit', $response->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Response'), ['action' => 'delete', $response->id], ['confirm' => __('Are you sure you want to delete # {0}?', $response->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Responses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Response'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="responses view content">
            <h3><?= h($response->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $response->hasValue('user') ? $this->Html->link($response->user->Username, ['controller' => 'Users', 'action' => 'view', $response->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Question') ?></th>
                    <td><?= $response->hasValue('question') ? $this->Html->link($response->question->Question_Text, ['controller' => 'Questions', 'action' => 'view', $response->question->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Answer') ?></th>
                    <td><?= $response->hasValue('answer') ? $this->Html->link($response->answer->text, ['controller' => 'Answers', 'action' => 'view', $response->answer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($response->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Answered On') ?></th>
                    <td><?= h($response->answered_on) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>