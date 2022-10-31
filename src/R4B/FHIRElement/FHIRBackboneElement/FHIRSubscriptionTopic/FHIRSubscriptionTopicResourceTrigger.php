<?php declare(strict_types=1);

namespace RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic;

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
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRInteractionTrigger;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRMarkdown;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRString;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRUri;
use RistekUSDI\FHIR\R4B\FHIRStringPrimitive;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;

/**
 * Describes a stream of resource state changes or events and annotated with labels
 * useful to filter projections from this topic.
 *
 * Class FHIRSubscriptionTopicResourceTrigger
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic
 */
class FHIRSubscriptionTopicResourceTrigger extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_RESOURCE_TRIGGER;
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_RESOURCE = 'resource';
    const FIELD_RESOURCE_EXT = '_resource';
    const FIELD_SUPPORTED_INTERACTION = 'supportedInteraction';
    const FIELD_SUPPORTED_INTERACTION_EXT = '_supportedInteraction';
    const FIELD_QUERY_CRITERIA = 'queryCriteria';
    const FIELD_FHIR_PATH_CRITERIA = 'fhirPathCriteria';
    const FIELD_FHIR_PATH_CRITERIA_EXT = '_fhirPathCriteria';

    /** @var string */
    private $_xmlns = '';

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The human readable description of this resource trigger for the
     * SubscriptionTopic - for example, "An Encounter enters the 'in-progress' state".
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRMarkdownPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRMarkdown
     */
    protected ?FHIRMarkdown $description = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URL of the Resource that is the type used in this resource trigger. Relative
     * URLs are relative to the StructureDefinition root of the implemented FHIR
     * version (e.g., http://hl7.org/fhir/StructureDefinition). For example, "Patient"
     * maps to http://hl7.org/fhir/StructureDefinition/Patient. For more information,
     * see <a
     * href="elementdefinition-definitions.html#ElementDefinition.type.code">ElementDefinition.type.code</a>.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRUriPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRUri
     */
    protected ?FHIRUri $resource = null;

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR RESTful interaction which can be used to trigger a notification for the
     * SubscriptionTopic. Multiple values are considered OR joined (e.g., CREATE or
     * UPDATE).
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRInteractionTrigger[]
     */
    protected ?array $supportedInteraction = [];

    /**
     * Describes a stream of resource state changes or events and annotated with labels
     * useful to filter projections from this topic.
     *
     * The FHIR query based rules that the server should use to determine when to
     * trigger a notification for this subscription topic.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria
     */
    protected ?FHIRSubscriptionTopicQueryCriteria $queryCriteria = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath based rules that the server should use to determine when to trigger
     * a notification for this topic.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $fhirPathCriteria = null;

    /**
     * Validation map for fields in type SubscriptionTopic.ResourceTrigger
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRSubscriptionTopicResourceTrigger Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubscriptionTopicResourceTrigger::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_RESOURCE]) || isset($data[self::FIELD_RESOURCE_EXT])) {
            $value = $data[self::FIELD_RESOURCE] ?? null;
            $ext = (isset($data[self::FIELD_RESOURCE_EXT]) && is_array($data[self::FIELD_RESOURCE_EXT])) ? $data[self::FIELD_RESOURCE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setResource($value);
                } else if (is_array($value)) {
                    $this->setResource(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setResource(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setResource(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_SUPPORTED_INTERACTION]) || isset($data[self::FIELD_SUPPORTED_INTERACTION_EXT])) {
            $value = $data[self::FIELD_SUPPORTED_INTERACTION] ?? null;
            $ext = (isset($data[self::FIELD_SUPPORTED_INTERACTION_EXT]) && is_array($data[self::FIELD_SUPPORTED_INTERACTION_EXT])) ? $data[self::FIELD_SUPPORTED_INTERACTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteractionTrigger) {
                    $this->addSupportedInteraction($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRInteractionTrigger) {
                            $this->addSupportedInteraction($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSupportedInteraction(new FHIRInteractionTrigger(array_merge($v, $iext)));
                            } else {
                                $this->addSupportedInteraction(new FHIRInteractionTrigger([FHIRInteractionTrigger::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSupportedInteraction(new FHIRInteractionTrigger(array_merge($ext, $value)));
                } else {
                    $this->addSupportedInteraction(new FHIRInteractionTrigger([FHIRInteractionTrigger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSupportedInteraction(new FHIRInteractionTrigger($iext));
                }
            }
        }
        if (isset($data[self::FIELD_QUERY_CRITERIA])) {
            if ($data[self::FIELD_QUERY_CRITERIA] instanceof FHIRSubscriptionTopicQueryCriteria) {
                $this->setQueryCriteria($data[self::FIELD_QUERY_CRITERIA]);
            } else {
                $this->setQueryCriteria(new FHIRSubscriptionTopicQueryCriteria($data[self::FIELD_QUERY_CRITERIA]));
            }
        }
        if (isset($data[self::FIELD_FHIR_PATH_CRITERIA]) || isset($data[self::FIELD_FHIR_PATH_CRITERIA_EXT])) {
            $value = $data[self::FIELD_FHIR_PATH_CRITERIA] ?? null;
            $ext = (isset($data[self::FIELD_FHIR_PATH_CRITERIA_EXT]) && is_array($data[self::FIELD_FHIR_PATH_CRITERIA_EXT])) ? $data[self::FIELD_FHIR_PATH_CRITERIA_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setFhirPathCriteria($value);
                } else if (is_array($value)) {
                    $this->setFhirPathCriteria(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setFhirPathCriteria(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFhirPathCriteria(new FHIRString($ext));
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
        return "<SubscriptionTopicResourceTrigger{$xmlns}></SubscriptionTopicResourceTrigger>";
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The human readable description of this resource trigger for the
     * SubscriptionTopic - for example, "An Encounter enters the 'in-progress' state".
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRMarkdownPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): ?FHIRMarkdown
    {
        return $this->description;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The human readable description of this resource trigger for the
     * SubscriptionTopic - for example, "An Encounter enters the 'in-progress' state".
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRMarkdownPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRMarkdown $description
     * @return static
     */
    public function setDescription($description = null): object
    {
        if (null !== $description && !($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown($description);
        }
        $this->_trackValueSet($this->description, $description);
        $this->description = $description;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URL of the Resource that is the type used in this resource trigger. Relative
     * URLs are relative to the StructureDefinition root of the implemented FHIR
     * version (e.g., http://hl7.org/fhir/StructureDefinition). For example, "Patient"
     * maps to http://hl7.org/fhir/StructureDefinition/Patient. For more information,
     * see <a
     * href="elementdefinition-definitions.html#ElementDefinition.type.code">ElementDefinition.type.code</a>.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRUriPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRUri
     */
    public function getResource(): ?FHIRUri
    {
        return $this->resource;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URL of the Resource that is the type used in this resource trigger. Relative
     * URLs are relative to the StructureDefinition root of the implemented FHIR
     * version (e.g., http://hl7.org/fhir/StructureDefinition). For example, "Patient"
     * maps to http://hl7.org/fhir/StructureDefinition/Patient. For more information,
     * see <a
     * href="elementdefinition-definitions.html#ElementDefinition.type.code">ElementDefinition.type.code</a>.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRUriPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRUri $resource
     * @return static
     */
    public function setResource($resource = null): object
    {
        if (null !== $resource && !($resource instanceof FHIRUri)) {
            $resource = new FHIRUri($resource);
        }
        $this->_trackValueSet($this->resource, $resource);
        $this->resource = $resource;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR RESTful interaction which can be used to trigger a notification for the
     * SubscriptionTopic. Multiple values are considered OR joined (e.g., CREATE or
     * UPDATE).
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRInteractionTrigger[]
     */
    public function getSupportedInteraction(): ?array
    {
        return $this->supportedInteraction;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR RESTful interaction which can be used to trigger a notification for the
     * SubscriptionTopic. Multiple values are considered OR joined (e.g., CREATE or
     * UPDATE).
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRInteractionTrigger $supportedInteraction
     * @return static
     */
    public function addSupportedInteraction(?FHIRInteractionTrigger $supportedInteraction = null): object
    {
        $this->_trackValueAdded();
        $this->supportedInteraction[] = $supportedInteraction;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIR RESTful interaction which can be used to trigger a notification for the
     * SubscriptionTopic. Multiple values are considered OR joined (e.g., CREATE or
     * UPDATE).
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRInteractionTrigger[] $supportedInteraction
     * @return static
     */
    public function setSupportedInteraction(array $supportedInteraction = []): object
    {
        if ([] !== $this->supportedInteraction) {
            $this->_trackValuesRemoved(count($this->supportedInteraction));
            $this->supportedInteraction = [];
        }
        if ([] === $supportedInteraction) {
            return $this;
        }
        foreach($supportedInteraction as $v) {
            if ($v instanceof FHIRInteractionTrigger) {
                $this->addSupportedInteraction($v);
            } else {
                $this->addSupportedInteraction(new FHIRInteractionTrigger($v));
            }
        }
        return $this;
    }

    /**
     * Describes a stream of resource state changes or events and annotated with labels
     * useful to filter projections from this topic.
     *
     * The FHIR query based rules that the server should use to determine when to
     * trigger a notification for this subscription topic.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria
     */
    public function getQueryCriteria(): ?FHIRSubscriptionTopicQueryCriteria
    {
        return $this->queryCriteria;
    }

    /**
     * Describes a stream of resource state changes or events and annotated with labels
     * useful to filter projections from this topic.
     *
     * The FHIR query based rules that the server should use to determine when to
     * trigger a notification for this subscription topic.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicQueryCriteria $queryCriteria
     * @return static
     */
    public function setQueryCriteria(?FHIRSubscriptionTopicQueryCriteria $queryCriteria = null): object
    {
        $this->_trackValueSet($this->queryCriteria, $queryCriteria);
        $this->queryCriteria = $queryCriteria;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath based rules that the server should use to determine when to trigger
     * a notification for this topic.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getFhirPathCriteria(): ?FHIRString
    {
        return $this->fhirPathCriteria;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The FHIRPath based rules that the server should use to determine when to trigger
     * a notification for this topic.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $fhirPathCriteria
     * @return static
     */
    public function setFhirPathCriteria($fhirPathCriteria = null): object
    {
        if (null !== $fhirPathCriteria && !($fhirPathCriteria instanceof FHIRString)) {
            $fhirPathCriteria = new FHIRString($fhirPathCriteria);
        }
        $this->_trackValueSet($this->fhirPathCriteria, $fhirPathCriteria);
        $this->fhirPathCriteria = $fhirPathCriteria;
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
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getResource())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RESOURCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSupportedInteraction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTED_INTERACTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getQueryCriteria())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUERY_CRITERIA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFhirPathCriteria())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FHIR_PATH_CRITERIA] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_RESOURCE_TRIGGER, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RESOURCE])) {
            $v = $this->getResource();
            foreach($validationRules[self::FIELD_RESOURCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_RESOURCE_TRIGGER, self::FIELD_RESOURCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RESOURCE])) {
                        $errs[self::FIELD_RESOURCE] = [];
                    }
                    $errs[self::FIELD_RESOURCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTED_INTERACTION])) {
            $v = $this->getSupportedInteraction();
            foreach($validationRules[self::FIELD_SUPPORTED_INTERACTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_RESOURCE_TRIGGER, self::FIELD_SUPPORTED_INTERACTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTED_INTERACTION])) {
                        $errs[self::FIELD_SUPPORTED_INTERACTION] = [];
                    }
                    $errs[self::FIELD_SUPPORTED_INTERACTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUERY_CRITERIA])) {
            $v = $this->getQueryCriteria();
            foreach($validationRules[self::FIELD_QUERY_CRITERIA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_RESOURCE_TRIGGER, self::FIELD_QUERY_CRITERIA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUERY_CRITERIA])) {
                        $errs[self::FIELD_QUERY_CRITERIA] = [];
                    }
                    $errs[self::FIELD_QUERY_CRITERIA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FHIR_PATH_CRITERIA])) {
            $v = $this->getFhirPathCriteria();
            foreach($validationRules[self::FIELD_FHIR_PATH_CRITERIA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSCRIPTION_TOPIC_DOT_RESOURCE_TRIGGER, self::FIELD_FHIR_PATH_CRITERIA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FHIR_PATH_CRITERIA])) {
                        $errs[self::FIELD_FHIR_PATH_CRITERIA] = [];
                    }
                    $errs[self::FIELD_FHIR_PATH_CRITERIA][$rule] = $err;
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
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicResourceTrigger $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicResourceTrigger
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
                throw new \DomainException(sprintf('FHIRSubscriptionTopicResourceTrigger::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubscriptionTopicResourceTrigger::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRSubscriptionTopicResourceTrigger(null);
        } elseif (!is_object($type) || !($type instanceof FHIRSubscriptionTopicResourceTrigger)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubscriptionTopicResourceTrigger::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubscriptionTopic\FHIRSubscriptionTopicResourceTrigger or null, %s seen.',
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
            if (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_RESOURCE === $n->nodeName) {
                $type->setResource(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_SUPPORTED_INTERACTION === $n->nodeName) {
                $type->addSupportedInteraction(FHIRInteractionTrigger::xmlUnserialize($n));
            } elseif (self::FIELD_QUERY_CRITERIA === $n->nodeName) {
                $type->setQueryCriteria(FHIRSubscriptionTopicQueryCriteria::xmlUnserialize($n));
            } elseif (self::FIELD_FHIR_PATH_CRITERIA === $n->nodeName) {
                $type->setFhirPathCriteria(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DESCRIPTION);
        if (null !== $n) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDescription($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_RESOURCE);
        if (null !== $n) {
            $pt = $type->getResource();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setResource($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_FHIR_PATH_CRITERIA);
        if (null !== $n) {
            $pt = $type->getFhirPathCriteria();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setFhirPathCriteria($n->nodeValue);
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
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getResource())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RESOURCE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSupportedInteraction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SUPPORTED_INTERACTION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getQueryCriteria())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_QUERY_CRITERIA);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFhirPathCriteria())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FHIR_PATH_CRITERIA);
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
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getResource())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_RESOURCE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_RESOURCE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getSupportedInteraction())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRInteractionTrigger::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_SUPPORTED_INTERACTION} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUPPORTED_INTERACTION_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getQueryCriteria())) {
            $out->{self::FIELD_QUERY_CRITERIA} = $v;
        }
        if (null !== ($v = $this->getFhirPathCriteria())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FHIR_PATH_CRITERIA} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FHIR_PATH_CRITERIA_EXT} = $ext;
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