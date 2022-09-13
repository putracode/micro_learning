<?php

namespace App\Http\Controllers\App;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PembelajaranController extends Controller
{
    public function indexAKLIK(){
        return view('app.pembelajaran.index',[
            'posts' => Post::all()->where('bidang','Bidang Aktivasi Publik ( Aklik )'),
            'judul' => 'Bidang Aktivasi Publik ( Aklik )',
            'link_materi' => 'materi-aklik',
            'link_quiz' => 'quiz-aklik',
        ]);
    }

    public function materiAKLIK(Post $post){
        return view('app.pembelajaran.materi',[
            'post' => $post,
            'link' => 'bidang-aktivasi-publik'
        ]);
    }

    public function quizAKLIK(Post $post){
        return view('app.pembelajaran.quiz',[
            'post' => $post,
            'link' => 'bidang-aktivasi-publik'
        ]);
    }




    public function indexAKLIS(){
        return view('app.pembelajaran.index',[
            'posts' => Post::all()->where('bidang','Bidang Aktivasi Listrik ( Aklis )'),
            'judul' => 'Bidang Aktivasi Listrik ( Aklis )',
            'link_materi' => 'materi-aklis',
            'link_quiz' => 'quiz-aklis'
        ]);
    }

    public function materiAKLIS(Post $post){
        return view('app.pembelajaran.materi',[
            'post' => $post,
            'link' => 'bidang-aktivasi-listrik'
        ]);
    }

    public function quizAKLIS(Post $post){
        return view('app.pembelajaran.quiz',[
            'post' => $post,
            'link' => 'bidang-aktivasi-listrik'
        ]);
    }
    





    public function indexNA3P(){
        return view('app.pembelajaran.index',[
            'posts' => Post::all()->where('bidang','Bidang NA3P'),
            'judul' => 'Bidang NA3P',
            'link_materi' => 'materi-na3p',
            'link_quiz' => 'quiz-na3p'
        ]);
    }

    public function materiNA3P(Post $post){
        return view('app.pembelajaran.materi',[
            'post' => $post,
            'link' => 'bidang-NA3P'
        ]);
    }

    public function quizNA3P(Post $post){
        return view('app.pembelajaran.quiz',[
            'post' => $post,
            'link' => 'bidang-NA3P'
        ]);
    }




    public function indexPEMELIHARAAN(){
        return view('app.pembelajaran.index',[
            'posts' => Post::all()->where('bidang','Bidang Pemeliharaan'),
            'judul' => 'Bidang Pemeliharaan',
            'link_materi' => 'materi-pemeliharaan',
            'link_quiz' => 'quiz-pemeliharaan',
        ]);
    }

    public function materiPEMELIHARAAN(Post $post){
        return view('app.pembelajaran.materi',[
            'post' => $post,
            'link' => 'bidang-pemeliharaan'
        ]);
    }

    public function quizPEMELIHARAAN(Post $post){
        return view('app.pembelajaran.quiz',[
            'post' => $post,
            'link' => 'bidang-pemeliharaan'
        ]);
    }




    public function indexRETAIL(){
        return view('app.pembelajaran.index',[
            'posts' => Post::all()->where('bidang','Bidang Retail'),
            'judul' => 'Bidang Retail',
            'link_materi' => 'materi-retail',
            'link_quiz' => 'quiz-retail',
        ]);
    }

    public function materiRETAIL(Post $post){
        return view('app.pembelajaran.materi',[
            'post' => $post,
            'link' => 'bidang-retail'
        ]);
    }

    public function quizRETAIL(Post $post){
        return view('app.pembelajaran.quiz',[
            'post' => $post,
            'link' => 'bidang-retail'
        ]);
    }




    public function indexSPAP(){
        return view('app.pembelajaran.index',[
            'posts' => Post::all()->where('bidang','Bidang SPAP'),
            'judul' => 'Bidang SPAP',
            'link_materi' => 'materi-spap',
            'link_quiz' => 'quiz-spap',
        ]);
    }

    public function materiSPAP(Post $post){
        return view('app.pembelajaran.materi',[
            'post' => $post,
            'link' => 'bidang-SPAP'
        ]);
    }

    public function quizSPAP(Post $post){
        return view('app.pembelajaran.quiz',[
            'post' => $post,
            'link' => 'bidang-SPAP'
        ]);
    }




    public function indexSARJU(){
        return view('app.pembelajaran.index',[
            'posts' => Post::all()->where('bidang','Bidang Sarju'),
            'judul' => 'Bidang Sarju',
            'link_materi' => 'materi-sarju',
            'link_quiz' => 'quiz-sarju',
        ]);
    }

    public function materiSARJU(Post $post){
        return view('app.pembelajaran.materi',[
            'post' => $post,
            'link' => 'bidang-sarju'
        ]);
    }

    public function quizSARJU(Post $post){
        return view('app.pembelajaran.quiz',[
            'post' => $post,
            'link' => 'bidang-sarju'
        ]);
    }
}
