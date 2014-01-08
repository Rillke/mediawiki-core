<?php
/** Rusyn (русиньскый)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Engelseziekte
 * @author Gazeb
 * @author Gleb Borisov
 * @author Kaganer
 * @author Nemo bis
 * @author Reedy
 * @author Tkalyn
 */

$fallback = 'uk, ru';

$namespaceNames = array(
	NS_MEDIA            => 'Медіа',
	NS_SPECIAL          => 'Шпеціална',
	NS_TALK             => 'Діскузія',
	NS_USER             => 'Хоснователь',
	NS_USER_TALK        => 'Діскузія_з_хоснователём',
	NS_PROJECT_TALK     => 'Діскузія_ку_{{grammar:3sg|$1}}',
	NS_FILE             => 'Файл',
	NS_FILE_TALK        => 'Діскузія_ку_файлу',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Діскузія_ку_MediaWiki',
	NS_TEMPLATE         => 'Шаблона',
	NS_TEMPLATE_TALK    => 'Діскузія_ку_шаблонї',
	NS_HELP             => 'Поміч',
	NS_HELP_TALK        => 'Діскузія_ку_помочі',
	NS_CATEGORY         => 'Катеґорія',
	NS_CATEGORY_TALK    => 'Діскузія_ку_катеґорії',
);

$namespaceAliases = array(
	'Діскузіа'                => NS_TALK,
	'Діскузіа_з_хоснователём' => NS_USER_TALK,
	'Дізкузія_ку_MediaWiki'   => NS_MEDIAWIKI_TALK,
);

$specialPageAliases = array(
	'Activeusers'               => array( 'Актівны_хоснователї' ),
	'Allmessages'               => array( 'Сістемовы_повідомлїня' ),
	'Allpages'                  => array( 'Вшыткы_сторінкы' ),
	'Ancientpages'              => array( 'Давны_сторінкы' ),
	'Badtitle'                  => array( 'Планый_тітул' ),
	'Blankpage'                 => array( 'Порожня_сторінка' ),
	'Block'                     => array( 'Заблоковати' ),
	'Booksources'               => array( 'Жрідла_книг' ),
	'BrokenRedirects'           => array( 'Розорваны_напрямлїня' ),
	'Categories'                => array( 'Катеґорії' ),
	'ChangeEmail'               => array( 'Змінити_імейл' ),
	'ChangePassword'            => array( 'Змінити_гесло' ),
	'ComparePages'              => array( 'Порівнаня_сторінок' ),
	'Confirmemail'              => array( 'Потвердити_імейл' ),
	'Contributions'             => array( 'Вклад' ),
	'CreateAccount'             => array( 'Створити_конто' ),
	'Deadendpages'              => array( 'Сторінкы_без_одказів' ),
	'DeletedContributions'      => array( 'Вымазаный_вклад' ),
	'DoubleRedirects'           => array( 'Подвійны_напрямлїня' ),
	'EditWatchlist'             => array( 'Правити_список_мерькованя' ),
	'Emailuser'                 => array( 'Писмо_хоснователёви' ),
	'Export'                    => array( 'Експорт' ),
	'Fewestrevisions'           => array( 'Найменшы_перевіркы' ),
	'FileDuplicateSearch'       => array( 'Гляданя_дуплікатів_файлів' ),
	'Filepath'                  => array( 'Стежка_до_файлу' ),
	'Import'                    => array( 'Імпорт' ),
	'Invalidateemail'           => array( 'Знеплатнити_імейл' ),
	'BlockList'                 => array( 'Список_блоковань' ),
	'LinkSearch'                => array( 'Гляданя_одказів' ),
	'Listadmins'                => array( 'Список_адміністраторів' ),
	'Listbots'                  => array( 'Список_ботів' ),
	'Listfiles'                 => array( 'Список_файлів' ),
	'Listgrouprights'           => array( 'Список_прав_ґруп' ),
	'Listredirects'             => array( 'Список_напрямлїнь' ),
	'Listusers'                 => array( 'Список_хоснователїв' ),
	'Lockdb'                    => array( 'Заблоковати_датабазу' ),
	'Log'                       => array( 'Журналы' ),
	'Lonelypages'               => array( 'Ізолованы_сторінкы' ),
	'Longpages'                 => array( 'Найдовшы_сторінкы' ),
	'MergeHistory'              => array( 'Зєдинїня_історії' ),
	'MIMEsearch'                => array( 'Гляданя_MIME' ),
	'Mostcategories'            => array( 'Найкатеґорізованїшы' ),
	'Mostimages'                => array( 'Найбівше_хоснованы_файлы' ),
	'Mostlinkedcategories'      => array( 'Найвжыванїшы_катеґорії' ),
	'Mostlinkedtemplates'       => array( 'Найвжыванїшы_шаблоны' ),
	'Mostrevisions'             => array( 'Найбівше_ревізій' ),
	'Movepage'                  => array( 'Переменовати' ),
	'Mycontributions'           => array( 'Мій_вклад' ),
	'Mypage'                    => array( 'Моя_сторінка' ),
	'Mytalk'                    => array( 'Моя_діскузія' ),
	'Myuploads'                 => array( 'Мої_награня_файлів' ),
	'Newimages'                 => array( 'Новы_файлы' ),
	'Newpages'                  => array( 'Новы_сторінкы' ),
	'PasswordReset'             => array( 'Ресет_гесла' ),
	'PermanentLink'             => array( 'Тырвалый_одказ' ),
	'Popularpages'              => array( 'Популарны_сторінкы' ),
	'Preferences'               => array( 'Наставлїня' ),
	'Randompage'                => array( 'Нагодна_статя' ),
	'Randomredirect'            => array( 'Нагодне_напрямлїня' ),
	'Recentchanges'             => array( 'Послїднї_зміны' ),
	'Recentchangeslinked'       => array( 'Повязаны_едітованя' ),
	'Search'                    => array( 'Гляданя' ),
	'Shortpages'                => array( 'Курты_сторінкы' ),
	'Specialpages'              => array( 'Шпеціялны_сторінкы' ),
	'Statistics'                => array( 'Штатістіка' ),
	'Tags'                      => array( 'Позначкы' ),
	'Unblock'                   => array( 'Одблоковати' ),
	'Uncategorizedcategories'   => array( 'Некатеґорізованы_катеґорії' ),
	'Uncategorizedimages'       => array( 'Некатеґорізованы_файлы' ),
);

$messages = array(
# User preference toggles
'tog-underline' => 'Підкреслёвати одказы:',
'tog-justify' => 'Зарівнати текст до блоку',
'tog-hideminor' => 'Сховати малы едітованя в списку послїднїх змін',
'tog-hidepatrolled' => 'Сховати патролёваны едітованя в списку послїднїх змін',
'tog-newpageshidepatrolled' => 'Сховати патролёваны сторінкы зо списку новых сторінок',
'tog-extendwatchlist' => 'Росшыреный список слїдованых сторінок, обсягує вшыткы зміны, не лем послїднї',
'tog-usenewrc' => 'В послїднїх змінах і слїдованых сторінках зґруповати зміны по сторінках',
'tog-numberheadings' => 'Автоматічно чісловати надписы',
'tog-showtoolbar' => 'Вказати панел інштрументів',
'tog-editondblclick' => 'Едітовати двоїтым кликом',
'tog-editsection' => 'Дозволити едітованя секції сторінкы через одказ [едіт.]',
'tog-editsectiononrightclick' => 'Дозволити едітованя секції сторінкы через кликаня правов клапков мышкы на надписы сторінок',
'tog-showtoc' => 'Вказовати обсяг (на сторінках з веце як трёма надписами)',
'tog-rememberpassword' => 'Запамнятати моє приголошіня на тім переглядачу (максімално $1 {{PLURAL:$1|день|днів}})',
'tog-watchcreations' => 'Придавати сторінкы створены мнов тай файлы мнов наладованы до мого списку слїдованых',
'tog-watchdefault' => 'Придавати мнов едітованы сторінкы і файлы до списку слїдованых',
'tog-watchmoves' => 'Придавати переменованы сторінкы і файлы до мого списку слїдованых',
'tog-watchdeletion' => 'Придавати сторінкы і файлы, котры змажу, міджі слїдованы',
'tog-minordefault' => 'Імпліцітно позначіти вшыткы зміны як малы',
'tog-previewontop' => 'Вказовати нагляд перед окном едітованя  (не за ним)',
'tog-previewonfirst' => 'Вказати нагляд при першій едітації',
'tog-enotifwatchlistpages' => 'Послати електронічну пошту, кідь ся змінила сторінка або файл з мого списку слїдованя',
'tog-enotifusertalkpages' => 'Послати електронічну пошту при змінї моёй діскузной сторінкы',
'tog-enotifminoredits' => 'Послати електронічну пошту і про меншы едітованя сторінок і файлів',
'tog-enotifrevealaddr' => 'Прозрадити мою поштову адресу в поштї  увідомлїня',
'tog-shownumberswatching' => 'Вказати кілько хоснователїв придало сторінку до свого списку слїдованых',
'tog-oldsig' => 'Існуючій підпис:',
'tog-fancysig' => 'Хосновати про підпис вікітекст (без автоматічного одказу)',
'tog-uselivepreview' => 'Хосновати швыдкый нагляд (експеріментално)',
'tog-forceeditsummary' => 'Упозорнити ня, кідь не є выповнене згорнутя едітованя',
'tog-watchlisthideown' => 'Сховати мої едітованя на списку слїдованых сторінок',
'tog-watchlisthidebots' => 'Сховати едітованя ботів у списку слїдованых сторінок',
'tog-watchlisthideminor' => 'Сховати малы едітованя зо списку слїдованых сторінок',
'tog-watchlisthideliu' => 'В списку слїдованых сторінок сховати едітованя приголошеных хоснователїв',
'tog-watchlisthideanons' => 'В списку слїдованых сторінок сховати едітованя анонімів',
'tog-watchlisthidepatrolled' => 'Сховати патролёваны едітованя в слїдованых сторінках',
'tog-ccmeonemails' => 'Посылати мі копії пошты, котру зажену іншым хоснователям',
'tog-diffonly' => 'Не вказовати обсяг сторінкы під роздїлом  верзій',
'tog-showhiddencats' => 'Вказати схованы катеґорії',
'tog-norollbackdiff' => 'По вернутю зміны не вказовати порівнаня роздїлів',
'tog-useeditwarning' => 'Упозорнити ня, кідь буду опущати сторінку без уложіня змін',
'tog-prefershttps' => 'По приголошіню все хосновате беспечне споїня',

'underline-always' => 'Все',
'underline-never' => 'Нїґда',
'underline-default' => 'Хосновати наставлїня переглядача або взгляду',

# Font style option in Special:Preferences
'editfont-style' => 'Тіп писма в едітачнім полю:',
'editfont-default' => 'Хосновати наставлїня переглядача',
'editfont-monospace' => 'Писмо із сталов шырков',
'editfont-sansserif' => 'Писмо без пяты',
'editfont-serif' => 'Писмо з пятов',

# Dates
'sunday' => 'недїля',
'monday' => 'понедїлёк',
'tuesday' => 'вівторок',
'wednesday' => 'середа',
'thursday' => 'четверь',
'friday' => 'пятніця',
'saturday' => 'субота',
'sun' => 'Нд',
'mon' => 'Пн',
'tue' => 'Вт',
'wed' => 'Ср',
'thu' => 'Чт',
'fri' => 'Пт',
'sat' => 'Сб',
'january' => 'януар',
'february' => 'фебруар',
'march' => 'марец',
'april' => 'апріль',
'may_long' => 'май',
'june' => 'юній',
'july' => 'юлій',
'august' => 'авґуст',
'september' => 'септембер',
'october' => 'октобер',
'november' => 'новембер',
'december' => 'децембер',
'january-gen' => 'януара',
'february-gen' => 'фебруара',
'march-gen' => 'марца',
'april-gen' => 'апріля',
'may-gen' => 'мая',
'june-gen' => 'юнія',
'july-gen' => 'юлія',
'august-gen' => 'авґуста',
'september-gen' => 'септембра',
'october-gen' => 'октобра',
'november-gen' => 'новембра',
'december-gen' => 'децембра',
'jan' => 'ян',
'feb' => 'феб',
'mar' => 'мар',
'apr' => 'апр',
'may' => 'май',
'jun' => 'юн',
'jul' => 'юл',
'aug' => 'авґ',
'sep' => 'сеп',
'oct' => 'окт',
'nov' => 'нов',
'dec' => 'дец',
'january-date' => '$1. януара',
'february-date' => '$1. фебруара',
'march-date' => '$1. марца',
'april-date' => '$1. апріля',
'may-date' => '$1. мая',
'june-date' => '$1. юна',
'july-date' => '$1. юла',
'august-date' => '$1. авґуста',
'september-date' => '$1. септембра',
'october-date' => '$1. октобра',
'november-date' => '$1. новембра',
'december-date' => '$1. децембра',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Катеґорія|Катеґорії}}',
'category_header' => 'Сторінкы в катеґорії «$1»',
'subcategories' => 'Підкатеґорії',
'category-media-header' => 'Файлы в катеґорії «$1»',
'category-empty' => "''Гевся катеґорія порожня.''",
'hidden-categories' => '{{PLURAL:$1|Скрыта катеґорія|Скрыты катеґорії}}',
'hidden-category-category' => 'Схованы катеґорії',
'category-subcat-count' => '{{PLURAL:$2|Тота катеґорія має лем таку підкатеґорію.|{{PLURAL:$1|Указана $1 підкатеґорія|Указаны $1 підкатеґорії|Указаных $1 підкатеґорій}} із $2.}}',
'category-subcat-count-limited' => 'В тїй катеґорії {{PLURAL:$1|$1 підкатеґорія|$1 підкатеґорії|$1 підкаґегорій}}.',
'category-article-count' => '{{PLURAL:$2|Тота катеґорія має лем таку сторінку.|{{PLURAL:$1|Указана $1 сторінка|Указаны $1 сторінкы|Указаных $1 сторінок}} той катеґорії з $2.}}',
'category-article-count-limited' => 'В тій катеґорії {{PLURAL:$1|$1 сторінка|$1 сторінкы|$1 сторінок}}.',
'category-file-count' => '{{PLURAL:$2|Тота катеґорія обсягує лем тот файл.|{{PLURAL:$1|Вказаный $1 файл|Вказаны $1 файлы|Вказаных $1 файлів}} той катеґорії з $2.}}',
'category-file-count-limited' => 'В тій катеґорії {{PLURAL:$1|$1 файл|$1 файлы|$1 файлів}}.',
'listingcontinuesabbrev' => '(дале)',
'index-category' => 'Індексованы сторінкы',
'noindex-category' => 'Неіндексованы сторінкы',
'broken-file-category' => 'Сторінкы, што ся одказують на неіснуючі файлы',

'about' => 'О',
'article' => 'Обсягова сторінка',
'newwindow' => '(отворить ся в новім окнї)',
'cancel' => 'Зрушыти',
'moredotdotdot' => 'Детайлнїше…',
'morenotlisted' => 'Гевтот список неповный ...',
'mypage' => 'Сторінка',
'mytalk' => 'Діскузія',
'anontalk' => 'Діскузія к тїй IP-адресї',
'navigation' => 'Навіґація',
'and' => '&#32;і',

# Cologne Blue skin
'qbfind' => 'Найти',
'qbbrowse' => 'Переглядати',
'qbedit' => 'Едітовати',
'qbpageoptions' => 'Тота сторінка',
'qbmyoptions' => 'Мої сторінкы',
'faq' => 'Часты звідованя',
'faqpage' => 'Project:Часты звідованя',

# Vector skin
'vector-action-addsection' => 'Придати тему',
'vector-action-delete' => 'Вымазати',
'vector-action-move' => 'Переменовати',
'vector-action-protect' => 'Всокотити',
'vector-action-undelete' => 'Обновити',
'vector-action-unprotect' => 'Змінити замок',
'vector-simplesearch-preference' => 'Поволити спрощене поле гляданя (лем взгляд Vector )',
'vector-view-create' => 'Створити',
'vector-view-edit' => 'Едітовати',
'vector-view-history' => 'Видїти історію',
'vector-view-view' => 'Чітати',
'vector-view-viewsource' => 'Видїти код',
'actions' => 'Дїї',
'namespaces' => 'Просторы назв',
'variants' => 'Варіанты',

'navigation-heading' => 'Навіґачне меню',
'errorpagetitle' => 'Хыба',
'returnto' => 'Навернутя до сторінкы «$1».',
'tagline' => 'Матеріал з {{grammar:genitive|{{SITENAME}}}}',
'help' => 'Поміч',
'search' => 'Глядати',
'searchbutton' => 'Найти',
'go' => 'Перейти',
'searcharticle' => 'Перейти',
'history' => 'Історія сторінкы',
'history_short' => 'Історія',
'updatedmarker' => 'обновлено од послїднёй навщівы',
'printableversion' => 'Верзія до друку',
'permalink' => 'Перманентный одказ',
'print' => 'Друк',
'view' => 'Видїти',
'edit' => 'Едітовати',
'create' => 'Створити',
'editthispage' => 'Едітовату тоту сторінку',
'create-this-page' => 'Створити тоту сторінку',
'delete' => 'Вымазати',
'deletethispage' => 'Змазати тоту сторінку',
'undeletethispage' => 'Обновити тоту сторінку',
'undelete_short' => 'Обновити $1 {{PLURAL:$1|верзію|верзії|верзії}}',
'viewdeleted_short' => 'Видїти {{PLURAL:$1|змазанов едітаціёв|$1 змазаны едітації|$1 змазаных едітацій}}',
'protect' => 'Всокотити',
'protect_change' => 'змінити',
'protectthispage' => 'Сокотити тоту сторінку',
'unprotect' => 'Змінити замок',
'unprotectthispage' => 'Змінити замок той сторінкы',
'newpage' => 'Нова сторінка',
'talkpage' => 'Діскутовати тоту сторінку',
'talkpagelinktext' => 'діскузія',
'specialpage' => 'Шпеціална сторінка',
'personaltools' => 'Особны інштрументы',
'postcomment' => 'Нова секція',
'articlepage' => 'Посмотрити сторінку',
'talk' => 'Діскузія',
'views' => 'Перегляды',
'toolbox' => 'Інштрументы',
'userpage' => 'Посмотрити сторінку хоснователя',
'projectpage' => 'Посмотрити сторінку проєкту',
'imagepage' => 'Посмотрити сторінку файлу',
'mediawikipage' => 'Посмотрити сторінку повідомлїнь',
'templatepage' => 'Посмотрити шаблону',
'viewhelppage' => 'Посмотрити сторінку помочі',
'categorypage' => 'Посмотрити сторінку катеґорії',
'viewtalkpage' => 'Посмотрити діскузію',
'otherlanguages' => 'Іншыма языками',
'redirectedfrom' => '(Напрямленый з $1)',
'redirectpagesub' => 'Сторінка-напрямлїня',
'lastmodifiedat' => 'Послїдня зміна той сторінкы: $2, $1.',
'viewcount' => 'Сторінка была зображена  {{PLURAL:$1|раз|$1разы|$1раз}}.',
'protectedpage' => 'Замкнута сторінка',
'jumpto' => 'Перейти до:',
'jumptonavigation' => 'навіґація',
'jumptosearch' => 'Найти',
'view-pool-error' => 'Перебачте, серверы суть теперь переладованы.
Тоту сторінку собі теперь пoзерать много хоснователїв.
Просиме Вас, почекайте і спробуйте доступность пізнїше.

$1',
'pool-timeout' => 'Час скінчіня чекать про замок',
'pool-queuefull' => 'Фронта є повна',
'pool-errorunknown' => 'Незнама хыба',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage).
'aboutsite' => 'О&nbsp;{{grammar:genitive|{{SITENAME}}}}',
'aboutpage' => 'Project:{{SITENAME}}',
'copyright' => 'Обсяг є доступный з $1.',
'copyrightpage' => '{{ns:project}}:Авторьске право',
'currentevents' => 'Актуалны подїї',
'currentevents-url' => 'Project:Актуалны подїї',
'disclaimers' => 'Вылучіня одповідности',
'disclaimerpage' => 'Project:Вылучіня одповідности',
'edithelp' => 'Поміч едітованя',
'helppage' => 'Help:Обсяг',
'mainpage' => 'Головна сторінка',
'mainpage-description' => 'Головна сторінка',
'policy-url' => 'Project:Правила',
'portal' => 'Портал комуніты',
'portal-url' => 'Project:Портал комуніты',
'privacy' => 'Політіка сокочіня пріватных даных',
'privacypage' => 'Project:Сокочіня пріватных дан',

'badaccess' => 'Брак прав приступу',
'badaccess-group0' => 'Вам не є дозволено выконовати тоту дїю.',
'badaccess-groups' => 'Дїя, яку сьте хотїли зробити, дозволена лем хоснователям з {{PLURAL:$2|ґрупы|ґруп}}: $1.',

'versionrequired' => 'Потрібна MediaWiki верзії $1',
'versionrequiredtext' => 'Про роботу з тов сторінков потрібна MediaWiki верзії $1. Відь [[Special:Version|сторінку верзії]].',

'ok' => 'ОК',
'retrievedfrom' => 'Обтримане з "$1"',
'youhavenewmessages' => 'Маєте $1 ($2).',
'youhavenewmessagesfromusers' => 'Мате $1 од {{PLURAL:$3|іншого хоснователя|$3 іншых хоснователїв}} ($2).',
'youhavenewmessagesmanyusers' => 'Мате $1 од много далшых хоснователїв ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|нове повідомлїня|новы повідомлїня}}',
'newmessagesdifflinkplural' => 'остатня {{PLURAL:$1|зміна|зміны|змін}}',
'youhavenewmessagesmulti' => 'Маєте новы повідомлїня на $1',
'editsection' => 'едіт.',
'editold' => 'едіт.',
'viewsourceold' => 'видїти код',
'editlink' => 'едітовати',
'viewsourcelink' => 'видїти код',
'editsectionhint' => 'Едітовати секцію: $1',
'toc' => 'Обсяг',
'showtoc' => 'вказати',
'hidetoc' => 'сховати',
'collapsible-collapse' => 'Згорнути',
'collapsible-expand' => 'Розгорнути',
'thisisdeleted' => 'Перегляднути ці обновити $1?',
'viewdeleted' => 'Зобразити $1?',
'restorelink' => '{{PLURAL:$1|змазанов едітаціёв|$1 змазаны едітації|$1 змазаных едітацій}}',
'feedlinks' => 'Каналы:',
'feed-invalid' => 'Неправилный тіп каналу.',
'feed-unavailable' => 'Каналы не суть доступны',
'site-rss-feed' => '$1 RSS канал',
'site-atom-feed' => '$1 Atom канал',
'page-rss-feed' => '"$1" RSS канал',
'page-atom-feed' => '"$1" Atom канал',
'red-link-title' => '$1 (такой сторінкы нїт)',
'sort-descending' => 'Сортовати спадаючі',
'sort-ascending' => 'Сортовати ступаючі',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Сторінка',
'nstab-user' => 'Сторінка хоснователя',
'nstab-media' => 'Медіа-сторінка',
'nstab-special' => 'Шпеціална сторінка',
'nstab-project' => 'Сторінка проєкту',
'nstab-image' => 'Файл',
'nstab-mediawiki' => 'Повідомлїня',
'nstab-template' => 'Шаблона',
'nstab-help' => 'Сторінка помочі',
'nstab-category' => 'Катеґорія',

# Main script and global functions
'nosuchaction' => 'Такой дїї не має',
'nosuchactiontext' => 'Дїя, уведжена в URL, неправилна.
Могли сьте неправилно написати URL або перейти через некоректный одказ .
Може тыж значіти ґанч в проґрамовім забеспечіню {{GRAMMAR:genitive|{{SITENAME}}}}.',
'nosuchspecialpage' => 'Такой шпеціалной сторінкы нїт',
'nospecialpagetext' => '<strong>Така шпеціална сторінка не екзістує.</strong>

Відь [[Special:SpecialPages|список шпеціалных сторінок]].',

# General errors
'error' => 'Хыба',
'databaseerror' => 'Датабазова хыба',
'databaseerror-text' => 'При запытї до датабазы ся трафіла хыба.
Тото може вказовати на хыбу в проґрамовім забеспечіню.',
'databaseerror-textcl' => 'При запытї до датабазы ся трафіла хыба.',
'databaseerror-query' => 'Запыт: $1',
'databaseerror-function' => 'Функція: $1',
'databaseerror-error' => 'Хыба: $1',
'laggedslavemode' => 'Увага: Сторінка не мусить быти актуална',
'readonly' => 'Датабаза є замкнута',
'enterlockreason' => 'Удайте причіну замкнутя і приближный термін одомкнутя',
'readonlytext' => 'Датабаза є теперь замкнута, также ся не дають укладати новы статї і зміны. Причінов є асі плановане утримованя, по котрій ся вшытко верне до нормалного ставу.

Адміністратор, котрый датабазу замкнув, охабив тото пояснїня: $1',
'missing-article' => 'В датабазї ся не нашов жаданый текст сторінкы «$1» $2.

Подобна сітуація звычайно выникать при спробі переходу по застаралому одказованю на історію змін сторінкы, яка была вымазана.

