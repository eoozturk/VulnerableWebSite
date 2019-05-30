### Vulnerable (Zayıf) Web Uygulamaları Geliştirilmesi
Kasıtlı olarak bırakılmış güvenlik zafiyetlerini (vulnerability) içeren zayıf (vulnerable) web uygulamaları, uygulamalı siber güvenlik eğitimlerinde önemli bir rol oynamaktadır.
Kendini geliştirmek isteyen kişiler, yasal olmayan bir şekilde gerçek sistemlere saldırmadan bu tip uygulamalar üzerinde öğrendiklerini tecrübe ederek kendilerini geliştirebilmektedirler.
Bu projenin amacı ülkemizdeki siber güvenlik derslerinde kullanılabilecek bir düzeyde vulnerable web uygulamaları geliştirmektir. Bunun için sadece üzerinde zafiyetler bulunan bir web uygulaması geliştirmek yeterli değildir,
bu uygulamadaki zafiyetlerin neden kaynaklandığının ve bu zafiyetlerin nasıl sömürüleceğinin (exploitation) de açık ve anlaşılır bir şekilde dokümantasyonun yapılması gereklidir.

### SQL Injection
SQL Injection web uygulamalarında ki en ciddi açıkların başında gelir. Özellikle frameworkler ve ORM (Object Relational Mapping) gibi ekstra 
veritabanı katmanlarının popülerleşmesi ile eskisine göre bugünlerde biraz daha az görülmektedir. SQL Injection veritabanından ve dilden
bağımsız olarak her türlü uygulama-veritabanı  ilişkisine sahip sistemde bulunabilir ve bu veritabanlarının bir
açığı  değildir. SQL  Injection‟  dan  korunmak web geliştiricisinin görevidir.

Web uygulamalarında bir çok işlem için kullanıcıdan alınan veri ile dinamik SQL cümlecikleri oluşturulur. Mesela “SELECT * FROM Products” örnek SQL cümleciği basit şekilde veritabanından web uygulamasına tüm ürünleri döndürecektir.
Bu SQL cümlecikleri oluşturulurken araya sıkıştırılan herhangi bir meta- karakter SQL Injection‟ a neden olabilir.

### Meta-Karakter Nedir?
Meta-karakter bir program için özel anlamı olan karakterlere verilen isimdir. Örnek olarak C temelli C#, Javascript, PHP gibi dillerde (\) backslash karakteri bir meta-karakterdir.
Compiler (derleyici) ya da Interpreter (yorumlayıcı) bu karakteri görünce ondan sonraki karakteri ona göre işler. SQL‟ için kritik metakarakter („) tek tırnak‟ tır. Çünkü iki tek tırnağın arası string olarak algılanır.
Diğer bir önemli meta-karakter ise (;) noktalı virgüldür, satırın bittiğini ve yeni satır başladığını bildirir.

### XSS – (Cross Site Scripting)
XSS (Siteler arası betik çalıştırma) zafiyeti, saldırganın html, css, javascript ile hazırlamış olduğu zararlı kod parçalarının hedef kullanıcının(kurbanın) browserında izinsiz olarak çalıştırmasına imkan tanıyan bir web uygulama güvenliği zafiyetidir.
Başka bir deyişle; bir uygulamada bulunan XSS zafiyeti saldırgana, hedef kullanıcının tarayıcısında zararlı kod çalıştırma imkanı tanır. Bu imkan neticesinde saldırgan, hedef kullanıcının oturum bilgilerini, ekran görüntüsünü,
tuş girişleri gibi bilgileri alabilir, uygulama içeriğinin manipüle edebilir. Bu zafiyet istismar edilirken bazen kurbanın insiyatifine bağlı olurken(Reflected ve DOM based türlerinde) bazen de saldırgan, kurban ile muhattap olmadan da zafiyetten etkilenmesini sağlayabilir.

Zafiyet neden kaynaklanmaktadır? 
XSS saldırıların en temel nedeni kullanıcılardan alınan inputların hiçbir filtrelemeden geçmeden işleme tabi tutulmasıdır. Bu inputlar;
1. kullanıcıdan form elemanları aracılığıyla alınan bir değer olabilir(search, login, register etc.),
2. get metoduyla gönderilen bir değer olabilir,
3. http headerlerı ile gönderilen bir değer olabilir,
4. cookie, session id değerleri olabilir,
5. bir file upload kısmında dosyanın kendisi veya dosyanın adı olabilir.

