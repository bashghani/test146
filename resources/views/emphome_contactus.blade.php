@extends('layouts.appemp11')

@section('content')
<div class="container">
    <div class="row">
      {{--  <div class="col-md-10 col-md-offset-1"> --}}
         <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">Dashboard For New Contact Us Messages</div>
                 <div> </div>
                 <div id="topcorner" >
                 
                 &nbsp;<a href="{{ url('/contactus_home') }}"><button  class="btn btn-success">
                                    <i class="fa fa-list-alt"></i>&nbsp;&nbsp;Pending Messages
                                </button></a>
                                <a href="{{ url('/completed_messages') }}"><button  class="btn btn-success">
                                    <i class="fa fa-list-alt"></i>&nbsp;&nbsp;Completed Messages
                                </button></a>
                                
                                <a href="{{ url('/cancelled_messages') }}"><button  class="btn btn-success">
                                    <i class="fa fa-list-alt"></i>&nbsp;&nbsp;Cancelled Messages
                                </button></a>
      
                                
                                
                                
                                  
                                 
                                 
                                                                
                                
                                  </div>
                <div class="panel-body"> 
           {{--    @foreach($forlogo as $joby)
               
           @if(!(($joby->upload_logo)==(1)))
          
          <img src="{{ $joby->upload_logo }}" alt="Company logo1234" height="100" width="100"> 
             @else
              <img src="img/nologo.jpg" alt="Company logo1234" height="100" width="100"> 
             
               @endif
               </br><br>
                            <h4>  Company name  {{$joby->company}}</h4>
                @endforeach 
                   
                     <br>{{ Auth::user()->name }} </br>
                      <br>email  {{ Auth::user()->email }} </br>
                        <br>Nationality   {{ Auth::user()->nationality}} </br>
                          <br>Gender    {{ Auth::user()->gender	 }} </br> --}}
                         
                      <h1>Contact us Section </h1>
                      
                   
                    <div id="panelforjobs" >
                     <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/add_publication') }}">
                        {!! csrf_field() !!}
                   <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Publication title</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('job_title') }}" required>

                                @if ($errors->has('job_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group{{ $errors->has('publication_link') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Publication Link</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="publication_link" value="{{ old('publication_link') }}" required>

                                @if ($errors->has('job_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('publication_link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        
                        
                        
                        <div class="form-group{{ $errors->has('job_description') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Publication short description</label>

                            <div class="col-md-6">
                               {{-- <textarea rows="4" cols="50"  class="form-control" name="short_description" 
                                value="{{ old('task_description') }}"> --}}
                                 <textarea  class="form-control" rows="2" maxlength="100" name="short_description"  required></textarea>
                               {{--   </textarea> --}}

                                @if ($errors->has('job_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_description') }}</strong>
                                    </span>
                                @endif
                              
                            </div>
                        </div>
                    
                       <div class="form-group{{ $errors->has('job_description') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Publication detailed description</label>

                            <div class="col-md-6">
                               {{-- <textarea rows="4" cols="50"  class="form-control" name="task_description" 
                                value="{{ old('task_description') }}"> --}}
                                 <textarea id="editor1" class="form-control editor1" rows="8" maxlength="245" name="detailed_description"  required></textarea>
                               {{--   </textarea> --}}

                                @if ($errors->has('job_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_description') }}</strong>
                                    </span>
                                @endif
                              
                            </div>
                        </div> 
                        <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Show in Fetured Puclications</label>

                            <div class="col-md-6">
                                
      <select name="show_featured" class="form-control" id="sel1">
       <option value="no">No</option>
        <option value="yes">Yes</option>
       
        
      </select>

                                @if ($errors->has('job_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         
                         
                 {{--        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Small pic  (best size 200*400)</label>

                            <div class="col-md-6">
                           
                                <input type="file"  name="image" required>
                                  <span class="help-block"> 
                                        <strong>best sized</strong>
                                   </span>
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  --}}
                          <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Upload picture
                            (best size 800*1200)
                            
                            </label>

                            <div class="col-md-6">
                           
                                <input type="file"  name="image1" required>

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         
                      
                         
                         
                          
                         
                         
                         
                         
                    
                    <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Add New Publication
                       </button>
                                </form>
                     <div id="flipforjobsopen" ><br><br> Cancel adding new Publication           </div>
                    
                   
                   
                          
                         </div>
                         <!--  <button class="btn btn-primary" id="flipforjobs">
                                    <i class="fa fa-btn fa-user"></i>Add job666
                                </button>
                               -->
                            {{--     <div id="flipforjobs"> ADD PUBLICATIONS </div>--}}
                            
                                      
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
	<div class="row">
		
        
        <div class="col-sm-11">
        <h4>New Contact us messages</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                  
                   <th>Message id</th>
                    <th>Name person</th>
                     <th>E-Mail </th>
                     <th>Subject</th>
                     <th>Message</th>
                     <th>telephone</th>
                     <th>Status</th>
                    
                     {{--<th>View Small</th>--}}
                     
                     <th>Edit</th>
                      
                     <th>Delete</th>
                   </thead>
    <tbody>
    @foreach($all_lat_contact_us as $emp_job)
    
    <tr>
    
    <td>{{$emp_job['id']}}</td>
    <td>{{$emp_job['name']}}</td>
     <td>{{$emp_job['email']}}</td>
     <td>{{$emp_job['subject']}}</td>
     <td>{{$emp_job['message']}}</td>
     <td>{{$emp_job['telephone']}}</td>
        <td>{{$emp_job['status']}}</td>
       
  {{--  <td> <a href="{{$emp_job['small_pic_link']}}" target="_blank">View</a> </td>--}}
  
    <td><span id="{{$emp_job['id']}}"  > <p  title="Edit">
    <span class="glyphicon glyphicon-pencil"></span></p></span> </td> 
    <td><form class="form-horizontal" role="form" method="POST" action="{{ url('/delete_contact_message') }}" 
    onSubmit="return confirm('are you sure you want to delete  user named: {{$emp_job['job_title']}} ?')">
                        {!! csrf_field() !!}
    <input type="hidden" name="user_id_del"  value="{{$emp_job['id']}}">
    <input type="hidden" name="status_msg"  value="{{$emp_job['status']}}">
    
    <button type="submit" class="btn btn-danger btn-xs" data-title="Delete12345678"  >
    <span class="glyphicon glyphicon-trash"></span>
    </button></p></form></td>
   
    
 <script>
$(document).ready(function(){
    $("#{{$emp_job['id']}}").click(function(){
        $("#{{$disp=$emp_job['id']."abc"}}").slideToggle("slow");
    });
});
</script>


</tr>
<tr>

   
 <td colspan="10"> 
 <div  id="{{$disp=$emp_job['id']."abc"}}" style="display:none" align="center" >
 <div class="panel-body">
 <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/edit_contact') }}">
                        {!! csrf_field() !!}
 
                             
                        <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Person Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ $emp_job['name'] }}" readonly>

                                @if ($errors->has('job_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         
                        
                        
                        
                        
                        
                        <div class="form-group{{ $errors->has('job_description') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">message</label>

                            <div class="col-md-6">
                               {{-- <textarea rows="4" cols="50"  class="form-control" name="short_description" 
                                value="{{ old('task_description') }}"> --}}
                                 <textarea  class="form-control" rows="2" maxlength="100" name="short_description"  readonly>{{ $emp_job['message'] }}</textarea>
                               {{--   </textarea> --}}

                                @if ($errors->has('job_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_description') }}</strong>
                                    </span>
                                @endif
                              
                            </div>
                        </div>
                        
                           @if(($emp_job['status'])==("pending"))
                        
                        
                        <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                
      <select name="status" class="form-control" id="sel1">
        <option selected value="{{ $emp_job['status'] }}">{{ $emp_job['status'] }}</option>
      {{-- <option value="pending">pending</option> --}}
        <option value="completed">completed</option>
        <option value="cancelled">cancelled</option>
        
       
        
      </select>

                                @if ($errors->has('job_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                     
                        
                        <div class="form-group{{ $errors->has('job_description') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Completion comment</label>

                            <div class="col-md-6">
                               {{-- <textarea rows="4" cols="50"  class="form-control" name="short_description" 
                                value="{{ old('task_description') }}"> --}}
                                 <textarea  class="form-control" rows="2" maxlength="255" name="completion_comment"  required>{{ $emp_job['completion_comment'] }}</textarea>
                               {{--   </textarea> --}}

                                @if ($errors->has('job_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_description') }}</strong>
                                    </span>
                                @endif
                              
                            </div>
                        </div>
            @else
            
                         <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                
      <select name="status" class="form-control" id="sel1" disabled>
        <option selected value="{{ $emp_job['status'] }}">{{ $emp_job['status'] }}</option>
      {{-- <option value="pending">pending</option> --}}
        <option value="completed">completed</option>
        <option value="cancelled">cancelled</option>
        
       
        
      </select>

                                @if ($errors->has('job_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                     
                        
                        <div class="form-group{{ $errors->has('job_description') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Completion comment</label>

                            <div class="col-md-6">
                               {{-- <textarea rows="4" cols="50"  class="form-control" name="short_description" 
                                value="{{ old('task_description') }}"> --}}
                                 <textarea  class="form-control" rows="2" maxlength="255" name="completion_comment"  readonly>{{ $emp_job['completion_comment'] }}</textarea>
                               {{--   </textarea> --}}

                                @if ($errors->has('job_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_description') }}</strong>
                                    </span>
                                @endif
                              
                            </div>
                        </div>
                        
                        @endif
                        

                        @if(($emp_job['status'])==("pending"))
                            
                      <input type="hidden" name="j_id"  value="{{ $emp_job['id'] }}">
                        <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Edit contact
                                </button>
                                 @endif 
                                </form>
                              
                        </div>
                         
</div> 






  @endforeach
  
  
    
    </tbody>
        
</table>





<script src="bower_components/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
	//CKEDITOR.replaceAll('about');
    CKEDITOR.replaceAll('editor1')
	//bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>

            
        </div>
	</div>
</div>



    
    
    
    
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
