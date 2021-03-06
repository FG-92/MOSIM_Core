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

class MJointConstraint
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'JointType',
            'isRequired' => true,
            'type' => TType::I32,
        ),
        2 => array(
            'var' => 'GeometryConstraint',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\MGeometryConstraint',
        ),
        3 => array(
            'var' => 'VelocityConstraint',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\MVelocityConstraint',
        ),
        4 => array(
            'var' => 'AccelerationConstraint',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\MAccelerationConstraint',
        ),
    );

    /**
     * @var int
     */
    public $JointType = null;
    /**
     * @var \MGeometryConstraint
     */
    public $GeometryConstraint = null;
    /**
     * @var \MVelocityConstraint
     */
    public $VelocityConstraint = null;
    /**
     * @var \MAccelerationConstraint
     */
    public $AccelerationConstraint = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['JointType'])) {
                $this->JointType = $vals['JointType'];
            }
            if (isset($vals['GeometryConstraint'])) {
                $this->GeometryConstraint = $vals['GeometryConstraint'];
            }
            if (isset($vals['VelocityConstraint'])) {
                $this->VelocityConstraint = $vals['VelocityConstraint'];
            }
            if (isset($vals['AccelerationConstraint'])) {
                $this->AccelerationConstraint = $vals['AccelerationConstraint'];
            }
        }
    }

    public function getName()
    {
        return 'MJointConstraint';
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
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->JointType);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->GeometryConstraint = new \MGeometryConstraint();
                        $xfer += $this->GeometryConstraint->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRUCT) {
                        $this->VelocityConstraint = new \MVelocityConstraint();
                        $xfer += $this->VelocityConstraint->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRUCT) {
                        $this->AccelerationConstraint = new \MAccelerationConstraint();
                        $xfer += $this->AccelerationConstraint->read($input);
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
        $xfer += $output->writeStructBegin('MJointConstraint');
        if ($this->JointType !== null) {
            $xfer += $output->writeFieldBegin('JointType', TType::I32, 1);
            $xfer += $output->writeI32($this->JointType);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->GeometryConstraint !== null) {
            if (!is_object($this->GeometryConstraint)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('GeometryConstraint', TType::STRUCT, 2);
            $xfer += $this->GeometryConstraint->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->VelocityConstraint !== null) {
            if (!is_object($this->VelocityConstraint)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('VelocityConstraint', TType::STRUCT, 3);
            $xfer += $this->VelocityConstraint->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->AccelerationConstraint !== null) {
            if (!is_object($this->AccelerationConstraint)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('AccelerationConstraint', TType::STRUCT, 4);
            $xfer += $this->AccelerationConstraint->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
