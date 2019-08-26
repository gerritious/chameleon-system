<?php

/*
 * This file is part of the Chameleon System (https://www.chameleonsystem.com).
 *
 * (c) ESONO AG (https://www.esono.de)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ChameleonSystem\DatabaseMigration\DataModel;

use JsonSerializable;

class MigrationResult implements JsonSerializable
{
    /**
     * @var string
     */
    private $responseStatus;
    /**
     * @var string
     */
    private $updateStatus;
    /**
     * @var string
     */
    private $fileContents;
    /**
     * @var string
     */
    private $message;
    /**
     * @var UpdateException[]
     */
    private $exceptions = array();
    /**
     * @var string
     */
    private $renderedExceptionsGlobal = '';
    /**
     * @var string
     */
    private $renderedExceptionsUpdate = '';
    /**
     * @var ErrorQuery[]
     */
    private $errorQueries = array();
    /**
     * @var string
     */
    private $renderedErrorQueriesGlobal = '';
    /**
     * @var string
     */
    private $renderedErrorQueriesUpdate = '';
    /**
     * @var UpdateMessage[]
     */
    private $infoMessages = array();
    /**
     * @var string
     */
    private $renderedInfoMessagesGlobal = '';
    /**
     * @var string
     */
    private $renderedInfoMessagesUpdate = '';
    /**
     * @var SuccessQuery[]
     */
    private $successQueries = array();
    /**
     * @var string
     */
    private $renderedSuccessQueriesUpdate = '';

    /**
     * @return string
     */
    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    /**
     * @param string $responseStatus
     */
    public function setResponseStatus($responseStatus)
    {
        $this->responseStatus = $responseStatus;
    }

    /**
     * @return string
     */
    public function getUpdateStatus()
    {
        return $this->updateStatus;
    }

    /**
     * @param string $updateStatus
     */
    public function setUpdateStatus($updateStatus)
    {
        $this->updateStatus = $updateStatus;
    }

    /**
     * @return string
     */
    public function getFileContents()
    {
        return $this->fileContents;
    }

    /**
     * @param string $fileContents
     */
    public function setFileContents($fileContents)
    {
        $this->fileContents = $fileContents;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return UpdateMessage[]
     */
    public function getInfoMessages()
    {
        return $this->infoMessages;
    }

    /**
     * @param UpdateMessage[] $infoMessages
     */
    public function setInfoMessages(array $infoMessages)
    {
        $this->infoMessages = $infoMessages;
    }

    /**
     * @return UpdateException[]
     */
    public function getExceptions()
    {
        return $this->exceptions;
    }

    /**
     * @param UpdateException[] $exceptions
     */
    public function setExceptions(array $exceptions)
    {
        $this->exceptions = $exceptions;
    }

    /**
     * @return SuccessQuery[]
     */
    public function getSuccessQueries()
    {
        return $this->successQueries;
    }

    /**
     * @param SuccessQuery[] $successQueries
     */
    public function setSuccessQueries(array $successQueries)
    {
        $this->successQueries = $successQueries;
    }

    /**
     * @return ErrorQuery[]
     */
    public function getErrorQueries()
    {
        return $this->errorQueries;
    }

    /**
     * @param ErrorQuery[] $errorQueries
     */
    public function setErrorQueries(array $errorQueries)
    {
        $this->errorQueries = $errorQueries;
    }

    /**
     * @return string
     */
    public function getRenderedExceptionsGlobal()
    {
        return $this->renderedExceptionsGlobal;
    }

    /**
     * @param string $renderedExceptionsGlobal
     */
    public function setRenderedExceptionsGlobal($renderedExceptionsGlobal)
    {
        $this->renderedExceptionsGlobal = $renderedExceptionsGlobal;
    }

    /**
     * @return string
     */
    public function getRenderedExceptionsUpdate()
    {
        return $this->renderedExceptionsUpdate;
    }

    /**
     * @param string $renderedExceptionsUpdate
     */
    public function setRenderedExceptionsUpdate($renderedExceptionsUpdate)
    {
        $this->renderedExceptionsUpdate = $renderedExceptionsUpdate;
    }

    /**
     * @return string
     */
    public function getRenderedErrorQueriesGlobal()
    {
        return $this->renderedErrorQueriesGlobal;
    }

    /**
     * @param string $renderedErrorQueriesGlobal
     */
    public function setRenderedErrorQueriesGlobal($renderedErrorQueriesGlobal)
    {
        $this->renderedErrorQueriesGlobal = $renderedErrorQueriesGlobal;
    }

    /**
     * @return string
     */
    public function getRenderedErrorQueriesUpdate()
    {
        return $this->renderedErrorQueriesUpdate;
    }

    /**
     * @param string $renderedErrorQueriesUpdate
     */
    public function setRenderedErrorQueriesUpdate($renderedErrorQueriesUpdate)
    {
        $this->renderedErrorQueriesUpdate = $renderedErrorQueriesUpdate;
    }

    /**
     * @return string
     */
    public function getRenderedInfoMessagesGlobal()
    {
        return $this->renderedInfoMessagesGlobal;
    }

    /**
     * @param string $renderedInfoMessagesGlobal
     */
    public function setRenderedInfoMessagesGlobal($renderedInfoMessagesGlobal)
    {
        $this->renderedInfoMessagesGlobal = $renderedInfoMessagesGlobal;
    }

    /**
     * @return string
     */
    public function getRenderedInfoMessagesUpdate()
    {
        return $this->renderedInfoMessagesUpdate;
    }

    /**
     * @param string $renderedInfoMessagesUpdate
     */
    public function setRenderedInfoMessagesUpdate($renderedInfoMessagesUpdate)
    {
        $this->renderedInfoMessagesUpdate = $renderedInfoMessagesUpdate;
    }

    /**
     * @return string
     */
    public function getRenderedSuccessQueriesUpdate()
    {
        return $this->renderedSuccessQueriesUpdate;
    }

    /**
     * @param string $renderedSuccessQueriesUpdate
     */
    public function setRenderedSuccessQueriesUpdate($renderedSuccessQueriesUpdate)
    {
        $this->renderedSuccessQueriesUpdate = $renderedSuccessQueriesUpdate;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
