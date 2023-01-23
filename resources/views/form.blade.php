@extends('layout-folder.layout')


@section('container')


<section id="about" style="padding-top:200px;">
   


    <form  action="{{ route('store.job')}}" method="POST" enctype="multipart/form-data"> 
   
       <div class="container">
         <div class="row">
          <div class="col-md-8">
            @include('inc.messages')
     
          </div>
           <div class="col-md-6">
         
            <div class="form-group">
            
              <input id="job_title" name="job_title" type="text" class="form-control" placeholder="Job title" required>
       
             </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
              
               <input id="company_name" name="company_name" type="text" class="form-control" placeholder="Company's name" required="required">
    
              </div>
            </div>
             <div class="col-md-6">
              <div class="form-group">
            
               <input id="email" name="email" type="email " class="form-control "  placeholder="Email example@gmail.com" required="required">
    
              </div>
            </div>

              <div class="col-md-6">
                <div class="form-group">
            
                   <input name="comp_hq" type="text" class="form-control"  placeholder="Company HQ" required="required">
        
                </div>
              </div>
               
              <div class="col-md-12">
               <div class="form-group">
                <input name="link" type="text" class="form-control"  placeholder="Application link" required="required">
        
               </div>
              </div>
           
           
              
              
              <div class="col-md-12">
                <div class="form-group">
            
                  <textarea  id="description" name="description" rows="8"  placeholder="  Describe the job" class="form-control"></textarea>
    
                </div>
              </div>
    
             <div class="col-md-6">
              <div class="form-group">
            
              <select name="category" class="form-select custom-select">
                 <option>Job Category</option>
                 <option value="backend">Back end Engineering</option>
                 <option value="frontend engineer">Front end Engineering</option>
                 <option value="product">Product</option>
                 <option value="management and finance">Management and Finance</option>
                 <option value="devops and sysadmins">Devops and Sysadmins</option>
            
           </select>
    
           </div>
          </div>

          <div class="col-md-6">  
          <div class="form-group">
            
            <input type="file" name="logo" class="form-control">
        
           </select>
    
           </div>
          </div>
    
    
          <div class="col-md-6">
           <div class="form-group">
            
            <select name="location" class="form-select custom-select">
              <option value="">Choose preffered location</option>
              <option value="US only">US only</option>
              <option value="EU only">EU only</option>
              <option value="worldwide">Anywhere</option>
           </select>
    
           </div>
          </div>

            
        <div class="col-md-6">
           <div class="form-group">
            
            <select name="job_type" class="form-select custom-select">
              <option value="">Select job type</option>
              <option value="full time">Full time</option>
              <option value="Contract">Contract</option>
              <option value="Temporary">Temporary</option>
        
           </select>
    
           </div>
          </div>
               
    
         
           
    
           
    
          
    
          
    
           <div class="col-md-12">
            <div class="form-group">
            <input type="submit" value="POST" class="btn btn-success">
           </div>
           <div class="form-group">
            @csrf
       
          </div>
          </div>
    
        </div>
      </div>
    <!--	<fieldset style="border:0;">
            
            
        
                    
                    <p><input id="name" name="company_name" type="text" class="form-control" placeholder="Type in Your TIN" required="required"></p>
                
                
                    
                <p><input id="email" name="email" type="email" style="padding:3px; border-radius: 15px;" placeholder="example@domain.com" required=""></p>
                
                
                    
                  <p><input name="email" type="email" class="form-control"  placeholder="example@gmail.com" required="required"></p>
                
            
         
        
                
                    <p><a href="" class="btn btn-primary">Submit</a></p>
                
    
          <p><a class="popup-modal-dismiss" style="color:red;" href="#"><i class="fa fa-remove"></i> Dismiss</a></p>
    
        
        </fieldset>-->
    </form>












  </section>

@endsection