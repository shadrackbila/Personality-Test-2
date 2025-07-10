<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $users
 */
?>
<div class="users index content">


   <?= $this->Html->css('PersonalityTest.style') ?>

    <h3><?= __('My Personality Test') ?></h3>
    <div class="table-responsive">
   
<?= $this->Form->create(null, ['url' => ['controller' => 'Users', 'action' => 'saveName', 'plugin' => 'PersonalityTest'],'id' => 'nameForm']) ?>
    <label for="name"></label><br>
    <input type="text" id="name" name="name" placeholder="Enter your full name" ><br><br>
    <button type="submit" class="button float-right">Begin Test</button>
<?= $this->Form->end() ?>

    </div>
</div>