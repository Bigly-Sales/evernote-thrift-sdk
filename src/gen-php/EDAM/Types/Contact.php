<?php
namespace EDAM\Types;

/**
 * Autogenerated by Thrift Compiler (0.21.0)
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

/**
 * A structure that represents contact information. Note this does not necessarily correspond to
 * an Evernote user.
 * 
 * <dl>
 * <dt>name</dt>
 * <dd>The displayable name of this contact. This field is filled in by the service and
 *     is read-only to clients.
 * </dd>
 * <dt>id</dt>
 * <dd>A unique identifier for this ContactType.
 * </dd>
 * <dt>type</dt>
 * <dd>What service does this contact come from?
 * </dd>
 * <dt>photoUrl</dt>
 * <dd>A URL of a profile photo representing this Contact. This field is filled in by the
 *     service and is read-only to clients.
 * </dd>
 * <dt>photoLastUpdated</dt>
 * <dd>timestamp when the profile photo at 'photoUrl' was last updated.
 *     This field will be null if the user has never set a profile photo.
 *     This field is filled in by the service and is read-only to clients.
 * </dd>
 * <dt>messagingPermit</dt>
 * <dd>This field will only be filled by the service when it is giving a Contact record
 *     to a client, and that client does not normally have enough permission to send a
 *     new message to the person represented through this Contact. In that case, this
 *     whole Contact record could be used to send a new Message to the Contact, and the
 *     service will inspect this permit to confirm that operation was allowed.
 * </dd>
 * <dt>messagingPermitExpires</dt>
 * <dd>If this field is set, then this (whole) Contact record may be used in calls to
 *     sendMessage until this time. After that time, those calls may be rejected by the
 *     service if the caller does not have direct permission to initiate a message with
 *     the represented Evernote user.
 * </dd>
 * </dl>
 */
class Contact
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'name',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'id',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'type',
            'isRequired' => false,
            'type' => TType::I32,
            'class' => '\EDAM\Types\ContactType',
        ),
        4 => array(
            'var' => 'photoUrl',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'photoLastUpdated',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        6 => array(
            'var' => 'messagingPermit',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        7 => array(
            'var' => 'messagingPermitExpires',
            'isRequired' => false,
            'type' => TType::I64,
        ),
    );

    /**
     * @var string
     */
    public $name = null;
    /**
     * @var string
     */
    public $id = null;
    /**
     * @var int
     */
    public $type = null;
    /**
     * @var string
     */
    public $photoUrl = null;
    /**
     * @var int
     */
    public $photoLastUpdated = null;
    /**
     * @var string
     */
    public $messagingPermit = null;
    /**
     * @var int
     */
    public $messagingPermitExpires = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['name'])) {
                $this->name = $vals['name'];
            }
            if (isset($vals['id'])) {
                $this->id = $vals['id'];
            }
            if (isset($vals['type'])) {
                $this->type = $vals['type'];
            }
            if (isset($vals['photoUrl'])) {
                $this->photoUrl = $vals['photoUrl'];
            }
            if (isset($vals['photoLastUpdated'])) {
                $this->photoLastUpdated = $vals['photoLastUpdated'];
            }
            if (isset($vals['messagingPermit'])) {
                $this->messagingPermit = $vals['messagingPermit'];
            }
            if (isset($vals['messagingPermitExpires'])) {
                $this->messagingPermitExpires = $vals['messagingPermitExpires'];
            }
        }
    }

    public function getName()
    {
        return 'Contact';
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
                        $xfer += $input->readString($this->name);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->type);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->photoUrl);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->photoLastUpdated);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->messagingPermit);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->messagingPermitExpires);
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
        $xfer += $output->writeStructBegin('Contact');
        if ($this->name !== null) {
            $xfer += $output->writeFieldBegin('name', TType::STRING, 1);
            $xfer += $output->writeString($this->name);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->id !== null) {
            $xfer += $output->writeFieldBegin('id', TType::STRING, 2);
            $xfer += $output->writeString($this->id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->type !== null) {
            $xfer += $output->writeFieldBegin('type', TType::I32, 3);
            $xfer += $output->writeI32($this->type);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->photoUrl !== null) {
            $xfer += $output->writeFieldBegin('photoUrl', TType::STRING, 4);
            $xfer += $output->writeString($this->photoUrl);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->photoLastUpdated !== null) {
            $xfer += $output->writeFieldBegin('photoLastUpdated', TType::I64, 5);
            $xfer += $output->writeI64($this->photoLastUpdated);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->messagingPermit !== null) {
            $xfer += $output->writeFieldBegin('messagingPermit', TType::STRING, 6);
            $xfer += $output->writeString($this->messagingPermit);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->messagingPermitExpires !== null) {
            $xfer += $output->writeFieldBegin('messagingPermitExpires', TType::I64, 7);
            $xfer += $output->writeI64($this->messagingPermitExpires);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
