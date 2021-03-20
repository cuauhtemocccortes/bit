<?php



Route::view('/', 'home')->name('home')->middleware('auth');

Route::view('/salas', 'about')->name('about')->middleware('auth');

//Ruta del crud de crear portafolios

Route::resource('portafolio','ProjectController')
	->names('projects')
	->parameters(['portafolio'=>'project'])
	->middleware('auth');


// Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
// Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
// Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
// Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');
// Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
// Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');
// Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');


Route::view('/contacto', 'contact')->name('contact')->middleware('auth');




Route::post('contact','MessageController@store')->name('messages.store');


//Route::resource('projects','PortafolioController')->only(['index, show']);

//Route::Resource('projects','PortafolioController');


// Route::view('/', 'home', ['nombre'=> 'Jorge'])->name('home'); // Esta linea corta que solo muestra pocos cosas se puede utilizar para las politicas de privacidad, terminos y condiciones

//Route::get('/', function () {

//	$nombre = "Jorge";

//    return view('home')->with(['nombre'=> $nombre]);
//})->name('home');


Auth::routes(['register'=>false]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

