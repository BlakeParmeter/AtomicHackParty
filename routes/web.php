<?php

	use App\Task;
	use Illuminate\Http\Request;
	
	/**
	 * Home Page
	 */
	Route::get('/', function () {
		return view('home');
	});

	/**
	 * Display All Tasks
	 */
	Route::get('/tasks', function () {
		$tasks = Task::orderBy('created_at', 'asc')->get();
		return view('tasks', [
			'tasks' => $tasks
		]);
	});

	/**
	 * Add A New Task
	 */
	Route::post('/task', function (Request $request) {
		$validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
		]);

		if ($validator->fails()) {
			return redirect('/tasks')
				->withInput()
				->withErrors($validator);
		}

		$task = new Task;
		$task->name = $request->name;
		$task->save();

		return redirect('/tasks');
	});

	/**
	 * Delete An Existing Task
	 */
	Route::delete('/task/{id}', function ($id) {
		Task::findOrFail($id)->delete();

		return redirect('/tasks');
	});
?>