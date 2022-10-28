@extends('administrators.layouts.layout')

@section('admin-content')
    <section class="content ml-0">
        <div class="container-fluid">
            <label for="">{{ __('Select Report To view') }}</label>
            <div class="row">
                <form action="/report" method="post">
                    @csrf
                    <select name="id" id="id" class="form-control">
                        @foreach ($formdata as $formd)
                            <option value="{{$formd->unit_id}}">{{ $formd->unit_id}}</option>
                        @endforeach
                    </select>
                    <select name="col" id="col" class="form-control">
                        
                            <option value="q1">q1</option>
                            <option value="q2">q2</option>
                            <option value="q3">q3</option>
                            <option value="q4">q4</option>
                            <option value="q5">q5</option>
                            <option value="q6">q6</option>
                            <option value="q7">q7</option>
                        
                    </select>
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary mt-1 ml-0">
                                {{ __('Get') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection