<?php
namespace SimpleHTMLDOM;

require dirname(__DIR__).'/lib/simple_html_dom.php';

class HTMLDOMHelper {
    static public function GetFromFile() {
        return call_user_func_array('\SimpleHTMLDOM\file_get_html', func_get_args());
    }

    static public function GetFromString() {
        return call_user_func_array('\SimpleHTMLDOM\str_get_html', func_get_args());
    }
}
