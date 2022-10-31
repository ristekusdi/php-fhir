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

use RistekUSDI\FHIR\R4B\FHIRElement\FHIRAttachment;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRExtension;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRUri;
use RistekUSDI\FHIR\R4B\FHIRStringPrimitive;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 *
 * Class FHIRCitationRelatesTo
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation
 */
class FHIRCitationRelatesTo extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO;
    const FIELD_RELATIONSHIP_TYPE = 'relationshipType';
    const FIELD_TARGET_CLASSIFIER = 'targetClassifier';
    const FIELD_TARGET_URI = 'targetUri';
    const FIELD_TARGET_URI_EXT = '_targetUri';
    const FIELD_TARGET_IDENTIFIER = 'targetIdentifier';
    const FIELD_TARGET_REFERENCE = 'targetReference';
    const FIELD_TARGET_ATTACHMENT = 'targetAttachment';

    /** @var string */
    private $_xmlns = '';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How the Citation resource relates to the target artifact.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $relationshipType = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clasification of the related artifact.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected ?array $targetClassifier = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRUriPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRUri
     */
    protected ?FHIRUri $targetUri = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier
     */
    protected ?FHIRIdentifier $targetIdentifier = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference
     */
    protected ?FHIRReference $targetReference = null;

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRAttachment
     */
    protected ?FHIRAttachment $targetAttachment = null;

    /**
     * Validation map for fields in type Citation.RelatesTo
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRCitationRelatesTo Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCitationRelatesTo::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_RELATIONSHIP_TYPE])) {
            if ($data[self::FIELD_RELATIONSHIP_TYPE] instanceof FHIRCodeableConcept) {
                $this->setRelationshipType($data[self::FIELD_RELATIONSHIP_TYPE]);
            } else {
                $this->setRelationshipType(new FHIRCodeableConcept($data[self::FIELD_RELATIONSHIP_TYPE]));
            }
        }
        if (isset($data[self::FIELD_TARGET_CLASSIFIER])) {
            if (is_array($data[self::FIELD_TARGET_CLASSIFIER])) {
                foreach($data[self::FIELD_TARGET_CLASSIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addTargetClassifier($v);
                    } else {
                        $this->addTargetClassifier(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_TARGET_CLASSIFIER] instanceof FHIRCodeableConcept) {
                $this->addTargetClassifier($data[self::FIELD_TARGET_CLASSIFIER]);
            } else {
                $this->addTargetClassifier(new FHIRCodeableConcept($data[self::FIELD_TARGET_CLASSIFIER]));
            }
        }
        if (isset($data[self::FIELD_TARGET_URI]) || isset($data[self::FIELD_TARGET_URI_EXT])) {
            $value = $data[self::FIELD_TARGET_URI] ?? null;
            $ext = (isset($data[self::FIELD_TARGET_URI_EXT]) && is_array($data[self::FIELD_TARGET_URI_EXT])) ? $data[self::FIELD_TARGET_URI_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setTargetUri($value);
                } else if (is_array($value)) {
                    $this->setTargetUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setTargetUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTargetUri(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_TARGET_IDENTIFIER])) {
            if ($data[self::FIELD_TARGET_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setTargetIdentifier($data[self::FIELD_TARGET_IDENTIFIER]);
            } else {
                $this->setTargetIdentifier(new FHIRIdentifier($data[self::FIELD_TARGET_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_TARGET_REFERENCE])) {
            if ($data[self::FIELD_TARGET_REFERENCE] instanceof FHIRReference) {
                $this->setTargetReference($data[self::FIELD_TARGET_REFERENCE]);
            } else {
                $this->setTargetReference(new FHIRReference($data[self::FIELD_TARGET_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_TARGET_ATTACHMENT])) {
            if ($data[self::FIELD_TARGET_ATTACHMENT] instanceof FHIRAttachment) {
                $this->setTargetAttachment($data[self::FIELD_TARGET_ATTACHMENT]);
            } else {
                $this->setTargetAttachment(new FHIRAttachment($data[self::FIELD_TARGET_ATTACHMENT]));
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
        return "<CitationRelatesTo{$xmlns}></CitationRelatesTo>";
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How the Citation resource relates to the target artifact.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationshipType(): ?FHIRCodeableConcept
    {
        return $this->relationshipType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * How the Citation resource relates to the target artifact.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $relationshipType
     * @return static
     */
    public function setRelationshipType(?FHIRCodeableConcept $relationshipType = null): object
    {
        $this->_trackValueSet($this->relationshipType, $relationshipType);
        $this->relationshipType = $relationshipType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clasification of the related artifact.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getTargetClassifier(): ?array
    {
        return $this->targetClassifier;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clasification of the related artifact.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $targetClassifier
     * @return static
     */
    public function addTargetClassifier(?FHIRCodeableConcept $targetClassifier = null): object
    {
        $this->_trackValueAdded();
        $this->targetClassifier[] = $targetClassifier;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The clasification of the related artifact.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[] $targetClassifier
     * @return static
     */
    public function setTargetClassifier(array $targetClassifier = []): object
    {
        if ([] !== $this->targetClassifier) {
            $this->_trackValuesRemoved(count($this->targetClassifier));
            $this->targetClassifier = [];
        }
        if ([] === $targetClassifier) {
            return $this;
        }
        foreach($targetClassifier as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addTargetClassifier($v);
            } else {
                $this->addTargetClassifier(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRUriPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRUri
     */
    public function getTargetUri(): ?FHIRUri
    {
        return $this->targetUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRUriPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRUri $targetUri
     * @return static
     */
    public function setTargetUri($targetUri = null): object
    {
        if (null !== $targetUri && !($targetUri instanceof FHIRUri)) {
            $targetUri = new FHIRUri($targetUri);
        }
        $this->_trackValueSet($this->targetUri, $targetUri);
        $this->targetUri = $targetUri;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier
     */
    public function getTargetIdentifier(): ?FHIRIdentifier
    {
        return $this->targetIdentifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier $targetIdentifier
     * @return static
     */
    public function setTargetIdentifier(?FHIRIdentifier $targetIdentifier = null): object
    {
        $this->_trackValueSet($this->targetIdentifier, $targetIdentifier);
        $this->targetIdentifier = $targetIdentifier;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference
     */
    public function getTargetReference(): ?FHIRReference
    {
        return $this->targetReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference $targetReference
     * @return static
     */
    public function setTargetReference(?FHIRReference $targetReference = null): object
    {
        $this->_trackValueSet($this->targetReference, $targetReference);
        $this->targetReference = $targetReference;
        return $this;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRAttachment
     */
    public function getTargetAttachment(): ?FHIRAttachment
    {
        return $this->targetAttachment;
    }

    /**
     * For referring to data content defined in other formats.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The article or artifact that the Citation Resource is related to.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRAttachment $targetAttachment
     * @return static
     */
    public function setTargetAttachment(?FHIRAttachment $targetAttachment = null): object
    {
        $this->_trackValueSet($this->targetAttachment, $targetAttachment);
        $this->targetAttachment = $targetAttachment;
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
        if (null !== ($v = $this->getRelationshipType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATIONSHIP_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTargetClassifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TARGET_CLASSIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getTargetUri())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET_URI] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTargetIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET_IDENTIFIER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTargetReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTargetAttachment())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TARGET_ATTACHMENT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_RELATIONSHIP_TYPE])) {
            $v = $this->getRelationshipType();
            foreach($validationRules[self::FIELD_RELATIONSHIP_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO, self::FIELD_RELATIONSHIP_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIONSHIP_TYPE])) {
                        $errs[self::FIELD_RELATIONSHIP_TYPE] = [];
                    }
                    $errs[self::FIELD_RELATIONSHIP_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_CLASSIFIER])) {
            $v = $this->getTargetClassifier();
            foreach($validationRules[self::FIELD_TARGET_CLASSIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO, self::FIELD_TARGET_CLASSIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_CLASSIFIER])) {
                        $errs[self::FIELD_TARGET_CLASSIFIER] = [];
                    }
                    $errs[self::FIELD_TARGET_CLASSIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_URI])) {
            $v = $this->getTargetUri();
            foreach($validationRules[self::FIELD_TARGET_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO, self::FIELD_TARGET_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_URI])) {
                        $errs[self::FIELD_TARGET_URI] = [];
                    }
                    $errs[self::FIELD_TARGET_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_IDENTIFIER])) {
            $v = $this->getTargetIdentifier();
            foreach($validationRules[self::FIELD_TARGET_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO, self::FIELD_TARGET_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_IDENTIFIER])) {
                        $errs[self::FIELD_TARGET_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_TARGET_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_REFERENCE])) {
            $v = $this->getTargetReference();
            foreach($validationRules[self::FIELD_TARGET_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO, self::FIELD_TARGET_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_REFERENCE])) {
                        $errs[self::FIELD_TARGET_REFERENCE] = [];
                    }
                    $errs[self::FIELD_TARGET_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_ATTACHMENT])) {
            $v = $this->getTargetAttachment();
            foreach($validationRules[self::FIELD_TARGET_ATTACHMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_RELATES_TO, self::FIELD_TARGET_ATTACHMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_ATTACHMENT])) {
                        $errs[self::FIELD_TARGET_ATTACHMENT] = [];
                    }
                    $errs[self::FIELD_TARGET_ATTACHMENT][$rule] = $err;
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
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo
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
                throw new \DomainException(sprintf('FHIRCitationRelatesTo::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCitationRelatesTo::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRCitationRelatesTo(null);
        } elseif (!is_object($type) || !($type instanceof FHIRCitationRelatesTo)) {
            throw new \RuntimeException(sprintf(
                'FHIRCitationRelatesTo::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo or null, %s seen.',
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
            if (self::FIELD_RELATIONSHIP_TYPE === $n->nodeName) {
                $type->setRelationshipType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_TARGET_CLASSIFIER === $n->nodeName) {
                $type->addTargetClassifier(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_TARGET_URI === $n->nodeName) {
                $type->setTargetUri(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_TARGET_IDENTIFIER === $n->nodeName) {
                $type->setTargetIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_TARGET_REFERENCE === $n->nodeName) {
                $type->setTargetReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_TARGET_ATTACHMENT === $n->nodeName) {
                $type->setTargetAttachment(FHIRAttachment::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TARGET_URI);
        if (null !== $n) {
            $pt = $type->getTargetUri();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setTargetUri($n->nodeValue);
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
        if (null !== ($v = $this->getRelationshipType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RELATIONSHIP_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getTargetClassifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TARGET_CLASSIFIER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getTargetUri())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TARGET_URI);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTargetIdentifier())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TARGET_IDENTIFIER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTargetReference())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TARGET_REFERENCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTargetAttachment())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TARGET_ATTACHMENT);
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
        if (null !== ($v = $this->getRelationshipType())) {
            $out->{self::FIELD_RELATIONSHIP_TYPE} = $v;
        }
        if ([] !== ($vs = $this->getTargetClassifier())) {
            $out->{self::FIELD_TARGET_CLASSIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_TARGET_CLASSIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getTargetUri())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TARGET_URI} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TARGET_URI_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getTargetIdentifier())) {
            $out->{self::FIELD_TARGET_IDENTIFIER} = $v;
        }
        if (null !== ($v = $this->getTargetReference())) {
            $out->{self::FIELD_TARGET_REFERENCE} = $v;
        }
        if (null !== ($v = $this->getTargetAttachment())) {
            $out->{self::FIELD_TARGET_ATTACHMENT} = $v;
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