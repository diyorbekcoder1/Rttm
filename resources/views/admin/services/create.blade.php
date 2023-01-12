@extends('adminlte::page')

@section('title', __('Create New Service'))

@section('content_header')
    <h1>{{__('Create New Service')}}</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/admin/services') }}" title="Back" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" ></i> {{__('Back')}}</a>
                        <br />
                        <br />

                        <form method="POST" action="{{ url('/admin/services') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('admin.services.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
