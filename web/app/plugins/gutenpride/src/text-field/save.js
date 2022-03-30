/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-block-editor/#useBlockProps
 */
import { useBlockProps } from '@wordpress/block-editor';

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#save
 *
 * @return {WPElement} Element to render.
 */
export default function save({attributes, setAttributes}) {
	return (
		<div className="start relative white">
	        <img className="backG" src={attributes?.backGURL} />
	        <div className="relative">
	        	<div className="relative leftP topP s42"> {attributes?.title} </div>
	        	<div className="relative leftP topP s20"> {attributes?.subtitle} </div>
	        	<div className="relative leftP topP s20"> {attributes?.description} </div>
	        	<button className="relative leftP topP button-pink"> {attributes?.but} </button>
	        </div>
	    </div>
	);
}
