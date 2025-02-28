<?php
namespace EDAM\Error;

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
 * This exception is thrown by EDAM procedures when a call fails as a result of
 * a problem in the service that could not be changed through caller action.
 * 
 * errorCode:  The numeric code indicating the type of error that occurred.
 *   must be one of the values of EDAMErrorCode.
 * 
 * message:  This may contain additional information about the error
 * 
 * rateLimitDuration:  Indicates the minimum number of seconds that an application should
 *   expect subsequent API calls for this user to fail. The application should not retry
 *   API requests for the user until at least this many seconds have passed. Present only
 *   when errorCode is RATE_LIMIT_REACHED,
 */
class EDAMSystemException extends TException
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'errorCode',
            'isRequired' => true,
            'type' => TType::I32,
            'class' => '\EDAM\Error\EDAMErrorCode',
        ),
        2 => array(
            'var' => 'message',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'rateLimitDuration',
            'isRequired' => false,
            'type' => TType::I32,
        ),
    );

    /**
     * @var int
     */
    public $errorCode = null;
    /**
     * @var string
     */
    public $message = null;
    /**
     * @var int
     */
    public $rateLimitDuration = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['errorCode'])) {
                $this->errorCode = $vals['errorCode'];
            }
            if (isset($vals['message'])) {
                $this->message = $vals['message'];
            }
            if (isset($vals['rateLimitDuration'])) {
                $this->rateLimitDuration = $vals['rateLimitDuration'];
            }
        }
    }

    public function getName()
    {
        return 'EDAMSystemException';
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
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->errorCode);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->message);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->rateLimitDuration);
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
        $xfer += $output->writeStructBegin('EDAMSystemException');
        if ($this->errorCode !== null) {
            $xfer += $output->writeFieldBegin('errorCode', TType::I32, 1);
            $xfer += $output->writeI32($this->errorCode);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->message !== null) {
            $xfer += $output->writeFieldBegin('message', TType::STRING, 2);
            $xfer += $output->writeString($this->message);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->rateLimitDuration !== null) {
            $xfer += $output->writeFieldBegin('rateLimitDuration', TType::I32, 3);
            $xfer += $output->writeI32($this->rateLimitDuration);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
