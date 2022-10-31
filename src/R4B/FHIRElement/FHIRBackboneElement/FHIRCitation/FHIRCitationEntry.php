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

use RistekUSDI\FHIR\R4B\FHIRElement\FHIRAddress;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBoolean;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRContactPoint;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRExtension;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRHumanName;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRPositiveInt;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRString;
use RistekUSDI\FHIR\R4B\FHIRStringPrimitive;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 *
 * Class FHIRCitationEntry
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation
 */
class FHIRCitationEntry extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY;
    const FIELD_NAME = 'name';
    const FIELD_INITIALS = 'initials';
    const FIELD_INITIALS_EXT = '_initials';
    const FIELD_COLLECTIVE_NAME = 'collectiveName';
    const FIELD_COLLECTIVE_NAME_EXT = '_collectiveName';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_AFFILIATION_INFO = 'affiliationInfo';
    const FIELD_ADDRESS = 'address';
    const FIELD_TELECOM = 'telecom';
    const FIELD_CONTRIBUTION_TYPE = 'contributionType';
    const FIELD_ROLE = 'role';
    const FIELD_CONTRIBUTION_INSTANCE = 'contributionInstance';
    const FIELD_CORRESPONDING_CONTACT = 'correspondingContact';
    const FIELD_CORRESPONDING_CONTACT_EXT = '_correspondingContact';
    const FIELD_LIST_ORDER = 'listOrder';
    const FIELD_LIST_ORDER_EXT = '_listOrder';

    /** @var string */
    private $_xmlns = '';

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name associated with the individual.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRHumanName
     */
    protected ?FHIRHumanName $name = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Initials for forename.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $initials = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for collective or corporate name as an author.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $collectiveName = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique person identifier.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier[]
     */
    protected ?array $identifier = [];

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Organization affiliated with the entity.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAffiliationInfo[]
     */
    protected ?array $affiliationInfo = [];

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical mailing address for the author or contributor.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRAddress[]
     */
    protected ?array $address = [];

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Email or telephone contact methods for the author or contributor.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRContactPoint[]
     */
    protected ?array $telecom = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element identifies the specific nature of an individual’s contribution
     * with respect to the cited work.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected ?array $contributionType = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The role of the contributor (e.g. author, editor, reviewer).
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    protected ?FHIRCodeableConcept $role = null;

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Contributions with accounting for time or number.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance[]
     */
    protected ?array $contributionInstance = [];

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication of which contributor is the corresponding contributor for the role.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRBooleanPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBoolean
     */
    protected ?FHIRBoolean $correspondingContact = null;

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Used to code order of authors.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRPositiveIntPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRPositiveInt
     */
    protected ?FHIRPositiveInt $listOrder = null;

    /**
     * Validation map for fields in type Citation.Entry
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRCitationEntry Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCitationEntry::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_NAME])) {
            if ($data[self::FIELD_NAME] instanceof FHIRHumanName) {
                $this->setName($data[self::FIELD_NAME]);
            } else {
                $this->setName(new FHIRHumanName($data[self::FIELD_NAME]));
            }
        }
        if (isset($data[self::FIELD_INITIALS]) || isset($data[self::FIELD_INITIALS_EXT])) {
            $value = $data[self::FIELD_INITIALS] ?? null;
            $ext = (isset($data[self::FIELD_INITIALS_EXT]) && is_array($data[self::FIELD_INITIALS_EXT])) ? $data[self::FIELD_INITIALS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setInitials($value);
                } else if (is_array($value)) {
                    $this->setInitials(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setInitials(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setInitials(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_COLLECTIVE_NAME]) || isset($data[self::FIELD_COLLECTIVE_NAME_EXT])) {
            $value = $data[self::FIELD_COLLECTIVE_NAME] ?? null;
            $ext = (isset($data[self::FIELD_COLLECTIVE_NAME_EXT]) && is_array($data[self::FIELD_COLLECTIVE_NAME_EXT])) ? $data[self::FIELD_COLLECTIVE_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setCollectiveName($value);
                } else if (is_array($value)) {
                    $this->setCollectiveName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setCollectiveName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCollectiveName(new FHIRString($ext));
            }
        }
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
        if (isset($data[self::FIELD_AFFILIATION_INFO])) {
            if (is_array($data[self::FIELD_AFFILIATION_INFO])) {
                foreach($data[self::FIELD_AFFILIATION_INFO] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCitationAffiliationInfo) {
                        $this->addAffiliationInfo($v);
                    } else {
                        $this->addAffiliationInfo(new FHIRCitationAffiliationInfo($v));
                    }
                }
            } elseif ($data[self::FIELD_AFFILIATION_INFO] instanceof FHIRCitationAffiliationInfo) {
                $this->addAffiliationInfo($data[self::FIELD_AFFILIATION_INFO]);
            } else {
                $this->addAffiliationInfo(new FHIRCitationAffiliationInfo($data[self::FIELD_AFFILIATION_INFO]));
            }
        }
        if (isset($data[self::FIELD_ADDRESS])) {
            if (is_array($data[self::FIELD_ADDRESS])) {
                foreach($data[self::FIELD_ADDRESS] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAddress) {
                        $this->addAddress($v);
                    } else {
                        $this->addAddress(new FHIRAddress($v));
                    }
                }
            } elseif ($data[self::FIELD_ADDRESS] instanceof FHIRAddress) {
                $this->addAddress($data[self::FIELD_ADDRESS]);
            } else {
                $this->addAddress(new FHIRAddress($data[self::FIELD_ADDRESS]));
            }
        }
        if (isset($data[self::FIELD_TELECOM])) {
            if (is_array($data[self::FIELD_TELECOM])) {
                foreach($data[self::FIELD_TELECOM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContactPoint) {
                        $this->addTelecom($v);
                    } else {
                        $this->addTelecom(new FHIRContactPoint($v));
                    }
                }
            } elseif ($data[self::FIELD_TELECOM] instanceof FHIRContactPoint) {
                $this->addTelecom($data[self::FIELD_TELECOM]);
            } else {
                $this->addTelecom(new FHIRContactPoint($data[self::FIELD_TELECOM]));
            }
        }
        if (isset($data[self::FIELD_CONTRIBUTION_TYPE])) {
            if (is_array($data[self::FIELD_CONTRIBUTION_TYPE])) {
                foreach($data[self::FIELD_CONTRIBUTION_TYPE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addContributionType($v);
                    } else {
                        $this->addContributionType(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTRIBUTION_TYPE] instanceof FHIRCodeableConcept) {
                $this->addContributionType($data[self::FIELD_CONTRIBUTION_TYPE]);
            } else {
                $this->addContributionType(new FHIRCodeableConcept($data[self::FIELD_CONTRIBUTION_TYPE]));
            }
        }
        if (isset($data[self::FIELD_ROLE])) {
            if ($data[self::FIELD_ROLE] instanceof FHIRCodeableConcept) {
                $this->setRole($data[self::FIELD_ROLE]);
            } else {
                $this->setRole(new FHIRCodeableConcept($data[self::FIELD_ROLE]));
            }
        }
        if (isset($data[self::FIELD_CONTRIBUTION_INSTANCE])) {
            if (is_array($data[self::FIELD_CONTRIBUTION_INSTANCE])) {
                foreach($data[self::FIELD_CONTRIBUTION_INSTANCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCitationContributionInstance) {
                        $this->addContributionInstance($v);
                    } else {
                        $this->addContributionInstance(new FHIRCitationContributionInstance($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTRIBUTION_INSTANCE] instanceof FHIRCitationContributionInstance) {
                $this->addContributionInstance($data[self::FIELD_CONTRIBUTION_INSTANCE]);
            } else {
                $this->addContributionInstance(new FHIRCitationContributionInstance($data[self::FIELD_CONTRIBUTION_INSTANCE]));
            }
        }
        if (isset($data[self::FIELD_CORRESPONDING_CONTACT]) || isset($data[self::FIELD_CORRESPONDING_CONTACT_EXT])) {
            $value = $data[self::FIELD_CORRESPONDING_CONTACT] ?? null;
            $ext = (isset($data[self::FIELD_CORRESPONDING_CONTACT_EXT]) && is_array($data[self::FIELD_CORRESPONDING_CONTACT_EXT])) ? $data[self::FIELD_CORRESPONDING_CONTACT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setCorrespondingContact($value);
                } else if (is_array($value)) {
                    $this->setCorrespondingContact(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setCorrespondingContact(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCorrespondingContact(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_LIST_ORDER]) || isset($data[self::FIELD_LIST_ORDER_EXT])) {
            $value = $data[self::FIELD_LIST_ORDER] ?? null;
            $ext = (isset($data[self::FIELD_LIST_ORDER_EXT]) && is_array($data[self::FIELD_LIST_ORDER_EXT])) ? $data[self::FIELD_LIST_ORDER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPositiveInt) {
                    $this->setListOrder($value);
                } else if (is_array($value)) {
                    $this->setListOrder(new FHIRPositiveInt(array_merge($ext, $value)));
                } else {
                    $this->setListOrder(new FHIRPositiveInt([FHIRPositiveInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setListOrder(new FHIRPositiveInt($ext));
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
        return "<CitationEntry{$xmlns}></CitationEntry>";
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name associated with the individual.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRHumanName
     */
    public function getName(): ?FHIRHumanName
    {
        return $this->name;
    }

    /**
     * A human's name with the ability to identify parts and usage.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A name associated with the individual.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRHumanName $name
     * @return static
     */
    public function setName(?FHIRHumanName $name = null): object
    {
        $this->_trackValueSet($this->name, $name);
        $this->name = $name;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Initials for forename.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getInitials(): ?FHIRString
    {
        return $this->initials;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Initials for forename.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $initials
     * @return static
     */
    public function setInitials($initials = null): object
    {
        if (null !== $initials && !($initials instanceof FHIRString)) {
            $initials = new FHIRString($initials);
        }
        $this->_trackValueSet($this->initials, $initials);
        $this->initials = $initials;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for collective or corporate name as an author.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getCollectiveName(): ?FHIRString
    {
        return $this->collectiveName;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for collective or corporate name as an author.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $collectiveName
     * @return static
     */
    public function setCollectiveName($collectiveName = null): object
    {
        if (null !== $collectiveName && !($collectiveName instanceof FHIRString)) {
            $collectiveName = new FHIRString($collectiveName);
        }
        $this->_trackValueSet($this->collectiveName, $collectiveName);
        $this->collectiveName = $collectiveName;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Unique person identifier.
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
     * Unique person identifier.
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
     * Unique person identifier.
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
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Organization affiliated with the entity.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAffiliationInfo[]
     */
    public function getAffiliationInfo(): ?array
    {
        return $this->affiliationInfo;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Organization affiliated with the entity.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAffiliationInfo $affiliationInfo
     * @return static
     */
    public function addAffiliationInfo(?FHIRCitationAffiliationInfo $affiliationInfo = null): object
    {
        $this->_trackValueAdded();
        $this->affiliationInfo[] = $affiliationInfo;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Organization affiliated with the entity.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAffiliationInfo[] $affiliationInfo
     * @return static
     */
    public function setAffiliationInfo(array $affiliationInfo = []): object
    {
        if ([] !== $this->affiliationInfo) {
            $this->_trackValuesRemoved(count($this->affiliationInfo));
            $this->affiliationInfo = [];
        }
        if ([] === $affiliationInfo) {
            return $this;
        }
        foreach($affiliationInfo as $v) {
            if ($v instanceof FHIRCitationAffiliationInfo) {
                $this->addAffiliationInfo($v);
            } else {
                $this->addAffiliationInfo(new FHIRCitationAffiliationInfo($v));
            }
        }
        return $this;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical mailing address for the author or contributor.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRAddress[]
     */
    public function getAddress(): ?array
    {
        return $this->address;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical mailing address for the author or contributor.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRAddress $address
     * @return static
     */
    public function addAddress(?FHIRAddress $address = null): object
    {
        $this->_trackValueAdded();
        $this->address[] = $address;
        return $this;
    }

    /**
     * An address expressed using postal conventions (as opposed to GPS or other
     * location definition formats). This data type may be used to convey addresses for
     * use in delivering mail as well as for visiting locations which might not be
     * valid for mail delivery. There are a variety of postal address formats defined
     * around the world.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Physical mailing address for the author or contributor.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRAddress[] $address
     * @return static
     */
    public function setAddress(array $address = []): object
    {
        if ([] !== $this->address) {
            $this->_trackValuesRemoved(count($this->address));
            $this->address = [];
        }
        if ([] === $address) {
            return $this;
        }
        foreach($address as $v) {
            if ($v instanceof FHIRAddress) {
                $this->addAddress($v);
            } else {
                $this->addAddress(new FHIRAddress($v));
            }
        }
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Email or telephone contact methods for the author or contributor.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom(): ?array
    {
        return $this->telecom;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Email or telephone contact methods for the author or contributor.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRContactPoint $telecom
     * @return static
     */
    public function addTelecom(?FHIRContactPoint $telecom = null): object
    {
        $this->_trackValueAdded();
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * Details for all kinds of technology mediated contact points for a person or
     * organization, including telephone, email, etc.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Email or telephone contact methods for the author or contributor.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRContactPoint[] $telecom
     * @return static
     */
    public function setTelecom(array $telecom = []): object
    {
        if ([] !== $this->telecom) {
            $this->_trackValuesRemoved(count($this->telecom));
            $this->telecom = [];
        }
        if ([] === $telecom) {
            return $this;
        }
        foreach($telecom as $v) {
            if ($v instanceof FHIRContactPoint) {
                $this->addTelecom($v);
            } else {
                $this->addTelecom(new FHIRContactPoint($v));
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
     * This element identifies the specific nature of an individual’s contribution
     * with respect to the cited work.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getContributionType(): ?array
    {
        return $this->contributionType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element identifies the specific nature of an individual’s contribution
     * with respect to the cited work.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $contributionType
     * @return static
     */
    public function addContributionType(?FHIRCodeableConcept $contributionType = null): object
    {
        $this->_trackValueAdded();
        $this->contributionType[] = $contributionType;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This element identifies the specific nature of an individual’s contribution
     * with respect to the cited work.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[] $contributionType
     * @return static
     */
    public function setContributionType(array $contributionType = []): object
    {
        if ([] !== $this->contributionType) {
            $this->_trackValuesRemoved(count($this->contributionType));
            $this->contributionType = [];
        }
        if ([] === $contributionType) {
            return $this;
        }
        foreach($contributionType as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addContributionType($v);
            } else {
                $this->addContributionType(new FHIRCodeableConcept($v));
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
     * The role of the contributor (e.g. author, editor, reviewer).
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept
     */
    public function getRole(): ?FHIRCodeableConcept
    {
        return $this->role;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The role of the contributor (e.g. author, editor, reviewer).
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $role
     * @return static
     */
    public function setRole(?FHIRCodeableConcept $role = null): object
    {
        $this->_trackValueSet($this->role, $role);
        $this->role = $role;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Contributions with accounting for time or number.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance[]
     */
    public function getContributionInstance(): ?array
    {
        return $this->contributionInstance;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Contributions with accounting for time or number.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance $contributionInstance
     * @return static
     */
    public function addContributionInstance(?FHIRCitationContributionInstance $contributionInstance = null): object
    {
        $this->_trackValueAdded();
        $this->contributionInstance[] = $contributionInstance;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Contributions with accounting for time or number.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributionInstance[] $contributionInstance
     * @return static
     */
    public function setContributionInstance(array $contributionInstance = []): object
    {
        if ([] !== $this->contributionInstance) {
            $this->_trackValuesRemoved(count($this->contributionInstance));
            $this->contributionInstance = [];
        }
        if ([] === $contributionInstance) {
            return $this;
        }
        foreach($contributionInstance as $v) {
            if ($v instanceof FHIRCitationContributionInstance) {
                $this->addContributionInstance($v);
            } else {
                $this->addContributionInstance(new FHIRCitationContributionInstance($v));
            }
        }
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication of which contributor is the corresponding contributor for the role.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRBooleanPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBoolean
     */
    public function getCorrespondingContact(): ?FHIRBoolean
    {
        return $this->correspondingContact;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indication of which contributor is the corresponding contributor for the role.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRBooleanPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBoolean $correspondingContact
     * @return static
     */
    public function setCorrespondingContact($correspondingContact = null): object
    {
        if (null !== $correspondingContact && !($correspondingContact instanceof FHIRBoolean)) {
            $correspondingContact = new FHIRBoolean($correspondingContact);
        }
        $this->_trackValueSet($this->correspondingContact, $correspondingContact);
        $this->correspondingContact = $correspondingContact;
        return $this;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Used to code order of authors.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRPositiveIntPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRPositiveInt
     */
    public function getListOrder(): ?FHIRPositiveInt
    {
        return $this->listOrder;
    }

    /**
     * An integer with a value that is positive (e.g. >0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Used to code order of authors.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRPositiveIntPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRPositiveInt $listOrder
     * @return static
     */
    public function setListOrder($listOrder = null): object
    {
        if (null !== $listOrder && !($listOrder instanceof FHIRPositiveInt)) {
            $listOrder = new FHIRPositiveInt($listOrder);
        }
        $this->_trackValueSet($this->listOrder, $listOrder);
        $this->listOrder = $listOrder;
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
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getInitials())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INITIALS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCollectiveName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COLLECTIVE_NAME] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAffiliationInfo())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_AFFILIATION_INFO, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAddress())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ADDRESS, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTelecom())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TELECOM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getContributionType())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTRIBUTION_TYPE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRole())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ROLE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContributionInstance())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTRIBUTION_INSTANCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCorrespondingContact())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CORRESPONDING_CONTACT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getListOrder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LIST_ORDER] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIALS])) {
            $v = $this->getInitials();
            foreach($validationRules[self::FIELD_INITIALS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_INITIALS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIALS])) {
                        $errs[self::FIELD_INITIALS] = [];
                    }
                    $errs[self::FIELD_INITIALS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COLLECTIVE_NAME])) {
            $v = $this->getCollectiveName();
            foreach($validationRules[self::FIELD_COLLECTIVE_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_COLLECTIVE_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COLLECTIVE_NAME])) {
                        $errs[self::FIELD_COLLECTIVE_NAME] = [];
                    }
                    $errs[self::FIELD_COLLECTIVE_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AFFILIATION_INFO])) {
            $v = $this->getAffiliationInfo();
            foreach($validationRules[self::FIELD_AFFILIATION_INFO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_AFFILIATION_INFO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AFFILIATION_INFO])) {
                        $errs[self::FIELD_AFFILIATION_INFO] = [];
                    }
                    $errs[self::FIELD_AFFILIATION_INFO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ADDRESS])) {
            $v = $this->getAddress();
            foreach($validationRules[self::FIELD_ADDRESS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_ADDRESS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ADDRESS])) {
                        $errs[self::FIELD_ADDRESS] = [];
                    }
                    $errs[self::FIELD_ADDRESS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TELECOM])) {
            $v = $this->getTelecom();
            foreach($validationRules[self::FIELD_TELECOM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_TELECOM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TELECOM])) {
                        $errs[self::FIELD_TELECOM] = [];
                    }
                    $errs[self::FIELD_TELECOM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRIBUTION_TYPE])) {
            $v = $this->getContributionType();
            foreach($validationRules[self::FIELD_CONTRIBUTION_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_CONTRIBUTION_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRIBUTION_TYPE])) {
                        $errs[self::FIELD_CONTRIBUTION_TYPE] = [];
                    }
                    $errs[self::FIELD_CONTRIBUTION_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ROLE])) {
            $v = $this->getRole();
            foreach($validationRules[self::FIELD_ROLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_ROLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ROLE])) {
                        $errs[self::FIELD_ROLE] = [];
                    }
                    $errs[self::FIELD_ROLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRIBUTION_INSTANCE])) {
            $v = $this->getContributionInstance();
            foreach($validationRules[self::FIELD_CONTRIBUTION_INSTANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_CONTRIBUTION_INSTANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRIBUTION_INSTANCE])) {
                        $errs[self::FIELD_CONTRIBUTION_INSTANCE] = [];
                    }
                    $errs[self::FIELD_CONTRIBUTION_INSTANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CORRESPONDING_CONTACT])) {
            $v = $this->getCorrespondingContact();
            foreach($validationRules[self::FIELD_CORRESPONDING_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_CORRESPONDING_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CORRESPONDING_CONTACT])) {
                        $errs[self::FIELD_CORRESPONDING_CONTACT] = [];
                    }
                    $errs[self::FIELD_CORRESPONDING_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LIST_ORDER])) {
            $v = $this->getListOrder();
            foreach($validationRules[self::FIELD_LIST_ORDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_ENTRY, self::FIELD_LIST_ORDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LIST_ORDER])) {
                        $errs[self::FIELD_LIST_ORDER] = [];
                    }
                    $errs[self::FIELD_LIST_ORDER][$rule] = $err;
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
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry
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
                throw new \DomainException(sprintf('FHIRCitationEntry::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCitationEntry::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRCitationEntry(null);
        } elseif (!is_object($type) || !($type instanceof FHIRCitationEntry)) {
            throw new \RuntimeException(sprintf(
                'FHIRCitationEntry::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationEntry or null, %s seen.',
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
            if (self::FIELD_NAME === $n->nodeName) {
                $type->setName(FHIRHumanName::xmlUnserialize($n));
            } elseif (self::FIELD_INITIALS === $n->nodeName) {
                $type->setInitials(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_COLLECTIVE_NAME === $n->nodeName) {
                $type->setCollectiveName(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_IDENTIFIER === $n->nodeName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_AFFILIATION_INFO === $n->nodeName) {
                $type->addAffiliationInfo(FHIRCitationAffiliationInfo::xmlUnserialize($n));
            } elseif (self::FIELD_ADDRESS === $n->nodeName) {
                $type->addAddress(FHIRAddress::xmlUnserialize($n));
            } elseif (self::FIELD_TELECOM === $n->nodeName) {
                $type->addTelecom(FHIRContactPoint::xmlUnserialize($n));
            } elseif (self::FIELD_CONTRIBUTION_TYPE === $n->nodeName) {
                $type->addContributionType(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ROLE === $n->nodeName) {
                $type->setRole(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_CONTRIBUTION_INSTANCE === $n->nodeName) {
                $type->addContributionInstance(FHIRCitationContributionInstance::xmlUnserialize($n));
            } elseif (self::FIELD_CORRESPONDING_CONTACT === $n->nodeName) {
                $type->setCorrespondingContact(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_LIST_ORDER === $n->nodeName) {
                $type->setListOrder(FHIRPositiveInt::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_INITIALS);
        if (null !== $n) {
            $pt = $type->getInitials();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setInitials($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_COLLECTIVE_NAME);
        if (null !== $n) {
            $pt = $type->getCollectiveName();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCollectiveName($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CORRESPONDING_CONTACT);
        if (null !== $n) {
            $pt = $type->getCorrespondingContact();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCorrespondingContact($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LIST_ORDER);
        if (null !== $n) {
            $pt = $type->getListOrder();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setListOrder($n->nodeValue);
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
        if (null !== ($v = $this->getName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getInitials())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_INITIALS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCollectiveName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COLLECTIVE_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
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
        if ([] !== ($vs = $this->getAffiliationInfo())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_AFFILIATION_INFO);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAddress())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ADDRESS);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getTelecom())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TELECOM);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getContributionType())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONTRIBUTION_TYPE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getRole())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ROLE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getContributionInstance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONTRIBUTION_INSTANCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getCorrespondingContact())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CORRESPONDING_CONTACT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getListOrder())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LIST_ORDER);
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
        if (null !== ($v = $this->getName())) {
            $out->{self::FIELD_NAME} = $v;
        }
        if (null !== ($v = $this->getInitials())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_INITIALS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_INITIALS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCollectiveName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COLLECTIVE_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COLLECTIVE_NAME_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAffiliationInfo())) {
            $out->{self::FIELD_AFFILIATION_INFO} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_AFFILIATION_INFO}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAddress())) {
            $out->{self::FIELD_ADDRESS} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ADDRESS}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getTelecom())) {
            $out->{self::FIELD_TELECOM} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_TELECOM}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getContributionType())) {
            $out->{self::FIELD_CONTRIBUTION_TYPE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONTRIBUTION_TYPE}[] = $v;
            }
        }
        if (null !== ($v = $this->getRole())) {
            $out->{self::FIELD_ROLE} = $v;
        }
        if ([] !== ($vs = $this->getContributionInstance())) {
            $out->{self::FIELD_CONTRIBUTION_INSTANCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONTRIBUTION_INSTANCE}[] = $v;
            }
        }
        if (null !== ($v = $this->getCorrespondingContact())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CORRESPONDING_CONTACT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CORRESPONDING_CONTACT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getListOrder())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LIST_ORDER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPositiveInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LIST_ORDER_EXT} = $ext;
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