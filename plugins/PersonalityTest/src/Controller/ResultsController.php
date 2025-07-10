<?php
declare(strict_types=1);

namespace PersonalityTest\Controller;

use PersonalityTest\Controller\AppController;

/**
 * Results Controller
 *
 * @property \PersonalityTest\Model\Table\ResultsTable $Results
 */
class ResultsController extends AppController
{

    public function initialize(): void
{
    parent::initialize();
    $this->loadComponent('PersonalityTest.Answers');
    $this->loadComponent('PersonalityTest.PersonalityType');
    $this->loadComponent('PersonalityTest.User');
}

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $traitData = [
            'Extraversion' => ['points' => 0, 'counter' => 0],
            'OpennessToExperience' => ['points' => 0, 'counter' => 0],
            'Discipline' => ['points' => 0, 'counter' => 0],
            'Agreeableness' => ['points' => 0, 'counter' => 0],
            'EmotionalStability' => ['points' => 0, 'counter' => 0],
        ];
        
        $noAnswerCounter = 0; 

        $answersTable = $this->fetchTable('PersonalityTest.Answers'); 
        $totalAnswers = $answersTable->find()->count();

        for ($i = 1; $i < $totalAnswers; $i++) 
        {
        $answerId = $i;
        $points = $this->Answers->getAnswerPoints($answerId);
        $traits = $this->Answers->getAnswerTraits($answerId);


        switch($traits)
        {
            case 'Extraversion':
                $traitData['Extraversion']['points'] += $points;
                $traitData['Extraversion']['counter']++;
                break;

            case 'Openness to Experience':
                $traitData['OpennessToExperience']['points'] += $points;
                $traitData['OpennessToExperience']['counter']++;
                break;

            case 'Discipline':
                $traitData['Discipline']['points'] += $points;
                $traitData['Discipline']['counter']++;
                 break;

            case 'Agreeableness':
                $traitData['Agreeableness']['points'] += $points;
                $traitData['Agreeableness']['counter']++;
                break;

            case 'Emotional Stability':
                $traitData['EmotionalStability']['points'] += $points;
                $traitData['EmotionalStability']['counter']++;
                 break;

             default:
             $noAnswerCounter += 1;

                break;
        }

    }

             $traitPercentages = [];
            foreach ($traitData as $trait => $data) 
            {
             $percentage = 0;

            if ($data['counter'] != 0)
              {
              $percentage = round(($data['points'] / ($data['counter'] * 5)) * 100);

              }
               $traitPercentages[$trait] = $percentage;

            }


            $personalityType = 'Unknown'; 

