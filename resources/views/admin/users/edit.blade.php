@extends('admin.layouts.master')
@section('content')
    <style>

    </style>
    <div class="pagetitle">
        <h1>user</h1>
        <nav style="display: flex;justify-content: space-between;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                <li class="breadcrumb-item active">user</li>
            </ol>
            <a href="{{ route('users.index') }}" class="btn btn-outline-primary">Back</a>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('users.update', $user) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Update</h3>
                                        @include('components.alerts')
                                    </div>
                                </div>
                            </div>
                            @include('admin.layouts.forms.user', ['user' => $user])
                            <div class="mt-5">
                                <button type="submit" class="btn btn-primary rounded-0"> <i class="bi bi-save"></i>
                                    Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
