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

class MInterval3
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'X',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\MInterval',
        ),
        2 => array(
            'var' => 'Y',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\MInterval',
        ),
        3 => array(
            'var' => 'Z',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\MInterval',
        ),
    );

    /**
     * @var \MInterval
     */
    public $X = null;
    /**
     * @var \MInterval
     */
    public $Y = null;
    /**
     * @var \MInterval
     */
    public $Z = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['X'])) {
                $this->X = $vals['X'];
            }
            if (isset($vals['Y'])) {
                $this->Y = $vals['Y'];
            }
            if (isset($vals['Z'])) {
                $this->Z = $vals['Z'];
            }
        }
    }

    public function getName()
    {
        return 'MInterval3';
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
                        $this->X = new \MInterval();
                        $xfer += $this->X->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->Y = new \MInterval();
                        $xfer += $this->Y->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRUCT) {
                        $this->Z = new \MInterval();
                        $xfer += $this->Z->read($input);
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
        $xfer += $output->writeStructBegin('MInterval3');
        if ($this->X !== null) {
            if (!is_object($this->X)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('X', TType::STRUCT, 1);
            $xfer += $this->X->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->Y !== null) {
            if (!is_object($this->Y)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('Y', TType::STRUCT, 2);
            $xfer += $this->Y->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->Z !== null) {
            if (!is_object($this->Z)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('Z', TType::STRUCT, 3);
            $xfer += $this->Z->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
