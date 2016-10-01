<?php 

class DOMNode  {

	/**
	 * Adds a new child before a reference node
	 * @link http://www.php.net/manual/en/domnode.insertbefore.php
	 * @param DOMNode $newnode <p>
	 * The new node.
	 * </p>
	 * @param DOMNode $refnode [optional] <p>
	 * The reference node. If not supplied, newnode is
	 * appended to the children.
	 * </p>
	 * @return DOMNode The inserted node.
	 */
	public function insertBefore (DOMNode $newnode, DOMNode $refnode = null) {}

	/**
	 * Replaces a child
	 * @link http://www.php.net/manual/en/domnode.replacechild.php
	 * @param DOMNode $newnode <p>
	 * The new node. It must be a member of the target document, i.e.
	 * created by one of the DOMDocument->createXXX() methods or imported in
	 * the document by .
	 * </p>
	 * @param DOMNode $oldnode <p>
	 * The old node.
	 * </p>
	 * @return DOMNode The old node or false if an error occur.
	 */
	public function replaceChild (DOMNode $newnode, DOMNode $oldnode) {}

	/**
	 * Removes child from list of children
	 * @link http://www.php.net/manual/en/domnode.removechild.php
	 * @param DOMNode $oldnode <p>
	 * The removed child.
	 * </p>
	 * @return DOMNode If the child could be removed the function returns the old child.
	 */
	public function removeChild (DOMNode $oldnode) {}

	/**
	 * Adds new child at the end of the children
	 * @link http://www.php.net/manual/en/domnode.appendchild.php
	 * @param DOMNode $newnode <p>
	 * The appended child.
	 * </p>
	 * @return DOMNode The node added.
	 */
	public function appendChild (DOMNode $newnode) {}

	/**
	 * Checks if node has children
	 * @link http://www.php.net/manual/en/domnode.haschildnodes.php
	 * @return bool true on success or false on failure
	 */
	public function hasChildNodes () {}

	/**
	 * Clones a node
	 * @link http://www.php.net/manual/en/domnode.clonenode.php
	 * @param bool $deep [optional] <p>
	 * Indicates whether to copy all descendant nodes. This parameter is
	 * defaulted to false.
	 * </p>
	 * @return DOMNode The cloned node.
	 */
	public function cloneNode ($deep = null) {}

	/**
	 * Normalizes the node
	 * @link http://www.php.net/manual/en/domnode.normalize.php
	 * @return void
	 */
	public function normalize () {}

	/**
	 * Checks if feature is supported for specified version
	 * @link http://www.php.net/manual/en/domnode.issupported.php
	 * @param string $feature <p>
	 * The feature to test. See the example of
	 * DOMImplementation::hasFeature for a
	 * list of features.
	 * </p>
	 * @param string $version <p>
	 * The version number of the feature to test.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function isSupported ($feature, $version) {}

	/**
	 * Checks if node has attributes
	 * @link http://www.php.net/manual/en/domnode.hasattributes.php
	 * @return bool true on success or false on failure
	 */
	public function hasAttributes () {}

	/**
	 * @param DOMNode $other
	 */
	public function compareDocumentPosition (DOMNode $other) {}

	/**
	 * Indicates if two nodes are the same node
	 * @link http://www.php.net/manual/en/domnode.issamenode.php
	 * @param DOMNode $node <p>
	 * The compared node.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function isSameNode (DOMNode $node) {}

	/**
	 * Gets the namespace prefix of the node based on the namespace URI
	 * @link http://www.php.net/manual/en/domnode.lookupprefix.php
	 * @param string $namespaceURI <p>
	 * The namespace URI.
	 * </p>
	 * @return string The prefix of the namespace.
	 */
	public function lookupPrefix ($namespaceURI) {}

	/**
	 * Checks if the specified namespaceURI is the default namespace or not
	 * @link http://www.php.net/manual/en/domnode.isdefaultnamespace.php
	 * @param string $namespaceURI <p>
	 * The namespace URI to look for.
	 * </p>
	 * @return bool Return true if namespaceURI is the default
	 * namespace, false otherwise.
	 */
	public function isDefaultNamespace ($namespaceURI) {}

	/**
	 * Gets the namespace URI of the node based on the prefix
	 * @link http://www.php.net/manual/en/domnode.lookupnamespaceuri.php
	 * @param string $prefix <p>
	 * The prefix of the namespace.
	 * </p>
	 * @return string The namespace URI of the node.
	 */
	public function lookupNamespaceUri ($prefix) {}

