tinymce.init({
  /* replace textarea having class .tinymce with tinymce editor */
  selector: "textarea.tinymce",

  /* theme of the editor */
  theme: "modern",
  skin: "lightgray",

  /* width and height of the editor */
  width: "100%",
  height: 300,

  /* display statusbar */
  statubar: true,

  /* plugin */
  plugins: [
    "advlist autolink link image lists charmap print preview hr anchor pagebreak",
    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
    "save table contextmenu directionality emoticons template paste textcolor"
  ],

  /* toolbar */
  toolbar: "mybutton insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor",

  /* style */
  style_formats: [{
      title: "Inline",
      items: [{
          title: "Bold",
          icon: "bold",
          format: "bold"
        },
        {
          title: "Italic",
          icon: "italic",
          format: "italic"
        },
        {
          title: "Underline",
          icon: "underline",
          format: "underline"
        },
        {
          title: "Strikethrough",
          icon: "strikethrough",
          format: "strikethrough"
        },
        {
          title: "Superscript",
          icon: "superscript",
          format: "superscript"
        },
        {
          title: "Subscript",
          icon: "subscript",
          format: "subscript"
        },
        {
          title: "Code",
          icon: "code",
          format: "code"
        }
      ]
    },
    {
      title: "Blocks",
      items: [{
          title: "Paragraph",
          format: "p"
        },
        {
          title: "Blockquote",
          format: "blockquote"
        },
        {
          title: "Div",
          format: "div"
        },
        {
          title: "Pre",
          format: "pre"
        }
      ]
    },
    {
      title: "Alignment",
      items: [{
          title: "Left",
          icon: "alignleft",
          format: "alignleft"
        },
        {
          title: "Center",
          icon: "aligncenter",
          format: "aligncenter"
        },
        {
          title: "Right",
          icon: "alignright",
          format: "alignright"
        },
        {
          title: "Justify",
          icon: "alignjustify",
          format: "alignjustify"
        }
      ]
    }
  ],
  setup: function(editor) {
    editor.addButton('mybutton', {
      type: 'menubutton',
      text: 'My Button',
      icon: false,
      menu: [{
        text: 'Menu item 1',
        onclick: function() {
          editor.insertContent('&nbsp;<strong>Menu item 1 text inserted here!</strong>&nbsp;');
        }
      }, {
        text: 'Menu item 2',
        menu: [{
          text: 'Submenu item 1',
          onclick: function() {
            editor.insertContent('&nbsp;<em>Submenu item 1 text inserted here!</em>&nbsp;');
          }
        }]
      }]
    });
  }
});
