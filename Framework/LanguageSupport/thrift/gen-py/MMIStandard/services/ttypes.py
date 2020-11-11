#
# Autogenerated by Thrift Compiler (0.13.0)
#
# DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
#
#  options string: py
#

from thrift.Thrift import TType, TMessageType, TFrozenDict, TException, TApplicationException
from thrift.protocol.TProtocol import TProtocolException
from thrift.TRecursive import fix_spec

import sys
import MMIStandard.core.ttypes
import MMIStandard.scene.ttypes
import MMIStandard.math.ttypes
import MMIStandard.avatar.ttypes
import MMIStandard.constraints.ttypes

from thrift.transport import TTransport
all_structs = []


class MDirection(object):
    Right = 0
    Left = 1
    Up = 2
    Down = 3
    Forward = 4
    Backward = 5

    _VALUES_TO_NAMES = {
        0: "Right",
        1: "Left",
        2: "Up",
        3: "Down",
        4: "Forward",
        5: "Backward",
    }

    _NAMES_TO_VALUES = {
        "Right": 0,
        "Left": 1,
        "Up": 2,
        "Down": 3,
        "Forward": 4,
        "Backward": 5,
    }


class MIKOperationType(object):
    SetPosition = 0
    SetRotation = 1

    _VALUES_TO_NAMES = {
        0: "SetPosition",
        1: "SetRotation",
    }

    _NAMES_TO_VALUES = {
        "SetPosition": 0,
        "SetRotation": 1,
    }


class MIKServiceResult(object):
    """
    Attributes:
     - Posture
     - Success
     - Error

    """


    def __init__(self, Posture=None, Success=None, Error=None,):
        self.Posture = Posture
        self.Success = Success
        self.Error = Error

    def read(self, iprot):
        if iprot._fast_decode is not None and isinstance(iprot.trans, TTransport.CReadableTransport) and self.thrift_spec is not None:
            iprot._fast_decode(self, iprot, [self.__class__, self.thrift_spec])
            return
        iprot.readStructBegin()
        while True:
            (fname, ftype, fid) = iprot.readFieldBegin()
            if ftype == TType.STOP:
                break
            if fid == 1:
                if ftype == TType.STRUCT:
                    self.Posture = MMIStandard.avatar.ttypes.MAvatarPostureValues()
                    self.Posture.read(iprot)
                else:
                    iprot.skip(ftype)
            elif fid == 2:
                if ftype == TType.BOOL:
                    self.Success = iprot.readBool()
                else:
                    iprot.skip(ftype)
            elif fid == 3:
                if ftype == TType.LIST:
                    self.Error = []
                    (_etype3, _size0) = iprot.readListBegin()
                    for _i4 in range(_size0):
                        _elem5 = iprot.readDouble()
                        self.Error.append(_elem5)
                    iprot.readListEnd()
                else:
                    iprot.skip(ftype)
            else:
                iprot.skip(ftype)
            iprot.readFieldEnd()
        iprot.readStructEnd()

    def write(self, oprot):
        if oprot._fast_encode is not None and self.thrift_spec is not None:
            oprot.trans.write(oprot._fast_encode(self, [self.__class__, self.thrift_spec]))
            return
        oprot.writeStructBegin('MIKServiceResult')
        if self.Posture is not None:
            oprot.writeFieldBegin('Posture', TType.STRUCT, 1)
            self.Posture.write(oprot)
            oprot.writeFieldEnd()
        if self.Success is not None:
            oprot.writeFieldBegin('Success', TType.BOOL, 2)
            oprot.writeBool(self.Success)
            oprot.writeFieldEnd()
        if self.Error is not None:
            oprot.writeFieldBegin('Error', TType.LIST, 3)
            oprot.writeListBegin(TType.DOUBLE, len(self.Error))
            for iter6 in self.Error:
                oprot.writeDouble(iter6)
            oprot.writeListEnd()
            oprot.writeFieldEnd()
        oprot.writeFieldStop()
        oprot.writeStructEnd()

    def validate(self):
        if self.Posture is None:
            raise TProtocolException(message='Required field Posture is unset!')
        if self.Success is None:
            raise TProtocolException(message='Required field Success is unset!')
        if self.Error is None:
            raise TProtocolException(message='Required field Error is unset!')
        return

    def __repr__(self):
        L = ['%s=%r' % (key, value)
             for key, value in self.__dict__.items()]
        return '%s(%s)' % (self.__class__.__name__, ', '.join(L))

    def __eq__(self, other):
        return isinstance(other, self.__class__) and self.__dict__ == other.__dict__

    def __ne__(self, other):
        return not (self == other)


