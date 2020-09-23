@extends('layouts.app4')

@section('content')
           <!-- Edit-->
           <section class="page-section" id="edit">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Edit User</h2>
                    <h3 class="section-subheading text-muted">Edit and Assign Roles</h3>
                </div>
                <form id="editUserForm" name="editUserForm" novalidate="novalidate" method="POST" action="/users/{{ $user->id }}">
                    <input type="hidden" name="_method" value="PATCH">
                    @csrf
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group text-left">
                                <label for="role" style="font-size: 1.5rem; font-weight: bold;">Role</label>
                            <select class="form-control" name="role" id="role" required="required" data-validation-required-message="Please choose a role.">
                                    <option value="" 
                                    @if(!$user->role)
                                        selected="selected" 
                                    @endif
                                    >None Assigned</option>
                                    <option value="Customer" 
                                    @if($user->role == "Customer")
                                        selected="selected" 
                                    @endif
                                    >Customer</option>
                                    <option value="Employee"
                                    @if($user->role == "Employee")
                                        selected="selected" 
                                    @endif
                                    >Employee</option>
                                    <option value="Administrator"
                                    @if($user->role == "Administrator")
                                        selected="selected" 
                                    @endif
                                    >Administrator</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group text-left">
                                <label for="name" style="font-size: 1.5rem; font-weight: bold;">Name</label>
                                <input class="form-control" id="name" name="name" type="text" value="{{ $user->name }}" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group text-left">
                                <label for="email" style="font-size: 1.5rem; font-weight: bold;">Email</label>
                                <input class="form-control" id="email" name="email" type="email" value="{{ $user->email }}" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group text-left mb-md-0">
                                <label for="phone" style="font-size: 1.5rem; font-weight: bold;">Phone Number</label>
                                <input class="form-control" name="phone" id="phone" type="tel" value="{{ $user->phone }}" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group text-left mb-md-0">
                                <label for="street" style="font-size: 1.5rem; font-weight: bold;">Street</label>
                                <input class="form-control" id="street" name="street" type="text" value="{{ $user->street }}" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group text-left mb-md-0">
                                <label for="apartment" style="font-size: 1.5rem; font-weight: bold;">Apartment</label>
                                <input class="form-control" id="apartment" name="apartment" type="text" value="{{ $user->apartment }}" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group text-left mb-md-0">
                                <label for="city" style="font-size: 1.5rem; font-weight: bold;">City</label>
                                <input class="form-control" id="city" name="city" type="text" value="{{ $user->city }}" />
                                <p class="help-block text-danger"></p>
                            </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group text-left mb-md-0">
                                            <label for="state" style="font-size: 1.5rem; font-weight: bold;">State</label>
                                            <input class="form-control" name="state" id="state" type="text" value="{{ $user->state }}" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group text-left mb-md-0">
                                            <label for="zip" style="font-size: 1.5rem; font-weight: bold;">Zip Code</label>
                                            <input class="form-control" id="zip" name="zip" type="text" value="{{ $user->zip }}" />
                                            <p class="help-block text-danger"></p>                              
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        
                        <a href="/users" class="btn btn-dark btn-xl text-uppercase">Back</a>
                        <button class="btn btn-primary btn-xl text-uppercase" id="editUserButton" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </section>
@endsection
