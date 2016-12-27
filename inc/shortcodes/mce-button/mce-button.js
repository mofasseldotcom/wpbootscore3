(function() {
    tinymce.PluginManager.add('wpbootscore_mce_button', function( editor, url ) {
        editor.addButton( 'wpbootscore_mce_button', {
            text: 'Shortcodes',
            icon: 'button',
            type: 'menubutton',
            menu: [

                // No Parameter
               //  {
               //        text: 'No Parameter',
               //        onclick: function() {
               //        editor.insertContent('[single_noparameter_shortcode]');
               //       }
               // },

                // No Parameter
                {
                      text: 'Generate Line Break',
                      onclick: function() {
                      editor.insertContent('[wpbs_line_break]');
                     }
               },



               // {
               //      text: 'With Parameter',
               //      onclick: function() {
               //          editor.windowManager.open( {
               //              title: 'Feature Generator',
               //              body: [
               //                  {
               //                      type: 'textbox',
               //                      name: 'single_line',
               //                      label: 'Single Line',
               //                      value: 'Title here',
               //                  },
               //                  {
               //                      type: 'listbox',
               //                      name: 'dropdown',
               //                      label: 'Dropdown',
               //                      'values': [
               //                          {text: 'One', value: 'One'},
               //                          {text: 'Two', value: 'Two'},
               //                      ]
               //                  },
                                
               //              ],
               //              onsubmit: function( e ) {
               //                  editor.insertContent( 
               //                      '[single parameter="'+e.data.single_line+'" parameter="'+e.data.dropdown+'"]'
               //                      );
               //              }
               //          });
               //      }
               //  },

               {
                    text: 'Generate LB with Parameter',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Feature Generator',
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'height',
                                    label: 'Enter Height',
                                    value: '100',
                                },
                                // {
                                //     type: 'listbox',
                                //     name: 'dropdown',
                                //     label: 'Dropdown',
                                //     'values': [
                                //         {text: 'One', value: 'One'},
                                //         {text: 'Two', value: 'Two'},
                                //     ]
                                // },
                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( 
                                    '[wpbs_line_break height="'+e.data.height+'"]'
                                    );
                            }
                        });
                    }
                },

                // Section
                {
                    text: 'Features',
                    menu: [
{
                    text: 'Portfolio',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Portfolio Generator',
                            body: [

                                {
                                    type: 'listbox',
                                    name: 'order',
                                    label: 'Choose order',
                                    'values': [
                                        {text: 'ASC', value: 'ASC'},
                                        {text: 'DESC', value: 'DESC'},
                                    ]
                                },

                                // {
                                //     type: 'textbox',
                                //     name: 'multiple_line',
                                //     label: 'Multiple Line',
                                //     value: 'Message here',
                                //     multiline: true,
                                //     minWidth: 300,
                                //     minHeight: 100
                                // },
                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( 
                                    '[wpbs_portfolio order="'+e.data.order+'"]'
                                    );
                            }
                        });
                    }
                },

                    ]
                },

            ]
        });
    });
})();