<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'kiar',
        //     'email' => 'myblog@gmail.com',
        //     'password' => bcrypt('king')
        // ]);
        // User::create([
        //     'name' => 'mljan',
        //     'email' => 'LJblog@gmail.com',
        //     'password' => bcrypt('luthfi')
        // ]);
        Post::create([
            'title' => 'Isekai Maou to Shoukan Shoujo no Dorei Majutsu',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'IMSS',
            'excerpt' => 'Takuma Sakamoto adalah seorang pemain game MMORPG yang sangat kuat. Sakit kuatnya, ia dipanggil sebagai Raja Iblis oleh para pemain lainnya.',
            'body' => '<p>Takuma Sakamoto adalah seorang pemain game MMORPG yang sangat kuat. Sakit kuatnya, ia dipanggil sebagai Raja Iblis oleh para pemain lainnya.</p> Suatu hari, Takuma dipanggil ke dunia lain (isekai), sebuah dunia yang mirip dengan game MMORPG favoritnya. Di dunia ini, Takuma bertemu dengan dua orang gadis misterius, mereka mengaku telah memanggl Takuma ke dunianya. Ketika kedua gadis itu mencoba menjadikan Takuma sebagai budak mereka, saat itulah sihir pemantul milik Takuma aktif. Keadaan pun terbalik, di mana kedua gadis itu lah yang justru menjadi budaknya. <p>Sejak kejadian ini, dimulailah kisah sang Raja Iblis Takuma yang penuh fantasi dan komedi.</p>'
        ]);
        Post::create([
            'title' => 'Otonari no Tenshi-sama ni Itsunomanika Dame Ningen ni Sareteita Ken',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'OTIDN',
            'excerpt' => 'Kehidupan yang sangat berbeda dari seorang gadis cantik dan sempurna bernama Mahiru Shiina dengan tetangga-nya yang hidup tidak teratur bernama Amane.',
            'body' => '<p>Kehidupan yang sangat berbeda dari seorang gadis cantik dan sempurna bernama Mahiru Shiina dengan tetangga-nya yang hidup tidak teratur bernama Amane.</p><p>Mahiru Shiina memiliki kehidupan yang sangat baik, Dia disukai oleh semua orang dan sangat cerdas dalam pembelajaran. Kemudian dia juga memiliki kebaikan hati yang sangat luar biasa serta keseharian yang sangat teratur dalam berbagai hal. Meskipun begitu, Dia juga memiliki beberapa masalah yang tidak bisa diceritakan kepada orang lain.</p><p>Disisi lain, Amane merupakan seorang pemuda biasa yang tidak terkenal dan bahkan tidak bisa mengatur kesehariannya. Tempat tinggalnya selalu kotor dan dia tidak bisa mengatur pola makannya. Pada suatu hari, Mahiru Shiina sedang murung dan berada di ayunan dengan derasnya hujan. Seketika Amane meminjamkan payung-nya untuk membantu Mahiru Shiina agar tidak terlalu kedinginan. Semua itu menjadi awal dari kisah mereka yang akan semakin panjang.</p>'
        ]);
        Post::create([
            'title' => 'In Spectre',
            'category_id' => 3,
            'user_id' => 2,
            'slug' => 'IS',
            'excerpt' => 'Seorang gadis bernama Iwanaga Kotoko, ia diculik oleh yokai atau siluman saat ia masih kecil, dan tanpa berpikir panjang ia menyetujui saat diminta untuk menjadi dewa kebijaksanaan mereka.',
            'body' => '<p>Seorang gadis bernama Iwanaga Kotoko, ia diculik oleh yokai atau siluman saat ia masih kecil, dan tanpa berpikir panjang ia menyetujui saat diminta untuk menjadi dewa kebijaksanaan mereka.</p><p>Untuk menjadi seorang dewa kebijaksanaan, Iwanaga harus menukarkan gelar tersebut dengan satu kaki dan satu matanya.Cerita ini dimulai ketika sang gadis mulai menjalankan kewajibannya sebagai dewa kebijaksanaan.Tak sendiri, Iwanaga bersama kekasihnya, Kuro Sakuragawa, mulai menyelesaikan berbagai permasalahan yang terjadi di antara para yokai atau siluman.</p>'
        ]);
        Post::create([
            'title' => 'Osananajimi ga Zettai ni Makenai',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'OZM',
            'excerpt' => 'Menceritakan tentang seorang pemuda bernama Maru yang mencintai Gadis Populer di sekolahnya. Di samping itu, Maru memiliki seorang teman masa kecil bernama Shida Kuroha yang sangat cantik dan manis. Mereka berdua berteman sejak kecil dan bahkan rumahnya dekat dan berdampingan.',
            'body' => '<p>Menceritakan tentang seorang pemuda bernama Maru yang mencintai Gadis Populer di sekolahnya. Di samping itu, Maru memiliki seorang teman masa kecil bernama Shida Kuroha yang sangat cantik dan manis. Mereka berdua berteman sejak kecil dan bahkan rumahnya dekat dan berdampingan.</p><p>Maru menyadari tentang perasaan Kuroha kepadanya dan pada akhirnya ~~~~~~~~~~~ yah Mereka bersama, Sebagai sepasang kekasih?? Sahabat??? uhh,….</p> <p>Cinta Pertama Maru adalah Kachi yang merupakan Gadis Populer di Sekolahnya dan bahkan menjadi Model tingkat Nasional. Setelah berbincang dengan temannya, Maru menyadari bahwa dirinya tidak memiliki kesempatan untuk mendapatkan cinta Kachi. Namun ia melihat sedikit “Harapan” yang mungkin bisa menggapainya. Semua Itu adalah, Senyuman manis serta kedekatan antara Maru dan Kachi.</p><p>Setelah beberapa waktu, Maru mendengar bahwa Kachi telah memiliki seorang kekasih. Ia kemudian merasa Depresi dan Strees, Pergi pulang dan menyendiri di pinggir sungai. Maru meratapi kehancuran hatinya, Menyesali semua yang telah terjadi dan pada akhirnya Kuroha muncul dan menenangkannya.</p><p>Kuroha mengatakan  “Jika itu sulit untukmu, Bagaimana kalau kita balas dendam? balas dendam, yang sangat mengerikan”. Nah kalimat tersebut akan menjadi suatu “Kejadian” yang sangat besar di antara mereka bertiga. Apa yang akan dilakukan Oleh Maru dan Kuroha ???? Saksikan Anime  Osananajimi ga Zettai ni Makenai Love Comedy untuk mengetahui semua jawabannya..</p>'
        ]);
        Category::create([
            'name' => 'Fantasy',
            'slug' => 'fantasy'
        ]);
        Category::create([
            'name' => 'School',
            'slug' => 'school'
        ]);
        Category::create([
            'name' => 'Supernatural',
            'slug' => 'supernatural'
        ]);

        // Category::factory(10)->create(); bikin 10 random kategori
    }
}
