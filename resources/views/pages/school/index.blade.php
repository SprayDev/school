@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="table">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-xs-6">
                            <h2>Schools</h2>
                        </div>
                        <div class="offset-5 col-xs-2">
                            <a href="/schools/create" class="btn btn-success"><span>Новая школа</span></a>
{{--                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>--}}
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>website</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($schools as $school)
                        <tr>
                            <td><img src="{{asset($school->logo)}}"></td>
                            <td>{{$school->name}}</td>
                            <td>{{$school->email}}</td>
                            <td>{{$school->website}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="clearfix">
                    {{ $schools->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
