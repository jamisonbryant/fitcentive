<script>
    $(document).ready(function() {
        $('main').css('visibility', 'hidden');
    });
    $(window).load(function() {
        $('#preloader').fadeOut(400, function() {
            $('main').hide();
            $('main').css('visibility', 'visible');
            $('main').fadeIn(400);
        });
    });
</script>

<style>
    #preloader {
        background-color: #ffffff;
        height: 100%;
        position: absolute;
        top: 75px; left: 240px; right: 0; bottom: 0;
        z-index: 10;
    }
    #preloader .preloader-wrapper {
        position: absolute;
        top: 40%;
        left: 50%;
    }
</style>

<div id="preloader">
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-red-only">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>