<?php declare(strict_types=1);

namespace RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRStructureMap;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 31st, 2022 07:37+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2022 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
 * 
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRExtension;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRId;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRString;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRStructureMapInputMode;
use RistekUSDI\FHIR\R4B\FHIRStringPrimitive;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;

/**
 * A Map of relationships between 2 structures that can be used to transform data.
 *
 * Class FHIRStructureMapInput
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRStructureMap
 */
class FHIRStructureMapInput extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_INPUT;
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_MODE = 'mode';
    const FIELD_MODE_EXT = '_mode';
    const FIELD_DOCUMENTATION = 'documentation';
    const FIELD_DOCUMENTATION_EXT = '_documentation';

    /** @var string */
    private $_xmlns = '';

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Name for this instance of data.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRIdPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRId
     */
    protected ?FHIRId $name = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Type for this instance of data.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $type = null;

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Mode for this instance of data.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRStructureMapInputMode
     */
    protected ?FHIRStructureMapInputMode $mode = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Documentation for this instance of data.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $documentation = null;

    /**
     * Validation map for fields in type StructureMap.Input
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRStructureMapInput Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRStructureMapInput::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            $value = $data[self::FIELD_NAME] ?? null;
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) ? $data[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRId) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRId(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRId([FHIRId::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setName(new FHIRId($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_MODE]) || isset($data[self::FIELD_MODE_EXT])) {
            $value = $data[self::FIELD_MODE] ?? null;
            $ext = (isset($data[self::FIELD_MODE_EXT]) && is_array($data[self::FIELD_MODE_EXT])) ? $data[self::FIELD_MODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRStructureMapInputMode) {
                    $this->setMode($value);
                } else if (is_array($value)) {
                    $this->setMode(new FHIRStructureMapInputMode(array_merge($ext, $value)));
                } else {
                    $this->setMode(new FHIRStructureMapInputMode([FHIRStructureMapInputMode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMode(new FHIRStructureMapInputMode($ext));
            }
        }
        if (isset($data[self::FIELD_DOCUMENTATION]) || isset($data[self::FIELD_DOCUMENTATION_EXT])) {
            $value = $data[self::FIELD_DOCUMENTATION] ?? null;
            $ext = (isset($data[self::FIELD_DOCUMENTATION_EXT]) && is_array($data[self::FIELD_DOCUMENTATION_EXT])) ? $data[self::FIELD_DOCUMENTATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDocumentation($value);
                } else if (is_array($value)) {
                    $this->setDocumentation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDocumentation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDocumentation(new FHIRString($ext));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition(): string
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<StructureMapInput{$xmlns}></StructureMapInput>";
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Name for this instance of data.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRIdPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRId
     */
    public function getName(): ?FHIRId
    {
        return $this->name;
    }

    /**
     * Any combination of letters, numerals, "-" and ".", with a length limit of 64
     * characters. (This might be an integer, an unprefixed OID, UUID or any other
     * identifier pattern that meets these constraints.) Ids are case-insensitive.
     * RFC 4122
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Name for this instance of data.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRIdPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRId $name
     * @return static
     */
    public function setName($name = null): object
    {
        if (null !== $name && !($name instanceof FHIRId)) {
            $name = new FHIRId($name);
        }
        $this->_trackValueSet($this->name, $name);
        $this->name = $name;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Type for this instance of data.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getType(): ?FHIRString
    {
        return $this->type;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Type for this instance of data.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $type
     * @return static
     */
    public function setType($type = null): object
    {
        if (null !== $type && !($type instanceof FHIRString)) {
            $type = new FHIRString($type);
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Mode for this instance of data.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRStructureMapInputMode
     */
    public function getMode(): ?FHIRStructureMapInputMode
    {
        return $this->mode;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Mode for this instance of data.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRStructureMapInputMode $mode
     * @return static
     */
    public function setMode(?FHIRStructureMapInputMode $mode = null): object
    {
        $this->_trackValueSet($this->mode, $mode);
        $this->mode = $mode;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Documentation for this instance of data.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getDocumentation(): ?FHIRString
    {
        return $this->documentation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Documentation for this instance of data.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $documentation
     * @return static
     */
    public function setDocumentation($documentation = null): object
    {
        if (null !== $documentation && !($documentation instanceof FHIRString)) {
            $documentation = new FHIRString($documentation);
        }
        $this->_trackValueSet($this->documentation, $documentation);
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOCUMENTATION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_INPUT, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_INPUT, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODE])) {
            $v = $this->getMode();
            foreach($validationRules[self::FIELD_MODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_INPUT, self::FIELD_MODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODE])) {
                        $errs[self::FIELD_MODE] = [];
                    }
                    $errs[self::FIELD_MODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOCUMENTATION])) {
            $v = $this->getDocumentation();
            foreach($validationRules[self::FIELD_DOCUMENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_STRUCTURE_MAP_DOT_INPUT, self::FIELD_DOCUMENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOCUMENTATION])) {
                        $errs[self::FIELD_DOCUMENTATION] = [];
                    }
                    $errs[self::FIELD_DOCUMENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\DOMElement $element
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapInput $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapInput
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, ?int $libxmlOpts = 591872): ?PHPFHIRTypeInterface
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            if (false === $dom->loadXML($element, $libxmlOpts)) {
                throw new \DomainException(sprintf('FHIRStructureMapInput::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRStructureMapInput::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRStructureMapInput(null);
        } elseif (!is_object($type) || !($type instanceof FHIRStructureMapInput)) {
            throw new \RuntimeException(sprintf(
                'FHIRStructureMapInput::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRStructureMap\FHIRStructureMapInput or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for ($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_NAME === $n->nodeName) {
                $type->setName(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MODE === $n->nodeName) {
                $type->setMode(FHIRStructureMapInputMode::xmlUnserialize($n));
            } elseif (self::FIELD_DOCUMENTATION === $n->nodeName) {
                $type->setDocumentation(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NAME);
        if (null !== $n) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setName($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TYPE);
        if (null !== $n) {
            $pt = $type->getType();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setType($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DOCUMENTATION);
        if (null !== $n) {
            $pt = $type->getDocumentation();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDocumentation($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, ?int $libxmlOpts = 591872): \DOMElement
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMode())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MODE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDocumentation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOCUMENTATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize()
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRId::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMode())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MODE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRStructureMapInputMode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MODE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDocumentation())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DOCUMENTATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DOCUMENTATION_EXT} = $ext;
            }
        }

        return $out;
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}