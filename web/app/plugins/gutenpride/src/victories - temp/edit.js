import { __ } from '@wordpress/i18n';
import { PlainText, useBlockProps, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import './editor.scss';

export default function Edit( { attributes: { content = [] }, setAttributes, attributes } ) {
	const ALLOWED_MEDIA_TYPES = ["image"];
	return (
		<>
			{content.map((value, index) => {
				return (
					<>
						<PlainText
							placeholder={__('Section Title')}
							value={value.section}
							onChange={(section) => {
								const newContent = [...content]
								newContent[index].section = section
								setAttributes({ content: newContent })
							}}
						/>
						<PlainText
							placeholder={__('Artist')}
							value={value.artist}
							onChange={(artist) => {
								const newContent = [...content]
								newContent[index].artist = artist
								setAttributes({ content: newContent })
							}}
						/>
						<PlainText
							placeholder={__('Album Title')}
							value={value.album}
							onChange={(album) => {
								const newContent = [...content]
								newContent[index].album = album
								setAttributes({ content: newContent })
							}}
						/>
						<PlainText
							placeholder={__('Year')}
							value={value.date}
							onChange={(date) => {
								const newContent = [...content]
								newContent[index].date = date
								setAttributes({ content: newContent })
							}}
						/>
						<PlainText
							placeholder={__('Style')}
							value={value.style}
							onChange={(style) => {
								const newContent = [...content]
								newContent[index].style = style
								setAttributes({ content: newContent })
							}}
						/>
						<PlainText
							placeholder={__('More button')}
							value={value.more}
							onChange={(more) => {
								const newContent = [...content]
								newContent[index].more = more
								setAttributes({ content: newContent })
							}}
						/>
						<MediaUploadCheck>
							<MediaUpload
								onSelect={(media) => setAttributes({ imgURL: media.url, imgId: media.id })}
								allowedTypes={ ALLOWED_MEDIA_TYPES }
								value={ attributes?.imgId }
								render={ ( { open } ) => (
									<Button onClick={ open }>{__('Replace the image')}</Button>
								) }
							/>
						</MediaUploadCheck>
						<Button
							onClick={() => {
								const newContent = [
									...content.slice(0, index),
									...content.slice(index + 1)
								]
								setAttributes({ content: newContent })
							}}
						>{__('Supprimer')}
						</Button>
					</>
				)
			})}
			<Button
				onClick={() => {
					const newContent = [...content, {}]
					setAttributes({ content: newContent })
				}}
			>{__('Ajouter')}
			</Button>
		</>
	);
}
