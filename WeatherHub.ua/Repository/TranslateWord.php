<?php
$translatedWeathers = [
    'Thunderstorm'=>'Гроза',
    'Drizzle'=>'Незначний дощик',
    'Rain'=>'Дощ',
    'Snow'=>'Сніжно',
    'Mist'=>'Димно',
    'Haze'=>'Серпанок',
    'Fog'=>'Туманно',
    'Sand'=>'Піщано',
    'Ash'=>'Зола',
    'Squall'=>'Шквально',
    'Tornado'=>'Торнадо',
    'Clear'=>'Ясно',
    'Clouds'=>'Хмарно',
    'clear sky'=>'Чисте небо'
];

$tranlatedMonth = [
    'January'=>'Січня',
    'February'=>'Лютого',
    'March'=>'Березня',
    'April'=>'Квітня',
    'May'=>'Травня',
    'June'=>'Червня',
    'July'=>'Липня',
    'August'=>'Серпня',
    'September '=>'Вересня',
    'October '=>'Жовтня',
    'November '=>'Листопада',
    'December '=>'Грудня'
];


$WeatherInfo = [

    'Гроза' => 4,
    'Незначний дощик' => 2,
    'Дощ' => 4,
    'Сніжно' => 10,
    'Димно' => 2,
    'Серпанок' => 3,
    'Туманно' => 2,
    'Піщано' => 1,
    'Зола' => 1,
    'Шквально' => 4,
    'Торнадо' => 5,
    'Ясно' => 0,
    'Хмарно' => 1,
    'Чисте небо' => 0


];

$GeneratorEntries =[

1=>'Сьогодні пронозується ',
2=>'Сьогодні у нас буде ',
3=>'Сьогодні маємо ',
4=>'Сьогодні панує ',
5=>'Сьогодні відчувається ',
6=>'Цього дивовижного дня прогнозується ',
7=>'В цей дивовижний день прогнозується ',
8=>'Цього дня у нас буде ',
9=>'В цей чудовий день нас чекає ',
10=>'В цей чудовий день запланована ',
];



