@extends('administrators.layouts.layout')

@section('admin-content')
    <section class="content ml-0">
        <div class="container-fluid">
            <label for="">{{ __('Select your Program') }}</label>
            <div class="row">
                <form action="/getform" method="post">
                    @csrf
                    <select name="form_type" id="form_type" class="form-control">
                        @foreach ($courses as $course)
                            <option value="{{$course->id}}">{{ $course->cname }}</option>
                        @endforeach
                    </select>
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary mt-1 ml-0">
                                {{ __('Get Form') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
