<?php
/**
 * posts.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - functions.php içerisinde oluşturacağınız `getRandomPostCount` fonksiyonunuza min
 * ve max değerleri gönderip bu fonksiyondan rastgele bir tam sayı elde etmeniz
 * gerekiyor. (min ve max için istediğiniz değerleri seçebilirsiniz. Random bir
 * tam sayı elde etmek için `rand` (https://www.php.net/manual/en/function.rand.php)
 * fonksiyonunu kullanabilirsiniz.)
 *
 * - Elde ettiğiniz bu sayıyı da kullanarak `getLatestPosts` fonksiyonunu
 * çalıştırmalısınız. Bu fonksiyondan aldığınız diziyi kullanarak `post.php` betik
 * dosyasını döngü içinde dahil etmeli ve her yazı için detayları göstermelisiniz.
 */
//functions.php'yi include ediyoruz. Once secmemizin sebebi tekrar tekrar include edersek fonksiyonlar karisiyor.
require_once "functions.php";
//min ve max degerlerini kendim atadim. Sayfada minimum 3 post maksimum 10 post olacak.
$min = 3;
$max = 10;
$randomPostCount = getRandomPostCount($min, $max);

$posts = getLatestPosts($randomPostCount);
//post.php'deki kurallara gore postlarimizi ekrana yaziyoruz.
foreach($posts as $id => $post){
    $title = $post["title"];
    $type = $post["type"];
    include "post.php";
}