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
import MMIStandard.services.MMIServiceBase
import logging
from .ttypes import *
from thrift.Thrift import TProcessor
from thrift.transport import TTransport
all_structs = []


class Iface(MMIStandard.services.MMIServiceBase.Iface):
    def SetBlendingMask(self, mask, avatarID):
        """
        Parameters:
         - mask
         - avatarID

        """
        pass

    def Blend(self, startPosture, targetPosture, weight):
        """
        Parameters:
         - startPosture
         - targetPosture
         - weight

        """
        pass


class Client(MMIStandard.services.MMIServiceBase.Client, Iface):
    def __init__(self, iprot, oprot=None):
        MMIStandard.services.MMIServiceBase.Client.__init__(self, iprot, oprot)

    def SetBlendingMask(self, mask, avatarID):
        """
        Parameters:
         - mask
         - avatarID

        """
        self.send_SetBlendingMask(mask, avatarID)
        return self.recv_SetBlendingMask()

    def send_SetBlendingMask(self, mask, avatarID):
        self._oprot.writeMessageBegin('SetBlendingMask', TMessageType.CALL, self._seqid)
        args = SetBlendingMask_args()
        args.mask = mask
        args.avatarID = avatarID
        args.write(self._oprot)
        self._oprot.writeMessageEnd()
        self._oprot.trans.flush()

    def recv_SetBlendingMask(self):
        iprot = self._iprot
        (fname, mtype, rseqid) = iprot.readMessageBegin()
        if mtype == TMessageType.EXCEPTION:
            x = TApplicationException()
            x.read(iprot)
            iprot.readMessageEnd()
            raise x
        result = SetBlendingMask_result()
        result.read(iprot)
        iprot.readMessageEnd()
        if result.success is not None:
            return result.success
        raise TApplicationException(TApplicationException.MISSING_RESULT, "SetBlendingMask failed: unknown result")

    def Blend(self, startPosture, targetPosture, weight):
        """
        Parameters:
         - startPosture
         - targetPosture
         - weight

        """
        self.send_Blend(startPosture, targetPosture, weight)
        return self.recv_Blend()

    def send_Blend(self, startPosture, targetPosture, weight):
        self._oprot.writeMessageBegin('Blend', TMessageType.CALL, self._seqid)
        args = Blend_args()
        args.startPosture = startPosture
        args.targetPosture = targetPosture
        args.weight = weight
        args.write(self._oprot)
        self._oprot.writeMessageEnd()
        self._oprot.trans.flush()

    def recv_Blend(self):
        iprot = self._iprot
        (fname, mtype, rseqid) = iprot.readMessageBegin()
        if mtype == TMessageType.EXCEPTION:
            x = TApplicationException()
            x.read(iprot)
            iprot.readMessageEnd()
            raise x
        result = Blend_result()
        result.read(iprot)
        iprot.readMessageEnd()
        if result.success is not None:
            return result.success
        raise TApplicationException(TApplicationException.MISSING_RESULT, "Blend failed: unknown result")


class Processor(MMIStandard.services.MMIServiceBase.Processor, Iface, TProcessor):
    def __init__(self, handler):
        MMIStandard.services.MMIServiceBase.Processor.__init__(self, handler)
        self._processMap["SetBlendingMask"] = Processor.process_SetBlendingMask
        self._processMap["Blend"] = Processor.process_Blend
        self._on_message_begin = None

    def on_message_begin(self, func):
        self._on_message_begin = func

    def process(self, iprot, oprot):
        (name, type, seqid) = iprot.readMessageBegin()
        if self._on_message_begin:
            self._on_message_begin(name, type, seqid)
        if name not in self._processMap:
            iprot.skip(TType.STRUCT)
            iprot.readMessageEnd()
            x = TApplicationException(TApplicationException.UNKNOWN_METHOD, 'Unknown function %s' % (name))
            oprot.writeMessageBegin(name, TMessageType.EXCEPTION, seqid)
            x.write(oprot)
            oprot.writeMessageEnd()
            oprot.trans.flush()
            return
        else:
            self._processMap[name](self, seqid, iprot, oprot)
        return True

    def process_SetBlendingMask(self, seqid, iprot, oprot):
        args = SetBlendingMask_args()
        args.read(iprot)
        iprot.readMessageEnd()
        result = SetBlendingMask_result()
        try:
            result.success = self._handler.SetBlendingMask(args.mask, args.avatarID)
            msg_type = TMessageType.REPLY
        except TTransport.TTransportException:
            raise
        except TApplicationException as ex:
            logging.exception('TApplication exception in handler')
            msg_type = TMessageType.EXCEPTION
            result = ex
        except Exception:
            logging.exception('Unexpected exception in handler')
            msg_type = TMessageType.EXCEPTION
            result = TApplicationException(TApplicationException.INTERNAL_ERROR, 'Internal error')
        oprot.writeMessageBegin("SetBlendingMask", msg_type, seqid)
        result.write(oprot)
        oprot.writeMessageEnd()
        oprot.trans.flush()

    def process_Blend(self, seqid, iprot, oprot):
        args = Blend_args()
        args.read(iprot)
        iprot.readMessageEnd()
        result = Blend_result()
        try:
            result.success = self._handler.Blend(args.startPosture, args.targetPosture, args.weight)
            msg_type = TMessageType.REPLY
        except TTransport.TTransportException:
            raise
        except TApplicationException as ex:
            logging.exception('TApplication exception in handler')
            msg_type = TMessageType.EXCEPTION
            result = ex
        except Exception:
            logging.exception('Unexpected exception in handler')
            msg_type = TMessageType.EXCEPTION
            result = TApplicationException(TApplicationException.INTERNAL_ERROR, 'Internal error')
        oprot.writeMessageBegin("Blend", msg_type, seqid)
        result.write(oprot)
        oprot.writeMessageEnd()
        oprot.trans.flush()

