<?php
/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class MPropertyUpdate
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'Key',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'Value',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $Key = null;
    /**
     * @var string
     */
    public $Value = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['Key'])) {
                $this->Key = $vals['Key'];
            }
            if (isset($vals['Value'])) {
                $this->Value = $vals['Value'];
            }
        }
    }

    public function getName()
    {
        return 'MPropertyUpdate';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->Key);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->Value);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('MPropertyUpdate');
        if ($this->Key !== null) {
            $xfer += $output->writeFieldBegin('Key', TType::STRING, 1);
            $xfer += $output->writeString($this->Key);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->Value !== null) {
            $xfer += $output->writeFieldBegin('Value', TType::STRING, 2);
            $xfer += $output->writeString($this->Value);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
