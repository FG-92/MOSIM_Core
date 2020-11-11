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

class MCoordinateSystemMapper_TransformFromMMI_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'transform',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\MTransform',
        ),
        2 => array(
            'var' => 'firstAxis',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        3 => array(
            'var' => 'secondAxis',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        4 => array(
            'var' => 'thirdAxis',
            'isRequired' => false,
            'type' => TType::I32,
        ),
    );

    /**
     * @var \MTransform
     */
    public $transform = null;
    /**
     * @var int
     */
    public $firstAxis = null;
    /**
     * @var int
     */
    public $secondAxis = null;
    /**
     * @var int
     */
    public $thirdAxis = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['transform'])) {
                $this->transform = $vals['transform'];
            }
            if (isset($vals['firstAxis'])) {
                $this->firstAxis = $vals['firstAxis'];
            }
            if (isset($vals['secondAxis'])) {
                $this->secondAxis = $vals['secondAxis'];
            }
            if (isset($vals['thirdAxis'])) {
                $this->thirdAxis = $vals['thirdAxis'];
            }
        }
    }

    public function getName()
    {
        return 'MCoordinateSystemMapper_TransformFromMMI_args';
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
                        $this->transform = new \MTransform();
                        $xfer += $this->transform->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->firstAxis);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->secondAxis);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->thirdAxis);
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
        $xfer += $output->writeStructBegin('MCoordinateSystemMapper_TransformFromMMI_args');
        if ($this->transform !== null) {
            if (!is_object($this->transform)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('transform', TType::STRUCT, 1);
            $xfer += $this->transform->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->firstAxis !== null) {
            $xfer += $output->writeFieldBegin('firstAxis', TType::I32, 2);
            $xfer += $output->writeI32($this->firstAxis);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->secondAxis !== null) {
            $xfer += $output->writeFieldBegin('secondAxis', TType::I32, 3);
            $xfer += $output->writeI32($this->secondAxis);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->thirdAxis !== null) {
            $xfer += $output->writeFieldBegin('thirdAxis', TType::I32, 4);
            $xfer += $output->writeI32($this->thirdAxis);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
