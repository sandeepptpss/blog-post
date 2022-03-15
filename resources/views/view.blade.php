<div class="container">
<h2>View Your All Post</h2>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <img src="/upload/{{$posts->image }}" width="1250px" height="550px">
                <p>{{$posts->title}}</p>
                <p class="blog-description">{{$posts->body}}</p>
                <div>Published At: {{date('Y-m-d', strtotime($posts->published_at))}}</div>
                <a href={{"/index "}}>Back</a>
                <a href={{"/create"}}> Create Post</a>
            </div>
        </div>
    </div>
</div>
</div>
