<?php

// including text in tag "html" with function

$text= 
"Реве та стогне Дніпр широкий,\n
Сердитий вітер завива.\n
Додолу верби гне високі,\n
Горами хвилю підійма.\n
І блідий місяць на ту пору\n
Із хмари де-де виглядав.\n
Неначе човен в синім морі,\n
То виринав, то потопав.\n
Ще треті півні не співали,\n
Ніхто ніде не гомонів,\n
Сичі в гаю перекликались,\n
Та ясен раз у раз скрипів.";

function htmlWrap(string $value, string $tag) {
    return "<".$tag.">".$value."</".$tag.">";
}
echo "<pre>";
echo htmlWrap($text,"html");
echo "</pre>";