<p class="title text15b">&nbsp;&nbsp;&nbsp;Как пользоваться сервером Футбол-Прогноза (для организаторов турниров)</p>
<hr size="1" width="98%" />
<a name="top"></a>
<ul>
<li><a href="#pub" title="рассылка">рассылка и публикация материалов федерации</a></li>
<li><a href="#dop" title="прогнозы">дополнение списка прогнозов и выдача карточек провинившимся</a></li>
<li><a href="#tur" title="итоги">утверждение и публикация итогов тура</a></li>
<li><a href="#prg" title="програмка">автоматизированное создание программок туров</a></li>
<li><a href="">редактирование содержимого конфигурационных файлов:</a></li>
<li><a href="#cod" title="игроки">редактирование информации об участниках ассоциации</a></li>
<li><a href="#cal" title="календари">редактирование календарей турниров</a></li>
<li><a href="#gen" title="генераторы">создание списков сгенерированных прогнозов</a></li>
<li><a href="#bom" title="бомбардиры">редактирование виртуальных составов команд</a></li>
<li><a href="#tpl" title="макеты">редактирование макетов для автоматизированного формирования программок и итогов туров</a></li>
</ul>
<div style="white-space:pre-wrap;">Для пресс-атташе федераций доступна функция рассылки и публикации пресс-релизов и обзоров туров.

<a name="pub"></a><a href="#top" title="вверх">^</a> <b>Рассылка и публикация</b>
Функция активируется соответсвующей кнопкой, при этом открывается окно с редактором публикации.
Можно публиковать:
- программку тура, страница которого открыта в данный момент;
- уточненный список прогнозов на тур, страница которого открыта в данный момент;
- итоги тура, страница которого открыта в данный момент (по нажатию кнопки итоги генерируются заново в
  соответствии с залитым шаблоном и актуальными данными);
- обзор тура, страница которого открыта в данный момент - заготовка обзора автоматически строится при первом
  визите пресс-атташе на страницу тура после публикации итогов;
- пресс-релизы, анонсы, в общем, любую информацию, которую нужно донести до игроков.
Изменения внесенные в рассылаемые итоги и обзоры, сохраняются на сервере.
Можно управлять степенью распространения публикации, убирая отметки с одной, двух или всех опций:
- фидо - рассылка получателям с адресами в фидо-формате;
- инет - рассылка по адресам, содержащим "@";
- SU.FOOTBALL.PROGNOZ - публикация в фидо-конференции.

<a name="dop"></a><a href="#top" title="вверх">^</a> <b>Дополнения и поправки прогнозов</b>
нажатие широкой кнопки "ввести дополнения и поправки прогнозов" открывает окно редактора президентских дополнений
к полученным прогнозам.
Рекомендованный формат указания прогнозов:<span style="color: darkblue; font-family: monospace;">
Название команды     1111111111(X) 11111 ОТМ  ДД МММ ГГ  ЧЧ:ММ:ГГ</span>
где ОТМ - дополнительные отметки и наказания:
- !!! - признак дополнения ранее присланного прогноза;
- *Ж  - автоматически сгенерированный прогноз с желтой карточкой;
- cЖ  - опоздавший прогноз с желтой карточкой;
- !К  - сильно опоздавший прогноз с красной карточкой;
- oЖ  - неверно оформленный прогноз с желтой карточкой;
- aК  - неверно оформленный опоздавший прогноз с красной карточкой.
Допустимы и другие отметки, не интерпретирующиеся сервером как наказания, например icq, sms и т.п.
Формат указания прогнозов может слегка отличаться от приведенного, например, понимаются некоторые другие
стандартные форматы даты, в том числе русские, однако, следует соблюдать ФП-стандарт, требующий разделителя
в виде двойного пробела между именем команды и прогнозом, а также между дополнительными отметками и датой.
Внимание: не нужно самому указывать пропуск первого матча при выдаче красной карточки - сервер это делает
самостоятельно, следуя правилам Регламента, предписывающим при выдаче красной карточки и уже указанном
пропуске первого матча помечать пропуском следующий матч!

<a name="tur"></a><a href="#top" title="вверх">^</a> <b>Утверждение и публикация итогов тура</b>
После окончания всех состоявшихся реальных матчей президент или вице-президент федерации должен утвердить
результаты тура, нажав кнопку "обновить календарь".
Если в момент нажатия какие-то матчи из программки будут помечены как еще не состоявшиеся (вопросительным знаком
в строке с правильным прогнозом), они будут интерпретированы как перенесенные с заменой отметки на прочерк.
Следующим действием должно быть нажатие на кнопку публикации итогов, что приведет к автоматическому созданию
итогов тура в соответствии с залитым шаблоном.
Возможно изменение данных о ранее состоявшихся турах. В этом случае необходимо последовательно проделать операции
"обновить календарь" и "публикации итогов" (можно без фактической публикации) и для всех туров после измененного.

