<?php
	$terms = get_the_terms( get_the_ID(), 'Artistes');

	if( !empty($terms) ) { $term = array_pop($terms); console.log('nom vide'); }
?>

<div class="victories relative white">
    <p class="relative s42" style="top: -20px;"> {{$section}} </p>
    <div class="flex">  
		@while ( $albums->have_posts()) @php $albums->the_post() @endphp
			<div class="cards cards-space">
				{{the_post_thumbnail()}}
			    <div class="card-txt backG-White">
			        <div class="flex relative card-txt-left card-txt-top">
			            <p class="s24 bold"> <?php get_field('nom_artiste', $term ) ?> </p>
			            <p class="relative card-txt-title s20"> {{the_title()}} </p>
			        </div>
			        <p class="date relative card-txt-left s20"> date </p>
			        <p class="relative card-txt-left s20"> Style </p>
			    </div>
			</div>    
		@endwhile
	</div>

    <button class="relative button-blue"> {{$more}} </button>
</div>