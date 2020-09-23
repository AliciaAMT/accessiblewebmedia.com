@extends('layouts.app3')

@section('content')
        
        <!-- Services-->
        <section class="page-section" id="contacts">
            <div class="container">
                <div class="text-center">                    
                    <h1 class="section-heading text-uppercase">Users</h1>
                    <h2 class="section-subheading text-muted">Users and Roles</h2>
                </div>
                    <table class="table table-dark table-responsive">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>                
                        @forelse($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><a class="text-white" href="/users/{{$user->id}}">
                                    {{$user->name}}
                                </a></td>
                                <td>
                                    @if(!$user->phone)
                                    None Provided
                                    @else
                                    <a class="text-white" href="/users/{{$user->id}}">
                                    {{ $user->phone }}
                                    </a>
                                    @endif
                                </td>
                                <td> 
                                    @if(!$user->street)
                                    None Provided
                                    @else
                                    <a class="text-white" href="/users/{{$user->id}}">
                                    {{ $user->street }} {{ $user->city }}, {{ $user->state }} {{ $user->zip}}
                                    @endif
                                </a></td>
                                <td><a class="text-white" href="/users/{{$user->id}}">
                                    {{ $user->email }}
                                </a></td>
                                <td>
                                    @if(!$user->role)
                                    None Assigned
                                    @else
                                    <a class="text-white" href="/users/{{$user->id}}">
                                    {{ $user->role }}
                                    </a>
                                    @endif
                                </td>
                            </tr>
                        
                        @empty
                            <tr>
                                <td><p>No users to show.</p></td>
                            </tr>

                        @endforelse
                        </tbody>
                    </table>
                    <br />
                    <a class="btn btn-dark" href="../admin">Back</a> <a class="btn btn-dark" href="/users/create">Add User</a>
                
            </div>
        </section>

@endsection
