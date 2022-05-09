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
import { PlainText, useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { BaseControl, Button } from '@wordpress/components';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit( {attributes, setAttributes} ) {
	const ALLOWED_MEDIA_TYPES = ["image"];
	return (
		<div {...useBlockProps()}>
			<PlainText
				placeholder={__('Section Title')}
				value={attributes?.dlSection}
				onChange={(dlSection) => {
					setAttributes({dlSection})
				}}
			/>
			<PlainText
				placeholder={__('dlDescription')}
				value={attributes?.dlDescription}
				onChange={(dlDescription) => {
					setAttributes({dlDescription})
				}}
			/>
			<PlainText
				placeholder={__('Download button')}
				value={attributes?.dlBut}
				onChange={(dlBut) => {
					setAttributes({dlBut})
				}}
			/>
			<MediaUploadCheck>
				<MediaUpload
					onSelect={(media) => setAttributes({ dlURL: media.url, dlId: media.id })}
					allowedTypes={ ALLOWED_MEDIA_TYPES }
					value={ attributes?.dlId }
					render={ ( { open } ) => (
						<Button onClick={ open }>{__('Replace the image')}</Button>
					) }
				/>
			</MediaUploadCheck>
		</div>
	);
}
