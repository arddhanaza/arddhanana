<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Add</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
<div class="container p-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">
                        Tambah Data
                    </h1>
                    <a href="{{route('allData')}}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body">


                    <form action="{{route('editSave',$porto->id)}}" method="post" enctype="multipart/form-data">
                        {{--                            title, type, description, image, link--}}
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title"
                                   value="{{$porto->title}}">
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" placeholder="branding/ logo/"
                                   name="type" value="{{$porto->type}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10"
                                      class="form-control">{{$porto->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="img">Image</label>
                            <input type="file" class="form-control" id="img" name="image" value="{{$porto->image}}">
                            <input type="hidden" value="{{$porto->image}}" name="old_image">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" id="link" placeholder="insert link" name="link"
                                   value="{{$porto->link}}">
                        </div>
                        <div class="form-group mt-5">
                            <button type="submit" class="form-control btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