<a name="cod"></a><a href="#top" title="вверх">^</a> <b>Информация об участниках</b>
В первой колонке указывается код команды, во второй - ее название, в третьей - полное имя игрока (у нас принято
использовать латиницу), далее - адрес участника. В предпоследней колонке указываются длинные имена команд, которые
могут быть использованы для формирования итогов туров, например, после имени можно указать принадлежность к лиге.
В поле адреса участника можно перечислять несколько адресов, разделенных запятой или пробелом (или и тем и другим).

<a name="prg"></a><a href="#top" title="вверх">^</a> <b>Требования к оформлению программок</b>
Сервер старается максимально гибко подойти к процедуре распознавания формата программки, однако, некоторые моменты
следует все же учесть:
- программка должна иметь стандартный код, состоящий из кода федерации, опционально буквы, обозначающей
  дополнительный турнир, кода тура. Для чемпионата код тура должен состоять из 2-х цифр, для остальных турниров
  номер тура указывается 1-й цифрой.
  Примеры для федерации Албании:
  ALB01 ... ALB30 - программки чемпионата
  ALBC1 ... ALBC9 - программки кубка
  ALBS1 ... ALBS3 - программки суперкубка
  ALBP1 ... ALBP2 - программки плей-офф
  ALBG1 - программка золотого матча
- в верхней части программки обязательно должен присутствовать пример отправки прогноза с указанием кода тура;
- реальные матчи а программке должны указываться с разделителем " - " между командами, а вторая команда должна
  отделяться минимум двумя пробелами от обозначения турнира;
- недопустимо использовани двух и более пробелов подряд в названиях команд и в обозначениях турниров;
- таблица матчей программки должна заканчиваться строкой со словами "Контрольный срок" и датой (и временем);
- даты реальных матчей и срока отправки прогнозов должны быть указаны в виде ДД.ММ (допускается Д.М, ДД.М, Д.ММ);
- после таблицы реальных матчей может следовать календарь тура и список генераторов, как в одну, так и в две
  колонки. Следует избегать использования разделителя " - " после указания календаря, так как этот разделитель
  используется для интерпретации пар играющих команд;
- при необходимости использования измененного кода тура, добавляйте NEW в конце стандартного кода;
- сервер автоматически собирает информацию о результатах реальных матчей, но пока иногда сталкивается с проблемой
  совпадения имен команд. Уважайте именитые команды - указывайте у менее известных город после названии команды,
  или, как вариант, пишите названия на языке оригинала: Arsenal - команда из Лондона, Арсенал - из Киева, хотя
  было бы лучше указывать "Арсенал Киев". В перспесктиве проблема совпадения имен исчезнет, но пока это пожелание
  остается в силе.
Следует пользоваться автоматизированным генератором программок - это избавит от ошибок.
Для более удобной работы полезно заранее построить календарь и файл генераторов чемпионата, а также создать макет
программки, который должен выглядеть примерно так:
<span style="color: darkblue; font-family: monospace;">
                     "Шапка" программки

Пример отправки прогноза е-мейлом:

    FP_Prognoz           FP_Prognoz
    &lt;код команды&gt;        TIRANA
    &lt;код тypа&gt;           [TourCode]
    &lt;ваши пpогнозы&gt;      12XXXX1(X)112 222&lt;1X

         11й Чемпионат Албании по ФyтболПpогнозy
 ┌───┬─────────────────────────────────────────────┬─────┐
 │ N │ Пpогpаммка тура [TourCode]      [__Dates__] │ ДРМ │
 ├───┼─────────────────────────────────────────────┼─────┤
[Programme]
 ├───┴─────────────────────────────────────────────┴─────┤
 │ Контрольный сpок отпpавки пpогнозов             [Srok]│
 └───────────────────────────────────────────────────────┘

 В туре встречаются:

 [Calendar]

 Генераторы:

 [Generators]
</span>

<a name="cal"></a><a href="#top" title="вверх">^</a> <b>Требования к оформлению календаря</b>
Каждый тур календаря начинется со строки вида " Тур N          Код CCCNN", где N - номер тура, CCCNN - код тура.
Туры разделяются пустой строкой, в пределах программки тура пустых строк быть не должно.
При наличии более одной лиги, матчи всех лиг должны быть перечислены последовательно без разделителя между лигами.
Календарь чемпионата хранится на сервере одним файлом и, как правило, не требует повторной заливки, но если такая
необходимость возникнет, проследите, чтобы вновь заливаемый календарь содержал результаты уже сыгранных туров!
Рекомендуется при подготовке чемпионата использовать автоматический генератор календаря.

