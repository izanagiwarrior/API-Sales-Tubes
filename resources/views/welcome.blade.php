<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sales</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Logo -->
    <link rel="icon" href="images/Ximi Store (New Logo).png" type="image/x-icon">
</head>

<body>
    <header class="main-header" data-aos="fade-out">
        <h1><span>Sales</span> API</h1>
        <p>"Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time." </p>
        <p>-Thomas Edison</p>
        <small class="text-danger"></small>
    </header>

    <main class="container">
        <section class="card" data-aos="flip-up">
            <img src="images/Diluc.png" alt="" />
            <div>
                <h3 class="text-danger">Pesanan | Order</h3>
                <p style="text-align:justify;">
                    <span class="text-danger">Pesanan</span> adalah permintaan hendak membeli (supaya dikirim, dibuatkan dan sebagainya).
                    Arti lainnya dari <span class="text-danger">pesanan</span>
                    adalah barang yang dipesan. Contoh: jumlah dan mutu barang itu tidak sesuai dengan pesanan.
                </p>
                <a href="api/order" class="btn btn-danger">API : Order</a>
                <a href="/order" class="btn btn-danger">CURD : Order</a>
            </div>
        </section>

        <section class="card" data-aos="slide-left">
            <img src="images/Keqing.png" alt="" />
            <div>
                <h3 style='color: #6610f2;'>Konsumen | Consumen</h3>
                <p style="text-align:justify;">
                    <span style='color: #6610f2;'>Konsumen</span> adalah setiap orang pemakai barang atau jasa yang tersedia dalam masyarakat, baik bagi kepentingan diri sendiri,
                    keluarga, orang lain, maupun makhluk hidup lain dan tidak untuk diperdagangkan Jika tujuan pembelian produk tersebut untuk
                    dijual kembali (Jawa: kulakan), maka dia disebut pengecer atau distributor. Kegiatan pelaku <span style='color: #6610f2;'>konsumen</span> ini disebut dengan konsumsi.
                    Kepentingan <span style='color: #6610f2;'>konsumen</span> adalah memenuhi kebutuhannya dengan memperhitungkan keterjangkauan daya belinya.
                </p>
                <a href="api/consumen" class="btn" style="background-color:#6610f2;">API : Consumen</a>
                <a href="/consumen" class="btn" style="background-color:#6610f2;">CURD : Consumen</a>
            </div>
        </section>

        <section class="card" data-aos="slide-right">
            <img src="images/Albedo.png" alt="" />
            <div>
                <h3 style='color: #fd7e14;'>Penjual | Seller</h3>
                <p style="text-align:justify;">
                    <span style='color: #fd7e14;'>Penjual</span> adalah Orang yang menjual barang / jasa nya ke <span style='color: #6610f2;'> Konsumen / pembeli</span>.
                    Dan <span style='color: #fd7e14;'>penjual</span> mempertemukan dengan <span style='color: #6610f2;'>pembeli</span>.
                </p>
                <a href="api/seller" class="btn" style="background-color:#fd7e14;">API : Seller</a>
                <a href="/seller" class="btn" style="background-color:#fd7e14;">CURD : Seller</a>
            </div>
        </section>

        <section class="card" data-aos="slide-left">
            <img src="images/Venti.png" alt="" />
            <div>
                <h3 class="text-success">Produk | Product</h3>
                <p style="text-align:justify;">
                    <span class="text-success">Produk</span> secara umum adalah segala sesuatu yang mampu dihasilkan dari proses produksi berupa
                    <span class="text-success">barang</span> ataupun <span class="text-success">jasa</span> yang nantinya bisa diperjualbelikan di pasar.
                </p>
                <a href="api/product" class="btn btn-success">API : Product</a>
                <a href="/product" class="btn btn-success">CURD : Product</a>
            </div>
        </section>
    </main>
    <p class="text-secondary" style="text-align:center;">Author : M. Faiz Triputra</p>
    {{--
    Source :
    -> https://github.com/michalsnik/aos
    -> https://www.youtube.com/watch?v=ptfUwPJbGlQ
    -> https://codepen.io/bradtraversy/pen/bGbREWg
    -> https://genshin-impact.fandom.com/
    All Copyrights Reserved. Thanks !
    --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: "750"
        });
    </script>
</body>

</html>