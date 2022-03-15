<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
</head>
<body>
<div class="container">
<h2>Edit Blog Post</h2>
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    <form action="/edit" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="hidden" name="id" value="{{$post['id']}}">
                <input type="file" name="image" class="form-control" placeholder="image">
                <img src="/upload/{{ $post->image }}" >
                <br>
                <label for="">Post Title</label>
                <input type="text" name="title" value="{{ $post->title }}" placeholder="Title" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="">Post Body</label>
                <textarea name="body" id="" placeholder="Post" cols="30" rows="10" class="form-control" value="{{$post->body}}">{{$post->body}}</textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>

