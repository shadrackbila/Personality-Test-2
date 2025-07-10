<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $personalityType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Personality Type'), ['action' => 'edit', $personalityType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Personality Type'), ['action' => 'delete', $personalityType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personalityType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Personality Type'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Personality Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="personalityType view content">
            <h3><?= h($personalityType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($personalityType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($personalityType->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($personalityType->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>