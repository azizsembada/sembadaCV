<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SubTitle extends Seeder
{
    public function run()
    {
        $subTitle = [
            [
                'key' => 'hero',
                'alias'  => 'Sub Title Hero',
                'value' => "Let's Build Something Great Together.",
                'ord' => 1,
            ],
            [
                'key' => 'bio',
                'alias'  => 'Sub Title Bio',
                'value' => "I'm Abdullah Aziz Sembada. Creative Web Designer And Developer With More Than 5 Years Experience. I Design Your Website.",
                'ord' => 2,
            ],
            [
                'key' => 'desc_bio',
                'alias'  => 'Deskripsi Bio',
                'value' => "whereas multidisciplinary intellectual capital. Distinctively synergize market-driven master and prospective channels. Dramatically drive an expanded array of expertise with modern technology. Completely cultivate standardized manufactured. Continue transform process centric systems rather than compelling growth strategies. Energistically streamline low-risk high-yield supply chains via scalable intellectual capital.",
                'ord' => 3,
            ],
            [
                'key' => 'main_skills',
                'alias'  => 'Sub Title Main Skills',
                'value' => "Some of my main skills I love to work with.",
                'ord' => 4,
            ],
            [
                'key' => 'services',
                'alias'  => 'Sub Title Services',
                'value' => "I am offering My Customers very Special Services and Solutions and Here are My main Services.",
                'ord' => 5,
            ],
            [
                'key' => 'portfolio',
                'alias'  => 'Sub Title Portfolio',
                'value' => "Some of My Awesome Previous Work in Web Designing , And front end development",
                'ord' => 6,
            ],
            [
                'key' => 'desc_hire_me',
                'alias'  => 'Deskripsi Hire Me',
                'value' => "I am available for Freelance hire",
                'ord' => 7,
            ],
            [
                'key' => 'hire_me',
                'alias'  => 'Sub Title Hire Me',
                'value' => "Let's Work Together Indeed!",
                'ord' => 8,
            ],
            [
                'key' => 'contact',
                'alias'  => 'Sub Title Contact',
                'value' => "Keep In Touch",
                'ord' => 9,
            ],
            [
                'key' => 'desc_contact',
                'alias'  => 'Sub Title Contact',
                'value' => "Here You can find me , Ask me about Anything . or Hire Me Just Feel free to Contact Me",
                'ord' => 10,
            ],
        ];

        foreach ($subTitle as $data) {
            // insert semua data ke tabel
            $this->db->table('sub_title')->insert($data);
        }
    }
}
