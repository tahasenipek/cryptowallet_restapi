<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title> KentselDönüş</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/@materielsymbols/core@2.2.2/dist/materielsymbols.min.css">
    <script src="https://unpkg.com/@materielsymbols/core@2.2.2/dist/materielsymbols.min.js"></script>
    <!-- font-awesome --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kodchasan:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <section>
        <header>
            <a href="index.html"><img src="img/kdlogo.png" class="logo"> </a>
            <div class="menu-toggle" onclick="toggleMenu()"></div>
            <ul class="nav">
                <li class="Anasayfa"><a href="index.html">Anasayfa</a></li>
                <li class="kurumsal"><a href="hakkimizda.html">Kurumsal</a></li>
                <li class="kurumsal"><a href="hakkimizda.html">Sık Sorulan Sorular</a></li>
                <li class="devlettesfik"><a href="projeler.html">Devlet Teşfikleri</a></li>
                <li class="iletisim"><a href="iletisim.html">İletişim</a></li>
                <div class="teklifvegiris">
                        <a class="teklif" href="teklifal.html">
                            Teklif Al
                        </a>
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profil v
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" {{-- href="{{ route('profile.show') }}" --}}>Ayarlar</a>
                                <a class="dropdown-item" href="{{ url('userlogout') }}">Çıkış Yap</a>
                            </div>
                        </div>
                </div>
            </ul>
        </header>
    </section>
    <div class="h3-text">
            <h3> Henüz binanıza dair bilgi bulunmuyor!! <br> Lütfen Yeni bir bina ekleyin yada daha önce kayıt olan binanıza katılın.
            </h3>
    </div>
        <div class="whois-page">
            <div class="whois-btn">
                <a href="{{ url('binaekle') }}" class="btn-content">Bina Ekle +</a>
            </div>
            <div class="whois-btn">
                <a href="{{ url('binayakatil') }}" class="btn-content"> Mevcut Binaya Katıl +</a>
            </div>
        </div>
</body>