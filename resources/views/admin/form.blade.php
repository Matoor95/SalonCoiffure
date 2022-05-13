@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-12 shadow-md rounded-lg bg-light">
            <div class="card card-primary col-md-6 mx-auto mb-4">

                <div class="card-body">
                    {!! Form::open(['route'=>'admin.store']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nom', []) !!}
                        <div class="input-group">

                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- Date mm/dd/yyyy -->
                    <div class="form-group">
                        {!! Form::label('email', 'Email', []) !!}

                        <div class="input-group">

                            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        {!! Form::label('tel', 'Téléphone', []) !!}

                        <div class="input-group">

                            {!! Form::tel('tel', null, ['class' => 'form-control']) !!}
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        {!! Form::label('date', 'Date', []) !!}

                        <div class="input-group">
                            {!! Form::date('date', null, ['class' => 'form-control']) !!}


                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        {!! Form::label('heure', 'Heure', []) !!}
                        <div class="input-group">

                            {!! Form::time('heure', null, ['class' => 'form-control']) !!}
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        {!! Form::label('service', 'service', []) !!}
                        <div class="input-group">

                            {!! Form::select('service', $service, null, ['class'=> 'form-control']) !!}
                        </div>
                        <!-- /.input group -->
                    </div>


                    <button class="btn btn-success " type="submit">Ajouter</button>
                </div>

                {!! Form::close() !!}
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