	/**
	 * @param DOMNode $arg
	 */
	public function isEqualNode (DOMNode $arg) {}

	/**
	 * @param $feature
	 * @param $version
	 */
	public function getFeature ($feature, $version) {}

	/**
	 * @param $key
	 * @param $data
	 * @param $handler
	 */
	public function setUserData ($key, $data, $handler) {}

	/**
	 * @param $key
	 */
	public function getUserData ($key) {}

	/**
	 * Get an XPath for a node
	 * @link http://www.php.net/manual/en/domnode.getnodepath.php
	 * @return string a string containing the XPath, or &null; in case of an error.
	 */
	public function getNodePath () {}

	/**
	 * Get line number for a node
	 * @link http://www.php.net/manual/en/domnode.getlineno.php
	 * @return int Always returns the line number where the node was defined in.
	 */
	public function getLineNo () {}

	/**
	 * Canonicalize nodes to a string
	 * @link http://www.php.net/manual/en/domnode.c14n.php
	 * @param bool $exclusive [optional] <p>
	 * Enable exclusive parsing of only the nodes matched by the provided
	 * xpath or namespace prefixes.
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * Retain comments in output.
	 * </p>
	 * @param array $xpath [optional] <p>
	 * An array of xpaths to filter the nodes by.
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * An array of namespace prefixes to filter the nodes by.
	 * </p>
	 * @return string canonicalized nodes as a string or false on failure
	 */
	public function C14N ($exclusive = null, $with_comments = null, array $xpath = null, array $ns_prefixes = null) {}

	/**
	 * Canonicalize nodes to a file
	 * @link http://www.php.net/manual/en/domnode.c14nfile.php
	 * @param string $uri <p>
	 * Path to write the output to.
	 * </p>
	 * @param bool $exclusive [optional] <p>
	 * Enable exclusive parsing of only the nodes matched by the provided
	 * xpath or namespace prefixes.
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * Retain comments in output.
	 * </p>
	 * @param array $xpath [optional] <p>
	 * An array of xpaths to filter the nodes by.
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * An array of namespace prefixes to filter the nodes by.
	 * </p>
	 * @return int Number of bytes written or false on failure
	 */
	public function C14NFile ($uri, $exclusive = null, $with_comments = null, array $xpath = null, array $ns_prefixes = null) {}

}

class DOMDocument extends DOMNode  {

	/**
	 * Create new element node
	 * @link http://www.php.net/manual/en/domdocument.createelement.php
	 * @param string $name <p>
	 * The tag name of the element.
	 * </p>
	 * @param string $value [optional] <p>
	 * The value of the element. By default, an empty element will be created.
	 * The value can also be set later with DOMElement::$nodeValue.
	 * </p>
	 * @return DOMElement a new instance of class DOMElement or false
	 * if an error occurred.
	 */
	public function createElement ($name, $value = null) {}

	/**
	 * Create new document fragment
	 * @link http://www.php.net/manual/en/domdocument.createdocumentfragment.php
	 * @return DOMDocumentFragment The new DOMDocumentFragment or false if an error occurred.
	 */
	public function createDocumentFragment () {}

	/**
	 * Create new text node
	 * @link http://www.php.net/manual/en/domdocument.createtextnode.php
	 * @param string $content <p>
	 * The content of the text.
	 * </p>
	 * @return DOMText The new DOMText or false if an error occurred.
	 */
	public function createTextNode ($content) {}

	/**
	 * Create new comment node
	 * @link http://www.php.net/manual/en/domdocument.createcomment.php
	 * @param string $data <p>
	 * The content of the comment.
	 * </p>
	 * @return DOMComment The new DOMComment or false if an error occurred.
	 */
	public function createComment ($data) {}

	/**
	 * Create new cdata node
	 * @link http://www.php.net/manual/en/domdocument.createcdatasection.php
	 * @param string $data <p>
	 * The content of the cdata.
	 * </p>
	 * @return DOMCDATASection The new DOMCDATASection or false if an error occurred.
	 */
	public function createCDATASection ($data) {}

	/**
	 * Creates new PI node
	 * @link http://www.php.net/manual/en/domdocument.createprocessinginstruction.php
	 * @param string $target <p>
	 * The target of the processing instruction.
	 * </p>
	 * @param string $data [optional] <p>
	 * The content of the processing instruction.
	 * </p>
	 * @return DOMProcessingInstruction The new DOMProcessingInstruction or false if an error occurred.
	 */
	public function createProcessingInstruction ($target, $data = null) {}

