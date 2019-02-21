	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					@foreach ($random3 as $item)
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<!--<i class="flaticon-023-flask"></i>-->
								<img src="{{Storage::disk('image')->url($item->icon)}}">
							</div>
							<h2>{{ $item->name }}</h2>
							<p>{{ $item->description }}</p>
						</div>
					</div>
					@endforeach
					<!-- single card -->
					@foreach ($random4 as $item)
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<!--<i class="flaticon-011-compass"></i>-->
								<img src="{{Storage::disk('image')->url($item->icon)}}">
							</div>
							<h2>{{ $item->name }}</h2>
							<p>{{ $item->description }}</p>
						</div>
					</div>
					@endforeach
					<!-- single card -->
					@foreach ($random5 as $item)
					<div class="col-md-4 col-sm-12">
						<div class="lab-card">
							<div class="icon">
								<!--<i class="flaticon-037-idea"></i>-->
								<img src="{{Storage::disk('image')->url($item->icon)}}">
							</div>
							<h2>{{ $item->name }}</h2>
							<p>{{ $item->description }}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->