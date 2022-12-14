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

use RistekUSDI\FHIR\R4B\FHIRElement\FHIRAnnotation;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRDateTime;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRExtension;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier;
use RistekUSDI\FHIR\R4B\FHIRStringPrimitive;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;

/**
 * The Citation Resource enables reference to any knowledge artifact for purposes
 * of identification and attribution. The Citation Resource supports existing
 * reference structures and developing publication practices such as versioning,
 * expressing complex contributorship roles, and referencing computable resources.
 *
 * Class FHIRCitationCitedArtifact
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation
 */
class FHIRCitationCitedArtifact extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT;
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_RELATED_IDENTIFIER = 'relatedIdentifier';
    const FIELD_DATE_ACCESSED = 'dateAccessed';
    const FIELD_DATE_ACCESSED_EXT = '_dateAccessed';
    const FIELD_VERSION = 'version';
    const FIELD_CURRENT_STATE = 'currentState';
    const FIELD_STATUS_DATE = 'statusDate';
    const FIELD_TITLE = 'title';
    const FIELD_ABSTRACT = 'abstract';
    const FIELD_PART = 'part';
    const FIELD_RELATES_TO = 'relatesTo';
    const FIELD_PUBLICATION_FORM = 'publicationForm';
    const FIELD_WEB_LOCATION = 'webLocation';
    const FIELD_CLASSIFICATION = 'classification';
    const FIELD_CONTRIBUTORSHIP = 'contributorship';
    const FIELD_NOTE = 'note';

    /** @var string */
    private $_xmlns = '';

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this citation when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier[]
     */
    protected ?array $identifier = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify things closely related to this
     * citation.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier[]
     */
    protected ?array $relatedIdentifier = [];

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the cited artifact was accessed.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRDateTimePrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDateTime
     */
    protected ?FHIRDateTime $dateAccessed = null;

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The defined version of the cited artifact.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationVersion
     */
    protected ?FHIRCitationVersion $version = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the cited artifact.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected ?array $currentState = [];

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * An effective date or period for a status of the cited artifact.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationStatusDate1[]
     */
    protected ?array $statusDate = [];

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The title details of the article or artifact.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationTitle[]
     */
    protected ?array $title = [];

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Summary of the article or artifact.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAbstract[]
     */
    protected ?array $abstract = [];

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The component of the article or artifact.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPart
     */
    protected ?FHIRCitationPart $part = null;

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The artifact related to the cited artifact.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo1[]
     */
    protected ?array $relatesTo = [];

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * If multiple, used to represent alternative forms of the article that are not
     * separate citations.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm[]
     */
    protected ?array $publicationForm = [];

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Used for any URL for the article or artifact cited.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWebLocation[]
     */
    protected ?array $webLocation = [];

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The assignment to an organizing scheme.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationClassification1[]
     */
    protected ?array $classification = [];

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * This element is used to list authors and other contributors, their contact
     * information, specific contributions, and summary statements.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributorship
     */
    protected ?FHIRCitationContributorship $contributorship = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any additional information or content for the article or artifact.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRAnnotation[]
     */
    protected ?array $note = [];

    /**
     * Validation map for fields in type Citation.CitedArtifact
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRCitationCitedArtifact Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCitationCitedArtifact::_construct - $data expected to be null or array, %s seen',
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
        if (isset($data[self::FIELD_RELATED_IDENTIFIER])) {
            if (is_array($data[self::FIELD_RELATED_IDENTIFIER])) {
                foreach($data[self::FIELD_RELATED_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addRelatedIdentifier($v);
                    } else {
                        $this->addRelatedIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_RELATED_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addRelatedIdentifier($data[self::FIELD_RELATED_IDENTIFIER]);
            } else {
                $this->addRelatedIdentifier(new FHIRIdentifier($data[self::FIELD_RELATED_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_DATE_ACCESSED]) || isset($data[self::FIELD_DATE_ACCESSED_EXT])) {
            $value = $data[self::FIELD_DATE_ACCESSED] ?? null;
            $ext = (isset($data[self::FIELD_DATE_ACCESSED_EXT]) && is_array($data[self::FIELD_DATE_ACCESSED_EXT])) ? $data[self::FIELD_DATE_ACCESSED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDateAccessed($value);
                } else if (is_array($value)) {
                    $this->setDateAccessed(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDateAccessed(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDateAccessed(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_VERSION])) {
            if ($data[self::FIELD_VERSION] instanceof FHIRCitationVersion) {
                $this->setVersion($data[self::FIELD_VERSION]);
            } else {
                $this->setVersion(new FHIRCitationVersion($data[self::FIELD_VERSION]));
            }
        }
        if (isset($data[self::FIELD_CURRENT_STATE])) {
            if (is_array($data[self::FIELD_CURRENT_STATE])) {
                foreach($data[self::FIELD_CURRENT_STATE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCurrentState($v);
                    } else {
                        $this->addCurrentState(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CURRENT_STATE] instanceof FHIRCodeableConcept) {
                $this->addCurrentState($data[self::FIELD_CURRENT_STATE]);
            } else {
                $this->addCurrentState(new FHIRCodeableConcept($data[self::FIELD_CURRENT_STATE]));
            }
        }
        if (isset($data[self::FIELD_STATUS_DATE])) {
            if (is_array($data[self::FIELD_STATUS_DATE])) {
                foreach($data[self::FIELD_STATUS_DATE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCitationStatusDate1) {
                        $this->addStatusDate($v);
                    } else {
                        $this->addStatusDate(new FHIRCitationStatusDate1($v));
                    }
                }
            } elseif ($data[self::FIELD_STATUS_DATE] instanceof FHIRCitationStatusDate1) {
                $this->addStatusDate($data[self::FIELD_STATUS_DATE]);
            } else {
                $this->addStatusDate(new FHIRCitationStatusDate1($data[self::FIELD_STATUS_DATE]));
            }
        }
        if (isset($data[self::FIELD_TITLE])) {
            if (is_array($data[self::FIELD_TITLE])) {
                foreach($data[self::FIELD_TITLE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCitationTitle) {
                        $this->addTitle($v);
                    } else {
                        $this->addTitle(new FHIRCitationTitle($v));
                    }
                }
            } elseif ($data[self::FIELD_TITLE] instanceof FHIRCitationTitle) {
                $this->addTitle($data[self::FIELD_TITLE]);
            } else {
                $this->addTitle(new FHIRCitationTitle($data[self::FIELD_TITLE]));
            }
        }
        if (isset($data[self::FIELD_ABSTRACT])) {
            if (is_array($data[self::FIELD_ABSTRACT])) {
                foreach($data[self::FIELD_ABSTRACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCitationAbstract) {
                        $this->addAbstract($v);
                    } else {
                        $this->addAbstract(new FHIRCitationAbstract($v));
                    }
                }
            } elseif ($data[self::FIELD_ABSTRACT] instanceof FHIRCitationAbstract) {
                $this->addAbstract($data[self::FIELD_ABSTRACT]);
            } else {
                $this->addAbstract(new FHIRCitationAbstract($data[self::FIELD_ABSTRACT]));
            }
        }
        if (isset($data[self::FIELD_PART])) {
            if ($data[self::FIELD_PART] instanceof FHIRCitationPart) {
                $this->setPart($data[self::FIELD_PART]);
            } else {
                $this->setPart(new FHIRCitationPart($data[self::FIELD_PART]));
            }
        }
        if (isset($data[self::FIELD_RELATES_TO])) {
            if (is_array($data[self::FIELD_RELATES_TO])) {
                foreach($data[self::FIELD_RELATES_TO] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCitationRelatesTo1) {
                        $this->addRelatesTo($v);
                    } else {
                        $this->addRelatesTo(new FHIRCitationRelatesTo1($v));
                    }
                }
            } elseif ($data[self::FIELD_RELATES_TO] instanceof FHIRCitationRelatesTo1) {
                $this->addRelatesTo($data[self::FIELD_RELATES_TO]);
            } else {
                $this->addRelatesTo(new FHIRCitationRelatesTo1($data[self::FIELD_RELATES_TO]));
            }
        }
        if (isset($data[self::FIELD_PUBLICATION_FORM])) {
            if (is_array($data[self::FIELD_PUBLICATION_FORM])) {
                foreach($data[self::FIELD_PUBLICATION_FORM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCitationPublicationForm) {
                        $this->addPublicationForm($v);
                    } else {
                        $this->addPublicationForm(new FHIRCitationPublicationForm($v));
                    }
                }
            } elseif ($data[self::FIELD_PUBLICATION_FORM] instanceof FHIRCitationPublicationForm) {
                $this->addPublicationForm($data[self::FIELD_PUBLICATION_FORM]);
            } else {
                $this->addPublicationForm(new FHIRCitationPublicationForm($data[self::FIELD_PUBLICATION_FORM]));
            }
        }
        if (isset($data[self::FIELD_WEB_LOCATION])) {
            if (is_array($data[self::FIELD_WEB_LOCATION])) {
                foreach($data[self::FIELD_WEB_LOCATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCitationWebLocation) {
                        $this->addWebLocation($v);
                    } else {
                        $this->addWebLocation(new FHIRCitationWebLocation($v));
                    }
                }
            } elseif ($data[self::FIELD_WEB_LOCATION] instanceof FHIRCitationWebLocation) {
                $this->addWebLocation($data[self::FIELD_WEB_LOCATION]);
            } else {
                $this->addWebLocation(new FHIRCitationWebLocation($data[self::FIELD_WEB_LOCATION]));
            }
        }
        if (isset($data[self::FIELD_CLASSIFICATION])) {
            if (is_array($data[self::FIELD_CLASSIFICATION])) {
                foreach($data[self::FIELD_CLASSIFICATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCitationClassification1) {
                        $this->addClassification($v);
                    } else {
                        $this->addClassification(new FHIRCitationClassification1($v));
                    }
                }
            } elseif ($data[self::FIELD_CLASSIFICATION] instanceof FHIRCitationClassification1) {
                $this->addClassification($data[self::FIELD_CLASSIFICATION]);
            } else {
                $this->addClassification(new FHIRCitationClassification1($data[self::FIELD_CLASSIFICATION]));
            }
        }
        if (isset($data[self::FIELD_CONTRIBUTORSHIP])) {
            if ($data[self::FIELD_CONTRIBUTORSHIP] instanceof FHIRCitationContributorship) {
                $this->setContributorship($data[self::FIELD_CONTRIBUTORSHIP]);
            } else {
                $this->setContributorship(new FHIRCitationContributorship($data[self::FIELD_CONTRIBUTORSHIP]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
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
        return "<CitationCitedArtifact{$xmlns}></CitationCitedArtifact>";
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this citation when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
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
     * A formal identifier that is used to identify this citation when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
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
     * A formal identifier that is used to identify this citation when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify things closely related to this
     * citation.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier[]
     */
    public function getRelatedIdentifier(): ?array
    {
        return $this->relatedIdentifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify things closely related to this
     * citation.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier $relatedIdentifier
     * @return static
     */
    public function addRelatedIdentifier(?FHIRIdentifier $relatedIdentifier = null): object
    {
        $this->_trackValueAdded();
        $this->relatedIdentifier[] = $relatedIdentifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify things closely related to this
     * citation.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRIdentifier[] $relatedIdentifier
     * @return static
     */
    public function setRelatedIdentifier(array $relatedIdentifier = []): object
    {
        if ([] !== $this->relatedIdentifier) {
            $this->_trackValuesRemoved(count($this->relatedIdentifier));
            $this->relatedIdentifier = [];
        }
        if ([] === $relatedIdentifier) {
            return $this;
        }
        foreach($relatedIdentifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addRelatedIdentifier($v);
            } else {
                $this->addRelatedIdentifier(new FHIRIdentifier($v));
            }
        }
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
     * When the cited artifact was accessed.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRDateTimePrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDateTime
     */
    public function getDateAccessed(): ?FHIRDateTime
    {
        return $this->dateAccessed;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the cited artifact was accessed.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRDateTimePrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDateTime $dateAccessed
     * @return static
     */
    public function setDateAccessed($dateAccessed = null): object
    {
        if (null !== $dateAccessed && !($dateAccessed instanceof FHIRDateTime)) {
            $dateAccessed = new FHIRDateTime($dateAccessed);
        }
        $this->_trackValueSet($this->dateAccessed, $dateAccessed);
        $this->dateAccessed = $dateAccessed;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The defined version of the cited artifact.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationVersion
     */
    public function getVersion(): ?FHIRCitationVersion
    {
        return $this->version;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The defined version of the cited artifact.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationVersion $version
     * @return static
     */
    public function setVersion(?FHIRCitationVersion $version = null): object
    {
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
     * The status of the cited artifact.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCurrentState(): ?array
    {
        return $this->currentState;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the cited artifact.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $currentState
     * @return static
     */
    public function addCurrentState(?FHIRCodeableConcept $currentState = null): object
    {
        $this->_trackValueAdded();
        $this->currentState[] = $currentState;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The status of the cited artifact.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[] $currentState
     * @return static
     */
    public function setCurrentState(array $currentState = []): object
    {
        if ([] !== $this->currentState) {
            $this->_trackValuesRemoved(count($this->currentState));
            $this->currentState = [];
        }
        if ([] === $currentState) {
            return $this;
        }
        foreach($currentState as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCurrentState($v);
            } else {
                $this->addCurrentState(new FHIRCodeableConcept($v));
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
     * An effective date or period for a status of the cited artifact.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationStatusDate1[]
     */
    public function getStatusDate(): ?array
    {
        return $this->statusDate;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * An effective date or period for a status of the cited artifact.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationStatusDate1 $statusDate
     * @return static
     */
    public function addStatusDate(?FHIRCitationStatusDate1 $statusDate = null): object
    {
        $this->_trackValueAdded();
        $this->statusDate[] = $statusDate;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * An effective date or period for a status of the cited artifact.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationStatusDate1[] $statusDate
     * @return static
     */
    public function setStatusDate(array $statusDate = []): object
    {
        if ([] !== $this->statusDate) {
            $this->_trackValuesRemoved(count($this->statusDate));
            $this->statusDate = [];
        }
        if ([] === $statusDate) {
            return $this;
        }
        foreach($statusDate as $v) {
            if ($v instanceof FHIRCitationStatusDate1) {
                $this->addStatusDate($v);
            } else {
                $this->addStatusDate(new FHIRCitationStatusDate1($v));
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
     * The title details of the article or artifact.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationTitle[]
     */
    public function getTitle(): ?array
    {
        return $this->title;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The title details of the article or artifact.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationTitle $title
     * @return static
     */
    public function addTitle(?FHIRCitationTitle $title = null): object
    {
        $this->_trackValueAdded();
        $this->title[] = $title;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The title details of the article or artifact.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationTitle[] $title
     * @return static
     */
    public function setTitle(array $title = []): object
    {
        if ([] !== $this->title) {
            $this->_trackValuesRemoved(count($this->title));
            $this->title = [];
        }
        if ([] === $title) {
            return $this;
        }
        foreach($title as $v) {
            if ($v instanceof FHIRCitationTitle) {
                $this->addTitle($v);
            } else {
                $this->addTitle(new FHIRCitationTitle($v));
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
     * Summary of the article or artifact.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAbstract[]
     */
    public function getAbstract(): ?array
    {
        return $this->abstract;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Summary of the article or artifact.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAbstract $abstract
     * @return static
     */
    public function addAbstract(?FHIRCitationAbstract $abstract = null): object
    {
        $this->_trackValueAdded();
        $this->abstract[] = $abstract;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Summary of the article or artifact.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationAbstract[] $abstract
     * @return static
     */
    public function setAbstract(array $abstract = []): object
    {
        if ([] !== $this->abstract) {
            $this->_trackValuesRemoved(count($this->abstract));
            $this->abstract = [];
        }
        if ([] === $abstract) {
            return $this;
        }
        foreach($abstract as $v) {
            if ($v instanceof FHIRCitationAbstract) {
                $this->addAbstract($v);
            } else {
                $this->addAbstract(new FHIRCitationAbstract($v));
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
     * The component of the article or artifact.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPart
     */
    public function getPart(): ?FHIRCitationPart
    {
        return $this->part;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The component of the article or artifact.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPart $part
     * @return static
     */
    public function setPart(?FHIRCitationPart $part = null): object
    {
        $this->_trackValueSet($this->part, $part);
        $this->part = $part;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The artifact related to the cited artifact.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo1[]
     */
    public function getRelatesTo(): ?array
    {
        return $this->relatesTo;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The artifact related to the cited artifact.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo1 $relatesTo
     * @return static
     */
    public function addRelatesTo(?FHIRCitationRelatesTo1 $relatesTo = null): object
    {
        $this->_trackValueAdded();
        $this->relatesTo[] = $relatesTo;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The artifact related to the cited artifact.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationRelatesTo1[] $relatesTo
     * @return static
     */
    public function setRelatesTo(array $relatesTo = []): object
    {
        if ([] !== $this->relatesTo) {
            $this->_trackValuesRemoved(count($this->relatesTo));
            $this->relatesTo = [];
        }
        if ([] === $relatesTo) {
            return $this;
        }
        foreach($relatesTo as $v) {
            if ($v instanceof FHIRCitationRelatesTo1) {
                $this->addRelatesTo($v);
            } else {
                $this->addRelatesTo(new FHIRCitationRelatesTo1($v));
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
     * If multiple, used to represent alternative forms of the article that are not
     * separate citations.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm[]
     */
    public function getPublicationForm(): ?array
    {
        return $this->publicationForm;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * If multiple, used to represent alternative forms of the article that are not
     * separate citations.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm $publicationForm
     * @return static
     */
    public function addPublicationForm(?FHIRCitationPublicationForm $publicationForm = null): object
    {
        $this->_trackValueAdded();
        $this->publicationForm[] = $publicationForm;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * If multiple, used to represent alternative forms of the article that are not
     * separate citations.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm[] $publicationForm
     * @return static
     */
    public function setPublicationForm(array $publicationForm = []): object
    {
        if ([] !== $this->publicationForm) {
            $this->_trackValuesRemoved(count($this->publicationForm));
            $this->publicationForm = [];
        }
        if ([] === $publicationForm) {
            return $this;
        }
        foreach($publicationForm as $v) {
            if ($v instanceof FHIRCitationPublicationForm) {
                $this->addPublicationForm($v);
            } else {
                $this->addPublicationForm(new FHIRCitationPublicationForm($v));
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
     * Used for any URL for the article or artifact cited.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWebLocation[]
     */
    public function getWebLocation(): ?array
    {
        return $this->webLocation;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Used for any URL for the article or artifact cited.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWebLocation $webLocation
     * @return static
     */
    public function addWebLocation(?FHIRCitationWebLocation $webLocation = null): object
    {
        $this->_trackValueAdded();
        $this->webLocation[] = $webLocation;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * Used for any URL for the article or artifact cited.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationWebLocation[] $webLocation
     * @return static
     */
    public function setWebLocation(array $webLocation = []): object
    {
        if ([] !== $this->webLocation) {
            $this->_trackValuesRemoved(count($this->webLocation));
            $this->webLocation = [];
        }
        if ([] === $webLocation) {
            return $this;
        }
        foreach($webLocation as $v) {
            if ($v instanceof FHIRCitationWebLocation) {
                $this->addWebLocation($v);
            } else {
                $this->addWebLocation(new FHIRCitationWebLocation($v));
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
     * The assignment to an organizing scheme.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationClassification1[]
     */
    public function getClassification(): ?array
    {
        return $this->classification;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The assignment to an organizing scheme.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationClassification1 $classification
     * @return static
     */
    public function addClassification(?FHIRCitationClassification1 $classification = null): object
    {
        $this->_trackValueAdded();
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The assignment to an organizing scheme.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationClassification1[] $classification
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
            if ($v instanceof FHIRCitationClassification1) {
                $this->addClassification($v);
            } else {
                $this->addClassification(new FHIRCitationClassification1($v));
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
     * This element is used to list authors and other contributors, their contact
     * information, specific contributions, and summary statements.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributorship
     */
    public function getContributorship(): ?FHIRCitationContributorship
    {
        return $this->contributorship;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * This element is used to list authors and other contributors, their contact
     * information, specific contributions, and summary statements.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationContributorship $contributorship
     * @return static
     */
    public function setContributorship(?FHIRCitationContributorship $contributorship = null): object
    {
        $this->_trackValueSet($this->contributorship, $contributorship);
        $this->contributorship = $contributorship;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any additional information or content for the article or artifact.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRAnnotation[]
     */
    public function getNote(): ?array
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any additional information or content for the article or artifact.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(?FHIRAnnotation $note = null): object
    {
        $this->_trackValueAdded();
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Any additional information or content for the article or artifact.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRAnnotation[] $note
     * @return static
     */
    public function setNote(array $note = []): object
    {
        if ([] !== $this->note) {
            $this->_trackValuesRemoved(count($this->note));
            $this->note = [];
        }
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
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
        if ([] !== ($vs = $this->getRelatedIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATED_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDateAccessed())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE_ACCESSED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCurrentState())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CURRENT_STATE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getStatusDate())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_STATUS_DATE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getTitle())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_TITLE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getAbstract())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ABSTRACT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPart())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PART] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getRelatesTo())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_RELATES_TO, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPublicationForm())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PUBLICATION_FORM, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getWebLocation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_WEB_LOCATION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getClassification())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CLASSIFICATION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getContributorship())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTRIBUTORSHIP] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATED_IDENTIFIER])) {
            $v = $this->getRelatedIdentifier();
            foreach($validationRules[self::FIELD_RELATED_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_RELATED_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATED_IDENTIFIER])) {
                        $errs[self::FIELD_RELATED_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_RELATED_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE_ACCESSED])) {
            $v = $this->getDateAccessed();
            foreach($validationRules[self::FIELD_DATE_ACCESSED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_DATE_ACCESSED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE_ACCESSED])) {
                        $errs[self::FIELD_DATE_ACCESSED] = [];
                    }
                    $errs[self::FIELD_DATE_ACCESSED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CURRENT_STATE])) {
            $v = $this->getCurrentState();
            foreach($validationRules[self::FIELD_CURRENT_STATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_CURRENT_STATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CURRENT_STATE])) {
                        $errs[self::FIELD_CURRENT_STATE] = [];
                    }
                    $errs[self::FIELD_CURRENT_STATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_DATE])) {
            $v = $this->getStatusDate();
            foreach($validationRules[self::FIELD_STATUS_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_STATUS_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_DATE])) {
                        $errs[self::FIELD_STATUS_DATE] = [];
                    }
                    $errs[self::FIELD_STATUS_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ABSTRACT])) {
            $v = $this->getAbstract();
            foreach($validationRules[self::FIELD_ABSTRACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_ABSTRACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ABSTRACT])) {
                        $errs[self::FIELD_ABSTRACT] = [];
                    }
                    $errs[self::FIELD_ABSTRACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PART])) {
            $v = $this->getPart();
            foreach($validationRules[self::FIELD_PART] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_PART, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PART])) {
                        $errs[self::FIELD_PART] = [];
                    }
                    $errs[self::FIELD_PART][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATES_TO])) {
            $v = $this->getRelatesTo();
            foreach($validationRules[self::FIELD_RELATES_TO] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_RELATES_TO, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATES_TO])) {
                        $errs[self::FIELD_RELATES_TO] = [];
                    }
                    $errs[self::FIELD_RELATES_TO][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLICATION_FORM])) {
            $v = $this->getPublicationForm();
            foreach($validationRules[self::FIELD_PUBLICATION_FORM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_PUBLICATION_FORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLICATION_FORM])) {
                        $errs[self::FIELD_PUBLICATION_FORM] = [];
                    }
                    $errs[self::FIELD_PUBLICATION_FORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_WEB_LOCATION])) {
            $v = $this->getWebLocation();
            foreach($validationRules[self::FIELD_WEB_LOCATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_WEB_LOCATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_WEB_LOCATION])) {
                        $errs[self::FIELD_WEB_LOCATION] = [];
                    }
                    $errs[self::FIELD_WEB_LOCATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CLASSIFICATION])) {
            $v = $this->getClassification();
            foreach($validationRules[self::FIELD_CLASSIFICATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_CLASSIFICATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CLASSIFICATION])) {
                        $errs[self::FIELD_CLASSIFICATION] = [];
                    }
                    $errs[self::FIELD_CLASSIFICATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTRIBUTORSHIP])) {
            $v = $this->getContributorship();
            foreach($validationRules[self::FIELD_CONTRIBUTORSHIP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_CONTRIBUTORSHIP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTRIBUTORSHIP])) {
                        $errs[self::FIELD_CONTRIBUTORSHIP] = [];
                    }
                    $errs[self::FIELD_CONTRIBUTORSHIP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_CITED_ARTIFACT, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
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
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationCitedArtifact $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationCitedArtifact
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
                throw new \DomainException(sprintf('FHIRCitationCitedArtifact::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCitationCitedArtifact::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRCitationCitedArtifact(null);
        } elseif (!is_object($type) || !($type instanceof FHIRCitationCitedArtifact)) {
            throw new \RuntimeException(sprintf(
                'FHIRCitationCitedArtifact::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationCitedArtifact or null, %s seen.',
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
            } elseif (self::FIELD_RELATED_IDENTIFIER === $n->nodeName) {
                $type->addRelatedIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_DATE_ACCESSED === $n->nodeName) {
                $type->setDateAccessed(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_VERSION === $n->nodeName) {
                $type->setVersion(FHIRCitationVersion::xmlUnserialize($n));
            } elseif (self::FIELD_CURRENT_STATE === $n->nodeName) {
                $type->addCurrentState(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS_DATE === $n->nodeName) {
                $type->addStatusDate(FHIRCitationStatusDate1::xmlUnserialize($n));
            } elseif (self::FIELD_TITLE === $n->nodeName) {
                $type->addTitle(FHIRCitationTitle::xmlUnserialize($n));
            } elseif (self::FIELD_ABSTRACT === $n->nodeName) {
                $type->addAbstract(FHIRCitationAbstract::xmlUnserialize($n));
            } elseif (self::FIELD_PART === $n->nodeName) {
                $type->setPart(FHIRCitationPart::xmlUnserialize($n));
            } elseif (self::FIELD_RELATES_TO === $n->nodeName) {
                $type->addRelatesTo(FHIRCitationRelatesTo1::xmlUnserialize($n));
            } elseif (self::FIELD_PUBLICATION_FORM === $n->nodeName) {
                $type->addPublicationForm(FHIRCitationPublicationForm::xmlUnserialize($n));
            } elseif (self::FIELD_WEB_LOCATION === $n->nodeName) {
                $type->addWebLocation(FHIRCitationWebLocation::xmlUnserialize($n));
            } elseif (self::FIELD_CLASSIFICATION === $n->nodeName) {
                $type->addClassification(FHIRCitationClassification1::xmlUnserialize($n));
            } elseif (self::FIELD_CONTRIBUTORSHIP === $n->nodeName) {
                $type->setContributorship(FHIRCitationContributorship::xmlUnserialize($n));
            } elseif (self::FIELD_NOTE === $n->nodeName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATE_ACCESSED);
        if (null !== $n) {
            $pt = $type->getDateAccessed();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDateAccessed($n->nodeValue);
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
        if ([] !== ($vs = $this->getRelatedIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_RELATED_IDENTIFIER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDateAccessed())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATE_ACCESSED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getVersion())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VERSION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getCurrentState())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CURRENT_STATE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getStatusDate())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_STATUS_DATE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getTitle())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_TITLE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getAbstract())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ABSTRACT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPart())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PART);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getRelatesTo())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_RELATES_TO);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getPublicationForm())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PUBLICATION_FORM);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getWebLocation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_WEB_LOCATION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
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
        if (null !== ($v = $this->getContributorship())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONTRIBUTORSHIP);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_NOTE);
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
        if ([] !== ($vs = $this->getRelatedIdentifier())) {
            $out->{self::FIELD_RELATED_IDENTIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_RELATED_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getDateAccessed())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATE_ACCESSED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATE_ACCESSED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            $out->{self::FIELD_VERSION} = $v;
        }
        if ([] !== ($vs = $this->getCurrentState())) {
            $out->{self::FIELD_CURRENT_STATE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CURRENT_STATE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getStatusDate())) {
            $out->{self::FIELD_STATUS_DATE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_STATUS_DATE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getTitle())) {
            $out->{self::FIELD_TITLE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_TITLE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getAbstract())) {
            $out->{self::FIELD_ABSTRACT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ABSTRACT}[] = $v;
            }
        }
        if (null !== ($v = $this->getPart())) {
            $out->{self::FIELD_PART} = $v;
        }
        if ([] !== ($vs = $this->getRelatesTo())) {
            $out->{self::FIELD_RELATES_TO} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_RELATES_TO}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getPublicationForm())) {
            $out->{self::FIELD_PUBLICATION_FORM} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PUBLICATION_FORM}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getWebLocation())) {
            $out->{self::FIELD_WEB_LOCATION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_WEB_LOCATION}[] = $v;
            }
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
        if (null !== ($v = $this->getContributorship())) {
            $out->{self::FIELD_CONTRIBUTORSHIP} = $v;
        }
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_NOTE}[] = $v;
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