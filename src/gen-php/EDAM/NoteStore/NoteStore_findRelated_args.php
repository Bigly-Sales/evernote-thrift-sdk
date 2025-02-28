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

class NoteStore_findRelated_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'authenticationToken',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'query',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\EDAM\NoteStore\RelatedQuery',
        ),
        3 => array(
            'var' => 'resultSpec',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\EDAM\NoteStore\RelatedResultSpec',
        ),
    );

    /**
     * @var string
     */
    public $authenticationToken = null;
    /**
     * @var \EDAM\NoteStore\RelatedQuery
     */
    public $query = null;
    /**
     * @var \EDAM\NoteStore\RelatedResultSpec
     */
    public $resultSpec = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['authenticationToken'])) {
                $this->authenticationToken = $vals['authenticationToken'];
            }
            if (isset($vals['query'])) {
                $this->query = $vals['query'];
            }
            if (isset($vals['resultSpec'])) {
                $this->resultSpec = $vals['resultSpec'];
            }
        }
    }

    public function getName()
    {
        return 'NoteStore_findRelated_args';
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
                        $xfer += $input->readString($this->authenticationToken);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->query = new \EDAM\NoteStore\RelatedQuery();
                        $xfer += $this->query->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRUCT) {
                        $this->resultSpec = new \EDAM\NoteStore\RelatedResultSpec();
                        $xfer += $this->resultSpec->read($input);
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
        $xfer += $output->writeStructBegin('NoteStore_findRelated_args');
        if ($this->authenticationToken !== null) {
            $xfer += $output->writeFieldBegin('authenticationToken', TType::STRING, 1);
            $xfer += $output->writeString($this->authenticationToken);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->query !== null) {
            if (!is_object($this->query)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('query', TType::STRUCT, 2);
            $xfer += $this->query->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->resultSpec !== null) {
            if (!is_object($this->resultSpec)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('resultSpec', TType::STRUCT, 3);
            $xfer += $this->resultSpec->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
