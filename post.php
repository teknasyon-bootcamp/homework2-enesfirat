<?php

/**
 * post.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * > Dikkat: Bu dosya hem direk çalıştırılabilir hem de `posts.php` dosyasında
 * > 1+ kez içe aktarılmış olabilir.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - $id değişkeni yoksa "1" değeri ile tanımlanmalı, daha önceden bu değişken
 * tanımlanmışsa değeri değiştirilmemeli. (Kontrol etmek için `isset`
 * (https://www.php.net/manual/en/function.isset.php) kullanılabilir.)
 * - $id için yapılan işlemin aynısı $title ve $type için de yapılmalı. (İstediğiniz
 * değerleri verebilirsiniz)
 * - Bir sonraki adımda ilgili içerik gösterilmeden önce bir div oluşturulmalı ve
 * bu div $type değerine göre arkaplan rengi almalıdır. (urgent=kırmızı,
 * warning=sarı, normal=arkaplan yok)
 * - `getPostDetails` fonksiyonu tetiklenerek ilgili içeriğin çıktısı gösterilmeli.
 */
require_once "functions.php"; //Karisiklik olmasini onlemek icin require once kullandim.

/*$id $type $title degiskenlerine deger atanmamissa post.php yalniz basina calisamayacak.
Bu yuzden eger deger atanmamissa sirasiyla 1, "urgent" ve "Yazi" degerlerini atadim.
*/
if (isset($id)==false){
    $id = 1;
}
if (isset($type)==false){
    $type = "urgent";
}
if (isset($title)==false){
    $title = "Yazi";
}
//$type degerine gore arkaplan rengi belirlendi.
$backgroundColor;
if ($type == "urgent"){
    $backgroundColor = "red";
}
elseif ($type == "warning"){
    $backgroundColor = "yellow";
}
elseif ($type == "normal"){
    $backgroundColor = "white";
}?><!--Postun bir div icine yazdirilmasini sagliyoruz. -->
    <div style="background-color:<?php echo "$backgroundColor";?>">
    <?php getPostDetails($id, $title);?>
    </div>