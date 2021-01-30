<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4>My Profile</h4>
                        <form method="POST" action="{{action('Admin\Manage_profileController@update_profile')}}">
                            @csrf
                            <input type="hidden" value="{{ Auth::user()->id}}" name="id">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->name}}" name="name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->email}}" name="email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->password}}" name="password">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Department</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->department}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Account Type</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->accountType}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Student Id</label>
                                        <input type="text" class="form-control" value="" name="stdID">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        
                                    <button class="btn btn-primary">Update profile</button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="" alt="">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>