@extends('layouts.master')

@section('content')
<section class="bodyc">
    <div class="container-fluid">

        <div class="pagetitle">
            <h1>Users</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">All Users</li>
                </ol>
            </nav>
        </div>
        <section class="section profile">
            <div class="row">

                <div class="col-xl-12">

                    <div class="card">


                        <div class="card-body pt-3">
                            <a class="btn btn-primary float-right" href="{{ route('user.create') }}">Add User</a>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name}}</td>
                                        <td>{{ $user->email}}</td>
                                        <td>{{ $user->getRoleNames()->first()}}</td>
                                        <td>
                                            <a href="{{ route('user.edit', $user->id) }}"><i class="fa fa-edit"></i></a>
                                            <form class="user_delete" action="{{ route('user.delete', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button  type="submit"><i class="fa fa-trash" onclick="return confirm('Are you sure?')"></i></button>
                                            </form>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
</section>




@endsection