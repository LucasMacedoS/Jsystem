@if (session('success_toast'))

    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        Toast.fire({
            type: 'success',
            title: '{{session('success_toast')}}'
        });
    </script>

@endif
