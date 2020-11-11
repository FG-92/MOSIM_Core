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

class MAJANService_ReceiveAsync_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'actionID',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'answer',
            'isRequired' => false,
            'type' => TType::I32,
        ),
    );

    /**
     * @var string
     */
    public $actionID = null;
    /**
     * @var int
     */
    public $answer = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['actionID'])) {
                $this->actionID = $vals['actionID'];
            }
            if (isset($vals['answer'])) {
                $this->answer = $vals['answer'];
            }
        }
    }

    public function getName()
    {
        return 'MAJANService_ReceiveAsync_args';
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
                        $xfer += $input->readString($this->actionID);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->answer);
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
        $xfer += $output->writeStructBegin('MAJANService_ReceiveAsync_args');
        if ($this->actionID !== null) {
            $xfer += $output->writeFieldBegin('actionID', TType::STRING, 1);
            $xfer += $output->writeString($this->actionID);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->answer !== null) {
            $xfer += $output->writeFieldBegin('answer', TType::I32, 2);
            $xfer += $output->writeI32($this->answer);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
