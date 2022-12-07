<script src="{{ asset('assets/js/codebase.core.min.js') }}"></script>
<script src="{{ asset('assets/js/codebase.app.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/chartjs/Chart.bundle.min.js') }}"></script>
{{-- datatable --}}
<script src="{{asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
{{-- end datatable --}}
{{-- Swal --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- End Swal --}}

<!-- Summernote -->
<script src="{{asset('assets/js/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{ asset('assets/js/pages/be_pages_ecom_dashboard.min.js') }}"></script>
<script>
    $.ajaxSetup({
     headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
   });
</script>