php-simple-html-dom-parser
==========================

Version 1.7.1 - PHP 7.3 compatible
PHP Simple HTML DOM Parser changelog: https://sourceforge.net/projects/simplehtmldom/files/simplehtmldom/1.7/


Install
-------

```
composer require N3X15/php-simple-html-dom-parser
```

Usage
-----

```php
use SimpleHTMLDOM\HTMLDOMHelper;

...
$dom = HTMLDOMHelper::GetFromString( $str );
or
$dom = HTMLDOMHelper::GetFromFile( $file_name );

$elems = $dom->find($elem_name);
...

```
