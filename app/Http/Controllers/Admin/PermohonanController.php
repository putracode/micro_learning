<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Mail\ApprovedMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\RejectMail;
use Illuminate\Support\Facades\Mail;

class PermohonanController extends Controller
{
    public function index(){
        $user = user::all()->where('is_approve','Not Approved');
        return view('admin.permohonan-user.index',[
            'user' => $user
        ]);
    }
    
    public function tolak($id,Request $request){
        dd($request);
        if($request->pesan == ""){
            $pesan = "Maaf anda tidak dapat register di web kami";
        }else{
            $pesan = $request->pesan;
        }


        $user = User::find($id);
        $user->delete();

        Mail::to($user->email)->send(new RejectMail($user,$pesan));

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
        Mail::to($user->email)->send(new ApprovedMail($user));

        return redirect()->route('permohonan-user');

        // return new ApprovedMail();
    }
}
