@php
$errorTypes = ['info', 'success', 'warning', 'danger'];
@endphp

@foreach ($errorTypes as $type)
    @if (Session::get($type))
        <div class="row">
            <div class="col">
                <div class="alert alert-{{ $type }} alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                        {!! Session::get($type) !!}
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach

@if ($errors->any())
    <div class="row">
        <div class="col">
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>×</span>
                    </button>
                    <strong>Oups..</strong>
                    <hr>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif
