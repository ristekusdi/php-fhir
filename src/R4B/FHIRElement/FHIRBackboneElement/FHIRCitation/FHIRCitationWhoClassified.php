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
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBoolean;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRExtension;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference;
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
 * Class FHIRCitationWhoClassified
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation
 */
class FHIRCitationWhoClassified extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CITATION_DOT_WHO_CLASSIFIED;
    const FIELD_PERSON = 'person';
    const FIELD_ORGANIZATION = 'organization';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_CLASSIFIER_COPYRIGHT = 'classifierCopyright';
    const FIELD_CLASSIFIER_COPYRIGHT_EXT = '_classifierCopyright';
    const FIELD_FREE_TO_SHARE = 'freeToShare';
    const FIELD_FREE_TO_SHARE_EXT = '_freeToShare';

    /** @var string */
    private $_xmlns = '';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who created the classification.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference
     */
    protected ?FHIRReference $person = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization who created the classification.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference
     */
    protected ?FHIRReference $organization = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The publisher of the classification, not the publisher of the article or
     * artifact being cited.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference
     */
    protected ?FHIRReference $publisher = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Rights management statement for the classification.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $classifierCopyright = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Acceptable to re-use the classification.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRBooleanPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBoolean
     */
    protected ?FHIRBoolean $freeToShare = null;

    /**
     * Validation map for fields in type Citation.WhoClassified
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRCitationWhoClassified Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCitationWhoClassified::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_PERSON])) {
            if ($data[self::FIELD_PERSON] instanceof FHIRReference) {
                $this->setPerson($data[self::FIELD_PERSON]);
            } else {
                $this->setPerson(new FHIRReference($data[self::FIELD_PERSON]));
            }
        }
        if (isset($data[self::FIELD_ORGANIZATION])) {
            if ($data[self::FIELD_ORGANIZATION] instanceof FHIRReference) {
                $this->setOrganization($data[self::FIELD_ORGANIZATION]);
            } else {
                $this->setOrganization(new FHIRReference($data[self::FIELD_ORGANIZATION]));
            }
        }
        if (isset($data[self::FIELD_PUBLISHER])) {
            if ($data[self::FIELD_PUBLISHER] instanceof FHIRReference) {
                $this->setPublisher($data[self::FIELD_PUBLISHER]);
            } else {
                $this->setPublisher(new FHIRReference($data[self::FIELD_PUBLISHER]));
            }
        }
        if (isset($data[self::FIELD_CLASSIFIER_COPYRIGHT]) || isset($data[self::FIELD_CLASSIFIER_COPYRIGHT_EXT])) {
            $value = $data[self::FIELD_CLASSIFIER_COPYRIGHT] ?? null;
            $ext = (isset($data[self::FIELD_CLASSIFIER_COPYRIGHT_EXT]) && is_array($data[self::FIELD_CLASSIFIER_COPYRIGHT_EXT])) ? $data[self::FIELD_CLASSIFIER_COPYRIGHT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setClassifierCopyright($value);
                } else if (is_array($value)) {
                    $this->setClassifierCopyright(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setClassifierCopyright(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setClassifierCopyright(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_FREE_TO_SHARE]) || isset($data[self::FIELD_FREE_TO_SHARE_EXT])) {
            $value = $data[self::FIELD_FREE_TO_SHARE] ?? null;
            $ext = (isset($data[self::FIELD_FREE_TO_SHARE_EXT]) && is_array($data[self::FIELD_FREE_TO_SHARE_EXT])) ? $data[self::FIELD_FREE_TO_SHARE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setFreeToShare($value);
                } else if (is_array($value)) {
                    $this->setFreeToShare(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setFreeToShare(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFreeToShare(new FHIRBoolean($ext));
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
        return "<CitationWhoClassified{$xmlns}></CitationWhoClassified>";
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who created the classification.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference
     */
    public function getPerson(): ?FHIRReference
    {
        return $this->person;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Person who created the classification.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference $person
     * @return static
     */
    public function setPerson(?FHIRReference $person = null): object
    {
        $this->_trackValueSet($this->person, $person);
        $this->person = $person;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization who created the classification.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference
     */
    public function getOrganization(): ?FHIRReference
    {
        return $this->organization;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Organization who created the classification.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference $organization
     * @return static
     */
    public function setOrganization(?FHIRReference $organization = null): object
    {
        $this->_trackValueSet($this->organization, $organization);
        $this->organization = $organization;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The publisher of the classification, not the publisher of the article or
     * artifact being cited.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference
     */
    public function getPublisher(): ?FHIRReference
    {
        return $this->publisher;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The publisher of the classification, not the publisher of the article or
     * artifact being cited.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference $publisher
     * @return static
     */
    public function setPublisher(?FHIRReference $publisher = null): object
    {
        $this->_trackValueSet($this->publisher, $publisher);
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Rights management statement for the classification.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getClassifierCopyright(): ?FHIRString
    {
        return $this->classifierCopyright;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Rights management statement for the classification.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $classifierCopyright
     * @return static
     */
    public function setClassifierCopyright($classifierCopyright = null): object
    {
        if (null !== $classifierCopyright && !($classifierCopyright instanceof FHIRString)) {
            $classifierCopyright = new FHIRString($classifierCopyright);
        }
        $this->_trackValueSet($this->classifierCopyright, $classifierCopyright);
        $this->classifierCopyright = $classifierCopyright;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Acceptable to re-use the classification.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRBooleanPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBoolean
     */
    public function getFreeToShare(): ?FHIRBoolean
    {
        return $this->freeToShare;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Acceptable to re-use the classification.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRBooleanPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBoolean $freeToShare
     * @return static
     */
    public function setFreeToShare($freeToShare = null): object
    {
        if (null !== $freeToShare && !($freeToShare instanceof FHIRBoolean)) {
            $freeToShare = new FHIRBoolean($freeToShare);
        }
        $this->_trackValueSet($this->freeToShare, $freeToShare);
        $this->freeToShare = $freeToShare;
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
        if (null !== ($v = $this->getPerson())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERSON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOrganization())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ORGANIZATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLISHER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getClassifierCopyright())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CLASSIFIER_COPYRIGHT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFreeToShare())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FREE_TO_SHARE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_PERSON])) {
            $v = $this->getPerson();
            foreach($validationRules[self::FIELD_PERSON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_WHO_CLASSIFIED, self::FIELD_PERSON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERSON])) {
                        $errs[self::FIELD_PERSON] = [];
                    }
                    $errs[self::FIELD_PERSON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ORGANIZATION])) {
            $v = $this->getOrganization();
            foreach($validationRules[self::FIELD_ORGANIZATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_WHO_CLASSIFIED, self::FIELD_ORGANIZATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ORGANIZATION])) {
                        $errs[self::FIELD_ORGANIZATION] = [];
                    }
                    $errs[self::FIELD_ORGANIZATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLISHER])) {
            $v = $this->getPublisher();
            foreach($validationRules[self::FIELD_PUBLISHER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_WHO_CLASSIFIED, self::FIELD_PUBLISHER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLISHER])) {
                        $errs[self::FIELD_PUBLISHER] = [];
                    }
                    $errs[self::FIELD_PUBLISHER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFIER_COPYRIGHT])) {
            $v = $this->getClassifierCopyright();
            foreach($validationRules[self::FIELD_CLASSIFIER_COPYRIGHT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_WHO_CLASSIFIED, self::FIELD_CLASSIFIER_COPYRIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFIER_COPYRIGHT])) {
                        $errs[self::FIELD_CLASSIFIER_COPYRIGHT] = [];
                    }
                    $errs[self::FIELD_CLASSIFIER_COPYRIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FREE_TO_SHARE])) {
            $v = $this->getFreeToShare();
            foreach($validationRules[self::FIELD_FREE_TO_SHARE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_WHO_CLASSIFIED, self::FIELD_FREE_TO_SHARE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FREE_TO_SHARE])) {
                        $errs[self::FIELD_FREE_TO_SHARE] = [];
                    }
                    $errs[self::FIELD_FREE_TO_SHARE][$rule] = $err;
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
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWhoClassified $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWhoClassified
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
                throw new \DomainException(sprintf('FHIRCitationWhoClassified::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCitationWhoClassified::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRCitationWhoClassified(null);
        } elseif (!is_object($type) || !($type instanceof FHIRCitationWhoClassified)) {
            throw new \RuntimeException(sprintf(
                'FHIRCitationWhoClassified::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWhoClassified or null, %s seen.',
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
            if (self::FIELD_PERSON === $n->nodeName) {
                $type->setPerson(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_ORGANIZATION === $n->nodeName) {
                $type->setOrganization(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PUBLISHER === $n->nodeName) {
                $type->setPublisher(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CLASSIFIER_COPYRIGHT === $n->nodeName) {
                $type->setClassifierCopyright(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_FREE_TO_SHARE === $n->nodeName) {
                $type->setFreeToShare(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CLASSIFIER_COPYRIGHT);
        if (null !== $n) {
            $pt = $type->getClassifierCopyright();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setClassifierCopyright($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_FREE_TO_SHARE);
        if (null !== $n) {
            $pt = $type->getFreeToShare();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setFreeToShare($n->nodeValue);
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
        if (null !== ($v = $this->getPerson())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PERSON);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOrganization())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ORGANIZATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPublisher())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PUBLISHER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getClassifierCopyright())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CLASSIFIER_COPYRIGHT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFreeToShare())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FREE_TO_SHARE);
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
        if (null !== ($v = $this->getPerson())) {
            $out->{self::FIELD_PERSON} = $v;
        }
        if (null !== ($v = $this->getOrganization())) {
            $out->{self::FIELD_ORGANIZATION} = $v;
        }
        if (null !== ($v = $this->getPublisher())) {
            $out->{self::FIELD_PUBLISHER} = $v;
        }
        if (null !== ($v = $this->getClassifierCopyright())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CLASSIFIER_COPYRIGHT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CLASSIFIER_COPYRIGHT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFreeToShare())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FREE_TO_SHARE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FREE_TO_SHARE_EXT} = $ext;
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