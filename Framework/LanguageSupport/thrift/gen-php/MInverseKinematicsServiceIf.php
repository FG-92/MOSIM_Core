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

interface MInverseKinematicsServiceIf extends \MMIServiceBaseIf
{
    /**
     * @param \MAvatarPostureValues $postureValues
     * @param \MIKProperty[] $properties
     * @return \MAvatarPostureValues
     */
    public function ComputeIK(\MAvatarPostureValues $postureValues, array $properties);
    /**
     * @param \MAvatarPostureValues $postureValues
     * @param \MConstraint[] $constraints
     * @param array $properties
     * @return \MIKServiceResult
     */
    public function CalculateIKPosture(\MAvatarPostureValues $postureValues, array $constraints, array $properties);
}