const { registerBlockType } = wp.blocks;
const { PlainText } = wp.blockEditor;
const { createElement } = wp.element;

registerBlockType('portfolio/technologies', {
  title: 'Technologies',
  icon: 'screenoptions',
  category: 'widgets',
  attributes: {
    content: {
      type: 'string',
      default: ''
    }
  },
  edit: function (props) {
    return createElement(
      'div', 
      { className: 'technologies-block' },
      createElement(PlainText, {
        value: props.attributes.content,
        onChange: function (value) {
          props.setAttributes({ content: value });
        },
        placeholder: 'Enter technologies, e.g., JavaScript, PHP, HTML'
      })
    );
  },
  save: function (props) {
    const techList = props.attributes.content
      .split(',')
      .map(item => item.trim())
      .filter(item => item !== '')
      .map(function (item, index) {
        return createElement('li', { key: index }, item);
      });

    return createElement(
      'div',
      { className: 'technologies-block' },
      createElement('h2', {className:'technology-heading'}, 'Technologies used: '),
      createElement('ul',{className: 'techList'}, techList)
    );
  }
});
