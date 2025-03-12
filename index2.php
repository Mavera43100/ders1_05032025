<?php
 //sadece php kodları var
 if(2%2==0){
     echo "<h1>2 sayısı çifttir.</h1>";
 }
 else{
     echo "<h1>2 sayısı tektir.</h1>";
 }

// yada
  // burada ise php ve html etiketleri içiçe kullanıldı.
  // php yazarken html'ye geçmek istiyorsak php kapanış etiketini kullacağız. tekrar php'ye geçeceksek yine php başlangıç etiketini kullanacağız.
    // php kodlarından sonra html kodları yoksa php bitiş etiketi kullanılmayabilir.
    
 if(2%2==0):?>
    <h1>2 sayısı çifttir.</h1>
<?PHP ELSE: ?>
    <h1>2 sayısı tektir.</h1>
<?php endif; 


$title="Merhaba Dünya";
 echo "<h5>$title</h5>"; 
 echo "<h5>".$title."</h5>"; 
 echo "<h5>",$title,"</h5>"; 
 echo '<h5>$title</h5>'; 

