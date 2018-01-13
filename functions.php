<?php
/**
 * Copyright 2018 網路假期 - 答案共享資料庫
 *
 * 判斷網址添加超連結
 * https://github.com/NHDAS/url-add-hyperlinks
 */
 function judgmentLinkAdd($str) {
     $str = preg_replace('#(http|https|ftp|telnet)://([0-9a-z\.\-]+)(:?[0-9]*)([0-9a-z\_\/\?\&\=\%\.\;\#\-\~\+]*)#i', '<a href="\1://\2\3\4" target="_blank">\1://\2\3\4</a>', $str);
     return $str;
 }
?>
