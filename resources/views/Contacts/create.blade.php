@extends('layouts.app3')

@section('content')
           <!-- Contact-->           
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Create Contact</h2>
                    <h3 class="section-subheading text-muted">Contacts must have a name, address, and phone number.</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">                    
                    <div class="row">
                        <div class="col-md-6">
                            
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group text-left">
                                            <label for="firstName" style="font-size: 1.5rem; font-weight: bold;">First Name</label>
                                            <input class="form-control" id="firstName" name="firstName" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter the first name." />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group text-left">
                                            <label for="lastName" style="font-size: 1.5rem; font-weight: bold;">Last Name</label>
                                            <input class="form-control" id="lastName" name="lastName" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter the last name." />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>    
                                <div class="form-group text-left mb-md-0">
                                    <label for="phone" style="font-size: 1.5rem; font-weight: bold;">Phone Number</label>
                                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group text-left mb-md-0">
                                    <label for="street" style="font-size: 1.5rem; font-weight: bold;">Street</label>
                                    <input class="form-control" id="street" type="text" placeholder="Street *" required="required" data-validation-required-message="Please enter the address." />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group text-left mb-md-0">
                                    <label for="apartment" style="font-size: 1.5rem; font-weight: bold;">Apartment</label>
                                    <input class="form-control" id="apartment" type="text" placeholder="Apartment" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <div class="form-group text-left mb-md-0">
                                            <label for="city" style="font-size: 1.5rem; font-weight: bold;">City</label>
                                            <input class="form-control" id="city" type="text" placeholder="City *" required="required" data-validation-required-message="Please enter the city." />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group text-left mb-md-0">
                                            <label for="state" style="font-size: 1.5rem; font-weight: bold;">State</label>
                                            <input class="form-control" id="state" type="text" placeholder="State *" required="required" data-validation-required-message="Please enter the state." />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group text-left mb-md-0">
                                            <label for="zip" style="font-size: 1.5rem; font-weight: bold;">Zip Code</label>
                                            <input class="form-control" id="zip" type="text" placeholder="Zip Code *" required="required" data-validation-required-message="Please enter the zip code." />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>  
                        </div>
                        <div class="col-md-6">
                            <div class="form-group text-left">
                                <label for="email" style="font-size: 1.5rem; font-weight: bold;">Email</label>
                                <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group text-left mb-md-0">
                                    <label for="leadSource" style="font-size: 1.5rem; font-weight: bold;">Lead Source</label>
                                    <input class="form-control" id="leadSource" type="text" placeholder="Lead Source" />
                            </div>
                            <div class="form-group text-left mb-md-0">
                                    <label for="notes" style="font-size: 1.5rem; font-weight: bold;">Notes</label>
                                    <textarea class="form-control" id="notes" placeholder="Notes"></textarea>
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="text-center">
                            <div id="success"></div>
                        </div>
                    </div> 
                    <br />
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="/contacts" class="btn btn-dark btn-xl text-uppercase">Back</a>
                            @csrf
                            <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Create Contact</button>
                        </div>
                    </div>                        
                </form>
            </div>
        </section>
@endsection
