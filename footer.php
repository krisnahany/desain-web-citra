<!-- footer -->
	<div id="footer">
		<div class="footer-mobile">
			<div class="copyright">Copyright © 2017 | PT Unilever Indonesia Tbk. - All rights reserved</div>
			<div class="nav">
				<nav class="kanan">
					<a href="#">Privacy Policy</a>
					<a href="#">Cookie Policy</a>
					<a href="#">Contact Us</a>
					<a href="#">Terms & Condition</a>
				</nav>
			</div>
		</div>
		<div class="footer-wrap">
			<div class="copyright">
				<strong>PT Unilever Indonesia Tbk.</strong><br>
				<p>© 2017, Hak cipta oleh Unilever Indonesia, dilindungi undang-undang</p>
			</div>
			<div class="nav">
				<nav class="kiri">
					<a href="index.php">Home</a>
					<a href="products.php">Rangkaian Produk</a>
					<a href="artikel.php">Tips Cantik</a>
					<a href="#">Aktivitas Citra</a>
					<a href="#">Cerita Citra</a>
				</nav>
				<nav class="kanan">
					<a href="#">Privacy Policy</a>
					<a href="#">Cookie Policy</a>
					<a href="#">Contact Us</a>
					<a href="#">Terms & Condition</a>
				</nav>
			</div>
			<div class="social-link">
				<a href=""><img src="img/home/facebook.png" alt="facebook">Cantik Citra</a>
				<a href=""><img src="img/home/twitter.png" alt="twitter">@CantikCitra</a>
				<a href=""><img src="img/home/instagram.png" alt="instagram">cantikcitra</a>
				<a href=""><img src="img/home/youtube.png" alt="youtube">Rumah Cantik Citra</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery-3.3.1.min.js"></script>

	<!-- Selectric JS -->
	<script src="js/jquery.selectric.min.js"></script>
	
	<!-- Swiper JS -->
	<script src="js/swiper.min.js"></script>

	<!-- Initialize Swiper -->
	<script src="js/swiper.js"></script>

    <script src="js/infinite-scroll.pkgd.js"></script>
    <!-- <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script> -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- <script src='https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js'></script> -->
    <script src="js/imagesloaded.pkgd.js"></script>
    <script src="js/main.js"></script>
	<script>
		$(document).ready(function(){
			$('#toggle').on('click', function(){
				$('.mobile-wrapper').toggleClass('active');
				$('body').toggleClass('active-menu');
				$(this).toggleClass("open");
			});
		});
	</script>
	<script>
		$(function() {
			$('select').selectric();
		});
	</script>
</body>
</html>