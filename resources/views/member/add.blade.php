@extends('template')

@section('main')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="/member" class="btn btn-primary float-left" style="margin-right: 1rem;">Back</a>
                    <h3>Add Member</h3>
                </div>
            </div>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-lg-6 col-md-6 col-sm-12 offset-lg-3 offset-md-3">
                <form action="/member" method="post">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        {!! Form::label('name', 'Name', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('job', 'Job', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('job', '', ['class' => 'form-control', 'placeholder' => 'Job']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('age', 'Age', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::number('age', '', ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('address', 'Address', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::textarea('address', '', ['class' => 'form-control', 'placeholder' => 'Address', 'rows' => '3']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-block']) !!}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection