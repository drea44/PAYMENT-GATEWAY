<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>LANY Concert</title>

<script src="https://cdn.tailwindcss.com"></script>

<style>
body {
    font-family: Arial, sans-serif;
}
</style>

</head>

<body class="bg-white">

<!-- NAVBAR -->
<nav class="flex justify-between items-center px-10 py-4 bg-white border-b">

    <!-- LEFT LOGO -->
    <div class="flex items-center space-x-6 font-bold">
        <span class="text-xl">LIVE NATION</span>
        <span class="text-lg">TEM PRESENTS</span>
    </div>

    <!-- RIGHT MENU -->
    <div class="space-x-6 text-sm">
        <a href="#news">News</a>
        <a href="#ticket">Tickets</a>
        <a href="#">Terms</a>
        <a href="#">Promoter</a>
        <a href="#">Contact Us</a>
    </div>

</nav>

<!-- HERO -->
<section class="relative">

    <img src="https://images.unsplash.com/photo-1497032205916-ac775f0649ae"
         class="w-full h-[600px] object-cover grayscale">

    <!-- TEXT LEFT -->
    <div class="absolute inset-0 flex items-center">

        <div class="text-white px-16">

            <h1 class="text-6xl font-light mb-4 tracking-wide">
                soft by LANY
            </h1>

            <p class="text-xl mb-6">the world tour</p>

            <div class="text-3xl font-light">
                10.29.26 <br>
                10.30.26
            </div>

            <h2 class="text-5xl font-bold mt-4">
                JAKARTA
            </h2>

            <p class="text-2xl mt-2">
                Indonesia Arena
            </p>

        </div>

    </div>

</section>

<!-- NEWS -->
<section id="news" class="max-w-5xl mx-auto py-16 px-6 text-gray-800 leading-relaxed">

    <p class="mb-6">
        <strong>LANY</strong> have quietly cracked the mainstream on their own terms as one of the most ubiquitous,
        unpredictable, and undeniable alternative rock bands of this era. Tallying billions of streams, selling out
        legendary arenas, and earning widespread critical acclaim.
    </p>

    <p class="mb-6">
        LANY released their brand new album <strong>“Soft”</strong> and continues to expand their global tour,
        delivering unforgettable performances worldwide.
    </p>

    <p>
        Their last album <strong>a beautiful blur (2023)</strong> debuted on global charts and continues to dominate.
    </p>

</section>

<!-- VIDEOS -->
<section class="bg-gray-100 py-16">

    <h2 class="text-center text-4xl mb-10 font-light">Videos</h2>

    <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto px-6">

        <iframe class="w-full h-60"
            src="https://www.youtube.com/embed/7kWZ0v0v9fY"></iframe>

        <iframe class="w-full h-60"
            src="https://www.youtube.com/embed/3AtDnEC4zak"></iframe>

        <iframe class="w-full h-60"
            src="https://www.youtube.com/embed/dQw4w9WgXcQ"></iframe>

    </div>

</section>

</body>
</html>