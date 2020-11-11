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
  public partial class MPathConstraint : TBase
  {
    private double _WeightingFactor;

    public List<MGeometryConstraint> PolygonPoints { get; set; }

    public double WeightingFactor
    {
      get
      {
        return _WeightingFactor;
      }
      set
      {
        __isset.WeightingFactor = true;
        this._WeightingFactor = value;
      }
    }


    public Isset __isset;
    #if !SILVERLIGHT
    [Serializable]
    #endif
    public struct Isset {
      public bool WeightingFactor;
    }

    public MPathConstraint() {
    }

    public MPathConstraint(List<MGeometryConstraint> PolygonPoints) : this() {
      this.PolygonPoints = PolygonPoints;
    }

    public void Read (TProtocol iprot)
    {
      iprot.IncrementRecursionDepth();
      try
      {
        bool isset_PolygonPoints = false;
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
              if (field.Type == TType.List) {
                {
                  PolygonPoints = new List<MGeometryConstraint>();
                  TList _list5 = iprot.ReadListBegin();
                  for( int _i6 = 0; _i6 < _list5.Count; ++_i6)
                  {
                    MGeometryConstraint _elem7;
                    _elem7 = new MGeometryConstraint();
                    _elem7.Read(iprot);
                    PolygonPoints.Add(_elem7);
                  }
                  iprot.ReadListEnd();
                }
                isset_PolygonPoints = true;
              } else { 
                TProtocolUtil.Skip(iprot, field.Type);
              }
              break;
            case 2:
              if (field.Type == TType.Double) {
                WeightingFactor = iprot.ReadDouble();
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
        if (!isset_PolygonPoints)
          throw new TProtocolException(TProtocolException.INVALID_DATA, "required field PolygonPoints not set");
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
        TStruct struc = new TStruct("MPathConstraint");
        oprot.WriteStructBegin(struc);
        TField field = new TField();
        if (PolygonPoints == null)
          throw new TProtocolException(TProtocolException.INVALID_DATA, "required field PolygonPoints not set");
        field.Name = "PolygonPoints";
        field.Type = TType.List;
        field.ID = 1;
        oprot.WriteFieldBegin(field);
        {
          oprot.WriteListBegin(new TList(TType.Struct, PolygonPoints.Count));
          foreach (MGeometryConstraint _iter8 in PolygonPoints)
          {
            _iter8.Write(oprot);
          }
          oprot.WriteListEnd();
        }
        oprot.WriteFieldEnd();
        if (__isset.WeightingFactor) {
          field.Name = "WeightingFactor";
          field.Type = TType.Double;
          field.ID = 2;
          oprot.WriteFieldBegin(field);
          oprot.WriteDouble(WeightingFactor);
          oprot.WriteFieldEnd();
        }
        oprot.WriteFieldStop();
        oprot.WriteStructEnd();
      }
      finally
      {
        oprot.DecrementRecursionDepth();
      }
    }

    public override string ToString() {
      StringBuilder __sb = new StringBuilder("MPathConstraint(");
      __sb.Append(", PolygonPoints: ");
      __sb.Append(PolygonPoints);
      if (__isset.WeightingFactor) {
        __sb.Append(", WeightingFactor: ");
        __sb.Append(WeightingFactor);
      }
      __sb.Append(")");
      return __sb.ToString();
    }

  }

}
