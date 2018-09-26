<?php

Route::get('package', function(){
	echo 'Hello  package!';
});

Route::get('timezones','Laraveldaily\Timezones\TimezonesController@index');

Route::resource('hocsinh','Laraveldaily\Timezones\hocsinhcontroller');
