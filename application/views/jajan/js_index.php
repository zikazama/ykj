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
            $.post('<?= base_url('ajax/get_postingan_terdekat') ?>', {
                latitude,
                longitude
            }, function(data) {
                var hasil = JSON.parse(data);
                var html = '';
                hasil.data.forEach(element => {
                    html += `
                    <li class="swipeout">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide swipeout-content item-content">
                                            <div class="post_entry">
                                                <div class="post_thumb"><img src="<?= base_url() ?>uploads/jajanan/${element.foto}" alt="" title="" /></div>
                                                <div class="post_details">
                                                    <div class="post_category"><a href="blog-single.html">${element.judul}</a></div>
                                                    <h2><a href="blog-single.html">${element.caption}</a></h2>
                                                </div>
                                                <div class="post_swipe"><img src="<?= base_url() ?>assets/images/swipe_more.png" alt="" title="" /></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swipeout-actions-right">
                                            <a href="blog-single.html" class="action1"><img src="<?= base_url() ?>assets/images/icons/white/message.png" alt="" title="" /></a>
                                            <a href="#" class="action1 open-popup" data-popup=".popup-social"><img src="<?= base_url() ?>assets/images/icons/white/like.png" alt="" title="" /></a>
                                            <a href="#" class="action1 open-popup" data-popup=".popup-social"><img src="<?= base_url() ?>assets/images/icons/white/contact.png" alt="" title="" /></a>
                                        </div>
                                    </div>
                                </li>
                    `;
                });
                $('#tempatPost').html(html);
            });
        }

        getLocation();




    })
</script>