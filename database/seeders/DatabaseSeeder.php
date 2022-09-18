<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@email.net',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'isAdmin' => true
        ]);

        $categories = ['VK', 'Instagram', 'TikTok', 'YouTube', 'Telegram', 'Twitter'];
        foreach ($categories as $category){
            \App\Models\Category::create([
                'name' => $category
            ]);
        }

        //Типы
        $types = [
            ['Лайки','Опросы','Подписчики'],
            ['Подписчики', 'Лайки', 'Просмотры','Просмотры историй', 'Прямой эфир', 'Комментарии', 'Охват публикации', 'Сохранения']
        ];

        foreach ($types as $key => $type){
            foreach ($type as $name) {
                \App\Models\Type::create([
                    'name' => $name,
                    'category_id' => $key+1
                ]);
            }
        }

        //Services
        $services = [
            [
                'type_id' => 1,
                'service_id' => 400,
                'name' => 'Лайки качественные',
                'price' => 70
            ],

            [
                'type_id' => 3,
                'service_id' => 463,
                'name' => 'Подписчики на страницу',
                'price' => 150
            ],
            [
                'type_id' => 3,
                'service_id' => 464,
                'name' => 'Друзья в профиль',
                'price' => 150
            ],
            [
                'type_id' => 3,
                'service_id' => 402,
                'name' => 'Подписчики на страницу качественные',
                'price' => 80
            ],
            [
                'type_id' => 3,
                'service_id' => 399,
                'name' => 'Друзья в профиль качественные',
                'price' => 150
            ],

            [
                'type_id' => 4,
                'service_id' => 383,
                'name' => 'Подписчики RU & ЖИВЫЕ',
                'price' => 65
            ],
            [
                'type_id' => 4,
                'service_id' => 428,
                'name' => 'Подписчики MIX REAL',
                'price' => 45
            ],
            [
                'type_id' => 4,
                'service_id' => 375,
                'name' => 'Подписчики БЕЗ ОТПИСОК',
                'price' => 45
            ],
            [
                'type_id' => 4,
                'service_id' => 263,
                'name' => 'Подписчики',
                'price' => 30
            ],

            [
                'type_id' => 5,
                'service_id' => 384,
                'name' => 'Лайки RU & ЖИВЫЕ',
                'price' => 18
            ],
            [
                'type_id' => 5,
                'service_id' => 376,
                'name' => 'Лайки [Без списаний]',
                'price' => 18
            ],
            [
                'type_id' => 5,
                'service_id' => 350,
                'name' => 'Лайки',
                'price' => 3
            ],
            [
                'type_id' => 5,
                'service_id' => 479,
                'name' => 'Лайки быстрые',
                'price' => 20
            ],
            [
                'type_id' => 5,
                'service_id' => 505,
                'name' => 'Лайки RU [30R]',
                'price' => 6.30
            ],

            [
                'type_id' => 6,
                'service_id' => 123,
                'name' => 'Просмотры видео',
                'price' => 2
            ],
            [
                'type_id' => 6,
                'service_id' => 119,
                'name' => 'Просмотры видео с охватом быстрее',
                'price' => 25
            ],

            [
                'type_id' => 7,
                'service_id' => 172,
                'name' => 'Просмотры историй (Stories)',
                'price' => 1.50
            ],
            [
                'type_id' => 7,
                'service_id' => 135,
                'name' => 'Просмотры историй (Stories)',
                'price' => 2
            ],

            [
                'type_id' => 8,
                'service_id' => 340,
                'name' => 'Зрители в прямой эфир',
                'price' => 500
            ],

            [
                'type_id' => 9,
                'service_id' => 396,
                'name' => 'Комментарии (положительные)',
                'price' => 500
            ],

            [
                'type_id' => 10,
                'service_id' => 343,
                'name' => 'Охват публикации',
                'price' => 6
            ],
            [
                'type_id' => 10,
                'service_id' => 342,
                'name' => 'Охват публикации',
                'price' => 5
            ],

            [
                'type_id' => 11,
                'service_id' => 173,
                'name' => 'Сохранения',
                'price' => 0.40
            ],
            [
                'type_id' => 11,
                'service_id' => 133,
                'name' => 'Сохранения',
                'price' => 0.60
            ]
        ];

        foreach ($services as $service){
            \App\Models\Service::create([
                'type_id' => $service['type_id'],
                'service_id' => $service['service_id'],
                'name' => $service['name'],
                'price' => $service['price']
            ]);
        }
    }
}
