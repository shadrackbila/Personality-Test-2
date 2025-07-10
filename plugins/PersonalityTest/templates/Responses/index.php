<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $responses
 */
?>
<div class="responses index content">
    <?= $this->Html->link(__('New Response'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <?= $this->Html->css('PersonalityTest.style') ?>
    <h3><?= __('Responses yeet') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('question_id') ?></th>
                    <th><?= $this->Paginator->sort('answer_id') ?></th>
                    <th><?= $this->Paginator->sort('answered_on') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($responses as $response): ?>
                <tr>
                    <td><?= $this->Number->format($response->id) ?></td>
                    <td><?= $response->hasValue('user') ? $this->Html->link($response->user->Username, ['controller' => 'Users', 'action' => 'view', $response->user->id]) : '' ?></td>
                    <td><?= $response->hasValue('question') ? $this->Html->link($response->question->Question_Text, ['controller' => 'Questions', 'action' => 'view', $response->question->id]) : '' ?></td>
                    <td><?= $response->hasValue('answer') ? $this->Html->link($response->answer->text, ['controller' => 'Answers', 'action' => 'view', $response->answer->id]) : '' ?></td>
                    <td><?= h($response->answered_on) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $response->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $response->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $response->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $response->id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>