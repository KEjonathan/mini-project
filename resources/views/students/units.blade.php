@extends('administrators.layouts.layout')

@section('admin-content')
    <section class="content ml-0">
        <div class="container-fluid">
            <label for="">{{ __('Select Course Unit') }}</label>
            <div class="row">
                
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Unit Name</th>
                          <th>Unit code</th>
                          <th>Acc Year</th>
                          <th>Semester</th>
                          <th>Lecturer</th>
                          <th>Form Link</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($units as $unit)
                            {{-- <option value="{{$unit->id}}">{{ $unit->uname }}</option> --}}
                            <tr>
                                <td>{{$unit->uname}}</td>
                                <td>{{$unit->ucode}}
                                </td>
                                <td>{{$unit->uyear}}</td>
                                <td>{{$unit->sem}}</td>
                                <td>{{__('lecturer')}}</td>
                                <td><a href="{{route('form')}}">Get Form</a></td>
                              </tr>
                        @endforeach
                        
                        </tbody>
                    
                </table>
            </div>
        </div>
    </section>
@endsection
