@extends('layouts.app')

@section('content')

    <main>



        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    @foreach ($posts as $post)

                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail" preserveaspectratio="xMidYMid slice" role="img" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                                <div class="card-body">
                                    <p class="card-text">{{ $post->text }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a  class="btn btn-sm btn-outline-secondary"
                                                href="https://wa.me/{{$post->contact}}"
                                               target="_blank" title="Написать в Whatsapp"
                                               rel="noopener noreferrer">WhatsApp</a>

                                            <a href="tel:{{$post->contact}}" class="btn btn-sm btn-outline-secondary">Позвонить</a>
                                        </div>
                                        <small class="text-muted">здесь какойто текст </small>
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
