# poll
Kocaeli university open source lab yii2 blog module


Proje Açıklamaları

Projemin ismi poll'dur.Twitter sosyal medya hesabın da bulunan anket tarzı soru ve seçeneklerin bulunduğu oylama yapılan bir uygulamadır.
Bu uygulama almak istediğiniz veya değerlendirilmesini istediğiniz ürün için oylama oluşturabilir, değerlendirebilirsiniz.
Oylama yapmak için 2 seçeneğiniz bulunmaktadır.Bunun sayısını "seçenek ekle" menüsü ile sayısını artırabilirsiniz.

Poll modülü, https://github.com/kouosl/portal projesi altındaki modüllerden bir tanesidir. Bu modülün diğerleriyle ilişkisi bulunmamaktadır.

Proje Kurulumu

Yerel makine portal.kouosl:8383/ olarak oluşturulmuştur.

Portal dizini içerisindeki composer.js dosyasını açtıktan sonra "repositories" kısmına:

"type": "vcs",
"url": "https://github.com/iremmlk/poll.git"
satırlarını, "require" kısmına ise:

"kouosl/poll":"dev-master"
satırını ekleyiniz.

Daha sonra portal/backend/config/main.php ve portal/frontend/config/main.php dosyalarında "modules" kısımlarına:

'poll' => ['class' => 'kouosl\poll\Module',],
satırını ekleyiniz.

Proje veritabanlarını almak için;
terminalde proje dosyasının bulunduğu dizine geliniz. Daha sonra aşağıdaki komutu çalıştırınız:

php yii migrate --migrationPath=@vendor/kouosl/blog/migrations --interactive=0

Modülümdeki migration içerisinde toplam iki tane tablom bulunmaktadır.

   -Birinci tablomun ismi questiontable.Bu tabloda : 
   -girilicek sorunun Id si,
   -soru -soruyu oluşturan ve
   -sorunun oluşturulma tarihi yer almaktadır.

   -İkinci tablomun ismi answertable.Bu tabloda :
   -Id, 
   -girilicek seçeneklerin Id si ve,
   -cevaplar yer almaktadır.

   -Bu iki tabloda bulunan Id'ler foreign key ile birbirine bağlanmaştır.

Veritabanıyla alakalı işlemler için iki migration dosyası oluşturulmuştur.

poll tablosu için oluşturulan migration dosyası: https://github.com/iremmlk/poll/blob/master/migrations/m180523_084754_questionTable.php

poll tablosu için oluşturulan migration dosyası: https://github.com/iremmlk/poll/blob/master/migrations/m180523_084809_answerTable.php

Proje erişim linkleri

Anasayfa   http://portal.kouosl:8383/poll

Veritabanı http://portal.kouosl:8383/admin/poll/questiontable
           http://portal.kouosl:8383/admin/poll/answertable



