<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post_
{
    private static $blog_deskripsi = [ // Membuat Data
        [
            "title" => "Tensei Kenja No Isekai Life",
            "slug" => "Tensei Kenja No Isekai Life",
            "deskripsi" => "Yuuji Sano mengalami kejadian magis saat menyelesaikan pekerjaannya di rumah. Ia langsung berada di dunia lain dan bekerja sebagai ‘Monster Tamer’ yang sulit membuatnya berpetualang. Akan tetapi ia bertemu dengan beberapa slime yang membuatnya punya kekuatan magis."
        ],
        [
            "title" => "Isekai Maou To Shoukan",
            "slug" => "Isekai Maou To Shoukan",
            "deskripsi" => "Bercerita tentang Takuma Sakamoto seorang hikkimori yang suatu hari doi pindah kedunia misterius yang bernama Cross Reverie. Selain itu ia juga mempunyai penampilan karakternya sendiri di dalam game yaitu Raja Iblis Diablo. Kemudian ada dua gadis, yaitu Rem dan Shera. Rem ini salah satu dari Ras pantherian. Sementara itu Shera merupakan seorang Elf yang mempunyai dada ukuran besar."
        ]
    ];

    public static function all() // fungsi ini untuk menampilkan keseluruhan data
    {
        // return self::$blog_deskripsi; // (cara 1)
        return collect(self::$blog_deskripsi); // (cara 2)
    }

    public static function find($slug) // fungsi ini untuk menampilkan data sesuai yang diklik user
    {
        // $all_blog = self::$blog_deskripsi; // Panggil Semua data yang ada didalam $blog_deskripsi (cara 1)
        $all_blog = static::all();
        // $post = []; // Definisi array
        // foreach ($all_blog as $blog) { // Perulangan untuk dapat menampilkan data sesuai yang diinginkan user
        //     if ($blog["slug"] === $slug) {
        //         $post = $blog;
        //     }
        // } (cara 1)
        return $all_blog->firstWhere('slug', $slug); // (cara 2)
    }
}
