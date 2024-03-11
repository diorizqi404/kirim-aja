@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8"></div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>        
        <table class="table table-striped table-bordered">
            <h5 class="mt-5">Total Messages: {{ count($form_data) }}</h5>
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    <th>IP Address</th>
                    <th>Date Receive</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- Loop through the forms and display the data --}}
                @foreach ($form_data as $f)
                    <tr>
                        <td>{{ $f->fullname }}</td>
                        <td>{{ $f->email }}</td>
                        <td>{{ $f->phone }}</td>
                        <td>{{ $f->message }}</td>
                        <td>{{ $f->ip_address }}</td>
                        <td>{{ $f->created_at }}</td>
                        <td>
                            <form method="POST" action="{{ route('form.data-delete', ['id' => $f->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $form_data->links() }}

        <div class="card">
            <div class="card-body">
                <h1>Cara Integrasi:</h1>
                <div class="">
                    <h5>1. Tambahkan url dibawah pada atribut <b>action</b> di form kamu</h5>
                    <code class="fs-5">{{ 'https://' . $domain . '/' . 'send/' . $form->form_id }}</code>
                </div>
                <div class="mt-4">
                    <h5>2. Set atribut <b>name</b> pada tag input di form kamu</h5>
                    <ul class="fs-5">
                        <li><code>name="fullname"</code></li>
                        <li><code>name="email"</code></li>
                        <li><code>name="phone"</code></li>
                        <li><code>name="message"</code></li>
                    </div>
                    <div class="mt-5">
                    <h5 class="mb-3">Atau Gunakan Template dibawah ini:</h5>
                    <code>
<pre>
&lt;form method="POST" action="{{ 'https://' . $domain . '/' . 'send/' . $form->form_id }}"&gt;
&lt;label for="fullname"&gt;Full Name:&lt;/label&gt;
&lt;input type="text" id="fullname" name="fullname" required&gt;
&lt;br&gt;&lt;br&gt;
                            
&lt;label for="email"&gt;Email:&lt;/label&gt;
&lt;input type="email" id="email" name="email" required&gt;
&lt;br&gt;&lt;br&gt;
                            
&lt;label for="phone"&gt;Phone:&lt;/label&gt;
&lt;input type="tel" id="phone" name="phone" required&gt;
&lt;br&gt;&lt;br&gt;
                            
&lt;label for="message"&gt;Message:&lt;/label&gt;
&lt;textarea id="message" name="message" required&gt;&lt;/textarea&gt;
&lt;br&gt;&lt;br&gt;
                            
&lt;button type="submit" value="Submit"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre>
                    </code>
                </div>
            </div>
            
        </div>


    </div>
@endsection
