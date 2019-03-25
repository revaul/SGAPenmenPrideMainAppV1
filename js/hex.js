jQuery(function($) {

	// QWERTY Text Input
	// The bottom of this file is where the autocomplete extension is added
	// ********************
	//$('#text').keyboard({ layout: 'qwerty' });
  //$('#myusername').keyboard({ layout: 'qwerty' });
  //$('#mypassword').keyboard({ layout: 'qwerty' });
  $('#mypassword').keyboard({
  	usePreview: true, // disabled for contenteditable
  	useCombos: false,
  	autoAccept: true,
  	layout: 'custom',
  	customLayout: {
  		'normal': [
  			'` 1 2 3 4 5 6 7 8 9 0 - = {b}',
  			'q w e r t y u i o p [ ] \\',
  			'a s d f g h j k l ; \' {accept}',
  			'{shift} z x c v b n m , . / {shift}',
  			'{accept} {space} {left} {right}'
  		],
  		'shift': [
  			'~ ! @ # $ % ^ & * ( ) _ + {b}',
  			'Q W E R T Y U I O P { } |',
  			'A S D F G H J K L : " {accept}',
  			'{shift} Z X C V B N M < > ? {shift}',
  			'{accept} {space} {left} {right}'
  		]
  	}
  })
  .addTyping();
  $('#myusername').keyboard({
  	usePreview: true, // disabled for contenteditable
  	useCombos: false,
  	autoAccept: true,
  	layout: 'custom',
  	customLayout: {
  		'normal': [
  			'` 1 2 3 4 5 6 7 8 9 0 - = {b}',
  			'q w e r t y u i o p [ ] \\',
  			'a s d f g h j k l ; \' {accept}',
  			'{shift} z x c v b n m , . / {shift}',
  			'{accept} {space} {left} {right}'
  		],
  		'shift': [
  			'~ ! @ # $ % ^ & * ( ) _ + {b}',
  			'Q W E R T Y U I O P { } |',
  			'A S D F G H J K L : " {accept}',
  			'{shift} Z X C V B N M < > ? {shift}',
  			'{accept} {space} {left} {right}'
  		]
  	}
  })
  .addTyping();
	//$('.version').html( '(v' + $('#text').getkeyboard().version + ')' );


	// Custom: Hex
	// ********************
  $('#text')
  	.keyboard({
  		layout: 'custom',
  		customLayout: {
  			'normal' : [
  				'1 2 3',
  				'4 5 6',
  				'7 8 9',
  				'0',
  				'{bksp} {a} {c}'
  			]
  		},
  		maxLength : 7,
  		// Prevent keys not in the displayed keyboard from being typed in
  		restrictInput : true,
  		// include lower case characters (added v1.25.7)
  		restrictInclude : 'a b c d e f',
  		// don't use combos or A+E could become a ligature
  		useCombos : false,
  		// activate the "validate" callback function
  		acceptValid : true,
  		validate : function(keyboard, value, isClosing){
  			// only make valid if input is 6 characters in length
  			return value.length === 7;
  		}
  	})
  	.addTyping();


// ********************
// Extension demos
// ********************

	// Set up typing simulator extension on ALL keyboards
	$('.ui-keyboard-input').addTyping();

	// simulate typing into the keyboard
	// \t or {t} = tab, \b or {b} = backspace, \r or \n or {e} = enter
	// added {l} = caret left, {r} = caret right & {d} = delete
	$('#inter-type').click(function(){
		$('#inter').getkeyboard().reveal().typeIn("{t}Hal{l}{l}{d}e{r}{r}l'o{b}o {e}{t}World", 500);
		return false;
	});
	$('#meta-type').click(function(){
		var meta = $('#meta').getkeyboard();
		meta.reveal().typeIn('aBcD1112389\u0411\u2648\u2649', 700, function(){ meta.accept(); alert('all done!'); });
		return false;
	});

	// Autocomplete demo
	var availableTags = [
		"ActionScript",
		"AppleScript",
		"Asp",
		"BASIC",
		"C",
		"C++",
		"Clojure",
		"COBOL",
		"ColdFusion",
		"Erlang",
		"Fortran",
		"Groovy",
		"Haskell",
		"Java",
		"JavaScript",
		"Lisp",
		"Perl",
		"PHP",
		"Python",
		"Ruby",
		"Scala",
		"Scheme"
	];
	$('#text')
		.autocomplete({
			source: availableTags
		})
		.addAutocomplete();

	prettyPrint();

});
