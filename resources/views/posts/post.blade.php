@include('layouts.head')
@include('layouts.nav')
@include('postheader')
<!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <p>{{ $post->body }}</p>
            </div>
        </div>
    </article>

    <hr>

    <div class="container">
    	<h3>{{ $post->comments->count() }} response to this post.</h3>
    	<hr>
    	@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li >{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
    	<form action="/comment/{{ $post->id }}" method="POST">
    		{{ csrf_field() }}
    		<div class="form-group">
    			<textarea name="comment" class="form-control" placeholder="Joint the conversation by writing your comment here" style="height: 150px;"></textarea>
    		</div>
    		<div class="form-group">
    			<button class="btn btn-success">React to this</button>
    		</div>
    	</form>
    </div>

    <hr>

    <div class="container">
    	@foreach($post->comments as $comments)
			<ul class="list-group">
				<li class="list-group-item">
					<p style="font-size: 16px; margin-bottom: 2px;">By <i><a href="">{{ $comments->user->name }}</a></i> {{ $comments->created_at->diffForHumans() }}</p>
					{{ $comments->body }}
				</li>
			</ul>
    	@endforeach
    </div>

@include('layouts.footer')