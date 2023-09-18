@extends('main_master')
@section('page_content')
<div class="container mt-5">
    <div class="row">
        @foreach ($others as $other )
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/other/'. $other->image) }}" class="card-img-top" alt="{{ $other->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $other->name ?? '' }}</h5>
                    <div class="truncated-text mb-2" style="max-height: 80px; overflow: hidden;">
                        {!! ($other->description ?? '') !!}
                    </div>

                    <div class="card-text mb-2">Link: <a href="{{ $other->url }}">{{ $other->url }}</a></div>
                    <div class=" d-flex justify-content-end"> <!-- Added this line to align to the right -->
                        @if (strlen(strip_tags($other->description)) > 160)
                            <a href="{{ route('others.frontend.show',$other->id) }}">Read More</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<style>
    .truncated-text {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* Show only 2 lines */
        -webkit-box-orient: vertical;
    }
</style>
<!-- Add Bootstrap JS and jQuery (optional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        $('.view-more').click(function () {
            $(this).toggleClass('collapsed');
            if ($(this).hasClass('collapsed')) {
                $(this).text('View More');
            } else {
                $(this).text('View Less');
            }
        });
    });
</script>

@endsection
