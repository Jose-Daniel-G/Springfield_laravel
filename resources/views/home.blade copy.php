<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-0">

                @if (Auth::check())
                    {{-- SIDEBAR --}}
                    @include('components.sidebar')
                    {{-- FIN SIDEBAR --}}
                @endif
            </div>
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-12 px-4">
                <div class="card text-center shadow-lg mt-2">
                    <div class="card-header">
                        <h4>Noticia</h4>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row pb-3">
                                @foreach ($posts as $post)
                                    <div class="col-sm-2 mx-auto">
                                        <div class="card" style="width: 10rem;">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group">
                                                    <img style="height: 7rem;" src={{ asset($post->image->url) }}
                                                        class="card-img-top" alt="...">
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
                    </div>
            </main>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