$GeneralScale =[
 0=>'СПЕКА, раджу запастисть водою і зовсім не виходити з холодних приміщень',
    1=>'палюча спека. Рекомендується обрати легкий одяг і віддати перевагу білому кольору, 
    щоб чудово відбивати теплі промені.Також не забудьте надіти кепку або капелюх, щоб захистити голову 
    від прямого сонячного світла,а краще в таку спеку зовсім бути в будинку, якщо є така можливість.',

    2=>'спека. Рекомендується обрати легкий одяг, через який буде гарно проходити тепло. 
    Також не забудьте надіти кепку або капелюх, щоб захистити голову від прямого сонячного світла. ',

    3=>'тепла погода, коли температура буде наближатися до комфортних значень. 
    Однак, для вашої зручності, радимо взяти додаткову кофту з собою, щоб вечерею вам не відчувалося холоду. 
    Вона стане відмінним компаньйоном, гарантуючи вам приємне самопочуття упродовж усього дня',
    
    4=> 'прохолода. Захопивши моменти, коли тепло може зникнути,
     варто пригадати про затишну теплу кофту та штани. Рекомендую вам взяти їх із собою, 
     щоб насолоджуватися комфортом у кожен момент. Такий розумний вибір допоможе забезпечити 
     вам затишок та зберегти тепло впродовж дня.',

     5=>'
     незначне похолодання, рекомендую вам взяти з собою трохи тепліший одяг та не забути про куртку. 
     Це невелике дійство допоможе вам насолоджуватися комфортом і зберегти тепло від прохолодних подихів. 
     Нехай ваша зовнішність відображає вашу гармонію з природою, а зручний одяг підкреслює ваш стиль та комфорт 
     у будь-який час.',
     6=>'похолодання. Рекомендуємо підготуватися до зміни погодних умов і взяти з собою теплий одяг. Додайте до 
     свого гардеробу кофти, светри, теплі штани та куртку, щоб захиститися від холоду. Не забудьте також про головний
     убір, шарфи та рукавиці, щоб зберегти тепло вашого тіла.',

     7=>'холод. Рекомендується додати до свого гардеробу теплі елементи одягу, такі як кофти, светри, теплі штани та куртку, 
     щоб ефективно захистити себе від холоду. Памятайте також про важливі аксесуари, такі як головний убір, шарфи та рукавиці, 
     які допоможуть зберегти тепло вашого тіла. Ці прості заходи, відповідно до прогнозу, забезпечать вам комфорт під час 
     зміни температури та створять затишну атмосферу в холодні дні.',

     8=>'сильний холод. Рекомендується оновити свій гардероб теплими елементами одягу, такими як кофти, светри, теплі штани 
     та куртки. Це допоможе ефективно захистити вас від холоду. Не забудьте про важливі аксесуари, такі як головні убори, 
     шарфи та рукавиці, які збережуть тепло вашого тіла.Ці прості заходи, відповідно до прогнозу, забезпечать вам комфортні 
     умови під час зміни температури і створять затишну атмосферу в холодні дні.',

     9=>'надзвичайний мороз.  Рекомендується оновити гардероб теплими речами, такими як кофти, светри, теплі штани та куртки, 
     щоб ефективно захистити себе від холоду. Не забувайте про важливі аксесуари, такі як головні убори, шарфи та рукавиці, 
     які допоможуть зберегти тепло вашого тіла. Ці прості заходи, відповідно до прогнозу, забезпечать комфортні умови під 
     час зміни температури та створять затишну атмосферу в холодні дні.',

     10=>'морозна стихія.  Рекомендується не виходити з теплих приміщень, якщо не виходить то для ефективного захисту від холоду рекомендується оновити гардероб 
     теплими речами, такими як кофти, светри, теплі штани та куртки. Не забувайте про важливі аксесуари, такі як головні убори, шарфи та рукавиці, які допоможуть 
     зберегти тепло вашого тіла. Ці прості заходи, відповідно до прогнозу, створять комфортні умови під час зміни температури та забезпечать затишну атмосферу в холодні дні.',

    11=>'тепло, але можливо буде дощ. З розрахунку на такі умови, рекомендується вибрати легку одежу, яка забезпечить комфортну температуру під час теплого періоду. 
    Проте, не забудьте приготуватися до можливого дощу, включивши до свого гардеробу парасольку або плащ, щоб захистити себе від вологи. Будьте готові до змін у погодних умовах, 
    забезпечивши собі комфорт та захист від негоди.',
    12=>'дощова погода. Рекомендується підготуватися до дощу, беручи з собою відповідні захисні елементи одягу. Рекомендується мати з собою парасольку або водонепроникний плащ, 
    щоб захистити себе від дощу. Також зверніть увагу на взуття і вибирайте водонепроникні варіанти, щоб уникнути промокання ніг. Не забудьте також про головний убір, 
    який захистить вас від вологи. При готуванні до дощової погоди враховуйте прогноз та забезпечте собі комфорт і захист від негоди.',
    51=>'також можливий дощ, тому рекомендую взяти з собою парасольку, або плащ, щоб захистити себе від промокань'
];




$clothesImage = [
    0=>'/Repository/Clothes/майка.png',
    1=>'/Repository/Clothes/майка.png',
    2=>'/Repository/Clothes/майка.png',
    3=>'/Repository/Clothes/накидка.png',
    4=>'/Repository/Clothes/кофта.png',
    4=>'/Repository/Clothes/кофта.png',
    11=>'/Repository/Clothes/Дощовик.png',
    5=>'/Repository/Clothes/куртка.png',
    6=>'/Repository/Clothes/куртка.png',
    7=>'/Repository/Clothes/куртка.png',
    8=>'/Repository/Clothes/ТеплаКуртка.png',
    9=>'/Repository/Clothes/ТеплаКуртка.png',
    10=>'/Repository/Clothes/ТеплаКуртка.png'
];


$ClothesScale[]=[
    'Майка'=> -2,
    'Накидка'=> -1,
    'Кофта'=> 0,
    'Дощовик'=> 1,
    'Куртка'=> 2,
    'Тепла куртка'=> 3
];
$ReactionDictionary= array(
    1=>'Класна погода, мені полюбилася, можливо піду погуляти',
    2=>'Нормальна погода, мені полюбилася, але гуляти не піду',
    3=>'Не люблю таку погоду',
);
