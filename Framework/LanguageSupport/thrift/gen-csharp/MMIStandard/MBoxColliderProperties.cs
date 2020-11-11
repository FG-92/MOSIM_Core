/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
using System.IO;
using Thrift;
using Thrift.Collections;
using System.Runtime.Serialization;
using Thrift.Protocol;
using Thrift.Transport;

namespace MMIStandard
{

  #if !SILVERLIGHT
  [Serializable]
  #endif
  public partial class MBoxColliderProperties : TBase
  {

    public MMIStandard.MVector3 Size { get; set; }

    public MBoxColliderProperties() {
    }

    public MBoxColliderProperties(MMIStandard.MVector3 Size) : this() {
      this.Size = Size;
    }

    public void Read (TProtocol iprot)
    {
      iprot.IncrementRecursionDepth();
      try
      {
        bool isset_Size = false;
        TField field;
        iprot.ReadStructBegin();
        while (true)
        {
          field = iprot.ReadFieldBegin();
          if (field.Type == TType.Stop) { 
            break;
          }
          switch (field.ID)
          {
            case 1:
              if (field.Type == TType.Struct) {
                Size = new MMIStandard.MVector3();
                Size.Read(iprot);
                isset_Size = true;
              } else { 
                TProtocolUtil.Skip(iprot, field.Type);
              }
              break;
            default: 
              TProtocolUtil.Skip(iprot, field.Type);
              break;
          }
          iprot.ReadFieldEnd();
        }
        iprot.ReadStructEnd();
        if (!isset_Size)
          throw new TProtocolException(TProtocolException.INVALID_DATA, "required field Size not set");
      }
      finally
      {
        iprot.DecrementRecursionDepth();
      }
    }

    public void Write(TProtocol oprot) {
      oprot.IncrementRecursionDepth();
      try
      {
        TStruct struc = new TStruct("MBoxColliderProperties");
        oprot.WriteStructBegin(struc);
        TField field = new TField();
        if (Size == null)
          throw new TProtocolException(TProtocolException.INVALID_DATA, "required field Size not set");
        field.Name = "Size";
        field.Type = TType.Struct;
        field.ID = 1;
        oprot.WriteFieldBegin(field);
        Size.Write(oprot);
        oprot.WriteFieldEnd();
        oprot.WriteFieldStop();
        oprot.WriteStructEnd();
      }
      finally
      {
        oprot.DecrementRecursionDepth();
      }
    }

    public override string ToString() {
      StringBuilder __sb = new StringBuilder("MBoxColliderProperties(");
      __sb.Append(", Size: ");
      __sb.Append(Size== null ? "<null>" : Size.ToString());
      __sb.Append(")");
      return __sb.ToString();
    }

  }

}