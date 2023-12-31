@extends('main_master')

@section('page_content')
    <div class="container p-5">
        <div class="row justify-content-center align-content-center">
            @for ($i = 1; $i <= 8; $i++)
                <div class="col-md-4 pb-3">
                    <div class="w-100">
                        <iframe class="w-100" src="https://www.youtube.com/embed/S4JeR-npbTI?si=6v1lKwplvEDVHy6B"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            @endfor

        </div>
    </div>
@endsection
