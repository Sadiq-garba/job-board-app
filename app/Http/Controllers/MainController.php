<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs;

class MainController extends Controller{

    public function index(){
        

         
         $all = Jobs::orderBy('created_at','desc')->take(10)->get();
         $front = Jobs::where('category', 'frontend engineer')->orderBy('created_at','desc')->take(10)->get();
         $back = Jobs::where('category','backend')->orderBy('created_at','desc')->take(10)->get();
         $manage = Jobs::where('category', 'management and finance')->orderBy('created_at')->take(10)->get();
         return view('index')->with('front', $front)->with('back', $back)->with('manage', $manage)->with('ten', $all);


    }





    public function europe(){
        

     
      $euro = Jobs::where('location', 'EU only')->orderBy('created_at','desc')->take(20)->get();
      return view('europe')->with('euro', $euro);


 }



 public function search(){
        




     return view('search');
     
   // $united = Jobs::where('location', 'US only')->orderBy('created_at','desc')->take(20)->get();
  //  return view('us')->with('united', $united);
 
 
 }
 
   
 public function backend(){
        

     
   $backend = Jobs::where('category', 'backend')->orderBy('created_at','desc')->paginate(1);//->take(20)->get();
   return view('backend')->with('backend', $backend);


}

public function frontend(){
        

     
   $frontend = Jobs::where('category', 'frontend engineer')->orderBy('created_at','desc')->paginate(4); //->take(20)->get();
   return view('frontend')->with('frontend', $frontend);


}

public function manage(){
        

     
   $manage = Jobs::where('category', 'management and finance' )->orderBy('created_at','desc')->take(20)->get();
   return view('manage')->with('manage', $manage);


}



 public function united(){
        

     
   $united = Jobs::where('location', 'US only')->orderBy('created_at','desc')->take(20)->get();
   return view('us')->with('united', $united);


}


public function worldwide(){
        

     
   $worldwide= Jobs::where('location', 'worldwide')->orderBy('created_at','desc')->take(20)->get();
   return view('worldwide')->with('world', $worldwide);


}





   
    public function create(){



     return view('form');


 
     }


    public function store(Request $request){

      

        $this->validate($request, [
          'email'=>'required',
          'company_name'=>'string|required',
          'comp_hq'=>'string|required',
          'location'=>'string|required',
          'job_title'=>'string|nullable',
          'job_type'=>'string|required',
          'description'=>'string|required',
          'category'=>'required|string',
          'link'=>'string|required',
          'logo'=>'image|required|max:1999',
         
          
       ]);

      

    /*  if($request->hasFile('image')){
          //get file name with extension
         $fileNameWithExt = $request->file('image')->getClientOriginalName();
         //get just filename
         $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
  
         //get just extension
         $extension = $request->file('image')->getClientOriginalExtension();
         // file name to store
          $fileNameToStoreOne= $filename.'_'.time().'.'.$extension;
         //upload image
         $path = $request->file('image')->storeAs('public/banner_img', $fileNameToStoreOne);
         }else{
  
             $fileNameToStoreOne = 'noimage.jpeg';
         
          }

          if($request->hasFile('supp_image_one')){
             //get file name with extension
            $fileNameWithExt = $request->file('supp_image_one')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
     
            //get just extension
            $extension = $request->file('supp_image_one')->getClientOriginalExtension();
            // file name to store
             $fileNameToStoreTwo= $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('supp_image_one')->storeAs('public/banner_img', $fileNameToStoreTwo);
            }else{
     
                $fileNameToStoreTwo = 'noimage.jpeg';
            
             } */


             
          if($request->hasFile('logo')){
             //get file name with extension
            $fileNameWithExt = $request->file('logo')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
     
            //get just extension
            $extension = $request->file('logo')->getClientOriginalExtension();
            // file name to store
             $fileNameToStoreOne= $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('logo')->storeAs('public/banner_img', $fileNameToStoreOne);
            }else{
     
                $fileNameToStoreOne = 'noimage.jpeg';
            
             }
 

      
     

   //create post
  $post = new Jobs;

  $post->email = $request->input('email');
  
  $post->company_name = $request->input('company_name');

  $post->job_type = $request->input('job_type');
  
  $post->job_title = $request->input('job_title');
  
  $post->location = $request->input('location');

  
  
  $post->company_hq = $request->input('comp_hq');

  $post->description = $request->input('description');
  
 
  
  $post->category = $request->input('category');

  $post->application_link = $request->input('link');





 // $post->user_id = auth()->user()->id; 
  
  $post->logo =  $fileNameToStoreOne;


  
 
  $post->save();
  
  return redirect('/')->with('success', 'Success, Your content was uploaded');


      //return view('main/form');
   
 }


 public function show($id){
        
   
   $show = Jobs::find($id);
         
   
   return view('show')->with('post', $show);


}





    
}
