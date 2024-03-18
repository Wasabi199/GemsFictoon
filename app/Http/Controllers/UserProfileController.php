<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserProfileController extends Controller
{
    
    public function editProfile()
    {
        return view('editprofile');
    }

    public function submitEditProfile(EditProfileRequest $editProfileRequest){
        $validated_data = $editProfileRequest->validated();

        $user = User::findOrFail(Auth::user()->id);
        $user->update([
            'username'=>$validated_data['username'],
            'biography'=>$validated_data['biography']
        ]);

        return Redirect::route('account.account')->with('message', 'Profile Updated Successfully');
    }
}
