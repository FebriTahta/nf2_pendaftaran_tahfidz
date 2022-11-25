</div>
<!-- Javascript -->
{{-- <script src="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"></script> --}}
{{-- <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> --}}

<script src="{{asset('assets_be/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{asset('assets_be/bundles/vendorscripts.bundle.js')}}"></script>

<!-- page vendor js file -->
<script src="{{asset('assets_be/vendor/toastr/toastr.js')}}"></script>
<script src="{{asset('assets_be/bundles/c3.bundle.js')}}"></script>

<!-- page js file -->
<script src="{{asset('assets_be/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets_be/js/index.js')}}"></script>

@yield('be_script')

</body>
</html>