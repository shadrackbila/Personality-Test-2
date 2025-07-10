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
            <?= $this->Html->link(__('Edit Answer'), ['action' => 'edit', $answer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Answer'), ['action' => 'delete', $answer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Answers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Answer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="answers view content">
            <h3><?= h($answer->text) ?></h3>
            <table>
                <tr>
                    <th><?= __('Text') ?></th>
                    <td><?= h($answer->text) ?></td>
                </tr>
                <tr>
                    <th><?= __('Traits') ?></th>
                    <td><?= h($answer->traits) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($answer->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Points') ?></th>
                    <td><?= $this->Number->format($answer->points) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Responses') ?></h4>
                <?php if (!empty($answer->responses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Question Id') ?></th>
                            <th><?= __('Answer Id') ?></th>
                            <th><?= __('Answered On') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($answer->responses as $response) : ?>
                        <tr>
                            <td><?= h($response->id) ?></td>
                            <td><?= h($response->user_id) ?></td>
                            <td><?= h($response->question_id) ?></td>
                            <td><?= h($response->answer_id) ?></td>
                            <td><?= h($response->answered_on) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Responses', 'action' => 'view', $response->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Responses', 'action' => 'edit', $response->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Responses', 'action' => 'delete', $response->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $response->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>