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
                    <h1>Please Verify The Keyword</h1>
                    <a href="{{route('index')}}" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{route('verifyDataCheck')}}" method="post" enctype="multipart/form-data">
                        {{--                            title, type, description, image, link--}}
                        @csrf
                        <div class="form-group">
                            <label for="pwd">Keyword</label>
                            <input type="password" class="form-control" id="pwd" name="pwd">
                        </div>
                        <div class="form-group mt-5">
                            <button type="submit" class="form-control btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
