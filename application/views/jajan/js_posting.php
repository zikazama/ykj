<script language="JavaScript">
    Webcam.set({
        width: 400,
        height: 350,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img style="align-content: center; margin:auto" src="'+data_uri+'"/>';
        } );
    }
</script>