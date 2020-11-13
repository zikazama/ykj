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
            // var url = "<?= base_url() ?>jajan/index/" + latitude + '/' + longitude + '/';
            // var form = $('<form action="' + url + '" method="post">' +
            //     '<input type="text" name="kode" value="ayokitajajan" />' +
            //     '</form>');
            // $('body').append(form);
            // form.submit();
            window.location.href = "<?= base_url() ?>jajan/index/" + latitude + '/' + longitude + '/';
        }

        getLocation();




    })
</script>