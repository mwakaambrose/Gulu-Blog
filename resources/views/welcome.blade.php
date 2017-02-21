@include('layouts.head')
@include('layouts.nav')
@include('homeheader')
<!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                {{-- <pre> {{ $posts }} </pre> --}}

                @foreach($posts as $post)
                    <div class="post-preview">
                        <a href="post/{{ $post->id }}">
                            <h2 class="post-title">
                                {{ $post->title }}
                            </h2>
                            <h3 class="post-subtitle">
                                {{ $post->subtitle }}
                            </h3>
                        </a>
                        <p class="post-meta">
                            Posted by  
                            <a href="">{{ $post->author }}</a>  
                            {{ $post->created_at->diffForHumans() }} 
                        </p>
                    </div>
                    <hr>
                    <p>
                        <span  class="glyphicon glyphicon-heart likeholder" style="cursor: pointer;"
                                data-post-id="{{ $post->id }}">
                            {{ $post->likes->count() }}
                        </span> 
                        

                        <a class="pull-right" href="post/{{ $post->id }}" style="text-decoration: none;">
                            <span class="glyphicon glyphicon-bookmark"></span> 
                            {{ $post->comments->count() }} response
                        </a>
                    </p>
                    <hr>

                @endforeach

                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        {{ $posts->links() }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
@include('layouts.footer')
