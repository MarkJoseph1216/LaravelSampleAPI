<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4\ImportContext\SqlBakImportOptions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.ImportContext.SqlBakImportOptions.EncryptionOptions</code>
 */
class EncryptionOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Path to the Certificate (.cer) in Cloud Storage, in the form
     * `gs://bucketName/fileName`. The instance must have write permissions
     * to the bucket and read access to the file.
     *
     * Generated from protobuf field <code>string cert_path = 1;</code>
     */
    private $cert_path = '';
    /**
     * Path to the Certificate Private Key (.pvk)  in Cloud Storage, in the
     * form `gs://bucketName/fileName`. The instance must have write
     * permissions to the bucket and read access to the file.
     *
     * Generated from protobuf field <code>string pvk_path = 2;</code>
     */
    private $pvk_path = '';
    /**
     * Password that encrypts the private key
     *
     * Generated from protobuf field <code>string pvk_password = 3;</code>
     */
    private $pvk_password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cert_path
     *           Path to the Certificate (.cer) in Cloud Storage, in the form
     *           `gs://bucketName/fileName`. The instance must have write permissions
     *           to the bucket and read access to the file.
     *     @type string $pvk_path
     *           Path to the Certificate Private Key (.pvk)  in Cloud Storage, in the
     *           form `gs://bucketName/fileName`. The instance must have write
     *           permissions to the bucket and read access to the file.
     *     @type string $pvk_password
     *           Password that encrypts the private key
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Path to the Certificate (.cer) in Cloud Storage, in the form
     * `gs://bucketName/fileName`. The instance must have write permissions
     * to the bucket and read access to the file.
     *
     * Generated from protobuf field <code>string cert_path = 1;</code>
     * @return string
     */
    public function getCertPath()
    {
        return $this->cert_path;
    }

    /**
     * Path to the Certificate (.cer) in Cloud Storage, in the form
     * `gs://bucketName/fileName`. The instance must have write permissions
     * to the bucket and read access to the file.
     *
     * Generated from protobuf field <code>string cert_path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCertPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->cert_path = $var;

        return $this;
    }

    /**
     * Path to the Certificate Private Key (.pvk)  in Cloud Storage, in the
     * form `gs://bucketName/fileName`. The instance must have write
     * permissions to the bucket and read access to the file.
     *
     * Generated from protobuf field <code>string pvk_path = 2;</code>
     * @return string
     */
    public function getPvkPath()
    {
        return $this->pvk_path;
    }

    /**
     * Path to the Certificate Private Key (.pvk)  in Cloud Storage, in the
     * form `gs://bucketName/fileName`. The instance must have write
     * permissions to the bucket and read access to the file.
     *
     * Generated from protobuf field <code>string pvk_path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPvkPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->pvk_path = $var;

        return $this;
    }

    /**
     * Password that encrypts the private key
     *
     * Generated from protobuf field <code>string pvk_password = 3;</code>
     * @return string
     */
    public function getPvkPassword()
    {
        return $this->pvk_password;
    }

    /**
     * Password that encrypts the private key
     *
     * Generated from protobuf field <code>string pvk_password = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPvkPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->pvk_password = $var;

        return $this;
    }

}

