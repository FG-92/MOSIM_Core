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

class MAdapterDescription
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'Name',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'ID',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'Language',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'Addresses',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\MIPAddress',
                ),
        ),
        5 => array(
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
        6 => array(
            'var' => 'Parameters',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\MParameter',
                ),
        ),
    );

    /**
     * @var string
     */
    public $Name = null;
    /**
     * @var string
     */
    public $ID = null;
    /**
     * @var string
     */
    public $Language = null;
    /**
     * @var \MIPAddress[]
     */
    public $Addresses = null;
    /**
     * @var array
     */
    public $Properties = null;
    /**
     * @var \MParameter[]
     */
    public $Parameters = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['Name'])) {
                $this->Name = $vals['Name'];
            }
            if (isset($vals['ID'])) {
                $this->ID = $vals['ID'];
            }
            if (isset($vals['Language'])) {
                $this->Language = $vals['Language'];
            }
            if (isset($vals['Addresses'])) {
                $this->Addresses = $vals['Addresses'];
            }
            if (isset($vals['Properties'])) {
                $this->Properties = $vals['Properties'];
            }
            if (isset($vals['Parameters'])) {
                $this->Parameters = $vals['Parameters'];
            }
        }
    }

    public function getName()
    {
        return 'MAdapterDescription';
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
                        $xfer += $input->readString($this->Name);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->ID);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->Language);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::LST) {
                        $this->Addresses = array();
                        $_size0 = 0;
                        $_etype3 = 0;
                        $xfer += $input->readListBegin($_etype3, $_size0);
                        for ($_i4 = 0; $_i4 < $_size0; ++$_i4) {
                            $elem5 = null;
                            $elem5 = new \MIPAddress();
                            $xfer += $elem5->read($input);
                            $this->Addresses []= $elem5;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::MAP) {
                        $this->Properties = array();
                        $_size6 = 0;
                        $_ktype7 = 0;
                        $_vtype8 = 0;
                        $xfer += $input->readMapBegin($_ktype7, $_vtype8, $_size6);
                        for ($_i10 = 0; $_i10 < $_size6; ++$_i10) {
                            $key11 = '';
                            $val12 = '';
                            $xfer += $input->readString($key11);
                            $xfer += $input->readString($val12);
                            $this->Properties[$key11] = $val12;
                        }
                        $xfer += $input->readMapEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::LST) {
                        $this->Parameters = array();
                        $_size13 = 0;
                        $_etype16 = 0;
                        $xfer += $input->readListBegin($_etype16, $_size13);
                        for ($_i17 = 0; $_i17 < $_size13; ++$_i17) {
                            $elem18 = null;
                            $elem18 = new \MParameter();
                            $xfer += $elem18->read($input);
                            $this->Parameters []= $elem18;
                        }
                        $xfer += $input->readListEnd();
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
        $xfer += $output->writeStructBegin('MAdapterDescription');
        if ($this->Name !== null) {
            $xfer += $output->writeFieldBegin('Name', TType::STRING, 1);
            $xfer += $output->writeString($this->Name);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->ID !== null) {
            $xfer += $output->writeFieldBegin('ID', TType::STRING, 2);
            $xfer += $output->writeString($this->ID);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->Language !== null) {
            $xfer += $output->writeFieldBegin('Language', TType::STRING, 3);
            $xfer += $output->writeString($this->Language);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->Addresses !== null) {
            if (!is_array($this->Addresses)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('Addresses', TType::LST, 4);
            $output->writeListBegin(TType::STRUCT, count($this->Addresses));
            foreach ($this->Addresses as $iter19) {
                $xfer += $iter19->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->Properties !== null) {
            if (!is_array($this->Properties)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('Properties', TType::MAP, 5);
            $output->writeMapBegin(TType::STRING, TType::STRING, count($this->Properties));
            foreach ($this->Properties as $kiter20 => $viter21) {
                $xfer += $output->writeString($kiter20);
                $xfer += $output->writeString($viter21);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->Parameters !== null) {
            if (!is_array($this->Parameters)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('Parameters', TType::LST, 6);
            $output->writeListBegin(TType::STRUCT, count($this->Parameters));
            foreach ($this->Parameters as $iter22) {
                $xfer += $iter22->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
