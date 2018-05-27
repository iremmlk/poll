# poll
Kocaeli university open source lab yii2 blog module

Proje Açıklamaları

1)İlk olarak projemi oluşturmak için yerel makine kurdum.Yerel makinem portal.kouosl:8383/ olarak oluşturulmuştur.

2)Projemin ismi poll'dur.Twitter sosyal medya hesabın da bulunan anket tarzı soru ve seçeneklerin bulunduğu oylama yapılan bir uygulamadır.Bu uygulama almak istediğiniz
veya değerlendirilmesini istediğiniz ürün için oylama oluşturabilir, değerlendirebilirsiniz.Oylama yapmak için 2 seçeneğiniz bulunmaktadır.Bunun sayısını "seçenek ekle"
menüsü ile sayısını artırabilirsiniz.

3)Modülümün arayüzü bulunan index sayfasına ulaşmak için http://portal.kouosl:8383/admin/poll/questiontable adresine girebilirsiniz.Burada değerlendirmek istediğiniz
soruyu oluşturabilirsiniz.

4)Seçenekleri oluşturmak için http://portal.kouosl:8383/admin/poll/answertable sayfasına tıklayabilirsiniz.Burada oluşturduğunuz soruların seçeneklerini girebilirsiniz.

5)Modülümü kullanmak için herhangi bir izin gerekmemektedir.

6)Modülümdeki migration içerisinde toplam iki tane tablom bulunmaktadır.
  
  -Birinci tablomun ismi questiontable.Bu tabloda :
   -girilicek sorunun Id si,
   -soru
   -soruyu oluşturan ve
   -sorunun oluşturulma tarihi yer almaktadır.

  -İkinci tablomun ismi answertable.Bu tabloda :
   -Id,
   -girilicek seçeneklerin Id si ve,
   -cevaplar yer almaktadır.

  -Bu iki tabloda bulunan Id'ler foreign key ile birbirine bağlanmaştır.





