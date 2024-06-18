@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"> Добавить Контакт </div>
            <div class="card-body">
                <div class="form-group ">
                    <form  action="{{ route('store') }}"  method="post"  >
                        {{ csrf_field() }}
                        <input  type="text"  name="name"  class="form-control  "  placeholder="Name" />

                <div class="form-group">
                    <input   type="text"  name="contact" class="form-control"  placeholder="Contact" />
                </div>
                <div class="form-group ">
                    <input    type="text"  name="text" class="form-control  "  placeholder="Text" />
                </div>
                <div class="form-group ">

                    <input   type="text"   name="img" class="form-control  "  placeholder="img" />
                </div>
                <button type="submit" class="btn btn-primary">
                   Сохранить
                </button>

                    </form>


            </div>
        </div>
    </div>
@endsection
