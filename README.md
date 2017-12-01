# SilverStripe AceEditorField
[![Build Status](https://travis-ci.org/phill-m/silverstripe-acecodeeditor.svg?branch=master)](https://travis-ci.org/phill-m/silverstripe-acecodeeditor)

A SilverStripe 4 implementation of Ace Editor (https://ace.c9.io)


## Maintainer Contact
Phil Mobbs <phil@phillipmobbs.co.uk>


## Requirements
* SilverStripe Framework ^4.0


## Installation
Install using Composer:
```
composer require phill-m/silverstripe-acecodeeditor
```

Then run a dev/build


## Usage
```php
$field = AceEditorField::create('Content');

// Set the theme, default: monokai
$field->setTheme('pastel_on_dark')

// Set the mode, default html
$field->setMode('javascript')

// Set the number of rows, 
$field->setRows(20);
```

Supported Themes
* ambiance
* chaos
* chrome
* clouds
* clouds_midnight
* cobalt
* crimson_editor
* dawn
* dracula
* dreamweaver
* eclipse
* github
* gob
* gruvbox
* idle_fingers
* iplastic
* katzenmilch
* kr_theme
* kuroir
* merbivore
* merbivore_soft
* mono_industrial
* monokai
* pastel_on_dark
* solarized_dark
* solarized_light
* sqlserver
* terminal
* textmate
* tomorrow
* tomorrow_night
* tomorrow_night_blue
* tomorrow_night_bright
* tomorrow_night_eighties
* twilight
* vibrant_ink
* xcode

Supported Modes
* abap
* abc
* actionscript
* ada
* apache_conf
* applescript
* asciidoc
* assembly_x86
* autohotkey
* batchfile
* bro
* c_cpp
* c9search
* cirru
* clojure
* cobol
* coffee
* coldfusion
* csharp
* csound_document
* csound_orchestra
* csound_score
* css
* curly
* d
* dart
* diff
* django
* dockerfile
* dot
* drools
* eiffel
* ejs
* elixir
* elm
* erlang
* forth
* fortran
* ftl
* gcode
* gherkin
* gitignore
* glsl
* gobstones
* golang
* graphqlschema
* groovy
* haml
* handlebars
* haskell
* haskell_cabal
* haxe
* hjson
* html
* html_elixir
* html_ruby
* ini
* io
* jack
* jade
* java
* javascript
* json
* jsoniq
* jsp
* jssm
* jsx
* julia
* kotlin
* latex
* lean
* less
* liquid
* lisp
* live_script
* livescript
* logiql
* lsl
* lua
* luapage
* lucene
* makefile
* markdown
* mask
* matlab
* maze
* mel
* mips_assembler
* mipsassembler
* mushcode
* mysql
* nix
* nsis
* objectivec
* ocaml
* pascal
* perl
* pgsql
* php
* pig
* plain_text
* powershell
* praat
* prolog
* properties
* protobuf
* python
* r
* razor
* rdoc
* red
* rhtml
* rst
* ruby
* rust
* sass
* scad
* scala
* scheme
* scss
* sh
* sjs
* smarty
* snippets
* soy_template
* space
* sparql
* sql
* sqlserver
* stylus
* svg
* swift
* swig
* tcl
* tex
* text
* textile
* toml
* tsx
* turtle
* twig
* typescript
* vala
* vbscript
* velocity
* verilog
* vhdl
* wollok
* xml
* xquery
* yaml