# HELPER FUNCTIONS AND STRUCTURES


class SetBlendingMask_args(object):
    """
    Attributes:
     - mask
     - avatarID

    """


    def __init__(self, mask=None, avatarID=None,):
        self.mask = mask
        self.avatarID = avatarID

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
                if ftype == TType.MAP:
                    self.mask = {}
                    (_ktype183, _vtype184, _size182) = iprot.readMapBegin()
                    for _i186 in range(_size182):
                        _key187 = MMIStandard.math.ttypes.MTransform()
                        _key187.read(iprot)
                        _val188 = iprot.readDouble()
                        self.mask[_key187] = _val188
                    iprot.readMapEnd()
                else:
                    iprot.skip(ftype)
            elif fid == 2:
                if ftype == TType.STRING:
                    self.avatarID = iprot.readString().decode('utf-8') if sys.version_info[0] == 2 else iprot.readString()
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
        oprot.writeStructBegin('SetBlendingMask_args')
        if self.mask is not None:
            oprot.writeFieldBegin('mask', TType.MAP, 1)
            oprot.writeMapBegin(TType.STRUCT, TType.DOUBLE, len(self.mask))
            for kiter189, viter190 in self.mask.items():
                kiter189.write(oprot)
                oprot.writeDouble(viter190)
            oprot.writeMapEnd()
            oprot.writeFieldEnd()
        if self.avatarID is not None:
            oprot.writeFieldBegin('avatarID', TType.STRING, 2)
            oprot.writeString(self.avatarID.encode('utf-8') if sys.version_info[0] == 2 else self.avatarID)
            oprot.writeFieldEnd()
        oprot.writeFieldStop()
        oprot.writeStructEnd()

    def validate(self):
        return

    def __repr__(self):
        L = ['%s=%r' % (key, value)
             for key, value in self.__dict__.items()]
        return '%s(%s)' % (self.__class__.__name__, ', '.join(L))

    def __eq__(self, other):
        return isinstance(other, self.__class__) and self.__dict__ == other.__dict__

    def __ne__(self, other):
        return not (self == other)
all_structs.append(SetBlendingMask_args)
SetBlendingMask_args.thrift_spec = (
    None,  # 0
    (1, TType.MAP, 'mask', (TType.STRUCT, [MMIStandard.math.ttypes.MTransform, None], TType.DOUBLE, None, False), None, ),  # 1
    (2, TType.STRING, 'avatarID', 'UTF8', None, ),  # 2
)


class SetBlendingMask_result(object):
    """
    Attributes:
     - success

    """


    def __init__(self, success=None,):
        self.success = success

    def read(self, iprot):
        if iprot._fast_decode is not None and isinstance(iprot.trans, TTransport.CReadableTransport) and self.thrift_spec is not None:
            iprot._fast_decode(self, iprot, [self.__class__, self.thrift_spec])
            return
        iprot.readStructBegin()
        while True:
            (fname, ftype, fid) = iprot.readFieldBegin()
            if ftype == TType.STOP:
                break
            if fid == 0:
                if ftype == TType.STRUCT:
                    self.success = MMIStandard.core.ttypes.MBoolResponse()
                    self.success.read(iprot)
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
        oprot.writeStructBegin('SetBlendingMask_result')
        if self.success is not None:
            oprot.writeFieldBegin('success', TType.STRUCT, 0)
            self.success.write(oprot)
            oprot.writeFieldEnd()
        oprot.writeFieldStop()
        oprot.writeStructEnd()

    def validate(self):
        return

    def __repr__(self):
        L = ['%s=%r' % (key, value)
             for key, value in self.__dict__.items()]
        return '%s(%s)' % (self.__class__.__name__, ', '.join(L))

    def __eq__(self, other):
        return isinstance(other, self.__class__) and self.__dict__ == other.__dict__

    def __ne__(self, other):
        return not (self == other)