<a name="gen"></a><a href="#top" title="вверх">^</a> <b>Требования к оформлению списка генераторов</b>
Файл необязателен при условии указания списка генераторов в программке тура.
Список генераторов на каждый тур должен начинаться строкой с кодом тура. Туры разделяются пустой строкой.
В федерациях с несколькими лигами можно указывать отдельные списки генераторов для каждой лиги - это делается
путем размещения списков генераторов в 2 колонки (или в 3, если чемпионат разыгрыватся в 3-х лигах).
Это же правило используется при выборке генераторов из программки тура.
Рекомендуется при подготовке чемпионата использовать автоматическое создание генераторов.
Для кубковых турниров мы предлагаем сервис жеребьевки и создание кубковых генераторов - ссылку на него Вы найдете
на странице генератора программок.

<a name="bom"></a><a href="#top" title="вверх">^</a> <b>Формат списка виртуальных бомбардиров</b>
Пример описания виртуальной комады:
<span style="color: darkblue; font-family: monospace;">
Team: AMKAR
12 Мартин Кушев
1X Предраг Сикимич
21 Сергей Волков
2X Томислав Дуймович
X2 Никола Дринчич
X1 Георгий Пеев
1* Виталий Гришин
2* Ильдар Ахметзянов
X* Захари Сираков
1= Алексей Попов
2= Иван Черенчиков
X= Сергей Нарубин

Team: AMKAR(*)
12 Ненад Иньяц
</span>...

Первый список - основной состав, второй (со звездочкой) - резервный, который будет использоваться при неявке
игрока на тур. Рекомендации по соответствию кодов амплуа виртуальных бомбардиров:
12, 1X, 21 - игроки атаки (1X - главный бомбардир);
2X, X2 - атакующие полузащитники;
X1 - очень много забивающий полузащитник;
1* - мало забивающий полузащитник;
2*, X*, 1=, 2= - игроки обороны;
X= - вратарь-бомбардир :).
Возможны другие варианты распределения, например, некоторые предпочитают вовсе не включать вратарей в список
бомбардиров.

<a name="tpl"></a><a href="#top" title="вверх">^</a> <b>Формат макета итогов тура</b>
Макет итогов состоит из условно четырех частей.
Первая - шапка: информация о федерации, отделенная от следующей части двумя пустыми строками, например:
<span style="color: darkblue; font-family: monospace;">
                   Руководство ФПЛ Албании:
                 ===========================
Президент:       Бурухтан Второй 2:9999/99.99, fp_prognoz(АТ)lost(ДОТ)ab
Вице-президент:  Обак Барама 2:999/99, fp_alb(АТ)barama(ДОТ)co(ДОТ)ab
Пресс-атташе:    ищем желающих
</span>				   
Несмотря на то, что в первом куске только статическая информация, ее выделение в отдельную часть связано с тем,
что эта шапка будет вырезаться для использования еще и в обзорах.
Вторая часть - программка тура с результатами. Ее шаблон должен выглядеть примерно так:
<span style="color: darkblue; font-family: monospace;">
                       [TourNum]-й тур
             ===========================
               Исходы реальных матчей:
┌───┬───────────────────────────────────────┬─────┬─────┬───┐
│ N │  Код пpогpаммки - [TourCode]          │ ДPМ │ счет│исх│
├───┼───────────────────────────────────────┼─────┼─────┼───┤
[Programme]                                                   [PlayersHits]
└───┴───────────────────────────────────────┴─────┴─────┴───┘      

Число прогнозов - [NumPredict]          Число неявок - [Missed]
Число реальных игроков - [NumPlayers]   Рейтинг Fair Play - [FairPlay]
</span>
Здесь и далее конструкции в квадратных скобках - это макросы, которые будут впоследствии заменяться на полезную
информацию. Некоторые макросы имеют дополнительную настройку, часть макросов учитывают позицию в которой они
указаны, занимая в итогах прямоугольный блок левый верхний угол которого совпадает с начальной позицией макроса.
Например, среди уже указанных макросов таковыми являются [Programme], [PlayersHits] и даже [TourCode], хотя его
прямоугольник - это всего одна строка шириной 10 символов. Так же ведут себя и [NumPredict] с [NumPlayers],
чтобы подстановка чисел не портила стройный вид макета.
Наиболее интересный из перечисленных макросов - [Programme], поскольку для построения таблицы реальных матчей он
использует элементы заголовка таблицы из макета. C другими макросами начала макета вопросов возникать не должно.

Третья часть - это таблицы прогнозов и турнирные таблицы - наиболее сложный кусок макета, требующий специальной
настройки для разных федераций. Все макросы этой части позиционно-зависимы и имеют дополнительные настройки.
Приводим наиболее характерные примеры этой части.
Для двух лиг с 16 командами используем следующий макет:
<span style="color: darkblue; font-family: monospace;">
Серия A                                 Серия B
=======                                 ======= 

Прав.прогноз  [PresentResults]          Прав.прогноз  [PresentResults]
[Results 1-16]                          [Results 17-32]

