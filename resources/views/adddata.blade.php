<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Add</title>
    <link rel="stylesheet" href="{{'css/bootstrap.css'}}">
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
                </div>
                <div class="card-body">
                    <form action="">
                        {{--                            title, type, description, image, link--}}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" placeholder="branding/ logo/">
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea name="desc" id="desc" cols="30" rows="10" class="form-control">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem est ex labore laborum placeat quaerat similique unde, voluptate voluptatem voluptatibus.</textarea>
                        </div>
                        <div class="form-group">
                            <label for="img">Image</label>
                            <input type="file" class="form-control" id="img">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" id="link" placeholder="insert link">
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
