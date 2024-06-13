@extends('layout.v_template')
@section('content')
<section class="content">

<section class="content container-custom">
    <div class="container-fluid">
        <div class="">
            <!-- left column -->
           



            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Update Profile</h3>
                    </div>

                    <form id="user" action="{{ url('/Settings/updateData') }}" method="post">
                        @csrf
                       

                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" value="{{ $username }}" placeholder="Nama" name="username">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ $email }}">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


   
</section>
@endsection