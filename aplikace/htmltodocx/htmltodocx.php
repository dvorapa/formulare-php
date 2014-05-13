<?php
/**
 * Class to access the functionality of the HTML to docx converter
 */

// Load the files we need:
require_once 'phpword/PHPWord.php';
require_once 'simplehtmldom/simple_html_dom.php';
require_once 'htmltodocx_converter/h2d_htmlconverter.php';
require_once 'example_files/styles.inc';

/// Initiate the class
class HtmlToDocx{

public $base_path;
public $base_root;
public $html;
public $html_array;
public $PHPWord;

/// __construct
public function __contruct(){
$a=func_get_args();
$i=func_num_args();
if(method_exists($this,$f='__construct'.$i)){
call_user_func_array(array($this,$f),$a);
}}

/// __construct0
public function __contruct0(){
$base_path=substr($_SERVER['PHP_SELF'],0,((strrpos($_SERVER['PHP_SELF'],'/'))+1));
$base_root="http://".$_SERVER['HTTP_HOST'];
$this->process();
}

/// __construct1
public function __contruct1($base_path){
$base_root="http://".$_SERVER['HTTP_HOST'];
$this->process();
}

/// __construct2
public function __contruct2($base_path,$base_root){
$this->process($base_path,$base_root);
}

public function process($base_path,$base_root){
// Create a new PHPWord Object
$PHPWord=new PHPWord();

// Every element you want to append to the word document is placed in a section. So you need a section:
$section=$PHPWord->createSection();

$this->base_path=$base_path;
$this->base_root=$base_root;

// Provide some initial settings:
$initial_state=array(
// Required parameters:
'phpword_object'=>&$PHPWord, // Must be passed by reference.
'base_root'=>$base_root, // Required for link elements - change it to your domain.
'base_path'=>$base_path, // Path from base_root to whatever url your links are relative to.

// Optional parameters - showing the defaults if you don't set anything:
'current_style'=>array('size'=>'11'), // The PHPWord style on the top element - may be inherited by descendent elements.
'parents'=>array(0=>'body'), // Our parent is body.
'list_depth'=>0, // This is the current depth of any current list.
'context'=>'section', // Possible values - section, footer or header.
'pseudo_list'=>TRUE, // NOTE: Word lists not yet supported (TRUE is the only option at present).
'pseudo_list_indicator_font_name'=>'Wingdings', // Bullet indicator font.
'pseudo_list_indicator_font_size'=>'7', // Bullet indicator size.
'pseudo_list_indicator_character'=>'l ', // Gives a circle bullet point with wingdings.
'table_allowed'=>TRUE, // Note, if you are adding this html into a PHPWord table you should set this to FALSE: tables cannot be nested in PHPWord.
'treat_div_as_paragraph'=>TRUE, // If set to TRUE, each new div will trigger a new line in the Word document.

// Optional - no default:
'style_sheet'=>htmltodocx_styles_example() // This is an array (the "style sheet") - returned by htmltodocx_styles_example() here (in styles.inc) - see this function for an example of how to construct this array.
);

// Create a DOM object
$this->html=new simple_html_dom();
}

/// input_string
public function input_string(&$input_string){
$html=$this->html;

// Load HTML from a string
load_string:{
$html->load($input_string);

// Create the dom array of elements which we are going to work on:
$html_array=$html->find('body');

if(empty($html_array)){
$input_string="<body>".$input_string."</body>";
goto load_string;
}}}

/// input_file
public function input_file($input_file){
$html=$this->html;

// Load HTML from a URL or a HTML file
$html->load_file($input_file);

// Create the dom array of elements which we are going to work on:
load_file:{
$html_array=$html->find('body');

if(empty($html_array)){
$html->outertext="<body>".$html->outertext."</body>";
goto load_file;
}}}

/// output_file
public function output_file(array $output_file){
$html=$this->html;

$base_output_file=array(tempnam(sys_get_temp_dir(),'htd'));
array_merge($base_output_file,$output_file);

// Convert the HTML and put it into the PHPWord object
htmltodocx_insert_html($section,$html_array[0]->nodes,$initial_state);

// At least write the document to webspace:
$objWriter=PHPWord_IOFactory::createWriter($PHPWord,'Word2007');
$objWriter->save($output_file);
}

/// save_file
public function save_file(){
// Download the file:
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.$output_file);
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: '.filesize($output_file));
}

/// close
public function close(){
// Clear the HTML dom object:
$this->html->clear();
unset($this->html);
$this->base_path=null;
unset($this->base_path);
$this->base_root=null;
unset($this->base_root);
unset($this);
ob_clean();
flush();
gc_collect_cycles();
}

/// delete_file
public function delete_file(){
unlink($output_file);
}

/// __destruct
public function __destruct(){
$this->close();
}}
?>