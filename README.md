phpNT - Yii2 Pace
================================
[![Latest Stable Version](https://poser.pugx.org/phpnt/yii2-pace/v/stable)](https://packagist.org/packages/phpnt/yii2-pace) [![Total Downloads](https://poser.pugx.org/phpnt/yii2-pace/downloads)](https://packagist.org/packages/phpnt/yii2-pace) [![Latest Unstable Version](https://poser.pugx.org/phpnt/yii2-pace/v/unstable)](https://packagist.org/packages/phpnt/yii2-pace) [![License](https://poser.pugx.org/phpnt/yii2-pace/license)](https://packagist.org/packages/phpnt/yii2-pace)
### Описание:
### Автоматический индикатор загрузки страницы.
### [DEMO](http://phpnt.com/widget/pace)

------------
### - [Поддержать phpNT](http://phpnt.com/donate/index)
------------

### Социальные сети:
 - [Канал YouTube](https://www.youtube.com/c/phpnt)
 - [Группа VK](https://vk.com/phpnt)
 - [Группа facebook](https://www.facebook.com/Phpnt-595851240515413/)

------------

Установка:

------------

```
php composer.phar require "phpnt/yii2-pace" "*"
```
или

```
composer require phpnt/yii2-pace
```

или добавить в composer.json файл

```
"phpnt/yii2-pace": "*"
```

### Представление:
------------
```php
<?php
use phpnt\pace\PaceAsset;
PaceAsset::register($this);
?>
```
```html
<div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
</div>
------------
# Документация (примеры):
## [Pace](http://github.hubspot.com/pace/docs/welcome/)
------------
### Лицензия:
### [MIT](https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_MIT)
------------
