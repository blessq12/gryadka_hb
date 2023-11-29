<script>
export default{

}
</script>

<template>
    <div class="hero-banner position-relative">
		<div class="position-absolute konf bg-image-cover w-100 h-100" style="background: url('/assets/img/konfetti.png');"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-8 col-lg-6 d-flex align-items-stretch">
					<div class="bg-image-contain w-100 hero-img" style="background: url('/assets/img/girl1.png')"></div>
				</div>
			</div>
		</div>
	</div>
</template>

<style lang="sass" scoped>
.hero-banner
	background: $color-main
	padding-top: 48px
	display: flex
	.konf
		top: 0
		left: 0

	.hero-img
		height: 70vh
		width: auto
</style>