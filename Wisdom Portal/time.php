<?
header('Content-Type: text/html; charset=utf-8');
$timeid = $_GET[id];
$page = $_GET[page]; 
$timesall = file("times.txt");
$time_name = $timesall[$timeid];
$notes = file("notes.txt");
$time = file("time_not.txt");
$posfin = $time[$timeid];
$noteaut = file("note_aut.txt");
$authorsall = file("authors.txt");

if ($timeid == 0) {$posstart = 0;}
else {$posstart = $time[$timeid-1]+1;};  // нашли позиции старта и конца заметок для данного автора
$pagecount = ceil(($posfin-$posstart)/10);
?>
<html>
<head>
	<title><? echo $time_name." философия"
?>	</title>
    <script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css.css">
	<meta charset="utf-8">
    <meta name="keywords" content=' философия <? echo $time_name." , высказывания ".$time_name." , афоризмы";?>, античная мудрость, великие выказывания, мысли'>
    <meta name="description" content=' философия <? echo $time_name." , афоризмы и высказывания философов".$time_name ;?>'>
</head>
<body>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter21931969 = new Ya.Metrika({id:21931969,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/21931969" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	<div class="back">
		<div class="main">
            <div id='evr'>
				<div class="logo">
					<a href="main.php" title='На главную'><img src="logo.png"></a>
					<div class="title">	<span class="big"><b>Книга мудрости</b></span><br>
        <span class="small"><i>Вся мудрость древности и современности - здесь!</i></span>
       
                    </div>
                     <div class='top_sel'>
                    <a class='und' href='#'></a>
                               </div>
                    
                </div>
                <div id='upsided'>
            <div class="topics_head">
            	Сортировать по
            </div>
            <div class="topics">
            	<div id='author' class="sort_auth">
            		<img src="people.png">
            		<b>Авторы</b>
            	</div>
            	<div id='time' class="sort_time">
            		<img src="time.png">
            		<b>Века</b>
            	</div>
            	<a href='rand.php'><div id='random' class="sort_random">
            		<img src="random.png" width="80px">
            		<b>Случайно</b>
            	</div></a>
            </div>
            <div class="g_ad">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- The others(auth, time) -->
<ins class="adsbygoogle"
     style="display:inline-block;width:160px;height:600px"
     data-ad-client="ca-pub-5126925908843370"
     data-ad-slot="2048233846"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class="cover" style='display:none'>
                <div id='close'><img src='cross.png'></div>
                <div id='authors'>
                    <div class="title_sort" id='title_auth'>
                        <i>Авторы</i>
                    </div>
                    <div class="table_auth">
                    <table cellspacing='0' id='auth_page1'>
                        <tr class='f_ex'>
                            <td><a href='auth.php?id=81'>Абеляр Пьер</a></td>
                            <td><a href='auth.php?id=89'>Абу-ль-Фарадж</a></td>
                            <td><a href='auth.php?id=68'>Августин Аврелий</a></td>
                            <td><a href='auth.php?id=77'>Авиценна</a></td> 
                            <td><a href='auth.php?id=126'>Аддисон Джозеф</a></td>    
                            <td><a href='auth.php?id=201'>Блок А.А</a></td>
                            <td><a href='auth.php?id=78'>Ахмад Аль-Маарри</a></td>
                        </tr>
                        <tr class='f_ex'>
                            <td><a href='auth.php?id=9'>Анахарсис</a></td>
                            <td><a href='auth.php?id=88'>Анвари Аухад</a></td>
                            <td><a href='auth.php?id=17'>Антисфен</a></td>
                            <td><a href='auth.php?id=65'>Апулей</a></td>
                            <td><a href='auth.php?id=98'>Ариосто Лудовико</a></td>
                            <td><a href='auth.php?id=18'>Аристипп</a></td>
                            <td><a href='auth.php?id=30'>Аристотель</a></td>
                        </tr>
                        <tr class='f_ex'>
                            <td><a href='auth.php?id=19'>Аристофан</a></td>
                            <td><a href='auth.php?id=193'>Арнолд Мэтью</a></td>
                            <td><a href='auth.php?id=84'>Ас-Самарканди</a></td>
                            <td><a href='auth.php?id=194'>Ахматова А. А.</a></td>
                            <td><span class="letter"><b><u>Б</u></b></span></td>
                            <td><a href='auth.php?id=148'>Байрон Дж.</a></td>
                            <td><a href='auth.php?id=195'>Бальзак О.</a></td>
                        </tr>
                        <tr class='f_ex'>
                            <td><a href='auth.php?id=196'>Бальмонт К.Д.</a></td>
                            <td><a href='auth.php?id=197'>Батлер С.</a></td> 
                            <td><a href='auth.php?id=198'>Белинский В. Г.</a></td>
                            <td><a href='auth.php?id=149'>Берне Роберт</a></td>
                            <td><a href='auth.php?id=2'>Биант из Приены</a></td>
                            <td><a href='auth.php?id=31'>Бион Борисфен</a></td>
                            <td><a href='auth.php?id=200'>Бичер Генри</a></td>
                        </tr>
                        <tr class='f_ex'>
                            <td><a href='auth.php?id=94'>Боккаччо</a></td>
                            <td><a href='auth.php?id=202'>Бокль Генри</a></td>
                            <td><a href='auth.php?id=150'>Бомарше Пьер</a></td>
                            <td><a href='auth.php?id=99'>Брант С.</a></td>
                            <td><a href='auth.php?id=203'>Брехт Бертольт</a></td>
                            <td><a href='auth.php?id=112'>Бруно Джорд.</a></td>
                            <td><a href='auth.php?id=204'>Брюсов В. Я.</a></td>
                        </tr>
                        <tr class='f_ex'>
                            <td><a href='auth.php?id=205'>Букер Т. В.</a></td>
                            <td><a href='auth.php?id=106'>Буонаротти М.</a></td>
                            <td><a href='auth.php?id=90'>Бэкон Роджер</a></td>
                            <td><span class="letter"><b>В</b></span></td>
                            <td><a href='auth.php?id=75'>Василий I</a></td>
                            <td><a href='auth.php?id=69'>Василий Велик</a></td>
                            <td><a href='auth.php?id=113'>Вега Карпио</a></td>
                        </tr>
                        <tr class='f_ex'>
                            <td><a href='auth.php?id=42'>Вергилий М.</a></td>
                            <td><a href='auth.php?id=206'>Вернадский В.</a></td>
                            <td><a href='auth.php?id=73'>Вишакхадатта</a></td>
                            <td><a href='auth.php?id=199'>Бердяев Н. А.</a></td>
                            <td><a href='auth.php?id=152'>Вовенарг Люк</a></td>
                            <td><a href='auth.php?id=127'>Вольтер</a></td>
                            <td><span class="letter"><b>Г</b></td>
                        </tr>
                        <tr class='f_ex'>
                            <td><a href='auth.php?id=114'>Галилео Г.</a></td>
                            <td><a href='auth.php?id=207'>Ганди К.</a></td>
                            <td><a href='auth.php?id=100'>Гвиччардини Ф.</a></td>
                            <td><a href='auth.php?id=153'>Гегель Г.</a></td>
                            <td><a href='auth.php?id=154'>Гейне Г.</a></td>
                            <td><a href='auth.php?id=155'>Гельвеции К.</a></td>
                            <td><a href='auth.php?id=10'>Гераклит</a></td>
                        </tr>
                        <tr class='f_ex'>
                            <td><a href='auth.php?id=156'>Гердер И.Г.</a></td>
                            <td><a href='auth.php?id=20'>Геродот</a></td>
                            <td><a href='auth.php?id=208'>Герцен А.И.</a></td>
                            <td><a href='auth.php?id=1'>Гесиод</a></td>
                            <td><a href='auth.php?id=157'>Гёте И.В.</a></td>
                            <td><a href='auth.php?id=21'>Гиппократ</a></td>
                            <td><a href='auth.php?id=209'>Гоголь Н.В.</a></td>
                        </tr>
                        <tr id='hidable'>
                        <td colspan="7" class="temp"><span class="spander" id="expander">Смотреть ещё авторов..&darr;</span></td>
                        </tr>
                        <tr class="expanded">
                            <td><a href='auth.php?id=210'>Голсуорси Дж.</a></td>
                            <td><a href='auth.php?id=158'>Гольбах Поль</a></td>
                            <td><a href='auth.php?id=0'>Гомер</a></td>
                            <td><a href='auth.php?id=43'>Гораций</a></td>
                            <td><a href='auth.php?id=128'>Грасиан Б.</a></td>
                            <td><a href='auth.php?id=159'>Грибоедов А.С.</a></td>
                            <td><a href='auth.php?id=70'>Григорий Нази.</a></td>
                        </tr>
                        <tr class="expanded">
                            <td><a href='auth.php?id=211'>Грин А.С.</a></td>
                            <td><a href='auth.php?id=160'>Гумбольдт А.</a></td>
                            <td><a href='auth.php?id=212'>Гюго Виктор</a></td>
                            <td><span class="letter"><b>Д</b></span></a></td>
                            <td><a href='auth.php?id=91'>Данте Алигьери</a></td>
                            <td><a href='auth.php?id=213'>Дарвин Чарлз</a></td>
                            <td><a href='auth.php?id=115'>Декарт Рене</a></td>
                        </tr>
                        <tr class="expanded">
                            <td><a href='auth.php?id=22'>Демокрит</a></td>
                            <td><a href='auth.php?id=161'>Державин Г.Р.</a></td>
                            <td><a href='auth.php?id=129'>Дефо Д.</a></td>
                            <td><a href='auth.php?id=101'>Джами Абдур.</a></td>
                            <td><a href='auth.php?id=162'>Джефферсон Том.</a></td>
                            <td><a href='auth.php?id=116'>Джонсон Бенд.</a></td>
                            <td><a href='auth.php?id=163'>Джонсон Сэм.</a></td>
                        </tr>
                        <tr class="expanded">
                            <td><a href='auth.php?id=214'>Джубран Халиль</a></td>
                            <td><a href='auth.php?id=164'>Дидро Дени</a></td>
                            <td><a href='auth.php?id=215'>Дизраэли Бендж.</a></td>
                            <td><a href='auth.php?id=216'>Диккенс Чарлз</a></td>
                            <td><a href='auth.php?id=23'>Диоген</a></td>
                            <td><a href='auth.php?id=217'>Достоевский Ф.</a></td>
                            <td><a href='auth.php?id=218'>Дюма А.(отец)</a></td>
                        </tr>
                        <tr class="expanded">
                            <td><a href='auth.php?id=175'>Екатерина II</a></td>
                            <td><a href='auth.php?id=219'>Есенин С.А.</a></td>
                            <td><span class="letter"><b>Ж</b></span></td>
                            <td><a href='auth.php?id=165'>Жан Поль</a></td>
                            <td><span class="letter"><b>З</b></span></td>
                            <td><a href='auth.php?id=85'>Заточник Д.</a></td>
                            <td><a href='auth.php?id=71'>Златоуст И.</a></td>
                        </tr>
                        <tr class="expanded">
                            <td><a href='auth.php?id=221'>Золя Эмиль</a></td>
                            <td><span class="letter"><b>И</b></span></td>
                            <td><a href='auth.php?id=222'>Ибсен Г.</a></td>
                            <td><a href='auth.php?id=121'>Иван IV</a></td>
                            <td><a href='auth.php?id=74'>Иоанн Дам.</a></td>
                            <td><a href='auth.php?id=24'>Исократ</a></td>
                            <td><span class="letter"><b>К</b></span></td>
                        </tr>
                        <tr class="expanded">
                            <td><a href='auth.php?id=130'>Кальдерон П.</a></td>
                            <td><a href='auth.php?id=166'>Кант Имман.</a></td>
                            <td><a href='auth.php?id=223'>Карамзин Н.М.</a></td>
                            <td><a href='auth.php?id=167'>Карлейль Т.</a></td>
                            <td><a href='auth.php?id=36'>Катон Марк</a></td>
                            <td><a href='auth.php?id=224'>Кафка Франц</a></td>
                            <td><a href='auth.php?id=54'>Квинтилиан М.</a></td>
                        </tr>
                        <tr class="expanded">
                            <td><a href='auth.php?id=11'>Клеобул</a></td>
                            <td><a href='auth.php?id=225'>Ключевский В.</a></td>
                            <td><a href='auth.php?id=117'>Коменский Ян</a></td>
                            <td><a href='auth.php?id=12'>Конфуций</a></td>
                            <td><a href='auth.php?id=131'>Корнель Пьер</a></td>
                            <td><a href='auth.php?id=226'>Кристи Агата</a></td>
                            <td><a href='auth.php?id=168'>Крылов И.А.</a></td>
                        </tr>
                        <tr class="expanded">
                            <td><a href='auth.php?id=55'>Курций Руф</a></td>
                            <td><span class="letter"><b>Л</b></span></td>
                            <td><a href='auth.php?id=132'>Лабрюйер Жан</a></td>
                            <td><a href='auth.php?id=13'>Лао-цзы</a></td>
                            <td><a href='auth.php?id=133'>Ларошфуко Ф.</a></td>
                            <td><a href='auth.php?id=134'>Лафонтен Жан</a></td>
                            <td><a href='auth.php?id=135'>Лейбниц Г.В.</a></td>
                        </tr>
                        <tr class="expanded">
                            <td><a href='auth.php?id=227'>Ленин В.И.</a></td>
                            <td><a href='auth.php?id=228'>Лермонтов М.</a></td>
                            <td><a href='auth.php?id=169'>Лессинг Г.Э.</a></td>
                            <td><a href='auth.php?id=229'>Лец Станисл.</a></td>
                            <td><a href='auth.php?id=44'>Ливии Тит</a></td>
                            <td><a href='auth.php?id=230'>Линкольн А.</a></td>
                            <td><a href='auth.php?id=170'>Лихтенберг Г.</a></td>
                        </tr>
                        <tr class="expanded">
                            <td><a href='auth.php?id=136'>Локк Джон</a></td>
                            <td><a href='auth.php?id=171'>Ломоносов М.</a></td>
                            <td><a href='auth.php?id=231'>Лонгфелло Г.</a></td>
                            <td><a href='auth.php?id=232'>Лондон Джек</a></td>
                            <td><a href='auth.php?id=56'>Лукан Марк</a></td>
                            <td><a href='auth.php?id=66'>Лукиан</a></td>
                            <td><a href='auth.php?id=51'>Лукреций Кар</a></td>
                        </tr>
                        <tr class="expanded">
                            <td><a href='auth.php?id=38'>Луцилий Гай</a></td>
                            <td><a href='auth.php?id=103'>Лютер Мартин</a></td>
                            <td><span class="letter"><b>М</b></span></td>
                            <td><a href='auth.php?id=82'>Мономах В.В.</a></td>
                            <td><a href='auth.php?id=105'>Макиавелли Н.</a></td>
                            <td><a href='auth.php?id=233'>Маколей Том.</a></td>
                            <td><a href='auth.php?id=234'>Манн Генрих</a></td>
                        </tr>
                        <tr class="expanded">
                            <td><a href='auth.php?id=235'>Манн Томас</a></td>
                            <td><a href='auth.php?id=104'>Маргарита Вал.</a></td>
                            <td><a href='auth.php?id=67'>Марк Антонин</a></td>
                            <td><a href='auth.php?id=236'>Маркс Карл</a></td>
                            <td><a href='auth.php?id=57'>Марциал Марк</a></td>
                            <td><a href='auth.php?id=237'>Маяковский В.</a></td>
                            <td><a href='auth.php?id=32'>Менандр</a></td>
                        </tr>
                        <tr class="expanded">
                            <td class='temp' colspan="6"><div class='a_pag_1 circle'>1</div><div class='a_pag_2 circle'>2</div></td>
                            <td class="temp"><span class="spander" id="dispander">Свернуть..&uarr;</span></td></tr>
                    </table>
                    <table id='auth_page2' cellspacing='0' class='hidden'>
                        <tr>
                            <td><a href='auth.php?id=118'>Мильтон Джон</a></td>
                            <td><a href='auth.php?id=137'>Мольер</a></td>
                            <td><a href='auth.php?id=119'>Монтень Мишель</a></td>
                            <td><a href='auth.php?id=138'>Монтескье Ш.</a></td>
                            <td><a href='auth.php?id=238'>Мопассан Гиде</a></td>
                            <td><a href='auth.php?id=107'>Мор Томас</a></td>
                            <td><a href='auth.php?id=239'>Моруа Андре</a></td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=79'>Мурасаки С.</a></td>
                            <td><span class="letter"><b>Н</b></span></td>
                            <td><a href='auth.php?id=108'>Навои Алишер</a></td>
                            <td><a href='auth.php?id=172'>Наполеон I</a></td>
                            <td><a href='auth.php?id=240'>Неру Джавах.</a></td>
                            <td><a href='auth.php?id=86'>Низами Гяндж.</a></td>
                            <td><a href='auth.php?id=241'>Ницше Фрид.</a></td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=173'>Новиков Н.</a></td>
                            <td><a href='auth.php?id=139'>Ньютон И.</a></td>
                            <td><span class="letter"><b>О</b></span></td>
                            <td><a href='auth.php?id=45'>Овидий Назон</a></td>
                            <td><a href='auth.php?id=83'>Омар Хайям</a></td>
                            <td><span class="letter"><b>П</b></span></td>
                            <td><a href='auth.php?id=140'>Паскаль Блез</a></td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=242'>Паустовский К.</a></td>
                            <td><a href='auth.php?id=141'>Пенни Уильям</a></td>
                            <td><a href='auth.php?id=3'>Периандр</a></td>
                            <td><a href='auth.php?id=144'>Петр I</a></td>
                            <td><a href='auth.php?id=95'>Петрарка Фр.</a></td>
                            <td><a href='auth.php?id=58'>Петроний Ар.</a></td>
                            <td><a href='auth.php?id=14'>Пифагор</a></td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=41'>Плавт Макций</a></td>
                            <td><a href='auth.php?id=25'>Платон Арист.</a></td>
                            <td><a href='auth.php?id=60'>Плиний Мл.Гай</a></td>
                            <td><a href='auth.php?id=59'>Плиний Ст.Гай</a></td>
                            <td><a href='auth.php?id=61'>Плутарх</a></td>
                            <td><a href='auth.php?id=142'>Поп Алекс.</a></td>
                            <td><a href='auth.php?id=243'>Пушкин А.С.</a></td>
                        </tr>
                        <tr>
                            <td><span class="letter"><b>Р</b></span></td>
                            <td><a href='auth.php?id=174'>Радищев А.Н.</a></td>
                            <td><a href='auth.php?id=143'>Расин Жан</a></td>
                            <td><a href='auth.php?id=244'>Рассел Берт.</a></td>
                            <td><a href='auth.php?id=245'>Ремарк Эрих</a></td>
                            <td><a href='auth.php?id=246'>Рескин Джон</a></td>
                            <td><a href='auth.php?id=248'>Розанов В.В.</a></td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=247'>Роллан Ромен</a></td>
                            <td><a href='auth.php?id=120'>Ронсар Пьер</a></td>
                            <td><a href='auth.php?id=76'>Рудаки Абу</a></td>
                            <td><a href='auth.php?id=249'>Рузвельт Т.</a></td>
                            <td><a href='auth.php?id=92'>Руми Джал.</a></td>
                            <td><a href='auth.php?id=176'>Руссо Жан</a></td>
                            <td><a href='auth.php?id=87'>Руставели Ш.</a></td>
                        </tr>
                        <tr>
                            <td><span class="letter"><b>С</b></span></td>
                            <td><a href='auth.php?id=93'>Саади Мусл.</a></td>
                            <td><a href='auth.php?id=109'>Сакс Ганс</a></td>
                            <td><a href='auth.php?id=47'>Саллюстий Г.</a></td>
                            <td><a href='auth.php?id=220'>Санд Жорж</a></td>
                            <td><a href='auth.php?id=145'>Свифт Джон.</a></td>
                            <td><a href='auth.php?id=48'>Сенека Л. мл.</a></td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=49'>Сенека Л. ст.</a></td>
                            <td><a href='auth.php?id=250'>Сенкевич Г.</a></td>
                            <td><a href='auth.php?id=251'>Сент-Экзюпери</a></td>
                            <td><a href='auth.php?id=122'>Сервантес С.</a></td>
                            <td><a href='auth.php?id=123'>Сильвестр</a></td>
                            <td><a href='auth.php?id=46'>Сир Публий</a></td>
                            <td><a href='auth.php?id=177'>Сковорода Г.</a></td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=178'>Скотт В.</a></td>
                            <td><a href='auth.php?id=252'>Смайлс С.</a></td>
                            <td><a href='auth.php?id=179'>Смит Адам</a></td>
                            <td><a href='auth.php?id=26'>Сократ</a></td>
                            <td><a href='auth.php?id=4'>Солон</a></td>
                            <td><a href='auth.php?id=27'>Софокл</a></td>
                            <td><a href='auth.php?id=253'>Спенсер Г.</a></td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=146'>Спиноза Б.</a></td>
                            <td><a href='auth.php?id=37'>Стаций Ц.</a></td>
                            <td><a href='auth.php?id=180'>Стендаль А.</a></td>
                            <td><a href='auth.php?id=271'>Стивенсон Р.</a></td>
                            <td><a href='auth.php?id=181'>Суворов А.В.</a></td>
                            <td><a href='auth.php?id=33'>Сюнь-цзы</a></td>
                            <td><span class="letter"><b>Т</b></span></td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=254'>Тагор Р.</a></td>
                            <td><a href='auth.php?id=124'>Тассо Т.</a></td>
                            <td><a href='auth.php?id=62'>Тацит П.</a></td>
                            <td><a href='auth.php?id=255'>Твен Марк</a></td>
                            <td><a href='auth.php?id=39'>Теренций П.</a></td>
                            <td><a href='auth.php?id=50'>Тибулл А</a>.</td>
                            <td><a href='auth.php?id=256'>Толстой Л.Н.</a></td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=257'>Торо Генри</a></td>
                            <td><a href='auth.php?id=258'>Трубецкой Е.</a></td>
                            <td><a href='auth.php?id=259'>Тургенев И.С.</a></td>
                            <td><a href='auth.php?id=260'>Тютчев Ф.И.</a></td>
                            <td><span class="letter"><b>У</b></span></td>
                            <td><a href='auth.php?id=261'>Уайльд О.Ф.</a></td>
                            <td><span class="letter"><b>Ф</b></span></td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=5'>Фалес Милетс.</a></td>
                            <td><a href='auth.php?id=52'>Федр</a></td>
                            <td><a href='auth.php?id=262'>Фейербах Л.</a></td>
                            <td><a href='auth.php?id=263'>Фейхтвангер Л.</a></td>
                            <td><a href='auth.php?id=15'>Феогнид</a></td>
                            <td><a href='auth.php?id=182'>Филдинг Генри</a></td>
                            <td><a href='auth.php?id=80'>Фирдоуси А.</a></td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=183'>Фихте И.Г.</a></td>
                            <td><a href='auth.php?id=110'>Фичино М.</a></td>
                            <td><a href='auth.php?id=264'>Флобер Г.</a></td>
                            <td><a href='auth.php?id=265'>Флоренский П.А.</a></td>
                            <td><a href='auth.php?id=184'>Фонвизин Д.И.</a></td>
                            <td><a href='auth.php?id=185'>Франклин Б.</a></td>
                            <td><a href='auth.php?id=266'>Франс Анатоль</a></td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=267'>Фромм Эрих</a></td>
                            <td><a href='auth.php?id=28'>Фукидид</a></td>
                            <td><span class="letter"><b>Х</b></span></td>
                            <td><a href='auth.php?id=96'>Хафиз Ш.Э.М.</a></td>
                            <td><a href='auth.php?id=268'>Хемингуэй Э.</a></td>
                            <td><a href='auth.php?id=6'>Хилон Спарт.</a></td>
                            <td><a href='auth.php?id=186'>Хэзлитт Уил.</a></td>
                        </tr>
                        <tr>
                            <td><span class="letter"><b>Ц</b></span></td>
                            <td><a href='auth.php?id=269'>Цвейг Стефан</a></td>
                            <td><a href='auth.php?id=270'>Цветаева М.И.</a></td>
                            <td><a href='auth.php?id=53'>Цезарь Гай Ю.</td>
                            <td><a href='auth.php?id=40'>Цицерон М.Т.</a></td>
                            <td><span class="letter"><b>Ч</b></span></td>
                            <td><a href='auth.php?id=187'>Чаадаев П.Я.</a></td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=272'>Чернышевский Н.</a></td>
                            <td><a href='auth.php?id=273'>Черчилль У.</a></td>
                            <td><a href='auth.php?id=274'>Честертон Г.</a></td>
                            <td><a href='auth.php?id=275'>Чехов Антон П.</a></td>
                            <td><a href='auth.php?id=34'>Чжуан-цзы</a></td>
                            <td><a href='auth.php?id=97'>Чосер Джефри</a></td>
                            <td><span class="letter"><b>Ш</b></span></td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=188'>Шамфор С. Н.</a></td>
                            <td><a href='auth.php?id=276'>Швейцер Альб.</a></td>
                            <td><a href='auth.php?id=125'>Шекспир Уил.</a></td>
                            <td><a href='auth.php?id=189'>Шеридан Рич.</a></td>
                            <td><a href='auth.php?id=277'>Шестов Лев</a></td>
                            <td><a href='auth.php?id=147'>Шефтсбери А.</a></td>
                            <td><a href='auth.php?id=190'>Шиллер Иог</a>.</td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=191'>Шопенгауэр А.</a></td>
                            <td><a href='auth.php?id=278'>Шоу Бернард</a></td>
                            <td><span class="letter"><b>Э</b></span></td>
                            <td><a href='auth.php?id=7'>Эзоп</a></td>
                            <td><a href='auth.php?id=281'>Эйнштейн А.</a></td>
                            <td><a href='auth.php?id=279'>Эмерсон Ралф</a></td>
                            <td><a href='auth.php?id=280'>Энгельс Фрид.</a></td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=63'>Эпиктет</a></td>
                            <td><a href='auth.php?id=35'>Эпикур</a></td>
                            <td><a href='auth.php?id=8'>Эпименид</a></td>
                            <td><a href='auth.php?id=111'>Эразм Роттердамский</a></td>
                            <td><a href='auth.php?id=16'>Эсхил</a></td>
                            <td><span class="letter"><b>Ю Я</b></span></a></td>
                            <td><a href='auth.php?id=64'>Ювенал Дец.</a></td>
                        </tr>
                        <tr>
                            <td><a href='auth.php?id=192'>Юм Давид</a></td>
                            <td><a href='auth.php?id=72'>Юстиниан I</a></td>
                            <td><a href='auth.php?id=29'>Ян Чжу</a></td>
                            <td><a href='auth.php?id=151'>Вашингтон Дж.</a></td>
                            <td><a href='auth.php?id=102'>Да Винчи Леонардо</a></td>
                            <td colspan="2"></td>
                        </tr>
                        <tr class="expanded">
                            <td class='temp' colspan="6"><div  class='circle a_pag_1'>1</div><div class='a_pag_2 circle'>2</div></td>
                            <td class="temp"><span class="spander" id="dispander_2">Свернуть..&uarr;</span></td></tr>
                    </table>
                    </div>
                </div>  
                <div id='times' class='hidden'>
                    <div class='title_sort' id='title_time'>
                        <i>Века</i>
                    </div>
                    <div>
                    <table id='table_time' cellspacing='0'>
                        <tr>
                            <td><a href='time.php?id=0'>XII-VII до н.э.</a></td>
                            <td><a href='time.php?id=1'>VIII-VII до н.э.</a></td>
                            <td><a href='time.php?id=2'>VII до н.э.</a></td>
                            <td><a href='time.php?id=3'>VI до н.э.</a></td>
                            <td><a href='time.php?id=4'>V до н.э.</a></td>
                            <td><a href='time.php?id=5'>IV до н.э.</a></td>
                        </tr>
                        <tr>
                            <td><a href='time.php?id=6'>III до н.э.</a></td>
                            <td><a href='time.php?id=7'>II до н.э.</a></td>
                            <td><a href='time.php?id=8'>I до н.э.</a></td>
                            <td><a href='time.php?id=9'>I век</a></td>
                            <td><a href='time.php?id=10'>II век</a></td>
                            <td><a href='time.php?id=11'>IV век</a></td>
                        </tr>
                        <tr>
                            <td><a href='time.php?id=12'>V век</a></td>
                            <td><a href='time.php?id=13'>VII век</a></td>
                            <td><a href='time.php?id=14'>IX век</a></td>
                            <td><a href='time.php?id=15'>X век</a></td>
                            <td><a href='time.php?id=16'>XI век</a></td>
                            <td><a href='time.php?id=17'>XII век</a></td>
                        </tr>
                        <tr>
                            <td><a href='time.php?id=18'>XIII век</a></td>
                            <td><a href='time.php?id=19'>XIV век</a></td>
                            <td><a href='time.php?id=20'>XV век</a></td>
                            <td><a href='time.php?id=21'>XVI век</a></td>
                            <td><a href='time.php?id=22'>XVII век</a></td>
                            <td><a href='time.php?id=23'>XVIII век</a></td>
                        </tr>
                        <tr>
                            <td colspan='6'><a href='time.php?id=24'>XIX век</a></td>
                        </tr>
                    </table>
                    </div>
                </div>
            </div>
        </div>
            <div id='downsided' class='upped' style='top:90px'>
                <div class='auth_descr' style='background:white; height:10px'><div class='descr_time'><? echo $time_name ?></div></div>
            <div id='notes'>
                <?
                if ($page == "") {
                    $page = 0;};
                $start = ($page * 10)+$posstart;
                $end = $start+9;
                while (($start <= $posfin) && ($start <= $end)) {
                    if ($notes[$start] != "") {
                        if ($_GET[type] != "rand") {
                    $num = $start;
                    $dirl = "./marks/".$num."l.txt";
                    $dird = "./marks/".$num."d.txt";
                    if ((file_exists($dirl) == false) || (file_exists($dird)) == false) {
                        continue;
                    }
                    $filel = fopen($dirl,"r+");
                    $filed = fopen($dird,"r+");
                    $lik = fgets($filel);
                    $dis = fgets($filed);
                    $cont = $notes[$start];
                    $authid = rtrim($noteaut[$num]);
                    $auth_name = $authorsall[$authid];}
                        else {
                            $num = rand($posstart, $posfin);
                            $dirl = "./marks/".$num."l.txt";
                            $dird = "./marks/".$num."d.txt";
                            $filel = fopen($dirl,"r+");
                            $filed = fopen($dird,"r+");
                            $lik = fgets($filel);
                            $dis = fgets($filed);
                            $cont = $notes[$start];
                            $authid = rtrim($noteaut[$num]);
                            $auth_name = $authorsall[$authid];}
                                };
                    echo '<div class="note">
                    <div class="n_tit">
                        <span class="n_count">#'.$num.'</span>
                        <img src="note_auth.png" class="auth_img">
                        <span class="n_auth"><a href="auth.php?id='.$authid.'"" >'.$auth_name.'</a></span> 
                        <div class="n_loved"><a href="one.php?n='.$num.'">Постоянная ссылка</a></div>
                    </div>
                    <div class="n_cont">'.$cont.'</div>
                    <div class="n_foot">
                        <div class="n_soc">
                            Поделиться
                        </div>
                       <div class="n_like">
                                        <img class="like" id="'.$num.'" src="up.png">
                                        <span class="like">'.$lik.'</span>
                                        <img class="dis" id="'.$num.'" src="down.png">
                                        <span class="dis">'.$dis.'</span>
                                    </div> 
                    </div>
                </div>';
                $start++;
                }
                ?>
                <div id='pages'>
                    <?
                    $c=1;
                    if ($pagecount > 1) {
                        while ($c <= $pagecount) {
                            if ($c == $page+1) {
                                echo "<a href='time.php?id=".$timeid."&page=".($c-1)."'><div class='page' style='background:#FFEFD5'><span>".$c."</span></div></a>";
                                $c++;
                            }
                            else {
                            echo "<a href='time.php?id=".$timeid."&page=".($c-1)."'><div class='page'><span>".$c."</span></div></a>";
                            $c++;}
                        }
                    }
                    ?>
                </div>
                <div id='footer'>
                Книга мудрости.&nbsp;&nbsp;&nbsp; <a class='und' href='main.php'>На главную</a>
            </div>
                






            </div>


            <div id='r_block'>
                <div id='r_block_top'>
                    Tags
                </div>
                <div id='r_block_cont'>
                    <strong>Мудрость <? echo $time_name."<br>".$time_name." высказывания, цитаты<br>философы ".$time_name."<br>философия ".$time_name ?></strong>
                </div>
            </div>

        </div>
            <div id='deact'></div>
</div>      
        </div>    
    </div>

<script src="global.js"></script>
<!--[if IE]>
<style type="text/css">
BODY { behavior:url("structure/csshover.htc"); }
</style>
<![endif]-->
</body>
</html>