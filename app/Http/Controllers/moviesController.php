<?php

namespace App\Http\Controllers;

use Auth;
use Request;
use App\Http\Requests\createRequest;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use App\movie;
use App\User;
//use App\Http\Requests;
//use App\Http\Requests\createRequest;
use App\Http\Controllers\Controller;

class moviesController extends Controller
{
    public function index(){

       return view('welcome');

    }

    public function about(){

        return view('about');
    }

    public function contact(){

        return view('contact');
    }


    public function movies(){


//RABOTII
//        $json=file_get_contents("http://www.omdbapi.com/?t=titanic&y=1997");
//        $info=json_decode($json);
////        print_r($info->Title);
//        print_r($info);











//        $json=file_get_contents("http://data.linkedmdb.org/all");
//        $info=json_decode($json);
//        print_r($info);



        if (Auth::id() == '3'){

            $user = 0;
            if(Auth::check()){ $user = '1'; }
            else {$user = '2'; }

            //            normalno vraka site
           // $all = movie::all();

//            vraka so pagination X elementi i gi prikazuva vo strani
//            za da se ovozmozi treba vo php echo $users->links();  view kade sto treba da ima brojcinja -->

         $all = movie::paginate(9);

            $action = movie::where('studio', 'LIKE', '%' . 'action' . '%')->get();
            $comedy = movie::where('studio', 'LIKE', '%' . 'comedy' . '%')->get();
            $scifi = movie::where('studio', 'LIKE', '%' . 'sci-fi' . '%')->get();
            $horror = movie::where('studio', 'LIKE', '%' . 'horror' . '%')->get();
            $mystery = movie::where('studio', 'LIKE', '%' . 'mistery' . '%')->get();
            $adventure = movie::where('studio', 'LIKE', '%' . 'adventure' . '%')->get();
            $thriller = movie::where('studio', 'LIKE', '%' . 'thriller' . '%')->get();
            $documentary = movie::where('studio', 'LIKE', '%' . 'documentary' . '%')->get();
            $drama = movie::where('studio', 'LIKE', '%' . 'drama' . '%')->get();
            $animation = movie::where('studio', 'LIKE', '%' . 'animation' . '%')->get();

            $latest = movie::orderBy('id', 'desc')->take(4)->get();



            return view('admin')
                ->with('all', $all)
                ->with('action', $action)
                ->with('comedy', $comedy)
                ->with('scifi', $scifi)
                ->with('mystery', $mystery)
                ->with('adventure', $adventure)
                ->with('thriller', $thriller)
                ->with('documentary', $documentary)
                ->with('horror', $horror)
                ->with('drama', $drama)
                ->with('animation', $animation)
                ->with('latest', $latest)
                ->with('user', $user);
        }

        else{

            $user = 0;
            if(Auth::check()){ $user = '1'; }
            else {$user = '2'; }

//            normalno vraka site
            //$all = movie::all();

//            vraka so pagination X elementi i gi prikazuva vo strani
//            za da se ovozmozi treba vo php echo $users->links();  view kade sto treba da ima brojcinja -->

//           $all = movie::pagination(3);

            $all = movie::paginate(9);
            $action = movie::where('studio', 'LIKE', '%' . 'action' . '%')->paginate(3);
            $comedy = movie::where('studio', 'LIKE', '%' . 'comedy' . '%')->get();
            $scifi = movie::where('studio', 'LIKE', '%' . 'sci-fi' . '%')->get();
            $horror = movie::where('studio', 'LIKE', '%' . 'horror' . '%')->get();
            $mystery = movie::where('studio', 'LIKE', '%' . 'mistery' . '%')->get();
            $adventure = movie::where('studio', 'LIKE', '%' . 'adventure' . '%')->get();
            $thriller = movie::where('studio', 'LIKE', '%' . 'thriller' . '%')->get();
            $documentary = movie::where('studio', 'LIKE', '%' . 'documentary' . '%')->get();
            $drama = movie::where('studio', 'LIKE', '%' . 'drama' . '%')->get();
            $animation = movie::where('studio', 'LIKE', '%' . 'animation' . '%')->get();

            $latest = movie::orderBy('id', 'desc')->take(4)->get();


            return view('main')
                ->with('all', $all)
                ->with('action', $action)
                ->with('comedy', $comedy)
                ->with('scifi', $scifi)
                ->with('mystery', $mystery)
                ->with('adventure', $adventure)
                ->with('thriller', $thriller)
                ->with('documentary', $documentary)
                ->with('horror', $horror)
                ->with('drama', $drama)
                ->with('animation', $animation)
                ->with('latest', $latest)
                ->with('user', $user);
        }



        }