Кідь то не є тот припад, може сьте нашли помылку в проґрамовім забеспечіню.
Просиме Вас, оголоште то [[Special:ListUsers/sysop|адміністраторам]], придайте і URL.',
'missingarticle-rev' => '(ревізія № $1)',
'missingarticle-diff' => '(Роздїл: $1, $2)',
'readonly_lag' => 'Датабаза автоматічно заблокована од змін, докы ся другый датабазовый сервер не сінхронізує з мастером',
'internalerror' => 'Інтерна хыба',
'internalerror_info' => 'Інтерна хыба: $1',
'fileappenderrorread' => 'В часї придаваня ся не вдало прочітати  "$1".',
'fileappenderror' => 'Не вдало ся придати «$1» до «$2».',
'filecopyerror' => 'Не было можне копіровати файл «$1» на «$2».',
'filerenameerror' => 'Не было можне переменовати файл «$1» на «$2».',
'filedeleteerror' => 'Не было можне змазаты файл «$1».',
'directorycreateerror' => 'Не мож вытворити адресарь «$1».',
'filenotfound' => 'Не было можне найти файл «$1».',
'fileexistserror' => 'Не дасть ся записати до файлу «$1»: файл екзістує.',
'unexpected' => 'Несподїване значіня: «$1»=«$2».',
'formerror' => 'Хыба: небыло можне одослати формуларь',
'badarticleerror' => 'Тота дїя не може быти выконана на тій сторінцї.',
'cannotdelete' => 'Не є можне вымазати сторінку або файл "$1".
Може уж быв(а)  змазаный(а) дакым іншым.',
'cannotdelete-title' => 'Не годен змазати сторінку "$1"',
'delete-hook-aborted' => 'Едітованя было сторноване процедуров пунктом припоёваня без близшого пояснїня.',
'no-null-revision' => 'Не годен створити нову нулову ревізію сторінкы "$1"',
'badtitle' => 'Неприпустна назва',
'badtitletext' => 'Пожадована назва сторінкы неправилна, порожня, або неправилно одказована як міджі-язычного ці міджі-вікі назва.
Може ся хоснують сімболы, котры не можуть быти хоснованы в назвах.',
'perfcached' => 'Слїдуючі дата суть взяты з кешу і не мусять быти актуалны. Кеш може обсяговати не веце як {{PLURAL:$1|єден резултат|$1 резултаты|$1 резултатів}}.',
'perfcachedts' => 'Слїдуючі дата суть взяты з кешу, яка была остатнїй раз актуалізована $1. Кеш може обсяговати не веце як {{PLURAL:$4|єден резултат|$4 резултаты|$4 резултатів}}.',
'querypage-no-updates' => 'Зміны той сторінкы заборонены. Дата нынї не можуть быти обновлены.',
'viewsource' => 'Видїти код',
'viewsource-title' => 'Видїти жрідло сторінкы $1',
'actionthrottled' => 'Акція была придушена',
'actionthrottledtext' => 'Взглядом ку протиспамовым крокам не можете жадану акцію провести барз часто в короткім часї. Спробуйте то знову о пару мінут.',
'protectedpagetext' => 'Тота сторінка была замкнута, жебы не годен быв єй едітовати або інакше мінити.',
'viewsourcetext' => 'Можете видїти і копіровати код той сторінкы:',
'viewyourtext' => "Можете собі посмотрити і скопіровати жрідловый текст '''вашых змін''' той сторінкы:",
'protectedinterface' => 'Тота сторінка є частёв інтрефейсу проґрамового забеспечіня той вікі і єй можуть едітовати лем адміністраторы проєкту.
Жебы придати або змінити переклады, просиме хоснуйте [//translatewiki.net/ translatewiki.net], локалізачный проєкт MediaWiki.',
'editinginterface' => "'''Позірь:''' Едітуєте сторінку,котра є частинов текстового інтерфейсу.
Зміны той сторінкы выкличуть зміну інтерфейсу про іншых хоснователїв той вікі. 
Додати ці змінити переклады на вшыткых вікі просиме хоснуйте [//translatewiki.net/wiki/Main_Page?setlang=uk translatewiki.net] — проєкт, што ся занимать локалізаціов MediaWiki.",
'cascadeprotected' => 'Сторінка є замнкута, бо є вложена до  {{PLURAL:$1|наслїдуючой сторінкы замкнуты|наслїдуючіх сторінок замнкнутых|наслїдуючіх сторінок замнкнутых}} каскадовым замком:
$2',
'namespaceprotected' => 'Не маєте права едітовати сторінкы в просторї  назв «$1».',
'customcssprotected' => 'Не маєте права едітовати тоту сторінку з CSS, бо обсягує персоналны наставлїна іншого хоснователя.',
'customjsprotected' => 'Не маєте права едітовати тоту сторінку з JavaScript-ом, бо обсягує персоналны наставлїна іншого хоснователя.',
'mycustomcssprotected' => 'Не мате права на управы той CSS сторінкы.',
'mycustomjsprotected' => 'Не мате права на едітованя той JavaScript сторінкы.',
'myprivateinfoprotected' => 'Не мате дозволїня мінити свої пріватны інформації.',
'mypreferencesprotected' => 'Не мате дозволїня мінити свої наставлїня.',
'ns-specialprotected' => 'Шпеціалны сторінкы не є можне едітовати.',
'titleprotected' => "Створїня сторінкы з таков назвов было заборонене хоснователём [[User:$1|$1]] з причінов: ''$2''.",
'filereadonlyerror' => "Не годно змінити файл „$1“, бо архів файлів „$2“ є теперь лем на чітаня.

Адміністратор сервера, котрый архів заблоковав, додав тото пояснїня: „''$3''“.",
'invalidtitle-knownnamespace' => 'Непряавилна назва в просторї назв „$2“ і текстом „$3“',
'invalidtitle-unknownnamespace' => 'Неправилна назва з незнамым чіслом простору назв $1 і текстом „$2“',
'exception-nologin' => 'Не сьте приголошеный(а)',
'exception-nologin-text' => 'Гевся сторінка або дїя потребує, жебы сьте были на тотїй вікі приголошены.',

# Virus scanner
'virus-badscanner' => "Зла конфіґурація: незнамый антивіровый проґрам: ''$1''",
'virus-scanfailed' => 'скенованя ся не вдало (код $1)',
'virus-unknownscanner' => 'незнамый антівірус',

# Login and logout pages
'logouttext' => "'''Теперь сьте одголошеный(а).'''

Даякы сторінкы ся можуть вказовати як кібы сьте были дотеперь приголошены, покы не змажете кеш переглядача.",
'welcomeuser' => 'Вітайте, $1!',
'welcomecreation-msg' => 'Ваше конто было вытворене.
Не забудьте змінити свої [[Special:Preferences|наставлїня {{grammar:2sg|{{SITENAME}}}}]].',
'yourname' => 'Імя хоснователя:',
'userlogin-yourname' => 'Імя хоснователя',
'userlogin-yourname-ph' => 'Уведьте ваше імя хоснователя',
'createacct-another-username-ph' => 'Уведьте імя хоснователя',
'yourpassword' => 'Гесло:',
'userlogin-yourpassword' => 'Гесло',
'userlogin-yourpassword-ph' => 'Уведьте ваше гесло',
'createacct-yourpassword-ph' => 'Уведьте ваше гесло',
'yourpasswordagain' => 'Повторяйте гесло:',
'createacct-yourpasswordagain' => 'Потвердьте гесло',
'createacct-yourpasswordagain-ph' => 'Уведьте гесло знову',
'remembermypassword' => 'Запамнятати моє приголошіня на тім компютерї (максімално $1 {{PLURAL:$1|день|днів}})',
'userlogin-remembermypassword' => 'Приголосити ня на довго',
'userlogin-signwithsecure' => 'Хосновати забеспечене споїня',
'yourdomainname' => 'Ваша домена:',
'password-change-forbidden' => 'На тій вікі не можете мінити гесла.',
'externaldberror' => 'Або ся стала хыба екстерной автентіфікачной датабазы, або не маєте дозволено мінити своє екстерне конто.',
'login' => 'Приголошіня',
'nav-login-createaccount' => 'Приголошіня / створїня конта',
'loginprompt' => 'К приголошіню до {{grammar:2sg|{{SITENAME}}}} мусите мати актівованы cookies.',
'userlogin' => 'Приголошіня / створїня конта',
'userloginnocreate' => 'Приголошіня',
'logout' => 'Одголосити',
'userlogout' => 'Одголошіня',
'notloggedin' => 'Не сьте приголошеный(а)',
'userlogin-noaccount' => 'Не мате конто?',
'userlogin-joinproject' => 'Придайте ся {{grammar:3sg|{{SITENAME}}}}',
'nologin' => "До теперь не маєте конто? '''$1'''.",
'nologinlink' => 'Створити конто',
'createaccount' => 'Вытворити конто',
'gotaccount' => "Уж сьте реґістрованы? '''$1'''.",
'gotaccountlink' => 'Приголошіня',
'userlogin-resetlink' => 'Забыли сьте вашы даны на приголошіня?',
'userlogin-resetpassword-link' => 'Ресетовати ваше гесло',
'helplogin-url' => 'Help:Приголошіня',
'userlogin-helplink' => '[[{{MediaWiki:helplogin-url}}|Поміч з приголошованём]]',
'createacct-join' => 'Ниже уведьте вашы інформації',
'createacct-another-join' => 'Ниже уведьте інформації нового конта',
'createacct-emailrequired' => 'Адреса електронічной пошты',
'createacct-emailoptional' => 'Адреса електронічной пошты (не обовязково)',
'createacct-email-ph' => 'Уведьте вашу адресу електронічной пошты',
'createacct-another-email-ph' => 'Уведьте адресу електронічной пошты',
'createaccountmail' => 'Схосновати дочасне гесло та загнати го на вказану адресу електронічной пошты',
'createacct-realname' => 'Правдиве імя (не обовязково)',
'createaccountreason' => 'Причіна:',
'createacct-reason' => 'Прічіна',
'createacct-reason-ph' => 'Чом собі робите друге конто',
'createacct-captcha' => 'Перевірка беспекы',
'createacct-imgcaptcha-ph' => 'Опиште текст што видите высше',
'createacct-submit' => 'Створити конто',
'createacct-another-submit' => 'Створити інше конто',
'createacct-benefit-heading' => '{{grammar:4sg|{{SITENAME}}}} творять люде як вы.',
'createacct-benefit-body1' => '{{PLURAL:$1|едітованя|едітованя|едітовань}}',
'createacct-benefit-body2' => '{{PLURAL:$1|сторінка|сторінкы|сторінок}}',
'createacct-benefit-body3' => '{{PLURAL:$1|недавный приспіватель|недавны приспівателї|недавных приспівателїв}}',
'badretype' => 'Вами написаны гесла не сугласять.',
'userexists' => 'Уведжене імя хоснователя ся уж хоснує.
Просиме, выберьте інше імя.',
'loginerror' => 'Хыба при приголошованю',
'createacct-error' => 'Хыба створїня конта',
'createaccounterror' => 'Не вдало ся створити конто хоснователя: $1',
'nocookiesnew' => 'Конто хоснователя было створене, але не сьте приголошены.
{{SITENAME}} хоснує cookies про приголошіня але вы маєте cookies выпнуты .
Просиме Вас, повольте їх, а потім ся приголоште знову з вашым новым меном і геслом.',
'nocookieslogin' => '{{SITENAME}} хоснує cookies про приголошіня хоснователїв. Вы маєте cookies выпнуты. Просиме Вас, повольте їх і спобуйте знова.',
'nocookiesfornew' => 'Конто хоснователя не было створене, бо сьме не были годны потвердити ёго походжіня.
Утвердите ся, же маєте дозволены cookies, обновте тоту сторінку і спробуйте то знову.',
'noname' => 'Мусите увести мено свого конта.',
'loginsuccesstitle' => 'Успішне приголошіня',
'loginsuccess' => "'''Теперь працуєте {{grammar:locative|{{SITENAME}}}} під меном $1.'''",
'nosuchuser' => 'Не екзістує хоснователь з меном «$1». У хосновательскых мен ся розлишують малы/великы писмена. Сконтролюйте запис, або собі [[Special:UserLogin/signup|зареґіструйте нове конто]].',
'nosuchusershort' => 'Хоснователь з меном $1 не екзістує.
Перевірте правилность написаня мена.',
'nouserspecified' => 'Мусите задати мено хоснователя.',
'login-userblocked' => 'Тот хоснователь є заблокованый. Приголошіня не є дозволене.',
'wrongpassword' => 'Задали сьте хыбне гесло. Спробуйте іщі раз.',
'wrongpasswordempty' => 'Было задане порожнє гесло. Спробуйте іщі раз.',
'passwordtooshort' => 'Гесло мусить быти довге холем  $1 {{PLURAL:$1|знак|знакы|знаків}}.',
'password-name-match' => 'Ваше гесло не може быти таке саме як і ваше хосновательске мено.',
'password-login-forbidden' => 'Хоснованя того мена хоснователя і гесла было заказане.',
'mailmypassword' => 'Послати нове гесло',
'passwordremindertitle' => 'Нове дочасне гесло на {{grammar:4sg|{{SITENAME}}}}',
'passwordremindertext' => 'Хтось (може Вы, з IP адресы $1) пожадав, жебы сьме Вам послали нове гесло
про приголошіня до {{grammar:2sg|{{SITENAME}}}} ($4). Хоснователёви „$2“ было
прото наставлено дочасне гесло „$3“. Кідь сьте то быв(а) вы, можете ся нынї
приголосити і зволити собі нове гесло. Ваше дочасне гесло кінчіть
о {{PLURAL:$5| єден день|$5 днї|$5 днїв}}.

Кідь сьте о зміну гесла не жадав(а) або сьте собі спомянув(а) на ваше гесло
а уж го мінити не хочете, можете тото повідомліня іґноровати
і хосновати нове гесло.',
'noemail' => 'Хоснователь "$1" не має реґістровану адресу електронічной пошты.',
'noemailcreate' => 'Мусите задати правилну адресу електронічной пошты',
'passwordsent' => 'Нове гесло было послане на адресу електронічной пошты реґістровану про „$1“. Приголосьте ся зясь, кідь го обтримете.',
'blocked-mailpassword' => 'Вашій IP адресї была заблокована можность едітації і сучасно з тым є заблокована функція про засланя нового гесла.',
'eauthentsent' => 'На задану адресу електронічной пошты было послане потверджіня,
Передтым як вам на тоту адресу буде мочі быти засылана далша пошта, слїдуйте інштрукції в ел. пошті, жебы сьте потвердили, же тота адреса справды належыть вам.',
'throttled-mailpassword' => 'Гесло уж было раз заслане під час {{PLURAL:$1|остатнёй годины|остатнїх $1 годин}}.
Жебы ся то не зловжывало та гесло може быти заслане лем раз за $1 {{PLURAL:$1|годину|годины|годин}}.',
'mailerror' => 'Хыба засыланя ел. пошты: $1',
'acct_creation_throttle_hit' => 'Хоснователї приходячі з вашой IP адресы уж днесь створили {{PLURAL:$1|конто|конта|конт}}, што є дозволене максімум. Зато теперь не є дозволено з той IP адресы закладати далшы конта.',
'emailauthenticated' => 'Адреса вашой ел. пошты была овірена дня $2 о $3.',
'emailnotauthenticated' => 'Адреса вашой ел. пошты дотеперь не была овірена, функції ел. пошты суть недоступны.',
'noemailprefs' => 'Шпеціфікуйте адресу ел. пошты, жебы наслїднуючі можности могли фунґовати.',
'emailconfirmlink' => 'Потвердьте свою адресу ел. пошты',
'invalidemailaddress' => 'Уведена адреса ел. пошты не може быти прията, бо она не має правилный формат.
Просиме Вас, уведьте коректну адесу або зохабте поле порожнє.',
'cannotchangeemail' => 'В тій вікі не годен мінити імейловы адресы.',
'emaildisabled' => 'Сесь сервер не годен одосылати імейлы.',
'accountcreated' => 'Конто вытворене',
'accountcreatedtext' => 'Конто хоснователя [[{{ns:User}}:$1|$1]] ([[{{ns:User talk}}:$1|talk]])  было створене.',
'createaccount-title' => 'Вытвориня конта про  {{SITENAME}}',
'createaccount-text' => 'Хтось створив про Вас конто «$2» на сервері проєкту {{SITENAME}} ($4) з геслом «$3», і зазначів вашу адресу електронічной пошты. Мали бы сьте ся што найскоре приголосити і змінити гесло.

Іґноруйте дане повідомлїня, кідь конто было створено помылково.',
'usernamehasherror' => 'Мено хоснователя не сміє обсяговати сімбол мережка (#)',
'login-throttled' => 'Зробили сьте дуже много спроб о приголошіня.
Просиме Вас, почекайте $1 перед далшов спробов.',
'login-abort-generic' => 'Не вдало ся войти до сістемы.',
'loginlanguagelabel' => 'Язык: $1',
'suspicious-userlogout' => 'Ваша пожадавка на одголошіня была одвергнута, бо вызерає то так, же была послана розбитым переглядачом або кешуючім проксі-сервером.',
'createacct-another-realname-tip' => 'Правдиве імя є волительне.
Кідь вы зволите го додати, тото буде пак хосноване на доданя участникового попису про ёго роботу.',

# Email sending
'php-mail-error-unknown' => 'Незнама хыба у PHP mail() функції',
'user-mail-no-addy' => 'Проба одослати електронічну пошту без імейловой адресы.',
'user-mail-no-body' => 'Спроба послати порожнїй або барз куртый імейл.',

# Change password dialog
'changepassword' => 'Змінити гесло',
'resetpass_announce' => 'Приголошуєте ся дочасным геслом, котре было послане електронічнов поштов. Про закончіня приголошіня треба задати нове гесло ту:',
'resetpass_header' => 'Зміна гесла',
'oldpassword' => 'Старе гесло:',
'newpassword' => 'Нове гесло:',
'retypenew' => 'Напиште знову нове гесло:',
'resetpass_submit' => 'Наставити гесло і приголосити ся',
'changepassword-success' => 'Ваше гесло было успішно змінено!',
'resetpass_forbidden' => 'Гесла не є можне змінити',
'resetpass-no-info' => 'Ку тій сторінцї мають прямый приступ лем приголошены хоснователї.',
'resetpass-submit-loggedin' => 'Змінити гесло',
'resetpass-submit-cancel' => 'Сторно',
'resetpass-wrong-oldpass' => 'Неправилне дочасне або актуалне гесло.
Може сьте собі уж гесло успішно змінили, або сьте выжадали нове дочасне гесло.',
'resetpass-temp-password' => 'Дочасне гесло:',
'resetpass-abort-generic' => 'Зміна гесла заблокована была росшырїнём.',

# Special:PasswordReset
'passwordreset' => 'Ресет гесла',
'passwordreset-text-one' => 'Выпиште тот формуларь, жебы сьте могли здобыти нове гесло',
'passwordreset-text-many' => '{{PLURAL:$1|На здобытя нового гесла доповньте єдно з даных.}}',
'passwordreset-legend' => 'Знову наставити гесло',
'passwordreset-disabled' => 'Зновунаставлїня гесла є на тій вікі заказане',
'passwordreset-emaildisabled' => 'Функції електронічной пошты были выпнуы на тій вікі.',
'passwordreset-username' => 'Мено хоснователя:',
'passwordreset-domain' => 'Домена:',
'passwordreset-capture' => 'Посмотрити выслїдный імейл?',
'passwordreset-capture-help' => 'Кідь означіте тото поличко, буде імейл (з дочасным геслом) оркем посланя хоснователёви указаный і вам.',
'passwordreset-email' => 'Адреса електронічной пошты:',
'passwordreset-emailtitle' => 'Детайлы конта на {{SITENAME}}',
'passwordreset-emailtext-ip' => 'Дахто (може Вы, з IP адресы $1) попросив о наставлїня нового гесла до вашого конта на {{grammar:6sg|{{SITENAME}}}} ($4). З тов адресов {{PLURAL:$3|є повязане наступне конто|суть повазяны слїдуючі конта}}:

$2

{{PLURAL:$3|Тото дочасне гесло|Тоты дочасны гесла}} стануть неплатныма {{PLURAL:$5|за день|за $5 днї|за $5 днїв}}.
Теперь бы хотїло, бы сьте ся приголосили та зволлил нове гесло. Кідь тоту просьбу післав хтось другый або сьте ся на старе гесло роспамнятали і не хочете го змінити, можете тото повідомлїня іґноровати та дале хосновати старе гесло.',
'passwordreset-emailtext-user' => '{{gender:$1|Хоснователь|Хоснователька|Хоснователь}} $1 {{grammar:2sg|{{SITENAME}}}} {{gender:$1|попросив|попросила|попросив}} о наставлїня нового гесла к вашому
конту на {{grammar:6sg|{{SITENAME}}}} ($4). К тій адресї {{PLURAL:$3|є спряжене наступне конто|суть спряжены наступну конта}}:

$2

{{PLURAL:$3|Тото дочасне гесло|Тоты дочасны гесла}} кінчать {{PLURAL:$5|о єден день|о $5 днї|о $5 днїв}}.
Нынї бы сьте ся мав(а) приголосити у зволити собі нове гесло. Кідь тоту пожадавку
послав дахто другый або сьте собі на своє старе гесло спомянув(а),і не хочете го
змінити, можете тото повідомлїня іґноровати і надале хосновати старе гесло.',
'passwordreset-emailelement' => 'Імя хоснователя: $1
Дочасне гесло: $2',
'passwordreset-emailsent' => 'Імейл з геслом быв посланый.',
'passwordreset-emailsent-capture' => 'Быв выґенерованый імейл з геслом, што є вказаный ниже.',
'passwordreset-emailerror-capture' => 'Быв выґенерованый імейл з геслом, котрый є указаный ниже, але ся го не вдало загнати {{GENDER:$2|хоснователёви|хосновательцї}}: $1',

# Special:ChangeEmail
'changeemail' => 'Зміна імейловой адресы',
'changeemail-header' => 'Зміна імейловой адресу ку конту',
'changeemail-text' => 'Выповнїнём того формуларя собі зміните імейлову адресу. Про потверджіня зміны будете мусити знову задати своє гесло.',
'changeemail-no-info' => 'Ку тій сторінцї мають прямый приступ лем приголошены хоснователї.',
'changeemail-oldemail' => 'Теперїшня імейлова адреса:',
'changeemail-newemail' => 'Нова імейлова адреса:',
'changeemail-none' => '(жадне)',
'changeemail-password' => 'Ваше гесло на портал {{SITENAME}}:',
'changeemail-submit' => 'Змінити імейл',
'changeemail-cancel' => 'Сторно',

# Special:ResetTokens
'resettokens' => 'Реініціалізація клічів',
'resettokens-text' => 'На тій сторінцї можете реініціалізовати клічі, якы уможнюють приступ к даякым пріватным даным звязаным з вашым контом.

{{GENDER:|Мав|Мала|Мали}} бы сьте то учінити тогды, колы сьте помылково дакому {{GENDER:|прозрадив|прозрадила|прозрадили}}, або ваше конто было зрушене.',
'resettokens-no-tokens' => 'Не є ниякых клічів на реініціалізацію.',
'resettokens-legend' => 'Реініціалізація клічів',
'resettokens-tokens' => 'Клічі:',
'resettokens-token-label' => '$1 (актуалне значіня: $2)',
'resettokens-watchlist-token' => 'Кліч до вебового канала (Atom/RSS) [[Special:Watchlist|змін слїдованых сторінок]]',
'resettokens-done' => 'Клічі были реініціалізованы.',
'resettokens-resetbutton' => 'Реініціалізовати зволены клічі',

# Edit page toolbar
'bold_sample' => 'Товстый текст',
'bold_tip' => 'Шырокый текст',
'italic_sample' => 'Курсива',
'italic_tip' => 'Курсива',
'link_sample' => 'Назва одказу',
'link_tip' => 'Інтерный одказ',
'extlink_sample' => 'http://www.example.com назва одказу',
'extlink_tip' => 'Екстерный одказ (не забудьте http:// prefix)',
'headline_sample' => 'Текст надпису',
'headline_tip' => 'Надпис 2-го рівня',
'nowiki_sample' => 'Вложте ту неформатованый текст',
'nowiki_tip' => 'Іґноровати вікі-форматованя',
'image_tip' => 'Файл',
'media_tip' => 'Одказ на медіа-файл',
'sig_tip' => 'Ваш підпис з датумом і часом',
'hr_tip' => 'Горізонтална лінія (хоснуйте єй скупо)',

# Edit pages
'summary' => 'Куртый опис змін:',
'subject' => 'Тема/надпис:',
'minoredit' => 'Незначна зміна',
'watchthis' => 'Слїдовати тоту сторінку',
'savearticle' => 'Уложыти сторінку',
'preview' => 'Нагляд',
'showpreview' => 'Указати нагляд',
'showlivepreview' => 'Швыдкый нагляд',
'showdiff' => 'Указати зміны',
'anoneditwarning' => "'''Увага''': Не сьте приголошены. Ваша IP-адреса буде записана до історії змін той сторінкы.",
'anonpreviewwarning' => "''Не сьте приголошеный(а). Уложінём буде ваша IP адреса записана в історії  той сторінкы.''",
'missingsummary' => "'''Припомянутя:''' Не задали сьте згорнутя едітації. Кідь іщі раз кликтете на Уложыти зміны, буде вапа едітація записана без згорнутя.",
'missingcommenttext' => 'Задайте коментарь',
'missingcommentheader' => "'''Припомянутя:''' Не задали сьте тему/надпис про тот коментарь.
Кідь іщі раз кликнете на „{{int:savearticle}}“, буде ваша едітація записана і без того.",
'summary-preview' => 'Опис буде:',
'subject-preview' => 'Нагляд темы/надпису:',
'blockedtitle' => 'Хоснователь є блокованый',
'blockedtext' => "'''Ваше хосновательске мено або IP адреса была заблокована.'''

Блокованя зробив $1.
Причіна є ''$2''.

* Початок блокованя: $8
* Конец блокованя: $6
* Блокованый хоснователь: $7

Можете контактовати $1 або іншого [[{{MediaWiki:Grouppage-sysop}}|адміністратора]].
Уважте, же не можете поужыти 'Послати e-mail', кідь не маєте платну адресу ел. пошты во вашых [[Special:Preferences|наставлїня конта]] і кідь вам тота можность не была заказана.
Ваша IP адреса є $3, і ID блокованя є #$5.
Просиме Вас, пиште тоты детайлы во вшыткых запытах на адміністратора.",
'autoblockedtext' => "'''Ваше хосновательске мено або IP адреса была заблокована.'''

Блокованя зробив $1.
Причіна є ''$2''.

* Початок блокованя: $8
* Конец блокованя: $6
* Блокованый хоснователь: $7

Можете контактовати $1 або іншого [[{{MediaWiki:Grouppage-sysop}}|адміністратора]].
Уважте, же не можете поужыти 'Послати e-mail', кідь не маєте платну адресу ел. пошты во вашых [[Special:Preferences|наставлїня конта]] і кідь вам тота можность не была заказана.
Ваша IP адреса є $3, і ID блокованя є #$5.
Просиме Вас, пиште тоты детайлы во вшыткых запытах на адміністратора.",
'blockednoreason' => 'причіна не была задана',
'whitelistedittext' => 'Про едітованя ся мусите $1.',
'confirmedittext' => 'Мусите потвердити вашу адресу ел. пошты передтым як будете едітовати сторінкы.
На сторінцї [[Special:Preferences|наставлїня]] задайте і зохабте собі потвердити свою адресу ел. пошты.',
'nosuchsectiontitle' => 'Секція ненайдена',
'nosuchsectiontext' => 'Пробуєте едітовати секцію, котра не екзістує.
Може была переменована або змазана, покы сьте перезерали сторінку.',
'loginreqtitle' => 'Выжадоване приголошіня',
'loginreqlink' => 'Приголосити ся',
'loginreqpagetext' => 'Ку перезераню іншых сторінок ся мусите $1.',
'accmailtitle' => 'Гесло одослане.',
'accmailtext' => 'Трафунково выґенероване гесло про хоснователя [[User talk:$1|$1]] было послане на $2.
Оно може быти змінене на  [[Special:ChangePassword|сторінцї про зміну гесла]].',
'newarticle' => '(Нова)',
'newarticletext' => "Перешли сте на сторінку, котра іщі не екзістує.
Нову сторінку створите так, же зачнете писати в окнї ниже (вид. [[{{MediaWiki:Helppage}}|сторінка помочі]], про вецей інформації).
Кідь сте ту помылково, просто кликните в переглядачу на '''назад'''",
'anontalkpagetext' => "----''Тото є діскузна сторінка анонімного хоснователя, котрый іщі не має конто або го не хоснує. Про&nbsp;ёго ідентіфікацію прото мусиме хосновати IP адресу. Таку IP адресу може хосновати декілько хоснователїв. Покы сьте анонімный хоснователь і&nbsp;і уважуєте, же вам суть адресованы ірелевантны коментарї, просиме, [[Special:UserLogin/signup|створьте собі конто]] або [[Special:UserLogin|ся приголосте]], уникнете тым будучій замінї з&nbsp;іншыма анонімныма хоснователями.''",
'noarticletext' => 'Теперь на тїй сторінцї не є текст.
Можете [[Special:Search/{{PAGENAME}}|глядати тоту назву]] в іншых сторінках,
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} глядати в лоґах]
або [{{fullurl:{{FULLPAGENAME}}|action=edit}} вытворити сторінку з таков назвов]</span>.',
'noarticletext-nopermission' => 'Теперь на тій сторінцї тексту не є.
Можете [[Special:Search/{{PAGENAME}}|глядати тоту назву]] в іншых сторінках, або <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} глядати в лоґах]</span>, но вы не мате права створити тоту сторінку.',
'missing-revision' => 'Ревізія #$1 сторінкы з назвов „{{PAGENAME}}“ не є.

Гевсе звычайно запрічінене так, же наслїдовали сьте застарїлый історічный одказ на сторінку, котра была уж змазана.
Детайлы можуть быти найджены в [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} книзї змазаных сторінок].',
'userpage-userdoesnotexist' => 'Хосновательске конто під назвов  "<nowiki>$1</nowiki>" не є реґістроване. Сконтролюйте ці хочете вытворити/едітовати тоту сторінку.',
'userpage-userdoesnotexist-view' => 'Хосновательске конто „$1 не є реґістроване.',
'blocked-notice-logextract' => 'Тот хоснователь є теперь блокованый.
Послїднїй запис в лоґах блоковань є такый:',
'clearyourcache' => "'''Позначка: По уложіню мусите вымазати кеш вашого перезерача, інакше зміны не будете видїти.'''
'''Mozilla / Firefox / Safari:''' При кликнутю на ''Актуалізовати'' тримайте ''Shift'', або стиснийте ''Ctrl-F5'' або ''Ctrl-R'' (на Macintosh ''Command-R'');
'''Opera:''' Вымажте обсяг кеш в меню ''Інштрументы → Наставлїня'';
'''Internet Explorer:''' При кликнутю на ''Актуалізовати'' тримайте ''Ctrl'', або стиснийте ''Ctrl-F5''.",
'usercssyoucanpreview' => "'''Тіп:''' Хоснуйте ґомбічку „{{int:showpreview}}“ про тестованя вашого нового CSS перед уложінём.",
'userjsyoucanpreview' => "'''Тіп:''' Хоснуйте ґомбічку „{{int:showpreview}}“ про тестованя вашого нового коду JavaScript перед уложінём.",
'usercsspreview' => "'''Памятайте, же собі перезерате лем нагляд вашого хосновательского CSS.'''
'''Іщі не было уложено!'''",
'userjspreview' => "'''Памятайте, же тестуєте а перезерате лем нагляд вашого хосновательского JavaScript-у, іщі не быв уложеный!'''",
'sitecsspreview' => "'''Памятайте, же собі перезерате лем нагляд того CSS.'''
'''Іщі не было уложене!'''",
'sitejspreview' => "'''Памятайте, же собі перезерате лем нагляд того JavaScript-у.'''
'''Іщі не быв уложеный!'''",
'userinvalidcssjstitle' => "'''Увага:''' Тема взгляду „$1“ не екзістує. Не забудьте, же хосновательске .css і .js файлы хоснують малы писмена, наприклад {{ns:user}}:{{BASEPAGENAME}}/vector.css, а не {{ns:user}}:{{BASEPAGENAME}}/Vector.css.",
'updated' => '(Зміна уложена)',
'note' => "'''Позначка:'''&nbsp;",
'previewnote' => "'''Памятайте, же то лем нагляд.'''
Зміны іщі не суть уложены!",
'continue-editing' => 'Перейти на поле едітованя',
'previewconflict' => 'Тот нагляд зображує текст так, як буде вызерати по уложіню сторінкы.',
'session_fail_preview' => "'''Вашу пожадавку ся не удало спрацовати, бо были страчены дата сеансу.
Просиме, спробуйте то зясь.
Кідь ся тот проблем буде повторити, спробуйте ся [[Special:UserLogout|одголосити]] і знову приголосити до сістемы.'''",
'session_fail_preview_html' => "'''Вашу пожадавку ся не удало спрацовати, бо были страчены дата сеансу..'''

''Зато же {{SITENAME}} має запнуте хоснованя чістого HTML, нагляд ся про превенцію проти атакам JavaScript-ом не зображує.''

'''Кідь іде о рядну едітацію, спробуйте то знову. Кідь ся тот проблем буде повторити, спробуйте ся [[Special:UserLogout|одголосити]] і знову приголосити до сістемы.'''",
'token_suffix_mismatch' => "'''Ваша едітація не была схвалена, бо ваш вебовый переглядач комолить дакотры знакы в едітованім текстї.
Едітація не была схвалена, жебы ся заборонило пошкоджіню тексту сторінкы.
Тото ся може даколи стати, кідь хоснуєте хыбный вебовый анонімізер.'''",
'edit_form_incomplete' => "'''Часть едітачного формуларя іщі не пришла не сервер; перевірьте комплетность вашых змін і спробуйте іщі раз.'''",
'editing' => 'Едітованя $1',
'creating' => 'Створїня $1',
'editingsection' => 'Едітованя $1 (роздїл)',
'editingcomment' => 'Едітованя $1 (нова секція)',
'editconflict' => 'Конфлікт едітованя: $1',
'explainconflict' => "Дахто змінив сторінку по започатю вашой едітації.
Высше видите актуалный текст сторінкы.
Вашы зміны суть вказаны долов.
Мусите злучіти свої зміны з існуючім текстом.
'''Лем''' высше вказаный текст зістане всокоченый по кликнутю на  „{{int:savearticle}}“.",
'yourtext' => 'Ваш текст',
'storedversion' => 'Уложена верзія',
'nonunicodebrowser' => "'''Увага: Ваш переглядач не є способный працовати із знаками Unicode. Абы сьте могли тоту сторінку беспечно едітовати: вшыткы знакы мімо  ASCII суть зображены в гексадецімалных кодах.'''",
'editingold' => "'''Увага: Нынї едітуєте застаралу верзію той сторінкы. Кідь єй уложыте, вшыткы пізнїшы зміны ся стратять.'''",
'yourdiff' => 'Роздїлы',
'copyrightwarning' => "Просиме Вас, уважте, што вшыткы додаваня і зміны до {{grammar:genitive|{{SITENAME}}}} будуть выпущены під ліценціов $2 (від. $1).
Кідь не хочете, жебы написане вами ся немилосердно едітовало і шырило, пак ту не пиште.<br />
Вы тыж потверджуєте, што написане вами ту належыть вам або взяте із жрідла, што є  публічным ці вольным жрідлом.
'''НЕ ПУБЛІКУЙТЕ ТУ БЕЗ ДОЗВОЛЇНЯ МАТЕРІАЛЫ, ШТО СЯ СОКОТЯТЬ АВТОРЬСКЫМ ПРАВОМ!''",
'copyrightwarning2' => "Просиме Вас, уважте, што вшыткы додаваня і зміны до  {{grammar:2sg|{{SITENAME}}}} можуть быти другыма хоснователями управлены, змінены ці одстранены. Покы собі не желате, жебы ваш текст быв немилосердно управляный, пак го до {{grammar:2sg|{{SITENAME}}}} не укладайте.<br />
Уложінём приспевку ся завязуєте, же є вашым дїлом або є скопірованый із жрідел, котры не суть хоронены авторьскым правом (тзв. <em>public domain</em>), детайлы найдете на $1. '''Не копіруйте дїла хоронены авторьскым правом без дозволїня!'''",
'longpageerror' => "'''ХЫБА: Пробуєте уложыти текст о великости {{PLURAL:$1|$1 КіБ}}, але дозволене максімум є {{PLURAL:$2|$2 КіБ}}. Ваша едітація не може быти уложена.'''",
'readonlywarning' => "'''УВАГА: Датабаза была замкнута про утримованя, также не будете мочі уложыти свої зміны. Можете сі го окопіровати до файлу і уложыти го про пізнїше.'''

Адміністратор сервера, котрый датабазу замкнув, зохабив тото пояснїня: $1",
'protectedpagewarning' => "'''Увага: Тота сторінка была замкнута, также єй можуть едітовати лем адміністраторы.'''
Ниже є про перегляд зображеный найновшый протоколовачій запис:",
'semiprotectedpagewarning' => "'''Увага: Тота сторінка была замкнута, также єй можуть едітовати лем реґістрованы хоснователї.'''
Ниже є про перегляд зображеный найновшый протоколовачій запис:",
'cascadeprotectedwarning' => "'''Увага:''' Тота сторінка была замкнута, также єй можуть едітовати лем адміністраторы. Є включена на наслїдуючі, каскадовым замком {{PLURAL:$1|замкнуту, сторінку|замкнуты, сторінкы|замкнуты, сторінкы}}:",
'titleprotectedwarning' => "'''Увага: Тота сторінка была замкнута, также про єй створїня є треба [[Special:ListGroupRights|особісты права]].'''
Ниже є про перегляд зображеный найновшый протоколовачій запис:",
'templatesused' => '{{PLURAL:$1|Шаблона, хоснована|Шаблоны, хоснованы}} на тій сторінці:',
'templatesusedpreview' => '{{PLURAL:$1|Шаблона, хоснована|Шаблоны, хоснованы}} у тім перегляді:',
'templatesusedsection' => '{{PLURAL:$1|Шаблона, хоснована|Шаблоны, хоснованы}} у тій секції:',
'template-protected' => '(всокочена)',
'template-semiprotected' => '(частково всокочене)',
'hiddencategories' => 'Тота сторінка належыть до $1 {{PLURAL:$1|схованa катеґорія|схованы катеґорії|схованых катеґорій}}:',
'nocreatetext' => 'На {{grammar:6sg|{{SITENAME}}}} є можливость створїна новых сторінок обмеджена.
Можете ся вернути і едітовати уж екзістуючу сторінку, або [[Special:UserLogin|ся приголосити ці ся реґістровати]].',
'nocreate-loggedin' => 'Не маєте права створёвати новы сторінкы.',
'sectioneditnotsupported-title' => 'Едітованя секцій не є підпороване',
'sectioneditnotsupported-text' => 'На тій сторінцї не є підпороване едітованя єдной секції.',
'permissionserrors' => 'Хыба права',
'permissionserrorstext' => 'Не маєте поволїня той операції з  {{PLURAL:$1|такой причіны|такых причін}}:',
'permissionserrorstext-withaction' => 'Не маєте дозволїня на $2 з {{PLURAL:$1|такой прічіны|такых прічін}}:',
'recreate-moveddeleted-warn' => "'''Увага: Пробуєте знову створити сторінку, котра была в минулости змазана.'''

Уважте, ці справды треба знову створити тоту сторінку.
Ниже видите запис переменовань і змазань той сторінкы:",
'moveddeleted-notice' => 'Тота сторінка была змазана.
Запис змазаня а переменованя сі можете посмотрити ниже.',
'log-fulllog' => 'Зобразити вшыток запис',
'edit-hook-aborted' => 'Едітованя было сторноване процедуров без близшого пояснїня.',
'edit-gone-missing' => 'Сторінку ся не вдало обновити.
Асі была змазана.',
'edit-conflict' => 'Конфлікт едітованя.',
'edit-no-change' => 'Ваша едітація была іґнорована, бо ся не зробила жадна зміна тексту.',
'postedit-confirmation' => 'Ваше едітованя было уложене.',
'edit-already-exists' => 'Не вдало ся створити нову сторінку, бо она уж існує.',
'defaultmessagetext' => 'Преднаставленый текст повідомлїня',
'content-failed-to-parse' => 'Не вдало ся проаналізовати $2 як тіп $1: $3',
'invalid-content-data' => 'Неприпустны даны',
'content-not-allowed-here' => 'Обсяг «$1» недозволеный на сторінцї [[$2]]',
'editwarning-warning' => 'Зохаблїнём той стрінкы ся можуть вшыткы учінены зміны стратити.
Кідь сьте приголошеный, можете тото варованя выпнути на картї „Едітованя“ в хосновательскім інтерфейсї.',

# Content models
'content-model-wikitext' => 'вікітекст',
'content-model-text' => 'чістый текст',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => 'Увага: Тота сторінка обсягує дуже много кликаня выконово тяжкых функцій парсера.
Дозволеный ліміт є $2, теперь шак  {{PLURAL:$1|ту єдно кликаня є|ту суть  $2 кликаня|ту є $2 кликань}}.',
'expensive-parserfunction-category' => 'Сторінкы з дуже великым чіслом кликаня функції парсера',
'post-expand-template-inclusion-warning' => 'Позірь: розмір шаблон на включіня є барз великый.
Дакотры шаблоны не будуть включены.',
'post-expand-template-inclusion-category' => 'Сторінкы з перевышуючов великостёв включеных шаблон',
'post-expand-template-argument-warning' => 'Увага: Тота сторінка обсягує принайменшім єден арґумент шаблоны, котрый є по роспакованю дуже великый.
Тоты арґументы были іґнорованы.',
'post-expand-template-argument-category' => 'Сторінкы обсягуючі іґнорованы арґументы шаблон',
'parser-template-loop-warning' => 'Найдженый цікл шаблон: [[$1]]',
'parser-template-recursion-depth-warning' => 'Перевышеный ліміт глубкы рекурзівного вкладаня шаблон ($1)',
'language-converter-depth-warning' => 'Перевышеный ліміт глубкы у языковій конверзії ($1)',
'node-count-exceeded-category' => 'Сторінкы перевышуючі чісло вузлів',
'node-count-exceeded-warning' => 'Сторінка перевышыла чісло вузлів',
'expansion-depth-exceeded-category' => 'Сторінкы превышують глубку експанзії',
'expansion-depth-exceeded-warning' => 'Сторінка перевышыла глубку експанзії',
'parser-unstrip-loop-warning' => 'Выявлене заціклїня unstrip',
'parser-unstrip-recursion-limit' => 'Перевышеный ліміт рекурзії unstrip ($1)',
'converter-manual-rule-error' => 'Найджена хыба в ручнім правилї конверзії языка',

# "Undo" feature
'undo-success' => 'Едітованя може быти зрушене.
Просиме Вас перевірьте порівнаня ниже, жебы сьте ся упевнили в тім, што хочете зробити а потім уложте зміны долов, жебы сьте закінчіли зрушіня едітованя.',
'undo-failure' => 'Едітованя не могло быти зрушене про конфлікт міджілеглых змін.',
'undo-norev' => 'Тото едітованя не можете вернути назад, бо не екзістує або было змазане.',
'undo-summary' => 'Зрушена верзія $1 од хоснователя [[Special:Contributions/$2|$2]] ([[User talk:$2|діскузія]])',
'undo-summary-username-hidden' => 'Зрушыти ревізію $1 скрытого хоснователя',

# Account creation failure
'cantcreateaccounttitle' => 'Не є можне вытворити конто',
'cantcreateaccount-text' => "Створёваня новых конт з той IP адресы ('''$1''') было заблоковане хоснователём [[User:$3|$3]].

$3 зазначів тоту причіну: ''$2''",

