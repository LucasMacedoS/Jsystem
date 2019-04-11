@if (session('error'))

    <script>

        Swal.fire({
            title: 'Erro!',
            text: '{{session('error')}}',
            type: 'error',
            confirmButtonText: 'Ok'
        });

    </script>

@endif