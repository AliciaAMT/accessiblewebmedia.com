@extends('layouts.app3')

@section('content')
        <!-- Services-->
        <section class="page-section" id="contacts">
            <div class="container">
                <div class="text-center">                   
                    <h1 class="section-heading text-uppercase">Contacts</h1>
                    <h2 class="section-subheading text-muted">Contacts and Quote Requests</h2>
                </div>
                    <table class="table table-dark table-responsive">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>                
                        @forelse($contact as $contact)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->message }}</td>
                            </tr>
                        
                        @empty
                            <tr>
                                <td><p>No contacts to show.</p></td>
                            </tr>

                        @endforelse
                        </tbody>
                    </table>
                    <br />
                    <a class="btn btn-dark" href="/contacts/create">Add Contact</a>
                
            </div>
        </section>

@endsection