	/**
	 * Create new attribute
	 * @link http://www.php.net/manual/en/domdocument.createattribute.php
	 * @param string $name <p>
	 * The name of the attribute.
	 * </p>
	 * @return DOMAttr The new DOMAttr or false if an error occurred.
	 */
	public function createAttribute ($name) {}

	/**
	 * Create new entity reference node
	 * @link http://www.php.net/manual/en/domdocument.createentityreference.php
	 * @param string $name <p>
	 * The content of the entity reference, e.g. the entity reference minus
	 * the leading &amp; and the trailing
	 * ; characters.
	 * </p>
	 * @return DOMEntityReference The new DOMEntityReference or false if an error
	 * occurred.
	 */
	public function createEntityReference ($name) {}

	/**
	 * Searches for all elements with given local tag name
	 * @link http://www.php.net/manual/en/domdocument.getelementsbytagname.php
	 * @param string $name <p>
	 * The local name (without namespace) of the tag to match on. The special value *
	 * matches all tags.
	 * </p>
	 * @return DOMNodeList A new DOMNodeList object containing all the matched
	 * elements.
	 */
	public function getElementsByTagName ($name) {}

	/**
	 * Import node into current document
	 * @link http://www.php.net/manual/en/domdocument.importnode.php
	 * @param DOMNode $importedNode <p>
	 * The node to import.
	 * </p>
	 * @param bool $deep [optional] <p>
	 * If set to true, this method will recursively import the subtree under
	 * the importedNode.
	 * </p>
	 * <p>
	 * To copy the nodes attributes deep needs to be set to true
	 * </p>
	 * @return DOMNode The copied node or false, if it cannot be copied.
	 */
	public function importNode (DOMNode $importedNode, $deep = null) {}

	/**
	 * Create new element node with an associated namespace
	 * @link http://www.php.net/manual/en/domdocument.createelementns.php
	 * @param string $namespaceURI <p>
	 * The URI of the namespace.
	 * </p>
	 * @param string $qualifiedName <p>
	 * The qualified name of the element, as prefix:tagname.
	 * </p>
	 * @param string $value [optional] <p>
	 * The value of the element. By default, an empty element will be created.
	 * You can also set the value later with DOMElement::$nodeValue.
	 * </p>
	 * @return DOMElement The new DOMElement or false if an error occurred.
	 */
	public function createElementNS ($namespaceURI, $qualifiedName, $value = null) {}

	/**
	 * Create new attribute node with an associated namespace
	 * @link http://www.php.net/manual/en/domdocument.createattributens.php
	 * @param string $namespaceURI <p>
	 * The URI of the namespace.
	 * </p>
	 * @param string $qualifiedName <p>
	 * The tag name and prefix of the attribute, as prefix:tagname.
	 * </p>
	 * @return DOMAttr The new DOMAttr or false if an error occurred.
	 */
	public function createAttributeNS ($namespaceURI, $qualifiedName) {}

	/**
	 * Searches for all elements with given tag name in specified namespace
	 * @link http://www.php.net/manual/en/domdocument.getelementsbytagnamens.php
	 * @param string $namespaceURI <p>
	 * The namespace URI of the elements to match on.
	 * The special value * matches all namespaces.
	 * </p>
	 * @param string $localName <p>
	 * The local name of the elements to match on.
	 * The special value * matches all local names.
	 * </p>
	 * @return DOMNodeList A new DOMNodeList object containing all the matched
	 * elements.
	 */
	public function getElementsByTagNameNS ($namespaceURI, $localName) {}

	/**
	 * Searches for an element with a certain id
	 * @link http://www.php.net/manual/en/domdocument.getelementbyid.php
	 * @param string $elementId <p>
	 * The unique id value for an element.
	 * </p>
	 * @return DOMElement the DOMElement or &null; if the element is
	 * not found.
	 */
	public function getElementById ($elementId) {}

	/**
	 * @param DOMNode $source
	 */
	public function adoptNode (DOMNode $source) {}

	/**
	 * Normalizes the document
	 * @link http://www.php.net/manual/en/domdocument.normalizedocument.php
	 * @return void
	 */
	public function normalizeDocument () {}

	/**
	 * @param DOMNode $node
	 * @param $namespaceURI
	 * @param $qualifiedName
	 */
	public function renameNode (DOMNode $node, $namespaceURI, $qualifiedName) {}

