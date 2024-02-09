<style>
    body {
        background: -webkit-linear-gradient(left, #6e222c, #4a0c12);
        background-image: url('{{ url('/storage/abc.jpg') }}');
    }

    .emp-profile {
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
        background-color: #f8f9fab0;
        box-shadow: 0px 5px 23px black;
    }

    .profile-img {
        text-align: center;
    }

    .profile-img img {
        width: 50%;
        height: 70%;
        border-radius: 21%;
    }

    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 50%;
        border: none;
        border-radius: 21%;
        font-size: 15px;
        background: #212529b8;
    }

    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }

    .profile-head h5 {
        text-shadow: 0px 4px 6px #818182;
        font-size: 40px;
        color: #333;
    }

    .profile-head h6 {
        color: #0062cc;
    }

    .profile-edit-btn {
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }

    .proile-rating {
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }

    .proile-rating span {
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }

    .profile-head .nav-tabs {
        margin-bottom: 5%;
    }

    .profile-head .nav-tabs .nav-link {
        font-weight: 600;
        border: none;
    }

    .profile-head .nav-tabs .nav-link.active {
        border: none;
        border-bottom: 2px solid #0062cc;
    }

    .profile-work {
        padding: 14%;
        margin-top: -15%;
    }

    .profile-work p {
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }

    .profile-work a {
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }

    .profile-work ul {
        list-style: none;
    }

    .profile-tab label {
        font-weight: 600;
    }

    .profile-tab p {
        font-weight: 600;
        color: #0062cc;
    }
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
    <div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a class="btn btn-success" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </a>

        </form>

    </div>
    <form method="post">
        <div class="row">
            <div class="col-md-4">

                <div class="profile-img"style="">
                    <img src="{{ asset('storage/profile/' . auth()->user()->profile->image) }}" alt="" />

                </div>
               
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        {{ auth()->user()->name }}
                    </h5>
                    <h6 style="margin-bottom: 8rem;">


                    </h6>




                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">About</a>

                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Website</a> -->
                        </li>
                    </ul>
                </div>
            </div>



        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <a
                        href="{{ url('/') }}"class="btn btn-primary"style="width: 15rem;box-shadow: 0px 2px 6px #000000cc;background-color: rgb(0 0 0 / 0%);border-color: rgb(0 0 0 / 8%);">Home
                    </a><br></br>
                    <a href=""class="btn btn-primary"style="margin-right:8rem;width: 15rem;box-shadow: 0px 2px 6px #000000cc;background-color: rgb(0 0 0 / 0%);border-color: rgb(0 0 0 / 8%);"
                        class="profile-edit-btn">Edit Profile</a><br></br>




                    <a
                        href=""class="btn btn-primary"style="width: 15rem;box-shadow: 0px 2px 6px #000000cc;background-color: rgb(0 0 0 / 0%);border-color: rgb(0 0 0 / 8%);">
                        My Cart list</a><br></br>

                    <a
                        href=""class="btn btn-primary"style="width: 15rem;box-shadow: 0px 2px 6px #000000cc;background-color: rgb(0 0 0 / 0%);border-color: rgb(0 0 0 / 8%);">My
                        Order list</a><br></br>
                    @can('admin')
                        <a
                            href="{{ route('home') }}"class="btn btn-primary"style="width: 15rem;box-shadow: 0px 2px 6px #000000cc;background-color: rgb(0 0 0 / 0%);border-color: rgb(0 0 0 / 8%);">
                            Admin Deshboard</a><br></br>
                    @endcan


                </div>

            </div>

            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ auth()->user()->name }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>phone</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ auth()->user()->profile->phone }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Date of Birth</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ auth()->user()->profile->birthday }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Gender</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ auth()->user()->profile->gender }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>National Identity Card</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ auth()->user()->profile->nid }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Address</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ auth()->user()->profile->address }}</p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>

</div>

</form>

</div>
