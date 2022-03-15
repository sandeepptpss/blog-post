<div class="container">
<div class="row justify-content-center">
<div class="col-12">
<a href="/create" class="btn btn-primary mb-2">Create Post</a> 
@foreach($posts as $post)
        <div class="main-blog">
        <img src="upload/{{$post->image }}" width="500px" hieght="300px">
        <p>{!! \Illuminate\Support\Str::words($post->body, 10,'....')  !!}</p>
        <p><a href={{"view/".$post['id']}}> {{ $post->title }}</a></p>
        <div class="published_at">{{ date('Y-m-d', strtotime($post->published_at)) }}</div>
        <br>
        <a href={{"view/".$post['id']}}>learn More</a>
        <br>
        <a href={{"edit/".$post['id']}}> EditPost</a>
        <a href={{"delete/".$post['id']}}> Delete</a>
        <a href={{"/create"}}> Create Post</a>
</div>
@endforeach 
</div> 
</div>
</div>