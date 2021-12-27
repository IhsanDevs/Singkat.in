@php
$totalClicks = 0;

foreach ($links->shortUrl as $link => $value) {
    $totalClicks += $value->track_visits;
}

@endphp


<div class="row">
    <div class="col-12 col-md-4">
        <div class="card card-statistic-2 rounded-3">
            <div class="card-body">
                <h6 class="text-muted"><i class="fa fa-link p-2 bg-info rounded-circle text-light"></i> Total
                    Link</h6>
                <h4 class="offset-1">{{ $links->ShortUrl->count() }}</h4>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="card card-statistic-2 rounded-3">
            <div class="card-body">
                <h6 class="text-muted"><i
                        class="fa fa-hand-pointer p-2 bg-light rounded-circle text-success"></i> Total
                    Visitor</h6>
                <h4 class="offset-1">{{ $totalClicks }}</h4>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="card card-statistic-2 rounded-3">
            <div class="card-body">
                <h6 class="text-muted"><i class="fa fa-ban p-2 bg-danger rounded-circle text-light"></i> Total
                    Blocked Link</h6>
                <h4 class="offset-1">200</h4>
            </div>
        </div>
    </div>
</div>
