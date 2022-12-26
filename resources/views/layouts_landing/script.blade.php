<!-- jQuery -->
<script src="{{ asset('assets_l/js/jquery.min.js') }}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('assets_l/js/jquery.easing.1.3.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets_l/js/bootstrap.min.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('assets_l/js/jquery.waypoints.min.js') }}"></script>
<!-- Flexslider -->
<script src="{{ asset('assets_l/js/jquery.flexslider-min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('assets_l/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets_l/js/magnific-popup-options.js') }}"></script>

<!-- Main JS (Do not remove) -->
<script src="{{ asset('assets_l/js/main.js') }}"></script>

<script>
    (function($) {
        'use strict';

        jQuery(document).on('ready', function() {

            /*PRELOADER JS*/
            $(window).on('load', function() {
                $('.spinner').fadeOut();
                $('.preloader').delay(350).fadeOut('slow');
            });
            /*END PRELOADER JS*/

        });
    })(jQuery);
</script>
</body>

</html>
