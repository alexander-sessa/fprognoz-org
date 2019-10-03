<p class="title text15b">&nbsp;&nbsp;&nbsp;Как пользоваться сервером Футбол-Прогноза</p>
<hr size="1" width="98%">
<h2>1. Навигация</h2>

Вы попали на сервер сетевой игры построенной на прогнозировании исходов футбольных матчей.<br>
Если Вы здесь впервые, рекомендуем сначала ознакомиться с <a href="?a=fifa&amp;m=reglament">Регламентом проведения Чемпионатов по ФутболПрогнозу</a>.<br>
Если это небходимо, авторизуйтесь на сайте, указав в правом верхнем углу свой e-mail, или свое игровое имя, или код команды, а в следующей поле ввода - пароль.<br>
Вы также можете войти на сайт без пароля, указав в первом поле свой e-mail и оставив поле пароля пустым - после нажатия кнопки "Вход" Вам будет выслана ссылка для входа на сайт, действующая 10 минут.<br>
<br>
Если Вы пользуетесь мобильным устройством, ознакомьтесь с назначением кнопок в верхней строке:<br>
- кнопка слева открывает и закрывает левое меню выбора ФП ассоциации, сезона, турнира, туров и другой полезной информации;<br>
- следующая кнопка с силуэтом открывает и закрывает правое меню "персонального кабинета";<br>
- кнопка справа с футбольным мячом открывает и закрывает список ваших актуальных туров.<br>
<br>
Вы можете выбрать интересующую ФП-ассоциацию (далее ФП) в левой колонке или свою команду в правой.<br>
При необходимости, выберите в левой колонке сезон и турнир - откроется список туров, для которых есть программки.<br>
Ссылки на ближайшие туры показаны вверху (на смартфонах нажмите кнопку с мячом), причем, здесь они отображаются разными цветами:<br>
- серым цветом показаны туры, в которых Вы не участвуете (например, в кубке), а другие игроки могут отправить прогнозы;<br>
- желтым - туры, на которые Вам можно и нужно отправить прогнозы;<br>
- красным - туры, на которые срочно необходимо отправить прогнозы - этот цвет включается за сутки до "контрольного срока";<br>
- зеленым - туры, на которые уже получены ваши прогнозы, но матчи еще не начались;<br>
- голубым - играющиеся туры с вашими прогнозами;<br>
- белым - недавно завершившиеся туры с опубликованными итогами.<br>
При выборе ссылок на тур в левом меню открываются программка, итоги или обзор (протокол) тура.<br>
Если итоги тура еще не опубликованы, вместо ссылок на итоги и обзор показывается ссылка на страницу "прогнозы".<br>
Эта же страница открывается цветными ссылками с кодами туров в верхнем блоке.<br>
На ней находится форма отправки прогнозов, информация об уже полученных прогнозах и результаты завершившихся или идущих в данный момент виртуальных матчей.<br>
Здесь же в программке тура помимо результатов завершившихся матчей красным цветом показывается текущий счет матчей.<br>
Вместо исхода тура для идущих матчей показывается текущее игровое время.<br>
Информация о реальных матчах поступает в реальном времени через API сервера https://livescore.bz.<br>
<br>
<h2>2. Регистрация</h2>

Зарегистрированный посетитель сервера может отправлять прогноз за свою команду и общаться в "фан-зонах".<br>
Страницы туров, на которые можно отправить прогнозы, содержат форму для составления и отправки прогноза, которая доступна только после парольного входа на сервер.<br>
Регистрация для тех, кто уже имеет команду в одной из фп-ассоциаций и знает ее код:<br>
- при входе на сайт укажите ваше игровое имя и код команды в качестве пароля;<br>
- в адрес, который Вы указали для получения материалов ФП, будет выслан случайно-сгенерированный пароль.<br>
Кроме этого, возможна самостоятельная регистрация для участия в чемпионатах ФП Швейцарии, действительная для всех разделов сайта.<br>
Войдя на сервер с паролем, вы сможете отправлять свои прогнозы через форму на странице тура.<br>
При парольном входе вместо игрового имени можно указывать e-mail или код вашей команды.<br>
Если у Вас возникла проблема с входом, сообщите о ней руководству своей ассоциации на странице "Президиум".<br>
<br>
Показ "фан-зон" включается и выключается в "персональном кабинете" (меню справа).<br>
<br>
<a name="frm"></a><h2>3. Отправка прогноза через форму</h2>

Программка матча состоит из 15 реальных матчей для прогнозирования (МдП): 10 - в основной части программки и 5 - в дополнительной.<br>
Основная часть используется для определения счета основного времени, а дополнительная - для замены несостоявшихся матчей, игры
дополнительного времени, а также при пробитии послематчевых 11-метровых ударов.<br>
<br>
Команда, игpающая дома, имеет фоpy в виде того, что может выставить на один из основных матчей второй ваpиант пpогноза.<br>
Гости имеют право пометить один из дополнительных матчей, чтобы именно он заменил МдП, на который хозяева поставили "двойник",
в случае отмены этого матча.<br>
Регламент предусматривает в таких случаях сохранение форы хозяев путём замещения отменённого МдП дополнительным матчем,
на котором действует особое правило - если хозява угадали исход, они забивают гол независиомо от ставки гостей!<br>
Гостям предоставлена возможность контригры - указать для замещения наиболее непредсказуемый дополнительный матч.<br>
Матч, который может заменить основной матч с "двойником", помечается значком "&lt;" после прогноза на него.<br>
<br>
Можно просто указать прогноз в поле ввода "прогноз на тур" и нажать кнопку "отправить", но для большего удобства предусмотрена
дополнительная форма, где можно "строить" свой прогноз, кликая варианты исходов реальных матчей непосредственно в программке тура.<br>
Для работы этой функции необходима включенная поддержка javascript в браузере.<br>
Домашняя вторая ставка и гостевой указатель матча для переноса форы хозяев автоматически ограничиваются одним матчем в программке.<br>
Матчи, для которых не указан прогноз, в поле ввода "прогноз на тур" отмечены знаком "=".<br>
<br>
Для ответных и финальных кубковых туров нужно указывать пенальти - отметьте в своем прогнозе как минимум пять матчей, в
результатах которых Вы наиболее уверены.<br>
Если исход угадан - забит пенальти.<br>
Список пенальти указывается в строке с прогнозом, например: 12221XXX21 1222X  pen. - 3,12,14,7,1,6,8<br>
В форме построения прогноза можно стрелками возле буквы "п" изменять "вес" пенальти, т.е. "двигать" номер матча относительно
других матчей, выбранных для серии пенальти.<br>
<br>
Прогноз отправляется емейлом по всем административным адресам, указанным в программке тура, кроме игрока, с которым Вы играете в
этом туре. Копия прогноза отправляется также в Ваш адрес.<br>
Кроме того, можно проконтролировать получение прогноза, открыв на странице тура хронологию поступления прогнозов.<br>
<br>
<h2>4. Отправка прогноза через wap</h2>

Для тех, кто не имеет доступа к компьютеру или мобильному устройству с нормальным браузером, предоставлена возможность просмотра
программок и отправки прогнозов через wap-сервер https://fprognoz.org/wap/ <br>
Сервер позволяет выбрать ассоциацию, тур, на который можно отправить прогноз, увидеть укороченную (без излишеств) программку тура
и отправить прогноз, используя те же код команды и пароль, с которыми можно войти на наш сервер.
