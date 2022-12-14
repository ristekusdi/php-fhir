<?php declare(strict_types=1);

namespace RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation;

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
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRExtension;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRString;
use RistekUSDI\FHIR\R4B\FHIRStringPrimitive;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 *
 * Class FHIRCitationPeriodicRelease
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation
 */
class FHIRCitationPeriodicRelease extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PERIODIC_RELEASE;
    const FIELD_CITED_MEDIUM = 'citedMedium';
    const FIELD_VOLUME = 'volume';
    const FIELD_VOLUME_EXT = '_volume';
    const FIELD_ISSUE = 'issue';
    const FIELD_ISSUE_EXT = '_issue';
    const FIELD_DATE_OF_PUBLICATION = 'dateOfPublication';

    /** @var string */
    private $_xmlns = '';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the medium cited. Common codes are "Internet" or "Print".
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $citedMedium = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Volume number of journal in which the article is published.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $volume = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Issue, part or supplement of journal in which the article is published.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $issue = null;

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Defining the date on which the issue of the journal was published.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationDateOfPublication
     */
    protected ?FHIRCitationDateOfPublication $dateOfPublication = null;

    /**
     * Validation map for fields in type Citation.PeriodicRelease
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRCitationPeriodicRelease Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCitationPeriodicRelease::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CITED_MEDIUM])) {
            if ($data[self::FIELD_CITED_MEDIUM] instanceof FHIRCodeableConcept) {
                $this->setCitedMedium($data[self::FIELD_CITED_MEDIUM]);
            } else {
                $this->setCitedMedium(new FHIRCodeableConcept($data[self::FIELD_CITED_MEDIUM]));
            }
        }
        if (isset($data[self::FIELD_VOLUME]) || isset($data[self::FIELD_VOLUME_EXT])) {
            $value = $data[self::FIELD_VOLUME] ?? null;
            $ext = (isset($data[self::FIELD_VOLUME_EXT]) && is_array($data[self::FIELD_VOLUME_EXT])) ? $data[self::FIELD_VOLUME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setVolume($value);
                } else if (is_array($value)) {
                    $this->setVolume(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setVolume(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVolume(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ISSUE]) || isset($data[self::FIELD_ISSUE_EXT])) {
            $value = $data[self::FIELD_ISSUE] ?? null;
            $ext = (isset($data[self::FIELD_ISSUE_EXT]) && is_array($data[self::FIELD_ISSUE_EXT])) ? $data[self::FIELD_ISSUE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setIssue($value);
                } else if (is_array($value)) {
                    $this->setIssue(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setIssue(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIssue(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DATE_OF_PUBLICATION])) {
            if ($data[self::FIELD_DATE_OF_PUBLICATION] instanceof FHIRCitationDateOfPublication) {
                $this->setDateOfPublication($data[self::FIELD_DATE_OF_PUBLICATION]);
            } else {
                $this->setDateOfPublication(new FHIRCitationDateOfPublication($data[self::FIELD_DATE_OF_PUBLICATION]));
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
        return "<CitationPeriodicRelease{$xmlns}></CitationPeriodicRelease>";
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the medium cited. Common codes are "Internet" or "Print".
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getCitedMedium(): ?FHIRCodeableConcept
    {
        return $this->citedMedium;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes the form of the medium cited. Common codes are "Internet" or "Print".
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $citedMedium
     * @return static
     */
    public function setCitedMedium(?FHIRCodeableConcept $citedMedium = null): object
    {
        $this->_trackValueSet($this->citedMedium, $citedMedium);
        $this->citedMedium = $citedMedium;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Volume number of journal in which the article is published.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getVolume(): ?FHIRString
    {
        return $this->volume;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Volume number of journal in which the article is published.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $volume
     * @return static
     */
    public function setVolume($volume = null): object
    {
        if (null !== $volume && !($volume instanceof FHIRString)) {
            $volume = new FHIRString($volume);
        }
        $this->_trackValueSet($this->volume, $volume);
        $this->volume = $volume;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Issue, part or supplement of journal in which the article is published.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getIssue(): ?FHIRString
    {
        return $this->issue;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Issue, part or supplement of journal in which the article is published.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $issue
     * @return static
     */
    public function setIssue($issue = null): object
    {
        if (null !== $issue && !($issue instanceof FHIRString)) {
            $issue = new FHIRString($issue);
        }
        $this->_trackValueSet($this->issue, $issue);
        $this->issue = $issue;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Defining the date on which the issue of the journal was published.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationDateOfPublication
     */
    public function getDateOfPublication(): ?FHIRCitationDateOfPublication
    {
        return $this->dateOfPublication;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Defining the date on which the issue of the journal was published.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationDateOfPublication $dateOfPublication
     * @return static
     */
    public function setDateOfPublication(?FHIRCitationDateOfPublication $dateOfPublication = null): object
    {
        $this->_trackValueSet($this->dateOfPublication, $dateOfPublication);
        $this->dateOfPublication = $dateOfPublication;
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
        if (null !== ($v = $this->getCitedMedium())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CITED_MEDIUM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVolume())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VOLUME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getIssue())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ISSUE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDateOfPublication())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE_OF_PUBLICATION] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_CITED_MEDIUM])) {
            $v = $this->getCitedMedium();
            foreach($validationRules[self::FIELD_CITED_MEDIUM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PERIODIC_RELEASE, self::FIELD_CITED_MEDIUM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CITED_MEDIUM])) {
                        $errs[self::FIELD_CITED_MEDIUM] = [];
                    }
                    $errs[self::FIELD_CITED_MEDIUM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VOLUME])) {
            $v = $this->getVolume();
            foreach($validationRules[self::FIELD_VOLUME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PERIODIC_RELEASE, self::FIELD_VOLUME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VOLUME])) {
                        $errs[self::FIELD_VOLUME] = [];
                    }
                    $errs[self::FIELD_VOLUME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ISSUE])) {
            $v = $this->getIssue();
            foreach($validationRules[self::FIELD_ISSUE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PERIODIC_RELEASE, self::FIELD_ISSUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ISSUE])) {
                        $errs[self::FIELD_ISSUE] = [];
                    }
                    $errs[self::FIELD_ISSUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_OF_PUBLICATION])) {
            $v = $this->getDateOfPublication();
            foreach($validationRules[self::FIELD_DATE_OF_PUBLICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PERIODIC_RELEASE, self::FIELD_DATE_OF_PUBLICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_OF_PUBLICATION])) {
                        $errs[self::FIELD_DATE_OF_PUBLICATION] = [];
                    }
                    $errs[self::FIELD_DATE_OF_PUBLICATION][$rule] = $err;
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
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPeriodicRelease $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPeriodicRelease
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
                throw new \DomainException(sprintf('FHIRCitationPeriodicRelease::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCitationPeriodicRelease::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRCitationPeriodicRelease(null);
        } elseif (!is_object($type) || !($type instanceof FHIRCitationPeriodicRelease)) {
            throw new \RuntimeException(sprintf(
                'FHIRCitationPeriodicRelease::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPeriodicRelease or null, %s seen.',
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
            if (self::FIELD_CITED_MEDIUM === $n->nodeName) {
                $type->setCitedMedium(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_VOLUME === $n->nodeName) {
                $type->setVolume(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_ISSUE === $n->nodeName) {
                $type->setIssue(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DATE_OF_PUBLICATION === $n->nodeName) {
                $type->setDateOfPublication(FHIRCitationDateOfPublication::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VOLUME);
        if (null !== $n) {
            $pt = $type->getVolume();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setVolume($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ISSUE);
        if (null !== $n) {
            $pt = $type->getIssue();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setIssue($n->nodeValue);
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
        if (null !== ($v = $this->getCitedMedium())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CITED_MEDIUM);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getVolume())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VOLUME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getIssue())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ISSUE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDateOfPublication())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATE_OF_PUBLICATION);
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
        if (null !== ($v = $this->getCitedMedium())) {
            $out->{self::FIELD_CITED_MEDIUM} = $v;
        }
        if (null !== ($v = $this->getVolume())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VOLUME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VOLUME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getIssue())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ISSUE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ISSUE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDateOfPublication())) {
            $out->{self::FIELD_DATE_OF_PUBLICATION} = $v;
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