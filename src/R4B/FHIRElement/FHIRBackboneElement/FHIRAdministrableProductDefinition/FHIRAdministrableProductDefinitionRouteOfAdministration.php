<?php declare(strict_types=1);

namespace RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition;

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
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity\FHIRDuration;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatio;
use RistekUSDI\FHIR\R4B\FHIRStringPrimitive;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;

/**
 * A medicinal product in the final form which is suitable for administering to a
 * patient (after any mixing of multiple components, dissolution etc. has been
 * performed).
 *
 * Class FHIRAdministrableProductDefinitionRouteOfAdministration
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition
 */
class FHIRAdministrableProductDefinitionRouteOfAdministration extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION_DOT_ROUTE_OF_ADMINISTRATION;
    const FIELD_CODE = 'code';
    const FIELD_FIRST_DOSE = 'firstDose';
    const FIELD_MAX_SINGLE_DOSE = 'maxSingleDose';
    const FIELD_MAX_DOSE_PER_DAY = 'maxDosePerDay';
    const FIELD_MAX_DOSE_PER_TREATMENT_PERIOD = 'maxDosePerTreatmentPeriod';
    const FIELD_MAX_TREATMENT_PERIOD = 'maxTreatmentPeriod';
    const FIELD_TARGET_SPECIES = 'targetSpecies';

    /** @var string */
    private $_xmlns = '';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Coded expression for the route.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $code = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The first dose (dose quantity) administered can be specified for the product,
     * using a numerical value and its unit of measurement.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity
     */
    protected ?FHIRQuantity $firstDose = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum single dose that can be administered, specified using a numerical
     * value and its unit of measurement.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity
     */
    protected ?FHIRQuantity $maxSingleDose = null;

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum dose per day (maximum dose quantity to be administered in any one
     * 24-h period) that can be administered.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity
     */
    protected ?FHIRQuantity $maxDosePerDay = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum dose per treatment period that can be administered.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatio
     */
    protected ?FHIRRatio $maxDosePerTreatmentPeriod = null;

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum treatment period during which the product can be administered.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity\FHIRDuration
     */
    protected ?FHIRDuration $maxTreatmentPeriod = null;

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * A species for which this route applies.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionTargetSpecies[]
     */
    protected ?array $targetSpecies = [];

    /**
     * Validation map for fields in type AdministrableProductDefinition.RouteOfAdministration
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRAdministrableProductDefinitionRouteOfAdministration Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAdministrableProductDefinitionRouteOfAdministration::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_CODE])) {
            if ($data[self::FIELD_CODE] instanceof FHIRCodeableConcept) {
                $this->setCode($data[self::FIELD_CODE]);
            } else {
                $this->setCode(new FHIRCodeableConcept($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_FIRST_DOSE])) {
            if ($data[self::FIELD_FIRST_DOSE] instanceof FHIRQuantity) {
                $this->setFirstDose($data[self::FIELD_FIRST_DOSE]);
            } else {
                $this->setFirstDose(new FHIRQuantity($data[self::FIELD_FIRST_DOSE]));
            }
        }
        if (isset($data[self::FIELD_MAX_SINGLE_DOSE])) {
            if ($data[self::FIELD_MAX_SINGLE_DOSE] instanceof FHIRQuantity) {
                $this->setMaxSingleDose($data[self::FIELD_MAX_SINGLE_DOSE]);
            } else {
                $this->setMaxSingleDose(new FHIRQuantity($data[self::FIELD_MAX_SINGLE_DOSE]));
            }
        }
        if (isset($data[self::FIELD_MAX_DOSE_PER_DAY])) {
            if ($data[self::FIELD_MAX_DOSE_PER_DAY] instanceof FHIRQuantity) {
                $this->setMaxDosePerDay($data[self::FIELD_MAX_DOSE_PER_DAY]);
            } else {
                $this->setMaxDosePerDay(new FHIRQuantity($data[self::FIELD_MAX_DOSE_PER_DAY]));
            }
        }
        if (isset($data[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD])) {
            if ($data[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD] instanceof FHIRRatio) {
                $this->setMaxDosePerTreatmentPeriod($data[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD]);
            } else {
                $this->setMaxDosePerTreatmentPeriod(new FHIRRatio($data[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_MAX_TREATMENT_PERIOD])) {
            if ($data[self::FIELD_MAX_TREATMENT_PERIOD] instanceof FHIRDuration) {
                $this->setMaxTreatmentPeriod($data[self::FIELD_MAX_TREATMENT_PERIOD]);
            } else {
                $this->setMaxTreatmentPeriod(new FHIRDuration($data[self::FIELD_MAX_TREATMENT_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_TARGET_SPECIES])) {
            if (is_array($data[self::FIELD_TARGET_SPECIES])) {
                foreach($data[self::FIELD_TARGET_SPECIES] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAdministrableProductDefinitionTargetSpecies) {
                        $this->addTargetSpecies($v);
                    } else {
                        $this->addTargetSpecies(new FHIRAdministrableProductDefinitionTargetSpecies($v));
                    }
                }
            } elseif ($data[self::FIELD_TARGET_SPECIES] instanceof FHIRAdministrableProductDefinitionTargetSpecies) {
                $this->addTargetSpecies($data[self::FIELD_TARGET_SPECIES]);
            } else {
                $this->addTargetSpecies(new FHIRAdministrableProductDefinitionTargetSpecies($data[self::FIELD_TARGET_SPECIES]));
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
        return "<AdministrableProductDefinitionRouteOfAdministration{$xmlns}></AdministrableProductDefinitionRouteOfAdministration>";
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Coded expression for the route.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getCode(): ?FHIRCodeableConcept
    {
        return $this->code;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Coded expression for the route.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $code
     * @return static
     */
    public function setCode(?FHIRCodeableConcept $code = null): object
    {
        $this->_trackValueSet($this->code, $code);
        $this->code = $code;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The first dose (dose quantity) administered can be specified for the product,
     * using a numerical value and its unit of measurement.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity
     */
    public function getFirstDose(): ?FHIRQuantity
    {
        return $this->firstDose;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The first dose (dose quantity) administered can be specified for the product,
     * using a numerical value and its unit of measurement.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity $firstDose
     * @return static
     */
    public function setFirstDose(?FHIRQuantity $firstDose = null): object
    {
        $this->_trackValueSet($this->firstDose, $firstDose);
        $this->firstDose = $firstDose;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum single dose that can be administered, specified using a numerical
     * value and its unit of measurement.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity
     */
    public function getMaxSingleDose(): ?FHIRQuantity
    {
        return $this->maxSingleDose;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum single dose that can be administered, specified using a numerical
     * value and its unit of measurement.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity $maxSingleDose
     * @return static
     */
    public function setMaxSingleDose(?FHIRQuantity $maxSingleDose = null): object
    {
        $this->_trackValueSet($this->maxSingleDose, $maxSingleDose);
        $this->maxSingleDose = $maxSingleDose;
        return $this;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum dose per day (maximum dose quantity to be administered in any one
     * 24-h period) that can be administered.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity
     */
    public function getMaxDosePerDay(): ?FHIRQuantity
    {
        return $this->maxDosePerDay;
    }

    /**
     * A measured amount (or an amount that can potentially be measured). Note that
     * measured amounts include amounts that are not precisely quantified, including
     * amounts involving arbitrary units and floating currencies.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum dose per day (maximum dose quantity to be administered in any one
     * 24-h period) that can be administered.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity $maxDosePerDay
     * @return static
     */
    public function setMaxDosePerDay(?FHIRQuantity $maxDosePerDay = null): object
    {
        $this->_trackValueSet($this->maxDosePerDay, $maxDosePerDay);
        $this->maxDosePerDay = $maxDosePerDay;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum dose per treatment period that can be administered.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatio
     */
    public function getMaxDosePerTreatmentPeriod(): ?FHIRRatio
    {
        return $this->maxDosePerTreatmentPeriod;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum dose per treatment period that can be administered.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatio $maxDosePerTreatmentPeriod
     * @return static
     */
    public function setMaxDosePerTreatmentPeriod(?FHIRRatio $maxDosePerTreatmentPeriod = null): object
    {
        $this->_trackValueSet($this->maxDosePerTreatmentPeriod, $maxDosePerTreatmentPeriod);
        $this->maxDosePerTreatmentPeriod = $maxDosePerTreatmentPeriod;
        return $this;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum treatment period during which the product can be administered.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity\FHIRDuration
     */
    public function getMaxTreatmentPeriod(): ?FHIRDuration
    {
        return $this->maxTreatmentPeriod;
    }

    /**
     * A length of time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The maximum treatment period during which the product can be administered.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRQuantity\FHIRDuration $maxTreatmentPeriod
     * @return static
     */
    public function setMaxTreatmentPeriod(?FHIRDuration $maxTreatmentPeriod = null): object
    {
        $this->_trackValueSet($this->maxTreatmentPeriod, $maxTreatmentPeriod);
        $this->maxTreatmentPeriod = $maxTreatmentPeriod;
        return $this;
    }

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * A species for which this route applies.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionTargetSpecies[]
     */
    public function getTargetSpecies(): ?array
    {
        return $this->targetSpecies;
    }

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * A species for which this route applies.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionTargetSpecies $targetSpecies
     * @return static
     */
    public function addTargetSpecies(?FHIRAdministrableProductDefinitionTargetSpecies $targetSpecies = null): object
    {
        $this->_trackValueAdded();
        $this->targetSpecies[] = $targetSpecies;
        return $this;
    }

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * A species for which this route applies.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionTargetSpecies[] $targetSpecies
     * @return static
     */
    public function setTargetSpecies(array $targetSpecies = []): object
    {
        if ([] !== $this->targetSpecies) {
            $this->_trackValuesRemoved(count($this->targetSpecies));
            $this->targetSpecies = [];
        }
        if ([] === $targetSpecies) {
            return $this;
        }
        foreach($targetSpecies as $v) {
            if ($v instanceof FHIRAdministrableProductDefinitionTargetSpecies) {
                $this->addTargetSpecies($v);
            } else {
                $this->addTargetSpecies(new FHIRAdministrableProductDefinitionTargetSpecies($v));
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
        if (null !== ($v = $this->getCode())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CODE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFirstDose())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIRST_DOSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxSingleDose())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_SINGLE_DOSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxDosePerDay())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_DOSE_PER_DAY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxDosePerTreatmentPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxTreatmentPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_TREATMENT_PERIOD] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTargetSpecies())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TARGET_SPECIES, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION_DOT_ROUTE_OF_ADMINISTRATION, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIRST_DOSE])) {
            $v = $this->getFirstDose();
            foreach($validationRules[self::FIELD_FIRST_DOSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION_DOT_ROUTE_OF_ADMINISTRATION, self::FIELD_FIRST_DOSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIRST_DOSE])) {
                        $errs[self::FIELD_FIRST_DOSE] = [];
                    }
                    $errs[self::FIELD_FIRST_DOSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_SINGLE_DOSE])) {
            $v = $this->getMaxSingleDose();
            foreach($validationRules[self::FIELD_MAX_SINGLE_DOSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION_DOT_ROUTE_OF_ADMINISTRATION, self::FIELD_MAX_SINGLE_DOSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_SINGLE_DOSE])) {
                        $errs[self::FIELD_MAX_SINGLE_DOSE] = [];
                    }
                    $errs[self::FIELD_MAX_SINGLE_DOSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_DOSE_PER_DAY])) {
            $v = $this->getMaxDosePerDay();
            foreach($validationRules[self::FIELD_MAX_DOSE_PER_DAY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION_DOT_ROUTE_OF_ADMINISTRATION, self::FIELD_MAX_DOSE_PER_DAY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_DOSE_PER_DAY])) {
                        $errs[self::FIELD_MAX_DOSE_PER_DAY] = [];
                    }
                    $errs[self::FIELD_MAX_DOSE_PER_DAY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD])) {
            $v = $this->getMaxDosePerTreatmentPeriod();
            foreach($validationRules[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION_DOT_ROUTE_OF_ADMINISTRATION, self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD])) {
                        $errs[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD] = [];
                    }
                    $errs[self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_TREATMENT_PERIOD])) {
            $v = $this->getMaxTreatmentPeriod();
            foreach($validationRules[self::FIELD_MAX_TREATMENT_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION_DOT_ROUTE_OF_ADMINISTRATION, self::FIELD_MAX_TREATMENT_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_TREATMENT_PERIOD])) {
                        $errs[self::FIELD_MAX_TREATMENT_PERIOD] = [];
                    }
                    $errs[self::FIELD_MAX_TREATMENT_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TARGET_SPECIES])) {
            $v = $this->getTargetSpecies();
            foreach($validationRules[self::FIELD_TARGET_SPECIES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION_DOT_ROUTE_OF_ADMINISTRATION, self::FIELD_TARGET_SPECIES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TARGET_SPECIES])) {
                        $errs[self::FIELD_TARGET_SPECIES] = [];
                    }
                    $errs[self::FIELD_TARGET_SPECIES][$rule] = $err;
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
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionRouteOfAdministration $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionRouteOfAdministration
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
                throw new \DomainException(sprintf('FHIRAdministrableProductDefinitionRouteOfAdministration::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAdministrableProductDefinitionRouteOfAdministration::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRAdministrableProductDefinitionRouteOfAdministration(null);
        } elseif (!is_object($type) || !($type instanceof FHIRAdministrableProductDefinitionRouteOfAdministration)) {
            throw new \RuntimeException(sprintf(
                'FHIRAdministrableProductDefinitionRouteOfAdministration::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionRouteOfAdministration or null, %s seen.',
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
            if (self::FIELD_CODE === $n->nodeName) {
                $type->setCode(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_FIRST_DOSE === $n->nodeName) {
                $type->setFirstDose(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_MAX_SINGLE_DOSE === $n->nodeName) {
                $type->setMaxSingleDose(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_MAX_DOSE_PER_DAY === $n->nodeName) {
                $type->setMaxDosePerDay(FHIRQuantity::xmlUnserialize($n));
            } elseif (self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD === $n->nodeName) {
                $type->setMaxDosePerTreatmentPeriod(FHIRRatio::xmlUnserialize($n));
            } elseif (self::FIELD_MAX_TREATMENT_PERIOD === $n->nodeName) {
                $type->setMaxTreatmentPeriod(FHIRDuration::xmlUnserialize($n));
            } elseif (self::FIELD_TARGET_SPECIES === $n->nodeName) {
                $type->addTargetSpecies(FHIRAdministrableProductDefinitionTargetSpecies::xmlUnserialize($n));
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
        if (null !== ($v = $this->getCode())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CODE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFirstDose())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FIRST_DOSE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMaxSingleDose())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MAX_SINGLE_DOSE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMaxDosePerDay())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MAX_DOSE_PER_DAY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMaxDosePerTreatmentPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMaxTreatmentPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MAX_TREATMENT_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getTargetSpecies())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TARGET_SPECIES);
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
        if (null !== ($v = $this->getCode())) {
            $out->{self::FIELD_CODE} = $v;
        }
        if (null !== ($v = $this->getFirstDose())) {
            $out->{self::FIELD_FIRST_DOSE} = $v;
        }
        if (null !== ($v = $this->getMaxSingleDose())) {
            $out->{self::FIELD_MAX_SINGLE_DOSE} = $v;
        }
        if (null !== ($v = $this->getMaxDosePerDay())) {
            $out->{self::FIELD_MAX_DOSE_PER_DAY} = $v;
        }
        if (null !== ($v = $this->getMaxDosePerTreatmentPeriod())) {
            $out->{self::FIELD_MAX_DOSE_PER_TREATMENT_PERIOD} = $v;
        }
        if (null !== ($v = $this->getMaxTreatmentPeriod())) {
            $out->{self::FIELD_MAX_TREATMENT_PERIOD} = $v;
        }
        if ([] !== ($vs = $this->getTargetSpecies())) {
            $out->{self::FIELD_TARGET_SPECIES} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_TARGET_SPECIES}[] = $v;
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