/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
package de.mosim.mmi.services;

@SuppressWarnings({"cast", "rawtypes", "serial", "unchecked", "unused"})
@javax.annotation.Generated(value = "Autogenerated by Thrift Compiler (0.13.0)", date = "2020-10-20")
public class MIKProperty implements org.apache.thrift.TBase<MIKProperty, MIKProperty._Fields>, java.io.Serializable, Cloneable, Comparable<MIKProperty> {
  private static final org.apache.thrift.protocol.TStruct STRUCT_DESC = new org.apache.thrift.protocol.TStruct("MIKProperty");

  private static final org.apache.thrift.protocol.TField VALUES_FIELD_DESC = new org.apache.thrift.protocol.TField("Values", org.apache.thrift.protocol.TType.LIST, (short)1);
  private static final org.apache.thrift.protocol.TField WEIGHT_FIELD_DESC = new org.apache.thrift.protocol.TField("Weight", org.apache.thrift.protocol.TType.DOUBLE, (short)2);
  private static final org.apache.thrift.protocol.TField TARGET_FIELD_DESC = new org.apache.thrift.protocol.TField("Target", org.apache.thrift.protocol.TType.I32, (short)3);
  private static final org.apache.thrift.protocol.TField OPERATION_TYPE_FIELD_DESC = new org.apache.thrift.protocol.TField("OperationType", org.apache.thrift.protocol.TType.I32, (short)4);

  private static final org.apache.thrift.scheme.SchemeFactory STANDARD_SCHEME_FACTORY = new MIKPropertyStandardSchemeFactory();
  private static final org.apache.thrift.scheme.SchemeFactory TUPLE_SCHEME_FACTORY = new MIKPropertyTupleSchemeFactory();

  public @org.apache.thrift.annotation.Nullable java.util.List<java.lang.Double> Values; // required
  public double Weight; // required
  /**
   * 
   * @see de.mosim.mmi.avatar.MEndeffectorType
   */
  public @org.apache.thrift.annotation.Nullable de.mosim.mmi.avatar.MEndeffectorType Target; // required
  /**
   * 
   * @see MIKOperationType
   */
  public @org.apache.thrift.annotation.Nullable MIKOperationType OperationType; // required

  /** The set of fields this struct contains, along with convenience methods for finding and manipulating them. */
  public enum _Fields implements org.apache.thrift.TFieldIdEnum {
    VALUES((short)1, "Values"),
    WEIGHT((short)2, "Weight"),
    /**
     * 
     * @see de.mosim.mmi.avatar.MEndeffectorType
     */
    TARGET((short)3, "Target"),
    /**
     * 
     * @see MIKOperationType
     */
    OPERATION_TYPE((short)4, "OperationType");

    private static final java.util.Map<java.lang.String, _Fields> byName = new java.util.HashMap<java.lang.String, _Fields>();

    static {
      for (_Fields field : java.util.EnumSet.allOf(_Fields.class)) {
        byName.put(field.getFieldName(), field);
      }
    }

    /**
     * Find the _Fields constant that matches fieldId, or null if its not found.
     */
    @org.apache.thrift.annotation.Nullable
    public static _Fields findByThriftId(int fieldId) {
      switch(fieldId) {
        case 1: // VALUES
          return VALUES;
        case 2: // WEIGHT
          return WEIGHT;
        case 3: // TARGET
          return TARGET;
        case 4: // OPERATION_TYPE
          return OPERATION_TYPE;
        default:
          return null;
      }
    }

    /**
     * Find the _Fields constant that matches fieldId, throwing an exception
     * if it is not found.
     */
    public static _Fields findByThriftIdOrThrow(int fieldId) {
      _Fields fields = findByThriftId(fieldId);
      if (fields == null) throw new java.lang.IllegalArgumentException("Field " + fieldId + " doesn't exist!");
      return fields;
    }

    /**
     * Find the _Fields constant that matches name, or null if its not found.
     */
    @org.apache.thrift.annotation.Nullable
    public static _Fields findByName(java.lang.String name) {
      return byName.get(name);
    }

    private final short _thriftId;
    private final java.lang.String _fieldName;

    _Fields(short thriftId, java.lang.String fieldName) {
      _thriftId = thriftId;
      _fieldName = fieldName;
    }

    public short getThriftFieldId() {
      return _thriftId;
    }

    public java.lang.String getFieldName() {
      return _fieldName;
    }
  }

