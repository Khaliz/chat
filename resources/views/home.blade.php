@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Users</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!$users->isEmpty())
                    <ul class="list-group">
                        @foreach($users as $user)
                            @if($user->name!=auth()->user()->name)
                            
                            <li class="list-group-item">
                            <img  src="/storage/upload/{{$user->picture}}" alt="" width="100px" height="100px">
                            <a href="{{route('message',$user->id)}}">{{$user->name}}</a></li>
                            
                            @endif
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