            $personalityMapping = [
                 'The Leader' => ['Extraversion' => [70 , '<100'], 'Discipline' => [70 , '<100']],
                 'The Visionary' => ['OpennessToExperience' => [70 , '<100'], 'Discipline' => [70 , '<100']],
                 'The Empath' => ['Agreeableness' => [70 , '<100'], 'EmotionalStability' => [70 , '<100']],
                 'The Explorer' => ['Extraversion' => [70 , '<100'], 'OpennessToExperience' => [70 , '<100']],
                 'The Strategist' => ['Discipline' => [70 , '<100'], 'EmotionalStability' => [70 , '<100']],
                 'The Idealist' => ['OpennessToExperience' => [70 , '<100'], 'Agreeableness' => [70 , '<100']],
                 'The Diplomat' => ['Discipline' => [60 , '<100'], 'Agreeableness' => [70 , '<100']],
                 'The Analyst' => ['Discipline' => [70 , '<100'], 'OpennessToExperience' => [70 , '<100']],
                 'The Mediator' => ['Discipline' => [50 , '<80'], 'OpennessToExperience' => [50 , '<80'], 'Extraversion' => [50 , '<80'] ],

                 'The Harmonizer' => ['Agreeableness' => [60, '<90'], 'EmotionalStability' => [60, '<90']],
                 'The Performer' => ['Extraversion' => [60, '<95'], 'OpennessToExperience' => [60, '<90']],
                 'The Architect' => ['Discipline' => [60, '<85'], 'OpennessToExperience' => [55, '<80']],
                 'The Thinker' => ['OpennessToExperience' => [60, '<100'], 'EmotionalStability' => [50, '<75']],
                 'The Charmer' => ['Extraversion' => [75, '<100'], 'Agreeableness' => [65, '<95']],
                 'The Wanderer' => ['OpennessToExperience' => [60, '<85'], 'Extraversion' => [40, '<60']],

                 'The Observer' => ['Extraversion' => [1, '<40'], 'OpennessToExperience' => [1, '<50']],
                 'The Realist' => ['OpennessToExperience' => [1, '<45'], 'EmotionalStability' => [45, '<60']],
                 'The Skeptic' => ['Agreeableness' => [1, '<45'], 'OpennessToExperience' => [45, '<70']],
                 'The Loner' => ['Extraversion' => [1, '<35'], 'EmotionalStability' => [30, '<55']],
                 'The Independent' => ['Agreeableness' => [1, '<50'], 'Discipline' => [50, '<70']],
                 'The Cautious' => ['Extraversion' => [1, '<50'], 'EmotionalStability' => [50, '<75']],
                 'The Minimalist' => ['OpennessToExperience' => [1, '<30'], 'Agreeableness' => [50, '<75']],

                 'The Grounded' => ['EmotionalStability' => [55, '<80'], 'Discipline' => [50, '<70']],
                 'The Spark' => ['Extraversion' => [60, '<75'], 'OpennessToExperience' => [50, '<70']],

                 'The Artisan' => ['OpennessToExperience' => [60, '<75'], 'Discipline' => [40, '<60']],
                 'The Harmonist' => ['Agreeableness' => [65, '<80'], 'EmotionalStability' => [50, '<70']],
                 'The Anchor' => ['Discipline' => [55, '<75'], 'EmotionalStability' => [55, '<75']],
                 'The Pathfinder' => ['OpennessToExperience' => [65, '<80'], 'Extraversion' => [55, '<70']],
                 'The Pillar' => ['Discipline' => [60, '<80'], 'Agreeableness' => [50, '<70']],
                 'The Soulfire' => ['Extraversion' => [70, '<80'], 'Agreeableness' => [55, '<70']],
                 'The Guardian' => ['Agreeableness' => [60, '<75'], 'Discipline' => [55, '<70']],

                 'The Vision Bearer' => ['OpennessToExperience' => [70, '<80'], 'EmotionalStability' => [55, '<70']],
                 'The Rainmaker' => ['Extraversion' => [65, '<75'], 'Discipline' => [60, '<75']],
                 'The Flamekeeper' => ['OpennessToExperience' => [60, '<80'], 'Agreeableness' => [50, '<70']],
                 'The Tactician' => ['Discipline' => [65, '<80'], 'Extraversion' => [55, '<70']],
                 'The Sage' => ['EmotionalStability' => [60, '<80'], 'OpennessToExperience' => [60, '<75']],
                 'The Dove' => ['Agreeableness' => [70, '<80'], 'EmotionalStability' => [60, '<75']],

               ];


               $myPersonalityTypeResults = 'unknown';
               foreach($personalityMapping as $pType => $conditions)
               {
               $flagArray = [];
                foreach($conditions as $personalityCatagory => $scoreLimits)
                {
                    foreach ($scoreLimits as $scoreLimit) {

                    if (is_string($scoreLimit) && str_starts_with($scoreLimit, '<')) {
                        $limit = (int)substr($scoreLimit, 1);  
                        $flagArray[] = $traitPercentages[$personalityCatagory] < $limit;   
                    } else {

                        $flagArray[] = $traitPercentages[$personalityCatagory] >= $scoreLimit;
                    }

                 }
                }

                if (!in_array(false, $flagArray, true))
                {
                    $myPersonalityTypeResults = $pType;
                   break;
                }
                
               }

    if($myPersonalityTypeResults != 'Unknown')
    {
        $personalityType = $this->PersonalityType->getByName($myPersonalityTypeResults);

        $this->set(compact('personalityType'));

        if($personalityType != null){
        $result = $this->Results->newEntity([
            'user_id' => 1, 
            'score_summary' => $personalityType->name . '   ' . $personalityType->description,

        ]);
        $this->Results->save($result);
         }
    }

    $username = $this->User->getUsername();
    $this->set('username', $username);
        
        $this->set(compact('traitPercentages'));

        $query = $this->Results->find()
            ->contain(['Users']);
        $results = $this->paginate($query);

        $this->set(compact('results'));

    }

    /**
     * View method
     *
     * @param string|null $id Result id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $result = $this->Results->get($id, contain: ['Users']);
        $this->set(compact('result'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $result = $this->Results->newEmptyEntity();
        if ($this->request->is('post')) {
            $result = $this->Results->patchEntity($result, $this->request->getData());
            if ($this->Results->save($result)) {
                $this->Flash->success(__('The result has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The result could not be saved. Please, try again.'));
        }
        $users = $this->Results->Users->find('list', limit: 200)->all();
        $this->set(compact('result', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Result id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $result = $this->Results->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $result = $this->Results->patchEntity($result, $this->request->getData());
            if ($this->Results->save($result)) {
                $this->Flash->success(__('The result has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The result could not be saved. Please, try again.'));
        }
        $users = $this->Results->Users->find('list', limit: 200)->all();
        $this->set(compact('result', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Result id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $result = $this->Results->get($id);
        if ($this->Results->delete($result)) {
            $this->Flash->success(__('The result has been deleted.'));
        } else {
            $this->Flash->error(__('The result could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
