import {registerBlockType} from '@wordpress/blocks';
import {TextareaControl} from '@wordpress/components';
import {useBlockProps} from '@wordpress/block-editor';

registerBlockType('portfolio/technologies', {
    edit({attributes, setAttributes}){
        const blockProps = useBlockProps();


        return (
            <div {...blockProps} >
                <TextareaControl
                label="Technologies (comma-seperated)"
                value={attributes.techList}
                onChange={(value) => setAttributes({techList:value})}
                placeholder='Javascript, Php, etc.'
                />

            </div>
            
        );
    },

    save({attributes}){
        const techs = attributes.techList
        .split(',')
        .map((tech) => tech.trim())
        .filter((tech) => tech);

        return (
            <ul className="tech-list">
                {techs.map((tech, index) =>(
                    <li key={index} className="tech-item">{tech}</li>

))}
            </ul>
        );
    },
})