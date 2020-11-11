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

class MWalkPointEstimationService_EstimateWalkPoints_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'sceneObjects',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\MSceneObject',
                ),
        ),
        2 => array(
            'var' => 'target',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\MSceneObject',
        ),
        3 => array(
            'var' => 'amount',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        4 => array(
            'var' => 'properties',
            'isRequired' => false,
            'type' => TType::MAP,
            'ktype' => TType::STRING,
            'vtype' => TType::STRING,
            'key' => array(
                'type' => TType::STRING,
            ),
            'val' => array(
                'type' => TType::STRING,
                ),
        ),
    );

    /**
     * @var \MSceneObject[]
     */
    public $sceneObjects = null;
    /**
     * @var \MSceneObject
     */
    public $target = null;
    /**
     * @var int
     */
    public $amount = null;
    /**
     * @var array
     */
    public $properties = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['sceneObjects'])) {
                $this->sceneObjects = $vals['sceneObjects'];
            }
            if (isset($vals['target'])) {
                $this->target = $vals['target'];
            }
            if (isset($vals['amount'])) {
                $this->amount = $vals['amount'];
            }
            if (isset($vals['properties'])) {
                $this->properties = $vals['properties'];
            }
        }
    }

    public function getName()
    {
        return 'MWalkPointEstimationService_EstimateWalkPoints_args';
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
                    if ($ftype == TType::LST) {
                        $this->sceneObjects = array();
                        $_size280 = 0;
                        $_etype283 = 0;
                        $xfer += $input->readListBegin($_etype283, $_size280);
                        for ($_i284 = 0; $_i284 < $_size280; ++$_i284) {
                            $elem285 = null;
                            $elem285 = new \MSceneObject();
                            $xfer += $elem285->read($input);
                            $this->sceneObjects []= $elem285;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->target = new \MSceneObject();
                        $xfer += $this->target->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->amount);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::MAP) {
                        $this->properties = array();
                        $_size286 = 0;
                        $_ktype287 = 0;
                        $_vtype288 = 0;
                        $xfer += $input->readMapBegin($_ktype287, $_vtype288, $_size286);
                        for ($_i290 = 0; $_i290 < $_size286; ++$_i290) {
                            $key291 = '';
                            $val292 = '';
                            $xfer += $input->readString($key291);
                            $xfer += $input->readString($val292);
                            $this->properties[$key291] = $val292;
                        }
                        $xfer += $input->readMapEnd();
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
        $xfer += $output->writeStructBegin('MWalkPointEstimationService_EstimateWalkPoints_args');
        if ($this->sceneObjects !== null) {
            if (!is_array($this->sceneObjects)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('sceneObjects', TType::LST, 1);
            $output->writeListBegin(TType::STRUCT, count($this->sceneObjects));
            foreach ($this->sceneObjects as $iter293) {
                $xfer += $iter293->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->target !== null) {
            if (!is_object($this->target)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('target', TType::STRUCT, 2);
            $xfer += $this->target->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->amount !== null) {
            $xfer += $output->writeFieldBegin('amount', TType::I32, 3);
            $xfer += $output->writeI32($this->amount);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->properties !== null) {
            if (!is_array($this->properties)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('properties', TType::MAP, 4);
            $output->writeMapBegin(TType::STRING, TType::STRING, count($this->properties));
            foreach ($this->properties as $kiter294 => $viter295) {
                $xfer += $output->writeString($kiter294);
                $xfer += $output->writeString($viter295);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
