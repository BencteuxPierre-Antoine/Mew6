import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';

export default function save( { attributes } ) {
	return (
		<div className="victories relative white">
	        <p className="relative s42" style="top: -20px;"> {attributes?.sectionTitle} </p>
	        <div className="flex">
	            <div className="cards cards-space">
	                <img className="card-img" src={attributes?.albumIMG} />
	                <div className="card-txt backG-White">
	                    <div className="flex relative card-txt-left card-txt-top">
	                        <p className="s24 bold"> {attributes?.artist} </p>
	                        <p className="relative card-txt-title s20"> {attributes?.albumTitle} </p>
	                    </div>
	                    <p className="date relative card-txt-left s20"> {attributes?.date} </p>
	                    <p className="relative card-txt-left s20"> {attributes?.style} </p>
	                </div>
	            </div>
	        </div>

	        <button className="relative button-blue"> {attributes?.more} </button>
	    </div>
	);
}
