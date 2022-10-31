<?php declare(strict_types=1);

namespace RistekUSDI\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use RistekUSDI\FHIR\R4\FHIRElement\FHIRBackboneElement;
use RistekUSDI\FHIR\R4\FHIRElement\FHIRExtension;
use RistekUSDI\FHIR\R4\FHIRElement\FHIRRepositoryType;
use RistekUSDI\FHIR\R4\FHIRElement\FHIRString;
use RistekUSDI\FHIR\R4\FHIRElement\FHIRUri;
use RistekUSDI\FHIR\R4\FHIRStringPrimitive;
use RistekUSDI\FHIR\R4\PHPFHIRConstants;
use RistekUSDI\FHIR\R4\PHPFHIRTypeInterface;

/**
 * Raw data describing a biological sequence.
 *
 * Class FHIRMolecularSequenceRepository
 * @package \RistekUSDI\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence
 */
class FHIRMolecularSequenceRepository extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_REPOSITORY;
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_DATASET_ID = 'datasetId';
    const FIELD_DATASET_ID_EXT = '_datasetId';
    const FIELD_VARIANTSET_ID = 'variantsetId';
    const FIELD_VARIANTSET_ID_EXT = '_variantsetId';
    const FIELD_READSET_ID = 'readsetId';
    const FIELD_READSET_ID_EXT = '_readsetId';

    /** @var string */
    private $_xmlns = '';

    /**
     * Type for access of external URI.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Click and see / RESTful API / Need login to see / RESTful API with
     * authentication / Other ways to see resource.
     *
     * @var null|\RistekUSDI\FHIR\R4\FHIRElement\FHIRRepositoryType
     */
    protected ?FHIRRepositoryType $type = null;

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URI of an external repository which contains further details about the genetics
     * data.
     *
     * @var null|\RistekUSDI\FHIR\R4\FHIRUriPrimitive|\RistekUSDI\FHIR\R4\FHIRElement\FHIRUri
     */
    protected ?FHIRUri $url = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URI of an external repository which contains further details about the genetics
     * data.
     *
     * @var null|\RistekUSDI\FHIR\R4\FHIRStringPrimitive|\RistekUSDI\FHIR\R4\FHIRElement\FHIRString
     */
    protected ?FHIRString $name = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the variant in this external repository. The server will understand how to
     * use this id to call for more info about datasets in external repository.
     *
     * @var null|\RistekUSDI\FHIR\R4\FHIRStringPrimitive|\RistekUSDI\FHIR\R4\FHIRElement\FHIRString
     */
    protected ?FHIRString $datasetId = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the variantset in this external repository. The server will understand how
     * to use this id to call for more info about variantsets in external repository.
     *
     * @var null|\RistekUSDI\FHIR\R4\FHIRStringPrimitive|\RistekUSDI\FHIR\R4\FHIRElement\FHIRString
     */
    protected ?FHIRString $variantsetId = null;

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the read in this external repository.
     *
     * @var null|\RistekUSDI\FHIR\R4\FHIRStringPrimitive|\RistekUSDI\FHIR\R4\FHIRElement\FHIRString
     */
    protected ?FHIRString $readsetId = null;

    /**
     * Validation map for fields in type MolecularSequence.Repository
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRMolecularSequenceRepository Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMolecularSequenceRepository::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRRepositoryType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRRepositoryType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRRepositoryType([FHIRRepositoryType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRRepositoryType($ext));
            }
        }
        if (isset($data[self::FIELD_URL]) || isset($data[self::FIELD_URL_EXT])) {
            $value = $data[self::FIELD_URL] ?? null;
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT])) ? $data[self::FIELD_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setUrl($value);
                } else if (is_array($value)) {
                    $this->setUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUrl(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            $value = $data[self::FIELD_NAME] ?? null;
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) ? $data[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setName(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DATASET_ID]) || isset($data[self::FIELD_DATASET_ID_EXT])) {
            $value = $data[self::FIELD_DATASET_ID] ?? null;
            $ext = (isset($data[self::FIELD_DATASET_ID_EXT]) && is_array($data[self::FIELD_DATASET_ID_EXT])) ? $data[self::FIELD_DATASET_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDatasetId($value);
                } else if (is_array($value)) {
                    $this->setDatasetId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDatasetId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDatasetId(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_VARIANTSET_ID]) || isset($data[self::FIELD_VARIANTSET_ID_EXT])) {
            $value = $data[self::FIELD_VARIANTSET_ID] ?? null;
            $ext = (isset($data[self::FIELD_VARIANTSET_ID_EXT]) && is_array($data[self::FIELD_VARIANTSET_ID_EXT])) ? $data[self::FIELD_VARIANTSET_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setVariantsetId($value);
                } else if (is_array($value)) {
                    $this->setVariantsetId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setVariantsetId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVariantsetId(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_READSET_ID]) || isset($data[self::FIELD_READSET_ID_EXT])) {
            $value = $data[self::FIELD_READSET_ID] ?? null;
            $ext = (isset($data[self::FIELD_READSET_ID_EXT]) && is_array($data[self::FIELD_READSET_ID_EXT])) ? $data[self::FIELD_READSET_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setReadsetId($value);
                } else if (is_array($value)) {
                    $this->setReadsetId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setReadsetId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReadsetId(new FHIRString($ext));
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
        return "<MolecularSequenceRepository{$xmlns}></MolecularSequenceRepository>";
    }

    /**
     * Type for access of external URI.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Click and see / RESTful API / Need login to see / RESTful API with
     * authentication / Other ways to see resource.
     *
     * @return null|\RistekUSDI\FHIR\R4\FHIRElement\FHIRRepositoryType
     */
    public function getType(): ?FHIRRepositoryType
    {
        return $this->type;
    }

    /**
     * Type for access of external URI.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Click and see / RESTful API / Need login to see / RESTful API with
     * authentication / Other ways to see resource.
     *
     * @param null|\RistekUSDI\FHIR\R4\FHIRElement\FHIRRepositoryType $type
     * @return static
     */
    public function setType(?FHIRRepositoryType $type = null): object
    {
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URI of an external repository which contains further details about the genetics
     * data.
     *
     * @return null|\RistekUSDI\FHIR\R4\FHIRUriPrimitive|\RistekUSDI\FHIR\R4\FHIRElement\FHIRUri
     */
    public function getUrl(): ?FHIRUri
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URI of an external repository which contains further details about the genetics
     * data.
     *
     * @param null|\RistekUSDI\FHIR\R4\FHIRUriPrimitive|\RistekUSDI\FHIR\R4\FHIRElement\FHIRUri $url
     * @return static
     */
    public function setUrl($url = null): object
    {
        if (null !== $url && !($url instanceof FHIRUri)) {
            $url = new FHIRUri($url);
        }
        $this->_trackValueSet($this->url, $url);
        $this->url = $url;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URI of an external repository which contains further details about the genetics
     * data.
     *
     * @return null|\RistekUSDI\FHIR\R4\FHIRStringPrimitive|\RistekUSDI\FHIR\R4\FHIRElement\FHIRString
     */
    public function getName(): ?FHIRString
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * URI of an external repository which contains further details about the genetics
     * data.
     *
     * @param null|\RistekUSDI\FHIR\R4\FHIRStringPrimitive|\RistekUSDI\FHIR\R4\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName($name = null): object
    {
        if (null !== $name && !($name instanceof FHIRString)) {
            $name = new FHIRString($name);
        }
        $this->_trackValueSet($this->name, $name);
        $this->name = $name;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the variant in this external repository. The server will understand how to
     * use this id to call for more info about datasets in external repository.
     *
     * @return null|\RistekUSDI\FHIR\R4\FHIRStringPrimitive|\RistekUSDI\FHIR\R4\FHIRElement\FHIRString
     */
    public function getDatasetId(): ?FHIRString
    {
        return $this->datasetId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the variant in this external repository. The server will understand how to
     * use this id to call for more info about datasets in external repository.
     *
     * @param null|\RistekUSDI\FHIR\R4\FHIRStringPrimitive|\RistekUSDI\FHIR\R4\FHIRElement\FHIRString $datasetId
     * @return static
     */
    public function setDatasetId($datasetId = null): object
    {
        if (null !== $datasetId && !($datasetId instanceof FHIRString)) {
            $datasetId = new FHIRString($datasetId);
        }
        $this->_trackValueSet($this->datasetId, $datasetId);
        $this->datasetId = $datasetId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the variantset in this external repository. The server will understand how
     * to use this id to call for more info about variantsets in external repository.
     *
     * @return null|\RistekUSDI\FHIR\R4\FHIRStringPrimitive|\RistekUSDI\FHIR\R4\FHIRElement\FHIRString
     */
    public function getVariantsetId(): ?FHIRString
    {
        return $this->variantsetId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the variantset in this external repository. The server will understand how
     * to use this id to call for more info about variantsets in external repository.
     *
     * @param null|\RistekUSDI\FHIR\R4\FHIRStringPrimitive|\RistekUSDI\FHIR\R4\FHIRElement\FHIRString $variantsetId
     * @return static
     */
    public function setVariantsetId($variantsetId = null): object
    {
        if (null !== $variantsetId && !($variantsetId instanceof FHIRString)) {
            $variantsetId = new FHIRString($variantsetId);
        }
        $this->_trackValueSet($this->variantsetId, $variantsetId);
        $this->variantsetId = $variantsetId;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the read in this external repository.
     *
     * @return null|\RistekUSDI\FHIR\R4\FHIRStringPrimitive|\RistekUSDI\FHIR\R4\FHIRElement\FHIRString
     */
    public function getReadsetId(): ?FHIRString
    {
        return $this->readsetId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Id of the read in this external repository.
     *
     * @param null|\RistekUSDI\FHIR\R4\FHIRStringPrimitive|\RistekUSDI\FHIR\R4\FHIRElement\FHIRString $readsetId
     * @return static
     */
    public function setReadsetId($readsetId = null): object
    {
        if (null !== $readsetId && !($readsetId instanceof FHIRString)) {
            $readsetId = new FHIRString($readsetId);
        }
        $this->_trackValueSet($this->readsetId, $readsetId);
        $this->readsetId = $readsetId;
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
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDatasetId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATASET_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVariantsetId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VARIANTSET_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReadsetId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_READSET_ID] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_REPOSITORY, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_REPOSITORY, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_REPOSITORY, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATASET_ID])) {
            $v = $this->getDatasetId();
            foreach($validationRules[self::FIELD_DATASET_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_REPOSITORY, self::FIELD_DATASET_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATASET_ID])) {
                        $errs[self::FIELD_DATASET_ID] = [];
                    }
                    $errs[self::FIELD_DATASET_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VARIANTSET_ID])) {
            $v = $this->getVariantsetId();
            foreach($validationRules[self::FIELD_VARIANTSET_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_REPOSITORY, self::FIELD_VARIANTSET_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VARIANTSET_ID])) {
                        $errs[self::FIELD_VARIANTSET_ID] = [];
                    }
                    $errs[self::FIELD_VARIANTSET_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_READSET_ID])) {
            $v = $this->getReadsetId();
            foreach($validationRules[self::FIELD_READSET_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_REPOSITORY, self::FIELD_READSET_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_READSET_ID])) {
                        $errs[self::FIELD_READSET_ID] = [];
                    }
                    $errs[self::FIELD_READSET_ID][$rule] = $err;
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
     * @param null|\RistekUSDI\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository
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
                throw new \DomainException(sprintf('FHIRMolecularSequenceRepository::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMolecularSequenceRepository::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRMolecularSequenceRepository(null);
        } elseif (!is_object($type) || !($type instanceof FHIRMolecularSequenceRepository)) {
            throw new \RuntimeException(sprintf(
                'FHIRMolecularSequenceRepository::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRepository or null, %s seen.',
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
            if (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRRepositoryType::xmlUnserialize($n));
            } elseif (self::FIELD_URL === $n->nodeName) {
                $type->setUrl(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_NAME === $n->nodeName) {
                $type->setName(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DATASET_ID === $n->nodeName) {
                $type->setDatasetId(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_VARIANTSET_ID === $n->nodeName) {
                $type->setVariantsetId(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_READSET_ID === $n->nodeName) {
                $type->setReadsetId(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_URL);
        if (null !== $n) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setUrl($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NAME);
        if (null !== $n) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setName($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATASET_ID);
        if (null !== $n) {
            $pt = $type->getDatasetId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDatasetId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VARIANTSET_ID);
        if (null !== $n) {
            $pt = $type->getVariantsetId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setVariantsetId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_READSET_ID);
        if (null !== $n) {
            $pt = $type->getReadsetId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setReadsetId($n->nodeValue);
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
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getUrl())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_URL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDatasetId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATASET_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getVariantsetId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VARIANTSET_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReadsetId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_READSET_ID);
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
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRRepositoryType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getUrl())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_URL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_URL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDatasetId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATASET_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATASET_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getVariantsetId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VARIANTSET_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VARIANTSET_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getReadsetId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_READSET_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_READSET_ID_EXT} = $ext;
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