    public function show($id){

        $movie = movie::findOrFail($id);

        $src = $movie->studio;
        $related = movie::where('studio', 'LIKE', '%' . $src . '%')->take(3)->get();


        $url = preg_replace("/ /", "%20", $movie->name);





        $link=file_get_contents("http://data.linkedmdb.org/sparql?query=SELECT%20DISTINCT%20%3Fdirector%20%3Frelease%20%3Fgenre%20%3Ftime%0AWHERE%20%7B%0A%3Fmovie%20%3Chttp%3A%2F%2Fpurl.org%2Fdc%2Fterms%2Ftitle%3E%20%22$url%22.%0A%3Fmovie%20%20%3Chttp%3A%2F%2Fdata.linkedmdb.org%2Fresource%2Fmovie%2Fdirector%3E%20%3Fd.%0A%3Fd%20%3Chttp%3A%2F%2Fdata.linkedmdb.org%2Fresource%2Fmovie%2Fdirector_name%3E%20%3Fdirector.%0A%3Fmovie%20%3Chttp%3A%2F%2Fdata.linkedmdb.org%2Fresource%2Fmovie%2Finitial_release_date%3E%20%3Frelease.%0A%3Fmovie%20%3Chttp%3A%2F%2Fdata.linkedmdb.org%2Fresource%2Fmovie%2Fruntime%3E%20%3Ftime.%0A%3Fmovie%20%3Chttp%3A%2F%2Fdata.linkedmdb.org%2Fresource%2Fmovie%2Fgenre%3E%20%3Fg.%0A%3Fg%20%3Chttp%3A%2F%2Fdata.linkedmdb.org%2Fresource%2Fmovie%2Ffilm_genre_name%3E%20%3Fgenre.%0A%7D&output=json");


        $link2=file_get_contents("http://data.linkedmdb.org/sparql?query=SELECT%20DISTINCT%20%3Factor%0AWHERE%20%7B%0A%3Fmovie%20%3Chttp%3A%2F%2Fpurl.org%2Fdc%2Fterms%2Ftitle%3E%20%22$url%22.%0A%3Fmovie%20%3Chttp%3A%2F%2Fdata.linkedmdb.org%2Fresource%2Fmovie%2Factor%3E%20%3Fa.%0A%3Fa%20%3Chttp%3A%2F%2Fdata.linkedmdb.org%2Fresource%2Fmovie%2Factor_name%3E%20%3Factor.%0A%7D&output=json");



        $json=file_get_contents("http://www.omdbapi.com/?t=$url");


        $info=json_decode($json);
        $linked=json_decode($link);
        $linked2=json_decode($link2);



        return view('show')
            ->with('movie', $movie)
            ->with('related', $related)
            ->with('info', $info)
        ->with('linked', $linked)
        ->with('linked2', $linked2);

    }

    public function createV(){

        if (Auth::id() == '3'){
            return view('create');
        }
        else
            return redirect('movies');

    }

    public function create(createRequest $request){

        $p = Request::all();
        movie::create($p);

        return redirect('movies');
    }

    public function edit($id){

        if (Auth::id() == '3'){
            $ed = movie::findOrFail($id);
            return view('edit',compact('ed'));
        }
        else
            return redirect('movies');

    }

    public function editMovie(Request $request){

        $edit = Request::all();
        $tmp = movie::findOrFail($edit['id']);
        $tmp->name = $edit['name'];
        $tmp->img = $edit['img'];
        $tmp->director = $edit['director'];
        $tmp->release = $edit['release'];
        $tmp->actors = $edit['actors'];
        $tmp->description = $edit['description'];
        $tmp->price = $edit['price'];
        $tmp->lang = $edit['lang'];
        $tmp->studio = $edit['studio'];
        $tmp->time = $edit['time'];
        $tmp->rating = $edit['rating'];
        $tmp->file_id = $edit['file_id'];

        $tmp->save();

        return redirect('movies');

    }

    public function delete($id){
        $ed = movie::findOrFail($id);
        $ed->delete();
        return redirect('movies');
    }

    public function search(Request $request) {

        $searchterm = Request::get('search');

        if ($searchterm){

            $movies = movie::where('name', 'LIKE', '%'. $searchterm .'%')
                ->orWhere('director', 'LIKE', '%'. $searchterm .'%')
                ->orWhere('studio', 'LIKE', '%'. $searchterm .'%')
                ->orWhere('actors', 'LIKE', '%'. $searchterm .'%')
                ->get();

           return view('search',compact('movies'));

        }
    }

    public function logout(){

        \Auth::logout();
        return redirect('movies');

    }


}
