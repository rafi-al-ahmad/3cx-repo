@if(session()->has('errors'))
@foreach (session('errors')->all() as $msg)

<script>
    $(window).on('load', function() {
        toastr.error("{{ $msg }}");
    });
</script>
@endforeach
{{session()->forget('errors')}}
@endif

@if(session()->has('info'))
@if(is_array(session('info')))
@foreach (session('info')->all() as $msg)
<script>
    $(window).on('load', function() {
        toastr.info("{{ $msg }}");
    });
</script>
@endforeach
@else
<script>
    $(window).on('load', function() {
        toastr.info("{{ session('info') }}");
    });
</script>
@endif
{{session()->forget('info')}}
@endif

@if(session()->has('success'))
@if(is_array(session('success')))
@foreach (session('success')->all() as $msg)
<script>
    $(window).on('load', function() {
        toastr.success("{{ $msg }}");
    });
</script>
@endforeach
@else
<script>
    $(window).on('load', function() {
        toastr.success("{{ session('success') }}");
    });
</script>
@endif
{{session()->forget('success')}}
@endif


@if(session()->has('warning'))
@if(is_array(session('warning')))
@foreach (session('warning')->all() as $msg)
<script>
    $(window).on('load', function() {
        toastr.warning("{{ $msg }}");
    });
</script>
@endforeach
@else
<script>
    $(window).on('load', function() {
        toastr.warning("{{ session('warning') }}");
    });
</script>
@endif
{{session()->forget('warning')}}
@endif

<!-- <script>
    $(".alert").delay(15000).slideUp(200, function() {
        $(this).alert('close');
    });
</script> -->