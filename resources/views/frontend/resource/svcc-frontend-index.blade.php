@extends('main_master')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@section('page_content')
<div class="container mt-5">
    <div class="row g-4">
       @foreach ($svccs as $svcc )
       <div class="col-md-4 mb-4">
        <div class="p-2 border">
            <a href="#" data-toggle="modal" data-target="#imageModal{{ $svcc->id }}">
                <img class="img-fluid" src="{{ asset('storage/svcc/'. $svcc->image) }}" alt="{{ $svcc->name }}">
            </a>
        </div>
        </div>

        <!-- Bootstrap Modal -->
        <div class="modal fade" id="imageModal{{ $svcc->id }}" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel{{ $svcc->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel{{ $svcc->id }}">{{ $svcc->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img class="img-fluid" src="{{ asset('storage/svcc/'. $svcc->image) }}" alt="{{ $svcc->name }}">
                    </div>
                </div>
            </div>
        </div>
       @endforeach
    </div>
    {{ $svccs->links('pagination::bootstrap-4') }}
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
