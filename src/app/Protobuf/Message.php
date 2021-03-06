<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : protobuf.proto
 */


namespace app\Protobuf;

/**
 * Protobuf message : youwo.Message
 */
class Message extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * cmd_service required enum = 1
     *
     * @var \app\Protobuf\CMD_SERVICE
     */
    protected $cmd_service = null;

    /**
     * cmd_method required enum = 2
     *
     * @var \app\Protobuf\CMD_METHOD
     */
    protected $cmd_method = null;

    /**
     * token required int32 = 3
     *
     * @var int
     */
    protected $token = null;

    /**
     * request optional message = 4
     *
     * @var \app\Protobuf\Request
     */
    protected $request = null;

    /**
     * response optional message = 5
     *
     * @var \app\Protobuf\Response
     */
    protected $response = null;

    /**
     * Check if 'cmd_service' has a value
     *
     * @return bool
     */
    public function hasCmdService()
    {
        return $this->cmd_service !== null;
    }

    /**
     * Get 'cmd_service' value
     *
     * @return \app\Protobuf\CMD_SERVICE
     */
    public function getCmdService()
    {
        return $this->cmd_service;
    }

    /**
     * Set 'cmd_service' value
     *
     * @param \app\Protobuf\CMD_SERVICE $value
     */
    public function setCmdService(\app\Protobuf\CMD_SERVICE $value)
    {
        $this->cmd_service = $value;
    }

    /**
     * Check if 'cmd_method' has a value
     *
     * @return bool
     */
    public function hasCmdMethod()
    {
        return $this->cmd_method !== null;
    }

    /**
     * Get 'cmd_method' value
     *
     * @return \app\Protobuf\CMD_METHOD
     */
    public function getCmdMethod()
    {
        return $this->cmd_method;
    }

    /**
     * Set 'cmd_method' value
     *
     * @param \app\Protobuf\CMD_METHOD $value
     */
    public function setCmdMethod(\app\Protobuf\CMD_METHOD $value)
    {
        $this->cmd_method = $value;
    }

    /**
     * Check if 'token' has a value
     *
     * @return bool
     */
    public function hasToken()
    {
        return $this->token !== null;
    }

    /**
     * Get 'token' value
     *
     * @return int
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set 'token' value
     *
     * @param int $value
     */
    public function setToken($value)
    {
        $this->token = $value;
    }

    /**
     * Check if 'request' has a value
     *
     * @return bool
     */
    public function hasRequest()
    {
        return $this->request !== null;
    }

    /**
     * Get 'request' value
     *
     * @return \app\Protobuf\Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set 'request' value
     *
     * @param \app\Protobuf\Request $value
     */
    public function setRequest(\app\Protobuf\Request $value = null)
    {
        $this->request = $value;
    }

    /**
     * Check if 'response' has a value
     *
     * @return bool
     */
    public function hasResponse()
    {
        return $this->response !== null;
    }

    /**
     * Get 'response' value
     *
     * @return \app\Protobuf\Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set 'response' value
     *
     * @param \app\Protobuf\Response $value
     */
    public function setResponse(\app\Protobuf\Response $value = null)
    {
        $this->response = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        if ( ! isset($values['cmd_service'])) {
            throw new \InvalidArgumentException('Field "cmd_service" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['cmd_method'])) {
            throw new \InvalidArgumentException('Field "cmd_method" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['token'])) {
            throw new \InvalidArgumentException('Field "token" (tag 3) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'request' => null,
            'response' => null
        ], $values);

        $message->setCmdService($values['cmd_service']);
        $message->setCmdMethod($values['cmd_method']);
        $message->setToken($values['token']);
        $message->setRequest($values['request']);
        $message->setResponse($values['response']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Message',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'cmd_service',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.youwo.CMD_SERVICE'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'cmd_method',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.youwo.CMD_METHOD'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'token',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'request',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.youwo.Request'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'response',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.youwo.Response'
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->cmd_service === null) {
            throw new \UnexpectedValueException('Field "\\app\\Protobuf\\Message#cmd_service" (tag 1) is required but has no value.');
        }

        if ($this->cmd_method === null) {
            throw new \UnexpectedValueException('Field "\\app\\Protobuf\\Message#cmd_method" (tag 2) is required but has no value.');
        }

        if ($this->token === null) {
            throw new \UnexpectedValueException('Field "\\app\\Protobuf\\Message#token" (tag 3) is required but has no value.');
        }

        if ($this->cmd_service !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->cmd_service->value());
        }

        if ($this->cmd_method !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->cmd_method->value());
        }

        if ($this->token !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->token);
        }

        if ($this->request !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeVarint($stream, $this->request->serializedSize($sizeContext));
            $this->request->writeTo($context);
        }

        if ($this->response !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeVarint($stream, $this->response->serializedSize($sizeContext));
            $this->response->writeTo($context);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->cmd_service = \app\Protobuf\CMD_SERVICE::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->cmd_method = \app\Protobuf\CMD_METHOD::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->token = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \app\Protobuf\Request();

                $this->request = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \app\Protobuf\Response();

                $this->response = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->cmd_service !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->cmd_service->value());
        }

        if ($this->cmd_method !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->cmd_method->value());
        }

        if ($this->token !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->token);
        }

        if ($this->request !== null) {
            $innerSize = $this->request->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->response !== null) {
            $innerSize = $this->response->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->cmd_service = null;
        $this->cmd_method = null;
        $this->token = null;
        $this->request = null;
        $this->response = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \app\Protobuf\Message) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->cmd_service = ($message->cmd_service !== null) ? $message->cmd_service : $this->cmd_service;
        $this->cmd_method = ($message->cmd_method !== null) ? $message->cmd_method : $this->cmd_method;
        $this->token = ($message->token !== null) ? $message->token : $this->token;
        $this->request = ($message->request !== null) ? $message->request : $this->request;
        $this->response = ($message->response !== null) ? $message->response : $this->response;
    }


}

