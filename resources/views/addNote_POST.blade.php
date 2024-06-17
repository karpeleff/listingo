@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"> JUST  POST </div>
            <div class="card-body">
                <div class="form-group ">
                    <input  type="text" class="form-control  "  placeholder="Name" />
                </div>
                <div class="form-group">
                    <input   type="text" class="form-control"  placeholder="Contact" />
                </div>
                <div class="form-group ">
                    <input    type="text" class="form-control  "  placeholder="Text" />
                </div>
                <div class="form-group ">

                    <input   type="text" class="form-control  "  placeholder="img" />
                </div>
                <button class="btn btn-sm btn-primary   ">Post Data</button>
                <button class="btn btn-sm btn-warning  ">Clear</button>

            </div>
        </div>
    </div>
@endsection
