yii2-showloading
================
Yii2 расширение для подключения плагина jQuery showLoading  
Расширение предназначено для наложения картинки Ajax загрузки на блок, при обработке Ajax запроса.

##Демонстрация работы
[Demo страничка плагина](http://codepen.io/jasondavis/pen/fAzcI)

## Установка
Добавить в секцию "require" файла composer.json:
``` json
{
    "require": {
        "timurmelnikov/yii2-showloading": "dev-master"
    }
}
```
После редактирования файла выполнить команду `composer update`

##Использование
В представлении, где будет использоваться yii2-showloading, подключить:
``` php
use timurmelnikov\widgets\ShowLoading;
```
Вывести виджет:
``` php
echo ShowLoading::widget(['loadingType' => 1]);
```
Свойство 'loadingType' отвечает за картину Ajax загрузки. Есть возможность использовать значения от 1 до 5. В зависимости от значения будет выводиться различная картинка Ajax загрузки.

В коде javaSctipt, который обрабатывает Ajax запрос использовать методы -  `showLoading()` и `hideLoading()` для показа и скрытия картинки Ajax загрузки соответственно:
``` js
$('#id-блока').showLoading();
//Обработка Ajax запроса...
$('#id-блока').hideLoading();
```

Прммер:
``` php
//Контейнер, ктоторый будет "накрывть" индикатор загрузки
<div id="test"></div>

<?php
//Кнопки 
echo Html::button('Показать индикатор', ['class' => 'btn btn-primary', 'id' => 'show-button']);
echo Html::button('Скрыть индикатор', ['class' => 'btn btn-primary', 'id' => 'hide-button']);

//Вызов виджета индикатора
echo ShowLoading::widget(['loadingType' => 1]);

//Код JavaScript
$script = <<<JS
//Показать индикатор        
$('#show-button').click(function () {
    $('#test').showLoading();
});
//Скрыть индикатор       
   $('#hide-button').click(function () {
    $('#test').hideLoading();
});
JS;

//Подключение JavaScript
$this->registerJs($script);
```


