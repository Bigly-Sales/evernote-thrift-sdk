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
 * An external image that can be shown with a related content snippet,
 * usually either a JPEG or PNG image. It is up to the client which image(s) are shown,
 * depending on available screen real estate, resolution and aspect ratio.
 * 
 * <dl>
 *  <dt>url</dt>
 *    <dd>The external URL of the image</dd>
 *  <dt>width</dt>
 *    <dd>The width of the image, in pixels.</dd>
 *  <dt>height</dt>
 *    <dd>The height of the image, in pixels.</dd>
 *  <dt>pixelRatio</dt>
 *    <dd>the pixel ratio (usually either 1.0, 1.5 or 2.0)</dd>
 *  <dt>fileSize</dt>
 *    <dd>the size of the image file, in bytes</dd>
 * </dl>
 */
class RelatedContentImage
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'url',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'width',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        3 => array(
            'var' => 'height',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        4 => array(
            'var' => 'pixelRatio',
            'isRequired' => false,
            'type' => TType::DOUBLE,
        ),
        5 => array(
            'var' => 'fileSize',
            'isRequired' => false,
            'type' => TType::I32,
        ),
    );

    /**
     * @var string
     */
    public $url = null;
    /**
     * @var int
     */
    public $width = null;
    /**
     * @var int
     */
    public $height = null;
    /**
     * @var double
     */
    public $pixelRatio = null;
    /**
     * @var int
     */
    public $fileSize = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['url'])) {
                $this->url = $vals['url'];
            }
            if (isset($vals['width'])) {
                $this->width = $vals['width'];
            }
            if (isset($vals['height'])) {
                $this->height = $vals['height'];
            }
            if (isset($vals['pixelRatio'])) {
                $this->pixelRatio = $vals['pixelRatio'];
            }
            if (isset($vals['fileSize'])) {
                $this->fileSize = $vals['fileSize'];
            }
        }
    }

    public function getName()
    {
        return 'RelatedContentImage';
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
                        $xfer += $input->readString($this->url);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->width);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->height);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::DOUBLE) {
                        $xfer += $input->readDouble($this->pixelRatio);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->fileSize);
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
        $xfer += $output->writeStructBegin('RelatedContentImage');
        if ($this->url !== null) {
            $xfer += $output->writeFieldBegin('url', TType::STRING, 1);
            $xfer += $output->writeString($this->url);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->width !== null) {
            $xfer += $output->writeFieldBegin('width', TType::I32, 2);
            $xfer += $output->writeI32($this->width);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->height !== null) {
            $xfer += $output->writeFieldBegin('height', TType::I32, 3);
            $xfer += $output->writeI32($this->height);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->pixelRatio !== null) {
            $xfer += $output->writeFieldBegin('pixelRatio', TType::DOUBLE, 4);
            $xfer += $output->writeDouble($this->pixelRatio);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->fileSize !== null) {
            $xfer += $output->writeFieldBegin('fileSize', TType::I32, 5);
            $xfer += $output->writeI32($this->fileSize);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
