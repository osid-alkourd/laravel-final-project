@extends('theme.master')


@section('page-title')
     Home
@endsection


@section('content')
<br>
<div class="container">
<h3>All Post</h3>
</div>
<br><br>


   <div class="container">
       <div class="row">
            <div class="col-lg-12">
                 @if(session('success'))
                        <div class="alert alert-success">
                               <h3>{{ session('success')}}</h3> 
                        </div>
                 @endif
                @foreach($posts as $post)
                 
                <div class="card mt-5">
                    <h5 class="card-header">
                          {{$post->title}}
                         <span class="float-right">{{$post->updated_at->diffForHumans()}}</span> 
                    </h5>

                    <div class="card-body">
                         <h5 class="card-title"></h5>
                         <p class="card-text">
                           {{\Illuminate\Support\Str::words($post->description , 20)}}
                         </p>
                         <a href="{{route('Delete.post',$post->id)}}" class="btn btn-danger">Delete This Post</a>
                         <a href="{{route('edit.post' , $post->id)}}" class="btn btn-warning text-white">Edit This Post</a>
                    </div>
                </div>
                @endforeach
            </div>
       </div> 
   </div>
@endsection