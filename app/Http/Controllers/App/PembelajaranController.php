<?php

namespace App\Http\Controllers\App;

use App\Models\Pembelajaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PembelajaranController extends Controller
{
    public function indexAKLIK(){
        return view('app.pembelajaran.index',[
            'posts' => Pembelajaran::all()->where('materi','Bidang Aktivasi Publik'),
            'judul' => 'Bidang Aktivasi Publik',
            'link_materi' => 'materi-aklik',
            'link_quiz' => 'quiz-aklik',
        ]);
    }

    public function materiAKLIK(Pembelajaran $post){
        return view('app.pembelajaran.materi',[
            'post' => $post,
            'link' => 'bidang-aktivasi-publik'
        ]);
    }

    public function quizAKLIK(Pembelajaran $post){
        return view('app.pembelajaran.quiz',[
            'post' => $post,
            'link' => 'bidang-aktivasi-publik'
        ]);
    }




    public function indexAKLIS(){
        return view('app.pembelajaran.index',[
            'posts' => Pembelajaran::all()->where('materi','Bidang Aktivasi Listrik'),
            'judul' => 'Bidang Aktivasi Listrik',
            'link_materi' => 'materi-aklis',
            'link_quiz' => 'quiz-aklis'
        ]);
    }

    public function materiAKLIS(Pembelajaran $post){
        return view('app.pembelajaran.materi',[
            'post' => $post,
            'link' => 'bidang-aktivasi-listrik'
        ]);
    }

    public function quizAKLIS(Pembelajaran $post){
        return view('app.pembelajaran.quiz',[
            'post' => $post,
            'link' => 'bidang-aktivasi-listrik'
        ]);
    }
    





    public function indexNA3P(){
        return view('app.pembelajaran.index',[
            'posts' => Pembelajaran::all()->where('materi','Bidang NA3P'),
            'judul' => 'Bidang NA3P',
            'link_materi' => 'materi-na3p',
            'link_quiz' => 'quiz-na3p'
        ]);
    }

    public function materiNA3P(Pembelajaran $post){
        return view('app.pembelajaran.materi',[
            'post' => $post,
            'link' => 'bidang-NA3P'
        ]);
    }

    public function quizNA3P(Pembelajaran $post){
        return view('app.pembelajaran.quiz',[
            'post' => $post,
            'link' => 'bidang-NA3P'
        ]);
    }




    public function indexPEMELIHARAAN(){
        return view('app.pembelajaran.index',[
            'posts' => Pembelajaran::all()->where('materi','Bidang Pemeliharaan'),
            'judul' => 'Bidang Pemeliharaan',
            'link_materi' => 'materi-pemeliharaan',
            'link_quiz' => 'quiz-pemeliharaan',
        ]);
    }

    public function materiPEMELIHARAAN(Pembelajaran $post){
        return view('app.pembelajaran.materi',[
            'post' => $post,
            'link' => 'bidang-pemeliharaan'
        ]);
    }

    public function quizPEMELIHARAAN(Pembelajaran $post){
        return view('app.pembelajaran.quiz',[
            'post' => $post,
            'link' => 'bidang-pemeliharaan'
        ]);
    }




    public function indexRETAIL(){
        return view('app.pembelajaran.index',[
            'posts' => Pembelajaran::all()->where('materi','Bidang Retail'),
            'judul' => 'Bidang Retail',
            'link_materi' => 'materi-retail',
            'link_quiz' => 'quiz-retail',
        ]);
    }

    public function materiRETAIL(Pembelajaran $post){
        return view('app.pembelajaran.materi',[
            'post' => $post,
            'link' => 'bidang-retail'
        ]);
    }

    public function quizRETAIL(Pembelajaran $post){
        return view('app.pembelajaran.quiz',[
            'post' => $post,
            'link' => 'bidang-retail'
        ]);
    }




    public function indexSPAP(){
        return view('app.pembelajaran.index',[
            'posts' => Pembelajaran::all()->where('materi','Bidang SPAP'),
            'judul' => 'Bidang SPAP',
            'link_materi' => 'materi-spap',
            'link_quiz' => 'quiz-spap',
        ]);
    }

    public function materiSPAP(Pembelajaran $post){
        return view('app.pembelajaran.materi',[
            'post' => $post,
            'link' => 'bidang-SPAP'
        ]);
    }

    public function quizSPAP(Pembelajaran $post){
        return view('app.pembelajaran.quiz',[
            'post' => $post,
            'link' => 'bidang-SPAP'
        ]);
    }




    public function indexSARJU(){
        return view('app.pembelajaran.index',[
            'posts' => Pembelajaran::all()->where('materi','Bidang Sarju'),
            'judul' => 'Bidang Sarju',
            'link_materi' => 'materi-sarju',
            'link_quiz' => 'quiz-sarju',
        ]);
    }

    public function materiSARJU(Pembelajaran $post){
        return view('app.pembelajaran.materi',[
            'post' => $post,
            'link' => 'bidang-sarju'
        ]);
    }

    public function quizSARJU(Pembelajaran $post){
        return view('app.pembelajaran.quiz',[
            'post' => $post,
            'link' => 'bidang-sarju'
        ]);
    }




    public function indexFOC(){
        return view('app.pembelajaran.index',[
            'posts' => Pembelajaran::all()->where('materi','FOC'),
            'judul' => 'FOC',
            'link_materi' => 'materi-foc',
            'link_quiz' => 'quiz-foc',
        ]);
    }

    public function materiFOC(Pembelajaran $post){
        return view('app.pembelajaran.materi',[
            'post' => $post,
            'link' => 'foc'
        ]);
    }

    public function quizFOC(Pembelajaran $post){
        return view('app.pembelajaran.quiz',[
            'post' => $post,
            'link' => 'foc'
        ]);
    }




    public function indexFOT(){
        return view('app.pembelajaran.index',[
            'posts' => Pembelajaran::all()->where('materi','FOT'),
            'judul' => 'FOT',
            'link_materi' => 'materi-fot',
            'link_quiz' => 'quiz-fot',
        ]);
    }

    public function materiFOT(Pembelajaran $post){
        return view('app.pembelajaran.materi',[
            'post' => $post,
            'link' => 'fot'
        ]);
    }

    public function quizFOT(Pembelajaran $post){
        return view('app.pembelajaran.quiz',[
            'post' => $post,
            'link' => 'fot'
        ]);
    }
}