# History pages
'viewpagelogs' => 'Вказати лоґы про тоту сторінку',
'nohistory' => 'Про тоту статю не екзістує історія едітовань.',
'currentrev' => 'Актуална ревізія',
'currentrev-asof' => 'Точна ревізія на $1',
'revisionasof' => 'Ревізія $1',
'revision-info' => 'Верзія од $1; $2',
'previousrevision' => 'Старша верзія',
'nextrevision' => 'Новша ревізія →',
'currentrevisionlink' => 'Актуална ревізія',
'cur' => 'актуална',
'next' => 'насл.',
'last' => 'ост.',
'page_first' => 'перша',
'page_last' => 'послїдня',
'histlegend' => "(теперь) = роздїлы од актуалной верзії,
(послїдня) = роздїлы од попереднёй верзії, '''м''' = мале едітованя",
'history-fieldset-title' => 'Перегляднути історію',
'history-show-deleted' => 'Лем змазаны',
'histfirst' => 'найстаршы',
'histlast' => 'найновшы',
'historysize' => '($1 {{PLURAL:$1|байт|байты|байтів}})',
'historyempty' => '(порожнє)',

# Revision feed
'history-feed-title' => 'Історія едітовань',
'history-feed-description' => 'Історія едітовань той сторінкы на вікі',
'history-feed-item-nocomment' => '$1 в $2',
'history-feed-empty' => 'Такой сторінкы нїт.
Могли єй вымазати ці переменовати.
Спробуйте [[Special:Search|найти на вікі]] подобны сторінкы.',

# Revision deletion
'rev-deleted-comment' => '(згорнутя едітованя вымазане)',
'rev-deleted-user' => '(імя автора стерто)',
'rev-deleted-event' => '(лоґ одстраненый)',
'rev-deleted-user-contribs' => '[мено хоснователя або IP адреса одстранене – едітованя є в приспевках сховане]',
'rev-deleted-text-permission' => "Тота ревізія была  '''вылучена''.
Детайлы можуть быти зазначены в [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} книзї вылученых сторінок].",
'rev-deleted-text-unhide' => "Тота ревізія была '''вылучена'''.
Детайлы можуть быти зазначены в [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} книзї вылученых сторінок].
Можете  сі все [$1 тоту ревізію посмотрити], кідь хочете.",
'rev-suppressed-text-unhide' => "Тота ревізія была '''затаєна'''.
Детайлы можуть быти уведены в  [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} записї утаїня].
Можете сі [$1 тоту ревізію посмотрити], кідь  хочете.",
'rev-deleted-text-view' => "Тота ревізія была  '''вылучена'''.
Можете сі єй посмотрити; детайлы можуть быти зазначены в [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} книзї вылученых сторінок].",
'rev-suppressed-text-view' => "Тота верзія была '''затаєна'''.
Можете сі єй посмотрити; детайлы можуть быти зазначены в  [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} записї затаїня].",
'rev-deleted-no-diff' => "Тот розділ сі не можете помострити, бо єдна з &nbsp;ревізій была '''змазана'''.
Детайлы можуть быти зазначены в [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} книзї змазаных сторінок].",
'rev-suppressed-no-diff' => "Тот роздїл сі не можете посмотрити, бо єдна з ревізій была  '''змазана'''.",
'rev-deleted-unhide-diff' => "Єдна з ревізій про тото порівнаня была '''вылучена'''.
Можете сі але  [$1 тоту ревізію посмотрити], кідь хочете.",
'rev-suppressed-unhide-diff' => "Єдна з ревізій про тото порівнаня была '''затаєна'''.
Детайлы можуть быти уведены в  [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} записї утаїня].
Можете сі але [$1 тоту ревізію посмотрити], кідь  хочете.",
'rev-deleted-diff-view' => "Єдна з ревізій про тото порівнаня была  '''вылучена'''.
Можете сі єй посмотрити; детайлы можуть быти зазначены в [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} книзї вылученых сторінок].",
'rev-suppressed-diff-view' => "Єдна з ревізій про тото порівнаня была '''затаєна'''.
Можете сі єй посмотрити; детайлы можуть быти зазначены в  [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} записї затаїня].",
'rev-delundel' => 'вказати/сховати',
'rev-showdeleted' => 'вказати',
'revisiondelete' => 'Вылучіти/обновити ревізії',
'revdelete-nooldid-title' => 'Хыбна цілёва ревізія',
'revdelete-nooldid-text' => 'Не зволили сьте ревізії, на котрых хочете тоту функцію выконати.',
'revdelete-no-file' => 'Зазначеный файл не єствує.',
'revdelete-show-file-confirm' => 'На певно собі хочете посмотрити вылучену ревізію файлу „<nowiki>$1</nowiki>“ з $2, $3?',
'revdelete-show-file-submit' => 'Гей',
'revdelete-selected' => "'''{{PLURAL:$2|Выбрана ревізія|Выбраны ревізії}} з [[:$1]]:'''",
'logdelete-selected' => "'''{{PLURAL:$1|Выбрана протоколована подїя|Выбраны протоколованы подїї}}:'''",
'revdelete-text' => "'''Змазаны верзії і подїї будуть надале зображены в історії сторінкы і протоколовачіх записах, але дакотры їх части не будуть публікованы.'''
Другы адміністраторы {{GRAMMAR:2sg|{{SITENAME}}}} собі будуть мочі схованый обсяг перезерати і помочов того самого інтерфейсу го будуть мочі обновити,
кідь не были наставлены далшы обмеджіня.",
'revdelete-confirm' => 'Просиме Вас, потвердьте, же то хочете справды зробити, же собі усвідомлюєте резултат і же є то в згодї з  [[{{MediaWiki:Policy-url}}|правилами]].',
'revdelete-suppress-text' => "Затаёваня бы ся мало хосновати  ''лем''' в такых припадах:
* Потенціално огварячі інформації
* Непотрібны особны дата
*: ''адресы і телефонны чісла, родны чісла ітд.''",
'revdelete-legend' => 'Наставити обмеджіня ревізії',
'revdelete-hide-text' => 'Сховати текст ревізії',
'revdelete-hide-image' => 'Сховати обсяг файлу',
'revdelete-hide-name' => 'Сховати дїю а ціль',
'revdelete-hide-comment' => 'Сховати коментарь',
'revdelete-hide-user' => 'Сховату мено автора/IP-адресу',
'revdelete-hide-restricted' => 'Затаїти дата перед адміністраторами',
'revdelete-radio-same' => '(не мінити)',
'revdelete-radio-set' => 'Гей',
'revdelete-radio-unset' => 'Нїт',
'revdelete-suppress' => 'Затаїти дата перед адміністраторами',
'revdelete-unsuppress' => 'Одстранити обмеджіня на вернутій верзії',
'revdelete-log' => 'Причіна:',
'revdelete-submit' => 'Апліковати на {{PLURAL:$1|зазначену ревізію|зазначены ревізії}}',
'revdelete-success' => "'''Видимость ревізії успішно змінена.'''",
'revdelete-failure' => "'''Не вдало ся змінити видимость ревізії:'''
$1",
'logdelete-success' => "'''Видимость події успішно наставена.'''",
'logdelete-failure' => "'''Не вдало ся наставити видимость протоколу.'''
$1",
'revdel-restore' => 'Змінити видимость',
'pagehist' => 'Історія сторінкы',
'deletedhist' => 'Вымазана історія',
'revdelete-hide-current' => 'Хыба сховаваня положкы з $1 $2: їднать ся о сучасну ревізію.
Тота ся не дасть сховати.',
'revdelete-show-no-access' => 'Хыба зображіня положкы з $1 $2: оно є позначене як «з обмедженым приступом».
Не маєте приступ до нёго.',
'revdelete-modify-no-access' => 'Хыба зміны положкы з $1 $2: оно є позначене як «з обмедженым приступом».
Не маєте приступ до нёго.',
'revdelete-modify-missing' => 'Хыба зміны положкы з ID $1: положка ся не нашла в датабазї!',
'revdelete-no-change' => "'''Увага:''' положка од $2, $1 уж має жаданы наставлїня видительности.",
'revdelete-concurrent-change' => 'Хыба зміны положкы з $1 $2. Видить ся, же міджітым як сьте едітовали вы, єй став змінив хтось іншый.
Просиме, перевірте лоґы.',
'revdelete-only-restricted' => 'Хыба схованя положкы з $2 $1: Не можете положкы сховати лем перед адміністраторами жебы сьте сучасно выбрали і дакотру з далшых можностей затаїня.',
'revdelete-reason-dropdown' => '*Звыклы причіны змазаня
** Порушіня авторьскых прав
** Невгодны коментарї або особны дата
** Потенціално огварячі дата',
'revdelete-otherreason' => 'Інша/далша причіна:',
'revdelete-reasonotherlist' => 'Інша причіна',
'revdelete-edit-reasonlist' => 'Едітуй причіны вымазаня',
'revdelete-offender' => 'Автор ревізії:',

# Suppression log
'suppressionlog' => 'Запис затаїня',
'suppressionlogtext' => 'Тото є список мазаня і блокованя загорнюючі спрятаня обсягу і перед адміністраторами.
Смотьте тыж [[Special:BlockList|Список вшыткых актуалных блоковань]].',

# History merging
'mergehistory' => 'Злучованя історії сторінок',
'mergehistory-header' => 'Тота сторінка Вам дозволить злучіти історію єдной жрідловой сторінкы з новшов сторінков.
Пересвіджте ся, же тота зміна утриме повязаность і поступность  історії сторінкы.',
'mergehistory-box' => 'Злучіти ревізії двох сторінок:',
'mergehistory-from' => 'Жрідлова сторінка:',
'mergehistory-into' => 'Цілёва сторінка:',
'mergehistory-list' => 'Історія злучітельных сторінок',
'mergehistory-merge' => 'Наслїдуючі верзії сторінкы [[:$1|$1]] можуть быти злучены в [[:$2]]. Перепиначом выберте верзію, котра урчіть, же лем тота і старшы едітації будуть злучены. Рахуйте з тым, же хоснованём  навіґачных одказів будуть дата страчены.',
'mergehistory-go' => 'Вказати злучітельны едітації',
'mergehistory-submit' => 'Споїти ревізії',
'mergehistory-empty' => 'Не дають ся споїти жадны ревізії.',
'mergehistory-success' => '$3 {{PLURAL:$3|ревізія|ревізії|ревізійí}} сторінкы [[:$1]] {{PLURAL:$3|была успішно злучена|были успішно злучены|было успішно злуґено}} до сторінкы [[:$2]].',
'mergehistory-fail' => 'Злучіня історій ся не дасть зробити. Перевірте заданы сторінкы і їх історії',
'mergehistory-no-source' => 'Жрідлова сторінка $1 не існує.',
'mergehistory-no-destination' => 'Цілёва сторінка «$1» не екзістує.',
'mergehistory-invalid-source' => 'Жрідлова сторінка мусить мати правилну назву.',
'mergehistory-invalid-destination' => 'Цілёва сторінка мусить мати правилну назву.',
'mergehistory-autocomment' => 'Злучена сторінка [[:$1]] до сторінкы [[:$2]]',
'mergehistory-comment' => 'Злучена сторінка [[:$1]] до сторінкы [[:$2]]: $3',
'mergehistory-same-destination' => 'Жрідлова і цілёва сторінка не можуть быти такы самы',
'mergehistory-reason' => 'Причіна:',

# Merge log
'mergelog' => 'Книга злучованя',
'pagemerge-logentry' => 'злучує сторінку [[$1]] зо сторінков [[$2]] (верзії до $3)',
'revertmerge' => 'Роздїлити',
'mergelogpagetext' => 'Ниже є список найновшых злучінь історії єдной сторінкы з другов.',

# Diffs
'history-title' => '$1: Історія змін',
'difference-title' => '$1: Роздїлы міджі ревізіями',
'difference-title-multipage' => '$1 і $2: Роздїлы міджі сторінками',
'difference-multipage' => '(Роздїлы міджі сторінками)',
'lineno' => 'Рядок $1:',
'compareselectedversions' => 'Порівнати выбраны верзії',
'showhideselectedversions' => 'Вказати/скрыти выбраны ревізії',
'editundo' => 'вернути назад',
'diff-empty' => '(Не є роздїлне)',
'diff-multi' => '({{PLURAL:$1|Не є зображена єдна міджілегла верзія|Не суть зображены $1 міджілеглы верзії|Не є зображено $1 міджілеглых верзій}} од {{PLURAL:$2|1 хоснователя|$2 хоснователїв}} .)',
'diff-multi-manyusers' => '(Не є зображено $1 міджілеглых верзій од веце як $2 {{PLURAL:$2|хоснователя|хоснователїв}}.)',
'difference-missing-revision' => '{{PLURAL:$2|Єдна з ревізій|$2 ревізії|$2 ревізій}} к пожадованому порівнаню ($1) {{PLURAL:$2|не є|не суть|не є}}.

Гевсе є звычайно запрічінене так, же наслїдовали сьте застарїлый одказ історічнов ревізіов сторінкы, котра уж была змазана.
Детайлы можуть быти найджены в [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} книзї змазаный сторінок].',

# Search results
'searchresults' => 'Резултаты гляданя',
'searchresults-title' => 'Резултаты гляданя "$1"',
'toomanymatches' => 'Пожадавцї одповідать дуже много згод, спробуйте іншый запыт.',
'titlematches' => 'Сторінкы з одповідаючов назвов',
'textmatches' => 'Сторінкы з одповідаючім текстом',
'notextmatches' => 'Немає згоду в текстах сторінок',
'prevn' => '{{PLURAL:$1|попередня $1|попереднї $1|попереднїх $1}}',
'nextn' => '$1 {{PLURAL:$1|далша|далшы|далшых}}',
'prevn-title' => '{{PLURAL:$1|Попереднїй резултат|Попереднї $1 резултаты|Попереднїх $1 резултатів}}',
'nextn-title' => '{{PLURAL:$1|Далшый резултат|Далшы $1 резултаты|Далшых $1 резултатів}}',
'shown-title' => 'Вказати $1 {{PLURAL:$1|резултат|резултаты|резултатів}} на сторінку',
'viewprevnext' => 'Перегляднути ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-exists' => "'''У тій вікі є сторінка з назвов «[[:$1]]»'''",
'searchmenu-new' => "'''Створити сторінку «[[:$1]]» у тій вікі!'''",
'searchprofile-articles' => 'Статї',
'searchprofile-project' => 'Сторінкы помочі і проєкту',
'searchprofile-images' => 'Мултімедія',
'searchprofile-everything' => 'Вшытко',
'searchprofile-advanced' => 'Росшырене',
'searchprofile-articles-tooltip' => 'Переглядавати: $1',
'searchprofile-project-tooltip' => 'Переглядавати: $1',
'searchprofile-images-tooltip' => 'Глядати файлы',
'searchprofile-everything-tooltip' => 'Переглядавати вшыток обсяг (рахувчі діскузны сторінкы)',
'searchprofile-advanced-tooltip' => 'Задати просторы назв, де ся мать глядати',
'search-result-size' => '$1 ({{PLURAL:$2|слово|слова|слов}})',
'search-result-category-size' => '{{PLURAL:$1|1 член|$1 члена|$1 членів}} ({{PLURAL:$2|1 підкатеґорія|$2 підкатеґорії|$2 підкатеґорії}}, {{PLURAL:$3|1 файл|$3 файлы|$3 файлів}})',
'search-result-score' => 'Одповідность: $1 %',
'search-redirect' => '(напрямити $1)',
'search-section' => '(секція $1)',
'search-suggest' => 'Може сьте мали на мыслї: $1',
'search-interwiki-caption' => 'Сестерьскы проєкты',
'search-interwiki-default' => '$1 резултаты:',
'search-interwiki-more' => '(веце)',
'search-relatedarticle' => 'Звязаный',
'searcheverything-enable' => 'Глядати во вшыткых просторах назв',
'searchrelated' => 'звязаный',
'searchall' => 'вшыткы',
'showingresults' => "Ниже {{PLURAL:$1|вказане|вказаны|вказаных}} '''$1''' {{PLURAL:$1|резултат|резултаты|резултатів}}, почінаючіх з №&nbsp;'''$2'''",
'showingresultsnum' => 'Ниже вказано <strong>$3</strong> {{PLURAL:$3|резултат|резултаты|резултатів}}, почінаючі з №&nbsp;<strong>$2</strong>.',
'showingresultsheader' => "{{PLURAL:$5|Резултат '''$1''' з '''$3'''|Резултаты '''$1 — $2''' з '''$3'''}}  про '''$4'''",
'search-nonefound' => 'На вашу пожадавку не были найджены жадны резултаты.',
'powersearch-legend' => 'Росшырене гляданя',
'powersearch-ns' => 'Глядати у просторах назв:',
'powersearch-redir' => 'Список напрямлинь',
'powersearch-togglelabel' => 'Позначіти:',
'powersearch-toggleall' => 'Вшыткы',
'powersearch-togglenone' => 'Жадный',
'search-external' => 'Екстерне гляданя',
'searchdisabled' => '<p>Перебачте. Повнотекстове гляданя є дочасно недоступне. Затля можете спробовати гляданя Google; є але можне, же ёго резултаты не мусять быти актуалны.</p>',
'search-error' => 'Як ся глядало трафіла ся хыба: $1',

# Preferences page
'preferences' => 'Наставлїня',
'mypreferences' => 'Наставлїня',
'prefs-edits' => 'Чісло едітовань:',
'prefs-skin' => 'Взгляд',
'skin-preview' => 'Попереднїй нагляд',
'datedefault' => 'Імпліцітный',
'prefs-beta' => 'Бета-функції',
'prefs-datetime' => 'Датум і час',
'prefs-labs' => 'Експеріменталны функції',
'prefs-user-pages' => 'Сторінкы хоснователя',
'prefs-personal' => 'Інформації о хоснователёви',
'prefs-rc' => 'Послїднї зміны',
'prefs-watchlist' => 'Слїдованы сторінкы',
'prefs-watchlist-days' => 'Чісло днїв зображеных в слїдованых сторінках:',
'prefs-watchlist-days-max' => 'Максімално $1 {{PLURAL:$1|день|днї|днїв}}',
'prefs-watchlist-edits' => 'Чісло едітовань зображеных во вылїпшенім списку слїдованых сторінок:',
'prefs-watchlist-edits-max' => 'Максімалне чісло: 1000',
'prefs-watchlist-token' => 'Ключ до списку слїдованых сторінок:',
'prefs-misc' => 'Іншы наставлїня',
'prefs-resetpass' => 'Змінити гесло',
'prefs-changeemail' => 'Змінити імейл',
'prefs-setemail' => 'Наставити імейлову адресу',
'prefs-email' => 'Параметры електронічной пошты',
'prefs-rendering' => 'Взгляд',
'saveprefs' => 'Уложыти',
'restoreprefs' => 'Обновити вшыткы штандартны наставлїня (у вшыткых секціях)',
'prefs-editing' => 'Едітованя',
'rows' => 'Рядкы:',
'columns' => 'Колонкы:',
'searchresultshead' => 'Гляданя',
'stub-threshold' => 'Поріг про форматованя одказу як <a href="#" class="stub">одказів на "stub"</a> (v bajtech):',
'stub-threshold-disabled' => 'Выпнуте',
'recentchangesdays' => 'За кілько днїв вказовати новы едітованя',
'recentchangesdays-max' => '(максімум $1 {{PLURAL:$1|день|днї|днїв}})',
'recentchangescount' => 'Чісло імпліцітно зображованых едітовань:',
'prefs-help-recentchangescount' => 'Тыкать ся послїднїх змін, історії сторінок і протоколовачіх записів.',
'prefs-help-watchlist-token2' => 'Гевсе є тайный кліч до вебового порталу вашых слїдованых сторінок. Хоцьхто, хто тот кліч буде мав, буде міг ваш список слїдованых сторінок чітати, та же го никому не давайте.
[[Special:ResetTokens|Кликнутём гев го можете реініціалізовати.]]',
'savedprefs' => 'Ваше наставлїня было уложене.',
'timezonelegend' => 'Часова зона:',
'localtime' => 'Містный час:',
'timezoneuseserverdefault' => 'Хосновати штандартне наставлїня вікі ($1)',
'timezoneuseoffset' => 'Інше (задайте посун)',
'servertime' => 'Час сервера:',
'guesstimezone' => 'Начітати з переглядача',
'timezoneregion-africa' => 'Африка',
'timezoneregion-america' => 'Америка',
'timezoneregion-antarctica' => 'Антарктіда',
'timezoneregion-arctic' => 'Арктіка',
'timezoneregion-asia' => 'Азія',
'timezoneregion-atlantic' => 'Атлантічный океан',
'timezoneregion-australia' => 'Австралія',
'timezoneregion-europe' => 'Европа',
'timezoneregion-indian' => 'Індійскый океан',
'timezoneregion-pacific' => 'Тихый океан',
'allowemail' => 'Поволити електронічну пошту од іншых хоснователїв',
'prefs-searchoptions' => 'Гляданя',
'prefs-namespaces' => 'Просторы назв',
'defaultns' => 'Інакше глядати в такых просторах назв:',
'default' => 'імпліцітне',
'prefs-files' => 'Файлы',
'prefs-custom-css' => 'Властный CSS',
'prefs-custom-js' => 'Властный JS',
'prefs-common-css-js' => 'Сдїляне CSS/JS про вшыткы штілы:',
'prefs-reset-intro' => 'Помочов той сторінкы можете вшыткы наставлїня вернути на імпліцітны годноты.
Тоту операцію не годен вернути назад.',
'prefs-emailconfirm-label' => 'Потверджіня електронічной пошты:',
'youremail' => 'Адреса електронічной пошты:',
'username' => '{{GENDER:$1|Імя хоснователя}}:',
'uid' => 'Ідентіфікатор {{GENDER:$1|хоснователя}}:',
'prefs-memberingroups' => '{{GENDER:$2|Член}} {{PLURAL:$1|ґрупы|ґруп}}:',
'prefs-registration' => 'Час реґістрації:',
'yourrealname' => 'Правдиве імя:',
'yourlanguage' => 'Язык:',
'yourvariant' => 'Варіант языка обсягу:',
'prefs-help-variant' => 'Вами преферованый варіант або правопис, як ся мають на тій вікі зображати обсяговы сторінкы.',
'yournick' => 'Підпис:',
'prefs-help-signature' => 'Коментарї на діскузіях бы ся мали підписовати помочов „<nowiki>~~~~</nowiki>“, што ся змінить на ваш підпис і актуалный час.',
'badsig' => 'Неправилний підпис.
Перевірте коректность HTML-теґів.',
'badsiglength' => 'Ваш підпис барз довгый.
Мусить быти куртшый як $1 {{PLURAL:$1|сімвол|сімволы|сімволів}}.',
'yourgender' => 'Як преферуєте быти охарактерізованый?',
'gender-unknown' => 'Я преферує не барз детайлно',
'gender-male' => 'Він едітує вікі сторінкы',
'gender-female' => 'Она едітує вікі сторінкы',
'prefs-help-gender' => 'Гевсе наштелёваня не є повинне.
Софтвер го хоснує на зволїня ґраматічного роду, коли вас ословлює або вас споминать.
Гевса інформація є публічна.',
'email' => 'Електронічна пошта',
'prefs-help-realname' => 'Скуточне мено (волительно): кідь го задаєте, буде поужыте про означіня авторства вашой роботы на сторінцї.',
'prefs-help-email' => 'Адреса ел. пошты не є повинна, але уможнює засланя нового гесла, кібы сьте забыли своє.',
'prefs-help-email-others' => 'Тыж можете іншым хоснователям вас средством хосновательской сторінкы контактовати, без того жебы была ваша адреса прозраджена.',
'prefs-help-email-required' => 'Адреса електронічной пошты є потрібна.',
'prefs-info' => 'Основны інформації',
'prefs-i18n' => 'Інтернаціоналізація',
'prefs-signature' => 'Підпис',
'prefs-dateformat' => 'Формат датуму',
'prefs-timeoffset' => 'Часовый посун',
'prefs-advancedediting' => 'Общі параметры',
'prefs-editor' => 'Едітор',
'prefs-preview' => 'Нагляд',
'prefs-advancedrc' => 'Росшырены можности',
'prefs-advancedrendering' => 'Розшырены можности',
'prefs-advancedsearchoptions' => 'Розшырены можности',
'prefs-advancedwatchlist' => 'Розшырены можности',
'prefs-displayrc' => 'Наставлїня  взгляду',
'prefs-displaysearchoptions' => 'Наставлїня  взгляду',
'prefs-displaywatchlist' => 'Наставлїня  взгляду',
'prefs-tokenwatchlist' => 'Кліч',
'prefs-diffs' => 'Порівнаня верзії',
'prefs-help-prefershttps' => 'Тот параметер набуде чінности по вашім далшім входї до сістемы.',

# User preference: email validation using jQuery
'email-address-validity-valid' => 'Адреса ел. пошты вызерать быти правилна',
'email-address-validity-invalid' => 'Задайте правилну адресу ел. пошты',

# User rights
'userrights' => 'Справа хосновательскых ґруп',
'userrights-lookup-user' => 'Управовати хосновательскы ґрупы',
'userrights-user-editname' => 'Задайте мено хоснователя:',
'editusergroup' => 'Едітовати хосновательскы ґрупы',
'editinguser' => "Зміна прав хоснователя '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'Змінити ґрупы хоснователя',
'saveusergroups' => 'Уложыти хосновательскы ґрупы',
'userrights-groupsmember' => 'Член ґруп:',
'userrights-groupsmember-auto' => 'Автоматічный  член ґруп:',
'userrights-groups-help' => 'Можете мінити ґрупы, до котрых належыть хоснователь:
* Кідь є позначене  поличко, хоснователь належыть до той ґрупы.
* Не позначене  поличко значіть, же хоснователь у тій ґрупі не є.
* Звіздочка (*) значіть, же не можете тоту ґрупу одобрати, буде ли придана, або наспак.',
'userrights-reason' => 'Причіна:',
'userrights-no-interwiki' => 'Не маєте поволїня мінити права хоснователїв на іншых вікі.',
'userrights-nodatabase' => 'Датабаза $1 не екзістує або не є місцёва.',
'userrights-nologin' => 'Мусите ся [[Special:UserLogin|приголосити]] на конто адміністратора, жебы сьте могли мінити права хоснователїв.',
'userrights-notallowed' => 'Вы не мате права придати або одстранити хосновательскы права.',
'userrights-changeable-col' => 'Ґрупы, котры можете змінити',
'userrights-unchangeable-col' => 'Ґрупы, котры не можете змінити',
'userrights-conflict' => 'Конфлікт змін прав хоснователїв! Просиме, перевірьте зміны і потвердьте їх.',
'userrights-removed-self' => 'Вы успішно позбавили ся властных прав. Зато уж веце не мате приступ до той сторінкы.',

# Groups
'group' => 'Ґрупа:',
'group-user' => 'Хоснователї',
'group-autoconfirmed' => 'Автопотверджены хоснователї',
'group-bot' => 'Боты',
'group-sysop' => 'Адміністраторы',
'group-bureaucrat' => 'Бірократы',
'group-suppress' => 'Ревізоры',
'group-all' => '(вшыткы)',

'group-user-member' => '{{GENDER:$1|хоснователь|хоснователька|хоснователь}}',
'group-autoconfirmed-member' => '{{GENDER:$1|автопотвердженый хоснователь|автопотверджена хоснователька|автопотвердженый хоснователь}}',
'group-bot-member' => '{{GENDER:$1|бот|ботка|бот}}',
'group-sysop-member' => '{{GENDER:$1|адміністратор|адміністраторка|адміністратор}}',
'group-bureaucrat-member' => '{{GENDER:$1|бюрократ|бюрократка|бюрократ}}',
'group-suppress-member' => '{{GENDER:$1|ревізор|ревізорка|ревізор}}',

'grouppage-user' => '{{ns:project}}:Хоснователї',
'grouppage-autoconfirmed' => '{{ns:project}}:Автопотверджены хоснователї',
'grouppage-bot' => '{{ns:project}}:Боты',
'grouppage-sysop' => '{{ns:project}}:Адміністраторы',
'grouppage-bureaucrat' => '{{ns:project}}:Бірократы',
'grouppage-suppress' => '{{ns:project}}:Ревізоры',

# Rights
'right-read' => 'Чітаня сторінок',
'right-edit' => 'Едітованя сторінок',
'right-createpage' => 'Вытворїня сторінок (не діскузных)',
'right-createtalk' => 'Вытворїня сторінок діскузії',
'right-createaccount' => 'Вытворїня новых конт хоснователїв',
'right-minoredit' => 'Означованя  едітовань як малых',
'right-move' => 'Переменованя сторінок',
'right-move-subpages' => 'Переменованя сторінок і їх підсторінок',
'right-move-rootuserpages' => 'Переменованя корінёвых сторінок хоснователїв',
'right-movefile' => 'Переменовати файлы',
'right-suppressredirect' => 'Нестворіня напрямлїня про переменоваю сторінкы',
'right-upload' => 'Наладовованя файлів',
'right-reupload' => 'Переписованя екзістуючіх файлів',
'right-reupload-own' => 'Переписованя файлів ладованых од себе самого',
'right-reupload-shared' => 'Наладованя локалных файлів жебы перекрыли тотых в сполочнім усховищу',
'right-upload_by_url' => 'Наладовованя файлів з URL адрес',
'right-purge' => 'Очіщіня кешу про сторінкы без потверджовачого діалоґу',
'right-autoconfirmed' => 'Не тыкать ся лімітів основаных на IP',
'right-bot' => 'Быти поважованый за автоматічный процес',
'right-nominornewtalk' => 'Невыписованя новых повідомлїнь по малых управах діскузной сторінкы',
'right-apihighlimits' => 'Хоснованя высшых лімітів в  API запытах',
'right-writeapi' => 'Хосновати API про писаня',
'right-delete' => 'Змазаня сторінок',
'right-bigdelete' => 'Мазаня сторінок з довгов історіёв',
'right-deletelogentry' => 'Мазаня тай обновлїня окремых записів лоґів
,',
'right-deleterevision' => 'Мазаня і обновованя конкретных ревізій сторінок',
'right-deletedhistory' => 'Зображованя змазаных положок в історії без одповідаючого тексту',
'right-deletedtext' => 'перегляд змазаного тексту і роздїлів міджі змазаныма верзіами',
'right-browsearchive' => 'Гляданя вымазаных сторінок',
'right-undelete' => 'Обновлїня вымазаных сторінок',
'right-suppressrevision' => 'Перегляд і обновованя ревізій схованых перед адміністраторами',
'right-suppressionlog' => 'Перегляд пріватных записів',
'right-block' => 'Блокованя іншых хоснователїв од едітованя',
'right-blockemail' => 'Блокованя хоснователя од посыланя е-пошты',
'right-hideuser' => 'Блокованя мена хоснователя і ёго схованя',
'right-ipblock-exempt' => 'Обходжіня блокованя IP адрес, їх россягів і автоблокованя',
'right-proxyunbannable' => 'Обходжіня автоматічного блокованя проксі серверів',
'right-unblockself' => 'Одблоковати самого себе',
'right-protect' => 'Зміна ровни замків і едітованя каскадово замкнутых сторінок',
'right-editprotected' => 'Едітованя сторінок замкнутых на „{{int:protect-level-sysop}}“',
'right-editsemiprotected' => 'Едітованя сторінок замкнутых на „{{int:protect-level-autoconfirmed}}“',
'right-editinterface' => 'Едітованя інтерфейсу хоснователя',
'right-editusercssjs' => 'Едітованя CSS і JS файлів іншых хоснователїв',
'right-editusercss' => 'Едітованя CSS файлів іншых хоснователїв',
'right-edituserjs' => 'Едітованя JS файлів іншых хоснователїв',
'right-editmyusercss' => 'Едітовати вашы властны хосновательскы CSS файлы.',
'right-editmyuserjs' => 'Едітовати вашы властны хосновательскы JavaScript файлы',
'right-viewmywatchlist' => 'Перезераня властного списку слїдованых сторінок',
'right-editmywatchlist' => 'Едітованя властного списку слїдованых сторінок. Усвідомте собі, же дакотры дїї будуть до нёго придавати сторінкы і без такого права.',
'right-viewmyprivateinfo' => 'Перезераня властных пріватных даных (напр. імейлова адреса, правдиве імя)',
'right-editmyprivateinfo' => 'Зміна вашых пріватных даных (напр. імейлова адреса, правдиве імя)',
'right-editmyoptions' => 'Зміна вашых хосновательскых наставлїнь',
'right-rollback' => 'Швыдкый реверт управ послїднёго хоснователя едітуючого дану сторінку',
'right-markbotedits' => 'Означованя ревертів як едітованя робота',
'right-noratelimit' => 'Не має обмеджіня в швыдкости',
'right-import' => 'Імпорт сторінок з іншых вікі',
'right-importupload' => 'Імпорт сторінок через наладованя файлів',
'right-patrol' => 'Позначованя едітовань як перевіреных',
'right-autopatrol' => 'Автоматічне означованя едітовань як перевіреных',
'right-patrolmarks' => 'Зобразованя патролёваных сторінок в Послїднїх змінах',
'right-unwatchedpages' => 'Зображіня списку неслїдованых сторінок',
'right-mergehistory' => 'Злучованя історії сторінок',
'right-userrights' => 'Зміна вшыткых прав остатнім хоснователям',
'right-userrights-interwiki' => 'Зміна прав хоснователям на іншых вікі',
'right-siteadmin' => 'Замыкана і одомыканя датабазы',
'right-override-export-depth' => 'Експорт сторінок включаючі звязаны сторінкы з глубков до 5',
'right-sendemail' => 'Посыланя пошты іншым хоснователям',
'right-passwordreset' => 'Перезераня імейлів про зміну гесла',

# Special:Log/newusers
'newuserlogpage' => 'Лоґ вытварянь хоснователїв',
'newuserlogpagetext' => 'Тото є список ново реґістрованых хоснователїв.',

