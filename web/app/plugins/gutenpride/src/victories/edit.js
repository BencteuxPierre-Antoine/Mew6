import { __ } from '@wordpress/i18n';
import { PlainText, useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import './editor.scss';

export default function Edit( { attributes, setAttributes } ) {
	return (
		<div { ...useBlockProps() }>
			<PlainText
				placeholder={__('Section Title')}
				value={attributes.section}
				onChange={(section) => {
					setAttributes({section})
				}}
			/>
			<PlainText
				placeholder={__('More button')}
				value={attributes.more}
				onChange={(more) => {
					setAttributes({more})
				}}
			/>
		</div>
	);
}
