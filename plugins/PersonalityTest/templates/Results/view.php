<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $result
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Result'), ['action' => 'edit', $result->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Result'), ['action' => 'delete', $result->id], ['confirm' => __('Are you sure you want to delete # {0}?', $result->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Results'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Result'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="results view content">
            <h3><?= h($result->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $result->hasValue('user') ? $this->Html->link($result->user->Username, ['controller' => 'Users', 'action' => 'view', $result->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($result->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Results On') ?></th>
                    <td><?= h($result->results_on) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Score Summary') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($result->score_summary)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>