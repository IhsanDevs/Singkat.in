<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- JS MIX -->
<script src="{{ mix('js/app.js') }}"></script>


{{-- datatable --}}
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="/assets/js/stisla.js"></script>

<script>
    window.Laravel = {!! json_encode([
    'csrfToken' => csrf_token(),
    'pusherKey' => config('broadcasting.connections.pusher.key'),
    'pusherCluster' => config('broadcasting.connections.pusher.options.cluster'),
]) !!};




    $('.yajra-datatable').DataTable({
        serverSide: true,
        ajax: "{{ route('users.api') }}",
        columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },
        ],

    });
</script>

<!-- Template JS File -->
<script src="/assets/js/scripts.js"></script>
<script src="/assets/js/custom.js"></script>

<!-- Page Specific JS File -->
<script src="/assets/js/main.js"></script>


<!-- Chart JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
