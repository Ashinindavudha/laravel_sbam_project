<footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
	</div>
	<!-- /.container -->
</footer>

<script type="text/javascript">
	const $dropdown = $(".dropdown");
	const $dropdownToggle = $(".dropdown-toggle");
	const $dropdownMenu = $(".dropdown-menu");
	const showClass = "show";

	$(window).on("load resize", function() {
		if (this.matchMedia("(min-width: 768px)").matches) {
			$dropdown.hover(
				function() {
					const $this = $(this);
					$this.addClass(showClass);
					$this.find($dropdownToggle).attr("aria-expanded", "true");
					$this.find($dropdownMenu).addClass(showClass);
				},
				function() {
					const $this = $(this);
					$this.removeClass(showClass);
					$this.find($dropdownToggle).attr("aria-expanded", "false");
					$this.find($dropdownMenu).removeClass(showClass);
				}
				);
		} else {
			$dropdown.off("mouseenter mouseleave");
		}
	});
</script>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('blog/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('blog/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
@section('footer')
@show

@section('text-speech')

@show