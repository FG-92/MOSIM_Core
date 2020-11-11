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

interface MMIServiceBaseIf
{
    /**
     * @return array
     */
    public function GetStatus();
    /**
     * @return \MServiceDescription
     */
    public function GetDescription();
    /**
     * @param \MAvatarDescription $avatar
     * @param array $properties
     * @return \MBoolResponse
     */
    public function Setup(\MAvatarDescription $avatar, array $properties);
    /**
     * @param array $properties
     * @return array
     */
    public function Consume(array $properties);
    /**
     * @param array $properties
     * @return \MBoolResponse
     */
    public function Dispose(array $properties);
    /**
     * @param array $properties
     * @return \MBoolResponse
     */
    public function Restart(array $properties);
}
