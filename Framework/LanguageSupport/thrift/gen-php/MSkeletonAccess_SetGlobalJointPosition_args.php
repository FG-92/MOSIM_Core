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

class MSkeletonAccess_SetGlobalJointPosition_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'avatarId',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'joint',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        3 => array(
            'var' => 'position',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\MVector3',
        ),
    );

    /**
     * @var string
     */
    public $avatarId = null;
    /**
     * @var int
     */
    public $joint = null;
    /**
     * @var \MVector3
     */
    public $position = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['avatarId'])) {
                $this->avatarId = $vals['avatarId'];
            }
            if (isset($vals['joint'])) {
                $this->joint = $vals['joint'];
            }
            if (isset($vals['position'])) {
                $this->position = $vals['position'];
            }
        }
    }

    public function getName()
    {
        return 'MSkeletonAccess_SetGlobalJointPosition_args';
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
                        $xfer += $input->readString($this->avatarId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->joint);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRUCT) {
                        $this->position = new \MVector3();
                        $xfer += $this->position->read($input);
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
        $xfer += $output->writeStructBegin('MSkeletonAccess_SetGlobalJointPosition_args');
        if ($this->avatarId !== null) {
            $xfer += $output->writeFieldBegin('avatarId', TType::STRING, 1);
            $xfer += $output->writeString($this->avatarId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->joint !== null) {
            $xfer += $output->writeFieldBegin('joint', TType::I32, 2);
            $xfer += $output->writeI32($this->joint);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->position !== null) {
            if (!is_object($this->position)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('position', TType::STRUCT, 3);
            $xfer += $this->position->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
