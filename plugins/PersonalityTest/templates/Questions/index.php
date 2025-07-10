<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $questions
 */
?>

<div class="questions index content">

   <?= $this->Html->link(__('Submit'), ['controller' => 'Results', 'action' => 'index', 'plugin' => 'PersonalityTest'], ['class' => 'button float-right']) ?>
   <?= $this->Html->css('PersonalityTest.style') ?>

   <!--Displays the question number-->
   <h3>Question <?= h($singleQuestion->id)?></h3>
    <div class="table-responsive">


    <p class="TXTParagraph" id="AgreeStatement" >How much do you agree with the following statement?</p>

        <!--Displays 1 question at a time-->
        <p class="TXTParagraph" id="Qustion">
        <?= h($singleQuestion->questions_text) ?>
             </p>       
           
          <?= $this->Form->create(null, ['url' => ['plugin' => 'PersonalityTest', 'controller' => 'Answers', 'action' => 'assignValues']]) ?>
            <label>
             <input id="StronglyDisagreeRad" type="radio" name="text" value="Strongly Disagree"> 
             <span class="LabelTXT">Strongly Disagree</span>
             </label>

             <label>
             <input id="DisagreeRad" type="radio" name="text" value="Disagree"> 
             <span class="LabelTXT">Disagree</span>
             </label>

             <label>
             <input id="NeutralRad" type="radio" name="text" value="Neutral"> 
             <span class="LabelTXT">Neutral</span>
             </label>

             <label>
             <input id="AgreeRad" type="radio" name="text" value="Agree"> 
             <span class="LabelTXT">Agree</span>
             </label>

             <label>
             <input id="StronglyAgreeRad" type="radio" name="text" value="Strongly Agree">
             <span class="LabelTXT"> Strongly Agree</span>
             </label>
             
             <!--Allows to keep track of the question_id for use in the AnswersController-->
             <input type="hidden" name="question_id" value="<?= h($singleQuestion->id) ?>">

            <button class="submitBtn" type="submit">Continue</button>
             <?= $this->Form->end() ?>

<div style="text-align: center;  background-color: #ebebebe3; border-radius: 5px; padding:1vw ">
        <?= $this->Html->link('< Prev',['action' => 'index' , 0],['class' => 'nextBtn']);?> |
        <?= $this->Html->link('Next >',['action' => 'index' , 1],['class' => 'nextBtn']);?>
</div>
 </div>
