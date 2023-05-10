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
</head>
    <body>
        <section>
            <header>
                <a href="index.html"><img src="img/kdlogo.png" class="logo"> </a>
                <div class="menu-toggle" onclick="toggleMenu()"></div>
                <ul class="nav">
                    <li class="Anasayfa"><a href="index.html">Anasayfa</a></li>
                    <li class="kurumsal"><a href="hakkimizda.html">Kurumsal</a></li>
                    <li class="kurumsal"><a href="sıkcasorulansorular">{{-- <a href="index.html#Faq"> --}}Sık Sorulan Sorular</a></li>
                    <li class="devlettesfik"><a href="projeler.html">Devlet Teşfikleri</a></li>
                    <li class="iletisim"><a href="iletisim.html">İletişim</a></li>
                    <div class="teklifvegiris">
                            <a class="teklif" href="teklifal.html">
                                Teklif Al
                            </a>
                            <a class="giris" href="whois.html">
                                Giriş Yap
                            </a>
                    </div>
                </ul>
            </header>
        </section>
        <div class="content">
            <div class="left">
                <img class="mainpageimg" src="img/mainpage.png"> 
            </div>
            <div class =right>
                <h2> Kentsel Dönüşümün<br>En Kolay Yolu.</h2>
                <a href="binasakingiris" class="btn1"> Ev Sahibi ></a>
                <a href="firmagiris" class="btn2"> Firma ></a>
            </div>
        </div>
        <script>
            function toggleMenu() {
                const menuToggle = document.querySelector('.menu-toggle');
                menuToggle.classList.toggle('active');
                const nav = document.querySelector('.nav');
                nav.classList.toggle('active');              
            }
            </script>
            <div class="container">
                <h2>En Kolay - En Güvenilir - En Hızlı</h2>
                <div class="line"></div>
                <p>EVİNİN KENTSEL DÖNÜŞÜME GİRMESİ <BR>ARTIK TEK PARMAĞININ UCUNDA<br></p>
                <a href="#girisyap.html" class="btn-hementıkla">Anlaşmaya Başla--></a>
                <div class="line"></div>
                <div class="image-container">
                    <img src="img/anlaşma.jpeg" class="anlasma"> 
                </div>
              </div>
              <!-- WHATSAPP İCON <a href="https://wa.me/whatsappphonenumber" target="_blank" class="whatsapp-support"><img src="img/pngtree-whatsapp-social-media-icon-design-template-vector-png-image_3654884-removebg-preview.png"></a> -->
              <div class="containernasılcalısır">
                <h2>Neler Yapıyoruz ?</h2>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="img/onlarcasorun.png" />
                        <p>Komşularınızla oylamalar Yapın <br> Tüm süreci tek bir platformdan şeffaf olarak yönetin.</p>
                      </div>
                      <div class="swiper-slide">
                        <a href="index.html">  <img src="img/qrcode.png"></a>
                        <p>İster Web Sitesi üzerinden ister<br> ÇOK YAKINDA uygulamamız üzerinde kentsel dönüşümün keyfini çıkarın.</p>
                      </div>
                      <div class="swiper-slide">
                        <a href="index.html"><img src="img/hizmetler.png" /></a>
                        <p>Tek bir platformdan Eviniz ile ilgili tüm teklifleri ve süreçleri yönetin <br> Güvenli ve Hızlı şekilde dönüşümün tadına varın.</p>
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="page3" id="faq">
                    <div class="card">
                     <h1> Sıkça Sorulan Sorular</h1>
                     <div class="accordion-item">
                         <button class="toggle-btn">
                             <span class ="title">
                                 What is the purpose of this website?
                             </span>
                             <i class ="fas fa-angle-down"></i>
                             <i class="fas fa-angle-up"></i>
                         </button>
                         <p class ="response"> Lore kdlşaldksaşlkdlşsakdlşaskdlşaklşsdklaşksdşlaksdlşkasşdlkasşldkalşskdşlaskdşlas</p>
                     </div>
                     <div class="accordion-item">
                         <button class="toggle-btn">
                             <span class ="title">
                                 What is the purpose of this website?
                             </span>
                             <i class ="fas fa-angle-down"></i>
                             <i class="fas fa-angle-up"></i>
                         </button>
                         <p class ="response"> Lore kdlşaldksaşlkdlşsakdlşaskdlşaklşsdklaşksdşlaksdlşkasşdlkasşldkalşskdşlaskdşlas</p>
                    </div>
                    <div class="accordion-item">
                     <button class="toggle-btn">
                         <span class ="title">
                             What is the purpose of this website?
                         </span>
                         <i class ="fas fa-angle-down"></i>
                         <i class="fas fa-angle-up"></i>
                     </button>
                     <p class ="response"> Lore kdlşaldksaşlkdlşsakdlşaskdlşaklşsdklaşksdşlaksdlşkasşdlkasşldkalşskdşlaskdşlas</p>
                 </div>
                 <div class="accordion-item">
                     <button class="toggle-btn">
                         <span class ="title">
                             What is the purpose of this website?
                         </span>
                         <i class ="fas fa-angle-down"></i>
                         <i class="fas fa-angle-up"></i>
                     </button>
                     <p class ="response"> Lore kdlşaldksaşlkdlşsakdlşaskdlşaklşsdklaşksdşlaksdlşkasşdlkasşldkalşskdşlaskdşlas</p>
                 </div>
                </div>
                <div class="newspages">
                    <h3> Devlet Teşfikleri </h3>
                    <div class="newscards">
                      <img src="img/kentselhaber1.jpeg" class="arsa">
                      <div class="contentone">
                        <h2> 9080 Kanuna göre kentsel dönüşüm yapılacak binalara daire başına 1.250.000 Tl Verilcektir. <br> <br> <br> Tüm teşfikleri görmek için tıklayın..</h5>
                      </div>
                   </div>
                </div>
                <div class = "news">
                    <h2>Haberler</h2>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img src="img/kentselhaber2.webp" />
                            <p>Türkiye depremin yaralarını sarmaya çalışırken <br> bir yandan da önlem kapsamında binaların yenilenmesi ve güçlendirilmesi adına 81 ilde çalışmalar başladı <br> Detayları görmek için hemen tıkla..</p>
                          </div>
                          <div class="swiper-slide">
                            <a href="index.html">  <img src="img/kentselhaber3.webp"></a>
                            <p>İster Web Sitesi üzerinden ister<br> İki ilde 2012'de çıkarılan 6306 sayılı Afet Riski Altındaki Alanların Dönüştürülmesi Hakkında Kanun uyarınca, kentsel dönüşüm çalışmaları başlatıldı. Bugüne kadar, Elazığ'da 1.632 bina riskli olarak tespit edildi. <br> Devamı ve daha fazlası için hemen tıkla..</p>
                          </div>
                        <div class="swiper-pagination"></div>
                    </div>
                 </div>
                 <footer class="footer-distributed">

                    <div class="footer-left">
              
                      <h3>Kentseldonus.com</h3>
              
                      <p class="footer-links">
                        <a href="#" class="link-1">Ana Sayfa</a>
                        
                        <a href="#">Kurumsal</a>
                      
                        <a href="#">Devlet Teşfikleri</a>
                      
                        <a href="#">İletişim</a>
                        
                        <a href="#">Teklif Al</a>
                      </p>
              
                      <p class="footer-company-name">Kentsel Dönüş Teknoloji A.Ş © 2023</p>
                    </div>
              
                    <div class="footer-center">
              
                      <div>
                        <i class="fa fa-map-marker"></i>
                        <p><span>Bulvar cad. No:20</span> Beşiktaş , Istanbul</p>
                      </div>
              
                      <div>
                        <i class="fa fa-phone"></i>
                        <p>444 42 42</p>
                      </div>
              
                      <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:info@kentseldonus.com">info@kentseldonus.com</a></p>
                      </div>
              
                    </div>
              
                    <div class="footer-right">
              
                      <p class="footer-company-about">
                        <span>Kentsel Dönüş</span>
                            Kentseldonus.com <br>
                            Mülkünüze değer katar
                      </p>
              
                      <div class="footer-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                      </div>
                    </div>
                  </footer>
            <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
            <script src="js/script.js"></script>
            </div>
        </body>
</html>