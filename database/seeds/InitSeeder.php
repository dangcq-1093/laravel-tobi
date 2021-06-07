<?php

use App\Models\Section;
use App\Models\Card;
use App\Models\Description;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class InitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = [
            ['type' => 'banner', 'title' => 'HMI'],
            ['type' => 'summary'],
            ['type' => 'description'],
            ['type' => 'progress'],
            ['type' => 'outcome'],
            ['type' => 'impact'],
        ];
        
        $cards = [
            ['title'=> 'Specific aims', 'type' => 'description', 'order' => 1],
            ['title'=> 'Experience and credentials of the investigative team', 'type' => 'description', 'order' => 2],
            ['title'=> 'Diseases', 'type' => 'description', 'order' => 3],
            ['title'=> 'Techniques', 'type' => 'description', 'order'=> 4],
            [
                'title'=> 'Phase 1',
                'type' => 'progress',
                'note' => 'A system (including software, eye tracking device, EEG recording set, etc.) to collect eye tracking and EEG data',
                'order' => 1,
            ],
            [
                'title'=> 'Phase 2',
                'type' => 'progress',
                'note' => 'A big and standard dataset of EEG and eye tracking includes 1500 ET - EEG recordings of 300 people (healthy: 200 and severe motor impaired:100)',
                'order' => 2,
            ],
            [
                'title'=> 'Phase 3',
                'type' => 'progress',
                'note' => 'AI algorithm that mine ET-EEG data for spelling recommendation',
                'order' => 3,
            ],
            [
                'title'=> 'Phase 4',
                'type' => 'progress',
                'note' => 'An ET-BCI spelling system with ET-EEG based spelling recommendation engine',
                'order' => 4,
            ],
            [
                'title'=> 'Publications',
                'order' => 1,
                'type' => 'outcome',
            ],
            [
                'title'=> 'Products, services, solutions-oriented applications that will bring real benefits to the community',
                'order' => 2,
                'type' => 'outcome',
            ],
            [
                'title'=> 'Inventions',
                'order' => 3,
                'type' => 'outcome',
            ],
            [
                'title'=> 'Short-Term (completion – 6 months)',
                'order' => 1,
                'type' => 'impact',
            ],
            [
                'title'=> 'Medium-Term (6 months – 2 years)',
                'order' => 2,
                'type' => 'impact',
            ],
            [
                'title'=> 'Long-Term (2 years & Onward)',
                'order' => 3,
                'type' => 'impact',
            ],
        ];
        $descriptions = [
            [
                'content' => 'Eye tracking – Brain computer interface AI-based Vietnamese spelling system for severe motor disabilities.',
                'parent' => 'banner',
                'type' => 'section',
            ],
            [
                'content' => 'We focus on building artificial intelligence (AI)-based ACC which takes inputs as the patients’ eye and brain electrical activities and output patients’ intended spelling Vietnamese. The proposed solution is to combine eye tracking (ET) movement and an EEG tracking brain wave pattern inputs to assist patients with difficulties in normal verbal communication to express themselves effectively.',
                'parent' => 'summary',
                'type' => 'section',
            ],
            [
                'content' => 'The impacts of “Eye tracking – Brain computer interface AI-based Vietnamese spelling system for severe motor disabilities” project will be felt in short, medium, and long term. The following are the project results which will be realized upon completion.',
                'parent' => 'impact',
                'type' => 'section',
            ],
            [
                'content' => 'A system (including software solution, eye tracking device, EEG recording set, etc.) to collect eye tracking and EEG data.',
                'parent' => 'description',
                'type' => 'card',
                'order' => 1,
            ],
            [
                'content' => 'A big and standard dataset of EEG and eye tracking includes 1500 EEG-ET recordings of 300 people (at least 100 severe motor disabilities).',
                'parent' => 'description',
                'type' => 'card',
                'order' => 1,
            ],
            [
                'content' => 'AI algorithm that mine ET-EEG data for spelling recommendation.',
                'parent' => 'description',
                'type' => 'card',
                'order' => 1,
            ],
            [
                'content' => 'An ET-BCI spelling system with ET-EEG based spelling recommendation engine.',
                'parent' => 'description',
                'type' => 'card',
                'order' => 1,
            ],
            [
                'content' => 'Assoc. Prof. Dr. Le Thanh Ha (PI) graduated from Korea University, Korea and majored in Multimedia Communication and processing.',
                'parent' => 'description',
                'type' => 'card',
                'order' => 2,
            ],
            [
                'content' => 'Dr. Nguyen Ba Hung (Co-PI) graduated from Institute of physics, Vietnam academy of Science and Technology in Theorical physics, Biophysics Science.',
                'parent' => 'description',
                'type' => 'card',
                'order' => 2,
            ],
            [
                'content' => 'Group of diseases caused by CNS damage.',
                'parent' => 'description',
                'type' => 'card',
                'order' => 3,
            ],
            [
                'content' => 'Group disease due to peripheral nerve damage.',
                'parent' => 'description',
                'type' => 'card',
                'order' => 3,
            ],
            [
                'content' => 'Group of diseases caused by musculoskeletal-related injuries.',
                'parent' => 'description',
                'type' => 'card',
                'order' => 3,
            ],
            [
                'content' => 'Text entry by gaze: eye tracking.',
                'parent' => 'description',
                'type' => 'card',
                'order' => 4,
            ],
            [
                'content' => 'Deep learning in EEG analysis.',
                'parent' => 'description',
                'type' => 'card',
                'order' => 4,
            ],
            [
                'content' => 'Context language modeling.',
                'parent' => 'description',
                'type' => 'card',
                'order' => 4,
            ],
            [
                'content' => 'Develop eye tracking spelling system. Build experimental design for EEG data collection. Develop pre-processing tool for ET and EEG data synchronization and annotation tool for ET – EGG data. Develop the software that allows doctors to collect data.',
                'parent' => 'progress',
                'type' => 'card',
                'order' => 1,
            ],
            [
                'content' => 'Collect 1500 ET - EEG recordings of 300 people (healthy: 200 and severe motor impaired: 100) (ET data: coordinates of eye gaze on computer screen and typing character). Pre-process ET-EEG data for synchronization. Annotate and assess ET-EEG data.',
                'parent' => 'progress',
                'type' => 'card',
                'order' => 2,
            ],
            [
                'content' => 'Review and research on AI algorithm that mine ET-EEG data for spelling recommendation.Develop initial version of AI algorithm that mine ET-EEG data for spelling recommendation (including develop and standardize traning data set). Train and tune the AI model using the collected data. Test the AI algorithm on ET-EEG testing data',
                'parent' => 'progress',
                'type' => 'card',
                'order' => 3,
            ],
            [
                'content' => 'Develop spelling recommendation module. Develop and complete ET-BCI spelling system. Test the system on 10 Vietnamese patients and 20 healthy people. Write papers and file patents.',
                'parent' => 'progress',
                'type' => 'card',
                'order' => 4,
            ],
            [
                'content' => '01 paper in a Q1 ranking journal in computer science or medical engineering or top conference (A or A* ranking)',
                'parent' => 'outcome',
                'type' => 'card',
                'order' => 1,
            ],
            [
                'content' => 'A big and standard dataset of EEG and eye tracking includes 1500 EEG-ET recordings of 300 people (healthy: 200 and severe motor impaired: 100)',
                'parent' => 'outcome',
                'type' => 'card',
                'order' => 2,
            ],
            [
                'content' => 'An ET-BCI spelling system with ET-EEG based spelling recommendation engine',
                'parent' => 'outcome',
                'type' => 'card',
                'order' => 2,
            ],
            [
                'content' => '01 US/JP/AU patent registration',
                'parent' => 'outcome',
                'type' => 'card',
                'order' => 3,
            ],
            [
                'content' => '02 Vietnam patent registration',
                'parent' => 'outcome',
                'type' => 'card',
                'order' => 3,
            ],
            [
                'content' => 'A reference ET-EEG dataset for AI developments on new type of computer interaction for computational neuroscience. ET-BCI AI-based Vietnamese spelling system will support severe motor disabilities to communicate.',
                'parent' => 'impact',
                'type' => 'card',
                'order' => 1,
            ],
            [
                'content' => 'The reference dataset and proposed methods will promote AI developments for developing methods to alternate or rehabilitate motor/speech functions for severe moto disabilities.',
                'parent' => 'impact',
                'type' => 'card',
                'order' => 2,
            ],
            [
                'content' => 'Improving the ability of healthcare system for severe motor disabilities.',
                'parent' => 'impact',
                'type' => 'card',
                'order' => 3,
            ],
        ];
        foreach($sections as $section) {
            $modelSection = Section::create([
                'type' => $section['type'],
                'title' => array_key_exists('title', $section) ? $section['title'] : null,
            ]);

            foreach($descriptions as $description) {
                if ($description['parent'] === $modelSection->type && $description['type'] === 'section') {
                    Description::create([
                        'content' => $description['content'],
                        'descriptionable_id' => $modelSection->id,
                        'descriptionable_type' => Section::class,
                    ]);
                }
            }

            foreach($cards as $card) {
                if ($card['type'] === $modelSection->type) {
                    $modelCard = Card::create([
                        'title' => $card['title'],
                        'note' => array_key_exists('note', $card) ? $card['note'] : null,
                        'section_id' => $modelSection->id,
                        'order' => $card['order'],
                    ]);

                    foreach($descriptions as $description) {
                        if (array_key_exists('order', $description)) {
                            if ($description['parent'] === $modelSection->type && $description['order'] === $modelCard->order) {
                                Description::create([
                                    'content' => $description['content'],
                                    'descriptionable_id' => $modelCard->id,
                                    'descriptionable_type' => Card::class,
                                ]);
                            }
                        }
                    }
                }
            }

            User::create([
                'name' => 'Admin',
                'email' => 'adminvnu@gmail.com',
                'username' => 'admin',
                'password' => Hash::make('admin123'),
            ]);
        }
    }
}
