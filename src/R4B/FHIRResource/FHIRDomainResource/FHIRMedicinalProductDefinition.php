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

use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRCode;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRCoding;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRDateTime;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRExtension;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRMarkdown;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRMeta;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRNarrative;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRString;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRUri;
use RistekUSDI\FHIR\R4B\FHIRResource\FHIRDomainResource;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRContainedTypeInterface;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeMap;

/**
 * A medicinal product, being a substance or combination of substances that is
 * intended to treat, prevent or diagnose a disease, or to restore, correct or
 * modify physiological functions by exerting a pharmacological, immunological or
 * metabolic action. This resource is intended to define and detail such products
 * and their properties, for uses other than direct patient care (e.g. regulatory
 * use, or drug catalogs).
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicinalProductDefinition
 * @package \RistekUSDI\FHIR\R4B\FHIRResource\FHIRDomainResource
 */
class FHIRMedicinalProductDefinition extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION;
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_TYPE = 'type';
    const FIELD_DOMAIN = 'domain';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_DATE = 'statusDate';
    const FIELD_STATUS_DATE_EXT = '_statusDate';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM = 'combinedPharmaceuticalDoseForm';
    const FIELD_ROUTE = 'route';
    const FIELD_INDICATION = 'indication';
    const FIELD_INDICATION_EXT = '_indication';
    const FIELD_LEGAL_STATUS_OF_SUPPLY = 'legalStatusOfSupply';
    const FIELD_ADDITIONAL_MONITORING_INDICATOR = 'additionalMonitoringIndicator';
    const FIELD_SPECIAL_MEASURES = 'specialMeasures';
    const FIELD_PEDIATRIC_USE_INDICATOR = 'pediatricUseIndicator';
    const FIELD_CLASSIFICATION = 'classification';
    const FIELD_MARKETING_STATUS = 'marketingStatus';
    const FIELD_PACKAGED_MEDICINAL_PRODUCT = 'packagedMedicinalProduct';
    const FIELD_INGREDIENT = 'ingredient';
    const FIELD_IMPURITY = 'impurity';
    const FIELD_ATTACHED_DOCUMENT = 'attachedDocument';
    const FIELD_MASTER_FILE = 'masterFile';
    const FIELD_CONTACT = 'contact';
    const FIELD_CLINICAL_TRIAL = 'clinicalTrial';
    const FIELD_CODE = 'code';
    const FIELD_NAME = 'name';
    const FIELD_CROSS_REFERENCE = 'crossReference';
    const FIELD_OPERATION = 'operation';
    const FIELD_CHARACTERISTIC = 'characteristic';

    /** @var string */
    private $_xmlns = '';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Business identifier for this product. Could be an MPID. When in development or
     * being regulated, products are typically referenced by official identifiers,
     * assigned by a manufacturer or regulator, and unique to a product (which, when
     * compared to a product instance being prescribed, is actually a product type).
     * See also MedicinalProductDefinition.code.
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
     * Regulatory type, e.g. Investigational or Authorized.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $type = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $domain = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business identifier relating to a specific version of the product, this is
     * commonly used to support revisions to an existing product.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $version = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status within the lifecycle of this product record. A high-level status,
     * this is not intended to duplicate details carried elsewhere such as legal
     * status, or authorization status.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $status = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date at which the given status became applicable.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRDateTimePrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDateTime
     */
    protected ?FHIRDateTime $statusDate = null;

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * General description of this product.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRMarkdownPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRMarkdown
     */
    protected ?FHIRMarkdown $description = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form for a single part product, or combined form of a multiple part
     * product. This is one concept that describes all the components. It does not
     * represent the form with components physically mixed, if that might be necessary,
     * for which see (AdministrableProductDefinition.administrableDoseForm).
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $combinedPharmaceuticalDoseForm = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route. See also
     * AdministrableProductDefinition resource. MedicinalProductDefinition.route is the
     * same concept as AdministrableProductDefinition.routeOfAdministration.code, and
     * they cannot be used together.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected ?array $route = [];

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Description of indication(s) for this product, used when structured indications
     * are not required. In cases where structured indications are required, they are
     * captured using the ClinicalUseDefinition resource. An indication is a medical
     * situation for which using the product is appropriate.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRMarkdownPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRMarkdown
     */
    protected ?FHIRMarkdown $indication = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal status of supply of the medicinal product as classified by the
     * regulator.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $legalStatusOfSupply = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory
     * reasons, such as heightened reporting requirements.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $additionalMonitoringIndicator = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons, such as a requirement to conduct post-authorisation studies.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected ?array $specialMeasures = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If authorised for use in children, or infants, neonates etc.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $pediatricUseIndicator = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems, commonly WHO ATC.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected ?array $classification = [];

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorization. This refers to the product being actually 'on the market' as
     * opposed to being allowed to be on the market (which is an authorization).
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus[]
     */
    protected ?array $marketingStatus = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Package type for the product. See also the PackagedProductDefinition resource.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected ?array $packagedMedicinalProduct = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The ingredients of this medicinal product - when not detailed in other
     * resources. This is only needed if the ingredients are not specified by incoming
     * references from the Ingredient resource, or indirectly via incoming
     * AdministrableProductDefinition, PackagedProductDefinition or
     * ManufacturedItemDefinition references. In cases where those levels of detail are
     * not used, the ingredients may be specified directly here as codes.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected ?array $ingredient = [];

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any component of the drug product which is not the chemical entity defined as
     * the drug substance, or an excipient in the drug product. This includes
     * process-related impurities and contaminants, product-related impurities
     * including degradation products.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference[]
     */
    protected ?array $impurity = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information or supporting documentation about the medicinal product.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[]
     */
    protected ?array $attachedDocument = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master
     * File). Drug master files (DMFs) are documents submitted to regulatory agencies
     * to provide confidential detailed information about facilities, processes or
     * articles used in the manufacturing, processing, packaging and storing of drug
     * products.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[]
     */
    protected ?array $masterFile = [];

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact[]
     */
    protected ?array $contact = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[]
     */
    protected ?array $clinicalTrial = [];

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that this product is known by, usually within some formal terminology,
     * perhaps assigned by a third party (i.e. not the manufacturer or regulator).
     * Products (types of medications) tend to be known by identifiers during
     * development and within regulatory process. However when they are prescribed they
     * tend to be identified by codes. The same product may be have multiple codes,
     * applied to it by multiple organizations.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCoding[]
     */
    protected ?array $code = [];

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName[]
     */
    protected ?array $name = [];

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product, or a virtual product.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference[]
     */
    protected ?array $crossReference = [];

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A manufacturing or administrative process or step associated with (or performed
     * on) the medicinal product.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation[]
     */
    protected ?array $operation = [];

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Allows the key product features to be recorded, such as "sugar free", "modified
     * release", "parallel import".
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic[]
     */
    protected ?array $characteristic = [];

    /**
     * Validation map for fields in type MedicinalProductDefinition
     * @var array
     */
    private static array $_validationRules = [
        self::FIELD_NAME => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRMedicinalProductDefinition Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicinalProductDefinition::_construct - $data expected to be null or array, %s seen',
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
        if (isset($data[self::FIELD_DOMAIN])) {
            if ($data[self::FIELD_DOMAIN] instanceof FHIRCodeableConcept) {
                $this->setDomain($data[self::FIELD_DOMAIN]);
            } else {
                $this->setDomain(new FHIRCodeableConcept($data[self::FIELD_DOMAIN]));
            }
        }
        if (isset($data[self::FIELD_VERSION]) || isset($data[self::FIELD_VERSION_EXT])) {
            $value = $data[self::FIELD_VERSION] ?? null;
            $ext = (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT])) ? $data[self::FIELD_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setVersion($value);
                } else if (is_array($value)) {
                    $this->setVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVersion(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS])) {
            if ($data[self::FIELD_STATUS] instanceof FHIRCodeableConcept) {
                $this->setStatus($data[self::FIELD_STATUS]);
            } else {
                $this->setStatus(new FHIRCodeableConcept($data[self::FIELD_STATUS]));
            }
        }
        if (isset($data[self::FIELD_STATUS_DATE]) || isset($data[self::FIELD_STATUS_DATE_EXT])) {
            $value = $data[self::FIELD_STATUS_DATE] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_DATE_EXT]) && is_array($data[self::FIELD_STATUS_DATE_EXT])) ? $data[self::FIELD_STATUS_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setStatusDate($value);
                } else if (is_array($value)) {
                    $this->setStatusDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setStatusDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatusDate(new FHIRDateTime($ext));
            }
        }
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
        if (isset($data[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM])) {
            if ($data[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] instanceof FHIRCodeableConcept) {
                $this->setCombinedPharmaceuticalDoseForm($data[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM]);
            } else {
                $this->setCombinedPharmaceuticalDoseForm(new FHIRCodeableConcept($data[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM]));
            }
        }
        if (isset($data[self::FIELD_ROUTE])) {
            if (is_array($data[self::FIELD_ROUTE])) {
                foreach($data[self::FIELD_ROUTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addRoute($v);
                    } else {
                        $this->addRoute(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_ROUTE] instanceof FHIRCodeableConcept) {
                $this->addRoute($data[self::FIELD_ROUTE]);
            } else {
                $this->addRoute(new FHIRCodeableConcept($data[self::FIELD_ROUTE]));
            }
        }
        if (isset($data[self::FIELD_INDICATION]) || isset($data[self::FIELD_INDICATION_EXT])) {
            $value = $data[self::FIELD_INDICATION] ?? null;
            $ext = (isset($data[self::FIELD_INDICATION_EXT]) && is_array($data[self::FIELD_INDICATION_EXT])) ? $data[self::FIELD_INDICATION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setIndication($value);
                } else if (is_array($value)) {
                    $this->setIndication(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setIndication(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setIndication(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_LEGAL_STATUS_OF_SUPPLY])) {
            if ($data[self::FIELD_LEGAL_STATUS_OF_SUPPLY] instanceof FHIRCodeableConcept) {
                $this->setLegalStatusOfSupply($data[self::FIELD_LEGAL_STATUS_OF_SUPPLY]);
            } else {
                $this->setLegalStatusOfSupply(new FHIRCodeableConcept($data[self::FIELD_LEGAL_STATUS_OF_SUPPLY]));
            }
        }
        if (isset($data[self::FIELD_ADDITIONAL_MONITORING_INDICATOR])) {
            if ($data[self::FIELD_ADDITIONAL_MONITORING_INDICATOR] instanceof FHIRCodeableConcept) {
                $this->setAdditionalMonitoringIndicator($data[self::FIELD_ADDITIONAL_MONITORING_INDICATOR]);
            } else {
                $this->setAdditionalMonitoringIndicator(new FHIRCodeableConcept($data[self::FIELD_ADDITIONAL_MONITORING_INDICATOR]));
            }
        }
        if (isset($data[self::FIELD_SPECIAL_MEASURES])) {
            if (is_array($data[self::FIELD_SPECIAL_MEASURES])) {
                foreach($data[self::FIELD_SPECIAL_MEASURES] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addSpecialMeasures($v);
                    } else {
                        $this->addSpecialMeasures(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_SPECIAL_MEASURES] instanceof FHIRCodeableConcept) {
                $this->addSpecialMeasures($data[self::FIELD_SPECIAL_MEASURES]);
            } else {
                $this->addSpecialMeasures(new FHIRCodeableConcept($data[self::FIELD_SPECIAL_MEASURES]));
            }
        }
        if (isset($data[self::FIELD_PEDIATRIC_USE_INDICATOR])) {
            if ($data[self::FIELD_PEDIATRIC_USE_INDICATOR] instanceof FHIRCodeableConcept) {
                $this->setPediatricUseIndicator($data[self::FIELD_PEDIATRIC_USE_INDICATOR]);
            } else {
                $this->setPediatricUseIndicator(new FHIRCodeableConcept($data[self::FIELD_PEDIATRIC_USE_INDICATOR]));
            }
        }
        if (isset($data[self::FIELD_CLASSIFICATION])) {
            if (is_array($data[self::FIELD_CLASSIFICATION])) {
                foreach($data[self::FIELD_CLASSIFICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addClassification($v);
                    } else {
                        $this->addClassification(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CLASSIFICATION] instanceof FHIRCodeableConcept) {
                $this->addClassification($data[self::FIELD_CLASSIFICATION]);
            } else {
                $this->addClassification(new FHIRCodeableConcept($data[self::FIELD_CLASSIFICATION]));
            }
        }
        if (isset($data[self::FIELD_MARKETING_STATUS])) {
            if (is_array($data[self::FIELD_MARKETING_STATUS])) {
                foreach($data[self::FIELD_MARKETING_STATUS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMarketingStatus) {
                        $this->addMarketingStatus($v);
                    } else {
                        $this->addMarketingStatus(new FHIRMarketingStatus($v));
                    }
                }
            } elseif ($data[self::FIELD_MARKETING_STATUS] instanceof FHIRMarketingStatus) {
                $this->addMarketingStatus($data[self::FIELD_MARKETING_STATUS]);
            } else {
                $this->addMarketingStatus(new FHIRMarketingStatus($data[self::FIELD_MARKETING_STATUS]));
            }
        }
        if (isset($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT])) {
            if (is_array($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT])) {
                foreach($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addPackagedMedicinalProduct($v);
                    } else {
                        $this->addPackagedMedicinalProduct(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] instanceof FHIRCodeableConcept) {
                $this->addPackagedMedicinalProduct($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT]);
            } else {
                $this->addPackagedMedicinalProduct(new FHIRCodeableConcept($data[self::FIELD_PACKAGED_MEDICINAL_PRODUCT]));
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
        if (isset($data[self::FIELD_IMPURITY])) {
            if (is_array($data[self::FIELD_IMPURITY])) {
                foreach($data[self::FIELD_IMPURITY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableReference) {
                        $this->addImpurity($v);
                    } else {
                        $this->addImpurity(new FHIRCodeableReference($v));
                    }
                }
            } elseif ($data[self::FIELD_IMPURITY] instanceof FHIRCodeableReference) {
                $this->addImpurity($data[self::FIELD_IMPURITY]);
            } else {
                $this->addImpurity(new FHIRCodeableReference($data[self::FIELD_IMPURITY]));
            }
        }
        if (isset($data[self::FIELD_ATTACHED_DOCUMENT])) {
            if (is_array($data[self::FIELD_ATTACHED_DOCUMENT])) {
                foreach($data[self::FIELD_ATTACHED_DOCUMENT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addAttachedDocument($v);
                    } else {
                        $this->addAttachedDocument(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_ATTACHED_DOCUMENT] instanceof FHIRReference) {
                $this->addAttachedDocument($data[self::FIELD_ATTACHED_DOCUMENT]);
            } else {
                $this->addAttachedDocument(new FHIRReference($data[self::FIELD_ATTACHED_DOCUMENT]));
            }
        }
        if (isset($data[self::FIELD_MASTER_FILE])) {
            if (is_array($data[self::FIELD_MASTER_FILE])) {
                foreach($data[self::FIELD_MASTER_FILE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addMasterFile($v);
                    } else {
                        $this->addMasterFile(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_MASTER_FILE] instanceof FHIRReference) {
                $this->addMasterFile($data[self::FIELD_MASTER_FILE]);
            } else {
                $this->addMasterFile(new FHIRReference($data[self::FIELD_MASTER_FILE]));
            }
        }
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductDefinitionContact) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRMedicinalProductDefinitionContact($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTACT] instanceof FHIRMedicinalProductDefinitionContact) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRMedicinalProductDefinitionContact($data[self::FIELD_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_CLINICAL_TRIAL])) {
            if (is_array($data[self::FIELD_CLINICAL_TRIAL])) {
                foreach($data[self::FIELD_CLINICAL_TRIAL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addClinicalTrial($v);
                    } else {
                        $this->addClinicalTrial(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_CLINICAL_TRIAL] instanceof FHIRReference) {
                $this->addClinicalTrial($data[self::FIELD_CLINICAL_TRIAL]);
            } else {
                $this->addClinicalTrial(new FHIRReference($data[self::FIELD_CLINICAL_TRIAL]));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addCode($v);
                    } else {
                        $this->addCode(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_CODE] instanceof FHIRCoding) {
                $this->addCode($data[self::FIELD_CODE]);
            } else {
                $this->addCode(new FHIRCoding($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_NAME])) {
            if (is_array($data[self::FIELD_NAME])) {
                foreach($data[self::FIELD_NAME] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductDefinitionName) {
                        $this->addName($v);
                    } else {
                        $this->addName(new FHIRMedicinalProductDefinitionName($v));
                    }
                }
            } elseif ($data[self::FIELD_NAME] instanceof FHIRMedicinalProductDefinitionName) {
                $this->addName($data[self::FIELD_NAME]);
            } else {
                $this->addName(new FHIRMedicinalProductDefinitionName($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_CROSS_REFERENCE])) {
            if (is_array($data[self::FIELD_CROSS_REFERENCE])) {
                foreach($data[self::FIELD_CROSS_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductDefinitionCrossReference) {
                        $this->addCrossReference($v);
                    } else {
                        $this->addCrossReference(new FHIRMedicinalProductDefinitionCrossReference($v));
                    }
                }
            } elseif ($data[self::FIELD_CROSS_REFERENCE] instanceof FHIRMedicinalProductDefinitionCrossReference) {
                $this->addCrossReference($data[self::FIELD_CROSS_REFERENCE]);
            } else {
                $this->addCrossReference(new FHIRMedicinalProductDefinitionCrossReference($data[self::FIELD_CROSS_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_OPERATION])) {
            if (is_array($data[self::FIELD_OPERATION])) {
                foreach($data[self::FIELD_OPERATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductDefinitionOperation) {
                        $this->addOperation($v);
                    } else {
                        $this->addOperation(new FHIRMedicinalProductDefinitionOperation($v));
                    }
                }
            } elseif ($data[self::FIELD_OPERATION] instanceof FHIRMedicinalProductDefinitionOperation) {
                $this->addOperation($data[self::FIELD_OPERATION]);
            } else {
                $this->addOperation(new FHIRMedicinalProductDefinitionOperation($data[self::FIELD_OPERATION]));
            }
        }
        if (isset($data[self::FIELD_CHARACTERISTIC])) {
            if (is_array($data[self::FIELD_CHARACTERISTIC])) {
                foreach($data[self::FIELD_CHARACTERISTIC] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRMedicinalProductDefinitionCharacteristic) {
                        $this->addCharacteristic($v);
                    } else {
                        $this->addCharacteristic(new FHIRMedicinalProductDefinitionCharacteristic($v));
                    }
                }
            } elseif ($data[self::FIELD_CHARACTERISTIC] instanceof FHIRMedicinalProductDefinitionCharacteristic) {
                $this->addCharacteristic($data[self::FIELD_CHARACTERISTIC]);
            } else {
                $this->addCharacteristic(new FHIRMedicinalProductDefinitionCharacteristic($data[self::FIELD_CHARACTERISTIC]));
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
        return "<MedicinalProductDefinition{$xmlns}></MedicinalProductDefinition>";
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
     * Business identifier for this product. Could be an MPID. When in development or
     * being regulated, products are typically referenced by official identifiers,
     * assigned by a manufacturer or regulator, and unique to a product (which, when
     * compared to a product instance being prescribed, is actually a product type).
     * See also MedicinalProductDefinition.code.
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
     * Business identifier for this product. Could be an MPID. When in development or
     * being regulated, products are typically referenced by official identifiers,
     * assigned by a manufacturer or regulator, and unique to a product (which, when
     * compared to a product instance being prescribed, is actually a product type).
     * See also MedicinalProductDefinition.code.
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
     * Business identifier for this product. Could be an MPID. When in development or
     * being regulated, products are typically referenced by official identifiers,
     * assigned by a manufacturer or regulator, and unique to a product (which, when
     * compared to a product instance being prescribed, is actually a product type).
     * See also MedicinalProductDefinition.code.
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
     * Regulatory type, e.g. Investigational or Authorized.
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
     * Regulatory type, e.g. Investigational or Authorized.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getDomain(): ?FHIRCodeableConcept
    {
        return $this->domain;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If this medicine applies to human or veterinary uses.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $domain
     * @return static
     */
    public function setDomain(?FHIRCodeableConcept $domain = null): object
    {
        $this->_trackValueSet($this->domain, $domain);
        $this->domain = $domain;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business identifier relating to a specific version of the product, this is
     * commonly used to support revisions to an existing product.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getVersion(): ?FHIRString
    {
        return $this->version;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A business identifier relating to a specific version of the product, this is
     * commonly used to support revisions to an existing product.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $version
     * @return static
     */
    public function setVersion($version = null): object
    {
        if (null !== $version && !($version instanceof FHIRString)) {
            $version = new FHIRString($version);
        }
        $this->_trackValueSet($this->version, $version);
        $this->version = $version;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status within the lifecycle of this product record. A high-level status,
     * this is not intended to duplicate details carried elsewhere such as legal
     * status, or authorization status.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getStatus(): ?FHIRCodeableConcept
    {
        return $this->status;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status within the lifecycle of this product record. A high-level status,
     * this is not intended to duplicate details carried elsewhere such as legal
     * status, or authorization status.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $status
     * @return static
     */
    public function setStatus(?FHIRCodeableConcept $status = null): object
    {
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date at which the given status became applicable.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRDateTimePrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDateTime
     */
    public function getStatusDate(): ?FHIRDateTime
    {
        return $this->statusDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date at which the given status became applicable.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRDateTimePrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDateTime $statusDate
     * @return static
     */
    public function setStatusDate($statusDate = null): object
    {
        if (null !== $statusDate && !($statusDate instanceof FHIRDateTime)) {
            $statusDate = new FHIRDateTime($statusDate);
        }
        $this->_trackValueSet($this->statusDate, $statusDate);
        $this->statusDate = $statusDate;
        return $this;
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
     * General description of this product.
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
     * General description of this product.
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
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form for a single part product, or combined form of a multiple part
     * product. This is one concept that describes all the components. It does not
     * represent the form with components physically mixed, if that might be necessary,
     * for which see (AdministrableProductDefinition.administrableDoseForm).
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getCombinedPharmaceuticalDoseForm(): ?FHIRCodeableConcept
    {
        return $this->combinedPharmaceuticalDoseForm;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The dose form for a single part product, or combined form of a multiple part
     * product. This is one concept that describes all the components. It does not
     * represent the form with components physically mixed, if that might be necessary,
     * for which see (AdministrableProductDefinition.administrableDoseForm).
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $combinedPharmaceuticalDoseForm
     * @return static
     */
    public function setCombinedPharmaceuticalDoseForm(?FHIRCodeableConcept $combinedPharmaceuticalDoseForm = null): object
    {
        $this->_trackValueSet($this->combinedPharmaceuticalDoseForm, $combinedPharmaceuticalDoseForm);
        $this->combinedPharmaceuticalDoseForm = $combinedPharmaceuticalDoseForm;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route. See also
     * AdministrableProductDefinition resource. MedicinalProductDefinition.route is the
     * same concept as AdministrableProductDefinition.routeOfAdministration.code, and
     * they cannot be used together.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getRoute(): ?array
    {
        return $this->route;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route. See also
     * AdministrableProductDefinition resource. MedicinalProductDefinition.route is the
     * same concept as AdministrableProductDefinition.routeOfAdministration.code, and
     * they cannot be used together.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $route
     * @return static
     */
    public function addRoute(?FHIRCodeableConcept $route = null): object
    {
        $this->_trackValueAdded();
        $this->route[] = $route;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The path by which the product is taken into or makes contact with the body. In
     * some regions this is referred to as the licenced or approved route. See also
     * AdministrableProductDefinition resource. MedicinalProductDefinition.route is the
     * same concept as AdministrableProductDefinition.routeOfAdministration.code, and
     * they cannot be used together.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[] $route
     * @return static
     */
    public function setRoute(array $route = []): object
    {
        if ([] !== $this->route) {
            $this->_trackValuesRemoved(count($this->route));
            $this->route = [];
        }
        if ([] === $route) {
            return $this;
        }
        foreach($route as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addRoute($v);
            } else {
                $this->addRoute(new FHIRCodeableConcept($v));
            }
        }
        return $this;
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
     * Description of indication(s) for this product, used when structured indications
     * are not required. In cases where structured indications are required, they are
     * captured using the ClinicalUseDefinition resource. An indication is a medical
     * situation for which using the product is appropriate.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRMarkdownPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRMarkdown
     */
    public function getIndication(): ?FHIRMarkdown
    {
        return $this->indication;
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
     * Description of indication(s) for this product, used when structured indications
     * are not required. In cases where structured indications are required, they are
     * captured using the ClinicalUseDefinition resource. An indication is a medical
     * situation for which using the product is appropriate.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRMarkdownPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRMarkdown $indication
     * @return static
     */
    public function setIndication($indication = null): object
    {
        if (null !== $indication && !($indication instanceof FHIRMarkdown)) {
            $indication = new FHIRMarkdown($indication);
        }
        $this->_trackValueSet($this->indication, $indication);
        $this->indication = $indication;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal status of supply of the medicinal product as classified by the
     * regulator.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getLegalStatusOfSupply(): ?FHIRCodeableConcept
    {
        return $this->legalStatusOfSupply;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The legal status of supply of the medicinal product as classified by the
     * regulator.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $legalStatusOfSupply
     * @return static
     */
    public function setLegalStatusOfSupply(?FHIRCodeableConcept $legalStatusOfSupply = null): object
    {
        $this->_trackValueSet($this->legalStatusOfSupply, $legalStatusOfSupply);
        $this->legalStatusOfSupply = $legalStatusOfSupply;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory
     * reasons, such as heightened reporting requirements.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getAdditionalMonitoringIndicator(): ?FHIRCodeableConcept
    {
        return $this->additionalMonitoringIndicator;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to additional monitoring for regulatory
     * reasons, such as heightened reporting requirements.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $additionalMonitoringIndicator
     * @return static
     */
    public function setAdditionalMonitoringIndicator(?FHIRCodeableConcept $additionalMonitoringIndicator = null): object
    {
        $this->_trackValueSet($this->additionalMonitoringIndicator, $additionalMonitoringIndicator);
        $this->additionalMonitoringIndicator = $additionalMonitoringIndicator;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons, such as a requirement to conduct post-authorisation studies.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialMeasures(): ?array
    {
        return $this->specialMeasures;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons, such as a requirement to conduct post-authorisation studies.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $specialMeasures
     * @return static
     */
    public function addSpecialMeasures(?FHIRCodeableConcept $specialMeasures = null): object
    {
        $this->_trackValueAdded();
        $this->specialMeasures[] = $specialMeasures;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Whether the Medicinal Product is subject to special measures for regulatory
     * reasons, such as a requirement to conduct post-authorisation studies.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[] $specialMeasures
     * @return static
     */
    public function setSpecialMeasures(array $specialMeasures = []): object
    {
        if ([] !== $this->specialMeasures) {
            $this->_trackValuesRemoved(count($this->specialMeasures));
            $this->specialMeasures = [];
        }
        if ([] === $specialMeasures) {
            return $this;
        }
        foreach($specialMeasures as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addSpecialMeasures($v);
            } else {
                $this->addSpecialMeasures(new FHIRCodeableConcept($v));
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
     * If authorised for use in children, or infants, neonates etc.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getPediatricUseIndicator(): ?FHIRCodeableConcept
    {
        return $this->pediatricUseIndicator;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * If authorised for use in children, or infants, neonates etc.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $pediatricUseIndicator
     * @return static
     */
    public function setPediatricUseIndicator(?FHIRCodeableConcept $pediatricUseIndicator = null): object
    {
        $this->_trackValueSet($this->pediatricUseIndicator, $pediatricUseIndicator);
        $this->pediatricUseIndicator = $pediatricUseIndicator;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems, commonly WHO ATC.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getClassification(): ?array
    {
        return $this->classification;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems, commonly WHO ATC.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $classification
     * @return static
     */
    public function addClassification(?FHIRCodeableConcept $classification = null): object
    {
        $this->_trackValueAdded();
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Allows the product to be classified by various systems, commonly WHO ATC.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[] $classification
     * @return static
     */
    public function setClassification(array $classification = []): object
    {
        if ([] !== $this->classification) {
            $this->_trackValuesRemoved(count($this->classification));
            $this->classification = [];
        }
        if ([] === $classification) {
            return $this;
        }
        foreach($classification as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addClassification($v);
            } else {
                $this->addClassification(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorization. This refers to the product being actually 'on the market' as
     * opposed to being allowed to be on the market (which is an authorization).
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus[]
     */
    public function getMarketingStatus(): ?array
    {
        return $this->marketingStatus;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorization. This refers to the product being actually 'on the market' as
     * opposed to being allowed to be on the market (which is an authorization).
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus $marketingStatus
     * @return static
     */
    public function addMarketingStatus(?FHIRMarketingStatus $marketingStatus = null): object
    {
        $this->_trackValueAdded();
        $this->marketingStatus[] = $marketingStatus;
        return $this;
    }

    /**
     * The marketing status describes the date when a medicinal product is actually put
     * on the market or the date as of which it is no longer available.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Marketing status of the medicinal product, in contrast to marketing
     * authorization. This refers to the product being actually 'on the market' as
     * opposed to being allowed to be on the market (which is an authorization).
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMarketingStatus[] $marketingStatus
     * @return static
     */
    public function setMarketingStatus(array $marketingStatus = []): object
    {
        if ([] !== $this->marketingStatus) {
            $this->_trackValuesRemoved(count($this->marketingStatus));
            $this->marketingStatus = [];
        }
        if ([] === $marketingStatus) {
            return $this;
        }
        foreach($marketingStatus as $v) {
            if ($v instanceof FHIRMarketingStatus) {
                $this->addMarketingStatus($v);
            } else {
                $this->addMarketingStatus(new FHIRMarketingStatus($v));
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
     * Package type for the product. See also the PackagedProductDefinition resource.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getPackagedMedicinalProduct(): ?array
    {
        return $this->packagedMedicinalProduct;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Package type for the product. See also the PackagedProductDefinition resource.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $packagedMedicinalProduct
     * @return static
     */
    public function addPackagedMedicinalProduct(?FHIRCodeableConcept $packagedMedicinalProduct = null): object
    {
        $this->_trackValueAdded();
        $this->packagedMedicinalProduct[] = $packagedMedicinalProduct;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Package type for the product. See also the PackagedProductDefinition resource.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[] $packagedMedicinalProduct
     * @return static
     */
    public function setPackagedMedicinalProduct(array $packagedMedicinalProduct = []): object
    {
        if ([] !== $this->packagedMedicinalProduct) {
            $this->_trackValuesRemoved(count($this->packagedMedicinalProduct));
            $this->packagedMedicinalProduct = [];
        }
        if ([] === $packagedMedicinalProduct) {
            return $this;
        }
        foreach($packagedMedicinalProduct as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addPackagedMedicinalProduct($v);
            } else {
                $this->addPackagedMedicinalProduct(new FHIRCodeableConcept($v));
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
     * The ingredients of this medicinal product - when not detailed in other
     * resources. This is only needed if the ingredients are not specified by incoming
     * references from the Ingredient resource, or indirectly via incoming
     * AdministrableProductDefinition, PackagedProductDefinition or
     * ManufacturedItemDefinition references. In cases where those levels of detail are
     * not used, the ingredients may be specified directly here as codes.
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
     * The ingredients of this medicinal product - when not detailed in other
     * resources. This is only needed if the ingredients are not specified by incoming
     * references from the Ingredient resource, or indirectly via incoming
     * AdministrableProductDefinition, PackagedProductDefinition or
     * ManufacturedItemDefinition references. In cases where those levels of detail are
     * not used, the ingredients may be specified directly here as codes.
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
     * The ingredients of this medicinal product - when not detailed in other
     * resources. This is only needed if the ingredients are not specified by incoming
     * references from the Ingredient resource, or indirectly via incoming
     * AdministrableProductDefinition, PackagedProductDefinition or
     * ManufacturedItemDefinition references. In cases where those levels of detail are
     * not used, the ingredients may be specified directly here as codes.
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
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any component of the drug product which is not the chemical entity defined as
     * the drug substance, or an excipient in the drug product. This includes
     * process-related impurities and contaminants, product-related impurities
     * including degradation products.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference[]
     */
    public function getImpurity(): ?array
    {
        return $this->impurity;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any component of the drug product which is not the chemical entity defined as
     * the drug substance, or an excipient in the drug product. This includes
     * process-related impurities and contaminants, product-related impurities
     * including degradation products.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference $impurity
     * @return static
     */
    public function addImpurity(?FHIRCodeableReference $impurity = null): object
    {
        $this->_trackValueAdded();
        $this->impurity[] = $impurity;
        return $this;
    }

    /**
     * A reference to a resource (by instance), or instead, a reference to a concept
     * defined in a terminology or ontology (by class).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any component of the drug product which is not the chemical entity defined as
     * the drug substance, or an excipient in the drug product. This includes
     * process-related impurities and contaminants, product-related impurities
     * including degradation products.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableReference[] $impurity
     * @return static
     */
    public function setImpurity(array $impurity = []): object
    {
        if ([] !== $this->impurity) {
            $this->_trackValuesRemoved(count($this->impurity));
            $this->impurity = [];
        }
        if ([] === $impurity) {
            return $this;
        }
        foreach($impurity as $v) {
            if ($v instanceof FHIRCodeableReference) {
                $this->addImpurity($v);
            } else {
                $this->addImpurity(new FHIRCodeableReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information or supporting documentation about the medicinal product.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[]
     */
    public function getAttachedDocument(): ?array
    {
        return $this->attachedDocument;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information or supporting documentation about the medicinal product.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference $attachedDocument
     * @return static
     */
    public function addAttachedDocument(?FHIRReference $attachedDocument = null): object
    {
        $this->_trackValueAdded();
        $this->attachedDocument[] = $attachedDocument;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Additional information or supporting documentation about the medicinal product.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[] $attachedDocument
     * @return static
     */
    public function setAttachedDocument(array $attachedDocument = []): object
    {
        if ([] !== $this->attachedDocument) {
            $this->_trackValuesRemoved(count($this->attachedDocument));
            $this->attachedDocument = [];
        }
        if ([] === $attachedDocument) {
            return $this;
        }
        foreach($attachedDocument as $v) {
            if ($v instanceof FHIRReference) {
                $this->addAttachedDocument($v);
            } else {
                $this->addAttachedDocument(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master
     * File). Drug master files (DMFs) are documents submitted to regulatory agencies
     * to provide confidential detailed information about facilities, processes or
     * articles used in the manufacturing, processing, packaging and storing of drug
     * products.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[]
     */
    public function getMasterFile(): ?array
    {
        return $this->masterFile;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master
     * File). Drug master files (DMFs) are documents submitted to regulatory agencies
     * to provide confidential detailed information about facilities, processes or
     * articles used in the manufacturing, processing, packaging and storing of drug
     * products.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference $masterFile
     * @return static
     */
    public function addMasterFile(?FHIRReference $masterFile = null): object
    {
        $this->_trackValueAdded();
        $this->masterFile[] = $masterFile;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A master file for the medicinal product (e.g. Pharmacovigilance System Master
     * File). Drug master files (DMFs) are documents submitted to regulatory agencies
     * to provide confidential detailed information about facilities, processes or
     * articles used in the manufacturing, processing, packaging and storing of drug
     * products.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[] $masterFile
     * @return static
     */
    public function setMasterFile(array $masterFile = []): object
    {
        if ([] !== $this->masterFile) {
            $this->_trackValuesRemoved(count($this->masterFile));
            $this->masterFile = [];
        }
        if ([] === $masterFile) {
            return $this;
        }
        foreach($masterFile as $v) {
            if ($v instanceof FHIRReference) {
                $this->addMasterFile($v);
            } else {
                $this->addMasterFile(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact[]
     */
    public function getContact(): ?array
    {
        return $this->contact;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact $contact
     * @return static
     */
    public function addContact(?FHIRMedicinalProductDefinitionContact $contact = null): object
    {
        $this->_trackValueAdded();
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A product specific contact, person (in a role), or an organization.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionContact[] $contact
     * @return static
     */
    public function setContact(array $contact = []): object
    {
        if ([] !== $this->contact) {
            $this->_trackValuesRemoved(count($this->contact));
            $this->contact = [];
        }
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            if ($v instanceof FHIRMedicinalProductDefinitionContact) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIRMedicinalProductDefinitionContact($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[]
     */
    public function getClinicalTrial(): ?array
    {
        return $this->clinicalTrial;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference $clinicalTrial
     * @return static
     */
    public function addClinicalTrial(?FHIRReference $clinicalTrial = null): object
    {
        $this->_trackValueAdded();
        $this->clinicalTrial[] = $clinicalTrial;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Clinical trials or studies that this product is involved in.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRReference[] $clinicalTrial
     * @return static
     */
    public function setClinicalTrial(array $clinicalTrial = []): object
    {
        if ([] !== $this->clinicalTrial) {
            $this->_trackValuesRemoved(count($this->clinicalTrial));
            $this->clinicalTrial = [];
        }
        if ([] === $clinicalTrial) {
            return $this;
        }
        foreach($clinicalTrial as $v) {
            if ($v instanceof FHIRReference) {
                $this->addClinicalTrial($v);
            } else {
                $this->addClinicalTrial(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that this product is known by, usually within some formal terminology,
     * perhaps assigned by a third party (i.e. not the manufacturer or regulator).
     * Products (types of medications) tend to be known by identifiers during
     * development and within regulatory process. However when they are prescribed they
     * tend to be identified by codes. The same product may be have multiple codes,
     * applied to it by multiple organizations.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCoding[]
     */
    public function getCode(): ?array
    {
        return $this->code;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that this product is known by, usually within some formal terminology,
     * perhaps assigned by a third party (i.e. not the manufacturer or regulator).
     * Products (types of medications) tend to be known by identifiers during
     * development and within regulatory process. However when they are prescribed they
     * tend to be identified by codes. The same product may be have multiple codes,
     * applied to it by multiple organizations.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCoding $code
     * @return static
     */
    public function addCode(?FHIRCoding $code = null): object
    {
        $this->_trackValueAdded();
        $this->code[] = $code;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A code that this product is known by, usually within some formal terminology,
     * perhaps assigned by a third party (i.e. not the manufacturer or regulator).
     * Products (types of medications) tend to be known by identifiers during
     * development and within regulatory process. However when they are prescribed they
     * tend to be identified by codes. The same product may be have multiple codes,
     * applied to it by multiple organizations.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCoding[] $code
     * @return static
     */
    public function setCode(array $code = []): object
    {
        if ([] !== $this->code) {
            $this->_trackValuesRemoved(count($this->code));
            $this->code = [];
        }
        if ([] === $code) {
            return $this;
        }
        foreach($code as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addCode($v);
            } else {
                $this->addCode(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName[]
     */
    public function getName(): ?array
    {
        return $this->name;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName $name
     * @return static
     */
    public function addName(?FHIRMedicinalProductDefinitionName $name = null): object
    {
        $this->_trackValueAdded();
        $this->name[] = $name;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * The product's name, including full name and possibly coded parts.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionName[] $name
     * @return static
     */
    public function setName(array $name = []): object
    {
        if ([] !== $this->name) {
            $this->_trackValuesRemoved(count($this->name));
            $this->name = [];
        }
        if ([] === $name) {
            return $this;
        }
        foreach($name as $v) {
            if ($v instanceof FHIRMedicinalProductDefinitionName) {
                $this->addName($v);
            } else {
                $this->addName(new FHIRMedicinalProductDefinitionName($v));
            }
        }
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product, or a virtual product.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference[]
     */
    public function getCrossReference(): ?array
    {
        return $this->crossReference;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product, or a virtual product.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference $crossReference
     * @return static
     */
    public function addCrossReference(?FHIRMedicinalProductDefinitionCrossReference $crossReference = null): object
    {
        $this->_trackValueAdded();
        $this->crossReference[] = $crossReference;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Reference to another product, e.g. for linking authorised to investigational
     * product, or a virtual product.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCrossReference[] $crossReference
     * @return static
     */
    public function setCrossReference(array $crossReference = []): object
    {
        if ([] !== $this->crossReference) {
            $this->_trackValuesRemoved(count($this->crossReference));
            $this->crossReference = [];
        }
        if ([] === $crossReference) {
            return $this;
        }
        foreach($crossReference as $v) {
            if ($v instanceof FHIRMedicinalProductDefinitionCrossReference) {
                $this->addCrossReference($v);
            } else {
                $this->addCrossReference(new FHIRMedicinalProductDefinitionCrossReference($v));
            }
        }
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A manufacturing or administrative process or step associated with (or performed
     * on) the medicinal product.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation[]
     */
    public function getOperation(): ?array
    {
        return $this->operation;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A manufacturing or administrative process or step associated with (or performed
     * on) the medicinal product.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation $operation
     * @return static
     */
    public function addOperation(?FHIRMedicinalProductDefinitionOperation $operation = null): object
    {
        $this->_trackValueAdded();
        $this->operation[] = $operation;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * A manufacturing or administrative process or step associated with (or performed
     * on) the medicinal product.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionOperation[] $operation
     * @return static
     */
    public function setOperation(array $operation = []): object
    {
        if ([] !== $this->operation) {
            $this->_trackValuesRemoved(count($this->operation));
            $this->operation = [];
        }
        if ([] === $operation) {
            return $this;
        }
        foreach($operation as $v) {
            if ($v instanceof FHIRMedicinalProductDefinitionOperation) {
                $this->addOperation($v);
            } else {
                $this->addOperation(new FHIRMedicinalProductDefinitionOperation($v));
            }
        }
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Allows the key product features to be recorded, such as "sugar free", "modified
     * release", "parallel import".
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic[]
     */
    public function getCharacteristic(): ?array
    {
        return $this->characteristic;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Allows the key product features to be recorded, such as "sugar free", "modified
     * release", "parallel import".
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic $characteristic
     * @return static
     */
    public function addCharacteristic(?FHIRMedicinalProductDefinitionCharacteristic $characteristic = null): object
    {
        $this->_trackValueAdded();
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * A medicinal product, being a substance or combination of substances that is
     * intended to treat, prevent or diagnose a disease, or to restore, correct or
     * modify physiological functions by exerting a pharmacological, immunological or
     * metabolic action. This resource is intended to define and detail such products
     * and their properties, for uses other than direct patient care (e.g. regulatory
     * use, or drug catalogs).
     *
     * Allows the key product features to be recorded, such as "sugar free", "modified
     * release", "parallel import".
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRMedicinalProductDefinition\FHIRMedicinalProductDefinitionCharacteristic[] $characteristic
     * @return static
     */
    public function setCharacteristic(array $characteristic = []): object
    {
        if ([] !== $this->characteristic) {
            $this->_trackValuesRemoved(count($this->characteristic));
            $this->characteristic = [];
        }
        if ([] === $characteristic) {
            return $this;
        }
        foreach($characteristic as $v) {
            if ($v instanceof FHIRMedicinalProductDefinitionCharacteristic) {
                $this->addCharacteristic($v);
            } else {
                $this->addCharacteristic(new FHIRMedicinalProductDefinitionCharacteristic($v));
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
        if (null !== ($v = $this->getDomain())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DOMAIN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatusDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCombinedPharmaceuticalDoseForm())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRoute())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ROUTE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIndication())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INDICATION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLegalStatusOfSupply())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LEGAL_STATUS_OF_SUPPLY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAdditionalMonitoringIndicator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ADDITIONAL_MONITORING_INDICATOR] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSpecialMeasures())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SPECIAL_MEASURES, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPediatricUseIndicator())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PEDIATRIC_USE_INDICATOR] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getClassification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLASSIFICATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMarketingStatus())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MARKETING_STATUS, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPackagedMedicinalProduct())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PACKAGED_MEDICINAL_PRODUCT, $i)] = $fieldErrs;
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
        if ([] !== ($vs = $this->getImpurity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IMPURITY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAttachedDocument())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ATTACHED_DOCUMENT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getMasterFile())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MASTER_FILE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTACT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getClinicalTrial())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLINICAL_TRIAL, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NAME, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCrossReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CROSS_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getOperation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_OPERATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCharacteristic())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CHARACTERISTIC, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
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
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOMAIN])) {
            $v = $this->getDomain();
            foreach($validationRules[self::FIELD_DOMAIN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_DOMAIN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOMAIN])) {
                        $errs[self::FIELD_DOMAIN] = [];
                    }
                    $errs[self::FIELD_DOMAIN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_DATE])) {
            $v = $this->getStatusDate();
            foreach($validationRules[self::FIELD_STATUS_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_STATUS_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_DATE])) {
                        $errs[self::FIELD_STATUS_DATE] = [];
                    }
                    $errs[self::FIELD_STATUS_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM])) {
            $v = $this->getCombinedPharmaceuticalDoseForm();
            foreach($validationRules[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM])) {
                        $errs[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM] = [];
                    }
                    $errs[self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROUTE])) {
            $v = $this->getRoute();
            foreach($validationRules[self::FIELD_ROUTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_ROUTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROUTE])) {
                        $errs[self::FIELD_ROUTE] = [];
                    }
                    $errs[self::FIELD_ROUTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INDICATION])) {
            $v = $this->getIndication();
            foreach($validationRules[self::FIELD_INDICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_INDICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INDICATION])) {
                        $errs[self::FIELD_INDICATION] = [];
                    }
                    $errs[self::FIELD_INDICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LEGAL_STATUS_OF_SUPPLY])) {
            $v = $this->getLegalStatusOfSupply();
            foreach($validationRules[self::FIELD_LEGAL_STATUS_OF_SUPPLY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_LEGAL_STATUS_OF_SUPPLY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LEGAL_STATUS_OF_SUPPLY])) {
                        $errs[self::FIELD_LEGAL_STATUS_OF_SUPPLY] = [];
                    }
                    $errs[self::FIELD_LEGAL_STATUS_OF_SUPPLY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDITIONAL_MONITORING_INDICATOR])) {
            $v = $this->getAdditionalMonitoringIndicator();
            foreach($validationRules[self::FIELD_ADDITIONAL_MONITORING_INDICATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_ADDITIONAL_MONITORING_INDICATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDITIONAL_MONITORING_INDICATOR])) {
                        $errs[self::FIELD_ADDITIONAL_MONITORING_INDICATOR] = [];
                    }
                    $errs[self::FIELD_ADDITIONAL_MONITORING_INDICATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SPECIAL_MEASURES])) {
            $v = $this->getSpecialMeasures();
            foreach($validationRules[self::FIELD_SPECIAL_MEASURES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_SPECIAL_MEASURES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SPECIAL_MEASURES])) {
                        $errs[self::FIELD_SPECIAL_MEASURES] = [];
                    }
                    $errs[self::FIELD_SPECIAL_MEASURES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PEDIATRIC_USE_INDICATOR])) {
            $v = $this->getPediatricUseIndicator();
            foreach($validationRules[self::FIELD_PEDIATRIC_USE_INDICATOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_PEDIATRIC_USE_INDICATOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PEDIATRIC_USE_INDICATOR])) {
                        $errs[self::FIELD_PEDIATRIC_USE_INDICATOR] = [];
                    }
                    $errs[self::FIELD_PEDIATRIC_USE_INDICATOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFICATION])) {
            $v = $this->getClassification();
            foreach($validationRules[self::FIELD_CLASSIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFICATION])) {
                        $errs[self::FIELD_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MARKETING_STATUS])) {
            $v = $this->getMarketingStatus();
            foreach($validationRules[self::FIELD_MARKETING_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_MARKETING_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MARKETING_STATUS])) {
                        $errs[self::FIELD_MARKETING_STATUS] = [];
                    }
                    $errs[self::FIELD_MARKETING_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PACKAGED_MEDICINAL_PRODUCT])) {
            $v = $this->getPackagedMedicinalProduct();
            foreach($validationRules[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_PACKAGED_MEDICINAL_PRODUCT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PACKAGED_MEDICINAL_PRODUCT])) {
                        $errs[self::FIELD_PACKAGED_MEDICINAL_PRODUCT] = [];
                    }
                    $errs[self::FIELD_PACKAGED_MEDICINAL_PRODUCT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INGREDIENT])) {
            $v = $this->getIngredient();
            foreach($validationRules[self::FIELD_INGREDIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_INGREDIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INGREDIENT])) {
                        $errs[self::FIELD_INGREDIENT] = [];
                    }
                    $errs[self::FIELD_INGREDIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPURITY])) {
            $v = $this->getImpurity();
            foreach($validationRules[self::FIELD_IMPURITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_IMPURITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPURITY])) {
                        $errs[self::FIELD_IMPURITY] = [];
                    }
                    $errs[self::FIELD_IMPURITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ATTACHED_DOCUMENT])) {
            $v = $this->getAttachedDocument();
            foreach($validationRules[self::FIELD_ATTACHED_DOCUMENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_ATTACHED_DOCUMENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ATTACHED_DOCUMENT])) {
                        $errs[self::FIELD_ATTACHED_DOCUMENT] = [];
                    }
                    $errs[self::FIELD_ATTACHED_DOCUMENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MASTER_FILE])) {
            $v = $this->getMasterFile();
            foreach($validationRules[self::FIELD_MASTER_FILE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_MASTER_FILE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MASTER_FILE])) {
                        $errs[self::FIELD_MASTER_FILE] = [];
                    }
                    $errs[self::FIELD_MASTER_FILE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTACT])) {
            $v = $this->getContact();
            foreach($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTACT])) {
                        $errs[self::FIELD_CONTACT] = [];
                    }
                    $errs[self::FIELD_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLINICAL_TRIAL])) {
            $v = $this->getClinicalTrial();
            foreach($validationRules[self::FIELD_CLINICAL_TRIAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_CLINICAL_TRIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLINICAL_TRIAL])) {
                        $errs[self::FIELD_CLINICAL_TRIAL] = [];
                    }
                    $errs[self::FIELD_CLINICAL_TRIAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CROSS_REFERENCE])) {
            $v = $this->getCrossReference();
            foreach($validationRules[self::FIELD_CROSS_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_CROSS_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CROSS_REFERENCE])) {
                        $errs[self::FIELD_CROSS_REFERENCE] = [];
                    }
                    $errs[self::FIELD_CROSS_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_OPERATION])) {
            $v = $this->getOperation();
            foreach($validationRules[self::FIELD_OPERATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_OPERATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_OPERATION])) {
                        $errs[self::FIELD_OPERATION] = [];
                    }
                    $errs[self::FIELD_OPERATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CHARACTERISTIC])) {
            $v = $this->getCharacteristic();
            foreach($validationRules[self::FIELD_CHARACTERISTIC] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICINAL_PRODUCT_DEFINITION, self::FIELD_CHARACTERISTIC, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CHARACTERISTIC])) {
                        $errs[self::FIELD_CHARACTERISTIC] = [];
                    }
                    $errs[self::FIELD_CHARACTERISTIC][$rule] = $err;
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
     * @param null|\RistekUSDI\FHIR\R4B\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDefinition $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDefinition
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
                throw new \DomainException(sprintf('FHIRMedicinalProductDefinition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicinalProductDefinition::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRMedicinalProductDefinition(null);
        } elseif (!is_object($type) || !($type instanceof FHIRMedicinalProductDefinition)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicinalProductDefinition::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRResource\FHIRDomainResource\FHIRMedicinalProductDefinition or null, %s seen.',
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
            } elseif (self::FIELD_DOMAIN === $n->nodeName) {
                $type->setDomain(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_VERSION === $n->nodeName) {
                $type->setVersion(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS_DATE === $n->nodeName) {
                $type->setStatusDate(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM === $n->nodeName) {
                $type->setCombinedPharmaceuticalDoseForm(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ROUTE === $n->nodeName) {
                $type->addRoute(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_INDICATION === $n->nodeName) {
                $type->setIndication(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_LEGAL_STATUS_OF_SUPPLY === $n->nodeName) {
                $type->setLegalStatusOfSupply(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ADDITIONAL_MONITORING_INDICATOR === $n->nodeName) {
                $type->setAdditionalMonitoringIndicator(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_SPECIAL_MEASURES === $n->nodeName) {
                $type->addSpecialMeasures(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PEDIATRIC_USE_INDICATOR === $n->nodeName) {
                $type->setPediatricUseIndicator(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CLASSIFICATION === $n->nodeName) {
                $type->addClassification(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_MARKETING_STATUS === $n->nodeName) {
                $type->addMarketingStatus(FHIRMarketingStatus::xmlUnserialize($n));
            } elseif (self::FIELD_PACKAGED_MEDICINAL_PRODUCT === $n->nodeName) {
                $type->addPackagedMedicinalProduct(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_INGREDIENT === $n->nodeName) {
                $type->addIngredient(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_IMPURITY === $n->nodeName) {
                $type->addImpurity(FHIRCodeableReference::xmlUnserialize($n));
            } elseif (self::FIELD_ATTACHED_DOCUMENT === $n->nodeName) {
                $type->addAttachedDocument(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_MASTER_FILE === $n->nodeName) {
                $type->addMasterFile(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CONTACT === $n->nodeName) {
                $type->addContact(FHIRMedicinalProductDefinitionContact::xmlUnserialize($n));
            } elseif (self::FIELD_CLINICAL_TRIAL === $n->nodeName) {
                $type->addClinicalTrial(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_CODE === $n->nodeName) {
                $type->addCode(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_NAME === $n->nodeName) {
                $type->addName(FHIRMedicinalProductDefinitionName::xmlUnserialize($n));
            } elseif (self::FIELD_CROSS_REFERENCE === $n->nodeName) {
                $type->addCrossReference(FHIRMedicinalProductDefinitionCrossReference::xmlUnserialize($n));
            } elseif (self::FIELD_OPERATION === $n->nodeName) {
                $type->addOperation(FHIRMedicinalProductDefinitionOperation::xmlUnserialize($n));
            } elseif (self::FIELD_CHARACTERISTIC === $n->nodeName) {
                $type->addCharacteristic(FHIRMedicinalProductDefinitionCharacteristic::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_VERSION);
        if (null !== $n) {
            $pt = $type->getVersion();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setVersion($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_STATUS_DATE);
        if (null !== $n) {
            $pt = $type->getStatusDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setStatusDate($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_INDICATION);
        if (null !== $n) {
            $pt = $type->getIndication();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setIndication($n->nodeValue);
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
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDomain())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DOMAIN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getVersion())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VERSION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStatusDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCombinedPharmaceuticalDoseForm())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getRoute())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ROUTE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getIndication())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INDICATION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLegalStatusOfSupply())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LEGAL_STATUS_OF_SUPPLY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAdditionalMonitoringIndicator())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ADDITIONAL_MONITORING_INDICATOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getSpecialMeasures())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_SPECIAL_MEASURES);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPediatricUseIndicator())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PEDIATRIC_USE_INDICATOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getClassification())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CLASSIFICATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getMarketingStatus())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MARKETING_STATUS);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getPackagedMedicinalProduct())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PACKAGED_MEDICINAL_PRODUCT);
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
        if ([] !== ($vs = $this->getImpurity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_IMPURITY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAttachedDocument())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ATTACHED_DOCUMENT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getMasterFile())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MASTER_FILE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONTACT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getClinicalTrial())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CLINICAL_TRIAL);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CODE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getName())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_NAME);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getCrossReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CROSS_REFERENCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getOperation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_OPERATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getCharacteristic())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CHARACTERISTIC);
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
        if (null !== ($v = $this->getDomain())) {
            $out->{self::FIELD_DOMAIN} = $v;
        }
        if (null !== ($v = $this->getVersion())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VERSION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VERSION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $out->{self::FIELD_STATUS} = $v;
        }
        if (null !== ($v = $this->getStatusDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_DATE_EXT} = $ext;
            }
        }
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
        if (null !== ($v = $this->getCombinedPharmaceuticalDoseForm())) {
            $out->{self::FIELD_COMBINED_PHARMACEUTICAL_DOSE_FORM} = $v;
        }
        if ([] !== ($vs = $this->getRoute())) {
            $out->{self::FIELD_ROUTE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ROUTE}[] = $v;
            }
        }
        if (null !== ($v = $this->getIndication())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INDICATION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INDICATION_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLegalStatusOfSupply())) {
            $out->{self::FIELD_LEGAL_STATUS_OF_SUPPLY} = $v;
        }
        if (null !== ($v = $this->getAdditionalMonitoringIndicator())) {
            $out->{self::FIELD_ADDITIONAL_MONITORING_INDICATOR} = $v;
        }
        if ([] !== ($vs = $this->getSpecialMeasures())) {
            $out->{self::FIELD_SPECIAL_MEASURES} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_SPECIAL_MEASURES}[] = $v;
            }
        }
        if (null !== ($v = $this->getPediatricUseIndicator())) {
            $out->{self::FIELD_PEDIATRIC_USE_INDICATOR} = $v;
        }
        if ([] !== ($vs = $this->getClassification())) {
            $out->{self::FIELD_CLASSIFICATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CLASSIFICATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getMarketingStatus())) {
            $out->{self::FIELD_MARKETING_STATUS} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MARKETING_STATUS}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPackagedMedicinalProduct())) {
            $out->{self::FIELD_PACKAGED_MEDICINAL_PRODUCT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PACKAGED_MEDICINAL_PRODUCT}[] = $v;
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
        if ([] !== ($vs = $this->getImpurity())) {
            $out->{self::FIELD_IMPURITY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IMPURITY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAttachedDocument())) {
            $out->{self::FIELD_ATTACHED_DOCUMENT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ATTACHED_DOCUMENT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getMasterFile())) {
            $out->{self::FIELD_MASTER_FILE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_MASTER_FILE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            $out->{self::FIELD_CONTACT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONTACT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getClinicalTrial())) {
            $out->{self::FIELD_CLINICAL_TRIAL} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CLINICAL_TRIAL}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            $out->{self::FIELD_CODE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CODE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getName())) {
            $out->{self::FIELD_NAME} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_NAME}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCrossReference())) {
            $out->{self::FIELD_CROSS_REFERENCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CROSS_REFERENCE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getOperation())) {
            $out->{self::FIELD_OPERATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_OPERATION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCharacteristic())) {
            $out->{self::FIELD_CHARACTERISTIC} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CHARACTERISTIC}[] = $v;
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