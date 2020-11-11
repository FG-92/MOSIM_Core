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

class MRetargetingService_RetargetToTarget_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'intermediatePostureValues',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\MAvatarPostureValues',
        ),
    );

    /**
     * @var \MAvatarPostureValues
     */
    public $intermediatePostureValues = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['intermediatePostureValues'])) {
                $this->intermediatePostureValues = $vals['intermediatePostureValues'];
            }
        }
    }

    public function getName()
    {
        return 'MRetargetingService_RetargetToTarget_args';
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
                    if ($ftype == TType::STRUCT) {
                        $this->intermediatePostureValues = new \MAvatarPostureValues();
                        $xfer += $this->intermediatePostureValues->read($input);
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
        $xfer += $output->writeStructBegin('MRetargetingService_RetargetToTarget_args');
        if ($this->intermediatePostureValues !== null) {
            if (!is_object($this->intermediatePostureValues)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('intermediatePostureValues', TType::STRUCT, 1);
            $xfer += $this->intermediatePostureValues->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
