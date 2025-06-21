const { registerBlockType } = wp.blocks;
const { PlainText } = wp.blockEditor;
const { createElement } = wp.element;

const techIcons = {
  javascript: "🟨",
  php: "🐘",
  html: "🌐",
  css: "🎨",
  react: "⚛️",
  wordpress: "📝",
  node: "🟢",
  mysql: "🗄️",
  tailwind: "🌬️",
  typescript: "🔷"
};


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
      { className: 'technologies-block-edit' },
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
        const key = item.toLowerCase();
        const icon = techIcons[key] ||  "💻";

        return createElement('li', { key: index }, `${icon} ${item}`);
      });

    return createElement(
      'div',
      { className: 'technologies-block' },
      createElement('h2', {className:'technology-heading'}, 'Technologies used: '),
      createElement('ul',{className: 'techList'}, techList)
    );
  }
});
