@extends('layouts.default')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <h1>Firefly
            <small>Categories</small>
        </h1>
        <p class="lead">Use categories to group your expenses</p>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <table class="table table-striped">
            <tr>

            </tr>
            @foreach($categories as $category)
            <tr>
                <td>
                    <a href="{{route('categories.show',$category->id)}}">{{{$category->name}}}</a>
                </td>
                <td>
                    <div class="btn-group btn-group-xs">
                        <a href="{{route('categories.edit',$category->id)}}" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="{{route('categories.delete',$category->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@stop