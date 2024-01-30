{{-- Ziggy --}}
@routes

<!-- Vendor JS -->
<script src="{{ asset('js/vendors.min.js') }}"></script>
<script src="{{ asset('js/pages/chat-popup.js') }}"></script>
<script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/vendor_plugins/jquery-confirm/jquery-confirm.min.js') }}"></script>

<!-- Power BI Admin App -->
<script src="{{ asset('js/template.js') }}"></script>

{{-- Auto Numeric Input Form --}}
<script src="{{ asset('js/autoNumeric-1.7.4.js') }}"></script>

{{-- <-- pignose Calender --> --}}
{{-- <script src="{{ asset('assets/vendor_plugins/pg-calender/js/pignose.calendar.full.min.js') }}"></script> --}}

<!-- Search Fiture -->
<script src="{{ asset('js/search.js') }}"></script>

<!-- Laravel Route -->
@routes

{{-- axios --}}
<script src="{{ asset('assets/vendor_plugins/axios/axios.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


{{-- fontawesome --}}
<script defer src="{{ asset('js/vendor/fontawesome/all.min.js') }}"></script>

<script>
    // Logout function
    function logout() {
        $.confirm({
            icon: 'fa fa-sign-out',
            title: 'Logout',
            theme: 'supervan',
            content: 'Are you sure want to logout?',
            autoClose: 'cancel|8000',
            buttons: {
                logout: {
                    text: 'logout',
                    action: function() {
                        $.ajax({
                            type: 'POST',
                            url: '/logout',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            success: function(data) {
                                location.reload();
                            },
                            error: function(data) {
                                $.alert('Logout Failed!');
                            }
                        });
                    }
                },
                cancel: function() {

                }
            }
        });
    }

    // Delete Function
    function modalDelete(title, name, url, redirect_link) {
        $.confirm({
            title: `Delete ${title}?`,
            content: `Are you sure want to delete ${name}`,
            autoClose: 'cancel|8000',
            buttons: {
                delete: {
                    text: 'delete',
                    action: function() {
                        $.ajax({
                            type: 'POST',
                            url: url,
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: {
                                "_method": 'delete',
                                "_token": "{{ csrf_token() }}"
                            },
                            success: function(data) {
                                window.location.href = redirect_link
                            },
                            error: function(data) {
                                $.alert('Failed!');
                            }
                        });
                    }
                },
                cancel: function() {

                }
            }
        });
    }

    // Detail modal
    function detailModal(title, url, width) {
        $.confirm({
            title: title,
            theme: 'material',
            backgroundDismiss: true, // this will just close the modal
            content: 'URL:' + url,
            animation: 'zoom',
            closeAnimation: 'scale',
            animationSpeed: 400,
            closeIcon: true,
            columnClass: width,
            buttons: {
                close: {
                    btnClass: 'btn-dark font-bold',
                }
            },
        });
    }

    function test(title, name, url) {
        console.log(title, name, url)
    }

    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');
    imgPreview.style.display = 'block';
    image.addEventListener('change', function(e) {

        const blob = URL.createObjectURL(e.target.files[0]);
        imgPreview.src = blob;
        console.log(blob);
    });

    // SELECT 2 SEARCH

    $(".form-select").select2({});
</script>
@stack('scripts')
