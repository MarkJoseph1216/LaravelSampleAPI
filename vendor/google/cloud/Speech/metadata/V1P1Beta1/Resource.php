<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1p1beta1/resource.proto

namespace GPBMetadata\Google\Cloud\Speech\V1P1Beta1;

class Resource
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
,google/cloud/speech/v1p1beta1/resource.protogoogle.cloud.speech.v1p1beta1google/protobuf/timestamp.protogoogle/api/annotations.proto"�
CustomClass
name (	
custom_class_id (	C
items (24.google.cloud.speech.v1p1beta1.CustomClass.ClassItem
	ClassItem
value (	:l�Ai
!speech.googleapis.com/CustomClassDprojects/{project}/locations/{location}/customClasses/{custom_class}"�
	PhraseSet
name (	@
phrases (2/.google.cloud.speech.v1p1beta1.PhraseSet.Phrase
boost (&
Phrase
value (	
boost (:e�Ab
speech.googleapis.com/PhraseSet?projects/{project}/locations/{location}/phraseSets/{phrase_set}"�
SpeechAdaptation=
phrase_sets (2(.google.cloud.speech.v1p1beta1.PhraseSetC
phrase_set_references (	B$�A!
speech.googleapis.com/PhraseSetB
custom_classes (2*.google.cloud.speech.v1p1beta1.CustomClass"�
TranscriptNormalizationM
entries (2<.google.cloud.speech.v1p1beta1.TranscriptNormalization.Entry@
Entry
search (	
replace (	
case_sensitive (B�
!com.google.cloud.speech.v1p1beta1BSpeechResourceProtoPZCgoogle.golang.org/genproto/googleapis/cloud/speech/v1p1beta1;speech��GCSbproto3'
        , true);

        static::$is_initialized = true;
    }
}

