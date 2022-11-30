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

<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
<script src="{{ asset('assets_l/js/jquery.style.switcher.js') }}"></script>
<script>
    $(function() {
        $('#colour-variations ul').styleSwitcher({
            defaultThemeId: 'theme-switch',
            hasPreview: false,
            cookie: {
                expires: 30,
                isManagingLoad: true
            }
        });
        $('.option-toggle').click(function() {
            $('#colour-variations').toggleClass('sleep');
        });
    });
</script>
<!-- End demo purposes only -->

<!-- Main JS (Do not remove) -->
<script src="{{ asset('assets_l/js/main.js') }}"></script>

<!--
INFO:
jQuery Cookie for Demo Purposes Only.
The code below is to toggle the layout to boxed or wide
-->
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
<script src="{{ asset('assets_l/js/jquery.cookie.js') }}"></script>
<script>
    $(function() {

        if ($.cookie('layoutCookie') != '') {
            $('body').addClass($.cookie('layoutCookie'));
        }

        $('a[data-layout="boxed"]').click(function(event) {
            event.preventDefault();
            $.cookie('layoutCookie', 'boxed', {
                expires: 7,
                path: '/'
            });
            $('body').addClass($.cookie('layoutCookie')); // the value is boxed.
        });

        $('a[data-layout="wide"]').click(function(event) {
            event.preventDefault();
            $('body').removeClass($.cookie('layoutCookie')); // the value is boxed.
            $.removeCookie('layoutCookie', {
                path: '/'
            }); // remove the value of our cookie 'layoutCookie'
        });
    });
</script>


</body>

</html>