# User rights log
'rightslog' => 'Лоґ хосновательскых прав',
'rightslogtext' => 'Тото є протокол зміны прав хоснователїв',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'прочітати тоту сторінку',
'action-edit' => 'едітованя той сторінкы',
'action-createpage' => 'створїня сторінок',
'action-createtalk' => 'Вытворїня сторінок діскузії',
'action-createaccount' => 'Вытворїня того конта хоснователя',
'action-minoredit' => 'означіти тото едітованя як мале',
'action-move' => 'Переменовати тоту сторінку',
'action-move-subpages' => 'переменованя той сторінкы зо вшыткыма єй підсторінками',
'action-move-rootuserpages' => 'переменовати корінёвы сторінкы хостователїв',
'action-movefile' => 'переменовати тот файл',
'action-upload' => 'наладовати тот файл',
'action-reupload' => 'переписати тот екзістуючій файл',
'action-reupload-shared' => 'перекрыти тот файл зо сполочного уложыштя',
'action-upload_by_url' => 'наладовати тот файл з URL адресы',
'action-writeapi' => 'хосновати API про писаня',
'action-delete' => 'Вымазати тоту сторінку',
'action-deleterevision' => 'вымазати тоту ревізію сторінкы',
'action-deletedhistory' => 'зобразити історію змазаных ревізій той сторінкы',
'action-browsearchive' => 'глядати змазаны сторінкы',
'action-undelete' => 'обновити тоту сторінку',
'action-suppressrevision' => 'сконтролёвати і обновити тоту сховану ревізію',
'action-suppressionlog' => 'перегляд того пріватного лоґу',
'action-block' => 'блокованя того хоснователя',
'action-protect' => 'змінити рівень охраны той сторінкы',
'action-rollback' => 'швыдко вернути управы послїднёго хоснователя едітуючого дану сторінку',
'action-import' => 'імпорт той сторінкы з іншой вікі',
'action-importupload' => 'імпорт той сторінкы з файлу',
'action-patrol' => 'позначіти чуджі едітованя як перевірены',
'action-autopatrol' => 'означіти властных едітовань як патролованы',
'action-unwatchedpages' => 'зображіня списку неслїдованых сторінок',
'action-mergehistory' => 'Злучіти історію той сторінкы',
'action-userrights' => 'Зміна прав вшыткым хоснователям',
'action-userrights-interwiki' => 'зміна прав хоснователїв на іншых вікі',
'action-siteadmin' => 'замыкати або одомыкати датабазу',
'action-sendemail' => 'посылати імейлы',
'action-editmywatchlist' => 'едітовати ваш список слїдованых сторінок',
'action-viewmywatchlist' => 'перезерати ваш список слїдованых сторінок',
'action-viewmyprivateinfo' => 'перезерати вашы пріватны даны',
'action-editmyprivateinfo' => 'едітовати вашы пріватны інформації',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|зміна|зміны|змін}}',
'enhancedrc-since-last-visit' => '$1 {{PLURAL:$1|од остатнёй навщівы}}',
'recentchanges' => 'Послїднї зміны',
'recentchanges-legend' => 'Можности послїднїх змін',
'recentchanges-summary' => 'Слїдуйте послїднї зміны на {{grammar:genitive|{{SITENAME}}}}  на тій сторінцї.',
'recentchanges-noresult' => 'В данім періодї, не было ниякых змін, штобы одповідали тым крітеріям.',
'recentchanges-feed-description' => 'На тотїм каналу слїдуєте послїднї зміны на {{grammar:6sg|{{SITENAME}}}}.',
'recentchanges-label-newpage' => 'Тым едітованём была створена нова сторінка',
'recentchanges-label-minor' => 'Тото є мала зміна',
'recentchanges-label-bot' => 'Тото едітованя зроблене ботом',
'recentchanges-label-unpatrolled' => 'Тота зміна дотеперь не была патролёвана.',
'recentchanges-legend-newpage' => '$1 — нова сторінка',
'rcnotefrom' => 'Ниже {{PLURAL:$1|є|суть|є}} найвеце <b>$1</b> {{PLURAL:$1|зміна|зміны|змін}} од <b>$2</b>.',
'rclistfrom' => 'Вказати едітованя почінаючі з $1.',
'rcshowhideminor' => '$1 маленькы едітованя',
'rcshowhidebots' => '$1 ботів',
'rcshowhideliu' => '$1 приголошеных',
'rcshowhideanons' => '$1 анонімів',
'rcshowhidepatr' => '$1 перевірене едітованя',
'rcshowhidemine' => '$1 мої едітованя',
'rclinks' => 'Вказати послїднї $1 зміны за $2 днїв<br />$3',
'diff' => 'різн.',
'hist' => 'історія',
'hide' => 'сховати',
'show' => 'вказати',
'minoreditletter' => 'м',
'newpageletter' => 'Н',
'boteditletter' => 'б',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|слїдуючій хоснователь|слїдуючі хоснователї|слїдуючіх хоснователїв}}]',
'rc_categories' => 'Лем з катеґорій (роздїлёвач «|»)',
'rc_categories_any' => 'Будь-якый',
'rc-change-size-new' => '$1 {{PLURAL:$1|байтt|байты|байтів}} по змінї',
'newsectionsummary' => '/* $1 */ нова секція',
'rc-enhanced-expand' => 'Вказати детайлы',
'rc-enhanced-hide' => 'Сховати детайлы',
'rc-old-title' => 'спочатку створена як $1',

# Recent changes linked
'recentchangeslinked' => 'Повязаны зміны',
'recentchangeslinked-feed' => 'Повязаны зміны',
'recentchangeslinked-toolbox' => 'Повязаны зміны',
'recentchangeslinked-title' => 'Зміны звязаны з «$1»',
'recentchangeslinked-summary' => "Тото є список недавных змін на сторінках на котры одказує задана сторінка (або котры належать до той катеґорії).
Сторінкы з [[Special:Watchlist|вашого списку слїдованых]] суть вызначены '''тучно'''.",
'recentchangeslinked-page' => 'Назва сторінкы:',
'recentchangeslinked-to' => 'Вказати зміны на сторінках, одказуючіх на задану сторінку',

# Upload
'upload' => 'Наладовати файл',
'uploadbtn' => 'Наладовати файл',
'reuploaddesc' => 'Зрушыти ладованя а вернути ся до формы наладовованя',
'upload-tryagain' => 'Уложыти зміненый попис файлу',
'uploadnologin' => 'Не сьте приголошеный(а)',
'uploadnologintext' => 'Про наладованя файлу ся мусите $1.',
'upload_directory_missing' => 'Адресарь про наладовованя файлів ($1) хыбить тай вебовый сервер го не годен створити.',
'upload_directory_read_only' => 'До адресаря наладованых файлів ($1) не мать вебовый сервер права запису.',
'uploaderror' => 'Під час ладованя ся притрафила хыба',
'upload-recreate-warning' => "'''Увага: Файл з тов назвов быв оперед змазаный ці переменованый.'''

Ту є про перегляд зображеный список мазаня і переменованя той сторінкы:",
'uploadtext' => "Ниже даный формуларь служыть на наладовованя файлів. Уж наладованы файлы собі можете перезерати і глядати помочов [[Special:FileList|списку наладованых файлів]], кажде наладованя ся тыж зазначує до [[Special:Log/upload|книгы наладованя]], змазаня суть в [[Special:Log/delete|книзї змазаных сторінок]].

Про вложіня образчіка до сторінкы хоснуйте єден із слїдуючіх способів запису:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Файл.jpg]]</nowiki></code>''' до сторінкы вложыть цїлый образок,
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Файл.png|thumb|left|Попис]]</nowiki></code>''' вложыть нагляд в рамику зарівнанім на лівый бік, з пописом „Попис“,
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:Файл.ogg]]</nowiki></code>''' вложыть дірект одказ на файл, без того жебы ся зобразив на сторінцї.",
'upload-permitted' => 'Дозволены тіпы  файлів: $1.',
'upload-preferred' => 'Преферованы тіпы файлів: $1',
'upload-prohibited' => 'Заказаны тіпы файлів: $1.',
'uploadlog' => 'книга наладованя',
'uploadlogpage' => 'Лоґ наладованых файлів',
'uploadlogpagetext' => 'Ниже найдете список найновшых файлів. Смотьте [[Special:NewFiles|ґалерію новых образків]] про веце візуалного нагляду.',
'filename' => 'Назва файлу:',
'filedesc' => 'Попис',
'fileuploadsummary' => 'Попис:',
'filereuploadsummary' => 'Зміны у файлі:',
'filestatus' => 'Авторьскы права:',
'filesource' => 'Жрідло:',
'uploadedfiles' => 'Наладованы файлы',
'ignorewarning' => 'Іґноровати варованя тай уложыти файл.',
'ignorewarnings' => 'Іґноровати вшыткы варованя',
'minlength1' => 'Назва файлу мусить мати холем єдну літеру.',
'illegalfilename' => 'Назва файлу "$1" обсягує буквы, котры не суть дозволены в назвах сторінок. Просиме, переменуйте файл і спробуйте го наладовати зясь.',
'filename-toolong' => 'Назвы файлів не можуть быти довшы, як 240 байтів.',
'badfilename' => 'Назва файлу была змінена на „$1“.',
'filetype-mime-mismatch' => 'Росшырїня файлу ".$1" не одповідать ёго MIME тіпу ($2).',
'filetype-badmime' => 'Не є дозволено наладововати файлы MIME тіп „$1“.',
'filetype-bad-ie-mime' => 'Неможливо наладовати тот файл, бо Internet Explorer бы го тримав за „$1“, што є не дозволеный і потенціално небеспечный тіп файлу.',
'filetype-unwanted-type' => "„.$1“''' є нежеланый формат файлу. {{PLURAL:$3|Желаный формат файлів є|Желаны форматы файлів суть}} $2.",
'filetype-banned-type' => "'''„.$1“''' {{PLURAL:$4|є недозволеный формат файлів|суть недозволены форматы файлів}}.
{{PLURAL:$3|Дозволеный формат фалів|Дозволены форматы файлів суть}} $2.",
'filetype-missing' => 'Файл не має росшырїня (наприклад, «.jpg»).',
'empty-file' => 'Наладованый файл є порожнїй.',
'file-too-large' => 'Наладованый файл є барз великый.',
'filename-tooshort' => 'Назва файлу є барз коротка.',
'filetype-banned' => 'Тот тіп файлу є заказаный.',
'verification-error' => 'Тот файл не перешов овіринём файлів.',
'hookaborted' => 'Пожадована вами зміна была одмітнута дакотрым росшырінём.',
'illegal-filename' => 'Тота назва файлу не є дозволена.',
'overwrite' => 'Не слободно переписати екзістуючій файл.',
'unknown-error' => 'Трафила ся незнама хыба.',
'tmp-create-error' => 'Не вдало ся створити дочасный файл.',
'tmp-write-error' => 'Хыба запису до дочасного файлу.',
'large-file' => 'Ся рекомендує, жебы довжка файлу непересяговала $1, тот файл має $2.',
'largefileserver' => 'Розмір файлу є векшый як ліміт наставленый на сервері.',
'emptyfile' => 'Файл, котрый сьте вложыли ся видить быти порожнїй. Могла то запричінити хыба в назві файлу. Просиме, перевірте ці сьте справды хотїли вложыти тот файл.',
'windows-nonascii-filename' => 'Тота вікі не підпорує назвы файлів з шпеціалныма сімболами.',
'fileexists' => 'Файл з тов назвов уж екзістує, просиме посмотьте ся на <strong>[[:$1]]</strong>, покы не знаєте напевно, ці хочете тот файл нагородити.
[[$1|thumb]]',
'filepageexists' => 'Пописова сторінка про файл з тов назвов уж была на  <strong>[[:$1]]</strong> створена, але одповідаючій файл дотеперь не екзістує.
Згорнутя, котре ту зазначіте, ся на пописовій сторінцї не зобразить.
Кідь там хочете своє згорнутя зобразити, будете мусити дану сторінку едітовати мануално. [[$1|thumb]]',
'fileexists-extension' => 'Уже екзістує файл з подобным іменом: [[$2|thumb]]
* Назва наладованого файлу: <strong>[[:$1]]</strong>
* Назва екзістуючого файлу: <strong>[[:$2]]</strong>
Выберте іншу назву.',
'fileexists-thumbnail-yes' => "Тот файл є асі образчік в зменшеній великости ''(нагляд)''. [[$1|thumb]]
Перевірте файл <strong>[[:$1]]</strong>.
Кідь є вказаный файл векшый, але інакше єднакый, не треба окремо наладовати ёго зменшену верзію.",
'file-thumbnail-no' => "Назва файлу ся зачінать на <strong>$1</strong>.
Може є то образчік в зменшеній великости ''(нагляд)''.
Заладуйте файл в повнім розлишіню, покы є ку діспозіції, або зміньте назву файлу.",
'fileexists-forbidden' => 'Файл з таков назвов уж екзістує і не є дозволено го переписати.
Кідь хочете тот файл наладовати, вернийте ся і звольте іншу назву.
[[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Файл з тов назвов уж екзістує в сполочнім усховищу. Кідь і наперек тому хочете ваш файл наладовати, вернийте ся і звольте іншу назву. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Тот файл є дуплікат {{PLURAL:$1|файлу|такых файлів}}:',
'file-deleted-duplicate' => 'Ідентічный файл ку тому ([[:$1]]) быв уж скоре змазаный. Передтым як файл знову заладуєте, бы сьте мали перевірити записы о попереднёму змазаню.',
'uploadwarning' => 'Позірь к наладованю',
'uploadwarning-text' => 'Просиме, зміньте опис файлу ниже і спробуйте то знову.',
'savefile' => 'Уложыти файл',
'uploadedimage' => 'наладовав "[[$1]]"',
'overwroteimage' => 'наладована нова верзія "[[$1]]"',
'uploaddisabled' => 'Наладовованя файлів заборонене.',
'copyuploaddisabled' => 'Наладовованя файлів через URL є выпнуте.',
'uploadfromurl-queued' => 'Ваша пожадавка на наладовованя файлу была уложена до шоры.',
'uploaddisabledtext' => 'Наладовованя файлів є выпнуте.',
'php-uploaddisabledtext' => 'В PHP є выпнуте наладовованя файлів. Просиме, перевірьте наставлїня file_uploads.',
'uploadscripted' => 'Тот файл обсягує HTML-код або скріпт, якый може быти неправилно інтерпретованый вебовым переглядячом.',
'uploadvirus' => 'Файл обсягує вірус! Детайлы: $1',
'uploadjava' => 'Тот файл є ZIP архів, котрый обсягує .class-файл Java.
Наладованя Java-файлів не є дозволене, бо они можуть запрічінити обход забеспечіня сістемы.',
'upload-source' => 'Жрідловый файл',
'sourcefilename' => 'Назва жрідлового файлу:',
'sourceurl' => 'Жрідлова URL-адреса:',
'destfilename' => 'Назва цілёвого файлу:',
'upload-maxfilesize' => 'Максімалный розмір файлу: $1',
'upload-description' => 'Попис файлу',
'upload-options' => 'Параметры наладовованя',
'watchthisupload' => 'Слїдовати тот файл',
'filewasdeleted' => 'Файл з таков назвов уж екзістовав а быв змазаный. Детайлы обсягує $1.',
'filename-bad-prefix' => "Назва наладовованого файлу ся зачінать на '''„$1“''', што не є назва звычайно приряджована діґіталным фотоапаратом. Звольте іншу назву, котра ваш файл попише лїпше.",
'upload-success-subj' => 'Наладованя было успішне',
'upload-success-msg' => 'Файл вами наладованый з [$2] є доступный на [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Проблем з наладованём',
'upload-failure-msg' => 'У вами наладованого файлу выник проблем  з [$2]::

$1',
'upload-warning-subj' => 'Позірь к наладованю',
'upload-warning-msg' => 'Під час вашого наладовованя файлу [$2] ся притрафив проблем. Кідь го хочете вырїшыти, можете ся вернути до  [[Special:Upload/stash/$1|формуларя наладовованя]].',

'upload-proto-error' => 'Неплатный протокол',
'upload-proto-error-text' => 'Наладованя одлеглого файлу пожадує зазначіня URLs з початком <code>http://</code> або <code>ftp://</code>.',
'upload-file-error' => 'Інтерна хыба',
'upload-file-error-text' => 'При спробі створити дочасный файл настала внутрїшня хыба на серверї.
Просиме контактуйте  [[Special:ListUsers/sysop|адміністратора]].',
'upload-misc-error' => 'Незнама хыба',
'upload-misc-error-text' => 'Незнана хыба ся трафила під час наладованя файлу. Перевірте ці є  URL правилна і приступна і спробуйте то знову. Кідь ся хыба обявить знову, контактуйте [[Special:ListUsers/sysop|адміністратора]]. сістемы.',
'upload-too-many-redirects' => 'URL обсягує барз велё напрямлінь',
'upload-unknown-size' => 'Незнамый розмір',
'upload-http-error' => 'Стала ся хыба HTTP: $1',
'upload-copy-upload-invalid-domain' => 'Наладовованя копірованём негодно з той домены.',

# File backend
'backend-fail-stream' => 'Не вдало ся транслёвати файл $1.',
'backend-fail-backup' => 'Не вдало ся створити резервну копію файлу $1.',
'backend-fail-notexists' => 'Файл $1 не існує.',
'backend-fail-hashes' => 'Не вдало ся обтримати гешы файлів про порівнаня.',
'backend-fail-notsame' => 'Неідентичный файл $1 вже існує.',
'backend-fail-invalidpath' => '$1 є неправилна степка к місцю уложіня.',
'backend-fail-delete' => 'Не вдало ся вылучіти файл $1.',
'backend-fail-describe' => 'Не вдало ся змінити метаданы файлу «$1».',
'backend-fail-alreadyexists' => 'Файл $1 вже існує.',
'backend-fail-store' => 'Не вдало ся уложыти файл $1 в $2.',
'backend-fail-copy' => 'Не вдало ся скопіровати файл $1 до $2.',
'backend-fail-move' => 'Не вдало ся перемістити файл $1 до $2.',
'backend-fail-opentemp' => 'Не вдало ся отворити дочасный файл.',
'backend-fail-writetemp' => 'Не вдало ся записати до дочасного файлу.',
'backend-fail-closetemp' => 'Не вдало ся заперти дочасный файл.',
'backend-fail-read' => 'Не вдало ся прочітати файл $1.',
'backend-fail-create' => 'Не вдало ся записати файл $1.',
'backend-fail-maxsize' => 'Не вдало ся записати до файлу $1, бо він векшый як {{PLURAL:$2|$2 байт|$2 байты|$2 байтів}}.',
'backend-fail-readonly' => 'Кінцёва уложна сістема „$1“ моментално лем на чітаня. Прічіна: „$2“',
'backend-fail-synced' => 'Файл "$1" в кінцёвій уложній сістемі в неконзістентнім стані',
'backend-fail-connect' => 'Не вдало ся припоїти до кінцёвой уложной сістемы „$1“.',
'backend-fail-internal' => 'В кінцёвій уложній сістемі „$1“ ся стала незнама хыба.',
'backend-fail-contenttype' => 'Не годно было становити тіп обсягу файлу, жебы уложыти го до „$1“.',
'backend-fail-batchsize' => 'Кінцёве усховище прияло блок з $1 {{PLURAL:файловов операціов|файловыма операціями}};максімум є {{PLURAL:$2|$2}}.',
'backend-fail-usable' => 'Не вдало ся чітати з файлу або записати до файлу $1  про брак прав або хыбуючі адресарї/контайнеры.',

# File journal errors
'filejournal-fail-dbconnect' => 'Не годен ся припоїти к журналовій датабазї усховища «$1».',
'filejournal-fail-dbquery' => 'Не вдало ся актуалізовати журналову датабазу усховища «$1».',

# Lock manager
'lockmanager-notlocked' => 'Файл „$1“ не годен одокмнути, бо не є замкнутый.',
'lockmanager-fail-closelock' => 'Файл із замком про „$1“ не годен заперти.',
'lockmanager-fail-deletelock' => 'Файл із замком про „$1“ не годен змазати.',
'lockmanager-fail-acquirelock' => 'Не годен здобыти замок про „$1“.',
'lockmanager-fail-openlock' => 'Файл із замком про „$1“ не годен отворити.',
'lockmanager-fail-releaselock' => 'Не годен увольнити замок про „$1“.',
'lockmanager-fail-db-bucket' => 'Не годен навязати споїня з достаточнов кількостёв датабаз замків в сеґментї $1.',
'lockmanager-fail-db-release' => 'Замкнутя датабазы $1 не вдало ся увольнити.',
'lockmanager-fail-svr-acquire' => 'Не вдало ся здобыти замок сервера $1.',
'lockmanager-fail-svr-release' => 'Замкнутя сервера $1 не вдало ся увольнити.',

# ZipDirectoryReader
'zip-file-open-error' => 'При одкрытю ZIP-архіву про ёго перевірку выникла хыба.',
'zip-wrong-format' => 'Вказаный файл не є ZIP-файлом',
'zip-bad' => 'ZIP-файл є пошкодженый ці в іншый способ непридатный про чітаня.
Не годен перевірити ёго беспеку.',
'zip-unsupported' => 'Файл хоснує такы можности ZIP, якы MediaWiki не підпорує.
Не годен перевірити ёго беспеку.',

# Special:UploadStash
'uploadstash' => 'Скрыша наладованых файлів',
'uploadstash-summary' => 'Тота сторінка додавать приступ ку файлом котры суть наладованы (або ладованя іщі не скінчіло) але іщі не были опувлікованы на вікі. Тоты файлы не видить нихто окрем хоснователя што їх наладовав.',
'uploadstash-clear' => 'Змазати схованы файлы',
'uploadstash-nofiles' => 'Не маєте жадны схованы файлы.',
'uploadstash-badtoken' => 'Выконаня той дїї не было успішне, може зато, же вашы повірїня про едітованя скінчіли. Попробуйте знову.',
'uploadstash-errclear' => 'Змазаня файлів не было успішне.',
'uploadstash-refresh' => 'Обновити список файлів',
'invalid-chunk-offset' => 'Неприступный посув фраґмента.',

# img_auth script messages
'img-auth-accessdenied' => 'Приступ одопертый',
'img-auth-nopathinfo' => 'Ваш сервер не є наштелёваный так, жебы давав тоту інформацію.
Може фунґує помочов CGI і img_auth на нім не може фунґовати.
Посмотьте https://www.mediawiki.org/wiki/Manual:Image_Authorization.',
'img-auth-notindir' => 'Пожадована стежка не є в конфіґурованім адресарю із наладованыма файлами.',
'img-auth-badtitle' => 'З „$1“  ся не дасть створити платна назва сторінкы.',
'img-auth-nologinnWL' => 'Не сьте приголошеный і „$1“ не є на білім списку.',
'img-auth-nofile' => 'Файл «$1» не екзістує.',
'img-auth-isdir' => 'Пробуєте приступовати до адресаря „$1“.
Дозволеный є лем приступ к файлам.',
'img-auth-streaming' => 'Переношать ся „$1“.',
'img-auth-public' => 'Помочов img_auth.php ся придавають файлы з пріватных вікі.
Тота вікі є наставлена як публічна.
З беспечностных прічін є img_auth.php выпнуте.',
'img-auth-noread' => 'Хоснователь не має приступ про чітаня „$1“.',
'img-auth-bad-query-string' => 'URL обсягує неправилный одказ.',

# HTTP errors
'http-invalid-url' => 'Неправилне URL: $1',
'http-invalid-scheme' => 'URL хоснуючі схемы „$1“  не суть підпорованы.',
'http-request-error' => 'Незнана хыба при одосыланю пожадавкы.',
'http-read-error' => 'Хыба чітаня HTTP.',
'http-timed-out' => 'Час про HTTP пожадавкы уплинув.',
'http-curl-error' => 'Хыба при чітаню з URL: $1',
'http-bad-status' => 'Під час HTTP пожадавкы притрафив ся проблем: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'Не вдало ся досягнути URL.',
'upload-curl-error6-text' => 'Із зазначеной URL ся не дасть чітати. Перевірте ці є URL правилно написана і сервер є доступный.',
'upload-curl-error28' => 'Час становленый на наладованя уж вычерьпаный',
'upload-curl-error28-text' => 'Сервер довго не одповідать. Перевірте ці є доступный і кус почекайте і спробуйте то знову.',

'license' => 'Ліценцованя:',
'license-header' => 'Ліценцованя',
'nolicense' => 'Без заданя ліценції',
'license-nopreview' => '(Нагляд недоступный)',
'upload_source_url' => ' (платна, публічно доступна інтернет-адреса)',
'upload_source_file' => ' (файл на вашім компютерї)',

# Special:ListFiles
'listfiles-summary' => 'Тота шпеціална сторінка указує вшыткы наладованы файлы.',
'listfiles_search_for' => 'Глядати файл по назві:',
'imgfile' => 'файл',
'listfiles' => 'Список файлів',
'listfiles_thumb' => 'Мініатура',
'listfiles_date' => 'Датум',
'listfiles_name' => 'Назва',
'listfiles_user' => 'Хоснователь',
'listfiles_size' => 'Розмір (в байтах)',
'listfiles_description' => 'Опис',
'listfiles_count' => 'Верзії',
'listfiles-show-all' => 'Включати стары верзії образчіків',
'listfiles-latestversion' => 'Актуална верзія',
'listfiles-latestversion-yes' => 'Гей',
'listfiles-latestversion-no' => 'Нї',

# File description page
'file-anchor-link' => 'Файл',
'filehist' => 'Історія файлу',
'filehist-help' => 'Кликнути на датум/час, жебы видїти, як тогды вызерав файл.',
'filehist-deleteall' => 'змазати вшытко',
'filehist-deleteone' => 'змазати',
'filehist-revert' => 'вернути назад',
'filehist-current' => 'актуална',
'filehist-datetime' => 'Датум/час',
'filehist-thumb' => 'Мініатура',
'filehist-thumbtext' => 'Мініатура верзії з $1',
'filehist-nothumb' => 'Без мініатуры',
'filehist-user' => 'Хоснователь',
'filehist-dimensions' => 'Розмір обєкта',
'filehist-filesize' => 'Розмір файлу',
'filehist-comment' => 'Коментарь',
'filehist-missing' => 'Файл хыбіть',
'imagelinks' => 'Хоснованя файлу',
'linkstoimage' => '{{PLURAL:$1|Далша сторінка ся одказує|Далшы сторінкы ся одказують}} на тот файл:',
'linkstoimage-more' => 'На тот файл {{PLURAL:$1|одказує веце сторінок|одказує веце як $1 сторінок|одказує веце як $1 сторінок}}.
Наслїдуючій список зображує лем {{PLURAL:$1|тоту першу|першы $1|першых $1}}.
Можете собі посмотрити [[Special:WhatLinksHere/$2|повный список]].',
'nolinkstoimage' => 'На тот файл не одказує жадна сторінка',
'morelinkstoimage' => 'Видїти [[Special:WhatLinksHere/$1|далшы одказы]] на тот файл.',
'linkstoimage-redirect' => '$1 (напрямлїня файлу) $2',
'duplicatesoffile' => '{{PLURAL:$1|Наслїдуючій файл є дуплікат|Наслїдуючі $1 файлы суть дуплікаты|Наслїдуючіх $1 файлів є дуплікатами}} того файлу ([[Special:FileDuplicateSearch/$2|детайлы]]):',
'sharedupload' => 'Тот файл є з $1 і є доступным про іншы проекты.',
'sharedupload-desc-there' => 'Тот файл походить з {{grammar:2sg|$1}} і можуть го хосновати другы проєкты.
Веце інформацій обсягує ёго [$2 сторінка з пописом файлу].',
'sharedupload-desc-here' => 'Тот файл походить з {{grammar:2sg|$1}} і можуть го хосновати другы проєкты.
Ниже суть зображены інформації, котры обсягує ёго [$2 сторінка з пописом файлу].',
'sharedupload-desc-edit' => 'Гевсесь файл походить з {{grammar:2sg|$1}} тай можуть го хосновати другы проєкты.
Може хочете управити [$2 тамтушню строрінку з пописом файлу].',
'sharedupload-desc-create' => 'Гевсесь файл походить з {{grammar:2sg|$1}} тай можуть го хосновати другы проєкты.
Може бы сьте хотїли правити [$2 тамтушню сторінку з пописом файлу].',
'filepage-nofile' => 'Не екзістує файл з таков назвов',
'filepage-nofile-link' => 'Файл з таков назвов не екзістує, але можете [$1 го наладовати].',
'uploadnewversion-linktext' => 'Наладовати нову верзію того файлу',
'shared-repo-from' => 'з $1',
'shared-repo' => 'здїляного усховіща',
'upload-disallowed-here' => 'Вы не годны переписовати тот файл.',

# File reversion
'filerevert' => 'Вернути назад $1',
'filerevert-legend' => 'Вернути назад файл',
'filerevert-intro' => "Вертате назад '''[[Media:$1|$1]]''' на [$4 верзію з $3 $2].",
'filerevert-comment' => 'Причіна:',
'filerevert-defaultcomment' => 'Навернута верзії з $2 дня $1.',
'filerevert-submit' => 'Вернути назад',
'filerevert-success' => "Файл '''[[Media:$1|$1]]''' быв вернутый назад на [$4 верзію з $3 $2].",
'filerevert-badversion' => 'Не є доступна попередня верзія того файлу з одоповідаючов часовов значков.',

# File deletion
'filedelete' => 'Змазаня файлу $1',
'filedelete-legend' => 'Змазати файл',
'filedelete-intro' => "Рихтуєте ся змазати файл '''[[Media:$1|$1]]''' і з цілов історіёв.",
'filedelete-intro-old' => "Рихтуєте ся змазати верзію файлу '''[[Media:$1|$1]]''' з [$4 $3 $2].",
'filedelete-comment' => 'Причіна:',
'filedelete-submit' => 'Вымазати',
'filedelete-success' => "Файл '''$1''' быв змазаный.",
'filedelete-success-old' => "Верзія файлу '''[[Media:$1|$1]]''' з $3 $2 была змазана.",
'filedelete-nofile' => "Файл '''$1''' не екзістує.",
'filedelete-nofile-old' => "Не екзістує архівна верзія файлу '''$1'''із зазначеныма атрібутами.",
'filedelete-otherreason' => 'Інша/додаткова причіна:',
'filedelete-reason-otherlist' => 'Інша причіна',
'filedelete-reason-dropdown' => '*Звычайны причіны змазаня
** Порушіня авторьскых прав
** Дуплікатный файл',
'filedelete-edit-reasonlist' => 'Едітовати причіны вымазаня',
'filedelete-maintenance' => 'Мазаня і обновлёваня є про роботу утримованя дочасно выпнуте.',
'filedelete-maintenance-title' => 'Не годен змазати файл',

# MIME search
'mimesearch' => 'Гляданя по MIME',
'mimesearch-summary' => 'Тота сторінка уможнює філтровати файлы за тіпом MIME.<br />
Вступ: <code>тіп обсягу/підтіп</code>, наприклад <code>image/jpeg</code>.',
'mimetype' => 'MIME-тіп:',
'download' => 'скачати',

# Unwatched pages
'unwatchedpages' => 'Неслїдованы сторінкы',

# List redirects
'listredirects' => 'Список напрямлинь',

# Unused templates
'unusedtemplates' => 'Нехоснованы шаблоны',
'unusedtemplatestext' => 'Тота сторінка обсягує список вшыткых сторінок в простору назв {{ns:template}}, котры не суть вложены до жадной іншой сторінкы. Перед їх змазанём не забудьте перевірити іншы одказы.',
'unusedtemplateswlh' => 'іншы одказы',

# Random page
'randompage' => 'Трафункова статя',
'randompage-nopages' => 'Не є сторінок в {{PLURAL:$2|просторі назв|просторах назв}} $1.',

# Random page in category
'randomincategory' => 'Трафункова сторінка в катеґорії',
'randomincategory-invalidcategory' => '" $1 " не є платна назва катеґорії.',
'randomincategory-nopages' => 'В [[:Category:$1|катеґорії $1]] не суть ниякы сторінкы.',
'randomincategory-selectcategory' => 'Дістати трафункову сторінку з катеґорії: $1 $2.',

# Random redirect
'randomredirect' => 'Трафункове напрямлїня',
'randomredirect-nopages' => 'Простор назв „$1“ не обсягує жадны напрямлїня.',

# Statistics
'statistics' => 'Штатістіка',
'statistics-header-pages' => 'Штатістіка сторінок',
'statistics-header-edits' => 'Штатістіка едітовань',
'statistics-header-views' => 'Штатістіка зображіня',
'statistics-header-users' => 'Штатістіка хоснователїв',
'statistics-header-hooks' => 'Інша штатістіка',
'statistics-articles' => 'Обсяговы сторінкы',
'statistics-pages' => 'Сторінкы',
'statistics-pages-desc' => 'Вшыткы сторінкы на вікі враховано діскузій, напрямлїня ітд.',
'statistics-files' => 'Наладованы файлы',
'statistics-edits' => 'Чісло едітованя од основаня вікі {{SITENAME}}',
'statistics-edits-average' => 'Середнє чісло едітовань на сторінку',
'statistics-views-total' => 'Вшыткых переглядів',
'statistics-views-total-desc' => 'Зображіня неєствуючіх і шпеціалных сторінок ся не рахують',
'statistics-views-peredit' => 'Чісло зображінь на едітованя',
'statistics-users' => 'Реґістрованы [[Special:ListUsers|хоснователї]]',
'statistics-users-active' => 'Актівны хоснователї',
'statistics-users-active-desc' => 'Хоснователї, котры в {{PLURAL:$1|минулого дня|минулых  $1 днїв}} провели даяку операцію',
'statistics-mostpopular' => 'Найчітанїшы сторінкы',

'pageswithprop' => 'Сторінкы з властностями',
'pageswithprop-legend' => 'Сторінкы з властностёв',
'pageswithprop-text' => 'Тота сторінка обсягує список сторінкы, што хоснують вызначену властность сторінкы.',
'pageswithprop-prop' => 'Назва властности:',
'pageswithprop-submit' => 'Выконати',
'pageswithprop-prophidden-long' => 'довге значіня текстовой властности сховане ($1)',
'pageswithprop-prophidden-binary' => 'значіня бінарной властности є сховане ($1)',

'doubleredirects' => 'Двоїты напрямлїня',
'doubleredirectstext' => 'На тій сторінцї є список напрямлїн ведучіх на далшы напрямлїня.
Каждый рядок обсягує одказ на перше і друге напрямлїня і ку тому ціль другого напрямлїня, котрый звычайно вказує мено „реалной“ цілёвой сторінкы, на котру бы ся мало перше напрямлїня одказовати.
<del>Перечаркнуты</del> положкы уж были вырїшены.',
'double-redirect-fixed-move' => 'Сторінка [[$1]] была переменована, нынї напрямлює на [[$2]]',
'double-redirect-fixed-maintenance' => 'Корекція двоїтого напрямлїня з [[$1]] на [[$2]].',
'double-redirect-fixer' => 'Оправарь напрямлїнь',

'brokenredirects' => 'Перерваны напрямлїня',
'brokenredirectstext' => 'Тоты напрямлїня ведуть на неекзістуючі сторінкы:',
'brokenredirects-edit' => 'едітовати',
'brokenredirects-delete' => 'змазати',

'withoutinterwiki' => 'Сторінкы без міджіязыковых одказів',
'withoutinterwiki-summary' => 'Тоты сторінкы не мають міджіязыковый одказ:',
'withoutinterwiki-legend' => 'Префікс',
'withoutinterwiki-submit' => 'Вказати',

'fewestrevisions' => 'Сторінкы з найменєй ревізіями',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|байт|байты|байтів}}',
'ncategories' => '$1 {{PLURAL:$1|катеґорія|катеґорії|катеґорій}}',
'ninterwikis' => '$1 {{PLURAL:$1|міджіязыковый одказ|міджіязыковы одказы|міджіязыковых одказів}}',
'nlinks' => '$1 {{PLURAL:$1|одказ|одказы|одказів}}',
'nmembers' => '$1 {{PLURAL:$1|обєкт|обєкты|обєктів}}',
'nrevisions' => '$1 {{PLURAL:$1|ревізія|ревізії|ревізій}}',
'nviews' => '$1 {{PLURAL:$1|навщіва|навщівы|навщів}}',
'nimagelinks' => 'Хоснованый ня $1 {{PLURAL:$1|сторінка|сторінкы|сторінках}}',
'ntransclusions' => 'хоснованый ня $1 {{PLURAL:$1|сторінка|сторінкы|сторінках}}',
'specialpage-empty' => 'Той пожадавцї не одповідають жадны записы.',
'lonelypages' => 'Статї-сыроты',
'lonelypagestext' => 'Наслїдуючі сторінкы не суть одказованы з іншых сторінок на {{grammar:6sg|{{SITENAME}}}} ани до них вложены.',
'uncategorizedpages' => 'Некатеґоризованы сторінкы',
'uncategorizedcategories' => 'Некатеґоризованы катеґорії',
'uncategorizedimages' => 'Некатеґоризованы файлы',
'uncategorizedtemplates' => 'Некатеґоризованы шаблоны',
'unusedcategories' => 'Нехоснованы катеґорії',
'unusedimages' => 'Нехоснованы файлы',
'popularpages' => 'Популарны статї',
'wantedcategories' => 'Жаданы катеґорії',
'wantedpages' => 'Пожадованы статї',
'wantedpages-badtitle' => 'Резултаты обсягують неправилну назву: $1',
'wantedfiles' => 'Жаданы файлы',
'wantedfiletext-cat' => 'Наступны файлы ся хоснують але не існують. Файл з одлеглых усховищ гев можуть быти написасны, бо існують. Такы фалешны позітіва будуть зображены <del>перечаркнути</del>. Сторінкы, котры включають неіснуючі файлы суть іщі к тому написаны на  [[:$1]].',
'wantedfiletext-nocat' => 'Насупны файлы ся хоснують але не існують. Файлы з одлеглых усховищ гев можуть быти написаны, ай наперек тому же існують. Такы фалешны позітіва будуть зображены <del>перечаркнуты</del>.',
'wantedtemplates' => 'Хыблячі шаблоны',
'mostlinked' => 'Найодказованїшы сторінкы',
'mostlinkedcategories' => 'Найхоснованїшы катеґорії',
'mostlinkedtemplates' => 'Найужыванїшы шаблоны',
'mostcategories' => 'Сторінкы з найвекшым чіслом катеґорій',
'mostimages' => 'Найужыванїшы файлы',
'mostinterwikis' => 'Сторінкы з найвекшым чіслом міджіязыковых одказів',
'mostrevisions' => 'Сторінкы з найвеце ревізіями',
'prefixindex' => 'Вшыткы сторінкы з початком назв',
'prefixindex-namespace' => 'Вшыткы сторінкы з префіксом (простор назв $1)',
'prefixindex-strip' => 'Одсїчі початок назвы в списку',
'shortpages' => 'Курты статї',
'longpages' => 'Найдовшы статті',
'deadendpages' => 'Слїпы сторінкы',
'deadendpagestext' => 'Наслїдуючі сторінкы не одказують на жадну іншу сторінку {{grammar:2sg|{{SITENAME}}}}.',
'protectedpages' => 'Замкнуты сторінкы',
'protectedpages-indef' => 'Лем замкы на нестановлено',
'protectedpages-cascade' => 'Лем каскадовы замкы',
'protectedpagesempty' => 'Жадна сторінка не є замкнута з тыма параметрами.',
'protectedtitles' => 'Замкнуты назвы сторінок',
'protectedtitlesempty' => 'Жадна назва не є замкнута з тыма параметрами.',
'listusers' => 'Список хоснователїв',
'listusers-editsonly' => 'Вказати лем хоснователїв з едітованями',
'listusers-creationsort' => 'Сортовати за датумом створїня',
'usereditcount' => '$1 {{PLURAL:$1|едітованя|едітованя|едітовань}}',
'usercreated' => '{{GENDER:$3|Реґістрованый|Реґістрована|Реґістрованый(а)}} $1 в $2',
'newpages' => 'Новы сторінкы',
'newpages-username' => 'Мено хоснователя:',
'ancientpages' => 'Сторінкы, якы ся найдовше не едітовали',
'move' => 'Переменовати',
'movethispage' => 'Переменовати тоту сторінку',
'unusedimagestext' => 'Наслїдуючі файлы екзістують, але не суть вложены до жадной сторінкы.
Усвідомте собі, же іншы вебовы сторінкы можуть на файл одказовати помочов прямого URL, также ту можуть быти файлы, котры ся актівно хоснують.',
'unusedcategoriestext' => 'Наслїдуючі сторінкы катеґорій екзістують, але жадна сторінка ани інша катеґорія їх не хоснує.',
'notargettitle' => 'Без цілёвой сторінкы',
'notargettext' => 'Тій функції мусите становити цілёву сторінку або хоснователя.',
'nopagetitle' => 'Не екзістує така цілёва сторінка',
'nopagetext' => 'Задана цілёва сторінка не екзістує',
'pager-newer-n' => '{{PLURAL:$1|новша|новшы|новшых}} $1',
'pager-older-n' => '{{PLURAL:$1|старша|старшы|старшых}} $1',
'suppress' => 'Ревізор',
'querypage-disabled' => 'Тота шпеціална сторінка є  заблокована про проблемы з выконом.',