Özetle; kullanıcıdan sunucuya giden herhangi bir verinin bir filtreleme işlemine tabi tutulmadan doğrudan kullanılmasından kaynaklanır.
Karşıdaki her zaman sıradan bir son kullanıcı olmayabilir. Bu hiçbir zaman göz ardı edilmemelidir.
Geliştirilen her uygulama için kullanıcıları saldırgan olarak düşünüp uygulamayı o yönde geliştirmek gerekir.

XSS Türleri?
XSS saldırısında amaç; hedef kullanıcının tarayıcısında bir şekilde zararlı kod çalışmaktır. Bu amaca ulaşmak için bir kaç farklı yöntem bulunmaktadır.
Bu farklılıktan dolayı xss saldırıları 3 türe ayrılmıştır.
1. Reflected XSS: Reflected XSS saldırısında; kurbanın, hedef siteye istek yapması için kullanacağı bağlantıda(link) zararlı kod parçası bulundurmasıdır.
İstek yapılırken bu zararlı kod ifa edilir ve dönen cevap saldırganın saldırganın kontrolunde olan bir uzak sunucuya gönderilir.
Burada önemli olan nokta; zafiyetin istismar edilmesi tamamen kullanıcının insiyatifine kalan bir durumdur.
Yani kullanıcı zararlı kod içeren bağlantıya tıklamadığı sürece zafiyetten etkilenmeyecektir.
Ayrıca diğer türlerine oranla en çok karşılaşılan xss saldırı türüdür.
2. DOM Based XSS: type-0 xss olarak da bilinen bu xss türü, client side olup diğer iki türün(persistent ve reflected) aksine çok farklı bir mekanizmaya sahiptir.
3. Stored(Persistent) XSS: Kullanıcıdan alınan verinin yeterli filtrelemeden geçmemesi sonucunda veri tabanına kayıt edildikten sonra kayıt edilen bu veri başka
bir yerde kullanılmak üzere veri tabanından çekileceği sırada ortaya çıkan bir xss zafiyet türüdür. Diğer türlerine oranla çok daha tehlikelidir.
Çünkü bu xss zafiyet türünde zararlı kod veri tabanına kayıt edilir. Bu da şu anlama gelmektedir; Sisteme kayıtlı olan kullanıcılar zafiyetten etkilenen
sayfayı ziyaret ettikleri anda oturum bilgilerini farkında olmadan saldırgana kaptırırlar. Tehlikeli olan nokta tam da burasıdır. Saldırganın kimseyle muhattap olmamasıdır.
Diğer xss türlerinde saldırgan, kullanıcılara ilgili bağlantıya bir şekilde istek yaptırtmaya çalışır ama burada böyle bir durum söz konusu değildir.
Payloadın kendisi sitenin veri tabanında kayıtlı zaten. Sadece payloadın select edileceği sayfayı kullanıcın ziyaret etmesi yeterli.
Bu durumda sadece bir kişi veya bir grup değil sistemde kayıtlı olan herkes zafiyetten etkilenmiş olur.

### Command Injection
Command Injection, yani komut enjeksiyonu saldırganın zafiyet barındıran bir uygulama üzerinden hedef sistemde dilediği komutları çalıştırabilmesine denir.
Komut ile kastedilen şey Windows'ta CMD ve Linux'ta Terminal pencerelerine girilen sistem komutlarıdır. Literatürde Shell kodlaması diye de geçer.
Bu zafiyet saldırganın komut satırına ulaşmasını(cmd/terminal) ulaşmasını ve sistemi istismar edebilecek bazı komutları çalıştırmasına sebebiyet verebiliyor.
Log dosyalarını okuma, işletim sisteminde yeni bir kullanıcı oluşturup yetkilendirme vs… Ping atma ve DNS sorgulama sistemleri gibi hem windows hemde
linux sistemlerde bazı web uygulamaları çeşitli fonksiyonları yerine getirebilmek için komutlara ihtiyaç duyuyor.
İşte tam olarak bu tip sistemlerdeki güvenlik eksikliği Command injection zafiyetine sebebiyet veriyor.
Command Injection saldırısı büyük oranda yetersiz input denetleme mekanizması nedeniyle gerçekleşmektedir.
