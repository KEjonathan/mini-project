@extends('administrators.layouts.layout')

@section('admin-content')
    <section class="content ml-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Add
                                        Department</a></li>

                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit
                                        Department</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#deletes" data-toggle="tab">Delete
                                        Department</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <form class="form-horizontal" action="/reg3" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="department" class="col-sm-2 col-form-label">Dep Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Department Name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="hod" class="col-sm-2 col-form-label">HOD</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="hod" name="hod"
                                                    placeholder="HOD">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="faculty" class="col-sm-2 col-form-label">Faculty</label>
                                            <div class="col-sm-10">
                                                <select name="faculty_id" id="faculty_id" class="form-control">
                                                    @foreach ($faculties as $faculty)
                                                        <option value="{{ $faculty->id }}">{{ $faculty->fname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->

                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Faculty ID</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName" placeholder="ID">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Faculty Name</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail"
                                                    placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Departments</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName2"
                                                    placeholder="Department">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 col-form-label">Faculties</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="" id="" class="form-control"
                                                    placeholder="Faculty">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">HOF</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSkills"
                                                    placeholder="HOF">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="deletes">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Faculty ID</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName"
                                                    placeholder="ID">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Faculty Name</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail"
                                                    placeholder="Name">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">HOF</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSkills"
                                                    placeholder="HOF">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
