<!-- jQuery JS -->
<script src="js/jquery.min.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- jquery Waypoints JS -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- jquery Appear JS -->
<script src="js/jquery.appear.js"></script>
<!-- Numinate JS -->
<script src="js/numinate.min.js"></script>
<!-- Slick JS -->
<script src="js/swiper.min.js"></script>
<!-- Magnific JS -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Circle Progress JS -->
<script src="js/circle-progress.js"></script>
<!-- countdown JS -->
<script src="js/jquery.countdown.min.js"></script>
<!-- AOS -->
<script src="js/aos.js"></script>
<!-- GSAP -->
<script src='js/gsap.js'></script>
<!-- Scroll Trigger -->
<script src='js/ScrollTrigger.js'></script>
<!-- Split Text -->
<script src='js/SplitText.js'></script>
<!-- Magnetic -->
<script src='js/magnetic.js'></script>
<!-- GSAP Animation -->
<script src='js/gsap-animation.js'></script>
<!-- Scripts JS -->
<script src="js/scripts.js"></script>

<script>
function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}
</script>