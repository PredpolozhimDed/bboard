<?php

/*
|--------------------------------------------------------------------------
| Authentication Language Lines
|--------------------------------------------------------------------------
|
| The following language lines are used during authentication for various
| messages that we need to display to the user. You are free to modify
| these language lines according to your application's requirements.
|
*/
//NOTES если языковой пакет уже установлен, то лучше все перевести на него , астальное из базы тянется, в шаблонах чистого текста быть не  должно
//NOTES Про JSON файлы в переводах,  я бы послушал, мы ими не пользовались, я даже не знаю как работают. Но вот зачем их два одинаковых это вопрос
return [
    'failed'   => 'Неверное имя пользователя или пароль.',
    'password' => 'Неверный пароль.',
    'throttle' => 'Слишком много попыток входа. Пожалуйста, попробуйте еще раз через :seconds секунд.',
];
