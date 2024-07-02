@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"> Добавить Контакт </div>
            <div class="card-body">
                <div class="form-group   ">
                    <form  action="{{ route('store') }}"  method="post"  >

                        {{ csrf_field() }}
                        <input  type="text"  name="name"  class="form-control m-2 "  placeholder="Name" />

                <div class="form-group">
                    <input   type="text"  name="contact" class="form-control  m-2 "  placeholder="Contact" />
                </div>
                <div class="form-group ">
                    <input    type="text"  name="text" class="form-control m-2 "  placeholder="Text" />
                </div>
                        <div class="form-group ">



                            <select class="form-select m-2  " aria-label="Default select example "  name="location"  >
                                <option selected  value="Район"  >Район</option>
                                <option value="Рощино">Рощино</option>
                                <option value="Крутой Яр">Крутой Яр</option>
                                <option value="Восток">Восток</option>
                                <option value="Вострецово">Вострецово</option>
                                <option value="Новопокровка">Новопокровка</option>


                            </select>


                        </div>
                <div class="form-group ">

                    <input   type="text"   name="img" class="form-control m-2 "  placeholder="img"   value="pic"  />
                </div>
                <button type="submit" class="btn btn-primary m-2  ">
                   Сохранить
                </button>

                    </form>


            </div>
        </div>
    </div>
@endsection
