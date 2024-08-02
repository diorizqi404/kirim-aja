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

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif`
        </div>

        <div class="card">
            <div class="card-header">{{ __('Create New Form') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('form.store') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Nama Form</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                            required autofocus>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Deskripsi</label>
                        <input id="description" type="text" class="form-control" name="form_description"
                            value="{{ old('description') }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Create New Form</button>
                </form>
            </div>
        </div>

        <table class="table table-striped table-bordered mt-5">
            <thead>
                <tr>
                    <th>Nama Form</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Pembuatan</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                {{-- Loop through the forms and display the data --}}
                @foreach ($user as $u)
                    <tr>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->form_description }}</td>
                        <td>{{ $u->created_at }}</td>
                        <td><a href="{{ route('form', ['form_id' => $u->form_id]) }}">Details Form</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $user->links() }}
    </div>
@endsection
