@extends('layout' , ['title' => 'Contact us'])

@section('content')
<br>
 <div class="row content">
        <div class="col-sm-8">
            <h2>Contact us</h2>
			  <form action="{{ route('contact.store') }}" method='POST'>
			  	@CSRF
			    <div class="form-group">
			      <label for="email">Email:</label>
			      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			      {!! $errors->first("email" , '<span class="alert-danger">:message</span>') !!}
			    </div>
			    <div class="form-group">
			      <label for="name">Name:</label>
			      <input type="text" class="form-control" id="name" placeholder="name" name="name">
			      {!! $errors->first("name" , "<span class='alert-danger'>:message</span>") !!}
			    </div>
			      <div class="form-group">
			      <label for="pwd">Message:</label>
			     <textarea name='msg'  class="form-control" placeholder="msg"></textarea>
			     {!! $errors->first("message" , "<span class='alert-danger'>:message</span>") !!}
			    </div>
			    
			    <button type="submit" class="btn btn-default">Envoye</button>
			  </form>
        </div>
      
    </div>
@endsection()