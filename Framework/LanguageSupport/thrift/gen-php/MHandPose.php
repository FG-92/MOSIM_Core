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

class MHandPose
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'Joints',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\MJoint',
                ),
        ),
        2 => array(
            'var' => 'Properties',
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
     * @var \MJoint[]
     */
    public $Joints = null;
    /**
     * @var array
     */
    public $Properties = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['Joints'])) {
                $this->Joints = $vals['Joints'];
            }
            if (isset($vals['Properties'])) {
                $this->Properties = $vals['Properties'];
            }
        }
    }

    public function getName()
    {
        return 'MHandPose';
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
                        $this->Joints = array();
                        $_size28 = 0;
                        $_etype31 = 0;
                        $xfer += $input->readListBegin($_etype31, $_size28);
                        for ($_i32 = 0; $_i32 < $_size28; ++$_i32) {
                            $elem33 = null;
                            $elem33 = new \MJoint();
                            $xfer += $elem33->read($input);
                            $this->Joints []= $elem33;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::MAP) {
                        $this->Properties = array();
                        $_size34 = 0;
                        $_ktype35 = 0;
                        $_vtype36 = 0;
                        $xfer += $input->readMapBegin($_ktype35, $_vtype36, $_size34);
                        for ($_i38 = 0; $_i38 < $_size34; ++$_i38) {
                            $key39 = '';
                            $val40 = '';
                            $xfer += $input->readString($key39);
                            $xfer += $input->readString($val40);
                            $this->Properties[$key39] = $val40;
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
        $xfer += $output->writeStructBegin('MHandPose');
        if ($this->Joints !== null) {
            if (!is_array($this->Joints)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('Joints', TType::LST, 1);
            $output->writeListBegin(TType::STRUCT, count($this->Joints));
            foreach ($this->Joints as $iter41) {
                $xfer += $iter41->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->Properties !== null) {
            if (!is_array($this->Properties)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('Properties', TType::MAP, 2);
            $output->writeMapBegin(TType::STRING, TType::STRING, count($this->Properties));
            foreach ($this->Properties as $kiter42 => $viter43) {
                $xfer += $output->writeString($kiter42);
                $xfer += $output->writeString($viter43);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
