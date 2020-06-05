<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Transformers\CatTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use League\Fractal\Manager;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class CatController extends Controller
{
    public function index(Request $request)
    {

        $campus = $request->input('campus');
        $fractal = new Manager();
        if(isset($campus)){
            $paginator = Cat::where('campus','=',$campus)->paginate(8);
            $cats = $paginator->getCollection();
            $resources = new Collection($cats, new CatTransformer());
            $resources->setPaginator(new IlluminatePaginatorAdapter($paginator));
            return $fractal->createData($resources)->toJson();

//            $cats = Cat::where('campus', '=',$campus)->paginate(7);
//            $resources = new Collection($cats, new CatTransformer());
//            return $fractal->createData($resources)->toJson();
//            return $cats = DB::table('cats')->where('campus',$campus)->paginate(7);
        }else{
            $paginator = Cat::paginate(8);
            $cats = $paginator->getCollection();
            $resources = new Collection($cats, new CatTransformer());
            $resources->setPaginator(new IlluminatePaginatorAdapter($paginator));
            return $fractal->createData($resources)->toJson();

//            $resources = new Collection($cats, new CatTransformer());
//            return $fractal->createData($resources)->toJson();
//            return $cats = DB::table('cats')->paginate(7);
        }
    }

    public function show($id)
    {
        $cat = Cat::where('id','=',$id)->first();
        $resources = new Item($cat, new CatTransformer());
        $fractal = new Manager();
        return $fractal->createData($resources)->toJson();
//        return $cat = DB::table('cats')->where('id', $id)->get();
    }

    public function search(Request $request)
    {
        $name = $request->input('name');
        return $cat = DB::table('cats')->where('name', $name)->get();
    }
}