	/**
	 * Load XML from a file
	 * @link http://www.php.net/manual/en/domdocument.load.php
	 * @param string $filename <p>
	 * The path to the XML document.
	 * </p>
	 * @param int $options [optional] <p>
	 * Bitwise OR
	 * of the libxml option constants.
	 * </p>
	 * @return mixed true on success or false on failure If called statically, returns a
	 * DOMDocument or false on failure.
	 */
	public function load ($filename, $options = null) {}

	/**
	 * Dumps the internal XML tree back into a file
	 * @link http://www.php.net/manual/en/domdocument.save.php
	 * @param string $filename <p>
	 * The path to the saved XML document.
	 * </p>
	 * @param int $options [optional] <p>
	 * Additional Options. Currently only LIBXML_NOEMPTYTAG is supported.
	 * </p>
	 * @return int the number of bytes written or false if an error occurred.
	 */
	public function save ($filename, $options = null) {}

	/**
	 * Load XML from a string
	 * @link http://www.php.net/manual/en/domdocument.loadxml.php
	 * @param string $source <p>
	 * The string containing the XML.
	 * </p>
	 * @param int $options [optional] <p>
	 * Bitwise OR
	 * of the libxml option constants.
	 * </p>
	 * @return mixed true on success or false on failure If called statically, returns a
	 * DOMDocument or false on failure.
	 */
	public function loadXML ($source, $options = null) {}

	/**
	 * Dumps the internal XML tree back into a string
	 * @link http://www.php.net/manual/en/domdocument.savexml.php
	 * @param DOMNode $node [optional] <p>
	 * Use this parameter to output only a specific node without XML declaration
	 * rather than the entire document.
	 * </p>
	 * @param int $options [optional] <p>
	 * Additional Options. Currently only LIBXML_NOEMPTYTAG is supported.
	 * </p>
	 * @return string the XML, or false if an error occurred.
	 */
	public function saveXML (DOMNode $node = null, $options = null) {}

	/**
	 * Creates a new DOMDocument object
	 * @link http://www.php.net/manual/en/domdocument.construct.php
	 * @param $version [optional]
	 * @param $encoding [optional]
	 */
	public function __construct ($version = null, $encoding = null) {}

	/**
	 * Validates the document based on its DTD
	 * @link http://www.php.net/manual/en/domdocument.validate.php
	 * @return bool true on success or false on failure
	 * If the document have no DTD attached, this method will return false.
	 */
	public function validate () {}

	/**
	 * Substitutes XIncludes in a DOMDocument Object
	 * @link http://www.php.net/manual/en/domdocument.xinclude.php
	 * @param int $options [optional] <p>
	 * libxml parameters. Available
	 * since PHP 5.1.0 and Libxml 2.6.7.
	 * </p>
	 * @return int the number of XIncludes in the document, -1 if some processing failed,
	 * or false if there were no substitutions.
	 */
	public function xinclude ($options = null) {}

	/**
	 * Load HTML from a string
	 * @link http://www.php.net/manual/en/domdocument.loadhtml.php
	 * @param string $source <p>
	 * The HTML string.
	 * </p>
	 * @param int $options [optional] <p>
	 * Since PHP 5.4.0 and Libxml 2.6.0, you may also use the
	 * options parameter to specify additional Libxml parameters.
	 * </p>
	 * @return bool true on success or false on failure If called statically, returns a
	 * DOMDocument or false on failure.
	 */
	public function loadHTML ($source, $options = null) {}

	/**
	 * Load HTML from a file
	 * @link http://www.php.net/manual/en/domdocument.loadhtmlfile.php
	 * @param string $filename <p>
	 * The path to the HTML file.
	 * </p>
	 * @param int $options [optional] <p>
	 * Since PHP 5.4.0 and Libxml 2.6.0, you may also use the
	 * options parameter to specify additional Libxml parameters.
	 * </p>
	 * @return bool true on success or false on failure If called statically, returns a
	 * DOMDocument or false on failure.
	 */
	public function loadHTMLFile ($filename, $options = null) {}

	/**
	 * Dumps the internal document into a string using HTML formatting
	 * @link http://www.php.net/manual/en/domdocument.savehtml.php
	 * @param DOMNode $node [optional] <p>
	 * Optional parameter to output a subset of the document.
	 * </p>
	 * @return string the HTML, or false if an error occurred.
	 */
	public function saveHTML (DOMNode $node = null) {}

	/**
	 * Dumps the internal document into a file using HTML formatting
	 * @link http://www.php.net/manual/en/domdocument.savehtmlfile.php
	 * @param string $filename <p>
	 * The path to the saved HTML document.
	 * </p>
	 * @return int the number of bytes written or false if an error occurred.
	 */
	public function saveHTMLFile ($filename) {}

