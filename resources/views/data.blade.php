<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Data Portfolio</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
<div class="container p-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">
                        Semua Portfolio
                    </h1>
                    <a href="{{route('add')}}" class="btn btn-success">Tambah Data</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Link</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($portfolios as $porto)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$porto->title}}</td>
                                <td>{{$porto->type}}</td>
                                <td>{{$porto->description}}</td>
                                <td>
                                    <img src="{{asset('img').'/'.$porto->image}}" alt="" style="max-width: 200px">
                                </td>
                                <td>
                                    @if($porto->link != 'Null')
                                        <a href="{{$porto->link}}">{{$porto->link}}</a>
                                    @else
                                        <span>Tidak ada link</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('edit',$porto->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{route('delete',$porto->id)}}" class="btn btn-danger"
                                       onclick="return confirm('are you sure?')">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
