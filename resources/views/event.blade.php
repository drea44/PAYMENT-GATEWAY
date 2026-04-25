<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Concert Event</title>

<script src="https://cdn.tailwindcss.com"></script>

<script src="https://app.sandbox.midtrans.com/snap/snap.js"
data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>

</head>

<body class="bg-white text-gray-800">

<!-- NAVBAR -->
<nav class="flex justify-between px-10 py-4 border-b bg-white">
    <div class="font-bold text-xl">🎟️ EventLive</div>
    <div class="space-x-6">
        <button onclick="scrollToSection('news')">News</button>
        <button onclick="scrollToSection('seat')">Seat</button>
        <button onclick="scrollToSection('ticket')">Tickets</button>
    </div>
</nav>

<!-- HERO -->
<section class="relative">

    <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063"
         class="w-full h-[500px] object-cover grayscale">

    <div class="absolute inset-0 bg-black/60"></div>

    <div class="absolute inset-0 flex items-center px-16 text-white">
        <div>
            <h1 class="text-5xl font-light">LANY LIVE 2026</h1>
            <p class="text-xl mt-4">Jakarta • Indonesia Arena</p>
        </div>
    </div>

</section>

<!-- NEWS (FINAL FIX) -->
<section id="news" class="max-w-5xl mx-auto py-16 px-6 text-[17px] leading-8 text-gray-800">

    <p class="mb-6">
        <strong class="text-black font-semibold">LANY</strong> have quietly cracked the mainstream on their own terms as one of the most ubiquitous, unpredictable, and undeniable alternative rock bands of this era. Tallying billions of streams, selling out legendary arenas, and earning widespread critical acclaim, the platinum-certified Los Angeles group consistently deliver rafter-reaching anthems anchored by airtight songcraft and the outsized personality of enigmatic frontman and songwriter Paul Jason Klein. Thus far, they’ve earned four gold singles— “Malibu Nights,” “Super Far,” “I Quit Drinking” [with Kelsea Ballerini], and “Mean It” [with Lauv]—in addition to scoring platinum status with “ILYSB.”
    </p>

    <p class="mb-6">
        LANY released their brand new album “Soft” last October (and its expanded second part “Soft 2” this March), but found time outside of the studio last year to play two special nights with The National Symphony Orchestra at The Kennedy Center in DC before headlining Seoul Jazz Festival in May. In 2026, they will canvas the globe on their “Soft World Tour”; highlights of the 300,000+ headline ticket run including first-times headlining the Intuit Dome locally in LA, Barclays Center in Brooklyn and OVO Wembley Arena in London, alongside a return to the largest indoor-arena in the world in Manila. Previously nominated for “Best Pop Tour” by Pollstar, the band’s energetic, entrancing, and ever-evolving live show continues to captivate fans on multiple continents.
    </p>

    <p>
        Their last album, <strong class="text-black">a beautiful blur (2023)</strong>, was their fifth studio album and the first to be released independently by the band. a beautiful blur debuted at #2 on Billboard’s Current Rock Albums chart, as well as #3 on their Current Alternative Albums chart, and was a TOP 5 Album in Australia, debuting at #4 on ARIA’s charts. Standout single “XXL” exploded on social media and earned performances from the band on Jimmy Kimmel Live! and the TODAY Show, before reaching #21 on the US Billboard Pop Chart / #1 on the Independent Chart.
    </p>

</section>

<!-- VIDEOS -->
<section class="bg-gray-100 py-16">
    <h2 class="text-center text-3xl mb-10">Videos</h2>

    <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto px-6">

        <a href="https://youtu.be/O78Lpo4ctSE" target="_blank" class="relative group overflow-hidden rounded-lg shadow-lg">
            <img src="https://img.youtube.com/vi/O78Lpo4ctSE/maxresdefault.jpg"
            class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="bg-white/90 p-4 rounded-full group-hover:scale-125 transition">▶</div>
            </div>
        </a>

        <a href="https://youtu.be/aiSBQIfcGEU" target="_blank" class="relative group overflow-hidden rounded-lg shadow-lg">
            <img src="https://img.youtube.com/vi/aiSBQIfcGEU/maxresdefault.jpg"
            class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="bg-white/90 p-4 rounded-full group-hover:scale-125 transition">▶</div>
            </div>
        </a>

        <a href="https://youtu.be/L7IHw86JsDE" target="_blank" class="relative group overflow-hidden rounded-lg shadow-lg">
            <img src="https://img.youtube.com/vi/L7IHw86JsDE/maxresdefault.jpg"
            class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="bg-white/90 p-4 rounded-full group-hover:scale-125 transition">▶</div>
            </div>
        </a>

    </div>
</section>

<!-- SEAT -->
<section id="seat" class="py-20 text-center">
    <h2 class="text-3xl mb-10">Select Seat</h2>

    <div class="bg-black text-white py-3 w-60 mx-auto mb-6 rounded">STAGE</div>

    <div class="flex justify-center gap-2 mb-2">
        <script>
            for(let i=1;i<=8;i++){
                document.write(`<div onclick="selectSeat(this,1000000)"
                class="seat bg-green-400 w-10 h-10 flex items-center justify-center cursor-pointer rounded">A${i}</div>`);
            }
        </script>
    </div>

    <div class="flex justify-center gap-2 mb-2">
        <script>
            for(let i=1;i<=10;i++){
                document.write(`<div onclick="selectSeat(this,500000)"
                class="seat bg-green-400 w-10 h-10 flex items-center justify-center cursor-pointer rounded">B${i}</div>`);
            }
        </script>
    </div>

    <div class="flex justify-center gap-2">
        <script>
            for(let i=1;i<=12;i++){
                document.write(`<div onclick="selectSeat(this,300000)"
                class="seat bg-green-400 w-10 h-10 flex items-center justify-center cursor-pointer rounded">C${i}</div>`);
            }
        </script>
    </div>

</section>

<!-- PAYMENT -->
<section id="ticket" class="bg-gray-100 py-16 text-center">

    <h2 class="text-3xl mb-6">Ticket</h2>

    <input id="name" placeholder="Nama" class="border p-2 mb-2"><br>
    <input id="email" placeholder="Email" class="border p-2 mb-2"><br>

    <select id="price" class="border p-2 mb-4">
        <option value="250000">Festival</option>
        <option value="1000000">VIP</option>
        <option value="500000">CAT1</option>
        <option value="300000">CAT2</option>
    </select><br>

    <button onclick="pay()" class="bg-black text-white px-6 py-2">Bayar</button>

</section>

<script>
function scrollToSection(id){
    document.getElementById(id).scrollIntoView({behavior:'smooth'});
}

function selectSeat(el, price){
    document.querySelectorAll('.seat').forEach(s=>{
        s.classList.remove('bg-red-500');
        s.classList.add('bg-green-400');
    });
    el.classList.remove('bg-green-400');
    el.classList.add('bg-red-500');
    document.getElementById('price').value = price;
}

function pay(){
    fetch('/pay',{
        method:'POST',
        headers:{
            'Content-Type':'application/json',
            'X-CSRF-TOKEN':'{{ csrf_token() }}'
        },
        body: JSON.stringify({
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            price: document.getElementById('price').value
        })
    })
    .then(res=>res.json())
    .then(data=>{
        window.snap.pay(data.token);
    });
}
</script>

</body>
</html>