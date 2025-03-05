<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merhaba Web'ciler</title>
</head>
<body>
    <?php // php başlangıç etiketi
            echo "Merhaba Web'ciler"; //tarayıcıya yazı yazdırma //ifade ve deyimler...
    ?> 
     <!-- php bitiş etiketi
     php kodları html etiketleri arasında yazılabilir.
     php kodlarından sonra html kodları yoksa php bitiş etiketi kullanılmayabilir.
     
     yorum satırı nedir?: kodlarımızı daha anlaşılır hale getirmek için yazdığımız açıklamalardır. Php yorumlayıcısı yorum satırlarını görmezden gelir.
        // # tek satırlık yorum satırı
        /* */ : çok satırlı yorum satırı    

     CTRL + K + C : Seçili alanı yorum satırı yapar.
     CTRL + K + U : Seçili alanın yorum satırını kaldırır.
     -->

     <hr> <!-- yatay çizgi ekleme -->
     <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis, consequatur aliquam hic fugit, sapiente laudantium animi rerum deserunt nulla, quod cumque dolore laboriosam excepturi consectetur illo voluptates quis obcaecati nisi!
     Quisquam doloribus sunt autem dolor molestias ipsam omnis eveniet itaque mollitia eaque nam magni eum ad dolores voluptatibus amet temporibus, libero animi tempora atque debitis ratione sed optio! Cumque, ipsa?
     </p>

     <!--  sayfa içinde birden fazla php etiketi başlatılıp bitirilebilir. 
     sayfanın başında da php kodları kullanılmıştı. sonra html ve şimdi aşağıda tekrar php kodları kullanıldı.  
     -->
     <?php
     echo "php yeniden kullanılıyor..."
     // her deyim noktalı virgül ile bitirilmelidir.son deyimden sonra başka bir php kodu yoksa kapanış etiketi noktalı virgül yerine geçer. 
     ?>

</body>
</html>