<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();

        // Category::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'kiar',
            'username' => 'yunero',
            'email' => 'myblog@gmail.com',
            'password' => bcrypt('king'),
        ]);
        User::create([
            'name' => 'mljan',
            'username' => 'jabbaruddin',
            'email' => 'LJblog@gmail.com',
            'password' => bcrypt('luthfi')
        ]);
        User::create([
            'name' => 'dzaki',
            'username' => 'dark-emphysist',
            'email' => 'dzaki@gmail.com',
            'password' => bcrypt('arman5')
        ]);
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
        Post::create([
            'title' => 'Kokoro Connect',
            'category_id' => 3,
            'user_id' => 3,
            'slug' => 'KC',
            'excerpt' => 'Anime Kokoro Conect bercerita tentang 5 siswa SMA yang tidak tergabung dalam klub ekskul manapun, sehingga mengharuskan mereka untuk membuat klub sendiri. Kemudian mereka memutuskan untuk membuat klub peneliti kebudayaan.',
            'body' => '<p>Anime Kokoro Conect bercerita tentang 5 siswa SMA yang tidak tergabung dalam klub ekskul manapun, sehingga mengharuskan mereka untuk membuat klub sendiri. Kemudian mereka memutuskan untuk membuat klub peneliti kebudayaan.</p><p>Seperti halnya klub-klub lainnya, mereka berusaha untuk mencari bahan pembahasan dan kemudian mereka tunjukkan ke OSIS, apa yang sudah di hasilkan oleh klub tersebut.Tapi sayangnya, suatu insiden aneh terjadi kepada mereka berlima. Insiden itu berupa sebuah ‘pertukaran jiwa’.</p><p>Setelah mengetahui bahwa mereka berlima terkadang sering bertukar jiwa, mereka pun mulai terbiasa dengan insiden itu. Namun, rasa penasaran mereka dengan kejadian itu tetap tidak hilang. Hingga akhirnya pada suatu hari, guru pembimbing mereka (yang sudah di tukar jiwanya dengan dalang yang melakukan pertukaran jiwa tersebut) memberi tahu mereka, bahwa jiwa mereka memang benar-benar bertukar.</p>'
        ]);
        Post::create([
            'title' => 'Cuunibyou demo Koi ga Shitai',
            'category_id' => 2,
            'user_id' => 2,
            'slug' => 'CKS',
            'excerpt' => 'Togashi Yuuta (富樫勇太), seorang mantan pengidap chuunibyou dengan nama alias Dark Flame Master, yang udah sembuh begitu beranjak SMA, bertekad untuk menjalani hidup SMA-nya senormal mungkin dan melupakan masa lalu sintingnya tersebut. Semuanya. SEMUA!',
            'body' => '<p>Togashi Yuuta (富樫勇太), seorang mantan pengidap chuunibyou dengan nama alias Dark Flame Master, yang udah sembuh begitu beranjak SMA, bertekad untuk menjalani hidup SMA-nya senormal mungkin dan melupakan masa lalu sintingnya tersebut. Semuanya. SEMUA!</p> <p>Pada suatu malam, dia muncul. Ya, dia, Takanashi Rikka (小鳥遊六花). Sang Jaou Shingan, Tyrant Eye.
            Pertemuan gak terduga tersebut membawa Yuuta pada sebuah kontrak dengan Rikka, sekaligus memupuskan harapan Yuuta untuk menjalani hidup normal yang diimpikannya.</p><p>Ditambah temen-temennya yang lain kayak Nibutani Shinka (丹生谷森夏), Dekomori Sanae (凸守早苗), Tsuyuri Kumin (五月七日くみん), Isshiki Makoto (一色 誠), dan kakaknya Rikka: Takanashi Touka (小鳥遊十花), maka dimulailah kegilaan baru bagi seorang Togashi Yuuta....</p>'
        ]);
        Post::create([
            'title' => 'Fuuka',
            'category_id' => 2,
            'user_id' => 3,
            'slug' => 'Fuu',
            'excerpt' => 'Bercerita tentang seorang gadis remaja bernama Akitsuki Fuuka, dimana dia adalah sosok gadis periang dan sangat jarang bersedih. Hobinya adalah mendengarkan musik, dan sangat jauh dari dunia medsos.',
            'body' => '<p>Bercerita tentang seorang gadis remaja bernama Akitsuki Fuuka, dimana dia adalah sosok gadis periang dan sangat jarang bersedih. Hobinya adalah mendengarkan musik, dan sangat jauh dari dunia medsos.</p><p>Pada suatu hari dia bertemu dengan anak laki-laki bernama Yuu Haruna. Dimana Yuu akan menjadi teman dekat Fuuka. Yuu anaknya berbeda dengan Fuuka. Bila Fuuka tidak suka main medsos, tapi Yuu sangat gila medsos. Dan pertemuan itulah yang akan mengawali kisah Fuuka selanjutnya. Dimana Fuuka dan Yuu akan membentuk sebuah band, dan juga Fuuka dan Yuu akan terjebak dalam cinta segitiga.</p>'
        ]);
        Post::create([
            'title' => 'Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'DDMMD',
            'excerpt' => 'Kota Orario menjaid tempat yang menyenangkan dan selalu ramai dikunjungi oleh orang - orang termasuk Bell Cranel, seorang pemuda yang memiliki impian menjadi seorang petualang terheabr di negeri ini. Perrtemuannya dengan Dewi Hestia membuat mimpinya menjadi sedikit lebih dekat dengan kenyataan.',
            'body' => '<p>Kota Orario menjaid tempat yang menyenangkan dan selalu ramai dikunjungi oleh orang - orang termasuk Bell Cranel, seorang pemuda yang memiliki impian menjadi seorang petualang terheabr di negeri ini. Perrtemuannya dengan Dewi Hestia membuat mimpinya menjadi sedikit lebih dekat dengan kenyataan.</p><p>Kehidupan baru yang diimpi - impikan oleh Bell Cranel akhirnya tiba juga. Ia memulai petualangannya menjelajahi Dungeon yang penuh monster berbahaya. Kematian bias mengintai kapan saja saat masuk ke dalam Dungeon.</p><p>Namun apa yang mereka dapatkan di Dungeon bisa menjadi keuntungan bagi Familynya. Kehidupan para dewa dan manusia akan terlihat dalam anime DanMachi, keduanya berusaha untuk menjalani kehidupan yang mereka inginkan.</p>'
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
        Category::create([
            'name' => 'Psycological',
            'slug' => 'psycological'
        ]);

        // Category::factory(10)->create(); bikin 10 random kategori
    }
}