	/**
	 * Validates a document based on a schema
	 * @link http://www.php.net/manual/en/domdocument.schemavalidate.php
	 * @param string $filename <p>
	 * The path to the schema.
	 * </p>
	 * @param int $flags [optional] <p>
	 * A bitmask of Libxml schema validation flags. Currently the only supported value is LIBXML_SCHEMA_CREATE. Available since PHP 5.5.2 and Libxml 2.6.14.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function schemaValidate ($filename, $flags = null) {}

	/**
	 * Validates a document based on a schema
	 * @link http://www.php.net/manual/en/domdocument.schemavalidatesource.php
	 * @param string $source <p>
	 * A string containing the schema.
	 * </p>
	 * @param int $flags [optional] <p>
	 * A bitmask of Libxml schema validation flags. Currently the only supported value is LIBXML_SCHEMA_CREATE. Available since PHP 5.5.2 and Libxml 2.6.14.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function schemaValidateSource ($source, $flags = null) {}

	/**
	 * Performs relaxNG validation on the document
	 * @link http://www.php.net/manual/en/domdocument.relaxngvalidate.php
	 * @param string $filename <p>
	 * The RNG file.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function relaxNGValidate ($filename) {}

	/**
	 * Performs relaxNG validation on the document
	 * @link http://www.php.net/manual/en/domdocument.relaxngvalidatesource.php
	 * @param string $source <p>
	 * A string containing the RNG schema.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function relaxNGValidateSource ($source) {}

	/**
	 * Register extended class used to create base node type
	 * @link http://www.php.net/manual/en/domdocument.registernodeclass.php
	 * @param string $baseclass <p>
	 * The DOM class that you want to extend. You can find a list of these
	 * classes in the chapter introduction.
	 * </p>
	 * @param string $extendedclass <p>
	 * Your extended class name. If &null; is provided, any previously
	 * registered class extending baseclass will
	 * be removed.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function registerNodeClass ($baseclass, $extendedclass) {}

	/**
	 * Adds a new child before a reference node
	 * @link http://www.php.net/manual/en/domnode.insertbefore.php
	 * @param DOMNode $newnode <p>
	 * The new node.
	 * </p>
	 * @param DOMNode $refnode [optional] <p>
	 * The reference node. If not supplied, newnode is
	 * appended to the children.
	 * </p>
	 * @return DOMNode The inserted node.
	 */
	public function insertBefore (DOMNode $newnode, DOMNode $refnode = null) {}

	/**
	 * Replaces a child
	 * @link http://www.php.net/manual/en/domnode.replacechild.php
	 * @param DOMNode $newnode <p>
	 * The new node. It must be a member of the target document, i.e.
	 * created by one of the DOMDocument->createXXX() methods or imported in
	 * the document by .
	 * </p>
	 * @param DOMNode $oldnode <p>
	 * The old node.
	 * </p>
	 * @return DOMNode The old node or false if an error occur.
	 */
	public function replaceChild (DOMNode $newnode, DOMNode $oldnode) {}

	/**
	 * Removes child from list of children
	 * @link http://www.php.net/manual/en/domnode.removechild.php
	 * @param DOMNode $oldnode <p>
	 * The removed child.
	 * </p>
	 * @return DOMNode If the child could be removed the function returns the old child.
	 */
	public function removeChild (DOMNode $oldnode) {}

	/**
	 * Adds new child at the end of the children
	 * @link http://www.php.net/manual/en/domnode.appendchild.php
	 * @param DOMNode $newnode <p>
	 * The appended child.
	 * </p>
	 * @return DOMNode The node added.
	 */
	public function appendChild (DOMNode $newnode) {}

	/**
	 * Checks if node has children
	 * @link http://www.php.net/manual/en/domnode.haschildnodes.php
	 * @return bool true on success or false on failure
	 */
	public function hasChildNodes () {}

	/**
	 * Clones a node
	 * @link http://www.php.net/manual/en/domnode.clonenode.php
	 * @param bool $deep [optional] <p>
	 * Indicates whether to copy all descendant nodes. This parameter is
	 * defaulted to false.
	 * </p>
	 * @return DOMNode The cloned node.
	 */
	public function cloneNode ($deep = null) {}

	/**
	 * Normalizes the node
	 * @link http://www.php.net/manual/en/domnode.normalize.php
	 * @return void
	 */
	public function normalize () {}

