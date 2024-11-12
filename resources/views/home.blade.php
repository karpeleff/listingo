@extends('layouts.app')

@section('content')
    <main>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    @foreach ($posts as $post)

                        <div class="col">
                            <div class="card shadow-sm">
                                <img
                                    class="fit-picture"
                                    src=" {{ asset('img/logo.png')}}"
                                    alt="Grapefruit slice atop a pile of other slices" />


                                <div class="card-body">
                                    <p class="card-text">{{ $post->name }}</p>
                                    <p class="card-text">{{ $post->text }}</p>
                                    <p class="card-text">{{ $post->location }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a  class="btn btn-sm btn-outline-secondary"
                                                href="https://wa.me/{{$post->contact}}"
                                               target="_blank" title="Написать в Whatsapp"
                                               rel="noopener noreferrer">WhatsApp</a>

                                            <a href="tel:{{$post->contact}}" class="btn btn-sm btn-outline-secondary">Позвонить</a>
                                            @role('Admin')

                                            <a href="del/{{$post->id}}" class="btn btn-sm btn-outline-secondary">Удалить</a>
                                                @endrole


                                        </div>
                                        <small class="text-muted">тел:{{$post->contact}} </small>
                                    </div>


                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </main>
@endsection
