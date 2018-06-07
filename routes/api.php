<?php

Route::get('/', function (\Illuminate\Http\Request $request) {
    $ARRAY = ['Ok', 'Noted', 'Sounds good'];
$size = count($ARRAY);
$rand = rand(0, $size);
$randomElem = $ARRAY[$rand];
return $randomElem;
});