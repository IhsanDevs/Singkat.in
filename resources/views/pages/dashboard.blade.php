@extends('layouts.app')

@section('container')

    {{-- Create new short link --}}
    @include('partials.create_shortURL')

    @include('partials.data_statistics')

    {{-- Start statistic --}}
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p>
                                Hi {{ Auth::user()->name }}. Below are statistics on the total clicks on short links that
                                you
                                created this month.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">

                            {!! $chart->render() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
