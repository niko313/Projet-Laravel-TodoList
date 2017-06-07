<?php
Log::info('Route');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('todo.acceuil');
});
Route::get('admin', function()
{
	return View::make('todo');
});

/*Todo-LIST*/
Route::get('acceuil', function()
{

	return View::make('todo.acceuil');

});

Route::get('list_view', function()
{
	return View::make('todo.list_view');
});
Route::get('list_add', function()
{
	return View::make('todo.list_add');
});
Route::post('list_add', function()
{
	$inputs = Input::except('_token');
  $tasks = new Tasks;
  foreach ($inputs as $key=>$value){
      $tasks->$key = $value;
  }
  $tasks->save();
  return Redirect::to('/list_view');
});
Route::post('list_delete/{id}', function($id)
{
		$message = Tasks::find($id);
    $message->delete();
    return Redirect::to('/list_view');
});
Route::get('list_modify/{id}', function($id)
{
	return View::make('todo.list_modify')->with('id', $id);
});
Route::post('list_modify/{id}', function($id)
{
		$inputs = Input::except('_token');
    $tasks = Tasks::find($id);
    foreach ($inputs as $key=>$value){
        $tasks->$key = $value;
    }
    $tasks->fait = false;
    $tasks->save();

    return Redirect::to('/list_view');
});
Route::post('done/{id}', function($id)
{
    $message = Tasks::find($id);
    $message->fait = true;
    $message->save();
    return Redirect::to('/list_view');

});

Route::post('notdone/{id}', function($id)
{
    $message = Tasks::find($id);
    $message->fait = false;
    $message->save();
    return Redirect::to('/list_view');

});
Route::get('register', function()
{
    return View::make('register');
});

Route::post('register', function()
{
    $inputs = Input::except('_token');
//    $message = TextareaFormField::getValue();
    $user = new User;
    foreach ($inputs as $key=>$value){
        if ($key == 'motdepasse'){
            $user->$key = Hash::make($value);
        }
        else{
            $user->$key = $value;
        }
    }
    $user->save();
    return Redirect::to('/acceuil');
});
Route::get('connect', function()
{
    return View::make('connect');
});

Route::post('connect', function()
{
    $pseudo = Input::get('pseudo');
    $motdepasse = Input::get('motdepasse');
    if(Auth::attempt(array('pseudo' => $pseudo, 'motdepasse' => $motdepasse)))
        echo 'Vous êtes maintenant connecté '.Auth::User()->pseudo;
    else
        echo 'Echec de la connexion';

//    return Redirect::to('/');
});

App::missing(function ($exception){
    return Response::view('/404', array(), 404);
});
