<div class="row">
    <div class="col">
        <div class="card card-statistic-2">
            <form method="POST" action="{{ route('cut.store') }}">
                @csrf
                <div class="input-group text-primary"><input name="url" placeholder="https://your-link-is-very-long.com/"
                        class="form-control" type="url" /><button class="btn btn-primary" type="submit">Short</button>
                </div>
            </form>
        </div>
    </div>
</div>
