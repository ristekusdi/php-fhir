<?php declare(strict_types=1);

namespace RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition;

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
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRInteger;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference;
use RistekUSDI\FHIR\R4B\FHIRStringPrimitive;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;

/**
 * A medically related item or items, in a container or package.
 *
 * Class FHIRPackagedProductDefinitionPackage
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition
 */
class FHIRPackagedProductDefinitionPackage extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_PACKAGE;
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_TYPE = 'type';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_QUANTITY_EXT = '_quantity';
    const FIELD_MATERIAL = 'material';
    const FIELD_ALTERNATE_MATERIAL = 'alternateMaterial';
    const FIELD_SHELF_LIFE_STORAGE = 'shelfLifeStorage';
    const FIELD_MANUFACTURER = 'manufacturer';
    const FIELD_PROPERTY = 'property';
    const FIELD_CONTAINED_ITEM = 'containedItem';
    const FIELD_PACKAGE = 'package';

    /** @var string */
    private $_xmlns = '';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that is specific to this particular part of the packaging.
     * Including possibly Data Carrier Identifier (a GS1 barcode).
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier[]
     */
    protected ?array $identifier = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The physical type of the container of the items.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $type = null;

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of this level of packaging in the package that contains it. If
     * specified, the outermost level is always 1.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRIntegerPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRInteger
     */
    protected ?FHIRInteger $quantity = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Material type of the package item.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected ?array $material = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A possible alternate material for this part of the packaging, that is allowed to
     * be used instead of the usual material (e.g. different types of plastic for a
     * blister sleeve).
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected ?array $alternateMaterial = [];

    /**
     * A medically related item or items, in a container or package.
     *
     * Shelf Life and storage information.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionShelfLifeStorage[]
     */
    protected ?array $shelfLifeStorage = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of this package Item. When there are multiple it means these are
     * all possible manufacturers.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[]
     */
    protected ?array $manufacturer = [];

    /**
     * A medically related item or items, in a container or package.
     *
     * General characteristics of this item.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionProperty[]
     */
    protected ?array $property = [];

    /**
     * A medically related item or items, in a container or package.
     *
     * The item(s) within the packaging.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionContainedItem[]
     */
    protected ?array $containedItem = [];

    /**
     * A medically related item or items, in a container or package.
     *
     * Allows containers (and parts of containers) parwithin containers, still a single
     * packaged product. See also
     * PackagedProductDefinition.package.containedItem.item(PackagedProductDefinition).
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage[]
     */
    protected ?array $package = [];

    /**
     * Validation map for fields in type PackagedProductDefinition.Package
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRPackagedProductDefinitionPackage Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRPackagedProductDefinitionPackage::_construct - $data expected to be null or array, %s seen',
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
        if (isset($data[self::FIELD_TYPE])) {
            if ($data[self::FIELD_TYPE] instanceof FHIRCodeableConcept) {
                $this->setType($data[self::FIELD_TYPE]);
            } else {
                $this->setType(new FHIRCodeableConcept($data[self::FIELD_TYPE]));
            }
        }
        if (isset($data[self::FIELD_QUANTITY]) || isset($data[self::FIELD_QUANTITY_EXT])) {
            $value = $data[self::FIELD_QUANTITY] ?? null;
            $ext = (isset($data[self::FIELD_QUANTITY_EXT]) && is_array($data[self::FIELD_QUANTITY_EXT])) ? $data[self::FIELD_QUANTITY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setQuantity($value);
                } else if (is_array($value)) {
                    $this->setQuantity(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setQuantity(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setQuantity(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_MATERIAL])) {
            if (is_array($data[self::FIELD_MATERIAL])) {
                foreach($data[self::FIELD_MATERIAL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addMaterial($v);
                    } else {
                        $this->addMaterial(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_MATERIAL] instanceof FHIRCodeableConcept) {
                $this->addMaterial($data[self::FIELD_MATERIAL]);
            } else {
                $this->addMaterial(new FHIRCodeableConcept($data[self::FIELD_MATERIAL]));
            }
        }
        if (isset($data[self::FIELD_ALTERNATE_MATERIAL])) {
            if (is_array($data[self::FIELD_ALTERNATE_MATERIAL])) {
                foreach($data[self::FIELD_ALTERNATE_MATERIAL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addAlternateMaterial($v);
                    } else {
                        $this->addAlternateMaterial(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_ALTERNATE_MATERIAL] instanceof FHIRCodeableConcept) {
                $this->addAlternateMaterial($data[self::FIELD_ALTERNATE_MATERIAL]);
            } else {
                $this->addAlternateMaterial(new FHIRCodeableConcept($data[self::FIELD_ALTERNATE_MATERIAL]));
            }
        }
        if (isset($data[self::FIELD_SHELF_LIFE_STORAGE])) {
            if (is_array($data[self::FIELD_SHELF_LIFE_STORAGE])) {
                foreach($data[self::FIELD_SHELF_LIFE_STORAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRPackagedProductDefinitionShelfLifeStorage) {
                        $this->addShelfLifeStorage($v);
                    } else {
                        $this->addShelfLifeStorage(new FHIRPackagedProductDefinitionShelfLifeStorage($v));
                    }
                }
            } elseif ($data[self::FIELD_SHELF_LIFE_STORAGE] instanceof FHIRPackagedProductDefinitionShelfLifeStorage) {
                $this->addShelfLifeStorage($data[self::FIELD_SHELF_LIFE_STORAGE]);
            } else {
                $this->addShelfLifeStorage(new FHIRPackagedProductDefinitionShelfLifeStorage($data[self::FIELD_SHELF_LIFE_STORAGE]));
            }
        }
        if (isset($data[self::FIELD_MANUFACTURER])) {
            if (is_array($data[self::FIELD_MANUFACTURER])) {
                foreach($data[self::FIELD_MANUFACTURER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addManufacturer($v);
                    } else {
                        $this->addManufacturer(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_MANUFACTURER] instanceof FHIRReference) {
                $this->addManufacturer($data[self::FIELD_MANUFACTURER]);
            } else {
                $this->addManufacturer(new FHIRReference($data[self::FIELD_MANUFACTURER]));
            }
        }
        if (isset($data[self::FIELD_PROPERTY])) {
            if (is_array($data[self::FIELD_PROPERTY])) {
                foreach($data[self::FIELD_PROPERTY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRPackagedProductDefinitionProperty) {
                        $this->addProperty($v);
                    } else {
                        $this->addProperty(new FHIRPackagedProductDefinitionProperty($v));
                    }
                }
            } elseif ($data[self::FIELD_PROPERTY] instanceof FHIRPackagedProductDefinitionProperty) {
                $this->addProperty($data[self::FIELD_PROPERTY]);
            } else {
                $this->addProperty(new FHIRPackagedProductDefinitionProperty($data[self::FIELD_PROPERTY]));
            }
        }
        if (isset($data[self::FIELD_CONTAINED_ITEM])) {
            if (is_array($data[self::FIELD_CONTAINED_ITEM])) {
                foreach($data[self::FIELD_CONTAINED_ITEM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRPackagedProductDefinitionContainedItem) {
                        $this->addContainedItem($v);
                    } else {
                        $this->addContainedItem(new FHIRPackagedProductDefinitionContainedItem($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTAINED_ITEM] instanceof FHIRPackagedProductDefinitionContainedItem) {
                $this->addContainedItem($data[self::FIELD_CONTAINED_ITEM]);
            } else {
                $this->addContainedItem(new FHIRPackagedProductDefinitionContainedItem($data[self::FIELD_CONTAINED_ITEM]));
            }
        }
        if (isset($data[self::FIELD_PACKAGE])) {
            if (is_array($data[self::FIELD_PACKAGE])) {
                foreach($data[self::FIELD_PACKAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRPackagedProductDefinitionPackage) {
                        $this->addPackage($v);
                    } else {
                        $this->addPackage(new FHIRPackagedProductDefinitionPackage($v));
                    }
                }
            } elseif ($data[self::FIELD_PACKAGE] instanceof FHIRPackagedProductDefinitionPackage) {
                $this->addPackage($data[self::FIELD_PACKAGE]);
            } else {
                $this->addPackage(new FHIRPackagedProductDefinitionPackage($data[self::FIELD_PACKAGE]));
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
        return "<PackagedProductDefinitionPackage{$xmlns}></PackagedProductDefinitionPackage>";
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * An identifier that is specific to this particular part of the packaging.
     * Including possibly Data Carrier Identifier (a GS1 barcode).
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
     * An identifier that is specific to this particular part of the packaging.
     * Including possibly Data Carrier Identifier (a GS1 barcode).
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
     * An identifier that is specific to this particular part of the packaging.
     * Including possibly Data Carrier Identifier (a GS1 barcode).
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The physical type of the container of the items.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getType(): ?FHIRCodeableConcept
    {
        return $this->type;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The physical type of the container of the items.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $type
     * @return static
     */
    public function setType(?FHIRCodeableConcept $type = null): object
    {
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of this level of packaging in the package that contains it. If
     * specified, the outermost level is always 1.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRIntegerPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRInteger
     */
    public function getQuantity(): ?FHIRInteger
    {
        return $this->quantity;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The quantity of this level of packaging in the package that contains it. If
     * specified, the outermost level is always 1.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRIntegerPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRInteger $quantity
     * @return static
     */
    public function setQuantity($quantity = null): object
    {
        if (null !== $quantity && !($quantity instanceof FHIRInteger)) {
            $quantity = new FHIRInteger($quantity);
        }
        $this->_trackValueSet($this->quantity, $quantity);
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Material type of the package item.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getMaterial(): ?array
    {
        return $this->material;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Material type of the package item.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $material
     * @return static
     */
    public function addMaterial(?FHIRCodeableConcept $material = null): object
    {
        $this->_trackValueAdded();
        $this->material[] = $material;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Material type of the package item.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[] $material
     * @return static
     */
    public function setMaterial(array $material = []): object
    {
        if ([] !== $this->material) {
            $this->_trackValuesRemoved(count($this->material));
            $this->material = [];
        }
        if ([] === $material) {
            return $this;
        }
        foreach($material as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addMaterial($v);
            } else {
                $this->addMaterial(new FHIRCodeableConcept($v));
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
     * A possible alternate material for this part of the packaging, that is allowed to
     * be used instead of the usual material (e.g. different types of plastic for a
     * blister sleeve).
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAlternateMaterial(): ?array
    {
        return $this->alternateMaterial;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A possible alternate material for this part of the packaging, that is allowed to
     * be used instead of the usual material (e.g. different types of plastic for a
     * blister sleeve).
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $alternateMaterial
     * @return static
     */
    public function addAlternateMaterial(?FHIRCodeableConcept $alternateMaterial = null): object
    {
        $this->_trackValueAdded();
        $this->alternateMaterial[] = $alternateMaterial;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A possible alternate material for this part of the packaging, that is allowed to
     * be used instead of the usual material (e.g. different types of plastic for a
     * blister sleeve).
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[] $alternateMaterial
     * @return static
     */
    public function setAlternateMaterial(array $alternateMaterial = []): object
    {
        if ([] !== $this->alternateMaterial) {
            $this->_trackValuesRemoved(count($this->alternateMaterial));
            $this->alternateMaterial = [];
        }
        if ([] === $alternateMaterial) {
            return $this;
        }
        foreach($alternateMaterial as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addAlternateMaterial($v);
            } else {
                $this->addAlternateMaterial(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * Shelf Life and storage information.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionShelfLifeStorage[]
     */
    public function getShelfLifeStorage(): ?array
    {
        return $this->shelfLifeStorage;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * Shelf Life and storage information.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionShelfLifeStorage $shelfLifeStorage
     * @return static
     */
    public function addShelfLifeStorage(?FHIRPackagedProductDefinitionShelfLifeStorage $shelfLifeStorage = null): object
    {
        $this->_trackValueAdded();
        $this->shelfLifeStorage[] = $shelfLifeStorage;
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * Shelf Life and storage information.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionShelfLifeStorage[] $shelfLifeStorage
     * @return static
     */
    public function setShelfLifeStorage(array $shelfLifeStorage = []): object
    {
        if ([] !== $this->shelfLifeStorage) {
            $this->_trackValuesRemoved(count($this->shelfLifeStorage));
            $this->shelfLifeStorage = [];
        }
        if ([] === $shelfLifeStorage) {
            return $this;
        }
        foreach($shelfLifeStorage as $v) {
            if ($v instanceof FHIRPackagedProductDefinitionShelfLifeStorage) {
                $this->addShelfLifeStorage($v);
            } else {
                $this->addShelfLifeStorage(new FHIRPackagedProductDefinitionShelfLifeStorage($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of this package Item. When there are multiple it means these are
     * all possible manufacturers.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[]
     */
    public function getManufacturer(): ?array
    {
        return $this->manufacturer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of this package Item. When there are multiple it means these are
     * all possible manufacturers.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference $manufacturer
     * @return static
     */
    public function addManufacturer(?FHIRReference $manufacturer = null): object
    {
        $this->_trackValueAdded();
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Manufacturer of this package Item. When there are multiple it means these are
     * all possible manufacturers.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[] $manufacturer
     * @return static
     */
    public function setManufacturer(array $manufacturer = []): object
    {
        if ([] !== $this->manufacturer) {
            $this->_trackValuesRemoved(count($this->manufacturer));
            $this->manufacturer = [];
        }
        if ([] === $manufacturer) {
            return $this;
        }
        foreach($manufacturer as $v) {
            if ($v instanceof FHIRReference) {
                $this->addManufacturer($v);
            } else {
                $this->addManufacturer(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * General characteristics of this item.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionProperty[]
     */
    public function getProperty(): ?array
    {
        return $this->property;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * General characteristics of this item.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionProperty $property
     * @return static
     */
    public function addProperty(?FHIRPackagedProductDefinitionProperty $property = null): object
    {
        $this->_trackValueAdded();
        $this->property[] = $property;
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * General characteristics of this item.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionProperty[] $property
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
            if ($v instanceof FHIRPackagedProductDefinitionProperty) {
                $this->addProperty($v);
            } else {
                $this->addProperty(new FHIRPackagedProductDefinitionProperty($v));
            }
        }
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * The item(s) within the packaging.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionContainedItem[]
     */
    public function getContainedItem(): ?array
    {
        return $this->containedItem;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * The item(s) within the packaging.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionContainedItem $containedItem
     * @return static
     */
    public function addContainedItem(?FHIRPackagedProductDefinitionContainedItem $containedItem = null): object
    {
        $this->_trackValueAdded();
        $this->containedItem[] = $containedItem;
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * The item(s) within the packaging.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionContainedItem[] $containedItem
     * @return static
     */
    public function setContainedItem(array $containedItem = []): object
    {
        if ([] !== $this->containedItem) {
            $this->_trackValuesRemoved(count($this->containedItem));
            $this->containedItem = [];
        }
        if ([] === $containedItem) {
            return $this;
        }
        foreach($containedItem as $v) {
            if ($v instanceof FHIRPackagedProductDefinitionContainedItem) {
                $this->addContainedItem($v);
            } else {
                $this->addContainedItem(new FHIRPackagedProductDefinitionContainedItem($v));
            }
        }
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * Allows containers (and parts of containers) parwithin containers, still a single
     * packaged product. See also
     * PackagedProductDefinition.package.containedItem.item(PackagedProductDefinition).
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage[]
     */
    public function getPackage(): ?array
    {
        return $this->package;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * Allows containers (and parts of containers) parwithin containers, still a single
     * packaged product. See also
     * PackagedProductDefinition.package.containedItem.item(PackagedProductDefinition).
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage $package
     * @return static
     */
    public function addPackage(?FHIRPackagedProductDefinitionPackage $package = null): object
    {
        $this->_trackValueAdded();
        $this->package[] = $package;
        return $this;
    }

    /**
     * A medically related item or items, in a container or package.
     *
     * Allows containers (and parts of containers) parwithin containers, still a single
     * packaged product. See also
     * PackagedProductDefinition.package.containedItem.item(PackagedProductDefinition).
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage[] $package
     * @return static
     */
    public function setPackage(array $package = []): object
    {
        if ([] !== $this->package) {
            $this->_trackValuesRemoved(count($this->package));
            $this->package = [];
        }
        if ([] === $package) {
            return $this;
        }
        foreach($package as $v) {
            if ($v instanceof FHIRPackagedProductDefinitionPackage) {
                $this->addPackage($v);
            } else {
                $this->addPackage(new FHIRPackagedProductDefinitionPackage($v));
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getQuantity())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_QUANTITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getMaterial())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MATERIAL, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAlternateMaterial())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ALTERNATE_MATERIAL, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getShelfLifeStorage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SHELF_LIFE_STORAGE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getManufacturer())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MANUFACTURER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROPERTY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getContainedItem())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTAINED_ITEM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPackage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PACKAGE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_PACKAGE, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_PACKAGE, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_QUANTITY])) {
            $v = $this->getQuantity();
            foreach($validationRules[self::FIELD_QUANTITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_PACKAGE, self::FIELD_QUANTITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_QUANTITY])) {
                        $errs[self::FIELD_QUANTITY] = [];
                    }
                    $errs[self::FIELD_QUANTITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MATERIAL])) {
            $v = $this->getMaterial();
            foreach($validationRules[self::FIELD_MATERIAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_PACKAGE, self::FIELD_MATERIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MATERIAL])) {
                        $errs[self::FIELD_MATERIAL] = [];
                    }
                    $errs[self::FIELD_MATERIAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALTERNATE_MATERIAL])) {
            $v = $this->getAlternateMaterial();
            foreach($validationRules[self::FIELD_ALTERNATE_MATERIAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_PACKAGE, self::FIELD_ALTERNATE_MATERIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALTERNATE_MATERIAL])) {
                        $errs[self::FIELD_ALTERNATE_MATERIAL] = [];
                    }
                    $errs[self::FIELD_ALTERNATE_MATERIAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SHELF_LIFE_STORAGE])) {
            $v = $this->getShelfLifeStorage();
            foreach($validationRules[self::FIELD_SHELF_LIFE_STORAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_PACKAGE, self::FIELD_SHELF_LIFE_STORAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SHELF_LIFE_STORAGE])) {
                        $errs[self::FIELD_SHELF_LIFE_STORAGE] = [];
                    }
                    $errs[self::FIELD_SHELF_LIFE_STORAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MANUFACTURER])) {
            $v = $this->getManufacturer();
            foreach($validationRules[self::FIELD_MANUFACTURER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_PACKAGE, self::FIELD_MANUFACTURER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MANUFACTURER])) {
                        $errs[self::FIELD_MANUFACTURER] = [];
                    }
                    $errs[self::FIELD_MANUFACTURER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROPERTY])) {
            $v = $this->getProperty();
            foreach($validationRules[self::FIELD_PROPERTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_PACKAGE, self::FIELD_PROPERTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY])) {
                        $errs[self::FIELD_PROPERTY] = [];
                    }
                    $errs[self::FIELD_PROPERTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED_ITEM])) {
            $v = $this->getContainedItem();
            foreach($validationRules[self::FIELD_CONTAINED_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_PACKAGE, self::FIELD_CONTAINED_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED_ITEM])) {
                        $errs[self::FIELD_CONTAINED_ITEM] = [];
                    }
                    $errs[self::FIELD_CONTAINED_ITEM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PACKAGE])) {
            $v = $this->getPackage();
            foreach($validationRules[self::FIELD_PACKAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_PACKAGED_PRODUCT_DEFINITION_DOT_PACKAGE, self::FIELD_PACKAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PACKAGE])) {
                        $errs[self::FIELD_PACKAGE] = [];
                    }
                    $errs[self::FIELD_PACKAGE][$rule] = $err;
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
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage
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
                throw new \DomainException(sprintf('FHIRPackagedProductDefinitionPackage::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRPackagedProductDefinitionPackage::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRPackagedProductDefinitionPackage(null);
        } elseif (!is_object($type) || !($type instanceof FHIRPackagedProductDefinitionPackage)) {
            throw new \RuntimeException(sprintf(
                'FHIRPackagedProductDefinitionPackage::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRPackagedProductDefinition\FHIRPackagedProductDefinitionPackage or null, %s seen.',
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
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_QUANTITY === $n->nodeName) {
                $type->setQuantity(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_MATERIAL === $n->nodeName) {
                $type->addMaterial(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ALTERNATE_MATERIAL === $n->nodeName) {
                $type->addAlternateMaterial(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SHELF_LIFE_STORAGE === $n->nodeName) {
                $type->addShelfLifeStorage(FHIRPackagedProductDefinitionShelfLifeStorage::xmlUnserialize($n));
            } elseif (self::FIELD_MANUFACTURER === $n->nodeName) {
                $type->addManufacturer(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_PROPERTY === $n->nodeName) {
                $type->addProperty(FHIRPackagedProductDefinitionProperty::xmlUnserialize($n));
            } elseif (self::FIELD_CONTAINED_ITEM === $n->nodeName) {
                $type->addContainedItem(FHIRPackagedProductDefinitionContainedItem::xmlUnserialize($n));
            } elseif (self::FIELD_PACKAGE === $n->nodeName) {
                $type->addPackage(FHIRPackagedProductDefinitionPackage::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_QUANTITY);
        if (null !== $n) {
            $pt = $type->getQuantity();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setQuantity($n->nodeValue);
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
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getQuantity())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_QUANTITY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getMaterial())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MATERIAL);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAlternateMaterial())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ALTERNATE_MATERIAL);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getShelfLifeStorage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SHELF_LIFE_STORAGE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getManufacturer())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MANUFACTURER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
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
        if ([] !== ($vs = $this->getContainedItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONTAINED_ITEM);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getPackage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PACKAGE);
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
        if (null !== ($v = $this->getType())) {
            $out->{self::FIELD_TYPE} = $v;
        }
        if (null !== ($v = $this->getQuantity())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_QUANTITY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_QUANTITY_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getMaterial())) {
            $out->{self::FIELD_MATERIAL} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MATERIAL}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAlternateMaterial())) {
            $out->{self::FIELD_ALTERNATE_MATERIAL} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ALTERNATE_MATERIAL}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getShelfLifeStorage())) {
            $out->{self::FIELD_SHELF_LIFE_STORAGE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SHELF_LIFE_STORAGE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getManufacturer())) {
            $out->{self::FIELD_MANUFACTURER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MANUFACTURER}[] = $v;
            }
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
        if ([] !== ($vs = $this->getContainedItem())) {
            $out->{self::FIELD_CONTAINED_ITEM} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONTAINED_ITEM}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPackage())) {
            $out->{self::FIELD_PACKAGE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PACKAGE}[] = $v;
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