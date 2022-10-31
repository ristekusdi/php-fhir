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

use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRDateTime;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRExtension;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRMarkdown;
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
 * Class FHIRCitationPublicationForm
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation
 */
class FHIRCitationPublicationForm extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM;
    const FIELD_PUBLISHED_IN = 'publishedIn';
    const FIELD_PERIODIC_RELEASE = 'periodicRelease';
    const FIELD_ARTICLE_DATE = 'articleDate';
    const FIELD_ARTICLE_DATE_EXT = '_articleDate';
    const FIELD_LAST_REVISION_DATE = 'lastRevisionDate';
    const FIELD_LAST_REVISION_DATE_EXT = '_lastRevisionDate';
    const FIELD_LANGUAGE = 'language';
    const FIELD_ACCESSION_NUMBER = 'accessionNumber';
    const FIELD_ACCESSION_NUMBER_EXT = '_accessionNumber';
    const FIELD_PAGE_STRING = 'pageString';
    const FIELD_PAGE_STRING_EXT = '_pageString';
    const FIELD_FIRST_PAGE = 'firstPage';
    const FIELD_FIRST_PAGE_EXT = '_firstPage';
    const FIELD_LAST_PAGE = 'lastPage';
    const FIELD_LAST_PAGE_EXT = '_lastPage';
    const FIELD_PAGE_COUNT = 'pageCount';
    const FIELD_PAGE_COUNT_EXT = '_pageCount';
    const FIELD_COPYRIGHT = 'copyright';
    const FIELD_COPYRIGHT_EXT = '_copyright';

    /** @var string */
    private $_xmlns = '';

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The collection the cited article or artifact is published in.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublishedIn
     */
    protected ?FHIRCitationPublishedIn $publishedIn = null;

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The specific issue in which the cited article resides.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPeriodicRelease
     */
    protected ?FHIRCitationPeriodicRelease $periodicRelease = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the article was added to the database, or the date the article was
     * released (which may differ from the journal issue publication date).
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRDateTimePrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDateTime
     */
    protected ?FHIRDateTime $articleDate = null;

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the article was last revised or updated in the database.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRDateTimePrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDateTime
     */
    protected ?FHIRDateTime $lastRevisionDate = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Language in which this form of the article is published.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    protected ?array $language = [];

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Entry number or identifier for inclusion in a database.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $accessionNumber = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for full display of pagination.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $pageString = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of first page.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $firstPage = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of last page.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $lastPage = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual or approximate number of pages or screens.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    protected ?FHIRString $pageCount = null;

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Copyright notice for the full article or artifact.
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRMarkdownPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRMarkdown
     */
    protected ?FHIRMarkdown $copyright = null;

    /**
     * Validation map for fields in type Citation.PublicationForm
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRCitationPublicationForm Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRCitationPublicationForm::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_PUBLISHED_IN])) {
            if ($data[self::FIELD_PUBLISHED_IN] instanceof FHIRCitationPublishedIn) {
                $this->setPublishedIn($data[self::FIELD_PUBLISHED_IN]);
            } else {
                $this->setPublishedIn(new FHIRCitationPublishedIn($data[self::FIELD_PUBLISHED_IN]));
            }
        }
        if (isset($data[self::FIELD_PERIODIC_RELEASE])) {
            if ($data[self::FIELD_PERIODIC_RELEASE] instanceof FHIRCitationPeriodicRelease) {
                $this->setPeriodicRelease($data[self::FIELD_PERIODIC_RELEASE]);
            } else {
                $this->setPeriodicRelease(new FHIRCitationPeriodicRelease($data[self::FIELD_PERIODIC_RELEASE]));
            }
        }
        if (isset($data[self::FIELD_ARTICLE_DATE]) || isset($data[self::FIELD_ARTICLE_DATE_EXT])) {
            $value = $data[self::FIELD_ARTICLE_DATE] ?? null;
            $ext = (isset($data[self::FIELD_ARTICLE_DATE_EXT]) && is_array($data[self::FIELD_ARTICLE_DATE_EXT])) ? $data[self::FIELD_ARTICLE_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setArticleDate($value);
                } else if (is_array($value)) {
                    $this->setArticleDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setArticleDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setArticleDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_LAST_REVISION_DATE]) || isset($data[self::FIELD_LAST_REVISION_DATE_EXT])) {
            $value = $data[self::FIELD_LAST_REVISION_DATE] ?? null;
            $ext = (isset($data[self::FIELD_LAST_REVISION_DATE_EXT]) && is_array($data[self::FIELD_LAST_REVISION_DATE_EXT])) ? $data[self::FIELD_LAST_REVISION_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setLastRevisionDate($value);
                } else if (is_array($value)) {
                    $this->setLastRevisionDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setLastRevisionDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLastRevisionDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_LANGUAGE])) {
            if (is_array($data[self::FIELD_LANGUAGE])) {
                foreach($data[self::FIELD_LANGUAGE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addLanguage($v);
                    } else {
                        $this->addLanguage(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_LANGUAGE] instanceof FHIRCodeableConcept) {
                $this->addLanguage($data[self::FIELD_LANGUAGE]);
            } else {
                $this->addLanguage(new FHIRCodeableConcept($data[self::FIELD_LANGUAGE]));
            }
        }
        if (isset($data[self::FIELD_ACCESSION_NUMBER]) || isset($data[self::FIELD_ACCESSION_NUMBER_EXT])) {
            $value = $data[self::FIELD_ACCESSION_NUMBER] ?? null;
            $ext = (isset($data[self::FIELD_ACCESSION_NUMBER_EXT]) && is_array($data[self::FIELD_ACCESSION_NUMBER_EXT])) ? $data[self::FIELD_ACCESSION_NUMBER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAccessionNumber($value);
                } else if (is_array($value)) {
                    $this->setAccessionNumber(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAccessionNumber(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAccessionNumber(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PAGE_STRING]) || isset($data[self::FIELD_PAGE_STRING_EXT])) {
            $value = $data[self::FIELD_PAGE_STRING] ?? null;
            $ext = (isset($data[self::FIELD_PAGE_STRING_EXT]) && is_array($data[self::FIELD_PAGE_STRING_EXT])) ? $data[self::FIELD_PAGE_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPageString($value);
                } else if (is_array($value)) {
                    $this->setPageString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPageString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPageString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_FIRST_PAGE]) || isset($data[self::FIELD_FIRST_PAGE_EXT])) {
            $value = $data[self::FIELD_FIRST_PAGE] ?? null;
            $ext = (isset($data[self::FIELD_FIRST_PAGE_EXT]) && is_array($data[self::FIELD_FIRST_PAGE_EXT])) ? $data[self::FIELD_FIRST_PAGE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setFirstPage($value);
                } else if (is_array($value)) {
                    $this->setFirstPage(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setFirstPage(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setFirstPage(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_LAST_PAGE]) || isset($data[self::FIELD_LAST_PAGE_EXT])) {
            $value = $data[self::FIELD_LAST_PAGE] ?? null;
            $ext = (isset($data[self::FIELD_LAST_PAGE_EXT]) && is_array($data[self::FIELD_LAST_PAGE_EXT])) ? $data[self::FIELD_LAST_PAGE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLastPage($value);
                } else if (is_array($value)) {
                    $this->setLastPage(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLastPage(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLastPage(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_PAGE_COUNT]) || isset($data[self::FIELD_PAGE_COUNT_EXT])) {
            $value = $data[self::FIELD_PAGE_COUNT] ?? null;
            $ext = (isset($data[self::FIELD_PAGE_COUNT_EXT]) && is_array($data[self::FIELD_PAGE_COUNT_EXT])) ? $data[self::FIELD_PAGE_COUNT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPageCount($value);
                } else if (is_array($value)) {
                    $this->setPageCount(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPageCount(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPageCount(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_COPYRIGHT]) || isset($data[self::FIELD_COPYRIGHT_EXT])) {
            $value = $data[self::FIELD_COPYRIGHT] ?? null;
            $ext = (isset($data[self::FIELD_COPYRIGHT_EXT]) && is_array($data[self::FIELD_COPYRIGHT_EXT])) ? $data[self::FIELD_COPYRIGHT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setCopyright($value);
                } else if (is_array($value)) {
                    $this->setCopyright(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setCopyright(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCopyright(new FHIRMarkdown($ext));
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
        return "<CitationPublicationForm{$xmlns}></CitationPublicationForm>";
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The collection the cited article or artifact is published in.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublishedIn
     */
    public function getPublishedIn(): ?FHIRCitationPublishedIn
    {
        return $this->publishedIn;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The collection the cited article or artifact is published in.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublishedIn $publishedIn
     * @return static
     */
    public function setPublishedIn(?FHIRCitationPublishedIn $publishedIn = null): object
    {
        $this->_trackValueSet($this->publishedIn, $publishedIn);
        $this->publishedIn = $publishedIn;
        return $this;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The specific issue in which the cited article resides.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPeriodicRelease
     */
    public function getPeriodicRelease(): ?FHIRCitationPeriodicRelease
    {
        return $this->periodicRelease;
    }

    /**
     * The Citation Resource enables reference to any knowledge artifact for purposes
     * of identification and attribution. The Citation Resource supports existing
     * reference structures and developing publication practices such as versioning,
     * expressing complex contributorship roles, and referencing computable resources.
     *
     * The specific issue in which the cited article resides.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPeriodicRelease $periodicRelease
     * @return static
     */
    public function setPeriodicRelease(?FHIRCitationPeriodicRelease $periodicRelease = null): object
    {
        $this->_trackValueSet($this->periodicRelease, $periodicRelease);
        $this->periodicRelease = $periodicRelease;
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
     * The date the article was added to the database, or the date the article was
     * released (which may differ from the journal issue publication date).
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRDateTimePrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDateTime
     */
    public function getArticleDate(): ?FHIRDateTime
    {
        return $this->articleDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the article was added to the database, or the date the article was
     * released (which may differ from the journal issue publication date).
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRDateTimePrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDateTime $articleDate
     * @return static
     */
    public function setArticleDate($articleDate = null): object
    {
        if (null !== $articleDate && !($articleDate instanceof FHIRDateTime)) {
            $articleDate = new FHIRDateTime($articleDate);
        }
        $this->_trackValueSet($this->articleDate, $articleDate);
        $this->articleDate = $articleDate;
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
     * The date the article was last revised or updated in the database.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRDateTimePrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDateTime
     */
    public function getLastRevisionDate(): ?FHIRDateTime
    {
        return $this->lastRevisionDate;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date the article was last revised or updated in the database.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRDateTimePrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDateTime $lastRevisionDate
     * @return static
     */
    public function setLastRevisionDate($lastRevisionDate = null): object
    {
        if (null !== $lastRevisionDate && !($lastRevisionDate instanceof FHIRDateTime)) {
            $lastRevisionDate = new FHIRDateTime($lastRevisionDate);
        }
        $this->_trackValueSet($this->lastRevisionDate, $lastRevisionDate);
        $this->lastRevisionDate = $lastRevisionDate;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Language in which this form of the article is published.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[]
     */
    public function getLanguage(): ?array
    {
        return $this->language;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Language in which this form of the article is published.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept $language
     * @return static
     */
    public function addLanguage(?FHIRCodeableConcept $language = null): object
    {
        $this->_trackValueAdded();
        $this->language[] = $language;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Language in which this form of the article is published.
     *
     * @param \RistekUSDI\FHIR\R4B\FHIRElement\FHIRCodeableConcept[] $language
     * @return static
     */
    public function setLanguage(array $language = []): object
    {
        if ([] !== $this->language) {
            $this->_trackValuesRemoved(count($this->language));
            $this->language = [];
        }
        if ([] === $language) {
            return $this;
        }
        foreach($language as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addLanguage($v);
            } else {
                $this->addLanguage(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Entry number or identifier for inclusion in a database.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getAccessionNumber(): ?FHIRString
    {
        return $this->accessionNumber;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Entry number or identifier for inclusion in a database.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $accessionNumber
     * @return static
     */
    public function setAccessionNumber($accessionNumber = null): object
    {
        if (null !== $accessionNumber && !($accessionNumber instanceof FHIRString)) {
            $accessionNumber = new FHIRString($accessionNumber);
        }
        $this->_trackValueSet($this->accessionNumber, $accessionNumber);
        $this->accessionNumber = $accessionNumber;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for full display of pagination.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getPageString(): ?FHIRString
    {
        return $this->pageString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for full display of pagination.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $pageString
     * @return static
     */
    public function setPageString($pageString = null): object
    {
        if (null !== $pageString && !($pageString instanceof FHIRString)) {
            $pageString = new FHIRString($pageString);
        }
        $this->_trackValueSet($this->pageString, $pageString);
        $this->pageString = $pageString;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of first page.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getFirstPage(): ?FHIRString
    {
        return $this->firstPage;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of first page.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $firstPage
     * @return static
     */
    public function setFirstPage($firstPage = null): object
    {
        if (null !== $firstPage && !($firstPage instanceof FHIRString)) {
            $firstPage = new FHIRString($firstPage);
        }
        $this->_trackValueSet($this->firstPage, $firstPage);
        $this->firstPage = $firstPage;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of last page.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getLastPage(): ?FHIRString
    {
        return $this->lastPage;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Used for isolated representation of last page.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $lastPage
     * @return static
     */
    public function setLastPage($lastPage = null): object
    {
        if (null !== $lastPage && !($lastPage instanceof FHIRString)) {
            $lastPage = new FHIRString($lastPage);
        }
        $this->_trackValueSet($this->lastPage, $lastPage);
        $this->lastPage = $lastPage;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual or approximate number of pages or screens.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString
     */
    public function getPageCount(): ?FHIRString
    {
        return $this->pageCount;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Actual or approximate number of pages or screens.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRStringPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRString $pageCount
     * @return static
     */
    public function setPageCount($pageCount = null): object
    {
        if (null !== $pageCount && !($pageCount instanceof FHIRString)) {
            $pageCount = new FHIRString($pageCount);
        }
        $this->_trackValueSet($this->pageCount, $pageCount);
        $this->pageCount = $pageCount;
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
     * Copyright notice for the full article or artifact.
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRMarkdownPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRMarkdown
     */
    public function getCopyright(): ?FHIRMarkdown
    {
        return $this->copyright;
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
     * Copyright notice for the full article or artifact.
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRMarkdownPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRMarkdown $copyright
     * @return static
     */
    public function setCopyright($copyright = null): object
    {
        if (null !== $copyright && !($copyright instanceof FHIRMarkdown)) {
            $copyright = new FHIRMarkdown($copyright);
        }
        $this->_trackValueSet($this->copyright, $copyright);
        $this->copyright = $copyright;
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
        if (null !== ($v = $this->getPublishedIn())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLISHED_IN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPeriodicRelease())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERIODIC_RELEASE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getArticleDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ARTICLE_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLastRevisionDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_REVISION_DATE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getLanguage())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_LANGUAGE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getAccessionNumber())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ACCESSION_NUMBER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPageString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAGE_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getFirstPage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_FIRST_PAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLastPage())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LAST_PAGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPageCount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PAGE_COUNT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCopyright())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COPYRIGHT] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_PUBLISHED_IN])) {
            $v = $this->getPublishedIn();
            foreach($validationRules[self::FIELD_PUBLISHED_IN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_PUBLISHED_IN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLISHED_IN])) {
                        $errs[self::FIELD_PUBLISHED_IN] = [];
                    }
                    $errs[self::FIELD_PUBLISHED_IN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERIODIC_RELEASE])) {
            $v = $this->getPeriodicRelease();
            foreach($validationRules[self::FIELD_PERIODIC_RELEASE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_PERIODIC_RELEASE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERIODIC_RELEASE])) {
                        $errs[self::FIELD_PERIODIC_RELEASE] = [];
                    }
                    $errs[self::FIELD_PERIODIC_RELEASE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ARTICLE_DATE])) {
            $v = $this->getArticleDate();
            foreach($validationRules[self::FIELD_ARTICLE_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_ARTICLE_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ARTICLE_DATE])) {
                        $errs[self::FIELD_ARTICLE_DATE] = [];
                    }
                    $errs[self::FIELD_ARTICLE_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_REVISION_DATE])) {
            $v = $this->getLastRevisionDate();
            foreach($validationRules[self::FIELD_LAST_REVISION_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_LAST_REVISION_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_REVISION_DATE])) {
                        $errs[self::FIELD_LAST_REVISION_DATE] = [];
                    }
                    $errs[self::FIELD_LAST_REVISION_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ACCESSION_NUMBER])) {
            $v = $this->getAccessionNumber();
            foreach($validationRules[self::FIELD_ACCESSION_NUMBER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_ACCESSION_NUMBER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ACCESSION_NUMBER])) {
                        $errs[self::FIELD_ACCESSION_NUMBER] = [];
                    }
                    $errs[self::FIELD_ACCESSION_NUMBER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAGE_STRING])) {
            $v = $this->getPageString();
            foreach($validationRules[self::FIELD_PAGE_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_PAGE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAGE_STRING])) {
                        $errs[self::FIELD_PAGE_STRING] = [];
                    }
                    $errs[self::FIELD_PAGE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FIRST_PAGE])) {
            $v = $this->getFirstPage();
            foreach($validationRules[self::FIELD_FIRST_PAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_FIRST_PAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FIRST_PAGE])) {
                        $errs[self::FIELD_FIRST_PAGE] = [];
                    }
                    $errs[self::FIELD_FIRST_PAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LAST_PAGE])) {
            $v = $this->getLastPage();
            foreach($validationRules[self::FIELD_LAST_PAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_LAST_PAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LAST_PAGE])) {
                        $errs[self::FIELD_LAST_PAGE] = [];
                    }
                    $errs[self::FIELD_LAST_PAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PAGE_COUNT])) {
            $v = $this->getPageCount();
            foreach($validationRules[self::FIELD_PAGE_COUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_PAGE_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PAGE_COUNT])) {
                        $errs[self::FIELD_PAGE_COUNT] = [];
                    }
                    $errs[self::FIELD_PAGE_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COPYRIGHT])) {
            $v = $this->getCopyright();
            foreach($validationRules[self::FIELD_COPYRIGHT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CITATION_DOT_PUBLICATION_FORM, self::FIELD_COPYRIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COPYRIGHT])) {
                        $errs[self::FIELD_COPYRIGHT] = [];
                    }
                    $errs[self::FIELD_COPYRIGHT][$rule] = $err;
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
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm
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
                throw new \DomainException(sprintf('FHIRCitationPublicationForm::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRCitationPublicationForm::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRCitationPublicationForm(null);
        } elseif (!is_object($type) || !($type instanceof FHIRCitationPublicationForm)) {
            throw new \RuntimeException(sprintf(
                'FHIRCitationPublicationForm::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRCitation\FHIRCitationPublicationForm or null, %s seen.',
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
            if (self::FIELD_PUBLISHED_IN === $n->nodeName) {
                $type->setPublishedIn(FHIRCitationPublishedIn::xmlUnserialize($n));
            } elseif (self::FIELD_PERIODIC_RELEASE === $n->nodeName) {
                $type->setPeriodicRelease(FHIRCitationPeriodicRelease::xmlUnserialize($n));
            } elseif (self::FIELD_ARTICLE_DATE === $n->nodeName) {
                $type->setArticleDate(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_LAST_REVISION_DATE === $n->nodeName) {
                $type->setLastRevisionDate(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_LANGUAGE === $n->nodeName) {
                $type->addLanguage(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_ACCESSION_NUMBER === $n->nodeName) {
                $type->setAccessionNumber(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_PAGE_STRING === $n->nodeName) {
                $type->setPageString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_FIRST_PAGE === $n->nodeName) {
                $type->setFirstPage(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_LAST_PAGE === $n->nodeName) {
                $type->setLastPage(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_PAGE_COUNT === $n->nodeName) {
                $type->setPageCount(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_COPYRIGHT === $n->nodeName) {
                $type->setCopyright(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ARTICLE_DATE);
        if (null !== $n) {
            $pt = $type->getArticleDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setArticleDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LAST_REVISION_DATE);
        if (null !== $n) {
            $pt = $type->getLastRevisionDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLastRevisionDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ACCESSION_NUMBER);
        if (null !== $n) {
            $pt = $type->getAccessionNumber();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAccessionNumber($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PAGE_STRING);
        if (null !== $n) {
            $pt = $type->getPageString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPageString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_FIRST_PAGE);
        if (null !== $n) {
            $pt = $type->getFirstPage();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setFirstPage($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LAST_PAGE);
        if (null !== $n) {
            $pt = $type->getLastPage();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLastPage($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PAGE_COUNT);
        if (null !== $n) {
            $pt = $type->getPageCount();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPageCount($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_COPYRIGHT);
        if (null !== $n) {
            $pt = $type->getCopyright();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCopyright($n->nodeValue);
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
        if (null !== ($v = $this->getPublishedIn())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PUBLISHED_IN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPeriodicRelease())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PERIODIC_RELEASE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getArticleDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ARTICLE_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLastRevisionDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LAST_REVISION_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getLanguage())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_LANGUAGE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getAccessionNumber())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ACCESSION_NUMBER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPageString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PAGE_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getFirstPage())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_FIRST_PAGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLastPage())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LAST_PAGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPageCount())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PAGE_COUNT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCopyright())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COPYRIGHT);
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
        if (null !== ($v = $this->getPublishedIn())) {
            $out->{self::FIELD_PUBLISHED_IN} = $v;
        }
        if (null !== ($v = $this->getPeriodicRelease())) {
            $out->{self::FIELD_PERIODIC_RELEASE} = $v;
        }
        if (null !== ($v = $this->getArticleDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ARTICLE_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ARTICLE_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLastRevisionDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LAST_REVISION_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LAST_REVISION_DATE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getLanguage())) {
            $out->{self::FIELD_LANGUAGE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_LANGUAGE}[] = $v;
            }
        }
        if (null !== ($v = $this->getAccessionNumber())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ACCESSION_NUMBER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ACCESSION_NUMBER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPageString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PAGE_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PAGE_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getFirstPage())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_FIRST_PAGE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_FIRST_PAGE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLastPage())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LAST_PAGE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LAST_PAGE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getPageCount())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PAGE_COUNT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PAGE_COUNT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCopyright())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COPYRIGHT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COPYRIGHT_EXT} = $ext;
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