all_structs.append(SetBlendingMask_result)
SetBlendingMask_result.thrift_spec = (
    (0, TType.STRUCT, 'success', [MMIStandard.core.ttypes.MBoolResponse, None], None, ),  # 0
)


class Blend_args(object):
    """
    Attributes:
     - startPosture
     - targetPosture
     - weight

    """


    def __init__(self, startPosture=None, targetPosture=None, weight=None,):
        self.startPosture = startPosture
        self.targetPosture = targetPosture
        self.weight = weight

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
                    self.startPosture = MMIStandard.avatar.ttypes.MAvatarPostureValues()
                    self.startPosture.read(iprot)
                else:
                    iprot.skip(ftype)
            elif fid == 2:
                if ftype == TType.STRUCT:
                    self.targetPosture = MMIStandard.avatar.ttypes.MAvatarPostureValues()
                    self.targetPosture.read(iprot)
                else:
                    iprot.skip(ftype)
            elif fid == 3:
                if ftype == TType.DOUBLE:
                    self.weight = iprot.readDouble()
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
        oprot.writeStructBegin('Blend_args')
        if self.startPosture is not None:
            oprot.writeFieldBegin('startPosture', TType.STRUCT, 1)
            self.startPosture.write(oprot)
            oprot.writeFieldEnd()
        if self.targetPosture is not None:
            oprot.writeFieldBegin('targetPosture', TType.STRUCT, 2)
            self.targetPosture.write(oprot)
            oprot.writeFieldEnd()
        if self.weight is not None:
            oprot.writeFieldBegin('weight', TType.DOUBLE, 3)
            oprot.writeDouble(self.weight)
            oprot.writeFieldEnd()
        oprot.writeFieldStop()
        oprot.writeStructEnd()

    def validate(self):
        return

    def __repr__(self):
        L = ['%s=%r' % (key, value)
             for key, value in self.__dict__.items()]
        return '%s(%s)' % (self.__class__.__name__, ', '.join(L))

    def __eq__(self, other):
        return isinstance(other, self.__class__) and self.__dict__ == other.__dict__

    def __ne__(self, other):
        return not (self == other)
all_structs.append(Blend_args)
Blend_args.thrift_spec = (
    None,  # 0
    (1, TType.STRUCT, 'startPosture', [MMIStandard.avatar.ttypes.MAvatarPostureValues, None], None, ),  # 1
    (2, TType.STRUCT, 'targetPosture', [MMIStandard.avatar.ttypes.MAvatarPostureValues, None], None, ),  # 2
    (3, TType.DOUBLE, 'weight', None, None, ),  # 3
)


class Blend_result(object):
    """
    Attributes:
     - success

    """


    def __init__(self, success=None,):
        self.success = success

    def read(self, iprot):
        if iprot._fast_decode is not None and isinstance(iprot.trans, TTransport.CReadableTransport) and self.thrift_spec is not None:
            iprot._fast_decode(self, iprot, [self.__class__, self.thrift_spec])
            return
        iprot.readStructBegin()
        while True:
            (fname, ftype, fid) = iprot.readFieldBegin()
            if ftype == TType.STOP:
                break
            if fid == 0:
                if ftype == TType.STRUCT:
                    self.success = MMIStandard.avatar.ttypes.MAvatarPostureValues()
                    self.success.read(iprot)
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
        oprot.writeStructBegin('Blend_result')
        if self.success is not None:
            oprot.writeFieldBegin('success', TType.STRUCT, 0)
            self.success.write(oprot)
            oprot.writeFieldEnd()
        oprot.writeFieldStop()
        oprot.writeStructEnd()

    def validate(self):
        return

    def __repr__(self):
        L = ['%s=%r' % (key, value)
             for key, value in self.__dict__.items()]
        return '%s(%s)' % (self.__class__.__name__, ', '.join(L))

    def __eq__(self, other):
        return isinstance(other, self.__class__) and self.__dict__ == other.__dict__

    def __ne__(self, other):
        return not (self == other)
all_structs.append(Blend_result)
Blend_result.thrift_spec = (
    (0, TType.STRUCT, 'success', [MMIStandard.avatar.ttypes.MAvatarPostureValues, None], None, ),  # 0
)
fix_spec(all_structs)
del all_structs

