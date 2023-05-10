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
        <form method="POST" action="{{ url('/binaekle')}}" enctype="multipart/form-data">
            @csrf
            <div class="entery-card-kaydol">
                <h2>Bina Ekleme</h2>
                <label name="resim" for="foto">Bina Resmini Ekle:</label>
                <input type="file" name="resim" id="foto">
                <label for="il">İl:</label>
                <select name="il" id="il"></select>
                <label for="ilce">İlçe:</label>
                <select name="ilce" id="ilce"></select>
                <label for="mahalle">Mahalle:</label>
                <input type="text" name="mahalle" id="mahalle">
                <label for="sokak">Sokak:</label>
                <input type="text" name="sokak" id="sokak">
                <label for="bina-ismi">Bina İsmi:</label>
                <input type="text" name="binaismi" id="bina-ismi">
                <label for="bina-no">Bina No:</label>
                <input type="text" name="binano" id="bina-no">
                <label for="kapi-no">Kapı No:</label>
                <input type="text" name="kapino" id="kapi-no">
                <label for="bina-islem">Binanıza Yapılacak İşlem:</label>
                <select name="binaislemi" id="bina-islem">
                    <option value="Kentsel donusum">Kentsel Dönüsüm</option>
                    <option value="rapor">Deprem Risk Raporu</option>
                </select>
                <label for="bina-yasi">Bina Yaşı:</label>
                <input type="text" name="binayasi" id="bina-yasi">
                <label for="bina-durumu">Bina Durumu:</label>
                <select name="binadurumu" id="bina-durumu">
                    <option value="Aktif">Aktif</option>
                    <option value="Pasif">Pasif</option>
                </select>
                <label for="oylama-orani">Oylama Oranı:</label>
                <input type="text" name="oylamaorani" id="oylama-orani">
                <label for="yetki-ismi">Yetki İsmi:</label>
                <input type="text" name="yetkiliismi" id="yetki-ismi">
                <button type="submit" class="forgot-password-btn">Ekle</button>
            </div>
        </form>
    <script src="js/script.js"></script>
</body>