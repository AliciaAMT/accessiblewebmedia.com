@extends('layouts.app3')

@section('content')

@if (Auth::user()->email=='Maecheenoi3@gmail.com')
<br /><br /><br /><br />
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br />
                    <a class="btn btn-primary" href="/users">Users</a>   <a class="btn btn-primary" href="/contacts">Contacts</a> 
                </div>
            </div>
        </div>
    </div>
</div>
@else
<br /><br /><br /><br />
Not authorized!
@endif


@endsection
