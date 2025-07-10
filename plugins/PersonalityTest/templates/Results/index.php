<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $results
 */
?>
<div class="results index content">
   <?= $this->Html->link(__('Close'), ['controller' => 'Answers', 'action' => 'clearResponses', 'plugin' => 'PersonalityTest'], ['class' => 'button float-right']) ?>
   <?= $this->Html->css('PersonalityTest.style') ?>

   <h3><?= __('Results for {0}', h($username)) ?></h3>
    <div class="table-responsive">
    <table>
    <thead>
        <th>Trait</th>
        <th>Score</th>
    </thead>
    <tbody>
        <tr>
            <td>Extraversion</td>
            <td><?php echo $traitPercentages['Extraversion']; ?>%</td>
        </tr>
        <tr>
            <td>Openness to Experience</td>
            <td><?php echo $traitPercentages['OpennessToExperience'];?>%</td>

        </tr>
        <tr>
            <td>Discipline</td>
            <td><?php echo $traitPercentages['Discipline']; ?>%</td>

        </tr>
        <tr>
            <td>Compassion</td>
            <td><?php echo $traitPercentages['Agreeableness']; ?>%</td>

        </tr>
        <tr>
            <td>Emotional Stability</td>
            <td><?php echo $traitPercentages['EmotionalStability']; ?>%<td>

        </tr>
    </tbody>
    </table>
      <h5><?= h($personalityType->name  ?? 'Personality Type : Unknown') ?></h5>

       <p><?= h($personalityType->description ?? 'No description available for this personality type.') ?></p>

    </div>
   
</div>