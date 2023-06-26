<?php

namespace Database\Seeders;

use App\Models\Institute;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InstituteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        $data = [
            [
                'name' => 'Family Development Institute',
                'slug' => 'family-development-institute',
                'acronym' => 'fdi',
                'logo' => 'images/logos/fdi.png',
                'price' => '99.99',
                'active' => 1,
                'startDate' => '2023-03-13',
                'endDate' => '2023-03-18',
                'about' => 'fdi',
                'overview' => 'The family as the basic unit of society has far reaching implications on individual bent and ultimately on national stability in all respects. Social sciences have lost the primacy of the family as the building block for life',
                'seo' => 'Family Development, Family Institute, Family Growth, Family Therapy, Family Counseling, Family Support,  Family Health Programs',
            ],
            [
                'name' => 'Mindset Transformation Institute',
                'slug' => 'mindset-transformation-institute',
                'acronym' => 'mti',
                'logo' => 'images/logos/mti.png',
                'price' => '99.99',
                'active' => 1,
                'startDate' => '2023-04-01',
                'endDate' => '2023-04-05',
                'about' => 'MTI',
                'overview' => 'All behavior follows the dictates of the mind. As a person thinks so is he or she. This institute explores the pillars that govern beliefs systems, conditioning through cultural experiences and critical events. The brain',
                'seo' => 'Mindset Transformation, Self-improvement, Personal Growth, Mental Health, Positive Thinking, Mindfulness',
            ],

            [
                'name' => 'Institute of Governance & Public Policy',
                'slug' => 'institute-of-governance-and-public-policy',
                'acronym' => 'igpp',
                'logo' => 'images/logos/igpp.png',
                'price' => '99.99',
                'active' => 1,
                'startDate' => '2023-05-10',
                'endDate' => '2023-05-15',
                'about' => 'Igpp',
                'overview' => 'Are you interested in Government, Governance and Leadership within the private, public and NGO sectors? This institute is designed to develop leaders within these spheres of influence. At the heart of this program is a curriculum',
                'seo' => 'Governance, Public Policy, Political Science, Public Administration, Civic Education, Democracy, Leadership',
            ],

            [
                'name' => 'Institute of Economic Affairs',
                'slug' => 'institute-of-economic-affairs',
                'acronym' => 'iea',
                'logo' => 'images/logos/iea.png',
                'price' => '99.99',
                'active' => 1,
                'startDate' => '2023-06-21',
                'endDate' => '2023-06-26',
                'about' => 'The Institute of Economic Affairs (IEA) is a prestigious executive education program that offers a one-week intensive certificate training in Economics Affairs. The program is facilitated by an international faculty with expertise in different areas of economics, ensuring a comprehensive learning experience for participants.

                This program is designed to cater to the needs of professionals who are already in leadership roles as well as non-professionals who aspire to become leaders in various spheres of influence in society. It provides an immersive and interdisciplinary experience that helps individuals and organizations to enhance their impact and expand their reach.

                Through this program, participants can sharpen their leadership skills and deepen their understanding of the principles of economics. By doing so, they can increase their effectiveness and make a more sustainable impact on their organizations and communities. The program covers key areas such as micro and macroeconomics, trade and globalization, financial management, and economic policy, among others.

                In addition to the rigorous academic curriculum, the IEA provides a range of opportunities for participants to interact with industry experts and thought leaders. This allows them to gain insights into the latest trends and developments in the field of economics, as well as best practices for driving growth and innovation.

                Overall, the IEA is an excellent opportunity for individuals and organizations seeking to enhance their understanding of economics and its impact on the global economy. The program provides a transformative experience that will enable participants to sharpen their influence, expand their sphere of influence, and deepen their impact, making it more sustainable.',
                'overview' => 'Resource management and allocation towards the thriving of everyone and everything is yet to be explored to its greatest possibility. This institute introduces the concept of theonomy which at best exploits the natural resources',
                'seo' => 'Economic Affairs, Economics, Economic Development, Economic Policy, Macroeconomics, Microeconomics, Business Strategy',
            ],
            [
                'name' => 'College of Sustainable Transformation & Development',
                'slug' => 'college-of-sustainable-transformation-and-development',
                'acronym' => 'costrad',
                'logo' => 'images/logos/costrad.png',
                'price' => '599.99',
                'active' => 1,
                'startDate' => '2023-07-14',
                'endDate' => '2023-07-19',
                'about' => 'Costrad',
                'overview' => 'Higher Education was primarily developed with theology as the queen of the sciences whereby students first studied theology and thereafter any other discipline. Almost all universities were Christian with the study of',
                'seo' => 'Sustainable Development, Environmental Science, Green Technology, Renewable Energy, Climate Change, Circular Economy, Corporate Sustainability',
            ],

            [
                'name' => 'Education, Training & Development Institute',
                'slug' => 'education-training-and-development-institute',
                'acronym' => 'etadi',
                'logo' => 'images/logos/etadi.png',
                'price' => '99.990',
                'active' => 1,
                'startDate' => '2023-08-09',
                'endDate' => '2023-08-14',
                'about' => 'Etadi',
                'overview' => 'Current educational modes are based on the Industrial revolution which has since been outmoded. A new educational paradigm that goes beyond literacy and numeracy is not only necessary but urgent in preparing citizens of a given',
                'seo' => 'Education, Training, Development, Adult Learning, Instructional Design, Curriculum Development, E-learning',
            ],

            [
                'name' => 'Futuristic Institute of Revolutionary Science & Technology',
                'slug' => 'futuristic-institute-of-revolutionary-science-and-technology',
                'acronym' => 'first',
                'logo' => 'images/logos/first.png',
                'price' => '99.99',
                'active' => 1,
                'startDate' => '2023-09-27',
                'endDate' => '2023-10-02',
                'about' => 'First',
                'overview' => 'The Futuristic Institute of Science and Technology is a one-week intensive certificate training on  methodical, interdisciplinary, and comprehensive examination of social, technical, and other environmental trends in science and technology with an eye towards predicting future societal dynamics.',
                'seo' => 'Science, Technology, Innovation, Futuristic, Robotics, Artificial Intelligence, Quantum Computing, Space Exploration',
            ],

            [
                'name' => 'Media of Communication Institute',
                'slug' => 'media-of-communication-institute',
                'acronym' => 'moci',
                'logo' => 'images/logos/moci.png',
                'price' => '99.99',
                'active' => 1,
                'startDate' => '2023-11-15',
                'endDate' => '2023-11-20',
                'about' => 'Moci',
                'overview' => 'There are various medium through which information is disseminated. Together they are known as media of communication. In an information age, it is critical to be abreast with how this sphere of influence works.',
                'seo' => 'Media, Communication, Journalism, Public Relations, Advertising, Digital Marketing, Mass Communication',
            ],

            [
                'name' => 'Institute of Arts, Sports and Cultural Development',
                'slug' => 'institute-of-arts-sports-and-cultural-development',
                'acronym' => 'ioasc',
                'logo' => 'images/logos/ioasc.png',
                'price' => '99.99',
                'active' => 1,
                'startDate' => '2023-12-06',
                'endDate' => '2023-12-11',
                'about' => 'Ioasc',
                'overview' => 'Arts, Sport and Culture have a massive economic contribution and general appeal that can be creatively employed for greater good.
                The Arts are almost as old as human history and so would be sport. Every culture has both aspects of expression associated with most profound thoughts and existential realities. As such, understanding the artistry range; Strategic contribution of the Arts to development; Responsibility base in art education are critical to our identity.',
                'seo' => 'Arts, Sports, Culture, Creativity, Performance, Music, Dance, Theater, Visual Arts',
            ]

        ];

        foreach ($data as $item) {
            Institute::create($item);
        }
    }
}
