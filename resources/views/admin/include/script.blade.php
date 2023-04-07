<!-- JavaScript Library -->
<script src="{{ asset('assets/admin/js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  

<!-- Popper JS and Bootstrap JS -->
<script src="{{ asset('assets/admin/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/admin/js/bootstrap.min.js')}}"></script>

<!-- Custom Js -->
<script src="{{ asset('assets/admin/js/custom.js')}}"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('.search').keypress(function(e) {
        if (e.which == 10 || e.which == 13) {
            $('#search-form').submit();
        }
    });
    $(document).ready(function () {
        $('#example').DataTable();
    });
  
</script>