<?php
/*
 * Plugin Name: doc-ja-sample
 * Plugin URI: http://qiita.com/iwaim@github/items/883e4aeb29085e39581a
 * Description: Doc-ja Advent Calendar 2013 2nd.
 * Version: 1.0
 * Author: IWAI, Masaharu
 * Author URI: https://twitter.com/iwaim
 * License: GPL2
 *
 *   Copyright (C) 2013 IWAI, Masaharu <iwaim.sub@gmail.com>
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License, version 2, as
 *   published by the Free Software Foundation.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with this program; if not, write to the Free Software
 *   Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
function docJaSampleInit()
{
    $plugin_dir = basename(dirname(__FILE__));
    load_plugin_textdomain('doc-ja-sample',false,$plugin_dir.'/languages');
}

add_action('plugins_loaded','docJaSampleInit');

function helloDocJa()
{ 
    $day = '2nd';

    _e("Hello!",'doc-ja-sample') . PHP_EOL;
    printf(__("This is %s entry of Doc-ja Advent Calendar 2013.",'doc-ja-sample'),$day); 
}

/*
 * vim: et ts=4 sw=4 sts=4 fenc=utf-8 ff=unix
 */

