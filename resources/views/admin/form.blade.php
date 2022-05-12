@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-12 shadow-md rounded-lg bg-light">
            <div class="card card-primary col-md-6 mx-auto mb-4">

                <div class="card-body">
                    {!! Form::open() !!}
                    <div class="form-group">
{!! Form::label('nom', 'Nom', []) !!}
                        <div class="input-group">

                            <input type="text" name="slug" class="form-control" placeholder="Entrer le selug du produit">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- Date mm/dd/yyyy -->
                    <div class="form-group">
                        <label>Nom:</label>
                        <div class="input-group">

                            <input type="texte" name="nom" class="form-control" placeholder="Entrer le nom du produit">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <div class="input-group">

                            <input type="texte" name="description" class="form-control"
                                placeholder="Entrer la description">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>Prix:</label>
                        <div class="input-group">

                            <input type="number" name="prix" class="form-control">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>Quantité:</label>
                        <div class="input-group">

                            <input type="number" name="quantite" class="form-control">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label>image:</label>
                        <div class="input-group">
                            <input type="file" name="matar" class="form-control">
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group">
                        <label>Active:</label>
                        <div class="input-group">

                            <select name="active" id="" class="form-control">
                                <option value="1">active</option>
                                <option value="0">pas active</option>
                            </select>
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