# Book sources
'booksources' => 'Жрідла книг',
'booksources-search-legend' => 'Гляданя інформації про книгы',
'booksources-go' => 'Выконати',
'booksources-text' => 'Ниже є список одказів на серверы продаваючі книгы, або котры можуть мати далшы інформації о книгах, котры глядате.',
'booksources-invalid-isbn' => 'Дане ISBN ся здасть быти неплатне. Перевірте го з оріґіналным жрідлом.',

# Special:Log
'specialloguserlabel' => 'Супроводник:',
'speciallogtitlelabel' => 'Цїль (назва або хоснователь):',
'log' => 'Лоґы',
'all-logs-page' => 'Вшыткы публічны записы',
'alllogstext' => 'Комбіноване зображіня вшыткых доступных протоколёвачіх записів про {{grammar:4sg|{{SITENAME}}}}.
Зображіня можете зужыти выбером тіпу запису, мена хоснователя (залежыть на великости букв) або зазначеной сторінкы (тыж залежыть на великости букв).',
'logempty' => 'Протокол не обсягує жаден одповідаючій запис.',
'log-title-wildcard' => 'Глядати назвы зачінаючі ся з тым текстом',
'showhideselectedlogentries' => 'Вказати/сховати зволены записы лоґу.',

# Special:AllPages
'allpages' => 'Вшыткы сторінкы',
'alphaindexline' => 'од $1 до $2',
'nextpage' => 'Далша сторінка ($1)',
'prevpage' => 'Попередня сторінка ($1)',
'allpagesfrom' => 'Вказати сторінкы, што ся зачінають на:',
'allpagesto' => 'Зобразити сторінкы кінчачі на:',
'allarticles' => 'Вшыткы сторінкы',
'allinnamespace' => 'Вшыткы сторінкы (простор назв $1)',
'allpagessubmit' => 'Выконати',
'allpagesprefix' => 'Вказати сторінкы што ся зачінають на:',
'allpagesbadtitle' => 'Задана назва сторінкы не была правилна або обсяговала префікс міджіязыкового або міджівікі одказу. Може обсяговав буквы, котры не суть дозволены.',
'allpages-bad-ns' => '{{SITENAME}} не має простору назв «$1».',
'allpages-hide-redirects' => 'Сховати напрямлїня',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'Позерати собі кешовану верзію той сторінкы, котра може быти стара аж $1.',
'cachedspecial-viewing-cached-ts' => 'Позерати собі кешовану верзію той сторінкы, котра могла стратити актуалность.',
'cachedspecial-refresh-now' => 'Вказати найновшы.',

# Special:Categories
'categories' => 'Катеґорії',
'categoriespagetext' => '{{PLURAL:$1|Наслїдуюча катеґорія|Наслїдуючі катеґорії}} {{PLURAL:$1|обсягує|обсягують}} сторінкы або файлы.
Невказаны суть то [[Special:UnusedCategories|нехоснованы катеґорії]].
Посмотьте ся тыж на [[Special:WantedCategories|жаданы катеґорії]].',
'categoriesfrom' => 'Вказати сторінкы, што ся зачінають на:',
'special-categories-sort-count' => 'упорядковати за кількостёв',
'special-categories-sort-abc' => 'упорядковати за алфавітом',

# Special:DeletedContributions
'deletedcontributions' => 'Вымазаны приспевкы хоснователя',
'deletedcontributions-title' => 'Вымазаны приспевкы хоснователя',
'sp-deletedcontributions-contribs' => 'приспевкы',

