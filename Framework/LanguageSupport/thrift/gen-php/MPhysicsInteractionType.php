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

final class MPhysicsInteractionType
{
    const AddForce = 0;

    const AddTorque = 1;

    const ChangeVelocity = 2;

    const ChangeAngularVelocity = 3;

    const ChangeMass = 4;

    const ChangeCenterOfMass = 5;

    const ChangeInertia = 6;

    static public $__names = array(
        0 => 'AddForce',
        1 => 'AddTorque',
        2 => 'ChangeVelocity',
        3 => 'ChangeAngularVelocity',
        4 => 'ChangeMass',
        5 => 'ChangeCenterOfMass',
        6 => 'ChangeInertia',
    );
}
