<?php
namespace EDAM\NoteStore;

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

class NoteStore_authenticateToSharedNotebook_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'shareKeyOrGlobalId',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'authenticationToken',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $shareKeyOrGlobalId = null;
    /**
     * @var string
     */
    public $authenticationToken = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['shareKeyOrGlobalId'])) {
                $this->shareKeyOrGlobalId = $vals['shareKeyOrGlobalId'];
            }
            if (isset($vals['authenticationToken'])) {
                $this->authenticationToken = $vals['authenticationToken'];
            }
        }
    }

    public function getName()
    {
        return 'NoteStore_authenticateToSharedNotebook_args';
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
                        $xfer += $input->readString($this->shareKeyOrGlobalId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->authenticationToken);
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
        $xfer += $output->writeStructBegin('NoteStore_authenticateToSharedNotebook_args');
        if ($this->shareKeyOrGlobalId !== null) {
            $xfer += $output->writeFieldBegin('shareKeyOrGlobalId', TType::STRING, 1);
            $xfer += $output->writeString($this->shareKeyOrGlobalId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->authenticationToken !== null) {
            $xfer += $output->writeFieldBegin('authenticationToken', TType::STRING, 2);
            $xfer += $output->writeString($this->authenticationToken);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
