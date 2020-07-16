<?php

namespace App\Http\Controllers\v1\Seller;

use App\Http\Resources\User\SellerResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:seller-api');
    }

    public function profile()
    {
        $user = Auth::guard('seller-api')->user();

        return response()->json([
            'message' => 'successfully get profile',
            'status' => true,
            'data' => new SellerResource($user)
        ]);
    }

    public function updateprofile(Request $request)
    {
        $user = Auth::guard('seller-api')->user();
        $user->name = $request->name;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->update();
        return response()->json([
            'message' => 'successfully update profile',
            'status' => true,
            'data' => $user
        ]);
    }
}
