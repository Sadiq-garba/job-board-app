@extends('layout-folder.layout')


@section('container')


<section id="about" style="padding-top:200px;">
    <div class="container">

      <header class="section-header">
   
      </header>

      <div class="row justify-content-center about-container">
               
       
          <div class="col-md-12">
              
            <div class="content">

                <img src="{{asset('storage/banner_img')}}/{{$post->logo}}" class="show-pic" />

                    <h1>{{$post->job_title}}</h1>
                 
                    <span> {{$post->location}}</span>  
                
                    <span>{{$post->job_type}}</span>  
         
            </div>     
        
    
      </div>



    <div class="col-md-12 mt-4">
      

      {{$post->description}}

          

    <p class="mt-4"><b>category :</b> {{$post->category}}</p>

    <p><b> Headquaters: </b> {{$post->company_hq}}</p>
     

    
      </div>

    </div>
  </section>



@endsection