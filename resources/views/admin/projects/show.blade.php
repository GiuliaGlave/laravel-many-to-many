@extends('layouts.app')


@section('title', 'Project Details')

@section('content')

<div class="container text-dark">
    <div class="d-flex justify-content-between">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary my-4">Torna ai progetti</>
        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary my-4">Modifica</a>
    </div>
     
    <div class="card">
        <div class="card-body my-2">
            {{-- title --}}
            <h5 class="card-title my-2"><strong>Titolo:</strong> {{ $project->title }}</h5>
           {{-- slug --}}
            <h6 class="card-subtitle mb-2 my-2"><strong> Slug:</strong>
                {{ $project->slug }}
            </h6>

            {{-- thumbnail --}}
            <div class="row">
                <div class="col col-6 p-0">
                    <img class="w-100" src="{{$project->getPlaceholder()}}" alt="anteprima">
                </div>
            
                <div class="col col-6 p-3">
                    {{-- types --}}
                    <h6><strong>Categoria: </strong><span class="badge ms-1" style="background-color:{{$project->type?->color}}"> {{ $project->type?->label }}</span></h6>
                    {{-- technologies --}}
                    <h6><strong>Tecnologie: </strong><span class="badge ms-1 text-dark"> 
                        @forelse ($project->technologies as $technology)
                        {{ $technology?->label }}
                        {{-- per levare la virgola all'ultimo elemento --}}
                        @if(!$loop->last) ,  @endif 
                        @empty
                        -
                        @endforelse </span></h6>
                    {{-- details --}}
                    <h6><strong>Descrizione:</strong></h6>
                    <p class="card-text">{{ $project->details }}</p>
                </div>

            
            </div>
        </div>
    </div>
</div>
@endsection