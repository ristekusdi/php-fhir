<?php declare(strict_types=1);

namespace RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRIngredient;

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
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatio;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatioRange;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRString;
use RistekUSDI\FHIR\R4B\FHIRStringPrimitive;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;

/**
 * An ingredient of a manufactured item or pharmaceutical product.
 *
 * Class FHIRIngredientStrength
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRIngredient
 */
class FHIRIngredientStrength extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH;
    const FIELD_PRESENTATION_RATIO = 'presentationRatio';
    const FIELD_PRESENTATION_RATIO_RANGE = 'presentationRatioRange';
    const FIELD_TEXT_PRESENTATION = 'textPresentation';
    const FIELD_TEXT_PRESENTATION_EXT = '_textPresentation';
    const FIELD_CONCENTRATION_RATIO = 'concentrationRatio';
    const FIELD_CONCENTRATION_RATIO_RANGE = 'concentrationRatioRange';
    const FIELD_TEXT_CONCENTRATION = 'textConcentration';
    const FIELD_TEXT_CONCENTRATION_EXT = '_textConcentration';
    const FIELD_MEASUREMENT_POINT = 'measurementPoint';
    const FIELD_MEASUREMENT_POINT_EXT = '_measurementPoint';
    const FIELD_COUNTRY = 'country';
    const FIELD_REFERENCE_STRENGTH = 'referenceStrength';

    /** @var string */
    private $_xmlns = '';

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatio
     */
    protected ?FHIRRatio $presentationRatio = null;

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatioRange
     */
    protected ?FHIRRatioRange $presentationRatioRange = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the presentation strength or a
     * part of it - with the rest being in Strength.presentation as a ratio.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $textPresentation = null;

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatio
     */
    protected ?FHIRRatio $concentrationRatio = null;

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatioRange
     */
    protected ?FHIRRatioRange $concentrationRatioRange = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the concentration strength or a
     * part of it - with the rest being in Strength.concentration as a ratio.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $textConcentration = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For when strength is measured at a particular point or distance. There are
     * products where strength is measured at a particular point. For example, the
     * strength of the ingredient in some inhalers is measured at a particular position
     * relative to the point of aerosolization.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $measurementPoint = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected ?array $country = [];

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * Strength expressed in terms of a reference substance. For when the ingredient
     * strength is additionally expressed as equivalent to the strength of some other
     * closely related substance (e.g. salt vs. base). Reference strength represents
     * the strength (quantitative composition) of the active moiety of the active
     * substance. There are situations when the active substance and active moiety are
     * different, therefore both a strength and a reference strength are needed.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength[]
     */
    protected ?array $referenceStrength = [];

    /**
     * Validation map for fields in type Ingredient.Strength
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRIngredientStrength Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRIngredientStrength::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_PRESENTATION_RATIO])) {
            if ($data[self::FIELD_PRESENTATION_RATIO] instanceof FHIRRatio) {
                $this->setPresentationRatio($data[self::FIELD_PRESENTATION_RATIO]);
            } else {
                $this->setPresentationRatio(new FHIRRatio($data[self::FIELD_PRESENTATION_RATIO]));
            }
        }
        if (isset($data[self::FIELD_PRESENTATION_RATIO_RANGE])) {
            if ($data[self::FIELD_PRESENTATION_RATIO_RANGE] instanceof FHIRRatioRange) {
                $this->setPresentationRatioRange($data[self::FIELD_PRESENTATION_RATIO_RANGE]);
            } else {
                $this->setPresentationRatioRange(new FHIRRatioRange($data[self::FIELD_PRESENTATION_RATIO_RANGE]));
            }
        }
        if (isset($data[self::FIELD_TEXT_PRESENTATION]) || isset($data[self::FIELD_TEXT_PRESENTATION_EXT])) {
            $value = $data[self::FIELD_TEXT_PRESENTATION] ?? null;
            $ext = (isset($data[self::FIELD_TEXT_PRESENTATION_EXT]) && is_array($data[self::FIELD_TEXT_PRESENTATION_EXT])) ? $data[self::FIELD_TEXT_PRESENTATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTextPresentation($value);
                } else if (is_array($value)) {
                    $this->setTextPresentation(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTextPresentation(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTextPresentation(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CONCENTRATION_RATIO])) {
            if ($data[self::FIELD_CONCENTRATION_RATIO] instanceof FHIRRatio) {
                $this->setConcentrationRatio($data[self::FIELD_CONCENTRATION_RATIO]);
            } else {
                $this->setConcentrationRatio(new FHIRRatio($data[self::FIELD_CONCENTRATION_RATIO]));
            }
        }
        if (isset($data[self::FIELD_CONCENTRATION_RATIO_RANGE])) {
            if ($data[self::FIELD_CONCENTRATION_RATIO_RANGE] instanceof FHIRRatioRange) {
                $this->setConcentrationRatioRange($data[self::FIELD_CONCENTRATION_RATIO_RANGE]);
            } else {
                $this->setConcentrationRatioRange(new FHIRRatioRange($data[self::FIELD_CONCENTRATION_RATIO_RANGE]));
            }
        }
        if (isset($data[self::FIELD_TEXT_CONCENTRATION]) || isset($data[self::FIELD_TEXT_CONCENTRATION_EXT])) {
            $value = $data[self::FIELD_TEXT_CONCENTRATION] ?? null;
            $ext = (isset($data[self::FIELD_TEXT_CONCENTRATION_EXT]) && is_array($data[self::FIELD_TEXT_CONCENTRATION_EXT])) ? $data[self::FIELD_TEXT_CONCENTRATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTextConcentration($value);
                } else if (is_array($value)) {
                    $this->setTextConcentration(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTextConcentration(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTextConcentration(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_MEASUREMENT_POINT]) || isset($data[self::FIELD_MEASUREMENT_POINT_EXT])) {
            $value = $data[self::FIELD_MEASUREMENT_POINT] ?? null;
            $ext = (isset($data[self::FIELD_MEASUREMENT_POINT_EXT]) && is_array($data[self::FIELD_MEASUREMENT_POINT_EXT])) ? $data[self::FIELD_MEASUREMENT_POINT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setMeasurementPoint($value);
                } else if (is_array($value)) {
                    $this->setMeasurementPoint(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setMeasurementPoint(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMeasurementPoint(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_COUNTRY])) {
            if (is_array($data[self::FIELD_COUNTRY])) {
                foreach($data[self::FIELD_COUNTRY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCountry($v);
                    } else {
                        $this->addCountry(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_COUNTRY] instanceof FHIRCodeableConcept) {
                $this->addCountry($data[self::FIELD_COUNTRY]);
            } else {
                $this->addCountry(new FHIRCodeableConcept($data[self::FIELD_COUNTRY]));
            }
        }
        if (isset($data[self::FIELD_REFERENCE_STRENGTH])) {
            if (is_array($data[self::FIELD_REFERENCE_STRENGTH])) {
                foreach($data[self::FIELD_REFERENCE_STRENGTH] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIngredientReferenceStrength) {
                        $this->addReferenceStrength($v);
                    } else {
                        $this->addReferenceStrength(new FHIRIngredientReferenceStrength($v));
                    }
                }
            } elseif ($data[self::FIELD_REFERENCE_STRENGTH] instanceof FHIRIngredientReferenceStrength) {
                $this->addReferenceStrength($data[self::FIELD_REFERENCE_STRENGTH]);
            } else {
                $this->addReferenceStrength(new FHIRIngredientReferenceStrength($data[self::FIELD_REFERENCE_STRENGTH]));
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
        return "<IngredientStrength{$xmlns}></IngredientStrength>";
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatio
     */
    public function getPresentationRatio(): ?FHIRRatio
    {
        return $this->presentationRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatio $presentationRatio
     * @return static
     */
    public function setPresentationRatio(?FHIRRatio $presentationRatio = null): object
    {
        $this->_trackValueSet($this->presentationRatio, $presentationRatio);
        $this->presentationRatio = $presentationRatio;
        return $this;
    }

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatioRange
     */
    public function getPresentationRatioRange(): ?FHIRRatioRange
    {
        return $this->presentationRatioRange;
    }

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The quantity of substance in the unit of presentation, or in the volume (or
     * mass) of the single pharmaceutical product or manufactured item. Unit of
     * presentation refers to the quantity that the item occurs in e.g. a strength per
     * tablet size, perhaps 'per 20mg' (the size of the tablet). It is not generally
     * normalized as a unitary unit, which would be 'per mg').
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatioRange $presentationRatioRange
     * @return static
     */
    public function setPresentationRatioRange(?FHIRRatioRange $presentationRatioRange = null): object
    {
        $this->_trackValueSet($this->presentationRatioRange, $presentationRatioRange);
        $this->presentationRatioRange = $presentationRatioRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the presentation strength or a
     * part of it - with the rest being in Strength.presentation as a ratio.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getTextPresentation(): ?FHIRString
    {
        return $this->textPresentation;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the presentation strength or a
     * part of it - with the rest being in Strength.presentation as a ratio.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $textPresentation
     * @return static
     */
    public function setTextPresentation($textPresentation = null): object
    {
        if (null !== $textPresentation && !($textPresentation instanceof FHIRString)) {
            $textPresentation = new FHIRString($textPresentation);
        }
        $this->_trackValueSet($this->textPresentation, $textPresentation);
        $this->textPresentation = $textPresentation;
        return $this;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatio
     */
    public function getConcentrationRatio(): ?FHIRRatio
    {
        return $this->concentrationRatio;
    }

    /**
     * A relationship of two Quantity values - expressed as a numerator and a
     * denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatio $concentrationRatio
     * @return static
     */
    public function setConcentrationRatio(?FHIRRatio $concentrationRatio = null): object
    {
        $this->_trackValueSet($this->concentrationRatio, $concentrationRatio);
        $this->concentrationRatio = $concentrationRatio;
        return $this;
    }

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatioRange
     */
    public function getConcentrationRatioRange(): ?FHIRRatioRange
    {
        return $this->concentrationRatioRange;
    }

    /**
     * A range of ratios expressed as a low and high numerator and a denominator.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The strength per unitary volume (or mass).
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRRatioRange $concentrationRatioRange
     * @return static
     */
    public function setConcentrationRatioRange(?FHIRRatioRange $concentrationRatioRange = null): object
    {
        $this->_trackValueSet($this->concentrationRatioRange, $concentrationRatioRange);
        $this->concentrationRatioRange = $concentrationRatioRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the concentration strength or a
     * part of it - with the rest being in Strength.concentration as a ratio.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getTextConcentration(): ?FHIRString
    {
        return $this->textConcentration;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A textual represention of either the whole of the concentration strength or a
     * part of it - with the rest being in Strength.concentration as a ratio.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $textConcentration
     * @return static
     */
    public function setTextConcentration($textConcentration = null): object
    {
        if (null !== $textConcentration && !($textConcentration instanceof FHIRString)) {
            $textConcentration = new FHIRString($textConcentration);
        }
        $this->_trackValueSet($this->textConcentration, $textConcentration);
        $this->textConcentration = $textConcentration;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For when strength is measured at a particular point or distance. There are
     * products where strength is measured at a particular point. For example, the
     * strength of the ingredient in some inhalers is measured at a particular position
     * relative to the point of aerosolization.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getMeasurementPoint(): ?FHIRString
    {
        return $this->measurementPoint;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * For when strength is measured at a particular point or distance. There are
     * products where strength is measured at a particular point. For example, the
     * strength of the ingredient in some inhalers is measured at a particular position
     * relative to the point of aerosolization.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $measurementPoint
     * @return static
     */
    public function setMeasurementPoint($measurementPoint = null): object
    {
        if (null !== $measurementPoint && !($measurementPoint instanceof FHIRString)) {
            $measurementPoint = new FHIRString($measurementPoint);
        }
        $this->_trackValueSet($this->measurementPoint, $measurementPoint);
        $this->measurementPoint = $measurementPoint;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCountry(): ?array
    {
        return $this->country;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $country
     * @return static
     */
    public function addCountry(?FHIRCodeableConcept $country = null): object
    {
        $this->_trackValueAdded();
        $this->country[] = $country;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The country or countries for which the strength range applies.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[] $country
     * @return static
     */
    public function setCountry(array $country = []): object
    {
        if ([] !== $this->country) {
            $this->_trackValuesRemoved(count($this->country));
            $this->country = [];
        }
        if ([] === $country) {
            return $this;
        }
        foreach($country as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCountry($v);
            } else {
                $this->addCountry(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * Strength expressed in terms of a reference substance. For when the ingredient
     * strength is additionally expressed as equivalent to the strength of some other
     * closely related substance (e.g. salt vs. base). Reference strength represents
     * the strength (quantitative composition) of the active moiety of the active
     * substance. There are situations when the active substance and active moiety are
     * different, therefore both a strength and a reference strength are needed.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength[]
     */
    public function getReferenceStrength(): ?array
    {
        return $this->referenceStrength;
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * Strength expressed in terms of a reference substance. For when the ingredient
     * strength is additionally expressed as equivalent to the strength of some other
     * closely related substance (e.g. salt vs. base). Reference strength represents
     * the strength (quantitative composition) of the active moiety of the active
     * substance. There are situations when the active substance and active moiety are
     * different, therefore both a strength and a reference strength are needed.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength $referenceStrength
     * @return static
     */
    public function addReferenceStrength(?FHIRIngredientReferenceStrength $referenceStrength = null): object
    {
        $this->_trackValueAdded();
        $this->referenceStrength[] = $referenceStrength;
        return $this;
    }

    /**
     * An ingredient of a manufactured item or pharmaceutical product.
     *
     * Strength expressed in terms of a reference substance. For when the ingredient
     * strength is additionally expressed as equivalent to the strength of some other
     * closely related substance (e.g. salt vs. base). Reference strength represents
     * the strength (quantitative composition) of the active moiety of the active
     * substance. There are situations when the active substance and active moiety are
     * different, therefore both a strength and a reference strength are needed.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientReferenceStrength[] $referenceStrength
     * @return static
     */
    public function setReferenceStrength(array $referenceStrength = []): object
    {
        if ([] !== $this->referenceStrength) {
            $this->_trackValuesRemoved(count($this->referenceStrength));
            $this->referenceStrength = [];
        }
        if ([] === $referenceStrength) {
            return $this;
        }
        foreach($referenceStrength as $v) {
            if ($v instanceof FHIRIngredientReferenceStrength) {
                $this->addReferenceStrength($v);
            } else {
                $this->addReferenceStrength(new FHIRIngredientReferenceStrength($v));
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
        if (null !== ($v = $this->getPresentationRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRESENTATION_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPresentationRatioRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRESENTATION_RATIO_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTextPresentation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT_PRESENTATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConcentrationRatio())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONCENTRATION_RATIO] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getConcentrationRatioRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONCENTRATION_RATIO_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTextConcentration())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT_CONCENTRATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMeasurementPoint())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEASUREMENT_POINT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCountry())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_COUNTRY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReferenceStrength())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REFERENCE_STRENGTH, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRESENTATION_RATIO])) {
            $v = $this->getPresentationRatio();
            foreach($validationRules[self::FIELD_PRESENTATION_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_PRESENTATION_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRESENTATION_RATIO])) {
                        $errs[self::FIELD_PRESENTATION_RATIO] = [];
                    }
                    $errs[self::FIELD_PRESENTATION_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRESENTATION_RATIO_RANGE])) {
            $v = $this->getPresentationRatioRange();
            foreach($validationRules[self::FIELD_PRESENTATION_RATIO_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_PRESENTATION_RATIO_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRESENTATION_RATIO_RANGE])) {
                        $errs[self::FIELD_PRESENTATION_RATIO_RANGE] = [];
                    }
                    $errs[self::FIELD_PRESENTATION_RATIO_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT_PRESENTATION])) {
            $v = $this->getTextPresentation();
            foreach($validationRules[self::FIELD_TEXT_PRESENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_TEXT_PRESENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT_PRESENTATION])) {
                        $errs[self::FIELD_TEXT_PRESENTATION] = [];
                    }
                    $errs[self::FIELD_TEXT_PRESENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONCENTRATION_RATIO])) {
            $v = $this->getConcentrationRatio();
            foreach($validationRules[self::FIELD_CONCENTRATION_RATIO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_CONCENTRATION_RATIO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONCENTRATION_RATIO])) {
                        $errs[self::FIELD_CONCENTRATION_RATIO] = [];
                    }
                    $errs[self::FIELD_CONCENTRATION_RATIO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONCENTRATION_RATIO_RANGE])) {
            $v = $this->getConcentrationRatioRange();
            foreach($validationRules[self::FIELD_CONCENTRATION_RATIO_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_CONCENTRATION_RATIO_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONCENTRATION_RATIO_RANGE])) {
                        $errs[self::FIELD_CONCENTRATION_RATIO_RANGE] = [];
                    }
                    $errs[self::FIELD_CONCENTRATION_RATIO_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT_CONCENTRATION])) {
            $v = $this->getTextConcentration();
            foreach($validationRules[self::FIELD_TEXT_CONCENTRATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_TEXT_CONCENTRATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT_CONCENTRATION])) {
                        $errs[self::FIELD_TEXT_CONCENTRATION] = [];
                    }
                    $errs[self::FIELD_TEXT_CONCENTRATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEASUREMENT_POINT])) {
            $v = $this->getMeasurementPoint();
            foreach($validationRules[self::FIELD_MEASUREMENT_POINT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_MEASUREMENT_POINT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEASUREMENT_POINT])) {
                        $errs[self::FIELD_MEASUREMENT_POINT] = [];
                    }
                    $errs[self::FIELD_MEASUREMENT_POINT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COUNTRY])) {
            $v = $this->getCountry();
            foreach($validationRules[self::FIELD_COUNTRY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_COUNTRY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COUNTRY])) {
                        $errs[self::FIELD_COUNTRY] = [];
                    }
                    $errs[self::FIELD_COUNTRY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REFERENCE_STRENGTH])) {
            $v = $this->getReferenceStrength();
            foreach($validationRules[self::FIELD_REFERENCE_STRENGTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_INGREDIENT_DOT_STRENGTH, self::FIELD_REFERENCE_STRENGTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REFERENCE_STRENGTH])) {
                        $errs[self::FIELD_REFERENCE_STRENGTH] = [];
                    }
                    $errs[self::FIELD_REFERENCE_STRENGTH][$rule] = $err;
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
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientStrength $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientStrength
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
                throw new \DomainException(sprintf('FHIRIngredientStrength::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRIngredientStrength::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRIngredientStrength(null);
        } elseif (!is_object($type) || !($type instanceof FHIRIngredientStrength)) {
            throw new \RuntimeException(sprintf(
                'FHIRIngredientStrength::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRIngredient\FHIRIngredientStrength or null, %s seen.',
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
            if (self::FIELD_PRESENTATION_RATIO === $n->nodeName) {
                $type->setPresentationRatio(FHIRRatio::xmlUnserialize($n));
            } elseif (self::FIELD_PRESENTATION_RATIO_RANGE === $n->nodeName) {
                $type->setPresentationRatioRange(FHIRRatioRange::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT_PRESENTATION === $n->nodeName) {
                $type->setTextPresentation(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_CONCENTRATION_RATIO === $n->nodeName) {
                $type->setConcentrationRatio(FHIRRatio::xmlUnserialize($n));
            } elseif (self::FIELD_CONCENTRATION_RATIO_RANGE === $n->nodeName) {
                $type->setConcentrationRatioRange(FHIRRatioRange::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT_CONCENTRATION === $n->nodeName) {
                $type->setTextConcentration(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MEASUREMENT_POINT === $n->nodeName) {
                $type->setMeasurementPoint(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_COUNTRY === $n->nodeName) {
                $type->addCountry(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_REFERENCE_STRENGTH === $n->nodeName) {
                $type->addReferenceStrength(FHIRIngredientReferenceStrength::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TEXT_PRESENTATION);
        if (null !== $n) {
            $pt = $type->getTextPresentation();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setTextPresentation($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TEXT_CONCENTRATION);
        if (null !== $n) {
            $pt = $type->getTextConcentration();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setTextConcentration($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MEASUREMENT_POINT);
        if (null !== $n) {
            $pt = $type->getMeasurementPoint();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMeasurementPoint($n->nodeValue);
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
        if (null !== ($v = $this->getPresentationRatio())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRESENTATION_RATIO);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPresentationRatioRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PRESENTATION_RATIO_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTextPresentation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TEXT_PRESENTATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getConcentrationRatio())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONCENTRATION_RATIO);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getConcentrationRatioRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONCENTRATION_RATIO_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTextConcentration())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TEXT_CONCENTRATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMeasurementPoint())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MEASUREMENT_POINT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getCountry())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_COUNTRY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getReferenceStrength())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REFERENCE_STRENGTH);
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
        if (null !== ($v = $this->getPresentationRatio())) {
            $out->{self::FIELD_PRESENTATION_RATIO} = $v;
        }
        if (null !== ($v = $this->getPresentationRatioRange())) {
            $out->{self::FIELD_PRESENTATION_RATIO_RANGE} = $v;
        }
        if (null !== ($v = $this->getTextPresentation())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TEXT_PRESENTATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TEXT_PRESENTATION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getConcentrationRatio())) {
            $out->{self::FIELD_CONCENTRATION_RATIO} = $v;
        }
        if (null !== ($v = $this->getConcentrationRatioRange())) {
            $out->{self::FIELD_CONCENTRATION_RATIO_RANGE} = $v;
        }
        if (null !== ($v = $this->getTextConcentration())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TEXT_CONCENTRATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TEXT_CONCENTRATION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMeasurementPoint())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MEASUREMENT_POINT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MEASUREMENT_POINT_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCountry())) {
            $out->{self::FIELD_COUNTRY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_COUNTRY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getReferenceStrength())) {
            $out->{self::FIELD_REFERENCE_STRENGTH} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REFERENCE_STRENGTH}[] = $v;
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