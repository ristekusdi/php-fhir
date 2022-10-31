<?php declare(strict_types=1);

namespace RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition;

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
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRString;
use RistekUSDI\FHIR\R4B\FHIRStringPrimitive;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;

/**
 * The detailed description of a substance, typically at a level beyond what is
 * used for prescribing.
 *
 * Class FHIRSubstanceDefinitionStructure
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition
 */
class FHIRSubstanceDefinitionStructure extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_STRUCTURE;
    const FIELD_STEREOCHEMISTRY = 'stereochemistry';
    const FIELD_OPTICAL_ACTIVITY = 'opticalActivity';
    const FIELD_MOLECULAR_FORMULA = 'molecularFormula';
    const FIELD_MOLECULAR_FORMULA_EXT = '_molecularFormula';
    const FIELD_MOLECULAR_FORMULA_BY_MOIETY = 'molecularFormulaByMoiety';
    const FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT = '_molecularFormulaByMoiety';
    const FIELD_MOLECULAR_WEIGHT = 'molecularWeight';
    const FIELD_TECHNIQUE = 'technique';
    const FIELD_SOURCE_DOCUMENT = 'sourceDocument';
    const FIELD_REPRESENTATION = 'representation';

    /** @var string */
    private $_xmlns = '';

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Stereochemistry type.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $stereochemistry = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optical activity type.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $opticalActivity = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Molecular formula of this substance, typically using the Hill system.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $molecularFormula = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified per moiety according to the Hill system, i.e. first C, then H, then
     * alphabetical, each moiety separated by a dot.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $molecularFormulaByMoiety = null;

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight
     */
    protected ?FHIRSubstanceDefinitionMolecularWeight $molecularWeight = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method used to elucidate the structure or characterization of the drug
     * substance. Examples: X-ray, HPLC, NMR, Peptide mapping, Ligand binding assay.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected ?array $technique = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of information about the structure.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[]
     */
    protected ?array $sourceDocument = [];

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A depiction of the structure or characterization of the substance.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRepresentation[]
     */
    protected ?array $representation = [];

    /**
     * Validation map for fields in type SubstanceDefinition.Structure
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRSubstanceDefinitionStructure Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRSubstanceDefinitionStructure::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_STEREOCHEMISTRY])) {
            if ($data[self::FIELD_STEREOCHEMISTRY] instanceof FHIRCodeableConcept) {
                $this->setStereochemistry($data[self::FIELD_STEREOCHEMISTRY]);
            } else {
                $this->setStereochemistry(new FHIRCodeableConcept($data[self::FIELD_STEREOCHEMISTRY]));
            }
        }
        if (isset($data[self::FIELD_OPTICAL_ACTIVITY])) {
            if ($data[self::FIELD_OPTICAL_ACTIVITY] instanceof FHIRCodeableConcept) {
                $this->setOpticalActivity($data[self::FIELD_OPTICAL_ACTIVITY]);
            } else {
                $this->setOpticalActivity(new FHIRCodeableConcept($data[self::FIELD_OPTICAL_ACTIVITY]));
            }
        }
        if (isset($data[self::FIELD_MOLECULAR_FORMULA]) || isset($data[self::FIELD_MOLECULAR_FORMULA_EXT])) {
            $value = $data[self::FIELD_MOLECULAR_FORMULA] ?? null;
            $ext = (isset($data[self::FIELD_MOLECULAR_FORMULA_EXT]) && is_array($data[self::FIELD_MOLECULAR_FORMULA_EXT])) ? $data[self::FIELD_MOLECULAR_FORMULA_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMolecularFormula($value);
                } else if (is_array($value)) {
                    $this->setMolecularFormula(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMolecularFormula(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMolecularFormula(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY]) || isset($data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT])) {
            $value = $data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY] ?? null;
            $ext = (isset($data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT]) && is_array($data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT])) ? $data[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMolecularFormulaByMoiety($value);
                } else if (is_array($value)) {
                    $this->setMolecularFormulaByMoiety(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMolecularFormulaByMoiety(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMolecularFormulaByMoiety(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_MOLECULAR_WEIGHT])) {
            if ($data[self::FIELD_MOLECULAR_WEIGHT] instanceof FHIRSubstanceDefinitionMolecularWeight) {
                $this->setMolecularWeight($data[self::FIELD_MOLECULAR_WEIGHT]);
            } else {
                $this->setMolecularWeight(new FHIRSubstanceDefinitionMolecularWeight($data[self::FIELD_MOLECULAR_WEIGHT]));
            }
        }
        if (isset($data[self::FIELD_TECHNIQUE])) {
            if (is_array($data[self::FIELD_TECHNIQUE])) {
                foreach($data[self::FIELD_TECHNIQUE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addTechnique($v);
                    } else {
                        $this->addTechnique(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_TECHNIQUE] instanceof FHIRCodeableConcept) {
                $this->addTechnique($data[self::FIELD_TECHNIQUE]);
            } else {
                $this->addTechnique(new FHIRCodeableConcept($data[self::FIELD_TECHNIQUE]));
            }
        }
        if (isset($data[self::FIELD_SOURCE_DOCUMENT])) {
            if (is_array($data[self::FIELD_SOURCE_DOCUMENT])) {
                foreach($data[self::FIELD_SOURCE_DOCUMENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSourceDocument($v);
                    } else {
                        $this->addSourceDocument(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_SOURCE_DOCUMENT] instanceof FHIRReference) {
                $this->addSourceDocument($data[self::FIELD_SOURCE_DOCUMENT]);
            } else {
                $this->addSourceDocument(new FHIRReference($data[self::FIELD_SOURCE_DOCUMENT]));
            }
        }
        if (isset($data[self::FIELD_REPRESENTATION])) {
            if (is_array($data[self::FIELD_REPRESENTATION])) {
                foreach($data[self::FIELD_REPRESENTATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRSubstanceDefinitionRepresentation) {
                        $this->addRepresentation($v);
                    } else {
                        $this->addRepresentation(new FHIRSubstanceDefinitionRepresentation($v));
                    }
                }
            } elseif ($data[self::FIELD_REPRESENTATION] instanceof FHIRSubstanceDefinitionRepresentation) {
                $this->addRepresentation($data[self::FIELD_REPRESENTATION]);
            } else {
                $this->addRepresentation(new FHIRSubstanceDefinitionRepresentation($data[self::FIELD_REPRESENTATION]));
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
        return "<SubstanceDefinitionStructure{$xmlns}></SubstanceDefinitionStructure>";
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Stereochemistry type.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getStereochemistry(): ?FHIRCodeableConcept
    {
        return $this->stereochemistry;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Stereochemistry type.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $stereochemistry
     * @return static
     */
    public function setStereochemistry(?FHIRCodeableConcept $stereochemistry = null): object
    {
        $this->_trackValueSet($this->stereochemistry, $stereochemistry);
        $this->stereochemistry = $stereochemistry;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optical activity type.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getOpticalActivity(): ?FHIRCodeableConcept
    {
        return $this->opticalActivity;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Optical activity type.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $opticalActivity
     * @return static
     */
    public function setOpticalActivity(?FHIRCodeableConcept $opticalActivity = null): object
    {
        $this->_trackValueSet($this->opticalActivity, $opticalActivity);
        $this->opticalActivity = $opticalActivity;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Molecular formula of this substance, typically using the Hill system.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getMolecularFormula(): ?FHIRString
    {
        return $this->molecularFormula;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Molecular formula of this substance, typically using the Hill system.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $molecularFormula
     * @return static
     */
    public function setMolecularFormula($molecularFormula = null): object
    {
        if (null !== $molecularFormula && !($molecularFormula instanceof FHIRString)) {
            $molecularFormula = new FHIRString($molecularFormula);
        }
        $this->_trackValueSet($this->molecularFormula, $molecularFormula);
        $this->molecularFormula = $molecularFormula;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified per moiety according to the Hill system, i.e. first C, then H, then
     * alphabetical, each moiety separated by a dot.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getMolecularFormulaByMoiety(): ?FHIRString
    {
        return $this->molecularFormulaByMoiety;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Specified per moiety according to the Hill system, i.e. first C, then H, then
     * alphabetical, each moiety separated by a dot.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $molecularFormulaByMoiety
     * @return static
     */
    public function setMolecularFormulaByMoiety($molecularFormulaByMoiety = null): object
    {
        if (null !== $molecularFormulaByMoiety && !($molecularFormulaByMoiety instanceof FHIRString)) {
            $molecularFormulaByMoiety = new FHIRString($molecularFormulaByMoiety);
        }
        $this->_trackValueSet($this->molecularFormulaByMoiety, $molecularFormulaByMoiety);
        $this->molecularFormulaByMoiety = $molecularFormulaByMoiety;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight
     */
    public function getMolecularWeight(): ?FHIRSubstanceDefinitionMolecularWeight
    {
        return $this->molecularWeight;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * The molecular weight or weight range (for proteins, polymers or nucleic acids).
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionMolecularWeight $molecularWeight
     * @return static
     */
    public function setMolecularWeight(?FHIRSubstanceDefinitionMolecularWeight $molecularWeight = null): object
    {
        $this->_trackValueSet($this->molecularWeight, $molecularWeight);
        $this->molecularWeight = $molecularWeight;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method used to elucidate the structure or characterization of the drug
     * substance. Examples: X-ray, HPLC, NMR, Peptide mapping, Ligand binding assay.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getTechnique(): ?array
    {
        return $this->technique;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method used to elucidate the structure or characterization of the drug
     * substance. Examples: X-ray, HPLC, NMR, Peptide mapping, Ligand binding assay.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $technique
     * @return static
     */
    public function addTechnique(?FHIRCodeableConcept $technique = null): object
    {
        $this->_trackValueAdded();
        $this->technique[] = $technique;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The method used to elucidate the structure or characterization of the drug
     * substance. Examples: X-ray, HPLC, NMR, Peptide mapping, Ligand binding assay.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[] $technique
     * @return static
     */
    public function setTechnique(array $technique = []): object
    {
        if ([] !== $this->technique) {
            $this->_trackValuesRemoved(count($this->technique));
            $this->technique = [];
        }
        if ([] === $technique) {
            return $this;
        }
        foreach($technique as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addTechnique($v);
            } else {
                $this->addTechnique(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of information about the structure.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[]
     */
    public function getSourceDocument(): ?array
    {
        return $this->sourceDocument;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of information about the structure.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference $sourceDocument
     * @return static
     */
    public function addSourceDocument(?FHIRReference $sourceDocument = null): object
    {
        $this->_trackValueAdded();
        $this->sourceDocument[] = $sourceDocument;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The source of information about the structure.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[] $sourceDocument
     * @return static
     */
    public function setSourceDocument(array $sourceDocument = []): object
    {
        if ([] !== $this->sourceDocument) {
            $this->_trackValuesRemoved(count($this->sourceDocument));
            $this->sourceDocument = [];
        }
        if ([] === $sourceDocument) {
            return $this;
        }
        foreach($sourceDocument as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSourceDocument($v);
            } else {
                $this->addSourceDocument(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A depiction of the structure or characterization of the substance.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRepresentation[]
     */
    public function getRepresentation(): ?array
    {
        return $this->representation;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A depiction of the structure or characterization of the substance.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRepresentation $representation
     * @return static
     */
    public function addRepresentation(?FHIRSubstanceDefinitionRepresentation $representation = null): object
    {
        $this->_trackValueAdded();
        $this->representation[] = $representation;
        return $this;
    }

    /**
     * The detailed description of a substance, typically at a level beyond what is
     * used for prescribing.
     *
     * A depiction of the structure or characterization of the substance.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionRepresentation[] $representation
     * @return static
     */
    public function setRepresentation(array $representation = []): object
    {
        if ([] !== $this->representation) {
            $this->_trackValuesRemoved(count($this->representation));
            $this->representation = [];
        }
        if ([] === $representation) {
            return $this;
        }
        foreach($representation as $v) {
            if ($v instanceof FHIRSubstanceDefinitionRepresentation) {
                $this->addRepresentation($v);
            } else {
                $this->addRepresentation(new FHIRSubstanceDefinitionRepresentation($v));
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
        if (null !== ($v = $this->getStereochemistry())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STEREOCHEMISTRY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getOpticalActivity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_OPTICAL_ACTIVITY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMolecularFormula())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MOLECULAR_FORMULA] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMolecularFormulaByMoiety())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMolecularWeight())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MOLECULAR_WEIGHT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getTechnique())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TECHNIQUE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSourceDocument())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SOURCE_DOCUMENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRepresentation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REPRESENTATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STEREOCHEMISTRY])) {
            $v = $this->getStereochemistry();
            foreach($validationRules[self::FIELD_STEREOCHEMISTRY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_STRUCTURE, self::FIELD_STEREOCHEMISTRY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STEREOCHEMISTRY])) {
                        $errs[self::FIELD_STEREOCHEMISTRY] = [];
                    }
                    $errs[self::FIELD_STEREOCHEMISTRY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPTICAL_ACTIVITY])) {
            $v = $this->getOpticalActivity();
            foreach($validationRules[self::FIELD_OPTICAL_ACTIVITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_STRUCTURE, self::FIELD_OPTICAL_ACTIVITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPTICAL_ACTIVITY])) {
                        $errs[self::FIELD_OPTICAL_ACTIVITY] = [];
                    }
                    $errs[self::FIELD_OPTICAL_ACTIVITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MOLECULAR_FORMULA])) {
            $v = $this->getMolecularFormula();
            foreach($validationRules[self::FIELD_MOLECULAR_FORMULA] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_STRUCTURE, self::FIELD_MOLECULAR_FORMULA, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MOLECULAR_FORMULA])) {
                        $errs[self::FIELD_MOLECULAR_FORMULA] = [];
                    }
                    $errs[self::FIELD_MOLECULAR_FORMULA][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY])) {
            $v = $this->getMolecularFormulaByMoiety();
            foreach($validationRules[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_STRUCTURE, self::FIELD_MOLECULAR_FORMULA_BY_MOIETY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY])) {
                        $errs[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY] = [];
                    }
                    $errs[self::FIELD_MOLECULAR_FORMULA_BY_MOIETY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MOLECULAR_WEIGHT])) {
            $v = $this->getMolecularWeight();
            foreach($validationRules[self::FIELD_MOLECULAR_WEIGHT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_STRUCTURE, self::FIELD_MOLECULAR_WEIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MOLECULAR_WEIGHT])) {
                        $errs[self::FIELD_MOLECULAR_WEIGHT] = [];
                    }
                    $errs[self::FIELD_MOLECULAR_WEIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TECHNIQUE])) {
            $v = $this->getTechnique();
            foreach($validationRules[self::FIELD_TECHNIQUE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_STRUCTURE, self::FIELD_TECHNIQUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TECHNIQUE])) {
                        $errs[self::FIELD_TECHNIQUE] = [];
                    }
                    $errs[self::FIELD_TECHNIQUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SOURCE_DOCUMENT])) {
            $v = $this->getSourceDocument();
            foreach($validationRules[self::FIELD_SOURCE_DOCUMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_STRUCTURE, self::FIELD_SOURCE_DOCUMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SOURCE_DOCUMENT])) {
                        $errs[self::FIELD_SOURCE_DOCUMENT] = [];
                    }
                    $errs[self::FIELD_SOURCE_DOCUMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPRESENTATION])) {
            $v = $this->getRepresentation();
            foreach($validationRules[self::FIELD_REPRESENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_SUBSTANCE_DEFINITION_DOT_STRUCTURE, self::FIELD_REPRESENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPRESENTATION])) {
                        $errs[self::FIELD_REPRESENTATION] = [];
                    }
                    $errs[self::FIELD_REPRESENTATION][$rule] = $err;
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
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionStructure $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionStructure
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
                throw new \DomainException(sprintf('FHIRSubstanceDefinitionStructure::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRSubstanceDefinitionStructure::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRSubstanceDefinitionStructure(null);
        } elseif (!is_object($type) || !($type instanceof FHIRSubstanceDefinitionStructure)) {
            throw new \RuntimeException(sprintf(
                'FHIRSubstanceDefinitionStructure::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRSubstanceDefinition\FHIRSubstanceDefinitionStructure or null, %s seen.',
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
            if (self::FIELD_STEREOCHEMISTRY === $n->nodeName) {
                $type->setStereochemistry(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_OPTICAL_ACTIVITY === $n->nodeName) {
                $type->setOpticalActivity(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_MOLECULAR_FORMULA === $n->nodeName) {
                $type->setMolecularFormula(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MOLECULAR_FORMULA_BY_MOIETY === $n->nodeName) {
                $type->setMolecularFormulaByMoiety(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MOLECULAR_WEIGHT === $n->nodeName) {
                $type->setMolecularWeight(FHIRSubstanceDefinitionMolecularWeight::xmlUnserialize($n));
            } elseif (self::FIELD_TECHNIQUE === $n->nodeName) {
                $type->addTechnique(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SOURCE_DOCUMENT === $n->nodeName) {
                $type->addSourceDocument(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_REPRESENTATION === $n->nodeName) {
                $type->addRepresentation(FHIRSubstanceDefinitionRepresentation::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MOLECULAR_FORMULA);
        if (null !== $n) {
            $pt = $type->getMolecularFormula();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMolecularFormula($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MOLECULAR_FORMULA_BY_MOIETY);
        if (null !== $n) {
            $pt = $type->getMolecularFormulaByMoiety();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMolecularFormulaByMoiety($n->nodeValue);
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
        if (null !== ($v = $this->getStereochemistry())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STEREOCHEMISTRY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getOpticalActivity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_OPTICAL_ACTIVITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMolecularFormula())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MOLECULAR_FORMULA);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMolecularFormulaByMoiety())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MOLECULAR_FORMULA_BY_MOIETY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMolecularWeight())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MOLECULAR_WEIGHT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getTechnique())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TECHNIQUE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getSourceDocument())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SOURCE_DOCUMENT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getRepresentation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REPRESENTATION);
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
        if (null !== ($v = $this->getStereochemistry())) {
            $out->{self::FIELD_STEREOCHEMISTRY} = $v;
        }
        if (null !== ($v = $this->getOpticalActivity())) {
            $out->{self::FIELD_OPTICAL_ACTIVITY} = $v;
        }
        if (null !== ($v = $this->getMolecularFormula())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MOLECULAR_FORMULA} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MOLECULAR_FORMULA_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMolecularFormulaByMoiety())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MOLECULAR_FORMULA_BY_MOIETY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MOLECULAR_FORMULA_BY_MOIETY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMolecularWeight())) {
            $out->{self::FIELD_MOLECULAR_WEIGHT} = $v;
        }
        if ([] !== ($vs = $this->getTechnique())) {
            $out->{self::FIELD_TECHNIQUE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_TECHNIQUE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getSourceDocument())) {
            $out->{self::FIELD_SOURCE_DOCUMENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SOURCE_DOCUMENT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getRepresentation())) {
            $out->{self::FIELD_REPRESENTATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REPRESENTATION}[] = $v;
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