@extends('layout-folder.layout')


@section("container")


    


<section id="about" style="padding-top:100px;">
    <div class="container">

      <header class="section-header">
        <h3> United States only</h3>
       <!--- <h3>About Us</h3>
        <p>intellicode limited is a tech solution and service firm thats specialises in providing cutting edge innovative technology to meet the needs of our clients </p>-->
      </header>

      <div class="row justify-content-center about-container">

        @if(count($united) > 0)


        @foreach($united as $country)

        <div class="col-lg-8 mt-4 "> 
            <div class="tile">
           

            
                @if(now() > $country->created_at->diffForHumans())
                <span class="new-card">New</span>
                @else  
                 
                   <span style="color:white; background-color:rgb(122, 144, 122); padding:10px; border-radius:15px; position:relative; float:right;">{{ $country->created_at->diffForHumans()}}</span>
        
                @endif

            <p><img src="storage/banner_img/{{$country->logo}}" class="profile-img" /></p>

            <p class="comp-name"><a href="{{url('/show')}}/{{$country->id}}">{{$country->company_name}}</a></p>

            <p class="job-title"><a href="{{url('/show')}}/{{$country->id}}">{{$country->job_title}}</a></p>
          
             
            <p>{{$country->category}}</p>
        

        
          </div>

        </div>

        @endforeach
        @else
       <h1> No data yet</h1>

        @endif
     

    
    </div>

    </div>
  </section><!-- #about -->


@endsection