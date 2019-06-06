@if (session('success'))

    <script>

        Swal.fire({
            title: 'Sucesso!',
            text: '{{session('success')}}',
            type: 'success',
            confirmButtonText: 'Ok'
        });

    </script>

@endif