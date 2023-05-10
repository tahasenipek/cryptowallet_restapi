
    var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    });

    window.addEventListener('load', () => {
        
        const buttons = document.querySelectorAll('.toggle-btn');

        buttons.forEach(buttonE1 => {

            buttonE1.addEventListener('click', function () {
                
                /* Check if clicked elemet is closed */
                const isCurrentClosed =!this.classList.contains('opened');

                /* Close all accordions */
                buttons.forEach(e1 => e1.classList.remove('opened'));
                
                /* if the current clicked element is close, then open if adding */

                if (isCurrentClosed) {
                    this.classList.add('opened');
                }
            })
        })     
    });
    
    const iller = [
        { name: 'İstanbul', code: '34', ilceler: ['Adalar', 'Arnavutköy', 'Ataşehir', 'Avcılar', 'Bağcılar', 'Bahçelievler', 'Bakırköy', 'Başakşehir', 'Bayrampaşa', 'Beşiktaş', 'Beykoz', 'Beylikdüzü', 'Beyoğlu', 'Büyükçekmece', 'Çatalca', 'Çekmeköy', 'Esenler', 'Esenyurt', 'Eyüp', 'Fatih', 'Gaziosmanpaşa', 'Güngören', 'Kadıköy', 'Kağıthane', 'Kartal', 'Küçükçekmece', 'Maltepe', 'Pendik', 'Sancaktepe', 'Sarıyer', 'Silivri', 'Sultanbeyli', 'Sultangazi', 'Şile', 'Şişli', 'Tuzla', 'Ümraniye', 'Üsküdar', 'Zeytinburnu'] },
        { name: 'Ankara', code: '06', ilceler: ['Akyurt', 'Altındağ', 'Ayaş', 'Bala', 'Beypazarı', 'Çamlıdere', 'Çankaya', 'Çubuk', 'Elmadağ', 'Etimesgut', 'Evren', 'Gölbaşı', 'Güdül', 'Haymana', 'Kahramankazan', 'Kalecik', 'Keçiören', 'Kızılcahamam', 'Mamak', 'Nallıhan', 'Polatlı', 'Pursaklar', 'Sincan', 'Şereflikoçhisar'] },
        { name: 'İzmir', code: '35', ilceler: ['Aliağa', 'Balçova', 'Bayındır', 'Bayraklı', 'Bergama', 'Beydağ', 'Bornova', 'Buca', 'Çeşme', 'Çiğli', 'Dikili', 'Foça', 'Gaziemir', 'Güzelbahçe', 'Karabağlar', 'Karaburun', 'Karşıyaka', 'Kemalpaşa', 'Kınık', 'Kiraz', 'Konak', 'Menderes', 'Menemen', 'Narlıdere', 'Ödemiş', 'Seferihisar', 'Selçuk', 'Tire', 'Torbalı', 'Urla'] },
        { name: 'Bursa', code: '16', ilceler: ['Gemlik', 'İnegöl', 'İznik', 'Karacabey', 'Keles', 'Mudanya', 'Mustafakemalpaşa', 'Nilüfer', 'Orhaneli', 'Orhangazi', 'Osmangazi', 'Yenişehir', 'Yıldırım'] },
        { name: 'Adana', code: '01',    ilceler: ['Aladağ', 'Ceyhan', 'Çukurova', 'Feke', 'Karaisalı', 'Karataş', 'Kozan', 'Pozantı', 'Saimbeyli', 'Sarıçam', 'Seyhan', 'Tufanbeyli', 'Yumurtalık', 'Yüreğir']},
        { name: 'Adıyaman', code: '02',ilceler: ['Besni', 'Çelikhan', 'Gerger', 'Gölbaşı', 'Kahta', 'Merkez', 'Samsat', 'Sincik', 'Tut']},
        { name: 'Afyonkarahisar', code: '03',ilceler: ['Başmakçı', 'Bayat', 'Bolvadin', 'Çay', 'Çobanlar', 'Dazkırı', 'Dinar', 'Emirdağ', 'Evciler', 'Hocalar', 'İhsaniye', 'İscehisar', 'Kızılören', 'Merkez', 'Sandıklı', 'Sinanpaşa', 'Sultandağı', 'Şuhut']},
        { name: 'Ağrı', code: '04', ilceler: ['Diyadin', 'Doğubayazıt', 'Eleşkirt', 'Hamur', 'Merkez', 'Patnos', 'Taşlıçay', 'Tutak'] },
        { name: 'Amasya', code: '05', ilceler: ['Göynücek', 'Gümüşhacıköy', 'Hamamözü', 'Merkez', 'Merzifon', 'Suluova', 'Taşova'] },
        { name: 'Antalya', code: '07', ilceler: ['Akseki', 'Aksu', 'Alanya', 'Demre', 'Döşemealtı', 'Elmalı', 'Finike', 'Gazipaşa', 'Gündoğmuş', 'İbradı', 'Kaş', 'Kemer', 'Kepez', 'Konyaaltı', 'Korkuteli', 'Kumluca', 'Manavgat', 'Muratpaşa', 'Serik'] },
        { name: 'Artvin', code: '08', ilceler: ['Ardanuç', 'Arhavi', 'Borçka', 'Hopa', 'Murgul', 'Merkez', 'Şavşat', 'Yusufeli'] },
        { name: 'Aydın', code: '09', ilceler: ['Bozdoğan', 'Buharkent', 'Çine', 'Didim', 'Efeler', 'Germencik', 'İncirliova', 'Karacasu', 'Karpuzlu', 'Koçarlı', 'Köşk', 'Kuşadası', 'Kuyucak', 'Nazilli', 'Söke', 'Sultanhisar', 'Yenipazar'] },
        { name: 'Balıkesir', code: '10', ilceler: ['Altıeylül', 'Ayvalık', 'Balya', 'Bandırma', 'Bigadiç', 'Burhaniye', 'Dursunbey', 'Edremit', 'Erdek', 'Gömeç', 'Gönen', 'Havran', 'İvrindi', 'Karesi', 'Kepsut', 'Manyas', 'Marmara', 'Savaştepe', 'Sındırgı', 'Susurluk'] },
        { name: 'Bilecik', code: '11', ilceler: ['Bozüyük', 'Gölpazarı', 'İnhisar', 'Osmaneli', 'Pazaryeri', 'Söğüt', 'Yenipazar'] },
        { name: 'Bingöl', code: '12', ilceler: ['Adaklı', 'Genç', 'Karlıova', 'Kiğı', 'Solhan', 'Yayladere', 'Yedisu'] },
        { name: 'Bitlis', code: '13', ilceler: ['Adilcevaz', 'Ahlat', 'Güroymak', 'Hizan', 'Mutki', 'Tatvan'] },
        { name: 'Bolu', code: '14', ilceler: ['Dörtdivan', 'Gerede', 'Göynük', 'Kıbrıscık', 'Mengen', 'Merkez', 'Mudurnu', 'Seben', 'Yeniçağa'] },
        { name: 'Burdur', code: '15', ilceler: ['Ağlasun', 'Altınyayla', 'Bucak', 'Çavdır', 'Çeltikçi', 'Gölhisar', 'Karamanlı', 'Kemer', 'Merkez', 'Tefenni', 'Yeşilova'] },
        { name: 'Çanakkale', code: '17', ilceler: ['Ayvacık', 'Bayramiç', 'Biga', 'Bozcaada', 'Çan', 'Eceabat', 'Ezine', 'Gelibolu', 'Gökçeada', 'Lapseki', 'Merkez', 'Yenice'] },
        { name: 'Çankırı', code: '18', ilceler: ['Atkaracalar', 'Bayramören', 'Çerkeş', 'Eldivan', 'Ilgaz', 'Kızılırmak', 'Korgun', 'Kurşunlu', 'Orta', 'Şabanözü', 'Yapraklı'] },
        { name: 'Çorum', code: '19', ilceler: ['Alaca', 'Bayat', 'Boğazkale', 'Dodurga', 'İskilip', 'Kargı', 'Laçin', 'Mecitözü', 'Oğuzlar', 'Ortaköy', 'Osmancık', 'Sungurlu', 'Uğurludağ'] },
        { name: 'Denizli', code: '20', ilceler: ['Acıpayam', 'Babadağ', 'Baklan', 'Bekilli', 'Beyağaç', 'Bozkurt', 'Buldan', 'Çal', 'Çameli', 'Çardak', 'Çivril', 'Güney', 'Honaz', 'Kale', 'Sarayköy', 'Serinhisar', 'Tavas'] },
        { name: 'Diyarbakır', code: '21', ilceler: ['Bağlar', 'Bismil', 'Çermik', 'Çınar', 'Çüngüş', 'Dicle', 'Eğil', 'Ergani', 'Hani', 'Hazro', 'Kayapınar', 'Kocaköy', 'Kulp', 'Lice', 'Silvan', 'Sur', 'Yenişehir'] },
        { name: 'Edirne', code: '22', ilceler: ['Enez', 'Havsa', 'İpsala', 'Keşan', 'Lalapaşa', 'Meriç', 'Süloğlu', 'Uzunköprü'] },
        { name: 'Elazığ', code: '23', ilceler: ['Ağın', 'Alacakaya', 'Arıcak', 'Baskil', 'Karakoçan', 'Keban', 'Kovancılar', 'Maden', 'Palu', 'Sivrice'] },
        { name: 'Erzincan', code: '24', ilceler: ['Çayırlı', 'İliç', 'Kemah', 'Kemaliye', 'Otlukbeli', 'Refahiye', 'Tercan', 'Üzümlü'] },
        { name: 'Erzurum', code: '25', ilceler: ['Aşkale', 'Aziziye', 'Çat', 'Hınıs', 'Horasan', 'İspir', 'Karaçoban', 'Karayazı', 'Köprüköy', 'Narman', 'Oltu', 'Olur', 'Palandöken', 'Pasinler', 'Pazaryolu', 'Şenkaya', 'Tekman', 'Tortum', 'Uzundere'] },
        { name: 'Eskişehir', code: '26', ilceler: ['Alpu', 'Beylikova', 'Çifteler', 'Günyüzü', 'Han', 'İnönü', 'Mahmudiye', 'Mihalıççık', 'Mihalgazi', 'Odunpazarı', 'Sarıcakaya', 'Seyitgazi', 'Sivrihisar'] },
        { name: 'Gaziantep', code: '27', ilceler: ['Araban', 'İslahiye', 'Karkamış', 'Nizip', 'Nurdağı'] },
        { name: 'Giresun', code: '28', ilceler: ['Alucra', 'Bulancak', 'Dereli', 'Espiye', 'Eynesil', 'Görele', 'Keşap', 'Piraziz', 'Şebinkarahisar', 'Tirebolu', 'Yağlıdere'] },
        { name: 'Gümüşhane', code: '29', ilceler: ['Kelkit', 'Köse', 'Kürtün', 'Şiran', 'Torul'] },
        { name: 'Hakkari', code: '30', ilceler: ['Çukurca', 'Şemdinli', 'Yüksekova'] },
        { name: 'Hatay', code: '31', ilceler: ['Antakya', 'Arsuz', 'Defne', 'Dörtyol', 'Erzin', 'Hassa', 'İskenderun', 'Kırıkhan', 'Kumlu', 'Reyhanlı', 'Samandağ', 'Yayladağı'] },
        { name: 'Isparta', code: '32', ilceler: ['Aksu', 'Atabey', 'Eğirdir', 'Gelendost', 'Gönen', 'Keçiborlu', 'Senirkent', 'Sütçüler', 'Şarkikaraağaç', 'Uluborlu', 'Yalvaç', 'Yenişarbademli'] },
        { name: 'Mersin', code: '33', ilceler: ['Akdeniz', 'Anamur', 'Aydıncık', 'Bozyazı', 'Çamlıyayla', 'Erdemli', 'Gülnar', 'Mezitli', 'Mut', 'Silifke', 'Tarsus', 'Toroslar', 'Yenişehir'] },
        { name: 'Kars', code: '36', ilceler: ['Arpaçay', 'Digor', 'Kağızman', 'Kars Merkez', 'Sarıkamış', 'Selim', 'Susuz'] },
        { name: 'Kastamonu', code: '37', ilceler: ['Abana', 'Araç', 'Azdavay', 'Bozkurt', 'Cide', 'Çatalzeytin', 'Daday', 'Devrekani', 'İnebolu', 'Küre', 'Merkez', 'Taşköprü', 'Tosya'] },
        { name: 'Kayseri', code: '38', ilceler: ['Bünyan', 'Develi', 'Felahiye', 'İncesu', 'Pınarbaşı', 'Sarıoğlan', 'Sarız', 'Tomarza', 'Yahyalı', 'Yeşilhisar'] },
        { name: 'Kırklareli', code: '39', ilceler: ['Babaeski', 'Demirköy', 'Kofçaz', 'Lüleburgaz', 'Pehlivanköy', 'Pınarhisar', 'Vize'] },
        { name: 'Kırşehir', code: '40', ilceler: ['Çiçekdağı', 'Kaman', 'Kırşehir Merkez', 'Mucur'] },
        { name: 'Kocaeli', code: '41', ilceler: ['Başiskele', 'Çayırova', 'Darıca', 'Derince', 'Dilovası', 'Gebze', 'Gölcük', 'İzmit', 'Kandıra', 'Karamürsel', 'Kartepe'] },
        { name: 'Konya', code: '42', ilceler: ['Akşehir', 'Beyşehir', 'Bozkır', 'Cihanbeyli', 'Çumra', 'Doğanhisar', 'Ereğli', 'Hadim', 'Ilgın', 'Kadınhanı', 'Karapınar', 'Kulu', 'Sarayönü', 'Selçuklu', 'Seydişehir', 'Yunak'] },
        { name: 'Kütahya', code: '43', ilceler: ['Altıntaş', 'Domaniç', 'Emet', 'Gediz', 'Merkez', 'Simav', 'Tavşanlı'] },
        { name: 'Malatya', code: '44', ilceler: ['Akçadağ', 'Arapgir', 'Arguvan', 'Darende', 'Doğanşehir', 'Doğanyol', 'Hekimhan', 'Kale', 'Kuluncak', 'Pütürge', 'Yazıhan', 'Yeşilyurt'] },
        { name: 'Manisa', code: '45' , ilceler: ['Ahmetli', 'Akhisar', 'Alaşehir', 'Demirci', 'Gölmarmara', 'Gördes', 'Kırkağaç', 'Kula', 'Salihli', 'Sarıgöl', 'Saruhanlı', 'Selendi', 'Soma', 'Şehzadeler', 'Turgutlu', 'Yunusemre'] },
        { name: 'Kahramanmaraş', code: '46', ilceler: ['Afşin', 'Andırın', 'Çağlayancerit', 'Dulkadiroğlu', 'Ekinözü', 'Elbistan', 'Göksun', 'Nurhak', 'Onikişubat', 'Pazarcık', 'Türkoğlu'] },
        { name: 'Karabük', code: '78', ilceler: ['Eflani', 'Eskipazar', 'Karabük Merkez', 'Ovacık', 'Safranbolu', 'Yenice'] },
        { name: 'Karaman', code: '70', ilceler: ['Ayrancı', 'Başyayla', 'Ermenek', 'Karaman Merkez', 'Kazımkarabekir', 'Sarıveliler'] },
        { name: 'Kars', code: '36', ilceler: ['Akyaka', 'Arpaçay', 'Digor', 'Kağızman', 'Kars Merkez', 'Sarıkamış', 'Selim', 'Susuz'] },
        { name: 'Kastamonu', code: '37', ilceler: ['Abana', 'Ağlı', 'Araç', 'Azdavay', 'Bozkurt', 'Cide', 'Çatalzeytin', 'Daday', 'Devrekani', 'Doğanyurt', 'Hanönü', 'İhsangazi', 'İnebolu', 'Kastamonu Merkez', 'Küre', 'Pınarbaşı', 'Seydiler', 'Şenpazar', 'Taşköprü', 'Tosya'] },
        { name: 'Kayseri', code: '38', ilceler: ['Akkışla', 'Bünyan', 'Develi', 'Felahiye', 'Hacılar', 'İncesu', 'Kocasinan', 'Melikgazi', 'Özvatan', 'Pınarbaşı', 'Sarıoğlan', 'Sarız', 'Talas', 'Tomarza', 'Yahyalı', 'Yeşilhisar'] },
        { name: 'Kırıkkale', code: '71', ilceler: ['Bahşili', 'Balışeyh', 'Çelebi', 'Delice', 'Karakeçili', 'Keskin', 'Kırıkkale Merkez', 'Sulakyurt', 'Yahşihan'] },
        { name: 'Kırklareli', code: '39', ilceler: ['Babaeski', 'Demirköy', 'Kırklareli Merkez', 'Kofçaz', 'Lüleburgaz', 'Pehlivanköy', 'Pınarhisar', 'Vize'] },
        { name: 'Kırşehir', code: '40', ilceler: ['Akçakent', 'Akpınar', 'Boztepe', 'Kaman', 'Kırşehir Merkez', 'Mucur'] },
        { name: 'Kilis', code: '79', ilceler: ['Elbeyli', 'Kilis Merkez', 'Musabeyli', 'Polateli'] },
        { name: 'Kocaeli', code: '41', ilçeler: ['Başiskele', 'Çayırova', 'Darıca', 'Dilovası', 'Gebze', 'Gölcük', 'Kandıra', 'Karamürsel', 'Kartepe', 'Körfez'] },
        { name: 'Konya', code: '42', ilçeler: ['Akşehir', 'Beyşehir', 'Bozkır', 'Cihanbeyli', 'Çumra', 'Doğanhisar', 'Ereğli', 'Hadim', 'Ilgın', 'Kadınhanı', 'Karapınar', 'Kulu', 'Sarayönü', 'Selçuklu', 'Seydişehir', 'Yunak'] },
        { name: 'Kütahya', code: '43', ilceler: ['Altıntaş', 'Domaniç', 'Emet', 'Gediz', 'Kütahya Merkez', 'Simav', 'Tavşanlı'] },
        { name: 'Malatya', code: '44', ilceler: ['Akçadağ', 'Arapgir', 'Arguvan', 'Battalgazi', 'Darende', 'Doğanşehir', 'Doğanyol', 'Hekimhan', 'Kale', 'Kuluncak', 'Pütürge', 'Yazıhan', 'Yeşilyurt'] },
        { name: 'Manisa', code: '45', ilceler: ['Ahmetli', 'Akhisar', 'Alaşehir', 'Demirci', 'Gördes', 'Kırkağaç', 'Kula', 'Salihli', 'Sarıgöl', 'Saruhanlı', 'Selendi', 'Soma', 'Şehzadeler', 'Turgutlu', 'Yunusemre'] },
        { name: 'Mardin', code: '47', ilceler: ['Derik', 'Kızıltepe', 'Mazıdağı', 'Midyat', 'Nusaybin', 'Ömerli', 'Savur', 'Dargeçit'] },
        { name: 'Mersin', code: '33', ilceler: ['Akdeniz', 'Anamur', 'Aydıncık', 'Bozyazı', 'Çamlıyayla', 'Erdemli', 'Gülnar', 'Mut', 'Silifke', 'Tarsus'] },
        { name: 'Muğla', code: '48', ilceler: ['Bodrum', 'Datça', 'Fethiye', 'Kavaklıdere', 'Köyceğiz', 'Marmaris', 'Menteşe', 'Milas', 'Ula', 'Yatağan'] },
        { name: 'Muş', code: '49', ilceler: ['Bulanık', 'Malazgirt', 'Muş Merkez', 'Varto'] },
        { name: 'Nevşehir', code: '50', ilceler: ['Acıgöl', 'Avanos', 'Derinkuyu', 'Gülşehir', 'Hacıbektaş', 'Kozaklı', 'Nevşehir Merkez', 'Ürgüp'] },
        { name: 'Niğde', code: '51', ilceler: ['Altunhisar', 'Bor', 'Çamardı', 'Çiftlik', 'Niğde Merkez', 'Ulukışla'] },
        { name: 'Ordu', code: '52', ilceler: ['Akkuş', 'Aybastı', 'Fatsa', 'Gölköy', 'Gülyalı', 'Gürgentepe', 'İkizce', 'Kabadüz', 'Kabataş', 'Korgan', 'Kumru', 'Mesudiye', 'Perşembe', 'Ulubey', 'Ünye'] },
        { name: 'Osmaniye', code: '80', ilceler: ['Bahçe', 'Kadirli', 'Osmaniye Merkez', 'Düziçi', 'Hasanbeyli', 'Sumbas', 'Toprakkale'] },
        { name: 'Rize', code: '53', ilceler: ['Ardeşen', 'Çamlıhemşin', 'Çayeli', 'Fındıklı', 'İkizdere', 'Kalkandere', 'Pazar', 'Rize Merkez', 'Güneysu', 'Derepazarı', 'Hemşin'] },
        { name: 'Sakarya', code: '54', ilceler: ['Adapazarı', 'Akyazı', 'Arifiye', 'Erenler', 'Ferizli', 'Geyve', 'Hendek', 'Karapürçek', 'Karasu', 'Kaynarca', 'Kocaali', 'Pamukova', 'Sapanca', 'Serdivan', 'Söğütlü', 'Taraklı'] },
        { name: 'Samsun', code: '55', ilceler: ['Alaçam', 'Bafra', 'Çarşamba', 'Havza', 'Kavak', 'Ladik', 'Terme', 'Vezirköprü', 'Asarcık', 'Ondokuzmayıs', 'Salıpazarı', 'Tekkeköy', 'Ayvacık', 'Yakakent'] },
        { name: 'Siirt', code: '56', ilceler: ['Baykan', 'Eruh', 'Kurtalan', 'Pervari', 'Siirt Merkez', 'Şirvan', 'Tillo'] },
        { name: 'Sinop', code: '57', ilceler: ['Ayancık', 'Boyabat', 'Durağan', 'Erfelek', 'Gerze', 'Saraydüzü', 'Sinop Merkez', 'Türkeli'] },
        { name: 'Sivas', code: '58', ilceler: ['Divriği', 'Gemerek', 'Gürün', 'Hafik', 'İmranlı', 'Kangal', 'Koyulhisar', 'Suşehri', 'Şarkışla', 'Ulaş', 'Yıldızeli', 'Zara', 'Sivas Merkez'] },
        { name: 'Şanlıurfa', code: '63', ilceler: ['Akçakale', 'Birecik', 'Bozova', 'Ceylanpınar', 'Halfeti', 'Harran', 'Hilvan', 'Siverek', 'Suruç', 'Viranşehir', 'Şanlıurfa Merkez'] },
        { name: 'Şırnak', code: '73', ilceler: ['Beytüşşebap', 'Cizre', 'Güçlükonak', 'İdil', 'Silopi', 'Şırnak Merkez', 'Uludere'] },
        { name: 'Tekirdağ', code: '59', ilceler: ['Çerkezköy', 'Çorlu', 'Ergene', 'Hayrabolu', 'Malkara', 'Muratlı', 'Saray', 'Süleymanpaşa', 'Şarköy', 'Marmaraereğlisi', 'Tekirdağ Merkez'] },
        { name: 'Tokat', code: '60', ilceler: ['Almus', 'Artova', 'Erbaa', 'Niksar', 'Reşadiye', 'Sulusaray', 'Tokat Merkez', 'Turhal', 'Zile'] },
        { name: 'Trabzon', code: '61', ilceler: ['Akçaabat', 'Araklı', 'Arsin', 'Çaykara', 'Maçka', 'Of', 'Ortahisar', 'Sürmene', 'Tonya', 'Vakfıkebir', 'Yomra', 'Beşikdüzü', 'Şalpazarı', 'Çarşıbaşı', 'Dernekpazarı', 'Düzköy', 'Hayrat', 'Köprübaşı'] },
        { name: 'Tunceli', code: '62', ilceler: ['Çemişgezek', 'Hozat', 'Mazgirt', 'Nazımiye', 'Ovacık', 'Pertek', 'Pülümür', 'Tunceli Merkez'] },
        { name: 'Uşak', code: '64', ilceler: ['Banaz', 'Eşme', 'Karahallı', 'Sivaslı', 'Ulubey', 'Uşak Merkez'] }, 
        { name: 'Van', code: '65', ilceler: ['Başkale', 'Çatak', 'Erciş', 'Gevaş', 'Gürpınar', 'İpekyolu', 'Muradiye', 'Özalp', 'Tuşba', 'Bahçesaray', 'Çaldıran', 'Edremit', 'Saray'] },
        { name: 'Yalova', code: '77', ilceler: ['Altınova', 'Armutlu', 'Çınarcık', 'Çiftlikköy', 'Termal', 'Yalova Merkez'] },
        { name: 'Yozgat', code: '66', ilçeler: ['Akdağmadeni', 'Boğazlıyan', 'Çayıralan', 'Çekerek', 'Saraykent', 'Sorgun', 'Şefaatli', 'Yerköy', 'Yozgat Merkez'] },
        { name: 'Zonguldak', code: '67', ilçeler: ['Alaplı', 'Çaycuma', 'Devrek', 'Ereğli', 'Gökçebey', 'Kilimli', 'Kozlu', 'Karadeniz Ereğli', 'Zonguldak Merkez'] }
        ];


    const ilSelect = document.getElementById('il');
    const ilceSelect = document.getElementById('ilce');

    function updateIlceler() {
    // İlçe seçeneklerini temizle
    ilceSelect.innerHTML = '';

    // Seçilen il'in ilçelerini al
    const selectedIl = iller.find(il => il.code === ilSelect.value);
    const ilceOptions = selectedIl.ilceler || [];

    // İlçe seçeneklerini oluştur ve ekle
    ilceOptions.forEach(ilce => {
      const option = document.createElement('option');
      option.value = ilce;
      option.textContent = ilce;
      ilceSelect.appendChild(option);
    });
  }

  // İl seçeneğine seçenekleri ekle
  iller.forEach(il => {
    const option = document.createElement('option');
    option.value = il.code;
    option.textContent = il.name;
    ilSelect.appendChild(option);
  });

  // İl seçeneğinde değişiklik olduğunda ilçe seçeneklerini güncelle
  ilSelect.addEventListener('change', updateIlceler);

  // Sayfa yüklendiğinde ilçe seçeneklerini güncelle

  window.onload = function() {
    updateIlceler();
  };

  function formatNumber() {
    let number = document.getElementById("bina-ismi").value;
    number = number.replace(/\D/g, ""); // sadece rakamları al
    number = number.slice(0, 9); // sadece ilk 9 rakamı al
    number = number.replace(/(\d{3})(\d{3})(\d{3})/, "$1-$2-$3"); // 000-000-000 formatına dönüştür
    document.getElementById("bina-ismi").value = number; // input alanına yeni değeri yaz
  }


  $(document).ready(function() {
    $('.dropdown-toggle').click(function(e) {
      e.stopPropagation();
      $('.dropdown-menu').toggle();
    });
  
    $(document).click(function(e) {
      if (!$(e.target).is('.dropdown-toggle, .dropdown-toggle *')) {
        $('.dropdown-menu').hide();
      }
    });
  });
  