class MWalkPoint(object):
    """
    Attributes:
     - PositionConstraint
     - Suitability

    """


    def __init__(self, PositionConstraint=None, Suitability=None,):
        self.PositionConstraint = PositionConstraint
        self.Suitability = Suitability

    def read(self, iprot):
        if iprot._fast_decode is not None and isinstance(iprot.trans, TTransport.CReadableTransport) and self.thrift_spec is not None:
            iprot._fast_decode(self, iprot, [self.__class__, self.thrift_spec])
            return
        iprot.readStructBegin()
        while True:
            (fname, ftype, fid) = iprot.readFieldBegin()
            if ftype == TType.STOP:
                break
            if fid == 1:
                if ftype == TType.STRUCT:
                    self.PositionConstraint = MMIStandard.constraints.ttypes.MGeometryConstraint()
                    self.PositionConstraint.read(iprot)
                else:
                    iprot.skip(ftype)
            elif fid == 2:
                if ftype == TType.DOUBLE:
                    self.Suitability = iprot.readDouble()
                else:
                    iprot.skip(ftype)
            else:
                iprot.skip(ftype)
            iprot.readFieldEnd()
        iprot.readStructEnd()

    def write(self, oprot):
        if oprot._fast_encode is not None and self.thrift_spec is not None:
            oprot.trans.write(oprot._fast_encode(self, [self.__class__, self.thrift_spec]))
            return
        oprot.writeStructBegin('MWalkPoint')
        if self.PositionConstraint is not None:
            oprot.writeFieldBegin('PositionConstraint', TType.STRUCT, 1)
            self.PositionConstraint.write(oprot)
            oprot.writeFieldEnd()
        if self.Suitability is not None:
            oprot.writeFieldBegin('Suitability', TType.DOUBLE, 2)
            oprot.writeDouble(self.Suitability)
            oprot.writeFieldEnd()
        oprot.writeFieldStop()
        oprot.writeStructEnd()

    def validate(self):
        if self.PositionConstraint is None:
            raise TProtocolException(message='Required field PositionConstraint is unset!')
        if self.Suitability is None:
            raise TProtocolException(message='Required field Suitability is unset!')
        return

    def __repr__(self):
        L = ['%s=%r' % (key, value)
             for key, value in self.__dict__.items()]
        return '%s(%s)' % (self.__class__.__name__, ', '.join(L))

    def __eq__(self, other):
        return isinstance(other, self.__class__) and self.__dict__ == other.__dict__

    def __ne__(self, other):
        return not (self == other)