Прим.: знаком (*) отмечены сгенерированные случайным образом прогнозы ввиду
  отсутствия прогнозов от реальных игроков.
Прим.: ░ - желтая карточка, ▓ - красная карточка (или 2-я желтая карточка -
прогноз N1 не играет)

[TournTable 1-16]                       [TournTable 17-32]

Дома:
--------------------------------------  --------------------------------------
[HomeTable 1-16]                        [HomeTable 17-32]

В гостях:
--------------------------------------  --------------------------------------
[AwayTable 1-16]                        [AwayTable 17-32]
[Statistics 1-16]                       [Statistics 17-32]
</span>
Обратите внимание на то, что у всех макросов левой колонки используется параметр 1-16, а в правой - 17-32.
Этот параметр указывает, какой диапазон команд из программки учитывать при построении таблиц.
1-16 - это первые 16 команд, 17-32 - следующие 16.
Таким образом, можно строить таблицы для нескольких лиг или групп в турнирах типа группового этапа еврокубков.
Как Вы догадались, Results строит таблицу результатов виртуальных матчей, всяческие ...Table -
турнирные таблицы, а Statistics - стандартную статистику (угадываемость, неявки, фэйрплей).
Макет для одной лиги с 12 командами:
<span style="color: darkblue; font-family: monospace;">
Прав.прогноз  [PresentResults]
[Results 1-8]                           [TournTable 1-12]
[Results 9-12]                          [Statistics 1-12]

Прим.: знаком (*) отмечены сгенерированные случайным образом прогнозы ввиду
  отсутствия прогнозов от реальных игроков.
Прим.: ░ - желтая карточка, ▓ - красная карточка (или 2-я желтая карточка -
прогноз N1 не играет)

Дома:                                   В гостях:
--------------------------------------  --------------------------------------
[HomeTable 1-12]                        [AwayTable 1-12]
</span>
Здесь используется "классическое" расположение таблиц, но обратите внимание на то, что таблица Results
искусственно разбивается на две таблицы, чтобы получить возможность справа от результатов разместить и
турнирную таблицу и статистику.
Для таблиц Results и TournTable предусмотрены "широкие" варианты с указанием имен тренеров команд.
В шаблоне "широкие" макросы указываются так:
[Wide[Results 1-16]
[Wide[HomeTable 1-16]
Т.е. впереди обычного макроса добавляется "[Wide".

Ну и наконец, самая простая часть - здесь в основном только широкие таблицы, не требующие сопряжения с другими,
поэтому настройка заключается лишь в выборе того, что нужно выдавать в итогах, а без чего можно обойтись.
Перечисляем все макросы с примерами использования и кое-где с описанием их назначения (в скобках).
<span style="color: darkblue; font-family: monospace;">
  Лучшие игроки тура
  ==================
[MiniBoots]

    "СУПЕР-БУТСА"
   ===============
[SuperBoots]

Команда-бомбардир:
--------------------------------------
[TeamBombers]

За лучшую разность:
--------------------------------------
[BestDiff]

Команда-громила:
--------------------------------------
[Burglar]

Команда-решето: </span>(чисто испанский анти-приз, противоположность "громиле")<span style="color: darkblue; font-family: monospace;">
--------------------------------------
[BlackHole]

Агрессивный гость:
--------------------------------------
[AgroGuest]

Самый крупный счет:
--------------------------------------
[BestResults]

Фейерверк голов: </span>(белорусско-шотландский приз за наибольшее число голов в матче)<span style="color: darkblue; font-family: monospace;">
--------------------------------------
[Firework]

Гроза авторитетов: </span>(очки набранные в матчах с призерами)<span style="color: darkblue; font-family: monospace;">
--------------------------------------
[LeaderKiller]

  "Темная лошадка"
 =================
[DarkHorse]

  "Белая Ворона"
 =================
[WhiteRaven]

  "ЗОЛОТАЯ БУТСА"
 =================
[GoldenBoots]

Серии:
[Series]
[LongSeries] </span>(длинные серии выдают статистику о сериях победных, ничейных и т.п., сухих и засушливых сериях)
<span style="color: darkblue; font-family: monospace;">
        HАКАЗАHИЯ </span>(карточки по турам)<span style="color: darkblue; font-family: monospace;">
---------------------
[Cards]

 Прим.: ░ - желтая карточка;
        ▓ - красная карточка;
        * - отсутствие пpогноза;
        o - неверное оформление или неверный код;
        c - опоздание на матч;
        а - офоpмление + опоздание;
        ! - после опубликования пpогнозов в эхе или начала pеальных матчей;


 ПЕРЕХОДЫ
 ========

нет </span>(это место макета иногда прийдется править и перезаливать, надеемся, нечасто)
В будущем постараемся автоматизировать это дело.
</div>