# Special:LinkSearch
'linksearch' => 'Гляданя екстерных одказів',
'linksearch-pat' => 'Шаблона про ґлядяня:',
'linksearch-ns' => 'Простор назв:',
'linksearch-ok' => 'Глядати',
'linksearch-text' => 'Може хосновати заступны сімболы, наприклад „*.wikipedia.org“.<br />
Повиннов є передовшыткым домена найвысшой уровни, напр. „*.org“.<br />
{{PLURAL:$2|Підпорованый протокол|Підпорованы протоколы}}: <code>$1</code> (кідь не є шпеціфікованый та http://).',
'linksearch-line' => '$2 одказує на $1',
'linksearch-error' => 'Заступны сімболы може хосновати лем на початку доменового мена.',

# Special:ListUsers
'listusersfrom' => 'Вказати хоснователїв, што ся зачінають на:',
'listusers-submit' => 'Вказати',
'listusers-noresult' => 'Ненайдженый жаден хоснователь.',
'listusers-blocked' => '({{GENDER:$1|заблокованый|заблокована|заблокованый}})',

# Special:ActiveUsers
'activeusers' => 'Список актівных хоснователїв',
'activeusers-intro' => 'Тото є список хоснователїв, котры были даяк актівны за {{plural:$1|остатнїй день|остатных $1 днїв}}.',
'activeusers-count' => '$1 {{PLURAL:$1|дїя|дїї|дїй}} через {{PLURAL:$3|остатнёго дня|остатнїх  $3 днїв}}',
'activeusers-from' => 'Вказати хоснователїв, што ся зачінають на:',
'activeusers-hidebots' => 'Сховати ботів',
'activeusers-hidesysops' => 'Сховати адміністраторів',
'activeusers-noresult' => 'Ненайдженый жаден хоснователь.',

# Special:ListGroupRights
'listgrouprights' => 'Права ґруп хоснователїв',
'listgrouprights-summary' => 'Тото є список ґруп хоснователїв дефінованых на тій вікіi і&nbsp;їх приступовых прав.

[[{{MediaWiki:Listgrouprights-helppage}}|Детайлны інформації о&nbsp;єднотливых правах]]',
'listgrouprights-key' => 'Леґенда:
* <span class="listgrouprights-granted">Удїлены пвара</span>
* <span class="listgrouprights-revoked">Одобраны права</span>',
'listgrouprights-group' => 'Ґрупа',
'listgrouprights-rights' => 'Права',
'listgrouprights-helppage' => 'Help:Права хоснователїв',
'listgrouprights-members' => '(списoк членїв)',
'listgrouprights-addgroup' => 'Придаваня хоснователїв до {{PLURAL:$2|ґрупы|ґруп}} $1',
'listgrouprights-removegroup' => 'Одобераня хоснователїв до {{PLURAL:$2|ґрупы|ґруп}} $1',
'listgrouprights-addgroup-all' => 'може додавати до вшыткых ґруп',
'listgrouprights-removegroup-all' => 'Одобераня хоснователїв з хоцькотрой ґрупы',
'listgrouprights-addgroup-self' => 'Приданя свого конта до {{PLURAL:$2|ґрупы|ґруп}} $1',
'listgrouprights-removegroup-self' => 'Одстранїня свого конта з {{PLURAL:$2|ґрупы|ґруп}} $1',
'listgrouprights-addgroup-self-all' => 'Приданя свого конта до хоцьякой ґрупы',
'listgrouprights-removegroup-self-all' => 'Одстранїня свого контра з хоцьякой ґрупы',

# Email user
'mailnologin' => 'Без адресы одосланя',
'mailnologintext' => 'Кідь хочете посылати ел. пошту іншым хоснователям, мусите ся [[Special:UserLogin|приголосити]] і мати платну адресу ел. пошты в своїм [[Special:Preferences|наставлїню]].',
'emailuser' => 'Послати імейл тому хоснователёви',
'emailuser-title-target' => 'Загнати імейл {{GENDER:$1|тому хоснователёви|тій хосновательцї}}',
'emailuser-title-notarget' => 'Загнати імейл хоснователёви',
'emailpage' => 'Пошлийте е-пошту',
'emailpagetext' => 'З ниже зображеным формуларём годно {{GENDER:$1|тому хоснователёви|тій хосновательцї}} загнати повідомлїня ел. поштов.
Адреса ел. пошты, котру мате зазначену в [[Special:Preferences|наставлїня]],ся обявить як адреса одосылателя пошты, жебы вам адресат міг беспосереднё одповісти.',
'usermailererror' => 'Хыба поштового проґраму:',
'defemailsubject' => '{{SITENAME}}: лист од "$1"',
'usermaildisabled' => 'Посыланя ел. пошты є выпнуте',
'usermaildisabledtext' => 'Не маєте право одосылати ел. пошту іншым хоснователям той вікі',
'noemailtitle' => 'Без адресы ел. пошты',
'noemailtext' => 'Тот хоснователь не зазначів платну адресу ел. пошты.',
'nowikiemailtitle' => 'Ел. пошта не є дозволена',
'nowikiemailtext' => 'Тот хоснователь собі не желать діставати пошту од іншых хоснователїв.',
'emailnotarget' => 'Неекзістуюче або некоректне імя хоснователя.',
'emailtarget' => 'Уведьте імя хоснователя-адресата',
'emailusername' => 'Імя хоснователя:',
'emailusernamesubmit' => 'Одослати',
'email-legend' => 'Одосыланя ел. пошты іншому хоснователёви {{GRAMMAR:2sg|{{SITENAME}}}}',
'emailfrom' => 'Од:',
'emailto' => 'Кому:',
'emailsubject' => 'Тема:',
'emailmessage' => 'Ознам:',
'emailsend' => 'Одослати',
'emailccme' => 'Послати копію повідомлїня на мою адресу ел. пошты.',
'emailccsubject' => 'Копія вашого повідомлїня про хоснователя $1: $2',
'emailsent' => 'Пошта одослана',
'emailsenttext' => 'Ваше повідомлїня было послане.',
'emailuserfooter' => 'Тота ел. пошта была послана з {{grammar:2sg|{{SITENAME}}}} за помочі функції „Послати ел, пошту“; одослав го хоснователь $1 хоснователёви $2',

# User Messenger
'usermessage-summary' => 'Зохабити сістемове повідомлїня',
'usermessage-editor' => 'Сістемовый вістник',

# Watchlist
'watchlist' => 'Список слїдованых сторінок',
'mywatchlist' => 'Слїдованы сторінкы',
'watchlistfor2' => 'Про $1 ($2)',
'nowatchlist' => 'Ваш список слїдованых сторінок є порожнїй.',
'watchlistanontext' => 'Про перезераня ці управу списку слїдованых сторінок ся мусите $1.',
'watchnologin' => 'Не сьте приголошеный(а)',
'watchnologintext' => 'Про слїдованя сторінок ся мусите [[Special:UserLogin|приголосити]].',
'addwatch' => 'Придати до списку слїдованых сторінок',
'addedwatchtext' => 'Сторінка «[[:$1]]» была придана до вашого [[Special:Watchlist|списку слїдованых]].
Будучі зміны той статї і з нёв повязаной сторінков діскузії будуть зображены у тім списку.',
'removewatch' => 'Вымазати зо списку слїдованых сторінок',
'removedwatchtext' => 'Сторінка «[[:$1]]» вымазана з вашого [[Special:Watchlist|списку слїдованых сторінок]].',
'watch' => 'Слїдовати',
'watchthispage' => 'Слїдовати тоту сторінку',
'unwatch' => 'Зрушыти слїдованя',
'unwatchthispage' => 'Не слїдовати сторінку',
'notanarticle' => 'Тото не є статя',
'notvisiblerev' => 'Верзія была змазана',
'watchlist-details' => '{{PLURAL:$1|Єдна слїдована сторінка|слїдованы сторінкы|слїдованых сторінок}} (не рахувчі діскузны сторінкы).',
'wlheader-enotif' => 'Упозорнїня  ел. поштов є запнуте.',
'wlheader-showupdated' => "Сторінкы, котры ся змінили од вашой послїднёй навщівы суть вказаны '''грубо'''",
'watchmethod-recent' => 'глядають ся слїдованы сторінкы міджі послїднїма змінами',
'watchmethod-list' => 'глядають ся найновшы едітованя слїдованых сторінок',
'watchlistcontains' => 'На своїм списку слїдованых сторінок маєте $1 {{PLURAL:$1|положку|положкы|положок}}.',
'iteminvalidname' => 'Проблем з положков „$1“, неплатна назва…',
'wlnote' => 'Ниже є {{PLURAL:$1|остатня зміна|остатнї $1 зміны|остатнїх $1 змін}} за {{PLURAL:$2|остатнїй|остатнї|остатнїх}} <b>$2</b> {{PLURAL:$2|годину|годины|годин}} до do $4, $3.',
'wlshowlast' => 'Вказати зміны за послїднїх $1 годин $2 днїв $3',
'watchlist-options' => 'Наставлїна списку слїдованых',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Придаваня до списку слїдованя...',
'unwatching' => 'Одобратя зо списку слїдованя...',
'watcherrortext' => 'При змінї слїдованой сторінкы „$1“ ся стала хыба.',

'enotif_mailer' => 'Засылач нотіфікацій {{grammar:2sg|{{SITENAME}}}}',
'enotif_reset' => 'Означіти вшытко як навщівене',
'enotif_impersonal_salutation' => 'Хоснователь {{grammar:genitive|{{SITENAME}}}}',
'enotif_subject_deleted' => '$2 {{gender:$2|змазав|змазала}} сторінку $1 на {{grammar:6sg|{{SITENAME}}}}',
'enotif_subject_created' => '$2 {{gender:$2|створив|створила}} сторінку $1 на {{grammar:6sg|{{SITENAME}}}}',
'enotif_subject_moved' => '$2 {{gender:$2|переменовав|переменовала}} сторінку $1 на {{grammar:6sg|{{SITENAME}}}}',
'enotif_subject_restored' => '$2 {{gender:$2|обновив|обновила}} сторінку $1 на {{grammar:6sg|{{SITENAME}}}}',
'enotif_subject_changed' => '$2 {{gender:$2|змінив|змінила}} сторінку $1 на {{grammar:6sg|{{SITENAME}}}}',
'enotif_body_intro_deleted' => 'В $PAGEEDITDATE {{gender:$2|змазав|змазала}} $2 на {{grammar:6sg|{{SITENAME}}}} сторінку $1,посмотьте $3 .',
'enotif_body_intro_created' => 'В $PAGEEDITDATE {{gender:$2|створив|створила}} $2 на {{grammar:6sg|{{SITENAME}}}} сторінку $1, посмотьте актуалну верзію на $3 .',
'enotif_body_intro_moved' => 'В $PAGEEDITDATE {{gender:$2|переменовав|переменовала}} $2 на {{grammar:6sg|{{SITENAME}}}} сторінку $1, посмотьте актуалну верзію на $3 .',
'enotif_body_intro_restored' => 'В $PAGEEDITDATE {{gender:$2|обновив|обновила}} $2 на {{grammar:6sg|{{SITENAME}}}} сторінку $1, посмотьте актуалну верзію на $3 .',
'enotif_body_intro_changed' => 'В $PAGEEDITDATE {{gender:$2|змінив|змінила}} $2 на {{grammar:6sg|{{SITENAME}}}} сторінку $1, посмотьте актуалну верзію на $3 .',
'enotif_lastvisited' => 'Видьте $1 про список вшыткых змін од минулой навщівы.',
'enotif_lastdiff' => 'Тоту зміну видьте на $1',
'enotif_anon_editor' => 'анонімный хоснователь $1',
'enotif_body' => 'Честованый хоснователю $WATCHINGUSERNAME,

$PAGEINTRO $NEWPAGE

Згорнутя едітованя: $PAGESUMMARY $PAGEMINOREDIT

Хоснователя, котрый зміну учінив, можете контактовати:
імейлом: $PAGEEDITOR_EMAIL
на вікі: $PAGEEDITOR_WIKI

Покы сторінку не навщівите, не будуть вам заганяны далшы повідомлїня о змінах той сторінкы. Тыж собі можете вынуловати признакы у своїм списку слїдованых сторінок.

	Поздравує вас ваш посылач голошіня {{grammar:2sg|{{SITENAME}}}}

--
Змінити наштелёваня імейловых повідомлїнь можете на
{{canonicalurl:{{#special:Preferences}}}}

Наштелёваня слїдованых сторінок можете змінити на
{{canonicalurl:Special:Watchlist/edit}}

Сторінку можете зо своїх слїдованых вышмарити на
$UNWATCHURL

Порада і контакт:
{{canonicalurl:{{MediaWiki:Helppage}}}}',
'created' => 'створена',
'changed' => 'змінена',

# Delete
'deletepage' => 'Змазати сторінку',
'confirm' => 'Потверджіня',
'excontent' => 'обсяг быв: „$1“',
'excontentauthor' => 'обсяг быв: „$1“ (і єдиным приспівателём быв „[[Special:Contributions/$2|$2]]“)',
'exbeforeblank' => 'обсяг перед выпорожнїнём быв: „$1“',
'exblank' => 'сторінка была порожня',
'delete-confirm' => 'Змазаня  $1',
'delete-legend' => 'Вымазати',
'historywarning' => "'''Варованя:''' Сторінка, котру хочете змазати, має історію з приближно $1 {{PLURAL:$1|ревізії|ревізіями}}:",
'confirmdeletetext' => 'Рыхтуєте ся вымазати сторінку і вшыткы єй лоґы едітовань.
Просиме Вас, потвердьте, же справды тото хочете зробити, повно розумієте наслїдкы і же робите тото в одповідности з [[{{MediaWiki:Policy-url}}|правилами]].',
'actioncomplete' => 'Дїя выконана',
'actionfailed' => 'Операція ся не вдала',
'deletedtext' => '"$1" было змазане.
Смоть $2 про список послїднїх змазань.',
'dellogpage' => 'Лоґ вымазаня',
'dellogpagetext' => 'Ту є список послїднїх змазаных сторінок.',
'deletionlog' => 'Лоґ вымазаня',
'reverted' => 'Обновлїня скоршой верзії',
'deletecomment' => 'Причіна:',
'deleteotherreason' => 'Інша/додаткова причіна:',
'deletereasonotherlist' => 'Інша причіна',
'deletereason-dropdown' => '*Звычайны причіны змазаня
** На жадость автора
** Порушїня авторьскых прав
** Вандалізм',
'delete-edit-reasonlist' => 'Едітовати причіны вымазаня',
'delete-toobig' => 'Тота сторінка має велику історію едітованя, через $1 {{PLURAL:$1|верзії|верзій|верзій}}. Мазаня такых сторінок є обмеджено, жебы ся заборонило нехоченому нарушіню {{grammar:2sg|{{SITENAME}}}}.',
'delete-warning-toobig' => 'Тота сторінка має велику історію едітацій, через $1 {{PLURAL:$1|верзії|верзій|верзій}}. Мазаня такых сторінок може нарушыти датабазовы операцім {{grammar:2sg|{{SITENAME}}}}; мерькуйте.',

# Rollback
'rollback' => 'Вернути назад едітованя',
'rollback_short' => 'Вернути назад',
'rollbacklink' => 'вернути назад',
'rollbacklinkcount' => 'вернутя $1 {{PLURAL:$1|едітованя|едітовань}} назад',
'rollbacklinkcount-morethan' => 'вернутя бівше як $1 {{PLURAL:$1|едітованя|едітовань}} назад',
'rollbackfailed' => 'Не годно было ся вернути назад',
'cantrollback' => 'Не годен вернути послїднє едітованя, бо послїднїй приспіватель є єдиным автором той сторінкы.',
'alreadyrolled' => 'Не годен вернути послїднє едітованя [[:$1]] од хоснователя [[User:$2|$2]] ([[User talk:$2|діскузія]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]), бо дахто друхый уже сторінку едітовав або вернув тоту зміну назад.

Остатнє едітованя провив(а) [[User:$3|$3]] ([[User talk:$3|діскузуя]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment' => "Згорнутя едітованя было: ''„$1“''.",
'revertpage' => 'Едітованя хоснователя „[[Special:Contributions/$2|$2]]“ ([[User talk:$2|діскузія]]) вернуты до минулого ставу, котрого автором є „[[User:$1|$1]]“',
'revertpage-nouser' => 'Едітованя скрытого хоснователя вернуты до минулого ставу, котрого автором є „[[User:$1|$1]]“',
'rollback-success' => 'Едітованя хоснователя $1 было вернуте на остатню ревізію од хоснователя $2.',

# Edit tokens
'sessionfailure-title' => 'Хыба сеансу',
'sessionfailure' => 'Здасть ся, же є даякый проблем з вашым приголошінём;
вами жадана актівіта была зрушена як превенція проти неоправненым приступам.
Стисните клапку „назад“, обновте сторінку, з котрой сьте пришли і спробуйте то знову;',

# Protect
'protectlogpage' => 'Лоґ сокочіня',
'protectlogtext' => 'Ниже є уведженый список вшыткых замків і сторінок.
Посмоть [[Special:ProtectedPages|список сокоченых сторінок]]',
'protectedarticle' => 'замыкать "[[$1]]"',
'modifiedarticleprotection' => 'зміненa рівень охраны сторінкы «[[$1]]»',
'unprotectedarticle' => 'знята охрана з "[[$1]]"',
'movedarticleprotection' => 'наставлїня замків перенесено з „[[$2]]“ на „[[$1]]“',
'protect-title' => 'Зміна уровнї охраны сторінкы „$1“',
'protect-title-notallowed' => 'Указати уровни охраны сторінкы „$1“',
'prot_1movedto2' => '«[[$1]]» переменована на «[[$2]]»',
'protect-badnamespace-title' => 'Незамыкательный простор назв',
'protect-badnamespace-text' => 'Сторінкы в тім просторї назв не годен замыкати.',
'protect-norestrictiontypes-text' => 'Тоту сторінку не годен сокотити, бо не суть ниякы тіпы обмеджіня.',
'protect-norestrictiontypes-title' => 'Сторінка, яку не годен замкнути',
'protect-legend' => 'Потвердити замкнутя',
'protectcomment' => 'Причіна:',
'protectexpiry' => 'Кінчіть:',
'protect_expiry_invalid' => 'Неправилный час укончіня',
'protect_expiry_old' => 'Час страты платности є в минулости.',
'protect-unchain-permissions' => 'Отворити приступ на далшы наставлїня замку',
'protect-text' => "Ту можете видїти і змінити рівень охраны сторінкы '''$1'''.",
'protect-locked-blocked' => "Не можете мінити наставлїня замків покы сьте заблокованый. Сучасне наставлїня про тоту сторінку є: '''$1''':",
'protect-locked-dblock' => "Наставлїня замків ся не дасть змінити про замкнуту датабазу.
Сучасне наставлїня про тоту сторінку є: '''$1''':",
'protect-locked-access' => "Ваше конто немає права мінити рівень охраны сторінкы.
Моменталны наставлїня про сторінку : '''$1''':",
'protect-cascadeon' => 'Тота сторінка є теперь хранена, бо є загорнута {{PLURAL:$1|до зазначеной сторінкы ніже, на яку|до ниже зазначеных сторінок, на якы}} становлена каскадова охрана. Вы можете змінити рівень охраны той сторінкы, але тото не буде впливати на каскадову охрану.',
'protect-default' => 'Дозволити вшыткым хоснователям',
'protect-fallback' => 'Дозволено лем хоснователям з правом „$1“',
'protect-level-autoconfirmed' => 'Дозволити лем автоматічно потвердженым хоснователям',
'protect-level-sysop' => 'Дозволено лем адміністраторам',
'protect-summary-cascade' => 'каскадовый',
'protect-expiring' => 'кінчіть $1 (UTC)',
'protect-expiring-local' => 'кінчіть ся $1',
'protect-expiry-indefinite' => 'навсе (до покликаня)',
'protect-cascade' => 'Хранити сторінкы вложены до той сторінкы (каскадова охрана)',
'protect-cantedit' => 'Вы не можете змінити рівень охороны той сторінкы, тому што вы не маєте прав про єй едітованя.',
'protect-othertime' => 'Іншый час:',
'protect-othertime-op' => 'Іншый час',
'protect-existing-expiry' => 'Сучасный час експірації: $3, $2',
'protect-otherreason' => 'Інша/додаткова причіна:',
'protect-otherreason-op' => 'Інша причіна',
'protect-dropdown' => '*Звычайны причіны замкнутя
** Частый вандалізм
** Вкладаня рекламных екстерных одказів
** Едітачна война
** Часто хоснована сторінка',
'protect-edit-reasonlist' => 'Едітованя причін замкнутя',
'protect-expiry-options' => '1 година:1 hour,1 день:1 day,1 тыждень:1 week,2 тыжднї:2 weeks,1 місяць:1 month,3 місяцї:3 months,6 місяцїв:6 months,1 рік:1 year,навсе:infinite',
'restriction-type' => 'Права',
'restriction-level' => 'Рівень доступу:',
'minimum-size' => 'Мінімалный розмір',
'maximum-size' => 'Максімалный розмір:',
'pagesize' => '(байтів)',

# Restrictions (nouns)
'restriction-edit' => 'Едітованя',
'restriction-move' => 'Переменовати',
'restriction-create' => 'Вытвориня',
'restriction-upload' => 'Наладовованя файлів',

# Restriction levels
'restriction-level-sysop' => 'замкнуте',
'restriction-level-autoconfirmed' => 'частково хранено',
'restriction-level-all' => 'хоцьяка рівень',

# Undelete
'undelete' => 'Вылучены сторінкы',
'undeletepage' => 'Посмотрити собі і обновити змазану сторінку',
'undeletepagetitle' => "'''Ниже суть змазаны верзії сторінкы [[:$1]]'''.",
'viewdeletedpage' => 'Зобразити змазаны сторінкы',
'undeletepagetext' => '{{PLURAL:$1|Наслїдуюча сторінка была змазана, але дотеперь є в архіві, также є можне єй обновити|Наслїдуючі $1 сторінкы были змазаны, але дотеперь суть в архіві, также є може їх обновити|Наслїдуючіх $1 сторінок было змазаных, але дотеперь суть в архіві, также є можне їх обновити}}.
Архів може быти періодічно очіщаный.',
'undelete-fieldset-title' => 'Обновити ревізії',
'undeleteextrahelp' => "Кідь хочете обновити комплетну історію сторінкы, зохабте вшыткы позначкы порожнї і кликните на '''''{{int:undeletebtn}}'''''.
Про часткове обновлїня означте позначкы у обновлёваных ревізій і кликните на '''''{{int:undeletebtn}}'''''.",
'undeleterevisions' => '$1 {{PLURAL:$1|верзія є архівована|верзії суть архівованы|верзій є архівованых}}',
'undeletehistory' => 'Кідь сторінку обновите, будуть в історії обновлены вшыткы верзії. Кідь была створена нова сторінка з такым самым меном як змазана, обновлена сторінка ся запише на старше місце в історії новшой сторінкы.',
'undeleterevdel' => 'Обновлїня не буде выконане, кібы вело ку часточному одстранїню актуалной верзії сторінкы. В такім припадї мусите одзначіти або одкрыти найновшу змазану верзію.',
'undeletehistorynoadmin' => 'Тота сторінка была змазана. Причіна змазаня є зазначена ниже, вєдно з інформаціями о хоснователях, котры тоту сторінку перед змазанём едітовали. Самотный текст є доступный лем адміністраторам.',
'undelete-revision' => 'Змазана верзія сторінкы $1 (з $4 дня $5) од хоснователя $3:',
'undeleterevision-missing' => 'Неправилна або хыбляча ревізія. Може маєте планый одказ, або ревізія была обновлена ці одстранена з архіву.',
'undelete-nodiff' => 'Не найджена жадна попередня верзія.',
'undeletebtn' => 'Обновити',
'undeletelink' => 'видїти/обновити',
'undeleteviewlink' => 'видїти',
'undeleteinvert' => 'Інвертовати селекцію',
'undeletecomment' => 'Причіна:',
'undeletedrevisions' => '{{PLURAL:$1|Обновлена $1 верзія|Обновлены $1 верзії|Обновленых $1 верзій}}',
'undeletedrevisions-files' => '{{PLURAL:$1|Обновлена єдна верзія|Обновлены $1 верзії|Обновленых $1 верзій}} і $2 {{PLURAL:$2|файл|файлы|файлів}}.',
'undeletedfiles' => '{{PLURAL:$1|обновленый $1 файл|обновлены $1 файлы|обновленых $1 файлів}}',
'cannotundelete' => 'Обновлїня ся не вдало:
$1',
'undeletedpage' => "'''$1 была обновлена'''

Запис о послїднїх мазанях і обновлїнях найдете в  [[Special:Log/delete|книзї змазаных сторінок]].",
'undelete-header' => 'Видьте недавно змазаны сторінкы в [[Special:Log/delete|книзї змазаных сторінок]].',
'undelete-search-title' => 'Гляданя змазаных сторінок',
'undelete-search-box' => 'Гляданя вымазаных сторінок',
'undelete-search-prefix' => 'Вказати сторінкы што ся почінають з',
'undelete-search-submit' => 'Найти',
'undelete-no-results' => 'Пожадавцї жадны змазаны сторінкы не одповідають.',
'undelete-filename-mismatch' => 'Не годен обновити верзію файлу з часовов значков $1: назва файлу не одповідать',
'undelete-bad-store-key' => 'Не годен обновити верзію файлу з часовов значков $1:  файл педед змазанём хыбив',
'undelete-cleanup-error' => 'Хыба мазаня нехоснованого архівного файлу „$1“.',
'undelete-missing-filearchive' => 'Не вдало ся обновити файл архіву з ідентіфікаціёв $1, бо не є в датабазї. Може же уж быв обновленый.',
'undelete-error' => 'Хыба обновлїня сторінкы',
'undelete-error-short' => 'Хыба обновлїня файлу: $1',
'undelete-error-long' => 'Выникла хыба під час обновлїня файлу:

$1',
'undelete-show-file-confirm' => 'На певно собі хочете посмотрити змазану ревізію файлу „<nowiki>$1</nowiki>“ з $2, $3?',
'undelete-show-file-submit' => 'Гей',

# Namespace form on various pages
'namespace' => 'Простор назв:',
'invert' => 'Окрем выбраного',
'tooltip-invert' => 'зазнач тото поличко, жебы ся скрыли зміны на сторінках у выбранім просторї назв (і спрягнутый простор назв є тыж зазначеный)',
'namespace_association' => 'Повязаный простор назв',
'tooltip-namespace_association' => 'Позначінём того поличка загорнете і діскузный ці обсяговый простор назв приналежный ку вынраному простору назв',
'blanknamespace' => '(Основный)',

# Contributions
'contributions' => 'Приспівкы {{GENDER:$1|хоснователя|хоснователькы}}',
'contributions-title' => 'Приспівок хоснователя $1',
'mycontris' => 'Приспівкы',
'contribsub2' => 'Приспівок $1 ($2)',
'nocontribs' => 'Ненайджены жадны зміны за тыма крітеріями.',
'uctop' => '(остатня)',
'month' => 'Од місяця (і скоре):',
'year' => 'Од року (і скоре):',

'sp-contributions-newbies' => 'Вказати приспівкы лем новых конт',
'sp-contributions-newbies-sub' => 'Новы хоснователї',
'sp-contributions-newbies-title' => 'Приспівкы новый хоснователїв',
'sp-contributions-blocklog' => 'Лоґ блокованя',
'sp-contributions-deleted' => 'вымазаны приспевкы хоснователя',
'sp-contributions-uploads' => 'наладованы файлы',
'sp-contributions-logs' => 'лоґы',
'sp-contributions-talk' => 'діскузія',
'sp-contributions-userrights' => 'Справа хосновательскых прав',
'sp-contributions-blocked-notice' => 'Тот хоснователь є теперь блокованый.
Послїднїй запис в лоґах блоковань є такый:',
'sp-contributions-blocked-notice-anon' => 'Тота IP адреса є теперь блокована.
Послїднїй запис в лоґах блоковань є такый:',
'sp-contributions-search' => 'Глядати приспівкы',
'sp-contributions-username' => 'IP-адреса або імя хоснователя:',
'sp-contributions-toponly' => 'Вказати лем актуалны ревізії',
'sp-contributions-submit' => 'Найти',

# What links here
'whatlinkshere' => 'Одказы на тоту сторінку',
'whatlinkshere-title' => 'Сторінкы, што ся одказують на "$1"',
'whatlinkshere-page' => 'Сторінка:',
'linkshere' => "Наслїдуючі сторінкы ся одказують на '''[[:$1]]''':",
'nolinkshere' => "Жадна сторінка на '''[[:$1]]''' не одказує.",
'nolinkshere-ns' => "У выбранім просторї назв на '''[[:$1]]''' не одказує жадна сторінка.",
'isredirect' => 'сторінка напрямлена',
'istemplate' => 'вложіня',
'isimage' => 'Одказ на файл',
'whatlinkshere-prev' => '{{PLURAL:$1|попередня|попереднї|попереднї}} $1',
'whatlinkshere-next' => '{{PLURAL:$1|далша|далшій|далшых}} $1',
'whatlinkshere-links' => '← одказы',
'whatlinkshere-hideredirs' => '$1 напрямлїня',
'whatlinkshere-hidetrans' => '$1 вложіня',
'whatlinkshere-hidelinks' => '$1 одказы',
'whatlinkshere-hideimages' => '$1 одказ на файл',
'whatlinkshere-filters' => 'Філтры',

# Block/unblock
'autoblockid' => 'Автоблокованя #$1',
'block' => 'Заблоковати хоснователя',
'unblock' => 'Одблоковати хоснователя',
'blockip' => 'Заблоковати хоснователя',
'blockip-legend' => 'Блокованя хоснователя',
'blockiptext' => 'Тот формуларь служыть про заблокованя едітованя з конкретной IP адресы або мена хоснователя.
Тото бы мало быти хосноване лем в згодї з [[{{MediaWiki:Policy-url}}|правилами]].
Задайте причіну ниже (наприклад вкажте, котры сторінкы были пошкоджены).',
'ipadressorusername' => 'IP-адреса або мено хоснователя:',
'ipbexpiry' => 'Кінчіть:',
'ipbreason' => 'Причіна:',
'ipbreason-dropdown' => '*Часты причіны блокованя
** Вкладаня неправдивых інформацій
** Одстранёваня обсягу сторінок
** Вкладаня рекламных екстерных одказів
** Вкладаня незмыслїв
** Застрашованя або выгрожованя
** Знеужываня веце конт
** Невгодне мено хоснователя',
'ipb-hardblock' => 'Заборонити приголошеным хоснователям едітовати з той IP-адресы',
'ipbcreateaccount' => 'Не дозволити реґістрацію новых хоснователїв',
'ipbemailban' => 'Заборонити хоснователёви посылати ел. пошту',
'ipbenableautoblock' => 'Автоматічно блоковати IP адресы хоснованы тым хоснователём',
'ipbsubmit' => 'Заблоковати',
'ipbother' => 'Іншый час:',
'ipboptions' => '2 годины:2 hours,1 день:1 day,3 днї:3 days,1 тыждень:1 week,2 тыжднї:2 weeks,1 місяць:1 month,3 місяцї:3 months,6 місяцїв:6 months,1 рік:1 year,неограніченї:infinite',
'ipbhidename' => 'Сховати мено хоснователя в едітованях і списках',
'ipbwatchuser' => 'Слїдовати хосновательску і діскузну сторінку того хоснователя',
'ipb-disableusertalk' => 'Заборонити тому хоснователёви едітовати властну хосновательску діскузію по час блокованя',
'ipb-change-block' => 'Знову заблоковати хоснователя з тыма наставлїнями',
'ipb-confirm' => 'Потвердити блокованя',
'badipaddress' => 'Неправилна IP адреса',
'blockipsuccesssub' => 'Блокованя проведено',
'blockipsuccesstext' => '„[[Special:Contributions/$1|$1]]“ je {{GENDER:$1|заблокованый|заблокована}}.<br />
Можете собі посмотрити [[Special:BlockList|список заблокованых редакторів]].',
'ipb-blockingself' => 'Зберате ся заблоковати {{gender:|сам|сама|самы}} себе! Сьте собі {{gender:|певный|певна|певны}}, же тото хочете зробити?',
'ipb-confirmhideuser' => 'Рыхтуєте ся заблоковати хоснователя зо запнутов вольбов "сховати імя хоснователя". То запрічінить же імя хоснователя счезне зо вшыткых списків і протоколёвачіх записів.  Сьте собі {{gender:|певный|певна|певны}}, же хочете тото зробити?',
'ipb-edit-dropdown' => 'Едітовати причіны блоковань',
'ipb-unblock-addr' => 'Одблоковати $1',
'ipb-unblock' => 'Одблоковати хоснователя або  IP адресу',
'ipb-blocklist' => 'Вказати екзістуючі блокованя',
'ipb-blocklist-contribs' => 'Приспевкы хоснователя  $1',
'unblockip' => 'Одблоковати хоснователя',
'unblockiptext' => 'Тым формуларём є можне обновити права блокованой IP адресы ці хоснователя знову приспівати до  {{grammar:2sg|{{SITENAME}}}}.',
'ipusubmit' => 'Зняти тото блокованя',
'unblocked' => '[[User:$1|$1]] одблокованый',
'unblocked-range' => '$1 розблоковане',
'unblocked-id' => 'Блокованя $1 было зняте',
'blocklist' => 'Заблокованы хоснователї',
'ipblocklist' => 'Заблокованы хоснователї',
'ipblocklist-legend' => 'Глядати заблокованого хоснователя',
'blocklist-userblocks' => 'Сховати заблокованы конта',
'blocklist-tempblocks' => 'Сховати дочасны заблокованя',
'blocklist-addressblocks' => 'Сховати блокованя єдной IP адресы',
'blocklist-rangeblocks' => 'Скрыти блокованя россягів',
'blocklist-timestamp' => 'Часова значка',
'blocklist-target' => 'Цїль',
'blocklist-expiry' => 'Кінчіть',
'blocklist-by' => 'Блокуючій адмін',
'blocklist-params' => 'Параметры блокованя',
'blocklist-reason' => 'Прічіна',
'ipblocklist-submit' => 'Глядати',
'ipblocklist-localblock' => 'Локалне блокованя',
'ipblocklist-otherblocks' => '{{PLURAL:$1|Інше блокованя|Іншы блокованя}}',
'infiniteblock' => 'навсе (до покликаня)',
'expiringblock' => 'до $1, $2',
'anononlyblock' => 'лем анонімы',
'noautoblockblock' => 'без автоблокованя',
'createaccountblock' => 'вытворёваня конт не дозволене',
'emailblock' => 'е-маіл блокованый',
'blocklist-nousertalk' => 'не може едітовати властну сторінку діскузії',
'ipblocklist-empty' => 'Список блоковань є порожнїй.',
'ipblocklist-no-results' => 'Пожадована IP-адреса або мено хоснователя не є блоковане.',
'blocklink' => 'заблоковати',
'unblocklink' => 'одблоковати',
'change-blocklink' => 'змінити блок',
'contribslink' => 'приспівкы',
'emaillink' => 'послати імейл',
'autoblocker' => 'Сьте были автоматічно блокованы, протоже здїляте IP-адресу з хоснователём „[[User:$1|$1]]“. Причіна блокованя того хоснователя: „$2“',
'blocklogpage' => 'Запис блоковань',
'blocklog-showlog' => '{{GENDER:$1|Тот хоснователь быв уж блокованый.|Тота хоснователька уж была блокована.|Тот хоснователь уж быв блокованый.}}
Ту є про перегляд вказаный выпис з книгы блокованя:',
'blocklog-showsuppresslog' => 'Тот хоснователь быв блокованый і схованый. Ту є про перегляд вказаный выпис з книгы блокованя:',
'blocklogentry' => 'заблокoвав [[$1]] на термін $2 $3',
'reblock-logentry' => 'змінив наставлїня блоку „[[$1]]“ з часом ексіпрації $2 $3',
'blocklogtext' => 'Тото є журнал дїй блокованя і одблокованя редакторів.
Автоматічно блокованы IP адресы не выписованы.
Смотьте тыж [[Special:BlockList|список вшыткых чінных блоковань]].',
'unblocklogentry' => 'одблоковав $1',
'block-log-flags-anononly' => 'лем анонімны хоснователї',
'block-log-flags-nocreate' => 'вытворёваня конт не дозволене',
'block-log-flags-noautoblock' => 'автоматічне блокованя выпнуте',
'block-log-flags-noemail' => 'е-маіл блокованый',
'block-log-flags-nousertalk' => 'не може едітовати властну сторінку діскузії',
'block-log-flags-angry-autoblock' => 'росшырене автоматічне блокованя выпнуте',
'block-log-flags-hiddenname' => 'мено хоснователя сховане',
'range_block_disabled' => 'Блокованя россягів IP-адрес не є дозволене.',
'ipb_expiry_invalid' => 'Неплатный час експірації.',
'ipb_expiry_temp' => 'Блокованя схованых мен хоснователїв бы мало быти тырвале.',
'ipb_hide_invalid' => 'Тото конто ся не дасть затаїти; може має дуже много едітацій.',
'ipb_already_blocked' => '„$1“ є уже заблокованый',
'ipb-needreblock' => '$1 є уж заблокованый(а). Хочете змінити наставлїня блокованя?',
'ipb-otherblocks-header' => '{{PLURAL:$1|Інше блокованя|Іншы блокованя}}',
'unblock-hideuser' => 'Того хоснователя не можете одблоковати, бо ёго імя хоснователя было сховане.',
'ipb_cant_unblock' => 'Хыба: Блокованя з ID $1 не было найджене. Хоснователь уж може быв одблокованый.',
'ipb_blocked_as_range' => 'Хыба: IP-адреса $1 не є блокована прямо а так єй не є можне одблоковати. Є частёв заблокованого россягу $2, котрый може быти одблокованый.',
'ip_range_invalid' => 'Неплатный IP россяг.',
'ip_range_toolarge' => 'Блокованя россягів векшых як  /$1 не є дозволене.',
'proxyblocker' => 'Блокованя проксі',
'proxyblockreason' => 'Ваша IP-адреса была заблокована, зато же фунґує як отвореный проксі сервер. 
Контактуйте свого Інтернет-провайдера або технічну підпору і інформуйте їх о тім серьёзнім беспечностнім проблемі.',
'sorbsreason' => 'Ваша IP-адреса є веджена як отвореный проксі в DNSBL.',
'sorbs_create_account_reason' => 'Ваша IP-адреса є веджена як одкрытый проксі в DNSBL. З той адресы собі не можете створити конто.',
'xffblockreason' => 'IP адреса написана в голові X-Forwarded-For, ці уж ваша, або проксі сервера, што хоснуєете, была заблокована. Оріґінална прічіна того блокованя: $1',
'cant-see-hidden-user' => 'Хоснователь, котрого хочете заблоковати, уж быв заблокованый і схованый. Кідьже не маєте права hideuser, не можете собі наставлїня блокованя того хоснователя посмотрити ани го змінити.',
'ipbblocked' => 'Не можете блоковати або одблоковати іншых хоснователїв, {{GENDER:|сам|сама|сам}} сьте {{GENDER:|заблокованый|заблокована|заблокованый}}',
'ipbnounblockself' => 'Не маєте дозволене одблоковати {{GENDER:|сам|сама|сам}} себе',

# Developer tools
'lockdb' => 'Замкнути датабазу',
'unlockdb' => 'Одомкнути датабазу',
'lockdbtext' => 'Кідь замкнете датабазу, знеможните другым едітовати, управляти наставлїня, слїдованы сторінкы ітд. Потвердьте, же то справды хочете зробити і же одомкнете датабазу такой по оправах.',
'unlockdbtext' => 'Кідь одомкнете датабазу, уможните другым едітовати, управляти наставлїня, слїдованы сторінкы ітд. Потвердьте, же то хочете справды зробити.',
'lockconfirm' => 'Гей, справды хочу замкнути датабазу.',
'unlockconfirm' => 'Гей, справды хочу одомкнути датабазу.',
'lockbtn' => 'Замкнути датабазу',
'unlockbtn' => 'Одомкнути датабазу',
'locknoconfirm' => 'Не было означене поличко потверджіня.',
'lockdbsuccesssub' => 'Датабаза замкнута',
'unlockdbsuccesssub' => 'Датабаза одомкнута',
'lockdbsuccesstext' => 'Датабаза {{grammar:2sg|{{SITENAME}}}} была успішно замкнута.
<br />Не забудьте єй по докончіню утримованя [[Special:UnlockDB|одомкнути]].',
'unlockdbsuccesstext' => 'Датабаза {{grammar:2sg|{{SITENAME}}}} є одомкнута.',
'lockfilenotwritable' => 'До файлу замку датабазы ся не дасть записовати. Про замкнутя ці одомкнутя датабазы мусить мати вебовый сервер права запису до того файлу.',
'databasenotlocked' => 'Датабаза не є замкнута.',
'lockedbyandtime' => '({{gender:$1|замкнув|замкла|замкнув}} $1 $2 v $3)',

# Move page
'move-page' => 'Переменовати „$1“',
'move-page-legend' => 'Переменовати сторінку',
'movepagetext' => "Хоснувчі форму ниже, можете переменовати сторінку, такой перемістивши на нове місце і лоґ єй едітовань.
Стара назва стане напрямлинём на нову назву.
Можете автоматично обновити напрямлїня на стару назву.
Кідь вы тото не зробите, просиме Вас, перевірте [[Special:DoubleRedirects|подвойны]] ці [[Special:BrokenRedirects|розорваны]] напрямлїня.
Вы одповідате за то, жебы одказы і надале вказовали там, де мають.

Уважте, же сторінка '''не''' буде переменована, кідь сторінка з новов назвов уж існує, окрем того, коли она порожня або є напрямлїнём, а лоґ єй едітовань порожнїй.
То значіть, же вы можете вернути сторінцї стару назву, кідь вы переменовали єй ненароком, але вы не можете переписати існуючу сторінку.

'''ВАРОВАНЯ!'''
Тота дїя може ся стати причінов серіозных а неочекованых змін популарных сторінок.
Просиме Вас, перед далшым кроком ся утвердьте, же розуміте вшыткы можны наслїдкы.",
'movepagetext-noredirectfixer' => "Хоснувчі форму ниже, можете переменовати сторінку, єдным разом перемістивши на нове місце і лоґ єй едітовань.
Стара назва стане перенапрямлинём на нову назву.
Можете автоматично обновити перенапрямлиня на страу назву.
Кідь вы тото не зробите, просиме Вас, перевірте наявність [[Special:DoubleRedirects|подвойных]] ці [[Special:BrokenRedirects|розорваных]] перенапрямлинь.
Вы зодповідаєте за то, жебы одказы і надалей вказували там, де мають.

Уважте, же сторінка '''не''' буде переменована, кідь сторінка з новов назвов уж екзістує, окрем того, коли она порожня або є напрямлинём, а лоґ єй едітовань порожнїй.
То значіть, же вы можете вернути сторінцї стару назву, кідь вы переменовали єй помылково, але вы не можете переписати екзістуючу сторінку.

'''ВАРОВАНЯ!'''
Тота дїя може ся стати причінов серіозных а неочекаваных змін популарных сторінок.
Просиме Вас, перед далшым кроком ся утвердьте, же розуміте вшыткы можны наслїдкы.",
'movepagetalktext' => "Асоціована діскузна сторінка буде автоматічно переменована, '''окрем:'''
* Непорожня сторінка діскузії з таков назвов уж екзістує або
* Не означіли сьте в полічку ниже.

В тых припадох будете мусити переменовати ці злучіти сторінкы ручнї кідь желаєте єй переменованя.",
'movearticle' => 'Переменовати сторінку',
'moveuserpage-warning' => "'''Увага:''' Рихтуєте ся переменовати сторінку хоснователя. Усвідомте собі, же буде переменована лем тота сторінка, а хоснователь  ''не буде'' переменованый.",
'movenologintext' => 'Про переменованя сторінок ся мусите [[Special:UserLogin|приголосити]].',
'movenotallowed' => 'Не маєте права переменовати сторінкы.',
'movenotallowedfile' => 'Не маєте права переменовати файлы.',
'cant-move-user-page' => 'Не маєте права переменовати сторінкы хоснователїв.',
'cant-move-to-user-page' => 'Не маєте права переменовати сторінку на сторінку хоснователя (окрем підсторінкы сторінкы хоснователя)',
'newtitle' => 'Нова назва:',
'move-watch' => 'Слїдовати тоту сторінку',
'movepagebtn' => 'Переменовати сторінку',
'pagemovedsub' => 'Сторінка переменована',
'movepage-moved' => "'''Сторінка «$1» переменована на «$2»'''",
'movepage-moved-redirect' => 'Было створене напрямлїня.',
'movepage-moved-noredirect' => 'Напрямлїня не было створене.',
'articleexists' => 'Сторінка з таков назвов уж екзістує або назва вамі выбрата не є платна.
Просиме, выберте іншу назву.',
'cantmove-titleprotected' => 'Сторінка ся не дасть переменовати на дане місце, бо єй назва є замкнута проти створїню',
'movetalk' => 'Переменовати одповідну діскузну сторінку',
'move-subpages' => 'Переменовати підсторінкы (до $1)',
'move-talk-subpages' => 'Переменовати підсторінкы діскузной сторінкы (до $1)',
'movepage-page-exists' => 'Сторінка $1 уж екзістує і не може быти автоматічно переписана.',
'movepage-page-moved' => 'Сторінка $1 была переменована на $2.',
'movepage-page-unmoved' => 'Сторінка $1 не може быти переменована на $2.',
'movepage-max-pages' => '{{PLURAL:$1|Была переменована максімално дозволена єдна сторінка|Были переменованы максімално дозволены $1 сторінкы|Было переменоване максімално дозволеных $1 сторінок}}, веце їх уж автоматічно переменованых не буде.',
'movelogpage' => 'Лоґ переменовань',
'movelogpagetext' => 'Тото є список вшыткых переменованый сторінок.',
'movesubpage' => '{{PLURAL:$1|Підсторінка|Підсторінкы}}',
'movesubpagetext' => 'Тота сторінка має $1 {{PLURAL:$1|підсторінку|підсторінкы|підсторінок}} ниже.',
'movenosubpage' => 'Тота сторінка не має підсторінок.',
'movereason' => 'Причіна:',
'revertmove' => 'вернути',
'delete_and_move' => 'Змазати і переменовати',
'delete_and_move_text' => '==Є треба змазаня==

Цілёва сторінка „[[:$1]]“ уж екзістує. Желате собі єй змазати про уволнїня місця на переменованя?',
'delete_and_move_confirm' => 'Гей, змазати сторінку',
'delete_and_move_reason' => 'Змазане про уможнїня переменованя з „[[$1]]“',
'selfmove' => 'Початочна і нова назва суть ровнакы;
не може переменовати сторінку на саму себе.',
'immobile-source-namespace' => 'Сторінкы в просторї назв „$1“  ся не дають переменовати',
'immobile-target-namespace' => 'Сторінкы ся не дають переменовати до простору назв „$1“',
'immobile-target-namespace-iw' => 'Міджіязыковый одказ не є валідный ціль про переменованя сторінкы.',
'immobile-source-page' => 'Тота сторінка ся не дасть переменовати.',
'immobile-target-page' => 'Сторінка ся не дасть переменовати на дану назву.',
'bad-target-model' => 'Желаный цїль хоснує другый модел обсягу. Не годен перевести $1 на $2.',
'imagenocrossnamespace' => 'Не дасть ся переменовати файл мімо простор назв файлів',
'nonfile-cannot-move-to-file' => 'До простору назв  {{ns:file}} ся не дають переменовати сторінкы неналежачі ку файлу',
'imagetypemismatch' => 'Нове росшырїня файлу не одповідать ёго тіпу',
'imageinvalidfilename' => 'Назва цілёвого файлу не є платна',
'fix-double-redirects' => 'Оправити вшыткы напрямлїня на початкову назву',
'move-leave-redirect' => 'Зохабити напрямлїня',
'protectedpagemovewarning' => "'''Увага: Тота сторінка была замкнута, также єй можуть переменовати лем адміністраторы.'''
Ниже є про перегляд зображеный найновшый протоколовачій запис:",
'semiprotectedpagemovewarning' => "'''Увага: Тота сторінка была замкнута, также єй можуть переменовати лем реґістрованы хоснователї.'''
Ниже є про перегляд зображеный найновшый протоколовачій запис:",
'move-over-sharedrepo' => '== Файл екзістує ==
[[:$1]] екзістує в здїлянім усховіщу. Переменованя файлу на тоту назву запричінить перекрытя здїляного файлу.',
'file-exists-sharedrepo' => 'Выбрана назва файлу ся уж хоснує в здїлянім усховіщу.
Просиме, выберте іншу назву.',

# Export
'export' => 'Експорт сторінок',
'exporttext' => 'Можете експортовати текст і історію дакотрой сторінкы або сады сторінок забаленой в XML. Резултатовый файл ся дасть імпортовати до іншой вікі, котра біжыть на софтвері MediaWiki, помочов [[Special:Import|імпортовачой сторінкы]].

До ниже зазначеного едітачного поля зазначте назвы сторінок, котры хочете експортовати; каждый рядок єдна назва. Тыж звольте, ці ся мають експортовати і старшы верзії сторінкы враховано інформацій в історії едітованя, або лем актуална верзія з інформаціов о послїднїй едітації.

В другім припадї можете тыж хосновати прямый одказ, наприклад помочов [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] ся выекспортує „[[{{MediaWiki:Mainpage}}]]“.',
'exportall' => 'Експортовати вшыткы сторінкы',
'exportcuronly' => 'Загорняти лем сучасну верзію, не повну історію',
'exportnohistory' => "----
'''Позначка:''' експорт повных історій средством того формуларя быв про проблемы з ресурсами заказаный.",
'exportlistauthors' => 'У каждой сторінкы выписати повный список приспівателїв',
'export-submit' => 'Експорт',
'export-addcattext' => 'Додати сторінкы з катеґорії:',
'export-addcat' => 'Придати',
'export-addnstext' => 'Додати сторінкы з простору назв:',
'export-addns' => 'Придати',
'export-download' => 'Уложыти як файл',
'export-templates' => 'Загорнути шаблоны',
'export-pagelinks' => 'Загорнёвати одказованы сторінкы аж до глубкы:',

# Namespace 8 related
'allmessages' => 'Сістемны повідомлїня',
'allmessagesname' => 'Назва',
'allmessagesdefault' => 'Штандартный текст',
'allmessagescurrent' => 'Актуалный текст',
'allmessagestext' => 'Тото є список вшыткых повідомлїнь доступных в просторї назв «MediaWiki».
Кідь хочете приспівати ку локалізації софтверу MediaWiki, навщівте [https://www.mediawiki.org/wiki/Localisation локалізачну сторінку на mediawiki.org] і [//translatewiki.net сервер server translatewiki.net].',
'allmessagesnotsupportedDB' => '{{ns:special}}:AllMessages не є підпороване, бо wgUseDatabaseMessages є выпнуте.',
'allmessages-filter-legend' => 'Філтер',
'allmessages-filter' => 'Філтер за станом:',
'allmessages-filter-unmodified' => 'Незмінено',
'allmessages-filter-all' => 'Вшыткы',
'allmessages-filter-modified' => 'Змінено',
'allmessages-prefix' => 'Філтер за префіксом:',
'allmessages-language' => 'Язык:',
'allmessages-filter-submit' => 'Выконати',

# Thumbnails
'thumbnail-more' => 'Звекшыти',
'filemissing' => 'Файл хыбить',
'thumbnail_error' => 'Хыба створїня нагляду: $1',
'thumbnail_error_remote' => 'Хыбове голошіня з {{grammar:2sg|$1}}:
$2',
'djvu_page_error' => 'Сторінка DjVu мімо россяг',
'djvu_no_xml' => 'Створїня XML про файл DjVu ся не вдало.',
'thumbnail-temp-create' => 'Дочасный файл нагляду негодно было створити',
'thumbnail-dest-create' => 'Нагляд не годно было уложыти на призначене місце',
'thumbnail_invalid_params' => 'Неплатный параметер нагляду',
'thumbnail_dest_directory' => 'Не дасть ся створити цілёвый адресарь',
'thumbnail_image-type' => 'Непідпорованый тіп образку',
'thumbnail_gd-library' => 'Неповна конфіґурація книжніцї GD: хыбить функція $1',
'thumbnail_image-missing' => 'Файл асі хыбить: $1',

# Special:Import
'import' => 'Імпорт сторінок',
'importinterwiki' => 'Імпорт міджі вікі',
'import-interwiki-text' => 'Про імпорт звольте жрідлову вікі і назву сторінкы. Дата ревізій і мена авторів будуть захованы. Вшыткы імпорты ся зазначують до [[Special:Log/import|книгы імпортів]].',
'import-interwiki-source' => 'Вікі/сторінка-жрідло',
'import-interwiki-history' => 'Копіровати вшыткы історічны верзії той сторінкы',
'import-interwiki-templates' => 'Загорнути вшыткы шаблоны',
'import-interwiki-submit' => 'Імпортовати',
'import-interwiki-namespace' => 'Цілёвый простор назв:',
'import-interwiki-rootpage' => 'Цїлёва корїнёва сторінка (необовязково):',
'import-upload-filename' => 'Назва файлу:',
'import-comment' => 'Коментарь:',
'importtext' => 'Просиме Вас, експортуйте сторінку з іншой вікі помочов [[Special:Export|інштрументу на експорт]], уложте файл на ваш діск а потім го заладуйте гев.',
'importstart' => 'Імпорт сторінок…',
'import-revision-count' => '$1 {{PLURAL:$1|ревізія|ревізії|ревізій}}',
'importnopages' => 'Не є што імпортовати.',
'imported-log-entries' => '{{PLURAL:$1|Наімпортованый 1 протоколовачій запис|Наімпортованы $1 протоколовачі записы|Наімпортованых $1 протоколовачіх записів}}.',
'importfailed' => 'Імпорт ся не вдав: $1',
'importunknownsource' => 'Незнамый тіп  імпортованой сторінкы',
'importcantopen' => 'Не дало ся отворити файл імпорту',
'importbadinterwiki' => 'Неплатный одказ інтервікі',
'importnotext' => 'Порожнїй або жаден текст',
'importsuccess' => 'Імпорт сконченый!',
'importhistoryconflict' => 'Екзістує конфлікт міджі історіямі верзії (може тота сторінка уж была імпортована скоре)',
'importnosources' => 'Не было выбране жрідло імпорту міджі вікі, дірект наладованя історії змін є выпнуте.',
'importnofile' => 'Не быв наладованый файл імпорту.',
'importuploaderrorsize' => 'Не вдало ся наладовати файл імпорту. Розмір файлу перевышує становлену меджу.',
'importuploaderrorpartial' => 'Не вдало ся наладовати імпортный файл. Файл быв наладованый лем частково.',
'importuploaderrortemp' => 'Не вдало ся наладовати імпортный файл. Не є к діспозіції дочасный адресарь.',
'import-parse-failure' => 'Хыба під час імпорту XML',
'import-noarticle' => 'Не є сторінка про імпорт!',
'import-nonewrevisions' => 'Вшыткы верзії уж были скоре імпортованы',
'xml-error-string' => '$1 на рядку $2, стовпець $3 (байт $4): $5',
'import-upload' => 'Наладовати XML дата',
'import-token-mismatch' => 'Стратили ся дата релації. Спробуйте то знову.',
'import-invalid-interwiki' => 'Із зазначеной вікі ся не дасть імпортовати.',
'import-error-edit' => 'Сторінка „$1“ ся не наімпортовала, бо не мате право єй едітовати.',
'import-error-create' => 'Сторінка „$1“ ся не наімпортовала, бо не мате право єй створити.',
'import-error-interwiki' => 'Сторінка „$1“ ся не імпортує, бо єй назва є зарезервована про вонкашнї лінкы (interwiki).',
'import-error-special' => 'Сторінка „$1“ ся не імпортує, бо належыть до шпеціалного простору назв, до котрого сторінкы не належать.',
'import-error-invalid' => 'Сторінка „$1“ ся не імпортує, бо єй назва неприпустна.',
'import-error-unserialize' => 'Не вдало ся десеріалізовати ревізію $2 сторінкы „$1“. Ревізія хотїла хосновати модел обсягу $3 серіалоізованый як $4.',
'import-options-wrong' => '{{PLURAL:$2|Неправильна опція|Неправильны опції}}: <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'Вказана некоректна назва корїнёвой сторінкы',
'import-rootpage-nosubpage' => 'В просторї назв вказаной корїнёвой сторінкы «$1» не дозволены підсторінкы',

# Import log
'importlogpage' => 'Книга імпортів',
'importlogpagetext' => 'На тій сторінцї ся зображують адміністраторскы імпорты сторінок враховано едітовань з іншых вікі.',
'import-logentry-upload' => 'імпортовав [[$1]] наладованём файлу',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|ревізія|ревізії|ревізій}}',
'import-logentry-interwiki' => 'міджівікі імпорт $1',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|ревізія|ревізії|ревізій}} з $2',

# JavaScriptTest
'javascripttest' => 'Тестованя JavaScript',
'javascripttest-title' => 'Біжать тест в $1',
'javascripttest-pagetext-noframework' => 'Тота сторінка є резервована про тестованя JavaScript.',
'javascripttest-pagetext-unknownframework' => 'Незнаный фреймворк тестованя „$1“.',
'javascripttest-pagetext-frameworks' => 'Просиме, звольте єден з наступных фреймворків тестованя : $1',
'javascripttest-pagetext-skins' => 'Звольте взгляд під котрым ся мають тесты спустити:',
'javascripttest-qunit-intro' => 'Смотьте [$1 документацію тестованя] на mediawiki.org',
'javascripttest-qunit-heading' => 'Сет тестів JavaScript в MediaWiki QUnit',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Ваша сторінка хоснователя',
'tooltip-pt-anonuserpage' => 'Сторінка хоснователя про IP-адресу, з котрой едітуєте',
'tooltip-pt-mytalk' => 'Ваша діскузна сторінка',
'tooltip-pt-anontalk' => 'Діскузія о едітованях выконаных з той IP-адресы',
'tooltip-pt-preferences' => 'Вашы наставлїня',
'tooltip-pt-watchlist' => 'Список сторінок, на котрых слїдуєте зміны',
'tooltip-pt-mycontris' => 'Список вашых приспівків',
'tooltip-pt-login' => 'Рекомендуєме ся приголосити, але не є то повинне.',
'tooltip-pt-anonlogin' => 'Рекомендуєме ся приголосити, але не є то повинне.',
'tooltip-pt-logout' => 'Одголошіня',
'tooltip-ca-talk' => 'Діскузія о обсягу сторінкы',
'tooltip-ca-edit' => 'Тоту сторінку можете едітовати. Просиме, хоснуйте перегляд перед уложінём.',
'tooltip-ca-addsection' => 'Створити нову секцію',
'tooltip-ca-viewsource' => 'Тота сторінка є замкнута.
Можете видїти єй код.',
'tooltip-ca-history' => 'Минулы верзії той сторінкы',
'tooltip-ca-protect' => 'Всокотити тоту сторінку',
'tooltip-ca-unprotect' => 'Змінити замок той сторінкы',
'tooltip-ca-delete' => 'Вымазати тоту сторінку',
'tooltip-ca-undelete' => 'Обновити едітованя той сторінкы выконаны перед єй змазанём',
'tooltip-ca-move' => 'Переменовати тоту сторінку',
'tooltip-ca-watch' => 'Придати гевсю сторінку до вашого списку слїдованых сторінок',
'tooltip-ca-unwatch' => 'Одобрати тоту сторінку з вашого списку слїдованых сторінок',
'tooltip-search' => 'Глядати {{SITENAME}}',
'tooltip-search-go' => 'Перейти на сторінку, што мать акурат таку назву (кідь екзістує)',
'tooltip-search-fulltext' => 'Найти сторінкы з тым текстом',
'tooltip-p-logo' => 'Головна сторінка',
'tooltip-n-mainpage' => 'Перейти на Головну сторінку',
'tooltip-n-mainpage-description' => 'Перейти на головну сторінку',
'tooltip-n-portal' => 'О проєктї, што можете зробити, де ся што находить',
'tooltip-n-currentevents' => 'Актуалны подїї',
'tooltip-n-recentchanges' => 'Список послїднїх змін',
'tooltip-n-randompage' => 'Іти на трафункову сторінку',
'tooltip-n-help' => 'Посмотрити поміч',
'tooltip-t-whatlinkshere' => 'Список вшыткых сторінок, што заганяють на тоту сторінку',
'tooltip-t-recentchangeslinked' => 'Послїднї зміны на сторінках, котры мають одказ на тїй сторінцї',
'tooltip-feed-rss' => 'RSS канал про тоту сторінку',
'tooltip-feed-atom' => 'Atom канал гевсёй сторінкы',
'tooltip-t-contributions' => 'Перегляд приспевків того хоснователя',
'tooltip-t-emailuser' => 'Послати імейл тому хоснователёви',
'tooltip-t-upload' => 'Наладовати файлы',
'tooltip-t-specialpages' => 'Список вшыткых шпеціалных сторінок',
'tooltip-t-print' => 'Верзія той сторінкы до друку',
'tooltip-t-permalink' => 'Перманентный одказ на тоту верзію сторінкы',
'tooltip-ca-nstab-main' => 'Обсяг сторінкы',
'tooltip-ca-nstab-user' => 'Видїти сторінку хоснователя',
'tooltip-ca-nstab-media' => 'Вказати сторінку файлу',
'tooltip-ca-nstab-special' => 'Шпеціална сторінка, тай єй не годен едітовати.',
'tooltip-ca-nstab-project' => 'Сторінка проєкту',
'tooltip-ca-nstab-image' => 'Видїти код сторінкы',
'tooltip-ca-nstab-mediawiki' => 'Вказати повідомлїня сістемы',
'tooltip-ca-nstab-template' => 'Видїти шаблону',
'tooltip-ca-nstab-help' => 'Видїти сторінку помочі',
'tooltip-ca-nstab-category' => 'Сторінка катеґорії',
'tooltip-minoredit' => 'Позначіти тото як незначне едітованя',
'tooltip-save' => 'Уложыти вашы зміны',
'tooltip-preview' => 'Нагляд сторінкы, просиме Вас, хоснуйте перед уложінём!',
'tooltip-diff' => 'Вказати зміны, што были зроблены в тексті.',
'tooltip-compareselectedversions' => 'Видїти роздїл міджі двома указаныма верзіями той сторінкы.',
'tooltip-watch' => 'Придати тоту сторінку до списку слїдованых',
'tooltip-watchlistedit-normal-submit' => 'Остранити надписы',
'tooltip-watchlistedit-raw-submit' => 'Актуалізовати список слїдованых сторінок',
'tooltip-recreate' => 'Обновити сторінку і кідь была змазана',
'tooltip-upload' => 'Почати одосыланя',
'tooltip-rollback' => 'Єдным кликом вернути зміны, зроблены послїдным приспівателём',
'tooltip-undo' => 'Зрушыти зміны і вказати попереднїй перегляд. Дозволює придати прічіну до ресуме.',
'tooltip-preferences-save' => 'Уложыти наставлїня',
'tooltip-summary' => 'Задайте курте згорнутя',

# Metadata
'notacceptable' => 'Тот вікі сервер не годен подати дата у форматї, котрый бы ваш кліент быв годен прочітати.',

# Attribution
'anonymous' => 'анонімный {{PLURAL:$1|хоснователь|хоснователя|хоснователї}} {{GRAMMAR:2sg|{{SITENAME}}}}',
'siteuser' => 'хоснователь {{grammar:2sg|{{SITENAME}}}} $1',
'anonuser' => 'анонімный хоснователь {{grammar:2sg|{{SITENAME}}}} $1',
'lastmodifiedatby' => 'Остатня зміна $2, $1 хоснователём $3.',
'othercontribs' => 'На базї роботы $1.',
'others' => 'іншы',
'siteusers' => '{{PLURAL:$2|Хоснователь|Хоснователї}} {{grammar:genitive|{{SITENAME}}}} $1',
'anonusers' => '{{PLURAL:$2|анонімный хоснователь|анонімны хоснователї}} {{grammar:genitive|{{SITENAME}}}} $1',
'creditspage' => 'Заслугы за сторінку',
'nocredits' => 'Ку тій сторінцї не екзістують інформації о заслугах.',

# Spam protection
'spamprotectiontitle' => 'Спам філтер',
'spamprotectiontext' => 'Сторінка, котру сьте ся пробовали уложыти, была заблокована протиспамовым філтром. Правдоподобнов причінов є одказ на екстерну сторінку, котра є на чорнім списку.',
'spamprotectionmatch' => 'Наслїдуючій текст спустив наш філтер проти спаму: $1',
'spambot_username' => 'MediaWiki очістка спаму',
'spam_reverting' => 'Реверт на послїдню верзію необсягуючу одказы на $1',
'spam_blanking' => 'Вшыткы ревізії обсяговали одказы на $1, выпорожнєны',
'spam_deleting' => 'Вшыткы ревізії обсяговали одказы на $1, змазане',
'simpleantispam-label' => "Перевірка на спам.
'''НЕ''' заповнюйте тото!",

# Info page
'pageinfo-title' => 'Інформація про "$1"',
'pageinfo-not-current' => 'Перебачте, інформації не годно вказати про старшы ревізії.',
'pageinfo-header-basic' => 'Основны інформації',
'pageinfo-header-edits' => 'Історія едітовань',
'pageinfo-header-restrictions' => 'Замок сторінкы',
'pageinfo-header-properties' => 'Властности сторінкы',
'pageinfo-display-title' => 'Вказована назва',
'pageinfo-default-sort' => 'Основный ключ сортованя',
'pageinfo-length' => 'Довжына сторінкы (в байтах)',
'pageinfo-article-id' => 'ID сторінкы',
'pageinfo-language' => 'Язык обсягу сторінкы',
'pageinfo-robot-policy' => 'Індексованя роботами',
'pageinfo-robot-index' => 'Дозволено',
'pageinfo-robot-noindex' => 'Заказане',
'pageinfo-views' => 'Чісло переглядів',
'pageinfo-watchers' => 'Кількость слїдуючіх сторінку',
'pageinfo-few-watchers' => 'Менше як $1 {{PLURAL:$1|слїдуючій|слїдуючі|слїдуючіх}}',
'pageinfo-redirects-name' => 'Чісло напрямлїнь на гевсю сторінку',
'pageinfo-subpages-name' => 'Підсторінкы гевсёй сторінкы',
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|напрямлїня}}; $3 {{PLURAL:$3|ненапрямлїня}})',
'pageinfo-firstuser' => 'Заснователь сторінкы',
'pageinfo-firsttime' => 'Дата створїня сторінкы',
'pageinfo-lastuser' => 'Остатнїй редактор',
'pageinfo-lasttime' => 'Дата остатнёго едітованя',
'pageinfo-edits' => 'Кількость вшыткого едітованя',
'pageinfo-authors' => 'Вшытка кількость унікатных авторів',
'pageinfo-recent-edits' => 'Кількость недавных ($1) едітовань',
'pageinfo-recent-authors' => 'Кількость авторів за остатнїй час',
'pageinfo-magic-words' => '{{PLURAL:$1|Маґічне слово|Маґічны слова}} ($1)',
'pageinfo-hidden-categories' => '{{PLURAL:$1|Скрыта катеґорія|Скрыты катеґорії}} ($1)',
'pageinfo-templates' => '{{PLURAL:$1|Хоснована шаблона|Хоснованы шаблоны}} ($1)',
'pageinfo-transclusions' => '{{PLURAL:$1|Сторінка, до котрой|Сторінкы, до котрых}} є тота сторінка вложена ($1)',
'pageinfo-toolboxlink' => 'Інформації о сторінцї',
'pageinfo-redirectsto' => 'Напрямлює на',
'pageinfo-redirectsto-info' => 'інформація',
'pageinfo-contentpage' => 'Рахує ся як статя',
'pageinfo-contentpage-yes' => 'Гей',
'pageinfo-protect-cascading' => 'Одты ся почінать каскадна охорона',
'pageinfo-protect-cascading-yes' => 'Гей',
'pageinfo-protect-cascading-from' => 'Каскадна охорона ся почінать гев',
'pageinfo-category-info' => 'Інформація о катеґорії',
'pageinfo-category-pages' => 'Кількость сторінок',
'pageinfo-category-subcats' => 'Кількость підкатеґорій',
'pageinfo-category-files' => 'Кількость файлів',

# Patrolling
'markaspatrolleddiff' => 'Означіти як перевірене',
'markaspatrolledtext' => 'Означіти тоту сторінку як перевірену',
'markedaspatrolled' => 'Означене як перевірене',
'markedaspatrolledtext' => 'Выбрана верзія сторінкы [[:$1]] была означена як перевірена.',
'rcpatroldisabled' => 'Патролованя послїднїх змін выпнуте',
'rcpatroldisabledtext' => 'Патролованя послїднїх змін є моментално выпнута.',
'markedaspatrollederror' => 'Не дасть ся означіти як перевірене',
'markedaspatrollederrortext' => 'Мусите зволити ревізію, котра має быти означена як перевірена.',
'markedaspatrollederror-noautopatrol' => 'Не маєте дозволене означовати властны едітованя як перевірены.',
'markedaspatrollednotify' => 'Гевся зміна сторінкы $1 была означена як одпратролована.',
'markedaspatrollederrornotify' => 'Не вдало ся поставити позначку про патролёваня',

# Patrol log
'patrol-log-page' => 'Книга перевіреных едітовань',
'patrol-log-header' => 'Тото є книга перевіреных верзій.',
'log-show-hide-patrol' => '$1 книгу записів патролованя',

# Image deletion
'deletedrevision' => 'Змазана стара ревізія $1',
'filedeleteerror-short' => 'Хыба мазаня файлу: $1',
'filedeleteerror-long' => 'Выникла хыба під час мазаня файлу:

$1',
'filedelete-missing' => 'Файл „$1“ ся не дасть змазати, бо не екзістує.',
'filedelete-old-unregistered' => 'Зазначена верзія файлу „$1“ не є в датабазї.',
'filedelete-current-unregistered' => 'Зазначеный файл „$1“ не є в датабазї.',
'filedelete-archive-read-only' => 'До архівного адресаря ($1) не має вебовый сервер права запису.',

# Browsing diffs
'previousdiff' => '← Старше едітованя',
'nextdiff' => 'Новше едітованя →',

# Media information
'mediawarning' => "'''Увага''': Тот тіп файлу може обсяговати шкодливый код.
Отворінём файлу можете огрозити свій компютер.",
'imagemaxsize' => "Максімалный розмір образку:<br />
''(на сторінцї з пописом файлу)''",
'thumbsize' => 'Великость нагляду:',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|сторінка|сторінкы|сторінок}}',
'file-info' => 'розмір файлу: $1, MIME-тіп: $2',
'file-info-size' => '$1 × $2 пікселів, розмір файлу: $3, MIME-тип: $4',
'file-info-size-pages' => '$1 × $2 пікселів, великость файлу: $3, MIME тіп: $4, $5 {{PLURAL:$5|сторінка|сторінкы|сторінок}}',
'file-nohires' => 'Не є верзія з векшым розлишінём.',
'svg-long-desc' => 'SVG-файл, номінално $1 × $2 пікселів, розмір файлу: $3',
'svg-long-desc-animated' => 'Анімованый SVG-файл, номінално $1 × $2 пікселів, розмір файлу: $3',
'svg-long-error' => 'Неправильный файл SVG: $1',
'show-big-image' => 'Повне розлишіня',
'show-big-image-preview' => 'Розмір того нагляду: $1.',
'show-big-image-other' => '{{PLURAL:$2|Інше|іншы}} розлишіня: $1.',
'show-big-image-size' => '$1 × $2 пікселів',
'file-info-gif-looped' => 'в слючцї',
'file-info-gif-frames' => '$1 {{PLURAL:$1|снимок|снимкы|снимків}}',
'file-info-png-looped' => 'в слючцї',
'file-info-png-repeat' => 'повторяне  $1{{PLURAL:$1|раз|разы}}',
'file-info-png-frames' => '$1 {{PLURAL:$1|снимок|снимкы|снимків}}',
'file-no-thumb-animation' => "'''Позначка. Через технічны обмеджіня, мініатуры того файлу не будуть анімованы.'''",
'file-no-thumb-animation-gif' => "'''Позначка. Через технічны обмеджіня, мініатуры образчіків GIF высокого розлишіня, як є гевто, ся не анімують.'''",

