@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>Users Role</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Edit User Role</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">

        <div class="col-xl-12">
            <div class="card">
                <div class="card-body pt-3">

                    <div class="tab-content pt-2">
                        <form action="{{ route('roles.update', $role->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="pt-3">

                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-3 col-form-label">User Role</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input class="form-control" type="text" value="{{ $role->name }}" readonly>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-3 col-form-label">Permissions</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select id="select_permissions" name="permissons[]" placeholder="Select Permissons..." autocomplete="off" class="form-control" multiple>
                                            @foreach($permissions as $permissions)
                                            <option value="{{ $permissions['id'] }}" {{ in_array($permissions->id, $rolePermissions) ? 'selected' : false }}>{{ $permissions['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div style="float: right;">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
<script>
    new TomSelect('#select_permissions', {
        maxItems: 10,
    });
</script>
@endsection