@if(Session::has('flash_message'))
    <script>
        swal({
            title: "{!! Session::pull('flash_message.title') !!}",
            text: "{!! Session::pull('flash_message.text') !!}",
            type: "{!! Session::pull('flash_message.type') !!}",
            timer: 1500,
            showConfirmButton: false,
        });
        {{ Session::forget('flash_message') }}
    </script>
@endif