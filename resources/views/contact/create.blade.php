@extends('layout' , ['title' => 'Contact us'])

@section('content')
<br>
 <div class="row content">
        <div class="col-sm-8">
            <h2>Contact us</h2>
			  <form action="/action_page.php">
			    <div class="form-group">
			      <label for="email">Email:</label>
			      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			    </div>
			    <div class="form-group">
			      <label for="pwd">Name:</label>
			      <input type="text" class="form-control" id="name" placeholder="name" name="name">
			    </div>
			      <div class="form-group">
			      <label for="pwd">Message:</label>
			     <textarea name='message'  class="form-control" placeholder="msg"></textarea>
			    </div>
			    
			    <button type="submit" class="btn btn-default">Envoye</button>
			  </form>
        </div>
      
    </div>
@endsection()