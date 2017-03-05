<?php

	use App\Customer;
	use Illuminate\Http\Request;
	
	//TODO: Determine how to move the code in the routes somewhere else.
	
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
	 * Customer Login Page
	 */
	Route::get('/companyLandingPage', function () {
		return view('companyLandingPage');
	});
	
	/** 
	 * Customer Login Page
	 */
	Route::get('/companyPortal', function () {
		return view('companyPortal');
	});
	
	/**
	 * The customer portal
	 */
	Route::post('customerPortal', function (Request $request) {
		
		//Select a user from the post parameters may be the email or the phone number
		$user = Customer::where('email', '=', $request->user)->orWhere('phone', '=', $request->user)->get();
		
		//if there are no results or more than one return handle the issue
		if($user->isEmpty() == true){
			return redirect('/customerLogin')
				->withErrors("Cannot find an account with that information.");
			
		}elseif($user->count() != 1){
			return redirect('/')
				->withErrors("There is an issue with your account, please call support. ERROR: Naming Collision.");
		
		//There was only one result for the user returned
		}else{
			$user = $user->first();
			
			//invalid password
			if($user->password != md5($request->password)){
				return redirect('/customerLogin')
					->withErrors("Your password is invalid please try again, if you are having issues please contact support.");
			
			//load the user's information into the webpage
			}else{
				return view('customerPortal', ['user'=>$user]);
			}
		}
	});
	
	/**
	 * Add a new customer
	 */
	Route::post('/addCustomer', function(Request $request) {
		$validator = Validator::make($request->all(), [
			'fname' => 'required|max:255',
			'lname' => 'required|max:255',
			'email' => 'required|email|max:255',
			'phone' => 'required|max:255', //TODO: validate and make sure it's got exactly 9 numbers. 
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
?>