class MIKProperty(object):
    """
    Attributes:
     - Values
     - Weight
     - Target
     - OperationType

    """


    def __init__(self, Values=None, Weight=None, Target=None, OperationType=None,):
        self.Values = Values
        self.Weight = Weight
        self.Target = Target
        self.OperationType = OperationType

    def read(self, iprot):
        if iprot._fast_decode is not None and isinstance(iprot.trans, TTransport.CReadableTransport) and self.thrift_spec is not None:
            iprot._fast_decode(self, iprot, [self.__class__, self.thrift_spec])
            return
        iprot.readStructBegin()
        while True:
            (fname, ftype, fid) = iprot.readFieldBegin()
            if ftype == TType.STOP:
                break
            if fid == 1:
                if ftype == TType.LIST:
                    self.Values = []
                    (_etype10, _size7) = iprot.readListBegin()
                    for _i11 in range(_size7):
                        _elem12 = iprot.readDouble()
                        self.Values.append(_elem12)
                    iprot.readListEnd()
                else:
                    iprot.skip(ftype)
            elif fid == 2:
                if ftype == TType.DOUBLE:
                    self.Weight = iprot.readDouble()
                else:
                    iprot.skip(ftype)
            elif fid == 3:
                if ftype == TType.I32:
                    self.Target = iprot.readI32()
                else:
                    iprot.skip(ftype)
            elif fid == 4:
                if ftype == TType.I32:
                    self.OperationType = iprot.readI32()
                else:
                    iprot.skip(ftype)
            else:
                iprot.skip(ftype)
            iprot.readFieldEnd()
        iprot.readStructEnd()

    def write(self, oprot):
        if oprot._fast_encode is not None and self.thrift_spec is not None:
            oprot.trans.write(oprot._fast_encode(self, [self.__class__, self.thrift_spec]))
            return
        oprot.writeStructBegin('MIKProperty')
        if self.Values is not None:
            oprot.writeFieldBegin('Values', TType.LIST, 1)
            oprot.writeListBegin(TType.DOUBLE, len(self.Values))
            for iter13 in self.Values:
                oprot.writeDouble(iter13)
            oprot.writeListEnd()
            oprot.writeFieldEnd()
        if self.Weight is not None:
            oprot.writeFieldBegin('Weight', TType.DOUBLE, 2)
            oprot.writeDouble(self.Weight)
            oprot.writeFieldEnd()
        if self.Target is not None:
            oprot.writeFieldBegin('Target', TType.I32, 3)
            oprot.writeI32(self.Target)
            oprot.writeFieldEnd()
        if self.OperationType is not None:
            oprot.writeFieldBegin('OperationType', TType.I32, 4)
            oprot.writeI32(self.OperationType)
            oprot.writeFieldEnd()
        oprot.writeFieldStop()
        oprot.writeStructEnd()

    def validate(self):
        if self.Values is None:
            raise TProtocolException(message='Required field Values is unset!')
        if self.Weight is None:
            raise TProtocolException(message='Required field Weight is unset!')
        if self.Target is None:
            raise TProtocolException(message='Required field Target is unset!')
        if self.OperationType is None:
            raise TProtocolException(message='Required field OperationType is unset!')
        return

    def __repr__(self):
        L = ['%s=%r' % (key, value)
             for key, value in self.__dict__.items()]
        return '%s(%s)' % (self.__class__.__name__, ', '.join(L))

    def __eq__(self, other):
        return isinstance(other, self.__class__) and self.__dict__ == other.__dict__

    def __ne__(self, other):
        return not (self == other)
all_structs.append(MIKServiceResult)
MIKServiceResult.thrift_spec = (
    None,  # 0
    (1, TType.STRUCT, 'Posture', [MMIStandard.avatar.ttypes.MAvatarPostureValues, None], None, ),  # 1
    (2, TType.BOOL, 'Success', None, None, ),  # 2
    (3, TType.LIST, 'Error', (TType.DOUBLE, None, False), None, ),  # 3
)
all_structs.append(MWalkPoint)
MWalkPoint.thrift_spec = (
    None,  # 0
    (1, TType.STRUCT, 'PositionConstraint', [MMIStandard.constraints.ttypes.MGeometryConstraint, None], None, ),  # 1
    (2, TType.DOUBLE, 'Suitability', None, None, ),  # 2
)
all_structs.append(MIKProperty)
MIKProperty.thrift_spec = (
    None,  # 0
    (1, TType.LIST, 'Values', (TType.DOUBLE, None, False), None, ),  # 1
    (2, TType.DOUBLE, 'Weight', None, None, ),  # 2
    (3, TType.I32, 'Target', None, None, ),  # 3
    (4, TType.I32, 'OperationType', None, None, ),  # 4
)
fix_spec(all_structs)
del all_structs