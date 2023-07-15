@extends('layouts.main')
@section('style')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('container')    
    {{-- <h1 class="kuy">About Kiar</h1> --}}
    <div class="tentang-kami">
      <h2 class="mb-2">About Us</h2>
      <div class="text-2xl font-semibold">
      <p class="text-justify mb-2">Kiar adalah sebuah perusahaan web novel. Sebagai perusahaan web novel, Kiar fokus pada pengembangan dan penyediaan platform online yang memungkinkan penulis untuk menerbitkan dan membagikan karya-karya mereka dalam bentuk novel kepada pembaca di seluruh dunia melalui internet.</p><p class="text-justify mb-2">Kiar menyediakan sarana bagi penulis untuk mempublikasikan karya-karya mereka secara mandiri, tanpa melalui jalur penerbitan tradisional. Dengan demikian, Kiar memberikan kesempatan kepada penulis untuk mengekspresikan kreativitas mereka dan menjangkau audiens yang lebih luas.</p><p class="text-justify mb-2">Melalui platform Kiar, pembaca dapat menjelajahi berbagai genre dan kategori novel, membaca karya-karya dari penulis yang berbeda, memberikan ulasan dan komentar, serta berinteraksi dengan komunitas pembaca dan penulis.</p><p class="text-justify mb-2">Sebagai perusahaan web novel, Kiar bertujuan untuk memfasilitasi konektivitas antara penulis dan pembaca, mempromosikan kebebasan berekspresi, dan memperluas aksesibilitas terhadap karya-karya sastra secara global.</p>
      </div>
    </div>
    <img class="center-image" src="/image/ml.png" alt="Kiar Logo">
@endsection
