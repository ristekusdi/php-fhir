<?php declare(strict_types=1);

namespace RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition;

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
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRExtension;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRRange;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRString;
use RistekUSDI\FHIR\R4B\FHIRStringPrimitive;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;

/**
 * A single issue - either an indication, contraindication, interaction or an
 * undesirable effect for a medicinal product, medication, device or procedure.
 *
 * Class FHIRClinicalUseDefinitionIndication
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition
 */
class FHIRClinicalUseDefinitionIndication extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION;
    const FIELD_DISEASE_SYMPTOM_PROCEDURE = 'diseaseSymptomProcedure';
    const FIELD_DISEASE_STATUS = 'diseaseStatus';
    const FIELD_COMORBIDITY = 'comorbidity';
    const FIELD_INTENDED_EFFECT = 'intendedEffect';
    const FIELD_DURATION_RANGE = 'durationRange';
    const FIELD_DURATION_STRING = 'durationString';
    const FIELD_DURATION_STRING_EXT = '_durationString';
    const FIELD_UNDESIRABLE_EFFECT = 'undesirableEffect';
    const FIELD_OTHER_THERAPY = 'otherTherapy';

    /** @var string */
    private $_xmlns = '';

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The situation that is being documented as an indicaton for this item.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference
     */
    protected ?FHIRCodeableReference $diseaseSymptomProcedure = null;

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for the indication, for example "chronic"
     * or "metastatic".
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference
     */
    protected ?FHIRCodeableReference $diseaseStatus = null;

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A comorbidity (concurrent condition) or coinfection as part of the indication.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference[]
     */
    protected ?array $comorbidity = [];

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference
     */
    protected ?FHIRCodeableReference $intendedEffect = null;

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Timing or duration information, that may be associated with use with the
     * indicated condition e.g. Adult patients suffering from myocardial infarction
     * (from a few days until less than 35 days), ischaemic stroke (from 7 days until
     * less than 6 months).
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRange
     */
    protected ?FHIRRange $durationRange = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Timing or duration information, that may be associated with use with the
     * indicated condition e.g. Adult patients suffering from myocardial infarction
     * (from a few days until less than 35 days), ischaemic stroke (from 7 days until
     * less than 6 months).
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $durationString = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An unwanted side effect or negative outcome that may happen if you use the drug
     * (or other subject of this resource) for this indication.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[]
     */
    protected ?array $undesirableEffect = [];

    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy[]
     */
    protected ?array $otherTherapy = [];

    /**
     * Validation map for fields in type ClinicalUseDefinition.Indication
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRClinicalUseDefinitionIndication Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRClinicalUseDefinitionIndication::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE])) {
            if ($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] instanceof FHIRCodeableReference) {
                $this->setDiseaseSymptomProcedure($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]);
            } else {
                $this->setDiseaseSymptomProcedure(new FHIRCodeableReference($data[self::FIELD_DISEASE_SYMPTOM_PROCEDURE]));
            }
        }
        if (isset($data[self::FIELD_DISEASE_STATUS])) {
            if ($data[self::FIELD_DISEASE_STATUS] instanceof FHIRCodeableReference) {
                $this->setDiseaseStatus($data[self::FIELD_DISEASE_STATUS]);
            } else {
                $this->setDiseaseStatus(new FHIRCodeableReference($data[self::FIELD_DISEASE_STATUS]));
            }
        }
        if (isset($data[self::FIELD_COMORBIDITY])) {
            if (is_array($data[self::FIELD_COMORBIDITY])) {
                foreach($data[self::FIELD_COMORBIDITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableReference) {
                        $this->addComorbidity($v);
                    } else {
                        $this->addComorbidity(new FHIRCodeableReference($v));
                    }
                }
            } elseif ($data[self::FIELD_COMORBIDITY] instanceof FHIRCodeableReference) {
                $this->addComorbidity($data[self::FIELD_COMORBIDITY]);
            } else {
                $this->addComorbidity(new FHIRCodeableReference($data[self::FIELD_COMORBIDITY]));
            }
        }
        if (isset($data[self::FIELD_INTENDED_EFFECT])) {
            if ($data[self::FIELD_INTENDED_EFFECT] instanceof FHIRCodeableReference) {
                $this->setIntendedEffect($data[self::FIELD_INTENDED_EFFECT]);
            } else {
                $this->setIntendedEffect(new FHIRCodeableReference($data[self::FIELD_INTENDED_EFFECT]));
            }
        }
        if (isset($data[self::FIELD_DURATION_RANGE])) {
            if ($data[self::FIELD_DURATION_RANGE] instanceof FHIRRange) {
                $this->setDurationRange($data[self::FIELD_DURATION_RANGE]);
            } else {
                $this->setDurationRange(new FHIRRange($data[self::FIELD_DURATION_RANGE]));
            }
        }
        if (isset($data[self::FIELD_DURATION_STRING]) || isset($data[self::FIELD_DURATION_STRING_EXT])) {
            $value = $data[self::FIELD_DURATION_STRING] ?? null;
            $ext = (isset($data[self::FIELD_DURATION_STRING_EXT]) && is_array($data[self::FIELD_DURATION_STRING_EXT])) ? $data[self::FIELD_DURATION_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDurationString($value);
                } else if (is_array($value)) {
                    $this->setDurationString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDurationString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDurationString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_UNDESIRABLE_EFFECT])) {
            if (is_array($data[self::FIELD_UNDESIRABLE_EFFECT])) {
                foreach($data[self::FIELD_UNDESIRABLE_EFFECT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addUndesirableEffect($v);
                    } else {
                        $this->addUndesirableEffect(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_UNDESIRABLE_EFFECT] instanceof FHIRReference) {
                $this->addUndesirableEffect($data[self::FIELD_UNDESIRABLE_EFFECT]);
            } else {
                $this->addUndesirableEffect(new FHIRReference($data[self::FIELD_UNDESIRABLE_EFFECT]));
            }
        }
        if (isset($data[self::FIELD_OTHER_THERAPY])) {
            if (is_array($data[self::FIELD_OTHER_THERAPY])) {
                foreach($data[self::FIELD_OTHER_THERAPY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRClinicalUseDefinitionOtherTherapy) {
                        $this->addOtherTherapy($v);
                    } else {
                        $this->addOtherTherapy(new FHIRClinicalUseDefinitionOtherTherapy($v));
                    }
                }
            } elseif ($data[self::FIELD_OTHER_THERAPY] instanceof FHIRClinicalUseDefinitionOtherTherapy) {
                $this->addOtherTherapy($data[self::FIELD_OTHER_THERAPY]);
            } else {
                $this->addOtherTherapy(new FHIRClinicalUseDefinitionOtherTherapy($data[self::FIELD_OTHER_THERAPY]));
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
        return "<ClinicalUseDefinitionIndication{$xmlns}></ClinicalUseDefinitionIndication>";
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The situation that is being documented as an indicaton for this item.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference
     */
    public function getDiseaseSymptomProcedure(): ?FHIRCodeableReference
    {
        return $this->diseaseSymptomProcedure;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The situation that is being documented as an indicaton for this item.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference $diseaseSymptomProcedure
     * @return static
     */
    public function setDiseaseSymptomProcedure(?FHIRCodeableReference $diseaseSymptomProcedure = null): object
    {
        $this->_trackValueSet($this->diseaseSymptomProcedure, $diseaseSymptomProcedure);
        $this->diseaseSymptomProcedure = $diseaseSymptomProcedure;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for the indication, for example "chronic"
     * or "metastatic".
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference
     */
    public function getDiseaseStatus(): ?FHIRCodeableReference
    {
        return $this->diseaseStatus;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the disease or symptom for the indication, for example "chronic"
     * or "metastatic".
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference $diseaseStatus
     * @return static
     */
    public function setDiseaseStatus(?FHIRCodeableReference $diseaseStatus = null): object
    {
        $this->_trackValueSet($this->diseaseStatus, $diseaseStatus);
        $this->diseaseStatus = $diseaseStatus;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A comorbidity (concurrent condition) or coinfection as part of the indication.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference[]
     */
    public function getComorbidity(): ?array
    {
        return $this->comorbidity;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A comorbidity (concurrent condition) or coinfection as part of the indication.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference $comorbidity
     * @return static
     */
    public function addComorbidity(?FHIRCodeableReference $comorbidity = null): object
    {
        $this->_trackValueAdded();
        $this->comorbidity[] = $comorbidity;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A comorbidity (concurrent condition) or coinfection as part of the indication.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference[] $comorbidity
     * @return static
     */
    public function setComorbidity(array $comorbidity = []): object
    {
        if ([] !== $this->comorbidity) {
            $this->_trackValuesRemoved(count($this->comorbidity));
            $this->comorbidity = [];
        }
        if ([] === $comorbidity) {
            return $this;
        }
        foreach($comorbidity as $v) {
            if ($v instanceof FHIRCodeableReference) {
                $this->addComorbidity($v);
            } else {
                $this->addComorbidity(new FHIRCodeableReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference
     */
    public function getIntendedEffect(): ?FHIRCodeableReference
    {
        return $this->intendedEffect;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The intended effect, aim or strategy to be achieved.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference $intendedEffect
     * @return static
     */
    public function setIntendedEffect(?FHIRCodeableReference $intendedEffect = null): object
    {
        $this->_trackValueSet($this->intendedEffect, $intendedEffect);
        $this->intendedEffect = $intendedEffect;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Timing or duration information, that may be associated with use with the
     * indicated condition e.g. Adult patients suffering from myocardial infarction
     * (from a few days until less than 35 days), ischaemic stroke (from 7 days until
     * less than 6 months).
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRange
     */
    public function getDurationRange(): ?FHIRRange
    {
        return $this->durationRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Timing or duration information, that may be associated with use with the
     * indicated condition e.g. Adult patients suffering from myocardial infarction
     * (from a few days until less than 35 days), ischaemic stroke (from 7 days until
     * less than 6 months).
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRange $durationRange
     * @return static
     */
    public function setDurationRange(?FHIRRange $durationRange = null): object
    {
        $this->_trackValueSet($this->durationRange, $durationRange);
        $this->durationRange = $durationRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Timing or duration information, that may be associated with use with the
     * indicated condition e.g. Adult patients suffering from myocardial infarction
     * (from a few days until less than 35 days), ischaemic stroke (from 7 days until
     * less than 6 months).
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getDurationString(): ?FHIRString
    {
        return $this->durationString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Timing or duration information, that may be associated with use with the
     * indicated condition e.g. Adult patients suffering from myocardial infarction
     * (from a few days until less than 35 days), ischaemic stroke (from 7 days until
     * less than 6 months).
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $durationString
     * @return static
     */
    public function setDurationString($durationString = null): object
    {
        if (null !== $durationString && !($durationString instanceof FHIRString)) {
            $durationString = new FHIRString($durationString);
        }
        $this->_trackValueSet($this->durationString, $durationString);
        $this->durationString = $durationString;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An unwanted side effect or negative outcome that may happen if you use the drug
     * (or other subject of this resource) for this indication.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[]
     */
    public function getUndesirableEffect(): ?array
    {
        return $this->undesirableEffect;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An unwanted side effect or negative outcome that may happen if you use the drug
     * (or other subject of this resource) for this indication.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference $undesirableEffect
     * @return static
     */
    public function addUndesirableEffect(?FHIRReference $undesirableEffect = null): object
    {
        $this->_trackValueAdded();
        $this->undesirableEffect[] = $undesirableEffect;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An unwanted side effect or negative outcome that may happen if you use the drug
     * (or other subject of this resource) for this indication.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[] $undesirableEffect
     * @return static
     */
    public function setUndesirableEffect(array $undesirableEffect = []): object
    {
        if ([] !== $this->undesirableEffect) {
            $this->_trackValuesRemoved(count($this->undesirableEffect));
            $this->undesirableEffect = [];
        }
        if ([] === $undesirableEffect) {
            return $this;
        }
        foreach($undesirableEffect as $v) {
            if ($v instanceof FHIRReference) {
                $this->addUndesirableEffect($v);
            } else {
                $this->addUndesirableEffect(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy[]
     */
    public function getOtherTherapy(): ?array
    {
        return $this->otherTherapy;
    }

    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy $otherTherapy
     * @return static
     */
    public function addOtherTherapy(?FHIRClinicalUseDefinitionOtherTherapy $otherTherapy = null): object
    {
        $this->_trackValueAdded();
        $this->otherTherapy[] = $otherTherapy;
        return $this;
    }

    /**
     * A single issue - either an indication, contraindication, interaction or an
     * undesirable effect for a medicinal product, medication, device or procedure.
     *
     * Information about the use of the medicinal product in relation to other
     * therapies described as part of the indication.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionOtherTherapy[] $otherTherapy
     * @return static
     */
    public function setOtherTherapy(array $otherTherapy = []): object
    {
        if ([] !== $this->otherTherapy) {
            $this->_trackValuesRemoved(count($this->otherTherapy));
            $this->otherTherapy = [];
        }
        if ([] === $otherTherapy) {
            return $this;
        }
        foreach($otherTherapy as $v) {
            if ($v instanceof FHIRClinicalUseDefinitionOtherTherapy) {
                $this->addOtherTherapy($v);
            } else {
                $this->addOtherTherapy(new FHIRClinicalUseDefinitionOtherTherapy($v));
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
        if (null !== ($v = $this->getDiseaseSymptomProcedure())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDiseaseStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISEASE_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getComorbidity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COMORBIDITY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIntendedEffect())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTENDED_EFFECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDurationRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDurationString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DURATION_STRING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getUndesirableEffect())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_UNDESIRABLE_EFFECT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getOtherTherapy())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OTHER_THERAPY, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISEASE_SYMPTOM_PROCEDURE])) {
            $v = $this->getDiseaseSymptomProcedure();
            foreach($validationRules[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION, self::FIELD_DISEASE_SYMPTOM_PROCEDURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISEASE_SYMPTOM_PROCEDURE])) {
                        $errs[self::FIELD_DISEASE_SYMPTOM_PROCEDURE] = [];
                    }
                    $errs[self::FIELD_DISEASE_SYMPTOM_PROCEDURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISEASE_STATUS])) {
            $v = $this->getDiseaseStatus();
            foreach($validationRules[self::FIELD_DISEASE_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION, self::FIELD_DISEASE_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISEASE_STATUS])) {
                        $errs[self::FIELD_DISEASE_STATUS] = [];
                    }
                    $errs[self::FIELD_DISEASE_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMORBIDITY])) {
            $v = $this->getComorbidity();
            foreach($validationRules[self::FIELD_COMORBIDITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION, self::FIELD_COMORBIDITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMORBIDITY])) {
                        $errs[self::FIELD_COMORBIDITY] = [];
                    }
                    $errs[self::FIELD_COMORBIDITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTENDED_EFFECT])) {
            $v = $this->getIntendedEffect();
            foreach($validationRules[self::FIELD_INTENDED_EFFECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION, self::FIELD_INTENDED_EFFECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTENDED_EFFECT])) {
                        $errs[self::FIELD_INTENDED_EFFECT] = [];
                    }
                    $errs[self::FIELD_INTENDED_EFFECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION_RANGE])) {
            $v = $this->getDurationRange();
            foreach($validationRules[self::FIELD_DURATION_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION, self::FIELD_DURATION_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION_RANGE])) {
                        $errs[self::FIELD_DURATION_RANGE] = [];
                    }
                    $errs[self::FIELD_DURATION_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DURATION_STRING])) {
            $v = $this->getDurationString();
            foreach($validationRules[self::FIELD_DURATION_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION, self::FIELD_DURATION_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DURATION_STRING])) {
                        $errs[self::FIELD_DURATION_STRING] = [];
                    }
                    $errs[self::FIELD_DURATION_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNDESIRABLE_EFFECT])) {
            $v = $this->getUndesirableEffect();
            foreach($validationRules[self::FIELD_UNDESIRABLE_EFFECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION, self::FIELD_UNDESIRABLE_EFFECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNDESIRABLE_EFFECT])) {
                        $errs[self::FIELD_UNDESIRABLE_EFFECT] = [];
                    }
                    $errs[self::FIELD_UNDESIRABLE_EFFECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OTHER_THERAPY])) {
            $v = $this->getOtherTherapy();
            foreach($validationRules[self::FIELD_OTHER_THERAPY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CLINICAL_USE_DEFINITION_DOT_INDICATION, self::FIELD_OTHER_THERAPY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OTHER_THERAPY])) {
                        $errs[self::FIELD_OTHER_THERAPY] = [];
                    }
                    $errs[self::FIELD_OTHER_THERAPY][$rule] = $err;
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
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionIndication $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionIndication
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
                throw new \DomainException(sprintf('FHIRClinicalUseDefinitionIndication::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRClinicalUseDefinitionIndication::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRClinicalUseDefinitionIndication(null);
        } elseif (!is_object($type) || !($type instanceof FHIRClinicalUseDefinitionIndication)) {
            throw new \RuntimeException(sprintf(
                'FHIRClinicalUseDefinitionIndication::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRClinicalUseDefinition\FHIRClinicalUseDefinitionIndication or null, %s seen.',
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
            if (self::FIELD_DISEASE_SYMPTOM_PROCEDURE === $n->nodeName) {
                $type->setDiseaseSymptomProcedure(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_DISEASE_STATUS === $n->nodeName) {
                $type->setDiseaseStatus(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_COMORBIDITY === $n->nodeName) {
                $type->addComorbidity(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_INTENDED_EFFECT === $n->nodeName) {
                $type->setIntendedEffect(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_DURATION_RANGE === $n->nodeName) {
                $type->setDurationRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_DURATION_STRING === $n->nodeName) {
                $type->setDurationString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_UNDESIRABLE_EFFECT === $n->nodeName) {
                $type->addUndesirableEffect(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_OTHER_THERAPY === $n->nodeName) {
                $type->addOtherTherapy(FHIRClinicalUseDefinitionOtherTherapy::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DURATION_STRING);
        if (null !== $n) {
            $pt = $type->getDurationString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDurationString($n->nodeValue);
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
        if (null !== ($v = $this->getDiseaseSymptomProcedure())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DISEASE_SYMPTOM_PROCEDURE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDiseaseStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DISEASE_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getComorbidity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_COMORBIDITY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getIntendedEffect())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INTENDED_EFFECT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDurationRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DURATION_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDurationString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DURATION_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getUndesirableEffect())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_UNDESIRABLE_EFFECT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getOtherTherapy())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_OTHER_THERAPY);
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
        if (null !== ($v = $this->getDiseaseSymptomProcedure())) {
            $out->{self::FIELD_DISEASE_SYMPTOM_PROCEDURE} = $v;
        }
        if (null !== ($v = $this->getDiseaseStatus())) {
            $out->{self::FIELD_DISEASE_STATUS} = $v;
        }
        if ([] !== ($vs = $this->getComorbidity())) {
            $out->{self::FIELD_COMORBIDITY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_COMORBIDITY}[] = $v;
            }
        }
        if (null !== ($v = $this->getIntendedEffect())) {
            $out->{self::FIELD_INTENDED_EFFECT} = $v;
        }
        if (null !== ($v = $this->getDurationRange())) {
            $out->{self::FIELD_DURATION_RANGE} = $v;
        }
        if (null !== ($v = $this->getDurationString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DURATION_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DURATION_STRING_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getUndesirableEffect())) {
            $out->{self::FIELD_UNDESIRABLE_EFFECT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_UNDESIRABLE_EFFECT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getOtherTherapy())) {
            $out->{self::FIELD_OTHER_THERAPY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_OTHER_THERAPY}[] = $v;
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