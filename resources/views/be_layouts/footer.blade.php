</div>
<!-- Javascript -->
{{-- <script src="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"></script> --}}
{{-- <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> --}}

<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>

<!-- page vendor js file -->
<script src="{{asset('assets/vendor/toastr/toastr.js')}}"></script>
<script src="{{asset('assets/bundles/c3.bundle.js')}}"></script>

<!-- page js file -->
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>

@yield('script')

</body>
</html>