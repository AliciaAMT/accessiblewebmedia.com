@extends('layouts.app3')

@section('content')
    <br /><br /><br /><br />
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/users" class="btn btn-dark">Go Back</a>
            </div>
        </div>
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
                                   
                                </div>
                            </div>

                        </div>
                      
                    </div>
                    <div class="card-footer">
                    @if(!Auth::guest())
                        @if (Auth::user()->email=='Maecheenoi3@gmail.com')
                        <div class="container">
                            <div class="row">
                                <div class="col">            
                                    <a class="btn btn-primary" href="/users/{{$user->id}}/edit">Edit</a>
                                </div>
                                <div class="col text-right">
                                    <form action="/users/{{$user->id}}/delete" method="post">
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