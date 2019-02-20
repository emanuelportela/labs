	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>Get in <span>the Lab</span> and  meet the team</h2>
			</div>
			<div class="row">

				@foreach ($random1 as $item)
					<!-- single member -->
					<div class="col-sm-4">
						<div class="member">
							<img src="{{Storage::disk('image')->url($item->profil->image)}}" alt="">
							<h2>{{ $item->profil->firstname}} {{ $item->profil->name}}</h2>
							<h3>{{ $item->role->name }}</h3>
						</div>
					</div>
				@endforeach

					<!-- ADMIN -->
					<div class="col-sm-4">
						<div class="member">
							<img src="{{Storage::disk('image')->url($notrandom->profil->image)}}" alt="">
							<h2>{{ $notrandom->profil->firstname}} {{ $notrandom->profil->name}}</h2>
							<h3>{{ $notrandom->role->name }}</h3>
						</div>
					</div>

				@foreach ($random2 as $item)
					<!-- single member -->
					<div class="col-sm-4">
						<div class="member">
							<img src="{{Storage::disk('image')->url($item->profil->image)}}" alt="">
							<h2>{{ $item->profil->firstname}} {{ $item->profil->name}}</h2>
							<h3>{{ $item->role->name }}</h3>
						</div>
					</div>
				@endforeach

				
			</div>
		</div>
	</div>
	<!-- Team Section end-->


	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>Are you ready to stand out?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.</p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="" class="site-btn btn-2">Browse</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->