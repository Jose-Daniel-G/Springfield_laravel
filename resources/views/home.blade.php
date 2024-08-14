@extends('layouts.app')
<style>
    .rating {
        display: flex;
        margin-top: -10px;
        flex-direction: row-reverse;
        margin-left: -4px;
        float: left;
    }

    .rating>input {
        display: none
    }

    .rating>label {
        position: relative;
        width: 19px;
        font-size: 25px;
        color: #ff0000;
        cursor: pointer;
    }

    .rating>label::before {
        content: "\2605";
        position: absolute;
        opacity: 0
    }

    .rating>label:hover:before,
    .rating>label:hover~label:before {
        opacity: 1 !important
    }

    .rating>input:checked~label:before {
        opacity: 1
    }

    .rating:hover>input:checked~label:before {
        opacity: 0.4
    }
</style>
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Bienvenido al Dashboard</h1>
            </div>

            @foreach ($posts as $post)
                <div class="col-sm-2 mx-auto">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group">
                                <img style="height: 7rem;" src={{ asset($post->image->url) }} class="card-img-top"
                                    alt="...">
                            </li>
                            <li class="list-group-item">
                                <h6 class="card-title">{{ $post->title }}</h6>
                            </li>
                            <li class="list-group-item">
                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal-{{ $post->id }}">Ver Noticia</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Modal BUSCAR -->
                @include('posts.modal.show')
            @endforeach
        </div>
    </div>
@endsection