  // isset id assignments
  private static final int __WEIGHT_ISSET_ID = 0;
  private byte __isset_bitfield = 0;
  public static final java.util.Map<_Fields, org.apache.thrift.meta_data.FieldMetaData> metaDataMap;
  static {
    java.util.Map<_Fields, org.apache.thrift.meta_data.FieldMetaData> tmpMap = new java.util.EnumMap<_Fields, org.apache.thrift.meta_data.FieldMetaData>(_Fields.class);
    tmpMap.put(_Fields.VALUES, new org.apache.thrift.meta_data.FieldMetaData("Values", org.apache.thrift.TFieldRequirementType.REQUIRED, 
        new org.apache.thrift.meta_data.ListMetaData(org.apache.thrift.protocol.TType.LIST, 
            new org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.DOUBLE))));
    tmpMap.put(_Fields.WEIGHT, new org.apache.thrift.meta_data.FieldMetaData("Weight", org.apache.thrift.TFieldRequirementType.REQUIRED, 
        new org.apache.thrift.meta_data.FieldValueMetaData(org.apache.thrift.protocol.TType.DOUBLE)));
    tmpMap.put(_Fields.TARGET, new org.apache.thrift.meta_data.FieldMetaData("Target", org.apache.thrift.TFieldRequirementType.REQUIRED, 
        new org.apache.thrift.meta_data.EnumMetaData(org.apache.thrift.protocol.TType.ENUM, de.mosim.mmi.avatar.MEndeffectorType.class)));
    tmpMap.put(_Fields.OPERATION_TYPE, new org.apache.thrift.meta_data.FieldMetaData("OperationType", org.apache.thrift.TFieldRequirementType.REQUIRED, 
        new org.apache.thrift.meta_data.EnumMetaData(org.apache.thrift.protocol.TType.ENUM, MIKOperationType.class)));
    metaDataMap = java.util.Collections.unmodifiableMap(tmpMap);
    org.apache.thrift.meta_data.FieldMetaData.addStructMetaDataMap(MIKProperty.class, metaDataMap);
  }

  public MIKProperty() {
  }

  public MIKProperty(
    java.util.List<java.lang.Double> Values,
    double Weight,
    de.mosim.mmi.avatar.MEndeffectorType Target,
    MIKOperationType OperationType)
  {
    this();
    this.Values = Values;
    this.Weight = Weight;
    setWeightIsSet(true);
    this.Target = Target;
    this.OperationType = OperationType;
  }

  /**
   * Performs a deep copy on <i>other</i>.
   */
  public MIKProperty(MIKProperty other) {
    __isset_bitfield = other.__isset_bitfield;
    if (other.isSetValues()) {
      java.util.List<java.lang.Double> __this__Values = new java.util.ArrayList<java.lang.Double>(other.Values);
      this.Values = __this__Values;
    }
    this.Weight = other.Weight;
    if (other.isSetTarget()) {
      this.Target = other.Target;
    }
    if (other.isSetOperationType()) {
      this.OperationType = other.OperationType;
    }
  }

  public MIKProperty deepCopy() {
    return new MIKProperty(this);
  }

  @Override
  public void clear() {
    this.Values = null;
    setWeightIsSet(false);
    this.Weight = 0.0;
    this.Target = null;
    this.OperationType = null;
  }

  public int getValuesSize() {
    return (this.Values == null) ? 0 : this.Values.size();
  }

  @org.apache.thrift.annotation.Nullable
  public java.util.Iterator<java.lang.Double> getValuesIterator() {
    return (this.Values == null) ? null : this.Values.iterator();
  }

  public void addToValues(double elem) {
    if (this.Values == null) {
      this.Values = new java.util.ArrayList<java.lang.Double>();
    }
    this.Values.add(elem);
  }

  @org.apache.thrift.annotation.Nullable
  public java.util.List<java.lang.Double> getValues() {
    return this.Values;
  }

  public MIKProperty setValues(@org.apache.thrift.annotation.Nullable java.util.List<java.lang.Double> Values) {
    this.Values = Values;
    return this;
  }

  public void unsetValues() {
    this.Values = null;
  }

  /** Returns true if field Values is set (has been assigned a value) and false otherwise */
  public boolean isSetValues() {
    return this.Values != null;
  }

  public void setValuesIsSet(boolean value) {
    if (!value) {
      this.Values = null;
    }
  }

  public double getWeight() {
    return this.Weight;
  }

  public MIKProperty setWeight(double Weight) {
    this.Weight = Weight;
    setWeightIsSet(true);
    return this;
  }

  public void unsetWeight() {
    __isset_bitfield = org.apache.thrift.EncodingUtils.clearBit(__isset_bitfield, __WEIGHT_ISSET_ID);
  }

  /** Returns true if field Weight is set (has been assigned a value) and false otherwise */
  public boolean isSetWeight() {
    return org.apache.thrift.EncodingUtils.testBit(__isset_bitfield, __WEIGHT_ISSET_ID);
  }

  public void setWeightIsSet(boolean value) {
    __isset_bitfield = org.apache.thrift.EncodingUtils.setBit(__isset_bitfield, __WEIGHT_ISSET_ID, value);
  }

  /**
   * 
   * @see de.mosim.mmi.avatar.MEndeffectorType
   */
  @org.apache.thrift.annotation.Nullable
  public de.mosim.mmi.avatar.MEndeffectorType getTarget() {
    return this.Target;
  }

  /**
   * 
   * @see de.mosim.mmi.avatar.MEndeffectorType
   */
  public MIKProperty setTarget(@org.apache.thrift.annotation.Nullable de.mosim.mmi.avatar.MEndeffectorType Target) {
    this.Target = Target;
    return this;
  }

  public void unsetTarget() {
    this.Target = null;
  }

  /** Returns true if field Target is set (has been assigned a value) and false otherwise */
  public boolean isSetTarget() {
    return this.Target != null;
  }

  public void setTargetIsSet(boolean value) {
    if (!value) {
      this.Target = null;
    }
  }

  /**
   * 
   * @see MIKOperationType
   */
  @org.apache.thrift.annotation.Nullable
  public MIKOperationType getOperationType() {
    return this.OperationType;
  }

  /**
   * 
   * @see MIKOperationType
   */
  public MIKProperty setOperationType(@org.apache.thrift.annotation.Nullable MIKOperationType OperationType) {
    this.OperationType = OperationType;
    return this;
  }

  public void unsetOperationType() {
    this.OperationType = null;
  }

  /** Returns true if field OperationType is set (has been assigned a value) and false otherwise */
  public boolean isSetOperationType() {
    return this.OperationType != null;
  }

  public void setOperationTypeIsSet(boolean value) {
    if (!value) {
      this.OperationType = null;
    }
  }

  public void setFieldValue(_Fields field, @org.apache.thrift.annotation.Nullable java.lang.Object value) {
    switch (field) {
    case VALUES:
      if (value == null) {
        unsetValues();
      } else {
        setValues((java.util.List<java.lang.Double>)value);
      }
      break;

    case WEIGHT:
      if (value == null) {
        unsetWeight();
      } else {
        setWeight((java.lang.Double)value);
      }
      break;

    case TARGET:
      if (value == null) {
        unsetTarget();
      } else {
        setTarget((de.mosim.mmi.avatar.MEndeffectorType)value);
      }
      break;

    case OPERATION_TYPE:
      if (value == null) {
        unsetOperationType();
      } else {
        setOperationType((MIKOperationType)value);
      }
      break;

    }
  }

  @org.apache.thrift.annotation.Nullable
  public java.lang.Object getFieldValue(_Fields field) {
    switch (field) {
    case VALUES:
      return getValues();

    case WEIGHT:
      return getWeight();

    case TARGET:
      return getTarget();

    case OPERATION_TYPE:
      return getOperationType();

    }
    throw new java.lang.IllegalStateException();
  }

  /** Returns true if field corresponding to fieldID is set (has been assigned a value) and false otherwise */
  public boolean isSet(_Fields field) {
    if (field == null) {
      throw new java.lang.IllegalArgumentException();
    }

    switch (field) {
    case VALUES:
      return isSetValues();
    case WEIGHT:
      return isSetWeight();
    case TARGET:
      return isSetTarget();
    case OPERATION_TYPE:
      return isSetOperationType();
    }
    throw new java.lang.IllegalStateException();
  }

  @Override
  public boolean equals(java.lang.Object that) {
    if (that == null)
      return false;
    if (that instanceof MIKProperty)
      return this.equals((MIKProperty)that);
    return false;
  }

  public boolean equals(MIKProperty that) {
    if (that == null)
      return false;
    if (this == that)
      return true;

    boolean this_present_Values = true && this.isSetValues();
    boolean that_present_Values = true && that.isSetValues();
    if (this_present_Values || that_present_Values) {
      if (!(this_present_Values && that_present_Values))
        return false;
      if (!this.Values.equals(that.Values))
        return false;
    }

    boolean this_present_Weight = true;
    boolean that_present_Weight = true;
    if (this_present_Weight || that_present_Weight) {
      if (!(this_present_Weight && that_present_Weight))
        return false;
      if (this.Weight != that.Weight)
        return false;
    }

    boolean this_present_Target = true && this.isSetTarget();
    boolean that_present_Target = true && that.isSetTarget();
    if (this_present_Target || that_present_Target) {
      if (!(this_present_Target && that_present_Target))
        return false;
      if (!this.Target.equals(that.Target))
        return false;
    }

    boolean this_present_OperationType = true && this.isSetOperationType();
    boolean that_present_OperationType = true && that.isSetOperationType();
    if (this_present_OperationType || that_present_OperationType) {
      if (!(this_present_OperationType && that_present_OperationType))
        return false;
      if (!this.OperationType.equals(that.OperationType))
        return false;
    }

    return true;
  }

  @Override
  public int hashCode() {
    int hashCode = 1;

    hashCode = hashCode * 8191 + ((isSetValues()) ? 131071 : 524287);
    if (isSetValues())
      hashCode = hashCode * 8191 + Values.hashCode();

    hashCode = hashCode * 8191 + org.apache.thrift.TBaseHelper.hashCode(Weight);

    hashCode = hashCode * 8191 + ((isSetTarget()) ? 131071 : 524287);
    if (isSetTarget())
      hashCode = hashCode * 8191 + Target.getValue();

    hashCode = hashCode * 8191 + ((isSetOperationType()) ? 131071 : 524287);
    if (isSetOperationType())
      hashCode = hashCode * 8191 + OperationType.getValue();

    return hashCode;
  }

  @Override
  public int compareTo(MIKProperty other) {
    if (!getClass().equals(other.getClass())) {
      return getClass().getName().compareTo(other.getClass().getName());
    }

    int lastComparison = 0;

    lastComparison = java.lang.Boolean.valueOf(isSetValues()).compareTo(other.isSetValues());
    if (lastComparison != 0) {
      return lastComparison;
    }
    if (isSetValues()) {
      lastComparison = org.apache.thrift.TBaseHelper.compareTo(this.Values, other.Values);
      if (lastComparison != 0) {
        return lastComparison;
      }
    }
    lastComparison = java.lang.Boolean.valueOf(isSetWeight()).compareTo(other.isSetWeight());
    if (lastComparison != 0) {
      return lastComparison;
    }
    if (isSetWeight()) {
      lastComparison = org.apache.thrift.TBaseHelper.compareTo(this.Weight, other.Weight);
      if (lastComparison != 0) {
        return lastComparison;
      }
    }
    lastComparison = java.lang.Boolean.valueOf(isSetTarget()).compareTo(other.isSetTarget());
    if (lastComparison != 0) {
      return lastComparison;
    }
    if (isSetTarget()) {
      lastComparison = org.apache.thrift.TBaseHelper.compareTo(this.Target, other.Target);
      if (lastComparison != 0) {
        return lastComparison;
      }
    }
    lastComparison = java.lang.Boolean.valueOf(isSetOperationType()).compareTo(other.isSetOperationType());
    if (lastComparison != 0) {
      return lastComparison;
    }
    if (isSetOperationType()) {
      lastComparison = org.apache.thrift.TBaseHelper.compareTo(this.OperationType, other.OperationType);
      if (lastComparison != 0) {
        return lastComparison;
      }
    }
    return 0;
  }

  @org.apache.thrift.annotation.Nullable
  public _Fields fieldForId(int fieldId) {
    return _Fields.findByThriftId(fieldId);
  }

  public void read(org.apache.thrift.protocol.TProtocol iprot) throws org.apache.thrift.TException {
    scheme(iprot).read(iprot, this);
  }

  public void write(org.apache.thrift.protocol.TProtocol oprot) throws org.apache.thrift.TException {
    scheme(oprot).write(oprot, this);
  }

  @Override
  public java.lang.String toString() {
    java.lang.StringBuilder sb = new java.lang.StringBuilder("MIKProperty(");
    boolean first = true;

    sb.append("Values:");
    if (this.Values == null) {
      sb.append("null");
    } else {
      sb.append(this.Values);
    }
    first = false;
    if (!first) sb.append(", ");
    sb.append("Weight:");
    sb.append(this.Weight);
    first = false;
    if (!first) sb.append(", ");
    sb.append("Target:");
    if (this.Target == null) {
      sb.append("null");
    } else {
      sb.append(this.Target);
    }
    first = false;
    if (!first) sb.append(", ");
    sb.append("OperationType:");
    if (this.OperationType == null) {
      sb.append("null");
    } else {
      sb.append(this.OperationType);
    }
    first = false;
    sb.append(")");
    return sb.toString();
  }

  public void validate() throws org.apache.thrift.TException {
    // check for required fields
    if (Values == null) {
      throw new org.apache.thrift.protocol.TProtocolException("Required field 'Values' was not present! Struct: " + toString());
    }
    // alas, we cannot check 'Weight' because it's a primitive and you chose the non-beans generator.
    if (Target == null) {
      throw new org.apache.thrift.protocol.TProtocolException("Required field 'Target' was not present! Struct: " + toString());
    }
    if (OperationType == null) {
      throw new org.apache.thrift.protocol.TProtocolException("Required field 'OperationType' was not present! Struct: " + toString());
    }
    // check for sub-struct validity
  }

  private void writeObject(java.io.ObjectOutputStream out) throws java.io.IOException {
    try {
      write(new org.apache.thrift.protocol.TCompactProtocol(new org.apache.thrift.transport.TIOStreamTransport(out)));
    } catch (org.apache.thrift.TException te) {
      throw new java.io.IOException(te);
    }
  }

  private void readObject(java.io.ObjectInputStream in) throws java.io.IOException, java.lang.ClassNotFoundException {
    try {
      // it doesn't seem like you should have to do this, but java serialization is wacky, and doesn't call the default constructor.
      __isset_bitfield = 0;
      read(new org.apache.thrift.protocol.TCompactProtocol(new org.apache.thrift.transport.TIOStreamTransport(in)));
    } catch (org.apache.thrift.TException te) {
      throw new java.io.IOException(te);
    }
  }

  private static class MIKPropertyStandardSchemeFactory implements org.apache.thrift.scheme.SchemeFactory {
    public MIKPropertyStandardScheme getScheme() {
      return new MIKPropertyStandardScheme();
    }
  }

  private static class MIKPropertyStandardScheme extends org.apache.thrift.scheme.StandardScheme<MIKProperty> {

    public void read(org.apache.thrift.protocol.TProtocol iprot, MIKProperty struct) throws org.apache.thrift.TException {
      org.apache.thrift.protocol.TField schemeField;
      iprot.readStructBegin();
      while (true)
      {
        schemeField = iprot.readFieldBegin();
        if (schemeField.type == org.apache.thrift.protocol.TType.STOP) { 
          break;
        }
        switch (schemeField.id) {
          case 1: // VALUES
            if (schemeField.type == org.apache.thrift.protocol.TType.LIST) {
              {
                org.apache.thrift.protocol.TList _list8 = iprot.readListBegin();
                struct.Values = new java.util.ArrayList<java.lang.Double>(_list8.size);
                double _elem9;
                for (int _i10 = 0; _i10 < _list8.size; ++_i10)
                {
                  _elem9 = iprot.readDouble();
                  struct.Values.add(_elem9);
                }
                iprot.readListEnd();
              }
              struct.setValuesIsSet(true);
            } else { 
              org.apache.thrift.protocol.TProtocolUtil.skip(iprot, schemeField.type);
            }
            break;
          case 2: // WEIGHT
            if (schemeField.type == org.apache.thrift.protocol.TType.DOUBLE) {
              struct.Weight = iprot.readDouble();
              struct.setWeightIsSet(true);
            } else { 
              org.apache.thrift.protocol.TProtocolUtil.skip(iprot, schemeField.type);
            }
            break;
          case 3: // TARGET
            if (schemeField.type == org.apache.thrift.protocol.TType.I32) {
              struct.Target = de.mosim.mmi.avatar.MEndeffectorType.findByValue(iprot.readI32());
              struct.setTargetIsSet(true);
            } else { 
              org.apache.thrift.protocol.TProtocolUtil.skip(iprot, schemeField.type);
            }
            break;
          case 4: // OPERATION_TYPE
            if (schemeField.type == org.apache.thrift.protocol.TType.I32) {
              struct.OperationType = de.mosim.mmi.services.MIKOperationType.findByValue(iprot.readI32());
              struct.setOperationTypeIsSet(true);
            } else { 
              org.apache.thrift.protocol.TProtocolUtil.skip(iprot, schemeField.type);
            }
            break;
          default:
            org.apache.thrift.protocol.TProtocolUtil.skip(iprot, schemeField.type);
        }
        iprot.readFieldEnd();
      }
      iprot.readStructEnd();

      // check for required fields of primitive type, which can't be checked in the validate method
      if (!struct.isSetWeight()) {
        throw new org.apache.thrift.protocol.TProtocolException("Required field 'Weight' was not found in serialized data! Struct: " + toString());
      }
      struct.validate();
    }

    public void write(org.apache.thrift.protocol.TProtocol oprot, MIKProperty struct) throws org.apache.thrift.TException {
      struct.validate();

      oprot.writeStructBegin(STRUCT_DESC);
      if (struct.Values != null) {
        oprot.writeFieldBegin(VALUES_FIELD_DESC);
        {
          oprot.writeListBegin(new org.apache.thrift.protocol.TList(org.apache.thrift.protocol.TType.DOUBLE, struct.Values.size()));
          for (double _iter11 : struct.Values)
          {
            oprot.writeDouble(_iter11);
          }
          oprot.writeListEnd();
        }
        oprot.writeFieldEnd();
      }
      oprot.writeFieldBegin(WEIGHT_FIELD_DESC);
      oprot.writeDouble(struct.Weight);
      oprot.writeFieldEnd();
      if (struct.Target != null) {
        oprot.writeFieldBegin(TARGET_FIELD_DESC);
        oprot.writeI32(struct.Target.getValue());
        oprot.writeFieldEnd();
      }
      if (struct.OperationType != null) {
        oprot.writeFieldBegin(OPERATION_TYPE_FIELD_DESC);
        oprot.writeI32(struct.OperationType.getValue());
        oprot.writeFieldEnd();
      }
      oprot.writeFieldStop();
      oprot.writeStructEnd();
    }

  }

  private static class MIKPropertyTupleSchemeFactory implements org.apache.thrift.scheme.SchemeFactory {
    public MIKPropertyTupleScheme getScheme() {
      return new MIKPropertyTupleScheme();
    }
  }

  private static class MIKPropertyTupleScheme extends org.apache.thrift.scheme.TupleScheme<MIKProperty> {

    @Override
    public void write(org.apache.thrift.protocol.TProtocol prot, MIKProperty struct) throws org.apache.thrift.TException {
      org.apache.thrift.protocol.TTupleProtocol oprot = (org.apache.thrift.protocol.TTupleProtocol) prot;
      {
        oprot.writeI32(struct.Values.size());
        for (double _iter12 : struct.Values)
        {
          oprot.writeDouble(_iter12);
        }
      }
      oprot.writeDouble(struct.Weight);
      oprot.writeI32(struct.Target.getValue());
      oprot.writeI32(struct.OperationType.getValue());
    }

    @Override
    public void read(org.apache.thrift.protocol.TProtocol prot, MIKProperty struct) throws org.apache.thrift.TException {
      org.apache.thrift.protocol.TTupleProtocol iprot = (org.apache.thrift.protocol.TTupleProtocol) prot;
      {
        org.apache.thrift.protocol.TList _list13 = new org.apache.thrift.protocol.TList(org.apache.thrift.protocol.TType.DOUBLE, iprot.readI32());
        struct.Values = new java.util.ArrayList<java.lang.Double>(_list13.size);
        double _elem14;
        for (int _i15 = 0; _i15 < _list13.size; ++_i15)
        {
          _elem14 = iprot.readDouble();
          struct.Values.add(_elem14);
        }
      }
      struct.setValuesIsSet(true);
      struct.Weight = iprot.readDouble();
      struct.setWeightIsSet(true);
      struct.Target = de.mosim.mmi.avatar.MEndeffectorType.findByValue(iprot.readI32());
      struct.setTargetIsSet(true);
      struct.OperationType = de.mosim.mmi.services.MIKOperationType.findByValue(iprot.readI32());
      struct.setOperationTypeIsSet(true);
    }
  }

  private static <S extends org.apache.thrift.scheme.IScheme> S scheme(org.apache.thrift.protocol.TProtocol proto) {
    return (org.apache.thrift.scheme.StandardScheme.class.equals(proto.getScheme()) ? STANDARD_SCHEME_FACTORY : TUPLE_SCHEME_FACTORY).getScheme();
  }
}

