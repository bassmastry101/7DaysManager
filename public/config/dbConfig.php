<?php
//
//                  Y.                      _
//                  YiL                   .```.
//                  Yii;                .; .;;`.
//                  YY;ii._           .;`.;;;; :
//                  iiYYYYYYiiiii;;;;i` ;;::;;;;
//              _.;YYYYYYiiiiiiYYYii  .;;.   ;;;
//           .YYYYYYYYYYiiYYYYYYYYYYYYii;`  ;;;;
//         .YYYYYYY$$YYiiYY$$$$iiiYYYYYY;.ii;`..
//        :YYY$!.  TYiiYY$$$$$YYYYYYYiiYYYYiYYii.
//        Y$MM$:   :YYYYYY$!"``"4YYYYYiiiYYYYiiYY.
//     `. :MM$$b.,dYY$$Yii" :'   :YYYYllYiiYYYiYY
//  _.._ :`4MM$!YYYYYYYYYii,.__.diii$$YYYYYYYYYYY
//  .,._ $b`P`     "4$$$$$iiiiiiii$$$$YY$$$$$$YiY;
//     `,.`$:       :$$$$$$$$$YYYYY$$$$$$$$$YYiiYYL
//      "`;$$.    .;PPb$`.,.``T$$YY$$$$YYYYYYiiiYYU:
//      ;$P$;;: ;;;;i$y$"!Y$$$b;$$$Y$YY$$YYYiiiYYiYY
//      $Fi$$ .. ``:iii.`-":YYYYY$$YY$$$$$YYYiiYiYYY
//      :Y$$rb ````  `_..;;i;YYY$YY$$$$$$$YYYYYYYiYY:
//       :$$$$$i;;iiiiidYYYYYYYYYY$$$$$$YYYYYYYiiYYYY.
//        `$$$$$$$YYYYYYYYYYYYY$$$$$$YYYYYYYYiiiYYYYYY
//        .i!$$$$$$YYYYYYYYY$$$$$$YYY$$YYiiiiiiYYYYYYY
//       :YYiii$$$$$$$YYYYYYY$$$$YY$$$$YYiiiiiYYYYYYi'
//
//          XOXO
//              Jesse B.
//

if (!defined('DB_HOST')) define('DB_HOST', 'HOST');
if (!defined('DB_USER')) define('DB_USER', 'USER');
if (!defined('DB_NAME')) define('DB_NAME', '7daysManager');
if (!defined('DB_PASSWORD')) define('DB_PASSWORD', 'PASS');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' .mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}
?>