	/**
	 * Checks if feature is supported for specified version
	 * @link http://www.php.net/manual/en/domnode.issupported.php
	 * @param string $feature <p>
	 * The feature to test. See the example of
	 * DOMImplementation::hasFeature for a
	 * list of features.
	 * </p>
	 * @param string $version <p>
	 * The version number of the feature to test.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function isSupported ($feature, $version) {}

	/**
	 * Checks if node has attributes
	 * @link http://www.php.net/manual/en/domnode.hasattributes.php
	 * @return bool true on success or false on failure
	 */
	public function hasAttributes () {}

	/**
	 * @param DOMNode $other
	 */
	public function compareDocumentPosition (DOMNode $other) {}

	/**
	 * Indicates if two nodes are the same node
	 * @link http://www.php.net/manual/en/domnode.issamenode.php
	 * @param DOMNode $node <p>
	 * The compared node.
	 * </p>
	 * @return bool true on success or false on failure
	 */
	public function isSameNode (DOMNode $node) {}

	/**
	 * Gets the namespace prefix of the node based on the namespace URI
	 * @link http://www.php.net/manual/en/domnode.lookupprefix.php
	 * @param string $namespaceURI <p>
	 * The namespace URI.
	 * </p>
	 * @return string The prefix of the namespace.
	 */
	public function lookupPrefix ($namespaceURI) {}

	/**
	 * Checks if the specified namespaceURI is the default namespace or not
	 * @link http://www.php.net/manual/en/domnode.isdefaultnamespace.php
	 * @param string $namespaceURI <p>
	 * The namespace URI to look for.
	 * </p>
	 * @return bool Return true if namespaceURI is the default
	 * namespace, false otherwise.
	 */
	public function isDefaultNamespace ($namespaceURI) {}

	/**
	 * Gets the namespace URI of the node based on the prefix
	 * @link http://www.php.net/manual/en/domnode.lookupnamespaceuri.php
	 * @param string $prefix <p>
	 * The prefix of the namespace.
	 * </p>
	 * @return string The namespace URI of the node.
	 */
	public function lookupNamespaceUri ($prefix) {}

	/**
	 * @param DOMNode $arg
	 */
	public function isEqualNode (DOMNode $arg) {}

	/**
	 * @param $feature
	 * @param $version
	 */
	public function getFeature ($feature, $version) {}

	/**
	 * @param $key
	 * @param $data
	 * @param $handler
	 */
	public function setUserData ($key, $data, $handler) {}

	/**
	 * @param $key
	 */
	public function getUserData ($key) {}

	/**
	 * Get an XPath for a node
	 * @link http://www.php.net/manual/en/domnode.getnodepath.php
	 * @return string a string containing the XPath, or &null; in case of an error.
	 */
	public function getNodePath () {}

	/**
	 * Get line number for a node
	 * @link http://www.php.net/manual/en/domnode.getlineno.php
	 * @return int Always returns the line number where the node was defined in.
	 */
	public function getLineNo () {}

	/**
	 * Canonicalize nodes to a string
	 * @link http://www.php.net/manual/en/domnode.c14n.php
	 * @param bool $exclusive [optional] <p>
	 * Enable exclusive parsing of only the nodes matched by the provided
	 * xpath or namespace prefixes.
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * Retain comments in output.
	 * </p>
	 * @param array $xpath [optional] <p>
	 * An array of xpaths to filter the nodes by.
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * An array of namespace prefixes to filter the nodes by.
	 * </p>
	 * @return string canonicalized nodes as a string or false on failure
	 */
	public function C14N ($exclusive = null, $with_comments = null, array $xpath = null, array $ns_prefixes = null) {}

	/**
	 * Canonicalize nodes to a file
	 * @link http://www.php.net/manual/en/domnode.c14nfile.php
	 * @param string $uri <p>
	 * Path to write the output to.
	 * </p>
	 * @param bool $exclusive [optional] <p>
	 * Enable exclusive parsing of only the nodes matched by the provided
	 * xpath or namespace prefixes.
	 * </p>
	 * @param bool $with_comments [optional] <p>
	 * Retain comments in output.
	 * </p>
	 * @param array $xpath [optional] <p>
	 * An array of xpaths to filter the nodes by.
	 * </p>
	 * @param array $ns_prefixes [optional] <p>
	 * An array of namespace prefixes to filter the nodes by.
	 * </p>
	 * @return int Number of bytes written or false on failure
	 */
	public function C14NFile ($uri, $exclusive = null, $with_comments = null, array $xpath = null, array $ns_prefixes = null) {}

}
?>

