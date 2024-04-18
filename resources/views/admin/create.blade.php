<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="container text-center">
        <br>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 text-gray-900">
                    <h1>Criar Conteúdo</h1>
                </div>
                <div class="container">
                    <main>

                        <div class="row g-5">

                            <div class="modal-content rounded-4 shadow">



                                <form action="{{ route('admin.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3">


                                        <div>
                                            <label for="firstName" class="form-label">Título do Conteúdo:</label>
                                            <input type="text" name="nome" class="form-control" id="firstName" placeholder="Título do Conteúdo">

                                        </div>

                                        <div>
                                            <label for="firstName" class="form-label">Sinopse do Conteúdo:</label>
                                            <input type="text" name="sinopse" class="form-control" id="firstName" placeholder="Sinopse do Conteúdo">

                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Texto do Conteúdo:</label>
                                            <textarea type="text" name="conteudo" class="form-control" id="exampleFormControlTextarea1" placeholder="Texto do Conteúdo"></textarea>

                                        </div>

                                        <!-- <div class="mb-3">
                                            <label for="formFile" class="form-label">img</label>
                                            <input class="form-control" id="image" name="imagem" type="file" id="formFile">
                                        </div> -->

                                        <button class="w-100 btn btn-primary btn-lg" type="submit">Criar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
</x-app-layout>