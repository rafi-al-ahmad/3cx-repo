<!-- BEGIN: Vendor JS-->
<script src="{{ url('design') }}/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ url('design') }}/app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="{{ url('design') }}/app-assets/vendors/js/extensions/toastr.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ url('design') }}/app-assets/js/core/app-menu.js"></script>
<script src="{{ url('design') }}/app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- <script src="{{ url('design') }}/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script> -->
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }

    });
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "9000",
        "extendedTimeOut": "5000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "slideDown",
        "hideMethod": "slideUp",
        "toastClass": 'toastr'
    };
</script>
<script>
    function json2array(json) {
        if (typeof json == 'string') {
            return (json);
        }

        var result = [];
        var keys = Object.keys(json);
        keys.forEach(function(key) {
            if (json != null && typeof json == 'object') {
                result.push(json2array(json[key]));
            } else
                result.push(json[key]);
        });
        return result;
    }

    function showErrors(data) {
        if (Array.isArray(data)) {
            data.forEach(element => {
                showErrors(element)
            });
        } else {
            toastr.error(data);
        }
    }

    
    function showSuccess(data) {
        if (Array.isArray(data)) {
            data.forEach(element => {
                showSuccess(element)
            });
        } else if(data != '') {
            toastr.success(data);
        }
    }

</script>
@include("admin.layouts.message")

@stack('scripts')