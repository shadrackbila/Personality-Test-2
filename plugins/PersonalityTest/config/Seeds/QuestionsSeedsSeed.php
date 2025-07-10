<?php
declare(strict_types=1);

use Migrations\BaseSeed;

/**
 * QuestionsSeeds seed.
 */
class QuestionsSeedsSeed extends BaseSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/migrations/4/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            ['questions_text' => 'I enjoy meeting new people in social settings.'],
            ['questions_text' => 'I prefer having a detailed plan over being spontaneous.'],
            ['questions_text' => 'I find it easy to empathize with others\' feelings.'],
            ['questions_text' => 'I often reflect on my personal goals and values.'],
            ['questions_text' => 'I feel energized after spending time alone.'],
            ['questions_text' => 'I handle stress well in difficult situations.'],
            ['questions_text' => 'I value logical reasoning over emotional responses.'],
            ['questions_text' => 'I am comfortable taking the lead in group situations.'],
            ['questions_text' => 'I feel anxious when faced with uncertainty.'],
            ['questions_text' => 'I tend to avoid conflict, even when I disagree.'],
            ['questions_text' => 'I enjoy trying new and unfamiliar experiences.'],
            ['questions_text' => 'I need external motivation to stay productive.'],
            ['questions_text' => 'I find it easy to adapt to changes in my environment.'],
            ['questions_text' => 'I often seek approval or validation from others.'],
            ['questions_text' => 'I feel confident expressing my opinions openly.'],
            ['questions_text' => 'I enjoy helping others solve their problems.'],
            ['questions_text' => 'I prefer working alone rather than in a team.'],
            ['questions_text' => 'I am easily affected by others\' emotions.'],
            ['questions_text' => 'I set high standards for myself in everything I do.'],
            ['questions_text' => 'I like to keep my space organized and clutter-free.'],
            ['questions_text' => 'I tend to make decisions based on facts rather than feelings.'],
            ['questions_text' => 'I often take time to think before I speak.'],
            ['questions_text' => 'I feel comfortable in high-pressure situations.'],
            ['questions_text' => 'I regularly make an effort to understand my own emotions.'],
            ['questions_text' => 'I find it challenging to stay focused on long tasks.'],
            ['questions_text' => 'I enjoy competing with others.'],
            ['questions_text' => 'I feel uncomfortable when plans change unexpectedly.'],
            ['questions_text' => 'I like exploring abstract ideas and theories.'],
            ['questions_text' => 'I tend to trust people easily.'],
            ['questions_text' => 'I enjoy expressing myself through creative outlets like art or music.'],
        ];

        $table = $this->table('questions');
        $table->insert($data)->save();
    }
}
