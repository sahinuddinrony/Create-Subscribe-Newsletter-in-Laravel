<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Mail\Websitemail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function blog_index()
    {
        $all_blog_data = Blog::get();
       return view('post.show',compact('all_blog_data'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'blog_title' => 'required',
            'blog_detail' => 'required'
        ]);

        $ext = $request->file('blog_photo')->extension();
        $final_name = date('YmdHis').'.'.$ext;
        $request->file('blog_photo')->move(public_path('uploads/blogs/'),$final_name);
        
        // dd($final_name);

        $form_data = new Blog();
        $form_data->blog_title  = $request->blog_title;
        $form_data->blog_detail = $request->blog_detail;
        $form_data->blog_photo  = $final_name;
        $form_data->save();

    
        $blog_id = $form_data->id;
        $post_detail = Blog::where('id',$blog_id)->first();
        
        // Sending this post to subscribers
        if($request->subscriber_send_option == 1)
        {
            $subject = 'A new post is published';
            $message = 'Hi, A new post is published into our website. Please go to see that post:<br>';
            $message .= '<a target="_blank" href="'.route('blog_detail',$post_detail).'">';
            $message .= $request->blog_title;
            $message .= '</a>';

            $subscribers = Subscriber::where('status','Active')->get();
            foreach($subscribers as $row) {
                \Mail::to($row->email)->send(new Websitemail($subject,$message));
            }
        }

         //return redirect()->route('home');
        return redirect()->route('blog_index')->with('success','Data is Added Successfully');
        
        //return view ('home');

    }
 
    public function detail($id)
    {
        $post_detail = Blog::where('id',$id)->first();
        return view('post.detail',compact('post_detail'));
    }
 
    public function edit($id)
    {
        //return $id;
        $blog_single = Blog::where('id',$id)->first();
        return view('post.edit',compact('blog_single'));
    }

    public function update(Request $request, $id)
    {
        $blog_up = Blog::where('id',$id)->first();

        $request->validate([
            'blog_title' => 'required',
            'blog_detail' => 'required'
            ]);

       if($request->hasFile('blog_photo'))
       {
        $request->validate([
            'blog_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'   
        ]);

        if( file_exists(public_path('uploads/blogs/'.$blog_up->blog_photo)) AND !empty ($blog_up->blog_photo))

         {
            unlink(public_path('uploads/blogs/'.$blog_up->blog_photo));
         }

        $ext = $request->file('blog_photo')->extension();
        $final_name = date('YmdHis').'.'.$ext;
        $request->file('blog_photo')->move(public_path('uploads/blogs/'),$final_name);

        $blog_up->blog_photo = $final_name;

       }

        //$student = new Student();

        $blog_up->blog_title = $request->blog_title;
        $blog_up->blog_detail = $request->blog_detail;
        // $blog_up->address = $request->address;
        $blog_up->update();

        //return redirect()->route('home');
        return redirect()->route('blog_index')->with('success','Data is Added Successfully');
    }

    
    public function delete($id)
    {
       $blog_del = Blog::where('id',$id)->first();

       if( file_exists(public_path('uploads/blogs/'.$blog_del->blog_photo)) AND !empty ($blog_del->blog_photo))
         {
            unlink(public_path('uploads/blogs/'.$blog_del->blog_photo));
         }
       $blog_del->delete();

        return redirect()->back()->with('success','Data id Delete Successfully');
    }
}
