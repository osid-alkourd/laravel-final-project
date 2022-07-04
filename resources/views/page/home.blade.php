@extends('theme.master')

@section('page-title')
     Home
@endsection


@section('content')

  @if(session('success'))
       <div class="alert alert-success">
             <h3>{{session('success')}}</h3>
       </div>
  @endif
    <div class="container" style="margin-top:30px;">
                  <form action="{{route('post.add')}}" method="POST">
                  @csrf
                  <div class="form-group">
                     <label for="exampleInputTitle">Title</label>
                     <input type="text" class="form-control" id="exampleInputTitle" name="title" placeholder="Enter Your Post Title">
                     @error('title')
                         <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>

                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Post Description</label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Enter Your Description"></textarea>
                     <span>
                        @error('description')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                     </span>
                  </div>

                  <input type="submit" class="btn btn-primary" name="submit" value="submit">
               </form>
    </div>
@endsection