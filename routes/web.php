<?php

	use App\Customer;
	use Illuminate\Http\Request;
	
	/**
	 * Home Page
	 */
	Route::get('/', function () {
		return view('home');
	});
	
	/**
	 * Customer Signup Page
	 */
	Route::get('/customerSignup', function () {
		return view('customerSignup');
	});
	
	/** 
	 * Customer Login Page
	 */
	Route::get('/customerLogin', function () {
		return view('customerLogin');
	});
	
	/**
	 *
	 */
	Route::post('customerPortal', function () {
		
		//TODO: Select a user from the post parameters
		
		//If not found ask to sign up, if found and the password is incorrect, 
		//ask to reach out to customer service. 
	});
	
	/**
	 * Add a new customer
	 */
	Route::post('/addCustomer', function(Request $request) {
		$validator = Validator::make($request->all(), [
			'fname' => 'required|max:255',
			'lname' => 'required|max:255',
			'email' => 'required|email|max:255',
			'phone' => 'required|max:255',
			'password' => 'required|max:255'
		]);
		
		if ($validator->fails()) {
			return redirect('/customerSignup')
				->withInput()
				->withErrors($validator);
		}

		$customer = new Customer;
		$customer->fname = $request->fname;
		$customer->lname = $request->lname;
		$customer->email = $request->email;
		$customer->phone = preg_replace('/[^0-9]/', '', $request->phone);//only store the numbers
		$customer->password = md5($request->password);
		$customer->save();
		return redirect('/');
	});
	
	//START OF EXAMPLE / TEST CODE
	use App\Task;
	 
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
	
	//END OF THE EXAMPLE / TEST CODE
?>