# Special:NewFiles
'newimages' => 'Ґалерія новых файлів',
'imagelisttext' => "Ниже є {{PLURAL:$1|єден файл|список '''$1'''&nbsp;файлів сортованых $2|список '''$1'''&nbsp;файлів сортованых $2}}.",
'newimages-summary' => 'На тій шпеціалній сторінцї ся зображують остатнї наладованы файлы.',
'newimages-legend' => 'Філтер',
'newimages-label' => 'Назва файлу (або єй часть):',
'showhidebots' => '($1 ботів)',
'noimages' => 'Не є што зобразити.',
'ilsubmit' => 'Глядати',
'bydate' => 'за датумом',
'sp-newimages-showfrom' => 'Вказати новы файлы почінаючі од $2, $1',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '{{PLURAL:$1|$1 секунда|$1 секунды|$1 секунд}}',
'minutes' => '{{PLURAL:$1|$1 минута|$1 минуты|$1 минут}}',
'hours' => '{{PLURAL:$1|$1 година|$1 годины|$1 годин}}',
'days' => '{{PLURAL:$1|$1 день|$1 днї|$1 днїв}}',
'weeks' => '{{PLURAL:$1|$1 тыждень|$1 тыжднї|$1 тыжднїв}}',
'months' => '{{PLURAL:$1|$1 місяць|$1 місяцї|$1 місяцїв}}',
'years' => '{{PLURAL:$1|$1 рік|$1 рокы|$1 років}}',
'ago' => '$1 тому',
'just-now' => 'акурат теперь',

# Human-readable timestamps
'hours-ago' => 'перед $1 {{PLURAL:$1|годинов|годинами}}',
'minutes-ago' => '$1 {{PLURAL:$1|минуту|минуты|минут}} тому',
'seconds-ago' => '$1 {{PLURAL:$1|секунду|секунды|секунд}} тому',
'monday-at' => 'В понедїлёк о $1',
'tuesday-at' => 'У вівторок о $1',
'wednesday-at' => 'В середу о $1',
'thursday-at' => 'В четверь о $1',
'friday-at' => 'В пятніцю о $1',
'saturday-at' => 'В суботу о $1',
'sunday-at' => 'В недїлю о $1',
'yesterday-at' => 'Вчера о $1',

# Bad image list
'bad_image_list' => 'Формат має быти наступным:


Раховати ся будуть лем елементы (рядкы, што ся почінають з *).
Першый одказ рядка має быти одказом на файл, якому ся не дозволює зображованя на сторінках.
Далшы одказы у тім самім рядку будуть уважены як выняткы, наприклад сторінкы, де зображіня може быти вложене.',

# Metadata
'metadata' => 'Метадата',
'metadata-help' => 'Файл обсягує додатковы інформації, якы ся звычайно додають діґіталными камерами ці скенерами.
Кідь ся файл зедітовав по вытворїню, даякы параметры можуть не одповідати тому образку.',
'metadata-expand' => 'Вказати додатковы детайлы',
'metadata-collapse' => 'Сховати додатковы детайлы',
'metadata-fields' => 'Положкы метадат образчіків зазначены у тім повідомлїню будуть на сторінцї з пописом выписаны все. Жебы вказати другы, буде треба кликнути на  „зобразити детайлы“.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude',

# Exif tags
'exif-imagewidth' => 'Шырька',
'exif-imagelength' => 'Вышка',
'exif-bitspersample' => 'Глубка фарбы',
'exif-compression' => 'Метода компресії',
'exif-photometricinterpretation' => 'Фаребный простор',
'exif-orientation' => 'Орієнтація',
'exif-samplesperpixel' => 'Чісло компонентів',
'exif-planarconfiguration' => 'Порядок дат',
'exif-ycbcrsubsampling' => 'Пропорція підвзоркованя Y ку C',
'exif-ycbcrpositioning' => 'Уміщіня Y і C',
'exif-xresolution' => 'Розлишіня образка на шырку',
'exif-yresolution' => 'Розлишіня образка на вышку',
'exif-stripoffsets' => 'Уміщіня дат образка',
'exif-rowsperstrip' => 'Чісло рядків на 1 блок',
'exif-stripbytecounts' => 'Чісло байтів на компрімованый блок',
'exif-jpeginterchangeformat' => 'Офсет ку JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Чісло байтів JPEG дат',
'exif-whitepoint' => 'Хромаціта білой точкы',
'exif-primarychromaticities' => 'Хромаціта прімарных фарб',
'exif-ycbcrcoefficients' => 'Коефіціенты матіцї про трансформованя фаребных просторів',
'exif-referenceblackwhite' => 'Світлость референчного чорной і білой точкы',
'exif-datetime' => 'Датум і час вытворїня файлу',
'exif-imagedescription' => 'Назва образку',
'exif-make' => 'Выробник фотоапарату',
'exif-model' => 'Модел фотоапарату',
'exif-software' => 'Проґрамове забеспечіня',
'exif-artist' => 'Автор',
'exif-copyright' => 'Властник авторьскых прав',
'exif-exifversion' => 'Верзія Exif',
'exif-flashpixversion' => 'Підпорована верзія Flashpix',
'exif-colorspace' => 'Фаребный простор',
'exif-componentsconfiguration' => 'Конфіґурація компонентів фарбы',
'exif-compressedbitsperpixel' => 'Компрімачный режім',
'exif-pixelydimension' => 'Шырка образчіка',
'exif-pixelxdimension' => 'Вышка образчіка',
'exif-usercomment' => 'Додатковый коментарь',
'exif-relatedsoundfile' => 'Звязаный звуковый файл',
'exif-datetimeoriginal' => 'Оріґіналный датум і час',
'exif-datetimedigitized' => 'Датум і час діґіталізації',
'exif-subsectime' => 'зломкы секунды про DateTime',
'exif-subsectimeoriginal' => 'зломкы секунды про DateTimeOriginal',
'exif-subsectimedigitized' => 'зломкы секунды про DateTimeDigitized',
'exif-exposuretime' => 'Час експозіції',
'exif-exposuretime-format' => '$1 з ($2)',
'exif-fnumber' => 'Цлона',
'exif-exposureprogram' => 'Експозічный проґрам',
'exif-spectralsensitivity' => 'Спектрална чутливость',
'exif-isospeedratings' => 'Світлочутливость ISO',
'exif-shutterspeedvalue' => 'Експозічный час (APEX)',
'exif-aperturevalue' => 'Цлона (APEX)',
'exif-brightnessvalue' => 'Яс (APEX)',
'exif-exposurebiasvalue' => 'Компензація експозіції',
'exif-maxaperturevalue' => 'Найменша цлона',
'exif-subjectdistance' => 'Далеко ку обєкту',
'exif-meteringmode' => 'Способ міряня',
'exif-lightsource' => 'Жрідло світла',
'exif-flash' => 'Блеск',
'exif-focallength' => 'Фокусна довжка',
'exif-subjectarea' => 'Положіня обєкту',
'exif-flashenergy' => 'Енерґія блеску',
'exif-focalplanexresolution' => 'X розлишіня огнісковой ровины',
'exif-focalplaneyresolution' => 'Y розлишіня огнісковой ровіны',
'exif-focalplaneresolutionunit' => 'Єдиніця розлишіня огнісковой ровины',
'exif-subjectlocation' => 'Положіня обєкту',
'exif-exposureindex' => 'Індекс експозіції',
'exif-sensingmethod' => 'Тіп сензора',
'exif-filesource' => 'Жрідло файлу',
'exif-scenetype' => 'Тіп сцены',
'exif-customrendered' => 'Хосновательска обробка',
'exif-exposuremode' => 'Режім експозіції',
'exif-whitebalance' => 'Баланс білого',
'exif-digitalzoomratio' => 'Діґіталный зум',
'exif-focallengthin35mmfilm' => 'Еквівалентна фокусна довжка (про 35 мм філм)',
'exif-scenecapturetype' => 'Тіп сцены',
'exif-gaincontrol' => 'Управа світлости',
'exif-contrast' => 'Контраст',
'exif-saturation' => 'Насыченость',
'exif-sharpness' => 'Острость',
'exif-devicesettingdescription' => 'Попис наштелёваня заряджіня',
'exif-subjectdistancerange' => 'Далеко ку обєкту',
'exif-imageuniqueid' => 'Унікатне ID образка',
'exif-gpsversionid' => 'Верзія блоку GPS-інформації',
'exif-gpslatituderef' => 'Северна або южна шырка',
'exif-gpslatitude' => 'Ґеоґрафічна шырка',
'exif-gpslongituderef' => 'Выходна або западна довжка',
'exif-gpslongitude' => 'Ґеоґрафічна довжка',
'exif-gpsaltituderef' => 'Над/підморьска вышка/глубка',
'exif-gpsaltitude' => 'Надморьска вышка',
'exif-gpstimestamp' => 'GPS час (атомовы годины)',
'exif-gpssatellites' => 'Сателіты хоснованы про міряня',
'exif-gpsstatus' => 'Статус приїмача',
'exif-gpsmeasuremode' => 'Режім міряня',
'exif-gpsdop' => 'Точность міряня',
'exif-gpsspeedref' => 'Єдиніця швыдкости',
'exif-gpsspeed' => 'Швыдкость GPS приїмателя',
'exif-gpstrackref' => 'Референція про смер руху',
'exif-gpstrack' => 'Смер рушаня',
'exif-gpsimgdirectionref' => 'Референція про оріентацію образку',
'exif-gpsimgdirection' => 'Оріентація образку',
'exif-gpsmapdatum' => 'Хоснована ґеодезічна сістема',
'exif-gpsdestlatituderef' => 'Северна/южна ґеоґрафічна шырка обєкта',
'exif-gpsdestlatitude' => 'Ґеоґрафічна шырка обєкта',
'exif-gpsdestlongituderef' => 'Северна/южна ґеоґрафічна довжка обєкта',
'exif-gpsdestlongitude' => 'Ґеоґрафічна довжка обєкта',
'exif-gpsdestbearingref' => 'Референція про дорогу ку обєкту',
'exif-gpsdestbearing' => 'Дорога ку обєкту',
'exif-gpsdestdistanceref' => 'Референція про дістанцію  ку обєкту',
'exif-gpsdestdistance' => 'Дістанція ку обєкту',
'exif-gpsprocessingmethod' => 'Метода обробкы GPS дат',
'exif-gpsareainformation' => 'Назва области GPS',
'exif-gpsdatestamp' => 'GPS датум',
'exif-gpsdifferential' => 'Діференціална корекція GPS',
'exif-jpegfilecomment' => 'Позначкы ку файлу JPEG',
'exif-keywords' => 'Ключовы слова',
'exif-worldregioncreated' => 'Часть світу, де быв образчік зазначеный',
'exif-countrycreated' => 'Країна, де быв образчік зазначеный',
'exif-countrycodecreated' => 'Код країны, де быв образчік зазначеный',
'exif-provinceorstatecreated' => 'Провінція або штат, де быв образчік зазначеный',
'exif-citycreated' => 'Місто, де быв образчік зазначеный',
'exif-sublocationcreated' => 'Часть міста, де быв образчік зазначеный',
'exif-worldregiondest' => 'Вказана часть світа',
'exif-countrydest' => 'Вказана країна',
'exif-countrycodedest' => 'Код вказаной країны',
'exif-provinceorstatedest' => 'Вказана провінція або штат',
'exif-citydest' => 'Вказане місто',
'exif-sublocationdest' => 'Вказана часть міста',
'exif-objectname' => 'Курта назва',
'exif-specialinstructions' => 'Шпеціалны інштрукції',
'exif-headline' => 'Надпис',
'exif-credit' => 'Ждідло/Додаватель',
'exif-source' => 'Жрідло',
'exif-editstatus' => 'Редакчный статус образчіка',
'exif-urgency' => 'Урґенція',
'exif-fixtureidentifier' => 'Назва сталого обєкту',
'exif-locationdest' => 'Вказане місце',
'exif-locationdestcode' => 'Код вказаного місця',
'exif-objectcycle' => 'Денный час, про котрый є файл становленый',
'exif-contact' => 'Контактна інформація',
'exif-writer' => 'Автор попису',
'exif-languagecode' => 'Язык',
'exif-iimversion' => 'IIM верзія',
'exif-iimcategory' => 'Катеґорія',
'exif-iimsupplementalcategory' => 'Додатковы катеґорії',
'exif-datetimeexpires' => 'Не хосновати по',
'exif-datetimereleased' => 'Про хоснованя од',
'exif-originaltransmissionref' => 'Код про догляданя оріґіналной трансмісії',
'exif-identifier' => 'Ідентіфікатор',
'exif-lens' => 'Хоснованый обєктів',
'exif-serialnumber' => 'Серіове чісло апарату',
'exif-cameraownername' => 'Властник апарату',
'exif-label' => 'Налепка',
'exif-datetimemetadata' => 'Датум послїднёй управы метадат',
'exif-nickname' => 'Неформална назва образчіка',
'exif-rating' => 'Рейтінґ (1–5)',
'exif-rightscertificate' => 'Цертіфікат справованя прав',
'exif-copyrighted' => 'Статус авторьскых прав',
'exif-copyrightowner' => 'Властник авторьскых прав',
'exif-usageterms' => 'Условія хоснованя',
'exif-webstatement' => 'Онлайн інформації о авторьскых правах',
'exif-originaldocumentid' => 'Унікатне ID оріґіналного документу',
'exif-licenseurl' => 'URL ліценції',
'exif-morepermissionsurl' => 'Інформації о другім ліценцованю',
'exif-attributionurl' => 'Кідь хоснуєте тото дїло, зазначте одказ',
'exif-preferredattributionname' => 'Кідь хоснуєте тото дїло, зазначте автора',
'exif-pngfilecomment' => 'Позначкы ку файлу PNG',
'exif-disclaimer' => 'Вылучіня одповідности',
'exif-contentwarning' => 'Упозорнїня ку обсягу',
'exif-giffilecomment' => 'Позначкы ку файлу GIF',
'exif-intellectualgenre' => 'Тіп положкы',
'exif-subjectnewscode' => 'Код предмету',
'exif-scenecode' => 'IPTC код сцены',
'exif-event' => 'Зображена подїя',
'exif-organisationinimage' => 'Зображена орґанізація',
'exif-personinimage' => 'Зображена особа',
'exif-originalimageheight' => 'Вышка образчіка перед орїзанём',
'exif-originalimagewidth' => 'Шырка образчіка перед орїзанём',

# Exif attributes
'exif-compression-1' => 'Нестиснутый',
'exif-compression-2' => '1-дімензіоналне Гуффманове кодованя довжкы бігу CCITT Group 3',
'exif-compression-3' => 'Кодованя факсів CCITT Group 3',
'exif-compression-4' => 'Кодованя факсів CCITT Group 4',

'exif-copyrighted-true' => 'Сокочене авторьскым правом',
'exif-copyrighted-false' => 'Без інформації о авторьскых правах',

'exif-unknowndate' => 'Незнамый датум',

'exif-orientation-1' => 'Нормална',
'exif-orientation-2' => 'Перевернуте горізонтално',
'exif-orientation-3' => 'Обернуте о 180°',
'exif-orientation-4' => 'Перевернуте вертікално',
'exif-orientation-5' => 'Повернуте о 90° проти дорозї годиновой ручкы і вертікално перевернуте',
'exif-orientation-6' => 'Повернуте о 90° проти дорозї годиновой ручкы',
'exif-orientation-7' => 'Повернуте о 90° по дорозї годиновой ручкы і вертікално перевернуте',
'exif-orientation-8' => 'Повернуте о 90° по дорозї годиновой ручкы',

'exif-planarconfiguration-1' => 'формат «chunky»',
'exif-planarconfiguration-2' => 'формат «planar»',

'exif-colorspace-65535' => 'Некаліброване',

'exif-componentsconfiguration-0' => 'не екзістує',

'exif-exposureprogram-0' => 'Недефіноване',
'exif-exposureprogram-1' => 'Ручный режім',
'exif-exposureprogram-2' => 'Нормалный режім',
'exif-exposureprogram-3' => 'Пріоріта цлоны',
'exif-exposureprogram-4' => 'Пріоріта спущі',
'exif-exposureprogram-5' => 'Креатівны проґрам (лїпша глубка остроты)',
'exif-exposureprogram-6' => 'Акція проґрам (швыдкіша спущ)',
'exif-exposureprogram-7' => 'Портретный режім (детайлны фотоґрафії з неострым задом)',
'exif-exposureprogram-8' => 'Країна (фотоґрафія країны з острым задом)',

'exif-subjectdistance-value' => '$1 метрів',

'exif-meteringmode-0' => 'Не є знаме',
'exif-meteringmode-1' => 'Середнїй',
'exif-meteringmode-2' => 'Центрозваженый',
'exif-meteringmode-3' => 'Бодове',
'exif-meteringmode-4' => 'Зонове',
'exif-meteringmode-5' => 'Матрічный',
'exif-meteringmode-6' => 'Частковый',
'exif-meteringmode-255' => 'Інше',

'exif-lightsource-0' => 'Не є знаме',
'exif-lightsource-1' => 'Денне світло',
'exif-lightsource-2' => 'Лампа денного світла',
'exif-lightsource-3' => 'Лампа розжарёваня',
'exif-lightsource-4' => 'Блеск',
'exif-lightsource-9' => 'Ясно',
'exif-lightsource-10' => 'Захмарено',
'exif-lightsource-11' => 'Тїнь',
'exif-lightsource-12' => 'Лампа денного світла тіп D (5700 − 7100K)',
'exif-lightsource-13' => 'Лампа денного світла тіп N (4600 − 5400K)',
'exif-lightsource-14' => 'Лампа денного світла тіп W (3900 − 4500K)',
'exif-lightsource-15' => 'Лампа денного світла тіп WW (3200 − 3700K)',
'exif-lightsource-17' => 'Штандартне світло тіпу A',
'exif-lightsource-18' => 'Штандартне світло тіпу B',
'exif-lightsource-19' => 'Штандартне світло тіпу C',
'exif-lightsource-24' => 'Штудіова лампа штандарду ISO',
'exif-lightsource-255' => 'Інше жрідло світла',

# Flash modes
'exif-flash-fired-0' => 'Блеск не працовав',
'exif-flash-fired-1' => 'Блеск працовав',
'exif-flash-return-0' => 'функція про роспознаваня одразів блеску не є к діспозіції',
'exif-flash-return-2' => 'одраз блеску не быв зазначеный',
'exif-flash-return-3' => 'одраз блеску быв зазначеный',
'exif-flash-mode-1' => 'принучене хоснованя блеску',
'exif-flash-mode-2' => 'хоснованя блеску заказане',
'exif-flash-mode-3' => 'автоматічный режім',
'exif-flash-function-1' => 'Блеск не є к діспозіції',
'exif-flash-redeye-1' => 'режім редукції яву червеных очей',

'exif-focalplaneresolutionunit-2' => 'in',

'exif-sensingmethod-1' => 'Недефіноване',
'exif-sensingmethod-2' => 'Єдночіповый плошный сензор',
'exif-sensingmethod-3' => 'Двойчіповый плошный сензор',
'exif-sensingmethod-4' => 'Тройчіповый плошный сензор',
'exif-sensingmethod-5' => 'Секвенчный плошный сензор',
'exif-sensingmethod-7' => 'Трёхлінеарный сензор',
'exif-sensingmethod-8' => 'Секвенчный лінеарный сензор',

'exif-filesource-3' => 'Діґіталный фотоапарат',

'exif-scenetype-1' => 'Прямо фотоґрафованый образок',

'exif-customrendered-0' => 'Нормалне спрацованя',
'exif-customrendered-1' => 'Нештандартне спрацованя',

'exif-exposuremode-0' => 'Автоматічна експозіція',
'exif-exposuremode-1' => 'Ручне наштелёваня експозіції',
'exif-exposuremode-2' => 'Брекетинґ',

'exif-whitebalance-0' => 'Автоматічный баланс білого',
'exif-whitebalance-1' => 'Ручне наштелёваня балансу білого',

'exif-scenecapturetype-0' => 'Штандартный',
'exif-scenecapturetype-1' => 'На шырку',
'exif-scenecapturetype-2' => 'На вышку',
'exif-scenecapturetype-3' => 'Ночна сцена',

'exif-gaincontrol-0' => 'Жадна',
'exif-gaincontrol-1' => 'Невелике звышіня',
'exif-gaincontrol-2' => 'Велике звышіня',
'exif-gaincontrol-3' => 'Невелике зменшіня',
'exif-gaincontrol-4' => 'Силне зменшіня',

'exif-contrast-0' => 'Нормалне',
'exif-contrast-1' => 'Мягке',
'exif-contrast-2' => 'Тверде',

'exif-saturation-0' => 'Нормалне',
'exif-saturation-1' => 'Невелика насыченость',
'exif-saturation-2' => 'Велика насыченость',

'exif-sharpness-0' => 'Нормалне',
'exif-sharpness-1' => 'Мягке',
'exif-sharpness-2' => 'Тверде',

'exif-subjectdistancerange-0' => 'Не є знаме',
'exif-subjectdistancerange-1' => 'Макро',
'exif-subjectdistancerange-2' => 'Детайл',
'exif-subjectdistancerange-3' => 'Погляд здалека',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Северна шырка',
'exif-gpslatitude-s' => 'Южна шырка',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Выходна довжка',
'exif-gpslongitude-w' => 'Западна довжка',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{PLURAL:$1|метр|метра|метрів}} над уровнёв моря',
'exif-gpsaltitude-below-sealevel' => '$1 {{PLURAL:$1|метр|метра|метрів}} під уровнёв моря',

'exif-gpsstatus-a' => 'Вымірёваня не є закінчене',
'exif-gpsstatus-v' => 'Міряня мімо роботу',

