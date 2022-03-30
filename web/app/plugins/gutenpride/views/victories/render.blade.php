<div class="victories relative white">
    <p class="relative s42" style="top: -20px;"> {{$section}} </p>
    <div class="flex">
        <div class="cards cards-space">

			@while ( $albums->have_posts()) @php $albums->the_post() @endphp
				@php(the_title())
				<img class="card-img" src="" />
			    <div class="card-txt backG-White">
			        <div class="flex relative card-txt-left card-txt-top">
			            <p class="s24 bold"> artist </p>
			            <p class="relative card-txt-title s20"> titre alb </p>
			        </div>
			        <p class="date relative card-txt-left s20"> date </p>
			        <p class="relative card-txt-left s20"> artist </p>
			    </div>
			@endwhile
		</div>
	</div>

    <button class="relative button-blue"> {{$more}} </button>
</div>