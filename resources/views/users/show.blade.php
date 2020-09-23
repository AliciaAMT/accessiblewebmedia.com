@extends('layouts.app3')

@section('content')
    <br /><br /><br /><br />
    <div class="container">
        <div class="row py-2">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <h1>{{$user->name}}</h1>
                                </div>
                                <div class="col-md-5 text-right">
                                    Role: 
                                    @if(!$user->role)
                                    None Assigned
                                    @else
                                    {{$user->role}}
                                    @endif                                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <b>Email: </b><br />
                                        {{$user->email}}
                                    </div>
                                    <div class="form-group">
                                        <b>Phone: </b><br />
                                        @if(!$user->phone)
                                            None Provided
                                        @else
                                        {{$user->phone}}
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <b>Address: </b><br />
                                        @if(!$user->street)
                                            None Provided
                                        @else
                                        {{$user->street}} @if(!$user->apartment) @else {{$user->apartment}} @endif {{ $user->city}}, {{ $user->state }} {{ $user->zip }}
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>                     
                    </div>
                    <div class="card-footer">
                        
                    
                        <div class="container">
                            <div class="row">
                                <div class="col">   
                                    <a class="btn btn-primary" href="/users">Back</a>
                                    @if(!Auth::guest())
                                    @if (Auth::user()->email=='Maecheenoi3@gmail.com')   
                                    <a class="btn btn-primary" href="/users/{{$user->id}}/edit">Edit</a>
                                </div>
                                <div class="col text-right">
                                    <form action="/users/{{$user->id}}" method="post" onclick="return confirm('***WARNING!*** Are you sure you want to DELETE this user? This cannot be undone!')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button> 
                                    </form>   
                                </div>
                            </div>
                        </div>
                        @endif
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection