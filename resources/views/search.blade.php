@extends('layout-folder.layout')


@section("container")


    


<section id="about" style="padding-top:250px;">
    <div class="container">
      <div class="row justify-content-center about-container">
           <div class="col-md-8">
               <form method="GET" action="/search">
               <div class="form-group">
                 
                <input type="search" placeholder="Search job titles"  class="search form-control" name="search">
            
               </div>


               <div class="form-group">
                 
                <input type="submit" class="search-btn" value="search">
            
               </div>

            </form>

           </div>
       </div> 
    </div>
  </section><!-- #about -->


@endsection