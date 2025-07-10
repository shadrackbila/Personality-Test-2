<?php
declare(strict_types=1);

use Migrations\BaseSeed;

/**
 * PersonalityType seed.
 */
class PersonalityTypeSeed extends BaseSeed
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

            [
                'name' => 'The Leader',
                'description' => 'You are a natural-born leader who thrives in dynamic environments.
                 You exude confidence, take initiative, and rarely back down from responsibility. 
                 You\'re not only outgoing and persuasive but also methodical and goal-oriented.
                 People often turn to you for direction and motivation because you combine charisma with a solid work ethic.
                  When challenges arise, you stay focused and push forward with determination.
                * Strengths: Communication, time management, focus, public speaking
                * Ideal roles: Project manager, team lead, entrepreneur'],

                [
                    'name' => 'The Visionary',
                    'description' => 'You blend creativity with structure in a way that allows you to turn ideas into reality. 
                    Your mind is full of concepts, innovations, and alternative ways of thinking—but what makes you unique is your ability to execute those ideas with discipline.
                     You enjoy setting long-term goals and following them through, often inspiring others with your originality and sense of purpose.
                    * Strengths: Innovation, execution, planning, deep thinking
                    * Ideal roles: Architect, designer, strategist, startup founder'   ],
                [
                    'name' => 'The Empath',
                    'description' => 'You\'re the calm in the storm. You\'re deeply compassionate, emotionally aware, and consistently offer support to those around you. 
                    You rarely get overwhelmed and are able to maintain emotional balance, even in high-pressure situations. 
                    People see you as a steady, kind, and trustworthy individual who values connection and harmony.
                    * Strengths: Conflict resolution, emotional support, reliability
                    * Ideal roles: Counselor, teacher, nurse, HR specialist'    ],
                [
                    'name' => 'The Explorer',
                    'description' =>'Energetic, curious, and always looking for your next big adventure—you\'re someone who thrives on novelty. 
                    Whether it\'s meeting new people, diving into new cultures, or learning something unconventional, you never stop exploring.
                     You enjoy expressing yourself creatively and often inspire those around you to break out of their comfort zones.
                    * Strengths: Adaptability, idea generation, enthusiasm, cultural fluency
                    * Ideal roles: Travel writer, performer, marketer, creative director'  ],
                [
                    'name' => 'The Strategist',
                    'description' => 'You are calm, composed, and ruthlessly efficient. 
                    You think before you act, weigh options carefully, and don\'t let emotions cloud your judgment. 
                    You thrive in structured environments and are great at developing long-term solutions.
                    Your cool-headed nature makes you an excellent problem solver, even under pressure.
                    * Strengths: Logic, calmness under stress, precision, decision-making
                    * Ideal roles: Engineer, financial planner, data analyst, military strategist'  ],
                [
                    'name' => 'The Idealist',
                    'description' => 'You are driven by meaning, connection, and ideals.
                     You dream big, care deeply, and want to make a difference.
                      You\'re imaginative and emotionally intuitive, often drawn to causes, art, or philosophies that align with your values. 
                      You may avoid confrontation, but you\'re deeply committed to kindness, fairness, and authenticity.
                    * Strengths: Creativity, empathy, moral clarity, big-picture thinking
                    * Ideal roles: Artist, psychologist, nonprofit leader, writer' ],
                [
                    'name' => 'The Diplomat',
                    'description' => 'You\'re known for your integrity, reliability, and ability to bring people together. 
                    You have a strong sense of duty and are exceptionally good at managing relationships without sacrificing your responsibilities. 
                    You\'re humble but capable, supportive but decisive.
                     People trust you because you always show up and keep things running smoothly.
                    * Strengths: Responsibility, trust-building, multitasking, compromise
                    * Ideal roles: Operations manager, mediator, educator, customer relations'   ],
                [
                    'name' => 'The Analyst',
                    'description' => 'You prefer depth over small talk and thoughtfulness over impulsivity.
                     You thrive when working independently on complex problems.
                     You\'re both highly organized and intellectually curious, capable of analyzing abstract ideas and translating them into structured systems.
                     Socializing might not be your preference, but your work speaks volumes.
                    * Strengths: Focus, structure, independent thinking, analytical skills
                    * Ideal roles: Software developer, researcher, data scientist, academic'  ],
                [
                    'name' => 'The Mediator',
                    'description' => 'You\'re adaptable and balanced, able to work well with a wide variety of personalities and in many different environments.
                     Your flexibility and even-temperedness make you a natural harmonizer.
                     While you may not be extreme in any one area, your strength lies in your versatility and steady approach to life and work.
                    * Strengths: Flexibility, emotional regulation, empathy, teamwork
                    * Ideal roles: Coordinator, coach, consultant, support specialist' ],

                    [
                        'name' => 'The Performer',
                        'description' => 'You bring energy and creativity into everything you do.
                        Your outgoing nature and love for novel experiences make you a magnetic presence in any room. You\'re not afraid to take the spotlight and inspire others with your enthusiasm.
                        * Strengths: Expressiveness, creativity, social fluency, spontaneity
                        * Ideal roles: Presenter, entertainer, marketer, event planner'
                    ],
                    [
                        'name' => 'The Architect',
                        'description' => 'You are methodical yet innovative, thriving at the intersection of structure and imagination.
                        You enjoy building ideas from the ground up and are particularly skilled at making long-term plans a reality through disciplined effort.
                        * Strengths: Planning, organization, creative problem-solving, foresight
                        * Ideal roles: Engineer, strategist, designer, operations planner'
                    ],
                    [
                        'name' => 'The Thinker',
                        'description' => 'You\'re introspective and analytical, constantly seeking to understand the world and yourself.
                        You thrive in thoughtful environments and value depth over flash. Your emotional awareness and philosophical mindset help you bring a unique calm to complex discussions.
                        * Strengths: Insightfulness, emotional intelligence, curiosity, reflection
                        * Ideal roles: Writer, psychologist, researcher, philosopher'
                    ],
                    [
                        'name' => 'The Charmer',
                        'description' => 'You naturally connect with people and know how to make others feel seen and valued.
                        You blend charm with empathy, and you often inspire loyalty and trust from those around you. You shine brightest in social settings.
                        * Strengths: Social intelligence, warmth, influence, confidence
                        * Ideal roles: Salesperson, diplomat, public relations specialist, spokesperson'
                    ],
                    [
                        'name' => 'The Wanderer',
                        'description' => 'You\'re curious, introspective, and driven by a need to explore—whether that\'s places, ideas, or emotions.
                        While not always drawn to the spotlight, you prefer meaningful experiences and tend to view life as an ongoing journey of growth.
                        * Strengths: Curiosity, adaptability, depth, introspection
                        * Ideal roles: Travel writer, cultural analyst, freelancer, creative'
                    ],
                    [
                        'name' => 'The Observer',
                        'description' => 'You prefer to take a step back and watch before jumping in.
                        You\'re analytical and private, drawing strength from solitude and order. You value logic and consistency over novelty and noise.
                        * Strengths: Objectivity, caution, independence, attention to detail
                        * Ideal roles: Analyst, auditor, editor, technician'
                    ],
                    [
                        'name' => 'The Realist',
                        'description' => 'You\'re grounded and practical, with a calm and collected demeanor.
                        You see things clearly, without being swept away by fantasy or emotion, and your realistic mindset keeps projects and people focused on what matters.
                        * Strengths: Stability, reason, resilience, critical thinking
                        * Ideal roles: Project manager, operations lead, data analyst, counselor'
                    ],
                    [
                        'name' => 'The Skeptic',
                        'description' => 'You question assumptions and seek the truth, even when it\'s uncomfortable.
                        Your reserved nature and critical thinking allow you to challenge groupthink and bring a necessary balance to idealism.
                        * Strengths: Skepticism, discernment, independence, rationality
                        * Ideal roles: Researcher, investigator, strategist, quality control specialist'
                    ],
                    [
                        'name' => 'The Loner',
                        'description' => 'You value your independence and need time alone to recharge and reflect.
                        You may not seek out crowds, but your depth and inner strength speak volumes. You\'re often your own best company.
                        * Strengths: Self-reliance, thoughtfulness, emotional depth, focus
                        * Ideal roles: Developer, artist, remote worker, solo entrepreneur'
                    ],
                    [
                        'name' => 'The Independent',
                        'description' => 'You do your best work when trusted to manage yourself.
                        You value order and effort, but don\'t depend on others approval. You\'re calm under pressure and thrive in roles with autonomy.
                        * Strengths: Self-discipline, independence, perseverance, structure
                        * Ideal roles: Accountant, freelancer, technician, analyst'
                    ],
                    [
                        'name' => 'The Cautious',
                        'description' => 'You\'re thoughtful and deliberate, always considering the possible outcomes before acting.
                        While not impulsive, you\'re dependable and emotionally steady—especially in high-stakes situations where calm minds prevail.
                        * Strengths: Patience, emotional control, responsibility, awareness
                        * Ideal roles: Risk assessor, administrator, logistics planner, HR specialist'
                    ],
                    [
                        'name' => 'The Minimalist',
                        'description' => 'You find fulfillment in simplicity, clarity, and authentic connection.
                        You aren\'t drawn to flash or chaos, preferring to focus on what truly matters. Your cooperation and calmness make you a grounding presence.
                        * Strengths: Clarity, moderation, loyalty, cooperation
                        * Ideal roles: Advisor, community organizer, minimalist entrepreneur, support lead'
                    ],
                
                    

                    [
                        'name' => 'The Grounded',
                        'description' => 'You are steady, reliable, and realistic. Challenges don’t shake you easily, and you approach life with a calm, collected mindset. You value consistency and are often the voice of reason in any group.
                        * Strengths: Stability, realism, dependability, patience
                        * Ideal roles: Operations manager, therapist, teacher, logistics coordinator'
                    ],
                    [
                        'name' => 'The Spark',
                        'description' => 'Energetic and curious, you light up rooms with fresh ideas and infectious enthusiasm. You thrive when sharing your passions with others and love pushing the envelope creatively.
                        * Strengths: Creativity, energy, charisma, inspiration
                        * Ideal roles: Creative lead, startup founder, event planner, brand strategist'
                    ],
                    [
                        'name' => 'The Artisan',
                        'description' => 'You are naturally gifted at bringing ideas to life. Your strength lies in working with your hands or crafting original concepts with discipline and precision. You appreciate form, function, and beauty.
                        * Strengths: Precision, craftsmanship, patience, expression
                        * Ideal roles: Designer, artisan, developer, engineer, videographer'
                    ],
                    [
                        'name' => 'The Harmonist',
                        'description' => 'You seek peace, balance, and unity in every space you enter. Emotionally intelligent and highly compassionate, people often turn to you to restore calm and connection.
                        * Strengths: Diplomacy, empathy, emotional regulation, supportiveness
                        * Ideal roles: Mediator, counselor, HR professional, relationship coach'
                    ],
                    [
                        'name' => 'The Anchor',
                        'description' => 'Dependable and emotionally stable, you keep things grounded when chaos hits. You remain calm under pressure and help others stay the course with quiet strength.
                        * Strengths: Calmness, steadiness, responsibility, loyalty
                        * Ideal roles: First responder, operations lead, coach, mental health worker'
                    ],
                    [
                        'name' => 'The Pathfinder',
                        'description' => 'Curious and adventurous, you blaze your own trail without losing sight of your goals. You combine vision with action and guide others toward purpose.
                        * Strengths: Exploration, ambition, vision, adaptability
                        * Ideal roles: Explorer, expedition leader, consultant, researcher'
                    ],
                    [
                        'name' => 'The Pillar',
                        'description' => 'You stand firm with strong principles and a heart that values fairness. You bring structure to disorganized environments and ensure everything is handled with integrity.
                        * Strengths: Leadership, structure, dependability, fairness
                        * Ideal roles: Team lead, legal professional, administrator, operations manager'
                    ],
                    [
                        'name' => 'The Soulfire',
                        'description' => 'You radiate charm and passion. With your engaging personality and natural magnetism, people feel energized and seen in your presence. You value meaningful relationships and creative expression.
                        * Strengths: Charisma, empathy, self-expression, social drive
                        * Ideal roles: Actor, public speaker, marketer, relationship coach'
                    ],
                    [
                        'name' => 'The Guardian',
                        'description' => 'You are driven to protect and care for others. With strong boundaries and a moral compass, you step up when others shy away. You work hard and care deeply about doing the right thing.
                        * Strengths: Responsibility, loyalty, structure, protection
                        * Ideal roles: Security professional, educator, nurse, project manager'
                    ],
                    [
                        'name' => 'The Vision Bearer',
                        'description' => 'You are deeply imaginative with a quiet strength that helps you bring big ideas to life. Your emotions run deep, and your resilience makes your dreams real.
                        * Strengths: Vision, emotional depth, endurance, creativity
                        * Ideal roles: Writer, creative director, spiritual coach, entrepreneur'
                    ],
                    [
                        'name' => 'The Rainmaker',
                        'description' => 'You get things moving — whether that’s ideas, people, or businesses. Driven and persuasive, you know how to energize a team and make things happen.
                        * Strengths: Initiative, persuasion, productivity, leadership
                        * Ideal roles: Sales lead, business developer, startup founder, politician'
                    ],
                    [
                        'name' => 'The Flamekeeper',
                        'description' => 'You keep the creative fire alive with a deep appreciation for authenticity and meaning. Your idealism fuels projects that reflect your values, and you inspire others to do the same.
                        * Strengths: Authenticity, passion, depth, inspiration
                        * Ideal roles: Filmmaker, poet, nonprofit leader, wellness guide'
                    ],
                    [
                        'name' => 'The Tactician',
                        'description' => 'You analyze, plan, and act with purpose. Behind every move you make, there’s thought and intention. You’re the kind of person others rely on when precision matters most.
                        * Strengths: Strategy, focus, initiative, execution
                        * Ideal roles: Strategist, analyst, developer, team lead'
                    ],
                    [
                        'name' => 'The Sage',
                        'description' => 'Wise beyond your years, you approach life with both depth and calm. You often reflect deeply on the world around you and help others make sense of complexity.
                        * Strengths: Insight, emotional balance, wisdom, empathy
                        * Ideal roles: Philosopher, writer, mentor, psychologist'
                    ],
                    [
                        'name' => 'The Dove',
                        'description' => 'You are peaceful, warm-hearted, and optimistic. You believe in the good in others and often play a role in uniting people around a common cause or message.
                        * Strengths: Kindness, harmony, compassion, resilience
                        * Ideal roles: Community leader, counselor, spiritual guide, life coach'
                    ],
                    
        ];

        $table = $this->table('personality_type');
        $table->insert($data)->save();
    }
}
