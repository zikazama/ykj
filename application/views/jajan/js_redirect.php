<script>
    $(document).ready(function() {
        var latitude = '';
        var longitude = '';

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);

            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            latitude = position.coords.latitude;
            longitude = position.coords.longitude;
            window.location.href = "<?= base_url() ?>jajan/index/"+latitude+'/'+longitude+'/';
        }

        getLocation();




    })
</script>