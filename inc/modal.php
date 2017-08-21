<div id="video" style="display:none;">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/YWII9pilahQ" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="modal-cta">
        <strong>Inspiring hope in the fight against stage IV breast cancer</strong> <a href="#" class="btn">Donate Now</a>
    </div>
</div>


<div id="research" style="display:none;">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/WTSuhHsOefU" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="modal-cta">
        <strong>Inspiring hope in the fight against stage IV breast cancer</strong> <a href="#" class="btn">Donate Now</a>
    </div>
</div>

<div id="leaving" style="display:none;">
    <div class="text-center">
        <img src="../img/side-out-mark.png" height="150" width="150" alt="Share">
        <h2>Before you go, mind sharing?</h2>
        <h3>Averill Park High School Raising funds for 2017 Power of Pink Queensbury</h3>
        <p>
            All funds raised go toward a trial specifically for patients with stage
            IV breast cancer, the most advanced form of the disease and the least
            funded area of research.
        </p>
        <div class="share-buttons">
            <a href="#" class="social social-facebook">

                <!--
                    IE 9,10,11 Support for SVG sprites
                    https://github.com/Keyamoon/svgxuse
                -->

                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                        xlink:href="./img/sprites.svg#icon-facebook">
                    </use>
                </svg>
            </a>
            <a href="#" class="social social-twitter">
                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                        xlink:href="./img/sprites.svg#icon-twitter">
                    </use>
                </svg>
            </a>
            <a href="#" class="social social-email">
                <svg class="icon icon-envelope">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                        xlink:href="./img/sprites.svg#icon-envelope">
                    </use>
                </svg>
            </a>
        </div>
    </div>

</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.8.2/jquery.modal.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.8.2/jquery.modal.min.css">
<script>

// Exit intent
function addEvent(obj, evt, fn) {
    if (obj.addEventListener) {
        obj.addEventListener(evt, fn, false);
    }
    else if (obj.attachEvent) {
        obj.attachEvent("on" + evt, fn);
    }
}

// Exit intent trigger
addEvent(document, 'mouseout', function(evt) {

    if (evt.toElement == null && evt.relatedTarget == null ) {
        $("#leaving").modal();
    };

});

</script>
