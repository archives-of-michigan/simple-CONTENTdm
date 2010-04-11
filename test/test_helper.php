<?
define("TEST_ENV",'TEST');

function dmGetCollectionList() {
  return array(
    array(
      "alias" => "/p4006coll2",
      "name" => "Governors of Michigan",
      "path" => "D:\\Sites\\129401\\Data\\p4006coll2"
    ),
    array(
      "alias" => "/p4006coll3",
      "name" => "Civil War Photographs",
      "path" => "D:\\Sites\\129401\\Data\\p4006coll3"
    ),
    array(
      "alias" => "/p4006coll7",
      "name" => "Lighthouses and Life-Saving Stations",
      "path" => "D:\\Sites\\129401\\Data\\p4006coll7"
    ),
    array(
      "alias" => "/p4006coll4",
      "name" => "Early Photography",
      "path" => "D:\\Sites\\129401\\Data\\p4006coll4"
    ),
    array(
      "alias" => "/p4006coll5",
      "name" => "Sheet Music",
      "path" => "D:\\Sites\\129401\\Data\\p4006coll5"
    ),
    array(
      "alias" => "/p4006coll8",
      "name" => "Main Streets",
      "path" => "D:\\Sites\\129401\\Data\\p4006coll8"
    ),
    array(
      "alias" => "/p4006coll10",
      "name" => "Architecture",
      "path" => "D:\\Sites\\129401\\Data\\p4006coll10"
    ),
    array(
      "alias" => "/p4006coll15",
      "name" => "Civil War Service Records",
      "path" => "D:\\Sites\\129401\\Data\\p4006coll15"
    ),
    array(
      "alias" => "/p4006coll17",
      "name" => "Oral Histories",
      "path" => "D:\\Sites\\129401\\Data\\p4006coll17"
    ),
    array(
      "alias" => "/p129401coll0",
      "name" => "WPA Property Inventories",
      "path" => "D:\\Sites\\129401\\data\\p129401coll0"
    ),
    array(
      "alias" => "/p129401coll3",
      "name" => "Maps",
      "path" => "D:\\Sites\\129401\\data\\p129401coll3"
    ),
    array(
      "alias" => "/p129401coll7",
      "name" => "Death Records, 1897-1920",
      "path" => "D:\\Sites\\129401\\data\\p129401coll7_1"
    ),
    array(
      "alias" => "/p129401coll10",
      "name" => "Michigan Polish Americans",
      "path" => "D:\\Sites\\129401\\data\\p129401coll10"
    ) 
  );
}

function dmQuery() {
  return array(
    array('collection' => '/p129401coll10', 
      'pointer' => 1607,
      'title' => 'UNIX Network programming',
      'subjec' => 'IPC',
      'descri' => 'IPC and Stuff',
      'creato' => 'Stevens',
      'date' => '2009-01-20',
      'type' => 'Book',
      'format' => 'Document'),
    array('collection' => '/p129401coll10', 
      'pointer' => 1608,
      'title' => 'Operating System Design',
      'subjec' => 'OS',
      'descri' => 'The XINU Approach',
      'creato' => 'Stevens',
      'date' => '2009-01-20',
      'type' => 'Book',
      'format' => 'Document'),
    array('collection' => '/p129401coll10', 
      'pointer' => 1609,
      'title' => 'Pthreads Programming',
      'subjec' => 'Prallelism',
      'descri' => 'Programming with pthreads',
      'creato' => 'Stevens',
      'date' => '2009-01-20',
      'type' => 'Book',
      'format' => 'Document')
  );
}

function dmGetItemInfo($alias, $itnum, &$buf) {
  $buf = <<<XML
<xml>
  <title>Adrian (Mich.)</title>
  <subjec>Adrian High School (Adrian, Mich.); schools</subjec>
  <descri>High School Building in Adrian (Mich.); c. 1920.</descri>
  <creato></creato>
  <date>c. 1920</date>
  <format>Image</format>
  <type>Postcard - Color</type>
  <identi>PH.10458; Town and City Scenes-Adrian-PF.2104</identi>
  <negati>21568</negati>
  <source>Part of the Souvenir Folder of Adrian (Mich.)</source>
  <rights>Use of this image requires the permission of the Archives of Michigan</rights>
  <order>To order please email archives@mi.gov</order>
  <featur></featur>
  <locati></locati>
  <oclc></oclc>
  <answer></answer>
  <ead></ead>
  <fullrs></fullrs>
  <find>1608.jp2</find>
  <dmaccess></dmaccess>
  <dmimage></dmimage>
  <dmcreated>2009-08-28</dmcreated>
  <dmmodified>2009-08-28</dmmodified>
  <dmoclcno></dmoclcno>
  <dmrecord>1607</dmrecord>
</xml>
XML;
}

function dmGetCompoundObjectInfo($alias, $itnum, &$buf) {
  $buf = <<<XML
<cpd>
  <page>
    <pageptr>1609</pageptr>
  </page>
  <page>
    <pageptr>1610</pageptr>
  </page>
</cpd>
XML;
}

function GetParent($alias, $itnum, $path) {
  return '1607';
}

function dmGetCollectionParameters($alias, $collection_name, &$collection_path) {
  $collection_path = "D:/foo/bar";
}

function dmGetCollectionImageSettings($alias, &$pan_enabled, &$minjpegdim, &$zoomlevels, 
  &$maxderivedimg, &$viewer, &$docviewer, &$compareviewer, &$slideshowviewer) {
  
}

function dmGetImageInfo($alias, $itnum, &$file, &$type, &$width, &$height) {
  $height = 480;
  $width = 640;
}
