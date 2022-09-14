<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermohonanController extends Controller
{
    public function index(){
        $user = user::all()->where('is_approve','Not Approved');
        return view('admin.permohonan-user.index',[
            'user' => $user
        ]);
    }
    
    public function tolak($id){
        $user = user::find($id);
        $user->delete();
        
        return redirect()->route('permohonan-user');
    }

    public function terima($id){
        $user = User::find($id);

        if($user->is_approve == 'Not Approved'){
            $user->is_approve = 'Approved';
        }else{
            $user->is_approve = 'Not Approved';
        }

        $user->save();
        return redirect()->route('permohonan-user');
    }
}
