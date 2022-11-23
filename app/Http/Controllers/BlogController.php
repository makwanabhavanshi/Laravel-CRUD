<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin_blog');
    }

    function add(Request $request)
    {
        // return $request->input();
        $query = DB::table('blog')->insert([
            'blog_title'=>$request->input('blog_title'),
            'blog_article_author'=>$request->input('blog_article_author'),
            'written_date'=>$request->input('written_date'),
            'blog_released_date'=>$request->input('blog_released_date'),
            'blog_description'=>$request->input('blog_description'),
            'meta_description1'=>$request->input('meta_description1'),
            'blog_image'=>$request->input('blog_image'),
            'meta_description2'=>$request->input('meta_description2')
        ]);

        if($query)
        {
            return back()->with('success','data have been inserted');
        }
        else
        {
            return back()->with('fail','somthing wrong');
        }

        return redirect('blog_show');
    }

    public function show()
    {
        $data = array(
            'list' => DB::table('blog')->get()
        );
        return view('blog_show',$data);
    }

    public function delete($id)
    {
        $delete = DB::table('blog')->where('id',$id)->delete();
        return redirect('blog_show');
    }

    public function edit($id)
    {
        $row = DB::table('blog')->where('id',$id)->first();
        $data = [ 
            'Info' => $row ,
            'Title' => 'Edit'
        ];
        return view('edit',$data);
    }

    public function update(Request $request)
    {
        $updating = DB::table('blog')
                    ->where('id', $request -> input('cid'))
                    -> update([
                        'blog_title'=>$request->input('blog_title'),
                        'blog_article_author'=>$request->input('blog_article_author'),
                        'written_date'=>$request->input('written_date'),
                        'blog_released_date'=>$request->input('blog_released_date'),
                        'blog_description'=>$request->input('blog_description'),
                        'meta_description1'=>$request->input('meta_description1'),
                        'blog_image'=>$request->input('blog_image'),
                        'meta_description2'=>$request->input('meta_description2')
                    ]);
        return redirect('blog_show');
    }

}
