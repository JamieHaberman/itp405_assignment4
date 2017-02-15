<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Songs</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <body>
  		<div class="container">
  			<h1>Twitter Clone</h1>

  			@if (session('successStatus'))
  				<div class="success" role="alert">
  					{{session('successStatus')}}
  				</div>
  			@endif

  			@if (count($errors) > 0)
  				<div class="failure" role="alert">
  					@foreach ($errors->all() as $error)
  						{{$error}}
  					@endforeach
  				</div>
  			@endif

  			<form action="/" method="post" style="margin-bottom: 80px">
  				{{csrf_field()}}
  				<textarea name="tweet" id="tweet"></textarea>
  				<button type="submit">Tweet!</button>
  			</form>

  			@foreach ($tweets as $tweet)
  			<div class="tweet">
  				<a href="/tweets/{{$tweet->id}}/delete" class="x">X</a>
  				<a href="/tweets/{{$tweet->id}}" class="view">View</a>
  				{{$tweet->tweet}}
  			</div>
  			@endforeach
  		</div>
        </div>
      </div>
    </div>
  </body>
</html>
