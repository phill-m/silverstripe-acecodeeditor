<?php

/**
 * Class AceEditorField
 * A SilverStripe Field implementation of the Ace Editor
 */
class AceEditorField extends \SilverStripe\Forms\TextareaField
{

	/**
	 * @var array
	 */
	private $availableThemes = array(
		'ambiance',
		'chaos',
		'chrome',
		'clouds',
		'clouds_midnight',
		'cobalt',
		'crimson_editor',
		'dawn',
		'dracula',
		'dreamweaver',
		'eclipse',
		'github',
		'gob',
		'gruvbox',
		'idle_fingers',
		'iplastic',
		'katzenmilch',
		'kr_theme',
		'kuroir',
		'merbivore',
		'merbivore_soft',
		'mono_industrial',
		'monokai',
		'pastel_on_dark',
		'solarized_dark',
		'solarized_light',
		'sqlserver',
		'terminal',
		'textmate',
		'tomorrow',
		'tomorrow_night',
		'tomorrow_night_blue',
		'tomorrow_night_bright',
		'tomorrow_night_eighties',
		'twilight',
		'vibrant_ink',
		'xcode'
	);


	/**
	 * @var string
	 */
	private $theme = 'monokai';


	/**
	 * @var array
	 */
	private $availableModes = array(
		'abap',
		'abc',
		'actionscript',
		'ada',
		'apache_conf',
		'applescript',
		'asciidoc',
		'assembly_x86',
		'autohotkey',
		'batchfile',
		'bro',
		'c_cpp',
		'c9search',
		'cirru',
		'clojure',
		'cobol',
		'coffee',
		'coldfusion',
		'csharp',
		'csound_document',
		'csound_orchestra',
		'csound_score',
		'css',
		'curly',
		'd',
		'dart',
		'diff',
		'django',
		'dockerfile',
		'dot',
		'drools',
		'eiffel',
		'ejs',
		'elixir',
		'elm',
		'erlang',
		'forth',
		'fortran',
		'ftl',
		'gcode',
		'gherkin',
		'gitignore',
		'glsl',
		'gobstones',
		'golang',
		'graphqlschema',
		'groovy',
		'haml',
		'handlebars',
		'haskell',
		'haskell_cabal',
		'haxe',
		'hjson',
		'html',
		'html_elixir',
		'html_ruby',
		'ini',
		'io',
		'jack',
		'jade',
		'java',
		'javascript',
		'json',
		'jsoniq',
		'jsp',
		'jssm',
		'jsx',
		'julia',
		'kotlin',
		'latex',
		'lean',
		'less',
		'liquid',
		'lisp',
		'live_script',
		'livescript',
		'logiql',
		'lsl',
		'lua',
		'luapage',
		'lucene',
		'makefile',
		'markdown',
		'mask',
		'matlab',
		'maze',
		'mel',
		'mips_assembler',
		'mipsassembler',
		'mushcode',
		'mysql',
		'nix',
		'nsis',
		'objectivec',
		'ocaml',
		'pascal',
		'perl',
		'pgsql',
		'php',
		'pig',
		'plain_text',
		'powershell',
		'praat',
		'prolog',
		'properties',
		'protobuf',
		'python',
		'r',
		'razor',
		'rdoc',
		'red',
		'rhtml',
		'rst',
		'ruby',
		'rust',
		'sass',
		'scad',
		'scala',
		'scheme',
		'scss',
		'sh',
		'sjs',
		'smarty',
		'snippets',
		'soy_template',
		'space',
		'sparql',
		'sql',
		'sqlserver',
		'stylus',
		'svg',
		'swift',
		'swig',
		'tcl',
		'tex',
		'text',
		'textile',
		'toml',
		'tsx',
		'turtle',
		'twig',
		'typescript',
		'vala',
		'vbscript',
		'velocity',
		'verilog',
		'vhdl',
		'wollok',
		'xml',
		'xquery',
		'yaml'
	);


	/**
	 * @var string
	 */
	private $mode = 'html';


	public function Field($properties = array())
	{
		SilverStripe\View\Requirements::javascript(basename(dirname(__DIR__)) . "/javascript/AceEditorField.js");
		SilverStripe\View\Requirements::javascript(basename(dirname(__DIR__)) . "/thirdparty/ace/src-min-noconflict/ace.js");
		return parent::Field($properties);
	}


	public function getAttributes()
	{
		return array_merge(
			parent::getAttributes(),
			array(
				'data-theme' => $this->theme,
				'data-mode' => $this->mode,
			)
		);
	}


	public function setTheme($theme)
	{
		if (!in_array($theme, $this->availableThemes))
			throw new Exception("Unknown theme");

		$this->theme = $theme;
		return $this;
	}


	public function getTheme()
	{
		return $this->theme;
	}


	public function setMode($mode)
	{
		if (!in_array($mode, $this->availableModes))
			throw new Exception("Unknown mode");

		$this->mode = $mode;
		return $this;
	}

}