'exif-gpsmeasuremode-2' => 'Двойрозмірове міряня',
'exif-gpsmeasuremode-3' => 'Тройрозмірове міряня',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'км/год',
'exif-gpsspeed-m' => 'міль/год',
'exif-gpsspeed-n' => 'узлів',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Кілометры',
'exif-gpsdestdistance-m' => 'Мілї',
'exif-gpsdestdistance-n' => 'Морьскы мілї',

'exif-gpsdop-excellent' => 'Выняткова ($1)',
'exif-gpsdop-good' => 'Добра ($1)',
'exif-gpsdop-moderate' => 'Середня ($1)',
'exif-gpsdop-fair' => 'Ниже середнёй ($1)',
'exif-gpsdop-poor' => 'Бідна ($1)',

'exif-objectcycle-a' => 'Лем дообіда',
'exif-objectcycle-p' => 'Лем вечур',
'exif-objectcycle-b' => 'Рано і вечур',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Справный курз',
'exif-gpsdirection-m' => 'Маґнетічный курз',

'exif-ycbcrpositioning-1' => 'Центрованый',
'exif-ycbcrpositioning-2' => 'У себе',

'exif-dc-contributor' => 'Приспівателї',
'exif-dc-coverage' => 'Просторовы або часовы россягы медія',
'exif-dc-date' => 'Датум (датумы)',
'exif-dc-publisher' => 'Выдаватель',
'exif-dc-relation' => 'Повязаны медія',
'exif-dc-rights' => 'Права',
'exif-dc-source' => 'Оріґіналне медіюм',
'exif-dc-type' => 'Тіп медія',

'exif-rating-rejected' => 'Завергнуте',

'exif-isospeedratings-overflow' => 'Понад 65535',

'exif-iimcategory-ace' => 'Култура, уменя і забава',
'exif-iimcategory-clj' => 'Злочін і право',
'exif-iimcategory-dis' => 'Гаварії і напасть',
'exif-iimcategory-fin' => 'Економіка і бізніс',
'exif-iimcategory-edu' => 'Едукація',
'exif-iimcategory-evn' => 'Жывотне середовище',
'exif-iimcategory-hth' => 'Здоровя',
'exif-iimcategory-hum' => 'Людьскы залюбы',
'exif-iimcategory-lab' => 'Праца',
'exif-iimcategory-lif' => 'Вольный час і жывотный штіл',
'exif-iimcategory-pol' => 'Політіка',
'exif-iimcategory-rel' => 'Віра і реліґія',
'exif-iimcategory-sci' => 'Наука і технолоґії',
'exif-iimcategory-soi' => 'Соціална проблематіка',
'exif-iimcategory-spo' => 'Шпорт',
'exif-iimcategory-war' => 'Войны, конфлікты і непокої',
'exif-iimcategory-wea' => 'Хвіля',

'exif-urgency-normal' => 'Нормалне ($1)',
'exif-urgency-low' => 'Низка ($1)',
'exif-urgency-high' => 'Высока ($1)',
'exif-urgency-other' => 'Хоснователём дефінована пріоріта ($1)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'вшыткы',
'namespacesall' => 'вшыткы',
'monthsall' => 'вшыткы',

# Email address confirmation
'confirmemail' => 'Потверджіня адресы ел. пошты',
'confirmemail_noemail' => 'Во своїм [[Special:Preferences|хосновательскім наставлїню]] сьте не зазначіли платну адресу ел. пошты.',
'confirmemail_text' => 'Тота вікі выжадує, жебы сьте перед хоснованым дакотрых функцій потвердили свою адресу електронічной пошты. Кликнутём на клапку ниже одошлете потверджовачій лист на вами зазначену адресу. Тот лист обсягує одказ і код потверджіня; зображінём одказованой сторінкы во своїм інтернетовім переглядачу потвердите, же зазначена адреса є платна.',
'confirmemail_pending' => 'Потверджовачій код быв посланый ва вашу адресу ел. пошты.
Кідь сьте собі конто створили перед моментом, спробуйте на доручіня коду пару минут почекати, покы пожадате о новый.',
'confirmemail_send' => 'Одослати потверджовачій код',
'confirmemail_sent' => 'Потверджовачій лист быв посланый.',
'confirmemail_oncreate' => 'На вашу адресу ел. пошты быв посланый потверджовачій код.
Тот код не треба про приголошіня, але буде го треба про актівацію дакотрых функцій заложеных на хоснованю ел. пошты.',
'confirmemail_sendfailed' => '{{GRAMMAR:3sg|{{SITENAME}}}} ся не вдало одослати потверджовачій лист. Перевірьте ці адреса не обсягує хыбны буквы.

Поштовый проґрам одповив: $1',
'confirmemail_invalid' => 'Неправильный потверджовачій код. Може уж уплынула платность коду.',
'confirmemail_needlogin' => 'Про потверджіня своёй адрес ел. пошты ся мусите $1.',
'confirmemail_success' => 'Ваша адреса ел. пошты была потверджена. Нынї ся можете [[Special:UserLogin|приголосити]] і хосновати вікі.',
'confirmemail_loggedin' => 'Ваша адреса ел. пошты была потверджена.',
'confirmemail_subject' => 'Потверджіня адресы ел. пошты про  {{grammar:4sg|{{SITENAME}}}}',
'confirmemail_body' => 'Хтось (асі вы, з IP адресы $1) собі реґістровав конто з меном "$2" і тов адресов ел. пошты на {{grammar:6sg|{{SITENAME}}}}.

Кідь собі желате актівовати функції ел. пошты на {{grammar:6sg|{{SITENAME}}}}, так про потверджіня, же тота адреса справды належыть вам, перейдите своїм інтернетовым переглядачом на слїдуючу адресу:

$3

Кідь сьте о тото потверджіня  *не жадали*, кликните на слїдуючій одказ, котрым потверджіня зрушыте:

$5

Платность того коду потверджіня експірує $4.',
'confirmemail_body_changed' => 'Хтось (асі вы, з IP адресы $1),
змінив адресу ел. пошты ку конту "$2" на {{grammar:6sg|{{SITENAME}}}} на тоту адресу.

Кідь собі желате актівовати функції ел. пошты на {{grammar:6sg|{{SITENAME}}}}, так про потверджіня, же тота адреса справды належыть вам, перейдьте своїм інтернетовым переглядачом на наслїдуючу адресу:

$3

Кідь сьте о тото потверджіня  *не жадали*, кликните на слїдуючій одказ, котрым потверджіня зрушыте:

$5

Платность того коду потверджіня експірує $4.',
'confirmemail_body_set' => 'Дахто (асі вы, з IP адресы $1) наставив імейлову адресу 
конта „$2“ на {{grammar:6sg|{{SITENAME}}}} на тоту адресу.

Кідь хочете актівовати імейловы функції на
{{grammar:6sg|{{SITENAME}}}}, та жебы потвердити, же тота адреса справды
належыть вам, ідьте своїм інтернетовым перезерачом на адресу ниже:

$3

Кідь вам тото конто *не належыть*, кликните на наступный
одказ з чім потверджіня зрушыте:

$5

Платность того коду кінчіть $4.',
'confirmemail_invalidated' => 'Потверджіня адресы електронічной пошты было зрушене',
'invalidateemail' => 'Зрушыти потверджіня адресы електронічной пошты',

# Scary transclusion
'scarytranscludedisabled' => '[Вкладаня шаблон міджі вікі є выпнуте]',
'scarytranscludefailed' => '[Не вдало ся натягнути шаблону про $1]',
'scarytranscludefailed-httpstatus' => '[Не вдало ся наладовати шаблону про $1: HTTP $2]',
'scarytranscludetoolong' => '[URL дуже довгый]',

# Delete conflict
'deletedwhileediting' => "'''Увага:''' бігом вашой едітації была тота сторінка змазана!",
'confirmrecreate' => 'Хоснователь [[User:$1|$1]] ([[User talk:$1|діскузія]]) тоту сторінку змазав потім, як сьте зачали едітовати з причінов:
: „$2“
Справды собі хочете знову тоту сторінку створити?',
'confirmrecreate-noreason' => 'Хоснователь [[User:$1|$1]] ([[User talk:$1|діскузія]]) тоту сторінку змазав потім, як сьте зачали едітовати з причінов.
Досправды собі хочете знову тоту сторінку обновити?',
'recreate' => 'Повторно створити',

# action=purge
'confirm_purge_button' => 'OK',
'confirm-purge-top' => 'Очістити кеш той сторінкы?',
'confirm-purge-bottom' => 'Актуалізація сторінкы вымаже кеш і буде вказана найактуалнїша верзія',

# action=watch/unwatch
'confirm-watch-button' => 'ОК',
'confirm-watch-top' => 'Придати тоту сторінку до списку слїдованых?',
'confirm-unwatch-button' => 'ОК',
'confirm-unwatch-top' => 'Выняти тоту сторінку зо слїдованых?',

# Multipage image navigation
'imgmultipageprev' => '← попередня сторінка',
'imgmultipagenext' => 'далша сторінка →',
'imgmultigo' => 'Перейти!',
'imgmultigoto' => 'Перейти на сторінку $1',

# Table pager
'ascending_abbrev' => 'зрост',
'descending_abbrev' => 'спад',
'table_pager_next' => 'Далша сторінка',
'table_pager_prev' => 'Попередня сторінка',
'table_pager_first' => 'Перша сторінка',
'table_pager_last' => 'Послїдня сторінка',
'table_pager_limit' => 'Вказовати $1 елементів на сторінцї',
'table_pager_limit_label' => 'Записів на сторінку:',
'table_pager_limit_submit' => 'Выконати',
'table_pager_empty' => 'Ніч не было найджене',

# Auto-summaries
'autosumm-blank' => 'Сторінка очіщена',
'autosumm-replace' => 'Обсяг сторінкы нагородженый текстом „$1“',
'autoredircomment' => 'Напрямлїня на [[$1]]',
'autosumm-new' => 'Створена сторінка: $1',

# Live preview
'livepreview-loading' => 'Наладовованя...',
'livepreview-ready' => 'Наладовованя… Готово!',
'livepreview-failed' => 'Швыдкый нагляд не є доступный! Спробуйте хосновати звычайный нагляд.',
'livepreview-error' => 'Не успішне споїня: $1 "$2". Хоснуйте звычайный нагляд.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Зміны за  {{PLURAL:$1|послїдню секунду|послїднї  $1 секунды|послїднїх $1 секунд}} не мусять быти у тім списку вказаны.',
'lag-warn-high' => 'Зато же датабазовый сервер є теперь незвычайно затяженый, не мусять быти зміны за  {{PLURAL:$1|послїдню секунду|послїднї $1 секунды|послїднїх $1 секунд}} у тім списку вказаны.',

# Watchlist editor
'watchlistedit-numitems' => 'Ваш список слїдованых сторінок обсягує  (мімо діскузных сторінок) {{PLURAL:$1|1 положку|$1 положкы|$1 положок}}.',
'watchlistedit-noitems' => 'Ваш список слїдованых сторінок не обсягує жадну положку.',
'watchlistedit-normal-title' => 'Едітованя списку слїдованых сторінок',
'watchlistedit-normal-legend' => 'Вымазаня надписів зо список слїдованых сторінок',
'watchlistedit-normal-explain' => 'Положкы вашого списка слїдованых сторінок суть вказаны ниже.
Тоту сторінку можете із списка одстранити так, же означіте єй коцочку і кликнете "{{int:Watchlistedit-normal-submit}}".
Тыж можете [[Special:EditWatchlist/raw|едітовати список в текстовій формі]].',
'watchlistedit-normal-submit' => 'Одстранити положкы',
'watchlistedit-normal-done' => '{{PLURAL:$1|Была одстранена  1 положка|Были одстранены $1 положкы|Было одстранено $1 положок}} з Вашого списка слїдованых сторінок:',
'watchlistedit-raw-title' => 'Едітовати як текст',
'watchlistedit-raw-legend' => 'Едітованя списку слїдованых сторінок як тексту',
'watchlistedit-raw-explain' => 'Положкы на вашім списку слїдованых сторінок суть вказаны ниже. Можете їх придавати, одстранёвати ці мінити у вказанім списку - єден рядок є єдна положка.
Про уложіня змін стисните ґомбічку „{{int:Watchlistedit-raw-submit}}“.
Список едітованых сторінок можете тыж [[Special:EditWatchlist|едітовати в штандартнім едіторі]].',
'watchlistedit-raw-titles' => 'Положкы:',
'watchlistedit-raw-submit' => 'Актуалізовати список',
'watchlistedit-raw-done' => 'Ваш список слїдованых сторінок быв актуалізованый.',
'watchlistedit-raw-added' => '{{PLURAL:$1|Была придана 1 положка|Были приданы $1 положкы|Было придано $1 положок}}:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|Была одстранена 1 положка|Были одстранены $1 положкы|Было одстраненых $1 положок}}:',

# Watchlist editing tools
'watchlisttools-view' => 'Зміны на сторінках зо списку',
'watchlisttools-edit' => 'Нагляд і едітованя списку',
'watchlisttools-raw' => 'Едітовати як текст',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|діскузія]])',

# Core parser functions
'unknown_extension_tag' => 'Незнама значка росшырїня: „$1“',
'duplicate-defaultsort' => 'Увага: Імпліцітный ключ сортованя (DEFAULTSORTKEY) „$2“ переписує скоре наставлену годноту „$1“.',

# Special:Version
'version' => 'Верзія',
'version-extensions' => 'Наіншталованы росшырїня',
'version-specialpages' => 'Шпеціалны сторінкы',
'version-parserhooks' => 'Припойны пункты парсера',
'version-variables' => 'Перемінны',
'version-antispam' => 'Охрана перед спамом',
'version-skins' => 'Взгляды',
'version-other' => 'Інше',
'version-mediahandlers' => 'Обслуга медії',
'version-hooks' => 'Припойны пункты',
'version-parser-extensiontags' => 'Приданы сінтактічны значкы',
'version-parser-function-hooks' => 'Функціа парсера',
'version-hook-name' => 'Назва припойного пункту',
'version-hook-subscribedby' => 'Підписаный на',
'version-version' => '(Верзія $1)',
'version-license' => 'Ліценція',
'version-poweredby-credits' => "Тота вікі біжыть на '''[https://www.mediawiki.org/ MediaWiki]''', copyright © 2001–$1 $2.",
'version-poweredby-others' => 'іншы',
'version-poweredby-translators' => 'перекладателї на translatewiki.net',
'version-credits-summary' => 'Слїдуючім людям бы сьме радо подяковали за їх приспівкы [[Special:Version|MediaWiki]].',
'version-license-info' => 'MediaWiki є слободный софтвер; можете го шырити або управляти в згодї з условіями GNU General Public License, выдаваной Free Software Foundation; будь верзія 2 той ліценції або (як уважыте) будьяка пізнїша верзія.

MediaWiki є дістрібуована в надїї, же буде хосновна, але БЕЗ БУДЬЯКОЙ ЗАРУКЫ; не давають ся ани зарукы ПРОДАЙНОСТИ або ВАЛУШНОСТИ ПРО СТАНОВЛЕНЫЙ ЦІЛЬ. Детайлы ся дочітате в текстї  GNU General Public License.

[{{SERVER}}{{SCRIPTPATH}}/COPYING Kopii GNU General Public License] сьте мали обтримати вєдно з тым проґрамом, кідь нїт, напиште на  Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA або [//www.gnu.org/licenses/old-licenses/gpl-2.0.html сі єй прочітайте онлайн].',
'version-software' => 'Іншталованый софтвер',
'version-software-product' => 'Продукт',
'version-software-version' => 'Верзія',
'version-entrypoints' => 'URL вступных пунктів',
'version-entrypoints-header-entrypoint' => 'Вступный пункт',
'version-entrypoints-header-url' => 'URL',

# Special:Redirect
'redirect' => 'Напрямлїня за файлом, хоснователям або ID ревізії',
'redirect-legend' => 'Напрямити на файл або сторінку',
'redirect-summary' => 'Тота шпеціална сторінка напрямує на файл (по назві), сторінку (по ID ревізії) або хоснователя (по чіселнім хоснователёвім ID).',
'redirect-submit' => 'Перейти',
'redirect-lookup' => 'Найти:',
'redirect-value' => 'Значіня',
'redirect-user' => 'ID хоснователя',
'redirect-revision' => 'Ревізія сторінкы',
'redirect-file' => 'Назва файлу',
'redirect-not-exists' => 'Значіня ся не нашло',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Гляданя дуплікатных файлів',
'fileduplicatesearch-summary' => 'Гляданя дупліцітных файлів ся базує на їх геш функції.',
'fileduplicatesearch-legend' => 'Гляданя дуплікатів',
'fileduplicatesearch-filename' => 'Назва файлу:',
'fileduplicatesearch-submit' => 'Глядати',
'fileduplicatesearch-info' => '$1 × $2 пікселів<br />Розмір файлу: $3<br />MIME-тіп: $4',
'fileduplicatesearch-result-1' => 'Файл «$1» не має ідентичных файлів.',
'fileduplicatesearch-result-n' => 'Файл «$1» має {{PLURAL:$2|1 ідентичный дуплікат|$2 ідентичных дуплікатів}}.',
'fileduplicatesearch-noresults' => 'Файл з назвов «$1» ненайдженый.',

# Special:SpecialPages
'specialpages' => 'Шпеціалны сторінкы',
'specialpages-note' => '* Звычайны шпеціалны сторінкы.
* <span class="mw-specialpagerestricted">Шпеціалны сторінкы з&nbsp;обмедженым приступом</span>
* <span class="mw-specialpagecached">Кешованы шпеціалны сторінкы</span>',
'specialpages-group-maintenance' => 'Технічны репорты',
'specialpages-group-other' => 'Іншы',
'specialpages-group-login' => 'Приголошіня / створїня конта',
'specialpages-group-changes' => 'Послїднї зміны а лоґы',
'specialpages-group-media' => 'Файлы',
'specialpages-group-users' => 'Хоснователї і права',
'specialpages-group-highuse' => 'Часто поужываны сторінкы',
'specialpages-group-pages' => 'Спискы сторінок',
'specialpages-group-pagetools' => 'Інштрументы сторінок',
'specialpages-group-wiki' => 'Даны і інштрументы',
'specialpages-group-redirects' => 'Напрямлїня',
'specialpages-group-spam' => 'Протиспамовы інштрументы',

# Special:BlankPage
'blankpage' => 'Порожня сторінка',
'intentionallyblankpage' => 'Тота сторінка є порожня нароком.',

# External image whitelist
'external_image_whitelist' => ' #Тот рядок зохабте без зміны.<pre>
#Ниже уведьте фраґменты реґуларных выразів (лем часть міджі //).
#Тоты выразы ся аплікують на URL вкладаных екстерный образків.
#Тоты, котры згодны, ся зобразять як образок; другы лем як екстерный одказ.
#Рядкы зачінаючі знаком # ся поважують за коментарї.
#На великости букв не залежыть.

#Вшыткы реґуларны выразы зазначте над тым рядком. Тотрядок зохабте без зміны.</pre>',

# Special:Tags
'tags' => 'Платны значкы про зміны',
'tag-filter' => 'Філтер [[Special:Tags|значок]]:',
'tag-filter-submit' => 'Філтровати',
'tag-list-wrapper' => '([[Special:Tags|{{PLURAL:$1|Значка|Значкы}}]]: $2)',
'tags-title' => 'Значкы',
'tags-intro' => 'Тота сторінка обсягує список значок, котрыма може софтвер означовати єднотливы едітованя і їх значіня.',
'tags-tag' => 'Назва значкы',
'tags-display-header' => 'Зображіня на списках змін',
'tags-description-header' => 'Повный попис значіня',
'tags-hitcount-header' => 'Означены зміны',
'tags-edit' => 'едітовати',
'tags-hitcount' => '$1 {{PLURAL:$1|зміна|зміны|змін}}',

# Special:ComparePages
'comparepages' => 'Порівнаня сторінок',
'compare-page1' => 'Сторінка 1',
'compare-page2' => 'Сторінка 2',
'compare-rev1' => 'Ревізія 1',
'compare-rev2' => 'Ревізія 2',
'compare-submit' => 'Порівнати',
'compare-invalid-title' => 'Вами задана назва є неправилна.',
'compare-title-not-exists' => 'Зазначена назва не екзістує.',
'compare-revision-not-exists' => 'Зазначена ревізія не екзістує.',

# Database error messages
'dberr-header' => 'Тота вікі має даякы проблемы',
'dberr-problems' => 'Перебачте! Тот сервер має теперь технічны проблемы.',
'dberr-again' => 'Спробуйте обновити сторінку за пару мінут.',
'dberr-info' => '(не годен навязати споїня з датабазовым сервером: $1)',
'dberr-info-hidden' => '(Не годен навязати споїня з датабазовым сервером)',
'dberr-usegoogle' => 'Можете спробовати поглядати за допомогов Google.',
'dberr-outofdate' => 'Майте на увазї, же ёго індексы можуть быти застарілыма.',
'dberr-cachederror' => 'Наслїдуюча сторінка є копія з кеш і не мусить быти актуалне.',

# HTML forms
'htmlform-invalid-input' => 'Дакотры дата заданы вами суть хыбны',
'htmlform-select-badoption' => 'Вами зазначена величіна не є доступна можность.',
'htmlform-int-invalid' => 'Зазначена величіна не є ціле чісло.',
'htmlform-float-invalid' => 'Зазначена величіна не є чісло.',
'htmlform-int-toolow' => 'Вами зазначене значіня є менше як дозволене мінімум $1',
'htmlform-int-toohigh' => 'Вами зазначене значіня є менша як дозволене максімум $1',
'htmlform-required' => 'Тота величіна є повинна',
'htmlform-submit' => 'Одослати',
'htmlform-reset' => 'Вернути зміны',
'htmlform-selectorother-other' => 'Інше',
'htmlform-no' => 'Нє',
'htmlform-yes' => 'Гей',
'htmlform-chosen-placeholder' => 'Звольте параметер',

# SQLite database support
'sqlite-has-fts' => '$1 з підпоров повнотекстового гляданя',
'sqlite-no-fts' => '$1 без підпоры повнотекстового гляданя',

# New logging system
'logentry-delete-delete' => '$1 {{GENDER:$2|змазав|змазала}} сторінку $3',
'logentry-delete-restore' => '$1 {{GENDER:$2|обновив|обновила}} сторінку $3',
'logentry-delete-event' => '$1 {{GENDER:$2|змінив|змінила}}  відимость {{PLURAL:$5|протоколового запису|$5 протоколовых записів}} к сторінцї $3: $4',
'logentry-delete-revision' => '$1 {{GENDER:$2|змінив|змінила}}  відимость {{PLURAL:$5|ревізії|$5 ревізій}} на сторінцї $3: $4',
'logentry-delete-event-legacy' => '$1 {{GENDER:$2|змінив|змінила}} відимость протоколовых записів к сторінцї $3',
'logentry-delete-revision-legacy' => '$1 {{GENDER:$2|змінив|змінила}}  відимость ревізій на сторінцї $3',
'logentry-suppress-delete' => '$1 {{GENDER:$2|утаїв|утаїла}}  сторінку $3',
'logentry-suppress-event' => '$1 тайком {{GENDER:$2|змінив|змінила}}  відимость {{PLURAL:$5|протоколового запису|$5 протоколовых записів}} к сторінцї $3: $4',
'logentry-suppress-revision' => '$1 тайком {{GENDER:$2|змінив|змінила}}  відимость {{PLURAL:$5|ревізії|$5 ревізій}} на сторінцї $3: $4',
'logentry-suppress-event-legacy' => '$1 тайком {{GENDER:$2|змінив|змінила}}  відимость протоколовых записів к сторінцї $3',
'logentry-suppress-revision-legacy' => '$1 тайком {{GENDER:$2|змінив|змінила}} відимость ревізій на сторінцї $3',
'revdelete-content-hid' => 'скрыти обсяг',
'revdelete-summary-hid' => 'опис едітованя схованый',
'revdelete-uname-hid' => 'імя хоснователя сховане',
'revdelete-content-unhid' => 'обсяг одкрытый',
'revdelete-summary-unhid' => 'опис едітованя одкрытый',
'revdelete-uname-unhid' => 'імя хоснователя одкрыте',
'revdelete-restricted' => 'приданы обмеджіня про адміністраторів',
'revdelete-unrestricted' => 'зняты обмеджіня про адміністраторів',
'logentry-move-move' => '$1 {{GENDER:$2|переменовав|переменовала}} сторінку $3 на $4',
'logentry-move-move-noredirect' => '$1 {{GENDER:$2|переменовав|переменовала}} сторінку $3 на $4 без створїня напрямлїня',
'logentry-move-move_redir' => '$1 {{GENDER:$2|переменовав|переменовала}} сторінку $3 на $4 з вычерянём напрямлїнь',
'logentry-move-move_redir-noredirect' => '$1 {{GENDER:$2|змінив|змінила}} сторінку $3 на $4 місце напрямлїня без створїня напрямлїня',
'logentry-patrol-patrol' => '$1 {{GENDER:$2|означів|означіла}} ревізію $4 сторінкы $3 як перевірену',
'logentry-patrol-patrol-auto' => '$1 автоматічно {{GENDER:$2|означів|означіла}} ревізію $4 сторінкы $3 як перевірену',
'logentry-newusers-newusers' => 'Было {{GENDER:$2|створене}} хосновательске конто $1',
'logentry-newusers-create' => 'Было {{GENDER:$2|створене}} хосновательске конто $1',
'logentry-newusers-create2' => '$1 {{GENDER:$2|створив|створила}} хосновательске конто $3',
'logentry-newusers-byemail' => '$1 {{GENDER:$2|створив|створила}} хосновательске конто $3, гесло послане было імейлом',
'logentry-newusers-autocreate' => 'Автоматічно было {{GENDER:$2|створене}} конто $1',
'logentry-rights-rights' => '$1 {{GENDER:$1|змінив|змінила}} членство в ґрупах про $3 із $4 на $5',
'logentry-rights-rights-legacy' => '$1 {{GENDER:$1|змінив|змінила}} членство в ґрупах про $3',
'logentry-rights-autopromote' => '$1 {{GENDER:$2|быв автоматічно переведеный|была автоматічно переведана}} з $4 на $5',
'rightsnone' => '(жадне)',

# Feedback
'feedback-bugornote' => 'Кідь сьте прирыхтованый подробно описати технічный проблем, можете [$1 наголосити хыбу].
Інакше можете схносновати простый формулать ниже. Ваш коментарь буде приданый на сторінку „[$3 $2]“ разом з вашым іменом хоснователя тай інформаціов о тім, якый бровсер хоснуєте.',
'feedback-subject' => 'Предмет:',
'feedback-message' => 'Повідомлїня:',
'feedback-cancel' => 'Сторно',
'feedback-submit' => 'Одослати одозву',
'feedback-adding' => 'Коментарь ся придавать на сторінку…',
'feedback-error1' => 'Хыба: Нерозознаый резултат з API',
'feedback-error2' => 'Хыба: Едітованя ся не вдало',
'feedback-error3' => 'Хыба: API не вернуло жадну одповідь',
'feedback-thanks' => 'Дякуєме! Ваш коментарь быв приданый на сторінку „[$2 $1]“.',
'feedback-close' => 'Готово',
'feedback-bugcheck' => 'Герешнї! Лем перевірьте, ці то не єдна з [$1 уж знамых хыб].',
'feedback-bugnew' => 'Перевірив(а) єм то. Хочу повідомити нову хыбу.',

# Search suggestions
'searchsuggest-search' => 'Глядати',
'searchsuggest-containing' => 'обсягуючій...',

# API errors
'api-error-badaccess-groups' => 'Не мате дозволено наладововати файлы на тоту вікі.',
'api-error-badtoken' => 'Внутрїшня хыба: планый знак.',
'api-error-copyuploaddisabled' => 'Наладовованя з URL є на тім сервері заказане.',
'api-error-duplicate' => 'На тій вікі уж {{PLURAL:$1|екзістує [$2 другый файл]|екзістують [$2 іншы файлы]}} з такым самым обсягом.',
'api-error-duplicate-archive' => '{{PLURAL:$1|быв [$2 другый файл]|были [$2 даякы другы файлы]}} з такым самым обсягом уж гев оперед {{PLURAL:$1|быв|были}}, але {{PLURAL:$1|быв змазаный|были змазаны}}.',
'api-error-duplicate-archive-popup-title' => '{{PLURAL:$1|дупліцітный файл, якый быв|дупліцітны файл, як были}} змазаны',
'api-error-duplicate-popup-title' => 'Дупліцітны {{PLURAL:$1|файл|файлы}}',
'api-error-empty-file' => 'Наладованый файл є порожнїй.',
'api-error-emptypage' => 'Створїня новых, порожнїх сторінк неслободно.',
'api-error-fetchfileerror' => 'Внутрїшня хыба: трафила ся хыба під час обтриманя файлу.',
'api-error-fileexists-forbidden' => 'Файл з назвов „$1“ уж екзістує тай не годен го переписати.',
'api-error-fileexists-shared-forbidden' => 'файл з назвов „$1“ уж екзістує в сполочнім усховищу тай не годен го переписати.',
'api-error-file-too-large' => 'Наладованый файл є барз великый.',
'api-error-filename-tooshort' => 'Назва файлу є барз курта.',
'api-error-filetype-banned' => 'Тот тіп файлу є заказаный.',
'api-error-filetype-banned-type' => '$1 {{PLURAL:$4|є недозволеный формат файлів|суть недозволены форматы файлів}}. {{PLURAL:$3|Дозволеный формат фалів є|Дозволены форматы файлів суть}} $2.',
'api-error-filetype-missing' => 'Тот файл не мать росшырїня.',
'api-error-hookaborted' => 'Пожадована вами зміна была одмітнута дакотрым росшырінём.',
'api-error-http' => 'Внутрїшня хыба: не вдало ся припоїти к серверу.',
'api-error-illegal-filename' => 'Тота назва файлу не є дозволена.',
'api-error-internal-error' => 'Внутрїшня хыба: притрафила ся хыба під час спрацованя вашого наладованого файлу.',
'api-error-invalid-file-key' => 'Внутрїшня хыба: файл ся не нашов в дочаснім усховіщі.',
'api-error-missingparam' => 'Внутрїшня хыба: хыбують параметры пожадавкы.',
'api-error-missingresult' => 'Внутрїшня хыба: не годен становити, ці копірованя было успішне.',
'api-error-mustbeloggedin' => 'Жебы наладовати файлы, мусите быти приголошеный.',
'api-error-mustbeposted' => 'Внутрїшня хыба: пожадавка мусить быти через HTTP POST.',
'api-error-noimageinfo' => 'Наладованя было успішне, але сервер не додав о файлї ниякы інформації.',
'api-error-nomodule' => 'Внутрїшня хыба: не є наставленый модул наладовованя.',
'api-error-ok-but-empty' => 'Внутрїшня хыба: сервер не одповідать.',
'api-error-overwrite' => 'Не є дозволене переписати екзістуючій файл.',
'api-error-stashfailed' => 'Внутрїшня хыба: серверу ся не вдало уложыти дочасный файл.',
'api-error-publishfailed' => 'Внутрїшня хыба: серверови ся не вдало опубліковати дочасный файл.',
'api-error-timeout' => 'Сервер не одповідав в очекаванім часї.',
'api-error-unclassified' => 'Трафила ся незнама хыба.',
'api-error-unknown-code' => 'Незнама хыба: „$1“',
'api-error-unknown-error' => 'Внутрїшня хыба: трафила ся хыба при спробі о наладованя файлу.',
'api-error-unknown-warning' => 'Незнаме варованя: $1',
'api-error-unknownerror' => 'Незнама хыба: „$1“',
'api-error-uploaddisabled' => 'Начітаваня файлів є на тій вікі выпнуте.',
'api-error-verification-error' => 'Файл є може пошкодженый, або мать плане росшырїня.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|секунда|секунды|секунд}}',
'duration-minutes' => '$1 {{PLURAL:$1|минуту|минуты|минут}}',
'duration-hours' => '$1 {{PLURAL:$1|година|годины|годин}}',
'duration-days' => '$1 {{PLURAL:$1|день|днї|днів}}',
'duration-weeks' => '$1 {{PLURAL:$1|тыждень|тыжднї|тыжднїв}}',
'duration-years' => '$1 {{PLURAL:$1|рік|рокы|років}}',
'duration-decades' => '$1 {{PLURAL:$1|декада|декады|декад}}',
'duration-centuries' => '$1 {{PLURAL:$1|стороча|стороча|стороч}}',
'duration-millennia' => '$1 {{PLURAL:$1|тісячроча|тісячроча|тісячроч}}',

# Image rotation
'rotate-comment' => 'Образчік обернутый о $1 {{PLURAL:$1|ґрадус|ґрадусів}} за цайґером',

# Limit report
'limitreport-title' => 'Дата профілованя парсера:',
'limitreport-cputime' => 'Час хоснованя CPU',
'limitreport-cputime-value' => '$1 {{PLURAL:$1|секунда|секунды|секунд}}',
'limitreport-walltime' => 'Хоснованя реалного часу',
'limitreport-walltime-value' => '$1 {{PLURAL:$1|секунда|секунды|секунд}}',
'limitreport-ppvisitednodes' => 'Чісло ґузів навщівленых препроцесором',
'limitreport-ppgeneratednodes' => 'Чісло ґузів выґенерованых препроцесором',
'limitreport-postexpandincludesize' => 'Розмір по включіню до росшырїня',
'limitreport-templateargumentsize' => 'Розмір арґументів шаблоны',
'limitreport-expansiondepth' => 'Найвысша глубка росшырїня',
'limitreport-expensivefunctioncount' => 'Чісло дорогой функції аналізатора',

# Special:ExpandTemplates
'expandtemplates' => 'Розгортаня шаблон',
'expand_templates_intro' => 'Тота шпеціална сторінка перетворює текст, рекурзівно розгортаювші у ній вшыткы шаблоны як <code><nowiki>{{</nowiki>#language:…...}}</code> ці перемінны як <code><nowiki>{{</nowiki>CURRENTDAY}}</code> – тзн. практічно вшытко у двоїтых заперках. Ку тому ся хоснують прямо одповідаючі функціі парсера MediaWiki.',
'expand_templates_title' => 'Назва сторінкы про контекст про {{FULLPAGENAME}} ітд.:',
'expand_templates_input' => 'Вступный текст:',
'expand_templates_output' => 'Резултат',
'expand_templates_xml_output' => 'XML-выступ',
'expand_templates_ok' => 'ОК',
'expand_templates_remove_comments' => 'Одстранити коментарї',
'expand_templates_remove_nowiki' => 'Іґноровати в резултатї значкы <nowiki>',
'expand_templates_generate_xml' => 'Указати сінтаксічный стром в XML',
'expand_templates_preview' => 'Нагляд',

);
