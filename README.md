# Скрипт внутренней перелинковки X-Reference

Для корректного распределения внутреннего веса сайта и увеличения релевантности страниц поисковым запросам, разработан скрипт внутренней перелинковки.

## Пример вызова компонента:

```php

<? $APPLICATION->IncludeComponent("seo:x-reference", "",
                    [
                        'project_id' => #ID#,
                        'key' => '#KEY#',
                        'url' => 'https://seo.netpeak.cloud/kap/auto'
                    ],
                    false
                ); 
 ?>
```

### Параметры компонента:

* project_id: id проекта в системе 
* key: ключ проекта
* url: URL для получения ссылок

### Пример вывода

![img](http://dl3.joxi.net/drive/2017/11/03/0001/3017/101321/21/49f029d4da.jpg)