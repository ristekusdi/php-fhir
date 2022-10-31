<?php declare(strict_types=1);

namespace RistekUSDI\FHIR\R4B\FHIRResource\FHIRDomainResource;

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

use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionProperty;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionRouteOfAdministration;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRCode;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRExtension;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRMeta;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRNarrative;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRPublicationStatus;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRString;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRUri;
use RistekUSDI\FHIR\R4B\FHIRResource\FHIRDomainResource;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRContainedTypeInterface;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeMap;

/**
 * A medicinal product in the final form which is suitable for administering to a
 * patient (after any mixing of multiple components, dissolution etc. has been
 * performed).
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRAdministrableProductDefinition
 * @package \RistekUSDI\FHIR\R4B\FHIRResource\FHIRDomainResource
 */
class FHIRAdministrableProductDefinition extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION;
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_FORM_OF = 'formOf';
    const FIELD_ADMINISTRABLE_DOSE_FORM = 'administrableDoseForm';
    const FIELD_UNIT_OF_PRESENTATION = 'unitOfPresentation';
    const FIELD_PRODUCED_FROM = 'producedFrom';
    const FIELD_INGREDIENT = 'ingredient';
    const FIELD_DEVICE = 'device';
    const FIELD_PROPERTY = 'property';
    const FIELD_ROUTE_OF_ADMINISTRATION = 'routeOfAdministration';

    /** @var string */
    private $_xmlns = '';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for the administrable product.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier[]
     */
    protected ?array $identifier = [];

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this administrable product. Enables tracking the life-cycle of the
     * content.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRPublicationStatus
     */
    protected ?FHIRPublicationStatus $status = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * References a product from which one or more of the constituent parts of that
     * product can be prepared and used as described by this administrable product. If
     * this administrable product describes the administration of a crushed tablet, the
     * 'formOf' would be the product representing a distribution containing tablets and
     * possibly also a cream. This is distinct from the 'producedFrom' which refers to
     * the specific components of the product that are used in this preparation, rather
     * than the product as a whole.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[]
     */
    protected ?array $formOf = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form of the final product after necessary reconstitution or processing.
     * Contrasts to the manufactured dose form (see ManufacturedItemDefinition). If the
     * manufactured form was 'powder for solution for injection', the administrable
     * dose form could be 'solution for injection' (once mixed with another item having
     * manufactured form 'solvent for solution for injection').
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $administrableDoseForm = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The presentation type in which this item is given to a patient. e.g. for a spray
     * - 'puff' (as in 'contains 100 mcg per puff'), or for a liquid - 'vial' (as in
     * 'contains 5 ml per vial').
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $unitOfPresentation = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the specific manufactured items that are part of the 'formOf' product
     * that are used in the preparation of this specific administrable form. In some
     * cases, an administrable form might use all of the items from the overall product
     * (or there might only be one item), while in other cases, an administrable form
     * might use only a subset of the items available in the overall product. For
     * example, an administrable form might involve combining a liquid and a powder
     * available as part of an overall product, but not involve applying the also
     * supplied cream.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[]
     */
    protected ?array $producedFrom = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredients of this administrable medicinal product. This is only needed if
     * the ingredients are not specified either using ManufacturedItemDefiniton (via
     * AdministrableProductDefinition.producedFrom) to state which component items are
     * used to make this, or using by incoming references from the Ingredient resource,
     * to state in detail which substances exist within this. This element allows a
     * basic coded ingredient to be used.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected ?array $ingredient = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A device that is integral to the medicinal product, in effect being considered
     * as an "ingredient" of the medicinal product. This is not intended for devices
     * that are just co-packaged.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference
     */
    protected ?FHIRReference $device = null;

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * Characteristics e.g. a product's onset of action.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionProperty[]
     */
    protected ?array $property = [];

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route.
     * RouteOfAdministration cannot be used when the 'formOf' product already uses
     * MedicinalProductDefinition.route (and vice versa).
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionRouteOfAdministration[]
     */
    protected ?array $routeOfAdministration = [];

    /**
     * Validation map for fields in type AdministrableProductDefinition
     * @var array
     */
    private static array $_validationRules = [
        self::FIELD_ROUTE_OF_ADMINISTRATION => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRAdministrableProductDefinition Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRAdministrableProductDefinition::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPublicationStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRPublicationStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRPublicationStatus([FHIRPublicationStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRPublicationStatus($ext));
            }
        }
        if (isset($data[self::FIELD_FORM_OF])) {
            if (is_array($data[self::FIELD_FORM_OF])) {
                foreach($data[self::FIELD_FORM_OF] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addFormOf($v);
                    } else {
                        $this->addFormOf(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_FORM_OF] instanceof FHIRReference) {
                $this->addFormOf($data[self::FIELD_FORM_OF]);
            } else {
                $this->addFormOf(new FHIRReference($data[self::FIELD_FORM_OF]));
            }
        }
        if (isset($data[self::FIELD_ADMINISTRABLE_DOSE_FORM])) {
            if ($data[self::FIELD_ADMINISTRABLE_DOSE_FORM] instanceof FHIRCodeableConcept) {
                $this->setAdministrableDoseForm($data[self::FIELD_ADMINISTRABLE_DOSE_FORM]);
            } else {
                $this->setAdministrableDoseForm(new FHIRCodeableConcept($data[self::FIELD_ADMINISTRABLE_DOSE_FORM]));
            }
        }
        if (isset($data[self::FIELD_UNIT_OF_PRESENTATION])) {
            if ($data[self::FIELD_UNIT_OF_PRESENTATION] instanceof FHIRCodeableConcept) {
                $this->setUnitOfPresentation($data[self::FIELD_UNIT_OF_PRESENTATION]);
            } else {
                $this->setUnitOfPresentation(new FHIRCodeableConcept($data[self::FIELD_UNIT_OF_PRESENTATION]));
            }
        }
        if (isset($data[self::FIELD_PRODUCED_FROM])) {
            if (is_array($data[self::FIELD_PRODUCED_FROM])) {
                foreach($data[self::FIELD_PRODUCED_FROM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addProducedFrom($v);
                    } else {
                        $this->addProducedFrom(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_PRODUCED_FROM] instanceof FHIRReference) {
                $this->addProducedFrom($data[self::FIELD_PRODUCED_FROM]);
            } else {
                $this->addProducedFrom(new FHIRReference($data[self::FIELD_PRODUCED_FROM]));
            }
        }
        if (isset($data[self::FIELD_INGREDIENT])) {
            if (is_array($data[self::FIELD_INGREDIENT])) {
                foreach($data[self::FIELD_INGREDIENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addIngredient($v);
                    } else {
                        $this->addIngredient(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_INGREDIENT] instanceof FHIRCodeableConcept) {
                $this->addIngredient($data[self::FIELD_INGREDIENT]);
            } else {
                $this->addIngredient(new FHIRCodeableConcept($data[self::FIELD_INGREDIENT]));
            }
        }
        if (isset($data[self::FIELD_DEVICE])) {
            if ($data[self::FIELD_DEVICE] instanceof FHIRReference) {
                $this->setDevice($data[self::FIELD_DEVICE]);
            } else {
                $this->setDevice(new FHIRReference($data[self::FIELD_DEVICE]));
            }
        }
        if (isset($data[self::FIELD_PROPERTY])) {
            if (is_array($data[self::FIELD_PROPERTY])) {
                foreach($data[self::FIELD_PROPERTY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAdministrableProductDefinitionProperty) {
                        $this->addProperty($v);
                    } else {
                        $this->addProperty(new FHIRAdministrableProductDefinitionProperty($v));
                    }
                }
            } elseif ($data[self::FIELD_PROPERTY] instanceof FHIRAdministrableProductDefinitionProperty) {
                $this->addProperty($data[self::FIELD_PROPERTY]);
            } else {
                $this->addProperty(new FHIRAdministrableProductDefinitionProperty($data[self::FIELD_PROPERTY]));
            }
        }
        if (isset($data[self::FIELD_ROUTE_OF_ADMINISTRATION])) {
            if (is_array($data[self::FIELD_ROUTE_OF_ADMINISTRATION])) {
                foreach($data[self::FIELD_ROUTE_OF_ADMINISTRATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAdministrableProductDefinitionRouteOfAdministration) {
                        $this->addRouteOfAdministration($v);
                    } else {
                        $this->addRouteOfAdministration(new FHIRAdministrableProductDefinitionRouteOfAdministration($v));
                    }
                }
            } elseif ($data[self::FIELD_ROUTE_OF_ADMINISTRATION] instanceof FHIRAdministrableProductDefinitionRouteOfAdministration) {
                $this->addRouteOfAdministration($data[self::FIELD_ROUTE_OF_ADMINISTRATION]);
            } else {
                $this->addRouteOfAdministration(new FHIRAdministrableProductDefinitionRouteOfAdministration($data[self::FIELD_ROUTE_OF_ADMINISTRATION]));
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
        return "<AdministrableProductDefinition{$xmlns}></AdministrableProductDefinition>";
    }
    /**
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for the administrable product.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): ?array
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for the administrable product.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(?FHIRIdentifier $identifier = null): object
    {
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier for the administrable product.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = []): object
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this administrable product. Enables tracking the life-cycle of the
     * content.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus(): ?FHIRPublicationStatus
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The status of this administrable product. Enables tracking the life-cycle of the
     * content.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRPublicationStatus $status
     * @return static
     */
    public function setStatus(?FHIRPublicationStatus $status = null): object
    {
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * References a product from which one or more of the constituent parts of that
     * product can be prepared and used as described by this administrable product. If
     * this administrable product describes the administration of a crushed tablet, the
     * 'formOf' would be the product representing a distribution containing tablets and
     * possibly also a cream. This is distinct from the 'producedFrom' which refers to
     * the specific components of the product that are used in this preparation, rather
     * than the product as a whole.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[]
     */
    public function getFormOf(): ?array
    {
        return $this->formOf;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * References a product from which one or more of the constituent parts of that
     * product can be prepared and used as described by this administrable product. If
     * this administrable product describes the administration of a crushed tablet, the
     * 'formOf' would be the product representing a distribution containing tablets and
     * possibly also a cream. This is distinct from the 'producedFrom' which refers to
     * the specific components of the product that are used in this preparation, rather
     * than the product as a whole.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference $formOf
     * @return static
     */
    public function addFormOf(?FHIRReference $formOf = null): object
    {
        $this->_trackValueAdded();
        $this->formOf[] = $formOf;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * References a product from which one or more of the constituent parts of that
     * product can be prepared and used as described by this administrable product. If
     * this administrable product describes the administration of a crushed tablet, the
     * 'formOf' would be the product representing a distribution containing tablets and
     * possibly also a cream. This is distinct from the 'producedFrom' which refers to
     * the specific components of the product that are used in this preparation, rather
     * than the product as a whole.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[] $formOf
     * @return static
     */
    public function setFormOf(array $formOf = []): object
    {
        if ([] !== $this->formOf) {
            $this->_trackValuesRemoved(count($this->formOf));
            $this->formOf = [];
        }
        if ([] === $formOf) {
            return $this;
        }
        foreach($formOf as $v) {
            if ($v instanceof FHIRReference) {
                $this->addFormOf($v);
            } else {
                $this->addFormOf(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form of the final product after necessary reconstitution or processing.
     * Contrasts to the manufactured dose form (see ManufacturedItemDefinition). If the
     * manufactured form was 'powder for solution for injection', the administrable
     * dose form could be 'solution for injection' (once mixed with another item having
     * manufactured form 'solvent for solution for injection').
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getAdministrableDoseForm(): ?FHIRCodeableConcept
    {
        return $this->administrableDoseForm;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form of the final product after necessary reconstitution or processing.
     * Contrasts to the manufactured dose form (see ManufacturedItemDefinition). If the
     * manufactured form was 'powder for solution for injection', the administrable
     * dose form could be 'solution for injection' (once mixed with another item having
     * manufactured form 'solvent for solution for injection').
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $administrableDoseForm
     * @return static
     */
    public function setAdministrableDoseForm(?FHIRCodeableConcept $administrableDoseForm = null): object
    {
        $this->_trackValueSet($this->administrableDoseForm, $administrableDoseForm);
        $this->administrableDoseForm = $administrableDoseForm;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The presentation type in which this item is given to a patient. e.g. for a spray
     * - 'puff' (as in 'contains 100 mcg per puff'), or for a liquid - 'vial' (as in
     * 'contains 5 ml per vial').
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getUnitOfPresentation(): ?FHIRCodeableConcept
    {
        return $this->unitOfPresentation;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The presentation type in which this item is given to a patient. e.g. for a spray
     * - 'puff' (as in 'contains 100 mcg per puff'), or for a liquid - 'vial' (as in
     * 'contains 5 ml per vial').
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $unitOfPresentation
     * @return static
     */
    public function setUnitOfPresentation(?FHIRCodeableConcept $unitOfPresentation = null): object
    {
        $this->_trackValueSet($this->unitOfPresentation, $unitOfPresentation);
        $this->unitOfPresentation = $unitOfPresentation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the specific manufactured items that are part of the 'formOf' product
     * that are used in the preparation of this specific administrable form. In some
     * cases, an administrable form might use all of the items from the overall product
     * (or there might only be one item), while in other cases, an administrable form
     * might use only a subset of the items available in the overall product. For
     * example, an administrable form might involve combining a liquid and a powder
     * available as part of an overall product, but not involve applying the also
     * supplied cream.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[]
     */
    public function getProducedFrom(): ?array
    {
        return $this->producedFrom;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the specific manufactured items that are part of the 'formOf' product
     * that are used in the preparation of this specific administrable form. In some
     * cases, an administrable form might use all of the items from the overall product
     * (or there might only be one item), while in other cases, an administrable form
     * might use only a subset of the items available in the overall product. For
     * example, an administrable form might involve combining a liquid and a powder
     * available as part of an overall product, but not involve applying the also
     * supplied cream.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference $producedFrom
     * @return static
     */
    public function addProducedFrom(?FHIRReference $producedFrom = null): object
    {
        $this->_trackValueAdded();
        $this->producedFrom[] = $producedFrom;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the specific manufactured items that are part of the 'formOf' product
     * that are used in the preparation of this specific administrable form. In some
     * cases, an administrable form might use all of the items from the overall product
     * (or there might only be one item), while in other cases, an administrable form
     * might use only a subset of the items available in the overall product. For
     * example, an administrable form might involve combining a liquid and a powder
     * available as part of an overall product, but not involve applying the also
     * supplied cream.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[] $producedFrom
     * @return static
     */
    public function setProducedFrom(array $producedFrom = []): object
    {
        if ([] !== $this->producedFrom) {
            $this->_trackValuesRemoved(count($this->producedFrom));
            $this->producedFrom = [];
        }
        if ([] === $producedFrom) {
            return $this;
        }
        foreach($producedFrom as $v) {
            if ($v instanceof FHIRReference) {
                $this->addProducedFrom($v);
            } else {
                $this->addProducedFrom(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredients of this administrable medicinal product. This is only needed if
     * the ingredients are not specified either using ManufacturedItemDefiniton (via
     * AdministrableProductDefinition.producedFrom) to state which component items are
     * used to make this, or using by incoming references from the Ingredient resource,
     * to state in detail which substances exist within this. This element allows a
     * basic coded ingredient to be used.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getIngredient(): ?array
    {
        return $this->ingredient;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredients of this administrable medicinal product. This is only needed if
     * the ingredients are not specified either using ManufacturedItemDefiniton (via
     * AdministrableProductDefinition.producedFrom) to state which component items are
     * used to make this, or using by incoming references from the Ingredient resource,
     * to state in detail which substances exist within this. This element allows a
     * basic coded ingredient to be used.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $ingredient
     * @return static
     */
    public function addIngredient(?FHIRCodeableConcept $ingredient = null): object
    {
        $this->_trackValueAdded();
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredients of this administrable medicinal product. This is only needed if
     * the ingredients are not specified either using ManufacturedItemDefiniton (via
     * AdministrableProductDefinition.producedFrom) to state which component items are
     * used to make this, or using by incoming references from the Ingredient resource,
     * to state in detail which substances exist within this. This element allows a
     * basic coded ingredient to be used.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[] $ingredient
     * @return static
     */
    public function setIngredient(array $ingredient = []): object
    {
        if ([] !== $this->ingredient) {
            $this->_trackValuesRemoved(count($this->ingredient));
            $this->ingredient = [];
        }
        if ([] === $ingredient) {
            return $this;
        }
        foreach($ingredient as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addIngredient($v);
            } else {
                $this->addIngredient(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A device that is integral to the medicinal product, in effect being considered
     * as an "ingredient" of the medicinal product. This is not intended for devices
     * that are just co-packaged.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference
     */
    public function getDevice(): ?FHIRReference
    {
        return $this->device;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A device that is integral to the medicinal product, in effect being considered
     * as an "ingredient" of the medicinal product. This is not intended for devices
     * that are just co-packaged.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference $device
     * @return static
     */
    public function setDevice(?FHIRReference $device = null): object
    {
        $this->_trackValueSet($this->device, $device);
        $this->device = $device;
        return $this;
    }

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * Characteristics e.g. a product's onset of action.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionProperty[]
     */
    public function getProperty(): ?array
    {
        return $this->property;
    }

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * Characteristics e.g. a product's onset of action.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionProperty $property
     * @return static
     */
    public function addProperty(?FHIRAdministrableProductDefinitionProperty $property = null): object
    {
        $this->_trackValueAdded();
        $this->property[] = $property;
        return $this;
    }

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * Characteristics e.g. a product's onset of action.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionProperty[] $property
     * @return static
     */
    public function setProperty(array $property = []): object
    {
        if ([] !== $this->property) {
            $this->_trackValuesRemoved(count($this->property));
            $this->property = [];
        }
        if ([] === $property) {
            return $this;
        }
        foreach($property as $v) {
            if ($v instanceof FHIRAdministrableProductDefinitionProperty) {
                $this->addProperty($v);
            } else {
                $this->addProperty(new FHIRAdministrableProductDefinitionProperty($v));
            }
        }
        return $this;
    }

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route.
     * RouteOfAdministration cannot be used when the 'formOf' product already uses
     * MedicinalProductDefinition.route (and vice versa).
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionRouteOfAdministration[]
     */
    public function getRouteOfAdministration(): ?array
    {
        return $this->routeOfAdministration;
    }

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route.
     * RouteOfAdministration cannot be used when the 'formOf' product already uses
     * MedicinalProductDefinition.route (and vice versa).
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionRouteOfAdministration $routeOfAdministration
     * @return static
     */
    public function addRouteOfAdministration(?FHIRAdministrableProductDefinitionRouteOfAdministration $routeOfAdministration = null): object
    {
        $this->_trackValueAdded();
        $this->routeOfAdministration[] = $routeOfAdministration;
        return $this;
    }

    /**
     * A medicinal product in the final form which is suitable for administering to a
     * patient (after any mixing of multiple components, dissolution etc. has been
     * performed).
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route.
     * RouteOfAdministration cannot be used when the 'formOf' product already uses
     * MedicinalProductDefinition.route (and vice versa).
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRAdministrableProductDefinition\FHIRAdministrableProductDefinitionRouteOfAdministration[] $routeOfAdministration
     * @return static
     */
    public function setRouteOfAdministration(array $routeOfAdministration = []): object
    {
        if ([] !== $this->routeOfAdministration) {
            $this->_trackValuesRemoved(count($this->routeOfAdministration));
            $this->routeOfAdministration = [];
        }
        if ([] === $routeOfAdministration) {
            return $this;
        }
        foreach($routeOfAdministration as $v) {
            if ($v instanceof FHIRAdministrableProductDefinitionRouteOfAdministration) {
                $this->addRouteOfAdministration($v);
            } else {
                $this->addRouteOfAdministration(new FHIRAdministrableProductDefinitionRouteOfAdministration($v));
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getFormOf())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FORM_OF, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAdministrableDoseForm())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADMINISTRABLE_DOSE_FORM] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUnitOfPresentation())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_UNIT_OF_PRESENTATION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProducedFrom())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRODUCED_FROM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getIngredient())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INGREDIENT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDevice())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEVICE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROPERTY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getRouteOfAdministration())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ROUTE_OF_ADMINISTRATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FORM_OF])) {
            $v = $this->getFormOf();
            foreach($validationRules[self::FIELD_FORM_OF] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION, self::FIELD_FORM_OF, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FORM_OF])) {
                        $errs[self::FIELD_FORM_OF] = [];
                    }
                    $errs[self::FIELD_FORM_OF][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADMINISTRABLE_DOSE_FORM])) {
            $v = $this->getAdministrableDoseForm();
            foreach($validationRules[self::FIELD_ADMINISTRABLE_DOSE_FORM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION, self::FIELD_ADMINISTRABLE_DOSE_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADMINISTRABLE_DOSE_FORM])) {
                        $errs[self::FIELD_ADMINISTRABLE_DOSE_FORM] = [];
                    }
                    $errs[self::FIELD_ADMINISTRABLE_DOSE_FORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_UNIT_OF_PRESENTATION])) {
            $v = $this->getUnitOfPresentation();
            foreach($validationRules[self::FIELD_UNIT_OF_PRESENTATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION, self::FIELD_UNIT_OF_PRESENTATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_UNIT_OF_PRESENTATION])) {
                        $errs[self::FIELD_UNIT_OF_PRESENTATION] = [];
                    }
                    $errs[self::FIELD_UNIT_OF_PRESENTATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRODUCED_FROM])) {
            $v = $this->getProducedFrom();
            foreach($validationRules[self::FIELD_PRODUCED_FROM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION, self::FIELD_PRODUCED_FROM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRODUCED_FROM])) {
                        $errs[self::FIELD_PRODUCED_FROM] = [];
                    }
                    $errs[self::FIELD_PRODUCED_FROM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INGREDIENT])) {
            $v = $this->getIngredient();
            foreach($validationRules[self::FIELD_INGREDIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION, self::FIELD_INGREDIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INGREDIENT])) {
                        $errs[self::FIELD_INGREDIENT] = [];
                    }
                    $errs[self::FIELD_INGREDIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEVICE])) {
            $v = $this->getDevice();
            foreach($validationRules[self::FIELD_DEVICE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION, self::FIELD_DEVICE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEVICE])) {
                        $errs[self::FIELD_DEVICE] = [];
                    }
                    $errs[self::FIELD_DEVICE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROPERTY])) {
            $v = $this->getProperty();
            foreach($validationRules[self::FIELD_PROPERTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION, self::FIELD_PROPERTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY])) {
                        $errs[self::FIELD_PROPERTY] = [];
                    }
                    $errs[self::FIELD_PROPERTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROUTE_OF_ADMINISTRATION])) {
            $v = $this->getRouteOfAdministration();
            foreach($validationRules[self::FIELD_ROUTE_OF_ADMINISTRATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ADMINISTRABLE_PRODUCT_DEFINITION, self::FIELD_ROUTE_OF_ADMINISTRATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROUTE_OF_ADMINISTRATION])) {
                        $errs[self::FIELD_ROUTE_OF_ADMINISTRATION] = [];
                    }
                    $errs[self::FIELD_ROUTE_OF_ADMINISTRATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\DOMElement $element
     * @param null|\RistekUSDI\FHIR\R4B\FHIRResource\FHIRDomainResource\FHIRAdministrableProductDefinition $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRResource\FHIRDomainResource\FHIRAdministrableProductDefinition
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
                throw new \DomainException(sprintf('FHIRAdministrableProductDefinition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRAdministrableProductDefinition::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRAdministrableProductDefinition(null);
        } elseif (!is_object($type) || !($type instanceof FHIRAdministrableProductDefinition)) {
            throw new \RuntimeException(sprintf(
                'FHIRAdministrableProductDefinition::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRResource\FHIRDomainResource\FHIRAdministrableProductDefinition or null, %s seen.',
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
            if (self::FIELD_IDENTIFIER === $n->nodeName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($n));
            } elseif (self::FIELD_FORM_OF === $n->nodeName) {
                $type->addFormOf(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_ADMINISTRABLE_DOSE_FORM === $n->nodeName) {
                $type->setAdministrableDoseForm(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_UNIT_OF_PRESENTATION === $n->nodeName) {
                $type->setUnitOfPresentation(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PRODUCED_FROM === $n->nodeName) {
                $type->addProducedFrom(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_INGREDIENT === $n->nodeName) {
                $type->addIngredient(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_DEVICE === $n->nodeName) {
                $type->setDevice(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PROPERTY === $n->nodeName) {
                $type->addProperty(FHIRAdministrableProductDefinitionProperty::xmlUnserialize($n));
            } elseif (self::FIELD_ROUTE_OF_ADMINISTRATION === $n->nodeName) {
                $type->addRouteOfAdministration(FHIRAdministrableProductDefinitionRouteOfAdministration::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT === $n->nodeName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n));
            } elseif (self::FIELD_CONTAINED === $n->nodeName) {
                for ($ni = 0; $ni < $n->childNodes->length; $ni++) {
                    $nn = $n->childNodes->item($ni);
                    if ($nn instanceof \DOMElement) {
                        $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn));
                    }
                }
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_META === $n->nodeName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n));
            } elseif (self::FIELD_IMPLICIT_RULES === $n->nodeName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_LANGUAGE === $n->nodeName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_IMPLICIT_RULES);
        if (null !== $n) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setImplicitRules($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LANGUAGE);
        if (null !== $n) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLanguage($n->nodeValue);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_IDENTIFIER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getFormOf())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_FORM_OF);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getAdministrableDoseForm())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ADMINISTRABLE_DOSE_FORM);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getUnitOfPresentation())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_UNIT_OF_PRESENTATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getProducedFrom())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PRODUCED_FROM);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getIngredient())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_INGREDIENT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDevice())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DEVICE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROPERTY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getRouteOfAdministration())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ROUTE_OF_ADMINISTRATION);
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
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPublicationStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getFormOf())) {
            $out->{self::FIELD_FORM_OF} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_FORM_OF}[] = $v;
            }
        }
        if (null !== ($v = $this->getAdministrableDoseForm())) {
            $out->{self::FIELD_ADMINISTRABLE_DOSE_FORM} = $v;
        }
        if (null !== ($v = $this->getUnitOfPresentation())) {
            $out->{self::FIELD_UNIT_OF_PRESENTATION} = $v;
        }
        if ([] !== ($vs = $this->getProducedFrom())) {
            $out->{self::FIELD_PRODUCED_FROM} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PRODUCED_FROM}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getIngredient())) {
            $out->{self::FIELD_INGREDIENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_INGREDIENT}[] = $v;
            }
        }
        if (null !== ($v = $this->getDevice())) {
            $out->{self::FIELD_DEVICE} = $v;
        }
        if ([] !== ($vs = $this->getProperty())) {
            $out->{self::FIELD_PROPERTY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PROPERTY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getRouteOfAdministration())) {
            $out->{self::FIELD_ROUTE_OF_ADMINISTRATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ROUTE_OF_ADMINISTRATION}[] = $v;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

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