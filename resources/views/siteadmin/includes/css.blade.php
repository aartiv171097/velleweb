<!--begin::Web font -->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script>
    WebFont.load({
    google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
    active: function() {
        sessionStorage.fonts = true;
    }
  });
</script>

<!--end::Web font -->

<!--begin::Global Theme Styles -->
<link href="{{ asset('dist/default/assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('dist/default/assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Global Theme Styles -->

<!--begin::Page Vendors Styles -->
<link href="{{ asset('dist/default/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

{{--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> --}}