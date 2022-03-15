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
    <h2>Add Blog Post</h2>
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="/post" method="post" enctype="multipart/form-data" id="upload-image">
                        @csrf

                        <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" placeholder="Choose image" id="image">
                        <br>
                            <label for="">Post Title</label>
                            <input type="text" name="title" placeholder="Title" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Post Body</label>
                            <textarea name="body" id="" placeholder="Post" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Publish At</label>
                            <input type="date" name="published_at" class="form-control">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </form>
                    <a href="/index">Index</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>