<?php 

	//Enter your IDs
define("Access_Key_ID", "AKIAIGV3CNIP3S7MLXQA");
define("Associate_tag", "priceonline-21");

//Set up the operation in the request
function ItemSearch($SearchIndex, $Keywords){

//Set the values for some of the parameters
$Operation = "ItemSearch";
$Version = "2013-08-01";
$ResponseGroup = "ItemAttributes,Offers";
//User interface provides values
//for $SearchIndex and $Keywords

//Define the request
$request=
     "http://webservices.amazon.com/onca/xml"
   . "?Service=AWSECommerceService"
   . "&AssociateTag=" . Associate_tag
   . "&AWSAccessKeyId=" . Access_Key_ID
   . "&Operation=" . $Operation
   . "&Version=" . $Version
   . "&SearchIndex=" . $SearchIndex
   . "&Keywords=" . $Keywords
   . "&Signature=" . 
   . "&ResponseGroup=" . $ResponseGroup;

//Catch the response in the $response object
$response = file_get_contents($request);
$parsed_xml = simplexml_load_string($response);
printSearchResults($parsed_xml, $SearchIndex);
}
?>