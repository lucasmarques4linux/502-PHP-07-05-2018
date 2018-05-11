<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\User;

class UsersController extends Controller
{
    public function index()
    {
    	$users = User::all();
    	if (!$users) {
    		return response()->json(null,204);
    	}
    	return response()->json($users,200);
    }

    public function show($user)
    {
    	$user = User::find($user);
    	if (!$user) {
    		return response()->json(null,204);
    	}
    	return response()->json([$user],200);
    }

    public function store(Request $request)
    {
    	$data = $request->json()->all();

    	$validator = Validator::make($data,[
    			'name' => 'required|string|max:255',
            	'email' => 'required|string|email|max:255|unique:users',
            	'password' => 'required|min:6',
    		]);

    	if ($validator->fails()) {
    		return response()->json([$validator->errors()],400);
    	}

    	$user = new User();
    	$user->fill($data);
    	$user->save();
    	return response()->json([$user],201);
    }

    public function update(Request $request,$user)
    {
    	$user = User::find($user);
    	if (!$user) {
    		return response()->json(null,204);
    	}
    	$data = $request->json()->all();

    	$validator = Validator::make($data,[
    			'name' => 'required|string|max:255',
            	'email' => 'required|string|email|max:255',
            	'password' => 'required|min:6',
    		]);

    	if ($validator->fails()) {
    		return response()->json([$validator->errors()],400);
    	}

    	$user->fill($data);
    	$user->save();

    	// $user->update($data);

    	return response()->json([$user],200);
    }

    public function destroy($user)
    {
    	$user = User::find($user);
    	if (!$user) {
    		return response()->json(null,204);
    	}

    	$user->delete();

    	return response()->json(null,200);
    }
}
