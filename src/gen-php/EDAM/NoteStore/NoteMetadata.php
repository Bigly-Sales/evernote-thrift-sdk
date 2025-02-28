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

/**
 * This structure is used in the set of results returned by the
 * findNotesMetadata function.  It represents the high-level information about
 * a single Note, without some of the larger deep structure.  This allows
 * for the information about a list of Notes to be returned relatively quickly
 * with less marshalling and data transfer to remote clients.
 * Most fields in this structure are identical to the corresponding field in
 * the Note structure, with the exception of:
 * 
 * <dl>
 * <dt>largestResourceMime</dt>
 *   <dd>If set, then this will contain the MIME type of the largest Resource
 *   (in bytes) within the Note.  This may be useful, for example, to choose
 *   an appropriate icon or thumbnail to represent the Note.
 *   </dd>
 * 
 * <dt>largestResourceSize</dt>
 *  <dd>If set, this will contain the size of the largest Resource file, in
 *  bytes, within the Note.  This may be useful, for example, to decide whether
 *  to ask the server for a thumbnail to represent the Note.
 *  </dd>
 * </dl>
 */
class NoteMetadata
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'guid',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'title',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'contentLength',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        6 => array(
            'var' => 'created',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        7 => array(
            'var' => 'updated',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        8 => array(
            'var' => 'deleted',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        10 => array(
            'var' => 'updateSequenceNum',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        11 => array(
            'var' => 'notebookGuid',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        12 => array(
            'var' => 'tagGuids',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        14 => array(
            'var' => 'attributes',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\EDAM\Types\NoteAttributes',
        ),
        20 => array(
            'var' => 'largestResourceMime',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        21 => array(
            'var' => 'largestResourceSize',
            'isRequired' => false,
            'type' => TType::I32,
        ),
    );

    /**
     * @var string
     */
    public $guid = null;
    /**
     * @var string
     */
    public $title = null;
    /**
     * @var int
     */
    public $contentLength = null;
    /**
     * @var int
     */
    public $created = null;
    /**
     * @var int
     */
    public $updated = null;
    /**
     * @var int
     */
    public $deleted = null;
    /**
     * @var int
     */
    public $updateSequenceNum = null;
    /**
     * @var string
     */
    public $notebookGuid = null;
    /**
     * @var string[]
     */
    public $tagGuids = null;
    /**
     * @var \EDAM\Types\NoteAttributes
     */
    public $attributes = null;
    /**
     * @var string
     */
    public $largestResourceMime = null;
    /**
     * @var int
     */
    public $largestResourceSize = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['guid'])) {
                $this->guid = $vals['guid'];
            }
            if (isset($vals['title'])) {
                $this->title = $vals['title'];
            }
            if (isset($vals['contentLength'])) {
                $this->contentLength = $vals['contentLength'];
            }
            if (isset($vals['created'])) {
                $this->created = $vals['created'];
            }
            if (isset($vals['updated'])) {
                $this->updated = $vals['updated'];
            }
            if (isset($vals['deleted'])) {
                $this->deleted = $vals['deleted'];
            }
            if (isset($vals['updateSequenceNum'])) {
                $this->updateSequenceNum = $vals['updateSequenceNum'];
            }
            if (isset($vals['notebookGuid'])) {
                $this->notebookGuid = $vals['notebookGuid'];
            }
            if (isset($vals['tagGuids'])) {
                $this->tagGuids = $vals['tagGuids'];
            }
            if (isset($vals['attributes'])) {
                $this->attributes = $vals['attributes'];
            }
            if (isset($vals['largestResourceMime'])) {
                $this->largestResourceMime = $vals['largestResourceMime'];
            }
            if (isset($vals['largestResourceSize'])) {
                $this->largestResourceSize = $vals['largestResourceSize'];
            }
        }
    }

    public function getName()
    {
        return 'NoteMetadata';
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
                        $xfer += $input->readString($this->guid);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->title);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->contentLength);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->created);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->updated);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->deleted);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->updateSequenceNum);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 11:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->notebookGuid);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 12:
                    if ($ftype == TType::LST) {
                        $this->tagGuids = array();
                        $_size113 = 0;
                        $_etype116 = 0;
                        $xfer += $input->readListBegin($_etype116, $_size113);
                        for ($_i117 = 0; $_i117 < $_size113; ++$_i117) {
                            $elem118 = null;
                            $xfer += $input->readString($elem118);
                            $this->tagGuids []= $elem118;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 14:
                    if ($ftype == TType::STRUCT) {
                        $this->attributes = new \EDAM\Types\NoteAttributes();
                        $xfer += $this->attributes->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 20:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->largestResourceMime);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 21:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->largestResourceSize);
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
        $xfer += $output->writeStructBegin('NoteMetadata');
        if ($this->guid !== null) {
            $xfer += $output->writeFieldBegin('guid', TType::STRING, 1);
            $xfer += $output->writeString($this->guid);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->title !== null) {
            $xfer += $output->writeFieldBegin('title', TType::STRING, 2);
            $xfer += $output->writeString($this->title);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->contentLength !== null) {
            $xfer += $output->writeFieldBegin('contentLength', TType::I32, 5);
            $xfer += $output->writeI32($this->contentLength);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->created !== null) {
            $xfer += $output->writeFieldBegin('created', TType::I64, 6);
            $xfer += $output->writeI64($this->created);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->updated !== null) {
            $xfer += $output->writeFieldBegin('updated', TType::I64, 7);
            $xfer += $output->writeI64($this->updated);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->deleted !== null) {
            $xfer += $output->writeFieldBegin('deleted', TType::I64, 8);
            $xfer += $output->writeI64($this->deleted);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->updateSequenceNum !== null) {
            $xfer += $output->writeFieldBegin('updateSequenceNum', TType::I32, 10);
            $xfer += $output->writeI32($this->updateSequenceNum);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->notebookGuid !== null) {
            $xfer += $output->writeFieldBegin('notebookGuid', TType::STRING, 11);
            $xfer += $output->writeString($this->notebookGuid);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tagGuids !== null) {
            if (!is_array($this->tagGuids)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('tagGuids', TType::LST, 12);
            $output->writeListBegin(TType::STRING, count($this->tagGuids));
            foreach ($this->tagGuids as $iter119) {
                $xfer += $output->writeString($iter119);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->attributes !== null) {
            if (!is_object($this->attributes)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('attributes', TType::STRUCT, 14);
            $xfer += $this->attributes->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->largestResourceMime !== null) {
            $xfer += $output->writeFieldBegin('largestResourceMime', TType::STRING, 20);
            $xfer += $output->writeString($this->largestResourceMime);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->largestResourceSize !== null) {
            $xfer += $output->writeFieldBegin('largestResourceSize', TType::I32, 21);
            $xfer += $output->writeI32($this->largestResourceSize);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
