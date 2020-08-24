<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>testing</title>
</head>
<body>
<h1>enter task</h1>
<div class="container">
    <form method="post" action="/addto">
    @csrf
        <div class="form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label"></label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="name" id="inputName" placeholder="name">
            </div>
        </div>

        
        <div class="form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label"></label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="value" id="inputName" placeholder="value">
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">save</button>
                <button type="button" class="btn btn-warning">clear</button>
            </div>
        </div>
    </form>

    <div class="container">
    
<!-- @if(isset($uptasks)) -->
<form method="" action="">
    @csrf
        <div class="form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label"></label>
            <div class="col-sm-1-12">
                <input type="text"  value="{{$task->id}}"/>
                <input type="text" class="form-control" name="uname" id="wd" value="{{$task->name}}" placeholder="name">
            </div>
        </div>

        
        <div class="form-group row">
            <label for="inputName" class="col-sm-1-12 col-form-label"></label>
            <div class="col-sm-1-12">
                <input type="text" class="form-control" name="uvalue" id="sdf"  value="{{$task->value}}" placeholder="value">
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">save</button>
                <button type="button" class="btn btn-warning">clear</button>
            </div>
        </div>
    </form>
    </div>
<!-- @endif  -->

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Value</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)

            <tr>
                <td scope="row">{{$task->name}}</td>
                <td>{{$task->value}}</td>
                <td>
                <a href="/update/{{$task->id}}" name="update" id="" class="btn btn-warning" btn-lg btn-block">Update</a>
                <a href="/delete/{{$task->id}}"  name="delete" id="" class="btn btn-danger" btn-lg btn-block">x</a>

       
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>

</body>
</html>