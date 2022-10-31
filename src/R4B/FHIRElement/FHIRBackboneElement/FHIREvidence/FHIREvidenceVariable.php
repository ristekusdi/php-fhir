<?php declare(strict_types=1);

namespace RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence;

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
use RistekUSDI\FHIR\R4B\FHIRElement\FHIREvidenceVariableHandling;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRExtension;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRRange;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference;
use RistekUSDI\FHIR\R4B\FHIRStringPrimitive;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;

/**
 * The Evidence Resource provides a machine-interpretable expression of an evidence
 * concept including the evidence variables (eg population,
 * exposures/interventions, comparators, outcomes, measured variables, confounding
 * variables), the statistics, and the certainty of this evidence.
 *
 * Class FHIREvidenceVariable
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence
 */
class FHIREvidenceVariable extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_VARIABLE;
    const FIELD_VARIABLE_DEFINITION = 'variableDefinition';
    const FIELD_HANDLING = 'handling';
    const FIELD_HANDLING_EXT = '_handling';
    const FIELD_VALUE_CATEGORY = 'valueCategory';
    const FIELD_VALUE_QUANTITY = 'valueQuantity';
    const FIELD_VALUE_RANGE = 'valueRange';

    /** @var string */
    private $_xmlns = '';

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description of the variable.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference
     */
    protected ?FHIRReference $variableDefinition = null;

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the variable is classified for use in adjusted analysis.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIREvidenceVariableHandling
     */
    protected ?FHIREvidenceVariableHandling $handling = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description for grouping of ordinal or polychotomous variables.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected ?array $valueCategory = [];

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Discrete value for grouping of ordinal or polychotomous variables.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity[]
     */
    protected ?array $valueQuantity = [];

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Range of values for grouping of ordinal or polychotomous variables.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRange[]
     */
    protected ?array $valueRange = [];

    /**
     * Validation map for fields in type Evidence.Variable
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIREvidenceVariable Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIREvidenceVariable::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_VARIABLE_DEFINITION])) {
            if ($data[self::FIELD_VARIABLE_DEFINITION] instanceof FHIRReference) {
                $this->setVariableDefinition($data[self::FIELD_VARIABLE_DEFINITION]);
            } else {
                $this->setVariableDefinition(new FHIRReference($data[self::FIELD_VARIABLE_DEFINITION]));
            }
        }
        if (isset($data[self::FIELD_HANDLING]) || isset($data[self::FIELD_HANDLING_EXT])) {
            $value = $data[self::FIELD_HANDLING] ?? null;
            $ext = (isset($data[self::FIELD_HANDLING_EXT]) && is_array($data[self::FIELD_HANDLING_EXT])) ? $data[self::FIELD_HANDLING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIREvidenceVariableHandling) {
                    $this->setHandling($value);
                } else if (is_array($value)) {
                    $this->setHandling(new FHIREvidenceVariableHandling(array_merge($ext, $value)));
                } else {
                    $this->setHandling(new FHIREvidenceVariableHandling([FHIREvidenceVariableHandling::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setHandling(new FHIREvidenceVariableHandling($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_CATEGORY])) {
            if (is_array($data[self::FIELD_VALUE_CATEGORY])) {
                foreach($data[self::FIELD_VALUE_CATEGORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addValueCategory($v);
                    } else {
                        $this->addValueCategory(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_VALUE_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addValueCategory($data[self::FIELD_VALUE_CATEGORY]);
            } else {
                $this->addValueCategory(new FHIRCodeableConcept($data[self::FIELD_VALUE_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_VALUE_QUANTITY])) {
            if (is_array($data[self::FIELD_VALUE_QUANTITY])) {
                foreach($data[self::FIELD_VALUE_QUANTITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRQuantity) {
                        $this->addValueQuantity($v);
                    } else {
                        $this->addValueQuantity(new FHIRQuantity($v));
                    }
                }
            } elseif ($data[self::FIELD_VALUE_QUANTITY] instanceof FHIRQuantity) {
                $this->addValueQuantity($data[self::FIELD_VALUE_QUANTITY]);
            } else {
                $this->addValueQuantity(new FHIRQuantity($data[self::FIELD_VALUE_QUANTITY]));
            }
        }
        if (isset($data[self::FIELD_VALUE_RANGE])) {
            if (is_array($data[self::FIELD_VALUE_RANGE])) {
                foreach($data[self::FIELD_VALUE_RANGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRRange) {
                        $this->addValueRange($v);
                    } else {
                        $this->addValueRange(new FHIRRange($v));
                    }
                }
            } elseif ($data[self::FIELD_VALUE_RANGE] instanceof FHIRRange) {
                $this->addValueRange($data[self::FIELD_VALUE_RANGE]);
            } else {
                $this->addValueRange(new FHIRRange($data[self::FIELD_VALUE_RANGE]));
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
        return "<EvidenceVariable{$xmlns}></EvidenceVariable>";
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description of the variable.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference
     */
    public function getVariableDefinition(): ?FHIRReference
    {
        return $this->variableDefinition;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description of the variable.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference $variableDefinition
     * @return static
     */
    public function setVariableDefinition(?FHIRReference $variableDefinition = null): object
    {
        $this->_trackValueSet($this->variableDefinition, $variableDefinition);
        $this->variableDefinition = $variableDefinition;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the variable is classified for use in adjusted analysis.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIREvidenceVariableHandling
     */
    public function getHandling(): ?FHIREvidenceVariableHandling
    {
        return $this->handling;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * How the variable is classified for use in adjusted analysis.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIREvidenceVariableHandling $handling
     * @return static
     */
    public function setHandling(?FHIREvidenceVariableHandling $handling = null): object
    {
        $this->_trackValueSet($this->handling, $handling);
        $this->handling = $handling;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description for grouping of ordinal or polychotomous variables.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getValueCategory(): ?array
    {
        return $this->valueCategory;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description for grouping of ordinal or polychotomous variables.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $valueCategory
     * @return static
     */
    public function addValueCategory(?FHIRCodeableConcept $valueCategory = null): object
    {
        $this->_trackValueAdded();
        $this->valueCategory[] = $valueCategory;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Description for grouping of ordinal or polychotomous variables.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[] $valueCategory
     * @return static
     */
    public function setValueCategory(array $valueCategory = []): object
    {
        if ([] !== $this->valueCategory) {
            $this->_trackValuesRemoved(count($this->valueCategory));
            $this->valueCategory = [];
        }
        if ([] === $valueCategory) {
            return $this;
        }
        foreach($valueCategory as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addValueCategory($v);
            } else {
                $this->addValueCategory(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Discrete value for grouping of ordinal or polychotomous variables.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity[]
     */
    public function getValueQuantity(): ?array
    {
        return $this->valueQuantity;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Discrete value for grouping of ordinal or polychotomous variables.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity $valueQuantity
     * @return static
     */
    public function addValueQuantity(?FHIRQuantity $valueQuantity = null): object
    {
        $this->_trackValueAdded();
        $this->valueQuantity[] = $valueQuantity;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Discrete value for grouping of ordinal or polychotomous variables.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity[] $valueQuantity
     * @return static
     */
    public function setValueQuantity(array $valueQuantity = []): object
    {
        if ([] !== $this->valueQuantity) {
            $this->_trackValuesRemoved(count($this->valueQuantity));
            $this->valueQuantity = [];
        }
        if ([] === $valueQuantity) {
            return $this;
        }
        foreach($valueQuantity as $v) {
            if ($v instanceof FHIRQuantity) {
                $this->addValueQuantity($v);
            } else {
                $this->addValueQuantity(new FHIRQuantity($v));
            }
        }
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Range of values for grouping of ordinal or polychotomous variables.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRange[]
     */
    public function getValueRange(): ?array
    {
        return $this->valueRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Range of values for grouping of ordinal or polychotomous variables.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRange $valueRange
     * @return static
     */
    public function addValueRange(?FHIRRange $valueRange = null): object
    {
        $this->_trackValueAdded();
        $this->valueRange[] = $valueRange;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Range of values for grouping of ordinal or polychotomous variables.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRRange[] $valueRange
     * @return static
     */
    public function setValueRange(array $valueRange = []): object
    {
        if ([] !== $this->valueRange) {
            $this->_trackValuesRemoved(count($this->valueRange));
            $this->valueRange = [];
        }
        if ([] === $valueRange) {
            return $this;
        }
        foreach($valueRange as $v) {
            if ($v instanceof FHIRRange) {
                $this->addValueRange($v);
            } else {
                $this->addValueRange(new FHIRRange($v));
            }
        }
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
        if (null !== ($v = $this->getVariableDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VARIABLE_DEFINITION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getHandling())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HANDLING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getValueCategory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VALUE_CATEGORY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getValueQuantity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VALUE_QUANTITY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getValueRange())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_VALUE_RANGE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VARIABLE_DEFINITION])) {
            $v = $this->getVariableDefinition();
            foreach($validationRules[self::FIELD_VARIABLE_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_VARIABLE, self::FIELD_VARIABLE_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VARIABLE_DEFINITION])) {
                        $errs[self::FIELD_VARIABLE_DEFINITION] = [];
                    }
                    $errs[self::FIELD_VARIABLE_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HANDLING])) {
            $v = $this->getHandling();
            foreach($validationRules[self::FIELD_HANDLING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_VARIABLE, self::FIELD_HANDLING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HANDLING])) {
                        $errs[self::FIELD_HANDLING] = [];
                    }
                    $errs[self::FIELD_HANDLING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_CATEGORY])) {
            $v = $this->getValueCategory();
            foreach($validationRules[self::FIELD_VALUE_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_VARIABLE, self::FIELD_VALUE_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_CATEGORY])) {
                        $errs[self::FIELD_VALUE_CATEGORY] = [];
                    }
                    $errs[self::FIELD_VALUE_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_QUANTITY])) {
            $v = $this->getValueQuantity();
            foreach($validationRules[self::FIELD_VALUE_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_VARIABLE, self::FIELD_VALUE_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_QUANTITY])) {
                        $errs[self::FIELD_VALUE_QUANTITY] = [];
                    }
                    $errs[self::FIELD_VALUE_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_RANGE])) {
            $v = $this->getValueRange();
            foreach($validationRules[self::FIELD_VALUE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_EVIDENCE_DOT_VARIABLE, self::FIELD_VALUE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_RANGE])) {
                        $errs[self::FIELD_VALUE_RANGE] = [];
                    }
                    $errs[self::FIELD_VALUE_RANGE][$rule] = $err;
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
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceVariable $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceVariable
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
                throw new \DomainException(sprintf('FHIREvidenceVariable::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIREvidenceVariable::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIREvidenceVariable(null);
        } elseif (!is_object($type) || !($type instanceof FHIREvidenceVariable)) {
            throw new \RuntimeException(sprintf(
                'FHIREvidenceVariable::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIREvidence\FHIREvidenceVariable or null, %s seen.',
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
            if (self::FIELD_VARIABLE_DEFINITION === $n->nodeName) {
                $type->setVariableDefinition(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_HANDLING === $n->nodeName) {
                $type->setHandling(FHIREvidenceVariableHandling::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_CATEGORY === $n->nodeName) {
                $type->addValueCategory(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_QUANTITY === $n->nodeName) {
                $type->addValueQuantity(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_RANGE === $n->nodeName) {
                $type->addValueRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
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
        if (null !== ($v = $this->getVariableDefinition())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VARIABLE_DEFINITION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getHandling())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_HANDLING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getValueCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_CATEGORY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getValueQuantity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_QUANTITY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getValueRange())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_RANGE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize()
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getVariableDefinition())) {
            $out->{self::FIELD_VARIABLE_DEFINITION} = $v;
        }
        if (null !== ($v = $this->getHandling())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_HANDLING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIREvidenceVariableHandling::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_HANDLING_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getValueCategory())) {
            $out->{self::FIELD_VALUE_CATEGORY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_VALUE_CATEGORY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getValueQuantity())) {
            $out->{self::FIELD_VALUE_QUANTITY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_VALUE_QUANTITY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getValueRange())) {
            $out->{self::FIELD_VALUE_RANGE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_VALUE_RANGE}[] = $v;
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