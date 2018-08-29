<?php

use App\Modules\Models\Category;
use Illuminate\Database\Seeder;

/**
 * Class CategorySeeder
 * Сиды для категорий
 * @author Aleksey Belchenkov <belchenkov.leha@mail.ru>
 */
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Верстка' => ['https://png.icons8.com/color/40/000000/bootstrap.png', 'markup', 0, 1],
            'JS' => ['https://png.icons8.com/office/40/000000/js.png', 'js', 0, 1],
            'Node.js/MongoDB' => ['https://png.icons8.com/color/40/000000/nodejs.png', 'node', 0, 1],
            'Angular' => ['https://png.icons8.com/color/40/000000/angularjs.png', 'angular', 0, 1],
            'React.js' => ['https://png.icons8.com/ios/40/000000/react-native.png', 'react', 0, 1],
            'Vue.js' => ['https://png.icons8.com/ios/40/000000/v-symbol-filled.png', 'vue', 0, 1],
            'PHP' => ['https://png.icons8.com/office/40/000000/php-logo.png', 'php', 0, 1],
            'Python' => ['https://png.icons8.com/color/40/000000/python.png', 'python', 0, 1],
            'Ruby' => ['https://png.icons8.com/color/40/000000/ruby-programming-language.png', 'ruby', 0, 0],
            'Golang' => ['https://png.icons8.com/color/40/000000/golang.png', 'go', 0, 0],
            'Mobile' => ['https://png.icons8.com/color/40/000000/two-smartphones.png', 'mobile', 0, 0],
            'Bootstrap 3/4' => ['', 'bootstrap', 1, 1],
            'Materialize' => ['', 'materialize', 1, 1],
            'JavaScript(ES6)' => ['', 'js', 2, 1],
            'JQuery' => ['', 'jquery', 2, 1],
            'Express.js' => ['', 'express', 3, 1],
            'Adonis.js' => ['', 'adonis', 3, 0],
            'Loopack.js' => ['', 'loopack', 3, 0],
            'Kraken.js' => ['', 'kraken', 3, 0],
            'MEAN' => ['', 'mean', 4, 1],
            'Angular/Firebase' => ['', 'ang_firebare', 4, 1],
            'MERN' => ['', 'mern', 5, 1],
            'Redux' => ['', 'mern', 5, 1],
            'React/Firebase' => ['', 'mern', 5, 1],
            'MEVN' => ['', 'mevn', 6, 0],
            'Vue/Firebase' => ['', 'mevn', 6, 1],
            'PHP/MySQL' => ['', 'php_mysql', 7, 1],
            'Laravel' => ['', 'laravel', 7, 1],
            'Symfony' => ['', 'symfony', 7, 0],
            'CodeIgniter' => ['', 'codeigniter', 7, 0],
            'Yii2' => ['', 'yii2', 7, 0],
            'CakePHP' => ['', 'cakephp', 7, 0],
            'Django' => ['', 'django', 8, 0],
            'Flask' => ['', 'flask', 8, 0],
            'Ruby On Rails' => ['', 'rails', 9, 0],
            'Ionic' => ['', 'ionic', 11, 0],
            'React Native' => ['', 'react_native', 11, 0],
            'PhoneGap' => ['', 'phone_gap', 11, 0],
            'Flutter' => ['', 'flutter', 11, 0]
        ];

        foreach ($categories as $k => $v) {
            Category::create([
                'name' => $k,
                'icon' => $v[0],
                'alias' => $v[1],
                'parent_id' => $v[2],
                'active' => $v[3]
            ]);
        }
    }
}
